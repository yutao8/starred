<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('memory_limit', '1024M');	
set_time_limit(0);
date_default_timezone_set('Asia/Shanghai');

class GitHubStarred
{
	private array $config;
	private string $rootPath;
	private string $cachePath;
	private string $distPath;

	private bool $isDebug;

	public function __construct()
	{
		$this->config = require_once 'config.php';
		$this->initConfig();
	}

	private function initConfig(): void
	{
		$this->rootPath = $this->config['ROOT_PATH'];
		$this->cachePath = $this->config['CACHE_PATH'];
		$this->distPath = $this->config['DIST_PATH'];
		$this->isDebug = $this->config['DEBUG_MODE'] ?? false;

		if (empty($_SERVER['GH_TOKEN'] ?? $this->config['GH_TOKEN'])) {
			die('GH_TOKEN is required!');
		}

		foreach ([$this->cachePath, $this->distPath] as $directory) {
			if (!is_dir($directory)) {
				mkdir($directory, 0777, true);
			}
		}
	}

	private function getGitHubHeaders(): array
	{
		return [
			'Accept: application/vnd.github+json',
			'Authorization: Bearer ' . ($_SERVER['GH_TOKEN'] ?? $this->config['GH_TOKEN']),
			'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
		];
	}

	private function getBaseCurlOptions(int $timeout = 30): array
	{
		$requestTimeout = (int)($this->config['CURL_TIMEOUT'] ?? $timeout);
		$connectTimeout = (int)($this->config['CURL_CONNECT_TIMEOUT'] ?? 5);

		$options = [
			CURLOPT_TIMEOUT => max(1, $requestTimeout),
			CURLOPT_CONNECTTIMEOUT => max(1, $connectTimeout),
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		];

		if (defined('CURLOPT_SSL_ENABLE_ALPN')) {
			$options[CURLOPT_SSL_ENABLE_ALPN] = false;
		}

		$proxy = trim((string)($this->config['CURL_PROXY'] ?? ''));
		if ($proxy !== '') {
			$proxyType = (string)($this->config['CURL_PROXY_TYPE'] ?? 'http');
			$options[CURLOPT_PROXY] = $this->normalizeCurlProxy($proxy, $proxyType);
			$options[CURLOPT_PROXYTYPE] = $this->resolveCurlProxyType($proxyType);
		} else {
			// 明确禁用 libcurl 从 HTTP_PROXY/HTTPS_PROXY 等环境变量继承代理。
			$options[CURLOPT_PROXY] = '';
			$options[CURLOPT_NOPROXY] = '*';
		}

		if (!empty($this->config['CURL_IPRESOLVE_V4'])) {
			$options[CURLOPT_IPRESOLVE] = CURL_IPRESOLVE_V4;
		}

		return $options;
	}

	private function resolveCurlProxyType(string $proxyType): int
	{
		return match (strtolower(trim($proxyType))) {
			'socks5' => CURLPROXY_SOCKS5,
			'socks5h', 'socks5_hostname' => CURLPROXY_SOCKS5_HOSTNAME,
			default => CURLPROXY_HTTP,
		};
	}

	private function normalizeCurlProxy(string $proxy, string $proxyType): string
	{
		$proxy = trim($proxy);
		$proxyType = strtolower(trim($proxyType));

		if (str_starts_with($proxyType, 'socks')) {
			return preg_replace('#^[a-z0-9]+://#i', '', $proxy) ?? $proxy;
		}

		if (!preg_match('#^[a-z0-9]+://#i', $proxy)) {
			return 'http://' . $proxy;
		}

		return $proxy;
	}

	public function run(): void
	{
		$repos = $this->fetchStarredRepos(); // 获取仓库列表
		$repos = $this->getReposDescription($repos); // 获取仓库描述
		$this->saveResult($repos); // 保存结果
		$this->generateMarkdown($repos); // 生成markdown文件
	}

	private function fetchStarredRepos(): array
	{
		$pageStart = $this->config['PAGE_START'] ?? 1;
		$pageEnd = $this->config['PAGE_END'] ?? 50;
		$pageLimit = $this->config['PAGE_LIMIT'] ?? 100;
		$pageChunk = $this->config['PAGE_CHUNK'] ?? 10;

		if ($this->isDebug) {
			echo "调试模式：只获取第一页，每页10个仓库\n";
			$pageLimit = 10;
			$pageEnd = 1;
		}

		echo "开始获取仓库信息...\n";
		$repos = [];
		while ($pageStart <= $pageEnd) {
			$chunkPageEnd = min($pageStart + ($pageChunk - 1), $pageEnd);
			$pageRepos = $this->getStarListMulti($pageStart, $chunkPageEnd, $pageLimit);
			if (empty($pageRepos)) {
				break;
			}
			$repos = array_merge($repos, $pageRepos);
			$pageStart = $chunkPageEnd + 1;
		}

		$this->writeJsonFile($this->cachePath . 'repo_list.json', $repos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		return $repos;
	}

	private function getStarListMulti(int $pageStart, int $pageEnd, int $pageLimit): array
	{
		$multiHandle = curl_multi_init();
		$handles = [];
		echo sprintf("\t正在获取第 %d-%d 页数据...\n", $pageStart, $pageEnd);
		for ($page = $pageStart; $page <= $pageEnd; $page++) {
			$url = sprintf(
				'https://api.github.com/users/%s/starred?per_page=%d&page=%d&sort=created&direction=asc',
				$_SERVER['GITHUB_ACTOR'] ?? $this->config['GITHUB_ACTOR'],
				$pageLimit,
				$page
			);
			$curlHandle = curl_init($url);
			curl_setopt_array($curlHandle, $this->getBaseCurlOptions() + [
				CURLOPT_HTTPHEADER => $this->getGitHubHeaders(),
			]);
			curl_multi_add_handle($multiHandle, $curlHandle);
			$handles[$page] = $curlHandle;
		}

		$resultCodes = $this->executeCurlMulti($multiHandle, 'GitHub 批量请求执行失败');

		$pageRepos = [];
		foreach ($handles as $page => $curlHandle) {
			$response = curl_multi_getcontent($curlHandle);
			$httpCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
			$error = curl_error($curlHandle);
			$errno = curl_errno($curlHandle);
			$resultCode = $resultCodes[spl_object_id($curlHandle)] ?? CURLE_OK;
			$errorMessage = $this->buildCurlErrorMessage($curlHandle, sprintf('第 %d 页请求失败', $page), $response, $resultCode);
			curl_multi_remove_handle($multiHandle, $curlHandle);
			curl_close($curlHandle);

			if ($resultCode !== CURLE_OK || $errno !== 0 || $error !== '') {
				throw new Exception($errorMessage);
			}
			if ($httpCode !== 200) {
				throw new Exception($errorMessage);
			}

			$repos = json_decode($response, true) ?: [];
			if (!array_is_list($repos)) {
				throw new Exception('列表获取失败:' . $response);
			}
			if (empty($repos)) {
				echo sprintf("\t\t第 %d 页没有数据\n", $page);
				continue;
			}
			foreach ($repos as &$repo) {
				$repo['language'] = $repo['language'] ?? 'NaN';
				$repo['_page'] = $page;
				$repo['_limit'] = $pageLimit;
				$repo['_index'] = ($page - 1) * $pageLimit;
			}
			unset($repo);

			$pageRepos = array_merge($pageRepos, $repos);
			$this->writeJsonFile($this->cachePath . '/repo_' . $page . '.json', $repos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		}
		curl_multi_close($multiHandle);

		return $pageRepos;
	}

	private function getReposDescription(array $repos): array
	{
		// 检查调试模式
		if ($this->isDebug) {
			echo "\t调试模式：只处理前10个仓库的描述\n";
			$repos = array_slice($repos, 0, 10, true);
		}

		// 分批处理
		$repoNames = array_column($repos, 'full_name');
		$totalRepos = count($repoNames);
		$batchSize = $this->isDebug ? 10 : 100;
		$repoNameBatches = array_chunk($repoNames, $batchSize, true);
		
		$providers = $this->getGptProviders();
		$maxProviderAttempts = count($providers); // 每批最多尝试的 provider/model 数
		$lastSuccessfulProviderIndex = 0; // 本次运行内记住最近可用的 provider/model
		$hasValidDesc = false; // 是否有有效描述
		
		foreach ($repoNameBatches as $batchIndex => $batchRepoNames) {
			$currentProviderIndex = $lastSuccessfulProviderIndex; // 优先使用上次成功的 provider/model
			$providerAttemptCount = 0; // 每批独立统计尝试次数
			$startIndex = $batchIndex * $batchSize;
			$endIndex = min($startIndex + $batchSize, $totalRepos);
			echo sprintf("处理第 %d 批仓库 (%d-%d)...\n", 
				$batchIndex + 1, 
				$startIndex + 1, 
				$endIndex
			);
			
			do {
				$currentProvider = $providers[$currentProviderIndex];
				echo sprintf("\t使用模型: %s/%s\n", $currentProvider['name'], $currentProvider['model']);
				
				try {
					$descriptionResults = $this->askGptMulti($batchRepoNames, '', $currentProvider);
					$lastSuccessfulProviderIndex = $currentProviderIndex;
					break;
				} catch (Exception $e) {
					$providerAttemptCount++;
					if ($providerAttemptCount >= $maxProviderAttempts) {
						throw new Exception("\t所有模型都尝试失败: " . $e->getMessage());
					}
					
					echo sprintf("\t模型 %s/%s 失败，尝试下一个模型...\n", $currentProvider['name'], $currentProvider['model']);
					$currentProviderIndex = ($currentProviderIndex + 1) % count($providers);
				}
			} while (true);
			
			// 处理当前批次的描述
			foreach ($batchRepoNames as $repoIndex => $repoName) {
				$description = $descriptionResults[$repoIndex]['answer'] ?? '';
				$description = $this->sanitizeDescription($description);
				if ($description === '') {
					echo sprintf("\t警告: 仓库 %s 未获取到描述\n", $repoName);
					continue;
				}
				$repos[$repoIndex]['desc'] = $description;
				$hasValidDesc = true;
			}
			
		}
		$cacheData = ['expire' => time() + 3600, 'data' => $repos];
		$cacheFile = $this->cachePath . 'repo_desc_list.json';
		$this->writeJsonFile($cacheFile, $cacheData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		if ($hasValidDesc) {
			echo "所有批次处理完成\n";
		} else {
			echo "警告：未能获取到任何有效的描述\n";
		}
		return $repos;
	}

	private function sortReposByLanguage(array $repos): array
	{
		$sortedList = [];
		foreach ($repos as $repo) {
			$language = $repo['language'] ?? 'Other';
			$sortedList[$language][] = $repo;
		}
		ksort($sortedList, SORT_NATURAL | SORT_FLAG_CASE); // 语言A-Z排序
		foreach ($sortedList as &$languageRepos) {
			usort($languageRepos, static function ($a, $b) {
				return ($b['stargazers_count'] ?? 0) <=> ($a['stargazers_count'] ?? 0);
			});
		}
		unset($languageRepos);
		return $sortedList;
	}

	private function saveResult(array $repos): void
	{
		echo "正在保存结果到 JSON 文件...\n";
		$this->writeJsonFile(
			$this->distPath . 'starList.json',
			$repos,
			JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
		);
		$this->copyFile($this->distPath . 'starList.json', $this->rootPath . '/starList.json');
		$publicRepos = array_map([$this, 'buildPublicRepo'], $repos);
		$this->writeJsonFile(
			$this->distPath . 'starList.public.json',
			$publicRepos,
			JSON_UNESCAPED_UNICODE
		);
		$this->copyFile($this->distPath . 'starList.public.json', $this->rootPath . '/starList.public.json');
		echo "JSON 文件保存完成\n";
	}

	private function buildPublicRepo(array $repo): array
	{
		return [
			'id' => $repo['id'] ?? null,
			'name' => $repo['name'] ?? '',
			'full_name' => $repo['full_name'] ?? '',
			'html_url' => $repo['html_url'] ?? '',
			'homepage' => $repo['homepage'] ?? '',
			'description' => $this->sanitizeDescription($repo['description'] ?? ''),
			'desc' => $this->sanitizeDescription($repo['desc'] ?? ''),
			'language' => $repo['language'] ?? 'Other',
			'topics' => is_array($repo['topics'] ?? null) ? array_values($repo['topics']) : [],
			'stargazers_count' => $repo['stargazers_count'] ?? 0,
			'forks_count' => $repo['forks_count'] ?? 0,
			'watchers_count' => $repo['watchers_count'] ?? 0,
			'open_issues_count' => $repo['open_issues_count'] ?? 0,
			'size' => $repo['size'] ?? 0,
			'default_branch' => $repo['default_branch'] ?? '',
			'visibility' => $repo['visibility'] ?? '',
			'is_template' => $repo['is_template'] ?? false,
			'allow_forking' => $repo['allow_forking'] ?? false,
			'fork' => $repo['fork'] ?? false,
			'archived' => $repo['archived'] ?? false,
			'has_wiki' => $repo['has_wiki'] ?? false,
			'license' => $repo['license'] ?? null,
			'owner' => [
				'login' => $repo['owner']['login'] ?? '',
				'avatar_url' => $repo['owner']['avatar_url'] ?? '',
			],
			'updated_at' => $repo['updated_at'] ?? '',
			'pushed_at' => $repo['pushed_at'] ?? '',
			'created_at' => $repo['created_at'] ?? '',
		];
	}

	private function generateMarkdown(array $repos): void
	{
		$recentLimit = $this->config['RECENT_LIMIT'] ?? 10;
		$langLimit = $this->config['LANG_LIMIT'] ?? 20;

		$recentRepos = array_slice($repos, -$recentLimit);
		$recentRepos = array_reverse($recentRepos);

		$reposByLanguage = $this->sortReposByLanguage($repos);

		echo "正在生成 Markdown 文档...\n";
		$totalRepos = 0;
		$languageStats = [];
		foreach ($reposByLanguage as $language => $languageRepos) {
			$languageStats[$language] = count($languageRepos);
			$totalRepos += count($languageRepos);
		}
		arsort($languageStats);
		$languageAnchors = $this->buildLanguageAnchors(array_keys($reposByLanguage));

		// 计算 distPath 相对根目录的路径（去掉根路径前缀和开头的 / ）
		$distRelative = ltrim(str_replace($this->rootPath, '', $this->distPath), '/\\');

		// 统计信息
		$markdown = "# GitHub 收藏仓库\n\n";
		$markdown .= "- **编程语言种类：** " . count($languageStats) . "\n";
		$markdown .= "- **仓库总数：** " . $totalRepos . "\n";
		$markdown .= "- **最后更新时间：** " . date('Y-m-d H:i:s') . "\n\n";

		// 全部仓库链接（指向 dist 目录，动态路径）
		$markdown .= "[**→ 查看所有仓库**](" . $distRelative . "ALL.md)  \n";
		$markdown .= "[**→ 部署文档**](DEPLOY.md)\n\n";

		// 最近N个
		$recentTitle = "最近收藏（{$recentLimit} 个）";
		$markdown .= "## {$recentTitle}\n\n";
		foreach ($recentRepos as $repo) {
			$markdown .= $this->renderRepoMarkdownItem($repo);
		}
		$markdown .= "\n";

		// 目录
		$markdown .= "## 按语言分类\n";
		foreach ($reposByLanguage as $language => $languageRepos) {
			$langTitle = $language;
			$langAnchor = $languageAnchors[$language] ?? $this->buildLanguageAnchor($langTitle);
			$markdown .= sprintf("- [%s（%d 个）](#%s)\n", $langTitle, count($languageRepos), $langAnchor);
		}
		$markdown .= "\n";

		// 详细列表
		foreach ($reposByLanguage as $language => $languageRepos) {
			$langTitle = $language;
			$langAnchor = $languageAnchors[$language] ?? $this->buildLanguageAnchor($langTitle);
			$markdown .= sprintf("<a id=\"%s\"></a>\n", $langAnchor);
			$markdown .= sprintf("## %s\n\n", $langTitle);
			$showCount = min($langLimit, count($languageRepos));
			for ($i = 0; $i < $showCount; $i++) {
				$markdown .= $this->renderRepoMarkdownItem($languageRepos[$i]);
			}
			// 如果有更多，添加子文件链接（指向 dist 目录，动态路径）
			if (count($languageRepos) > $langLimit) {
				$subFile = 'LANG_' . preg_replace('/[^a-zA-Z0-9_\-]/', '_', $language) . '.md';
				$markdown .= sprintf("\n[查看更多 %s 仓库 →](%s%s)\n", $language, $distRelative, $subFile);
			}
			$markdown .= "\n";

			// 生成子文件（在 dist 目录下）
			if (count($languageRepos) > $langLimit) {
				$subMarkdown = "# {$language} 仓库\n\n";
				foreach ($languageRepos as $repo) {
					$subMarkdown .= $this->renderRepoMarkdownItem($repo);
				}
				$this->writeTextFile($this->distPath . '/' . $subFile, $subMarkdown);
			}
		}

		// 生成 ALL.md（在 dist 目录下）
		$allMarkdown = "# 所有收藏仓库\n\n";
		$allMarkdown .= "- **仓库总数：** " . $totalRepos . "\n";
		$allMarkdown .= "- **最后更新时间：** " . date('Y-m-d H:i:s') . "\n\n";
		$allRepos = [];
		foreach ($reposByLanguage as $languageRepos) {
			foreach ($languageRepos as $repo) {
				$allRepos[] = $repo;
			}
		}
		foreach ($allRepos as $repo) {
			$allMarkdown .= $this->renderRepoMarkdownItem($repo);
		}
		$this->writeTextFile($this->distPath . '/ALL.md', $allMarkdown);
		$markdown .= $this->config['INDEX_FOOTER'];  // 添加页脚
		$this->writeTextFile($this->distPath . '/README.md', $markdown);  // 保存到dist目录存档
		$this->copyFile($this->distPath . 'README.md', $this->rootPath . '/README.md'); // 复制到根目录
		echo "Markdown 文档生成完成\n";
	}

	private function renderRepoMarkdownItem(array $repo): string
	{
		$description = $this->formatMarkdownDescription($repo['desc'] ?? $repo['description'] ?? '');
		$topicsLine = $this->renderTopicsMarkdown($repo['topics'] ?? []);

		return sprintf(
			"- [%s](%s) ★%d%s  \n  %s\n",
			$repo['full_name'] ?? $repo['name'] ?? '',
			$repo['html_url'] ?? '',
			$repo['stargazers_count'] ?? 0,
			$topicsLine,
			$description
		);
	}

	private function renderTopicsMarkdown($topics): string
	{
		if (!is_array($topics)) {
			return '';
		}

		$topicsLine = '';
		foreach ($topics as $topic) {
			$topic = trim((string)$topic);
			if ($topic === '') {
				continue;
			}
			$topic = str_replace('`', '', $topic);
			$topicsLine .= sprintf(' [`%s`]', $topic);
		}
		return $topicsLine;
	}

	private function formatMarkdownDescription(string $description): string
	{
		$description = $this->sanitizeDescription($description);
		if ($description === '') {
			return '暂无描述。';
		}

		$description = str_replace("\r\n", "\n", $description);
		$description = str_replace("\r", "\n", $description);
		$descriptionLines = array_filter(array_map('trim', explode("\n", $description)), static function ($line) {
			return $line !== '';
		});

		if (empty($descriptionLines)) {
			return '暂无描述。';
		}

		return implode("  \n", $descriptionLines);
	}

	private function sanitizeDescription(?string $description): string
	{
		$description = trim((string)$description);
		if ($description === '') {
			return '';
		}

		$description = str_replace(["\r\n", "\r"], "\n", $description);
		$description = preg_replace('/<\|[^|]*\|>/u', '', $description) ?? $description;
		$description = preg_replace('/\b(?:assistant|analysis|commentary|tool_code|tool_outputs?|repo_browser|functions|multi_tool_use)\b\s*(?:to=[^\s]+)?/iu', '', $description) ?? $description;
		$description = preg_replace('/^\s*(?:code|json|php|js|javascript)\s*$/imu', '', $description) ?? $description;
		$description = preg_replace('/[`]{3,}/u', '', $description) ?? $description;
		$description = preg_replace('/[ \t]+/u', ' ', $description) ?? $description;
		$description = preg_replace("/\n{3,}/u", "\n\n", $description) ?? $description;
		$description = trim($description);

		$maxLength = $this->config['DESC_MAX_LENGTH'] ?? 500;
		if (mb_strlen($description) > $maxLength) {
			$description = mb_substr($description, 0, $maxLength) . '...';
		}

		return $description;
	}

	private function buildLanguageAnchors(array $languages): array
	{
		$anchors = [];
		$usedAnchors = [];

		foreach ($languages as $language) {
			$baseAnchor = $this->buildLanguageAnchor($language);
			$anchor = $baseAnchor;
			$index = 2;

			while (isset($usedAnchors[$anchor])) {
				$anchor = $baseAnchor . '-' . $index;
				$index++;
			}

			$usedAnchors[$anchor] = true;
			$anchors[$language] = $anchor;
		}

		return $anchors;
	}

	private function buildLanguageAnchor(string $title): string
	{
		$normalizedTitle = mb_strtolower(trim($title));
		$aliasMap = [
			'c#' => 'lang-c-sharp',
			'c++' => 'lang-cpp',
			'objective-c' => 'lang-objective-c',
			'objective-c++' => 'lang-objective-cpp',
			'jupyter notebook' => 'lang-jupyter-notebook',
			'rich text format' => 'lang-rich-text-format',
			'visual basic' => 'lang-visual-basic',
			'vim script' => 'lang-vim-script',
			'classic asp' => 'lang-classic-asp',
		];

		if (isset($aliasMap[$normalizedTitle])) {
			return $aliasMap[$normalizedTitle];
		}

		$anchor = preg_replace('/[（）\(\)\s\/+]+/u', '-', $normalizedTitle) ?? $normalizedTitle;
		$anchor = preg_replace('/[^\p{L}\p{N}\-]+/u', '', $anchor) ?? $anchor;
		$anchor = trim($anchor, '-');

		if ($anchor === '') {
			$anchor = 'lang-other';
		}

		return 'lang-' . $anchor;
	}

	private function askGptMulti(array $repoNames, string $prompt, array $provider): array
	{
		$providerName = $provider['name'] ?? 'default';
		$model = $provider['model'] ?? 'gpt-4';
		$apiKey = $provider['key'] ?? '';
		$url = $provider['url'] ?? '';
		$systemPrompt = $prompt ?: ($_SERVER['GPT_PROMPT'] ?? $this->config['GPT_PROMPT'] ?? '');
		
		if (empty($apiKey)) {
			throw new Exception("GPT_PROVIDERS key 未设置: " . $providerName);
		}
		
		if (empty($url)) {
			throw new Exception("GPT_PROVIDERS url 未设置: " . $providerName);
		}

		if (empty($systemPrompt)) {
			throw new Exception("GPT_PROMPT 未设置");
		}

		$headers = [
			"Content-Type: application/json",
			"Authorization: Bearer " . $apiKey
		];

		$results = [];
		$maxRetryCount = 3; // 重试次数
		$retryDelay = 2; // 重试延迟

		$cacheDir = $this->cachePath . 'api'; // 单独缓存
		if (!is_dir($cacheDir)) {
			mkdir($cacheDir, 0777, true);
		}

		$totalRequests = count($repoNames); // 总请求数
		$cachedCount = 0; // 缓存数
		$apiRequests = 0; // API请求数，含重试
		$pendingRepoNames = [];

		foreach ($repoNames as $repoIndex => $repoName) {
			$cacheFile = $cacheDir . '/' . $this->buildDescCacheKey($repoName, $systemPrompt, $provider) . '.json';

			// 非调试模式下检查缓存
			if (!$this->isDebug && file_exists($cacheFile)) {
				$cacheData = json_decode(file_get_contents($cacheFile), true);
				if ($cacheData && isset($cacheData['expire']) && $cacheData['expire'] > time()) {
					$cachedCount++;
					$results[$repoIndex] = $cacheData['data'];
					continue;
				}
			}
			$pendingRepoNames[$repoIndex] = $repoName;
		}

		if (empty($pendingRepoNames)) {
			echo sprintf("\t处理完成: 总数 %d, 缓存 %d, API %d\n",
				$totalRequests,
				$cachedCount,
				$apiRequests
			);
			return $results;
		}

		for ($attempt = 1; $attempt <= $maxRetryCount; $attempt++) {
			if ($attempt > 1) {
				echo sprintf("\t等待 %d 秒后重试...\n", $retryDelay);
				sleep($retryDelay);
				$retryDelay *= 2;
			}

			$multiHandle = curl_multi_init();
			$handles = [];

			foreach ($pendingRepoNames as $repoIndex => $repoName) {
				$apiRequests++;
				$payload = $this->buildOpenAiChatPayload($model, $systemPrompt, $repoName);

				$curlHandle = curl_init($url);
				curl_setopt_array($curlHandle, $this->getBaseCurlOptions() + [
					CURLOPT_POST => true,
					CURLOPT_POSTFIELDS => json_encode($payload),
					CURLOPT_HTTPHEADER => $headers,
				]);

				curl_multi_add_handle($multiHandle, $curlHandle);
				$handles[$repoIndex] = $curlHandle;
			}

			$resultCodes = $this->executeCurlMulti($multiHandle, 'GPT 批量请求执行失败');

			$failedRepoNames = [];
			$lastError = '';
			foreach ($handles as $repoIndex => $curlHandle) {
				$response = curl_multi_getcontent($curlHandle);
				$httpCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
				$error = curl_error($curlHandle);
				$errno = curl_errno($curlHandle);
				$resultCode = $resultCodes[spl_object_id($curlHandle)] ?? CURLE_OK;
				$errorMessage = $this->buildCurlErrorMessage($curlHandle, sprintf('GPT 请求失败: %s/%s', $providerName, $model), $response, $resultCode);
				curl_multi_remove_handle($multiHandle, $curlHandle);
				curl_close($curlHandle);
				
				if ($resultCode !== CURLE_OK || $errno !== 0 || $error !== '') {
					$lastError = $errorMessage;
					$failedRepoNames[$repoIndex] = $pendingRepoNames[$repoIndex];
					continue;
				}
				
				if ($httpCode !== 200) {
					if ($response) {
						$errorData = json_decode($response, true);
						if ($errorData && isset($errorData['error'])) {
							$lastError = sprintf("API 错误: %s", json_encode($errorData['error'], JSON_UNESCAPED_UNICODE));
							$failedRepoNames[$repoIndex] = $pendingRepoNames[$repoIndex];
							continue;
						}
					}
					$lastError = $errorMessage;
					$failedRepoNames[$repoIndex] = $pendingRepoNames[$repoIndex];
					continue;
				}

				$body = json_decode($response, true);
				if (json_last_error() !== JSON_ERROR_NONE) {
					$lastError = sprintf("JSON 解析错误: %s，原始响应: %s", json_last_error_msg(), $response);
					$failedRepoNames[$repoIndex] = $pendingRepoNames[$repoIndex];
					continue;
				}

				$answer = $this->parseOpenAiChatAnswer($body);
				if ($answer === '') {
					$lastError = sprintf("响应格式错误: %s", $response);
					$failedRepoNames[$repoIndex] = $pendingRepoNames[$repoIndex];
					continue;
				}

				$result = [
					'question' => $pendingRepoNames[$repoIndex],
					'answer' => $this->sanitizeDescription($answer),
					'error' => $error ?: ($body['error'] ?? ''),
					'code' => $httpCode
				];
				
				if (empty($result['answer'])) {
					$lastError = sprintf("响应为空: %s", $response);
					$failedRepoNames[$repoIndex] = $pendingRepoNames[$repoIndex];
					continue;
				}

				// 无论是否调试模式，都保存缓存
				if ($httpCode === 200 && !empty($result['answer'])) {
					$cacheData = [
						'expire' => empty($this->config['DESC_TIME']) ? 9999999999 : (time() + $this->config['DESC_TIME']),
						'data' => $result
					];
					$cacheFile = $cacheDir . '/' . $this->buildDescCacheKey($pendingRepoNames[$repoIndex], $systemPrompt, $provider) . '.json';
					$this->writeJsonFile(
						$cacheFile,
						$cacheData,
						JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
					);
					if ($this->isDebug) {
						echo sprintf("\t调试模式：已保存缓存 %s", $pendingRepoNames[$repoIndex]);
					}
				}
				
				$results[$repoIndex] = $result;
			}

			curl_multi_close($multiHandle);

			if (empty($failedRepoNames)) {
				break;
			}

			$pendingRepoNames = $failedRepoNames;
			echo sprintf("\t第 %d 次请求仍有 %d 个失败: %s\n", $attempt, count($pendingRepoNames), $lastError);

			if ($attempt === $maxRetryCount) {
				throw new Exception($lastError ?: 'GPT 请求失败');
			}
		}

		echo sprintf("\t处理完成: 总数 %d, 缓存 %d, API %d\n", 
			$totalRequests, 
			$cachedCount, 
			$apiRequests
		);

		return $results;
	}

	private function getGptProviders(): array
	{
		$providers = [];
		$configProviders = $this->config['GPT_PROVIDERS'] ?? [];

		if (is_array($configProviders) && !empty($configProviders)) {
			foreach ($configProviders as $provider) {
				$providers = array_merge($providers, $this->normalizeGptProvider($provider));
			}
		}

		if (empty($providers)) {
			throw new Exception('GPT_PROVIDERS 未设置');
		}

		return $providers;
	}

	private function normalizeGptProvider(array $provider): array
	{
		$name = trim((string)($provider['name'] ?? 'default'));
		$url = trim((string)($provider['url'] ?? ''));
		$key = (string)($provider['key'] ?? '');
		$models = $provider['models'] ?? [];

		if (is_string($models)) {
			$models = explode(',', $models);
		}

		$list = [];
		foreach ($models as $model) {
			$model = trim((string)$model);
			if ($model === '') {
				continue;
			}
			$list[] = [
				'name' => $name,
				'url' => $url,
				'key' => $key,
				'model' => $model,
			];
		}

		return $list;
	}

	private function buildOpenAiChatPayload(string $model, string $systemPrompt, string $content): array
	{
		return [
			'model' => $model,
			'messages' => [
				[
					'role' => 'system',
					'content' => $systemPrompt,
				],
				[
					'role' => 'user',
					'content' => $content,
				],
			],
		];
	}

	private function parseOpenAiChatAnswer(array $body): string
	{
		return trim((string)($body['choices'][0]['message']['content'] ?? ''));
	}

	private function buildDescCacheKey(string $content, string $systemPrompt, array $provider): string
	{
		return md5(($provider['name'] ?? '') . '|' . ($provider['url'] ?? '') . '|' . ($provider['model'] ?? '') . '|' . $systemPrompt . '|' . $content);
	}

	private function executeCurlMulti($multiHandle, string $errorContext): array
	{
		$startedAt = microtime(true);
		$multiTimeout = max(1, (int)($this->config['CURL_MULTI_TIMEOUT'] ?? 30));

		do {
			$multiCode = curl_multi_exec($multiHandle, $running);
			if ($multiCode !== CURLM_OK) {
				throw new Exception(sprintf('%s: %s', $errorContext, curl_multi_strerror($multiCode)));
			}

			if ($running > 0 && (microtime(true) - $startedAt) >= $multiTimeout) {
				throw new Exception(sprintf('%s: 超过 %d 秒仍未完成，已中断。建议检查 CURL_PROXY、CURL_IPRESOLVE_V4 或本机网络。', $errorContext, $multiTimeout));
			}

			if ($running > 0) {
				$selectResult = curl_multi_select($multiHandle, 1.0);
				if ($selectResult === -1) {
					usleep(10000);
				}
			}
		} while ($running > 0);

		$resultCodes = [];
		while ($info = curl_multi_info_read($multiHandle)) {
			if (isset($info['handle'], $info['result'])) {
				$resultCodes[spl_object_id($info['handle'])] = $info['result'];
			}
		}

		return $resultCodes;
	}

	private function buildCurlErrorMessage($curlHandle, string $context, string|false $response, int $resultCode): string
	{
		$info = curl_getinfo($curlHandle);
		$responseText = is_string($response) ? trim($response) : '';
		if (mb_strlen($responseText) > 500) {
			$responseText = mb_substr($responseText, 0, 500) . '...';
		}

		return sprintf(
			'%s，HTTP %d，cURL result %d(%s)，errno %d，error: %s，url: %s，total_time: %.3fs，response: %s',
			$context,
			(int)($info['http_code'] ?? 0),
			$resultCode,
			curl_strerror($resultCode),
			curl_errno($curlHandle),
			curl_error($curlHandle) ?: 'EMPTY',
			$info['url'] ?? '',
			(float)($info['total_time'] ?? 0),
			$responseText !== '' ? $responseText : 'EMPTY'
		);
	}

	private function writeJsonFile(string $path, array $data, int $flags = 0): void
	{
		$json = json_encode($data, $flags);
		if ($json === false) {
			throw new Exception(sprintf('JSON 编码失败: %s', json_last_error_msg()));
		}

		if (file_put_contents($path, $json) === false) {
			throw new Exception(sprintf('文件写入失败: %s', $path));
		}
	}

	private function writeTextFile(string $path, string $content): void
	{
		if (file_put_contents($path, $content) === false) {
			throw new Exception(sprintf('文件写入失败: %s', $path));
		}
	}

	private function copyFile(string $source, string $target): void
	{
		if (!copy($source, $target)) {
			throw new Exception(sprintf('文件复制失败: %s -> %s', $source, $target));
		}
	}
}

try {
	$app = new GitHubStarred();
	$app->run();
} catch (Exception $e) {
	echo "错误: " . $e->getMessage() . "\n";
	exit(1);
}
