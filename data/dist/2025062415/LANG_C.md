# C Repositories

- [Genymobile/scrcpy](https://github.com/Genymobile/scrcpy) ★124103 [`android`] [`c`] [`ffmpeg`] [`libav`] [`mirroring`] [`recording`] [`screen`] [`sdl2`]  
  Scrcpy是一个开源工具，用于将Android设备的屏幕镜像到电脑。它允许用户在电脑上实时查看和控制Android设备，无需任何额外硬件。该工具使用adb协议与Android设备连接，并通过网络传输屏幕数据。主要使用C++开发，并利用OpenGL ES进行图像处理和显示。  它提供流畅的屏幕镜像体验，并支持多种功能，例如屏幕录制、远程控制和调试。
- [ventoy/Ventoy](https://github.com/ventoy/Ventoy) ★68808 [`auto-install`] [`bootable-usb`] [`bsd`] [`chromeos`] [`iso-files`] [`legacy`] [`linux`] [`multiboot`] [`persistence`] [`secure-boot`] [`uefi`] [`unattended`] [`unix`] [`usb`] [`windows`]  
  Ventoy是一个免费开源的工具，允许在任何USB驱动器上创建可启动的ISO映像。无需修改BIOS或UEFI设置，用户可以直接将ISO文件复制到USB驱动器，使其成为可启动的媒体。Ventoy使用Python编写，并基于多线程技术，支持多种操作系统和ISO格式，例如Windows、Linux、macOS和各种游戏ISO。它提供了一个用户友好的图形界面，方便用户操作。
- [bilibili/ijkplayer](https://github.com/bilibili/ijkplayer) ★32942 [`android`] [`ffmpeg`] [`ijkplayer`] [`ios`] [`player`] [`video`]  
  该项目是一个基于FFmpeg的开源视频播放器，支持多种视频格式和协议，例如HLS、HTTP、RTMP等。它使用C++编写，并提供Android和iOS平台的原生库。  ijkplayer的核心功能是高效的解码和渲染，并提供丰富的自定义选项，例如缓冲策略、播放速度控制等。  通过FFmpeg作为底层解码引擎，它能够实现高质量的视频播放体验，并支持多种播放场景。
- [jqlang/jq](https://github.com/jqlang/jq) ★31978 [`jq`]  
  jq是一个轻量级的命令行JSON处理器。它允许用户使用类似于grep的语法来选择、转换和过滤JSON数据。  该工具主要用Go语言编写，并提供高效的解析和操作JSON的能力。  jq的核心功能包括：使用过滤器提取特定数据、修改JSON结构、进行计算和转换等。  它支持多种过滤器，包括选择、投影、数组操作、计算等。  jq的简洁性使其成为处理JSON数据的理想工具，特别适用于数据清洗、转换和分析。
- [coolsnowwolf/lede](https://github.com/coolsnowwolf/lede) ★30773 [`lede`] [`lua`] [`openwrt-feed`] [`openwrt-package`] [`openwrt-zh-cn`]  
  该项目是基于开放源代码的路由器固件，允许用户自定义路由器功能。它使用C语言开发，并基于嵌入式Linux系统构建。  用户可以根据需求配置网络功能，如防火墙、VPN、QoS等，从而提升路由器的性能和安全性。  该固件支持多种硬件平台，并提供丰富的插件和扩展接口，方便用户定制和扩展。
- [valinet/ExplorerPatcher](https://github.com/valinet/ExplorerPatcher) ★27763  
  ExplorerPatcher 是一个用于修改 Windows 资源管理器 (explorer.exe) 行为的工具。它允许用户自定义资源管理器外观和功能，例如添加新的工具栏按钮、修改快捷键、自定义上下文菜单等。该项目使用 C# 和 .NET Core 构建，并依赖于反射技术来修改资源管理器内部组件。通过配置文件配置修改，用户无需重新编译资源管理器即可实现自定义。
- [kingToolbox/WindTerm](https://github.com/kingToolbox/WindTerm) ★26874 [`bash`] [`client`] [`cmd`] [`linux`] [`mac`] [`powershell`] [`serial`] [`sftp`] [`shell`] [`ssh`] [`telnet`] [`terminal`] [`tmux`] [`windows`] [`wsl`] [`x11`] [`xmodem`] [`xterm`] [`ymodem`] [`zmodem`]  
  WindTerm 是一个基于 Rust 编写的跨平台终端模拟器。它提供强大的功能，例如自定义配色方案、快捷键绑定和插件支持，以增强终端用户体验。项目使用 Rust 语言和 `iced` 框架构建，并包含一个插件系统，允许用户扩展其功能。核心功能包括灵活的配置、丰富的主题选项和高度可定制的快捷键。
- [ggreer/the_silver_searcher](https://github.com/ggreer/the_silver_searcher) ★26660 [`ag`] [`c`] [`command-line-tool`] [`pcre`] [`search-in-text`] [`silver-searcher`]  
  这是一个基于Rust实现的快速、功能强大的文本搜索工具，类似于GNU Silver Searcher (ag)。它利用Rust的性能优势，在处理大型文件时速度显著快于ag。项目使用regex模块进行正则表达式匹配，并通过多线程并行处理提高搜索效率。该工具旨在提供一个轻量级、高效的命令行搜索解决方案，特别适用于需要快速查找文本内容的场景。
- [gojue/ecapture](https://github.com/gojue/ecapture) ★14411 [`android`] [`android-https-capture`] [`ebpf`] [`ebpf-go`] [`ebpf-tc`] [`ebpf-uprobe`] [`golang`] [`https`] [`linux`] [`network-capture`] [`security-audit`] [`ssl`] [`ssldump`] [`tcpdump`] [`tls`]  
  这是一个用于捕获和处理事件的Go库。它提供了一种高效的方式来监听和响应各种事件，例如系统事件、网络事件和用户交互事件。该库使用Go语言编写，并基于通道和回调机制实现。  核心功能包括事件注册、事件分发和事件处理。  开发者可以通过注册回调函数来处理特定类型的事件，库会自动分发事件到相应的处理函数。
- [coturn/coturn](https://github.com/coturn/coturn) ★12550 [`networking`] [`server`] [`turn`]  
  Coturn是一个开源的TURN服务器，用于在NAT网络环境中提供STUN和TURN功能。它使用C++编写，基于libevent事件驱动框架，支持多种协议，如UDP和TCP。Coturn主要用于解决P2P应用在公网环境下无法直接通信的问题。它提供穿越NAT和防火墙的能力，允许客户端在不同网络中进行可靠的连接。  该项目被广泛应用于VoIP和实时通信应用中。
- [SoftEtherVPN/SoftEtherVPN](https://github.com/SoftEtherVPN/SoftEtherVPN) ★12347 [`etherip`] [`ike`] [`ipsec`] [`l2tp`] [`l2tpv3`] [`openvpn`] [`softether-vpn`] [`softethervpn`] [`ssl-vpn`] [`sstp`] [`tls`] [`vpn`] [`vpn-protocols`] [`vpn-server`] [`vpn-tunnel`] [`wfh`] [`wireguard`] [`work-from-home`]  
  SoftEtherVPN是一个开源的、高性能的VPN服务器和客户端软件。它支持多种VPN协议，如UDP、TCP、SSL-VPN等，并提供易于使用的图形用户界面。该项目使用C#和.NET框架开发，核心功能包括建立VPN连接、管理用户和设备、支持多种加密算法，以及提供跨平台兼容性。  该软件适用于个人和企业用户，用于安全远程访问网络资源。
- [vanhauser-thc/thc-hydra](https://github.com/vanhauser-thc/thc-hydra) ★10524 [`brute-force`] [`brute-force-attacks`] [`brute-force-passwords`] [`bruteforce`] [`bruteforce-attacks`] [`bruteforcer`] [`bruteforcing`] [`hydra`] [`network-security`] [`password-cracker`] [`password-cracking`] [`penetration-testing`] [`pentest`] [`pentest-tool`] [`pentesting`] [`thc`]  
  这是一个用于THC-Hydra服务的开源项目，提供了一个命令行界面，方便用户管理和使用THC-Hydra工具。该项目使用Python编写，并基于`argparse`模块实现命令行参数解析，使用`requests`库进行HTTP请求。核心功能包括：配置Hydra攻击、启动和监控攻击过程、以及结果分析。该项目旨在简化THC-Hydra的使用，提高攻击测试效率。
- [rofl0r/proxychains-ng](https://github.com/rofl0r/proxychains-ng) ★10171 [`hack`] [`hook`] [`http`] [`preload`] [`proxy`] [`proxychains`] [`socks`]  
  这是一个改进的代理服务器工具，用于在网络连接中绕过防火墙或访问受限制的内容。它使用多种代理服务器类型，并提供命令行界面进行配置和管理。该项目基于Python开发，并使用配置文件管理代理服务器列表。  用户可以通过配置不同的代理服务器，实现对网络访问的灵活控制。
- [xmrig/xmrig](https://github.com/xmrig/xmrig) ★9286 [`argon2`] [`cpuminer`] [`cryptocurrency`] [`cryptonight`] [`miner`] [`monero`] [`randomx`] [`xmr`] [`xmrig`]  
  xmrig是一个开源的矿工软件，用于挖掘多种加密货币。它支持多种算法，包括CPU、GPU和ASIC挖矿。该软件使用C++编写，并利用了多线程技术，以最大限度地提高挖矿效率。xmrig包含一个命令行界面，允许用户配置和监控挖矿过程。
- [pymumu/smartdns](https://github.com/pymumu/smartdns) ★9178 [`c`] [`dns`] [`dns-over-https`] [`dns-over-tls`] [`dns-server`] [`dns64`] [`doh`] [`doh3`] [`doq`] [`dot`] [`nftables`] [`nftables-sets`] [`openwrt`] [`openwrt-package`] [`smartdns`] [`stubby`]  
  这是一个基于Python的智能DNS解析器，用于根据用户自定义规则或地理位置优先选择合适的DNS服务器。它可以有效地提升DNS查询速度和稳定性，并提供自定义规则配置选项。项目使用Python语言开发，主要模块包括DNS查询模块和规则匹配模块，并支持多种DNS服务器类型。
- [Wind4/vlmcsd](https://github.com/Wind4/vlmcsd) ★8641  
  这是一个用于控制和管理 VLC Media Server 的工具，允许用户通过命令行或API接口来操作VLC服务器。它使用Python编写，并利用`requests`库进行HTTP通信。  项目包含了各种功能，例如启动、停止、获取状态、控制播放、设置参数等，方便自动化控制和集成到其他系统。  核心模块包括命令解析、HTTP请求处理和结果解析，可以高效地管理VLC服务器的运行。
- [bingoogolapple/BGAQRCode-Android](https://github.com/bingoogolapple/BGAQRCode-Android) ★8003 [`qrcode`] [`qrcode-android`] [`qrcode-generator`] [`qrcode-scanner`]  
  BGAQRCode-Android 是一个用于 Android 平台的二维码扫描和生成库。它提供便捷的 API 用于快速集成二维码功能，包含扫描、生成、解析等核心功能。该库使用 Kotlin 语言开发，基于 Android Studio 环境，并利用了 ZXing 库进行底层二维码处理。  项目包含详细的示例代码和文档，方便开发者快速上手。
- [winfsp/winfsp](https://github.com/winfsp/winfsp) ★7614 [`driver`] [`filesystem`] [`fuse`] [`gplv3`] [`kernel`] [`windows`] [`windows-kernel`]  
  WinFSP是一个用于在Windows系统上构建文件系统驱动程序的框架。它使用C++编写，基于模块化设计，提供了一套API用于创建自定义文件系统。开发者可以利用WinFSP快速开发各种类型的文件系统，例如加密文件系统、云存储文件系统等。该框架包含了文件系统驱动程序开发所需的底层功能，包括I/O管理、目录操作、权限控制等，从而简化了开发过程。  通过WinFSP，开发者能够专注于文件系统逻辑的实现，而无需处理底层驱动程序的复杂细节。
- [esnet/iperf](https://github.com/esnet/iperf) ★7594  
  iperf是一个用于测量网络带宽的开源工具。它支持多种传输协议（TCP和UDP），并提供多种测试选项，例如带宽、延迟、丢包率等。iperf使用C语言开发，并通过命令行界面运行。该工具广泛应用于网络性能测试和诊断，可以快速评估网络连接质量。
- [beanstalkd/beanstalkd](https://github.com/beanstalkd/beanstalkd) ★6640  
  Beanstalkd是一个开源的、高性能的作业队列服务器。它允许应用程序将任务推送到队列中，并由其他应用程序从队列中检索和处理这些任务。该项目使用C语言开发，并基于libevent事件驱动库实现高效的网络通信。核心功能包括任务的持久化、优先级排序、以及多种任务状态管理机制。Beanstalkd适用于需要异步处理任务的各种应用场景，例如任务调度、消息队列、以及分布式系统。
- [ntop/n2n](https://github.com/ntop/n2n) ★6596 [`peer-to-peer`] [`vpn`]  
  n2n是一个轻量级、跨平台的VPN客户端，基于WireGuard协议。它使用Go语言开发，提供简单易用的命令行界面和图形界面，支持多种加密算法和传输协议。n2n旨在提供快速、安全且易于配置的VPN连接，适用于各种场景，例如绕过地理限制和保护个人隐私。  项目包含了完整的源代码和示例配置，方便用户快速上手和定制。
- [akopytov/sysbench](https://github.com/akopytov/sysbench) ★6405 [`benchmark`] [`console`] [`freebsd`] [`linux`] [`lua`] [`luajit`] [`macos`] [`micro-benchmarks`] [`mysql`] [`oltp`] [`postgresql`] [`sysbench`]  
  Sysbench是一个用于基准测试数据库系统性能的工具。它支持多种数据库引擎，包括MySQL、PostgreSQL、Oracle等。该工具通过模拟各种工作负载（如读取、写入、更新等）来评估数据库系统的性能指标，例如吞吐量、延迟和资源消耗。Sysbench使用C语言编写，并利用SQL语句与数据库交互，其核心模块包括负载生成器和性能分析器。该项目提供多种配置选项，允许用户自定义测试场景，以满足不同基准测试需求。
- [istoreos/istoreos](https://github.com/istoreos/istoreos) ★6215 [`istore`] [`istoreos`] [`koolcenter`] [`linkease`] [`nas`] [`openwrt`] [`router`]  
  iStoreOS 是一个基于 Rust 编写的，用于构建小型嵌入式系统的实时操作系统 (RTOS)。它提供任务调度、内存管理、文件系统和网络栈等基本功能。项目使用 Rust 语言进行开发，并利用了嵌入式系统开发的最佳实践。iStoreOS 旨在为资源受限的嵌入式设备提供高效、可靠的操作系统支持，方便开发者快速构建各种应用。
- [JoeDog/siege](https://github.com/JoeDog/siege) ★6086  
  这是一个用于模拟城市围攻的策略游戏。该项目使用Unity引擎开发，主要功能包括：建造防御工事、招募部队、指挥战斗等。游戏采用C#语言，并利用Unity的组件系统和脚本系统实现游戏逻辑。核心模块包括地图生成、单位控制、战斗系统和资源管理。玩家可以在游戏中体验策略对抗的乐趣。
- [google/ios-webkit-debug-proxy](https://github.com/google/ios-webkit-debug-proxy) ★6053  
  这是一个用于调试iOS设备上运行的WebKit浏览器的代理工具。它允许开发者在Mac上通过代理连接到iOS设备上的WebKit，从而进行调试和测试。该工具使用Python编写，并利用了WebKit的调试协议。主要功能包括：转发网络请求、调试JavaScript代码、检查DOM树等，方便Web应用开发人员在iOS设备上进行本地调试。
- [pawelsalawa/sqlitestudio](https://github.com/pawelsalawa/sqlitestudio) ★5999 [`cpp`] [`database`] [`database-management`] [`qt`] [`qt5`] [`sqlcipher`] [`sqlite`] [`sqlite3-database`] [`wxsqlite3`]  
  SQLiteStudio是一个用于SQLite数据库管理的图形化工具。它允许用户创建、编辑和管理SQLite数据库，包括创建表、插入数据、查询数据、修改数据和删除数据等操作。该工具使用C++和Qt框架构建，提供直观的界面，方便用户进行数据库操作。它支持多种数据库管理功能，并提供SQL编辑器，便于用户编写和执行SQL语句。
- [ldcsaa/HP-Socket](https://github.com/ldcsaa/HP-Socket) ★5945 [`android`] [`c`] [`cpp`] [`cross-platform`] [`epoll`] [`hpsocket`] [`http`] [`https`] [`iocp`] [`linux`] [`ndk`] [`netcore`] [`network`] [`networking`] [`socket`] [`ssl`] [`tcp`] [`udp`] [`websocket`] [`windows`]  
  HP-Socket是一个高性能、跨平台的网络通信框架。它基于C#开发，提供高效的TCP/IP、UDP通信功能，支持多种协议和连接模式。框架包含连接池、心跳检测、消息队列等核心模块，用于构建可靠且高性能的网络应用。该框架旨在简化网络编程，提高开发效率，并适用于需要处理大量并发连接的场景。
- [kornelski/pngquant](https://github.com/kornelski/pngquant) ★5396 [`c`] [`conversion`] [`image-optimization`] [`palette`] [`png`] [`png-compression`] [`pngquant`] [`quality`] [`quantization`] [`smaller`] [`stdin`]  
  这是一个用于优化PNG图像的命令行工具。它使用算法压缩PNG文件，以减少文件大小，同时保持图像质量。该工具使用C++编写，并利用库进行PNG解码和编码。它提供多种压缩级别，用户可根据需求进行调整。
- [baidu/dperf](https://github.com/baidu/dperf) ★5373 [`benchmark`] [`dpdk`] [`l4lb`] [`linux-networking`] [`load-testing`] [`network-benchmarking`] [`packet-generator`] [`performance`] [`performance-testing`] [`tcp`] [`user-space-networking`] [`user-space-tcp`]  
  dperf是一个用于性能分析的工具，主要用于诊断和定位数据库性能瓶颈。它使用Go语言开发，基于数据库连接池监控和SQL执行跟踪，提供直观的性能图表和分析报告，帮助用户快速识别数据库性能问题。dperf支持多种数据库类型，并提供自定义配置选项，方便用户根据不同场景进行调整。该工具的核心模块包括连接池监控、SQL执行跟踪、性能指标计算和报告生成。
- [TelegramMessenger/MTProxy](https://github.com/TelegramMessenger/MTProxy) ★5295  
  该项目是一个用于代理Telegram消息的工具，允许用户在不同的Telegram客户端之间转发消息。它使用Python和asyncio框架构建，核心功能包括消息转发、用户身份验证和自定义路由规则。  项目包含一个代理服务器，可处理来自不同客户端的连接请求，并实现消息的可靠中转。  通过配置不同的路由规则，用户可以灵活地控制消息的转发路径，满足各种场景下的需求。
- [tinyproxy/tinyproxy](https://github.com/tinyproxy/tinyproxy) ★5262  
  这是一个轻量级的HTTP代理服务器，用于在本地网络中转发HTTP请求。它使用Go语言开发，基于net/http包构建，并支持简单的配置选项，例如端口转发、请求重定向等。  该项目旨在提供一个快速、易于使用的代理工具，方便本地网络测试和开发。  核心功能包括HTTP请求转发和基本配置选项。
- [jedisct1/dsvpn](https://github.com/jedisct1/dsvpn) ★5225 [`privacy`] [`reallysimple`] [`simple`] [`vpn`]  
  这是一个基于 Docker 的轻量级 VPN 服务，使用 OpenVPN 作为核心加密协议。用户可以通过 Docker Compose 快速部署和管理 VPN 服务。项目使用 Go 语言编写，并包含一个简单的 Web 控制台，用于配置和管理 VPN 连接。该项目旨在提供一个易于部署和使用的 VPN 解决方案，方便用户在本地网络或云环境中建立安全的连接。
- [easychen/pushdeer](https://github.com/easychen/pushdeer) ★4842 [`app`] [`clip`] [`notification-service`] [`push`]  
  PushDeer 是一个开源的、基于 Web 的消息推送服务，允许用户将各种事件通知推送到不同的平台，例如微信、钉钉、企业微信等。它使用 Python 作为主要开发语言，Flask 框架构建 Web 后端，并利用第三方库处理消息推送。项目包含用户管理、消息配置、平台集成等核心模块，旨在提供一个易于使用且功能丰富的消息通知平台。
- [sabrogden/Ditto](https://github.com/sabrogden/Ditto) ★4709 [`clipboard`] [`clipboard-manager`]  
  Ditto是一个用于快速创建和部署本地开发环境的工具。它使用Docker Compose来定义和管理容器化应用，并提供一键式命令来启动、停止和管理服务。  主要使用Python编写，并依赖Docker和Compose。  项目核心功能是简化本地开发环境的搭建，提高开发效率。  用户只需配置Docker Compose文件，即可快速启动包括数据库、Web服务器等在内的完整开发环境。
- [laruence/yaf](https://github.com/laruence/yaf) ★4531 [`c`] [`php`] [`php-framework`] [`yaf`]  
  这是一个用于PHP开发的轻量级、高性能的应用程序框架。它提供路由、控制器、模型等核心组件，帮助开发者快速构建Web应用程序。框架主要使用PHP语言开发，并基于MVC架构。  yaf的核心模块包括路由解析、请求处理、视图渲染等，旨在简化Web应用开发流程，提高开发效率。
- [3proxy/3proxy](https://github.com/3proxy/3proxy) ★4393 [`accounting`] [`c`] [`ipv6`] [`network-management`] [`network-security`] [`portmap`] [`proxy`] [`proxy-server`] [`socks`] [`socks-proxy`] [`socks-server`] [`socks4`] [`socks4a`] [`socks5`] [`socks5-proxy`] [`socks5-server`] [`traffic-shaping`]  
  3proxy是一个高性能的网络代理服务器，支持多种代理协议，包括HTTP、HTTPS、SOCKS5等。它使用C语言开发，并利用epoll等高效的网络编程技术，实现高并发连接处理。项目提供灵活的配置选项，用户可以自定义代理规则和行为，例如修改请求头、重定向等。3proxy主要用于网络流量转发、代理和安全防护，适用于各种场景，如负载均衡、反向代理、网络监控等。
- [philippe44/AirConnect](https://github.com/philippe44/AirConnect) ★3828 [`airplay`] [`bridge`] [`chromecast`] [`dlna`] [`dlna-player`] [`dlna-upnp`] [`sonos`] [`upnp`]  
  AirConnect是一个用于连接和管理不同航空公司航班信息的工具。它使用Python和Flask框架构建，通过API接口获取航班数据，并提供用户友好的Web界面进行查询和筛选。核心功能包括航班查询、实时追踪、预订管理以及自定义报表生成。该项目主要依赖航空公司API和航班数据库，旨在为用户提供便捷的航空信息访问和管理体验。
- [RsyncProject/rsync](https://github.com/RsyncProject/rsync) ★3613  
  这是一个使用Rust编写的rsync客户端。它实现了rsync协议的完整功能，支持文件传输、目录同步和增量传输。项目使用tokio异步运行时，并基于`async`/`await`语法进行开发。核心模块包括连接管理、数据传输和校验等。该项目旨在提供一个高效、可靠的rsync替代方案，并支持更灵活的配置选项。
- [schwabe/ics-openvpn](https://github.com/schwabe/ics-openvpn) ★3568 [`android`] [`openvpn`]  
  这是一个开源的基于OpenVPN的ICS（Internet Connection Sharing）服务器。它允许用户通过VPN连接到家庭网络，并提供访问局域网资源的功能。该项目使用C++编写，基于OpenVPN库，并包含一个简单的Web界面用于管理连接和配置。  核心功能包括VPN连接建立、局域网资源共享和用户管理。
- [cuber/ngx_http_google_filter_module](https://github.com/cuber/ngx_http_google_filter_module) ★3338  
  ngx_http_google_filter_module 是一个 Nginx 模块，用于过滤 Google Analytics 请求。它使用 C++ 编写，基于 Nginx 框架。该模块拦截并分析 Google Analytics 请求头，允许根据自定义规则进行请求修改或阻止。  主要功能包括：请求头过滤、响应头修改，以及基于正则表达式的匹配和规则执行。  通过配置，可以轻松实现对特定 Google Analytics 请求的控制，例如阻止特定来源的追踪。
- [starrtc/starrtc-server](https://github.com/starrtc/starrtc-server) ★3012 [`free`] [`instant-messaging`] [`live`] [`meeting`] [`voip`]  
  StarRTC Server是一个基于Node.js和WebSockets的实时音视频通信服务器。它提供可靠的连接、流媒体传输和房间管理功能，可用于构建各种音视频应用，如在线会议、视频聊天和直播。服务器采用模块化设计，易于扩展和维护。关键技术包括WebSockets协议、Node.js框架和自定义数据包格式，以确保高效的通信和低延迟。
- [EZLippi/WebBench](https://github.com/EZLippi/WebBench) ★2718  
  WebBench是一个用于评估Web应用程序性能的开源工具。它使用Python和Flask框架构建，提供易于使用的Web界面，允许用户自定义测试场景，并生成详细的性能报告。该工具支持多种负载测试方法，例如并发请求和持续压力测试，可以帮助开发者快速识别Web应用的瓶颈，并优化性能。关键模块包括HTTP客户端、数据生成器和报告模块。
- [dlundquist/sniproxy](https://github.com/dlundquist/sniproxy) ★2627  
  Sniproxy是一个用于代理和监控网络流量的工具。它使用Python和asyncio构建，提供灵活的流量过滤和重定向功能。用户可以通过配置规则来捕获和修改网络请求，例如HTTP请求头、URL或内容。Sniproxy支持多种代理协议，并能监控代理流量以分析网络行为。该工具主要用于网络测试、调试和安全分析。
- [damonkohler/sl4a](https://github.com/damonkohler/sl4a) ★2467  
  该项目是针对Android平台的自动化测试工具，允许用户使用Python脚本控制Android设备。它通过SL4A（Scripting Layer for Android）接口，将Python脚本与Android系统功能连接起来。项目使用Python作为脚本语言，并利用SL4A提供的API访问各种Android服务，如短信、电话、传感器等。开发者可以编写自动化测试用例，以执行重复性任务，或者创建定制的Android应用自动化脚本。
- [viest/php-ext-xlswriter](https://github.com/viest/php-ext-xlswriter) ★2335 [`dll`] [`excel`] [`excel-export`] [`excelwriter`] [`extension`] [`laravel`] [`libxlsxwriter`] [`pecl`] [`phalcon`] [`php`] [`swoole`] [`xlswriter`] [`xlsx`] [`xlsx-files`] [`xlsx-writer`] [`xlsxreader`] [`xlsxwriter`]  
  该项目是一个用于在PHP中创建Excel文件的扩展，基于XlsxWriter库。它提供了一种高效的方式生成Excel (.xlsx) 文件，无需依赖外部程序。该扩展使用纯PHP实现，无需安装外部二进制文件，便于集成到各种PHP项目中。主要功能包括创建工作表、设置单元格格式、添加数据和图像等。开发者可以通过简单的API调用来操作Excel文件，提高工作效率。
- [apple/cups](https://github.com/apple/cups) ★2043 [`ipp`] [`ipp-protocol`] [`printer`] [`printing`] [`snmp`]  
  CUPS (Common Unix Printing System) 是一个开源的、跨平台的打印系统。它允许用户在各种操作系统上打印文档。该项目提供了一套完整的打印服务，包括打印机配置、驱动程序管理和打印作业管理。CUPS 使用 C 语言开发，并基于 HTTP 协议提供网络打印功能。它支持多种打印机类型和协议，并通过 Web 界面进行管理。
- [heiher/natmap](https://github.com/heiher/natmap) ★1630 [`bsd`] [`linux`] [`macos`] [`nat1`] [`port-mapping`] [`tcp`] [`udp`] [`windows`]  
  Natmap是一个用于探测网络拓扑结构的工具。它使用Nmap扫描技术，并结合自定义规则和算法，快速识别网络中不同设备的IP地址、端口开放情况以及操作系统类型。该工具使用Python编写，基于Scapy库进行数据包处理，并通过可视化界面呈现扫描结果。  主要功能包括网络扫描、端口探测、操作系统识别以及结果可视化。
- [laruence/yar](https://github.com/laruence/yar) ★1439 [`c`] [`concurrency`] [`json`] [`msgpack`] [`php`] [`rpc-framework`] [`yar`]  
  yar 是一个轻量级、高性能的 Go 语言编写的 YARA 规则引擎。它提供高效的规则匹配功能，并支持自定义规则加载和更新。该项目使用 Go 语言开发，并利用了 Go 的并发特性来提升匹配速度。  核心功能包括 YARA 规则解析、字节流匹配以及匹配结果的返回。 通过简洁的 API 接口，yar 易于集成到其他 Go 应用程序中，用于安全扫描、恶意软件检测等场景。
- [OpenPrinting/cups](https://github.com/OpenPrinting/cups) ★1287 [`bsd`] [`ipp`] [`linux`] [`printing`]  
  OpenPrinting/cups项目是一个开源的打印守护进程，用于管理各种打印机和打印任务。它支持广泛的打印机类型，并提供灵活的配置选项。该项目主要使用C语言和Unix系统编程技术，包含了核心打印守护进程和各种驱动程序。  cups允许用户轻松地连接和管理本地和网络打印机，并通过标准的打印协议（如IPP）进行打印。  它在许多Linux发行版中作为标准组件存在，并为用户提供可靠的打印功能。
- [php-memcached-dev/php-memcached](https://github.com/php-memcached-dev/php-memcached) ★994  
  这是一个PHP扩展，用于访问Memcached缓存服务器。它提供了一种高效的方式，让PHP应用程序可以存储和检索数据到Memcached中，从而提升网站性能。该扩展使用C语言编写，并通过PHP扩展API集成到PHP环境中。核心功能包括连接管理、数据存储、检索和删除等操作。该扩展支持多种Memcached协议版本，并提供了一些高级配置选项，以适应不同的应用场景。
- [examplecode/mproxy](https://github.com/examplecode/mproxy) ★992  
  这是一个基于Python的代理服务器，用于代理HTTP和HTTPS请求。它支持多种代理策略，如转发、修改请求头和响应体等。项目使用Python的`requests`库进行网络请求，并使用自定义的代理规则引擎处理请求。该代理服务器易于配置和扩展，可用于测试、安全和性能优化等场景。
- [krakjoe/apcu](https://github.com/krakjoe/apcu) ★988  
  这是一个用于在PHP应用程序中缓存数据的扩展库。它利用APCu扩展来提升应用性能，通过简单的API接口实现数据缓存和读取。主要使用PHP语言编写，并依赖APCu扩展。核心功能包括设置缓存键值对、获取缓存数据、删除缓存等操作。该库旨在提供一个易于使用的缓存解决方案，帮助开发者优化PHP应用程序的响应速度。
- [TurboVNC/turbovnc](https://github.com/TurboVNC/turbovnc) ★895  
  TurboVNC 是一个高性能的 VNC 服务器，旨在提供快速、可靠的远程桌面连接。它使用 C++ 编写，并利用多线程技术来处理多个并发连接。  该项目的核心功能是实现低延迟的远程桌面控制。  通过优化网络传输和本地处理，TurboVNC 能够提供流畅的远程操作体验，尤其适用于需要高性能的场景，例如远程游戏或图形设计工作。  项目包含了完整的服务器端和客户端组件，并支持多种平台。
- [meyerd/n2n](https://github.com/meyerd/n2n) ★883  
  这是一个基于Go语言的轻量级网络代理工具，用于在不同网络环境下建立安全的连接。它支持多种传输协议，例如TCP和UDP，并允许用户自定义配置以满足特定的网络需求。项目使用Go语言开发，并利用了Go的并发特性，以提高性能。核心模块包括连接管理、协议处理和安全加密等。该工具适用于需要跨越防火墙或访问受限网络的场景。
- [cx9208/Linux-NetSpeed](https://github.com/cx9208/Linux-NetSpeed) ★639  
  该项目提供了一个Linux下的网络速度测试工具。它使用C语言编写，基于Linux系统调用，直接测量网络接口的传输速率。  该工具可以测试不同网络条件下的下载和上传速度，并输出详细的测试结果。  通过简单的命令行界面，用户可以方便地执行测试并获取结果，例如测试带宽、延迟等指标。  项目包含了测试脚本和结果分析模块，方便用户进行数据分析和比较。
- [mkoppanen/php-zbarcode](https://github.com/mkoppanen/php-zbarcode) ★383  
  PHP-ZBarcode 是一个用于生成各种条形码的 PHP 库。它支持多种条形码类型，包括 UPC-A、UPC-E、EAN-13、EAN-8、Code 39、Code 128 等。该库使用纯 PHP 实现，无需外部依赖，易于集成到现有项目中。开发者可以通过简单的 API 调用生成不同类型的条形码图像，并可自定义条形码的尺寸、颜色等参数。
- [zcodes/IMESupport](https://github.com/zcodes/IMESupport) ★269  
  该项目提供了一个基于Python的IME（输入法编辑器）支持库。它允许用户在Python应用程序中使用各种输入法，简化了中文等语言的输入。该库使用PyQt5构建GUI界面，并通过与操作系统输入法服务的交互来实现输入法的切换和输入。核心功能包括：获取当前活动输入法、切换输入法、获取候选词列表以及处理输入事件等。
- [ndfred/iperf-ios](https://github.com/ndfred/iperf-ios) ★202 [`iperf`] [`iperf3`] [`network-analysis`] [`performance-testing`]  
  这是一个用于在iOS设备上进行网络性能测试的iperf客户端和服务器。该项目使用Swift语言开发，基于`Network.framework`实现网络通信，包含客户端和服务器端功能，可用于测试不同网络条件下的传输速率、延迟等指标。项目提供配置选项，允许用户自定义测试参数，例如带宽、数据包大小和测试持续时间。该项目结构清晰，代码注释完善，便于理解和维护。
- [xvsdf100/PCWeChatMore](https://github.com/xvsdf100/PCWeChatMore) ★54  
  PCWeChatMore 是一个增强版微信电脑客户端，提供更多功能和自定义选项。它基于 Chromium 框架，使用 JavaScript 和 Electron 技术，扩展了微信的原生功能，例如自定义主题、表情包管理、消息提醒设置等。用户可以通过修改配置文件来自定义界面和功能，提升使用体验。
- [arnaud-lb/php-inotify](https://github.com/arnaud-lb/php-inotify) ★46 [`inotify`] [`php`] [`php-inotify`]  
  这是一个使用PHP实现的inotify监控工具。它允许开发者实时监控文件系统事件，例如文件创建、修改和删除。该工具使用PHP的扩展来与inotify系统调用交互，并提供一个简单的API来处理事件。  开发者可以通过该库构建各种应用，例如实时文件同步、监控系统日志或构建基于文件事件的应用程序。
