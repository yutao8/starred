<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');
date_default_timezone_set('Asia/Shanghai');

$config = require __DIR__ . '/config.php';

$prompt = $config['GPT_PROMPT'] ?? '请用中文简要介绍这个 GitHub 项目。';

function parseArguments(array $argv): array
{
	$options = [
		'url' => 'https://github.com/soimort/you-get',
		'provider' => '',
		'model' => '',
		'ci' => false,
		'help' => false,
	];

	for ($index = 1; $index < count($argv); $index++) {
		$argument = (string)$argv[$index];

		if ($argument === '--help' || $argument === '-h') {
			$options['help'] = true;
			continue;
		}

		if ($argument === '--ci') {
			$options['ci'] = true;
			continue;
		}

		if (str_starts_with($argument, '--provider=')) {
			$options['provider'] = trim(substr($argument, 11));
			continue;
		}

		if ($argument === '--provider' && isset($argv[$index + 1])) {
			$options['provider'] = trim((string)$argv[++$index]);
			continue;
		}

		if (str_starts_with($argument, '--model=')) {
			$options['model'] = trim(substr($argument, 8));
			continue;
		}

		if ($argument === '--model' && isset($argv[$index + 1])) {
			$options['model'] = trim((string)$argv[++$index]);
			continue;
		}

		if ($argument !== '' && $argument[0] !== '-') {
			$options['url'] = $argument;
		}
	}

	return $options;
}

function printHelp(): void
{
	echo "用法:\n";
	echo "php test.php [github_url] [--provider openrouter] [--model gpt-4o-mini] [--ci]\n\n";
	echo "参数说明:\n";
	echo "--provider   只测试指定 provider，例如 openrouter 或 deepseek\n";
	echo "--model      只测试名称中包含指定关键字的模型\n";
	echo "--ci         输出更简洁的 CI 摘要\n";
	echo "--help       显示帮助\n";
}

function resolveCurlProxyType(string $proxyType): int
{
	return match (strtolower(trim($proxyType))) {
		'socks5' => CURLPROXY_SOCKS5,
		'socks5h', 'socks5_hostname' => CURLPROXY_SOCKS5_HOSTNAME,
		default => CURLPROXY_HTTP,
	};
}

function normalizeCurlProxy(string $proxy, string $proxyType): string
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

function getBaseCurlOptions(array $config, int $defaultTimeout = 20): array
{
	$requestTimeout = (int)($config['CURL_TIMEOUT'] ?? $defaultTimeout);
	$connectTimeout = (int)($config['CURL_CONNECT_TIMEOUT'] ?? 5);

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

	$proxy = trim((string)($config['CURL_PROXY'] ?? ''));
	if ($proxy !== '') {
		$proxyType = (string)($config['CURL_PROXY_TYPE'] ?? 'http');
		$options[CURLOPT_PROXY] = normalizeCurlProxy($proxy, $proxyType);
		$options[CURLOPT_PROXYTYPE] = resolveCurlProxyType($proxyType);
	} else {
		$options[CURLOPT_PROXY] = '';
		$options[CURLOPT_NOPROXY] = '*';
	}

	if (!empty($config['CURL_IPRESOLVE_V4'])) {
		$options[CURLOPT_IPRESOLVE] = CURL_IPRESOLVE_V4;
	}

	return $options;
}

function getProviders(array $config): array
{
	$providers = [];
	foreach ($config['GPT_PROVIDERS'] ?? [] as $provider) {
		$name = trim((string)($provider['name'] ?? ''));
		$url = trim((string)($provider['url'] ?? ''));
		$key = trim((string)($provider['key'] ?? ''));
		$models = $provider['models'] ?? [];

		if ($name === '' || $url === '' || !is_array($models)) {
			continue;
		}

		foreach ($models as $model) {
			$model = trim((string)$model);
			if ($model === '') {
				continue;
			}

			$providers[] = [
				'name' => $name,
				'url' => $url,
				'key' => $key,
				'model' => $model,
			];
		}
	}

	return $providers;
}

function filterProviders(array $providers, string $providerFilter, string $modelFilter): array
{
	if ($providerFilter === '' && $modelFilter === '') {
		return $providers;
	}

	return array_values(array_filter(
		$providers,
		static function (array $provider) use ($providerFilter, $modelFilter): bool {
			if ($providerFilter !== '' && strcasecmp($provider['name'], $providerFilter) !== 0) {
				return false;
			}

			if ($modelFilter !== '' && stripos($provider['model'], $modelFilter) === false) {
				return false;
			}

			return true;
		}
	));
}

function buildPayload(string $model, string $prompt, string $projectUrl): string
{
	return json_encode([
		'model' => $model,
		'messages' => [
			['role' => 'system', 'content' => $prompt],
			['role' => 'user', 'content' => 'github地址是 ' . $projectUrl],
		],
		'temperature' => 0.2,
	], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}

function requestModel(array $config, array $provider, string $prompt, string $projectUrl): array
{
	$payload = buildPayload($provider['model'], $prompt, $projectUrl);
	$headers = [
		'Authorization: Bearer ' . $provider['key'],
		'Content-Type: application/json',
	];

	if ($provider['name'] === 'openrouter') {
		$headers[] = 'HTTP-Referer: https://github.com/yutao8/starred';
		$headers[] = 'X-Title: starred-ai-test';
	}

	$curlHandle = curl_init($provider['url']);
	curl_setopt_array($curlHandle, getBaseCurlOptions($config) + [
		CURLOPT_POST => true,
		CURLOPT_HTTPHEADER => $headers,
		CURLOPT_POSTFIELDS => $payload,
	]);

	$startedAt = microtime(true);
	$response = curl_exec($curlHandle);
	$totalTime = microtime(true) - $startedAt;

	$result = [
		'http_code' => (int)curl_getinfo($curlHandle, CURLINFO_HTTP_CODE),
		'errno' => curl_errno($curlHandle),
		'error' => curl_error($curlHandle),
		'total_time' => $totalTime,
		'response' => is_string($response) ? $response : '',
	];

	curl_close($curlHandle);

	return $result;
}

function extractMessage(string $response): string
{
	$data = json_decode($response, true);
	if (!is_array($data)) {
		return '';
	}

	$content = $data['choices'][0]['message']['content'] ?? '';
	if (!is_string($content)) {
		return '';
	}

	return trim($content);
}

function shortenText(string $text, int $maxLength = 120): string
{
	$text = preg_replace('/\s+/u', ' ', trim($text)) ?? trim($text);
	if ($text === '') {
		return '';
	}

	if (mb_strlen($text) <= $maxLength) {
		return $text;
	}

	return mb_substr($text, 0, $maxLength) . '...';
}

function printCiSummary(array $usableProviders, array $failedProviders): void
{
	echo "CI_SUMMARY usable=" . count($usableProviders) . ' failed=' . count($failedProviders) . "\n";

	if ($usableProviders !== []) {
		echo 'CI_OK ' . implode(',', $usableProviders) . "\n";
	}

	if ($failedProviders !== []) {
		$failedLines = [];
		foreach ($failedProviders as $failedProvider) {
			$failedLines[] = $failedProvider['provider'] . ':' . $failedProvider['reason'];
		}
		echo 'CI_FAIL ' . implode(' | ', $failedLines) . "\n";
	}
}

$options = parseArguments($argv);

if ($options['help']) {
	printHelp();
	exit(0);
}

$projectUrl = $options['url'];

$providers = filterProviders(getProviders($config), $options['provider'], $options['model']);

if ($providers === []) {
	fwrite(STDERR, "未找到匹配的可测试模型，请检查 --provider 或 --model 条件\n");
	exit(1);
}

echo "开始测试 AI 可用性...\n";
echo "目标仓库: {$projectUrl}\n";
if ($options['provider'] !== '') {
	echo 'Provider 过滤: ' . $options['provider'] . "\n";
}
if ($options['model'] !== '') {
	echo 'Model 过滤: ' . $options['model'] . "\n";
}
echo 'Provider/Model 数量: ' . count($providers) . "\n\n";

$usableProviders = [];
$failedProviders = [];

foreach ($providers as $provider) {
	$providerLabel = $provider['name'] . '/' . $provider['model'];
	echo "测试模型: {$providerLabel}\n";

	if ($provider['key'] === '') {
		echo "结果: SKIP，未配置 API Key\n\n";
		$failedProviders[] = [
			'provider' => $providerLabel,
			'reason' => 'missing_key',
		];
		continue;
	}

	$result = requestModel($config, $provider, $prompt, $projectUrl);
	$content = extractMessage($result['response']);
	$isSuccess = $result['errno'] === 0
		&& $result['http_code'] >= 200
		&& $result['http_code'] < 300
		&& $content !== '';

	echo 'HTTP: ' . $result['http_code'] . "\n";
	echo 'errno: ' . $result['errno'] . "\n";
	echo '耗时: ' . number_format($result['total_time'], 3) . "s\n";

	if ($isSuccess) {
		echo "结果: OK\n";
		echo '摘要预览: ' . shortenText($content) . "\n\n";
		$usableProviders[] = $providerLabel;
		continue;
	}

	$errorText = $result['error'] !== '' ? $result['error'] : shortenText($result['response'], 200);
	if ($errorText === '') {
		$errorText = 'empty_response';
	}

	echo "结果: FAIL\n";
	echo '错误信息: ' . $errorText . "\n\n";
	$failedProviders[] = [
		'provider' => $providerLabel,
		'reason' => $errorText,
	];
}

echo "测试完成\n";
echo '可用模型数: ' . count($usableProviders) . "\n";

if ($usableProviders !== []) {
	echo "可用模型列表:\n";
	foreach ($usableProviders as $providerLabel) {
		echo '- ' . $providerLabel . "\n";
	}
}

if ($failedProviders !== []) {
	echo "\n不可用模型列表:\n";
	foreach ($failedProviders as $failedProvider) {
		echo '- ' . $failedProvider['provider'] . ' => ' . $failedProvider['reason'] . "\n";
	}
}

if ($options['ci']) {
	echo "\n";
	printCiSummary($usableProviders, $failedProviders);
}

exit($usableProviders === [] ? 1 : 0);
