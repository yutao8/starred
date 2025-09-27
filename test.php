<?php

// 测试模型

$config=require_once 'config.php';

$api_url = $config['GPT_URL'];
$api_key = $config['GPT_KEY'];

$projectUrl='https://github.com/soimort/you-get';

$prompt = $config['GPT_PROMPT'];

$models = $config['GPT_MODELS'];

$usableModels = [];

foreach ($models as $model) {
    echo "🔍 测试模型：$model\n";

    $headers = [
        "Authorization: Bearer $api_key",
        "Content-Type: application/json",
    ];

    $payload = json_encode([
        'model' => $model,
        'messages' => [
            ['role' => 'system', 'content' => $prompt],
            ['role' => 'user', 'content' => "github地址是".$projectUrl],
        ],
        // 'temperature' => 0.5,
        // 'max_tokens' => 1000,
    ]);

    $ch = curl_init($api_url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        echo "❌ 请求失败：$error\n";
        continue;
    }
    echo $response;
    $data = json_decode($response, true);
    $content = $data['choices'][0]['message']['content'] ?? '';

    if ($content && preg_match('/[\x{4e00}-\x{9fff}]/u', $content)) {
        echo "✅ 可用模型：$model\n📄 返回内容：$content\n\n";
        $usableModels[] = $model;
    } else {
        echo "❌ 无效响应：$model\n响应内容：$content\n\n";
    }
}

echo "\n📦 可用模型列表：\n";
var_export($usableModels);
