<?php
declare(strict_types=1);

$rootPath = __DIR__;

$loadEnv = static function (string $path): void {
	if (!is_file($path)) {
		return;
	}

	$lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	if ($lines === false) {
		return;
	}

	foreach ($lines as $line) {
		$line = trim($line);
		if ($line === '' || str_starts_with($line, '#')) {
			continue;
		}

		[$key, $value] = array_pad(explode('=', $line, 2), 2, '');
		$key = trim($key);
		if ($key === '') {
			continue;
		}

		$value = trim($value);
		if (
			(strlen($value) >= 2)
			&& (($value[0] === '"' && $value[-1] === '"') || ($value[0] === "'" && $value[-1] === "'"))
		) {
			$value = substr($value, 1, -1);
		}

		if (getenv($key) === false && !isset($_ENV[$key]) && !isset($_SERVER[$key])) {
			$_ENV[$key] = $value;
			$_SERVER[$key] = $value;
		}
	}
};

$loadEnv($rootPath . '/.env');

$env = static function (string $key, mixed $default = ''): mixed {
	if (isset($_SERVER[$key]) && $_SERVER[$key] !== '') {
		return $_SERVER[$key];
	}

	if (isset($_ENV[$key]) && $_ENV[$key] !== '') {
		return $_ENV[$key];
	}

	$value = getenv($key);
	if ($value !== false && $value !== '') {
		return $value;
	}

	return $default;
};

$envInt = static function (string $key, int $default) use ($env): int {
	return (int)$env($key, $default);
};

$envBool = static function (string $key, bool $default) use ($env): bool {
	$value = $env($key, null);
	if ($value === null) {
		return $default;
	}

	return filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ?? $default;
};

return [
	'GITHUB_ACTOR' => $env('GITHUB_ACTOR', 'yutao8'),
	'GH_TOKEN' => $env('GH_TOKEN', ''),
	'GPT_PROVIDERS' => [
		[
			'name' => 'openrouter',
			'url' => $env('OPENROUTER_URL', 'https://openrouter.ai/api/v1/chat/completions'),
			'key' => $env('OPENROUTER_KEY', ''),
			'models' => [
				'openai/gpt-4o-mini',
				'qwen/qwen-plus-2025-07-28',
				'deepseek/deepseek-chat-v3.1',
				'openai/gpt-4.1-nano',
				'qwen/qwen3-32b',
			],
		],
		[
			'name' => 'deepseek',
			'url' => $env('DEEPSEEK_URL', 'https://api.deepseek.com/chat/completions'),
			'key' => $env('DEEPSEEK_API_KEY', ''),
			'models' => [
				'deepseek-v4-flash',
			],
		],
	],
	'GPT_PROMPT' => "你是一个专业的 GitHub 项目摘要生成器。用户会提供一个 GitHub 仓库名称或地址，请为该仓库生成一段中文纯文本简介。要求：
1. 只输出一段正文，不要输出标题、列表、Markdown、JSON、代码块、引号、角色名或解释过程；
2. 开头直接说明项目用途，避免“这是一个”“该项目是一个”等模板化废话；
3. 优先描述核心功能、典型使用场景、适合解决的问题；
4. 可以结合仓库名、描述、常见技术生态推断技术方向，但不要编造具体 API、模块名、公司背景或不存在的特性；
5. 如无法可靠判断细节，应使用稳妥表述，例如“主要用于...”“通常适合...”；
6. 语言简洁准确，控制在 120-220 个中文字符。",
	'ROOT_PATH' => $rootPath,
	'CACHE_PATH' => $rootPath . '/.cache/',
	'DIST_PATH' => $rootPath . '/dist/' . date('YmdH') . '/',
	'CURL_PROXY' => $env('CURL_PROXY', ''),
	'CURL_PROXY_TYPE' => $env('CURL_PROXY_TYPE', 'http'),
	'CURL_IPRESOLVE_V4' => $envBool('CURL_IPRESOLVE_V4', true),
	'CURL_TIMEOUT' => $envInt('CURL_TIMEOUT', 20),
	'CURL_CONNECT_TIMEOUT' => $envInt('CURL_CONNECT_TIMEOUT', 5),
	'CURL_MULTI_TIMEOUT' => $envInt('CURL_MULTI_TIMEOUT', 30),
	'DESC_TIME' => $envInt('DESC_TIME', 0), // 描述缓存时间(0:永久缓存)
	'DEBUG_MODE' => $envBool('DEBUG_MODE', false), // 是否开启调试模式
	'PAGE_START' => $envInt('PAGE_START', 1), // 开始页数
	'PAGE_END' => $envInt('PAGE_END', 20), // 结束页数
	'PAGE_LIMIT' => $envInt('PAGE_LIMIT', 100), // 每页数量
	'PAGE_CHUNK' => $envInt('PAGE_CHUNK', 10), // 每页并发数
	'RECENT_LIMIT' => $envInt('RECENT_LIMIT', 10), // 最近N条
	'LANG_LIMIT' => $envInt('LANG_LIMIT', 10), // 每栏语言数量
	'INDEX_FOOTER' => <<<EOL
## 🛡️ Technical Sponsorship 感谢腾讯云[Tencent EdgeOne](https://edgeone.tencent.com/?from=github)提供CDN加速和安全保护

CDN acceleration and security protection for this project are sponsored by [Tencent EdgeOne](https://edgeone.tencent.com/?from=github).

[![Tencent EdgeOne Logo](https://edgeone.ai/media/34fe3a45-492d-4ea4-ae5d-ea1087ca7b4b.png)](https://edgeone.tencent.com/?from=github)


EOL,
];
