<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('memory_limit', '1024M');	
set_time_limit(0);
date_default_timezone_set('PRC');

class GitHubStarred {
	private array $config;
	private string $rootPath;
	private string $cachePath;
	private string $distPath;

	private bool $isDebug;

	public function __construct() {
		$this->config = require_once 'config.php';
		$this->initConfig();
	}

	private function initConfig(): void {
		$this->rootPath = $this->config['ROOT_PATH'];
		$this->cachePath = $this->config['CACHE_PATH'];
		$this->distPath = $this->config['DIST_PATH'];
		$this->isDebug = $this->config['DEBUG_MODE'] ?? false;

		if (empty($_SERVER['GH_TOKEN'] ?? $this->config['GH_TOKEN'])) {
			die('GH_TOKEN is required!');
		}

		foreach ([$this->cachePath, $this->distPath] as $dir) {
			is_dir($dir) or mkdir($dir, 0777, true);
		}
	}

	private function getGitHubHeaders(): array {
		return [
			'Accept: application/vnd.github+json',
			'Authorization: Bearer ' . ($_SERVER['GH_TOKEN'] ?? $this->config['GH_TOKEN']),
			'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
		];
	}

	public function run(): void {
		try {
			$listAll = $this->fetchStarredRepos(); // 获取仓库列表
			$listAll = $this->getReposDescription($listAll); // 获取仓库描述
			$this->saveResult($listAll); // 保存结果
			$this->generateMarkdown($listAll); // 生成markdown文件
		} catch (Exception $e) {
			echo sprintf("错误: %s\n", $e->getMessage());
		}
	}

	private function fetchStarredRepos(): array {
		$pageStart = $this->config['PAGE_START'] ?? 1;
		$pageEnd = $this->config['MAX_PAGES'] ?? 50;
		$pageLimit = $this->config['PAGE_LIMIT'] ?? 100;
		$pageChunk = $this->config['PAGE_CHUNK'] ?? 10;

		if ($this->isDebug) {
			echo "调试模式：只获取第一页，每页10个仓库\n";
			$pageLimit = 10;
			$pageEnd = 1;
		}
		echo "开始获取仓库信息...\n";
		$listAll = [];
		while($pageStart<=$pageEnd){
			$pageEndNow = min($pageStart + ($pageChunk-1), $pageEnd);
			$listPage=$this->getStarListMulti($pageStart, $pageEndNow, $pageLimit);
			if(empty($listPage)){
				break;
			}
			$listAll = array_merge($listAll,$listPage);
			$pageStart = $pageEndNow + 1;
		}
		file_put_contents($this->cachePath . 'repo_list.json', json_encode($listAll, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
		return $listAll;
	}



	private function getStarListMulti(int $pageStart, int $pageEnd, int $pageLimit): array {
		$chMulti = curl_multi_init();
		$handles = [];
		$listAll = [];
		echo sprintf("\t正在获取第 %d-%d 页数据...\n", $pageStart,$pageEnd);
		for($pageNow=$pageStart;$pageNow<=$pageEnd;$pageNow++){
			$url = sprintf(
				'https://api.github.com/users/%s/starred?per_page=%d&page=%d&sort=created&direction=asc',
				$_SERVER['GITHUB_ACTOR'] ?? $this->config['GITHUB_ACTOR'],
				$pageLimit,
				$pageNow
			);
			$ch = curl_init($url);
			curl_setopt_array($ch, [
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTPHEADER => $this->getGitHubHeaders(),
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_SSL_VERIFYPEER => false
			]);
			curl_multi_add_handle($chMulti, $ch);
			$handles[$pageNow] = $ch;
		}

		do {
			curl_multi_exec($chMulti, $running);
		} while ($running > 0);

		$listPage = [];
		foreach ($handles as $pageNow => $ch) {
			$response = curl_multi_getcontent($ch);
			$list = json_decode($response, true) ?: null;
			if (!array_is_list($list)) {
				die('列表获取失败:'.$response);
			}
			if(empty($list)){
				echo sprintf("\t\t第 %d 页没有数据\n", $pageNow);
				continue;
			}
			foreach ($list as &$item) {
				$item['language'] = $item['language'] ?? 'NaN';
				$item['_page'] = $pageNow;
				$item['_limit'] = $pageLimit;
				$item['_index'] = ($pageNow-1)*$pageLimit;
			}
			$listPage=array_merge($listPage,$list);
			file_put_contents($this->cachePath . '/repo_' . $pageNow . '.json', json_encode($list, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
		}

		return $listPage;
	}

	private function getReposDescription(array $listAll): array {
		// 检查调试模式
		if ($this->isDebug) {
			echo "\t调试模式：只处理前10个仓库的描述\n";
			$listAll = array_slice($listAll, 0, 10, true);
		}


		// 分批处理
		$contentList = array_column($listAll, 'full_name');
		$totalRepos = count($contentList);
		$batchSize = $this->isDebug ? 10 : 100;
		$batchList = array_chunk($contentList, $batchSize, true);
		
		// 获取可用模型列表
		$models = $_SERVER['GPT_MODELS'] ?? $this->config['GPT_MODELS'] ?? ['gpt-4', 'gpt-3.5-turbo'];
		if (is_string($models)) {
			$models = explode(',', $models);
		}
		$models = array_map('trim', $models);
		
		$currentModelIndex = 0; // 当前模型索引
		$maxRetries = count($models); // 最大重试次数
		$retryCount = 0; // 重试次数
		$hasValidDesc = false; // 是否有有效描述
		
		foreach ($batchList as $batchIndex => $batchContentList) {
			$startIndex = $batchIndex * $batchSize;
			$endIndex = min($startIndex + $batchSize, $totalRepos);
			echo sprintf("处理第 %d 批仓库 (%d-%d)...\n", 
				$batchIndex + 1, 
				$startIndex + 1, 
				$endIndex
			);
			
			do {
				$currentModel = $models[$currentModelIndex];
				echo sprintf("\t使用模型: %s\n", $currentModel);
				
				try {
					$descList = $this->askGptMulti($batchContentList, '', $currentModel);
					break;
				} catch (Exception $e) {
					$retryCount++;
					if ($retryCount >= $maxRetries) {
						throw new Exception("\t所有模型都尝试失败: " . $e->getMessage());
					}
					
					echo sprintf("\t模型 %s 失败，尝试下一个模型...\n", $currentModel);
					$currentModelIndex = ($currentModelIndex + 1) % count($models);
				}
			} while (true);
			
			// 处理当前批次的描述
			foreach ($batchContentList as $key => $content) {
				$desc = $descList[$key]['answer'] ?? '';
				if (empty($desc)) {
					echo sprintf("\t警告: 仓库 %s 未获取到描述\n", $content);
					continue;
				}
				$listAll[$key]['desc'] = $desc;
				$hasValidDesc = true;
			}
			
		}
		$cacheData = ['expire' => time() + 3600,'data' => $listAll];
		$cacheFile = $this->cachePath . 'repo_desc_list.json';
		file_put_contents($cacheFile,json_encode($cacheData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
		if ($hasValidDesc) {
			echo "所有批次处理完成\n";
		} else {
			echo "警告：未能获取到任何有效的描述\n";
		}
		return $listAll;
	}

	private function sortReposByLanguage(array $listAll): array {
		$sortedList = [];
		foreach ($listAll as $item) {
			$language = $item['language'] ?? 'Other';
			$sortedList[$language][] = $item;
		}
		ksort($sortedList, SORT_NATURAL | SORT_FLAG_CASE); // 语言A-Z排序
		foreach ($sortedList as &$repos) {
			usort($repos, function($a, $b) {
				return ($b['stargazers_count'] ?? 0) <=> ($a['stargazers_count'] ?? 0);
			});
		}
		unset($repos);
		return $sortedList;
	}

	private function saveResult(array $listAll): void {
		echo "正在保存结果到 JSON 文件...\n";
		file_put_contents(
			$this->distPath . 'starList.json',
			json_encode($listAll, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
		);
		copy($this->distPath . 'starList.json', $this->rootPath . '/starList.json');
		echo "JSON 文件保存完成\n";
	}

	private function generateMarkdown(array $listAll): void {

		$recentLimit = $this->config['RECENT_LIMIT'] ?? 10;
		$langLimit = $this->config['LANG_LIMIT'] ?? 20;

		$recentN = array_slice($listAll, -$recentLimit);
		$recentN = array_reverse($recentN);

		$listAll = $this->sortReposByLanguage($listAll);

		echo "正在生成 Markdown 文档...\n";
		$totalRepos = 0;
		$languageStats = [];
		foreach ($listAll as $language => $repos) {
			$languageStats[$language] = count($repos);
			$totalRepos += count($repos);
		}
		arsort($languageStats);

		// 计算 distPath 相对根目录的路径（去掉根路径前缀和开头的 / ）
		$distRelative = ltrim(str_replace($this->rootPath, '', $this->distPath), '/\\');

		// 统计信息
		$markdown = "# GitHub 收藏仓库\n\n";
		$markdown .= "- **编程语言种类：** " . count($languageStats) . "\n";
		$markdown .= "- **仓库总数：** " . $totalRepos . "\n";
		$markdown .= "- **最后更新时间：** " . date('Y-m-d H:i:s') . "\n\n";

		// 全部仓库链接（指向 dist 目录，动态路径）
		$markdown .= "[**→ 查看所有仓库**](" . $distRelative . "ALL.md)\n\n";

		// 最近N个
		$recentTitle = "最近收藏（{$recentLimit} 个）";
		$recentAnchor = $this->generateAnchor($recentTitle);
		$markdown .= "## {$recentTitle}\n\n";
		foreach ($recentN as $repo) {
			$desc = trim($repo['desc'] ?? $repo['description'] ?? '');
			if ($desc === '') $desc = '暂无描述。';
			$desc = str_replace("\r\n", "\n", $desc);
			$desc = str_replace("\r", "\n", $desc);
			$descLines = explode("\n", $desc);
			$desc = array_shift($descLines);
			if (count($descLines) > 0) {
				$desc .= "  \n" . implode("  \n", $descLines);
			}
			$topics = $repo['topics'] ?? [];
			$topicsLine = '';
			if (is_array($topics) && count($topics) > 0) {
				foreach ($topics as $topic) {
					$topicsLine .= sprintf(' [`%s`]', $topic);
				}
			}
			$markdown .= sprintf(
				"- [%s](%s) ★%d%s  \n  %s\n",
				$repo['full_name'],
				$repo['html_url'],
				$repo['stargazers_count'] ?? 0,
				$topicsLine,
				$desc
			);
		}
		$markdown .= "\n";

		// 目录
		$markdown .= "## 按语言分类\n";
		foreach ($listAll as $language => $repos) {
			$langTitle = $language;
			$langAnchor = $this->generateAnchor($langTitle);
			$markdown .= sprintf("- [%s（%d 个）](#%s)\n", $langTitle, count($repos), $langAnchor);
		}
		$markdown .= "\n";

		// 详细列表
		foreach ($listAll as $language => $repos) {
			$langTitle = $language;
			$langAnchor = $this->generateAnchor($langTitle);
			$markdown .= sprintf("## %s\n\n", $langTitle);
			$showCount = min($langLimit, count($repos));
			for ($i = 0; $i < $showCount; $i++) {
				$repo = $repos[$i];
				$desc = trim($repo['desc'] ?? $repo['description'] ?? '');
				if ($desc === '') $desc = '暂无描述。';
				$desc = str_replace("\r\n", "\n", $desc);
				$desc = str_replace("\r", "\n", $desc);
				$descLines = explode("\n", $desc);
				$desc = array_shift($descLines);
				if (count($descLines) > 0) {
					$desc .= "  \n" . implode("  \n", $descLines);
				}
				$topics = $repo['topics'] ?? [];
				$topicsLine = '';
				if (is_array($topics) && count($topics) > 0) {
					foreach ($topics as $topic) {
						$topicsLine .= sprintf(' [`%s`]', $topic);
					}
				}
				$markdown .= sprintf(
					"- [%s](%s) ★%d%s  \n  %s\n",
					$repo['full_name'],
					$repo['html_url'],
					$repo['stargazers_count'] ?? 0,
					$topicsLine,
					$desc
				);
			}
			// 如果有更多，添加子文件链接（指向 dist 目录，动态路径）
			if (count($repos) > $langLimit) {
				$subFile = 'LANG_' . preg_replace('/[^a-zA-Z0-9_\-]/', '_', $language) . '.md';
				$markdown .= sprintf("\n[查看更多 %s 仓库 →](%s%s)\n", $language, $distRelative, $subFile);
			}
			$markdown .= "\n";

			// 生成子文件（在 dist 目录下）
			if (count($repos) > $langLimit) {
				$subMarkdown = "# {$language} 仓库\n\n";
				foreach ($repos as $repo) {
					$desc = trim($repo['desc'] ?? $repo['description'] ?? '');
					if ($desc === '') $desc = '暂无描述。';
					$desc = str_replace("\r\n", "\n", $desc);
					$desc = str_replace("\r", "\n", $desc);
					$descLines = explode("\n", $desc);
					$desc = array_shift($descLines);
					if (count($descLines) > 0) {
						$desc .= "  \n" . implode("  \n", $descLines);
					}
					$topics = $repo['topics'] ?? [];
					$topicsLine = '';
					if (is_array($topics) && count($topics) > 0) {
						foreach ($topics as $topic) {
							$topicsLine .= sprintf(' [`%s`]', $topic);
						}
					}
					$subMarkdown .= sprintf(
						"- [%s](%s) ★%d%s  \n  %s\n",
						$repo['full_name'],
						$repo['html_url'],
						$repo['stargazers_count'] ?? 0,
						$topicsLine,
						$desc
					);
				}
				file_put_contents($this->distPath . '/' . $subFile, $subMarkdown);
			}
		}

		// 生成 ALL.md（在 dist 目录下）
		$allMarkdown = "# 所有收藏仓库\n\n";
		$allMarkdown .= "- **仓库总数：** " . $totalRepos . "\n";
		$allMarkdown .= "- **最后更新时间：** " . date('Y-m-d H:i:s') . "\n\n";
		$allRepos = [];
		foreach ($listAll as $repos) {
			foreach ($repos as $repo) {
				$allRepos[] = $repo;
			}
		}
		foreach ($allRepos as $repo) {
			$desc = trim($repo['desc'] ?? $repo['description'] ?? '');
			if ($desc === '') $desc = '暂无描述。';
			$desc = str_replace("\r\n", "\n", $desc);
			$desc = str_replace("\r", "\n", $desc);
			$descLines = explode("\n", $desc);
			$desc = array_shift($descLines);
			if (count($descLines) > 0) {
				$desc .= "  \n" . implode("  \n", $descLines);
			}
			$topics = $repo['topics'] ?? [];
			$topicsLine = '';
			if (is_array($topics) && count($topics) > 0) {
				foreach ($topics as $topic) {
					$topicsLine .= sprintf(' [`%s`]', $topic);
				}
			}
			$allMarkdown .= sprintf(
				"- [%s](%s) ★%d%s  \n  %s\n",
				$repo['full_name'],
				$repo['html_url'],
				$repo['stargazers_count'] ?? 0,
				$topicsLine,
				$desc
			);
		}
		file_put_contents($this->distPath . '/ALL.md', $allMarkdown);
		$markdown .= $this->config['INDEX_FOOTER'];  // 添加页脚
		file_put_contents($this->distPath . '/README.md', $markdown);  // 保存到dist目录存档
		copy($this->distPath . 'README.md', $this->rootPath . '/README.md'); // 复制到根目录
		echo "Markdown 文档生成完成\n";
	}

	// 生成中文锚点（适配github/typora等常见渲染器）
	private function generateAnchor(string $title): string {
		$anchor = $title;
		$anchor = preg_replace('/[（）\(\)\s]+/u', '-', $anchor); // 替换空格和中英文括号为-
		$anchor = preg_replace('/[^\p{L}\p{N}\-]+/u', '', $anchor); // 移除除字母数字-外的字符
		$anchor = trim($anchor, '-');
		$anchor = mb_strtolower($anchor);
		return $anchor;
	}

	private function askGptMulti(array $contentList, string $prompt = '', string $model = "gpt-4"): array {
		$apiKey = $_SERVER['GPT_KEY'] ?? $this->config['GPT_KEY'];
		$url = $_SERVER['GPT_URL'] ?? $this->config['GPT_URL'];
		$systemPrompt = $prompt?:($_SERVER['GPT_PROMPT'] ?? $this->config['GPT_PROMPT'] ?? '');
		
		if (empty($apiKey)) {
			throw new Exception("GPT_KEY 未设置");
		}
		
		if (empty($url)) {
			throw new Exception("GPT_URL 未设置");
		}

		if (empty($systemPrompt)) {
			throw new Exception("GPT_PROMPT 未设置");
		}

		$headers = [
			"Content-Type: application/json",
			"Authorization: Bearer " . $apiKey
		];

		$chMulti = curl_multi_init();
		$handles = [];
		$results = [];
		$retryCount = 3; // 重试次数
		$retryDelay = 2; // 重试延迟

		$cacheDir = $this->cachePath . 'api'; // 单独缓存
		is_dir($cacheDir) or mkdir($cacheDir, 0777, true);

		$totalRequests = count($contentList); // 总请求数
		$cachedCount = 0; // 缓存数
		$apiRequests = 0; // API请求数

		do {
			if ($retryCount < 3) {
				echo sprintf("\t等待 %d 秒后重试...\n", $retryDelay);
				sleep($retryDelay);
			}

			foreach ($contentList as $id => $content) {
				$cacheFile = $cacheDir . '/' . md5($content) . '.json';

				// 非调试模式下检查缓存
				if (!$this->isDebug && file_exists($cacheFile)) {
					$cacheData = json_decode(file_get_contents($cacheFile), true);
					if ($cacheData && isset($cacheData['expire']) && $cacheData['expire'] > time()) {
						$cachedCount++;
						$results[$id] = $cacheData['data'];
						continue;
					}
				}

				// 无缓存，构造curl请求
				$apiRequests++;
				$data = [
					"model" => $model,
					"messages" => [
						[
							"role" => "system",
							"content" => $systemPrompt
						],
						[
							"role" => "user",
							"content" => $content
						]
					]
				];

				$ch = curl_init($url);
				curl_setopt_array($ch, [
					CURLOPT_TIMEOUT => 30,
					CURLOPT_POST => true,
					CURLOPT_POSTFIELDS => json_encode($data),
					CURLOPT_HTTPHEADER => $headers,
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_SSL_VERIFYPEER => false
				]);

				curl_multi_add_handle($chMulti, $ch);
				$handles[$id] = $ch;
			}

			// 全部命中缓存，则直接返回
			if(empty($handles)){
				curl_multi_close($chMulti);
				break;
			}

			do {
				curl_multi_exec($chMulti, $running);
			} while ($running > 0);

			$needRetry = false;
			foreach ($handles as $id => $ch) {
				$response = curl_multi_getcontent($ch);
				$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
				$error = curl_error($ch);
				
				if ($error) {
					echo sprintf("\t请求错误: %s", $error);
					$needRetry = true;
					break;
				}
				
				if ($httpCode !== 200) {
					if ($response) {
						$errorData = json_decode($response, true);
						if ($errorData && isset($errorData['error'])) {
							echo sprintf("\tAPI 错误: %s", json_encode($errorData['error'], JSON_UNESCAPED_UNICODE));
							$needRetry = true;
							break;
						}
					}
					echo sprintf("\tHTTP 错误: 状态码 %d", $httpCode);
					$needRetry = true;
					break;
				}

				$body = json_decode($response, true);
				if (json_last_error() !== JSON_ERROR_NONE) {
					echo sprintf("JSON 解析错误: %s", json_last_error_msg());
					echo sprintf("原始响应: %s", $response);
					$needRetry = true;
					break;
				}

				if (!isset($body['choices'][0]['message']['content'])) {
					echo sprintf("响应格式错误: %s", $response);
					$needRetry = true;
					break;
				}

				$result = [
					'question' => $contentList[$id],
					'answer' => $body['choices'][0]['message']['content'],
					'error' => $error ?: ($body['error'] ?? ''),
					'code' => $httpCode
				];
				
				if (empty($result['answer'])) {
					echo sprintf("响应为空: %s", $response);
					$needRetry = true;
					break;
				}

				// 无论是否调试模式，都保存缓存
				if ($httpCode === 200 && !empty($result['answer'])) {
					$cacheData = [
						'expire' => empty($this->config['DESC_TIME'])?9999999999:(time() + $this->config['DESC_TIME']),
						'data' => $result
					];
					$cacheFile = $cacheDir . '/' . md5($contentList[$id]) . '.json';
					file_put_contents(
						$cacheFile,
						json_encode($cacheData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
					);
					if ($this->isDebug) {
						echo sprintf("\t调试模式：已保存缓存 %s", $contentList[$id]);
					}
				}
				
				$results[$id] = $result;
				curl_multi_remove_handle($chMulti, $ch);
			}

			curl_multi_close($chMulti);

			if ($needRetry && $retryCount > 0) {
				$retryCount--;
				$retryDelay *= 2;
				throw new Exception("需要重试");
			}

			break;
		} while (true);

		echo sprintf("\t处理完成: 总数 %d, 缓存 %d, API %d\n", 
			$totalRequests, 
			$cachedCount, 
			$apiRequests
		);

		return $results;
	}
}

try {
	$app = new GitHubStarred();
	$app->run();
} catch (Exception $e) {
	echo "错误: " . $e->getMessage() . "\n";
	exit(1);
}
