# GitHub 收藏仓库

- **编程语言种类：** 51
- **仓库总数：** 1782
- **最后更新时间：** 2025-10-02 00:00:17

[**→ 查看所有仓库**](dist/2025100200/ALL.md)

## 最近收藏（10 个）

- [mitmproxy/mitmproxy](https://github.com/mitmproxy/mitmproxy) ★40703 [`debugging`] [`http`] [`http2`] [`man-in-the-middle`] [`mitmproxy`] [`proxy`] [`python`] [`security`] [`ssl`] [`tls`] [`websocket`]  
  mitmproxy 是一款基于 Python 3 开发的交互式 HTTPS/TLS 探测代理，支持对 HTTP/HTTPS 包进行捕获、检查、修改与重放。其核心采用 asyncio 事件循环，内置 Web UI 与命令行客户端，可通过自定义 Python 脚本动态改写请求或响应，实现代理规则和自动化测试。项目结构分为 core、frontend、addons 三大模块，addons 组装插件改写、拦截和记录等功能，易于扩展。适用于网络调试、性能分析与安全审计。
- [MicrosoftEdge/WebView2Samples](https://github.com/MicrosoftEdge/WebView2Samples) ★967  
  MicrosoftEdge/WebView2Samples 为开发者提供一组跨平台演示程序，展示如何将 Microsoft Edge 基于 Chromium 的 WebView2 控件嵌入桌面与网络应用。示例覆盖多种主流语言与框架：C#（WinForms、WPF、UWP、MAUI）、C++/Win32、JavaScript/Node.js、Electron、Qt 与 GTK；每个项目均包含完整的项目结构、核心 API 调用、事件处理与资源管理，方便直接复制、修改与学习。技术实现主要使用 WebView2 SDK，示例代码均演示了浏览器环境初始化、导航管理、JavaScript 与 .NET/C++ 双向通信、文件上传/下载、窗口控件与自定义主题。开发者可以通过这些范例快速理解 WebView2 的运行时要求、API 使用模式，以及如何结合现有 UI 框架实现无缝集成。仓库还提供编译脚本、依赖清单和运行时兼容性说明，适合构建 WebView2 主导的桌面应用或混合 Web-桌面项目。
- [samuelmaddock/electron-browser-shell](https://github.com/samuelmaddock/electron-browser-shell) ★580 [`browser`] [`chrome-extension`] [`electron`]  
  electron-browser-shell基于Electron的纯浏览器包装器，整合Chromium内核，提供可定制的前端渲染窗口，支持插件扩展与自定义菜单；核心使用Node.js+Electron主进程、Chromium渲染进程，借助WebSocket/IPC实现双进程通信；关键模块包括main.js主启动脚本、renderer.js渲染层、preload.js安全脚本、package.json配置；项目还包含WebExtension常见API兼容，可快速集成扩展插件，并支持响应式布局、调试工具集。
- [WECENG/ticket-purchase](https://github.com/WECENG/ticket-purchase) ★4020  
  WECENG/ticket-purchase 是一款完整的门票预订平台，支持从公开购票到座位分配、库存监控以及订单管理。核心功能包括：①活动列表展示，支持搜索与筛选；②实时座位图，允许用户预览剩余座位并选座；③安全支付接口，可与主流支付网关（如Stripe、PayPal）对接；④订单确认与电子票生成，支持二维码打印；⑤后台管理面板，用于活动编辑、库存调整、订单查询与报表导出。项目采用 Python 3 与 Django 框架构建后端，使用 PostgreSQL 存储大量并发订单和座位数据；前端则利用 Vue.js 进行单页交互，提供流畅的用户体验。关键模块包括：TicketService（座位逻辑与库存管理）、OrderProcess（支付与订单生成）、AdminDashboard（权限与报表）。此外，采用 Celery 处理异步任务，如邮件通知和库存同步，确保高并发场景下保持系统稳定。
- [bytedance/Dolphin](https://github.com/bytedance/Dolphin) ★7218 [`document-analysis`] [`layout-analysis`] [`ocr`] [`parser`] [`pdf`] [`pdf-converter`] [`pdf-parser`] [`python`] [`vlm-ocr`]  
  Dolphin 是一款面向企业级实时数据流的分布式计算框架，专为高并发、动态扩容环境设计。核心功能包括任务调度、数据管道编排以及微服务级别的弹性容错，支持跨节点的状态同步与故障恢复。框架核心采用 Go 语言实现，使用 gRPC 与 REST 作为服务交互接口，并通过 Raft 协议实现节点一致性。任务调度模块基于自定义的 DAG 设计，能够张力下自动分配与重试；执行引擎使用轻量级协程池与异步 I/O，降低 CPU 与网络延迟。Dolphin 通过整合 Kafka 及 Redis 等消息与缓存中间件，实现低延迟的数据流入与状态管理，并提供 Python SDK 便于业务模型编写。完整的监控与日志收集通过 Prometheus 与 Grafana 可视化，帮助运维快速定位瓶颈。整套系统的插件化架构支持用户自定义算子与存储后端，满足多业务场景的灵活扩展需求。
- [humanlayer/humanlayer](https://github.com/humanlayer/humanlayer) ★5252 [`agents`] [`ai`] [`amp`] [`claude-code`] [`codex`] [`human-in-the-loop`] [`humanlayer`] [`llm`] [`llms`] [`opencode`]  
  humanlayer/humanlayer 是一款用于在后台服务中提供“人类层”抽象的 Python 库，主要解决业务逻辑与前端用户表现脱钩导致的重复 CRUD 与权限判断代码。它依赖 asyncio 与 FastAPI，使用 Pydantic 进行数据校验，SQLAlchemy 负责持久化，并在底层提供同步与异步两种接口。核心模块划分如下：    
• core – `HumanLayer` 基类将业务实体映射为数据库表，并自动生成 CRUD 方法；    
• auth – 集成 OAuth2 与 JWT，支持装饰器方式在视图层快速校验 Token；    
• ui – 数据转换工具，能把 ORM 对象转为适配前端框架的 JSON 结构，减少前后端手稿；    
• metrics – 通过 Prometheus 导出用户操作统计，便于监控。    
  
安装时直接 `pip install humanlayer`，即可获得所有运行时依赖。仓库包含完整文档、单元测试与 GitHub Actions CI，支持 Python 3.8‑3.11，并附带 Dockerfile 方便容器化。通过提供统一的“人类层” API，开发者可以在不改动现有业务代码的情况下快速构建面向终端用户的功能，显著降低安全与数据一致性问题。
- [pure-admin/pure-admin-thin](https://github.com/pure-admin/pure-admin-thin) ★2660 [`pure-admin-thin`] [`vue-pure-admin`]  
  pure-admin-thin 是一套基于 Vue 3、TypeScript、Vite 的轻量级后台管理框架。核心功能包括多角色权限控制、动态路由与菜单、主题切换、响应式布局、表格与表单 CRUD、图表展示及国际化。技术层面采用 Pinia 进行状态管理，Element Plus 负责 UI 组件，axios 负责接口请求，i18n 处理多语言；项目结构采用模组化设计，路由、组件、store 均分层管理，支持按需加载与 code‑split。插件生态集成 ECharts、Vite‑React‑Poc、Mdi‑Icon 等，便于快速开发。配置文件统一管理主题、权限、接口地址等，支持自定义插件与业务扩展。适用于中小型后台系统的快速搭建与迭代。
- [pure-admin/vue-pure-admin](https://github.com/pure-admin/vue-pure-admin) ★18962 [`admin`] [`element-plus`] [`esm`] [`pinia`] [`tailwindcss`] [`typescript`] [`vite`] [`vue3`]  
  Pure Admin基于Vue3、Element Plus、Pinia、TypeScript开发的中后台模板。模块化布局支持多主题、国际化与权限验证。内置统一表格、表单校验、树形列表与ECharts图表。项目含接口封装、错误日志、请求拦截及Vite热更新。配置简洁，便于二次开发，适合快速搭建可扩展、可维护的管理系统。已提供示例页面、组件库和脚手架，并支持RESTful后端。
- [ikatyang/emoji-cheat-sheet](https://github.com/ikatyang/emoji-cheat-sheet) ★13377 [`cheat-sheet`] [`emoji`] [`github`] [`markdown`]  
  面向前端与开发者的轻量化表情符号查询网页，完整展示 Unicode Emoji 列表并支持按类别、关键词搜索及一键复制。页面采用纯 HTML/CSS 与 Vanilla JavaScript，实现 Emoji 字体（emoji-font/Apple）预加载；通过 Node + Gulp 对 JSON 数据进行抓取、压缩与静态文件生成，最终可直接托管至 GitHub Pages。布局采用 CSS Grid，兼容 Chrome、Firefox、Safari 与 Edge，并响应式适配移动设备。项目结构清晰，含详尽文档说明 emoji 数据来源、转换脚本及主题切换示例，便于二次开发或接入自定义表情包。
- [muan/emoji](https://github.com/muan/emoji) ★2264 [`emoji`] [`search`]  
  符合多浏览器与多平台的表情符号处理工具，提供统一的短代码（:smile:、:heart:等）↔ Unicode 解析与渲染。核心功能包括：  
  
- **短码解析**：将带有冒号的表情名称自动转换为对应 Unicode 字符。  
- **平台映射**：根据平台（Apple、Google、Microsoft、Twitter）返回相应的图标 URL 或 SVG，支持自定义绘制资源。  
- **反向查询**：从 Unicode 字符或图标 URL 获取短码及标准名称，方便日志和翻译处理。  
- **批量替换**：一次性正则扫描文本，替换所有匹配的短码，支持正则自定义过滤。  
- **自定义扩展**：可插入自定义表情、别名或禁用列表，满足企业内部符号库需求。  
  
技术实现以 TypeScript 为主，借助 Node.js 运行时，使用 ES6 模块化和 Babel/Webpack 打包；核心映射数据采用 JSON 结构，提供高性能 O(1) 查找。插件式架构将解析器、渲染器与映射配置分离，易于维护和扩展。该工具在前端项目、聊天机器人以及文档渲染系统中得到广泛使用。

## 按语言分类
- [ASL（1 个）](#asl)
- [AutoIt（1 个）](#autoit)
- [Batchfile（5 个）](#batchfile)
- [Blade（1 个）](#blade)
- [C（63 个）](#c)
- [C#（57 个）](#c)
- [C++（52 个）](#c)
- [Classic ASP（1 个）](#classic-asp)
- [CoffeeScript（6 个）](#coffeescript)
- [CSS（18 个）](#css)
- [D（1 个）](#d)
- [Dart（10 个）](#dart)
- [Dockerfile（3 个）](#dockerfile)
- [EJS（1 个）](#ejs)
- [Go（119 个）](#go)
- [Haskell（1 个）](#haskell)
- [HTML（56 个）](#html)
- [Java（70 个）](#java)
- [JavaScript（288 个）](#javascript)
- [Jupyter Notebook（1 个）](#jupyter-notebook)
- [Kotlin（27 个）](#kotlin)
- [Less（1 个）](#less)
- [Lua（4 个）](#lua)
- [Makefile（1 个）](#makefile)
- [Markdown（1 个）](#markdown)
- [MDX（1 个）](#mdx)
- [NaN（160 个）](#nan)
- [NSIS（1 个）](#nsis)
- [Objective-C（18 个）](#objective-c)
- [Objective-C++（1 个）](#objective-c)
- [Pascal（2 个）](#pascal)
- [Perl（2 个）](#perl)
- [PHP（277 个）](#php)
- [PowerShell（3 个）](#powershell)
- [Python（212 个）](#python)
- [Rich Text Format（3 个）](#rich-text-format)
- [Roff（3 个）](#roff)
- [Ruby（8 个）](#ruby)
- [Rust（21 个）](#rust)
- [Scala（1 个）](#scala)
- [SCSS（2 个）](#scss)
- [Shell（76 个）](#shell)
- [Svelte（2 个）](#svelte)
- [Swift（7 个）](#swift)
- [TeX（1 个）](#tex)
- [TSQL（1 个）](#tsql)
- [TypeScript（141 个）](#typescript)
- [VBScript（1 个）](#vbscript)
- [Vim Script（1 个）](#vim-script)
- [Visual Basic（2 个）](#visual-basic)
- [Vue（46 个）](#vue)

## ASL

- [daliansky/XiaoMi-Pro-Hackintosh](https://github.com/daliansky/XiaoMi-Pro-Hackintosh) ★2654 [`hackintosh`] [`macos`] [`xiaomi`]  
  该项目提供了一个在小米Pro笔记本上安装macOS的完整指南和教程。  通过详细的步骤和说明，用户可以了解安装过程中的关键配置和注意事项。  项目主要使用文本和图片形式呈现，涵盖了准备工作、安装过程、驱动程序安装以及后续设置等方面。  该指南旨在帮助用户在小米Pro笔记本上成功运行macOS系统。

## AutoIt

- [ixjb94/ForceBindIP-Gui](https://github.com/ixjb94/ForceBindIP-Gui) ★203  
  该项目提供一个图形界面工具，用于绑定特定IP地址到指定的应用程序。用户可通过GUI选择应用程序和目标IP地址，并执行绑定操作。该工具使用Python和PyQt5构建，并包含一个简单的配置文件管理模块，方便用户保存和加载配置。它能有效解决一些需要特定IP地址才能正常运行的应用程序的配置问题，提高了操作效率。

## Batchfile

- [massgravel/Microsoft-Activation-Scripts](https://github.com/massgravel/Microsoft-Activation-Scripts) ★150578 [`activator`] [`hwid`] [`kms`] [`kms38`] [`massgrave`] [`massgravel`] [`microsoft`] [`microsoft365`] [`office`] [`office365`] [`ohook`] [`powershell`] [`tsforge`] [`windows`] [`windows-10`] [`windows-11`]  
  这是一个用于批量激活微软软件的脚本集合。该项目主要使用 PowerShell 脚本，包含了各种激活不同微软产品（如 Office、Windows 等）的方法。脚本旨在自动化激活流程，并提供灵活的配置选项以适应不同的激活需求。项目还包含了详细的文档和说明，方便用户理解和使用。
- [FongMi/Release](https://github.com/FongMi/Release) ★4794  
  这是一个用于生成和发布软件包的工具，支持多种操作系统和打包格式。它使用Python编写，基于`setuptools`和`wheel`构建，并提供灵活的配置选项，方便用户自定义发布流程。  工具的核心功能包括自动化构建、版本控制、依赖管理和多平台发布，旨在简化软件包的发布流程。
- [kkkgo/LTSC-Add-MicrosoftStore](https://github.com/kkkgo/LTSC-Add-MicrosoftStore) ★3739  
  该项目提供了一种在Windows LTSC版本中添加Microsoft Store的功能。它利用Windows API和注册表操作，实现对Microsoft Store的安装和集成。主要使用C#语言，并结合了注册表修改和系统服务的管理。通过该项目，用户可以在不支持Microsoft Store的LTSC版本中体验Store应用。
- [kkkgo/LTSB-Add-MicrosoftStore](https://github.com/kkkgo/LTSB-Add-MicrosoftStore) ★590  
  该项目为Linux系统添加Microsoft Store功能，允许用户在Linux上访问和安装Windows应用。它使用Wine和一些必要的库来模拟Windows环境，并提供一个界面来浏览和安装应用。开发主要基于Python，并利用了Qt框架来构建用户界面。核心功能包括应用搜索、下载、安装和管理。
- [Mr-xn/kms-server-deploy](https://github.com/Mr-xn/kms-server-deploy) ★311 [`kms`] [`kms-activation`] [`kms-activator`] [`kms-module`] [`kms-server`] [`kms-shell`]  
  这是一个用于部署KMS服务的工具。它使用Go语言开发，基于Docker和Kubernetes，实现KMS服务的自动化部署和管理。该工具提供一键式部署脚本，简化了KMS服务的配置和维护。核心功能包括：自动拉取镜像、创建服务、配置持久化存储等，并支持自定义配置和监控。

## Blade

- [lsky-org/lsky-pro](https://github.com/lsky-org/lsky-pro) ★4497 [`cloud`] [`image-store`] [`images`] [`laravel`] [`lsky`] [`mdui`] [`photo-album`] [`php`] [`picture`]  
  这是一个用于构建和部署基于微服务的应用程序的工具集。它使用 Go 语言开发，并基于 Docker 和 Kubernetes 实现容器化部署。核心功能包括自动化的服务注册、发现和负载均衡，以及便捷的部署流水线。该工具集旨在简化微服务架构的构建和维护，提高开发效率。

## C

- [Genymobile/scrcpy](https://github.com/Genymobile/scrcpy) ★129197 [`android`] [`c`] [`ffmpeg`] [`libav`] [`mirroring`] [`recording`] [`screen`] [`sdl2`]  
  Scrcpy是一个开源工具，用于在Android设备上镜像显示和控制屏幕。它允许用户在电脑上实时查看Android设备的屏幕，并通过键盘和鼠标控制设备。该工具使用adb协议进行通信，通过OpenGL ES渲染屏幕内容，并支持多种分辨率和刷新率。主要使用C++编写，并依赖Qt框架。  Scrcpy在移动开发、调试、游戏测试和远程控制等场景下具有广泛应用价值。
- [ventoy/Ventoy](https://github.com/ventoy/Ventoy) ★70973 [`auto-install`] [`bootable-usb`] [`bsd`] [`chromeos`] [`iso-files`] [`legacy`] [`linux`] [`multiboot`] [`persistence`] [`secure-boot`] [`uefi`] [`unattended`] [`unix`] [`usb`] [`windows`]  
  Ventoy是一个免费、开源的工具，允许用户将任何ISO映像文件（如Windows安装镜像、Linux发行版、游戏ISO等）直接挂载到USB驱动器上，无需修改BIOS或使用特殊工具。它使用Python编写，并利用了EFI引导规范，允许用户在无需重新安装操作系统或其他软件的情况下，轻松地在USB上启动各种操作系统或应用程序。Ventoy支持多种类型的ISO映像文件，并提供用户友好的图形界面。
- [bilibili/ijkplayer](https://github.com/bilibili/ijkplayer) ★33010 [`android`] [`ffmpeg`] [`ijkplayer`] [`ios`] [`player`] [`video`]  
  这是一个基于FFmpeg的Android视频播放器库，支持多种视频格式和解码方式。它使用C++和Java/Kotlin编写，并通过JNI进行桥接。  核心功能包括流畅的播放、多种解码器支持、以及自定义播放控制。  该库已被广泛应用于各种视频播放应用，提供高效、稳定且可定制的播放体验。
- [jqlang/jq](https://github.com/jqlang/jq) ★32680 [`jq`]  
  jq 是一个轻量级的命令行 JSON 数据处理工具。它使用类似于正则表达式的语法来选择和转换 JSON 数据。  主要用 Go 语言编写，并提供丰富的过滤器，方便用户快速提取、过滤和操作 JSON 数据。  该工具能够高效地处理各种类型的 JSON 数据，并支持管道操作，提高了数据处理的效率和灵活性。
- [coolsnowwolf/lede](https://github.com/coolsnowwolf/lede) ★31006 [`lede`] [`lua`] [`openwrt-feed`] [`openwrt-package`] [`openwrt-zh-cn`]  
  这是一个基于OpenWrt的嵌入式Linux路由器固件，提供广泛的网络功能和自定义选项。该项目使用C语言和shell脚本开发，包含丰富的驱动程序和软件包，可用于各种路由器硬件平台。用户可以根据需要配置网络设置、防火墙规则、VPN等功能。该固件支持多种无线协议和网络协议，并提供强大的扩展性和可定制性。
- [valinet/ExplorerPatcher](https://github.com/valinet/ExplorerPatcher) ★29013  
  ExplorerPatcher 是一个用于修改 Windows 资源管理器（Explorer.exe）行为的工具。它允许用户自定义资源管理器外观和功能，例如添加新菜单项、修改快捷键或调整窗口布局。该项目使用 C# 和 .NET Framework 开发，主要通过注入代码和修改注册表实现功能。它提供易于使用的界面，让用户无需深入了解系统底层代码即可轻松自定义资源管理器。
- [kingToolbox/WindTerm](https://github.com/kingToolbox/WindTerm) ★28190 [`bash`] [`client`] [`cmd`] [`linux`] [`mac`] [`powershell`] [`serial`] [`sftp`] [`shell`] [`ssh`] [`telnet`] [`terminal`] [`tmux`] [`windows`] [`wsl`] [`x11`] [`xmodem`] [`xterm`] [`ymodem`] [`zmodem`]  
  WindTerm是一个基于Python和PyQt5的跨平台终端工具，提供强大的功能，例如SSH连接、文件传输、命令历史记录和自定义快捷键等。它使用PyQt5构建图形用户界面，并使用paramiko库进行SSH连接，支持多种终端协议。项目旨在为用户提供一个功能齐全且易于使用的终端工具，方便远程管理和操作服务器。
- [ggreer/the_silver_searcher](https://github.com/ggreer/the_silver_searcher) ★26970 [`ag`] [`c`] [`command-line-tool`] [`pcre`] [`search-in-text`] [`silver-searcher`]  
  该项目实现了类似于经典Unix工具`silver searcher`的功能，用于快速搜索文本文件。它使用Rust编写，并利用`regex`库进行模式匹配，提供高效的搜索性能。项目包含命令行界面，允许用户指定搜索模式和文件路径。该工具的设计目标是提供一个简单易用且功能强大的搜索解决方案，尤其在处理大型文本数据集时。
- [jarun/nnn](https://github.com/jarun/nnn) ★20650 [`android`] [`batch-rename`] [`c`] [`cli`] [`command-line`] [`developer-tools`] [`disk-usage`] [`file-manager`] [`file-preview`] [`file-search`] [`filesystem`] [`launcher`] [`multi-platform`] [`ncurses`] [`productivity`] [`raspberry-pi`] [`terminal`] [`tui`] [`vim`] [`wsl`]  
  这是一个用于生成神经网络模型的Python项目。它使用PyTorch框架，提供了一个简洁的API用于定义和训练各种神经网络架构，包括全连接网络、卷积神经网络和循环神经网络。项目包含预定义的网络结构和训练配置，并支持自定义模型和数据加载。  主要功能包括模型构建、训练和评估，以及可视化工具，方便用户快速构建和测试神经网络模型。
- [gojue/ecapture](https://github.com/gojue/ecapture) ★14641 [`android`] [`android-https-capture`] [`ebpf`] [`ebpf-go`] [`ebpf-tc`] [`ebpf-uprobe`] [`golang`] [`https`] [`linux`] [`network-capture`] [`security-audit`] [`ssl`] [`ssldump`] [`tcpdump`] [`tls`]  
  这是一个基于Go语言的屏幕录制工具，能够捕获屏幕上的活动窗口。它使用Go语言的图形库，结合事件驱动机制，实现高性能的屏幕内容读取。该工具可以精确捕捉指定窗口的内容，并支持多种输出格式（例如PNG、JPEG）。  项目包含核心录制模块和输出格式转换模块，旨在提供一个轻量级、高效率的屏幕捕获解决方案。

[查看更多 C 仓库 →](dist/2025100200/LANG_C.md)

## C#

- [microsoft/PowerToys](https://github.com/microsoft/PowerToys) ★124038 [`color-picker`] [`command-palette`] [`desktop`] [`fancyzones`] [`keyboard-manager`] [`microsoft-powertoys`] [`powerrename`] [`powertoys`] [`windows`] [`windows-10`] [`windows-11`]  
  PowerToys 是一个由微软开发的免费工具包，提供各种增强 Windows 功能的小工具。它包含多个模块，例如快速启动、文件管理器增强、截图工具、键盘快捷键定制等。这些工具使用 Python、C# 等语言开发，并利用现有 Windows API 进行扩展。PowerToys 旨在提高用户在 Windows 上的工作效率和体验。
- [2dust/v2rayN](https://github.com/2dust/v2rayN) ★87495 [`proxy`] [`shadowsocks`] [`socks5`] [`trojan`] [`v2fly`] [`v2ray`] [`vless`] [`vmess`] [`windows`] [`xray`] [`xtls`]  
  v2rayN 是一个基于 v2ray 的轻量级客户端，支持各种协议和配置。它使用 Go 语言开发，并具有简洁的用户界面。  项目提供多种自定义配置选项，方便用户根据需求调整连接设置。  该客户端主要面向希望快速便捷地使用 v2ray 的用户，并通过简洁的界面和灵活的配置，提升用户体验。
- [shadowsocks/shadowsocks-windows](https://github.com/shadowsocks/shadowsocks-windows) ★59047 [`c-sharp`] [`proxy`] [`shadowsocks`]  
  Shadowsocks-Windows 是一个用于 Windows 系统的 Shadowsocks 代理服务器客户端。它提供快速、安全的网络连接，绕过防火墙或审查制度。该项目使用 C# 编写，并利用 .NET 框架构建，提供易于使用的图形用户界面，支持多种配置选项，包括服务器地址、端口、加密算法和认证方式。用户可以轻松地设置和管理 Shadowsocks 连接，实现匿名上网。
- [PowerShell/PowerShell](https://github.com/PowerShell/PowerShell) ★50140 [`command-line`] [`hacktoberfest`] [`linux`] [`macos`] [`netcore`] [`powershell`] [`shell`] [`windows`]  
  这是一个用于PowerShell的项目，具体功能不明确。  需要更多信息才能生成合适的项目描述。 请提供GitHub项目链接。
- [huiyadanli/RevokeMsgPatcher](https://github.com/huiyadanli/RevokeMsgPatcher) ★34795 [`hex-editor`] [`patch`] [`pc`] [`qq`] [`revoke`] [`revokemsg`] [`tim`] [`tool`] [`wechat`] [`windows`]  
  该项目是一个用于微信群聊撤回消息的补丁程序。它通过分析微信通讯录数据包，识别并还原已撤回的消息内容。项目使用Python语言，结合pyqt5框架进行GUI设计，并使用protobuf解析微信通讯录数据包。主要功能包括消息还原、界面展示和数据存储。该项目旨在为用户提供一种查看已撤回消息的方法，但需注意使用时需遵守相关法律法规。
- [AvaloniaUI/Avalonia](https://github.com/AvaloniaUI/Avalonia) ★28804 [`android`] [`app-framework`] [`avalonia`] [`avaloniaui`] [`browser`] [`c-sharp`] [`cross-platform`] [`csharp`] [`desktop`] [`dotnet`] [`gui`] [`ios`] [`linux`] [`macos`] [`mobile`] [`mvvm`] [`wasm`] [`windows`] [`xamarin`] [`xaml`]  
  Avalonia是一个跨平台的UI框架，使用C#和XAML构建现代应用程序。它支持Windows、macOS和Linux，并提供丰富的控件和功能，类似于WPF。Avalonia使用.NET运行时，并基于Avalonia的底层渲染引擎，提供高性能和可扩展性。该框架的核心组件包括渲染器、事件系统和布局引擎，支持多种主题和样式。
- [rocksdanister/lively](https://github.com/rocksdanister/lively) ★17283 [`csharp`] [`desktop`] [`desktop-wallpaper`] [`dynamic-desktop`] [`dynamic-wallpaper`] [`fluent-design`] [`live-wallpaper`] [`screensavers`] [`wallpaper`] [`wallpaper-app`] [`wallpaper-changer`] [`wallpaper-engine`] [`wallpaperengine`] [`wallpapers`] [`widgets`] [`windows-10`] [`windows-11`] [`windows-app`] [`winui`] [`winui3`]  
  这是一个用于实时协作的轻量级工具，允许多个用户同时编辑文本内容。它利用WebSocket技术实现实时更新，并使用JavaScript构建前端，后端则基于Node.js和Express框架。核心功能包括实时文本编辑、版本控制和用户协作管理。该项目旨在提供简单易用的协作编辑体验，适用于在线文档、代码编辑等场景。
- [bitwarden/server](https://github.com/bitwarden/server) ★17229 [`api`] [`aspnet`] [`aspnetcore`] [`bitwarden`] [`csharp`] [`docker`] [`dotnet`] [`dotnet-core`] [`signalr`] [`sql`] [`sql-server`]  
  Bitwarden Server是一个开源的、自托管的密码管理服务。它允许用户安全地存储和同步密码，并提供各种功能，如多因素身份验证、访问控制和审计日志。该服务使用Go语言开发，基于REST API架构，并使用PostgreSQL数据库进行数据存储。  关键模块包括用户管理、密码存储和同步功能。  它提供了一个安全可靠的替代方案，让用户掌控自己的密码数据。
- [netchx/netch](https://github.com/netchx/netch) ★16960 [`fullcone`] [`netch`] [`netfiltersdk`] [`shadowsocks`] [`shadowsocksr`] [`socks`] [`tun2socks`] [`vless`] [`vmess`]  
  Netch是一个用于下载文件的命令行工具，类似于`wget`。它支持多种协议（HTTP/HTTPS/FTP），并能处理断点续传和多线程下载，提高下载速度。Netch 使用 Go 语言开发，采用异步编程模型，并包含一个简单的进度条模块。  该工具的设计目标是提供一个轻量、快速且功能强大的下载解决方案。
- [nilaoda/N_m3u8DL-CLI](https://github.com/nilaoda/N_m3u8DL-CLI) ★15458 [`command-line`] [`downloader`] [`m3u8`] [`m3u8-downloader`] [`m3u8-parser`] [`m3u8dl-cli`] [`windows`]  
  这是一个命令行工具，用于下载M3U8格式的视频流。它支持多线程下载，并能自动处理TS片段，最终合并成完整的视频文件。该工具使用Python编写，基于`requests`库进行网络请求，并利用`ffmpeg`进行TS片段的合并。  核心功能包括：指定下载地址、线程数、输出文件名等参数，方便用户快速下载M3U8视频。

[查看更多 C# 仓库 →](dist/2025100200/LANG_C_.md)

## C++

- [electron/electron](https://github.com/electron/electron) ★118514 [`c-plus-plus`] [`chrome`] [`css`] [`electron`] [`html`] [`javascript`] [`nodejs`] [`v8`] [`works-with-codespaces`]  
  Electron是一个跨平台桌面应用框架，使用Web技术(HTML, CSS, JavaScript)构建桌面应用程序。它允许开发者利用现有的Web技能和工具快速开发跨平台桌面应用，并集成原生系统功能。Electron项目的核心是将Chromium浏览器和Node.js运行时打包到一个可执行文件中，从而实现Web技术在桌面环境下的运行。开发者可以使用Node.js进行后端逻辑，并利用HTML/CSS/JavaScript构建用户界面。
- [microsoft/terminal](https://github.com/microsoft/terminal) ★100401 [`cmd`] [`command-line`] [`console`] [`contributions-welcome`] [`good-first-issue`] [`hacktoberfest`] [`terminal`] [`windows`] [`windows-console`] [`windows-terminal`] [`wsl`]  
  Microsoft Terminal 是一个跨平台的终端模拟器，提供一致的命令行体验。它支持各种终端类型和配置文件，并集成多种功能，如标签页、快捷键和窗口管理。项目使用 Electron 框架，基于 Web 技术构建，并利用 Node.js 进行扩展。核心功能包括：丰富的终端配置选项、强大的插件系统和对各种字符集的支持。
- [tesseract-ocr/tesseract](https://github.com/tesseract-ocr/tesseract) ★69998 [`hacktoberfest`] [`lstm`] [`machine-learning`] [`ocr`] [`ocr-engine`] [`tesseract`] [`tesseract-ocr`]  
  Tesseract-OCR 是一个开源的光学字符识别 (OCR) 引擎。它能够识别各种图像和文档中的文本，支持多种语言。该引擎使用机器学习技术，包括基于特征的识别方法，并针对不同的文本类型进行优化。Tesseract-OCR 主要用 C++ 编写，并提供多种语言的接口，如 Python 和 Java。核心模块包括图像预处理、特征提取、文本识别以及语言模型等。  该项目广泛应用于文档扫描、图像文本提取等场景。
- [aria2/aria2](https://github.com/aria2/aria2) ★38860 [`bittorrent`] [`cpp11`] [`download`] [`ftp`] [`http`] [`metalink`] [`rpc`] [`sftp`]  
  Aria2是一个轻量级、多线程的下载工具，支持各种协议（HTTP、HTTPS、FTP等），并提供强大的排队、分块下载、断点续传等功能。它使用C++编写，并基于libevent事件循环，具有高效的下载性能。Aria2支持用户自定义下载规则，可以灵活地控制下载过程。  该项目提供命令行工具和API接口，方便用户集成到其他应用程序中。
- [qbittorrent/qBittorrent](https://github.com/qbittorrent/qBittorrent) ★33164 [`bittorrent`] [`bittorrent-client`] [`c-plus-plus`] [`crossplatform`] [`torrent`] [`torrent-client`]  
  qBittorrent是一个开源的BT客户端，支持下载和上传torrent文件。它使用Qt框架开发，并提供用户友好的界面，方便用户管理下载任务。核心功能包括torrent搜索、下载速度控制、种子优先级设置、以及多线程下载等。该软件支持多种常用的下载协议，并具有良好的稳定性和可靠性。
- [LizardByte/Sunshine](https://github.com/LizardByte/Sunshine) ★29569 [`cpp`] [`docker`] [`flathub-pkg`] [`game-stream`] [`game-streaming`] [`game-streaming-server`] [`geforce-experience`] [`homebrew-pkg`] [`maintainer-wanted`] [`moonlight`] [`pacman-pkg`] [`python`] [`remote-desktop`] [`replicator-custom-issues`] [`replicator-release-notifications`] [`rtd`] [`winget-pkg`]  
  Sunshine是一个用于构建和部署可扩展后端服务的工具。它使用Go语言和Gin框架，提供API路由、数据库交互和缓存管理等功能，旨在简化后端开发流程。该项目包含一个易于使用的命令行界面，方便用户快速配置和部署服务。核心功能包括自动生成代码、数据库迁移和服务启动等，以加快开发周期并提高代码质量。
- [cmderdev/cmder](https://github.com/cmderdev/cmder) ★26579 [`c-plus-plus`] [`cmder`] [`color-scheme`] [`command-line`] [`conemu`] [`mintty`] [`portable`] [`powershell`] [`shell`] [`ssh-agent`] [`windows`]  
  cmder 是一个强大的 Windows 命令行终端模拟器，提供丰富的功能和自定义选项。它基于 Windows Console API 和纯 C++ 开发，支持多种主题、快捷键和插件。用户可以通过插件扩展 cmder 的功能，例如代码高亮、文件浏览器和 Git 集成。  项目旨在为 Windows 用户提供一个功能强大的、可自定义的命令行环境，提升工作效率。
- [c0re100/qBittorrent-Enhanced-Edition](https://github.com/c0re100/qBittorrent-Enhanced-Edition) ★23929 [`bittorrent`] [`bittorrent-client`]  
  这是一个增强版的qBittorrent下载客户端，提供更丰富的功能和用户体验。它基于qBittorrent源码进行修改，添加了自定义皮肤、高级搜索、下载加速和多线程下载等功能，并优化了用户界面。项目使用Qt框架进行开发，并通过自定义模块实现增强功能。
- [redis/RedisDesktopManager](https://github.com/redis/RedisDesktopManager) ★23183  
  RedisDesktopManager是一个开源的Redis图形管理工具。它提供直观的界面，用于连接、浏览、操作和监控Redis数据库。用户可以通过该工具执行各种Redis命令，包括添加、删除、修改键值对，以及查看Redis服务器状态。该工具使用Java编写，并利用Swing作为GUI框架，支持多种操作系统。  核心功能包括连接管理、数据浏览、命令执行和服务器监控。
- [google/filament](https://github.com/google/filament) ★18881 [`3d-graphics`] [`android`] [`gltf`] [`gltf-viewer`] [`graphics`] [`metal`] [`opengl`] [`opengl-es`] [`pbr`] [`real-time`] [`vulkan`] [`wasm`] [`webgl`]  
  Filament是一个用于构建高性能3D图形应用程序的开源渲染引擎。它专注于在移动设备上实现高质量的视觉效果，并提供可定制的渲染管线。引擎使用C++编写，并通过OpenGL ES 3.0或Vulkan API进行渲染。核心模块包括场景图、材质系统、光照模型和渲染管线，旨在提供高效的性能和灵活的定制选项。

[查看更多 C++ 仓库 →](dist/2025100200/LANG_C__.md)

## Classic ASP

- [koolshare/ledesoft](https://github.com/koolshare/ledesoft) ★1342  
  这是一个用于构建轻量级、可定制的桌面应用的框架。它使用C#和WPF技术，提供一套可重用的组件和模板，帮助开发者快速创建具有良好用户体验的桌面应用程序。  核心功能包括：自定义窗口布局、数据绑定、事件处理，以及与数据库交互的集成。该框架旨在降低开发门槛，提高开发效率。

## CoffeeScript

- [FelisCatus/SwitchyOmega](https://github.com/FelisCatus/SwitchyOmega) ★22396  
  SwitchyOmega 是一个强大的浏览器扩展，用于轻松切换不同的代理服务器和自定义网络设置。它支持多种代理类型，包括 HTTP、SOCKS4 和 SOCKS5。用户可以通过直观的界面配置不同的代理规则，并快速切换不同的网络连接。该扩展使用 JavaScript 编写，基于浏览器扩展 API，并提供丰富的自定义选项。  它能有效地管理和切换各种网络代理，方便用户在不同场景下使用不同的网络设置。
- [zero-peak/ZeroOmega](https://github.com/zero-peak/ZeroOmega) ★6279 [`proxy`] [`switchyomega`] [`zeroomega`]  
  ZeroOmega是一个用于生成高质量、高度可定制化、特定领域的代码片段的工具。它利用大型语言模型（LLM）和代码生成技术，支持多种编程语言。用户可以通过提供明确的领域知识和代码示例，引导模型生成符合特定需求的代码。该项目主要使用Python和Hugging Face Transformers等框架实现，并包含一个易于使用的API接口，方便集成到其他应用程序中。  该工具旨在提高代码生成效率，并降低开发人员在特定领域代码编写上的工作量。
- [AshesOfOwls/jquery.shapeshift](https://github.com/AshesOfOwls/jquery.shapeshift) ★1664  
  该项目提供一个jQuery插件，用于动态更改网页元素的形状。用户可以通过简单的API调用，改变元素的形状，例如将其转换为圆形、方形或其他自定义形状。插件使用CSS和JavaScript实现，无需额外的图像或矢量文件。它支持多种形状选项，并允许自定义颜色和边框。  该插件适用于需要灵活调整网页元素视觉效果的场景，例如动画、游戏或交互式设计。
- [xhan/qqbot](https://github.com/xhan/qqbot) ★1425  
  这是一个基于Python的QQ机器人框架，用于快速构建各种QQ功能。它使用`aiohttp`异步框架和`itchat`库，提供简单的API接口来控制QQ机器人行为。核心功能包括接收消息、发送消息、群管理、文件传输等。开发者可以轻松扩展机器人功能，例如自定义消息回复、自动化任务等。项目包含详细的文档和示例代码，便于快速上手。
- [joyqi/sfz](https://github.com/joyqi/sfz) ★742  
  这是一个用于生成和验证身份证号码的工具。它支持多种身份证号码格式的校验，并能根据输入的个人信息自动生成合法的身份证号码。该工具使用Python语言开发，基于正则表达式和预定义规则进行身份证号码的验证和生成，并包含了详细的测试用例。
- [layerssss/manager-for-upyun](https://github.com/layerssss/manager-for-upyun) ★171 [`coffeescript`] [`middleman`] [`node-webkit`] [`upyun`]  
  该项目是一个用于管理 UCloud 对象存储（Uyun）的 Python 工具。它提供便捷的 API 接口，用于上传、下载、删除和列出对象，支持多种文件操作和配置管理。项目使用 Python 语言和 requests 库进行网络请求，并提供清晰的文档和易于使用的 API。  通过该工具，用户可以更高效地管理 Uyun 存储空间中的文件。

## CSS

- [ColorlibHQ/AdminLTE](https://github.com/ColorlibHQ/AdminLTE) ★45051 [`admin`] [`admin-dashboard`] [`admin-dashboard-template`] [`admin-dashboard-ui`] [`admin-panel`] [`admin-template`] [`admin-ui`] [`bootstrap`] [`css`] [`dashboard`] [`dashboard-template`] [`dashboard-templates`] [`dashboards`] [`html`]  
  这是一个基于Bootstrap的免费、开源的仪表盘模板，适用于各种Web应用程序。它提供预先设计的布局、组件和页面，可用于快速构建仪表盘界面。模板使用HTML、CSS和JavaScript构建，并包含多种可定制的主题。该项目旨在提供一个易于使用的框架，帮助开发人员更快速地创建功能齐全的仪表盘。
- [houshanren/hangzhou_house_knowledge](https://github.com/houshanren/hangzhou_house_knowledge) ★27072 [`hangzhou`] [`knowledge`]  
  这是一个关于杭州房产知识的项目，包含了杭州各区域的房价、租金、政策等信息。项目使用Python爬取相关网站数据，并使用Pandas进行数据清洗和整理，最终以表格形式呈现。  该项目可以帮助用户快速了解杭州房产市场信息，方便进行房产投资决策。  爬虫部分主要使用requests库和BeautifulSoup库，数据存储和处理使用Pandas库。
- [sindresorhus/github-markdown-css](https://github.com/sindresorhus/github-markdown-css) ★8596  
  这是一个GitHub仓库，包含用于渲染GitHub Markdown的CSS样式。它提供了一种自定义GitHub页面Markdown显示的方法，使其外观更具吸引力或符合特定需求。该项目使用纯CSS实现，无需JavaScript或其他框架，方便集成到GitHub Pages或其他静态站点中。  该项目主要通过调整字体、颜色、布局等样式来增强Markdown的可读性和美观性。
- [WebStackPage/WebStackPage.github.io](https://github.com/WebStackPage/WebStackPage.github.io) ★7056 [`bookmark`] [`dao-hang`] [`nav`] [`navigation`] [`tags`] [`website`] [`webstack`]  
  这是一个使用Vue.js构建的静态网站框架，用于快速搭建个人或团队的网页。它提供了一套预定义的组件和布局，方便用户自定义内容并快速生成响应式页面。核心技术是Vue.js，并使用了Tailwind CSS进行样式管理，确保页面在不同设备上的良好显示。项目包含了路由配置，以及一些常用的UI组件，例如导航栏、侧边栏和页面区块。  该框架旨在提高网页开发效率，并提供良好的用户体验。
- [thedevdojo/wave](https://github.com/thedevdojo/wave) ★6308 [`devdojo`] [`hacktoberfest`] [`laravel`] [`php`] [`saas`] [`saas-boilerplate`] [`subscription`] [`tailwindcss`] [`voyager`] [`wave`]  
  这是一个用于构建Web应用程序的轻量级框架，使用 TypeScript 和 React。它提供了一套预构建的组件，涵盖常见的UI元素和交互，帮助开发者快速搭建原型和应用，提高开发效率。框架的核心模块包括路由管理、状态管理和数据持久化。  该框架专注于简洁性和可维护性，旨在提供一个易于学习和使用的开发环境。
- [muan/emoji](https://github.com/muan/emoji) ★2264 [`emoji`] [`search`]  
  符合多浏览器与多平台的表情符号处理工具，提供统一的短代码（:smile:、:heart:等）↔ Unicode 解析与渲染。核心功能包括：  
  
- **短码解析**：将带有冒号的表情名称自动转换为对应 Unicode 字符。  
- **平台映射**：根据平台（Apple、Google、Microsoft、Twitter）返回相应的图标 URL 或 SVG，支持自定义绘制资源。  
- **反向查询**：从 Unicode 字符或图标 URL 获取短码及标准名称，方便日志和翻译处理。  
- **批量替换**：一次性正则扫描文本，替换所有匹配的短码，支持正则自定义过滤。  
- **自定义扩展**：可插入自定义表情、别名或禁用列表，满足企业内部符号库需求。  
  
技术实现以 TypeScript 为主，借助 Node.js 运行时，使用 ES6 模块化和 Babel/Webpack 打包；核心映射数据采用 JSON 结构，提供高性能 O(1) 查找。插件式架构将解析器、渲染器与映射配置分离，易于维护和扩展。该工具在前端项目、聊天机器人以及文档渲染系统中得到广泛使用。
- [leoFitz1024/wallhaven](https://github.com/leoFitz1024/wallhaven) ★1546  
  这是一个用于下载Wallhaven壁纸的Python脚本。它使用`requests`库从Wallhaven网站抓取图片，并使用`Pillow`库进行保存，支持多种分辨率和尺寸。脚本包含参数设置，例如指定壁纸分类、分辨率和数量，以及保存路径等，以满足用户个性化需求。该脚本结构清晰，易于扩展，可用于批量下载高质量壁纸。
- [kdzwinel/SnappySnippet](https://github.com/kdzwinel/SnappySnippet) ★1105 [`chrome-extension`] [`jsbin`] [`web-development`]  
  SnappySnippet是一个用于快速生成代码片段的工具，支持多种编程语言。它使用Python编写，基于`Pygments`库进行语法高亮，并提供简单的命令行接口。用户可以通过输入关键字或描述来检索和生成代码片段，提高开发效率。该项目旨在提供一个易于使用且功能强大的代码片段管理和生成工具。
- [Tokinx/Wing](https://github.com/Tokinx/Wing) ★627 [`wordpress`] [`wordpress-theme`]  
  Wing是一个基于Python的工具，用于构建和管理复杂的跨平台软件系统。它利用Python语言和Django框架，提供模块化的组件和API，支持不同平台的应用部署。Wing的核心功能包括：系统配置管理，组件集成，以及自动化部署。开发者可以通过Wing轻松创建和维护跨平台软件。
- [mulingyuer/Typecho_Theme_JJ](https://github.com/mulingyuer/Typecho_Theme_JJ) ★482  
  这是一个基于Typecho的主题，名为JJ。它提供了一个简洁、现代的页面布局，适合个人博客或小型网站。主题使用HTML、CSS和JavaScript构建，并集成了一些常用的功能，如文章列表、分类页面和评论系统等。  主题可定制性强，用户可以通过修改配置文件或主题文件来调整页面样式。

[查看更多 CSS 仓库 →](dist/2025100200/LANG_CSS.md)

## D

- [skilion/onedrive](https://github.com/skilion/onedrive) ★3992 [`dlang`] [`linux`] [`onedrive`]  
  该项目提供了一个OneDrive文件同步工具，允许用户在本地计算机和OneDrive云端之间同步文件。它使用Python语言和`requests`库进行API交互，并使用`threading`模块进行多线程处理，以提升同步速度。项目包含用户界面，用于配置同步文件夹和监控同步进度。该工具主要针对需要在本地和OneDrive之间快速同步文件的用户。

## Dart

- [AppFlowy-IO/AppFlowy](https://github.com/AppFlowy-IO/AppFlowy) ★65749 [`blog`] [`confluence-alternative`] [`content-management`] [`content-services`] [`documentation`] [`flutter`] [`note-taking`] [`notion-alternative`] [`project-management`] [`task-management`] [`team-collaboration`] [`wiki`]  
  AppFlowy 是一个开源的、基于 Markdown 的个人知识管理工具，旨在帮助用户组织和管理笔记、想法、待办事项等信息。它采用 React 框架构建，提供可定制的界面和丰富的功能，例如标签、链接、嵌入和自定义模板。用户可以通过简单的拖拽操作来组织笔记，并利用 Markdown 语法进行格式化。该项目支持多种平台，包括桌面应用程序和 Web 界面，让用户可以在不同设备上访问和管理自己的知识库。
- [GopeedLab/gopeed](https://github.com/GopeedLab/gopeed) ★20506 [`android`] [`bittorrent`] [`cross-platform`] [`debian`] [`downloader`] [`flutter`] [`golang`] [`http`] [`https`] [`ios`] [`macos`] [`magnet`] [`torrent`] [`ubuntu`] [`windows`]  
  Gopeed是一个用于高性能网络数据传输的Go语言库。它利用Goroutines和Channel实现并发数据处理，并提供灵活的配置选项，以适应各种网络场景。该库支持TCP和UDP协议，并包含错误处理和性能监控机制。  主要使用Go语言编写，并基于标准库进行扩展。  关键模块包括连接管理、数据包编解码和并发传输。  该库旨在提升网络应用的吞吐量和响应速度。
- [wanghongenpin/proxypin](https://github.com/wanghongenpin/proxypin) ★10611 [`capture-traffic`] [`charles`] [`fiddler`] [`proxy`] [`proxypin`] [`zhuabao`]  
  这是一个用于代理IP地址的Python项目。它提供了一个简单的API接口，可以获取、验证并使用代理IP。项目使用Python编写，并基于requests库进行网络请求。核心功能包括代理池管理、代理验证和轮询机制，以确保获取可用的代理IP。用户可以通过API调用获取代理列表，并指定需要验证的代理类型。该项目旨在为需要访问受限网站或进行网络爬虫的应用提供高效的代理服务。
- [ComicSparks/pikapika](https://github.com/ComicSparks/pikapika) ★7516 [`acg`] [`android`] [`bika`] [`comic-books`] [`cosplay`] [`cross-platform`] [`e-hentai`] [`flutter`] [`game`] [`go`] [`golang`] [`hentai`] [`ios`] [`picacg`] [`picacomic`] [`r-18`]  
  这是一个基于Python和Flask框架的漫画网站后端API。它提供漫画列表、章节、图片等数据的存储和检索功能，并支持用户登录、注册和漫画收藏。该API使用MySQL数据库存储数据，并通过RESTful API接口对外提供服务。  主要功能包括漫画信息管理、用户交互、图片上传和处理等。  项目目标是构建一个高效、稳定的漫画数据管理系统，方便后续开发漫画网站的前端页面。
- [Xmarmalade/alisthelper](https://github.com/Xmarmalade/alisthelper) ★2442 [`alist`] [`dart`] [`flutter`] [`gui`] [`macos`] [`windows`]  
  这是一个用于阿里云盘的辅助工具，旨在简化文件管理和操作。它使用 Python 和 `requests` 库，通过 API 获取文件列表，并提供批量下载、移动、删除等功能。  用户可以通过命令行界面轻松执行这些操作，提高文件处理效率。  项目包含清晰的代码注释，方便用户理解和扩展。
- [yang991178/fluent-reader-lite](https://github.com/yang991178/fluent-reader-lite) ★1583 [`android`] [`flutter`] [`ios`] [`rss`] [`rss-reader`]  
  Fluent Reader Lite是一个轻量级的文本阅读器，旨在提高阅读速度和理解力。它通过可定制的字体、行距和页面布局，以及多种阅读模式（例如朗读、单词高亮等）优化阅读体验。项目使用Python和PyQt5构建，核心模块包括文本渲染引擎、可定制设置和阅读模式控制。该应用易于部署和使用，适合需要高效阅读的用户。
- [kangpeiqin/bilivideo_down](https://github.com/kangpeiqin/bilivideo_down) ★850  
  这是一个用于下载B站视频的Python项目。它使用`requests`库获取视频链接，并使用`yt-dlp`下载视频。项目支持多种下载格式和清晰度，并提供命令行界面。用户只需提供视频链接，即可下载对应的视频文件。  代码简洁易懂，方便用户快速上手。
- [bravekingzhang/flutter_chat_box](https://github.com/bravekingzhang/flutter_chat_box) ★662 [`chatgpt`] [`flutter`]  
  这是一个使用Flutter构建的聊天框组件。它提供了一个灵活且美观的聊天界面，支持消息发送、接收、显示和滚动。该组件使用Dart语言开发，基于StatefulWidget实现动态更新和状态管理。  关键功能包括消息格式化、时间戳显示、用户头像和气泡样式自定义等。  用户可轻松集成到自己的Flutter应用中，快速构建聊天功能。
- [xausky/DockerRegisterCloud](https://github.com/xausky/DockerRegisterCloud) ★661  
  DockerRegisterCloud 是一个用于注册和管理 Docker 镜像的云平台。它使用 Python 和 Flask 框架构建，提供 API 接口供用户上传、下载、搜索和删除镜像。平台支持多用户和权限控制，并可配置不同的存储策略，例如本地存储或云存储。该项目旨在简化 Docker 镜像的云端管理，提高团队协作效率。
- [davidche1116/Sms](https://github.com/davidche1116/Sms) ★348 [`flutter`] [`sms`]  
  这是一个基于Python的短信发送工具，使用Twilio API发送短信。  项目使用Python的Twilio库进行API调用，并提供简单的命令行界面，方便用户输入接收者号码和短信内容。  用户只需配置Twilio账号和API密钥，即可发送短信。  该工具适用于需要快速发送短信的场景，例如通知、提醒等。

## Dockerfile

- [Anduin2017/HowToCook](https://github.com/Anduin2017/HowToCook) ★94463 [`chinese`] [`cookbook`] [`cooking`] [`dishes`] [`recipes`]  
  这是一个烹饪食谱网站的开源项目，提供各种菜肴的详细步骤和图片。用户可以通过搜索关键词找到所需的食谱，并查看烹饪步骤、食材清单以及图片指导。项目使用HTML、CSS和JavaScript构建前端，并使用数据库（未指定）存储食谱数据。  该项目旨在为用户提供便捷的烹饪指导和参考。
- [crazy-max/docker-jetbrains-license-server](https://github.com/crazy-max/docker-jetbrains-license-server) ★1723 [`alpine-linux`] [`docker`] [`jetbrains`] [`license-server`]  
  该项目提供一个Docker镜像，用于运行JetBrains许可服务器。它简化了在Docker环境中部署和管理许可服务器的过程，方便开发者在容器化环境中使用JetBrains IDE。镜像使用Node.js构建，并包含了必要的配置和启动脚本，确保快速部署和运行。该镜像支持JetBrains所有产品，并提供灵活的配置选项，例如自定义端口和数据目录。
- [RICwang/docker-wechat](https://github.com/RICwang/docker-wechat) ★822  
  这是一个基于Docker的微信公众号机器人项目。它使用Python编写，并利用微信官方API实现自动回复功能。项目包含了容器化部署脚本，方便用户快速搭建和运行机器人。主要功能包括文本、图片、链接等消息的自动回复，以及自定义的事件处理。该项目旨在提供一个简单易用的微信公众号机器人解决方案，并支持扩展自定义功能。

## EJS

- [Fechin/reference](https://github.com/Fechin/reference) ★9156 [`awk`] [`bash`] [`chatgpt`] [`cheatsheet`] [`cheatsheets`] [`css`] [`golang`] [`grep`] [`markdown`] [`python`] [`reference`] [`sed`] [`snippets`] [`vim`]  
  这是一个用于快速生成参考文档的工具。它使用 Python 和 Markdown 解析器，可以从代码注释中提取信息，并自动生成 API 文档、函数说明等。用户只需在代码中添加规范的注释，即可轻松获得清晰易懂的参考文档，提高代码可维护性。  该项目包含一个命令行工具，方便用户集成到开发流程中。

## Go

- [fatedier/frp](https://github.com/fatedier/frp) ★99202 [`expose`] [`firewall`] [`frp`] [`go`] [`http-proxy`] [`nat`] [`p2p`] [`proxy`] [`reverse-proxy`] [`tunnel`]  
  frp是一个高性能的反向代理应用，用于内网穿透。它支持多种协议，如HTTP、TCP、UDP等。用户可以通过简单的配置将内网服务暴露到公网。frp使用Go语言开发，并基于高性能的网络库，实现了低延迟和高吞吐量。项目包含了客户端和服务端，并提供了多种部署方式，方便用户快速搭建和使用。
- [syncthing/syncthing](https://github.com/syncthing/syncthing) ★76525 [`go`] [`p2p`] [`peer-to-peer`] [`synchronization`]  
  Syncthing是一个开源的、分布式的文件同步工具。它允许用户在多台设备之间同步文件和文件夹，无需中央服务器。Syncthing使用基于Merkle树的协议进行高效的文件传输和同步，并支持多种平台。该项目主要使用Go语言开发，并包含一个功能强大的命令行界面和图形用户界面。其核心功能是实现跨平台的可靠文件同步，并保证数据完整性。
- [junegunn/fzf](https://github.com/junegunn/fzf) ★74099 [`bash`] [`cli`] [`fish`] [`fzf`] [`go`] [`neovim`] [`tmux`] [`unix`] [`vim`] [`zsh`]  
  fzf是一款快速、强大的命令行过滤工具。它利用模糊匹配算法，允许用户快速浏览和筛选长列表中的项目。用户可以通过输入关键词进行模糊搜索，并通过按键导航选择结果。fzf支持多种配置选项和插件，可以高度定制化。它主要使用C语言编写，并利用ncurses库进行终端交互。其核心功能是提供高效的命令行过滤机制，提升终端工具的可用性。
- [FiloSottile/mkcert](https://github.com/FiloSottile/mkcert) ★56732 [`certificates`] [`chrome`] [`firefox`] [`https`] [`ios`] [`linux`] [`local-development`] [`localhost`] [`macos`] [`root-ca`] [`tls`] [`windows`]  
  mkcert是一个用于生成本地TLS证书的工具。它允许开发人员在无需访问证书颁发机构的情况下，快速创建有效的TLS证书。该工具使用Go语言开发，并利用了crypto/x509和crypto/rand等标准库。  mkcert生成的证书用于测试和开发环境，无需配置复杂的证书颁发流程，极大地简化了本地HTTPS服务器的搭建。
- [minio/minio](https://github.com/minio/minio) ★55497 [`amazon-s3`] [`cloud`] [`cloudnative`] [`cloudstorage`] [`go`] [`k8s`] [`kubernetes`] [`multi-cloud`] [`multi-cloud-kubernetes`] [`objectstorage`] [`s3`] [`storage`]  
  MinIO是一个开源的、高性能、功能丰富的对象存储服务，兼容Amazon S3 API。它用Go语言编写，并使用多种技术来保证高可用性和可靠性。MinIO支持多种存储类型，包括本地、云端等，可以轻松地将数据存储到不同位置。该项目提供了一个易于使用的API，方便用户进行数据存储和检索操作，并支持多种客户端库和工具。
- [rclone/rclone](https://github.com/rclone/rclone) ★52771 [`azure-blob`] [`azure-blob-storage`] [`azure-files`] [`backblaze-b2`] [`cloud-storage`] [`dropbox`] [`encryption`] [`ftp`] [`fuse-filesystem`] [`go`] [`golang`] [`google-cloud-storage`] [`google-drive`] [`onedrive`] [`openstack-swift`] [`rclone`] [`s3`] [`sftp`] [`sync`] [`webdav`]  
  rclone是一个命令行工具，用于在各种云存储服务（如Dropbox、Google Drive、Amazon S3）之间复制和同步文件。它支持多种协议，并提供强大的功能，例如跨平台支持、高级同步策略、自定义元数据等。该工具使用Go语言编写，并使用多线程和缓存技术来提高性能。rclone的核心功能是文件复制、同步和管理，为用户提供便捷的云存储管理方式。
- [go-gitea/gitea](https://github.com/go-gitea/gitea) ★50939 [`bitbucket`] [`cicd`] [`devops`] [`docker-registry-v2`] [`git`] [`git-gui`] [`git-server`] [`gitea`] [`github`] [`github-actions`] [`gitlab`] [`go`] [`golang`] [`hacktoberfest`] [`maven-server`] [`npm-registry`] [`vue`]  
  Gitea是一个自托管的Git服务，类似于GitHub。它允许用户创建、管理仓库、进行代码协作，并提供Web界面进行交互。Gitea使用Go语言开发，基于beego框架，并包含一个用于数据库交互的模块。项目包含用户管理、仓库管理、代码托管、issue跟踪等功能。
- [AlistGo/alist](https://github.com/AlistGo/alist) ★48382 [`file-server`] [`gin`] [`golang`] [`onedrive`] [`solidjs`] [`webdav`]  
  这是一个基于 Python 和 Flask 框架的个人文件管理工具，类似于 Dropbox 或 Google Drive。它允许用户上传、下载、同步和管理本地文件。项目使用 SQLite 数据库存储文件元数据，并提供 Web 界面进行操作。  用户可以通过 API 接口或 Web 界面访问和管理文件。  核心功能包括文件上传、下载、搜索、以及文件夹管理。  该项目旨在提供一个易于使用且功能强大的个人文件同步解决方案。
- [gogs/gogs](https://github.com/gogs/gogs) ★47020 [`docker`] [`git`] [`go`] [`gogs`] [`mysql`] [`postgresql`] [`raspberry-pi`] [`scip-enabled`] [`self-hosted`] [`sqlite3`]  
  Gogs是一个自托管的Git服务，类似于GitHub和GitLab。它使用Go语言开发，基于Web框架Gin。用户可以通过Web界面管理仓库、提交代码、查看提交历史等。Gogs支持多种身份验证方式，并提供丰富的配置选项，以满足不同用户的需求。它易于安装和使用，并提供良好的性能。
- [v2ray/v2ray-core](https://github.com/v2ray/v2ray-core) ★46501 [`golang`] [`http-proxy`] [`proxy`] [`shadowsocks`] [`socks`] [`socks5`] [`v2ray`] [`vmess`]  
  V2Ray-core 是一个开源的 V2Ray 服务器端程序，提供多种协议和配置选项，用于搭建安全的网络连接。它使用 C++ 编写，并支持多种平台，例如 Windows、macOS 和 Linux。该项目允许用户自定义配置以满足各种网络需求，包括 VPN 连接、代理服务器等。V2Ray-core 的核心功能是提供高速、安全的网络连接，并支持多种加密协议。

[查看更多 Go 仓库 →](dist/2025100200/LANG_Go.md)

## Haskell

- [jgm/pandoc](https://github.com/jgm/pandoc) ★39463 [`commonmark`] [`converter`] [`document`] [`haskell`] [`markdown`] [`markup`] [`pandoc`] [`presentation`] [`publishing`]  
  这是一个使用Python编写的Pandoc命令行工具的包装器，方便用户在不同文档格式之间进行转换。它提供了一个更易于使用和定制的接口，支持多种文档格式，例如Markdown、LaTeX、HTML等。项目使用Python标准库以及一些第三方库进行构建，并提供清晰的文档说明和示例。  核心功能是简化Pandoc的调用，允许用户通过Python脚本或命令行快速完成文档格式转换。

## HTML

- [ripienaar/free-for-dev](https://github.com/ripienaar/free-for-dev) ★112899 [`awesome-list`] [`free-for-developers`]  
  这是一个免费的开发人员工具集合，涵盖了各种实用功能，例如代码格式化、代码分析、文档生成等。该工具包主要使用 Python 语言开发，并利用了多种开源库，例如 `black` 用于代码格式化，`flake8` 用于代码风格检查。 项目旨在为开发者提供一个便捷的工具集，帮助提升开发效率和代码质量。
- [vernesong/OpenClash](https://github.com/vernesong/OpenClash) ★22037 [`clash`] [`luci`] [`mihomo`] [`openclash`] [`openwrt`] [`shadowsocks`] [`snell`] [`v2ray`] [`vmess`]  
  OpenClash 是一个基于 Go 语言编写的 Clash 插件，提供对多种 Clash 规则的自动化管理和配置。它使用 YAML 格式的配置文件来定义规则，并支持多种规则引擎，方便用户快速配置和切换不同的规则策略。该项目旨在简化 Clash 的使用，并提高规则管理的效率。 通过灵活的配置，用户可以轻松管理代理规则，适应不同的网络环境和需求。
- [uikit/uikit](https://github.com/uikit/uikit) ★18486  
  这是一个用于构建用户界面的跨平台UI组件库。它提供了一系列可定制的组件，例如按钮、文本框、列表等，支持iOS和Android平台。该库使用原生代码实现，并基于React Native框架，确保了高性能和良好的跨平台兼容性。  项目包含详细的文档和示例代码，方便开发者快速上手并集成到自己的应用中。
- [liu673cn/bug](https://github.com/liu673cn/bug) ★10530  
  这是一个用于发现和报告软件缺陷的工具。它使用Python和Selenium框架，通过自动化测试来识别潜在的bug。该工具主要由测试用例管理模块、测试执行模块和缺陷报告模块构成。它可以帮助测试人员更有效地发现并记录软件缺陷，提高测试效率和质量。
- [yuantuo666/baiduwp-php](https://github.com/yuantuo666/baiduwp-php) ★6466 [`baidunetdisk`] [`baiduyun`] [`php`]  
  百度文库PHP爬虫，用于批量下载百度文库文档。该项目使用PHP语言开发，主要模块包括请求库、文档解析和下载功能。爬虫通过模拟浏览器请求获取文档链接，并解析文档内容，最终将文档保存到本地。项目支持多线程下载，提高下载效率。  代码结构清晰，易于维护和扩展。
- [Lerist/FakeLocation](https://github.com/Lerist/FakeLocation) ★6405  
  该项目提供一个简单的Android应用程序，用于模拟GPS位置。用户可以自定义经纬度坐标，并让应用报告这些坐标作为当前位置。它使用Android Location API来更新设备位置信息，并通过简单的UI来配置模拟位置。主要使用Kotlin语言开发，并基于Android Jetpack Compose构建用户界面。
- [CaiJimmy/hugo-theme-stack](https://github.com/CaiJimmy/hugo-theme-stack) ★5954 [`bloggers`] [`css`] [`hacktoberfest`] [`hugo`] [`hugo-theme`] [`theme`]  
  Hugo-theme-Stack是一个基于Hugo的主题，提供现代化、响应式且易于定制的网站模板。它专注于简洁的导航和可读性强的页面布局，适合个人博客、文档站点和项目展示。主题使用HTML、CSS和Go语言构建，并包含预设的布局和组件，方便快速搭建网站。用户可以通过配置轻松调整主题外观和功能。
- [vbskycn/iptv](https://github.com/vbskycn/iptv) ★4633  
  这是一个用于构建 IPTV 客户端的项目。它提供流畅的视频播放功能，并支持多种视频格式。该项目使用 Python 作为主要开发语言，并基于 `PyQt` 构建用户界面，利用 `ffmpeg` 库进行视频解码和播放。核心功能包括频道列表管理、视频播放控制和自定义设置。用户可以通过该软件轻松访问各种 IPTV 频道。
- [sofish/typo.css](https://github.com/sofish/typo.css) ★4548  
  Typo.css是一个轻量级、可定制的CSS框架，用于快速构建易于阅读的网页文本。它提供了一系列可配置的字体、行高、字间距等样式，帮助开发者提升网页内容的可读性。该框架使用纯CSS实现，无需JavaScript，便于集成到现有项目中。主要功能包括控制字体大小、行距、字间距、首行缩进等，并支持自定义颜色和样式。
- [pingfangx/TranslatorX](https://github.com/pingfangx/TranslatorX) ★4521 [`androidstudio`] [`chinese`] [`chinese-translation`] [`clion`] [`goland`] [`intellijidea`] [`jetbrains`] [`phpstorm`] [`pycharm`] [`rubymine`] [`webstorm`]  
  TranslatorX 是一个基于 Python 和 Google Cloud Translation API 的翻译工具。它能够批量翻译文本文件，支持多种语言，并提供命令行接口。用户只需提供源文件和目标语言，即可快速获得翻译结果。该项目使用 `googletrans` 库简化了 API 调用，并包含错误处理和进度显示功能，确保翻译过程的稳定性和用户体验。

[查看更多 HTML 仓库 →](dist/2025100200/LANG_HTML.md)

## Java

- [Stirling-Tools/Stirling-PDF](https://github.com/Stirling-Tools/Stirling-PDF) ★68064 [`docker`] [`java`] [`pdf`] [`pdf-converter`] [`pdf-editor`] [`pdf-manipulation`] [`pdf-merger`] [`pdf-ocr`] [`pdf-tools`] [`pdf-web-apps`] [`pdfmerger`]  
  这是一个用于创建和操作PDF文档的Python库。它提供了一套易于使用的API，允许开发者便捷地生成包含各种元素（文本、图像、表格等）的PDF文件。该库基于ReportLab，使用Python语言实现。核心功能包括页面布局控制、文本格式化、图像嵌入和表格生成。开发者可以通过简单的代码调用完成PDF文档的创建和编辑，无需繁琐的底层操作。
- [skylot/jadx](https://github.com/skylot/jadx) ★45664 [`android`] [`decompiler`] [`dex`] [`java`]  
  Jadx 是一个用于反编译 Android 应用的工具。它可以将 .dex 文件转换为 Java 源代码，并保留尽可能多的原始代码结构和注释。该工具使用 Java 语言开发，并基于 ANTLR 框架实现语法分析。Jadx 的核心功能包括反编译 .dex 文件、处理各种 Android 编程语言特性、并支持自定义配置。 通过 Jadx，开发者能够更方便地分析和理解 Android 应用的代码。
- [dbeaver/dbeaver](https://github.com/dbeaver/dbeaver) ★45614 [`ai`] [`copilot`] [`database`] [`db2`] [`dbeaver`] [`erd`] [`gui`] [`java`] [`jdbc`] [`mysql`] [`nosql`] [`openai`] [`oracle`] [`postgresql`] [`redshift`] [`sql`] [`sqlite`] [`sqlserver`]  
  DBeaver是一个开源的数据库工具，用于连接和管理各种数据库。它支持多种数据库系统，包括MySQL、PostgreSQL、Oracle、SQL Server等。DBeaver使用Java语言开发，基于Eclipse RCP框架，提供图形化界面，方便用户进行数据库查询、编辑、管理等操作。该工具支持SQL编辑器、数据浏览、数据导出导入等功能，并提供连接池和事务管理等高级特性，提高了数据库开发和管理的效率。
- [termux/termux-app](https://github.com/termux/termux-app) ★45547 [`android`] [`hacktoberfest`] [`linux`] [`terminal`] [`termux`]  
  Termux-app是一个Android平台下的终端模拟器，允许用户在Android设备上运行Linux命令行工具和应用程序。它使用纯Android开发，提供类似于Linux系统的命令行环境，支持各种shell命令、软件包管理和编程工具。  用户可以通过安装软件包来扩展功能，例如编译器、数据库管理工具等。  该项目主要由C++代码和一些Shell脚本构成，并利用Android系统的API进行交互。
- [halo-dev/halo](https://github.com/halo-dev/halo) ★37022 [`blog`] [`blog-engine`] [`cms`] [`content-management-system`] [`halo`] [`halocms`] [`website-builder`]  
  Halo是一个用于构建和部署基于微服务的应用程序的开源平台。它采用Go语言开发，并利用Kubernetes进行容器化部署和管理。核心功能包括服务注册、发现、负载均衡、监控和配置管理。Halo旨在简化微服务架构的开发和运维，并提供可扩展性和可靠性。
- [zxing/zxing](https://github.com/zxing/zxing) ★33613 [`android`] [`barcode`] [`barcode-scanner`] [`datamatrix`] [`java`] [`qr-code`] [`upc`] [`zxing`]  
  ZXing是一个开源的二维条码（QR码、条形码等）扫描和生成库。它支持多种条码格式，并提供多种语言的实现。该库使用Java语言开发，并基于Apache License 2.0开源协议。  ZXing的核心功能包括解码和编码各种二维条码，可以轻松集成到应用程序中。  它主要由解码器、编码器和图像处理模块组成，提供灵活的配置选项，以满足不同应用场景的需求。
- [DrKLO/Telegram](https://github.com/DrKLO/Telegram) ★27609 [`telegram`]  
  该项目是一个用于在Telegram上创建和管理聊天机器人的Python库。它提供简便的API接口，允许开发者快速创建具有各种功能的机器人，例如自动回复、信息转发、用户管理等。核心功能包括机器人命令处理、消息事件监听和API交互。项目使用Python语言开发，基于Telethon库，并提供清晰的文档和示例代码，方便用户上手和定制。
- [proxyee-down-org/proxyee-down](https://github.com/proxyee-down-org/proxyee-down) ★24860  
  Proxyee-down是一个用于下载代理服务器背后资源的工具。它支持多种协议（例如HTTP、HTTPS、Socks5），能够绕过一些网站的访问限制。该工具使用Python编写，基于requests库进行网络请求，并使用tqdm库显示下载进度。核心功能包括代理设置、下载链接提取和文件保存。通过简单的命令行参数配置，用户可以轻松下载各种资源。
- [dataease/dataease](https://github.com/dataease/dataease) ★21999 [`apache-doris`] [`business-intelligence`] [`data-analysis`] [`data-visualization`] [`echarts`] [`kettle`] [`superset`] [`tableau`]  
  DataEase是一个开源的、易于使用的自助式数据分析平台。它允许用户无需编程技能即可进行数据探索、报表制作和数据可视化。平台基于Java语言开发，使用Spring Boot框架构建，提供丰富的图表类型和数据交互功能。核心模块包括数据源管理、数据查询、报表设计和部署等。用户可以通过简单的拖拽操作创建各种图表，并进行数据过滤和排序。
- [CarGuo/GSYVideoPlayer](https://github.com/CarGuo/GSYVideoPlayer) ★21143 [`16k`] [`android`] [`exoplayer`] [`ffmpeg`] [`gsy`] [`ijkplayer`] [`player`] [`ssl`] [`video`] [`videocache`]  
  GSYVideoPlayer是一个功能丰富的视频播放器库，支持本地视频、网络视频、直播流等多种播放模式，并提供丰富的自定义选项，如播放速度控制、音量调节、屏幕旋转等。该库使用Android原生开发，基于ijkplayer实现，提供清晰易用的API接口，并包含了全屏模式、播放进度控制、缓冲进度显示、字幕支持等多种功能。  开发者可以轻松集成到应用中，快速实现高质量的视频播放体验。

[查看更多 Java 仓库 →](dist/2025100200/LANG_Java.md)

## JavaScript

- [louislam/uptime-kuma](https://github.com/louislam/uptime-kuma) ★75556 [`docker`] [`monitor`] [`monitoring`] [`responsive`] [`self-hosted`] [`selfhosted`] [`single-page-app`] [`socket-io`] [`uptime`] [`uptime-monitoring`] [`webapp`] [`websocket`]  
  Uptime Kuma是一个开源的、基于Go语言的监控工具，用于监视服务和应用程序的运行状况。它提供直观的仪表盘，显示服务状态、响应时间和错误率等关键指标。该工具使用Prometheus收集指标，并通过Grafana进行可视化。  它支持多种服务协议（如HTTP、TCP）的监控，并允许自定义监控规则。  通过简洁的界面和强大的功能，Uptime Kuma 帮助用户快速定位和解决服务故障。
- [mozilla/pdf.js](https://github.com/mozilla/pdf.js) ★51972  
  pdf.js 是一个开源项目，用于在浏览器中显示 PDF 文件。它使用 JavaScript 实现，并利用 HTML5 canvas 和 WebGL 渲染 PDF 内容。  该项目提供了一个独立的 PDF 阅读器，支持多种 PDF 功能，例如页面缩放、旋转、搜索、书签等。  核心技术包括 PDF 文档解析、页面布局、图像渲染和交互逻辑，目标是为用户提供流畅且可靠的 PDF 阅读体验。
- [marktext/marktext](https://github.com/marktext/marktext) ★51747 [`dark-mode`] [`editor`] [`electron`] [`element-ui`] [`emoji`] [`focus-mode`] [`latex`] [`linux`] [`mac`] [`macos`] [`markdown`] [`marktext`] [`next-generation`] [`source-code`] [`typewriter-mode`] [`vue`] [`windows`]  
  MarkText是一个跨平台的开源Markdown编辑器，支持多种主题和插件。它使用Electron框架，基于Web技术构建，提供简洁易用的界面和丰富的功能，例如实时预览、语法高亮、图片插入、文件导入导出等。用户可以自定义主题和功能插件，满足不同用户的需求。
- [agalwood/Motrix](https://github.com/agalwood/Motrix) ★49383 [`aria2`] [`bittorrent`] [`bt`] [`download`] [`download-manager`] [`electron`] [`linux`] [`mac`] [`macos`] [`magnet`] [`motrix`] [`torrent`] [`windows`]  
  Motrix是一个多线程下载管理器，支持多种协议（HTTP、HTTPS、FTP、磁力链等），并提供断点续传、多线程下载、代理服务器等功能。它使用C++编写，基于Qt框架，并采用多线程架构进行下载，以提升下载速度和稳定性。  项目提供图形用户界面，方便用户管理下载任务和设置下载参数。
- [LeCoupa/awesome-cheatsheets](https://github.com/LeCoupa/awesome-cheatsheets) ★44395 [`backend`] [`bash`] [`cheatsheet`] [`cheatsheets`] [`database`] [`django`] [`docker`] [`feathersjs`] [`frontend`] [`javascript`] [`kubernetes`] [`language`] [`nodejs`] [`php`] [`programming-language`] [`redis`] [`sailsjs`] [`vim`] [`vuejs`] [`xcode`]  
  这是一个汇集了各种编程语言、工具和框架的速查表合集。该项目使用 GitHub Pages 部署，以静态网页的形式呈现。  用户可以通过搜索或浏览不同的类别快速找到所需信息。  项目主要由 HTML、CSS 和 JavaScript 构建，内容来自不同的开源资源，并经过整理和归类，方便开发者查阅。
- [NaiboWang/EasySpider](https://github.com/NaiboWang/EasySpider) ★42744 [`batch-processing`] [`batch-script`] [`code-free`] [`crawler`] [`data-collection`] [`frontend`] [`gui`] [`html`] [`input-parameters`] [`layman`] [`parameters`] [`robotics`] [`rpa`] [`scraper`] [`spider`] [`visual`] [`visualization`] [`visualprogramming`] [`web`] [`www`]  
  EasySpider是一个轻量级的Python爬虫框架，旨在简化爬虫开发流程。它基于Scrapy框架，使用Python 3开发，并提供易于使用的API和配置选项。核心功能包括灵活的URL抓取、数据提取和持久化，支持多种数据存储方式（如CSV、JSON）。该框架提供强大的中间件机制，方便用户定制爬取规则和处理特殊情况。  通过简洁的代码结构和清晰的文档，EasySpider致力于提高爬虫开发效率，降低学习门槛。
- [HeyPuter/puter](https://github.com/HeyPuter/puter) ★36643 [`cloud`] [`cloud-os`] [`cloud-storage`] [`desktop`] [`desktop-environment`] [`dropbox`] [`good-first-issue`] [`gui`] [`javascript`] [`nas`] [`open-source`] [`operating-system`] [`os`] [`osjs`] [`puter`] [`remote-desktop`] [`storage`] [`web-desktop`] [`web-os`] [`webtop`]  
  这是一个用于在本地计算机上运行远程服务器程序的工具。它利用SSH连接到远程服务器，并在本地机器上启动并运行服务器进程，就像在本地运行一样。项目使用Python编写，主要模块包括SSH连接管理和进程控制。用户可以通过简单的命令行界面操作，方便地在本地环境中体验和调试远程服务器程序，无需在远程服务器上进行复杂的配置和操作。
- [markedjs/marked](https://github.com/markedjs/marked) ★35738 [`commonmark`] [`compiler`] [`gfm`] [`hacktoberfest`] [`markdown`] [`parser`]  
  这是一个用于渲染Markdown文本的JavaScript库。它使用简单的语法解析Markdown文档，并将其转换为HTML。该库使用纯JavaScript编写，无需依赖任何外部库。核心功能包括支持常见的Markdown语法，如标题、列表、链接、代码块等。它速度快且易于使用，适合在各种Web应用中嵌入Markdown渲染功能。
- [qishibo/AnotherRedisDesktopManager](https://github.com/qishibo/AnotherRedisDesktopManager) ★33198 [`redis`] [`redis-client`] [`redis-cluster`] [`redis-desktop-manager`] [`redis-gui`]  
  AnotherRedisDesktopManager 是一个用于管理 Redis 数据库的桌面应用程序。它提供直观的界面，方便用户浏览、操作 Redis 数据，包括键值对、列表、集合等多种数据结构。该应用使用 C# 和 WPF 框架开发，并包含连接池和连接复用机制，以提升连接效率和稳定性。  项目包含强大的数据导出和导入功能，以及可定制的连接配置，满足不同用户的需求。
- [parallax/jsPDF](https://github.com/parallax/jsPDF) ★30627 [`hacktoberfest`]  
  jsPDF是一个用于在浏览器端生成PDF文档的JavaScript库。它允许开发者将HTML内容、图像和文本转换为PDF格式，并通过API控制PDF文档的布局和样式。该库使用纯JavaScript编写，无需服务器端处理，可直接在网页上生成PDF。  主要功能包括添加文本、图像、表格以及自定义页面布局。  开发者可以通过简单的API调用来实现PDF文档创建。

[查看更多 JavaScript 仓库 →](dist/2025100200/LANG_JavaScript.md)

## Jupyter Notebook

- [xianhu/LearnPython](https://github.com/xianhu/LearnPython) ★8181 [`learning-python`] [`python`] [`python-flask`] [`python-requests`]  
  这是一个Python学习资源库，包含了从入门到进阶的各种Python学习材料。资源涵盖基础语法、数据结构、常用库（如NumPy、Pandas、Matplotlib）以及项目实战。学习材料以Jupyter Notebook形式呈现，方便用户运行和学习。项目使用Python语言编写，并整合了GitHub Pages进行网页展示。

## Kotlin

- [2dust/v2rayNG](https://github.com/2dust/v2rayNG) ★45353 [`android`] [`proxy`] [`shadowsocks`] [`socks5`] [`trojan`] [`v2fly`] [`v2ray`] [`vless`] [`vmess`] [`vpn`] [`xray`] [`xtls`]  
  v2rayNG 是一个基于 v2ray 的轻量级客户端，提供快速、稳定且易于使用的 VPN 连接。它使用 Go 语言开发，并整合了简洁的用户界面。  项目核心功能包括：多种协议选择、自定义配置、便捷的连接管理和日志记录。  用户无需复杂配置，即可轻松连接到不同的服务器，并获得安全可靠的网络访问。
- [bannedbook/fanqiang](https://github.com/bannedbook/fanqiang) ★40585 [`brook`] [`daze`] [`fanqiang`] [`goflyway`] [`lightsocks`] [`proxy`] [`psiphon`] [`shadowsocks`] [`ssr`] [`trojan`] [`v2ray`]  
  这是一个用于科学上网的翻墙工具，提供多种连接方式，支持多种操作系统。它使用Go语言开发，核心模块包括代理服务器和连接管理，并整合了多种开源库。该项目旨在为用户提供快速、稳定、便捷的网络访问方式，绕过地区限制。
- [gkd-kit/gkd](https://github.com/gkd-kit/gkd) ★31147 [`accessibility`] [`android`] [`auto`] [`click`] [`compose`] [`jetpack-compose`] [`kotlin`] [`kotlin-js`] [`kotlin-multiplatform`] [`webassembly`]  
  这是一个用于快速构建和部署Go语言微服务的工具包。它提供了一套预定义的组件，例如数据库访问、日志记录和API网关，帮助开发者简化微服务开发流程。该工具包主要使用Go语言和Gin框架构建，包含了数据库交互模块、日志记录模块和HTTP API路由定义。通过配置即可快速生成基本的微服务结构，提高开发效率。
- [MetaCubeX/ClashMetaForAndroid](https://github.com/MetaCubeX/ClashMetaForAndroid) ★27590  
  ClashMetaForAndroid 是一个用于 Android 设备的 Clash 客户端增强工具。它提供自定义规则配置、代理选择和连接状态监控等功能，提升 Clash 使用体验。该项目使用 Kotlin 语言和 Jetpack Compose 框架开发，核心模块包括规则解析、代理选择器和 UI 组件。用户可以通过该应用自定义 Clash 的规则，并监控代理连接状态，从而更好地管理和使用 Clash。
- [pppscn/SmsForwarder](https://github.com/pppscn/SmsForwarder) ★22897 [`android`] [`api`] [`app`] [`bark`] [`call`] [`chatgpt`] [`dingding`] [`forward`] [`mqtt`] [`pushdear`] [`pushplus`] [`serverchan`] [`sms`] [`smtp`] [`telegram`] [`webhook`] [`wechatapp`]  
  这是一个基于Python的短信转发器，用于接收并转发短信。它使用Twilio API发送短信，并支持自定义转发规则和多账户管理。项目使用Python和Flask框架构建，核心模块包括短信接收、规则匹配和Twilio API集成。该工具适用于需要将短信转发到不同平台或用户的场景，例如短信营销、客服系统等。
- [RikkaApps/Shizuku](https://github.com/RikkaApps/Shizuku) ★17448  
  Shizuku是一个rootless的Android系统权限管理工具，允许用户在不root的情况下控制Android应用的权限。它通过代理机制，在不修改系统的情况下，动态调整应用访问权限。该项目使用Java和Kotlin开发，核心是代理框架，并结合一些系统API来实现权限管理功能。  它能够以安全可靠的方式增强Android应用的权限控制，并为开发者提供更灵活的应用开发方式。
- [MatsuriDayo/NekoBoxForAndroid](https://github.com/MatsuriDayo/NekoBoxForAndroid) ★16331 [`android`] [`gfw`] [`proxy`] [`shadowsocks`] [`sing-box`] [`trojan`] [`vmess`] [`vpn`]  
  NekoBoxForAndroid 是一个安卓平台的猫咪图片展示应用。它使用 Kotlin 语言和 Jetpack Compose 框架构建，提供丰富的猫咪图片，并支持本地缓存和离线浏览。用户可以通过搜索、分类等方式快速找到心仪的猫咪图片。  该应用的核心功能是高效加载和展示大量猫咪图片，并提供用户友好的界面。
- [mihonapp/mihon](https://github.com/mihonapp/mihon) ★16012 [`android`] [`kotlin`] [`manga`] [`manga-downloader`] [`manga-reader`] [`mangadownloader`] [`mangareader`] [`tachiyomi`] [`tachiyomi-alternative`]  
  这是一个用于构建和管理微服务应用程序的工具。它使用 Go 语言开发，并基于 Kubernetes 集群运行。  核心功能是自动化的服务部署和管理，包括服务发现、负载均衡和监控。 通过声明式配置，开发者可以轻松定义服务及其依赖关系，无需手动配置复杂的网络和部署流程。  项目包含一个 CLI 工具，方便用户交互式地创建、运行和管理微服务。
- [mamoe/mirai](https://github.com/mamoe/mirai) ★14837 [`chatbot`] [`java`] [`kotlin`] [`mirai`]  
  Mirai 是一个轻量级、功能丰富的开源机器人框架，用于构建各种类型的机器人应用，例如 Discord 机器人、Telegram 机器人或其他自定义机器人。它支持多种协议，并提供丰富的 API 用于与各种平台交互。Mirai 使用 Kotlin 语言开发，基于 Netty 框架，并具有模块化的设计，方便扩展和定制。 项目的核心功能包括事件处理、消息发送、用户管理等，可广泛应用于游戏、社区、客服等领域。
- [tiann/KernelSU](https://github.com/tiann/KernelSU) ★13621 [`android`] [`kernel`] [`kernelsu`] [`root`] [`su`]  
  KernelSU是一个用于root Android设备的工具，允许用户修改内核参数并获得root权限。它通过修改内核模块实现，并提供用户友好的界面，简化了root操作。项目使用C语言开发，并依赖于Linux内核编程技术。该工具主要模块包括内核模块编译、安装和管理。

[查看更多 Kotlin 仓库 →](dist/2025100200/LANG_Kotlin.md)

## Less

- [F-loat/ChineseBQB-weapp](https://github.com/F-loat/ChineseBQB-weapp) ★95 [`bqb`] [`emoji`] [`emoticon`] [`meme`] [`miniapp`] [`sticker`] [`taro`]  
  这是一个基于微信小程序的烧烤点餐系统。用户可以通过小程序选择菜品并下单，商家可以实时查看订单和管理库存。系统使用微信小程序开发框架，结合云数据库进行数据存储和管理，并使用自定义组件优化用户体验。  主要功能包括菜品浏览、下单、支付、订单管理和库存管理等。

## Lua

- [Kong/kong](https://github.com/Kong/kong) ★41883 [`ai`] [`ai-gateway`] [`api-gateway`] [`api-management`] [`apis`] [`artificial-intelligence`] [`cloud-native`] [`devops`] [`kubernetes`] [`kubernetes-ingress`] [`kubernetes-ingress-controller`] [`llm-gateway`] [`llm-ops`] [`mcp`] [`mcp-gateway`] [`microservice`] [`microservices`] [`openai-proxy`] [`reverse-proxy`] [`serverless`]  
  Kong 是一个开源的 API 网关，用于管理和保护微服务 API。它支持各种功能，例如路由、负载均衡、身份验证、限流和监控。Kong 使用 Go 语言开发，并基于 Nginx 和 ETCD 等组件。项目提供 RESTful API 接口进行配置和管理，并支持多种插件扩展。
- [nagadomi/waifu2x](https://github.com/nagadomi/waifu2x) ★28020 [`super-resolution`] [`torch`] [`waifu2x`]  
  这是一个用于图像超分辨率的开源项目。它使用深度学习技术，通过训练模型来提高图像分辨率。该项目主要用Python编写，并基于PyTorch框架，包含预训练模型和用于图像处理的脚本。用户可以利用提供的模型对低分辨率图像进行上采样，使其达到更高清晰度。该项目旨在提供一种简单易用且高效的图像超分辨率解决方案，并支持多种输入图像格式。
- [iDvel/rime-ice](https://github.com/iDvel/rime-ice) ★13181 [`rime`] [`rime-config`] [`rime-custom`] [`rime-schema`] [`rime-squirrel`] [`rime-weasel`]  
  这是一个基于Rime输入法的冰岛语输入方案。它提供准确的冰岛语字符输入，支持各种冰岛语字母组合和特殊字符。该方案使用Python编写，并利用Rime的规则引擎实现。项目包含详细的配置说明，方便用户快速上手并自定义输入习惯。
- [luarocks/luarocks](https://github.com/luarocks/luarocks) ★3575 [`lua`] [`lua-modules`] [`luajit`] [`luarocks`] [`package-management`] [`package-manager`]  
  Luarocks是一个用于管理Lua模块的工具。它允许开发者方便地下载、安装、更新和卸载Lua库。Luarocks使用Lua语言编写，并基于LuaRocks数据库管理模块信息。该工具主要通过命令行接口操作，提供易于使用的命令来处理模块依赖关系，确保Lua项目能够顺利运行。

## Makefile

- [crifan/reverse_debug_frida](https://github.com/crifan/reverse_debug_frida) ★55  
  该项目提供了一个使用 Frida 的反向调试框架，用于分析和调试 Android 应用。它允许用户在应用运行时通过注入脚本进行操作，例如跟踪函数调用、修改内存、获取变量值等。该框架主要使用 Python 编写，并结合 Frida 的 JavaScript API，以实现高效的反向调试功能。  项目包含了常用的调试脚本示例，便于用户快速上手。

## Markdown

- [jaywcjlove/linux-command](https://github.com/jaywcjlove/linux-command) ★34550 [`bash`] [`chrome`] [`chrome-extension`] [`command-line`] [`gh-pages`] [`linux`] [`linux-command`] [`ls`] [`screen`] [`screenshot`] [`search`] [`ssh`] [`tools`] [`web-tools`]  
  这是一个Linux命令速查手册，以Markdown格式组织，涵盖了常用的Linux命令及其选项。  该项目使用Markdown编写文档，并利用GitHub Pages进行部署，方便用户快速查找和学习Linux命令。  内容包括命令的语法、参数说明以及实际应用示例，便于初学者和有一定经验的用户参考。

## MDX

- [twbs/bootstrap](https://github.com/twbs/bootstrap) ★173494 [`bootstrap`] [`css`] [`css-framework`] [`html`] [`javascript`] [`sass`] [`scss`]  
  Bootstrap是一个流行的、用于快速开发响应式 Web 应用的开源前端框架。它提供预先设计好的组件、样式和JavaScript插件，帮助开发者创建美观且一致的用户界面。该框架使用HTML、CSS和JavaScript构建，并包含一系列可定制的主题和布局。Bootstrap简化了开发过程，使开发者能够专注于应用逻辑而非样式设计。

## NaN

- [996icu/996.ICU](https://github.com/996icu/996.ICU) ★274449  
  该项目是一个关于中国程序员工作强度和压力的匿名吐槽平台。用户可以通过匿名发表帖子，分享工作经历和感受。平台使用简单的文本格式，并支持搜索和过滤功能。该项目主要使用PHP语言开发，并使用数据库存储用户数据和帖子信息。
- [awesome-selfhosted/awesome-selfhosted](https://github.com/awesome-selfhosted/awesome-selfhosted) ★250162 [`awesome`] [`awesome-list`] [`cloud`] [`free-software`] [`hosting`] [`privacy`] [`self-hosted`] [`selfhosted`]  
  这是一个收集各种可自托管软件的资源列表。涵盖了从博客和论坛到视频会议和VPN等各种应用。列表按类别组织，便于用户快速找到所需的自托管工具。该项目使用纯文本格式维护，便于轻松更新和浏览。
- [justjavac/free-programming-books-zh_CN](https://github.com/justjavac/free-programming-books-zh_CN) ★115343 [`android`] [`angular`] [`books`] [`free`] [`ios`] [`javascript`] [`kotlin`] [`pdf`] [`programming`] [`python`] [`react`] [`react-native`] [`swift`] [`vue`]  
  这是一个中文编程书籍资源库，收集了大量免费的编程书籍。用户可以通过搜索、分类等方式快速找到需要的书籍。项目使用Python爬取书籍信息，并存储到数据库中，提供简洁的网页界面供用户浏览。  主要技术栈包括Python、Flask框架、数据库（例如SQLite），以及网页前端技术。
- [deepseek-ai/DeepSeek-R1](https://github.com/deepseek-ai/DeepSeek-R1) ★91228  
  DeepSeek-R1 是一个基于深度学习的图像识别项目，旨在快速准确地检测和分类图像中的目标。它使用 PyTorch 框架，并包含一个卷积神经网络 (CNN) 模块，用于从图像中提取特征。该项目利用预训练模型进行特征提取，并通过自定义层进行分类，从而提高识别精度和效率。  最终目标是提供一个易于使用的图像识别工具，适用于各种应用场景，例如物体检测、图像分类等。
- [ruanyf/weekly](https://github.com/ruanyf/weekly) ★76268  
  这是一个每周发布的中文技术周刊，涵盖了前端、后端、移动端、数据库、运维等多个技术领域。周刊内容包括精选文章、开源项目、工具资源、会议活动等，旨在帮助开发者快速了解业界最新技术动态。该项目使用Python和Markdown进行构建，并利用RSS订阅和邮件推送功能，确保用户及时获取最新信息。
- [PlexPt/awesome-chatgpt-prompts-zh](https://github.com/PlexPt/awesome-chatgpt-prompts-zh) ★56359 [`chat-gpt`] [`chatgpt`] [`chatgpt3`] [`chatgpt4`] [`gpt`]  
  这是一个中文版的 ChatGPT 提示词合集，涵盖了各种应用场景，例如总结文章、撰写代码、创作故事等。  该项目使用 Markdown 格式组织，方便用户查找和使用不同类型的提示词。  用户可以根据自己的需求快速找到并复制合适的提示词，提高 ChatGPT 的使用效率。
- [justjavac/awesome-wechat-weapp](https://github.com/justjavac/awesome-wechat-weapp) ★49214 [`demo`] [`minapp`] [`miniprogram`] [`weapp-demo`] [`wechat`] [`wechat-weapp`] [`wepy`] [`wxapp`] [`wxml`]  
  这是一个微信小程序开发的优秀资源列表，涵盖了各种主题，例如组件库、工具、教程和框架等。该列表由 `justjavac` 维护，使用 Markdown 格式，方便开发者快速查找和使用。
- [ziishaned/learn-regex](https://github.com/ziishaned/learn-regex) ★46110 [`learn-regex`] [`regex`] [`regular-expression`]  
  这是一个用于学习正则表达式的交互式网页应用。用户可以通过输入文本和正则表达式进行匹配练习，并获得即时反馈。该应用使用 JavaScript 和 HTML 开发，利用正则表达式库进行匹配验证。用户界面清晰易懂，支持多种正则表达式语法。
- [LC044/WeChatMsg](https://github.com/LC044/WeChatMsg) ★40013 [`chatgpt`] [`llms`] [`pyqt`] [`wechat`]  
  这是一个基于Python和PyQt5的微信消息管理工具，用于批量下载微信聊天记录。它支持指定时间范围、群聊或私聊筛选，并提供下载选项（文本、图片、语音等）。项目使用PyQuery进行HTML解析，并利用微信网页版API获取数据。程序结构清晰，易于扩展。
- [SheetJS/sheetjs](https://github.com/SheetJS/sheetjs) ★35948 [`angular`] [`bun`] [`csv`] [`data`] [`database`] [`deno`] [`excel`] [`grid`] [`html`] [`html5`] [`ios`] [`javascript`] [`json`] [`nodejs`] [`react`] [`spreadsheet`] [`table`] [`vue`] [`xlsx`] [`xml`]  
  SheetJS 是一个用于读取、写入和操作各种电子表格格式（包括 xls, xlsx, ods, csv 等）的 JavaScript 库。它支持广泛的电子表格功能，包括单元格格式、公式、图表等。主要使用 JavaScript 语言开发，并基于二进制数据操作。该库提供高效的 API，方便开发者在前端或后端环境中处理电子表格数据。

[查看更多 NaN 仓库 →](dist/2025100200/LANG_NaN.md)

## NSIS

- [bmatzelle/gow](https://github.com/bmatzelle/gow) ★6635  
  这是一个Go语言编写的命令行工具，用于在本地运行和调试Go语言程序。它提供了便捷的构建、测试和运行功能，并支持多种运行模式，如指定端口、使用配置文件等。该工具主要使用Go语言标准库和一些辅助包，例如用于配置文件解析的`viper`库。它简化了Go程序的本地开发流程，提高了开发效率。

## Objective-C

- [MustangYM/WeChatExtension-ForMac](https://github.com/MustangYM/WeChatExtension-ForMac) ★22648 [`alfred`] [`macos`] [`wechat`] [`wechat-macos`] [`wechat-plugin`] [`weixin-plugin`]  
  这是一个用于 macOS 的微信扩展程序，旨在提升微信在 Mac 上的使用体验。该扩展程序使用 JavaScript 和 Electron 框架开发，主要功能包括：自定义快捷键、消息预览、文件快速下载等。它通过与微信的原生 API 进行交互，实现对微信功能的增强。用户无需修改微信客户端，即可享受便捷的扩展功能。
- [opa334/TrollStore](https://github.com/opa334/TrollStore) ★20231  
  这是一个用于在iOS设备上安装非App Store应用的工具。它利用了系统漏洞，允许用户绕过苹果的应用商店审核机制。该工具主要使用Objective-C语言，并依赖于Cydia Substrate框架。核心功能包括安装、卸载和管理非App Store应用。用户需自行承担使用风险。
- [TKkk-iOSer/WeChatPlugin-MacOS](https://github.com/TKkk-iOSer/WeChatPlugin-MacOS) ★14288 [`alfred-workflow`] [`macos`] [`plugin`] [`tweak`] [`wechat`] [`weixin`]  
  这是一个macOS平台的微信插件，允许用户在macOS系统上使用微信。它使用Electron框架，基于微信网页版协议，并结合一些本地化UI组件，实现微信网页版功能在macOS上的桌面化运行。  项目主要使用JavaScript和TypeScript进行开发，核心模块包括Electron渲染进程、网络请求处理和UI组件。  该插件旨在提供一个更便捷的macOS微信使用体验。
- [sunnyyoung/WeChatTweak-macOS](https://github.com/sunnyyoung/WeChatTweak-macOS) ★12516 [`alfred`] [`alfred-workflow`] [`macos`] [`no-revoke`] [`norevoke`] [`raycast-extension`] [`revoke`] [`tweak`] [`wechat`] [`wechat-macos`] [`wechat-plugin`] [`wechat-plugin-macos`] [`wechat-raycast`] [`wechat-tweak`] [`wechathook`] [`wechattweak`] [`wechattweak-macos`] [`weixin`] [`weixin-plugin`] [`weixin-tweak`]  
  该项目提供了一个 macOS 平台的微信增强工具，允许用户自定义微信客户端的界面和功能。它基于 Python 和 PyQt 框架开发，通过修改微信应用程序的配置文件或注入自定义代码实现功能增强。  用户可以通过配置来调整界面布局、快捷键等，从而提升使用体验。  该项目主要针对 macOS 系统的微信用户，提供了一种个性化定制微信客户端的方法。
- [sequelpro/sequelpro](https://github.com/sequelpro/sequelpro) ★9170 [`macos`] [`mysql`] [`objective-c`] [`sequelpro`]  
  SequelPro是一个Mac平台上的MySQL数据库管理工具。它提供图形界面，用于连接、浏览、管理和编辑MySQL数据库。用户可以通过SequelPro执行SQL语句、查看数据、备份和恢复数据库，以及管理用户和权限。该工具使用Objective-C和Cocoa框架开发，并整合了MySQL客户端库，以实现高效的数据库交互。
- [CodeTips/BaiduNetdiskPlugin-macOS](https://github.com/CodeTips/BaiduNetdiskPlugin-macOS) ★8800  
  该项目是一个macOS平台的百度网盘插件，利用CodeTips框架实现。用户可在代码编辑器中直接访问百度网盘文件，方便快捷地进行文件操作。插件使用Swift语言开发，主要模块包括文件系统集成和UI交互，支持文件上传、下载和预览等功能。
- [shadowsocks/shadowsocks-iOS](https://github.com/shadowsocks/shadowsocks-iOS) ★8170  
  Shadowsocks-iOS 是一个用于 iOS 设备的 Shadowsocks 代理客户端。它允许用户通过配置 Shadowsocks 服务器连接到 VPN 服务，从而绕过网络限制访问受限内容。该客户端使用 Swift 语言开发，并提供了直观的界面用于配置服务器信息、选择连接协议和管理连接。  用户可以自定义连接参数，如加密方式和端口，以满足不同的安全需求。
- [Cenmrev/V2RayX](https://github.com/Cenmrev/V2RayX) ★7684  
  V2RayX 是一个基于 V2Ray 的轻量级跨平台代理工具。它提供易用的图形化界面，方便用户配置和管理不同的 V2Ray 服务器连接。支持多种协议和加密方式，并提供内置的服务器管理功能。项目使用 Electron 框架，结合了 Node.js 和 Vue.js 技术，实现快速便捷的客户端操作体验。
- [Sequel-Ace/Sequel-Ace](https://github.com/Sequel-Ace/Sequel-Ace) ★7147 [`hacktoberfest`] [`hacktoberfest2023`] [`macos`] [`mariadb`] [`mysql`] [`objective-c`] [`sequel`] [`sequelace`] [`sequelpro`]  
  Sequel-Ace 是一个用于高效管理和操作数据库的工具，提供直观的图形化界面。它支持多种数据库系统，包括 MySQL、PostgreSQL 等。该工具使用 Python 语言开发，基于 PyQt 框架构建，并包含 SQL 查询、数据导出导入、数据可视化等功能模块。用户可以通过该工具便捷地执行 SQL 语句、管理数据库对象、以及执行数据操作。
- [AloneMonkey/MonkeyDev](https://github.com/AloneMonkey/MonkeyDev) ★6732 [`cocoapods`] [`ios`] [`iosopendev`] [`ipa`] [`objective-c`] [`reverse-engineering`] [`theos`] [`xcode`]  
  MonkeyDev是一个用于构建和部署微服务的工具，使用Go语言开发。它提供了一套简易的API接口定义和代码生成机制，帮助开发者快速创建微服务。  核心功能包括自动生成代码（如gRPC接口、数据库模型等），以及提供本地开发和部署环境。  该工具主要面向需要快速构建和部署微服务应用的开发者，通过减少重复代码，提高开发效率。

[查看更多 Objective-C 仓库 →](dist/2025100200/LANG_Objective-C.md)

## Objective-C++

- [josh-/Aristocrat](https://github.com/josh-/Aristocrat) ★67 [`carthage`] [`macos`] [`menubar`] [`objective-c`] [`objective-c-plus-plus`] [`tesseract-ocr`] [`zxing`]  
  这是一个用于生成高质量、可定制化游戏角色的工具。它使用Python和Pygame库，提供界面设计和角色属性设置功能。用户可以通过简单的操作创建不同类型的角色，并自定义角色的外观、技能和能力值。该工具旨在为游戏开发者提供便捷的角色创建方案，节省开发时间和精力。

## Pascal

- [cheat-engine/cheat-engine](https://github.com/cheat-engine/cheat-engine) ★17013  
  Cheat Engine是一个强大的游戏修改工具，允许用户修改游戏中的各种数值，如生命值、金钱或物品数量。它支持多种游戏格式，并提供灵活的内存编辑功能。该工具主要使用C++开发，包含一个图形用户界面，用于方便地浏览和修改游戏内存。核心模块包括内存扫描、数据类型识别和修改功能。通过这些功能，用户可以轻松地调整游戏内数值，以方便游戏测试或追求特定游戏体验。
- [stascorp/rdpwrap](https://github.com/stascorp/rdpwrap) ★15888  
  该项目提供了一个RDP连接包装器，用于在Windows环境下简化RDP连接过程。它允许用户通过自定义参数（如用户名、密码、服务器地址等）轻松连接到远程桌面服务器，并支持连接失败重试机制。该工具使用Python语言开发，基于`win32com`库，利用了Windows系统API进行RDP连接操作，并提供命令行接口。  核心功能是自动化RDP连接，提高了连接效率，并降低了手动操作的复杂性。

## Perl

- [hexsum/Mojo-Webqq](https://github.com/hexsum/Mojo-Webqq) ★1719 [`api`] [`bot`] [`chat`] [`chatbot`] [`cli`] [`docker`] [`irc`] [`mojo`] [`perl`] [`qq`] [`qqbot`] [`smartqq`] [`webqq`]  
  Mojo-Webqq 是一个基于 Web 的 QQ 客户端，允许用户通过浏览器访问 QQ 功能。它使用 JavaScript 作为主要开发语言，并利用 Node.js 和 WebSocket 技术实现与 QQ 服务器的连接。项目包含用户登录、消息接收、好友列表、群聊等核心功能。该项目旨在提供一个便捷、易用的网页版 QQ 客户端，方便用户在各种设备上访问 QQ 服务。
- [wisdomfusion/qqwry.dat](https://github.com/wisdomfusion/qqwry.dat) ★398 [`qqwry`]  
  该项目提供了一个基于QQWry.dat数据库的IP地址查询工具。它使用Python编写，并利用 `ipaddress` 模块进行IP地址解析和数据库查询。  该工具能够快速准确地根据IP地址获取其对应的地理位置信息，例如国家、地区和城市。  项目包含清晰的代码结构和注释，方便用户理解和使用。

## PHP

- [nextcloud/server](https://github.com/nextcloud/server) ★31600 [`cloud`] [`collaboration`] [`decentralized`] [`design`] [`distributed`] [`enterprise`] [`federation`] [`file-sharing`] [`free-software`] [`hacktoberfest`] [`javascript`] [`nextcloud`] [`open-source`] [`opensource`] [`owncloud`] [`php`] [`self-hosting`] [`sharing`] [`usability`] [`ux`]  
  Nextcloud Server是一个开源的云存储和协作平台。它允许用户在自己的服务器上创建私有的云空间，用于文件共享、协作编辑、日历同步等。该平台主要使用PHP语言开发，并基于Apache或Nginx等Web服务器，结合各种数据库技术（如MySQL），提供用户界面和API接口。核心功能包括文件管理、用户权限控制、团队协作、以及各种应用程序集成。
- [blueimp/jQuery-File-Upload](https://github.com/blueimp/jQuery-File-Upload) ★30877  
  这是一个基于jQuery的Web文件上传插件。它提供了一种简单易用的方式，让用户可以上传文件到服务器。插件支持多种文件类型、拖放上传、进度条显示、多文件同时上传以及错误提示等功能。它使用JavaScript编写，并利用HTML5特性，提高了上传效率和用户体验。插件的核心模块包括文件队列管理、上传进度跟踪和服务器端交互。
- [fzaninotto/Faker](https://github.com/fzaninotto/Faker) ★26764  
  Faker是一个用于生成伪数据（例如姓名、地址、电话号码等）的Python库。它可以帮助测试、开发和演示。该库使用多种技术来生成不同的数据类型，并支持多种语言。  核心功能包括随机数据生成，并提供各种配置选项以满足不同的需求。  该库主要使用Python语言编写，并具有良好的可扩展性。
- [guzzle/guzzle](https://github.com/guzzle/guzzle) ★23413 [`curl`] [`guzzle`] [`http-client`] [`httpclient`] [`php`] [`psr-7`] [`requests`] [`webservices`]  
  Guzzle是一个用于构建现代HTTP客户端的PHP库。它提供了一套易于使用且功能强大的API，用于执行各种HTTP请求，包括GET、POST、PUT、DELETE等。Guzzle支持多种请求选项，如超时、认证、请求头和响应处理。它基于事件驱动模型，可有效地处理并发请求，并提供强大的错误处理机制。Guzzle使用PHP作为主要语言，并支持多种HTTP协议和传输层。 该库广泛应用于各种PHP应用程序，以与Web服务进行交互。
- [DesignPatternsPHP/DesignPatternsPHP](https://github.com/DesignPatternsPHP/DesignPatternsPHP) ★22171 [`code-examples`] [`design-pattern`] [`design-patterns`] [`designpatternsphp`] [`modern-php`] [`oop`] [`php`] [`php8`] [`phpunit`]  
  这是一个用PHP实现各种设计模式的示例项目。它涵盖了常用的设计模式，例如单例模式、工厂模式、观察者模式、策略模式等，并提供了清晰的代码示例和解释。项目使用PHP作为主要编程语言，并通过注释和文档说明了每个模式的用途、实现原理和优缺点。该项目旨在帮助学习者理解和应用各种设计模式，从而提高代码的可维护性和可扩展性。
- [PHPMailer/PHPMailer](https://github.com/PHPMailer/PHPMailer) ★21765 [`attachment`] [`email`] [`hacktoberfest`] [`php`] [`php-library`] [`phpmailer`] [`smtp`] [`tls-support`] [`xoauth2`]  
  PHPMailer是一个用于PHP的邮件发送类库。它提供了一种简单易用的方式来发送各种类型的电子邮件，包括HTML邮件和附件。该库支持多种邮件传输协议（如SMTP），并包含错误处理和调试功能，以帮助用户解决邮件发送问题。PHPMailer使用PHP语言编写，并通过面向对象的方式组织代码，提高了代码的可维护性和可扩展性。  它包含了各种配置选项，允许用户根据自己的需求定制邮件发送过程。
- [Seldaek/monolog](https://github.com/Seldaek/monolog) ★21328 [`hacktoberfest`] [`logger`] [`logging`] [`php`] [`psr-3`]  
  Monolog是一个面向PHP的日志记录组件，提供灵活的日志记录和处理能力。它支持多种输出方式，例如文件、数据库、网络等，并允许自定义处理器和格式化器。Monolog采用面向对象的架构，易于集成到各种PHP项目中。它使用PHP作为主要语言，并提供清晰的API接口，方便开发者配置和使用。核心功能包括日志记录、过滤器、处理器和输出适配器，使得开发者能够根据需求定制日志流。
- [bcit-ci/CodeIgniter](https://github.com/bcit-ci/CodeIgniter) ★18240 [`php`] [`php-framework`] [`php7`] [`php8`]  
  这是一个基于CodeIgniter框架的简单CI项目，用于演示基本的控制器、模型和视图结构。  项目包含用户注册、登录等功能，使用MySQL数据库进行数据存储。  主要使用PHP语言开发，并采用MVC架构，代码结构清晰，易于理解和扩展。  项目包含完整的数据库脚本和配置文件，方便快速部署和测试。
- [easychen/howto-make-more-money](https://github.com/easychen/howto-make-more-money) ★17918  
  这是一个教你如何通过多种途径增加收入的实用指南项目。它涵盖了投资理财、副业创业、提升技能等方面，内容以易于理解的步骤和案例为主。项目使用Markdown编写，并包含一些图表和表格辅助理解。通过学习该指南，用户可以系统性地了解不同增收途径，并制定适合自身情况的增收计划。
- [nikic/PHP-Parser](https://github.com/nikic/PHP-Parser) ★17349 [`ast`] [`parser`] [`php`] [`static-analysis`]  
  PHP-Parser是一个用于解析PHP代码的库。它提供了一个灵活的API来访问PHP代码的抽象语法树（AST）。该库使用PHP编写，并基于递归下降解析器。  它支持PHP 5.3 到 7.4 版本的语法，并能有效地处理各种PHP代码结构，包括表达式、语句和声明。  开发者可以利用该库进行代码分析、转换、重构等操作。

[查看更多 PHP 仓库 →](dist/2025100200/LANG_PHP.md)

## PowerShell

- [ScoopInstaller/Scoop](https://github.com/ScoopInstaller/Scoop) ★22945 [`installer`] [`powershell`] [`scoop`] [`windows`]  
  ScoopInstaller是一个用于在Windows上安装和管理各种命令行工具的包管理器。它允许用户通过简单的命令行指令安装、更新和卸载软件包，避免了手动下载和配置的繁琐步骤。Scoop使用Go语言开发，并利用了Git和GitHub Actions进行版本控制和持续集成。核心功能包括：软件包仓库、包管理、依赖管理和自动更新，以提高用户工作效率。
- [Atlas-OS/Atlas](https://github.com/Atlas-OS/Atlas) ★16898 [`ame-wizard`] [`atlas`] [`atlasos`] [`debloat`] [`fps`] [`gaming`] [`latency`] [`open-source`] [`opensource`] [`performance`] [`privacy`] [`security`] [`tweaks`] [`windows`]  
  Atlas-OS是一个开源的、基于Rust的嵌入式操作系统，旨在提供一个轻量级、可定制的平台，用于各种物联网设备。它使用Rust进行开发，并包含一个用于资源管理、驱动程序和网络协议栈的核心组件。  该项目提供了一个可移植的内核，并支持多种硬件平台，旨在简化嵌入式系统开发。  开发者可以通过模块化设计扩展其功能，并针对特定需求进行配置。
- [qwsddn/autowork](https://github.com/qwsddn/autowork) ★55  
  这是一个用于自动化的工作流程管理工具。它使用Python和Flask框架构建，提供可视化工作流编辑器和任务执行引擎。用户可以定义不同的工作步骤、触发条件和任务依赖关系，以实现自动化流程。该工具支持任务调度、错误处理和日志记录，并提供API接口供其他系统集成。

## Python

- [EbookFoundation/free-programming-books](https://github.com/EbookFoundation/free-programming-books) ★371163 [`books`] [`education`] [`hacktoberfest`] [`list`] [`resource`]  
  这是一个收集免费编程书籍的网站。它使用 Python 和 Flask 框架构建，通过爬虫从各种网站抓取编程书籍链接，并将其整理成易于浏览的分类目录。用户可以方便地搜索和下载各种编程语言（如 Python、Java、JavaScript 等）的免费电子书。该项目旨在为学习编程的人提供免费学习资源。
- [public-apis/public-apis](https://github.com/public-apis/public-apis) ★367097 [`api`] [`apis`] [`dataset`] [`development`] [`free`] [`list`] [`lists`] [`open-source`] [`public`] [`public-api`] [`public-apis`] [`resources`] [`software`]  
  这是一个收集了大量公开API的资源库。它涵盖了各种类型的API，包括天气、股票、笑话、图片等等。  用户可以通过搜索和筛选功能快速找到所需的API。该项目使用简单的HTML和JavaScript构建，并提供了一个易于使用的网页界面。  该资源库主要用于开发者快速查找和测试公开API，节省了开发时间。
- [ytdl-org/youtube-dl](https://github.com/ytdl-org/youtube-dl) ★138236  
  这是一个命令行工具，用于下载YouTube和其他视频平台的视频和音频。它支持多种格式和质量选项，并能下载字幕和多个音轨。该工具使用Python编写，并基于`requests`库进行网络请求，`beautifulsoup4`库进行网页解析，`ffmpeg`进行视频格式转换。  项目包含丰富的命令行参数，允许用户灵活地控制下载过程。
- [deepseek-ai/DeepSeek-V3](https://github.com/deepseek-ai/DeepSeek-V3) ★99525  
  DeepSeek-V3 是一个基于深度学习的图像搜索引擎。它利用卷积神经网络 (CNN) 提取图像特征，并构建高效的图像相似度匹配算法。项目使用 Python 和 PyTorch 框架实现，核心模块包括特征提取网络、相似度计算模块和数据库索引。DeepSeek-V3 可用于快速查找与目标图像相似的图片，并支持大规模图像数据集的索引和搜索。
- [nvbn/thefuck](https://github.com/nvbn/thefuck) ★94209 [`python`] [`shell`]  
  Thefuck是一个命令行工具，用于修复错误的shell命令。它分析用户输入的错误命令，并尝试预测用户想要执行的正确命令。该工具使用Python编写，利用自然语言处理技术识别用户意图，并根据历史命令和系统信息提供建议。核心功能是自动修正用户输入的错误命令，提高用户效率。
- [home-assistant/core](https://github.com/home-assistant/core) ★81699 [`asyncio`] [`hacktoberfest`] [`home-automation`] [`internet-of-things`] [`iot`] [`mqtt`] [`python`] [`raspberry-pi`]  
  Home Assistant Core是一个开源的家庭自动化平台，允许用户通过多种设备控制和自动化家庭环境。它支持各种传感器、执行器和智能家居设备，并提供直观的界面进行配置和管理。该平台使用Python编写，基于Home Assistant YAML配置，并利用MQTT、REST API等协议进行通信。关键模块包括用户界面、设备集成和自动化规则引擎，使用户能够创建自定义的自动化场景和控制流程。
- [fighting41love/funNLP](https://github.com/fighting41love/funNLP) ★76336  
  这是一个基于Python的自然语言处理（NLP）项目，旨在提供一系列易于使用的函数，用于文本预处理、特征提取和情感分析。项目使用spaCy和Scikit-learn等库，实现文本清洗、词向量化和情感分类等功能。该项目的目标是简化NLP任务的流程，并提供可重用的代码模块，方便开发者快速构建NLP应用。
- [sherlock-project/sherlock](https://github.com/sherlock-project/sherlock) ★69126 [`cli`] [`cti`] [`cybersecurity`] [`forensics`] [`hacktoberfest`] [`information-gathering`] [`infosec`] [`linux`] [`osint`] [`pentesting`] [`python`] [`python3`] [`reconnaissance`] [`redteam`] [`sherlock`] [`tools`]  
  这是一个用于在互联网上查找与目标相关的公开信息的工具。它利用多种搜索引擎和公共数据源来收集信息，包括社交媒体、开源数据库和网络论坛。该工具使用Python编写，并基于Scrapy爬虫框架构建，结合正则表达式和自然语言处理技术进行信息提取。核心功能包括目标识别、社交媒体分析和网络关系图谱构建，帮助用户快速获取目标个人或组织的背景信息。
- [xtekky/gpt4free](https://github.com/xtekky/gpt4free) ★65197 [`chatbot`] [`chatbots`] [`chatgpt`] [`chatgpt-4`] [`chatgpt-api`] [`chatgpt-free`] [`chatgpt4`] [`deepseek`] [`deepseek-api`] [`deepseek-r1`] [`gpt`] [`gpt-4`] [`gpt-4o`] [`gpt4`] [`gpt4-api`] [`language-model`] [`openai`] [`openai-api`] [`openai-chatgpt`] [`reverse-engineering`]  
  该项目提供一个基于GPT-4的免费API访问途径。用户无需付费即可调用GPT-4模型进行文本生成、翻译等任务。该项目使用Python和OpenAI API进行开发，核心功能包括API接口封装和请求管理，并提供简易的调用示例。
- [scrapy/scrapy](https://github.com/scrapy/scrapy) ★58399 [`crawler`] [`crawling`] [`framework`] [`hacktoberfest`] [`python`] [`scraping`] [`web-scraping`] [`web-scraping-python`]  
  Scrapy是一个基于Python的快速、高层次屏幕抓取和Web爬虫框架。它提供了一个强大的架构，用于从各种网站中提取结构化数据。Scrapy支持不同的爬取策略，并提供强大的管道机制用于处理和存储提取的数据。主要使用Python语言开发，并包含了如Item、Spider、Pipeline等关键模块，可轻松应对各种复杂的网页结构和爬取需求。

[查看更多 Python 仓库 →](dist/2025100200/LANG_Python.md)

## Rich Text Format

- [huangyz0918/Hackintosh-Installer-University](https://github.com/huangyz0918/Hackintosh-Installer-University) ★3950 [`apple`] [`apple-hardware`] [`bootloader`] [`clover`] [`hackintosh`] [`hardware`] [`installation`] [`installer`] [`kext`] [`mac`] [`macos`] [`osx86`] [`tutorial`]  
  该项目提供了一个用于在Mac硬件上安装macOS系统的工具包。  它使用自动化脚本简化了安装过程，涵盖了从准备驱动到最终安装的多个步骤。  主要由Python脚本和Shell脚本构成，并利用了自制工具和一些常用的macOS安装工具。  该项目的目标是为用户提供一个更便捷、更可靠的Hackintosh安装方案。
- [sqlsec/clover](https://github.com/sqlsec/clover) ★1354 [`clover-efi`] [`hackintosh`]  
  Clover是一个用于SQL注入漏洞检测的工具。它使用模糊测试技术，通过生成各种SQL语句来探测数据库服务器的漏洞。Clover主要用Python编写，并基于Requests库进行HTTP请求。核心模块包括SQL注入payload生成器和漏洞检测逻辑。该工具旨在帮助安全团队快速有效地识别潜在的SQL注入风险。
- [tsingui/clover-efi](https://github.com/tsingui/clover-efi) ★953  
  Clover EFI是一个用于macOS安装和引导的工具，支持多种硬件平台。它使用C++编写，基于EFI规范，提供图形化界面选择安装和引导macOS。该项目包含了核心引导逻辑、硬件检测和驱动加载模块，以及用户界面组件。Clover EFI旨在简化macOS在非苹果硬件上的安装和使用流程，并提供更灵活的自定义选项。

## Roff

- [TapXWorld/ChinaTextbook](https://github.com/TapXWorld/ChinaTextbook) ★50646  
  这是一个用于中国教材的在线学习平台。该平台利用Web技术(主要语言为JavaScript，框架为React)，提供教材章节、练习题、视频讲解等学习资源。用户可以通过平台进行在线学习，并进行练习测试，获得学习反馈。项目旨在为用户提供便捷高效的中国教材学习体验。
- [pyenv/pyenv](https://github.com/pyenv/pyenv) ★43283 [`python`] [`shell`]  
  这是一个用于在同一系统上管理不同Python版本的工具。  它允许用户轻松安装、切换和管理多个Python版本，并配置不同的项目使用不同的Python环境。  主要使用Python脚本编写，并利用操作系统级的工具进行安装和管理。  核心功能包括：创建虚拟环境、安装和卸载Python版本、切换Python版本，以及配置项目依赖。  通过简单的命令行操作，可以有效地避免不同项目Python版本冲突的问题。
- [GangZhuo/BaiduPCS](https://github.com/GangZhuo/BaiduPCS) ★3527  
  BaiduPCS 是一个基于 Python 的百度网盘客户端，允许用户方便地管理和下载百度网盘文件。它使用 requests 库进行网络请求，并结合多线程下载技术提高下载速度。  项目包含文件上传、下载、同步等功能。  用户可以通过命令行界面操作，并支持多种文件格式。

## Ruby

- [discourse/discourse](https://github.com/discourse/discourse) ★45190 [`discourse`] [`ember`] [`forum`] [`javascript`] [`postgresql`] [`rails`] [`ruby`]  
  Discourse是一个开源论坛软件，提供易于使用的界面和强大的功能，用于创建和管理社区。它使用Ruby on Rails构建，并具有灵活的主题系统和插件生态系统，允许用户自定义论坛的外观和功能。  该项目支持各种语言和地区，并提供多种配置选项，以满足不同规模和需求的社区。
- [greatghoul/remote-working](https://github.com/greatghoul/remote-working) ★11083 [`china`] [`freelancer`] [`remote-work`] [`remote-workers`] [`soho`] [`telecommunications`] [`work-from-home`]  
  这是一个用于远程工作协作的工具，帮助团队成员更好地组织和管理远程工作任务。它使用Python和Flask框架构建，提供任务分配、进度跟踪和沟通功能。核心模块包括任务管理系统、实时聊天和文件共享功能，旨在提升远程团队的效率和协作性。
- [Mark24Code/rime-auto-deploy](https://github.com/Mark24Code/rime-auto-deploy) ★1644 [`cli`] [`cli-app`] [`comand-line`] [`command-line-tool`] [`repl`] [`rime`] [`rime-config`] [`ruby`] [`terminal`] [`toolkit`]  
  该项目提供了一个自动部署方案，用于将Rime输入法引擎部署到各种环境。它使用Python编写，基于`subprocess`模块和`shutil`模块实现自动化部署过程，支持多种操作系统。项目包含配置文件，用于自定义部署目标、引擎版本和依赖项。通过脚本一键完成部署，提高了效率，降低了部署门槛。
- [TideSec/Mars](https://github.com/TideSec/Mars) ★1314  
  Mars是一个用于安全评估的开源工具，专注于识别和利用Web应用程序中的潜在安全漏洞。它使用Python编写，基于流行的网络爬虫框架Scrapy，并结合漏洞扫描模块，以自动化方式对目标网站进行全方位扫描。该工具提供易于理解的报告，帮助安全团队快速定位并修复安全风险。
- [elcuervo/airplay](https://github.com/elcuervo/airplay) ★1066  
  这是一个用于在macOS上控制AirPlay接收器（例如电视或显示器）的命令行工具。它允许通过命令行指定要播放的内容（例如本地文件路径或URL）以及AirPlay接收器的名称或地址，实现便捷的媒体播放控制。该工具使用`python`和`pyobjc`库，通过与macOS系统API交互来实现AirPlay功能的控制。主要模块包括连接、认证、媒体播放控制和错误处理。
- [TideSec/FuzzScanner](https://github.com/TideSec/FuzzScanner) ★1014  
  FuzzScanner是一个基于Python开发的漏洞扫描工具，用于识别Web应用程序中的安全漏洞。它使用模糊测试技术，通过构造各种测试用例对目标应用程序进行攻击，以发现潜在的SQL注入、跨站脚本攻击等漏洞。该工具主要使用Python的requests库进行HTTP请求，并结合正则表达式和自定义规则进行漏洞检测。项目包含了详细的测试用例设计和漏洞检测规则，方便用户进行二次开发和定制。
- [Parallels/vagrant-parallels](https://github.com/Parallels/vagrant-parallels) ★1010 [`parallels`] [`parallels-desktop`] [`plugin`] [`vagrant`]  
  这是一个用于在 Parallels Desktop 上运行 Vagrant 的插件。它允许用户通过 Parallels 的虚拟化功能，更便捷地启动和管理基于 Vagrant 的虚拟机。插件利用 Vagrant 的命令行接口，并整合 Parallels 的虚拟化环境，从而提供更流畅的虚拟机操作体验。主要使用 Ruby 和 Vagrant API 进行开发，并依赖于 Parallels Desktop 的虚拟化功能。
- [L-codes/pwcrack-framework](https://github.com/L-codes/pwcrack-framework) ★517 [`cisco`] [`dedecms`] [`filezilla`] [`foxmail`] [`gpp`] [`hashcrack`] [`juniper`] [`lm`] [`md5`] [`mdc2`] [`mysql`] [`ntlm`] [`online`] [`password`] [`pwcrack`] [`ripemd`] [`servu`] [`sha1`] [`whirlpool`] [`zfsoft`]  
  该项目是一个用于密码破解的框架，提供多种破解方法和工具。它使用Python作为主要编程语言，并整合了多种密码学库和算法。框架包含字典攻击、暴力破解、基于规则的破解等模块，并支持自定义破解策略。用户可以根据需求配置不同的参数和选项，以提高破解效率和准确性。该框架旨在为安全研究和渗透测试提供一个便捷的工具，但其使用需遵守法律法规，且仅限于授权测试环境。

## Rust

- [rustdesk/rustdesk](https://github.com/rustdesk/rustdesk) ★99134 [`android`] [`anydesk`] [`dart`] [`flatpak`] [`flutter`] [`flutter-apps`] [`ios`] [`linux`] [`macos`] [`p2p`] [`rdp`] [`remote-control`] [`remote-desktop`] [`rust`] [`rust-lang`] [`teamviewer`] [`vnc`] [`wayland`] [`windows`]  
  RustDesk是一个跨平台的远程桌面应用，支持Windows、macOS、Linux等系统。它使用Rust语言开发，具有轻量级、快速、安全等特点。RustDesk采用WebSocket协议进行通信，并提供多种安全措施，例如加密传输和身份验证。项目包含客户端和服务器端，可实现远程控制、文件共享和屏幕共享等功能。
- [zed-industries/zed](https://github.com/zed-industries/zed) ★66535 [`gpui`] [`rust-lang`] [`text-editor`] [`zed`]  
  这是一个用于构建和管理基于ZED相机（ZED-2、ZED-Mini等）的3D点云和深度图像处理工作流的Python库。它提供了一系列工具，用于快速采集、预处理和分析ZED相机数据，例如标定、深度图处理、点云生成、目标识别等。库基于Python和OpenCV，并利用ZED SDK进行相机交互。该库的目标是简化ZED相机数据的处理流程，并提供易于使用的API，方便开发者快速构建基于ZED相机的应用。
- [topjohnwu/Magisk](https://github.com/topjohnwu/Magisk) ★56146  
  Magisk 是一个 Android 系统模块框架，允许用户在不修改系统的情况下安装和管理模块。它使用 C++ 和 Java 编写，并利用 Android 系统的模块化特性。Magisk 通过修改系统引导加载器并插入自定义模块来实现其功能。用户可以使用 Magisk 安装各种模块，例如增强性能、添加功能或修改系统行为。
- [lencx/ChatGPT](https://github.com/lencx/ChatGPT) ★54153 [`ai`] [`app`] [`application`] [`chatgpt`] [`desktop-app`] [`gpt`] [`gpt-3`] [`linux`] [`macos`] [`notes-app`] [`openai`] [`rust`] [`tauri`] [`webview`] [`windows`]  
  该项目是一个使用Python和OpenAI API构建的简易ChatGPT接口。它允许用户通过简单的API调用与ChatGPT模型进行交互，获取文本回复。项目使用Flask框架构建API服务器，并提供清晰的文档和示例代码，方便用户快速集成到其他应用中。核心功能包括发送提示词、接收回复、错误处理和API密钥管理。
- [starship/starship](https://github.com/starship/starship) ★51412 [`bash`] [`fish`] [`fish-prompt`] [`fish-theme`] [`oh-my-zsh`] [`powershell`] [`rust`] [`shell-prompt`] [`starship`] [`zsh`] [`zsh-prompt`] [`zsh-theme`]  
  Starship 是一个跨平台的终端命令行工具，提供高度可定制化的提示信息，以增强终端用户体验。它使用纯 Rust 编写，并支持多种 shell，包括 Zsh、Bash 和 Fish。Starship 通过配置文件和插件机制实现自定义，用户可以根据需要添加主题、图标和信息展示。该项目强调易用性和高效性，为用户提供简洁明了的命令行环境。
- [dani-garcia/vaultwarden](https://github.com/dani-garcia/vaultwarden) ★49426 [`bitwarden`] [`bitwarden-rs`] [`docker`] [`rocket`] [`rust`] [`vaultwarden`]  
  Vaultwarden是一个开源的、轻量级的、功能强大的VPN服务器。它使用Rust编写，并提供易于使用的Web界面和命令行工具。用户可以通过Web界面管理连接、配置服务器，并监控连接状态。该项目支持多种VPN协议，例如WireGuard、OpenVPN、IKEv2和IPsec。Vaultwarden的核心功能包括用户管理、安全配置以及日志记录。它易于部署和维护，适合个人和小型团队使用。
- [tw93/Pake](https://github.com/tw93/Pake) ★42525 [`chatgpt`] [`claude`] [`desktop`] [`gemini`] [`hight-performance`] [`linux`] [`macos`] [`no-electron`] [`package`] [`rust`] [`tauri`] [`windows`] [`youtube`]  
  Pake是一个用于构建和管理Python包的工具，旨在简化依赖管理和版本控制。它使用Python编写，基于`setuptools`和`poetry`，并提供一个命令行界面。  Pake的核心功能包括：自动构建、安装和测试Python包，以及管理依赖项，支持多种依赖管理策略。  用户可以通过简洁的命令配置包，并确保其在不同环境下的一致性。
- [TabbyML/tabby](https://github.com/TabbyML/tabby) ★32170 [`ai`] [`codegen`] [`coding-assistant`] [`coding-language`] [`developer-experience`] [`developer-tools`] [`gen-ai`] [`ide`] [`llms`]  
  TabbyML 是一个用于机器学习模型部署和管理的工具。它提供了一个易于使用的平台，允许用户将训练好的模型轻松部署到各种环境（如云服务器、本地机器）并进行监控。Tabby 使用 Python 编写，基于 Flask 框架，并整合了 Docker 和 Kubernetes 等容器化技术，以确保模型部署的可靠性和可扩展性。核心功能包括模型打包、部署、监控和版本管理，并支持多种模型格式和部署选项。
- [fish-shell/fish-shell](https://github.com/fish-shell/fish-shell) ★31073 [`fish`] [`rust`] [`shell`] [`terminal`]  
  Fish shell是一个功能强大的、以用户友好性著称的Linux shell。它提供直观的命令提示符、自动补全、命令历史记录等功能，并支持各种扩展和插件，提升用户体验。Fish shell使用Go语言开发，并采用模块化设计，方便扩展和维护。核心模块包括命令解析器、交互式提示符和插件系统。它旨在为用户提供高效便捷的命令行操作环境。
- [lsd-rs/lsd](https://github.com/lsd-rs/lsd) ★14893 [`color`] [`icons`] [`ls`] [`nerd-fonts`] [`rust`]  
  LSD-RS是一个Rust编写的轻量级、高性能的分布式锁服务。它基于Raft算法实现，提供可靠的锁机制，适用于分布式系统中的并发控制。主要使用Rust语言，并结合tokio进行异步编程，保证了高吞吐量和低延迟。项目包含客户端库和服务器端库，方便用户快速集成到自己的应用中。核心模块包括锁请求处理、节点管理和状态同步。

[查看更多 Rust 仓库 →](dist/2025100200/LANG_Rust.md)

## Scala

- [rtyley/bfg-repo-cleaner](https://github.com/rtyley/bfg-repo-cleaner) ★11772 [`git`]  
  这是一个用于清理Git仓库的工具，可以删除不需要的提交和分支，并支持多种清理策略。它使用Python编写，并结合了命令行接口。  核心功能是高效地删除不必要的历史记录，从而减小仓库大小，提高工作效率。  该工具支持递归删除，并允许用户自定义过滤条件，例如删除特定作者的提交或特定时间段之前的提交。

## SCSS

- [mpdf/mpdf.github.io](https://github.com/mpdf/mpdf.github.io) ★517  
  这是一个用于生成PDF文档的PHP库。它允许开发者使用PHP代码创建各种格式的PDF文件，包括表格、图像、文本等。该库使用纯PHP实现，无需外部依赖，易于集成到现有项目中。核心功能包括页面布局控制、字体管理、图片插入等，并提供丰富的配置选项以满足不同需求。
- [oleeskild/digitalgarden](https://github.com/oleeskild/digitalgarden) ★392  
  这是一个基于Next.js和Tailwind CSS的个人知识库/数字花园项目。它允许用户创建、组织和链接笔记、文章、代码片段等，并进行跨平台访问。项目使用Markdown语法进行内容创作，并提供搜索、标签和链接功能，方便用户检索和管理信息。  核心功能包括笔记创建、标签管理、内容链接、搜索和导出等。

## Shell

- [ohmyzsh/ohmyzsh](https://github.com/ohmyzsh/ohmyzsh) ★181766 [`cli`] [`cli-app`] [`hacktoberfest`] [`oh-my-zsh`] [`oh-my-zsh-plugin`] [`oh-my-zsh-theme`] [`ohmyzsh`] [`plugin-framework`] [`plugins`] [`productivity`] [`shell`] [`terminal`] [`theme`] [`themes`] [`zsh`] [`zsh-configuration`]  
  Oh My Zsh 是一个流行的 Zsh 配置框架，提供丰富的主题、插件和功能。它使用 Zsh 作为其基础 shell，并通过插件机制扩展功能。  主要以 Zsh 脚本和配置文件的形式实现，用户可以通过安装不同插件来定制个性化功能，例如代码高亮、Git 集成等。  项目使用纯 Shell 脚本、JSON 配置文件和各种插件来管理配置，并提供易于使用的安装和更新机制。
- [sickcodes/Docker-OSX](https://github.com/sickcodes/Docker-OSX) ★51486 [`container`] [`docker`] [`docker-osx`] [`kvm`] [`macos`] [`os`] [`osx`] [`osx-kvm`] [`x`] [`x11`]  
  该项目提供在Docker容器中运行macOS环境的方法。用户可以利用Docker镜像，在Linux系统上构建包含macOS所需库和工具的环境。核心功能是构建一个可运行macOS应用程序的Docker容器，并提供访问macOS系统工具和库的方式。实现方式主要基于Docker镜像构建，使用macOS SDK和相关工具，并封装成Docker镜像供用户便捷使用。该项目旨在简化在Linux环境下运行macOS应用程序的过程，方便开发者在跨平台环境下进行开发和测试。
- [dockur/windows](https://github.com/dockur/windows) ★46503 [`docker`] [`docker-container`] [`virtualization`] [`windows`] [`windows-virtual-desktop`] [`windows-virtual-machine`] [`windows-virtual-machines`] [`windows-vm`]  
  这是一个用于在Windows系统上运行Docker容器的工具。它提供了一个图形用户界面，允许用户轻松创建、运行、停止和管理Docker容器，无需复杂的命令行操作。该工具主要使用Python开发，并基于PyQt5框架构建图形界面。核心功能包括容器列表展示、启动/停止/删除容器、查看日志、端口映射管理等。  它简化了Docker在Windows上的使用体验，尤其适合没有命令行经验的用户。
- [acmesh-official/acme.sh](https://github.com/acmesh-official/acme.sh) ★44127 [`acme`] [`acme-client`] [`acme-protocol`] [`ash`] [`bash`] [`buypass`] [`certbot`] [`letsencrypt`] [`posix`] [`posix-sh`] [`shell`] [`zerossl`]  
  acme.sh是一个用于自动化Let's Encrypt证书获取和管理的开源工具。它支持多种方式获取证书，包括HTTP和DNS验证，并提供方便的命令行界面。该工具使用Shell脚本编写，并利用了curl和openssl等命令行工具。  acme.sh可以轻松地将证书部署到各种服务器环境，简化了证书管理流程，避免了手动操作的繁琐。
- [zsh-users/zsh-autosuggestions](https://github.com/zsh-users/zsh-autosuggestions) ★33917 [`autocomplete`] [`autosuggest`] [`fish`] [`shell`] [`zsh`] [`zsh-autosuggestions`]  
  zsh-autosuggestions 是一个 Zsh 插件，为 Zsh shell 提供自动补全建议功能。它能根据用户输入的历史命令、当前目录、文件系统信息等上下文，智能地预测并建议可能的后续命令或文件路径。该插件使用 Zsh 的扩展功能，并基于 `readline` 库实现。  它能显著提高 Zsh 的使用效率，并减少用户输入的工作量。
- [233boy/v2ray](https://github.com/233boy/v2ray) ★27043 [`shell-script`] [`v2ray`] [`vmess`]  
  这是一个基于Go语言开发的V2Ray代理服务器。它提供快速、稳定的代理连接，支持多种协议和配置。项目包含了核心代理服务以及客户端配置文件生成工具，用户可以方便地配置和管理V2Ray连接。代码结构清晰，易于维护和扩展。
- [hwdsl2/setup-ipsec-vpn](https://github.com/hwdsl2/setup-ipsec-vpn) ★26816 [`cisco-ipsec`] [`docker`] [`encryption`] [`ikev2`] [`ipsec`] [`l2tp`] [`libreswan`] [`linux`] [`network`] [`raspberry-pi`] [`security`] [`vpn`] [`vpn-client`] [`vpn-server`]  
  这是一个用于在基于HWDSL2的网络上设置IPsec VPN的工具。它使用OpenVPN作为VPN协议，并提供配置脚本和示例，帮助用户快速建立安全的远程访问连接。该工具主要用Python编写，利用`subprocess`模块执行系统命令，并使用配置文件管理VPN连接参数。  项目包含详细的安装说明和示例配置文件，方便用户根据自身网络环境进行配置。
- [yuaotian/go-cursor-help](https://github.com/yuaotian/go-cursor-help) ★24688 [`cursor`] [`error`]  
  该项目提供了一个Go语言库，用于简化数据库游标操作。它封装了常见的数据库游标操作，例如获取数据、遍历数据、处理错误等，并提供易于使用的API。该库使用Go语言编写，并基于标准库的database/sql包，支持多种数据库类型。核心功能包括：自动错误处理、分页查询、结果集缓存等，以提高代码可读性和效率。
- [StreisandEffect/streisand](https://github.com/StreisandEffect/streisand) ★23583 [`ansible`] [`anyconnect`] [`censorship`] [`openconnect`] [`openvpn`] [`shadowsocks`] [`ssh`] [`streisand`] [`stunnel`] [`tor`] [`vpn`] [`wireguard`]  
  这是一个用于生成各种格式的Streisand效应图表（包括SVG、PNG和PDF）的工具。它利用Python和matplotlib库，支持自定义颜色、字体、图例和轴标签等参数，方便用户根据需要生成个性化图表。  用户只需提供数据和配置信息，即可快速生成高质量的图表，用于展示不同指标的趋势和变化。
- [lxgw/LxgwWenKai](https://github.com/lxgw/LxgwWenKai) ★21676 [`cjk`] [`font`] [`typeface`]  
  这是一个开源的、基于文泉驿的字体项目，提供LxgwWenKai字体。该项目使用OpenType字体格式，提供多种字重和字形，支持多种语言和字符集。它主要由C++编写，并利用字体渲染库进行实现，以确保字体显示的清晰度和兼容性。  该项目旨在提供高质量、可读性强的字体，并兼容各种操作系统和应用。

[查看更多 Shell 仓库 →](dist/2025100200/LANG_Shell.md)

## Svelte

- [imputnet/cobalt](https://github.com/imputnet/cobalt) ★36602 [`collaboration`] [`downloader`] [`instagram`] [`javascript`] [`music`] [`reddit`] [`social-media`] [`soundcloud`] [`svelte`] [`tiktok`] [`twitter`] [`typescript`] [`video`] [`vimeo`] [`vk`] [`webapp`] [`youtube`] [`youtube-downloader`]  
  Cobalt是一个用于在Kubernetes集群中运行和管理容器化应用程序的工具。它提供了一个易于使用的界面来部署、更新和监控应用程序，并支持多种部署模式。Cobalt使用Go语言开发，基于Kubernetes API进行交互，并包含一个用于配置和管理应用程序的声明式配置引擎。它简化了在Kubernetes上的应用生命周期管理，提高了部署效率和可靠性。
- [GoodiesHQ/headscale-admin](https://github.com/GoodiesHQ/headscale-admin) ★889  
  Headscale-admin 是一个用于 Headscale 的 Web 管理界面。它允许用户轻松地管理 Headscale 服务器，包括创建和管理 VPN 客户端，以及监控服务器性能。该项目使用 Go 语言开发，并基于 React 框架构建前端界面，使用 PostgreSQL 数据库存储配置信息。它提供了一个直观易用的用户界面，简化了 Headscale 的日常管理任务。

## Swift

- [shadowsocks/ShadowsocksX-NG](https://github.com/shadowsocks/ShadowsocksX-NG) ★32831 [`kcptun`] [`macos`] [`shadowsocks`] [`shadowsocksx-ng`] [`swift`] [`v2ray-plugin`]  
  ShadowsocksX-NG 是一个功能强大的 Shadowsocks 代理软件。它支持多种加密协议，并提供易于使用的图形界面，方便用户配置和管理代理连接。该软件使用 C++ 编写，并基于 Qt 框架构建，核心模块包括网络连接、加密算法和用户配置管理。  用户可以通过图形界面轻松添加、编辑和删除代理服务器配置，并选择不同的加密算法和端口。
- [DevToys-app/DevToysMac](https://github.com/DevToys-app/DevToysMac) ★9240  
  DevToysMac 是一个 macOS 平台的开发者工具集，提供多种实用功能，包括文本编辑器、代码格式化工具、进制转换器、Markdown 预览器等。它使用 Swift 构建，并利用 SwiftUI 框架实现直观的界面。项目的核心功能模块包括文本处理、格式化、进制转换以及 Markdown 支持，旨在为开发者提供便捷高效的工具。
- [Finb/Bark](https://github.com/Finb/Bark) ★6621 [`ios`] [`ios-app`] [`ios-swift`] [`mvvm`] [`mvvm-architecture`] [`push-notifications`] [`rxcocoa`] [`rxdatasources`] [`rxswift`]  
  这是一个用于构建基于区块链的去中心化金融应用程序的框架。它使用Rust语言和Substrate框架开发，包含一个可定制的区块链引擎和一套预构建的金融组件（例如借贷、交易所等）。开发者可以利用该框架快速搭建各种金融产品，并充分利用区块链的安全性、透明性和去中心化特性。
- [kyleduo/TinyPNG4Mac](https://github.com/kyleduo/TinyPNG4Mac) ★3931 [`image-compression`] [`tinyimage`] [`tinypng`] [`tinypng4mac`]  
  TinyPNG4Mac 是一个 macOS 平台上的 TinyPNG 图片压缩工具。它允许用户批量压缩 PNG 图片，减小图片文件大小，并保持高质量。该工具使用 TinyPNG API，并通过简单的图形用户界面（GUI）操作。  主要使用 Swift 和 AppKit 框架，并集成网络请求模块处理图片上传与压缩。  用户只需拖拽图片到应用程序窗口即可进行压缩，压缩后的图片会自动保存到指定文件夹。
- [fancymax/12306ForMac](https://github.com/fancymax/12306ForMac) ★2876 [`12306`] [`osx`] [`swift`] [`ticket`] [`train`]  
  这是一个用于 macOS 的 12306 网站客户端。  它使用 JavaScript 和 Electron 框架构建，提供便捷的火车票查询和预订功能，模拟用户登录流程，并支持多种查询方式，例如出发地、目的地、日期等。  该项目旨在为 macOS 用户提供一个更友好的 12306 在线购票体验。
- [Schlaubischlump/LocationSimulator](https://github.com/Schlaubischlump/LocationSimulator) ★2732 [`appkit`] [`development-tools`] [`fake`] [`fake-locations`] [`ios-simulator`] [`iphonesimulator`] [`ispoofer`] [`libimobiledevice`] [`location`] [`location-spoof`] [`location-spoofing`] [`macos`] [`mock-location`] [`mock-locations`] [`navigation`] [`simulation`] [`spoof`] [`swift`]  
  这是一个用于模拟位置数据的工具，主要用于测试和开发需要地理位置信息的应用程序。它可以生成各种类型的地理位置数据，包括经度、纬度、海拔和时间戳。该工具使用Python编写，基于PyQt5框架构建图形用户界面，并使用geopy库进行地理位置计算。用户可以通过界面选择模拟区域、数据量和输出格式，方便快捷地生成符合需求的模拟位置数据。
- [X1a0He/Adobe-Downloader](https://github.com/X1a0He/Adobe-Downloader) ★2338  
  Adobe-Downloader is a lightweight command‑line utility that automates retrieval of Adobe Creative Cloud installers, binaries, and license files for Windows and macOS. The tool parses Adobe’s public product manifest URLs, downloads the appropriate ZIP or EXE contents, and verifies checksums to prevent corrupted installs. It supports batch processing via a simple JSON configuration, allowing users to specify product names, version ranges, and target directories. The source is written in Python 3.10, employing the `requests` library for HTTP communication, `tqdm` for progress bars, and `hashlib` for integrity checks. A small CLI layer built with `argparse` exposes commands such as `list‑products`, `download`, and `verify`. Optional parallel downloading leverages `concurrent.futures.ThreadPoolExecutor` to speed up large collections while retaining safety through per‑file locking. The code is modular, separating manifest retrieval, download logic, and post‑processing scripts, making it suitable for integration into CI pipelines or local installers. No external dependencies beyond the standard Python ecosystem are required, enabling easy deployment on any machine with Python installed.    
  
Users can also generate self‑contained bundles by running the `build‑bundle` command, which packages selected installers into a single ZIP, simplifying transport across network boundaries. Proxy configuration is accepted via ENV variables `HTTP_PROXY` and `HTTPS_PROXY`, making it compatible with corporate networks. Unit tests cover download integrity, manifest parsing, and error handling.

## TeX

- [Pomax/nrGrammar](https://github.com/Pomax/nrGrammar) ★347  
  这是一个用于解析自然语言的Python项目。它使用递归下降解析器，根据自定义的BNF文法，将输入文本解析为抽象语法树（AST）。项目提供了一套灵活的接口，允许用户定义自己的文法，并使用解析结果进行后续处理。  核心功能包括BNF文法定义、递归下降解析器实现和AST生成。主要使用Python语言，并结合了文法定义和解析器生成工具。

## TSQL

- [he426100/kangxi](https://github.com/he426100/kangxi) ★31  
  这是一个基于Python的康熙字典查询工具。它使用正则表达式匹配用户输入的关键词，并返回康熙字典中对应的条目，包括字形、读音、释义等信息。项目使用Python的`re`模块进行正则匹配，并从预先准备好的康熙字典数据中提取信息。  该工具旨在提供快速便捷的康熙字典查询体验，方便用户查找汉字的详细释义。

## TypeScript

- [iptv-org/iptv](https://github.com/iptv-org/iptv) ★97498 [`iptv`] [`m3u`] [`playlist`] [`streams`] [`tv`]  
  这是一个开源的 IPTV 播放器项目。它提供一个易于使用的界面，用于访问和观看各种 IPTV 频道。该项目使用 Python 和 PyQt5 构建，并包含一个插件系统，允许用户添加和管理不同的 IPTV 提供商。该项目旨在提供一个稳定且功能丰富的 IPTV 播放器，支持各种流媒体协议，例如 HTTP 和 RTSP。
- [ant-design/ant-design](https://github.com/ant-design/ant-design) ★96249 [`ant-design`] [`antd`] [`design-systems`] [`react`] [`typescript`] [`ui-kit`] [`ui-library`]  
  Ant Design 是一个高质量、易于使用、并遵循 Ant Design 设计语言的 React UI 组件库。它提供了一套丰富的组件，涵盖了按钮、输入框、表格、对话框等常用 UI 元素，帮助开发者快速构建用户界面。该库基于 React 框架开发，并使用 TypeScript 提升代码的可维护性。组件的样式由 CSS-in-JS 技术（例如 styled-components）处理，保证了样式的可定制性和一致性。Ant Design 组件库旨在提升开发效率和用户体验，并提供一致的视觉风格。
- [tailwindlabs/tailwindcss](https://github.com/tailwindlabs/tailwindcss) ★90406 [`css`] [`css-framework`] [`functional-css`] [`postcss`] [`responsive`] [`tailwindcss`] [`utility-classes`]  
  Tailwind CSS是一个流行的实用类CSS框架。它允许开发者使用预定义的类来快速构建样式，无需编写大量自定义CSS。通过配置，Tailwind CSS提供响应式设计和灵活的样式定制，并支持各种布局。该框架使用JavaScript构建，并基于PostCSS，提供极高的性能和可维护性。  开发者只需引入Tailwind CSS，并使用其预定义的类来应用样式。
- [ChatGPTNextWeb/NextChat](https://github.com/ChatGPTNextWeb/NextChat) ★85991 [`calclaude`] [`chatgpt`] [`claude`] [`cross-platform`] [`desktop`] [`fe`] [`gemini`] [`gemini-pro`] [`gemini-server`] [`gemini-ultra`] [`gpt-4o`] [`groq`] [`nextjs`] [`ollama`] [`react`] [`tauri`] [`tauri-app`] [`vercel`] [`webui`]  
  这是一个基于Next.js和LangChain构建的开源聊天机器人项目。它允许用户使用自定义的LangChain链和LLM模型构建和部署自己的聊天机器人应用。项目核心功能包括：灵活的链路配置，支持多种LLM模型，以及易于扩展的插件机制。主要使用TypeScript进行开发，并利用Next.js的服务器端渲染能力提升用户体验。该项目旨在提供一个快速构建和部署自定义聊天机器人的框架，方便开发者尝试各种聊天机器人应用场景。
- [mermaid-js/mermaid](https://github.com/mermaid-js/mermaid) ★83233 [`diagrams`] [`diagrams-as-code`] [`documentation`] [`flowchart`] [`javascript`] [`mindmap`] [`typescript`] [`uml-diagrams`]  
  这是一个用于在网页上创建流程图、甘特图、状态图等图表的可视化库。它使用JavaScript实现，并提供多种图表类型和自定义选项。  用户可以通过简单的标记语言（如Mermaid语法）描述图表结构，Mermaid库会自动将其渲染成精美的图表，无需额外的绘图工具。  该库支持多种图表类型，并可轻松集成到各种网页应用中。
- [immich-app/immich](https://github.com/immich-app/immich) ★78060 [`backup-tool`] [`flutter`] [`google-photos`] [`google-photos-alternative`] [`javascript`] [`mobile-app`] [`nestjs`] [`nodejs`] [`photo-gallery`] [`photos`] [`photos-management`] [`self-hosted`] [`svelte`] [`sveltekit`] [`typescript`] [`videos`]  
  这是一个用于图像搜索和识别的移动应用程序。它使用深度学习模型（例如，基于YOLOv8）识别图像中的对象，并提供相关的搜索结果和信息。应用程序使用Python和Flask后端进行图像处理和数据检索，前端使用React Native构建。关键模块包括图像预处理、对象检测和搜索引擎。该应用旨在为用户提供便捷的图像搜索体验。
- [google-gemini/gemini-cli](https://github.com/google-gemini/gemini-cli) ★77642 [`gemini`] [`gemini-api`]  
  该项目提供一个命令行工具，用于管理和执行Gemini模型的推理任务。用户可以通过该工具便捷地加载Gemini模型，并输入提示词进行推理，获取相应的输出结果。该工具主要使用Python语言开发，基于Google提供的Gemini API进行模型调用。项目包含了模型选择、参数配置和结果输出等功能模块，方便用户快速上手并进行Gemini模型的应用。
- [clash-verge-rev/clash-verge-rev](https://github.com/clash-verge-rev/clash-verge-rev) ★76484 [`clash`] [`clash-meta`] [`clash-verge`] [`linux`] [`mac`] [`mihomo`] [`tauri-app`] [`windows`]  
  这是一个Clash Royale的辅助工具，用于快速查找并显示卡牌的属性、效果以及在不同对局中的胜率。它使用Python和Selenium进行开发，通过模拟浏览器操作来抓取游戏数据。用户可以通过直观的界面查看卡牌信息和胜率统计，辅助游戏策略制定。
- [hoppscotch/hoppscotch](https://github.com/hoppscotch/hoppscotch) ★74772 [`api`] [`api-client`] [`api-rest`] [`api-testing`] [`developer-tools`] [`graphql`] [`hacktoberfest`] [`http`] [`http-client`] [`pwa`] [`rest`] [`rest-api`] [`spa`] [`testing`] [`testing-tools`] [`tools`] [`vue`] [`vuejs`] [`websocket`]  
  Hoppscotch是一个开源的、易于使用的API开发工具。它提供了一个直观的界面，用于创建、测试和调试API。用户可以使用该工具发送各种类型的HTTP请求，查看响应，并与API交互。该工具主要使用React和Typescript构建，并包含一个强大的编辑器，用于定义和管理API请求。它支持多种协议，例如REST和GraphQL，并提供丰富的功能，例如模拟API、保存和共享请求以及创建API文档。
- [lobehub/lobe-chat](https://github.com/lobehub/lobe-chat) ★66194 [`agent`] [`ai`] [`artifacts`] [`chat`] [`chatgpt`] [`claude`] [`deepseek`] [`deepseek-r1`] [`function-calling`] [`gemini`] [`gpt`] [`knowledge-base`] [`mcp`] [`nextjs`] [`ollama`] [`openai`] [`rag`]  
  Lobe-chat是一个基于Lobe平台的开源聊天机器人项目。它利用Lobe提供的预训练模型和自定义训练功能，构建了一个能够进行对话的AI模型。项目使用Python和Hugging Face Transformers库，通过加载预训练的语言模型并进行微调，实现对话生成。该项目提供了一个简易的接口，允许用户快速构建和部署自己的聊天机器人，并可根据需要进行模型训练和优化。

[查看更多 TypeScript 仓库 →](dist/2025100200/LANG_TypeScript.md)

## VBScript

- [abbodi1406/vcredist](https://github.com/abbodi1406/vcredist) ★6985  
  这是一个用于在Windows系统上安装Visual C++ Redistributable packages的脚本。它基于Python编写，使用`subprocess`模块调用系统命令行工具，实现自动化安装。脚本支持指定安装路径和选择性安装特定版本的VC++ Redistributable，提高了安装效率和灵活性。

## Vim Script

- [VundleVim/Vundle.vim](https://github.com/VundleVim/Vundle.vim) ★24025  
  Vundle.vim是一个用于管理Vim插件的工具。它提供了一种便捷的方式来安装、更新和卸载Vim插件，无需手动操作。Vundle使用纯Vim脚本实现，并通过Git来获取插件，高效且易于使用。它支持插件分组和版本控制，提高了插件管理的效率。

## Visual Basic

- [VBA-tools/VBA-Web](https://github.com/VBA-tools/VBA-Web) ★2093  
  该项目提供了一组VBA工具，用于在Excel中访问和处理Web数据。它使用网页浏览组件和HTTP请求库，允许VBA宏从网页提取数据、下载文件、提交表单等。项目主要使用VBA语言，并依赖于一些外部库来实现网络功能。  该工具集简化了VBA用户与Web服务的交互，提高了Excel在数据获取方面的效率。
- [VBA-tools/VBA-JSON](https://github.com/VBA-tools/VBA-JSON) ★2033  
  该项目提供了一个VBA库，用于在VBA宏中处理JSON数据。它允许将JSON字符串解析为VBA对象，以及将VBA对象转换为JSON字符串。  核心功能包括JSON字符串解析、对象序列化和反序列化。该库使用VBA脚本语言实现，无需外部依赖。 通过该工具，VBA程序员可以更便捷地与JSON数据交互，例如从API获取数据，或将数据以JSON格式保存。

## Vue

- [PanJiaChen/vue-element-admin](https://github.com/PanJiaChen/vue-element-admin) ★89930 [`admin`] [`admin-dashboard`] [`admin-template`] [`axios`] [`dashboard`] [`desktop`] [`element`] [`element-ui`] [`i18n`] [`management-system`] [`mock`] [`tinymce`] [`vue`] [`vue-admin`] [`vue-cli`] [`vuex`] [`webpack`] [`webpack4`] [`xlsx`]  
  这是一个基于 Vue.js 和 Element UI 的后台管理系统模板。它提供了一个快速搭建后台管理系统的框架，包含常用的页面布局、路由配置、权限管理、数据表格、表单等组件，以及代码生成器等功能。该项目使用 Vue.js 作为前端框架，Element UI 作为 UI 组件库，并结合了一些路由管理和权限控制的工具包。开发者可以快速定制和扩展，用于开发各种后台管理系统。
- [vbenjs/vue-vben-admin](https://github.com/vbenjs/vue-vben-admin) ★30126 [`admin-template`] [`ant-design`] [`element-plus`] [`monorepo`] [`naive-ui`] [`shadcn-ui`] [`tsx`] [`typescript`] [`vben`] [`vite`] [`vite-template`] [`vue-router`] [`vue3`] [`vuex`]  
  这是一个基于 Vue.js 和 Element Plus 的开源后台管理系统模板。它提供了一套完整的组件库和布局，可快速搭建各种后台管理应用。该项目使用 Vue.js 作为前端框架，Element Plus 作为 UI 组件库，并包含路由、权限管理、数据表格、图表等常用功能。开发者可以通过简单的配置和修改，快速生成具有完整功能的后台管理系统。
- [requarks/wiki](https://github.com/requarks/wiki) ★27097 [`cross-platform`] [`documentation`] [`git`] [`markdown`] [`nodejs`] [`open-source`] [`wiki`]  
  这是一个开源的Wiki项目，支持Markdown语法，方便用户创建和管理文档。它使用Vue.js构建前端，并基于Node.js和Express.js搭建后端，提供用户管理、权限控制和版本控制等功能。  项目旨在提供一个易于使用且功能强大的Wiki平台，方便团队协作和知识管理。
- [Lissy93/dashy](https://github.com/Lissy93/dashy) ★22638 [`awesome`] [`dashboard`] [`docker`] [`hacktoberfest`] [`homelab`] [`homepage`] [`mit`] [`nodejs`] [`organization`] [`productivity`] [`pwa`] [`self-hosted`] [`startpage`] [`vue`]  
  Dashy是一个用于管理和监控各种服务的轻量级桌面应用。它使用Electron框架，以HTML/JavaScript编写，提供一个直观的界面来显示和控制诸如媒体播放器、网络应用和脚本等。用户可以自定义Dashy以满足自己的需求。  项目使用Node.js和各种API接口来实现对不同服务的集成和监控。
- [pure-admin/vue-pure-admin](https://github.com/pure-admin/vue-pure-admin) ★18962 [`admin`] [`element-plus`] [`esm`] [`pinia`] [`tailwindcss`] [`typescript`] [`vite`] [`vue3`]  
  Pure Admin基于Vue3、Element Plus、Pinia、TypeScript开发的中后台模板。模块化布局支持多主题、国际化与权限验证。内置统一表格、表单校验、树形列表与ECharts图表。项目含接口封装、错误日志、请求拦截及Vite热更新。配置简洁，便于二次开发，适合快速搭建可扩展、可维护的管理系统。已提供示例页面、组件库和脚手架，并支持RESTful后端。
- [weilanwl/coloruicss](https://github.com/weilanwl/coloruicss) ★12416 [`css`] [`mp-weixin`] [`scss`] [`uniapp`] [`vue`] [`vue2`]  
  ColorUI CSS是一个轻量级的、基于CSS的UI库，提供了一套简洁的样式和组件，用于快速构建Web应用程序的界面。它使用纯CSS实现，无需JavaScript，并支持响应式设计。库包含常用的组件，例如按钮、输入框、导航栏等，可定制性高，方便开发者快速开发。项目使用Sass预处理器进行样式管理，并提供详细的文档和示例代码。
- [chaitin/xray](https://github.com/chaitin/xray) ★11223 [`passive-vulnerability-scanner`] [`poc`] [`security`] [`sqlinjection`] [`vulnerability`] [`vulnerability-scanner`] [`xss`]  
  这是一个用于漏洞扫描的工具，支持多种协议和漏洞类型，例如Web应用漏洞、API漏洞和基础设施漏洞。它使用Go语言开发，基于插件机制，可以扩展扫描功能。核心模块包括网络请求模块、漏洞检测引擎和报告生成模块。Xray可以自动化地发现各种安全风险，帮助安全团队快速识别和修复潜在漏洞。
- [zyronon/douyin](https://github.com/zyronon/douyin) ★11090 [`douyin`] [`js`] [`tiktok`] [`vue`] [`vue3`]  
  这是一个用于下载抖音视频的Python项目。它使用`requests`库进行网络请求，并利用`ffmpeg`库进行视频格式转换，以支持多种视频格式的下载。项目包含清晰的代码注释，易于理解和扩展。该项目的目标是提供一个简单易用的抖音视频下载工具，支持批量下载。
- [doocs/md](https://github.com/doocs/md) ★10690 [`ai-bot`] [`doocs`] [`editor`] [`llm`] [`markdown`] [`markdown-editor`] [`tailwindcss`] [`vite`] [`vue`] [`vue3`] [`wechat`] [`weixin`]  
  这是一个用于生成Markdown文档的工具。它支持从多种数据源（如CSV、JSON、Excel等）提取数据，并根据预设模板将其转换为格式良好的Markdown文档。该工具使用Python编写，基于Pandas库进行数据处理和模板渲染，并利用Jinja2模板引擎生成可定制的文档。它旨在简化数据文档的创建过程，提高文档生成效率。
- [Akryum/vue-virtual-scroller](https://github.com/Akryum/vue-virtual-scroller) ★10430 [`scroller`] [`virtual-scroller`] [`vuejs`] [`vuejs-components`] [`vuejs2`]  
  Vue.js虚拟滚动组件，用于高效渲染大型列表。该组件通过只渲染可见项来提升性能，避免了渲染所有列表项带来的性能瓶颈。它使用`vue`作为前端框架，并基于`diff`算法优化渲染过程。该组件支持自定义渲染项和事件处理，并提供灵活的配置选项，适用于各种列表场景。

[查看更多 Vue 仓库 →](dist/2025100200/LANG_Vue.md)

## 🛡️ Technical Sponsorship 感谢腾讯云[Tencent EdgeOne](https://edgeone.tencent.com/?from=github)提供CDN加速和安全保护

CDN acceleration and security protection for this project are sponsored by [Tencent EdgeOne](https://edgeone.tencent.com/?from=github).

[![Tencent EdgeOne Logo](https://edgeone.ai/media/34fe3a45-492d-4ea4-ae5d-ea1087ca7b4b.png)](https://edgeone.tencent.com/?from=github)

