# Go 仓库

- [fatedier/frp](https://github.com/fatedier/frp) ★95468 [`expose`] [`firewall`] [`frp`] [`go`] [`http-proxy`] [`nat`] [`p2p`] [`proxy`] [`reverse-proxy`] [`tunnel`]  
  frp是一个高性能的反向代理应用，用于内网穿透。它支持多种协议，如HTTP、TCP、UDP等。用户可以通过简单的配置将内网服务暴露到公网。frp使用Go语言开发，并基于高性能的网络库，实现了低延迟和高吞吐量。项目包含了客户端和服务端，并提供了多种部署方式，方便用户快速搭建和使用。
- [syncthing/syncthing](https://github.com/syncthing/syncthing) ★73029 [`go`] [`p2p`] [`peer-to-peer`] [`synchronization`]  
  Syncthing是一个开源的、分布式的文件同步工具。它允许用户在多台设备之间同步文件和文件夹，无需中央服务器。Syncthing使用基于Merkle树的协议进行高效的文件传输和同步，并支持多种平台。该项目主要使用Go语言开发，并包含一个功能强大的命令行界面和图形用户界面。其核心功能是实现跨平台的可靠文件同步，并保证数据完整性。
- [junegunn/fzf](https://github.com/junegunn/fzf) ★71270 [`bash`] [`cli`] [`fish`] [`fzf`] [`go`] [`neovim`] [`tmux`] [`unix`] [`vim`] [`zsh`]  
  fzf是一款快速、强大的命令行过滤工具。它利用模糊匹配算法，允许用户快速浏览和筛选长列表中的项目。用户可以通过输入关键词进行模糊搜索，并通过按键导航选择结果。fzf支持多种配置选项和插件，可以高度定制化。它主要使用C语言编写，并利用ncurses库进行终端交互。其核心功能是提供高效的命令行过滤机制，提升终端工具的可用性。
- [FiloSottile/mkcert](https://github.com/FiloSottile/mkcert) ★54043 [`certificates`] [`chrome`] [`firefox`] [`https`] [`ios`] [`linux`] [`local-development`] [`localhost`] [`macos`] [`root-ca`] [`tls`] [`windows`]  
  mkcert是一个用于生成本地TLS证书的工具。它允许开发人员在无需访问证书颁发机构的情况下，快速创建有效的TLS证书。该工具使用Go语言开发，并利用了crypto/x509和crypto/rand等标准库。  mkcert生成的证书用于测试和开发环境，无需配置复杂的证书颁发流程，极大地简化了本地HTTPS服务器的搭建。
- [rclone/rclone](https://github.com/rclone/rclone) ★51189 [`azure-blob`] [`azure-blob-storage`] [`azure-files`] [`backblaze-b2`] [`cloud-storage`] [`dropbox`] [`encryption`] [`ftp`] [`fuse-filesystem`] [`go`] [`golang`] [`google-cloud-storage`] [`google-drive`] [`onedrive`] [`openstack-swift`] [`rclone`] [`s3`] [`sftp`] [`sync`] [`webdav`]  
  rclone是一个命令行工具，用于在各种云存储服务（如Dropbox、Google Drive、Amazon S3）之间复制和同步文件。它支持多种协议，并提供强大的功能，例如跨平台支持、高级同步策略、自定义元数据等。该工具使用Go语言编写，并使用多线程和缓存技术来提高性能。rclone的核心功能是文件复制、同步和管理，为用户提供便捷的云存储管理方式。
- [go-gitea/gitea](https://github.com/go-gitea/gitea) ★49235 [`bitbucket`] [`cicd`] [`devops`] [`docker-registry-v2`] [`git`] [`git-gui`] [`git-server`] [`gitea`] [`github`] [`github-actions`] [`gitlab`] [`go`] [`golang`] [`hacktoberfest`] [`maven-server`] [`npm-registry`] [`vue`]  
  Gitea是一个自托管的Git服务，类似于GitHub。它允许用户创建、管理仓库、进行代码协作，并提供Web界面进行交互。Gitea使用Go语言开发，基于beego框架，并包含一个用于数据库交互的模块。项目包含用户管理、仓库管理、代码托管、issue跟踪等功能。
- [AlistGo/alist](https://github.com/AlistGo/alist) ★48839 [`file-server`] [`gin`] [`golang`] [`onedrive`] [`solidjs`] [`webdav`]  
  这是一个基于 Python 和 Flask 框架的个人文件管理工具，类似于 Dropbox 或 Google Drive。它允许用户上传、下载、同步和管理本地文件。项目使用 SQLite 数据库存储文件元数据，并提供 Web 界面进行操作。  用户可以通过 API 接口或 Web 界面访问和管理文件。  核心功能包括文件上传、下载、搜索、以及文件夹管理。  该项目旨在提供一个易于使用且功能强大的个人文件同步解决方案。
- [gogs/gogs](https://github.com/gogs/gogs) ★46536 [`docker`] [`git`] [`go`] [`gogs`] [`mysql`] [`postgresql`] [`raspberry-pi`] [`scip-enabled`] [`self-hosted`] [`sqlite3`]  
  Gogs是一个自托管的Git服务，类似于GitHub和GitLab。它使用Go语言开发，基于Web框架Gin。用户可以通过Web界面管理仓库、提交代码、查看提交历史等。Gogs支持多种身份验证方式，并提供丰富的配置选项，以满足不同用户的需求。它易于安装和使用，并提供良好的性能。
- [v2ray/v2ray-core](https://github.com/v2ray/v2ray-core) ★46132 [`golang`] [`http-proxy`] [`proxy`] [`shadowsocks`] [`socks`] [`socks5`] [`v2ray`] [`vmess`]  
  V2Ray-core 是一个开源的 V2Ray 服务器端程序，提供多种协议和配置选项，用于搭建安全的网络连接。它使用 C++ 编写，并支持多种平台，例如 Windows、macOS 和 Linux。该项目允许用户自定义配置以满足各种网络需求，包括 VPN 连接、代理服务器等。V2Ray-core 的核心功能是提供高速、安全的网络连接，并支持多种加密协议。
- [usememos/memos](https://github.com/usememos/memos) ★42083 [`docker`] [`go`] [`markdown`] [`memo`] [`microblog`] [`note-taking`] [`notecard`] [`react`] [`self-hosted`] [`social-network`] [`sqlite`]  
  这是一个用于创建和管理备忘录的应用程序。用户可以创建不同类型的备忘录（文本、待办事项、日程安排等），并设置提醒和标签进行组织。该应用使用React作为前端框架，并基于Node.js和Express.js搭建后端，利用MongoDB存储数据。  核心功能包括备忘录的创建、编辑、删除、搜索和分类。  用户可以通过Web界面访问和管理所有备忘录。
- [ehang-io/nps](https://github.com/ehang-io/nps) ★32948 [`dns`] [`firewall`] [`go`] [`gzip`] [`http`] [`https`] [`nat`] [`nps`] [`snnapy`] [`socks`] [`socks5`] [`ssh`] [`tcp`] [`tunnel`] [`udp`]  
  这是一个用于收集和分析客户净推荐值 (NPS) 数据的工具。它使用 Python 和 Flask 框架构建，提供用户友好的界面来创建调查，收集响应，并生成易于理解的 NPS 指标报告。该工具支持自定义调查问题和分析维度，并能将结果导出为各种格式，方便后续数据分析和业务决策。
- [schollz/croc](https://github.com/schollz/croc) ★30424 [`data-transfer`] [`file-sharing`] [`golang`] [`pake`] [`peer-to-peer`] [`tcp`] [`transfer`]  
  这是一个用于生成可定制的、基于文本的冒险游戏的工具。用户可以通过简单的文本描述定义游戏环境、角色和事件。该工具使用Python编写，并利用自定义的语法和解析器来处理输入，生成游戏逻辑和交互。  关键模块包括文本解析器、游戏状态管理和事件触发机制。  最终用户可以利用该工具快速创建和自定义自己的文本冒险游戏。
- [filebrowser/filebrowser](https://github.com/filebrowser/filebrowser) ★29802 [`administrator`] [`extension`] [`filemanager`] [`gui`] [`interface`] [`plugin`] [`vuejs`] [`web`]  
  这是一个用于浏览和管理文件的Web应用程序。它使用Python和Flask框架构建，提供文件上传、下载、删除、重命名等基本操作。用户可以通过Web界面直观地查看和操作文件，支持多种文件类型。项目包含用户认证模块，确保文件访问权限安全。
- [iawia002/lux](https://github.com/iawia002/lux) ★29773 [`bilibili`] [`crawler`] [`download`] [`downloader`] [`go`] [`golang`] [`iqiyi`] [`qq`] [`scraper`] [`tumblr`] [`video`] [`youku`] [`youtube`]  
  这是一个用于处理 Lux 文件格式的 Python 库。它允许解析和生成 Lux 文件，支持各种 Lux 元素，例如几何体、材质和光源。库使用 Python 和 `PyOpenGL`，并提供易于使用的 API 用于高效地创建和操作 Lux 场景。  该项目旨在为 Lux 文件提供便捷的读取和写入功能，方便用户在 Python 环境中进行 3D 场景的处理和渲染。
- [juanfont/headscale](https://github.com/juanfont/headscale) ★29331 [`tailscale`] [`tailscale-control-server`] [`tailscale-server`] [`wireguard`]  
  Headscale是一个易于使用的本地VPN服务器，允许用户轻松创建和管理安全的VPN连接。它使用Go语言开发，并基于Docker容器运行。核心功能包括快速设置VPN服务器、支持多种VPN协议（如WireGuard、OpenVPN），以及提供易于使用的Web控制台。用户可以通过Web界面管理连接、用户和策略，无需复杂的配置。项目旨在提供一个简单的VPN解决方案，方便个人和小型团队使用。
- [Wox-launcher/Wox](https://github.com/Wox-launcher/Wox) ★25756 [`alfred`] [`launcher`] [`launchy`] [`linux`] [`macos`] [`raycast`] [`spotlight`] [`windows`] [`wox`]  
  Wox是一个快速启动应用程序和文件的本地搜索工具。它允许用户通过文本搜索本地文件系统、应用程序、网址和其他资源。Wox使用Lua脚本进行配置和扩展，并提供一个易于使用的GUI。项目主要使用C++编写，并结合了Qt框架。核心功能包括文件搜索、应用启动、网址访问等，并支持自定义搜索结果和扩展。
- [inconshreveable/ngrok](https://github.com/inconshreveable/ngrok) ★24354  
  该项目是一个用于本地网络服务的反向代理工具，允许外部访问本地运行的应用程序或服务。它通过建立一个安全的隧道，将本地端口映射到公网地址，方便开发、测试和调试。主要使用Go语言开发，并提供多种平台支持。关键模块包括网络连接管理和安全协议处理，以确保连接的稳定性和安全性。
- [cloudreve/cloudreve](https://github.com/cloudreve/cloudreve) ★23809 [`cloud`] [`cloud-storage`] [`cloudreve`] [`file`] [`file-manager`] [`file-sharing`] [`golang`]  
  Cloudreve是一个开源的私有云存储服务器，用户可以通过Web界面访问和管理文件。它支持多种文件上传方式，包括拖拽、WebDAV、FTP等，并提供文件共享、版本控制等功能。项目使用Go语言开发，基于Gin框架，并整合了多种存储后端，如本地磁盘、对象存储等，以满足不同需求。  核心功能包括文件管理、用户权限控制、安全防护以及便捷的访问方式。
- [binwiederhier/ntfy](https://github.com/binwiederhier/ntfy) ★23683 [`curl`] [`notifications`] [`ntfy`] [`ntfysh`] [`pubsub`] [`push-notifications`] [`rest-api`]  
  ntfy 是一个轻量级、可定制的通知服务，用于在各种平台（例如 Discord、Telegram、电子邮件）上发送通知。它支持多种配置选项，允许用户自定义通知内容、触发条件和接收渠道。该服务使用 Python 和 Flask 构建，并利用 Redis 存储和管理消息队列。  核心功能包括实时事件监控和灵活的通知规则定义。
- [tailscale/tailscale](https://github.com/tailscale/tailscale) ★23289 [`2fa`] [`oauth`] [`sso`] [`tailscale`] [`vpn`] [`wireguard`]  
  Tailscale 是一个快速、安全的虚拟专用网络 (VPN)，用于连接你的设备和服务器。它使用 UDP 和 TLS 进行加密连接，并支持多种平台。该项目使用 Go 语言开发，核心模块包括连接管理、隧道建立和安全协议处理。Tailscale 旨在简化跨平台网络连接，并提供易于使用的客户端。
- [containrrr/watchtower](https://github.com/containrrr/watchtower) ★22448 [`automation`] [`continuous-delivery`] [`devops`] [`docker`] [`hacktoberfest`] [`notifications`] [`receive-notifications`] [`registry`] [`update-checker`] [`watchtower`]  
  Watchtower是一个轻量级的容器守护进程，用于在容器启动后执行自定义命令或脚本。它通过一个简单的守护进程模型，在容器启动后运行指定的命令，并监控容器状态，在容器停止时执行相应的操作。Watchtower使用Go语言编写，并支持多种操作系统。它主要功能是简化容器生命周期管理，例如执行初始化脚本、资源监控和清理等，从而提高容器的可靠性和效率。
- [XIU2/CloudflareSpeedTest](https://github.com/XIU2/CloudflareSpeedTest) ★21982 [`cdn`] [`cloudflare`] [`go`] [`golang`] [`speedtest`]  
  CloudflareSpeedTest 提供了一个简单的命令行工具，用于测试各种 Cloudflare 速度。它使用 `curl` 发送请求，并解析响应以提取关键信息，如延迟、下载速度和上传速度。该工具支持多种参数配置，例如测试不同地区的服务器，并输出可自定义格式的测试结果。  项目使用 Python 编写，并依赖于 `requests` 库进行网络请求。  主要功能模块包括请求发送、结果解析和输出格式化。
- [lionsoul2014/ip2region](https://github.com/lionsoul2014/ip2region) ★17923 [`c`] [`clang`] [`golang`] [`ip-address`] [`ip-address-database`] [`ip-address-location`] [`ip-location`] [`ip-lookup`] [`java`] [`lua`] [`lua-extension`] [`php`] [`rust`] [`xdb-engine`]  
  该项目是一个高性能IP地址定位库，用于快速将IP地址映射到对应的地理位置。它使用了一种基于多级树结构的算法，显著提升了查询速度。主要使用Java开发，并提供多种数据格式和查询方式，支持多种操作系统。该库广泛应用于网络应用中，例如日志分析、用户地理位置追踪等场景。
- [ginuerzh/gost](https://github.com/ginuerzh/gost) ★16873 [`dns`] [`go`] [`golang`] [`http2`] [`kcp`] [`obfs4`] [`quic`] [`shadowsocks`] [`sni`] [`socks5`] [`ssh`] [`tls`] [`tunnel`] [`tuntap`] [`udp`]  
  GoST是一个Go语言编写的工具，用于生成Go语言代码的测试用例。它支持多种测试类型，包括单元测试、集成测试和性能测试，并提供可配置的测试数据生成器。主要使用Go语言和标准库进行开发，并包含一个自定义的测试用例生成器模块。该工具旨在提高Go项目的测试覆盖率和代码质量，并简化测试用例的编写。
- [chaitin/SafeLine](https://github.com/chaitin/SafeLine) ★16872 [`api-gateway`] [`application-security`] [`appsec`] [`blueteam`] [`bruteforce`] [`captcha`] [`cve`] [`cybersecurity`] [`firewall`] [`hackers`] [`http-flood`] [`security`] [`self-hosted`] [`sql-injection`] [`vulnerability`] [`waf`] [`web-application-firewall`] [`web-security`] [`websecurity`] [`xss`]  
  SafeLine是一个基于深度学习的恶意软件检测系统。它使用PyTorch框架，结合卷积神经网络（CNN）和循环神经网络（RNN）来分析二进制文件，识别恶意行为。系统主要由特征提取、模型训练和预测三个模块组成，能够有效地检测各种类型的恶意软件，并提供实时威胁分析。
- [apernet/hysteria](https://github.com/apernet/hysteria) ★16664 [`censorship-circumvention`] [`golang`] [`http-proxy`] [`hysteria`] [`proxy`] [`quic`] [`relay`] [`reliable-udp`] [`socks5`] [`tun`] [`vpn`]  
  Hysteria是一个用于构建高性能、可扩展的网络应用程序的代理服务器。它使用Go语言开发，基于HTTP/2协议，并包含一个可配置的缓存层，以提高响应速度和减少带宽消耗。该项目旨在为需要处理大量并发连接的应用提供高效的代理能力。  通过自定义路由规则、请求重定向和负载均衡，Hysteria 可以轻松集成到各种微服务架构中。
- [snail007/goproxy](https://github.com/snail007/goproxy) ★16403 [`dns-proxy`] [`encryption-proxy`] [`http`] [`http-proxy`] [`https-proxy`] [`kcptun`] [`reverse-proxy`] [`socket`] [`socks5`] [`socks5-proxy`] [`ss-proxy`] [`tcp`] [`tcp-proxy`] [`tls`] [`tls-proxy`] [`transparent-proxy`] [`udp`] [`udp-proxy`] [`upstream-proxies`] [`websocket-proxy`]  
  这是一个Go语言编写的HTTP代理服务器。它提供反向代理、负载均衡和缓存功能。使用Go语言的net/http包实现，并结合一些常用的库，如`sync.Pool`和`sync.Map`来提升性能。该项目主要用于构建高性能的HTTP代理服务，方便用户转发和缓存HTTP请求。
- [ory/hydra](https://github.com/ory/hydra) ★16294 [`authorization`] [`cloud`] [`docker`] [`federation`] [`hacktoberfest`] [`hydra`] [`identity`] [`oauth`] [`oauth-provider`] [`oauth2`] [`oauth2-provider`] [`oauth2-server`] [`oidc`] [`openid`] [`openid-connect`] [`openid-connect-provider`] [`openid-provider`] [`security`] [`server`] [`sso`]  
  这是一个用于构建和运行微服务的开源平台。Hydra 使用 Go 语言开发，并基于 Kubernetes，提供服务发现、负载均衡、路由和健康检查等功能。开发者可以使用声明式配置来定义服务和依赖关系，简化微服务架构的部署和管理。  它支持多种协议，如 gRPC 和 HTTP，并允许用户轻松扩展和自定义。
- [jeessy2/ddns-go](https://github.com/jeessy2/ddns-go) ★14600 [`alidns`] [`baiduyun`] [`cloudflare`] [`ddns`] [`ddns-go`] [`dnspod`] [`godaddy-ddns`] [`google-domains`] [`porkbun`]  
  这是一个使用Go语言编写的动态域名服务（DDNS）工具。它支持多种DDNS服务提供商，例如阿里云、腾讯云、华为云等。该工具通过轮询获取公网IP地址，并自动更新DDNS记录，以确保域名始终指向正确的IP地址。项目使用Go语言开发，并利用`net`和`http`等标准库，以及`github.com/miekg/dns`等第三方库进行DNS解析和更新操作。  该项目旨在提供一个简单易用的DDNS解决方案，方便用户维护动态IP地址的域名映射。
- [coredns/coredns](https://github.com/coredns/coredns) ★13106 [`cncf`] [`coredns`] [`dns-server`] [`go`] [`plugin`] [`service-discovery`]  
  CoreDNS是一个高性能、可扩展的DNS服务器。它使用Go语言编写，并支持多种DNS协议和功能，例如缓存、转发、负载均衡、健康检查等。CoreDNS通过插件机制灵活扩展，可根据不同需求定制DNS服务。  项目提供了丰富的插件库，方便用户快速构建符合自身需求的DNS解决方案。  它在Kubernetes等容器化平台中被广泛应用，以提供可靠的DNS服务。
- [gotify/server](https://github.com/gotify/server) ★12892 [`api`] [`cloud`] [`free-software`] [`golang`] [`gotify`] [`hosting`] [`javascript`] [`notifications`] [`privacy`] [`react`] [`self-hosted`] [`self-hosting`] [`selfhosted`]  
  Gotify Server是一个开源的、基于Go语言的即时消息推送服务器。它允许用户接收来自各种应用程序和服务的通知，例如邮件、短信、聊天应用等。Gotify使用REST API提供消息推送功能，并支持多种客户端应用。该服务使用Go语言开发，并采用轻量级架构，保证高性能和可靠性。  主要功能包括用户管理、消息路由和推送，以及API接口。
- [tinode/chat](https://github.com/tinode/chat) ★12581 [`chat`] [`chat-application`] [`chatapp`] [`chatbots`] [`chatserver`] [`collaboration`] [`go`] [`golang`] [`instant-messaging`] [`messaging`] [`messaging-api`] [`messenger`] [`telegram`] [`video-call`] [`video-chat`] [`video-conferencing`] [`webchat-server`] [`webrtc`] [`whatsapp`] [`xmpp`]  
  这是一个开源的即时通讯平台，基于WebSockets协议，提供可靠的实时消息传递。它使用Go语言开发，采用模块化设计，包含服务器端和客户端库，支持多种平台和设备。该平台易于扩展和定制，适合构建各种需要实时通信的应用，例如聊天室、协作工具等。
- [peterq/pan-light](https://github.com/peterq/pan-light) ★12133 [`baiduyun`] [`golang`] [`qml`] [`qt5`]  
  这是一个轻量级的、基于Python的Pan-STARRS光学巡天数据处理工具。它提供高效的图像处理和数据提取功能，用于从Pan-STARRS数据中提取星系、恒星等天体信息。该工具使用Astropy库进行天文数据处理，并基于NumPy和SciPy进行数值计算，以实现快速、准确的数据分析。  项目包含预处理、目标识别和分类等模块，可用于科学研究和探索。
- [casdoor/casdoor](https://github.com/casdoor/casdoor) ★11773 [`auth`] [`authentication`] [`authn`] [`casbin`] [`casdoor`] [`faceid`] [`iam`] [`kerberos`] [`ldap`] [`mfa`] [`oauth`] [`oidc`] [`payment-gateway`] [`radius`] [`saml`] [`scim`] [`single-sign-on`] [`sso`] [`totp`] [`webauthn`]  
  Casdoor 是一个开源的、易于使用的、高度可定制的单点登录 (SSO) 和身份访问管理 (IAM) 平台。它支持各种身份验证方式，并提供细粒度的权限控制。Casdoor 使用 Go 语言开发，基于 Gin 框架构建，并包含用户管理、角色管理、权限管理、API 管理等核心模块。 通过简洁的 API 接口和友好的 Web 管理界面，Casdoor 能够快速搭建安全可靠的企业级应用。
- [fullstorydev/grpcurl](https://github.com/fullstorydev/grpcurl) ★11718 [`golang`] [`grpc`] [`protobuf`]  
  grpcurl是一个用于与gRPC服务交互的命令行工具。它支持多种功能，例如发送请求、查看响应、调试gRPC服务。使用Go语言开发，并基于标准库和一些辅助库构建，提供简洁易用的命令行接口，方便用户快速测试和调试gRPC服务。  grpcurl支持多种gRPC协议，并能处理各种数据类型，包括protobuf和json。
- [cloudflare/cloudflared](https://github.com/cloudflare/cloudflared) ★10885 [`argo-tunnel`] [`cloudflare`] [`cloudflare-tunnel`] [`reverse-proxy`] [`zero-trust-network-access`]  
  Cloudflared是一个轻量级、跨平台的工具，用于安全地连接本地应用程序到Cloudflare网络。它使用加密连接，允许在本地运行的应用程序安全地访问Cloudflare网络上的服务，例如Cloudflare Workers和Cloudflare Pages。Cloudflared使用Go语言编写，并利用TLS/UDP隧道进行连接，提供高性能和安全性。其核心功能包括本地应用程序的代理、TLS证书管理和连接配置。
- [therecipe/qt](https://github.com/therecipe/qt) ★10679 [`android`] [`asteroidos`] [`cross-platform-gui`] [`felgo`] [`freebsd`] [`go`] [`golang`] [`gui-framework`] [`ios`] [`javascript`] [`linux`] [`macos`] [`qt`] [`raspberry-pi`] [`sailfish-os`] [`ubuntu-touch`] [`webassembly`] [`windows`]  
  这是一个基于Qt框架的跨平台食谱管理应用程序。用户可以创建、编辑和组织食谱，包括添加食材、步骤、图片和营养信息。该应用使用Qt的UI框架构建，并通过SQLite数据库存储食谱数据，确保跨平台兼容性。  用户界面直观易用，支持多种操作，例如搜索食谱、按类别筛选和排序。
- [Mrs4s/go-cqhttp](https://github.com/Mrs4s/go-cqhttp) ★10552 [`bot`] [`coolq`] [`coolq-http-api`] [`qqbot`] [`qqrobot`]  
  这是一个基于Golang的轻量级CQHTTP机器人框架。它允许开发者快速构建QQ机器人，支持多种功能，如消息接收、发送、自定义事件处理等。项目使用Golang语言开发，并基于Gin框架构建API路由，提供简洁易用的接口。核心模块包括事件处理、消息发送和插件机制，方便扩展和定制。
- [gravitl/netmaker](https://github.com/gravitl/netmaker) ★10374 [`cloud`] [`devsecops`] [`k8s`] [`kubernetes`] [`mesh`] [`mesh-network`] [`network`] [`networking`] [`overlay-network`] [`security`] [`self-hosted`] [`virtual-network`] [`virtual-networking`] [`vpn`] [`vpn-server`] [`wg-quick`] [`wireguard`] [`wireguard-ui`] [`wireguard-vpn`] [`zero-trust`]  
  NetMaker是一个用于创建和管理网络连接的工具，支持多种网络协议和配置。它使用Python语言开发，基于`paramiko`库进行远程连接，并利用`fabric`框架简化部署流程。项目提供命令行接口，方便用户快速创建、配置和管理虚拟网络。主要功能包括创建虚拟网络接口（如VLAN）、配置IP地址和路由，以及执行网络命令。
- [claudiodangelis/qrcp](https://github.com/claudiodangelis/qrcp) ★10214 [`cli`] [`command-line`] [`golang`] [`qrcode`] [`utility`]  
  这是一个用于快速创建Qt Quick应用程序的命令行工具。它使用Qt Quick和QML来生成用户界面，并支持多种布局和组件。该工具使用Python编写，并利用Qt的QML引擎进行渲染。  用户只需提供简单的JSON配置文件即可生成完整的Qt Quick应用程序，包括界面布局、组件和事件处理。  该项目旨在简化Qt Quick应用程序的开发流程，提高效率。
- [OpenListTeam/OpenList](https://github.com/OpenListTeam/OpenList) ★9267 [`alist`] [`aliyunpan`] [`baidupan`] [`openlist`]  
  OpenList是一个开源的、基于Python的待办事项列表应用。它使用Flask框架构建，提供用户友好的Web界面，允许用户创建、编辑和删除待办事项。用户可以对任务进行优先级排序和设置截止日期。项目使用SQLite数据库存储数据，并提供简单的API接口，方便集成到其他应用中。
- [0xJacky/nginx-ui](https://github.com/0xJacky/nginx-ui) ★8872 [`chatgpt-app`] [`code-completion`] [`copilot`] [`cron`] [`deepseek-r1`] [`docker`] [`go`] [`letsencrypt`] [`linux`] [`macos`] [`mcp`] [`mcp-server`] [`nginx`] [`self-hosted`] [`vue`] [`webui`] [`windows`]  
  这是一个基于Nginx的Web管理工具，提供用户友好的界面管理Nginx配置。它使用Python编写，基于Flask框架构建，并集成了一些常用的Nginx配置管理功能，例如虚拟主机、服务器块、访问控制等。用户可以通过Web界面轻松地编辑和管理Nginx服务器，无需手动编辑配置文件。该项目旨在简化Nginx服务器的维护和配置。
- [cyfdecyf/cow](https://github.com/cyfdecyf/cow) ★8458  
  这是一个用于在Linux系统上管理和监控CPU、内存、网络等系统资源的工具。它使用Go语言开发，通过简单的命令行界面提供实时监控功能。该工具主要模块包括资源监控模块和报警模块，可自定义监控指标和报警阈值，并支持将监控数据以图表形式展示。 通过监控关键资源指标，该工具有助于及时发现系统性能瓶颈，并进行相应的调整。
- [mindoc-org/mindoc](https://github.com/mindoc-org/mindoc) ★7648 [`beego`] [`document`] [`go`] [`golang`] [`mindoc`] [`smartwiki`]  
  Mindoc是一个用于生成Org-mode文档的工具。它将Markdown文档转换为Org-mode格式，并支持自定义模板和配置。该工具使用Python编写，利用Markdown库解析Markdown文档，并通过自定义的转换逻辑生成Org-mode文档。  核心功能包括Markdown到Org-mode的格式转换、主题模板支持和配置选项，方便用户将Markdown文档转化为结构化的Org-mode文档，提高文档的可读性和可维护性。
- [putyy/res-downloader](https://github.com/putyy/res-downloader) ★7474 [`douyin`] [`kuaishou`] [`res-downloader`] [`wechat`] [`wechat-video`] [`xiaohongshu`]  
  该项目是一个用于下载资源的工具，支持从各种来源（如GitHub Releases、网站等）下载文件和文件夹。它使用Python编写，并利用`requests`库进行网络请求。项目包含清晰的命令行界面，允许用户指定下载目标、源链接和保存路径等参数。该工具主要用于自动化下载，提高下载效率。
- [lxn/walk](https://github.com/lxn/walk) ★6984 [`declarative`] [`declarative-ui`] [`go`] [`gui`] [`gui-toolkit`] [`win32`] [`windows`] [`windows-desktop`]  
  这是一个用于在 Linux 系统上模拟和控制漫游器（例如机器人）的 Python 项目。它使用 Pygame 作为图形界面库，并通过 `subprocess` 模块与底层控制硬件进行交互。项目包含了基本的漫游器控制功能，例如移动、旋转和传感器模拟。  该项目旨在提供一个易于使用的框架，帮助用户快速原型化和测试漫游器控制算法。
- [Hackl0us/GeoIP2-CN](https://github.com/Hackl0us/GeoIP2-CN) ★6975 [`clash`] [`geoip`] [`geoip2`] [`proxy`] [`quantumultx`] [`shadowrocket`] [`shadowsocks`] [`surge`]  
  GeoIP2-CN 是一个基于 GeoLite2 数据库的中国地区 IP 地址地理位置查询工具。它使用 Python 编写，并利用 `geoip2` 库进行 IP 地址解析。该工具能够快速准确地获取 IP 地址的省份、城市等地理信息。  项目提供命令行接口，方便用户批量查询，并支持自定义输出格式，例如 JSON。  该工具适用于需要 IP 地址地理位置信息的各种应用场景，例如网络安全分析、用户行为分析等。
- [certimate-go/certimate](https://github.com/certimate-go/certimate) ★6928 [`acme`] [`automation`] [`certbot`] [`hacktoberfest`] [`https`] [`https-certificate`] [`lego`] [`letsencrypt`] [`ssl`] [`ssl-cert`] [`ssl-certificate`] [`ssl-certificates`]  
  Certimate-Go 是一个用于生成和验证证书的 Go 语言库。它提供易于使用的 API，支持多种证书格式（例如 PEM、DER），并包含验证证书链和有效性的功能。该库使用标准的 Go 语言库，并专注于高效和可靠的证书处理。  它可以用于构建需要证书管理功能的应用程序，例如安全通信和身份验证系统。
- [ViRb3/wgcf](https://github.com/ViRb3/wgcf) ★6828 [`client`] [`cloudflare`] [`plus`] [`security`] [`vpn`] [`warp`] [`wireguard`]  
  这是一个用于生成高质量WGCF (Web Graphic Conversion Format) 文件的工具。它使用 Python 和 Pillow 库，可以将多种图像格式（如 PNG、JPEG 等）转换为 WGCF 格式，并支持自定义参数，例如压缩级别和颜色深度。  该工具主要用于游戏开发，方便开发者将图像资源转换为 WGCF 格式，以优化游戏性能和资源占用。  它提供命令行接口，易于集成到现有工作流程中。
- [nxtrace/NTrace-core](https://github.com/nxtrace/NTrace-core) ★6734 [`api`] [`as-path`] [`asn-lookup`] [`geoip`] [`geolocation`] [`ip-lookup`] [`network-analysis`] [`next-trace`] [`nexttrace`] [`traceroute`] [`utility`]  
  NTrace-core 是一个用于追踪和分析 .NET 应用程序性能的开源工具。它使用 .NET Core 和事件源模式，通过拦截和记录应用程序的各种事件（例如方法调用、异常、资源使用等），来提供详细的性能数据。用户可以通过可视化界面或API访问这些数据，从而识别性能瓶颈和优化代码。该项目主要由 C# 编写，并包含一个核心追踪模块和一个用于数据可视化的UI组件。
- [ouqiang/gocron](https://github.com/ouqiang/gocron) ★6133 [`cron`] [`crontab`] [`golang`] [`scheduler`]  
  GoCron是一个用于Go语言的定时任务库，提供简单易用的API创建和管理定时任务。它基于时间轮算法实现，支持多种时间表达式格式，例如cron表达式，并能灵活配置任务执行间隔和重试机制。该库使用Go语言编写，并通过`sync.Map`管理任务，提高了并发性能。  该项目的目标是提供一个轻量级、高效的定时任务解决方案，方便Go开发者快速集成定时任务功能。
- [jpillora/cloud-torrent](https://github.com/jpillora/cloud-torrent) ★6005 [`cloud`] [`golang`] [`self-hosted`] [`torrent`] [`torrent-client`]  
  这是一个基于Python和Flask框架的云端BitTorrent客户端。它允许用户在云端存储和管理BitTorrent下载任务，并提供Web界面进行控制。该项目使用`requests`库进行HTTP通信，`bencode`库处理BT协议，并使用数据库（如SQLite）持久化下载任务信息。用户可以通过Web界面查看下载进度、暂停/恢复下载以及管理种子文件。
- [gdy666/lucky](https://github.com/gdy666/lucky) ★5894 [`acme`] [`aliyunpan`] [`cron`] [`ddns`] [`dynadot`] [`filebrowser`] [`ftp`] [`ipv6`] [`socat`] [`stun`] [`vercel`] [`volcengine`] [`webdav`] [`wol`]  
  这是一个基于Python的幸运抽奖程序。它使用随机数生成器实现公平的抽奖，并支持多种抽奖方式，例如按权重抽奖和指定人数抽奖。程序提供命令行界面，方便用户操作和配置。项目使用Python语言开发，核心功能模块包括随机数生成、权重计算和结果输出。程序易于扩展和定制，可用于各种抽奖场景。
- [openark/orchestrator](https://github.com/openark/orchestrator) ★5683 [`high-availability`] [`management-system`] [`mysql`] [`replication`]  
  这是一个用于构建和管理基于Kubernetes的微服务应用的编排器。它使用Go语言和Kubernetes API进行开发，提供声明式配置和自动化部署功能。核心功能包括：应用定义、服务发现、部署管理和监控。用户可以通过YAML文件定义应用及其依赖关系，编排器自动创建和管理Kubernetes资源，实现应用的快速部署和扩展。
- [iyear/tdl](https://github.com/iyear/tdl) ★5548 [`bash`] [`download`] [`downloader`] [`telegram`] [`telegram-api`] [`telegram-bot`] [`telegram-bots`] [`telegram-channel`] [`telegram-userbot`]  
  这是一个用于时间序列数据的轻量级、高性能的 Python 库。它提供高效的数据加载、预处理和可视化功能。核心功能包括：从各种格式（CSV、TSV、数据库等）加载时间序列数据；支持多种数据预处理操作，例如缺失值填充、数据标准化和特征工程；以及提供直观的绘图工具，方便用户快速分析时间序列数据。该库主要使用 Python 和 Pandas 构建，并包含一个用于数据可视化的自定义模块。
- [Ackites/KillWxapkg](https://github.com/Ackites/KillWxapkg) ★5007  
  这是一个用于在微信小程序中批量删除指定包名的功能。通过命令行工具，用户可以指定小程序包名和目标文件夹，脚本将自动查找并删除对应包名的所有文件。该工具使用Python编写，并利用`os`模块进行文件操作， `shutil`模块进行文件夹操作，提高了批量删除的效率和准确性。
- [wxbool/video-srt-windows](https://github.com/wxbool/video-srt-windows) ★4943 [`ffmpeg`] [`go`] [`golang`] [`srt-subtitles`] [`video`] [`windows-gui`]  
  这是一个用于在Windows系统上将视频转换为带有字幕的 SRT 文件的工具。它使用FFmpeg库进行视频解码和字幕提取，并输出标准化的 SRT 格式字幕文件。该工具主要由Python编写，并利用 `subprocess` 模块来调用 FFmpeg 命令行工具。  项目提供简单的命令行接口，方便用户快速处理视频文件。
- [ngoduykhanh/wireguard-ui](https://github.com/ngoduykhanh/wireguard-ui) ★4732 [`wireguard`] [`wireguard-admin`] [`wireguard-config-gen`] [`wireguard-go`] [`wireguard-ui`] [`wireguard-vpn`] [`wireguard-web`]  
  这是一个基于Electron的WireGuard客户端图形化界面。用户无需命令行操作即可轻松配置和管理WireGuard连接。该项目使用TypeScript和React开发，并包含一个用于连接管理、日志记录和配置的直观用户界面。  它支持多种WireGuard协议配置选项，并提供连接状态监控功能。
- [tickstep/aliyunpan](https://github.com/tickstep/aliyunpan) ★4657 [`adrive`] [`backup`] [`linux`] [`macos`] [`sync`] [`windows`]  
  该项目提供阿里云盘文件管理工具，支持批量上传、下载、删除文件和文件夹。使用Python语言和requests库进行网络请求，并结合多线程技术提升效率。项目包含清晰的代码注释和详细的文档，方便用户理解和使用。
- [hacdias/webdav](https://github.com/hacdias/webdav) ★4478 [`filesystem`] [`go`] [`http`] [`server`] [`webdav`]  
  这是一个WebDAV服务器，使用Go语言开发，基于gorilla/mux进行路由管理。它提供文件上传、下载、删除、移动等基本WebDAV功能。项目使用标准的WebDAV协议，支持多种客户端访问。  该服务器易于部署和配置，适合搭建个人或小型团队的文件共享服务。
- [lwch/natpass](https://github.com/lwch/natpass) ★4419 [`code-server`] [`golang`] [`protobuf`] [`shell`] [`tls`] [`vnc`]  
  NatPass 是一个用于轻松管理 NAT 穿透连接的工具。它使用简单的命令行界面，支持多种协议（例如 UDP、TCP），并能自动检测和配置合适的端口转发规则，从而实现不同网络环境下的连接。该项目主要使用 Python 语言开发，并利用了 `socket` 模块进行网络通信，`argparse` 模块处理命令行参数， `threading` 模块实现多线程操作。  核心功能包括连接建立、断开和状态监控。
- [sjqzhang/go-fastdfs](https://github.com/sjqzhang/go-fastdfs) ★4058 [`breakpoint-resume`] [`cloud-storage`] [`cloudnative`] [`distributed-file-storage`] [`distributed-file-system`] [`fastdfs`] [`file-system`] [`fileserver`] [`filesystem`] [`go`] [`go-fastdfs`] [`godfs`] [`object-storage-service`] [`oss`] [`rsync`] [`small-file-merge`] [`storage`] [`storage-servers`] [`sync`] [`tus`]  
  这是一个基于Go语言实现的FastDFS客户端库。  该库提供便捷的API接口，用于连接和管理FastDFS服务器，包括文件上传、下载、删除和元数据操作。  主要使用Go语言进行开发，并遵循清晰的模块化设计，方便用户集成到自己的应用中。  核心功能包括文件上传、下载、删除、元数据获取等，并支持多种文件格式。  该库旨在简化与FastDFS的交互，提高开发效率。
- [fanpei91/torsniff](https://github.com/fanpei91/torsniff) ★4010 [`bep0003`] [`bep0005`] [`bep0009`] [`bep0010`] [`bittorrent-protocol`] [`dht`] [`golang`] [`metadata`]  
  这是一个用于嗅探和分析Tor流量的工具。它使用Python编写，基于Scapy库进行数据包捕获和处理。核心功能包括识别Tor节点、分析流量路径、提取隐藏服务地址等。该工具可以帮助安全研究人员和网络分析人员更好地理解Tor网络的运作方式，并检测潜在的安全威胁。
- [kingparks/cursor-vip](https://github.com/kingparks/cursor-vip) ★3978 [`cursor`] [`cursor-pro`]  
  这是一个用于快速构建VIP用户管理系统的Python项目。它使用Flask框架，提供用户注册、登录、权限管理和数据访问功能。核心功能包括VIP用户等级设定、积分管理、个性化服务推送等。项目采用SQLAlchemy进行数据库操作，并使用JWT进行身份验证。代码结构清晰，易于扩展和维护。
- [goravel/goravel](https://github.com/goravel/goravel) ★3883 [`framework`] [`go`] [`golang`] [`laravel`] [`performance`] [`web`]  
  Goravel 是一个基于 Laravel 的 Go 语言 Web 框架。它允许开发者使用 Go 语言构建 Laravel 应用，利用 Laravel 的生态系统和丰富的组件。该项目使用 Go 语言编写，并使用 Gin 作为 Web 框架，结合 Laravel 的 Eloquent ORM，提供类似 Laravel 的开发体验。核心功能包括路由、控制器、模型和数据库迁移等，旨在将 Go 语言的性能优势与 Laravel 的开发效率结合。
- [qjfoidnh/BaiduPCS-Go](https://github.com/qjfoidnh/BaiduPCS-Go) ★3655 [`baidupcs`]  
  BaiduPCS-Go 是一个用于访问百度网盘的 Go 语言客户端。它使用 Go 语言开发，并基于百度网盘的 API 进行访问。用户可以通过该客户端进行文件上传、下载、管理等操作。该项目支持多线程下载，并提供命令行界面，方便用户在终端进行操作。  它主要由网络请求模块和命令行交互模块组成，并包含文件操作和日志记录等辅助功能。
- [TruthHun/BookStack](https://github.com/TruthHun/BookStack) ★3477 [`beego`] [`bookstack`] [`gitbook`] [`golang`] [`markdown`] [`mindoc`]  
  BookStack 是一个开源的知识库管理系统，用于组织和分享各种文档、笔记和项目信息。它提供直观的页面编辑和丰富的自定义选项，方便用户创建、管理和搜索不同类型的知识库。该项目使用 Python 和 Flask 框架构建，并结合了数据库和模板引擎，以实现高效的文档管理和交互。用户可以通过简单的网页界面创建、编辑和组织文档，并进行权限控制。
- [greycodee/wechat-backup](https://github.com/greycodee/wechat-backup) ★3361  
  这是一个用于备份微信聊天记录的工具。它使用Python和WeChat API实现，可以将微信聊天记录导出为JSON格式。  该项目支持多账号备份，并提供命令行界面，方便用户操作。  核心功能包括选择要备份的聊天对象和导出文件路径配置。  项目代码结构清晰，易于扩展和维护。
- [fagongzi/manba](https://github.com/fagongzi/manba) ★3309 [`api`] [`api-gateway`] [`backend-apis`] [`circuit-breaker`] [`etcd`] [`gateway`] [`go`] [`golang`] [`microservice`] [`proxy`] [`traffic-control`]  
  这是一个用于批量管理和操作漫画资源的工具。它使用Python和PyQt5构建，提供GUI界面方便用户批量下载、转换漫画格式（如CBZ/CBR转为PDF），以及批量重命名漫画文件。该工具支持自定义下载路径、文件名规则和转换参数，提高漫画资源管理效率。核心功能包括下载、格式转换和重命名，并提供可配置的输出目录和文件名模板。
- [eyebluecn/tank](https://github.com/eyebluecn/tank) ★3138 [`golang`] [`linux`] [`storage`]  
  该项目是一个用于坦克游戏AI控制的Python库。它使用PyGame作为渲染引擎，实现了基于规则的AI算法，让坦克能够自主寻找并攻击敌人。代码包含基本的坦克移动、射击逻辑以及碰撞检测机制。  主要使用Python语言，Pygame库进行游戏开发，并设计了简单的AI决策模块。 该库易于扩展，可用于开发更复杂的坦克游戏或其他类似的AI控制项目。
- [eolinker/goku_lite](https://github.com/eolinker/goku_lite) ★3130 [`api`] [`api-gateway`] [`gateway`] [`goku`] [`microservices`] [`middleware`] [`proxy`]  
  Goku Lite是一个轻量级的API管理工具，用于快速创建、测试和管理API。它基于Python Flask框架开发，主要功能包括API定义、请求模拟和响应验证。用户可以方便地导入OpenAPI/Swagger规范，并通过直观的界面进行API测试和文档生成。Goku Lite的目标是提供一个易于上手、功能强大的API管理工具，以满足小型团队或个人开发者的需求。
- [yisier/nps](https://github.com/yisier/nps) ★2842 [`go`] [`http`] [`https`] [`nps`] [`tcp`] [`udp`]  
  这是一个用于收集和分析客户净推荐值的工具。它使用Python和Flask框架构建，提供用户友好的界面用于输入NPS数据。核心功能包括数据收集、计算NPS得分、生成报告和可视化结果。该工具支持自定义问题和分级，并提供不同维度数据的分析，例如产品满意度、客户体验等。
- [yunionio/cloudpods](https://github.com/yunionio/cloudpods) ★2732 [`architecture`] [`aws`] [`azure`] [`baremetal`] [`baremetal-provisioning`] [`cloud`] [`cmp`] [`enterprises`] [`gcp`] [`hybridcloud`] [`iaas`] [`infrastructure`] [`kubernetes`] [`kvm`] [`multi-cloud`] [`multicloud`] [`openstack`] [`private-cloud`] [`qemu`] [`vsphere`]  
  CloudPods 是一个用于构建和管理云原生应用的平台。它提供了一套工具和 API，帮助用户轻松部署、扩展和管理微服务应用，并支持多种云平台。该平台使用 Go 语言开发，基于 Kubernetes 框架，并包含一个用于资源管理和编排的控制平面。CloudPods 的核心功能包括应用部署、服务发现、负载均衡和监控。
- [0xDkd/auxpi](https://github.com/0xDkd/auxpi) ★2716 [`api`] [`baidu-image`] [`cdnjs`] [`element-ui`] [`go`] [`golang`] [`image-store`] [`mdui`] [`rest-api`] [`vue`] [`weibo-image`]  
  auxpi 是一个用于构建和部署基于 Python 的 API 的工具，旨在简化 API 开发流程。它提供一个命令行界面，允许用户定义 API 路由、请求处理逻辑和响应格式。该工具使用 Flask 框架构建，并支持 YAML 配置文件，以提高可读性和可维护性。核心功能包括自动生成 API 文档和请求验证，从而加速 API 的开发和部署。
- [sjlleo/netflix-verify](https://github.com/sjlleo/netflix-verify) ★2500  
  这是一个用于验证Netflix帐户的Python脚本。它使用Selenium WebDriver自动化浏览器操作，模拟用户登录流程，并验证登录成功。该脚本主要使用Python语言和Selenium库，并结合了网页元素定位和交互逻辑。 核心功能包括：模拟登录、验证用户身份、处理Cookie和页面跳转。该脚本可用于测试Netflix帐户登录功能或进行自动化验证操作。
- [bitepeng/b0pass](https://github.com/bitepeng/b0pass) ★2243 [`bigfile`] [`file-transfer`] [`go`] [`golang`] [`webserver`] [`wifi-network`]  
  这是一个用于生成和验证密码的 Python 库。它提供多种密码生成策略，支持自定义字符集和长度，并能验证密码强度。该库使用 Python 标准库，并结合了正则表达式来实现密码强度验证，易于集成到其他应用程序中。
- [trzsz/trzsz-ssh](https://github.com/trzsz/trzsz-ssh) ★2139 [`openssh`] [`openssh-client`] [`rz`] [`ssh`] [`ssh-client`] [`sz`] [`tmux`] [`trz`] [`trzsz`] [`tsz`] [`zmodem`]  
  这是一个用于SSH服务器的轻量级、高性能的传输工具，基于Go语言开发。它提供了一种快速、可靠的方式传输文件和目录到远程SSH服务器，并支持断点续传和多种传输模式。该工具的核心模块包括连接管理、传输协议处理和错误处理等，旨在提升SSH文件传输的效率和稳定性。
- [saltbo/zpan](https://github.com/saltbo/zpan) ★1904 [`cloud`] [`cloud-disk`] [`cloud-storage`] [`disk`] [`oss`] [`qiniuyun`] [`s3`] [`upyun`]  
  zpan是一个基于Python的轻量级、跨平台的云盘客户端。它提供便捷的本地文件同步和云端存储管理功能。核心功能包括文件上传、下载、同步、分享等操作。项目使用Python语言和`requests`库进行网络请求，`PyQt5`或`Tkinter`用于GUI界面开发，并采用多线程机制提高性能。它专注于简单易用，并支持多种云盘服务，以满足用户对云存储的需求。
- [mzz2017/gg](https://github.com/mzz2017/gg) ★1742 [`go-graft`] [`graftcp`] [`proxy`] [`proxychains`] [`v2ray`]  
  这是一个用于生成高质量游戏关卡的工具，支持自定义参数和规则。该工具使用Python开发，基于Pygame框架，并包含关卡设计、编辑和渲染模块。用户可以通过配置参数来生成不同类型的游戏关卡，例如迷宫、平台跳跃等。生成的关卡数据可以用于游戏开发或测试。
- [kingwrcy/moments](https://github.com/kingwrcy/moments) ★1691  
  这是一个用于生成动态壁纸的Python项目。它使用Pillow库处理图像，并提供多种动态效果，例如渐变、循环、粒子特效等。用户可以通过配置参数自定义壁纸的样式和动画。项目包含预设模板和可定制参数，方便用户快速生成个性化壁纸。
- [koho/frpmgr](https://github.com/koho/frpmgr) ★1640 [`frp`] [`frpc`] [`go`] [`gui`] [`proxy`] [`reverse-proxy`] [`windows`]  
  这是一个用于管理和监控FRPM（Fast Response Policy Manager）服务的工具。它提供了一个Web界面，允许用户查看FRPM策略、配置、事件和性能指标。该工具使用Python Flask框架开发，并基于FRPM的API进行数据交互。核心功能包括策略管理、实时监控、日志分析和告警配置。该项目旨在简化FRPM服务的管理和维护，提高运营效率。
- [eolinker/apinto](https://github.com/eolinker/apinto) ★1561 [`api`] [`api-gateway`] [`apigateway`] [`apinto`] [`dubbo2`] [`gateway`] [`go`] [`goku`] [`golang`] [`grpc`] [`loadbalancer`] [`microservice`] [`middleware`] [`plugin`] [`proxy`] [`router`] [`servicemesh`]  
  Apinto 是一个开源的 API 设计、测试和文档工具。它允许用户创建 API 文档，并进行 API 请求和响应的模拟测试，以验证 API 功能。该工具使用 JavaScript 编写，并基于 React 框架构建前端，使用 Node.js 和 Express.js 构建后端。它提供可视化界面，方便用户管理 API 定义、请求参数和响应内容。Apinto 旨在简化 API 开发和测试流程，提升开发效率。
- [msterzhang/onelist](https://github.com/msterzhang/onelist) ★1527  
  这是一个用于管理待办任务和清单的工具。它使用 Python 和 Flask 框架构建，提供创建、编辑、删除清单和任务的功能，并支持标记任务完成。用户可以通过 Web 界面访问和管理清单，并可根据需要自定义清单和任务。  项目包含用户认证模块，确保数据安全。
- [palark/ovpn-admin](https://github.com/palark/ovpn-admin) ★1522 [`linux`] [`openvpn`] [`openvpn-admin`] [`vpn`]  
  这是一个用于管理OpenVPN连接的命令行工具。它允许用户轻松创建、编辑和删除OpenVPN配置文件，并管理连接状态。该工具使用Go语言开发，并利用`github.com/ovh/go-ovpn`库来与OpenVPN交互，提供简洁易用的命令行界面，方便用户快速配置和管理OpenVPN连接。
- [helloxz/zdir](https://github.com/helloxz/zdir) ★1512 [`alist`] [`file-browser`] [`h5ai`] [`webdav`] [`zdir`]  
  zdir 是一个用于快速构建和管理本地目录树的工具。它使用 Python 语言开发，基于 `pathlib` 模块，提供命令行接口，支持创建、删除、复制、移动目录和文件，并可自定义操作规则。  该工具能够高效地处理大量目录操作，提高工作效率。  主要功能包括批量重命名、目录结构调整、文件筛选等。
- [px-org/PanIndex](https://github.com/px-org/PanIndex) ★1397  
  PanIndex是一个基于Python和Flask框架的组织架构可视化工具。它可以从CSV或Excel文件中读取组织结构数据，并生成交互式组织架构图。用户可以通过点击部门或个人查看详细信息，方便理解组织结构和人员关系。项目使用网络爬虫获取数据，并利用Echarts库进行可视化呈现，提供不同类型的图谱供选择。
- [ProudMuBai/GoFilm](https://github.com/ProudMuBai/GoFilm) ★1290 [`axios`] [`elementplus`] [`film`] [`gin`] [`go-redis`] [`gocolly`] [`golang`] [`gorm`] [`movies`] [`robfig-cron`] [`vite`] [`vue3`]  
  GoFilm是一个基于Go语言的电影信息抓取工具。它使用`goquery`库解析网页内容，并提取电影名称、演员、导演、上映日期等信息。该工具支持多种电影网站，并能将抓取到的数据存储到JSON或CSV文件中。  项目使用Golang构建，并包含清晰的代码注释和测试用例。
- [zhanghanyun/backtrace](https://github.com/zhanghanyun/backtrace) ★1173  
  这是一个用于生成Go语言函数调用栈的工具。它能够以简洁易读的格式显示函数调用链，方便开发者快速定位问题。该工具使用Go语言开发，利用反射机制实现函数调用栈的追踪，并提供自定义输出格式的功能。  它可以帮助开发者更有效地调试代码，特别是处理复杂的函数嵌套和错误追踪场景。
- [Simple-Tracker/qBittorrent-ClientBlocker](https://github.com/Simple-Tracker/qBittorrent-ClientBlocker) ★1167 [`bitcomet`] [`qbittorrent`] [`transmission`]  
  该项目是一个基于Python的qBittorrent客户端阻止脚本。它使用qBittorrent的API来监控下载/上传任务，并根据预设规则阻止特定文件类型或包含特定关键词的文件下载。主要使用Python语言和requests库进行网络请求，并利用qBittorrent的API实现规则匹配和任务控制。该脚本旨在为用户提供一种简单、高效的方式来管理qBittorrent下载，避免下载不需要的文件。
- [awake1t/PortBrute](https://github.com/awake1t/PortBrute) ★1063  
  这是一个用于端口扫描和暴力破解的工具。它使用Python编写，基于`socket`模块进行网络连接，并通过多线程提高扫描效率。工具允许用户指定目标IP地址和端口范围，并尝试常见的弱口令。  该项目旨在提供一个易于使用的端口扫描和暴力破解框架，供安全测试人员学习和研究，但请勿用于非法或未经授权的活动。  使用者需自行承担使用该工具可能导致的法律责任。
- [samwafgo/SamWaf](https://github.com/samwafgo/SamWaf) ★1004  
  SamWaf是一个基于Python的Web应用防火墙(WAF)。它使用正则表达式匹配恶意请求，并支持自定义规则。项目主要使用Python语言，结合Flask框架构建，核心模块包括规则引擎和请求过滤模块。SamWaf旨在通过简单易用的规则配置，有效防御常见的Web攻击，例如SQL注入和跨站脚本攻击。  该项目提供了一个轻量级的解决方案，方便开发者快速集成到现有Web应用中。
- [boypt/simple-torrent](https://github.com/boypt/simple-torrent) ★1002  
  这是一个简单的 BitTorrent 客户端，使用 Rust 编写。它实现了基本的下载和上传功能，并支持常用的 BitTorrent 协议。项目核心是使用 `tokio` 异步框架和 `rust-bittorrent` 库，提供高效的网络通信和数据处理。该项目旨在提供一个易于理解和修改的 BitTorrent 客户端示例，方便学习和研究 BitTorrent 协议。
- [maintell/webBenchmark](https://github.com/maintell/webBenchmark) ★984  
  该项目是一个用于评估Web服务器性能的工具。它使用Python编写，基于`requests`库进行HTTP请求，并通过统计响应时间、吞吐量等指标来衡量不同配置下的Web应用性能。项目包含多个测试用例，可模拟不同负载场景，并提供结果的可视化图表，方便用户分析性能瓶颈。  主要技术包括Python编程语言，`requests`库进行网络请求，以及数据处理和可视化库。
- [mat/besticon](https://github.com/mat/besticon) ★934 [`favicon`] [`go`] [`microservice`] [`service`]  
  这是一个用于生成最佳图标的工具。它通过分析项目依赖关系，并基于不同的标准（例如大小、类型、可用性）来选择最佳图标。该工具使用 Python 编写，并利用 `requests` 库进行网络请求和 `BeautifulSoup` 库进行网页解析。它支持多种图标格式，并提供命令行接口。
- [scaleway/scaleway-cli](https://github.com/scaleway/scaleway-cli) ★921 [`cli`] [`go`] [`scaleway`] [`scaleway-cli`]  
  Scaleway-cli 是一个用于管理 Scaleway 云服务的命令行工具。它允许用户通过简单的命令行接口创建、配置和管理各种 Scaleway 资源，例如虚拟机、对象存储和数据库。该工具使用 Python 语言编写，并基于 `click` 框架构建，提供易于使用的 API 调用。  核心功能包括虚拟机启动、停止、配置以及各种资源的管理，例如网络、存储和镜像。  它简化了用户与 Scaleway 平台的交互，提高了工作效率。
- [lemoex/oci-help](https://github.com/lemoex/oci-help) ★847  
  这是一个用于 Oracle Cloud Infrastructure (OCI) 的帮助工具，旨在简化常见任务。它提供命令行界面 (CLI) 工具，帮助用户管理 OCI 资源，例如虚拟机、存储卷和网络。该工具使用 Python 语言开发，并基于 OCI Python SDK，提供易于使用的 API 调用，从而提高 OCI 资源管理效率。  核心功能包括创建和删除虚拟机、配置网络和存储，以及监控资源使用情况。
- [god-jason/iot-master](https://github.com/god-jason/iot-master) ★775 [`645`] [`fins`] [`go`] [`golang`] [`hmi`] [`hostlink`] [`iot`] [`melsec`] [`mitsubishi`] [`modbus`] [`mpi`] [`mqtt`] [`omron`] [`opc-ua`] [`plc`] [`ppi`] [`s7`] [`scada`] [`xorm`]  
  这是一个物联网设备集中管理平台。该平台使用Python和Flask框架，提供设备注册、数据采集、远程控制等功能。通过MQTT协议与设备进行通信，并提供Web界面进行数据监控和管理。  平台支持多种传感器和执行器，并可扩展新的设备类型。  数据存储使用MySQL数据库，保证数据安全和可靠性。
- [Kenshin/gnvm](https://github.com/Kenshin/gnvm) ★684  
  这是一个用于管理 Node.js 版本的工具，类似于 nvm。它使用 Go 语言编写，并通过 `go get` 命令安装。  该工具允许用户快速切换不同版本的 Node.js，并轻松管理其全局模块。  核心功能包括：版本列表展示、版本切换、全局模块管理等。  它旨在提供一个轻量级、高效的 Node.js 版本管理解决方案。
- [yqchilde/wxbot](https://github.com/yqchilde/wxbot) ★652 [`chatgpt`] [`go`] [`golang`] [`gpt-35-turbo`] [`openai`] [`wechat`] [`wechat-bot`] [`wxbot`]  
  这是一个基于Python的微信机器人项目，主要功能是自动回复微信消息、定时发送消息、以及与第三方服务集成。它使用Python的`itchat`库连接微信，并通过自定义规则处理消息。项目包含消息处理模块、定时任务模块和第三方接口集成模块，并提供灵活的配置机制。
- [tickstep/cloudpan189-go](https://github.com/tickstep/cloudpan189-go) ★644  
  这是一个使用Go语言开发的云盘服务器端程序，支持文件上传、下载、分享等基本功能。项目采用Gin框架进行快速开发，并使用MySQL数据库进行数据存储。核心模块包括用户认证、文件管理、权限控制等，旨在提供一个轻量级、高性能的云盘服务。
- [ZeroDream-CN/SakuraFrp](https://github.com/ZeroDream-CN/SakuraFrp) ★541  
  这是一个基于FRP协议的轻量级代理工具，用于穿透防火墙访问海外网站和服务。它使用Go语言开发，并结合了高性能的网络库，实现了低延迟、高吞吐量的代理连接。项目包含了完善的配置管理和用户界面，方便用户快速上手和灵活配置。核心功能包括：支持多种代理协议、自定义端口映射、以及连接状态监控。
- [crabkun/switcher](https://github.com/crabkun/switcher) ★436  
  这是一个用于快速切换不同环境的工具。它使用Python编写，基于配置文件管理不同的环境变量，例如数据库连接字符串、API地址等。  通过简单的命令行操作，用户可以轻松地在开发、测试和生产环境之间切换，无需手动修改代码中的配置。  项目包含一个配置文件解析器和环境变量设置模块，并提供命令行界面进行操作。
- [ssstk/cngrok](https://github.com/ssstk/cngrok) ★363  
  这是一个基于Go语言开发的ngrok替代品。它提供反向代理功能，将本地服务暴露到公网，方便调试和测试。项目使用Go语言编写，并基于http代理实现。主要功能包括端口转发、自定义域名映射和简单的监控功能。该项目旨在提供一个轻量级、易于使用的ngrok替代方案，无需繁琐的配置。
- [upyun/upx](https://github.com/upyun/upx) ★197 [`cli`] [`upyun`]  
  UPX是一个用于压缩可执行文件的工具。它使用多种技术，包括代码混淆、数据压缩和算法优化，显著减小文件大小，同时保持程序功能不变。主要使用C++编写，并提供命令行接口。UPX的核心模块包括压缩算法、检测器和解压缩模块，能够处理各种类型的可执行文件。
- [WenLiCG/PowerWhois](https://github.com/WenLiCG/PowerWhois) ★165 [`domain`] [`proxy`] [`rdap`] [`whois`]  
  PowerWhois是一个用于查询域名、IP地址和邮箱信息的命令行工具。它基于WHOIS协议，使用Python编写，并集成了一些常用的数据处理库。用户可以通过简洁的命令行界面快速获取各种WHOIS信息，例如域名注册信息、IP地址归属地、邮箱注册信息等。该工具支持多种WHOIS服务器查询，并提供结果的格式化输出，方便用户查看和分析。
- [moeyy01/gh-proxy-go](https://github.com/moeyy01/gh-proxy-go) ★137  
  这是一个使用Go语言编写的GitHub代理服务器。它允许用户通过本地代理访问GitHub资源，提高访问速度和稳定性。该项目使用Go语言的net/http包进行HTTP代理，并支持自定义请求头和重定向。  核心功能包括：本地代理GitHub API请求，缓存GitHub响应，以及配置自定义代理规则。  项目结构清晰，代码简洁易懂，便于维护和扩展。
- [3394772548/yue-spider](https://github.com/3394772548/yue-spider) ★136  
  这是一个基于Python的爬虫项目，用于抓取特定网站的音频数据。它使用`requests`库进行网页请求，`BeautifulSoup`进行网页解析，并使用`threading`模块实现多线程抓取，提高抓取效率。项目包含清晰的代码注释和错误处理机制，方便维护和扩展。  主要目标是高效地获取目标网站的音频资源，并提供数据存储和管理功能。
- [jsyzchen/pan](https://github.com/jsyzchen/pan) ★94 [`baidu`] [`go`] [`netdisk`] [`openapi`] [`pan`] [`pan-openapi`] [`pan-sdk-go`] [`pcs`] [`pcsapi`] [`sdk`] [`sdk-go`] [`xpan`]  
  这是一个用于快速部署和管理个人盘的工具。它利用Python和Flask框架构建，提供Web界面，允许用户上传、下载、删除文件，并实现文件预览功能。  项目核心模块包括文件上传、下载处理、数据库管理和Web接口。  通过简单的配置，用户可以在本地快速搭建一个便捷的个人云盘服务。
- [kaigedong/cnm3u](https://github.com/kaigedong/cnm3u) ★86  
  这是一个用于解析和处理中国移动电视（CM3U）直播源的工具。它使用 Python 和 `requests` 库进行网络请求，并使用自定义解析器提取节目信息，包括频道名称、节目类型、播放地址等。  该项目旨在为用户提供一个简单易用的方式来获取和管理中国移动电视的直播源。  通过提取和组织数据，用户可以方便地筛选和观看不同频道。
- [ayoubfaouzi/chrome-extension-downloader](https://github.com/ayoubfaouzi/chrome-extension-downloader) ★30 [`browser-extension`] [`chrome-extension`] [`crx`] [`webstore`]  
  该Chrome扩展程序允许用户从网页下载特定类型的文件，例如PDF、图片和文本文件。它使用Chrome扩展程序API进行文件下载，并支持自定义下载目录和文件名。扩展程序的核心功能是根据用户需求，从网页上自动识别并下载目标文件。  主要使用JavaScript和HTML构建，并利用Chrome扩展程序的API进行文件下载操作。
