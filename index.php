<?php
set_time_limit(0);
date_default_timezone_set('PRC');

$config = require_once 'config.php';

define('GH_USER', $_SERVER['GITHUB_ACTOR'] ?? $config['GITHUB_ACTOR']); //GitHub username
define('GH_TOKEN', $_SERVER['GH_TOKEN'] ?? $config['GH_TOKEN']);        // GitHub token  github_pat_xxx  https://github.com/settings/tokens?type=beta
define('GPT_URL', $_SERVER['GPT_URL'] ?? $config['GPT_URL']);           //chatgpt api url
define('GPT_KEY', $_SERVER['GPT_KEY'] ?? $config['GPT_KEY']);           //chatgpt key

define('CACHE_PATH', $config['CACHE_PATH']); //缓存目录
define('DIST_PATH', $config['DIST_PATH']); //输出目录
define('GET_DETAIL', $config['GET_DETAIL']); //输出目录

is_dir(CACHE_PATH) or mkdir(CACHE_PATH, 0777, true);
is_dir(DIST_PATH) or mkdir(DIST_PATH, 0777, true);


GH_TOKEN or die('GH_TOKEN is null!');

$page = 1;
$listAll=[];
do {
	//获取单页的,按收藏时间顺序（新收藏在最后）
	$starList= getStarList(GH_USER,$page,20);
	if(empty($starList)){
		break;
	}
	GET_DETAIL && $starList=getLinkDescMulti($starList);
	foreach ($starList as $i=> $item){
		$listAll[$item['language']][]=$item;
	}
	$page++;
}while(true);

foreach ($listAll as $lang=> &$list) {
	//sort by stargazers_count
	array_sort_by_column($list, 'stargazers_count', SORT_DESC);
}
file_put_contents('starList.json',jsonEncode($listAll));
makeMarkdown($listAll);


//获取关注列表
function getStarList($username, $page = 1, $limit=100,$update = false,$dir='./') {
	print_r('page:' . $page . "\r\n");
    
	$cacheFile = DIST_PATH.$page . '.json';
	$cacheData = file_exists($cacheFile) ? json_decode(file_get_contents($cacheFile), true) : [];
	if ($cacheData && !$update) {
		return $cacheData;
	}
	$url = 'https://api.github.com/users/' . $username . '/starred?per_page='.$limit.'&page=' . $page.'&sort=created&direction=asc';
	$ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36';
	$header = ['Accept: application/vnd.github+json', 'Authorization: Bearer ' . GH_TOKEN, 'User-Agent: ' . $ua,];
	$list = json_decode(http_request($url, [], $header), true);
	foreach ($list as &$item) {
		isset($item['language']) or $item['language'] = 'NaN';
		$item['_page']=$page;
		$item['_limit']=$limit;
	}
	file_put_contents($cacheFile, jsonEncode($list));
	return $list;
}





//获取项目描述(批量获取)
function getLinkDescMulti($starList, $update = false): array {
	$dir=CACHE_PATH . 'item';
	is_dir($dir) || mkdir($dir);
	$questionList=[];
	$result=[];
	foreach ($starList as $i=> $item){
		$cacheFile = $dir.'/' . $item['id']. '.json';
		$cacheData = file_exists($cacheFile) ? json_decode(file_get_contents($cacheFile), true) : [];
		if(empty($cacheData['description2']) or $update){
			$questionList[$item['id']]="用中文简单介绍一下这个项目，尽量控制在100个字以内。" . $item['html_url'];
			print_r("\t[".((($item['_page']-1)*$item['_limit'])+$i+1).']'.$item['full_name']."\r\n");
		}else{
			$item['description2']=$cacheData['description2'];
		}
		$result[$item['id']]=$item;
	}
	if(!empty($questionList)){
		$res_list = ask_gpt_multi($questionList, "");
		foreach ($res_list as $id => $res) {
			if(!empty($res['answer'])){
				$result[$id]['description2']=$res['answer'];
				$cacheFile = $dir.'/' . $id. '.json';
				file_put_contents($cacheFile,jsonEncode($result[$id]));
			}
		}
	}
	return array_values($result);
}


//生成markdown文件
function makeMarkdown($listAll): string {
	$countAll=array_sum(array_map(function($list){return count($list); },$listAll));
	$text = "# GitHub starred \r\n total : ".$countAll."  update at ".date('Y-m-d H:i:s');
	foreach ($listAll as $lang => $list) {
		$text .= "\r\n\r\n### $lang\r\n---\r\n";
		foreach ($list as $i => $item) {
			$topic = $item['topics'] ? ("\t`" . implode("` `", $item['topics']) . "`") : "";
			$description = $item['description2']??$item['description'];
			//			$description= getLinkDesc($item['html_url']);
			$item['updated_at'] = date('Y-m-d H:i:s', strtotime($item['updated_at']));
			$text .= "\r\n$i. [{$item['full_name']}]({$item['html_url']}) ⭐: {$item['stargazers_count']} ⌨️: {$item['language']}$topic";
			if ($i > 99) {
				$text .= "\r\n\r\n     $description\r\n";
			} else {
				$text .= "\r\n\r\n\t$description\r\n";
			}
		}
	}
	file_put_contents('README.md', $text);
	return $text;
}



function jsonEncode($array) {
	return json_encode($array,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES, JSON_UNESCAPED_UNICODE);
}


/**
 * GPT问答 （单个）
 *
 * @param string $content 要问的问题
 * @param string $prompt  问题的提示语
 * @return string|null 问答结果
 */
function ask_gpt(string $content, string $prompt = '你是一个PHP开发工程师', $model = "gpt-3.5-turbo"): ?string {
	$api_key = defined('GPT_KEY') ? GPT_KEY : "sk-xxxxxxxxxxxxxxxxxxxx";
	$url = defined('GPT_URL') ? GPT_URL : "https://api.openai.com/v1/chat/completions";
	$data = ["model" => $model, "messages" => [['role' => 'system', 'content' => $content]],];
	$prompt && $data['prompt'] = $prompt;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json", "Authorization: Bearer " . $api_key]);
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


//获取项目描述(单个获取)
function getLinkDesc($url, $update = false) {
	$dir=CACHE_PATH . 'desc';
	is_dir($dir) || mkdir($dir);
	$cacheFile = $dir.'/'. md5($url) . '.json';
	$cacheData = file_exists($cacheFile) ? json_decode(file_get_contents($cacheFile), true) : [];
	if ($cacheData && !$update) {
		return $cacheData['answer'];
	}
	
	$answer = ask_gpt("用中文简单介绍一下这个项目，尽量控制在100个字以内。" . $url, "", "gpt-3.5-turbo-1106");
	$answer && file_put_contents($cacheFile, jsonEncode(['url' => $url, 'answer' => $answer]));
	print_r($url."\t".$answer."\r\n");
	return $answer;
}

/**
 * GPT问答 （多个）
 *
 * @param array  $content_list 要问的问题列表
 * @param string $prompt       问题的提示语
 * @param string $model        模型名称
 * @return array 问答结果
 */
function ask_gpt_multi(array $content_list, string $prompt = '你是一个PHP开发工程师', string $model = "gpt-3.5-turbo-1106"): array {
	$api_key = defined('GPT_KEY') ? GPT_KEY : "sk-xxxxxxxxxxxxxxxxxxxx";
	$url = defined('GPT_URL') ? GPT_URL : "https://api.openai.com/v1/chat/completions";
	$header = ["Content-Type: application/json", "Authorization: Bearer " . $api_key];
	$ch_multi = curl_multi_init();
	$handle = $res = [];
	foreach ($content_list as $i => $content) {
		$data = ["model" => $model, "messages" => [['role' => 'system', 'content' => $content]],];
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
		$res[$i]['question'] = $content_list[$i];
		$res[$i]['answer'] = $body["choices"][0]["message"]['content'] ?? '';
		$res[$i]['error'] = curl_error($ch) ?: ($res[$i]['answer'] ? '' : $body['error']);
		$res[$i]['code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		// $res[$i]['body'] =$body;
	}
	return $res;
}

//curl http请求
function http_request($url, $data = null, $header = [], $proxy = []) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30); //超时时间
	curl_setopt($curl, CURLOPT_URL, $url);
	if (is_array($proxy) && $proxy) {
		curl_setopt($curl, CURLOPT_PROXY, $proxy[0]);                         //代理服务器 ip+端口
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
function array_sort_by_column(&$arr, $col, $dir = SORT_ASC) {
	$sort_col = [];
	foreach ($arr as $key => $row) {
		$sort_col[$key] = $row[$col];
	}
	array_multisort($sort_col, $dir, $arr);
}
