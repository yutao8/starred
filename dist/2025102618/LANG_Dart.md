# Dart 仓库

- [AppFlowy-IO/AppFlowy](https://github.com/AppFlowy-IO/AppFlowy) ★66140 [`blog`] [`confluence-alternative`] [`content-management`] [`content-services`] [`documentation`] [`flutter`] [`note-taking`] [`notion-alternative`] [`project-management`] [`task-management`] [`team-collaboration`] [`wiki`]  
  AppFlowy 是一个开源的、基于 Markdown 的个人知识管理工具，旨在帮助用户组织和管理笔记、想法、待办事项等信息。它采用 React 框架构建，提供可定制的界面和丰富的功能，例如标签、链接、嵌入和自定义模板。用户可以通过简单的拖拽操作来组织笔记，并利用 Markdown 语法进行格式化。该项目支持多种平台，包括桌面应用程序和 Web 界面，让用户可以在不同设备上访问和管理自己的知识库。
- [GopeedLab/gopeed](https://github.com/GopeedLab/gopeed) ★20766 [`android`] [`bittorrent`] [`cross-platform`] [`debian`] [`downloader`] [`flutter`] [`golang`] [`http`] [`https`] [`ios`] [`macos`] [`magnet`] [`torrent`] [`ubuntu`] [`windows`]  
  Gopeed是一个用于高性能网络数据传输的Go语言库。它利用Goroutines和Channel实现并发数据处理，并提供灵活的配置选项，以适应各种网络场景。该库支持TCP和UDP协议，并包含错误处理和性能监控机制。  主要使用Go语言编写，并基于标准库进行扩展。  关键模块包括连接管理、数据包编解码和并发传输。  该库旨在提升网络应用的吞吐量和响应速度。
- [guozhigq/pilipala](https://github.com/guozhigq/pilipala) ★12683 [`bilibili`] [`dart`] [`flutter`] [`material-ui`]  
  pilipala 是基于 Go 语言的开源视频信息聚合平台，利用 Gin 框架暴露 RESTful API。核心功能包括从多个主流视频站点抓取番剧、电影及综艺列表，支持关键词搜索、按分类和时间筛选，返回结构化 JSON。后端采用 GORM 与 MySQL 存储持久化数据，Redis 缓存热点信息，任务调度通过 cron 与 goroutine 执行。项目提供完整 Dockerfile 及 docker‑compose 配置，支持一键部署服务，并可配合 Vue3 前端使用 Element‑Plus 构建响应式列表与详情页。文档简洁明了，方便快速上手，适合作为内部工具或对接第三方服务。
- [wanghongenpin/proxypin](https://github.com/wanghongenpin/proxypin) ★10822 [`capture-traffic`] [`charles`] [`fiddler`] [`proxy`] [`proxypin`] [`zhuabao`]  
  这是一个用于代理IP地址的Python项目。它提供了一个简单的API接口，可以获取、验证并使用代理IP。项目使用Python编写，并基于requests库进行网络请求。核心功能包括代理池管理、代理验证和轮询机制，以确保获取可用的代理IP。用户可以通过API调用获取代理列表，并指定需要验证的代理类型。该项目旨在为需要访问受限网站或进行网络爬虫的应用提供高效的代理服务。
- [ComicSparks/pikapika](https://github.com/ComicSparks/pikapika) ★7579 [`acg`] [`android`] [`bika`] [`comic-books`] [`cosplay`] [`cross-platform`] [`e-hentai`] [`flutter`] [`game`] [`go`] [`golang`] [`hentai`] [`ios`] [`picacg`] [`picacomic`] [`r-18`]  
  这是一个基于Python和Flask框架的漫画网站后端API。它提供漫画列表、章节、图片等数据的存储和检索功能，并支持用户登录、注册和漫画收藏。该API使用MySQL数据库存储数据，并通过RESTful API接口对外提供服务。  主要功能包括漫画信息管理、用户交互、图片上传和处理等。  项目目标是构建一个高效、稳定的漫画数据管理系统，方便后续开发漫画网站的前端页面。
- [xiaoyaocz/flutter_dmzj](https://github.com/xiaoyaocz/flutter_dmzj) ★2853  
  flutter_dmzj 提供基于 Flutter + Dart 的动漫之家阅读客户端，实现小说/漫画列表浏览、章节详情、离线缓存、搜索与收藏功能。项目采用 MVVM+Provider 架构，利用 http 包 RESTful 调用 dmzj API，使用 Hive 存储章节图片与阅读进度，PageView+CustomScrollView 负责滑动阅读体验。支持多主题与阅读模式切换，界面响应式布局兼容手机与平板。代码结构模块化，UI 与业务分离，易于维护与扩展。
- [Xmarmalade/alisthelper](https://github.com/Xmarmalade/alisthelper) ★2440 [`alist`] [`dart`] [`flutter`] [`gui`] [`macos`] [`windows`]  
  这是一个用于阿里云盘的辅助工具，旨在简化文件管理和操作。它使用 Python 和 `requests` 库，通过 API 获取文件列表，并提供批量下载、移动、删除等功能。  用户可以通过命令行界面轻松执行这些操作，提高文件处理效率。  项目包含清晰的代码注释，方便用户理解和扩展。
- [Predidit/oneAnime](https://github.com/Predidit/oneAnime) ★1753 [`android`] [`anime`] [`anime1`] [`danmaku`] [`flutter`] [`ios`] [`linux-desktop`] [`macos`] [`windows`]  
  oneAnime 是一款面向动漫爱好者的全栈应用，实时聚合国内外动漫信息，并提供智能推荐。后端用 Node.js + Express 编写，MongoDB 存储剧集、评分与元数据；定时抓取脚本利用第三方 API 与自建爬虫同步更新。前端采用 Vue 3 + Pinia，响应式布局，消费 RESTful 接口，支持搜索、标签过滤和剧集详情展示。项目通过 Docker 仓库与 GitHub Actions 自动构建、部署，支持快速上线和持续集成，无缝适配多种运行环境。
- [yang991178/fluent-reader-lite](https://github.com/yang991178/fluent-reader-lite) ★1595 [`android`] [`flutter`] [`ios`] [`rss`] [`rss-reader`]  
  Fluent Reader Lite是一个轻量级的文本阅读器，旨在提高阅读速度和理解力。它通过可定制的字体、行距和页面布局，以及多种阅读模式（例如朗读、单词高亮等）优化阅读体验。项目使用Python和PyQt5构建，核心模块包括文本渲染引擎、可定制设置和阅读模式控制。该应用易于部署和使用，适合需要高效阅读的用户。
- [kangpeiqin/bilivideo_down](https://github.com/kangpeiqin/bilivideo_down) ★855  
  这是一个用于下载B站视频的Python项目。它使用`requests`库获取视频链接，并使用`yt-dlp`下载视频。项目支持多种下载格式和清晰度，并提供命令行界面。用户只需提供视频链接，即可下载对应的视频文件。  代码简洁易懂，方便用户快速上手。
- [xausky/DockerRegisterCloud](https://github.com/xausky/DockerRegisterCloud) ★661  
  DockerRegisterCloud 是一个用于注册和管理 Docker 镜像的云平台。它使用 Python 和 Flask 框架构建，提供 API 接口供用户上传、下载、搜索和删除镜像。平台支持多用户和权限控制，并可配置不同的存储策略，例如本地存储或云存储。该项目旨在简化 Docker 镜像的云端管理，提高团队协作效率。
- [bravekingzhang/flutter_chat_box](https://github.com/bravekingzhang/flutter_chat_box) ★660 [`chatgpt`] [`flutter`]  
  这是一个使用Flutter构建的聊天框组件。它提供了一个灵活且美观的聊天界面，支持消息发送、接收、显示和滚动。该组件使用Dart语言开发，基于StatefulWidget实现动态更新和状态管理。  关键功能包括消息格式化、时间戳显示、用户头像和气泡样式自定义等。  用户可轻松集成到自己的Flutter应用中，快速构建聊天功能。
- [davidche1116/Sms](https://github.com/davidche1116/Sms) ★358 [`flutter`] [`sms`]  
  这是一个基于Python的短信发送工具，使用Twilio API发送短信。  项目使用Python的Twilio库进行API调用，并提供简单的命令行界面，方便用户输入接收者号码和短信内容。  用户只需配置Twilio账号和API密钥，即可发送短信。  该工具适用于需要快速发送短信的场景，例如通知、提醒等。
