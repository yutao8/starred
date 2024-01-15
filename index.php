<?php
set_time_limit(0);
define('CACHE_PATH', __DIR__ . '/.cache/'); //缓存目录
is_dir(CACHE_PATH) or mkdir(CACHE_PATH, 0777, true);
define('GH_TOKEN', $_ENV['GH_TOKEN'] ?? null); //github token  github_pat_xxxxx  https://github.com/settings/tokens?type=beta
define('GPT_URL', $_ENV['GPT_URL'] ?? null); //chatgpt api url
define('GPT_KEY', $_ENV['GPT_KEY'] ?? null); //chatgpt key
$listAll = getAllStarList('yutao8');
makeMarkdown($listAll);
echo file_get_contents('index.html');

//获取关注列表
function getAllStarList($username, $update = false)
{
    $cahceFile = 'starList.json';
    $cacheData = file_exists($cahceFile) ? json_decode(file_get_contents($cahceFile), true) : [];
    if ($cacheData && !$update) {
        return $cacheData;
    }
    $page = 0;
    do {
        $page++;
        $url = 'https://api.github.com/users/' . $username . '/starred?per_page=100&page=' . $page;
        $ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36';
        $header = [
            'Accept: application/vnd.github+json',
            'Authorization: Bearer ' . GH_TOKEN,
            'User-Agent: ' . $ua,
        ];
        $list = json_decode(http_request($url, [], $header), true);
        foreach ($list as  $item) {
            $item['language'] or $item['language'] = 'NaN';
            $listAll[$item['language']][] = $item;
        }
    } while ($list);
    foreach ($listAll as  &$list) {
        array_sort_by_column($list, 'stargazers_count', SORT_DESC);
    }
    file_put_contents($cahceFile, json_encode($listAll));
    return $listAll;
}

//生成markdown文件
function makeMarkdown($listAll)
{
    $text = '# github starred';
    foreach ($listAll as $lang => $list) {
        $text .= "\r\n\r\n### {$lang}\r\n---\r\n";
        $answer_list = defined('GPT_KEY') ? getLinkDescMulti(array_column($list, 'html_url')) : [];
        foreach ($list as $i => $item) {
            $topic = $item['topics'] ? ("\t`" . implode("` `", $item['topics']) . "`") : "";
            $description = trim($answer_list[$i] ?: $item['description']);
            $item['updated_at'] = date('Y-m-d H:i:s', strtotime($item['updated_at']));
            $text .= "\r\n{$i}. [{$item['full_name']}]({$item['html_url']}) ⭐: {$item['stargazers_count']} ⌨️: {$item['language']}{$topic}";
            if($i>99){
                $text .="\r\n\r\n     {$description}\r\n";
            }else{
                $text .="\r\n\r\n\t{$description}\r\n";
            }
            
        }
    }
    file_put_contents('README.md', $text);
    return $text;
}

//获取项目描述(单个获取)
function getLinkDesc($url, $update = false)
{
    $cahceFile = CACHE_PATH . 'desc_' . md5($url) . '.json';
    $cacheData = file_exists($cahceFile) ? json_decode(file_get_contents($cahceFile), true) : [];
    if ($cacheData && !$update) {
        return $cacheData['answer'];
    }
    $answer = ask_gpt("用中文简单介绍一下这个项目，尽量控制在100个字以内。" . $url, "", "gpt-3.5-turbo-1106");
    $answer && file_put_contents($cahceFile, json_encode(['url' => $url, 'answer' => $answer], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    return $answer;
}

//获取项目描述(批量获取)
function getLinkDescMulti($url_list, $update = false)
{
    $cahceFile = CACHE_PATH . 'desc_multi' . md5(serialize($url_list)) . '.json';
    $cacheData = file_exists($cahceFile) ? json_decode(file_get_contents($cahceFile), true) : [];
    if ($cacheData && !$update) {
        return $cacheData['answer_list'];
    }
    foreach ($url_list as $url) {
        $question_list[] = "用中文简单介绍一下这个项目，尽量控制在100个字以内。" . $url;
    }
    $res_list = ask_gpt_multi($question_list, "", "gpt-3.5-turbo-1106");
    foreach ($res_list as  $i => $res) {
        $answer_list[$i] = $res['answer'];
    }
    $answer_list && file_put_contents($cahceFile, json_encode(['url_list' => $url_list, 'answer_list' => $answer_list], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    return $answer_list;
}
/**
 * GPT问答 （单个）
 *
 * @param string $content 要问的问题
 * @param string $prompt 问题的提示语
 * @return string|null 问答结果 
 */
function ask_gpt(string $content, $prompt = '你是一个PHP开发工程师', $model = "gpt-3.5-turbo")
{
    $api_key = defined('GPT_KEY') ? GPT_KEY : "sk-xxxxxxxxxxxxxxxxxxxx";
    $url = defined('GPT_URL') ? GPT_URL : "https://api.openai.com/v1/chat/completions";
    $data = array(
        "model" => $model,
        "messages" => [['role' => 'system', 'content' => $content]],
    );
    $prompt && $data['prompt'] = $prompt;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Authorization: Bearer " . $api_key
    ));
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "curl请求失败：" . curl_error($ch);
        $text = null;
    } else {
        $response_data = json_decode($response, true);
        $text = $response_data["choices"][0]["message"]['content'] ?? ''; //JSON.choices[0].message.content
    }
    curl_close($ch);
    return $text;
}

/**
 * GPT问答 （多个）
 *
 * @param array $content_list 要问的问题列表
 * @param string $prompt 问题的提示语
 * @param  string  $model  模型名称
 * @return array 问答结果 
 */
function ask_gpt_multi(array $content_list, $prompt = '你是一个PHP开发工程师', $model = "gpt-3.5-turbo-1106")
{
    $api_key = defined('GPT_KEY') ? GPT_KEY : "sk-xxxxxxxxxxxxxxxxxxxx";
    $url = defined('GPT_URL') ? GPT_URL : "https://api.openai.com/v1/chat/completions";
    $header = ["Content-Type: application/json", "Authorization: Bearer " . $api_key];
    $ch_multi = curl_multi_init();
    $handle = $res = [];
    foreach ($content_list as $i => $content) {
        $data = [
            "model" => $model,
            "messages" => [['role' => 'system', 'content' => $content]],
        ];
        $prompt && $data['prompt'] = $prompt;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_multi_add_handle($ch_multi, $ch);
        $handle[$i] = $ch;
    }
    do {
        curl_multi_exec($ch_multi, $running);
    } while ($running > 0);
    foreach ($handle as $i => $ch) {
        $body = json_decode(curl_multi_getcontent($ch), true);
        $res[$i]['question'] =  $content_list[$i];
        $res[$i]['answer'] =  $body["choices"][0]["message"]['content'] ?? '';
        $res[$i]['error'] = curl_error($ch) ?: ($res[$i]['answer'] ? '' : $body['error']);
        $res[$i]['code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // $res[$i]['body'] =$body;
    }
    return $res;
}

//curl http请求
function http_request($url, $data = null, $header = [], $proxy = [])
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30); //超时时间
    curl_setopt($curl, CURLOPT_URL, $url);
    if (is_array($proxy) && $proxy) {
        curl_setopt($curl, CURLOPT_PROXY, $proxy[0]); //代理服务器 ip+端口
        curl_setopt($curl, CURLOPT_PROXYTYPE, $proxy[1] ?? CURLPROXY_SOCKS5); //代理类型
    }
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    if (!empty($data)) {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    if ($header && is_array($header)) {
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

//二维数组排序
function array_sort_by_column(&$arr, $col, $dir = SORT_ASC)
{
    $sort_col = array();
    foreach ($arr as $key => $row) {
        $sort_col[$key] = $row[$col];
    }
    array_multisort($sort_col, $dir, $arr);
}
