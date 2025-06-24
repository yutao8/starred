<?php
return [
	'GITHUB_ACTOR'=>'yutao8', //GitHub 收藏者账号
	'GH_TOKEN'=>'github_p***************_YG', // GitHub 账号token
	'GPT_KEY'=>'sk-p0****************************5eFc', // OpenAI key
	'GPT_URL'=>'https://api.openai.com/v1/chat/completions', // OpenAI URL
	'GPT_MODELS'=> ['gpt-4o-mini',], // 可用的模型
	'GPT_PROMPT' => "你是一个专业的项目描述生成器。请根据提供GitHub项目链接生成一个200字左右的简短的项目描述。要求：
1. 直奔主题，清晰描述项目的核心功能和用途；
2. 简要说明技术实现方式（如主要语言、框架、关键模块等）；
3. 避免空泛描述、无关背景或宣传语,不要使用markdown结构，只需要生成一段纯文本；
4. 不要出现如“这是一个...”这类冗余开头；
5. 保持语言简洁精准，便于快速理解项目价值。",
	'ROOT_PATH'=> __DIR__,
	'CACHE_PATH'=> __DIR__ . '/.cache/',
	'DIST_PATH'=> __DIR__ . '/dist/'.date('YmdH').'/',
	'DESC_TIME'=> 0, // 描述缓存时间(0:永久缓存)
	'DEBUG_MODE'=> false, // 是否开启调试模式
	'PAGE_START'=> 1, // 开始页数
	'PAGE_END'=> 20, // 结束页数
	'PAGE_LIMIT'=> 100, // 每页数量
	'PAGE_CHUNK'=> 10, // 每页并发数
	'RECENT_LIMIT'=> 10, // 最近N条
	'LANG_LIMIT'=> 10, // 每栏语言数量
];
