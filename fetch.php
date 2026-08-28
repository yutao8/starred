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
	private string $dataPath;
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
		$this->dataPath = $this->config['DATA_PATH'] ?? ($this->rootPath . '/data');
		$this->cachePath = $this->config['CACHE_PATH'];
		$this->distPath = $this->config['DIST_PATH'];
		$this->isDebug = $this->config['DEBUG_MODE'] ?? false;

		if (empty($_SERVER['GH_TOKEN'] ?? $this->config['GH_TOKEN'])) {
			die('GH_TOKEN is required!');
		}

		foreach ([$this->dataPath, $this->cachePath, $this->distPath] as $directory) {
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
		$this->syncHistoryAndTrends(); // 自动同步历史履历并重新计算最新趋势数据
		$this->generateMarkdown($repos); // 生成markdown文件 (此时可完美读取最新的 trend.json)
	}

	private function syncHistoryAndTrends(): void
	{
		try {
			if (is_file($this->rootPath . '/history.php')) {
				require_once $this->rootPath . '/history.php';
				if (class_exists('FastRepoHistoryAnalyzer')) {
					$analyzer = new FastRepoHistoryAnalyzer();
					$analyzer->syncDistToReposDir(false);
					echo "项目履历文件 (data/repos/) 增量同步完成\n";
				}
			}

			if (is_file($this->rootPath . '/trend.php')) {
				$phpBin = PHP_BINARY ?: 'php';
				@exec(escapeshellcmd($phpBin) . ' ' . escapeshellarg($this->rootPath . '/trend.php') . ' --force 2>&1');
				echo "趋势分析数据 (data/trend.json / data/trend.md) 自动更新完成\n";
			}
		} catch (Throwable $e) {
			echo "提示: 同步历史与趋势时发生非致命错误: " . $e->getMessage() . "\n";
		}
	}

	private function fetchStarredRepos(): array
	{
		$pageStart = $this->config['PAGE_START'] ?? 1;
		$pageEnd = $this->config['PAGE_END'] ?? 50;
		$pageLimit = $this->config['PAGE_LIMIT'] ?? 100;
		$pageChunk = max(1, (int)($this->config['PAGE_CHUNK'] ?? $this->config['REQUEST_CONCURRENCY'] ?? 10));

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

		// 1. 先从现有的 data/starList.json / data/starList.public.json / 缓存中预加载已有中文描述
		$existingDescs = $this->loadExistingDescriptions();
		$pendingIndices = [];
		$reusedCount = 0;

		foreach ($repos as $index => &$repo) {
			$fullName = $repo['full_name'] ?? '';
			$id = (string)($repo['id'] ?? '');

			if (!empty($existingDescs[$fullName])) {
				$repo['desc'] = $existingDescs[$fullName];
				$reusedCount++;
			} elseif ($id !== '' && !empty($existingDescs[$id])) {
				$repo['desc'] = $existingDescs[$id];
				$reusedCount++;
			} else {
				$pendingIndices[] = $index;
			}
		}
		unset($repo);

		if ($reusedCount > 0) {
			echo sprintf("✅ 成功从已有数据与缓存中复用 %d 个仓库的中文摘要（耗时 0 毫秒，0 Token 消耗）\n", $reusedCount);
		}

		// 如果所有仓库都已有描述，直接返回
		if (empty($pendingIndices)) {
			echo "✨ 所有收录仓库均已包含有效中文摘要，跳过大模型 API 请求\n";
			$cacheData = ['expire' => time() + 3600, 'data' => $repos];
			$cacheFile = rtrim($this->cachePath, '/\\') . '/repo_desc_list.json';
			$this->writeJsonFile($cacheFile, $cacheData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
			return $repos;
		}

		echo sprintf("🔍 发现 %d 个新增/待解析仓库，准备调用大模型获取中文摘要...\n", count($pendingIndices));

		// 分批处理需要请求的仓库
		$pendingRepos = [];
		foreach ($pendingIndices as $index) {
			$pendingRepos[$index] = $repos[$index]['full_name'];
		}

		$totalPending = count($pendingRepos);
		$batchSize = $this->isDebug ? 10 : 100;
		$repoNameBatches = array_chunk($pendingRepos, $batchSize, true);
		
		$providers = $this->getGptProviders();
		$maxProviderAttempts = count($providers); // 每批最多尝试的 provider/model 数
		$lastSuccessfulProviderIndex = 0; // 本次运行内记住最近可用的 provider/model
		$hasValidDesc = $reusedCount > 0; // 是否有有效描述
		
		foreach ($repoNameBatches as $batchIndex => $batchRepoNames) {
			$currentProviderIndex = $lastSuccessfulProviderIndex; // 优先使用上次成功的 provider/model
			$providerAttemptCount = 0; // 每批独立统计尝试次数
			$startIndex = $batchIndex * $batchSize;
			$endIndex = min($startIndex + $batchSize, $totalPending);
			echo sprintf("处理第 %d 批新仓库 (%d-%d)...\n", 
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
			$missingCount = 0;
			foreach ($batchRepoNames as $repoIndex => $repoName) {
				$description = $descriptionResults[$repoIndex]['answer'] ?? '';
				$description = $this->sanitizeDescription($description);
				if ($description === '') {
					$missingCount++;
					continue;
				}
				$repos[$repoIndex]['desc'] = $description;
				$hasValidDesc = true;
			}
			if ($missingCount > 0) {
				echo sprintf("\t提示: 本批有 %d 个仓库未获取到描述\n", $missingCount);
			}
		}
		$cacheData = ['expire' => time() + 3600, 'data' => $repos];
		$cacheFile = rtrim($this->cachePath, '/\\') . '/repo_desc_list.json';
		$this->writeJsonFile($cacheFile, $cacheData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		if ($hasValidDesc) {
			echo "所有批次处理完成\n";
		} else {
			echo "警告：未能获取到任何有效的描述\n";
		}
		return $repos;
	}

	/**
	 * 从已有的 starList / repos 履历文件中快速预加载所有项目的中文描述 (毫秒级)
	 */
	private function loadExistingDescriptions(): array
	{
		$candidates = [
			$this->dataPath . '/starList.json',
			$this->dataPath . '/starList.public.json',
			$this->rootPath . '/starList.json',
			$this->rootPath . '/starList.public.json',
			$this->rootPath . '/startList.json',
		];

		$descs = [];
		foreach ($candidates as $file) {
			if (!is_file($file)) {
				continue;
			}

			$content = file_get_contents($file);
			if ($content === false) {
				continue;
			}

			$data = json_decode($content, true);
			if (!is_array($data)) {
				continue;
			}

			foreach ($data as $item) {
				$desc = trim((string)($item['desc'] ?? ''));
				if ($desc === '') {
					continue;
				}

				$fullName = trim((string)($item['full_name'] ?? ($item['name'] ?? '')));
				if ($fullName !== '' && !isset($descs[$fullName])) {
					$descs[$fullName] = $desc;
				}

				$id = (int)($item['id'] ?? 0);
				if ($id > 0 && !isset($descs[(string)$id])) {
					$descs[(string)$id] = $desc;
				}
			}
		}

		return $descs;
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
		$this->copyFile($this->distPath . 'starList.json', $this->dataPath . '/starList.json');
		$publicRepos = array_map([$this, 'buildPublicRepo'], $repos);
		$this->writeJsonFile(
			$this->distPath . 'starList.public.json',
			$publicRepos,
			JSON_UNESCAPED_UNICODE
		);
		$this->copyFile($this->distPath . 'starList.public.json', $this->dataPath . '/starList.public.json');
		echo "JSON 文件保存完成\n";

		// 自动增量更新 data/repos/ 独立项目履历文件目录
		try {
			$historyFile = $this->rootPath . '/history.php';
			if (is_file($historyFile)) {
				require_once $historyFile;
				if (class_exists('FastRepoHistoryAnalyzer')) {
					$analyzer = new FastRepoHistoryAnalyzer($this->rootPath);
					$analyzer->syncDistToReposDir();
					echo "项目履历文件 (data/repos/) 增量同步完成\n";
				}
			}
		} catch (\Throwable $e) {
			echo "同步项目履历文件提示: " . $e->getMessage() . "\n";
		}

		// 自动生成最新趋势数据 (data/trend.json / data/trend.md)
		try {
			$trendFile = $this->rootPath . '/trend.php';
			if (is_file($trendFile)) {
				@shell_exec('php ' . escapeshellarg($trendFile) . ' --force');
				echo "趋势分析数据 (data/trend.json / data/trend.md) 自动更新完成\n";
			}
		} catch (\Throwable $e) {
			echo "趋势分析数据更新提示: " . $e->getMessage() . "\n";
		}
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

		// 计算 distPath 相对根目录的路径（统一为正斜杠）
		$normalizedRoot = str_replace('\\', '/', rtrim($this->rootPath, '/\\'));
		$normalizedDist = str_replace('\\', '/', rtrim($this->distPath, '/\\'));
		$distRelative = ltrim(str_replace($normalizedRoot, '', $normalizedDist), '/');
		if ($distRelative !== '') {
			$distRelative .= '/';
		}

		// 1. 生成各语言子文件（在 dist 目录下）
		$langSubFiles = [];
		foreach ($reposByLanguage as $language => $languageRepos) {
			$subFile = 'LANG_' . preg_replace('/[^a-zA-Z0-9_\-]/', '_', $language) . '.md';
			$langSubFiles[$language] = $subFile;
			$subMarkdown = "# {$language} 仓库\n\n";
			$subMarkdown .= "- **仓库数量：** " . count($languageRepos) . "\n";
			$subMarkdown .= "- **生成时间：** " . date('Y-m-d H:i:s') . "\n\n";
			foreach ($languageRepos as $repo) {
				$subMarkdown .= $this->renderRepoMarkdownItem($repo);
			}
			$this->writeTextFile($this->distPath . '/' . $subFile, $subMarkdown);
		}

		// 2. 生成 ALL.md（在 dist 目录下）
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

		// 3. 构建高价值、精炼的 README.md
		$markdown = "# 🌟 GitHub Starred Projects & 趋势洞察\n\n";
		$markdown .= "> 本项目是一个**智能化 GitHub 收藏仓库管理与多维趋势分析系统**。  \n";
		$markdown .= "> 自动同步 Starred 仓库，结合大语言模型生成高质量中文技术摘要与标签，并基于历史快照追踪每个项目的 Star / Fork 演进轨迹，提供多维趋势排行与交互式 Web 看板。\n\n";
		$markdown .= "---\n\n";

		// 概览指标表
		$markdown .= "## 📊 知识库数据概览\n\n";
		$markdown .= "| 核心指标 | 数据统计 | 说明 |\n";
		$markdown .= "| :--- | :---: | :--- |\n";
		$markdown .= "| 📦 **收录仓库总量** | **" . number_format($totalRepos) . "+** 个 | 涵盖 AI/LLM、后端开发、系统工具、前端框架等多领域 |\n";
		$markdown .= "| 🌐 **覆盖编程语言** | **" . count($languageStats) . "** 种 | Python、TypeScript、Go、Rust、JavaScript、PHP 等 |\n";
		$markdown .= "| 🤖 **AI 中文解析** | **100%** 覆盖 | 大模型深度提炼核心定位、功能亮点与实战应用场景 |\n";
		$markdown .= "| 🕒 **最后更新时间** | **" . date('Y-m-d H:i:s') . "** | 自动同步最新 Star 列表与历史快照 |\n\n";
		$markdown .= "---\n\n";

		// 核心导航入口
		$markdown .= "## 🧭 核心入口与导航\n\n";
		$markdown .= "- [**🚀 趋势分析报告 (Markdown)**](data/trend.md) — 7天增量/增长率/综合热度等多维排行榜\n";
		$markdown .= "- [**📊 趋势排行可视化看板 (trend.html)**](trend.html) — 交互式趋势看板与历史快照浏览器\n";
		$markdown .= "- [**📈 单项目历史折线图 (history.html)**](history.html) — 基于 ECharts 的项目 Star & Fork 增长轨迹走势\n";
		$markdown .= "- [**📚 查看全量仓库清单 (ALL.md)**](" . $distRelative . "ALL.md) — 完整仓库归档与离线索引\n";
		$markdown .= "- [**📖 部署与配置文档 (DEPLOY.md)**](DEPLOY.md) — 本地运行与 GitHub Actions 自动化配置\n";
		$markdown .= "- [**🔌 History API 接口文档 (HISTORY_API.md)**](HISTORY_API.md) — 开放 JSON API 格式规范\n\n";
		$markdown .= "---\n\n";

		// 尝试读取 trend.json 动态注入热点摘要
		$trendJsonFile = is_file($this->dataPath . '/trend.json') ? ($this->dataPath . '/trend.json') : ($this->rootPath . '/trend.json');
		if (is_file($trendJsonFile)) {
			$trendData = json_decode((string)file_get_contents($trendJsonFile), true);
			if (is_array($trendData) && !empty($trendData['rankings'])) {
				$heatTop   = array_slice($trendData['rankings']['heat_score_top'] ?? [], 0, 5);
				$growthTop = array_slice(array_filter($trendData['rankings']['star_growth_rate_top'] ?? [], fn($r) => ($r['star_diff'] ?? 0) > 0), 0, 5);
				$langTop   = array_slice($trendData['language_trends'] ?? [], 0, 6);

				$markdown .= "## 🔥 本期热点趋势精选（最近 " . ($trendData['analysis_days'] ?? 7) . " 天）\n\n";
				$markdown .= "> 完整数据与更多维度请查看 [**→ 趋势分析报告 (data/trend.md)**](data/trend.md) 或打开 [**→ trend.html**](trend.html) 看板。\n\n";

				if (!empty($heatTop)) {
					$markdown .= "### 1. 综合热度 Top 5\n";
					$markdown .= "| # | 仓库 | 语言 | 当前 ★ | 7天增量 | 增长率 | 核心简介 |\n";
					$markdown .= "|:-:|:---|:---:|-------:|-------:|-------:|:---|\n";
					foreach ($heatTop as $i => $r) {
						$desc = mb_substr(preg_replace('/\s+/', ' ', trim($r['description'] ?? '')), 0, 36);
						if ($desc !== '') $desc .= '…';
						$markdown .= sprintf(
							"| %d | [%s](%s) | `%s` | %s | **+%s** | +%s%% | %s |\n",
							$i + 1,
							$r['full_name'] ?? '',
							$r['html_url'] ?? '',
							$r['language'] ?? 'Other',
							number_format((int)($r['current_stars'] ?? 0)),
							number_format((int)($r['star_diff'] ?? 0)),
							$r['star_growth_rate'] ?? '0',
							$desc
						);
					}
					$markdown .= "\n";
				}

				if (!empty($growthTop)) {
					$markdown .= "### 2. 增速黑马 Top 5（≥500 ★）\n";
					$markdown .= "| # | 仓库 | 语言 | 当前 ★ | 增长率 | 7天增量 | 日均新增 |\n";
					$markdown .= "|:-:|:---|:---:|-------:|-------:|-------:|-------:|\n";
					foreach ($growthTop as $i => $r) {
						$markdown .= sprintf(
							"| %d | [%s](%s) | `%s` | %s | **+%s%%** | +%s | +%s ★/天 |\n",
							$i + 1,
							$r['full_name'] ?? '',
							$r['html_url'] ?? '',
							$r['language'] ?? 'Other',
							number_format((int)($r['current_stars'] ?? 0)),
							$r['star_growth_rate'] ?? '0',
							number_format((int)($r['star_diff'] ?? 0)),
							$r['star_daily_avg'] ?? '0'
						);
					}
					$markdown .= "\n";
				}

				if (!empty($langTop)) {
					$markdown .= "### 3. 主流语言生态增长格局\n";
					$markdown .= "| # | 编程语言 | 收录仓库数 | Star 资产总量 | 7天总增量 | Fork 总增量 | 日均增/库 |\n";
					$markdown .= "|:-:|:---|-------:|-----------:|----------:|----------:|----------:|\n";
					foreach ($langTop as $i => $ls) {
						$markdown .= sprintf(
							"| %d | **%s** | %d | %s | **+%s ★** | +%s | +%s ★ |\n",
							$i + 1,
							$ls['language'] ?? '',
							(int)($ls['repo_count'] ?? 0),
							number_format((int)($ls['total_stars'] ?? 0)),
							number_format((int)($ls['star_diff'] ?? 0)),
							number_format((int)($ls['fork_diff'] ?? 0)),
							$ls['avg_daily_star'] ?? '0'
						);
					}
					$markdown .= "\n---\n\n";
				}
			}
		}

		// 核心特色
		$markdown .= "## ✨ 项目核心特色\n\n";
		$markdown .= "- 🤖 **AI 深度解析与标签**：获取 Star 列表时，结合大模型（DeepSeek / OpenAI / OpenRouter）自动生成地道技术解析与语义标签，告别“只收藏不理解”。\n";
		$markdown .= "- 📈 **长期历史演进追踪**：支持多版本快照差分，为每个项目建立专属历史履历（`repos/{id}.json`），精准还原每个项目的 Star 与 Fork 演进走势。\n";
		$markdown .= "- 🔥 **多维度趋势洞察与热度分析 (`trend.php`)**：\n";
		$markdown .= "  - **综合热度榜**：整合 Star 增量、增长率、Fork 增量、日均增量加权评分。\n";
		$markdown .= "  - **Star 增长率榜**：支持 `--min-stars` 最低门槛过滤，精准捕捉爆发型黑马。\n";
		$markdown .= "  - **增量与日均榜**：绝对增量、Fork 增量、日均新增等多维排行。\n";
		$markdown .= "  - **语言宏观趋势**：聚合统计各编程语言生态的整体增长态势。\n";
		$markdown .= "- 📦 **全格式输出与历史归档**：每次分析同时输出结构化 `trend.json`、原生渲染 `trend.md`，并自动归档至 `trend_history/` 时间戳目录。\n";
		$markdown .= "- 💻 **全站联动 Web 看板**：\n";
		$markdown .= "  - `index.html`：按语言与标签快速检索项目大厅。\n";
		$markdown .= "  - `trend.html`：多维排行看板、历史分析快照浏览器，支持深/浅色模式。\n";
		$markdown .= "  - `history.html`：基于 ECharts 的交互式项目 Star/Fork 增长轨迹图。\n\n";
		$markdown .= "---\n\n";

		// 语言分布矩阵表
		$markdown .= "## 🌐 编程语言分布矩阵\n\n";
		$markdown .= "| 编程语言 | 收录数量 | 完整分类列表 |\n";
		$markdown .= "| :--- | :---: | :--- |\n";
		$topLanguages = array_slice($languageStats, 0, 15, true);
		foreach ($topLanguages as $langName => $langCount) {
			$subFilePath = $distRelative . ($langSubFiles[$langName] ?? 'ALL.md');
			$markdown .= sprintf("| **%s** | %d 个仓库 | [查看全部 %s 项目 →](%s) |\n", $langName, $langCount, $langName, $subFilePath);
		}
		$markdown .= "\n> 更多语言请查看 [**→ 所有仓库归档 (ALL.md)**](" . $distRelative . "ALL.md)\n\n";
		$markdown .= "---\n\n";

		// 近期新增精选
		$markdown .= "## 🆕 近期新增与关注精选\n\n";
		$markdown .= "> 以下为知识库最新收录并完成 AI 解析的高价值开源项目：\n\n";
		foreach ($recentRepos as $repo) {
			$markdown .= $this->renderRepoMarkdownItem($repo);
		}
		$markdown .= "\n---\n\n";

		// 快速使用
		$markdown .= "## 🚀 快速使用\n\n";
		$markdown .= "### 1. 环境准备\n";
		$markdown .= "确保已安装 PHP 8.2+ 及 `curl`、`json`、`mbstring` 扩展，配置好 `.env`（详见 [DEPLOY.md](DEPLOY.md)）。\n\n";
		$markdown .= "### 2. 命令行操作\n\n";
		$markdown .= "```bash\n";
		$markdown .= "# 1. 抓取最新 Star 列表并生成 AI 中文解析\n";
		$markdown .= "php fetch.php\n\n";
		$markdown .= "# 2. 同步 dist/ 快照至单项目历史履历库 (repos/)\n";
		$markdown .= "php history.php\n\n";
		$markdown .= "# 3. 运行趋势分析（默认 7 天窗口，Top 20，≥500 星门槛）\n";
		$markdown .= "php trend.php\n\n";
		$markdown .= "# 4. 常用趋势分析参数：\n";
		$markdown .= "php trend.php --days=14 --top=30 --min-stars=1000   # 14天窗口，Top 30，门槛 1000 星\n";
		$markdown .= "php trend.php --lang=Python                        # 仅筛选 Python 语言项目\n";
		$markdown .= "php trend.php --sync --force                       # 先同步最新快照，并忽略缓存强制重算\n";
		$markdown .= "```\n\n";
		$markdown .= "### 3. Web 浏览\n";
		$markdown .= "使用任意静态 Web 服务器（或 PHP 内置服务器 `php -S localhost:8000`）打开：\n";
		$markdown .= "- `index.html`：项目检索大厅\n";
		$markdown .= "- `trend.html`：多维趋势排行榜与历史看板\n";
		$markdown .= "- `history.html`：单项目历史增长折线图\n\n";
		$markdown .= "---\n\n";

		// 页脚与维护信息
		$markdown .= "## 📄 License & 维护\n\n";
		$markdown .= "本项目采用 MIT 许可证，由 [@yutao8](https://github.com/yutao8) 维护。\n";
		$markdown .= "欢迎提交 Issue 与 PR 共同完善！\n";

		if (!empty($this->config['INDEX_FOOTER'])) {
			$markdown .= "\n" . $this->config['INDEX_FOOTER'];
		}

		$this->writeTextFile($this->distPath . '/README.md', $markdown);  // 保存到dist目录存档
		$this->copyFile($this->distPath . '/README.md', $this->rootPath . '/README.md'); // 复制到根目录
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
		$providerConcurrency = (int)($provider['concurrency'] ?? 0);
		$requestConcurrency = $providerConcurrency > 0 ? $providerConcurrency : max(1, (int)($this->config['REQUEST_CONCURRENCY'] ?? 10));

		$cacheDir = rtrim($this->cachePath, '/\\') . '/api'; // 单独缓存
		if (!is_dir($cacheDir)) {
			@mkdir($cacheDir, 0777, true);
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

			$failedRepoNames = [];
			$lastError = '';
			$pendingChunks = array_chunk($pendingRepoNames, $requestConcurrency, true);

			foreach ($pendingChunks as $pendingChunk) {
				$multiHandle = curl_multi_init();
				$handles = [];

				foreach ($pendingChunk as $repoIndex => $repoName) {
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
						$failedRepoNames[$repoIndex] = $pendingChunk[$repoIndex];
						continue;
					}
					
					if ($httpCode !== 200) {
						if ($response) {
							$errorData = json_decode($response, true);
							if ($errorData && isset($errorData['error'])) {
								$lastError = sprintf("API 错误: %s", json_encode($errorData['error'], JSON_UNESCAPED_UNICODE));
								$failedRepoNames[$repoIndex] = $pendingChunk[$repoIndex];
								continue;
							}
						}
						$lastError = $errorMessage;
						$failedRepoNames[$repoIndex] = $pendingChunk[$repoIndex];
						continue;
					}

					$body = json_decode($response, true);
					if (json_last_error() !== JSON_ERROR_NONE) {
						$lastError = sprintf("JSON 解析错误: %s，原始响应: %s", json_last_error_msg(), $response);
						$failedRepoNames[$repoIndex] = $pendingChunk[$repoIndex];
						continue;
					}

					$answer = $this->parseOpenAiChatAnswer($body);
					if ($answer === '') {
						$lastError = sprintf("响应格式错误: %s", $response);
						$failedRepoNames[$repoIndex] = $pendingChunk[$repoIndex];
						continue;
					}

					$result = [
						'question' => $pendingChunk[$repoIndex],
						'answer' => $this->sanitizeDescription($answer),
						'error' => $error ?: ($body['error'] ?? ''),
						'code' => $httpCode
					];
					
					if (empty($result['answer'])) {
						$lastError = sprintf("响应为空: %s", $response);
						$failedRepoNames[$repoIndex] = $pendingChunk[$repoIndex];
						continue;
					}

					// 无论是否调试模式，都保存缓存
					if ($httpCode === 200 && !empty($result['answer'])) {
						$cacheData = [
							'expire' => empty($this->config['DESC_TIME']) ? 9999999999 : (time() + $this->config['DESC_TIME']),
							'data' => $result
						];
						$cacheFile = $cacheDir . '/' . $this->buildDescCacheKey($pendingChunk[$repoIndex], $systemPrompt, $provider) . '.json';
						$this->writeJsonFile(
							$cacheFile,
							$cacheData,
							JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
						);
						if ($this->isDebug) {
							echo sprintf("\t调试模式：已保存缓存 %s", $pendingChunk[$repoIndex]);
						}
					}
					
					$results[$repoIndex] = $result;
				}

				curl_multi_close($multiHandle);
			}

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
		$concurrency = (int)($provider['concurrency'] ?? 0);

		// 跳过未配置 url 或 key 的渠道
		if ($url === '' || $key === '') {
			return [];
		}

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
				'concurrency' => $concurrency,
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
