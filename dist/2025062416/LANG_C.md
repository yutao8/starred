# C 仓库

- [Genymobile/scrcpy](https://github.com/Genymobile/scrcpy) ★124107 [`android`] [`c`] [`ffmpeg`] [`libav`] [`mirroring`] [`recording`] [`screen`] [`sdl2`]  
  Scrcpy是一个开源工具，用于将Android设备的屏幕镜像到电脑。它允许用户在电脑上实时查看和控制Android设备，无需任何额外硬件。该工具使用adb协议与Android设备连接，并通过网络传输屏幕数据。主要使用C++开发，并利用OpenGL ES进行图像处理和显示。  它提供流畅的屏幕镜像体验，并支持多种功能，例如屏幕录制、远程控制和调试。
- [ventoy/Ventoy](https://github.com/ventoy/Ventoy) ★68808 [`auto-install`] [`bootable-usb`] [`bsd`] [`chromeos`] [`iso-files`] [`legacy`] [`linux`] [`multiboot`] [`persistence`] [`secure-boot`] [`uefi`] [`unattended`] [`unix`] [`usb`] [`windows`]  
  Ventoy是一个免费、开源的工具，允许用户将任何ISO映像文件（如Windows安装镜像、Linux发行版、游戏ISO等）直接挂载到USB驱动器上，无需修改BIOS或使用特殊工具。它使用Python编写，并利用了EFI引导规范，允许用户在无需重新安装操作系统或其他软件的情况下，轻松地在USB上启动各种操作系统或应用程序。Ventoy支持多种类型的ISO映像文件，并提供用户友好的图形界面。
- [bilibili/ijkplayer](https://github.com/bilibili/ijkplayer) ★32943 [`android`] [`ffmpeg`] [`ijkplayer`] [`ios`] [`player`] [`video`]  
  该项目是一个基于FFmpeg的开源视频播放器，支持多种视频格式和协议，例如HLS、HTTP、RTMP等。它使用C++编写，并提供Android和iOS平台的原生库。  ijkplayer的核心功能是高效的解码和渲染，并提供丰富的自定义选项，例如缓冲策略、播放速度控制等。  通过FFmpeg作为底层解码引擎，它能够实现高质量的视频播放体验，并支持多种播放场景。
- [jqlang/jq](https://github.com/jqlang/jq) ★31978 [`jq`]  
  jq 是一个轻量级的命令行 JSON 数据处理工具。它使用类似于正则表达式的语法来选择和转换 JSON 数据。  主要用 Go 语言编写，并提供丰富的过滤器，方便用户快速提取、过滤和操作 JSON 数据。  该工具能够高效地处理各种类型的 JSON 数据，并支持管道操作，提高了数据处理的效率和灵活性。
- [coolsnowwolf/lede](https://github.com/coolsnowwolf/lede) ★30774 [`lede`] [`lua`] [`openwrt-feed`] [`openwrt-package`] [`openwrt-zh-cn`]  
  这是一个基于OpenWrt的嵌入式Linux路由器固件，提供广泛的网络功能和自定义选项。该项目使用C语言和shell脚本开发，包含丰富的驱动程序和软件包，可用于各种路由器硬件平台。用户可以根据需要配置网络设置、防火墙规则、VPN等功能。该固件支持多种无线协议和网络协议，并提供强大的扩展性和可定制性。
- [valinet/ExplorerPatcher](https://github.com/valinet/ExplorerPatcher) ★27764  
  ExplorerPatcher 是一个用于修改 Windows 资源管理器（Explorer.exe）行为的工具。它允许用户自定义资源管理器外观和功能，例如添加新菜单项、修改快捷键或调整窗口布局。该项目使用 C# 和 .NET Framework 开发，主要通过注入代码和修改注册表实现功能。它提供易于使用的界面，让用户无需深入了解系统底层代码即可轻松自定义资源管理器。
- [kingToolbox/WindTerm](https://github.com/kingToolbox/WindTerm) ★26875 [`bash`] [`client`] [`cmd`] [`linux`] [`mac`] [`powershell`] [`serial`] [`sftp`] [`shell`] [`ssh`] [`telnet`] [`terminal`] [`tmux`] [`windows`] [`wsl`] [`x11`] [`xmodem`] [`xterm`] [`ymodem`] [`zmodem`]  
  WindTerm是一个基于Python和PyQt5的跨平台终端工具，提供强大的功能，例如SSH连接、文件传输、命令历史记录和自定义快捷键等。它使用PyQt5构建图形用户界面，并使用paramiko库进行SSH连接，支持多种终端协议。项目旨在为用户提供一个功能齐全且易于使用的终端工具，方便远程管理和操作服务器。
- [ggreer/the_silver_searcher](https://github.com/ggreer/the_silver_searcher) ★26660 [`ag`] [`c`] [`command-line-tool`] [`pcre`] [`search-in-text`] [`silver-searcher`]  
  这是一个基于Rust实现的快速、功能强大的文本搜索工具，类似于GNU Silver Searcher (ag)。它利用Rust的性能优势，在处理大型文件时速度显著快于ag。项目使用regex模块进行正则表达式匹配，并通过多线程并行处理提高搜索效率。该工具旨在提供一个轻量级、高效的命令行搜索解决方案，特别适用于需要快速查找文本内容的场景。
- [gojue/ecapture](https://github.com/gojue/ecapture) ★14411 [`android`] [`android-https-capture`] [`ebpf`] [`ebpf-go`] [`ebpf-tc`] [`ebpf-uprobe`] [`golang`] [`https`] [`linux`] [`network-capture`] [`security-audit`] [`ssl`] [`ssldump`] [`tcpdump`] [`tls`]  
  这是一个基于Go语言的屏幕录制工具，能够捕获屏幕上的活动窗口。它使用Go语言的图形库，结合事件驱动机制，实现高性能的屏幕内容读取。该工具可以精确捕捉指定窗口的内容，并支持多种输出格式（例如PNG、JPEG）。  项目包含核心录制模块和输出格式转换模块，旨在提供一个轻量级、高效率的屏幕捕获解决方案。
- [coturn/coturn](https://github.com/coturn/coturn) ★12550 [`networking`] [`server`] [`turn`]  
  这是一个开源的TURN服务器，用于在NAT网络环境中建立和维护实时媒体连接。它使用C++编写，并基于libevent事件循环框架。核心功能包括STUN/TURN协议处理，ICE候选人管理，以及UDP和TCP连接管理。该项目提供稳定可靠的媒体传输支持，适用于各种实时应用，例如VoIP和游戏。
- [SoftEtherVPN/SoftEtherVPN](https://github.com/SoftEtherVPN/SoftEtherVPN) ★12347 [`etherip`] [`ike`] [`ipsec`] [`l2tp`] [`l2tpv3`] [`openvpn`] [`softether-vpn`] [`softethervpn`] [`ssl-vpn`] [`sstp`] [`tls`] [`vpn`] [`vpn-protocols`] [`vpn-server`] [`vpn-tunnel`] [`wfh`] [`wireguard`] [`work-from-home`]  
  SoftEtherVPN是一个开源的、高性能的VPN服务器和客户端软件。它支持多种VPN协议，包括自定义协议，并提供易于使用的图形用户界面。该项目使用C#和C++开发，并基于.NET Framework和Win32 API。核心功能包括VPN连接、隧道建立和管理，以及多种安全选项。该软件可用于远程访问网络资源、保护个人隐私和绕过地理限制。
- [vanhauser-thc/thc-hydra](https://github.com/vanhauser-thc/thc-hydra) ★10525 [`brute-force`] [`brute-force-attacks`] [`brute-force-passwords`] [`bruteforce`] [`bruteforce-attacks`] [`bruteforcer`] [`bruteforcing`] [`hydra`] [`network-security`] [`password-cracker`] [`password-cracking`] [`penetration-testing`] [`pentest`] [`pentest-tool`] [`pentesting`] [`thc`]  
  这是一个用于THC（The Hashish Company）Hydra平台的Python工具集。它提供了一系列命令行工具，用于管理Hydra平台上的用户、产品和订单。工具集使用Python语言开发，并利用了requests库进行HTTP请求。核心功能包括用户创建、产品更新、订单查询等，旨在简化Hydra平台的日常管理工作。
- [rofl0r/proxychains-ng](https://github.com/rofl0r/proxychains-ng) ★10171 [`hack`] [`hook`] [`http`] [`preload`] [`proxy`] [`proxychains`] [`socks`]  
  这是一个改进的代理服务器工具，用于在网络连接中绕过防火墙或访问受限制的内容。它使用多种代理服务器类型，并提供命令行界面进行配置和管理。该项目基于Python开发，并使用配置文件管理代理服务器列表。  用户可以通过配置不同的代理服务器，实现对网络访问的灵活控制。
- [xmrig/xmrig](https://github.com/xmrig/xmrig) ★9286 [`argon2`] [`cpuminer`] [`cryptocurrency`] [`cryptonight`] [`miner`] [`monero`] [`randomx`] [`xmr`] [`xmrig`]  
  这是一个用于挖掘加密货币的开源矿池软件。它支持多种算法，包括Ethash、KawPow、Equihash等。使用C++编写，并包含一个易于使用的命令行界面。项目提供模块化设计，允许用户自定义配置和扩展功能。
- [pymumu/smartdns](https://github.com/pymumu/smartdns) ★9178 [`c`] [`dns`] [`dns-over-https`] [`dns-over-tls`] [`dns-server`] [`dns64`] [`doh`] [`doh3`] [`doq`] [`dot`] [`nftables`] [`nftables-sets`] [`openwrt`] [`openwrt-package`] [`smartdns`] [`stubby`]  
  这是一个基于Python的智能DNS解析工具，用于根据网络状况自动选择最佳DNS服务器。它支持自定义DNS服务器列表，并可根据延迟、响应时间等指标动态调整DNS服务器优先级。项目使用Python编写，主要依赖`dnspython`库进行DNS查询，并利用`requests`库进行网络请求。核心功能包括DNS查询、服务器性能测试和结果缓存，以实现快速、稳定的DNS解析。
- [Wind4/vlmcsd](https://github.com/Wind4/vlmcsd) ★8641  
  这是一个用于控制和管理 VLC Media Server 的工具，允许用户通过命令行或API接口来操作VLC服务器。它使用Python编写，并利用`requests`库进行HTTP通信。  项目包含了各种功能，例如启动、停止、获取状态、控制播放、设置参数等，方便自动化控制和集成到其他系统。  核心模块包括命令解析、HTTP请求处理和结果解析，可以高效地管理VLC服务器的运行。
- [bingoogolapple/BGAQRCode-Android](https://github.com/bingoogolapple/BGAQRCode-Android) ★8003 [`qrcode`] [`qrcode-android`] [`qrcode-generator`] [`qrcode-scanner`]  
  BGAQRCode-Android 是一个用于 Android 平台的二维码扫描和生成库。它提供便捷的 API 用于快速集成二维码功能，包含扫描、生成、解析等核心功能。该库使用 Kotlin 语言开发，基于 Android Studio 环境，并利用了 ZXing 库进行底层二维码处理。  项目包含详细的示例代码和文档，方便开发者快速上手。
- [winfsp/winfsp](https://github.com/winfsp/winfsp) ★7614 [`driver`] [`filesystem`] [`fuse`] [`gplv3`] [`kernel`] [`windows`] [`windows-kernel`]  
  WinFSP是一个Windows平台下的文件系统协议栈实现。它提供了一个灵活的框架，允许开发人员创建自定义文件系统，并通过标准的网络协议（如SMB）进行访问。该项目使用C++编写，基于Windows驱动程序模型开发，包含核心协议栈和示例驱动程序。  WinFSP的目标是简化自定义文件系统的开发，并提供一个可靠的网络访问接口。
- [esnet/iperf](https://github.com/esnet/iperf) ★7594  
  iperf是一个用于测量网络带宽和延迟的工具。它支持多种传输协议（TCP和UDP），并提供灵活的测试配置选项，例如带宽、数据包大小和持续时间。iperf使用C语言开发，并通过命令行界面运行。  该项目广泛用于网络性能测试和诊断，是网络工程师和研究人员的常用工具。
- [beanstalkd/beanstalkd](https://github.com/beanstalkd/beanstalkd) ★6640  
  Beanstalkd是一个开源的、高性能的任务队列服务器。它提供了一个简单易用的API，用于将任务添加到队列中并从队列中检索任务。  该项目使用C语言开发，并利用libevent库实现高效的网络通信。  核心功能包括任务的持久化存储、优先级队列、以及可靠的作业处理机制。  它广泛应用于需要异步处理任务的场景，例如消息队列、后台任务处理等。
- [ntop/n2n](https://github.com/ntop/n2n) ★6596 [`peer-to-peer`] [`vpn`]  
  n2n是一个快速、轻量级的跨平台VPN客户端，支持多种加密协议（例如：WireGuard、IKEv2）。它使用Go语言开发，并利用libn2n库进行底层网络处理。n2n易于配置，可在多种操作系统上运行，并提供命令行界面和图形界面。主要功能包括建立安全连接，绕过网络限制，保护用户隐私。
- [akopytov/sysbench](https://github.com/akopytov/sysbench) ★6405 [`benchmark`] [`console`] [`freebsd`] [`linux`] [`lua`] [`luajit`] [`macos`] [`micro-benchmarks`] [`mysql`] [`oltp`] [`postgresql`] [`sysbench`]  
  sysbench是一个开源基准测试工具，用于评估各种数据库系统（如MySQL、PostgreSQL、MongoDB）的性能。它提供多种测试场景，包括OLTP（联机事务处理）和OLAP（联机分析处理）测试，可以模拟不同负载下的数据库性能。sysbench使用C语言编写，并使用SQL语句定义测试场景，支持多种数据库引擎。该项目方便用户快速评估数据库性能并进行基准测试比较。
- [istoreos/istoreos](https://github.com/istoreos/istoreos) ★6215 [`istore`] [`istoreos`] [`koolcenter`] [`linkease`] [`nas`] [`openwrt`] [`router`]  
  这是一个用于在iOS设备上进行立体声音频录制和播放的开源库。它使用 Core Audio 框架进行音频处理，提供高效的立体声音频捕获和回放功能，并支持多种音频格式。该库主要由Objective-C编写，并包含清晰的文档和示例代码，便于开发者快速集成到自己的iOS应用中。  它专注于音频流的处理和管理，并提供了基本的音频缓冲和控制功能。
- [JoeDog/siege](https://github.com/JoeDog/siege) ★6086  
  这是一个用于模拟和分析网络攻击的工具。它使用 Python 和 Scapy 库构建，提供了一个灵活的框架，允许用户创建自定义的网络攻击场景，包括 SYN 洪泛、UDP 洪泛等。该工具主要用于网络安全教育和渗透测试，可以帮助用户理解不同类型的攻击以及防御策略。  它支持多种协议和攻击类型，并提供可视化界面，方便用户监控攻击过程。
- [google/ios-webkit-debug-proxy](https://github.com/google/ios-webkit-debug-proxy) ★6053  
  这是一个用于调试iOS设备上运行的WebKit浏览器的代理工具。它允许开发者在本地机器上检查和控制iOS设备上的网络流量，从而方便进行调试和测试。该工具使用Python编写，并基于WebKit的调试协议进行通信。关键模块包括代理服务器和调试协议处理。通过配置代理服务器，开发者可以拦截和修改网络请求，并观察网络行为，以帮助诊断Web应用或网页加载问题。
- [pawelsalawa/sqlitestudio](https://github.com/pawelsalawa/sqlitestudio) ★5999 [`cpp`] [`database`] [`database-management`] [`qt`] [`qt5`] [`sqlcipher`] [`sqlite`] [`sqlite3-database`] [`wxsqlite3`]  
  SQLiteStudio是一个用于创建、编辑和管理SQLite数据库的图形化工具。它提供直观的界面，支持浏览表、查看数据、执行SQL语句、设计数据库结构等功能。该工具使用C++编写，并利用Qt框架进行图形用户界面开发。SQLiteStudio支持多种操作系统，并提供便捷的数据库管理体验。
- [ldcsaa/HP-Socket](https://github.com/ldcsaa/HP-Socket) ★5945 [`android`] [`c`] [`cpp`] [`cross-platform`] [`epoll`] [`hpsocket`] [`http`] [`https`] [`iocp`] [`linux`] [`ndk`] [`netcore`] [`network`] [`networking`] [`socket`] [`ssl`] [`tcp`] [`udp`] [`websocket`] [`windows`]  
  HP-Socket是一个高性能、高可靠性的跨平台网络通信库。它基于C++开发，提供TCP、UDP、SSL等多种通信协议支持，并支持多线程、异步IO等特性，适用于需要高吞吐量和低延迟的网络应用。该库主要由底层网络通信模块和应用层封装组成，便于开发者快速构建高性能的网络通信应用。
- [kornelski/pngquant](https://github.com/kornelski/pngquant) ★5396 [`c`] [`conversion`] [`image-optimization`] [`palette`] [`png`] [`png-compression`] [`pngquant`] [`quality`] [`quantization`] [`smaller`] [`stdin`]  
  这是一个用于优化PNG图像的命令行工具。它使用算法压缩PNG文件，以减少文件大小，同时保持图像质量。该工具使用C++编写，并利用库进行PNG解码和编码。它提供多种压缩级别，用户可根据需求进行调整。
- [baidu/dperf](https://github.com/baidu/dperf) ★5373 [`benchmark`] [`dpdk`] [`l4lb`] [`linux-networking`] [`load-testing`] [`network-benchmarking`] [`packet-generator`] [`performance`] [`performance-testing`] [`tcp`] [`user-space-networking`] [`user-space-tcp`]  
  dperf是一个用于性能分析的工具，专注于数据库系统。它提供了一套命令行工具，用于采集和分析数据库性能指标，例如查询延迟、连接数、CPU使用率等。dperf使用C++编写，并基于epoll和libevent等网络库，实现高效的性能监控。它可以轻松集成到各种数据库系统中，并提供直观的性能报告，帮助用户快速定位性能瓶颈。
- [TelegramMessenger/MTProxy](https://github.com/TelegramMessenger/MTProxy) ★5295  
  该项目是一个用于代理Telegram消息的工具，允许用户在不同的Telegram客户端之间转发消息。它使用Python和asyncio框架构建，核心功能包括消息转发、用户身份验证和自定义路由规则。  项目包含一个代理服务器，可处理来自不同客户端的连接请求，并实现消息的可靠中转。  通过配置不同的路由规则，用户可以灵活地控制消息的转发路径，满足各种场景下的需求。
- [tinyproxy/tinyproxy](https://github.com/tinyproxy/tinyproxy) ★5262  
  这是一个轻量级的HTTP代理服务器，用于转发HTTP请求。它使用C语言编写，并利用了libevent事件循环库。  核心功能包括简单的配置、灵活的转发规则，以及对常见HTTP协议的良好支持。  项目目标是提供一个快速、易于使用的代理工具，适用于各种场景，例如本地开发、测试环境或简单的网络监控。
- [jedisct1/dsvpn](https://github.com/jedisct1/dsvpn) ★5225 [`privacy`] [`reallysimple`] [`simple`] [`vpn`]  
  这是一个基于 Docker 的轻量级 VPN 服务，使用 OpenVPN 作为核心加密协议。用户可以通过 Docker Compose 快速部署和管理 VPN 服务。项目使用 Go 语言编写，并包含一个简单的 Web 控制台，用于配置和管理 VPN 连接。该项目旨在提供一个易于部署和使用的 VPN 解决方案，方便用户在本地网络或云环境中建立安全的连接。
- [easychen/pushdeer](https://github.com/easychen/pushdeer) ★4842 [`app`] [`clip`] [`notification-service`] [`push`]  
  PushDeer 是一个开源的、易于使用的消息推送服务。它允许用户将各种事件（如GitHub仓库更新、代码提交、Docker事件等）推送至多种平台（如微信、钉钉、企业微信、Slack）。该项目使用 Python 语言开发，基于 Flask 框架构建后端，并使用 Redis 缓存来提高性能和可靠性。核心功能包括配置推送规则、管理用户和平台、以及自定义通知模板。PushDeer 旨在为开发者提供一个便捷的工具，将重要信息及时通知到指定平台。
- [sabrogden/Ditto](https://github.com/sabrogden/Ditto) ★4710 [`clipboard`] [`clipboard-manager`]  
  Ditto是一个用于在不同操作系统之间同步剪贴板内容的工具。它使用Python和PyQt5构建，支持Windows、macOS和Linux平台。核心功能是跨平台剪贴板同步，允许用户在不同系统间无缝复制粘贴文本和图像。项目包含一个桌面应用程序，以及用于后台同步的守护进程。
- [laruence/yaf](https://github.com/laruence/yaf) ★4531 [`c`] [`php`] [`php-framework`] [`yaf`]  
  这是一个用于在PHP中构建RESTful API的框架。它提供路由、控制器、模型和验证等核心组件，帮助开发者快速构建API，并支持JSON响应格式。该框架使用PHP作为主要语言，并基于Symfony的组件进行构建，旨在提高开发效率和代码可维护性。  项目包含详细的文档和示例代码，便于用户快速上手。
- [3proxy/3proxy](https://github.com/3proxy/3proxy) ★4393 [`accounting`] [`c`] [`ipv6`] [`network-management`] [`network-security`] [`portmap`] [`proxy`] [`proxy-server`] [`socks`] [`socks-proxy`] [`socks-server`] [`socks4`] [`socks4a`] [`socks5`] [`socks5-proxy`] [`socks5-server`] [`traffic-shaping`]  
  3proxy是一个高性能的HTTP代理服务器，支持多种协议，例如HTTP、HTTPS、SOCKS5等。它使用C语言编写，采用事件驱动架构，能够处理大量的并发连接。该项目提供了灵活的配置选项，允许用户自定义代理规则和行为。核心功能包括反向代理、负载均衡和缓存，适用于需要高性能和可扩展性的网络应用场景。
- [philippe44/AirConnect](https://github.com/philippe44/AirConnect) ★3828 [`airplay`] [`bridge`] [`chromecast`] [`dlna`] [`dlna-player`] [`dlna-upnp`] [`sonos`] [`upnp`]  
  AirConnect是一个用于连接和管理不同类型传感器数据的平台。它使用Python和Flask框架构建，核心功能包括传感器数据采集、预处理和可视化。平台支持多种传感器协议，并提供API接口供外部应用程序集成。  用户可以自定义数据处理逻辑，并通过Web界面监控和分析传感器数据。
- [RsyncProject/rsync](https://github.com/RsyncProject/rsync) ★3613  
  这是一个基于rsync的分布式文件同步工具。它使用rsync的高效算法实现文件同步，并支持多线程和断点续传，以最大限度地减少传输时间和资源消耗。该项目使用Python语言开发，并利用rsync命令行工具进行底层同步操作。核心模块包括任务调度、文件校验和进度监控，可用于大型文件或文件夹的快速同步。
- [schwabe/ics-openvpn](https://github.com/schwabe/ics-openvpn) ★3568 [`android`] [`openvpn`]  
  这是一个开源的基于OpenVPN的ICS（Internet Connection Sharing）服务器。它允许用户通过OpenVPN连接到局域网内的资源，提供安全可靠的远程访问。该项目使用C++和OpenVPN库开发，并包含一个简单的Web界面用于配置和管理连接。关键模块包括OpenVPN客户端连接管理和ICS转发功能。
- [cuber/ngx_http_google_filter_module](https://github.com/cuber/ngx_http_google_filter_module) ★3338  
  ngx_http_google_filter_module 是一个 Nginx 模块，用于过滤 Google Analytics 请求。它使用 C++ 编写，基于 Nginx 框架。该模块拦截并分析 Google Analytics 请求头，允许根据自定义规则进行请求修改或阻止。  主要功能包括：请求头过滤、响应头修改，以及基于正则表达式的匹配和规则执行。  通过配置，可以轻松实现对特定 Google Analytics 请求的控制，例如阻止特定来源的追踪。
- [starrtc/starrtc-server](https://github.com/starrtc/starrtc-server) ★3012 [`free`] [`instant-messaging`] [`live`] [`meeting`] [`voip`]  
  StarRTC Server是一个基于Node.js和WebSockets的实时音视频通信服务器。它提供可靠的连接、媒体流传输和房间管理功能，支持点对点和多方视频通话。项目使用Socket.IO进行实时通信，并包含媒体流处理模块，以确保流畅的音视频体验。该服务器易于集成到其他应用中，并提供RESTful API接口进行管理和控制。
- [EZLippi/WebBench](https://github.com/EZLippi/WebBench) ★2718  
  WebBench是一个用于评估Web服务器性能的工具。它使用Python编写，基于HTTP协议进行测试。  核心功能是模拟大量并发用户访问，并测量响应时间、吞吐量等关键指标，从而评估服务器的负载能力。  项目使用`requests`库进行HTTP请求，并利用`threading`模块实现并发测试。  结果以图表的形式展示，方便用户快速分析性能瓶颈。  该工具适用于评估不同Web服务器（如Apache、Nginx）和应用的性能表现。
- [dlundquist/sniproxy](https://github.com/dlundquist/sniproxy) ★2627  
  Sniproxy是一个用于代理和监控网络流量的工具。它使用Python和Flask框架构建，允许用户拦截和修改HTTP/HTTPS请求。核心功能包括请求重定向、数据篡改、以及日志记录。通过自定义规则，用户可以轻松地对网络流量进行控制和分析。该项目提供了一个灵活的平台，可用于网络测试、安全审计和开发相关的网络应用。
- [damonkohler/sl4a](https://github.com/damonkohler/sl4a) ★2467  
  该项目是针对Android平台的自动化测试工具，允许用户使用Python脚本控制Android设备。它通过SL4A（Scripting Layer for Android）接口，将Python脚本与Android系统功能连接起来。项目使用Python作为脚本语言，并利用SL4A提供的API访问各种Android服务，如短信、电话、传感器等。开发者可以编写自动化测试用例，以执行重复性任务，或者创建定制的Android应用自动化脚本。
- [viest/php-ext-xlswriter](https://github.com/viest/php-ext-xlswriter) ★2335 [`dll`] [`excel`] [`excel-export`] [`excelwriter`] [`extension`] [`laravel`] [`libxlsxwriter`] [`pecl`] [`phalcon`] [`php`] [`swoole`] [`xlswriter`] [`xlsx`] [`xlsx-files`] [`xlsx-writer`] [`xlsxreader`] [`xlsxwriter`]  
  该项目提供一个PHP扩展，用于将数据写入Excel文件。它使用纯PHP实现，无需依赖外部库，专注于高效写入各种Excel格式数据。扩展使用C++编写，并提供了易于使用的PHP接口，允许开发者快速构建将数据导出为Excel的功能。  该扩展支持多种数据类型，包括字符串、数字和日期，并能处理复杂的表格格式，如合并单元格和样式。
- [apple/cups](https://github.com/apple/cups) ★2043 [`ipp`] [`ipp-protocol`] [`printer`] [`printing`] [`snmp`]  
  CUPS (Common Unix Printing System) 是一个开源的打印系统，允许用户在各种操作系统上打印文档。它提供了一个灵活的框架，支持多种打印机类型和协议，包括网络打印。CUPS 使用 C 语言编写，并基于 Web 服务器技术，允许通过网络访问打印服务。该项目的主要功能包括打印作业管理、打印机配置以及与不同打印机驱动程序的集成。
- [heiher/natmap](https://github.com/heiher/natmap) ★1631 [`bsd`] [`linux`] [`macos`] [`nat1`] [`port-mapping`] [`tcp`] [`udp`] [`windows`]  
  Natmap是一个用于快速发现网络中主机和服务的工具。它使用原始套接字技术，以高效的方式探测目标网络中的开放端口和服务，并提供详细的扫描结果。项目使用Python编写，并利用`scapy`库进行网络数据包的发送和接收，以及`colorama`库进行结果输出美化。该工具适用于网络安全扫描和渗透测试，帮助用户识别潜在的网络漏洞。
- [laruence/yar](https://github.com/laruence/yar) ★1439 [`c`] [`concurrency`] [`json`] [`msgpack`] [`php`] [`rpc-framework`] [`yar`]  
  yar是一个用于快速构建和部署微服务的工具。它基于Go语言，使用Kubernetes进行容器化和编排。  核心功能包括：一键式生成微服务项目模板、自动配置数据库连接、生成API接口文档等。  开发者只需关注业务逻辑，yar自动处理基础设施和部署。  该项目的目标是简化微服务开发流程，提高开发效率。
- [OpenPrinting/cups](https://github.com/OpenPrinting/cups) ★1287 [`bsd`] [`ipp`] [`linux`] [`printing`]  
  OpenPrinting/cups 是一个开源的打印守护进程，负责管理打印机和打印作业。它支持各种打印机类型和协议，并提供广泛的配置选项。该项目使用C语言开发，并基于Unix/Linux系统架构。核心功能包括打印作业队列管理、打印机驱动程序支持和网络打印功能。  它在许多Linux发行版中作为标准组件存在，为用户提供可靠的打印服务。
- [php-memcached-dev/php-memcached](https://github.com/php-memcached-dev/php-memcached) ★994  
  这是一个PHP扩展，用于访问Memcached缓存服务器。它提供了一种高效的方式，让PHP应用程序可以存储和检索数据到Memcached中，从而提升网站性能。该扩展使用C语言编写，并通过PHP扩展API集成到PHP环境中。核心功能包括连接管理、数据存储、检索和删除等操作。该扩展支持多种Memcached协议版本，并提供了一些高级配置选项，以适应不同的应用场景。
- [examplecode/mproxy](https://github.com/examplecode/mproxy) ★992  
  这是一个基于Python的代理服务器项目，用于代理HTTP请求。它使用Python的asyncio库实现异步处理，提高了并发性能。项目核心功能包括：请求转发、代理配置读取、自定义响应修改等。主要技术栈是Python、asyncio和aiohttp，支持多种代理配置格式，例如YAML。该项目适合需要高效处理大量HTTP请求的场景，例如爬虫和API网关。
- [krakjoe/apcu](https://github.com/krakjoe/apcu) ★988  
  这是一个用于在PHP应用程序中缓存数据的扩展库。它利用APC（Alternative PHP Cache）扩展，提供高效的内存缓存机制。该项目使用纯PHP编写，并直接利用APC提供的API进行缓存操作。  通过简单的配置和API调用，开发者可以轻松地将数据存储到APC缓存中，提高应用程序性能。  它旨在为PHP应用程序提供一个易于使用的缓存解决方案，以减少数据库负载并加速页面响应时间。
- [TurboVNC/turbovnc](https://github.com/TurboVNC/turbovnc) ★895  
  这是一个高性能的VNC服务器，旨在提供快速、可靠的远程桌面访问。它使用C++编写，并利用libev事件循环库来实现高效的网络处理。核心功能包括支持多种VNC协议版本、多用户连接、以及自定义设置选项。该项目目标是提供一个轻量级但功能强大的VNC服务器，适用于各种远程桌面场景。
- [meyerd/n2n](https://github.com/meyerd/n2n) ★883  
  这是一个基于Go语言的N2N（Next Generation Network）代理服务器实现。它提供了一种轻量级、高性能的VPN解决方案，允许用户在不依赖于传统VPN服务器的情况下建立点对点连接。项目使用Go语言编写，并利用了标准库和一些第三方库，如`crypto/tls`模块进行安全通信。该项目支持多种加密算法和协议，并具有灵活的配置选项，方便用户根据自身需求进行调整。
- [cx9208/Linux-NetSpeed](https://github.com/cx9208/Linux-NetSpeed) ★639  
  这是一个用于Linux系统监测网络速度的工具。它使用`tc`命令行工具来修改网络队列，并通过`ping`和`iperf`等工具测量不同网络条件下的速度。主要使用Bash脚本实现，并结合`awk`处理数据，最终输出清晰的网络速度报告。该工具可用于评估网络性能、诊断网络瓶颈，并帮助用户了解不同网络配置下的速度差异。
- [mkoppanen/php-zbarcode](https://github.com/mkoppanen/php-zbarcode) ★383  
  PHP-ZBarcode 是一个用于生成各种条形码的 PHP 库。它支持多种条形码类型，包括 UPC-A、UPC-E、EAN-13、EAN-8、Code 39、Code 128 等。该库使用纯 PHP 实现，无需外部依赖，易于集成到现有项目中。开发者可以通过简单的 API 调用生成不同类型的条形码图像，并可自定义条形码的尺寸、颜色等参数。
- [zcodes/IMESupport](https://github.com/zcodes/IMESupport) ★269  
  该项目提供了一个基于Python的IME（输入法编辑器）支持库。它允许用户在Python应用程序中使用各种输入法，简化了中文等语言的输入。该库使用PyQt5构建GUI界面，并通过与操作系统输入法服务的交互来实现输入法的切换和输入。核心功能包括：获取当前活动输入法、切换输入法、获取候选词列表以及处理输入事件等。
- [ndfred/iperf-ios](https://github.com/ndfred/iperf-ios) ★202 [`iperf`] [`iperf3`] [`network-analysis`] [`performance-testing`]  
  这是一个用于iOS平台的iperf客户端和服务器实现。它允许在iOS设备之间或与其他iperf服务器进行网络性能测试。该项目使用Swift语言开发，基于Foundation框架，并包含用于连接、传输和结果分析的关键模块。  该项目提供了一个简单易用的API用于执行iperf测试，并能够显示测试结果，如带宽、延迟等指标。
- [xvsdf100/PCWeChatMore](https://github.com/xvsdf100/PCWeChatMore) ★54  
  PCWeChatMore是一个增强版微信桌面客户端，旨在提升用户体验。它通过扩展微信原有功能，提供更多便捷操作，例如自定义快捷键、消息过滤、文件批量处理等。该项目使用Python和PyQt5开发，核心模块包括自定义界面构建、微信协议解析和数据处理，实现了与微信客户端的无缝集成。  用户可以通过配置自定义功能来提高工作效率。
- [arnaud-lb/php-inotify](https://github.com/arnaud-lb/php-inotify) ★46 [`inotify`] [`php`] [`php-inotify`]  
  该项目提供一个PHP库，用于使用inotify系统调用监控文件系统事件。它允许开发人员在文件或目录发生变化（例如创建、修改、删除）时，实时接收通知。该库使用PHP扩展来访问inotify，并提供清晰易用的API。开发者可以根据事件类型编写相应的回调函数，从而实现对文件系统变化的响应，例如自动备份、实时监控等应用场景。
