# Go 仓库

- [fatedier/frp](https://github.com/fatedier/frp) ★108622 [`expose`] [`firewall`] [`frp`] [`go`] [`http-proxy`] [`nat`] [`p2p`] [`proxy`] [`reverse-proxy`] [`tunnel`]  
  用于内网穿透和端口转发，可以将位于防火墙或 NAT 后面的内网服务安全地暴露到公网，支持 TCP、UDP、HTTP、HTTPS 等多种协议。它通常由部署在公网的服务端和运行在内网的客户端组成，通过反向代理建立加密通道，实现远程访问内网主机、Web 服务或 SSH 等应用。适合个人开发调试、远程办公、搭建临时演示站点或物联网设备管理，尤其适用于没有独立公网 IP 的场景。配置简单，性能稳定，是运维和开发人员常用的自托管穿透方案。
- [syncthing/syncthing](https://github.com/syncthing/syncthing) ★87442 [`go`] [`p2p`] [`peer-to-peer`] [`synchronization`]  
  SyncThing 是一个开源的分布式文件同步工具，用于在多台设备间安全地共享和同步文件。它不依赖中心服务器，所有数据直接在设备间加密传输，确保隐私与安全。用户可通过本地网络或互联网实现跨平台文件实时同步，适用于备份、协作和文件管理场景。
- [junegunn/fzf](https://github.com/junegunn/fzf) ★82438 [`bash`] [`cli`] [`fish`] [`fzf`] [`go`] [`neovim`] [`tmux`] [`unix`] [`vim`] [`zsh`]  
  用于终端交互的通用模糊查找工具，能在管道中快速过滤并选择文本行，支持快捷键预览、多选和自定义键位绑定。通常配合命令行使用，可搜索文件路径、命令历史、Git 分支或进程列表，适合在复杂终端工作流中替代逐层浏览或手动 grep 定位，大幅提升操作效率。
- [usememos/memos](https://github.com/usememos/memos) ★62095 [`docker`] [`foss`] [`go`] [`markdown`] [`memo`] [`microblog`] [`note-taking`] [`notecard`] [`own-your-data`] [`react`] [`self-hosted`] [`social-network`] [`sqlite`]  
  一个开源的、轻量级的笔记与知识管理工具，支持 Markdown 编辑、标签分类和实时同步，主要用于个人知识记录、日常想法整理和技术笔记存储，适合追求简洁高效写作体验的用户。
- [minio/minio](https://github.com/minio/minio) ★61387 [`amazon-s3`] [`cloud`] [`cloudnative`] [`cloudstorage`] [`go`] [`k8s`] [`kubernetes`] [`multi-cloud`] [`multi-cloud-kubernetes`] [`objectstorage`] [`s3`] [`storage`]  
  MinIO 是一个高性能的分布式对象存储系统，兼容 Amazon S3 API，主要用于存储大规模非结构化数据，如图片、视频、日志文件等。它支持多节点部署，提供高可用和数据冗余能力，适用于云原生、AI、大数据等场景，常用于私有云和边缘计算环境中的数据存储解决方案。
- [FiloSottile/mkcert](https://github.com/FiloSottile/mkcert) ★59431 [`certificates`] [`chrome`] [`firefox`] [`https`] [`ios`] [`linux`] [`local-development`] [`localhost`] [`macos`] [`root-ca`] [`tls`] [`windows`]  
  mkcert 是一个简单易用的工具，用于在本地生成受信任的 HTTPS 证书，主要用于开发和测试环境。它自动创建并安装本地 CA，无需任何配置即可为 localhost、127.0.0.1 等生成有效证书，支持 macOS、Linux、Windows 和多种浏览器，极大简化了本地 HTTPS 的设置过程。
- [rclone/rclone](https://github.com/rclone/rclone) ★58999 [`azure-blob`] [`azure-blob-storage`] [`azure-files`] [`backblaze-b2`] [`cloud-storage`] [`dropbox`] [`encryption`] [`ftp`] [`fuse-filesystem`] [`go`] [`golang`] [`google-cloud-storage`] [`google-drive`] [`onedrive`] [`openstack-swift`] [`rclone`] [`s3`] [`sftp`] [`sync`] [`webdav`]  
  rclone 是用于管理云存储文件的命令行工具，主要解决把文件可靠地从一个存储系统复制或同步到另一个存储系统的问题。它支持海内外常见云盘、对象存储和远程协议，可执行文件复制、双向同步、加密备份、内容校验与限速控制，也可以把远程目录挂载为本地磁盘。通常适合做跨云迁移、定期备份、服务器数据同步等自动化场景，因为配置文件清晰且可在无图形界面环境下运行。
- [go-gitea/gitea](https://github.com/go-gitea/gitea) ★57266 [`bitbucket`] [`cicd`] [`devops`] [`docker-registry-v2`] [`git`] [`git-gui`] [`git-lfs`] [`git-server`] [`gitea`] [`github`] [`github-actions`] [`gitlab`] [`go`] [`golang`] [`hacktoberfest`] [`maven-server`] [`npm-registry`] [`self-hosted`] [`typescript`] [`vue`]  
  Gitea 是一个轻量级的自托管 Git 服务，用于快速搭建代码托管平台，支持 Git 仓库管理、代码审查、问题跟踪、CI/CD 集成等功能，适合个人、团队用于私有化部署代码仓库系统，具有高性能、低资源消耗的特点，使用 Go 语言编写，易于安装和扩展。
- [AlistGo/alist](https://github.com/AlistGo/alist) ★50008 [`file-server`] [`gin`] [`golang`] [`onedrive`] [`solidjs`] [`webdav`]  
  AlistGo/alist 是一个支持多种存储的文件列表程序，主要用于聚合管理个人云存储账户，提供统一的文件浏览、下载和分享界面，适合自建网盘或挂载多个网盘对外提供服务。
- [gogs/gogs](https://github.com/gogs/gogs) ★47724 [`docker`] [`git`] [`go`] [`gogs`] [`mysql`] [`postgresql`] [`raspberry-pi`] [`self-hosted`] [`source-code-management`] [`sqlite3`] [`version-control`]  
  Gogs 用 Go 编写，专门用于搭建轻量级私有 Git 托管服务。它面向个人或小团队，适合在内网部署，提供仓库管理、问题跟踪、代码审查和 Web 编辑等协作能力，安装维护成本低，对硬件要求不高，支持多平台运行，是替代公有代码托管或作为 CI/CD 后端的常见选择。
- [coreybutler/nvm-windows](https://github.com/coreybutler/nvm-windows) ★47251 [`go`] [`management`] [`node`] [`node-version-manager`] [`nodejs`] [`nvm`] [`switch`] [`version`] [`version-manager`] [`versioning`] [`windows`]  
  用于在 Windows 系统上管理多个 Node.js 版本的命令行工具，支持快速安装、切换和卸载不同版本的 Node.js，适用于需要在不同项目中使用不同 Node.js 版本的开发场景。
- [v2ray/v2ray-core](https://github.com/v2ray/v2ray-core) ★46945 [`golang`] [`http-proxy`] [`proxy`] [`shadowsocks`] [`socks`] [`socks5`] [`v2ray`] [`vmess`]  
  V2Ray 是一个跨平台的网络代理引擎，主要用于构建加密传输通道，实现安全访问互联网和绕过网络审查。它支持多种代理协议，如 VMess、Shadowsocks、HTTP 等，并能通过灵活的路由规则自由分流流量。典型应用场景包括保护隐私、突破地域限制、科学上网等，适合需要高度定制化代理策略的用户与开发者。
- [router-for-me/CLIProxyAPI](https://github.com/router-for-me/CLIProxyAPI) ★46502 [`antigravity`] [`claude-code`] [`cluade`] [`codex`] [`gemini`] [`openai`]  
  CLIProxyAPI 是一个用于简化命令行工具与 API 服务之间交互的代理接口，主要用于将 CLI 请求转发为 HTTP 调用，支持鉴权、参数映射和响应格式化，适合集成第三方服务或构建自动化工作流。
- [QuantumNous/new-api](https://github.com/QuantumNous/new-api) ★44641 [`ai-gateway`] [`claude`] [`deepseek`] [`gemini`] [`newapi`] [`openai`] [`rerank`]  
  该项目主要用于构建新一代API服务，聚焦于提升系统间通信效率与数据处理能力，通常适用于需要高并发、低延迟场景的分布式系统集成，帮助开发者简化后端服务对接与业务逻辑封装。
- [juanfont/headscale](https://github.com/juanfont/headscale) ★42613 [`tailscale`] [`tailscale-control-server`] [`tailscale-server`] [`wireguard`]  
  headscale是一个开源的、自托管的Tailscale控制服务器，主要用于创建和管理私有网络，支持Zero Trust网络架构，允许用户在没有公网IP的情况下安全地连接设备，适合个人、企业搭建内网穿透服务，提供与Tailscale兼容的API接口，便于集成到现有基础设施中。
- [schollz/croc](https://github.com/schollz/croc) ★39489 [`data-transfer`] [`file-sharing`] [`golang`] [`pake`] [`peer-to-peer`] [`tcp`] [`transfer`]  
  croc 实现在两台设备间安全传输文件和文件夹，是一个基于命令行的工具。它使用端到端加密保护内容，通过中继服务器协助握手，即使双方都在内网也能穿透 NAT 互联。使用时只需在两台机器上分别输入同一串随机短语，即可建立加密通道并开始传送；支持断点续传，也可发送整个目录。适合临时跨设备分享大文件，替代网盘或 U 盘，支持 Windows、macOS、Linux 等常见平台，对普通用户和开发者都很方便。
- [Wei-Shaw/sub2api](https://github.com/Wei-Shaw/sub2api) ★36279 [`2api`] [`antigravity2api`] [`cc2api`] [`claude`] [`claude-code`] [`codex`] [`crs`] [`crs2`] [`gemini`]  
  sub2api 是一个将订阅链接转换为 API 接口的工具，主要用于将网络订阅服务中的资源列表转换为可通过 HTTP 请求访问的 API 接口，方便用户在自定义应用或脚本中动态获取和管理订阅内容，适用于需要自动化处理订阅源的场景。
- [filebrowser/filebrowser](https://github.com/filebrowser/filebrowser) ★35800 [`file-browser`] [`file-manager`] [`file-sharing`] [`go`] [`material-design`] [`self-hosted`] [`vue`]  
  提供基于网页的文件管理功能，允许用户通过浏览器查看、上传、下载、删除和管理服务器上的文件，支持用户权限控制、多用户隔离和简单部署，通常用于轻量级文件共享或个人网盘场景。
- [tailscale/tailscale](https://github.com/tailscale/tailscale) ★34936 [`2fa`] [`oauth`] [`sso`] [`tailscale`] [`vpn`] [`wireguard`]  
  Tailscale 用于创建安全的私有网络，让设备和服务器通过加密连接轻松互通，无需手动配置防火墙或公网IP，适用于远程访问、服务发现和跨云网络互联，基于 WireGuard 实现，支持多种平台和自动化运维。
- [ehang-io/nps](https://github.com/ehang-io/nps) ★34157 [`dns`] [`firewall`] [`go`] [`gzip`] [`http`] [`https`] [`nat`] [`nps`] [`snnapy`] [`socks`] [`socks5`] [`ssh`] [`tcp`] [`tunnel`] [`udp`]  
  nps 是一款用 Go 实现的内网穿透工具，主要将内网中的 Web、数据库、SSH 等服务安全映射到公网，支持 TCP、UDP、HTTP、HTTPS 协议以及多端口复用和域名转发。它采用轻量级服务端加客户端模式，并附带可视化 Web 管理界面，适合没有公网 IP 的个人用户或中小团队，用于远程办公、设备调试、临时演示、内网服务公网访问等场景。配置灵活，部署简单，是搭建反向代理隧道和跳板服务的常用选择。
- [binwiederhier/ntfy](https://github.com/binwiederhier/ntfy) ★33268 [`curl`] [`notifications`] [`ntfy`] [`ntfysh`] [`pubsub`] [`push-notifications`] [`rest-api`]  
  ntfy是一个简单的HTTP服务器，允许通过推送通知发送消息，支持多种客户端平台，主要用于系统告警、日志通知和自动化消息推送，可通过命令行、API或邮件等方式触发，配置简单，部署便捷，适合个人和团队使用。
- [iawia002/lux](https://github.com/iawia002/lux) ★31584 [`bilibili`] [`crawler`] [`download`] [`downloader`] [`go`] [`golang`] [`iqiyi`] [`qq`] [`scraper`] [`tumblr`] [`video`] [`youku`] [`youtube`]  
  支持众多视频网站的视频下载工具，可通过命令行直接输入链接获取并保存视频，同时支持自定义画质、批量下载、外挂字幕和 cookies 等功能，适合需要离线观看视频或备份内容的用户。
- [cloudreve/cloudreve](https://github.com/cloudreve/cloudreve) ★28485 [`cloud`] [`cloud-storage`] [`cloudreve`] [`file`] [`file-manager`] [`file-sharing`] [`golang`]  
  Cloudreve是一款开源的云存储网盘系统，主要用于搭建个人或团队的私有文件管理平台。它支持本地磁盘及多种主流对象存储后端，提供文件上传、下载、在线预览、目录分享、用户权限管理等功能，并具备响应式Web界面，适合部署在服务器上用于替代公有网盘，解决数据自主可控、访问速度受限和容量不足等问题，同时可通过插件机制进行功能扩展。
- [XIU2/CloudflareSpeedTest](https://github.com/XIU2/CloudflareSpeedTest) ★28338 [`cdn`] [`cloudflare`] [`go`] [`golang`] [`speedtest`]  
  用于测试 Cloudflare CDN 节点的延迟和下载速度，支持自动优选域名、IP 扫描与速度测试，帮助用户快速发现低延迟、高速率的 Cloudflare 节点，常用于搭建代理或加速服务时的节点筛选。
- [Wox-launcher/Wox](https://github.com/Wox-launcher/Wox) ★27197 [`alfred`] [`launcher`] [`launchy`] [`productivity`] [`productivity-tools`] [`raycast`] [`spotlight`] [`wox`] [`wox-launcher`]  
  Wox 是 Windows 平台上的开源快速启动器，类似 macOS 的 Alfred。通过自定义快捷键唤起搜索框，输入关键词即可实时搜索本地程序、文件，并支持网页搜索与插件扩展。基于 C# 构建，运行流畅，适合习惯键盘操作、希望减少鼠标切换的桌面用户，能显著提升日常软件启动和系统操作的效率。插件机制还允许按需扩展功能，覆盖更多个性化场景。
- [GopeedLab/gopeed](https://github.com/GopeedLab/gopeed) ★25693 [`android`] [`bittorrent`] [`cross-platform`] [`debian`] [`downloader`] [`flutter`] [`golang`] [`http`] [`https`] [`ios`] [`macos`] [`magnet`] [`torrent`] [`ubuntu`] [`windows`]  
  Gopeed 是一个现代化的下载管理器，支持 HTTP、FTP、BitTorrent 和磁力链接等多种协议，提供跨平台桌面客户端与浏览器扩展，具备简洁的用户界面、高速下载、断点续传和任务调度功能，适用于需要高效管理和加速下载任务的用户。
- [containrrr/watchtower](https://github.com/containrrr/watchtower) ★24695 [`automation`] [`continuous-delivery`] [`devops`] [`docker`] [`hacktoberfest`] [`notifications`] [`receive-notifications`] [`registry`] [`update-checker`] [`watchtower`]  
  用于自动更新 Docker 容器的工具，可定期检查镜像仓库中的新版本，并在发现更新时自动重启对应容器，保持容器化应用始终运行最新镜像，适用于需要持续部署的 Docker 环境。
- [inconshreveable/ngrok](https://github.com/inconshreveable/ngrok) ★24433  
  ngrok 是广受欢迎的内网穿透工具，能将本地或局域网中的服务通过加密隧道映射到公网临时域名，实现外部访问。主要用于本地开发时调试第三方支付、微信等回调接口，或向远程同伴分享本机页面，也适合在没有公网 IP 的环境下快速验证 Web 服务。支持 HTTP、HTTPS 与 TCP 协议，并提供简易状态面板查看请求记录。通常适合需要快速安全暴露本地端口的开发者与测试人员，用于缩短联调周期、简化演示流程。
- [OpenListTeam/OpenList](https://github.com/OpenListTeam/OpenList) ★23936 [`alist`] [`aliyunpan`] [`baidupan`] [`openlist`]  
  一个开源的列表协作工具，支持多人实时编辑和数据同步，可用于任务管理、资源整理等场景，提供简洁的用户界面和灵活的数据组织方式，便于团队高效协作与信息共享。
- [navidrome/navidrome](https://github.com/navidrome/navidrome) ★22748 [`airsonic`] [`madsonic`] [`media-server`] [`music`] [`music-server`] [`navidrome`] [`opensubsonic`] [`raspberry-pi`] [`self-hosted`] [`streamer`] [`streaming-api`] [`streaming-audio`] [`subsonic`] [`subsonic-server`]  
  Navidrome 是一个自托管的音乐服务器和流媒体播放器，支持 Subsonic 协议，允许用户从任何设备访问个人音乐库。它提供简洁的 Web 界面，具备歌词显示、专辑封面识别、智能播放列表和多用户支持等功能，适合个人或小型团队搭建私有化音乐服务。
- [chaitin/SafeLine](https://github.com/chaitin/SafeLine) ★22312 [`api-gateway`] [`application-security`] [`appsec`] [`blueteam`] [`bruteforce`] [`captcha`] [`cve`] [`cybersecurity`] [`firewall`] [`hackers`] [`http-flood`] [`security`] [`self-hosted`] [`sql-injection`] [`vulnerability`] [`waf`] [`web-application-firewall`] [`web-security`] [`websecurity`] [`xss`]  
  SafeLine是一款由长亭科技推出的免费Web应用防火墙，主要用于防御SQL注入、XSS跨站脚本、文件包含等常见Web攻击，提供反向代理模式的一体化防护，具备低资源占用、配置简单、支持HTTPS等特性，适合各类网站安全防护场景。
- [apernet/hysteria](https://github.com/apernet/hysteria) ★22264 [`censorship-circumvention`] [`golang`] [`http-proxy`] [`hysteria`] [`proxy`] [`quic`] [`relay`] [`reliable-udp`] [`socks5`] [`tun`] [`vpn`]  
  Apernet Hysteria 是一个基于 QUIC 协议的高性能网络穿透工具，主要用于优化弱网环境下的数据传输，支持多路并发、低延迟传输，适用于跨境网络加速、远程访问等场景，具有良好的抗丢包和拥塞控制能力。
- [m1k1o/neko](https://github.com/m1k1o/neko) ★21884 [`docker`] [`golang`] [`media-streaming`] [`remote-control`] [`remote-desktop`] [`self-hosted`] [`virtual-browser`] [`vue`] [`webrtc`]  
  neko 是一个基于浏览器的虚拟桌面，可在 Docker 中运行，提供完整操作系统体验，支持通过 WebRTC 实现低延迟远程访问，适用于远程办公、临时开发环境或快速部署隔离桌面会话。
- [lionsoul2014/ip2region](https://github.com/lionsoul2014/ip2region) ★19390 [`ip-address`] [`ip-address-database`] [`ip-address-location`] [`ip-location`] [`ip-lookup`] [`ipv4-address`] [`ipv4-lookup`] [`ipv4-support`] [`ipv6-address`] [`ipv6-lookup`] [`ipv6-support`] [`xdb-engine`] [`xdb-ipv4`] [`xdb-ipv6`]  
  ip2region 是一个高效的 IP 地址定位库，提供精准的 IP 归属地查询功能，支持多种编程语言，适用于日志分析、用户定位和安全审计等场景。
- [putyy/res-downloader](https://github.com/putyy/res-downloader) ★19006 [`douyin`] [`kuaishou`] [`res-downloader`] [`wechat`] [`wechat-video`] [`xiaohongshu`]  
  用于下载网页资源的工具，支持从指定URL抓取文件、图片、视频等资源并保存到本地，通常用于批量下载或离线备份，适合需要提取网页静态资源的场景。
- [ginuerzh/gost](https://github.com/ginuerzh/gost) ★18157 [`dns`] [`go`] [`golang`] [`http2`] [`kcp`] [`obfs4`] [`quic`] [`shadowsocks`] [`sni`] [`socks5`] [`ssh`] [`tls`] [`tunnel`] [`tuntap`] [`udp`]  
  gost 是一个用 Go 语言编写的轻量级代理服务器，支持多种传输协议和加密方式，主要用于网络代理、端口转发和安全通信，适用于需要穿透防火墙或构建私有通信链路的场景。
- [slackhq/nebula](https://github.com/slackhq/nebula) ★17593  
  Nebula 是一个由 Slack 开发的轻量级、高性能的网格隧道和网络身份验证工具，主要用于在分布式环境中建立安全的点对点通信。它基于数字证书进行身份验证，支持动态网络拓扑，适用于跨云、混合环境的私有网络构建，特别适合需要零信任安全模型的大规模基础设施。
- [ory/hydra](https://github.com/ory/hydra) ★17462 [`authorization`] [`cloud`] [`docker`] [`federation`] [`hacktoberfest`] [`hydra`] [`identity`] [`oauth`] [`oauth-provider`] [`oauth2`] [`oauth2-provider`] [`oauth2-server`] [`oidc`] [`openid`] [`openid-connect`] [`openid-connect-provider`] [`openid-provider`] [`security`] [`server`] [`sso`]  
  ory/hydra 是一款开源的高性能 OAuth 2.0 和 OpenID Connect 认证服务器，主要用于为现有应用快速接入标准化的授权与单点登录能力。它由云原生团队 Ory 维护，通常作为独立服务部署，支持与任意数据库或用户系统集成，适合需要令牌签发、访问控制、联合身份认证的微服务架构或企业系统。其设计强调安全性、可扩展性和协议合规性，常用于替代自行开发的认证模块，帮助团队专注业务逻辑。
- [jeessy2/ddns-go](https://github.com/jeessy2/ddns-go) ★17177 [`alidns`] [`baiduyun`] [`cloudflare`] [`ddns`] [`ddns-go`] [`dnspod`] [`porkbun`]  
  ddns-go 是一个基于 Go 语言开发的轻量级动态域名解析（DDNS）工具，主要用于将动态公网 IP 地址自动更新到域名解析记录中，支持主流云服务商的 DNS API，适合自建服务器、家庭宽带等场景实现域名动态解析。
- [ent/ent](https://github.com/ent/ent) ★17162 [`ent`] [`entity-framework`] [`orm`]  
  一个专为Go语言设计的实体框架，用于构建和管理数据库模型，支持代码生成、强类型的查询API以及可扩展的架构，适用于构建复杂的数据访问层。
- [snail007/goproxy](https://github.com/snail007/goproxy) ★17102 [`dns-proxy`] [`encryption-proxy`] [`http`] [`http-proxy`] [`https-proxy`] [`kcptun`] [`reverse-proxy`] [`socket`] [`socks5`] [`socks5-proxy`] [`ss-proxy`] [`tcp`] [`tcp-proxy`] [`tls`] [`tls-proxy`] [`transparent-proxy`] [`udp`] [`udp-proxy`] [`upstream-proxies`] [`websocket-proxy`]  
  基于 Go 语言开发的高性能代理与内网穿透工具，通过简洁的命令行就能搭建稳定安全的网络通道。它支持 HTTP、HTTPS、SOCKS5 等常用代理协议，同时能够转发 TCP、UDP 流量，广泛用于解决异地组网、远程调试、外网访问内网服务等场景。由于不需要公网 IP 即可穿透，也常用于将本地服务临时公开给他人访问。整体轻量易用，适合开发者快速构建各类代理链路，且支持多平台部署。
- [gotify/server](https://github.com/gotify/server) ★15668 [`api`] [`cloud`] [`free-software`] [`golang`] [`gotify`] [`hosting`] [`javascript`] [`notifications`] [`privacy`] [`react`] [`self-hosted`] [`self-hosting`] [`selfhosted`]  
  Gotify/server 是一个自托管的消息推送服务，用于向用户设备发送实时通知。它支持通过 API 发送消息，具备 WebSocket 实时通信、用户管理、应用管理及消息历史存储功能，适合用于服务器监控、应用告警、自动化通知等场景，无需依赖第三方推送服务。
- [cloudflare/cloudflared](https://github.com/cloudflare/cloudflared) ★15130 [`cloudflare`] [`cloudflare-tunnel`] [`reverse-proxy`] [`zero-trust-network-access`]  
  cloudflared 是 Cloudflare 提供的开源工具，用于建立安全隧道，将本地服务暴露到公网，无需开放防火墙端口。它通过与 Cloudflare 网络建立出站连接，实现反向代理和安全访问，通常用于部署内网穿透、远程访问开发服务或增强网络安全性。
- [mickael-kerjean/filestash](https://github.com/mickael-kerjean/filestash) ★14451 [`archiving`] [`azure`] [`dms`] [`dropbox`] [`edrms`] [`ftp`] [`ged`] [`git`] [`ipfs`] [`mft`] [`nfs`] [`s3`] [`sae`] [`seda`] [`sftp`] [`sharepoint`] [`smb`] [`vfs`] [`webdav`]  
  Filestash 是一个现代的、基于 Web 的文件管理器，支持多用户协作、实时预览和跨平台文件存储对接，主要用于私有化部署的云存储管理，适合自托管环境下的文档浏览、编辑与分享。
- [shadow1ng/fscan](https://github.com/shadow1ng/fscan) ★14230 [`fscan`] [`scanner`] [`scanning`] [`sec`] [`security`] [`security-tools`]  
  一款内网安全扫描工具，主要用于自动化检测常见服务的弱口令、漏洞和安全风险，支持多种协议和自定义脚本扩展，适合渗透测试和安全评估场景。
- [coredns/coredns](https://github.com/coredns/coredns) ★14229 [`cncf`] [`coredns`] [`dns-server`] [`go`] [`plugin`] [`service-discovery`]  
  CoreDNS 是一个灵活且可扩展的 DNS 服务器，主要用于 Kubernetes 环境中提供服务发现和 DNS 解析功能。它通过插件化架构支持多种后端存储、健康检查、自动扩缩容和自定义策略，可高效处理服务注册、反向解析、缓存和转发等场景，广泛用于容器编排和微服务架构中的域名解析需求。
- [casdoor/casdoor](https://github.com/casdoor/casdoor) ★14140 [`agent`] [`agentic-ai`] [`agi`] [`ai-gateway`] [`auth`] [`authentication`] [`iam`] [`llm`] [`mcp`] [`mcp-gateway`] [`mfa`] [`oauth`] [`oidc`] [`openclaw`] [`radius`] [`saml`] [`scim`] [`single-sign-on`] [`sso`] [`webauthn`]  
  Casdoor是一个基于OAuth 2.0和OIDC协议的身份认证与单点登录系统，提供用户管理、权限控制、应用接入等功能，支持多种数据库和第三方登录方式，适用于多系统集成场景下的统一认证服务。
- [tinode/chat](https://github.com/tinode/chat) ★13452 [`chat`] [`chat-application`] [`chatapp`] [`chatbots`] [`chatserver`] [`collaboration`] [`go`] [`golang`] [`instant-messaging`] [`messaging`] [`messaging-api`] [`messenger`] [`telegram`] [`video-call`] [`video-chat`] [`video-conferencing`] [`webchat-server`] [`webrtc`] [`whatsapp`] [`xmpp`]  
  Tinode/chat 是一个开源的即时通讯平台，主要用于构建支持大规模用户在线的实时聊天应用。它基于 WebSocket 协议实现，提供稳定的消息传递、群组聊天、消息历史存储、用户状态管理等功能，适合用于开发移动端和 Web 端的高并发聊天系统。
- [fullstorydev/grpcurl](https://github.com/fullstorydev/grpcurl) ★12771 [`golang`] [`grpc`] [`protobuf`]  
  用于调试和测试gRPC接口的命令行工具，支持通过纯文本或JSON格式发送请求并查看响应，常用于服务间通信验证和API开发调试，无需编写代码即可调用gRPC方法，提升开发效率。
- [peterq/pan-light](https://github.com/peterq/pan-light) ★12130 [`baiduyun`] [`golang`] [`qml`] [`qt5`]  
  pan-light 是一个轻量级的百度网盘客户端，主要面向需要替代官方客户端、追求简洁高效体验的用户。它支持百度账号登录、文件的上传与下载、目录管理以及分享链接等基础操作，并提供命令行和图形界面两种交互方式，适合在无图形环境或服务器上使用。该项目通常采用 Go 后端与 Web 前端相结合的技术栈，因此具备跨平台、易部署的特点，适合个人开发者或需要自动化管理网盘文件的场景。
- [gravitl/netmaker](https://github.com/gravitl/netmaker) ★11740 [`cloud`] [`devsecops`] [`ipv6-support`] [`k8s`] [`kubernetes`] [`mesh`] [`mesh-network`] [`overlay-network`] [`secure-remote-access`] [`security`] [`self-hosted`] [`site-to-site`] [`virtual-networking`] [`vpn`] [`vpn-server`] [`wg-quick`] [`wireguard`] [`wireguard-ui`] [`wireguard-vpn`] [`zero-trust`]  
  用于创建和管理去中心化虚拟私有网络的开源平台，通过区块链技术实现节点身份验证与网络配置同步，支持跨云、本地及边缘环境的无缝连接部署，简化零信任网络架构实施。
- [0xJacky/nginx-ui](https://github.com/0xJacky/nginx-ui) ★11379 [`code-completion`] [`copilot`] [`cron`] [`docker`] [`go`] [`letsencrypt`] [`linux`] [`macos`] [`mcp`] [`mcp-server`] [`nginx`] [`self-hosted`] [`vue`] [`webui`] [`windows`]  
  Nginx UI 是一个基于 Web 的图形化管理工具，用于可视化配置和管理 Nginx 服务器。通过简洁的界面，用户可方便地操作站点配置、SSL 证书、反向代理等常见功能，无需手动编辑配置文件，适合需要快速部署和维护 Nginx 的开发者与运维人员。
- [therecipe/qt](https://github.com/therecipe/qt) ★10802 [`android`] [`asteroidos`] [`cross-platform-gui`] [`felgo`] [`freebsd`] [`go`] [`golang`] [`gui-framework`] [`ios`] [`javascript`] [`linux`] [`macos`] [`qt`] [`raspberry-pi`] [`sailfish-os`] [`ubuntu-touch`] [`webassembly`] [`windows`]  
  用于在 Go 语言中调用 Qt 框架，实现跨平台图形界面应用的开发。该绑定通过 cgo 对接 C++ 版 Qt，覆盖桌面端（Windows、macOS、Linux）和移动端（Android、iOS），提供完整的控件与事件系统。适合需要原生界面、性能要求较高，或者希望用 Go 语言复用现有 Qt 生态的场景。通常配合官方命令行工具处理资源配置与打包，简化跨平台构建流程。
- [Mrs4s/go-cqhttp](https://github.com/Mrs4s/go-cqhttp) ★10642 [`bot`] [`coolq`] [`coolq-http-api`] [`qqbot`] [`qqrobot`]  
  一个用 Go 语言编写的轻量级 cqhttp 服务端实现，主要用于对接 QQ 协议，支持 HTTP、WebSocket 等通信方式，方便开发者通过 API 与 QQ 机器人进行交互，常用于构建自定义 QQ 机器人应用，具备跨平台、高并发和易于部署的特点。
- [claudiodangelis/qrcp](https://github.com/claudiodangelis/qrcp) ★10493 [`cli`] [`command-line`] [`golang`] [`qrcode`] [`utility`]  
  qrcp 是一个通过二维码在局域网内快速传输文件的命令行工具，基于 Go 开发。核心用法是在电脑端将要发送的文件或目录暴露为临时链接，并在终端显示对应的二维码，接收方用手机或平板扫码即可下载，无需配对、登录或依赖云端中转。反过来，它同样支持手机通过扫码将文件传回电脑。整个过程仅在本地网络完成，适合在办公室、咖啡馆等场景下快速分享图片、文档等文件，兼顾便捷与隐私，通常也无需额外安装接收端应用。
- [gokcehan/lf](https://github.com/gokcehan/lf) ★9445 [`file-manager`] [`terminal`]  
  一个用 Go 编写的轻量级终端文件管理器，支持无缝集成到 shell 中，提供快速目录浏览、文件操作和可扩展的命令系统，适合追求高效键盘操作的用户。
- [certimate-go/certimate](https://github.com/certimate-go/certimate) ★9017 [`acme`] [`acme-client`] [`automation`] [`certbot`] [`certificate`] [`certificate-management`] [`certificate-manager`] [`certificates`] [`devops`] [`google-trust-services`] [`https`] [`https-certificate`] [`lego`] [`letsencrypt`] [`self-hosted`] [`ssl`] [`ssl-cert`] [`ssl-certificate`] [`ssl-certificates`] [`zerossl`]  
  Certimate-Go 是一个用于自动化申请和管理 SSL/TLS 证书的 Go 语言工具，支持与主流证书颁发机构（如 Let's Encrypt）集成，提供证书申请、续期、验证和存储的一体化解决方案，适用于需要高可用和自动化的 HTTPS 服务部署场景。
- [ViRb3/wgcf](https://github.com/ViRb3/wgcf) ★8576 [`client`] [`cloudflare`] [`plus`] [`security`] [`vpn`] [`warp`] [`wireguard`]  
  wgcf 是一个用于生成 WireGuard 配置文件的命令行工具，主要用于快速创建连接 Cloudflare WARP 服务的配置，简化了启用 WARP 客户端的过程，适合需要提升网络隐私和安全性的用户。
- [cyfdecyf/cow](https://github.com/cyfdecyf/cow) ★8416  
  用于网络代理分流，以本地 HTTP 代理方式运行，智能判断目标网站连通性，自动选择直连或走代理，避免全局代理导致国内网站访问缓慢。通常适合需要同时访问国内外网站的用户，如开发或研究人员。基于 Go 语言编写，配置灵活，支持自定义规则和上游代理，占用资源少。
- [nxtrace/NTrace-core](https://github.com/nxtrace/NTrace-core) ★8086 [`api`] [`as-path`] [`asn-lookup`] [`geoip`] [`geolocation`] [`ip-lookup`] [`network-analysis`] [`next-trace`] [`nexttrace`] [`traceroute`] [`utility`]  
  NTrace-core 是一个高性能的网络追踪与诊断核心库，主要用于实现链路追踪、延迟分析和网络拓扑发现。它支持多协议识别、分布式场景下的调用链路还原，适用于微服务架构中的故障排查与性能监控，提供轻量级、可扩展的追踪数据采集与处理能力。
- [gdy666/lucky](https://github.com/gdy666/lucky) ★8019 [`acme`] [`aliyunpan`] [`cron`] [`ddns`] [`dynadot`] [`filebrowser`] [`ftp`] [`ipv6`] [`socat`] [`stun`] [`vercel`] [`volcengine`] [`webdav`] [`wol`]  
  lucky 是一个基于 Go 语言开发的轻量级 Web 应用框架，主要用于快速构建高性能的 Web 服务和 API 接口，通常适合中小型项目或需要高并发处理的场景，简化了路由、中间件、请求处理等常见 Web 开发任务。
- [iyear/tdl](https://github.com/iyear/tdl) ★7901 [`bash`] [`download`] [`downloader`] [`telegram`] [`telegram-api`] [`telegram-bot`] [`telegram-bots`] [`telegram-channel`] [`telegram-userbot`]  
  一个基于 TypeScript 实现的轻量级、函数式工具库，提供无副作用的纯函数工具集，主要用于处理常见编程任务如数据操作、类型判断、字符串格式化等，适合在现代前端项目中按需导入使用，具有良好的类型推导支持。
- [mindoc-org/mindoc](https://github.com/mindoc-org/mindoc) ★7832 [`beego`] [`document`] [`go`] [`golang`] [`mindoc`] [`smartwiki`]  
  MinDoc 是一款开源的在线文档管理系统，用于搭建团队知识库与协作平台。它基于 Go 语言开发，支持 Markdown 编写和实时预览，提供多级目录、文档标签、全文搜索、权限控制等常用功能，适合个人开发者或中小团队私有部署。典型场景包括内部技术文档、接口文档、项目笔记的集中管理，也可替代 GitBook 或轻量级 Wiki。部署简便，对服务器要求低，能有效解决文档分散、版本混乱和协作不便等问题。
- [Hackl0us/GeoIP2-CN](https://github.com/Hackl0us/GeoIP2-CN) ★7401 [`clash`] [`geoip`] [`geoip2`] [`proxy`] [`quantumultx`] [`shadowrocket`] [`shadowsocks`] [`surge`]  
  该项目主要用于提供中文增强版的 GeoIP2 地理位置数据库，优化针对中国地区的 IP 地址定位精度，支持城市级地理位置查询，适用于需要精准识别中国用户地域分布的应用场景。
- [lxn/walk](https://github.com/lxn/walk) ★7099 [`declarative`] [`declarative-ui`] [`go`] [`gui`] [`gui-toolkit`] [`win32`] [`windows`] [`windows-desktop`]  
  一个基于 Go 语言的 Windows 桌面 GUI 开发库，封装了 Windows API 实现原生界面编程，支持事件驱动、控件布局和常见窗口组件，适合开发轻量级 Windows 原生应用。
- [ouqiang/gocron](https://github.com/ouqiang/gocron) ★6258 [`cron`] [`crontab`] [`golang`] [`scheduler`]  
  基于时间间隔或特定时间点自动执行指定命令或脚本的任务调度工具，主要用于Linux系统下的定时任务管理，支持Web界面操作，方便用户可视化添加、编辑、监控和管理周期性任务，适用于运维自动化、日志清理、数据备份等场景。
- [jpillora/cloud-torrent](https://github.com/jpillora/cloud-torrent) ★6250 [`cloud`] [`golang`] [`self-hosted`] [`torrent`] [`torrent-client`]  
  cloud-torrent 是一款运行在浏览器中的 Torrent 客户端，可将任意设备变成远程下载中心。部署后，用户通过网页界面即可添加种子或磁力链接，直接下载文件到服务器或 NAS 本地，无需安装桌面客户端。适合在无图形界面的 Linux 服务器上实现离线下载，或让多设备共享同一下载目录，解决远程管理下载任务和节省本地带宽的问题。
- [Ackites/KillWxapkg](https://github.com/Ackites/KillWxapkg) ★5931  
  用于解除微信小程序包的符号化混淆并反编译还原代码的工具，主要针对.wxapkg文件进行解包、反混淆和源码恢复，方便安全分析与逆向研究。
- [openark/orchestrator](https://github.com/openark/orchestrator) ★5783 [`high-availability`] [`management-system`] [`mysql`] [`replication`]  
  用于管理MySQL复制拓扑的开源工具，支持自动故障检测与恢复、手动切换主从、拓扑重构等功能，提供Web界面和命令行工具，帮助用户实现MySQL高可用与集群管理。
- [hacdias/webdav](https://github.com/hacdias/webdav) ★5751 [`filesystem`] [`go`] [`http`] [`server`] [`webdav`]  
  一个轻量级、易于配置的 WebDAV 服务器实现，主要用于在不支持原生文件同步的环境中提供文件共享与远程访问功能，适合个人存储、文档同步和简单的私有云部署，支持多种后端存储并提供基础的身份验证机制。
- [qjfoidnh/BaiduPCS-Go](https://github.com/qjfoidnh/BaiduPCS-Go) ★5433 [`baidupcs`]  
  BaiduPCS-Go 是一个用 Go 语言编写的百度网盘命令行客户端，支持文件上传、下载、删除、分享等操作，提供高速、稳定的百度网盘访问能力，适用于服务器环境或自动化脚本中对百度网盘进行批量管理与操作。
- [ngoduykhanh/wireguard-ui](https://github.com/ngoduykhanh/wireguard-ui) ★5137 [`wireguard`] [`wireguard-admin`] [`wireguard-config-gen`] [`wireguard-go`] [`wireguard-ui`] [`wireguard-vpn`] [`wireguard-web`]  
  用于管理和配置 WireGuard VPN 的 Web 界面工具，简化隧道和对等点的创建与维护，适合需要图形化操作的用户在 Linux 服务器上部署和监控 WireGuard 连接。
- [tickstep/aliyunpan](https://github.com/tickstep/aliyunpan) ★5091 [`adrive`] [`backup`] [`linux`] [`macos`] [`sync`] [`windows`]  
  阿里云盘命令行客户端，支持文件上传、下载、同步等操作，提供自动化脚本和批量处理功能，适用于Linux、macOS和Windows系统，可通过简单命令管理云端文件，提升操作效率。
- [wxbool/video-srt-windows](https://github.com/wxbool/video-srt-windows) ★5037 [`ffmpeg`] [`go`] [`golang`] [`srt-subtitles`] [`video`] [`windows-gui`]  
  一个专为Windows平台设计的视频字幕处理工具，支持视频文件的字幕提取、编辑与合成，可将SRT字幕与视频同步播放或导出，方便用户在本地高效管理视频字幕内容。
- [goravel/goravel](https://github.com/goravel/goravel) ★4792 [`api`] [`framework`] [`go`] [`golang`] [`grpc`] [`laravel`] [`microservice`] [`performance`] [`web`]  
  Goravel 是一个基于 Go 语言的 Web 应用框架，主要用于构建高效、可维护的后端服务。它借鉴了 Laravel 的设计理念，提供了优雅的路由、依赖注入、服务容器、ORM 和队列等特性，适合开发大型 Web 应用和微服务。
- [kingparks/cursor-vip](https://github.com/kingparks/cursor-vip) ★4776 [`cursor`] [`cursor-pro`]  
  提供 Cursor 编辑器的高级功能解锁方案，主要用于激活 VIP 特性以获得增强的代码补全、编辑效率工具及个性化设置，适合需要提升开发体验的用户使用，但可能涉及违反软件许可协议的行为，建议通过官方渠道获取正版服务。
- [cppla/ServerStatus](https://github.com/cppla/ServerStatus) ★4678  
  ServerStatus 是一个用于监控服务器状态的工具，主要用于实时展示多台服务器的 CPU、内存、网络等资源使用情况，支持跨平台部署和自定义告警，适合运维人员对主机健康状况进行集中监控与管理。
- [lwch/natpass](https://github.com/lwch/natpass) ★4451 [`code-server`] [`golang`] [`protobuf`] [`shell`] [`tls`] [`vnc`]  
  NatPass 是一个轻量级的内网穿透和反向代理工具，主要用于在无公网 IP 的环境下将本地服务暴露到公网，支持多平台部署，适用于远程访问、服务调试和轻量级隧道代理，配置简单，依赖少，适合个人和开发者使用。
- [sjqzhang/go-fastdfs](https://github.com/sjqzhang/go-fastdfs) ★4139 [`breakpoint-resume`] [`cloud-storage`] [`cloudnative`] [`distributed-file-storage`] [`distributed-file-system`] [`fastdfs`] [`file-system`] [`fileserver`] [`filesystem`] [`go`] [`go-fastdfs`] [`godfs`] [`object-storage-service`] [`oss`] [`rsync`] [`small-file-merge`] [`storage`] [`storage-servers`] [`sync`] [`tus`]  
  go-fastdfs 是一个基于 Go 语言实现的轻量级分布式文件系统，主要用于解决文件的上传、下载、存储与同步问题。它支持断点续传、文件秒传、自动迁移和集群部署，适合用来搭建图片、视频等中小文件的私有云存储平台，也常用于替代传统的集中式文件服务器。其部署简单、依赖较少，能根据规模灵活扩展节点，适合需要高可用文件服务的中小型团队。
- [fanpei91/torsniff](https://github.com/fanpei91/torsniff) ★4017 [`bep0003`] [`bep0005`] [`bep0009`] [`bep0010`] [`bittorrent-protocol`] [`dht`] [`golang`] [`metadata`]  
  用于从BitTorrent DHT网络实时抓取并解析种子元数据，通过伪装节点监听网络中的元数据交换，从而获取torrent文件信息。通常适合构建种子搜索引擎、监控下载活动或分析P2P网络流量。工具基于Go语言实现，具备高并发、低资源占用特点，可独立运行作为持续数据收集服务，帮助用户批量积累infohash与对应的torrent文件。
- [prometheus-community/windows_exporter](https://github.com/prometheus-community/windows_exporter) ★3608 [`prometheus`] [`prometheus-exporter`] [`windows`] [`wmi`]  
  用于Windows系统的监控指标收集工具，通过Prometheus采集器暴露系统性能数据，支持CPU、内存、磁盘、网络等硬件和操作系统指标，适用于企业级监控场景。
- [TruthHun/BookStack](https://github.com/TruthHun/BookStack) ★3507 [`beego`] [`bookstack`] [`gitbook`] [`golang`] [`markdown`] [`mindoc`]  
  基于 Web 的开源文档管理系统，主要用于团队或个人的知识管理与文档协作，支持多用户权限控制、文档版本管理、目录结构化展示与在线编辑，适用于构建企业文档中心、技术笔记库或项目 Wiki。
- [greycodee/wechat-backup](https://github.com/greycodee/wechat-backup) ★3421  
  用于备份微信聊天记录的开源工具，支持导出文本、图片、视频等数据到本地或云端，便于长期保存和管理聊天记录，通常适用于个人用户或企业对重要对话内容的归档需求。
- [yisier/nps](https://github.com/yisier/nps) ★3328 [`go`] [`http`] [`https`] [`nps`] [`tcp`] [`udp`]  
  nps是一款轻量级、高性能、功能强大的内网穿透代理服务器，支持tcp、udp、http、https等协议，主要用于将内网服务暴露到公网，便于远程访问和调试，适用于个人开发、测试及小型生产环境。
- [fagongzi/manba](https://github.com/fagongzi/manba) ★3314 [`api`] [`api-gateway`] [`backend-apis`] [`circuit-breaker`] [`etcd`] [`gateway`] [`go`] [`golang`] [`microservice`] [`proxy`] [`traffic-control`]  
  manba 是一个基于 Go 语言开发的轻量级 API 网关，主要用于微服务架构中的统一流量入口管理。它提供请求路由、负载均衡、限流、熔断、鉴权等核心功能，能够将外部 HTTP 请求转发至内部多个后端服务，并支持动态配置与插件扩展，适合需要快速搭建稳定网关层的中小型团队，帮助解决服务暴露、访问控制和流量治理等问题。
- [eyebluecn/tank](https://github.com/eyebluecn/tank) ★3238 [`golang`] [`linux`] [`storage`]  
  蓝眼云盘（Tank）是一款基于 PHP 的开源私有网盘系统，用于搭建个人或团队的文件存储与共享平台。它支持多用户注册登录、文件上传下载、目录管理、在线预览，以及通过链接分享文件或文件夹，并可为分享设置密码和有效期。适合解决自建网盘时对数据隐私和存储可控性的需求，部署简单，可作为企业内网或个人的轻量级替代方案，也可用于教学或小型团队的资料协作。
- [eolinker/goku_lite](https://github.com/eolinker/goku_lite) ★3131 [`api`] [`api-gateway`] [`gateway`] [`goku`] [`microservices`] [`middleware`] [`proxy`]  
  Goku Lite 是 Go 语言编写的开源 API 网关，用于统一管理服务流量，解决微服务架构中的路由转发、认证鉴权、限流熔断、灰度发布等问题。它支持动态配置热更新，管理员可在可视化界面中在线调整规则，无需重启网关。典型使用场景包括将多组后端服务收敛为单一入口，或对旧系统进行网关改造，使调用方能稳定访问内部接口。功能设计相对精简，适合中小团队在测试或准生产环境快速落地，也适合学习网关核心原理时参考。部署配置简单，客户端接入成本较低，能够帮助团队降低接口治理门槛。
- [yunionio/cloudpods](https://github.com/yunionio/cloudpods) ★2929 [`ai`] [`aws`] [`azure`] [`baremetal`] [`baremetal-provisioning`] [`cloud`] [`cmp`] [`gcp`] [`hybridcloud`] [`iaas`] [`infrastructure`] [`kubernetes`] [`kvm`] [`multi-cloud`] [`openclaw`] [`openstack`] [`private-cloud`] [`qemu`] [`unified-cloud`] [`vsphere`]  
  基于Kubernetes的多云管理平台，支持异构资源统一纳管，提供虚拟机、容器、裸金属等服务的混合编排与运维能力，适用于企业级多云协同场景。
- [0xDkd/auxpi](https://github.com/0xDkd/auxpi) ★2705 [`api`] [`baidu-image`] [`cdnjs`] [`element-ui`] [`go`] [`golang`] [`image-store`] [`mdui`] [`rest-api`] [`vue`] [`weibo-image`]  
  auxpi 是一个自托管的图床管理系统，主要面向需要统一管理多个图床服务的个人或团队。它支持对接多种第三方图床平台，提供图片上传、外链生成、相册管理和后台控制等核心功能，通常被部署在自有服务器上，用于替代零散的手动上传流程。该工具适合需要批量处理图片、跨平台分发或集中维护图片资源的场景，也能作为个人博客或小型站点的图片存储中间层。其技术栈以服务端渲染和数据库存储为主，部署方式相对轻量，适合有一定服务器运维基础的用户使用。
- [trzsz/trzsz-ssh](https://github.com/trzsz/trzsz-ssh) ★2682 [`mosh`] [`openssh`] [`openssh-client`] [`rz`] [`ssh`] [`ssh-client`] [`sz`] [`tmux`] [`trz`] [`trzsz`] [`tssh`] [`tsshd`] [`tsz`] [`zmodem`]  
  trzsz-ssh 是一个支持批量主机管理的 SSH 客户端工具，主要用于简化多台远程服务器的并发操作，适合运维人员进行批量命令执行、文件同步等任务，提升远程管理效率。
- [likaia/nginxpulse](https://github.com/likaia/nginxpulse) ★2625  
  NginxPulse 是一个用于实时监控 Nginx 服务器状态的轻量级工具，通过 Web 界面展示连接数、请求速率、流量统计等关键指标，帮助运维人员快速掌握 Nginx 运行状态，及时发现性能瓶颈或异常访问，通常配合 Nginx 的 stub_status 模块使用，适合中小规模服务环境的健康监控与故障排查。
- [sjlleo/netflix-verify](https://github.com/sjlleo/netflix-verify) ★2527  
  用于检测 Netflix 是否支持解锁的脚本工具，主要检查网络环境是否能访问 Netflix 服务，常用于 VPS 网络质量测试及流媒体解锁验证，支持快速批量检测 IP 或代理节点的 Netflix 解锁状态。
- [jinsi-ai/b0pass](https://github.com/jinsi-ai/b0pass) ★2348 [`bigfile`] [`file-transfer`] [`go`] [`golang`] [`webserver`] [`wifi-network`]  
  b0pass 是一个专注于密码管理与安全存储的工具，主要用于帮助用户安全地生成、存储和管理各类账户密码。它支持多平台同步、端到端加密以及生物识别解锁，提供离线本地化存储方案，避免敏感信息上传云端，适用于注重隐私保护的个人与团队使用。
- [koho/frpmgr](https://github.com/koho/frpmgr) ★2032 [`frp`] [`frpc`] [`go`] [`gui`] [`proxy`] [`reverse-proxy`] [`windows`]  
  frpmgr 是一个用于管理 frp（Fast Reverse Proxy）的图形化工具，主要用于简化 frp 客户端的配置与操作。通过友好的界面，用户可方便地添加、编辑和启动隧道，无需手动维护配置文件，适合需要快速部署和管理内网穿透服务的场景，通常与 frp 服务端配合使用以实现内网服务暴露。
- [ProudMuBai/GoFilm](https://github.com/ProudMuBai/GoFilm) ★1962 [`axios`] [`elementplus`] [`film`] [`gin`] [`go-redis`] [`gocolly`] [`golang`] [`gorm`] [`movies`] [`robfig-cron`] [`vite`] [`vue3`]  
  GoFilm 是一个基于 Go 语言开发的轻量级影视资源聚合爬虫项目，主要用于收集和整理网络上的电影、电视剧等视频资源信息。它支持多站点数据抓取、关键字搜索和分类筛选，具备良好的扩展性和并发性能，适合用于搭建个人影视资源检索工具或内容分发平台的后端数据源。
- [daeuniverse/gg](https://github.com/daeuniverse/gg) ★1930 [`go-graft`] [`graftcp`] [`proxy`] [`proxychains`] [`v2ray`]  
  一个基于 Go 语言开发的轻量级、高性能 gRPC 网关框架，主要用于构建微服务API网关，支持服务发现、负载均衡、限流熔断等核心功能，适用于云原生场景下的服务代理与治理。
- [kingwrcy/moments](https://github.com/kingwrcy/moments) ★1893  
  一个基于社交动态的前端展示项目，主要用于模拟朋友圈或社交平台的时间线功能，支持内容发布、点赞、评论等常见交互，采用模块化设计便于二次开发和学习参考。
- [eolinker/apinto](https://github.com/eolinker/apinto) ★1673 [`api`] [`api-gateway`] [`apigateway`] [`apinto`] [`dubbo2`] [`gateway`] [`go`] [`goku`] [`golang`] [`grpc`] [`loadbalancer`] [`microservice`] [`middleware`] [`plugin`] [`proxy`] [`router`] [`servicemesh`]  
  Apinto 是一个开源的 API 网关，主要用于 API 的托管、调度、鉴权、监控等全生命周期管理，支持服务发现、负载均衡、限流熔断、插件扩展等功能，通常适合微服务架构中的流量治理场景，帮助团队高效管理和发布 API。
- [palark/ovpn-admin](https://github.com/palark/ovpn-admin) ★1672 [`linux`] [`openvpn`] [`openvpn-admin`] [`vpn`]  
  用于管理和部署 OpenVPN 服务的 Web 管理界面，支持用户权限控制、证书管理、日志监控等功能，便于多用户环境下的 OpenVPN 配置与维护，通常适用于需要简化 VPN 账号分配和网络策略管理的场景。
- [zhanghanyun/backtrace](https://github.com/zhanghanyun/backtrace) ★1540  
  用于捕获和分析 Go 程序中的调用栈信息，帮助开发者快速定位和排查错误，适用于需要精细化错误追踪的场景。
- [msterzhang/onelist](https://github.com/msterzhang/onelist) ★1534  
  一个基于 Go 语言开发的开源列表分享平台，主要用于聚合和展示各种资源链接，支持多用户、分类管理和个性化配置，适合用于收集和分享常用网址、学习资料或项目资源，具有轻量、易部署、界面简洁等特点。
- [helloxz/zdir](https://github.com/helloxz/zdir) ★1533 [`alist`] [`file-browser`] [`h5ai`] [`webdav`] [`zdir`]  
  zdir 是一款轻量级的文件目录列表程序，主要用于在服务器上快速搭建文件分享和浏览页面。它支持目录索引、文件在线预览、搜索以及自定义主题，适合个人网盘、团队内网资源分享或临时文件传输场景。部署简单，无需数据库，能够帮助用户免去繁琐配置，直接通过浏览器访问和管理服务器上的文件。
- [samwafgo/SamWaf](https://github.com/samwafgo/SamWaf) ★1529  
  SamWaf 是一个基于 Go 语言开发的轻量级 Web 应用防火墙（WAF），主要用于防护 Web 服务免受常见攻击（如 SQL 注入、XSS、CSRF 等）。它通过规则匹配和行为分析实现高效流量过滤，支持灵活配置，适用于 API 网关、边缘代理等场景，具备高性能和低延迟特点，便于集成到现代云原生架构中。
- [px-org/PanIndex](https://github.com/px-org/PanIndex) ★1405  
  PanIndex 是一个开源的多功能网盘聚合与文件索引工具，支持将多个网盘账户整合到统一界面中进行管理，方便用户集中浏览、搜索和分享跨平台存储的文件，适用于个人云存储整合及资源分享场景。
- [songloft-org/songloft](https://github.com/songloft-org/songloft) ★1387 [`docker`] [`docker-compose`] [`home-server`] [`miot`] [`music`] [`music-player`] [`music-server`] [`nas`] [`navidrome`] [`songloft`] [`subsonic`] [`webdav`] [`xiaomusic`]  
  Songloft 是一个专注于音乐创作与协作的开源平台，旨在为音乐人提供灵活的版本控制和实时协作工具，支持乐谱编辑、音频文件管理及创作历史追踪，适合个人创作者与团队共同开发音乐作品，改善传统音乐制作中的版本混乱与协作低效问题。
- [Simple-Tracker/qBittorrent-ClientBlocker](https://github.com/Simple-Tracker/qBittorrent-ClientBlocker) ★1238 [`bitcomet`] [`qbittorrent`] [`transmission`]  
  用于 qBittorrent 客户端的简易 Tracker 屏蔽工具，可阻止特定 peer 客户端连接，优化下载网络环境，减少不良客户端干扰，常用于私有 Tracker 站点维护网络健康。
- [awake1t/PortBrute](https://github.com/awake1t/PortBrute) ★1112  
  PortBrute 是一个用于网络端口爆破的工具，主要用于对常见服务（如SSH、FTP、Redis等）进行密码暴力破解测试。它支持自定义目标、端口和服务类型，适用于渗透测试中的弱口令检测场景，帮助安全人员评估内网服务的安全性。使用时需配合合法授权环境，避免非法入侵行为。
- [maintell/webBenchmark](https://github.com/maintell/webBenchmark) ★1012  
  webBenchmark 是一个用于评估 Web 服务器性能的基准测试工具，主要用于测量响应时间、吞吐量和并发处理能力，帮助开发者优化服务端应用性能。
- [mat/besticon](https://github.com/mat/besticon) ★993 [`favicon`] [`go`] [`icons`] [`microservice`] [`service`] [`website`]  
  一个轻量级的图标提取工具，主要用于从网站的 HTML 页面中自动识别和提取高质量的 favicon 图标文件，支持多种格式和尺寸，适用于网页抓取、书签管理或浏览器扩展等场景。
- [scaleway/scaleway-cli](https://github.com/scaleway/scaleway-cli) ★990 [`cli`] [`go`] [`scaleway`] [`scaleway-cli`]  
  用于管理 Scaleway 云基础设施的命令行工具，支持服务器、存储、数据库等资源的快速创建、配置和监控，适用于自动化部署与日常运维。
- [boypt/simple-torrent](https://github.com/boypt/simple-torrent) ★986  
  一个轻量级的 Torrent 下载工具，专注于简化操作流程，支持磁力链接和种子文件解析，适用于快速下载和资源分享场景，适合对 Torrent 协议有基础了解的用户。
- [lemoex/oci-help](https://github.com/lemoex/oci-help) ★909  
  oci-help 是一个用于辅助管理和操作 Oracle Cloud Infrastructure（OCI）资源的工具，主要用于简化常见运维任务，如实例管理、网络配置、资源监控等，帮助用户更高效地在 OCI 平台上自动化部署和维护云基础设施。
- [Kenshin/gnvm](https://github.com/Kenshin/gnvm) ★679  
  gnvm是一个用于管理Go语言版本的命令行工具，支持快速切换、安装和删除不同版本的Go，方便开发者在多项目中适配不同的Go版本需求，适用于需要频繁切换Go版本的开发场景。
- [yqchilde/wxbot](https://github.com/yqchilde/wxbot) ★662 [`chatgpt`] [`go`] [`golang`] [`gpt-35-turbo`] [`openai`] [`wechat`] [`wechat-bot`] [`wxbot`]  
  基于企业微信开发的自动化机器人工具，主要用于消息通知、任务提醒及简单交互操作，支持API对接与定时任务，便于集成到运维、开发或办公自动化流程中，提升信息传递效率。
- [tickstep/cloudpan189-go](https://github.com/tickstep/cloudpan189-go) ★655  
  命令行工具 cloudpan189-go 专为天翼云盘（189 云盘）打造，让用户免登录网页和客户端，直接在终端完成文件上传、下载、批量管理、目录切换、分享链接生成等操作，适合服务器、NAS 或脚本自动化场景，可高效处理海量文件的备份与迁移，同时支持多账号管理和断点续传，显著提升网盘操作效率。
- [ZeroDream-CN/SakuraFrp](https://github.com/ZeroDream-CN/SakuraFrp) ★562  
  ZeroDream-CN/SakuraFrp 是一个用于内网穿透和网络代理的开源工具，主要用于在没有公网 IP 的环境下实现本地服务的远程访问。该项目通常适用于调试微信公众号、小程序或 Webhook 等需要外网访问本地服务器的场景，支持多种协议转发、自定义域名和加密传输，配置简便，适合开发者在测试和部署阶段使用。
- [sagan/ptool](https://github.com/sagan/ptool) ★451  
  一个基于 Python 的渗透测试工具集，主要用于网络安全评估和漏洞扫描，提供模块化设计以便扩展功能，适用于红队演练和安全研究，支持多种网络协议和服务的自动化检测。
- [crabkun/switcher](https://github.com/crabkun/switcher) ★445  
  一个基于浏览器扩展的代理切换工具，主要用于便捷管理网络请求代理规则，支持自定义配置和快速切换，适合开发者在不同网络环境间高效调试和访问资源。
- [orzogc/fake115uploader](https://github.com/orzogc/fake115uploader) ★376 [`115`]  
  用于模拟115网盘上传的开源工具，支持文件分片上传、断点续传等功能，主要用于测试或自动化上传场景，帮助用户绕过官方客户端限制实现批量操作。
- [ssstk/cngrok](https://github.com/ssstk/cngrok) ★363  
  cngrok 是专为内网穿透场景设计的工具，能够将本地运行的 Web 服务或接口快速映射到公网，生成临时或持久的访问链接。它适合前后端联调、第三方回调调试、以及向客户或团队成员展示本地项目等场景，省去部署公网服务器的成本。与官方 ngrok 相比，cngrok 通常在网络稳定性、访问速度和自定义配置方面进行了改进，常见用法包括定义隧道转发规则、设置访问认证以及绑定自定义域名。其部署方式简单，适合个人开发者和小型团队在不具备公网 IP 的环境下使用，也可以替代传统 VPN 或公网服务器方案，快速验证或共享本地功能。
- [sigcn/pg](https://github.com/sigcn/pg) ★300 [`arq`] [`firewall`] [`go`] [`ipv6`] [`nat`] [`p2p`] [`peerguard`] [`udp`] [`vpn`]  
  一个基于Python的图神经网络库，主要用于处理和分析大规模图结构数据，支持节点分类、链接预测和图分类等任务，适用于社交网络分析、推荐系统和生物信息学等领域。
- [WenLiCG/PowerWhois](https://github.com/WenLiCG/PowerWhois) ★221 [`domain`] [`proxy`] [`rdap`] [`whois`]  
  用于查询IP地址或域名的WHOIS信息的PowerShell模块，可获取注册人、组织、联系方式及注册时间等数据，便于网络信息侦察与安全分析。
- [TimothyYe/glance](https://github.com/TimothyYe/glance) ★217 [`cli-reader`] [`glance`] [`txt-reader`]  
  Glance 是一个基于 Go 语言开发的轻量级监控工具，主要用于实时捕获和展示系统资源使用情况，如 CPU、内存、磁盘和网络等。它支持命令行界面和 Web 界面展示，适合用于服务器性能观测和调试，帮助用户快速了解系统运行状态。
- [upyun/upx](https://github.com/upyun/upx) ★201 [`cli`] [`upyun`]  
  upyun/upx 是又拍云推出的一款命令行工具，主要用于通过终端管理又拍云存储及相关资源，支持文件上传、下载、目录同步等日常操作，适合需要批量处理云端文件或在脚本中集成存储任务的开发者，能够替代繁琐的网页控制台操作，提升自动化运维效率。
- [cxbdasheng/dnet](https://github.com/cxbdasheng/dnet) ★181 [`aliyun-api`] [`bai-du`] [`baiduyun`] [`cdn`] [`dcdn`] [`ddns`] [`ipv6`] [`tencentcloud-sdk`]  
  dnet 是一个基于 .NET 的分布式网络通信框架，主要用于构建高性能、可扩展的分布式系统。它提供了服务注册与发现、远程调用、负载均衡、容错处理等核心功能，支持微服务架构下的高效通信，适用于需要高并发和低延迟的场景。
- [moeyy01/gh-proxy-go](https://github.com/moeyy01/gh-proxy-go) ★152  
  一个基于 Go 语言开发的轻量级 GitHub 资源代理工具，主要用于加速 GitHub 图片、API 等静态资源的访问，支持自定义域名和缓存策略，适合部署在海外服务器以优化国内用户的 GitHub 使用体验，部署简单，资源消耗低。
- [mudkipme/mortis](https://github.com/mudkipme/mortis) ★140  
  Mortis 是一个轻量级的 Rust 编写的系统级工具，主要用于监控和管理 Linux 系统的电源状态与性能调节，支持自定义电源策略、实时资源监控和低开销的后台运行，适合用于笔记本节能优化或服务器功耗管理。
- [3394772548/yue-spider](https://github.com/3394772548/yue-spider) ★137  
  yue-spider 是一个基于 Python 的网络爬虫工具，主要用于高效抓取和解析网页数据，支持异步请求、数据持久化和灵活的规则配置，适用于舆情监控、数据采集和内容分析等场景。
- [jsyzchen/pan](https://github.com/jsyzchen/pan) ★98 [`baidu`] [`go`] [`netdisk`] [`openapi`] [`pan`] [`pan-openapi`] [`pan-sdk-go`] [`pcs`] [`pcsapi`] [`sdk`] [`sdk-go`] [`xpan`]  
  一个基于Web的文件管理系统，主要用于实现在线文件的上传、下载、预览和分享功能，支持多用户权限控制，适合个人或团队搭建私有云存储服务，前端采用JavaScript开发，后端使用Node.js，具备良好的可扩展性和自定义能力。
- [kaigedong/cnm3u](https://github.com/kaigedong/cnm3u) ★84  
  用于生成和管理m3u格式播放列表的工具，支持自定义分类和节目单过滤，适用于个人媒体库或IPTV频道整理，可快速构建本地或远程播放源的索引文件。
- [jihuayu/TCP-CDN](https://github.com/jihuayu/TCP-CDN) ★59  
  基于TCP的CDN加速系统，通过优化传输层协议提升内容分发效率，适用于弱网环境下的数据传输加速，支持自定义调度策略与节点管理，主要用于降低延迟、提高连接稳定性与资源加载速度。
- [malaohu/jikeqingpan](https://github.com/malaohu/jikeqingpan) ★38  
  用于记录和管理用户在即刻应用中的互动行为，包括点赞、评论等动态，帮助用户更好地回顾和整理社交足迹。
- [ayoubfaouzi/chrome-extension-downloader](https://github.com/ayoubfaouzi/chrome-extension-downloader) ★30 [`browser-extension`] [`chrome-extension`] [`crx`] [`webstore`]  
  用于下载 Chrome 扩展程序的工具，可获取线上 Chrome 应用商店中的扩展插件离线安装包（CRX 文件），方便本地安装或备份，无需手动访问商店页面，适用于开发者或需要离线部署扩展的用户。
- [H3CoF6/OpenList-FlashTransfer](https://github.com/H3CoF6/OpenList-FlashTransfer) ★5  
  一个基于 WebSocket 的实时文件传输工具，主要用于局域网内跨平台快速共享文件，支持多格式传输与实时通信，适合需要高频交换文件的开发与协作场景。
