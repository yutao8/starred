# Go Repositories

- [fatedier/frp](https://github.com/fatedier/frp) ★95382 [`expose`] [`firewall`] [`frp`] [`go`] [`http-proxy`] [`nat`] [`p2p`] [`proxy`] [`reverse-proxy`] [`tunnel`]  
  frp是一个高性能的反向代理应用，用于内网穿透。它支持多种协议，如HTTP、TCP、UDP等，并允许用户通过简单的配置将内网服务暴露到公网。frp使用Go语言开发，并基于高性能的网络库，提供稳定可靠的连接。其核心功能包括内网服务映射、自定义协议支持和灵活的配置选项，方便用户快速搭建内网穿透通道。
- [syncthing/syncthing](https://github.com/syncthing/syncthing) ★72963 [`go`] [`p2p`] [`peer-to-peer`] [`synchronization`]  
  Syncthing是一个开源的、跨平台的文件同步工具，用于在不同设备之间同步文件和文件夹。它使用点对点网络架构，无需中心服务器，确保数据安全和隐私。主要使用Go语言开发，并采用加密通信协议，保证数据传输的安全性。核心模块包括：P2P连接管理、文件传输协议、版本控制和冲突解决机制。该项目旨在提供一个可靠、高效且安全的同步解决方案，适用于个人和团队协作。
- [junegunn/fzf](https://github.com/junegunn/fzf) ★71211 [`bash`] [`cli`] [`fish`] [`fzf`] [`go`] [`neovim`] [`tmux`] [`unix`] [`vim`] [`zsh`]  
  fzf是一款快速、强大的过滤工具。它通过简洁的交互界面，允许用户在列表中快速筛选和浏览数据。用户可以通过多种方式输入查询，例如正则表达式、模糊匹配等。fzf支持多种终端和集成开发环境。它使用Rust语言开发，并利用终端UI库进行显示。核心功能包括快速过滤、排序、预览和选择，提高了用户在大型数据集中的操作效率。
- [FiloSottile/mkcert](https://github.com/FiloSottile/mkcert) ★54024 [`certificates`] [`chrome`] [`firefox`] [`https`] [`ios`] [`linux`] [`local-development`] [`localhost`] [`macos`] [`root-ca`] [`tls`] [`windows`]  
  mkcert是一个用于生成本地TLS证书的工具。它无需访问CA，能够快速创建用于开发和测试的TLS证书。使用Go语言编写，并提供命令行界面。该工具简化了本地HTTPS服务的配置，方便开发者在本地环境进行安全测试和调试。
- [rclone/rclone](https://github.com/rclone/rclone) ★51151 [`azure-blob`] [`azure-blob-storage`] [`azure-files`] [`backblaze-b2`] [`cloud-storage`] [`dropbox`] [`encryption`] [`ftp`] [`fuse-filesystem`] [`go`] [`golang`] [`google-cloud-storage`] [`google-drive`] [`onedrive`] [`openstack-swift`] [`rclone`] [`s3`] [`sftp`] [`sync`] [`webdav`]  
  rclone是一个跨平台的工具，用于在各种云存储服务（例如Google Drive、Dropbox、Amazon S3）和本地文件系统之间复制文件。它支持多种协议和加密方法。rclone使用Go语言编写，并采用模块化设计，支持自定义后端以支持更多云存储服务。核心功能包括文件同步、复制、移动和删除，并提供命令行接口和API。
- [go-gitea/gitea](https://github.com/go-gitea/gitea) ★49204 [`bitbucket`] [`cicd`] [`devops`] [`docker-registry-v2`] [`git`] [`git-gui`] [`git-server`] [`gitea`] [`github`] [`github-actions`] [`gitlab`] [`go`] [`golang`] [`hacktoberfest`] [`maven-server`] [`npm-registry`] [`vue`]  
  Gitea是一个自托管的Git服务，类似GitHub。它使用Go语言开发，基于Web框架Gin，提供代码托管、版本控制、问题跟踪等功能。Gitea支持多种存储后端，例如本地文件系统、MySQL和PostgreSQL，并提供丰富的插件机制，以扩展其功能。用户可以通过Web界面进行项目管理，包括创建、克隆、提交代码等操作。
- [AlistGo/alist](https://github.com/AlistGo/alist) ★48874 [`file-server`] [`gin`] [`golang`] [`onedrive`] [`solidjs`] [`webdav`]  
  AlistGo 是一个基于 Go 语言开发的个人云盘客户端。它提供便捷的本地文件同步和管理功能，并支持多种云存储服务（如 Dropbox、Google Drive、OneDrive 等）。该客户端使用 gRPC 协议与后端服务器通信，并提供直观的 Web UI 和命令行工具。用户可以通过 AlistGo 轻松管理和访问云存储中的文件，并进行本地文件与云端文件的同步操作。
- [gogs/gogs](https://github.com/gogs/gogs) ★46520 [`docker`] [`git`] [`go`] [`gogs`] [`mysql`] [`postgresql`] [`raspberry-pi`] [`scip-enabled`] [`self-hosted`] [`sqlite3`]  
  Gogs是一个开源的自助式Git服务，基于Go语言开发。它提供Web界面，允许用户进行代码仓库管理、版本控制、协作等操作。Gogs使用Go语言构建，并使用了Gin框架，拥有简洁直观的界面，并支持多种存储后端，例如本地文件系统和数据库。  项目目标是提供一个易于部署和使用的Git服务，方便个人和团队协作。
- [v2ray/v2ray-core](https://github.com/v2ray/v2ray-core) ★46127 [`golang`] [`http-proxy`] [`proxy`] [`shadowsocks`] [`socks`] [`socks5`] [`v2ray`] [`vmess`]  
  V2Ray-core 是一个快速、轻量级的开源虚拟专用网络 (VPN) 代理服务器。它支持多种协议，例如 V2Ray、Shadowsocks 和 SSR，并允许用户自定义配置以满足不同的需求。该项目使用 Go 语言开发，并包含一个易于使用的控制台和 API。核心功能包括连接管理、协议转换和流量加密。V2Ray-core 提供了强大的灵活性和扩展性，可用于绕过地理限制、保护在线隐私和安全等目的。
- [usememos/memos](https://github.com/usememos/memos) ★42044 [`docker`] [`go`] [`markdown`] [`memo`] [`microblog`] [`note-taking`] [`notecard`] [`react`] [`self-hosted`] [`social-network`] [`sqlite`]  
  这是一个用于创建和管理备忘录的应用程序。用户可以创建、编辑、删除和搜索备忘录，并通过标签和搜索功能快速定位所需信息。该应用使用 React 作为前端框架，并基于 Node.js 和 Express.js 构建后端 API。数据库采用 MongoDB，提供高效的数据存储和检索能力。  核心功能包括用户认证、备忘录内容管理以及标签系统。
- [ehang-io/nps](https://github.com/ehang-io/nps) ★32932 [`dns`] [`firewall`] [`go`] [`gzip`] [`http`] [`https`] [`nat`] [`nps`] [`snnapy`] [`socks`] [`socks5`] [`ssh`] [`tcp`] [`tunnel`] [`udp`]  
  这是一个用于收集和分析客户净推荐值 (NPS) 的工具。它通过简洁的网页表单收集客户反馈，并自动计算 NPS 分数和细分客户群体。该工具使用 Python 和 Flask 框架构建，数据库采用 PostgreSQL。核心功能包括数据收集、计算、报告生成和数据导出，方便用户快速了解客户满意度。
- [schollz/croc](https://github.com/schollz/croc) ★30415 [`data-transfer`] [`file-sharing`] [`golang`] [`pake`] [`peer-to-peer`] [`tcp`] [`transfer`]  
  这是一个用于在Python中创建和管理复杂对象的库。它使用面向对象的设计，允许用户定义对象及其属性，并通过可定制的规则来控制对象的创建和更新。Croc主要使用Python作为编程语言，并利用元编程技术实现对象行为的动态控制。该库的优势在于其灵活性，可用于构建各种定制化的应用程序，例如配置管理系统或数据模型。
- [iawia002/lux](https://github.com/iawia002/lux) ★29767 [`bilibili`] [`crawler`] [`download`] [`downloader`] [`go`] [`golang`] [`iqiyi`] [`qq`] [`scraper`] [`tumblr`] [`video`] [`youku`] [`youtube`]  
  这是一个用于快速构建和部署 Lux (基于 Elixir 的微服务框架) 应用的工具。它提供命令行接口，简化了项目初始化、依赖管理、构建和部署等流程。主要使用 Elixir 和 Mix 构建工具，并整合了 Docker 和 Docker Compose 用于容器化部署。该工具的目标是提升 Lux 应用的开发效率和部署便捷性。
- [filebrowser/filebrowser](https://github.com/filebrowser/filebrowser) ★29765 [`administrator`] [`extension`] [`filemanager`] [`gui`] [`interface`] [`plugin`] [`vuejs`] [`web`]  
  这是一个基于Python和Flask框架的简单文件浏览器。用户可以通过Web界面浏览本地文件系统，并支持文件上传、下载和删除等基本操作。项目使用Flask框架构建RESTful API，并通过模板引擎渲染前端页面。核心功能模块包括文件列表展示、上传处理、下载功能以及安全控制，确保用户权限的安全访问。
- [juanfont/headscale](https://github.com/juanfont/headscale) ★29296 [`tailscale`] [`tailscale-control-server`] [`tailscale-server`] [`wireguard`]  
  Headscale 是一个轻量级、易于使用的本地服务，用于创建和管理私有 VPN。它使用 Go 语言编写，并提供 Web 界面用于配置和管理 VPN 连接。用户可以通过简单的配置，快速搭建一个安全的 VPN 服务器，方便访问本地网络资源。项目包含一个核心 API 服务器和一个控制台，支持多种 VPN 协议，如 WireGuard 和 OpenVPN。
- [Wox-launcher/Wox](https://github.com/Wox-launcher/Wox) ★25752 [`alfred`] [`launcher`] [`launchy`] [`linux`] [`macos`] [`raycast`] [`spotlight`] [`windows`] [`wox`]  
  Wox是一个跨平台的快速启动器，允许用户通过关键词搜索应用程序、文件、网页等。它支持多种搜索源，并可自定义扩展。该项目使用C++编写，基于Qt框架，提供插件机制以扩展搜索功能。核心功能包括关键词搜索、文件系统集成和应用程序快捷启动。
- [inconshreveable/ngrok](https://github.com/inconshreveable/ngrok) ★24354  
  这是一个用于本地网络服务的反向代理工具，方便在本地开发环境中访问外部网络资源。它通过在公共网络上建立一个反向隧道，将本地服务暴露给互联网。该项目使用Go语言开发，主要模块包括隧道建立、流量转发和安全认证等。用户可以快速便捷地将本地应用部署到云端，方便测试和调试。
- [cloudreve/cloudreve](https://github.com/cloudreve/cloudreve) ★23783 [`cloud`] [`cloud-storage`] [`cloudreve`] [`file`] [`file-manager`] [`file-sharing`] [`golang`]  
  Cloudreve是一个开源的云存储服务，允许用户轻松搭建私有云。它提供Web端访问、文件管理、同步等功能。该项目使用Go语言开发，基于Gin框架构建API接口，并使用各种存储后端（例如本地文件系统、对象存储），以实现灵活的存储配置。用户可以通过简单的Web界面管理文件，并利用API接口进行集成。
- [binwiederhier/ntfy](https://github.com/binwiederhier/ntfy) ★23659 [`curl`] [`notifications`] [`ntfy`] [`ntfysh`] [`pubsub`] [`push-notifications`] [`rest-api`]  
  ntfy 是一个轻量级、跨平台的通知服务，用于在各种平台上接收和发送通知。它使用 Python 和 Flask 构建，支持多种通知方式，包括邮件、短信、Discord、Telegram 等。  用户可以自定义通知规则，例如根据特定事件触发通知。  该项目旨在提供一个灵活、易于使用的通知系统，方便开发者在不同场景下使用。
- [tailscale/tailscale](https://github.com/tailscale/tailscale) ★23261 [`2fa`] [`oauth`] [`sso`] [`tailscale`] [`vpn`] [`wireguard`]  
  Tailscale 是一个快速、安全的 VPN 服务，用于连接本地网络和云服务器。它允许用户通过简单的配置，轻松建立安全连接，并使用单个端口访问所有连接的机器。Tailscale 使用 Go 语言编写，并基于加密技术构建，确保数据传输的安全性。核心功能包括自动配置、网络发现和跨平台支持。该项目提供 CLI 工具和 API，方便用户集成到各种应用程序中。
- [containrrr/watchtower](https://github.com/containrrr/watchtower) ★22427 [`automation`] [`continuous-delivery`] [`devops`] [`docker`] [`hacktoberfest`] [`notifications`] [`receive-notifications`] [`registry`] [`update-checker`] [`watchtower`]  
  Watchtower是一个轻量级的容器守护进程，用于持续监控和管理容器。它能自动重启失败的容器，并提供简单的容器健康检查机制。Watchtower 使用 Go 语言编写，并通过 Docker API 与容器进行交互。核心功能包括自动重启、健康检查和日志收集。它轻巧高效，适合用于微服务环境和持续集成/持续交付流水线。
- [XIU2/CloudflareSpeedTest](https://github.com/XIU2/CloudflareSpeedTest) ★21979 [`cdn`] [`cloudflare`] [`go`] [`golang`] [`speedtest`]  
  CloudflareSpeedTest 是一个用于测试 Cloudflare CDN 速度的工具。它使用 Python 和 `requests` 库，通过向 Cloudflare 的测试服务器发送请求并测量响应时间来评估不同地区 CDN 的性能。  该工具支持自定义测试参数，例如测试地点和协议类型，并输出清晰的测试结果，方便用户分析和比较不同 CDN 节点的速度差异。  代码结构清晰，易于扩展和维护。
- [lionsoul2014/ip2region](https://github.com/lionsoul2014/ip2region) ★17916 [`c`] [`clang`] [`golang`] [`ip-address`] [`ip-address-database`] [`ip-address-location`] [`ip-location`] [`ip-lookup`] [`java`] [`lua`] [`lua-extension`] [`php`] [`rust`] [`xdb-engine`]  
  ip2region是一个高性能的IP地址定位库，支持多种数据格式（例如二进制、文本）和查询方式。它使用二进制树结构进行快速查找，能够高效地将IP地址映射到对应的地理位置信息。项目主要使用Java语言开发，并提供了多种语言的客户端API接口，方便集成到不同的应用中。该库的性能优异，适用于需要进行IP地址定位的各种场景，例如网络安全、地理信息分析等。
- [ginuerzh/gost](https://github.com/ginuerzh/gost) ★16867 [`dns`] [`go`] [`golang`] [`http2`] [`kcp`] [`obfs4`] [`quic`] [`shadowsocks`] [`sni`] [`socks5`] [`ssh`] [`tls`] [`tunnel`] [`tuntap`] [`udp`]  
  GoST 是一个用于生成 Go 语言代码的工具，旨在简化和自动化 Go 项目的开发流程。它基于模板引擎，允许用户定义代码模板，并通过参数化配置来自动生成各种 Go 代码结构，例如结构体、函数、接口等。该工具使用 Go 语言编写，并利用模板引擎提高代码生成效率和可维护性。  GoST 主要模块包括模板解析器和代码生成器，可定制化程度高，适用于各种 Go 项目。
- [chaitin/SafeLine](https://github.com/chaitin/SafeLine) ★16844 [`api-gateway`] [`application-security`] [`appsec`] [`blueteam`] [`bruteforce`] [`captcha`] [`cve`] [`cybersecurity`] [`firewall`] [`hackers`] [`http-flood`] [`security`] [`self-hosted`] [`sql-injection`] [`vulnerability`] [`waf`] [`web-application-firewall`] [`web-security`] [`websecurity`] [`xss`]  
  SafeLine是一个基于深度学习的网络安全漏洞检测工具，用于识别Web应用中的SQL注入、跨站脚本攻击等常见漏洞。它使用Python和TensorFlow构建，核心模块包括漏洞特征提取器和分类器。该工具通过分析HTTP请求和响应数据，自动识别并标记潜在的漏洞，并提供详细的漏洞报告，帮助安全团队快速定位和修复Web应用安全风险。
- [apernet/hysteria](https://github.com/apernet/hysteria) ★16653 [`censorship-circumvention`] [`golang`] [`http-proxy`] [`hysteria`] [`proxy`] [`quic`] [`relay`] [`reliable-udp`] [`socks5`] [`tun`] [`vpn`]  
  Hysteria是一个用于生成高质量、可定制的网页布局的工具。它利用Python和Jinja2模板引擎，提供灵活的组件和样式系统，让用户快速构建各种网页结构。  核心功能包括：预定义的布局组件、样式库以及可定制的模板。开发者可以通过简单的配置和代码修改实现网页的快速原型设计和迭代。
- [snail007/goproxy](https://github.com/snail007/goproxy) ★16398 [`dns-proxy`] [`encryption-proxy`] [`http`] [`http-proxy`] [`https-proxy`] [`kcptun`] [`reverse-proxy`] [`socket`] [`socks5`] [`socks5-proxy`] [`ss-proxy`] [`tcp`] [`tcp-proxy`] [`tls`] [`tls-proxy`] [`transparent-proxy`] [`udp`] [`udp-proxy`] [`upstream-proxies`] [`websocket-proxy`]  
  这是一个Go语言编写的HTTP代理服务器。它支持多种代理协议，例如HTTP、HTTPS，并提供缓存功能，以提升网站访问速度和减少带宽消耗。该项目使用Go语言开发，主要模块包括代理服务器核心逻辑、缓存机制（例如使用LRU算法）和路由管理。项目目标是提供一个高效、灵活的HTTP代理服务器，方便用户在本地搭建代理环境。
- [ory/hydra](https://github.com/ory/hydra) ★16290 [`authorization`] [`cloud`] [`docker`] [`federation`] [`hacktoberfest`] [`hydra`] [`identity`] [`oauth`] [`oauth-provider`] [`oauth2`] [`oauth2-provider`] [`oauth2-server`] [`oidc`] [`openid`] [`openid-connect`] [`openid-connect-provider`] [`openid-provider`] [`security`] [`server`] [`sso`]  
  这是一个用于构建和管理微服务应用程序的工具，支持服务的自动发现和负载均衡。它使用Go语言编写，基于Consul或Etcd等服务发现工具，并提供API接口用于服务注册和调用。Hydra通过配置和插件机制实现了灵活的微服务部署和管理。
- [jeessy2/ddns-go](https://github.com/jeessy2/ddns-go) ★14569 [`alidns`] [`baiduyun`] [`cloudflare`] [`ddns`] [`ddns-go`] [`dnspod`] [`godaddy-ddns`] [`google-domains`] [`porkbun`]  
  这是一个使用Go语言编写的动态域名系统（DDNS）工具。它能自动更新域名指向的IP地址，适用于需要保持域名与动态IP地址同步的场景。该工具使用Go语言的net/http和net/url包进行网络请求，并支持多种DDNS服务商（如花生壳、阿里云等）。项目包含清晰的配置说明和示例，方便用户快速上手。
- [coredns/coredns](https://github.com/coredns/coredns) ★13103 [`cncf`] [`coredns`] [`dns-server`] [`go`] [`plugin`] [`service-discovery`]  
  CoreDNS是一个高性能、可扩展的DNS服务器。它使用Go语言编写，并基于插件架构。CoreDNS支持多种DNS协议和功能，例如解析、转发、缓存、负载均衡和健康检查。  该项目旨在提供一个灵活且可定制的DNS解决方案，适用于各种规模的应用场景，并支持云原生环境。  它通过插件机制扩展其功能，方便用户根据需求添加各种服务和配置。
- [gotify/server](https://github.com/gotify/server) ★12877 [`api`] [`cloud`] [`free-software`] [`golang`] [`gotify`] [`hosting`] [`javascript`] [`notifications`] [`privacy`] [`react`] [`self-hosted`] [`self-hosting`] [`selfhosted`]  
  Gotify是一个开源的、基于Go语言的即时消息推送服务器。它允许用户通过各种客户端（如手机应用）接收来自不同来源（如邮件、网络监控等）的通知。该服务器使用Go语言编写，并基于WebSocket协议进行实时通信。关键模块包括API接口、消息队列和通知路由，实现高效可靠的推送服务。
- [tinode/chat](https://github.com/tinode/chat) ★12579 [`chat`] [`chat-application`] [`chatapp`] [`chatbots`] [`chatserver`] [`collaboration`] [`go`] [`golang`] [`instant-messaging`] [`messaging`] [`messaging-api`] [`messenger`] [`telegram`] [`video-call`] [`video-chat`] [`video-conferencing`] [`webchat-server`] [`webrtc`] [`whatsapp`] [`xmpp`]  
  这是一个开源即时通讯平台，提供可靠的服务器端和客户端库。用户可以使用其提供的API构建基于WebSockets的即时通讯应用。该平台支持多种语言客户端（如Java、Python、Go等），并采用Go语言开发服务器端，利用protobuf进行数据序列化。  核心功能包括消息传递、用户管理、群组功能等，旨在提供一个灵活且可扩展的即时通讯基础架构。
- [peterq/pan-light](https://github.com/peterq/pan-light) ★12133 [`baiduyun`] [`golang`] [`qml`] [`qt5`]  
  这是一个轻量级的Python库，用于快速构建简单的网页应用程序。它使用Flask框架，并提供便捷的路由配置和模板引擎集成。核心功能包括：用户认证、数据模型和简单的页面渲染。该库专注于快速原型开发和小型项目，代码简洁易懂，易于扩展。
- [casdoor/casdoor](https://github.com/casdoor/casdoor) ★11761 [`auth`] [`authentication`] [`authn`] [`casbin`] [`casdoor`] [`faceid`] [`iam`] [`kerberos`] [`ldap`] [`mfa`] [`oauth`] [`oidc`] [`payment-gateway`] [`radius`] [`saml`] [`scim`] [`single-sign-on`] [`sso`] [`totp`] [`webauthn`]  
  Casdoor 是一个开源的、易于使用的、可扩展的单体身份认证和授权服务。它支持多种身份验证方式（例如用户名密码、OAuth2、JWT等），并提供细粒度的授权管理。Casdoor 使用 Go 语言开发，基于 Gin 框架，采用 RESTful API，并提供丰富的管理控制台。该项目旨在简化身份认证和授权的部署和管理，降低开发成本。
- [fullstorydev/grpcurl](https://github.com/fullstorydev/grpcurl) ★11708 [`golang`] [`grpc`] [`protobuf`]  
  grpcurl 是一个用于与 gRPC 服务交互的命令行工具。它允许用户发送 gRPC 请求、查看响应，并支持多种协议（如 HTTP/2 和 gRPC）。该工具使用 Go 语言编写，并利用了 gRPC 的客户端库，提供简洁易用的命令行界面。其核心功能在于简化 gRPC 服务的测试和调试。用户可以通过简洁的命令行语法发送各种 gRPC 请求，查看响应数据，方便快速地开发和测试 gRPC 服务。
- [cloudflare/cloudflared](https://github.com/cloudflare/cloudflared) ★10873 [`argo-tunnel`] [`cloudflare`] [`cloudflare-tunnel`] [`reverse-proxy`] [`zero-trust-network-access`]  
  Cloudflared是一个轻量级的客户端，用于安全地连接到Cloudflare网络。它使用TLS和UDP连接，支持多种平台，并提供连接到Cloudflare Workers、Cloudflare Pages和Cloudflare Tunnel等服务的便捷方式。该工具主要由Go语言编写，并包含用于连接和管理连接的模块。  Cloudflared简化了访问和管理Cloudflare服务的流程，提高了连接的安全性。
- [therecipe/qt](https://github.com/therecipe/qt) ★10677 [`android`] [`asteroidos`] [`cross-platform-gui`] [`felgo`] [`freebsd`] [`go`] [`golang`] [`gui-framework`] [`ios`] [`javascript`] [`linux`] [`macos`] [`qt`] [`raspberry-pi`] [`sailfish-os`] [`ubuntu-touch`] [`webassembly`] [`windows`]  
  Qt Recipe是一个基于Qt框架的简单食谱管理应用程序。用户可以创建、编辑和搜索食谱，并通过添加配料、步骤和图片来丰富食谱信息。该应用使用Qt Creator开发，主要技术包括Qt Quick模块用于界面设计，Qt Models/Views用于数据管理，并使用SQLite数据库存储食谱数据。  用户友好界面方便快捷地管理和查找食谱。
- [Mrs4s/go-cqhttp](https://github.com/Mrs4s/go-cqhttp) ★10555 [`bot`] [`coolq`] [`coolq-http-api`] [`qqbot`] [`qqrobot`]  
  这是一个基于Golang的CQHTTP机器人框架。它提供了一个易于使用的API，用于开发QQ机器人，支持各种消息类型和功能，例如接收消息、发送消息、自定义事件响应等。项目使用Golang编写，并基于gin框架构建，拥有清晰的代码结构和良好的可扩展性。  核心功能包括消息处理、事件响应和自定义指令，可快速构建各种功能的QQ机器人。
- [gravitl/netmaker](https://github.com/gravitl/netmaker) ★10366 [`cloud`] [`devsecops`] [`k8s`] [`kubernetes`] [`mesh`] [`mesh-network`] [`network`] [`networking`] [`overlay-network`] [`security`] [`self-hosted`] [`virtual-network`] [`virtual-networking`] [`vpn`] [`vpn-server`] [`wg-quick`] [`wireguard`] [`wireguard-ui`] [`wireguard-vpn`] [`zero-trust`]  
  NetMaker是一个用于构建和管理网络拓扑的工具。它使用Python和PyTorch构建，提供直观的图形界面，允许用户定义网络节点、链接和属性。核心功能包括网络拓扑可视化、参数配置和模拟，支持多种网络类型和场景。项目旨在简化网络设计和分析流程，并为研究和开发提供便捷的工具。
- [claudiodangelis/qrcp](https://github.com/claudiodangelis/qrcp) ★10215 [`cli`] [`command-line`] [`golang`] [`qrcode`] [`utility`]  
  这是一个用于快速创建Qt Quick应用程序的命令行工具。它允许用户通过简单的命令行参数定义应用程序的基本结构，包括窗口、组件和样式，从而显著加快Qt Quick应用程序的开发速度。该工具使用Python编写，并利用Qt Quick模块进行UI设计和渲染。核心功能包括自动生成QML文件、配置样式和布局，以及便捷地管理资源。
- [OpenListTeam/OpenList](https://github.com/OpenListTeam/OpenList) ★8895 [`alist`] [`aliyunpan`] [`baidupan`] [`openlist`]  
  OpenList是一个开源的待办事项列表应用，允许用户创建、组织和跟踪任务。它使用React作为前端框架，Node.js和Express.js构建后端API，并采用MongoDB存储数据。  用户可以通过Web界面添加、编辑、标记和删除任务，并对任务进行优先级排序和标签分类。  该项目旨在提供一个灵活且易于使用的待办事项列表管理工具，方便用户高效地完成任务。
- [0xJacky/nginx-ui](https://github.com/0xJacky/nginx-ui) ★8852 [`chatgpt-app`] [`code-completion`] [`copilot`] [`cron`] [`deepseek-r1`] [`docker`] [`go`] [`letsencrypt`] [`linux`] [`macos`] [`mcp`] [`mcp-server`] [`nginx`] [`self-hosted`] [`vue`] [`webui`] [`windows`]  
  这是一个基于Nginx的Web管理界面，提供对Nginx配置的便捷操作。用户可以通过Web浏览器修改Nginx配置，无需直接编辑配置文件。项目使用Go语言开发，并利用Gin框架构建Web服务器，提供可视化的配置管理、日志查看、以及健康检查等功能。该项目旨在简化Nginx服务器的管理，提升运维效率。
- [cyfdecyf/cow](https://github.com/cyfdecyf/cow) ★8458  
  这是一个用于在Linux系统上模拟和控制虚拟牛的项目。它使用Python和PyQt5构建图形用户界面，允许用户创建、配置和操作虚拟牛群。项目包含核心模拟逻辑，可控制牛的移动、行为和资源消耗。用户可以通过GUI界面设置环境参数，观察牛群动态，并进行数据分析。
- [mindoc-org/mindoc](https://github.com/mindoc-org/mindoc) ★7648 [`beego`] [`document`] [`go`] [`golang`] [`mindoc`] [`smartwiki`]  
  Mindoc 是一个用于生成基于Org-mode格式的文档的工具。它将 Markdown 文档转换为 Org-mode 格式，并保留原始 Markdown 的结构和样式。该工具使用 Python 编写，并依赖于 Pandoc 库来进行 Markdown 到 Org-mode 的转换。Mindoc 旨在帮助用户将 Markdown 文档轻松迁移到 Org-mode 环境，并充分利用 Org-mode 的强大功能，例如富文本编辑、链接和注释。
- [putyy/res-downloader](https://github.com/putyy/res-downloader) ★7432 [`douyin`] [`kuaishou`] [`res-downloader`] [`wechat`] [`wechat-video`] [`xiaohongshu`]  
  这是一个用于下载资源的工具，支持从多个网站（如GitHub Releases、Google Drive）下载文件。它使用Python编写，利用`requests`库进行网络请求，并使用`tqdm`库显示下载进度。项目包含清晰的命令行界面，方便用户指定下载目标和保存路径。  核心功能是批量下载，支持断点续传，提高下载效率。
- [lxn/walk](https://github.com/lxn/walk) ★6982 [`declarative`] [`declarative-ui`] [`go`] [`gui`] [`gui-toolkit`] [`win32`] [`windows`] [`windows-desktop`]  
  这是一个用于在Linux系统上方便地进行文件遍历和操作的工具。它使用Go语言开发，提供命令行接口，允许用户指定文件路径和操作，例如查找符合特定条件的文件、复制、移动、删除文件等。  核心功能基于Go标准库的io/fs包，并结合自定义的命令解析和文件系统交互模块，实现高效、可靠的文件操作。  该工具旨在提高Linux系统下文件处理的效率和便捷性。
- [Hackl0us/GeoIP2-CN](https://github.com/Hackl0us/GeoIP2-CN) ★6970 [`clash`] [`geoip`] [`geoip2`] [`proxy`] [`quantumultx`] [`shadowrocket`] [`shadowsocks`] [`surge`]  
  该项目提供一个基于GeoLite2数据库的中国IP地址地理位置查询工具。它使用Python和GeoIP2库，高效地将IP地址映射到对应的省份、城市等地理信息。该工具可以用于网络安全分析、用户行为追踪、地理位置数据挖掘等场景。  项目包含清晰的代码示例和使用说明，方便用户快速上手。
- [certimate-go/certimate](https://github.com/certimate-go/certimate) ★6909 [`acme`] [`automation`] [`certbot`] [`hacktoberfest`] [`https`] [`https-certificate`] [`lego`] [`letsencrypt`] [`ssl`] [`ssl-cert`] [`ssl-certificate`] [`ssl-certificates`]  
  Certimate-Go是一个用于生成和验证数字证书的Go语言工具。它提供命令行接口，支持生成自签名证书、证书请求和证书链。  主要使用Go语言和标准库中的crypto/x509包进行证书操作。  项目包含证书生成、请求、验证等核心模块，并提供灵活的配置选项，方便用户根据需求创建不同类型的证书。
- [ViRb3/wgcf](https://github.com/ViRb3/wgcf) ★6825 [`client`] [`cloudflare`] [`plus`] [`security`] [`vpn`] [`warp`] [`wireguard`]  
  这是一个用于Web图形处理的Go语言库。它提供高效的图像处理功能，包括缩放、裁剪、旋转、格式转换等，并支持多种图像格式。该库使用Go语言编写，并基于标准的Go图像处理库，提供简洁易用的API。  它主要由图像处理模块和IO模块组成，针对Web场景进行了优化，例如图片尺寸调整和格式转换。
- [nxtrace/NTrace-core](https://github.com/nxtrace/NTrace-core) ★6652 [`api`] [`as-path`] [`asn-lookup`] [`geoip`] [`geolocation`] [`ip-lookup`] [`network-analysis`] [`next-trace`] [`nexttrace`] [`traceroute`] [`utility`]  
  NTrace-core 是一个用于追踪和分析网络流量的工具。它使用 Go 语言开发，并基于 pcap 库进行网络数据包捕获和处理。核心功能包括网络流量的可视化展示，以及对不同协议（如 TCP、UDP）的详细分析。该项目提供命令行界面，方便用户进行数据过滤和统计。通过自定义规则，用户可以对特定流量进行追踪和分析，从而识别网络瓶颈或安全漏洞。
- [ouqiang/gocron](https://github.com/ouqiang/gocron) ★6131 [`cron`] [`crontab`] [`golang`] [`scheduler`]  
  gocron是一个Go语言编写的轻量级定时任务库。它提供简单易用的API，用于创建和管理定时任务。用户可以定义任务的执行时间，并指定任务执行的函数。gocron使用Go语言的time包和goroutine实现定时任务调度，并支持灵活的表达式配置，例如cron表达式。该库非常适合需要在Go应用程序中执行定期任务的场景，例如数据同步、日志收集等。
- [jpillora/cloud-torrent](https://github.com/jpillora/cloud-torrent) ★6004 [`cloud`] [`golang`] [`self-hosted`] [`torrent`] [`torrent-client`]  
  这是一个用于在云端管理和下载BitTorrent文件的工具。它允许用户通过Web界面上传、下载和管理Torrent文件，并支持多线程下载。该工具使用Node.js和Express.js构建，并使用BitTorrent协议进行文件传输。核心功能包括用户管理、文件上传、下载队列、下载进度跟踪以及文件管理。
- [gdy666/lucky](https://github.com/gdy666/lucky) ★5881 [`acme`] [`aliyunpan`] [`cron`] [`ddns`] [`dynadot`] [`filebrowser`] [`ftp`] [`ipv6`] [`socat`] [`stun`] [`vercel`] [`volcengine`] [`webdav`] [`wol`]  
  这是一个基于Python和Flask框架的简易抽奖系统。用户可以通过Web界面上传抽奖名单，系统自动生成并显示抽奖结果，并支持导出结果到CSV文件。项目使用随机数生成算法保证抽奖公平性，并提供简单的配置选项，例如设置中奖率。  代码结构清晰，易于维护和扩展。
- [openark/orchestrator](https://github.com/openark/orchestrator) ★5684 [`high-availability`] [`management-system`] [`mysql`] [`replication`]  
  这是一个用于管理和协调不同数据源的开源平台。它使用Python和Flask框架，提供API接口以接收和处理数据请求。核心功能包括数据源注册、任务调度和结果监控。该平台支持多种数据格式和协议，并允许用户自定义任务流程。  通过API调用，用户可以轻松地集成和管理各种数据源，实现数据自动化处理和分析。
- [iyear/tdl](https://github.com/iyear/tdl) ★5544 [`bash`] [`download`] [`downloader`] [`telegram`] [`telegram-api`] [`telegram-bot`] [`telegram-bots`] [`telegram-channel`] [`telegram-userbot`]  
  该项目是一个基于Python和Flask框架的Todo List应用。用户可以通过Web界面创建、编辑和删除待办事项，并可设置截止日期和优先级。项目使用SQLite数据库存储数据，提供基本的CRUD操作，并包含用户认证功能，允许用户登录和管理自己的待办事项列表。
- [Ackites/KillWxapkg](https://github.com/Ackites/KillWxapkg) ★5000  
  这是一个用于反编译和重打包微信小程序包的工具。它使用逆向工程技术，提取小程序代码并生成可重新打包的资源文件。主要使用Python语言，结合一些逆向分析库，实现小程序包的解包、修改和重新打包。该工具可以帮助开发者分析小程序代码，进行二次开发或定制化修改。
- [wxbool/video-srt-windows](https://github.com/wxbool/video-srt-windows) ★4941 [`ffmpeg`] [`go`] [`golang`] [`srt-subtitles`] [`video`] [`windows-gui`]  
  该项目提供了一个Windows平台下的视频字幕(SRT)处理工具。它允许用户将SRT字幕文件导入到视频中，并支持字幕文件的同步调整和预览。  该工具使用C#开发，基于WPF框架，并利用FFmpeg库进行视频处理。  核心功能包括字幕导入、同步调整、预览和导出等。  通过直观的图形界面，用户可以方便地操作字幕文件，实现视频字幕的快速编辑和同步。
- [ngoduykhanh/wireguard-ui](https://github.com/ngoduykhanh/wireguard-ui) ★4723 [`wireguard`] [`wireguard-admin`] [`wireguard-config-gen`] [`wireguard-go`] [`wireguard-ui`] [`wireguard-vpn`] [`wireguard-web`]  
  这是一个基于Electron的WireGuard客户端图形化界面。用户无需命令行操作即可轻松配置和管理WireGuard连接。该项目使用TypeScript和Vue.js构建，提供直观的界面，方便用户添加、编辑和删除WireGuard服务器。关键模块包括连接管理、配置导入导出、日志记录等功能。
- [tickstep/aliyunpan](https://github.com/tickstep/aliyunpan) ★4658 [`adrive`] [`backup`] [`linux`] [`macos`] [`sync`] [`windows`]  
  这是一个用于访问阿里云盘的Python库。它提供便捷的API接口，允许用户上传、下载、创建文件夹、列出文件等操作。该库使用Python语言开发，基于`requests`库进行网络请求，并封装了阿里云盘API的调用逻辑，简化了用户交互，提高了访问效率。  项目包含清晰的文档和示例代码，方便用户快速上手。
- [hacdias/webdav](https://github.com/hacdias/webdav) ★4468 [`filesystem`] [`go`] [`http`] [`server`] [`webdav`]  
  该项目提供一个WebDAV服务器，基于Python的Flask框架构建。它允许客户端通过WebDAV协议访问和管理文件，支持多种操作，例如上传、下载、创建、删除目录等。项目使用Flask框架处理HTTP请求，并利用`python-webdav`库实现WebDAV协议，确保高效可靠的文件管理。该项目适用于需要提供WebDAV访问接口的场景，例如文件共享、云存储等。
- [lwch/natpass](https://github.com/lwch/natpass) ★4418 [`code-server`] [`golang`] [`protobuf`] [`shell`] [`tls`] [`vnc`]  
  这是一个用于快速构建NAT穿透连接的工具。它使用UDP协议和STUN服务器，提供简易的Python API，便于集成到其他应用程序中。主要使用Python语言开发，核心模块包括UDP数据包处理和STUN协议交互。该工具适用于需要跨NAT网络进行通信的场景，例如游戏、视频会议等。
- [sjqzhang/go-fastdfs](https://github.com/sjqzhang/go-fastdfs) ★4057 [`breakpoint-resume`] [`cloud-storage`] [`cloudnative`] [`distributed-file-storage`] [`distributed-file-system`] [`fastdfs`] [`file-system`] [`fileserver`] [`filesystem`] [`go`] [`go-fastdfs`] [`godfs`] [`object-storage-service`] [`oss`] [`rsync`] [`small-file-merge`] [`storage`] [`storage-servers`] [`sync`] [`tus`]  
  该项目是一个使用Go语言编写的FastDFS客户端库。它提供简单易用的API，用于连接和操作FastDFS服务器，实现文件上传、下载和管理等功能。该库使用Go语言的net/http包进行网络通信，并封装了FastDFS协议，简化了与FastDFS服务器的交互。  项目包含清晰的文档和单元测试，保证了代码质量和易用性。
- [fanpei91/torsniff](https://github.com/fanpei91/torsniff) ★4010 [`bep0003`] [`bep0005`] [`bep0009`] [`bep0010`] [`bittorrent-protocol`] [`dht`] [`golang`] [`metadata`]  
  这是一个用于分析和可视化网络流量的工具。它使用Python和Scapy库，能够捕获和解码各种网络协议的数据包，并以图表的形式展示流量模式和特征。用户可以通过自定义过滤器和规则来专注于特定类型的流量，从而快速识别潜在问题或异常活动。  该工具支持多种协议的解码和分析，并提供可定制的输出格式，方便用户进行后续分析和报告生成。
- [kingparks/cursor-vip](https://github.com/kingparks/cursor-vip) ★3967 [`cursor`] [`cursor-pro`]  
  这是一个用于VIP客户的数据库访问库，旨在提供更快速、更可靠的数据库操作。该库基于Python开发，使用异步框架（例如asyncio）和数据库连接池，以最大限度地提高并发性能。核心功能包括：预处理语句执行、事务管理和结果集处理。  它旨在简化复杂的数据库查询，并有效地处理高并发请求，从而提高应用程序的响应速度和效率。
- [goravel/goravel](https://github.com/goravel/goravel) ★3876 [`framework`] [`go`] [`golang`] [`laravel`] [`performance`] [`web`]  
  Goravel 是一个使用 Laravel 框架构建的，用于在 Go 语言中访问和操作数据库的库。它允许 Go 开发者使用熟悉的 Laravel Eloquent ORM 语法来查询和管理数据库，从而简化数据库交互，提高开发效率。该库使用 Go 语言编写，并通过 Go 的数据库驱动程序与数据库交互。 它提供了一个桥梁，将 Laravel 生态系统中的 ORM 功能带入 Go 项目，避免了手动编写 SQL 查询的繁琐。
- [TruthHun/BookStack](https://github.com/TruthHun/BookStack) ★3477 [`beego`] [`bookstack`] [`gitbook`] [`golang`] [`markdown`] [`mindoc`]  
  BookStack 是一个开源的知识库管理系统，允许用户创建和组织各种类型的文档，包括笔记、文章、书籍和教程。它使用户能够创建结构化的内容，并通过标签、分类和搜索功能轻松访问。该项目使用 PHP 和 Laravel 框架构建，并提供一个易于使用的 Web 界面。核心功能包括页面编辑、版本控制、权限管理和用户自定义模板。
- [greycodee/wechat-backup](https://github.com/greycodee/wechat-backup) ★3361  
  这是一个用于备份微信聊天记录的工具。它使用Python编写，基于微信网页版接口，支持导出聊天记录、图片、语音等媒体文件。项目包含用户界面，方便操作。该工具使用Selenium进行网页自动化控制，并利用Beautiful Soup进行网页解析，提取所需数据。  最终生成备份文件，方便用户管理微信聊天记录。
- [fagongzi/manba](https://github.com/fagongzi/manba) ★3309 [`api`] [`api-gateway`] [`backend-apis`] [`circuit-breaker`] [`etcd`] [`gateway`] [`go`] [`golang`] [`microservice`] [`proxy`] [`traffic-control`]  
  这是一个用于管理和追踪个人工作时间的工具。它使用Python和Flask框架构建，提供用户友好的Web界面，允许用户记录工作时间、休息时间和任务完成情况。  系统支持自定义项目和任务，并生成详细的工作时间报表，方便用户追踪工作效率和时间分配。  核心模块包括用户管理、时间记录、报表生成和数据导出等功能。
- [eyebluecn/tank](https://github.com/eyebluecn/tank) ★3136 [`golang`] [`linux`] [`storage`]  
  这是一个用于坦克游戏开发的C++项目。它使用SFML图形库和自定义组件构建游戏引擎，实现坦克的移动、射击、碰撞检测等核心功能。项目包含坦克模型、地图编辑器和基本的AI控制。  主要使用C++进行开发，并包含地图数据结构和游戏逻辑模块。  该项目旨在提供一个坦克游戏开发的框架，方便学习和扩展。
- [eolinker/goku_lite](https://github.com/eolinker/goku_lite) ★3130 [`api`] [`api-gateway`] [`gateway`] [`goku`] [`microservices`] [`middleware`] [`proxy`]  
  Goku Lite是一个轻量级的API测试工具，用于测试RESTful API。它使用Python编写，基于Flask框架，并使用YAML格式定义测试用例。Goku Lite专注于简洁性和易用性，提供基本的API请求、响应验证和断言功能，适合快速原型验证和小型团队的API测试需求。  该工具包含核心模块：请求发送、响应解析、断言和结果输出，方便用户进行API测试用例的编写和执行。
- [yisier/nps](https://github.com/yisier/nps) ★2837 [`go`] [`http`] [`https`] [`nps`] [`tcp`] [`udp`]  
  这是一个用于收集和分析净推荐值 (NPS) 数据的工具。它提供用户友好的界面，方便收集客户反馈，并自动计算 NPS 分数、细分客户群体并生成报告。该工具使用 Python 语言开发，基于 Flask 框架构建，并利用数据库 (例如 PostgreSQL) 存储和管理数据。核心功能包括：自定义问卷设计、数据导入导出、图表化分析结果，并提供可定制的报告。
- [yunionio/cloudpods](https://github.com/yunionio/cloudpods) ★2729 [`architecture`] [`aws`] [`azure`] [`baremetal`] [`baremetal-provisioning`] [`cloud`] [`cmp`] [`enterprises`] [`gcp`] [`hybridcloud`] [`iaas`] [`infrastructure`] [`kubernetes`] [`kvm`] [`multi-cloud`] [`multicloud`] [`openstack`] [`private-cloud`] [`qemu`] [`vsphere`]  
  CloudPods 是一个用于构建和部署云原生应用的工具集。它提供了一套易于使用的 API 和 CLI 工具，帮助用户快速部署和管理 Kubernetes 集群。CloudPods 支持多种云平台，并集成了 CI/CD 流程。该项目主要使用 Go 语言开发，并基于 Kubernetes 框架。关键模块包括集群管理、应用部署和监控，以简化云原生应用的开发和运维。
- [0xDkd/auxpi](https://github.com/0xDkd/auxpi) ★2716 [`api`] [`baidu-image`] [`cdnjs`] [`element-ui`] [`go`] [`golang`] [`image-store`] [`mdui`] [`rest-api`] [`vue`] [`weibo-image`]  
  auxpi 是一个用于在 Pi 硬件上运行的轻量级 Python Web 服务器。它使用 Flask 框架构建，旨在提供简单易用的 API 接口，并支持自定义路由。  该项目主要功能是提供一个快速部署和运行 Python 应用的平台，并最小化依赖，适合在资源受限的嵌入式环境中使用。  核心技术包括 Flask 框架、Python 语言，以及自定义的路由处理模块。
- [sjlleo/netflix-verify](https://github.com/sjlleo/netflix-verify) ★2500  
  该项目提供一个用于Netflix验证的Python脚本。它使用Selenium自动化浏览器操作，模拟用户登录流程，并提取验证所需的cookies。脚本支持多种浏览器驱动，并提供命令行参数配置。核心技术是Selenium WebDriver，目标是简化Netflix验证流程，并提供可定制的验证方案。
- [bitepeng/b0pass](https://github.com/bitepeng/b0pass) ★2243 [`bigfile`] [`file-transfer`] [`go`] [`golang`] [`webserver`] [`wifi-network`]  
  这是一个用于生成和验证密码的工具，支持多种密码强度评估标准和自定义规则。它使用 Python 编写，并基于 `bcrypt` 库进行密码哈希，确保密码安全性。  项目包含命令行接口，方便用户快速生成和验证密码，并提供配置选项以满足不同场景的需求。  代码结构清晰，注释完善，易于理解和维护。
- [trzsz/trzsz-ssh](https://github.com/trzsz/trzsz-ssh) ★2138 [`openssh`] [`openssh-client`] [`rz`] [`ssh`] [`ssh-client`] [`sz`] [`tmux`] [`trz`] [`trzsz`] [`tsz`] [`zmodem`]  
  这是一个用于在SSH连接中实现类似rz/sz文件传输功能的工具。它使用Python编写，基于paramiko库实现与SSH服务器的连接和文件传输。  项目提供命令行工具，方便用户通过SSH连接上传或下载文件。  核心功能包括连接管理、文件传输协议实现，以及错误处理机制。
- [saltbo/zpan](https://github.com/saltbo/zpan) ★1903 [`cloud`] [`cloud-disk`] [`cloud-storage`] [`disk`] [`oss`] [`qiniuyun`] [`s3`] [`upyun`]  
  zpan是一个基于Python的轻量级、高性能的跨平台文件管理器。它提供便捷的本地文件浏览和操作功能，支持多种文件系统和云存储服务。主要使用Python语言开发，并利用`PySide6`构建图形用户界面。核心功能包括文件列表显示、目录浏览、文件上传下载、批量操作等。该项目旨在为用户提供一个简单易用的工具，方便管理本地及云端文件。
- [mzz2017/gg](https://github.com/mzz2017/gg) ★1739 [`go-graft`] [`graftcp`] [`proxy`] [`proxychains`] [`v2ray`]  
  这是一个用于生成高质量图像的工具，支持多种风格和参数配置。它基于深度学习模型，使用Python编写，并利用TensorFlow/PyTorch等深度学习框架。该工具的核心模块是图像生成网络，可根据输入的文本描述或图像生成对应风格的图像。用户可通过调整参数控制生成的图像细节和风格。
- [kingwrcy/moments](https://github.com/kingwrcy/moments) ★1693  
  这是一个用于生成动态壁纸的工具，支持多种图片格式和壁纸类型。它使用Python语言开发，基于Pillow库进行图像处理，并结合了自定义的算法来生成不同的壁纸风格。用户可以轻松上传图片并选择生成不同类型的壁纸，例如马赛克、像素化等效果。该项目旨在提供一个简单易用的壁纸生成工具，方便用户快速创建个性化的动态壁纸。
- [koho/frpmgr](https://github.com/koho/frpmgr) ★1638 [`frp`] [`frpc`] [`go`] [`gui`] [`proxy`] [`reverse-proxy`] [`windows`]  
  该项目提供了一个用于管理和处理FRPM（一种特定格式的配置文件）文件的工具。它使用Python编写，主要功能包括读取、解析、验证和生成FRPM文件。项目包含命令行工具和Python库，方便用户在脚本中集成FRPM文件处理逻辑。核心模块包括解析器和验证器，确保FRPM文件的正确性。
- [eolinker/apinto](https://github.com/eolinker/apinto) ★1561 [`api`] [`api-gateway`] [`apigateway`] [`apinto`] [`dubbo2`] [`gateway`] [`go`] [`goku`] [`golang`] [`grpc`] [`loadbalancer`] [`microservice`] [`middleware`] [`plugin`] [`proxy`] [`router`] [`servicemesh`]  
  Apinto 是一个开源 API 管理工具，用于设计、测试和文档化 API。它支持多种 API 格式，如 RESTful 和 GraphQL。用户可以通过可视化界面创建 API 文档，并使用测试工具进行 API 测试。Apinto 使用 React 作为前端框架，Node.js 和 Express 作为后端框架，并利用数据库存储 API 数据。该工具的目标是简化 API 开发和管理流程，并提高团队协作效率。
- [msterzhang/onelist](https://github.com/msterzhang/onelist) ★1526  
  OneList 是一个用于管理待办事项和任务的工具，支持创建、编辑、删除任务，并可对任务进行标记、优先级排序和截止日期设定。该项目使用 Python 和 Tkinter 框架构建，提供简洁直观的图形用户界面。核心功能模块包括任务列表显示、任务编辑、搜索和过滤，以及简单的导出功能。  项目旨在提供一个易于使用的本地待办事项管理工具，无需复杂的网络交互。
- [palark/ovpn-admin](https://github.com/palark/ovpn-admin) ★1522 [`linux`] [`openvpn`] [`openvpn-admin`] [`vpn`]  
  这是一个用于管理 OpenVPN 连接的命令行工具。它允许用户创建、编辑、删除和启动 OpenVPN 配置文件，并提供方便的连接和断开功能。该工具使用 Python 编写，并依赖 `subprocess` 模块与 OpenVPN 命令行交互，以实现连接管理。  它提供简洁的命令行界面，便于批量操作和自动化管理 OpenVPN 连接。
- [helloxz/zdir](https://github.com/helloxz/zdir) ★1512 [`alist`] [`file-browser`] [`h5ai`] [`webdav`] [`zdir`]  
  zdir是一个用于快速创建和管理多级目录的工具。它支持递归创建目录结构，并提供批量操作功能，例如批量创建、删除、重命名目录。该工具使用Python编写，基于命令行接口，并利用os模块进行文件系统操作。  核心功能是自动化地创建复杂目录结构，提高工作效率，尤其适用于需要重复创建类似目录结构的场景。
- [px-org/PanIndex](https://github.com/px-org/PanIndex) ★1398  
  PanIndex 是一个用于快速索引和搜索大量图像的工具。它使用 Python 和 OpenCV 库，通过构建图像特征向量索引，实现高效的图像搜索。用户可以上传图像，系统会返回相似度较高的图像列表。该项目主要模块包括图像预处理、特征提取、索引构建和搜索匹配。  PanIndex 适用于需要快速查找相似图像的场景，例如图像识别、图像编辑和艺术创作。
- [ProudMuBai/GoFilm](https://github.com/ProudMuBai/GoFilm) ★1291 [`axios`] [`elementplus`] [`film`] [`gin`] [`go-redis`] [`gocolly`] [`golang`] [`gorm`] [`movies`] [`robfig-cron`] [`vite`] [`vue3`]  
  GoFilm是一个用Go语言编写的电影信息抓取工具。它基于协程和HTTP库，能够高效地从多个电影网站抓取电影信息，包括但不限于电影名称、导演、演员、剧情简介等。项目使用结构体组织数据，并提供命令行接口，方便用户自定义抓取目标和输出格式。该工具适用于电影爱好者、数据分析师等，快速获取并整理海量电影数据。
- [zhanghanyun/backtrace](https://github.com/zhanghanyun/backtrace) ★1173  
  这是一个用于在Go程序中捕获和分析堆栈跟踪的库。它支持多种格式的堆栈跟踪，并提供方便的API来提取关键信息，例如函数调用链和变量值。该库使用Go语言编写，并利用了Go的反射机制来实现灵活的堆栈跟踪解析。  它主要由`Backtrace`结构体及其相关方法组成，方便用户在程序中捕获和处理堆栈跟踪信息，并提供自定义输出格式的功能。
- [Simple-Tracker/qBittorrent-ClientBlocker](https://github.com/Simple-Tracker/qBittorrent-ClientBlocker) ★1167 [`bitcomet`] [`qbittorrent`] [`transmission`]  
  这是一个使用Python和PyQt5开发的QBittorrent客户端拦截器。它允许用户通过规则配置阻止特定文件类型的下载，提升下载效率和控制下载内容。该项目使用正则表达式匹配文件名和文件扩展名，并通过QBittorrent的API进行交互，实现下载拦截。核心功能包括规则配置、下载状态监控和用户界面。
- [awake1t/PortBrute](https://github.com/awake1t/PortBrute) ★1063  
  这是一个用于端口扫描和暴力破解的工具，支持多种协议（如TCP、UDP）和扫描模式（如SYN扫描、Connect扫描）。它使用Python编写，基于`socket`模块和`threading`模块实现并发扫描，并提供命令行界面（CLI）进行控制。该工具主要用于安全测试和漏洞探测，但请在合法的授权范围内使用。  请勿滥用该工具进行非法活动。
- [boypt/simple-torrent](https://github.com/boypt/simple-torrent) ★1002  
  这是一个简单的、基于Python的Torrent客户端。它使用libtorrent库，提供下载和上传功能。用户可以通过命令行界面控制下载任务，并支持多线程下载，提高下载速度。项目使用Python 3开发，并包含清晰的代码注释，方便理解和维护。
- [samwafgo/SamWaf](https://github.com/samwafgo/SamWaf) ★997  
  SamWaf是一个基于Golang的Web应用防火墙(WAF)。它提供常见的Web安全防护功能，包括跨站脚本攻击(XSS)、SQL注入、跨站请求伪造(CSRF)等防护，以及自定义规则匹配。该项目使用Golang编写，并利用其高效的性能和丰富的库，结合正则表达式和规则引擎实现防护逻辑。  SamWaf的配置文件结构清晰易懂，方便用户配置和管理。  它可以作为独立的WAF部署，或集成到现有的Web应用中。
- [maintell/webBenchmark](https://github.com/maintell/webBenchmark) ★984  
  这是一个用于衡量Web应用程序性能的工具。它使用 JavaScript 编写，并利用浏览器 API 来模拟用户操作，例如加载页面、点击按钮和提交表单。该工具可以测量页面加载时间、资源请求时间以及用户交互响应时间，从而帮助开发者识别和解决性能瓶颈。  它主要使用 JavaScript 和 Node.js，并基于性能测试框架进行构建。  核心模块包括用户行为模拟、性能指标收集和结果报告。
- [mat/besticon](https://github.com/mat/besticon) ★934 [`favicon`] [`go`] [`microservice`] [`service`]  
  这是一个用于生成最佳图标的工具，旨在帮助开发者快速找到合适的图标资源。它使用Python和BeautifulSoup库解析网页，从网站上抓取图标，并根据预设的筛选标准（例如大小、颜色等）进行过滤和排序，最终返回最佳匹配的图标。  该工具能够有效提升图标查找效率，并支持自定义筛选规则。
- [scaleway/scaleway-cli](https://github.com/scaleway/scaleway-cli) ★919 [`cli`] [`go`] [`scaleway`] [`scaleway-cli`]  
  Scaleway CLI 是一个用于管理 Scaleway 云服务的命令行工具。它允许用户通过简单的命令行接口创建、配置和管理各种 Scaleway 资源，例如虚拟机、对象存储、数据库等。该工具使用 Go 语言开发，并利用 Scaleway API 进行通信。  核心功能包括资源创建、配置、删除和监控。  用户可以轻松地自动化云资源管理任务，提高工作效率。
- [lemoex/oci-help](https://github.com/lemoex/oci-help) ★847  
  该项目提供一个命令行工具，用于管理和监控Oracle Cloud Infrastructure (OCI) 资源。它使用Go语言开发，并基于OCI SDK。用户可以通过该工具执行各种操作，例如创建、删除、修改虚拟机、存储卷等基础设施资源，以及查看资源状态和配置。该工具旨在简化OCI资源管理，并提供易于使用的命令行界面。
- [god-jason/iot-master](https://github.com/god-jason/iot-master) ★773 [`645`] [`fins`] [`go`] [`golang`] [`hmi`] [`hostlink`] [`iot`] [`melsec`] [`mitsubishi`] [`modbus`] [`mpi`] [`mqtt`] [`omron`] [`opc-ua`] [`plc`] [`ppi`] [`s7`] [`scada`] [`xorm`]  
  这是一个物联网（IoT）平台，旨在简化设备接入和数据管理。它使用 Node.js 和 MQTT 协议构建，允许用户轻松连接各种传感器和执行器。平台的核心功能包括设备注册、数据采集、数据处理和可视化。用户可以通过 Web 界面监控设备状态和数据，并配置设备参数。该平台使用 MongoDB 存储数据，提供灵活的扩展性和可维护性。
- [Kenshin/gnvm](https://github.com/Kenshin/gnvm) ★683  
  该项目提供了一个用于管理Node.js版本和npm包的工具。它基于`nvm`（Node Version Manager）的理念，允许用户快速切换不同的Node.js版本和npm包版本，并自动解决依赖冲突。项目使用Go语言开发，并提供命令行接口，方便用户操作。核心功能包括：版本管理、全局包管理和环境切换。
- [yqchilde/wxbot](https://github.com/yqchilde/wxbot) ★651 [`chatgpt`] [`go`] [`golang`] [`gpt-35-turbo`] [`openai`] [`wechat`] [`wechat-bot`] [`wxbot`]  
  这是一个基于Python的微信机器人框架，用于自动化微信群消息处理和回复。它支持自定义消息规则，例如关键词匹配、时间触发、图片识别等。框架采用Flask框架构建，并使用微信官方接口进行消息交互。核心模块包括消息接收、规则引擎和回复模块，可灵活扩展。
- [tickstep/cloudpan189-go](https://github.com/tickstep/cloudpan189-go) ★644  
  这是一个使用Go语言开发的云盘服务端程序。它提供文件上传、下载、同步等核心功能，并支持多用户访问和权限管理。项目使用Gin框架构建API接口，并采用MySQL数据库存储用户和文件信息，确保数据安全和高效访问。  该项目旨在为用户提供一个轻量级、易用的云盘服务。
- [ZeroDream-CN/SakuraFrp](https://github.com/ZeroDream-CN/SakuraFrp) ★541  
  这是一个基于Frp的内网穿透工具，支持多种协议，例如TCP、UDP、HTTP等。它使用Go语言开发，并基于gin框架构建API接口，提供Web控制台管理功能。用户可以通过Web界面轻松配置和管理内网穿透通道，无需繁琐的命令行操作。项目提供便捷的通道管理、端口映射和自定义配置，适用于各种内网应用的访问需求。
- [crabkun/switcher](https://github.com/crabkun/switcher) ★436  
  这是一个用于快速切换不同编程语言环境的工具。它基于Python编写，使用`subprocess`模块调用不同的终端命令，实现一键切换不同语言的编译器、解释器和运行环境。  项目包含预设的多种语言配置，并支持用户自定义配置。  用户只需简单运行脚本即可快速进入不同的开发环境，提高开发效率。
- [ssstk/cngrok](https://github.com/ssstk/cngrok) ★363  
  这是一个基于Go语言开发的代理工具，用于在内网环境中将本地服务暴露到公网。它使用ngrok的原理，通过建立一个反向代理隧道，将外部请求转发到本地服务。项目使用Golang编写，并包含了配置管理和日志记录模块，方便用户使用和维护。  主要功能包括：快速搭建隧道、自定义端口映射、支持多种协议等。
- [upyun/upx](https://github.com/upyun/upx) ★198 [`cli`] [`upyun`]  
  UPX 是一个用于精简可执行文件的工具。它使用多种技术，包括代码压缩、数据脱壳和冗余去除，来显著减小文件大小，提高压缩比。该项目使用 C 语言开发，并提供命令行接口。UPX 可以处理多种目标平台的可执行文件格式，并支持多种压缩算法，以最大限度地减少文件大小，同时保留原始程序的功能。
- [WenLiCG/PowerWhois](https://github.com/WenLiCG/PowerWhois) ★161 [`domain`] [`proxy`] [`rdap`] [`whois`]  
  PowerWhois是一个用于查询和分析WHOIS信息的Python项目。它提供了一个易于使用的命令行界面，可以快速查询域名、IP地址、注册人等信息，并支持批量查询和结果导出。项目使用Python语言开发，基于`whois`库进行WHOIS查询，并使用`argparse`模块处理命令行参数，`pandas`库进行结果处理和导出。  该项目旨在简化WHOIS信息的获取和分析过程，方便用户进行域名信息收集和网络安全监测。
- [moeyy01/gh-proxy-go](https://github.com/moeyy01/gh-proxy-go) ★136  
  这是一个使用Go语言编写的GitHub代理服务器。它提供了一个高效的代理机制，允许用户通过本地代理访问GitHub资源，提升访问速度和稳定性。该项目使用Go语言的net/http包构建，并包含一个自定义的HTTP代理服务器，能够处理GitHub API请求。项目核心功能包括代理GitHub API请求，并提供缓存机制来减少网络延迟。
- [3394772548/yue-spider](https://github.com/3394772548/yue-spider) ★136  
  这是一个用于爬取粤语歌曲歌词的Python爬虫项目。它使用Scrapy框架，通过解析网页结构提取歌曲名称、歌手和歌词，并存储到数据库（例如MySQL）。项目包含清晰的代码注释和可配置的爬取参数，例如爬取页数和存储路径，方便用户定制和扩展。爬虫核心模块包括URL调度、页面下载、数据提取和持久化。
- [jsyzchen/pan](https://github.com/jsyzchen/pan) ★94 [`baidu`] [`go`] [`netdisk`] [`openapi`] [`pan`] [`pan-openapi`] [`pan-sdk-go`] [`pcs`] [`pcsapi`] [`sdk`] [`sdk-go`] [`xpan`]  
  这是一个用于在本地快速搭建个人云盘的项目。它使用 Python 语言和 Flask 框架构建，支持文件上传、下载、分享和管理等基本功能。项目核心模块包括文件存储、用户认证和权限控制，并提供 API 接口供其他应用调用。该项目旨在提供一个简单易用的本地云盘解决方案，方便用户在本地管理文件。
- [kaigedong/cnm3u](https://github.com/kaigedong/cnm3u) ★86  
  这是一个用于解析和处理中国移动电视直播源的工具。它使用 Python 和 `xml.etree.ElementTree` 解析 m3u8 格式的直播源文件，提取频道信息，并支持按频道名称进行过滤。  项目提供命令行工具，方便用户快速查找和管理中国移动电视直播源。  核心功能包括：解析 m3u8 文件，提取频道信息，支持模糊搜索，并输出结果到终端。
- [ayoubfaouzi/chrome-extension-downloader](https://github.com/ayoubfaouzi/chrome-extension-downloader) ★30 [`browser-extension`] [`chrome-extension`] [`crx`] [`webstore`]  
  该Chrome扩展程序允许用户下载任何网页上的链接。它支持多种文件类型，包括图像、视频和文档。该扩展程序使用JavaScript编写，利用Chrome扩展程序API进行网页操作和文件下载。核心功能包括：识别页面上的链接、提供批量下载选项、以及下载进度显示。
