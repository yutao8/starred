# Go 仓库

- [fatedier/frp](https://github.com/fatedier/frp) ★108026 [`expose`] [`firewall`] [`frp`] [`go`] [`http-proxy`] [`nat`] [`p2p`] [`proxy`] [`reverse-proxy`] [`tunnel`]  
  frp 是基于 Go 语言开发的反向代理工具，主要用于将内网服务安全暴露到公网，支持 TCP、UDP、HTTP 和 HTTPS 等多种协议；典型使用场景包括远程访问家庭网络设备、开发测试时的内网穿透或跨网络访问私有服务，通过服务端与客户端配合实现简单高效的端口映射与流量转发。
- [syncthing/syncthing](https://github.com/syncthing/syncthing) ★86361 [`go`] [`p2p`] [`peer-to-peer`] [`synchronization`]  
  用于在多个设备间同步文件的去中心化工具，采用点对点架构实现安全私密的跨平台数据同步，无需依赖第三方服务器，适合个人或团队在电脑、手机和服务器之间自动备份与共享文档、照片等文件。
- [junegunn/fzf](https://github.com/junegunn/fzf) ★81711 [`bash`] [`cli`] [`fish`] [`fzf`] [`go`] [`neovim`] [`tmux`] [`unix`] [`vim`] [`zsh`]  
  快速模糊查找工具 fzf 通过命令行提供交互式界面，支持用户实时搜索文件、历史命令、进程等各类文本数据。它能够与常见的终端工具集成，允许快速过滤和选择内容，大幅提升日常命令行操作效率，特别适合开发者或系统管理员进行高效的文件导航、搜索和数据处理任务。
- [usememos/memos](https://github.com/usememos/memos) ★61534 [`docker`] [`foss`] [`go`] [`markdown`] [`memo`] [`microblog`] [`note-taking`] [`notecard`] [`own-your-data`] [`react`] [`self-hosted`] [`social-network`] [`sqlite`]  
  允许用户快速记录想法和个人笔记的工具，支持标签分类和全文搜索功能，可部署为私有服务或通过 Web 访问，适合个人知识管理、碎片化信息收集的轻量化场景。
- [minio/minio](https://github.com/minio/minio) ★61331 [`amazon-s3`] [`cloud`] [`cloudnative`] [`cloudstorage`] [`go`] [`k8s`] [`kubernetes`] [`multi-cloud`] [`multi-cloud-kubernetes`] [`objectstorage`] [`s3`] [`storage`]  
  Minio是一款面向对象存储的开源软件，用于构建兼容Amazon S3 API的高性能分布式存储系统；它适合在私有云和混合云环境中实现海量非结构化数据的管理与访问，支持图片、视频、日志等文件的存储，并可替代传统SAN/NAS方案，便于开发者在各类应用中集成数据存储服务。
- [FiloSottile/mkcert](https://github.com/FiloSottile/mkcert) ★59293 [`certificates`] [`chrome`] [`firefox`] [`https`] [`ios`] [`linux`] [`local-development`] [`localhost`] [`macos`] [`root-ca`] [`tls`] [`windows`]  
  mkcert用于在本地开发环境中快速生成被浏览器和操作系统信任的SSL/TLS证书，无需配置复杂的证书颁发机构，它自动创建本地根证书并安装到系统信任池中，从而为localhost或自定义域名签发即时可用的有效证书，简化了HTTPS网页应用、API服务及容器化环境的本地安全测试流程。
- [rclone/rclone](https://github.com/rclone/rclone) ★58338 [`azure-blob`] [`azure-blob-storage`] [`azure-files`] [`backblaze-b2`] [`cloud-storage`] [`dropbox`] [`encryption`] [`ftp`] [`fuse-filesystem`] [`go`] [`golang`] [`google-cloud-storage`] [`google-drive`] [`onedrive`] [`openstack-swift`] [`rclone`] [`s3`] [`sftp`] [`sync`] [`webdav`]  
  Rclone 是一个命令行程序，用于管理云存储上的文件，支持同步、传输和加密数据，能与多种云服务如 Google Drive、Dropbox 和 Amazon S3 等交互，适用于自动化备份、数据迁移和多云存储管理场景。
- [go-gitea/gitea](https://github.com/go-gitea/gitea) ★56818 [`bitbucket`] [`cicd`] [`devops`] [`docker-registry-v2`] [`git`] [`git-gui`] [`git-lfs`] [`git-server`] [`gitea`] [`github`] [`github-actions`] [`gitlab`] [`go`] [`golang`] [`hacktoberfest`] [`maven-server`] [`npm-registry`] [`self-hosted`] [`typescript`] [`vue`]  
  Gitea 是一个用 Go 语言编写的轻量级自助 Git 服务，提供类 GitHub 的功能界面和操作体验，适用于团队代码托管、版本控制和协作开发。它支持多用户管理、Issue 跟踪、Pull Request、Webhook 等常见功能，可以快速部署在私有服务器上，适合中小企业或个人开发者搭建内部代码管理平台，具有资源占用少、安装简单、易于维护的特点。
- [AlistGo/alist](https://github.com/AlistGo/alist) ★49867 [`file-server`] [`gin`] [`golang`] [`onedrive`] [`solidjs`] [`webdav`]  
  通过统一接口管理多平台存储服务，支持挂载本地磁盘、云端网盘及对象存储等存储源。用户可以在网页端预览、上传或下载文件，并支持 WebDAV 挂载到本地访问，适合搭建个人或团队的私有云存储解决方案。该项目基于 Go 语言实现，具备轻量高效的特点。
- [gogs/gogs](https://github.com/gogs/gogs) ★47681 [`docker`] [`git`] [`go`] [`gogs`] [`mysql`] [`postgresql`] [`raspberry-pi`] [`self-hosted`] [`source-code-management`] [`sqlite3`] [`version-control`]  
  Gogs是一款使用Go语言编写的轻量级自助Git服务，能够在各类硬件资源受限的环境中部署私有的Git服务器。它通过简洁的Web界面支持代码仓库管理、问题跟踪和团队协作，适合个人开发者、小型团队或教育机构用于搭建内部代码托管平台，其设计目标是在提供核心Git服务的同时保持极低的资源占用和简单的安装维护流程。
- [coreybutler/nvm-windows](https://github.com/coreybutler/nvm-windows) ★47054 [`go`] [`management`] [`node`] [`node-version-manager`] [`nodejs`] [`nvm`] [`switch`] [`version`] [`version-manager`] [`versioning`] [`windows`]  
  用于在 Windows 系统中管理多个 Node.js 版本的工具，允许用户轻松安装、切换和使用不同版本的 Node.js 运行时。它解决了开发者在同一台机器上运行多个项目时因版本不兼容导致的问题，提供了命令行界面来快速设置当前会话或永久使用的 Node.js 版本。该工具通常适合 Web 开发、测试或需要特定 Node.js 环境的场景，帮助保持开发环境的一致性和灵活性。
- [v2ray/v2ray-core](https://github.com/v2ray/v2ray-core) ★46904 [`golang`] [`http-proxy`] [`proxy`] [`shadowsocks`] [`socks`] [`socks5`] [`v2ray`] [`vmess`]  
  V2ray-core 是实现网络代理功能的核心程序，支持多协议转换和自定义路由规则，用于构建灵活的网络代理方案。它通过动态配置实现流量转发和伪装，帮助用户绕过网络限制并增强通信安全性，适用于科学上网、内网穿透等场景。该项目提供了跨平台支持，可部署在客户端或服务器端进行流量管理。
- [QuantumNous/new-api](https://github.com/QuantumNous/new-api) ★42202 [`ai-gateway`] [`claude`] [`deepseek`] [`gemini`] [`newapi`] [`openai`] [`rerank`]  
  用于构建与托管人工智能应用程序的API服务，支持开发者高效集成大模型等AI能力到各类产品中，通常适用于聊天机器人、智能助手和自动化流程等场景，帮助用户快速搭建可靠的AI驱动功能。
- [router-for-me/CLIProxyAPI](https://github.com/router-for-me/CLIProxyAPI) ★41804 [`antigravity`] [`claude-code`] [`cluade`] [`codex`] [`gemini`] [`openai`]  
  CLIProxyAPI 是一个用于简化命令行工具与 API 服务之间交互的代理接口，主要用于将 CLI 请求转发为 HTTP 调用，支持鉴权、参数映射和响应格式化，适合集成第三方服务或构建自动化工作流。
- [juanfont/headscale](https://github.com/juanfont/headscale) ★41689 [`tailscale`] [`tailscale-control-server`] [`tailscale-server`] [`wireguard`]  
  Headscale 用于构建和管理基于 WireGuard 的分布式虚拟网络，提供用户身份验证、设备注册、访问控制等核心功能，让用户能够无缝加入私有覆盖网络并安全通信，适合跨云、跨地域的团队或设备组网场景，通常作为开源替代方案部署在企业或自建基础设施中。
- [filebrowser/filebrowser](https://github.com/filebrowser/filebrowser) ★35538 [`file-browser`] [`file-manager`] [`file-sharing`] [`go`] [`material-design`] [`self-hosted`] [`vue`]  
  filebrowser 是一个基于网页的文件管理工具，允许用户在浏览器中直接访问、浏览、上传、下载和管理服务器或本地文件系统中的文件。它通常用于个人云存储、远程服务器文件操作或替代传统的 FTP 客户端，支持多用户权限设置、在线文件编辑和预览功能，适合需要轻量级且易部署的文件管理解决方案的场景。
- [schollz/croc](https://github.com/schollz/croc) ★35532 [`data-transfer`] [`file-sharing`] [`golang`] [`pake`] [`peer-to-peer`] [`tcp`] [`transfer`]  
  主要用来在两个计算机之间简单快速地传输文件或文件夹，支持多种操作系统和网络环境，采用端到端加密确保数据传输的安全性，无需中间服务器即可直接连接，特别适合在局域网或临时网络下进行大文件分享。
- [ehang-io/nps](https://github.com/ehang-io/nps) ★34130 [`dns`] [`firewall`] [`go`] [`gzip`] [`http`] [`https`] [`nat`] [`nps`] [`snnapy`] [`socks`] [`socks5`] [`ssh`] [`tcp`] [`tunnel`] [`udp`]  
  NPS 是一款高性能的内网穿透代理服务器，支持 TCP 和 UDP 流量转发，可将本地服务暴露到公网访问。它通常用于远程控制内网设备、调试本地 Web 服务或搭建私有代理通道，无需公网 IP 即可实现内外网互联。该工具提供 Web 管理界面，便于配置多用户和权限控制，适合个人开发者或小团队进行内网服务部署与访问。
- [tailscale/tailscale](https://github.com/tailscale/tailscale) ★33957 [`2fa`] [`oauth`] [`sso`] [`tailscale`] [`vpn`] [`wireguard`]  
  在网络环境中实现零配置安全组网，允许跨公有云、私有数据中心和边缘设备建立基于 WireGuard 的加密虚拟网络，自动处理 NAT 穿透和节点发现，适合分布式团队远程访问内部服务或构建安全的混合云架构。
- [Wei-Shaw/sub2api](https://github.com/Wei-Shaw/sub2api) ★32082 [`2api`] [`antigravity2api`] [`cc2api`] [`claude`] [`claude-code`] [`codex`] [`crs`] [`crs2`] [`gemini`]  
  sub2api 是一个将订阅链接转换为 API 接口的工具，主要用于将网络订阅服务中的资源列表转换为可通过 HTTP 请求访问的 API 接口，方便用户在自定义应用或脚本中动态获取和管理订阅内容，适用于需要自动化处理订阅源的场景。
- [binwiederhier/ntfy](https://github.com/binwiederhier/ntfy) ★31835 [`curl`] [`notifications`] [`ntfy`] [`ntfysh`] [`pubsub`] [`push-notifications`] [`rest-api`]  
  ntfy 通过简单 HTTP 请求实现跨平台推送通知，允许用户从脚本、服务器或命令行向手机、电脑发送实时提醒。它提供公共服务器或自托管选项，支持主题订阅、消息优先级设置和多种传递方式如 Firebase、WebSocket，常用于监控告警、自动化任务状态同步及个人消息分发场景。
- [iawia002/lux](https://github.com/iawia002/lux) ★31504 [`bilibili`] [`crawler`] [`download`] [`downloader`] [`go`] [`golang`] [`iqiyi`] [`qq`] [`scraper`] [`tumblr`] [`video`] [`youku`] [`youtube`]  
  该项目提供命令行视频下载工具，支持从 YouTube、Bilibili 等主流平台获取视频或音频，能自动选择最高质量格式或让用户手动指定，并且内置了多线程加速与 Cookies 导入功能，适用于需要快速批量下载网络媒体资源的场景。
- [cloudreve/cloudreve](https://github.com/cloudreve/cloudreve) ★28289 [`cloud`] [`cloud-storage`] [`cloudreve`] [`file`] [`file-manager`] [`file-sharing`] [`golang`]  
  Cloudreve 是一个自部署的云存储共享与协作平台，支持对接多种存储后端如本地磁盘、对象存储及公有云盘。它提供文件上传下载、在线预览、权限管理和分享链接等功能，适用于个人或小团队搭建私有网盘，能有效集中管理分散的存储资源并通过网页界面便捷访问。基于 Web 技术栈，通常采用 Go 语言开发，适合需要自主控制数据隐私与存储方案的场景。
- [XIU2/CloudflareSpeedTest](https://github.com/XIU2/CloudflareSpeedTest) ★27913 [`cdn`] [`cloudflare`] [`go`] [`golang`] [`speedtest`]  
  CloudflareSpeedTest用于测试多组Cloudflare IP地址的延迟和下载速度，并自动筛选出网络性能最佳的节点，主要帮助用户绕过拥堵线路以获得更流畅的跨境网络体验。它通过批量测速比较不同IP的表现，支持自定义延迟和速度阈值，适合需要优化Cloudflare CDN连接速度的用户，例如访问国际服务或部署代理应用时手动选择优质出口IP。工具提供简洁的结果输出与自动排序功能，便于直接配置使用。
- [Wox-launcher/Wox](https://github.com/Wox-launcher/Wox) ★27140 [`alfred`] [`launcher`] [`launchy`] [`productivity`] [`productivity-tools`] [`raycast`] [`spotlight`] [`wox`] [`wox-launcher`]  
  Wox是一款适用于Windows的快速启动工具，允许用户通过快捷键唤醒搜索框，快速查找文件、打开应用程序、执行系统命令或使用插件扩展功能。它通常被用来提升操作效率，支持模糊匹配和自定义插件，适合需要快速访问程序、文件或网络搜索的用户。
- [GopeedLab/gopeed](https://github.com/GopeedLab/gopeed) ★25225 [`android`] [`bittorrent`] [`cross-platform`] [`debian`] [`downloader`] [`flutter`] [`golang`] [`http`] [`https`] [`ios`] [`macos`] [`magnet`] [`torrent`] [`ubuntu`] [`windows`]  
  Gopeed是用Go语言开发的高性能下载工具，支持HTTP、HTTPS、FTP等多种协议，并提供Web界面管理。它主要用于本地或网络环境的快速文件下载，具有多线程加速、断点续传等功能，适合替代传统下载器作为自托管下载方案，满足个人或小型团队的下载管理需求。
- [containrrr/watchtower](https://github.com/containrrr/watchtower) ★24700 [`automation`] [`continuous-delivery`] [`devops`] [`docker`] [`hacktoberfest`] [`notifications`] [`receive-notifications`] [`registry`] [`update-checker`] [`watchtower`]  
  Watchtower 用于自动更新运行中的 Docker 容器到最新镜像版本，适合于需要持续部署的环境。它监控容器镜像仓库的变动，当检测到新镜像时会拉取并重启容器，无需手动干预。通常与 CI/CD 流程结合，帮助维护服务的最新状态，适合运维团队简化容器管理。
- [inconshreveable/ngrok](https://github.com/inconshreveable/ngrok) ★24434  
  ngrok 用于创建安全的公开 URL 将本地服务器暴露到互联网，无需修改防火墙或网络设置。它通过在公网服务器和本地服务间建立加密隧道，实现即时外部访问内网开发环境、演示 Web 应用或测试 Webhook 回调。适用于开发调试、临时分享本地项目或移动端测试对接场景，客户端支持多平台并允许自定义子域名进行服务映射。
- [OpenListTeam/OpenList](https://github.com/OpenListTeam/OpenList) ★23527 [`alist`] [`aliyunpan`] [`baidupan`] [`openlist`]  
  OpenList 主要用于构建高效的可搜索列表和目录系统，支持快速数据检索与分类管理。它常用于需要结构化展示大量条目的场景，如产品目录、资源库或文档索引，帮助用户通过关键词或筛选条件迅速定位目标内容。该项目通常结合现代前端技术实现动态交互，适合中小型数据集的 Web 应用需求。
- [navidrome/navidrome](https://github.com/navidrome/navidrome) ★22295 [`airsonic`] [`madsonic`] [`media-server`] [`music`] [`music-server`] [`navidrome`] [`opensubsonic`] [`raspberry-pi`] [`self-hosted`] [`streamer`] [`streaming-api`] [`streaming-audio`] [`subsonic`] [`subsonic-server`]  
  Navidrome 是一个自主托管的音乐流媒体服务器，用于管理和播放个人音乐收藏，支持多种音频格式和在线播放功能。它将本地音乐库组织为流媒体服务，允许用户通过网页界面或兼容客户端随时随地访问音乐，适合希望搭建私人音乐库并摆脱商业平台限制的用户。
- [apernet/hysteria](https://github.com/apernet/hysteria) ★22093 [`censorship-circumvention`] [`golang`] [`http-proxy`] [`hysteria`] [`proxy`] [`quic`] [`relay`] [`reliable-udp`] [`socks5`] [`tun`] [`vpn`]  
  Hysteria 是一款专为恶劣网络环境优化的代理工具，通过自定义 QUIC 协议实现抗丢包和抗封锁能力，尤其适合在高延迟、高丢包的网络条件下保持稳定连接。它支持多重混淆和伪装技术，能有效绕过深度包检测，常用于需要高速、抗干扰代理的场景，如跨境网络加速或规避网络限制。
- [chaitin/SafeLine](https://github.com/chaitin/SafeLine) ★21699 [`api-gateway`] [`application-security`] [`appsec`] [`blueteam`] [`bruteforce`] [`captcha`] [`cve`] [`cybersecurity`] [`firewall`] [`hackers`] [`http-flood`] [`security`] [`self-hosted`] [`sql-injection`] [`vulnerability`] [`waf`] [`web-application-firewall`] [`web-security`] [`websecurity`] [`xss`]  
  SafeLine 是一款开源的 RASP（运行时应用程序自保护）安全产品，基于 Java Agent 技术，可直接插桩至应用的运行时环境，无需修改源代码便能提供针对 Web 攻击的实时防护。其核心功能在于检测并防御如 SQL 注入、命令执行、反序列化等常见漏洞利用，通常适用于希望在生产环境中增强应用内生安全性的 Java Web 服务，能有效缓解传统边界防护难以应对的逻辑漏洞与未知威胁。
- [m1k1o/neko](https://github.com/m1k1o/neko) ★21385 [`docker`] [`golang`] [`media-streaming`] [`remote-control`] [`remote-desktop`] [`self-hosted`] [`virtual-browser`] [`vue`] [`webrtc`]  
  基于Docker容器提供虚拟桌面环境，支持通过浏览器远程访问共享的桌面会话。允许多用户同时观看或控制桌面，内置屏幕共享、音视频传输和基础输入设备模拟功能，常用于远程协作、演示或作为轻量级远程桌面解决方案。采用WebRTC技术实现低延迟传输，适合团队内部屏幕共享或嵌入在线教学场景。
- [putyy/res-downloader](https://github.com/putyy/res-downloader) ★18614 [`douyin`] [`kuaishou`] [`res-downloader`] [`wechat`] [`wechat-video`] [`xiaohongshu`]  
  可配合PUT/POST接口下载远端文件到本地，适合处理资源拉取、文件备份等常见场景，通常用于后端服务中实现文件下载与存储功能。
- [ginuerzh/gost](https://github.com/ginuerzh/gost) ★18094 [`dns`] [`go`] [`golang`] [`http2`] [`kcp`] [`obfs4`] [`quic`] [`shadowsocks`] [`sni`] [`socks5`] [`ssh`] [`tls`] [`tunnel`] [`tuntap`] [`udp`]  
  Gost是一个用Go语言实现的安全隧道工具，支持多种代理协议和端口转发功能，可用于网络数据加密传输、内网穿透及流量转发等场景。它提供了Socks5、HTTP、Shadowsocks等代理服务，并能通过灵活的配置实现多级代理链和透明代理，适用于需要安全通信或绕过网络限制的开发运维任务。
- [slackhq/nebula](https://github.com/slackhq/nebula) ★17524  
  Nebula 是一个用于保护计算机网络连接的灵活平台，利用现代加密技术构建点对点隧道，使得跨不同网络环境的设备能够像处于同一局域网一样安全通信。它常用于分布式团队、物联网部署或需要安全组网的基础设施场景，让用户可以绕过复杂的防火墙设置，实现加密的端到端连接与设备管理。
- [ory/hydra](https://github.com/ory/hydra) ★17395 [`authorization`] [`cloud`] [`docker`] [`federation`] [`hacktoberfest`] [`hydra`] [`identity`] [`oauth`] [`oauth-provider`] [`oauth2`] [`oauth2-provider`] [`oauth2-server`] [`oidc`] [`openid`] [`openid-connect`] [`openid-connect-provider`] [`openid-provider`] [`security`] [`server`] [`sso`]  
  Hydra 是一款基于 Python 的开源框架，专为简化复杂应用程序的配置管理而设计。它允许开发者通过可组合的配置文件、命令行参数和环境变量来动态管理实验设置，尤其适合机器学习、科学计算等需要频繁调整参数的多任务场景。该工具支持配置继承、动态插值和模块化组织，能有效减少重复代码并提升实验可复现性。
- [ent/ent](https://github.com/ent/ent) ★17135 [`ent`] [`entity-framework`] [`orm`]  
  一个专为Go语言设计的实体框架，用于构建和管理数据库模型，支持代码生成、强类型的查询API以及可扩展的架构，适用于构建复杂的数据访问层。
- [jeessy2/ddns-go](https://github.com/jeessy2/ddns-go) ★17063 [`alidns`] [`baiduyun`] [`cloudflare`] [`ddns`] [`ddns-go`] [`dnspod`] [`porkbun`]  
  Dynamically updates domain name resolution records到公网IP，支持阿里云、腾讯云、Cloudflare等多平台API自动同步，适用于家庭或小型办公室环境，通过简单配置实现无需固定IP的远程访问能力。
- [snail007/goproxy](https://github.com/snail007/goproxy) ★17002 [`dns-proxy`] [`encryption-proxy`] [`http`] [`http-proxy`] [`https-proxy`] [`kcptun`] [`reverse-proxy`] [`socket`] [`socks5`] [`socks5-proxy`] [`ss-proxy`] [`tcp`] [`tcp-proxy`] [`tls`] [`tls-proxy`] [`transparent-proxy`] [`udp`] [`udp-proxy`] [`upstream-proxies`] [`websocket-proxy`]  
  GoProxy是一个高性能的HTTP/HTTPS/SOCKS5代理服务器和端口转发工具，支持多种协议和加密方式，主要用于网络穿透、内网代理和流量转发，适合需要安全隧道、跨网络访问或匿名代理的场景，可帮助开发者实现灵活的网络通信和数据传输。
- [gotify/server](https://github.com/gotify/server) ★15266 [`api`] [`cloud`] [`free-software`] [`golang`] [`gotify`] [`hosting`] [`javascript`] [`notifications`] [`privacy`] [`react`] [`self-hosted`] [`self-hosting`] [`selfhosted`]  
  Gotify 是一个基于 Go 语言开发的轻量级实时消息推送服务器，支持通过 WebSocket 和 HTTP 接口向客户端发送即时通知。它通常用于自托管环境，帮助开发者或系统管理员将应用告警、自动化脚本结果等消息快速推送到手机或网页端，适合需要私有化部署消息服务的场景。
- [cloudflare/cloudflared](https://github.com/cloudflare/cloudflared) ★14848 [`cloudflare`] [`cloudflare-tunnel`] [`reverse-proxy`] [`zero-trust-network-access`]  
  cloudflared是Cloudflare提供的客户端守护进程，主要用于安全地连接本地服务器或内网服务到Cloudflare的边缘网络，支持通过Argo Tunnel技术实现无需暴露公网IP的远程访问，同时提供DNS over HTTPS解析和流量代理功能，通常用于构建零信任网络架构或加速本地开发环境的对外服务发布。
- [mickael-kerjean/filestash](https://github.com/mickael-kerjean/filestash) ★14379 [`archiving`] [`azure`] [`dms`] [`dropbox`] [`edrms`] [`ftp`] [`ged`] [`git`] [`ipfs`] [`mft`] [`nfs`] [`s3`] [`sae`] [`seda`] [`sftp`] [`sharepoint`] [`smb`] [`vfs`] [`webdav`]  
  Filestash 是一个自托管的现代 Web 文件管理器，它能让你像使用网页版网盘一样访问和管理服务器、云存储或本地磁盘上的多种存储后端与文件格式，提供直观的界面进行文件上传、下载、编辑、预览等操作，适合需要远程文件管理和多存储服务统一访问的个人或团队环境。
- [coredns/coredns](https://github.com/coredns/coredns) ★14185 [`cncf`] [`coredns`] [`dns-server`] [`go`] [`plugin`] [`service-discovery`]  
  提供灵活的 DNS 服务器功能，通过插件机制支持多种后端数据源和服务发现，常用于 Kubernetes 集群内部域名解析、云环境服务治理及自定义 DNS 逻辑扩展，能够高效处理 DNS 查询并集成 Prometheus 监控指标。
- [shadow1ng/fscan](https://github.com/shadow1ng/fscan) ★14139 [`fscan`] [`scanner`] [`scanning`] [`sec`] [`security`] [`security-tools`]  
  fscan是一款内网综合扫描工具，支持端口扫描、服务识别和弱口令爆破等功能，常用于渗透测试和安全评估场景，可快速探测网络资产并发现常见安全漏洞。
- [casdoor/casdoor](https://github.com/casdoor/casdoor) ★13934 [`agent`] [`agentic-ai`] [`agi`] [`ai-gateway`] [`auth`] [`authentication`] [`iam`] [`llm`] [`mcp`] [`mcp-gateway`] [`mfa`] [`oauth`] [`oidc`] [`openclaw`] [`radius`] [`saml`] [`scim`] [`single-sign-on`] [`sso`] [`webauthn`]  
  提供统一身份认证服务，支持 OAuth 2.0、OIDC、SAML 和 LDAP 等协议，可用于构建单点登录系统或集成到现有应用中作为认证中心，适合需要集中管理用户权限和多应用统一登录的场景。
- [tinode/chat](https://github.com/tinode/chat) ★13417 [`chat`] [`chat-application`] [`chatapp`] [`chatbots`] [`chatserver`] [`collaboration`] [`go`] [`golang`] [`instant-messaging`] [`messaging`] [`messaging-api`] [`messenger`] [`telegram`] [`video-call`] [`video-chat`] [`video-conferencing`] [`webchat-server`] [`webrtc`] [`whatsapp`] [`xmpp`]  
  基于即时通讯技术构建聊天应用和消息推送服务，支持聊天室、群组和私聊等常见场景，适用于社交平台或内部协作系统。项目通过 WebSocket 协议实现实时双向通信，提供 iOS、Android 及 Web 客户端 SDK，采用 Golang 后端处理高并发连接和消息存储。
- [fullstorydev/grpcurl](https://github.com/fullstorydev/grpcurl) ★12729 [`golang`] [`grpc`] [`protobuf`]  
  grpcurl 是调用 gRPC 服务的命令行工具，支持发送 JSON 或 Protobuf 格式的请求，便于调试和测试 gRPC API。无需编写客户端代码，即可与 gRPC 服务器交互，适用于服务开发、接口验证以及自动化测试场景。它兼容服务发现和反射机制，能够列表服务方法并生成请求模板，简化了 gRPC 服务的操作流程。
- [peterq/pan-light](https://github.com/peterq/pan-light) ★12121 [`baiduyun`] [`golang`] [`qml`] [`qt5`]  
  Pan-light 是一款无需安装客户端的在线网盘下载工具，可直接在浏览器中运行并提供百度网盘文件的高速下载服务。它基于 Golang 和 Qt 编写，通过模拟用户操作绕过限速，支持多线程下载与断点续传，适合需要快速获取百度网盘资源但不希望安装官方客户端的用户。
- [gravitl/netmaker](https://github.com/gravitl/netmaker) ★11676 [`cloud`] [`devsecops`] [`ipv6-support`] [`k8s`] [`kubernetes`] [`mesh`] [`mesh-network`] [`overlay-network`] [`secure-remote-access`] [`security`] [`self-hosted`] [`site-to-site`] [`virtual-networking`] [`vpn`] [`vpn-server`] [`wg-quick`] [`wireguard`] [`wireguard-ui`] [`wireguard-vpn`] [`zero-trust`]  
  Netmaker 帮助用户快速搭建和管理基于 WireGuard 的虚拟私有网络，尤其适合跨云、混合云或边缘计算环境下的安全组网需求。该系统通过自动化配置 VPN 节点、访问控制与服务发现，降低了分布式网络部署的复杂性，使团队能够轻松实现零信任安全架构下的设备互通与微服务连接。
- [0xJacky/nginx-ui](https://github.com/0xJacky/nginx-ui) ★11306 [`code-completion`] [`copilot`] [`cron`] [`docker`] [`go`] [`letsencrypt`] [`linux`] [`macos`] [`mcp`] [`mcp-server`] [`nginx`] [`self-hosted`] [`vue`] [`webui`] [`windows`]  
  Nginx-UI 可用于通过 Web 界面管理 Nginx 配置，支持在线编辑服务器配置、SSL 证书部署以及实时重载服务，适合需要可视化操作 Nginx 的用户快速修改站点设置或管理多台服务器，通常能降低直接编辑配置文件的出错风险。
- [therecipe/qt](https://github.com/therecipe/qt) ★10810 [`android`] [`asteroidos`] [`cross-platform-gui`] [`felgo`] [`freebsd`] [`go`] [`golang`] [`gui-framework`] [`ios`] [`javascript`] [`linux`] [`macos`] [`qt`] [`raspberry-pi`] [`sailfish-os`] [`ubuntu-touch`] [`webassembly`] [`windows`]  
  Qt 是一个跨平台的 C++ 图形用户界面应用开发框架，主要用于创建桌面、嵌入式和移动平台的应用程序，提供丰富的控件库和高性能的渲染能力。它通过信号与槽机制简化事件处理，支持 OpenGL 集成和多线程操作，适合开发需要原生外观和高响应性的软件，如工业控制、多媒体工具和跨平台商业应用。
- [Mrs4s/go-cqhttp](https://github.com/Mrs4s/go-cqhttp) ★10651 [`bot`] [`coolq`] [`coolq-http-api`] [`qqbot`] [`qqrobot`]  
  go-cqhttp 是基于 Mirai 框架的 Golang 实现，主要用于在 QQ 平台实现机器人和自动化交互功能，支持 QQ 协议处理消息收发、群组管理、文件操作等常见任务。它通常作为后端服务运行，帮助开发者快速搭建 QQ 机器人应用，适用于消息推送、智能客服或社群管理场景，通过 HTTP、WebSocket 等接口与外部系统集成。
- [claudiodangelis/qrcp](https://github.com/claudiodangelis/qrcp) ★10478 [`cli`] [`command-line`] [`golang`] [`qrcode`] [`utility`]  
  通过命令行快速生成二维码实现设备间文件传输，支持跨平台传输文本、图片或文档，特别适合在无共享存储环境下的临时文件分享，通常作为轻量级替代方案用于本地网络中的手机与电脑互传。
- [gokcehan/lf](https://github.com/gokcehan/lf) ★9378 [`file-manager`] [`terminal`]  
  这是一个基于终端的文件管理器，采用 Go 语言编写，通过键盘快捷键进行高效操作，支持 Vim 风格的键位绑定并内置预览功能，适合习惯在命令行环境下快速浏览和操作文件的开发者。
- [certimate-go/certimate](https://github.com/certimate-go/certimate) ★8795 [`acme`] [`acme-client`] [`automation`] [`certbot`] [`certificate`] [`certificate-management`] [`certificate-manager`] [`certificates`] [`devops`] [`google-trust-services`] [`https`] [`https-certificate`] [`lego`] [`letsencrypt`] [`self-hosted`] [`ssl`] [`ssl-cert`] [`ssl-certificate`] [`ssl-certificates`] [`zerossl`]  
  Certimate 是一个用 Go 语言编写的证书管理工具，主要用于自动化处理和签发 TLS/SSL 证书。它支持通过 ACME 协议自动获取和续期数字证书，帮助开发者和运维人员在分布式系统中轻松管理加密通信所需的安全凭证。该工具适合部署在微服务架构或云原生环境中，可减少手动维护证书的工作量，确保服务间的数据传输始终处于加密状态。通过轻量级设计和简单的配置，Certimate 能够提升证书管理的效率与可靠性。
- [ViRb3/wgcf](https://github.com/ViRb3/wgcf) ★8492 [`client`] [`cloudflare`] [`plus`] [`security`] [`vpn`] [`warp`] [`wireguard`]  
  wgcf 是一个用于生成和续期 WireGuard 配置文件的命令行工具，主要通过 Cloudflare 的 WARP 服务免费获取可用的 IPv4 和 IPv6 网络访问权限，帮助用户在纯 IPv6 环境下访问 IPv4 资源，或实现网络流量伪装。它适合需要在限制性网络环境中快速部署代理、避免被封锁的用户以及对 WireGuard 协议感兴趣的开发者。
- [cyfdecyf/cow](https://github.com/cyfdecyf/cow) ★8419  
  Cow是一个用于在Windows、macOS和Linux系统间剪切板共享的工具，可实现在不同设备间无缝复制粘贴文本或文件，并支持通过命令行快速同步剪贴板内容，适合需要跨机协作或频繁在多个设备间传递数据的场景。该项目通过本地网络传输保障操作安全性与速度，无需互联网连接。
- [nxtrace/NTrace-core](https://github.com/nxtrace/NTrace-core) ★8012 [`api`] [`as-path`] [`asn-lookup`] [`geoip`] [`geolocation`] [`ip-lookup`] [`network-analysis`] [`next-trace`] [`nexttrace`] [`traceroute`] [`utility`]  
  NCore用于实现互联网路由跟踪与网络路径可视化，通过ICMP、TCP等协议探测数据包经过的路由节点，可帮助开发者诊断网络延迟、路由异常或链路故障问题。它通常以命令行工具形式运行，支持自定义探测参数并输出图形化路径结果，适用于网络运维、CDN优化及跨境链路质量分析等场景。
- [gdy666/lucky](https://github.com/gdy666/lucky) ★7955 [`acme`] [`aliyunpan`] [`cron`] [`ddns`] [`dynadot`] [`filebrowser`] [`ftp`] [`ipv6`] [`socat`] [`stun`] [`vercel`] [`volcengine`] [`webdav`] [`wol`]  
  Lucky是一款轻量级的网络抽奖和活动辅助工具，主要用于个人或小型团队快速创建在线抽奖、转盘抽奖、投票或任务奖励等功能场景，通常配合微信公众号、Web页面或小程序使用。它提供了基础的随机算法和管理后台，适合小型营销活动或社群互动，支持自定义奖项和中奖概率，无需复杂开发即可实现灵活的抽奖流程。
- [mindoc-org/mindoc](https://github.com/mindoc-org/mindoc) ★7830 [`beego`] [`document`] [`go`] [`golang`] [`mindoc`] [`smartwiki`]  
  用于创建和托管技术文档的开源工具，支持Markdown编写、团队协作和版本管理，适合软件项目、API手册及知识库的在线文档维护与发布。
- [iyear/tdl](https://github.com/iyear/tdl) ★7785 [`bash`] [`download`] [`downloader`] [`telegram`] [`telegram-api`] [`telegram-bot`] [`telegram-bots`] [`telegram-channel`] [`telegram-userbot`]  
  TDL 是一个用于管理抖音下载任务的命令行工具，可批量下载用户视频、收藏内容及直播流，适用于媒体备份、内容分析或离线观看等场景，通过配置文件与任务队列提供稳定的下载支持。
- [Hackl0us/GeoIP2-CN](https://github.com/Hackl0us/GeoIP2-CN) ★7393 [`clash`] [`geoip`] [`geoip2`] [`proxy`] [`quantumultx`] [`shadowrocket`] [`shadowsocks`] [`surge`]  
  通过解析用户IP地址提供精确的中国大陆地理位置信息，适用于需要区分国内外流量的网站访问统计、内容区域化显示或网络服务质量监测等场景。基于GeoIP2数据库实现高效查询，可帮助开发者快速集成地理位置服务到应用程序中，通常配合Nginx、日志分析工具使用以实现精准的访问控制或数据分析。
- [lxn/walk](https://github.com/lxn/walk) ★7096 [`declarative`] [`declarative-ui`] [`go`] [`gui`] [`gui-toolkit`] [`win32`] [`windows`] [`windows-desktop`]  
  Walk是基于Go语言开发的Windows GUI应用程序开发框架，提供了创建桌面界面所需的窗口、控件和事件处理机制，支持通过声明式方式构建用户交互界面。它封装了Windows API，使开发者能够快速实现对话框、菜单栏、数据绑定等常见功能，通常用于需要原生Windows外观和性能的跨平台或本地化应用开发。
- [ouqiang/gocron](https://github.com/ouqiang/gocron) ★6254 [`cron`] [`crontab`] [`golang`] [`scheduler`]  
  Gocron 是一个基于 Go 语言开发的轻量级定时任务管理系统，用于管理和调度周期性的后台作业。它支持通过 Web 界面可视化地添加、编辑或删除任务，并查看任务执行日志和状态。通常用于替代 Crontab 进行集中式的任务管理，适合在分布式环境中部署和维护定时脚本或应用程序，提供错误报警和并发控制等功能。
- [jpillora/cloud-torrent](https://github.com/jpillora/cloud-torrent) ★6248 [`cloud`] [`golang`] [`self-hosted`] [`torrent`] [`torrent-client`]  
  将 BitTorrent 客户端与云存储功能结合，允许用户通过网页界面远程添加和管理种子下载任务。下载的文件可直接在线播放或保存至云端，适合需要远程下载和即时访问内容的场景，常用于个人媒体库搭建或免本地存储的下载需求。基于 Go 语言开发，支持磁力链接和种子文件，轻量且易于部署。
- [Ackites/KillWxapkg](https://github.com/Ackites/KillWxapkg) ★5898  
  KillWxapkg 用于解密和反编译微信小程序包（wxapkg）以获取其中的源代码和资源文件；通常被开发者或安全研究人员用来分析小程序逻辑、排查问题或进行代码审计，适合需要提取微信小程序内部资源或学习其实现机制的场景。
- [openark/orchestrator](https://github.com/openark/orchestrator) ★5785 [`high-availability`] [`management-system`] [`mysql`] [`replication`]  
  Orchestrator 是一个面向 MySQL 拓扑管理的高可用性工具，主要用于自动化处理主从复制架构的发现、监控与故障转移；它能够持续监测数据库集群的健康状态，在主机发生故障时可靠地执行自动或手动的故障切换（failover），并将从库提升为新主库以维持服务。该系统通常适合需要确保数据库高可用和简化复制拓扑管理的场景，提供可视化界面管理复杂的复制结构。
- [hacdias/webdav](https://github.com/hacdias/webdav) ★5699 [`filesystem`] [`go`] [`http`] [`server`] [`webdav`]  
  Webdav 是一个用 Go 语言编写的简单高效 WebDAV 服务器程序，主要用于在网络环境中托管和共享文件目录。它允许用户通过标准的 WebDAV 客户端（如 Windows 的资源管理器、macOS 的 Finder 或第三方文件管理器）直接访问和管理服务器上的文件，实现类似本地磁盘的挂载效果。该项目适合需要轻量级自建文件共享服务的场景，通过配置可以设置访问认证、路径映射等规则，方便个人或小型团队进行远程文件存储与同步。
- [qjfoidnh/BaiduPCS-Go](https://github.com/qjfoidnh/BaiduPCS-Go) ★5293 [`baidupcs`]  
  基于百度网盘 API 开发的命令行客户端，能在终端或脚本中上传下载、管理网盘文件，适合自动化备份、服务器环境操作或偏好命令行效率的用户使用，无需依赖官方图形界面。
- [ngoduykhanh/wireguard-ui](https://github.com/ngoduykhanh/wireguard-ui) ★5119 [`wireguard`] [`wireguard-admin`] [`wireguard-config-gen`] [`wireguard-go`] [`wireguard-ui`] [`wireguard-vpn`] [`wireguard-web`]  
  WireGuard UI 为 WireGuard VPN 提供了基于网页的可视化管理界面，便于用户通过浏览器配置和管理 WireGuard 服务器及客户端。它简化了密钥生成、设备管理、流量监控等操作，无需手动编辑配置文件，适合需要快速部署和维护中小规模 VPN 服务的场景，尤其方便不熟悉命令行操作的用户。
- [tickstep/aliyunpan](https://github.com/tickstep/aliyunpan) ★5079 [`adrive`] [`backup`] [`linux`] [`macos`] [`sync`] [`windows`]  
  阿里云盘同步工具用于将本地文件与阿里云盘进行双向或单向同步，支持多用户、多任务和增量同步，可自动化备份和迁移数据，适合个人用户进行文件备份、多设备间同步或作为轻量级网盘客户端使用。
- [wxbool/video-srt-windows](https://github.com/wxbool/video-srt-windows) ★5038 [`ffmpeg`] [`go`] [`golang`] [`srt-subtitles`] [`video`] [`windows-gui`]  
  这是一个用于为视频文件自动生成字幕的工具，运行于Windows平台。它能提取视频中的音频并识别语音，将其转换为文字字幕文件（如SRT格式），方便用户为没有字幕的视频快速添加字幕，尤其适合处理录屏、课程或未配字幕的外语视频，减轻了手动听译的工作量。
- [kingparks/cursor-vip](https://github.com/kingparks/cursor-vip) ★4792 [`cursor`] [`cursor-pro`]  
  Cursor VIP 是一种用于智能代码编辑器 Cursor 的扩展方案或第三方工具，其核心在于通过非官方手段提供高级功能访问或提升编辑体验。它主要面向希望在不依赖商业授权的情况下使用 Cursor 高级特性的开发者和编程爱好者，例如增强的 AI 代码生成、更长的上下文处理或定制化编辑支持，常见于快速原型开发、代码重构和自动化脚本编写等场景。该方案通常通过代码补全效率的提升来帮助个人或小团队应对日常编程与调试中的常见挑战。
- [goravel/goravel](https://github.com/goravel/goravel) ★4781 [`api`] [`framework`] [`go`] [`golang`] [`grpc`] [`laravel`] [`microservice`] [`performance`] [`web`]  
  Goravel 是一个基于 Go 语言构建的现代化 Web 框架，借鉴了 Laravel 的优秀设计哲学，帮助开发者快速构建稳健高效的应用程序。它提供了路由、中间件、数据库 ORM 等核心功能，常用作 API 服务器或全栈 Web 开发的基础框架。适合需要高性能和简洁代码结构的项目，尤其适用于微服务和高并发场景下的快速开发。
- [cppla/ServerStatus](https://github.com/cppla/ServerStatus) ★4671  
  ServerStatus 是一款轻量级的服务器监控工具，通过客户端上报系统状态信息至服务端，实时展示多台服务器的运行状态、网络流量、CPU 和内存使用率等数据，适合用于分布式系统或服务器集群的集中监控与管理。
- [lwch/natpass](https://github.com/lwch/natpass) ★4455 [`code-server`] [`golang`] [`protobuf`] [`shell`] [`tls`] [`vnc`]  
  lwch/natpass 是一个使用 Go 语言开发的远程控制工具，主要用于在复杂网络环境下实现安全的远程桌面访问和命令行终端管理。它通常通过在服务端和客户端之间建立加密隧道来穿透防火墙和 NAT 设备，使得用户能够像在本地一样操作远程主机，非常适合运维人员、开发者和需要远程协助的场景来替代传统 VPN 或 TeamViewer 等方案。
- [sjqzhang/go-fastdfs](https://github.com/sjqzhang/go-fastdfs) ★4137 [`breakpoint-resume`] [`cloud-storage`] [`cloudnative`] [`distributed-file-storage`] [`distributed-file-system`] [`fastdfs`] [`file-system`] [`fileserver`] [`filesystem`] [`go`] [`go-fastdfs`] [`godfs`] [`object-storage-service`] [`oss`] [`rsync`] [`small-file-merge`] [`storage`] [`storage-servers`] [`sync`] [`tus`]  
  Go-fastdfs 是一个基于 HTTP 协议的分布式文件系统，采用 Golang 开发，无需依赖第三方存储服务即可实现文件上传、下载、删除和备份等管理功能。该系统支持断点续传、小文件合并存储，通过内嵌的Web界面方便地管理文件，通常用于图片、文档等静态资源存储和高并发访问场景。其设计轻量且部署简单，适合中小型项目快速搭建私有文件存储服务。
- [fanpei91/torsniff](https://github.com/fanpei91/torsniff) ★4022 [`bep0003`] [`bep0005`] [`bep0009`] [`bep0010`] [`bittorrent-protocol`] [`dht`] [`golang`] [`metadata`]  
  Torsniff 是基于 Python 开发的 BitTorrent 种子索引爬虫工具，主要用于抓取和索引公开对等网络中的 BT 种子信息。它能够自动嗅探 DHT 网络和跟踪器，收集种子的元数据并生成可供搜索的索引库，通常用于资源存档、网络监控或研究分析等场景。该项目适合需要大规模获取 BitTorrent 资源数据的技术人员和安全研究人员使用。
- [prometheus-community/windows_exporter](https://github.com/prometheus-community/windows_exporter) ★3584 [`prometheus`] [`prometheus-exporter`] [`windows`] [`wmi`]  
  这个项目用于在 Windows 操作系统中收集系统级性能指标并通过 HTTP 端点暴露给 Prometheus 监控系统，通常适合追踪服务器或工作站的硬件状态与系统资源使用情况。它能够采集包括 CPU、内存、磁盘、网络接口、系统服务以及 Windows 特有的性能计数器在内的多种数据，帮助运维人员在统一的可观测性平台下实现对 Windows 基础设施的监控与告警。
- [TruthHun/BookStack](https://github.com/TruthHun/BookStack) ★3511 [`beego`] [`bookstack`] [`gitbook`] [`golang`] [`markdown`] [`mindoc`]  
  BookStack 是一款基于 Mindoc 开发的在线文档管理系统，主要用于团队知识库和文档协作，支持 Markdown 编辑器、文档版本管理、权限控制以及多级目录组织。它适合中小企业或技术团队构建内部知识共享平台，提供类似在线书籍的阅读体验，便于项目文档、API手册或产品说明的集中维护和发布。
- [greycodee/wechat-backup](https://github.com/greycodee/wechat-backup) ★3422  
  支持对微信聊天记录进行备份和导出，帮助用户将个人或群组中的文字、图片、语音、文件等多媒体消息迁移至电脑本地存储，便于长期保存、离线查看或进行数据分析。它通常通过解析本地数据库实现，适合需要留存重要对话或整理微信资料的用户，操作过程需在电脑端完成。
- [fagongzi/manba](https://github.com/fagongzi/manba) ★3315 [`api`] [`api-gateway`] [`backend-apis`] [`circuit-breaker`] [`etcd`] [`gateway`] [`go`] [`golang`] [`microservice`] [`proxy`] [`traffic-control`]  
  manba 是一个开源的实时监控系统，主要用于收集和分析应用性能指标与链路追踪数据。它通常适合微服务架构下的分布式系统监控，能够实时聚合指标并生成可视化图表，帮助开发者快速定位性能瓶颈和系统异常。该项目支持多维度告警配置，可对接 Prometheus 等常见生态系统，便于集成到现有的 DevOps 工作流中。
- [yisier/nps](https://github.com/yisier/nps) ★3309 [`go`] [`http`] [`https`] [`nps`] [`tcp`] [`udp`]  
  NPS 主要用于搭建内网穿透代理服务，支持 TCP、UDP 流量转发和 Web 管理界面，适用于远程访问内网设备、部署调试和端口映射等场景，常配合域名解析实现公网到局域网的稳定连接。
- [eyebluecn/tank](https://github.com/eyebluecn/tank) ★3236 [`golang`] [`linux`] [`storage`]  
  Eyebluecn/Tank 是一款基于 Go 语言开发的开源云盘系统，提供文件存储、在线预览和分享功能。它支持多种存储后端，适合个人或小团队搭建私有云存储服务，能够有效管理文档、图片等各类文件，并保障数据隐私和安全。
- [eolinker/goku_lite](https://github.com/eolinker/goku_lite) ★3134 [`api`] [`api-gateway`] [`gateway`] [`goku`] [`microservices`] [`middleware`] [`proxy`]  
  Goku Lite是一款开源的API网关系统，专注于帮助开发团队管理和监控微服务API接口。它支持动态路由、负载均衡、访问控制以及实时日志统计等核心功能，通常用于构建高可用的API中间层，方便实现服务聚合、流量限制和安全防护。该项目适合需要统一管理分布式服务接口的企业或团队，尤其适用于微服务架构下的API生命周期管理和性能优化。
- [yunionio/cloudpods](https://github.com/yunionio/cloudpods) ★2917 [`ai`] [`aws`] [`azure`] [`baremetal`] [`baremetal-provisioning`] [`cloud`] [`cmp`] [`gcp`] [`hybridcloud`] [`iaas`] [`infrastructure`] [`kubernetes`] [`kvm`] [`multi-cloud`] [`openclaw`] [`openstack`] [`private-cloud`] [`qemu`] [`unified-cloud`] [`vsphere`]  
  Cloudpods是一款开源的混合云管理平台，能够统一管理多个公有云、私有云和本地基础设施资源。它支持虚拟机、容器、存储和网络等服务的自动化部署与运维，帮助用户简化多云环境下的资源调度、成本控制和运维管理。适合企业构建统一的云管体系，提升资源利用效率并降低运维复杂度。
- [0xDkd/auxpi](https://github.com/0xDkd/auxpi) ★2707 [`api`] [`baidu-image`] [`cdnjs`] [`element-ui`] [`go`] [`golang`] [`image-store`] [`mdui`] [`rest-api`] [`vue`] [`weibo-image`]  
  auxpi 是一款基于 Golang 开发的开源图床程序，支持将图片上传至多个第三方存储平台如 SM.MS、阿里云 OSS 等，并可通过 API 接口快速集成到博客或应用中。它提供简洁的 Web 界面用于管理上传记录，通常用于减轻网站存储压力、实现图片资源分发加速，适合个人站长或小型团队进行高效的图片托管和外链管理。
- [trzsz/trzsz-ssh](https://github.com/trzsz/trzsz-ssh) ★2661 [`mosh`] [`openssh`] [`openssh-client`] [`rz`] [`ssh`] [`ssh-client`] [`sz`] [`tmux`] [`trz`] [`trzsz`] [`tssh`] [`tsshd`] [`tsz`] [`zmodem`]  
  支持在 SSH 客户端的直接拖拽上传和下载文件，为传统命令行传输提供图形化便捷操作。无需额外配置服务器或客户端，本地安装后即可在支持 trsz / trz 协议的终端中通过拖放实现文件传输，简化了远程服务器文件管理的流程，尤其适合常需与远程主机交互的开发或运维场景。基于原有 SSH 安全通道，保持传输的加密性和兼容性。
- [likaia/nginxpulse](https://github.com/likaia/nginxpulse) ★2603  
  监控 Nginx 服务器性能与流量数据，实时收集连接数、请求状态、带宽使用等指标，并以 Web 面板形式展示可视化图表和统计信息。通常配合 Nginx 的存活性监控和日志分析，帮助运维人员快速识别性能瓶颈、异常流量或服务中断问题，适合中小规模站点或云服务器的运行状态监测。
- [sjlleo/netflix-verify](https://github.com/sjlleo/netflix-verify) ★2531  
  用于验证网络环境是否支持观看Netflix内容，通过检测本地IP地址的区域权限和代理服务器可用性。它能够识别Netflix在不同国家提供的影片库限制，帮助用户确认代理工具或VPS是否解锁了特定地区的流媒体服务。通常适用于跨境网络调试、代理服务质量检查等场景，支持批量测试并输出详细的解锁状态和IP地理信息。
- [jinsi-ai/b0pass](https://github.com/jinsi-ai/b0pass) ★2344 [`bigfile`] [`file-transfer`] [`go`] [`golang`] [`webserver`] [`wifi-network`]  
  B0Pass 是一个基于 AI 的密码管理助手工具，主要用于帮助用户安全地生成、存储和自动填充各种复杂密码。它利用本地化或云端加密技术来保管凭证，通常与浏览器扩展或移动应用集成，实现一键登录网站和应用，适合需要管理大量账户又担心安全问题的个人或团队用户，旨在解决密码重复使用和记忆困难的问题。
- [koho/frpmgr](https://github.com/koho/frpmgr) ★2012 [`frp`] [`frpc`] [`go`] [`gui`] [`proxy`] [`reverse-proxy`] [`windows`]  
  frpmgr 是用于管理 frp 内网穿透客户端的图形界面工具，帮助用户更方便地配置和运行 frp 服务，适合需要在本地设备与公网之间建立安全隧道的小型团队或个人开发者。它通过简化配置流程和提供直观的操作界面，让不具备网络专业知识的用户也能快速实现内网服务的外部访问，通常支持隧道创建、状态监控和日志查看等功能。
- [daeuniverse/gg](https://github.com/daeuniverse/gg) ★1929 [`go-graft`] [`graftcp`] [`proxy`] [`proxychains`] [`v2ray`]  
  gg 是一个高效的命令行工具，专门用于在终端界面快速发起 Google 搜索或跳转至其他常用 Web 服务。用户只需在命令行输入简短指令后接关键词，工具便会调用默认浏览器打开对应的搜索结果页面。它主要为了解决开发者在工作流中频繁切换至浏览器进行信息检索的痛点，提升了查找文档、技术问题和在线资源的效率。通常适合程序员、系统管理员等经常使用命令行操作的用户集成到日常开发环境中。
- [kingwrcy/moments](https://github.com/kingwrcy/moments) ★1884  
  用于帮助用户记录和管理个人生活瞬间，支持创建图文动态、时间线浏览以及社交分享功能，通常适合个人日记、家庭回忆整理或小范围朋友间的私密互动场景。
- [ProudMuBai/GoFilm](https://github.com/ProudMuBai/GoFilm) ★1863 [`axios`] [`elementplus`] [`film`] [`gin`] [`go-redis`] [`gocolly`] [`golang`] [`gorm`] [`movies`] [`robfig-cron`] [`vite`] [`vue3`]  
  GoFilm 是一个用于自动下载和管理影视资源的工具，支持从多个视频站点抓取内容并整合到本地媒体库，方便用户离线观看。它通常通过自动化脚本或 API 接口获取影片信息与下载链接，适用于个人媒体服务器场景，帮助解决资源分散和手动下载的繁琐问题。该项目基于 Go 语言开发，适合需要构建私有影视库的技术爱好者使用。
- [eolinker/apinto](https://github.com/eolinker/apinto) ★1672 [`api`] [`api-gateway`] [`apigateway`] [`apinto`] [`dubbo2`] [`gateway`] [`go`] [`goku`] [`golang`] [`grpc`] [`loadbalancer`] [`microservice`] [`middleware`] [`plugin`] [`proxy`] [`router`] [`servicemesh`]  
  Apinto 是一个高性能 API 网关，用于微服务架构中实现路由转发、负载均衡、限流降级和 API 管理等核心功能，帮助开发团队简化服务治理流程。它通常适用于构建可扩展的分布式系统，支持动态配置和插件扩展，能够有效管理 API 流量并提升系统稳定性。
- [palark/ovpn-admin](https://github.com/palark/ovpn-admin) ★1666 [`linux`] [`openvpn`] [`openvpn-admin`] [`vpn`]  
  OpenVPN-Admin是一个用于管理OpenVPN服务器的Web界面工具，帮助用户通过图形化方式管理VPN用户、证书和连接状态，简化OpenVPN的日常运维操作，适合需要集中管理VPN服务的团队或中小型网络环境。
- [msterzhang/onelist](https://github.com/msterzhang/onelist) ★1533  
  onelist 是一个用于统一管理多个阿里云盘账号中影视资源的工具，能够自动同步文件夹结构并生成可直接播放的索引页面。它解决了多账号下资源分散、查找不便的问题，用户通过浏览器即可直接观看视频，无需重复转存文件。适合需要整合个人或团队阿里云盘内媒体库的场景，通常配合 emby 或直接部署为私人影视站点使用。
- [helloxz/zdir](https://github.com/helloxz/zdir) ★1531 [`alist`] [`file-browser`] [`h5ai`] [`webdav`] [`zdir`]  
  Zdir 是一款轻量级的开源目录列表程序，帮助用户快速搭建个人或团队的在线文件目录索引页面。它支持 Web 界面直接浏览、搜索和管理服务器上的文件和文件夹，无需数据库即可运行，常用于搭建私有云盘、软件下载站或项目文档仓库。基于 PHP 开发，部署简单，适合需要高效共享静态资源的场景。
- [zhanghanyun/backtrace](https://github.com/zhanghanyun/backtrace) ★1529  
  用于生成跨平台 C/C++ 项目的调用栈回溯信息，便于快速定位程序运行时的崩溃与异常节点。它可以自动解析符号地址，输出可读的堆栈跟踪，通常集成在日志或错误报告中辅助调试，适合嵌入式系统、服务端应用等需要现场问题诊断的场景。
- [samwafgo/SamWaf](https://github.com/samwafgo/SamWaf) ★1493  
  SamWaf 用于构建 Web 应用防护机制，可自动识别和拦截常见网络攻击如 SQL 注入和跨站脚本。该项目适合部署在 Web 服务前端，作为轻量级安全中间件，帮助开发者减少代码层面的安全风险。通常与后端应用配合使用，支持自定义规则以适应不同业务场景的安全需求。
- [px-org/PanIndex](https://github.com/px-org/PanIndex) ★1405  
  PanIndex 是一款用于将各类网盘或对象存储服务目录转为可直接浏览和下载的网页索引工具，支持阿里云盘、腾讯云COS、S3协议等常见存储源，自动生成文件列表并允许直链分享，常用于搭建个人网盘导航站或团队内部资源库，简化私有文件的在线管理与分发流程。
- [Simple-Tracker/qBittorrent-ClientBlocker](https://github.com/Simple-Tracker/qBittorrent-ClientBlocker) ★1229 [`bitcomet`] [`qbittorrent`] [`transmission`]  
  通过集成qBittorrent的HTTP接口与IP黑名单功能，自动屏蔽已知恶意或低质量的BitTorrent客户端连接，主要用于提升P2P下载时的安全性与网络效率。它能持续监控并阻断有风险的客户端行为，适用于需要优化种子下载稳定性、减少无效流量消耗的BT用户，通常配合qBittorrent的自动更新规则机制实现动态防护。
- [awake1t/PortBrute](https://github.com/awake1t/PortBrute) ★1114  
  该工具专注于端口暴力破解和弱口令检测，通过多线程技术快速扫描目标主机的常见服务端口并尝试多种用户名密码组合测试。它通常用于渗透测试或安全评估场景，帮助发现网络中存在的弱口令风险，支持 SSH、RDP、FTP 等多种协议，适合安全研究人员和系统管理员进行内部网络弱口令检测与防御加固。
- [songloft-org/songloft](https://github.com/songloft-org/songloft) ★1079 [`docker`] [`docker-compose`] [`home-server`] [`miot`] [`music`] [`music-player`] [`music-server`] [`nas`] [`navidrome`] [`songloft`] [`subsonic`] [`webdav`] [`xiaomusic`]  
  Songloft 是一个专注于音乐创作与协作的开源平台，旨在为音乐人提供灵活的版本控制和实时协作工具，支持乐谱编辑、音频文件管理及创作历史追踪，适合个人创作者与团队共同开发音乐作品，改善传统音乐制作中的版本混乱与协作低效问题。
- [maintell/webBenchmark](https://github.com/maintell/webBenchmark) ★1014  
  WebBenchmark 是一个用于 Web 服务器性能测试的工具，通过 HTTP 请求压力测试评估服务器的吞吐量、响应时间和并发处理能力。它通常适合开发者或运维人员对网站、API 服务进行负载测试，帮助发现性能瓶颈和优化配置。该项目使用 Go 语言编写，支持自定义并发数、请求时长和测试目标，便于快速部署和跨平台使用。
- [mat/besticon](https://github.com/mat/besticon) ★993 [`favicon`] [`go`] [`icons`] [`microservice`] [`service`] [`website`]  
  Besticon 是一个用于从网站获取高质量图标的轻量级服务，能够自动识别和提取网站的 favicon、Apple Touch 图标或社交媒体图片。它适用于需要快速获取网站标准图标的场景，如书签管理工具、搜索引擎结果显示或移动应用开发。该项目可以用作独立的 HTTP 服务或库集成，帮助开发者简化图标获取流程，无需依赖复杂的解析逻辑。
- [boypt/simple-torrent](https://github.com/boypt/simple-torrent) ★987  
  提供轻量级BitTorrent客户端功能，支持HTTP/SFTP/磁力链等多种下载协议，内置Web界面管理任务并集成基础搜索工具，适用于搭建个人离线下载服务器或资源获取服务。
- [scaleway/scaleway-cli](https://github.com/scaleway/scaleway-cli) ★987 [`cli`] [`go`] [`scaleway`] [`scaleway-cli`]  
  Scaleway CLI 是一个命令行工具，用于与 Scaleway 云平台交互，帮助用户管理云资源如服务器、存储、容器和网络服务，适合开发者或运维人员通过终端快速部署和自动化云基础设施操作。
- [lemoex/oci-help](https://github.com/lemoex/oci-help) ★906  
  OCI-Help 是一款针对 Oracle Cloud Infrastructure 的辅助工具，主要用于简化 OCI 常用操作和脚本管理。它通过提供便捷的命令行功能帮助用户处理云计算资源，典型应用场景包括快速查询实例信息、管理存储或自动化部署任务。该项目适合需要在 OCI 环境中提升运维效率的开发者和系统管理员，尤其方便日常操作和脚本编写。
- [Kenshin/gnvm](https://github.com/Kenshin/gnvm) ★680  
  gnvm 是 Windows 环境下专门用于管理多个 Node.js 版本的轻量级工具，通过命令行快速切换不同版本的 Node.js 和 npm。适合需要同时维护多个项目或测试不同 Node.js 兼容性的开发者，避免了全局安装版本冲突的问题，提升开发效率。
- [yqchilde/wxbot](https://github.com/yqchilde/wxbot) ★662 [`chatgpt`] [`go`] [`golang`] [`gpt-35-turbo`] [`openai`] [`wechat`] [`wechat-bot`] [`wxbot`]  
  基于微信开放接口开发的机器人框架，允许用户通过编程方式实现自动化消息收发、群组管理、好友互动等常见微信功能。通常用作搭建智能客服、自动化任务提醒或社交娱乐工具，适用于需要集成微信交互的开发者与爱好者，支持二次开发实现自定义逻辑。
- [tickstep/cloudpan189-go](https://github.com/tickstep/cloudpan189-go) ★656  
  专为天翼云盘设计，可替代官方客户端的命令行工具，支持核心的云存储文件管理操作。它能通过简单指令实现文件上传下载、目录查看、分享链接生成和离线下载任务管理，便于在服务器或无图形界面的环境中自动化处理云盘数据，适合需要批量传输或集成脚本的用户。
- [ZeroDream-CN/SakuraFrp](https://github.com/ZeroDream-CN/SakuraFrp) ★561  
  SakuraFrp 是一款主要提供内网穿透服务的开源客户端工具，帮助用户将本地网络服务暴露到公共互联网，方便远程访问或调试。它常用于家庭 NAS 访问、网站开发测试、远程桌面连接等场景，支持多种协议如 HTTP、TCP 和 UDP，适合需要稳定低延迟公网访问的个人用户或小型团队。该工具通常配合服务商提供的中继服务器使用，简化了端口映射和动态域名配置流程。
- [crabkun/switcher](https://github.com/crabkun/switcher) ★445  
  Switcher是一个轻量级的功能开关和功能切换工具，用于在运行时动态控制应用程序的行为而无需重新部署。它帮助开发团队实现蓝绿部署、A/B测试、灰度发布和紧急问题修复，通过配置中心管理功能开关状态。支持多环境配置和权限控制，适用于微服务架构和持续交付流程中的功能管理需求。
- [sagan/ptool](https://github.com/sagan/ptool) ★444  
  通过简洁的图形界面快速调用和管理多种系统工具，主要用于提升开发者和技术用户的日常工作流效率。它通常适合需要在同一窗口中集成终端、文件操作或网络调试等常用功能的场景，减少工具切换带来的时间消耗，同时提供良好的交互体验。
- [ssstk/cngrok](https://github.com/ssstk/cngrok) ★362  
  cngrok 是一款让内网服务能够安全暴露到公网的工具，基于 ngrok 开源技术实现反向代理和隧道功能，适合开发者在本地调试 web 服务、演示移动应用或临时分享本地站点，无需配置复杂的网络和防火墙规则，通过简单命令即可生成公网访问地址，支持 HTTP 和 HTTPS 协议并关注连接安全性。
- [sigcn/pg](https://github.com/sigcn/pg) ★302 [`arq`] [`firewall`] [`go`] [`ipv6`] [`nat`] [`p2p`] [`peerguard`] [`udp`] [`vpn`]  
  该工具用于自动生成PostgreSQL数据库的变更管理脚本，通过对比数据库模型与目标结构差异来同步Schema版本。它支持生成DDL语句（如创建表、索引）和数据迁移操作，通常适用于持续集成环境或团队协作时的数据库版本控制场景，帮助开发者避免手动编写SQL脚本导致的错误与不一致问题。
- [WenLiCG/PowerWhois](https://github.com/WenLiCG/PowerWhois) ★220 [`domain`] [`proxy`] [`rdap`] [`whois`]  
  用于查询域名信息的开源代理工具，可将 Whois 查询结果统一转为结构化 JSON 格式输出，方便开发者集成到应用程序中自动获取域名注册状态、过期时间、注册商信息等数据，适合需要批量查询或监控域名变更的技术场景。
- [TimothyYe/glance](https://github.com/TimothyYe/glance) ★217 [`cli-reader`] [`glance`] [`txt-reader`]  
  Glance 是一个轻量级的命令行网页分析工具，能够在终端中直接显示网页的基本信息，常用于快速查看网站状态、监测网络请求性能或验证网页配置等场景。它通过简洁的界面展示网页的标题、描述、关键词等元数据，帮助开发者在服务器环境、持续集成流程及日常调试中高效地检查网页内容，尤其适合无需打开浏览器时进行初步的网页数据分析或远程调试任务。
- [upyun/upx](https://github.com/upyun/upx) ★201 [`cli`] [`upyun`]  
  主要用于提供 UPYUN 云存储服务的命令行客户端工具，支持文件上传、下载、删除和管理等操作，通常适合开发者或运维人员通过终端快速与又拍云存储进行交互，简化资源管理和自动化任务流程。
- [cxbdasheng/dnet](https://github.com/cxbdasheng/dnet) ★175 [`aliyun-api`] [`bai-du`] [`baiduyun`] [`cdn`] [`dcdn`] [`ddns`] [`ipv6`] [`tencentcloud-sdk`]  
  dnet 主要用于在 Linux 环境下创建和管理虚拟网络接口，为应用程序提供便捷的网络隧道与数据包转发能力。它适合构建轻量级的网络代理工具、实现自定义的网络协议栈或进行网络流量分析与测试，帮助开发者在用户态处理网络数据包，通常作为底层网络编程的辅助组件。
- [moeyy01/gh-proxy-go](https://github.com/moeyy01/gh-proxy-go) ★152  
  gh-proxy-go主要用于提供稳定高效的GitHub文件代理下载服务，可绕过网络限制并加速资源获取，适合开发者、开源项目或团队在访问GitHub资源时解决下载慢或连接失败的问题。
- [3394772548/yue-spider](https://github.com/3394772548/yue-spider) ★137  
  Yue-Spider 主要用于网页数据抓取与内容提取，支持多线程和动态页面渲染，适合批量采集新闻、商品信息或社交媒体数据等公开网络资源。基于常见的爬虫技术生态，通常配置简单且易于集成到数据分析或监控流程中。
- [mudkipme/mortis](https://github.com/mudkipme/mortis) ★131  
  Mortis 是一款用于 Minecraft 服务器的事件驱动机器人框架，主要用于自动化管理、玩家互动和服务器监控。它通过插件机制支持自定义事件响应，能够处理玩家加入、聊天消息、区块变化等游戏事件，适合服务器管理员简化日常运维、增强社区互动或实现游戏玩法自动化。
- [jsyzchen/pan](https://github.com/jsyzchen/pan) ★98 [`baidu`] [`go`] [`netdisk`] [`openapi`] [`pan`] [`pan-openapi`] [`pan-sdk-go`] [`pcs`] [`pcsapi`] [`sdk`] [`sdk-go`] [`xpan`]  
  基于 Node.js 开发的网盘系统，支持文件上传下载、在线预览及多用户管理功能，常用于搭建个人或团队的私有云存储服务，提供类百度网盘的界面与操作体验，适合需要自主掌控数据存储和分享的场景。
- [kaigedong/cnm3u](https://github.com/kaigedong/cnm3u) ★84  
  CNM3U 致力于自动生成直播源和播放列表文件，方便用户快速获取并观看网络上的直播电视频道。它通常通过抓取和聚合多个公开源来生成 M3U 播放列表，适合需要在智能电视、手机或电脑上观看直播节目的普通用户或开发者。该项目简化了手动收集和维护直播源的过程，提升了观看体验。
- [jihuayu/TCP-CDN](https://github.com/jihuayu/TCP-CDN) ★60  
  通过TCP协议实现内容分发网络功能，支持将本地文件或网络资源转换为在线传输服务，方便搭建轻量级文件分发和远程访问解决方案。通常用于替代传统HTTP服务或结合内网穿透工具，帮助开发者快速部署私有CDN或实现远程资源共享，适合资源加速、局域网文件分发等场景。
- [malaohu/jikeqingpan](https://github.com/malaohu/jikeqingpan) ★37  
  用于记录和管理用户在即刻应用中的互动行为，包括点赞、评论等动态，帮助用户更好地回顾和整理社交足迹。
- [ayoubfaouzi/chrome-extension-downloader](https://github.com/ayoubfaouzi/chrome-extension-downloader) ★29 [`browser-extension`] [`chrome-extension`] [`crx`] [`webstore`]  
  chrome-extension-downloader 可直接从 Chrome 网上应用商店快速下载浏览器扩展的 crx 文件，无需登录或安装到浏览器。它常用于批量备份扩展、离线使用或部署到多台设备，适合需要灵活管理扩展的开发者或企业用户。该项目通常提供简单的命令行界面，通过扩展 ID 获取文件，并支持自动处理版本和依赖。
- [H3CoF6/OpenList-FlashTransfer](https://github.com/H3CoF6/OpenList-FlashTransfer) ★5  
  开源列表闪传工具能够快速实现各类清单如待办事项、购物单或备忘录等内容跨设备即时同步，特别适合移动端和桌面端用户实现轻量级数据协作或临时信息中转，通常基于Web技术实现免安装的便捷传输体验。
