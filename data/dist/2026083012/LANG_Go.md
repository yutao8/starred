# Go 仓库

- **仓库数量：** 134
- **生成时间：** 2026-08-30 12:00:14

- [fatedier/frp](https://github.com/fatedier/frp) ★109092 [`expose`] [`firewall`] [`frp`] [`go`] [`http-proxy`] [`nat`] [`p2p`] [`proxy`] [`reverse-proxy`] [`tunnel`]  
  用于内网穿透和端口转发，可以将位于防火墙或 NAT 后面的内网服务安全地暴露到公网，支持 TCP、UDP、HTTP、HTTPS 等多种协议。它通常由部署在公网的服务端和运行在内网的客户端组成，通过反向代理建立加密通道，实现远程访问内网主机、Web 服务或 SSH 等应用。适合个人开发调试、远程办公、搭建临时演示站点或物联网设备管理，尤其适用于没有独立公网 IP 的场景。配置简单，性能稳定，是运维和开发人员常用的自托管穿透方案。
- [syncthing/syncthing](https://github.com/syncthing/syncthing) ★88114 [`go`] [`p2p`] [`peer-to-peer`] [`synchronization`]  
  Syncthing 是一款开源的去中心化文件同步工具，采用点对点协议直接在设备间传输数据，无需中央服务器或云存储中转。它适合需要跨电脑、手机或服务器同步文件夹的用户，尤其注重隐私和安全性，所有通信均经过加密，并支持端到端信任验证。典型使用场景包括同步文档、照片、配置文件，或在多台设备间保持工作目录一致。由于没有第三方留存数据，也常用于替换 Dropbox 等云盘服务，同时兼容 Windows、macOS、Linux 和移动平台，部署灵活且易于通过 Web 界面管理。
- [junegunn/fzf](https://github.com/junegunn/fzf) ★82721 [`bash`] [`cli`] [`fish`] [`fzf`] [`go`] [`neovim`] [`tmux`] [`unix`] [`vim`] [`zsh`]  
  用于终端交互的通用模糊查找工具，能在管道中快速过滤并选择文本行，支持快捷键预览、多选和自定义键位绑定。通常配合命令行使用，可搜索文件路径、命令历史、Git 分支或进程列表，适合在复杂终端工作流中替代逐层浏览或手动 grep 定位，大幅提升操作效率。
- [usememos/memos](https://github.com/usememos/memos) ★62640 [`docker`] [`foss`] [`go`] [`markdown`] [`memo`] [`microblog`] [`note-taking`] [`notecard`] [`own-your-data`] [`react`] [`self-hosted`] [`social-network`] [`sqlite`]  
  Memos 是一款开源的轻量级备忘录服务，用于替代传统笔记或社交媒体动态，支持快速记录短文字、图片和 Markdown 内容，并配合标签、筛选和每日回顾功能整理碎片信息。它采用自托管方式部署，用户可完全掌控数据，适合个人或小团队作为隐私友好的微博式笔记工具，同时提供简洁的 API 和响应式界面，便于日常灵感收集、任务速记与知识沉淀。
- [minio/minio](https://github.com/minio/minio) ★61375 [`amazon-s3`] [`cloud`] [`cloudnative`] [`cloudstorage`] [`go`] [`k8s`] [`kubernetes`] [`multi-cloud`] [`multi-cloud-kubernetes`] [`objectstorage`] [`s3`] [`storage`]  
  MinIO 是开源的高性能对象存储服务器，全面兼容 Amazon S3 API，常用于搭建私有云或混合云存储基础设施。它适合存储图片、视频、日志、备份等非结构化数据，支持单机部署与分布式集群扩展，并可通过纠删码保障数据可靠性。MinIO 轻量易运维，在 Kubernetes 环境中尤为常见，常作为云原生应用的数据后端，解决自建对象存储需求。
- [FiloSottile/mkcert](https://github.com/FiloSottile/mkcert) ★59522 [`certificates`] [`chrome`] [`firefox`] [`https`] [`ios`] [`linux`] [`local-development`] [`localhost`] [`macos`] [`root-ca`] [`tls`] [`windows`]  
  mkcert 是一个用于在本地开发环境中快速生成受信任 HTTPS 证书的命令行工具，只需一条命令即可为 localhost、127.0.0.1 或任意局域网地址签发浏览器和操作系统信任的证书，同时自动在系统证书库中安装本地 CA，彻底解决开发时浏览器对自签名证书的警告问题。它主要面向前后端工程师、API 开发者以及需要模拟生产 HTTPS 环境的本机测试场景，支持 Windows、macOS 和 Linux，能够与 Nginx、Docker、Node.js 等常见开发栈无缝配合。通过简单的证书管理命令，用户可以随时创建或删除证书，适合需要频繁搭建本地加密服务的团队或个人使用。
- [rclone/rclone](https://github.com/rclone/rclone) ★59454 [`azure-blob`] [`azure-blob-storage`] [`azure-files`] [`backblaze-b2`] [`cloud-storage`] [`dropbox`] [`encryption`] [`ftp`] [`fuse-filesystem`] [`go`] [`golang`] [`google-cloud-storage`] [`google-drive`] [`onedrive`] [`openstack-swift`] [`rclone`] [`s3`] [`sftp`] [`sync`] [`webdav`]  
  rclone 是用于管理云存储文件的命令行工具，主要解决把文件可靠地从一个存储系统复制或同步到另一个存储系统的问题。它支持海内外常见云盘、对象存储和远程协议，可执行文件复制、双向同步、加密备份、内容校验与限速控制，也可以把远程目录挂载为本地磁盘。通常适合做跨云迁移、定期备份、服务器数据同步等自动化场景，因为配置文件清晰且可在无图形界面环境下运行。
- [go-gitea/gitea](https://github.com/go-gitea/gitea) ★57676 [`bitbucket`] [`cicd`] [`devops`] [`docker-registry-v2`] [`git`] [`git-gui`] [`git-lfs`] [`git-server`] [`gitea`] [`github`] [`github-actions`] [`gitlab`] [`go`] [`golang`] [`hacktoberfest`] [`maven-server`] [`npm-registry`] [`self-hosted`] [`typescript`] [`vue`]  
  用于自托管 Git 仓库的轻量级代码托管平台，采用 Go 语言开发，部署简单且资源占用低。提供代码托管、Pull Request、Issue 管理、Wiki、CI/CD 集成等常用功能，适合个人开发者、中小团队或需要对数据隐私有较高要求的企业内部协作场景。支持多种操作系统与架构，可通过 Docker 快速部署，并支持与现有认证系统集成。通常用来替代公共托管服务，构建独立、可控的代码管理环境。
- [AlistGo/alist](https://github.com/AlistGo/alist) ★50121 [`file-server`] [`gin`] [`golang`] [`onedrive`] [`solidjs`] [`webdav`]  
  用于将多种网盘、本地磁盘和对象存储聚合到一个统一 Web 界面的开源文件列表程序。通常支持文件浏览、上传下载、在线预览、目录分享以及跨存储的复制移动，适合搭建个人云盘、团队文件共享或轻量级网盘管理门户。通过一次部署即可在同一个界面中访问和管理不同来源的数据，解决多后端管理碎片化的问题。该项目由 Go 语言编写，部署简单，性能出色，常配合 Docker 等容器化方案使用。
- [router-for-me/CLIProxyAPI](https://github.com/router-for-me/CLIProxyAPI) ★49251 [`antigravity`] [`claude-code`] [`cluade`] [`codex`] [`gemini`] [`openai`]  
  CLIProxyAPI 用于将命令行工具封装为 HTTP 接口，使外部程序可以通过标准网络请求执行 CLI 命令并获取结果。它适合将已有脚本或终端工具集成进 Web 系统、微服务或自动化流程中的场景，能够避免重写原有功能，实现远程调用与统一访问入口。项目通常涉及请求解析、命令路由和输出转换等能力，具体行为需参考当前版本实现，整体解决的是“让命令行工具变成可编程网络服务”的常见问题。
- [gogs/gogs](https://github.com/gogs/gogs) ★47783 [`docker`] [`git`] [`go`] [`gogs`] [`mysql`] [`postgresql`] [`raspberry-pi`] [`self-hosted`] [`source-code-management`] [`sqlite3`] [`version-control`]  
  Gogs 用 Go 编写，专门用于搭建轻量级私有 Git 托管服务。它面向个人或小团队，适合在内网部署，提供仓库管理、问题跟踪、代码审查和 Web 编辑等协作能力，安装维护成本低，对硬件要求不高，支持多平台运行，是替代公有代码托管或作为 CI/CD 后端的常见选择。
- [v2ray/v2ray-core](https://github.com/v2ray/v2ray-core) ★46935 [`golang`] [`http-proxy`] [`proxy`] [`shadowsocks`] [`socks`] [`socks5`] [`v2ray`] [`vmess`]  
  V2Ray 是一个跨平台的网络代理引擎，主要用于构建加密传输通道，实现安全访问互联网和绕过网络审查。它支持多种代理协议，如 VMess、Shadowsocks、HTTP 等，并能通过灵活的路由规则自由分流流量。典型应用场景包括保护隐私、突破地域限制、科学上网等，适合需要高度定制化代理策略的用户与开发者。
- [QuantumNous/new-api](https://github.com/QuantumNous/new-api) ★46750 [`ai-gateway`] [`claude`] [`deepseek`] [`gemini`] [`newapi`] [`openai`] [`rerank`]  
  用于搭建统一的大模型 API 网关，集中管理 OpenAI、Anthropic、Gemini 等多家服务商的接口密钥与渠道，支持令牌分发、额度控制、用量统计和计费功能。适合需要为团队或用户提供多模型中转服务，或对现有 API 调用做统一鉴权、限流与审计的场景。通常作为 one-api 的增强替代方案，可对接常见模型供应商，并兼容多数 OpenAI 格式的客户端，便于平滑迁移和二次开发。
- [juanfont/headscale](https://github.com/juanfont/headscale) ★43316 [`tailscale`] [`tailscale-control-server`] [`tailscale-server`] [`wireguard`]  
  headscale 用于自托管 Tailscale 控制服务器，让用户在没有官方云端的情况下运行自己的 VPN 组网协调服务。它兼容 Tailscale 客户端，能够管理节点注册、设备认证和网络配置，实现基于 WireGuard 的加密组网。典型使用场景包括企业内部网络互联、跨地域设备访问，以及需要数据主权和隐私保护的团队。通过自建控制平面，可以摆脱对第三方云服务的依赖，同时保留 Tailscale 的易用性和功能。适合对自主可控、合规审计和定制集成有要求的部署环境。
- [schollz/croc](https://github.com/schollz/croc) ★40143 [`data-transfer`] [`file-sharing`] [`golang`] [`pake`] [`peer-to-peer`] [`tcp`] [`transfer`]  
  croc 实现在两台设备间安全传输文件和文件夹，是一个基于命令行的工具。它使用端到端加密保护内容，通过中继服务器协助握手，即使双方都在内网也能穿透 NAT 互联。使用时只需在两台机器上分别输入同一串随机短语，即可建立加密通道并开始传送；支持断点续传，也可发送整个目录。适合临时跨设备分享大文件，替代网盘或 U 盘，支持 Windows、macOS、Linux 等常见平台，对普通用户和开发者都很方便。
- [Wei-Shaw/sub2api](https://github.com/Wei-Shaw/sub2api) ★39820 [`2api`] [`antigravity2api`] [`cc2api`] [`claude`] [`claude-code`] [`codex`] [`crs`] [`crs2`] [`gemini`]  
  用于将订阅链接转换为API接口，核心功能是把各类代理订阅信息封装为可统一调用的HTTP服务，方便程序自动化获取或分发配置。典型场景包括客户端动态更新、代理池管理、自建面板集成等，解决订阅格式多样、手动维护低效的问题。使用者只需通过HTTP请求即可获取处理后的订阅数据，便于实现动态配置和二次开发。
- [filebrowser/filebrowser](https://github.com/filebrowser/filebrowser) ★35968 [`file-browser`] [`file-manager`] [`file-sharing`] [`go`] [`material-design`] [`self-hosted`] [`vue`]  
  一种用于在浏览器中管理服务器文件的轻量级Web应用，提供直观界面来上传、下载、编辑、删除和预览文件，支持多用户登录与权限分配。通常自托管在个人服务器或NAS上，用于替代传统的FTP或命令行操作，适合个人用户或小团队快速搭建私有云盘及协作文件管理系统。部署简单，后端采用Go语言，响应速度快，支持跨平台运行及自定义主题，能够有效解决远程文件管理不便、权限控制困难等问题。
- [tailscale/tailscale](https://github.com/tailscale/tailscale) ★35779 [`2fa`] [`oauth`] [`sso`] [`tailscale`] [`vpn`] [`wireguard`]  
  Tailscale 是一款基于 WireGuard 协议的现代 VPN 工具，用于在任何设备间快速搭建安全加密的私有网络。它利用自动 NAT 穿透和密钥管理，使电脑、手机、服务器等跨地域设备像处于同一局域网内直接通信，无需手动配置端口转发或公网 IP。典型场景包括远程访问家中或公司内部资源、云服务器组网、多人协作共享设备，适合需要简单可靠安全直连的团队和个人，替代传统 VPN 的复杂配置。
- [ehang-io/nps](https://github.com/ehang-io/nps) ★34183 [`dns`] [`firewall`] [`go`] [`gzip`] [`http`] [`https`] [`nat`] [`nps`] [`snnapy`] [`socks`] [`socks5`] [`ssh`] [`tcp`] [`tunnel`] [`udp`]  
  nps 是一款用 Go 实现的内网穿透工具，主要将内网中的 Web、数据库、SSH 等服务安全映射到公网，支持 TCP、UDP、HTTP、HTTPS 协议以及多端口复用和域名转发。它采用轻量级服务端加客户端模式，并附带可视化 Web 管理界面，适合没有公网 IP 的个人用户或中小团队，用于远程办公、设备调试、临时演示、内网服务公网访问等场景。配置灵活，部署简单，是搭建反向代理隧道和跳板服务的常用选择。
- [binwiederhier/ntfy](https://github.com/binwiederhier/ntfy) ★33843 [`curl`] [`notifications`] [`ntfy`] [`ntfysh`] [`pubsub`] [`push-notifications`] [`rest-api`]  
  ntfy 是一个轻量级的开源推送通知服务，允许用户通过简单的 HTTP 请求或命令行向手机、桌面或浏览器实时发送通知，无需注册或安装专用客户端。它的核心思路是利用自托管的服务器或公共实例，结合主题订阅机制，将消息推送到任意设备。典型使用场景包括服务器监控告警、脚本执行结果提醒、定时任务通知，以及任何需要及时触达的轻量级消息传递。项目支持多种通知渠道（如 WebSocket、Android、iOS 和 Web），并可通过 curl 或标准 HTTP 工具直接调用，极大降低了集成门槛。它尤其适合希望摆脱商业推送服务限制、追求隐私和自定义控制的开发者和运维人员。
- [iawia002/lux](https://github.com/iawia002/lux) ★31659 [`bilibili`] [`crawler`] [`download`] [`downloader`] [`go`] [`golang`] [`iqiyi`] [`qq`] [`scraper`] [`tumblr`] [`video`] [`youku`] [`youtube`]  
  支持众多视频网站的视频下载工具，可通过命令行直接输入链接获取并保存视频，同时支持自定义画质、批量下载、外挂字幕和 cookies 等功能，适合需要离线观看视频或备份内容的用户。
- [XIU2/CloudflareSpeedTest](https://github.com/XIU2/CloudflareSpeedTest) ★28806 [`cdn`] [`cloudflare`] [`go`] [`golang`] [`speedtest`]  
  CloudflareSpeedTest 是一款用于测试 Cloudflare CDN 延迟和速度的命令行工具，它通过批量测试 Cloudflare 各 IP 节点的响应速度和连接质量，帮助用户找出当前网络环境下最快的 IP 地址。该工具通常与 hosts 文件或 DNS 工具搭配使用，可用于解决网站访问缓慢或连接不稳定的问题，常见于代理配置、服务器网络优化等场景。它支持 Windows、Linux、macOS 等多平台，操作方式简单，适合开发者和网络管理员使用。
- [netbirdio/netbird](https://github.com/netbirdio/netbird) ★28728 [`golang`] [`mesh`] [`mesh-networks`] [`nat-traversal`] [`netbird`] [`vpn`] [`wireguard`] [`wireguard-vpn`] [`wiretrustee`] [`zero-trust-network-access`]  
  NetBird 是一个基于 WireGuard 的开源零信任网络连接工具，主要用于构建安全、灵活的点对点 VPN 网络。它让分布在不同网络环境下的设备能够通过加密隧道直接互联，无需手动配置公网 IP 或复杂路由。适合远程办公、多云架构、边缘设备组网等需要跨地域安全通信的场景。NetBird 提供设备管理、自动密钥轮换、访问控制策略，并内置 NAT 穿透能力，从而简化传统 VPN 的部署与维护。同时支持自托管服务端，适用于对数据主权或网络拓扑有较强控制需求的团队。
- [cloudreve/cloudreve](https://github.com/cloudreve/cloudreve) ★28625 [`cloud`] [`cloud-storage`] [`cloudreve`] [`file`] [`file-manager`] [`file-sharing`] [`golang`]  
  Cloudreve是一款开源的云存储网盘系统，主要用于搭建个人或团队的私有文件管理平台。它支持本地磁盘及多种主流对象存储后端，提供文件上传、下载、在线预览、目录分享、用户权限管理等功能，并具备响应式Web界面，适合部署在服务器上用于替代公有网盘，解决数据自主可控、访问速度受限和容量不足等问题，同时可通过插件机制进行功能扩展。
- [Wox-launcher/Wox](https://github.com/Wox-launcher/Wox) ★27296 [`alfred`] [`launcher`] [`launchy`] [`productivity`] [`productivity-tools`] [`raycast`] [`spotlight`] [`wox`] [`wox-launcher`]  
  Wox 是 Windows 平台上的开源快速启动器，类似 macOS 的 Alfred。通过自定义快捷键唤起搜索框，输入关键词即可实时搜索本地程序、文件，并支持网页搜索与插件扩展。基于 C# 构建，运行流畅，适合习惯键盘操作、希望减少鼠标切换的桌面用户，能显著提升日常软件启动和系统操作的效率。插件机制还允许按需扩展功能，覆盖更多个性化场景。
- [GopeedLab/gopeed](https://github.com/GopeedLab/gopeed) ★26009 [`android`] [`bittorrent`] [`cross-platform`] [`debian`] [`downloader`] [`flutter`] [`golang`] [`http`] [`https`] [`ios`] [`macos`] [`magnet`] [`torrent`] [`ubuntu`] [`windows`]  
  Gopeed 是一款基于 Go 和 Flutter 开发的跨平台高速下载工具，支持 HTTP、BitTorrent 和磁力链接等主流协议。它提供了简洁的图形化界面和灵活的 API 接口，适合需要多协议下载、任务管理和自动化集成的用户。无论是日常文件获取还是批量下载场景，都能通过其高性能内核和可扩展插件机制满足需求，尤其适用于开发者和高级用户构建定制化的下载工作流。
- [containrrr/watchtower](https://github.com/containrrr/watchtower) ★24663 [`automation`] [`continuous-delivery`] [`devops`] [`docker`] [`hacktoberfest`] [`notifications`] [`receive-notifications`] [`registry`] [`update-checker`] [`watchtower`]  
  用于自动更新 Docker 容器的工具，通过定期检查镜像仓库中的版本变化，在发现新镜像后自动拉取并重建容器，避免手动更新和维护的繁琐。常与 Docker Compose 或 Kubernetes 配合使用，适合需要持续运行最新版本镜像的服务器环境，例如自托管服务、个人 NAS 或生产集群。主要解决容器镜像版本滞后、安全补丁延迟以及多容器批量更新的问题，让容器保持最新状态而无需人工干预。
- [inconshreveable/ngrok](https://github.com/inconshreveable/ngrok) ★24430  
  ngrok 是广受欢迎的内网穿透工具，能将本地或局域网中的服务通过加密隧道映射到公网临时域名，实现外部访问。主要用于本地开发时调试第三方支付、微信等回调接口，或向远程同伴分享本机页面，也适合在没有公网 IP 的环境下快速验证 Web 服务。支持 HTTP、HTTPS 与 TCP 协议，并提供简易状态面板查看请求记录。通常适合需要快速安全暴露本地端口的开发者与测试人员，用于缩短联调周期、简化演示流程。
- [OpenListTeam/OpenList](https://github.com/OpenListTeam/OpenList) ★24387 [`alist`] [`aliyunpan`] [`baidupan`] [`openlist`]  
  OpenList 是一个开源清单管理工具，主要用于创建、组织和共享各类列表内容，适合个人待办事项、购物清单或团队协作场景下的信息整理。它简化了列表的增删改查和分类管理流程，帮助用户快速维护结构化的数据记录。由于项目提供了简洁的界面和灵活的数据组织方式，通常适用于需要轻量级列表解决方案的日常使用或小型团队协作。
- [navidrome/navidrome](https://github.com/navidrome/navidrome) ★23215 [`airsonic`] [`madsonic`] [`media-server`] [`music`] [`music-server`] [`navidrome`] [`opensubsonic`] [`raspberry-pi`] [`self-hosted`] [`streamer`] [`streaming-api`] [`streaming-audio`] [`subsonic`] [`subsonic-server`]  
  Navidrome 是一款开源的个性化音乐流媒体服务器，主要用于自建私有云音乐库。它能自动扫描指定音乐文件夹，整理专辑、歌手和播放列表，并提供响应式 Web 界面直接在线播放。同时兼容 Subsonic API，便于第三方手机客户端接入，实现跨设备同步收听。典型使用场景包括个人或家庭搭建无广告、不受云端限制的音乐平台，解决数据隐私和播放工具依赖商业服务的问题。整体轻量易部署，适合对音乐收藏有自主管理需求的用户。
- [chaitin/SafeLine](https://github.com/chaitin/SafeLine) ★22464 [`api-gateway`] [`application-security`] [`appsec`] [`blueteam`] [`bruteforce`] [`captcha`] [`cve`] [`cybersecurity`] [`firewall`] [`hackers`] [`http-flood`] [`security`] [`self-hosted`] [`sql-injection`] [`vulnerability`] [`waf`] [`web-application-firewall`] [`web-security`] [`websecurity`] [`xss`]  
  SafeLine（雷池）是长亭科技开源的免费自建 Web 应用防火墙，用于实时防御 SQL 注入、跨站脚本、恶意爬虫等常见 Web 攻击。它采用语义分析引擎识别异常流量，误报率低，且性能开销小，易于部署，适合中小型网站、个人开发者或对数据隐私有要求的生产环境。提供可视化管理界面，可灵活配置防护策略，并具备高并发处理能力，能有效应对突发流量。
- [HyNetworks/hysteria](https://github.com/HyNetworks/hysteria) ★22388 [`censorship-circumvention`] [`golang`] [`http-proxy`] [`hysteria`] [`proxy`] [`quic`] [`relay`] [`reliable-udp`] [`socks5`] [`tun`] [`vpn`]  
  用于构建高性能、防封锁的网络代理工具，其核心基于 QUIC 协议，能够显著提升弱网环境下的传输速度和稳定性。它针对丢包和延迟做了优化，通常适合在需要翻越防火墙、避免限速或改善跨国连接质量时使用。该工具支持将流量伪装成 HTTP/3，以此混淆特征并抵抗流量深度检测，同时提供 SOCKS5 代理能力，便于接入现有应用。它的目标是实现接近硬件的转发效率并适应复杂网络环境，是安全研究和隐私保护场景下常见的加速与穿透方案。
- [m1k1o/neko](https://github.com/m1k1o/neko) ★22210 [`docker`] [`golang`] [`media-streaming`] [`remote-control`] [`remote-desktop`] [`self-hosted`] [`virtual-browser`] [`vue`] [`webrtc`]  
  neko 是一个自托管的虚拟浏览器工具，通过 WebRTC 实现多人实时共享和远程控制浏览器会话。它让多个用户可以同时查看并操作同一个浏览器页面，适合远程协作、在线教学、客服支持等场景。项目以 Go 语言构建，支持低延迟的音视频通信，用户无需安装额外插件即可在网页中使用，常用于搭建隐私友好的团队协作环境。
- [putyy/res-downloader](https://github.com/putyy/res-downloader) ★19586 [`douyin`] [`kuaishou`] [`res-downloader`] [`wechat`] [`wechat-video`] [`xiaohongshu`]  
  用于从网页中提取并下载各种类型的资源，例如图片、视频、音频和文件。适合需要批量获取页面素材或备份网页内容的用户，可避免逐条手动保存链接的繁琐过程。工具通常基于网络请求分析，自动识别资源地址，并按类别或配置进行保存。具体支持的功能和使用方式需参考项目说明，但核心定位是解决网页资源下载效率低下的问题。
- [lionsoul2014/ip2region](https://github.com/lionsoul2014/ip2region) ★19481 [`ip-address`] [`ip-address-database`] [`ip-address-location`] [`ip-location`] [`ip-lookup`] [`ipv4-address`] [`ipv4-lookup`] [`ipv4-support`] [`ipv6-address`] [`ipv6-lookup`] [`ipv6-support`] [`xdb-engine`] [`xdb-ipv4`] [`xdb-ipv6`]  
  面向开发者的离线IP地址定位库，通过内置的二进制数据文件实现毫秒级归属地查询，覆盖全球网络运营商和行政区划信息。特别适合需要高并发、低延迟的日志分析、用户画像、反欺诈风控等场景，支持Java、Python、PHP等多种语言接入，同时提供标准化的查询接口和自定义数据更新能力。不依赖外部API，兼顾隐私与稳定性，通常用于替代在线IP定位服务。
- [ginuerzh/gost](https://github.com/ginuerzh/gost) ★18195 [`dns`] [`go`] [`golang`] [`http2`] [`kcp`] [`obfs4`] [`quic`] [`shadowsocks`] [`sni`] [`socks5`] [`ssh`] [`tls`] [`tunnel`] [`tuntap`] [`udp`]  
  gost是一个用Go语言编写的安全隧道工具，主要用于搭建网络代理和端口转发服务。它支持HTTP、SOCKS5、Shadowsocks等多种代理协议，可实现多级链式代理和流量伪装，适合突破网络封锁、内网穿透等场景。gost配置灵活，可通过配置文件或命令行参数快速部署，常用于服务器间的安全通信和私密代理转发。该工具轻量高效，非常适合个人开发者或运维人员构建私有代理节点，解决跨网络访问限制和端口映射的问题。
- [slackhq/nebula](https://github.com/slackhq/nebula) ★17669  
  Nebula 是 Slack 开源的覆盖网络工具，用于在不可信网络上构建安全、可扩展的虚拟专用网络。它采用去中心化的证书认证和加密隧道，无需中心服务器即可让分布在不同地域的节点直接通信，常用于混合云环境、边缘设备组网以及跨数据中心互联。与 OpenVPN 或 WireGuard 相比，Nebula 更侧重于大规模节点的自动发现与动态成员管理，适合需要频繁加入或离开主机的场景，同时保持低延迟和高吞吐。配置灵活，支持细粒度的访问控制策略，适合运维、开发团队快速搭建自定义网络拓扑。
- [ory/hydra](https://github.com/ory/hydra) ★17511 [`authorization`] [`cloud`] [`docker`] [`federation`] [`hacktoberfest`] [`hydra`] [`identity`] [`oauth`] [`oauth-provider`] [`oauth2`] [`oauth2-provider`] [`oauth2-server`] [`oidc`] [`openid`] [`openid-connect`] [`openid-connect-provider`] [`openid-provider`] [`security`] [`server`] [`sso`]  
  ory/hydra 是一款开源的高性能 OAuth 2.0 和 OpenID Connect 认证服务器，主要用于为现有应用快速接入标准化的授权与单点登录能力。它由云原生团队 Ory 维护，通常作为独立服务部署，支持与任意数据库或用户系统集成，适合需要令牌签发、访问控制、联合身份认证的微服务架构或企业系统。其设计强调安全性、可扩展性和协议合规性，常用于替代自行开发的认证模块，帮助团队专注业务逻辑。
- [jeessy2/ddns-go](https://github.com/jeessy2/ddns-go) ★17281 [`alidns`] [`baiduyun`] [`cloudflare`] [`ddns`] [`ddns-go`] [`dnspod`] [`porkbun`]  
  DDNS-GO 是一个基于 Go 语言编写的动态域名解析工具，用于在家庭宽带或服务器公网 IP 发生变化时，自动更新域名解析记录，确保域名始终指向最新 IP。它支持阿里云、腾讯云、Cloudflare、华为云等主流 DNS 服务商，并兼容 IPv4 和 IPv6。用户只需在 Web 界面中配置账号密钥和域名，即可实现无人值守的自动同步。该工具尤其适合需要远程访问家里设备、搭建个人服务器或开展自托管服务的用户，解决了使用固定公网 IP 成本高、手动更新麻烦的问题。程序轻量易部署，支持多种操作系统，安装后常驻后台运行。
- [ent/ent](https://github.com/ent/ent) ★17179 [`ent`] [`entity-framework`] [`orm`]  
  ent 是用于 Go 语言的一款实体框架，核心价值在于把数据模型定义成代码，并通过代码生成机制自动产出类型安全的查询、更新和删除操作，省去手写大量样板代码的麻烦。它特别适合需要长期维护复杂数据模型的应用，比如电商、社交或企业后台系统，让开发者用 Go 语法描述表结构，编译时就能发现字段或关联错误，并在运行时免受类型转换困扰。该框架直接支持 GraphQL、gRPC 和 REST 等多种协议接入，能简化前后端数据契约的维护工作，通常与数据库迁移、缓存及事件驱动架构配合使用。
- [snail007/goproxy](https://github.com/snail007/goproxy) ★17122 [`dns-proxy`] [`encryption-proxy`] [`http`] [`http-proxy`] [`https-proxy`] [`kcptun`] [`reverse-proxy`] [`socket`] [`socks5`] [`socks5-proxy`] [`ss-proxy`] [`tcp`] [`tcp-proxy`] [`tls`] [`tls-proxy`] [`transparent-proxy`] [`udp`] [`udp-proxy`] [`upstream-proxies`] [`websocket-proxy`]  
  基于 Go 语言开发的高性能代理与内网穿透工具，通过简洁的命令行就能搭建稳定安全的网络通道。它支持 HTTP、HTTPS、SOCKS5 等常用代理协议，同时能够转发 TCP、UDP 流量，广泛用于解决异地组网、远程调试、外网访问内网服务等场景。由于不需要公网 IP 即可穿透，也常用于将本地服务临时公开给他人访问。整体轻量易用，适合开发者快速构建各类代理链路，且支持多平台部署。
- [gotify/server](https://github.com/gotify/server) ★15815 [`api`] [`cloud`] [`free-software`] [`golang`] [`gotify`] [`hosting`] [`javascript`] [`notifications`] [`privacy`] [`react`] [`self-hosted`] [`self-hosting`] [`selfhosted`]  
  Gotify 是一款使用 Go 语言编写的自托管推送通知服务器，用于替代依赖第三方服务的消息推送。它提供简洁的 REST API 供应用或脚本发送消息，同时自带 Web 管理界面，可查看历史消息、创建应用和客户端令牌。适合个人或团队在自有服务器上搭建通知中心，实现服务器监控报警、自动化任务结果推送、智能家居通知等场景。部署简单，支持 Docker，默认采用 HTTPS 加密传输，并提供 Android 客户端以便在手机上实时接收通知。
- [cloudflare/cloudflared](https://github.com/cloudflare/cloudflared) ★15428 [`cloudflare`] [`cloudflare-tunnel`] [`reverse-proxy`] [`zero-trust-network-access`]  
  Cloudflare 的命令行隧道工具 cloudflared 主要用于建立本地服务器与 Cloudflare 边缘节点的安全连接，从而将内网服务暴露到公网，无需公网 IP 或手动开放防火墙端口。它常见于远程访问内网应用、开发调试 Web 服务、物联网设备等场景，支持 HTTP、HTTPS、TCP 和 UDP 流量转发。用户借助 Cloudflare 全球网络可获得稳定的访问入口和基础防护，适合临时搭服务或构建零信任远程访问方案。
- [mickael-kerjean/filestash](https://github.com/mickael-kerjean/filestash) ★14560 [`archiving`] [`azure`] [`dms`] [`dropbox`] [`edrms`] [`ftp`] [`ged`] [`git`] [`ipfs`] [`mft`] [`nfs`] [`s3`] [`sae`] [`seda`] [`sftp`] [`sharepoint`] [`smb`] [`vfs`] [`webdav`]  
  Filestash 是一款开源的网页版文件管理器，用于通过浏览器统一访问和管理各类存储后端，包括 FTP、SFTP、S3、WebDAV 和本地磁盘等。它提供了现代化的界面、文件预览、搜索、分享及在线编辑功能，适合需要集中管理多种协议文件的中小型团队或个人使用，能显著简化跨平台文件操作流程。
- [shadow1ng/fscan](https://github.com/shadow1ng/fscan) ★14477 [`fscan`] [`scanner`] [`scanning`] [`sec`] [`security`] [`security-tools`]  
  fscan 是一款用 Go 编写的内网安全扫描工具，主要用于渗透测试和红队评估中的快速资产发现与漏洞探测。它集成了端口扫描、服务识别、弱口令爆破、Web 路径扫描、常见漏洞检测等功能，支持多种协议（如 SSH、RDP、MySQL、Redis 等）的批量弱口令尝试，并能在内网环境中自动探测存活主机和开放端口。通过简洁的命令行参数即可执行多维度扫描任务，适合对大规模内网进行快速信息收集和安全基线检查。其跨平台编译特性使其在 Windows、Linux 等系统上均可直接运行，通常被安全工程师用于授权范围内的内网安全评估。
- [casdoor/casdoor](https://github.com/casdoor/casdoor) ★14292 [`agent`] [`agentic-ai`] [`agi`] [`ai-gateway`] [`auth`] [`authentication`] [`iam`] [`llm`] [`mcp`] [`mcp-gateway`] [`mfa`] [`oauth`] [`oidc`] [`openclaw`] [`radius`] [`saml`] [`scim`] [`single-sign-on`] [`sso`] [`webauthn`]  
  用于身份认证与访问管理，提供单点登录、OIDC、OAuth2.0等标准协议支持，可嵌入自建应用或作为独立认证中心。通常适合需要统一登录、用户管理、第三方认证集成以及权限控制的场景，例如云原生应用、企业系统或开放平台。基于Go开发，部署轻量，并提供管理界面，方便管理员配置认证策略、组织和登录方式，减少开发者在身份验证上的重复工作。
- [coredns/coredns](https://github.com/coredns/coredns) ★14285 [`cncf`] [`coredns`] [`dns-server`] [`go`] [`plugin`] [`service-discovery`]  
  面向云原生场景的DNS服务器，用Go编写，以插件化架构为核心，是Kubernetes的默认DNS组件。主要用于解决集群内服务发现与域名解析，可动态识别Pod和Service的变化，并通过插件扩展转发、缓存、健康检查等功能。典型使用场景包括微服务环境下的服务间调用、内部域名解析，以及构建轻量级自定义DNS服务。简洁的配置文件与多后端支持，使其易于集成到容器编排和自动化运维流程中。
- [tinode/chat](https://github.com/tinode/chat) ★13474 [`chat`] [`chat-application`] [`chatapp`] [`chatbots`] [`chatserver`] [`collaboration`] [`go`] [`golang`] [`instant-messaging`] [`messaging`] [`messaging-api`] [`messenger`] [`telegram`] [`video-call`] [`video-chat`] [`video-conferencing`] [`webchat-server`] [`webrtc`] [`whatsapp`] [`xmpp`]  
  Tinode 是一套可自托管的开源即时通讯解决方案，包含服务端和多个平台的客户端，用于搭建私有的、不受第三方平台限制的聊天应用。它支持一对一聊天和群组讨论，适合需要数据自主可控的企业内部沟通或垂直领域社交产品使用。项目提供移动端和 Web 端接入能力，并可通过配置选择数据库存储方案，整体架构侧重部署灵活性和二次开发便利。如果希望快速构建一个功能完整且可定制的消息系统，Tinode 是较为稳妥的基础选择。
- [fullstorydev/grpcurl](https://github.com/fullstorydev/grpcurl) ★12791 [`golang`] [`grpc`] [`protobuf`]  
  grpcurl 是一个专门用于调试和测试 gRPC 服务的命令行工具，可以像 curl 请求 HTTP 接口那样直接调用远程 gRPC 方法。它通过加载 protobuf 描述文件或利用服务器提供的反射服务来自动发现服务接口，无需编写客户端代码。支持 JSON 格式的请求和响应转换，方便在终端中阅读和构造数据；同时支持 TLS 连接、认证头设置、流式 RPC 调用以及超时控制等常见需求。通常适合后端开发者在本地或测试环境中快速验证接口行为、排查调用问题，也适合运维和测试人员对线上服务做健康检查或功能验证。只要目标 gRPC 服务开放了反射或能提供描述文件，就能用 grpcurl 直接高效地交互。
- [peterq/pan-light](https://github.com/peterq/pan-light) ★12128 [`baiduyun`] [`golang`] [`qml`] [`qt5`]  
  pan-light 是一个轻量级的百度网盘客户端，主要面向需要替代官方客户端、追求简洁高效体验的用户。它支持百度账号登录、文件的上传与下载、目录管理以及分享链接等基础操作，并提供命令行和图形界面两种交互方式，适合在无图形环境或服务器上使用。该项目通常采用 Go 后端与 Web 前端相结合的技术栈，因此具备跨平台、易部署的特点，适合个人开发者或需要自动化管理网盘文件的场景。
- [gravitl/netmaker](https://github.com/gravitl/netmaker) ★11771 [`cloud`] [`devsecops`] [`ipv6-support`] [`k8s`] [`kubernetes`] [`mesh`] [`mesh-network`] [`overlay-network`] [`secure-remote-access`] [`security`] [`self-hosted`] [`site-to-site`] [`virtual-networking`] [`vpn`] [`vpn-server`] [`wg-quick`] [`wireguard`] [`wireguard-ui`] [`wireguard-vpn`] [`zero-trust`]  
  Netmaker 是一个以 WireGuard 为核心的开源虚拟网络控制平台，用于在服务器、云主机和边缘设备之间搭建安全高效的覆盖网络。它通过统一管理界面和 API 自动完成 WireGuard 密钥分配、节点发现和路由配置，使分布在不同位置的机器能够像在同一个局域网内一样互相通信。典型场景包括远程办公访问、跨地域集群组网、物联网设备管理等。它特别适合需要自建网络基础设施、对数据主权有较高要求的团队，能够快速部署并规模化纳管节点，同时支持访问控制和网络隔离。借助活跃的开源社区，该项目已广泛应用于企业私有云和混合云环境中。
- [0xJacky/nginx-ui](https://github.com/0xJacky/nginx-ui) ★11463 [`code-completion`] [`copilot`] [`cron`] [`docker`] [`go`] [`letsencrypt`] [`linux`] [`macos`] [`mcp`] [`mcp-server`] [`nginx`] [`self-hosted`] [`vue`] [`webui`] [`windows`]  
  为 Nginx 提供可视化 Web 管理界面，帮助运维人员通过浏览器完成站点配置、反向代理、负载均衡与 SSL 证书管理等操作，替代手工编辑配置文件的繁琐流程。采用 Go 与 Vue 构建，支持配置语法高亮、在线校验、一键重载以及实时访问日志查看，适合需要更直观管理多台 Nginx 服务器或希望降低配置门槛的个人开发者与中小团队使用。
- [therecipe/qt](https://github.com/therecipe/qt) ★10808 [`android`] [`asteroidos`] [`cross-platform-gui`] [`felgo`] [`freebsd`] [`go`] [`golang`] [`gui-framework`] [`ios`] [`javascript`] [`linux`] [`macos`] [`qt`] [`raspberry-pi`] [`sailfish-os`] [`ubuntu-touch`] [`webassembly`] [`windows`]  
  用于在 Go 语言中调用 Qt 框架，实现跨平台图形界面应用的开发。该绑定通过 cgo 对接 C++ 版 Qt，覆盖桌面端（Windows、macOS、Linux）和移动端（Android、iOS），提供完整的控件与事件系统。适合需要原生界面、性能要求较高，或者希望用 Go 语言复用现有 Qt 生态的场景。通常配合官方命令行工具处理资源配置与打包，简化跨平台构建流程。
- [Mrs4s/go-cqhttp](https://github.com/Mrs4s/go-cqhttp) ★10638 [`bot`] [`coolq`] [`coolq-http-api`] [`qqbot`] [`qqrobot`]  
  用于搭建基于 QQ 的机器人服务，以 Go 语言实现 QQ 协议的接口转换。它兼容 OneBot 标准，提供 HTTP 和 WebSocket 通信方式，使开发者能用任意编程语言编写消息处理逻辑。典型场景包括群管理、自动回复、消息转发和关键词触发等。它解决了官方 QQ 机器人接口限制多、申请门槛高的问题，适合个人或小团体快速构建轻量级机器人。部署简单，天然适配常见机器人框架，是目前社区使用较广泛的开源方案之一。
- [claudiodangelis/qrcp](https://github.com/claudiodangelis/qrcp) ★10513 [`cli`] [`command-line`] [`golang`] [`qrcode`] [`utility`]  
  qrcp 是一个通过二维码在局域网内快速传输文件的命令行工具，基于 Go 开发。核心用法是在电脑端将要发送的文件或目录暴露为临时链接，并在终端显示对应的二维码，接收方用手机或平板扫码即可下载，无需配对、登录或依赖云端中转。反过来，它同样支持手机通过扫码将文件传回电脑。整个过程仅在本地网络完成，适合在办公室、咖啡馆等场景下快速分享图片、文档等文件，兼顾便捷与隐私，通常也无需额外安装接收端应用。
- [gokcehan/lf](https://github.com/gokcehan/lf) ★9486 [`file-manager`] [`terminal`]  
  lf是一款以Vim风格键位驱动的终端文件管理器，主要面向在命令行环境中高效管理文件。它借鉴了ranger的浏览方式，但实现更轻量，启动迅速且资源占用低。支持多面板布局、文件预览、书签与历史跳转，并允许通过自定义命令和脚本扩展功能，特别适合熟悉Vim编辑操作的用户，在远程服务器、SSH会话或没有图形界面的系统中，替代传统图形化文件管理器处理日常文件管理任务。
- [certimate-go/certimate](https://github.com/certimate-go/certimate) ★9081 [`acme`] [`acme-client`] [`automation`] [`certbot`] [`certificate`] [`certificate-management`] [`certificate-manager`] [`certificates`] [`devops`] [`google-trust-services`] [`https`] [`https-certificate`] [`lego`] [`letsencrypt`] [`self-hosted`] [`ssl`] [`ssl-cert`] [`ssl-certificate`] [`ssl-certificates`] [`zerossl`]  
  用于自动化管理SSL/TLS证书，简化证书申请、续期和部署流程。通常支持多种域名验证方式，便于在服务器上自动配置HTTPS加密，解决人工操作繁琐、证书过期遗漏的问题。适合个人网站、小型服务或需要集中管理证书的运维场景，常与自动化运维流程结合使用。作为Go语言开发的工具，部署便捷，通常以单一命令行程序形式运行。
- [ViRb3/wgcf](https://github.com/ViRb3/wgcf) ★8652 [`client`] [`cloudflare`] [`plus`] [`security`] [`vpn`] [`warp`] [`wireguard`]  
  用于生成 Cloudflare WARP 的 WireGuard 配置命令行工具，解决官方客户端在通用设备上难以使用的问题。它自动完成账号注册、密钥交换和参数获取，输出标准配置文件，可被任意兼容 WireGuard 的客户端导入。典型场景是路由器、NAS、Linux 服务器等无官方支持的平台，也便于脚本化批量部署。项目采用 Go 开发，轻量无依赖，执行单一命令即可完成从注册到生成配置的流程，在社区中使用广泛。
- [cyfdecyf/cow](https://github.com/cyfdecyf/cow) ★8412  
  用于网络代理分流，以本地 HTTP 代理方式运行，智能判断目标网站连通性，自动选择直连或走代理，避免全局代理导致国内网站访问缓慢。通常适合需要同时访问国内外网站的用户，如开发或研究人员。基于 Go 语言编写，配置灵活，支持自定义规则和上游代理，占用资源少。
- [nxtrace/NTrace-core](https://github.com/nxtrace/NTrace-core) ★8126 [`api`] [`as-path`] [`asn-lookup`] [`geoip`] [`geolocation`] [`ip-lookup`] [`network-analysis`] [`next-trace`] [`nexttrace`] [`traceroute`] [`utility`]  
  用于网络路由追踪与诊断的开源工具，专注于快速探测数据包从本机到目标地址经过的路径节点。它支持常见的 TCP、UDP、ICMP 等多种探测协议，并能结合 IP 地理位置数据展示每一跳的路由器位置、延迟和丢包情况。通常适合网络管理员排查链路故障、开发者分析跨地域访问慢的问题，以及普通用户了解网络连接路径。作为 NextTrace 项目的核心部分，其命令行界面简洁，输出易读，可与多种可视化前端配合使用。
- [gdy666/lucky](https://github.com/gdy666/lucky) ★8092 [`acme`] [`aliyunpan`] [`cron`] [`ddns`] [`dynadot`] [`filebrowser`] [`ftp`] [`ipv6`] [`socat`] [`stun`] [`vercel`] [`volcengine`] [`webdav`] [`wol`]  
  一款基于 Go 语言的网络工具，主要用于端口转发、内网穿透和动态域名解析，适合需要远程访问家庭或办公内网服务的场景。它通常提供 Web 管理界面，支持多种协议和灵活的路由规则，可帮助用户在没有公网 IP 的情况下稳定暴露本地服务，常用于搭建个人服务器、NAS 远程访问或游戏联机。配置相对简单，常见于自建网络环境的辅助工具中。
- [iyear/tdl](https://github.com/iyear/tdl) ★8004 [`bash`] [`download`] [`downloader`] [`telegram`] [`telegram-api`] [`telegram-bot`] [`telegram-bots`] [`telegram-channel`] [`telegram-userbot`]  
  用于下载 Telegram 聊天记录中的文件与媒体，它是一款用 Go 编写的命令行下载工具，支持多线程并发、断点续传和批量下载，适合需要将 Telegram 渠道、群组或私聊中的文档、视频、图片等资源备份到本地的场景。使用时可指定消息范围或筛选条件，下载速度快且对服务器压力较小，通常配合代理和账号配置使用，尤其适合个人收藏或数据迁移。
- [mindoc-org/mindoc](https://github.com/mindoc-org/mindoc) ★7834 [`beego`] [`document`] [`go`] [`golang`] [`mindoc`] [`smartwiki`]  
  MinDoc 是一款开源的在线文档管理系统，用于搭建团队知识库与协作平台。它基于 Go 语言开发，支持 Markdown 编写和实时预览，提供多级目录、文档标签、全文搜索、权限控制等常用功能，适合个人开发者或中小团队私有部署。典型场景包括内部技术文档、接口文档、项目笔记的集中管理，也可替代 GitBook 或轻量级 Wiki。部署简便，对服务器要求低，能有效解决文档分散、版本混乱和协作不便等问题。
- [Hackl0us/GeoIP2-CN](https://github.com/Hackl0us/GeoIP2-CN) ★7410 [`clash`] [`geoip`] [`geoip2`] [`proxy`] [`quantumultx`] [`shadowrocket`] [`shadowsocks`] [`surge`]  
  提供基于 GeoIP2 数据库生成的中国大陆 IP 地址段规则集，主要用于代理工具（如 Clash、Surge、Shadowrocket）的分流与策略路由，可自动更新并生成适用于多种格式的规则文件，帮助用户实现国内直连、国外代理的智能选择，尤其适合需要稳定分开大陆和海外网络环境的场景。
- [lxn/walk](https://github.com/lxn/walk) ★7100 [`declarative`] [`declarative-ui`] [`go`] [`gui`] [`gui-toolkit`] [`win32`] [`windows`] [`windows-desktop`]  
  用于Go语言开发Windows原生图形界面应用程序，封装了常见控件、窗口和事件处理，使开发者无需依赖C++或C#就能构建桌面工具。通常适合需要简洁界面且注重系统原生观感的软件，如配置工具、监控小工具或内部自动化程序。与Web界面相比，它更轻量、启动快，并能直接调用Windows平台能力。该库面向有Go编程经验的开发者，使用方式接近标准库，适合维护成本较低的项目。
- [ouqiang/gocron](https://github.com/ouqiang/gocron) ★6263 [`cron`] [`crontab`] [`golang`] [`scheduler`]  
  基于Go语言开发的定时任务集中管理平台，通过Web界面替代传统crontab的手工维护方式，支持任务的创建、编辑、暂停、删除及即时触发，并提供任务执行日志和状态监控。通常适合需要跨多台服务器统一调度、希望降低运维成本并实现任务可视化管理的团队，能够解决分布式环境下定时任务分散、难以追踪和告警缺失的问题。
- [jpillora/cloud-torrent](https://github.com/jpillora/cloud-torrent) ★6245 [`cloud`] [`golang`] [`self-hosted`] [`torrent`] [`torrent-client`]  
  cloud-torrent 是一款运行在浏览器中的 Torrent 客户端，可将任意设备变成远程下载中心。部署后，用户通过网页界面即可添加种子或磁力链接，直接下载文件到服务器或 NAS 本地，无需安装桌面客户端。适合在无图形界面的 Linux 服务器上实现离线下载，或让多设备共享同一下载目录，解决远程管理下载任务和节省本地带宽的问题。
- [Ackites/KillWxapkg](https://github.com/Ackites/KillWxapkg) ★5957  
  主要用于处理微信小程序的 .wxapkg 包文件，能够对这类加密或压缩的包进行解包、解密和还原，提取其中的前端代码、页面逻辑和静态资源。它通常适合开发者进行逆向分析、安全审计或学习参考，尤其是在无法直接获取小程序原始源码的情况下。工具面向需要深入理解小程序内部实现的技术人员，操作上依赖已有的微信小程序运行环境或相关数据文件。通过简单的命令行方式即可完成解析，是目前常见的小程序研究辅助工具之一。
- [hacdias/webdav](https://github.com/hacdias/webdav) ★5811 [`filesystem`] [`go`] [`http`] [`server`] [`webdav`]  
  用于搭建 WebDAV 服务器的轻量级工具，基于 Go 实现，支持本地磁盘、云存储等多种存储后端，可配置多用户、读写权限、目录隔离和 HTTPS 访问。适合个人或小团队自建文件同步与远程存储，兼容 Windows 映射网络驱动器、macOS Finder、Linux davfs2 等常见 WebDAV 客户端，通常用于替代传统 FTP，提供更安全、基于 HTTP 的文件管理方案。
- [openark/orchestrator](https://github.com/openark/orchestrator) ★5775 [`high-availability`] [`management-system`] [`mysql`] [`replication`]  
  用于管理和可视化 MySQL 复制拓扑的开源工具，提供 Web 接口、命令行和 HTTP API，能自动发现数据库实例、实时展示主从复制关系，并支持复制拓扑调整、故障检测、自动切换和恢复操作。适合维护复杂复制集群或大规模 MySQL 部署的运维场景，可减少人工干预，提升数据库层的可用性与可维护性。
- [qjfoidnh/BaiduPCS-Go](https://github.com/qjfoidnh/BaiduPCS-Go) ★5538 [`baidupcs`]  
  BaiduPCS-Go 是一款基于 Go 语言开发的百度网盘命令行客户端，主要用于在终端环境中直接操作百度网盘，核心功能包括文件上传、下载、目录管理、批量操作、文件搜索以及离线下载等。它支持断点续传和高速下载，适合服务器管理员、开发人员或需要自动化处理网盘文件的用户，能够方便地集成到脚本或定时任务中，解决图形界面依赖和远程管理难题。该工具通常以命令行参数或交互式命令的方式运行，无需登录网页即可完成常见网盘操作。
- [ngoduykhanh/wireguard-ui](https://github.com/ngoduykhanh/wireguard-ui) ★5146 [`wireguard`] [`wireguard-admin`] [`wireguard-config-gen`] [`wireguard-go`] [`wireguard-ui`] [`wireguard-vpn`] [`wireguard-web`]  
  WireGuard UI 是一个用于管理 WireGuard VPN 的图形化 Web 界面，帮助用户通过浏览器直观地创建和管理隧道配置。它主要解决命令行操作繁琐的问题，支持生成配置文件、添加或删除对端、查看连接状态等常用运维操作。通常适合个人或小型团队自建 VPN 时使用，部署简单，能够降低配置出错概率。该工具围绕 WireGuard 的配置与运行逻辑提供更友好的交互方式，让不熟悉命令行的用户也能轻松维护虚拟专用网络。
- [tickstep/aliyunpan](https://github.com/tickstep/aliyunpan) ★5103 [`adrive`] [`backup`] [`linux`] [`macos`] [`sync`] [`windows`]  
  用于在命令行中管理阿里云盘文件，属于第三方非官方工具，适合服务器、无图形环境或自动化脚本场景。支持批量上传下载、目录同步、文件分享与转存等常用操作，可通过定时任务实现数据备份或跨设备迁移。基于Go语言构建，单文件跨平台运行，配置简单，用户可自行编译或直接使用发布版。通常适合需要绕过图形界面、追求高效批量处理或部署在远程主机上的阿里云盘用户。
- [wxbool/video-srt-windows](https://github.com/wxbool/video-srt-windows) ★5035 [`ffmpeg`] [`go`] [`golang`] [`srt-subtitles`] [`video`] [`windows-gui`]  
  用于在 Windows 环境下为视频自动生成 SRT 字幕，主要面向视频创作者、剪辑师以及需要快速为视频添加字幕的用户。该工具借助语音识别技术，从视频中提取语音内容并自动生成带时间轴的字幕文件，省去手动听写和逐句对齐的繁琐工作。适合处理课程录制、会议录像、自媒体视频等日常场景，能显著提高字幕制作效率，同时适合需要本地化处理视频字幕的场合。
- [goravel/goravel](https://github.com/goravel/goravel) ★4819 [`api`] [`framework`] [`go`] [`golang`] [`grpc`] [`laravel`] [`microservice`] [`performance`] [`web`]  
  为Go语言开发者设计的Web应用框架，借鉴Laravel的优雅语法与设计模式，内置路由、中间件、数据库ORM、缓存、队列等常用功能，开箱即用，帮助开发者快速搭建Web应用和RESTful API。其目录结构和约定与Laravel相似，可显著降低从Laravel迁移到Go的成本，同时利用Go的高并发特性提升服务性能，适合中大型后端项目及需要敏捷开发的团队。
- [kingparks/cursor-vip](https://github.com/kingparks/cursor-vip) ★4771 [`cursor`] [`cursor-pro`]  
  用于为 AI 代码编辑器 Cursor 启用 VIP 功能的第三方辅助工具，通过本地配置修改或授权校验等方式让免费账号获得部分付费权益，适合无法订阅或希望先体验高级功能的开发者。通常以脚本形式提供，需要用户手动执行并跟进版本兼容性。此类工具非官方性质，使用时可能涉及条款风险，一般建议在个人学习或测试环境中使用，并留意后续更新以保持可用性。
- [cppla/ServerStatus](https://github.com/cppla/ServerStatus) ★4682  
  服务器状态监控工具，用于同时监测多台服务器的运行状态，包括在线情况、CPU、内存、磁盘和流量等实时数据。它采用服务端汇总展示、客户端采集上报的架构，客户端轻量易部署，服务端提供简洁的 Web 界面。常见使用场景是个人或小团队管理多台 VPS 或云主机，只需部署一次即可在单一页面直观查看所有机器的健康指标。相比单纯 ping 检测，它能给出更详细的性能数据和历史趋势，适合用来集中运维分散的主机群，排查资源占用异常或网络波动问题。
- [lwch/natpass](https://github.com/lwch/natpass) ★4445 [`code-server`] [`golang`] [`protobuf`] [`shell`] [`tls`] [`vnc`]  
  natpass 是一款适用于内网穿透和远程访问的工具，帮助用户将处于 NAT 或防火墙后的本地服务安全暴露到公网，实现跨网络的设备连接与管理。它主要支持 TCP、UDP 流量转发，也涵盖远程桌面、SSH 和 VNC 等常见远程操作场景，适合运维人员远程维护服务器、开发人员调试本地接口或访问家庭内网设备。工具通常以 Go 编写，具有部署简单、占用资源低的特点，并附带 Web 端管理界面，便于集中配置连接规则与查看会话状态。它的定位与 frp、nps 类似，但更强调实时交互与远程控制体验，适合需要高效、稳定穿透连接的团队或个人使用。
- [sjqzhang/go-fastdfs](https://github.com/sjqzhang/go-fastdfs) ★4135 [`breakpoint-resume`] [`cloud-storage`] [`cloudnative`] [`distributed-file-storage`] [`distributed-file-system`] [`fastdfs`] [`file-system`] [`fileserver`] [`filesystem`] [`go`] [`go-fastdfs`] [`godfs`] [`object-storage-service`] [`oss`] [`rsync`] [`small-file-merge`] [`storage`] [`storage-servers`] [`sync`] [`tus`]  
  go-fastdfs 是一个基于 Go 语言实现的轻量级分布式文件系统，主要用于解决文件的上传、下载、存储与同步问题。它支持断点续传、文件秒传、自动迁移和集群部署，适合用来搭建图片、视频等中小文件的私有云存储平台，也常用于替代传统的集中式文件服务器。其部署简单、依赖较少，能根据规模灵活扩展节点，适合需要高可用文件服务的中小型团队。
- [fanpei91/torsniff](https://github.com/fanpei91/torsniff) ★4013 [`bep0003`] [`bep0005`] [`bep0009`] [`bep0010`] [`bittorrent-protocol`] [`dht`] [`golang`] [`metadata`]  
  用于从BitTorrent DHT网络实时抓取并解析种子元数据，通过伪装节点监听网络中的元数据交换，从而获取torrent文件信息。通常适合构建种子搜索引擎、监控下载活动或分析P2P网络流量。工具基于Go语言实现，具备高并发、低资源占用特点，可独立运行作为持续数据收集服务，帮助用户批量积累infohash与对应的torrent文件。
- [prometheus-community/windows_exporter](https://github.com/prometheus-community/windows_exporter) ★3614 [`prometheus`] [`prometheus-exporter`] [`windows`] [`wmi`]  
  用于在 Prometheus 监控体系中收集 Windows 主机的各类性能和状态指标，包括 CPU、内存、磁盘、网络、进程、服务等常见资源的使用情况，并将这些指标转换为 Prometheus 标准的 metrics 格式以供抓取。它通常部署在 Windows 服务器或工作站上，适合需要统一监控混合环境中 Windows 节点、进行告警和趋势分析的场景，能够解决传统 Windows 性能数据难以被开源监控系统直接采集的问题。该导出器由社区维护，配置灵活，支持通过命令行参数和配置文件启用或调整特定采集器，可满足从轻量监控到详细诊断的多种需求。
- [TruthHun/BookStack](https://github.com/TruthHun/BookStack) ★3506 [`beego`] [`bookstack`] [`gitbook`] [`golang`] [`markdown`] [`mindoc`]  
  BookStack是一个开源的文档管理平台，主要用于创建和托管在线知识库、技术文档以及个人笔记。它基于Go语言构建，提供了Markdown编辑、全文搜索、文档分类、权限控制等核心功能，适合团队内部知识沉淀、产品手册发布或搭建轻量级Wiki。用户可以通过网页界面直接编写和整理内容，无需依赖第三方云服务，部署简单，便于私有化使用，适合需要快速搭建内部文档系统的中小型团队或个人开发者。
- [greycodee/wechat-backup](https://github.com/greycodee/wechat-backup) ★3419  
  用于备份微信聊天记录、图片、视频等数据的命令行工具，主要面向 Android 平台，可解析本地微信数据库并导出为 HTML、TXT 等格式，方便用户将微信数据迁移至电脑或永久保存。通常适合需要留存重要对话记录、进行数据迁移或证据收集的场景。由于涉及微信逆向解析，使用前需确认手机具备相应权限或备份环境，同时注意数据安全与隐私合规。
- [yisier/nps](https://github.com/yisier/nps) ★3349 [`go`] [`http`] [`https`] [`nps`] [`tcp`] [`udp`]  
  用于内网穿透的工具，可将本机或局域网内的服务端口映射到具备公网 IP 的服务器，支持 TCP、UDP 和 HTTP/HTTPS 等常见协议，让外网用户直接访问内网资源。典型场景包括远程办公、临时演示、设备管理、接口调试和联机游戏。部署时由公网服务端与本地客户端配合工作，配置灵活，能有效解决无公网 IP 时的远程访问问题，适合个人开发者和小团队快速搭建。
- [fagongzi/manba](https://github.com/fagongzi/manba) ★3312 [`api`] [`api-gateway`] [`backend-apis`] [`circuit-breaker`] [`etcd`] [`gateway`] [`go`] [`golang`] [`microservice`] [`proxy`] [`traffic-control`]  
  manba 是一个基于 Go 语言开发的轻量级 API 网关，主要用于微服务架构中的统一流量入口管理。它提供请求路由、负载均衡、限流、熔断、鉴权等核心功能，能够将外部 HTTP 请求转发至内部多个后端服务，并支持动态配置与插件扩展，适合需要快速搭建稳定网关层的中小型团队，帮助解决服务暴露、访问控制和流量治理等问题。
- [eyebluecn/tank](https://github.com/eyebluecn/tank) ★3237 [`golang`] [`linux`] [`storage`]  
  蓝眼云盘（Tank）是一款基于 PHP 的开源私有网盘系统，用于搭建个人或团队的文件存储与共享平台。它支持多用户注册登录、文件上传下载、目录管理、在线预览，以及通过链接分享文件或文件夹，并可为分享设置密码和有效期。适合解决自建网盘时对数据隐私和存储可控性的需求，部署简单，可作为企业内网或个人的轻量级替代方案，也可用于教学或小型团队的资料协作。
- [eolinker/goku_lite](https://github.com/eolinker/goku_lite) ★3131 [`api`] [`api-gateway`] [`gateway`] [`goku`] [`microservices`] [`middleware`] [`proxy`]  
  Goku Lite 是 Go 语言编写的开源 API 网关，用于统一管理服务流量，解决微服务架构中的路由转发、认证鉴权、限流熔断、灰度发布等问题。它支持动态配置热更新，管理员可在可视化界面中在线调整规则，无需重启网关。典型使用场景包括将多组后端服务收敛为单一入口，或对旧系统进行网关改造，使调用方能稳定访问内部接口。功能设计相对精简，适合中小团队在测试或准生产环境快速落地，也适合学习网关核心原理时参考。部署配置简单，客户端接入成本较低，能够帮助团队降低接口治理门槛。
- [yunionio/cloudpods](https://github.com/yunionio/cloudpods) ★2936 [`ai`] [`aws`] [`azure`] [`baremetal`] [`baremetal-provisioning`] [`cloud`] [`cmp`] [`gcp`] [`hybridcloud`] [`iaas`] [`infrastructure`] [`kubernetes`] [`kvm`] [`multi-cloud`] [`openclaw`] [`openstack`] [`private-cloud`] [`qemu`] [`unified-cloud`] [`vsphere`]  
  Cloudpods 是面向多云环境的一体化云管理平台，用于统一纳管并操作各类公有云、私有云和本地虚拟化资源。它提供计算、存储和网络等核心资源的创建与运维能力，适合需要混合云治理、资源统一调度或构建私有云的场景。通常帮助团队降低多云管理的复杂性，提升资源利用率和交付效率。
- [0xDkd/auxpi](https://github.com/0xDkd/auxpi) ★2703 [`api`] [`baidu-image`] [`cdnjs`] [`element-ui`] [`go`] [`golang`] [`image-store`] [`mdui`] [`rest-api`] [`vue`] [`weibo-image`]  
  auxpi 是一个自托管的图床管理系统，主要面向需要统一管理多个图床服务的个人或团队。它支持对接多种第三方图床平台，提供图片上传、外链生成、相册管理和后台控制等核心功能，通常被部署在自有服务器上，用于替代零散的手动上传流程。该工具适合需要批量处理图片、跨平台分发或集中维护图片资源的场景，也能作为个人博客或小型站点的图片存储中间层。其技术栈以服务端渲染和数据库存储为主，部署方式相对轻量，适合有一定服务器运维基础的用户使用。
- [trzsz/trzsz-ssh](https://github.com/trzsz/trzsz-ssh) ★2702 [`mosh`] [`openssh`] [`openssh-client`] [`rz`] [`ssh`] [`ssh-client`] [`sz`] [`tmux`] [`trz`] [`trzsz`] [`tssh`] [`tsshd`] [`tsz`] [`zmodem`]  
  trzsz-ssh 专为远程服务器管理设计，在标准 SSH 基础上集成 trzsz 文件传输，终端里即可通过 rz 和 sz 命令上传下载文件，免去单独使用 scp 或 sftp 的麻烦。通常适合频繁与远程主机交换文件的开发者和运维人员，也可作为传统 lrzsz 的现代替代，兼顾简洁与交互体验。
- [likaia/nginxpulse](https://github.com/likaia/nginxpulse) ★2665  
  nginxpulse 是一款面向 Nginx 的辅助工具，主要用于实时监控 Nginx 运行状态、采集关键指标，并通过心跳或轮询机制及时发现进程异常。它常被用于运维监控、故障预警等场景，帮助管理员快速定位 Web 服务异常，适合部署于生产环境中的 Nginx 服务器旁，以提升服务可用性与可观测性。
- [sjlleo/netflix-verify](https://github.com/sjlleo/netflix-verify) ★2525  
  用于检测当前网络环境或IP是否支持Netflix流媒体解锁，并判断解锁类型（如原生、仅自制剧、非原生等），适合需要确认代理服务器或机场节点是否能正常观看Netflix的用户。通过命令行简单运行即可输出诊断结果，帮助排查DNS、代理或IP归属地导致的地区限制问题，尤其适合自建代理、VPS用户或流媒体解锁测试场景。
- [jinsi-ai/b0pass](https://github.com/jinsi-ai/b0pass) ★2347 [`bigfile`] [`file-transfer`] [`go`] [`golang`] [`webserver`] [`wifi-network`]  
  b0pass 用于搭建轻量级、可自托管的网盘与文件分享服务，基于 Blazor 和 .NET 构建，适合个人或小型团队部署私有云盘。它提供文件上传、下载、目录管理和分享链接等核心功能，可方便地运行在局域网或低配置服务器上，用于替代完全依赖第三方网盘的方案，解决日常文件备份、交换和协作需求。整体界面简洁，部署成本低，是快速实现文件管理的实用选择。
- [ProudMuBai/GoFilm](https://github.com/ProudMuBai/GoFilm) ★2158 [`axios`] [`elementplus`] [`film`] [`gin`] [`go-redis`] [`gocolly`] [`golang`] [`gorm`] [`movies`] [`robfig-cron`] [`vite`] [`vue3`]  
  GoFilm 是一款基于 Go 语言开发的影视资源聚合与在线播放程序，主要用于快速搭建个人影音网站。它支持多数据源采集、影片信息展示、分类筛选、关键词搜索以及在线播放等常见功能，适合需要部署轻量级视频站点或聚合影视内容的场景。由于采用 Go 编写，通常部署简单、资源占用低，并发处理能力较强，适合个人或小团队自建使用。
- [koho/frpmgr](https://github.com/koho/frpmgr) ★2042 [`frp`] [`frpc`] [`go`] [`gui`] [`proxy`] [`reverse-proxy`] [`windows`]  
  为 Windows 平台打造的 frp 图形化管理工具，用于快速部署和运行内网穿透客户端，通过界面化的方式配置远程转发规则并管理多个 frpc 实例，省去手动编辑命令行参数或 TOML 配置的麻烦，适合需要频繁切换内网穿透方案、希望降低 frp 使用门槛的个人开发者或运维人员使用，能够直观查看连接状态并简化启动停止操作。
- [daeuniverse/gg](https://github.com/daeuniverse/gg) ★1930 [`go-graft`] [`graftcp`] [`proxy`] [`proxychains`] [`v2ray`]  
  用于为 DAE 代理工具生成和更新地理 IP 与域名分类数据，从公开数据源拉取原始信息，经过清洗和合并后输出为路由规则所需的格式。通常适合需要定期构建 GeoIP 和 GeoSite 数据库的 DAE 使用者，通过命令行即可完成整个流程，便于集成到自动化更新脚本中。
- [kingwrcy/moments](https://github.com/kingwrcy/moments) ★1901  
  用于搭建个人朋友圈或时光轴的开源项目，可将日常想法、图片或生活片段整理成时间线，方便集中展示与回顾。主要解决自建轻量社交动态管理的需求，适合个人博主、独立开发者或小团队用来分享近况和沉淀记忆。项目通常具备响应式界面，支持在常见云托管服务上部署，技术栈以现代前端工具为主，配置简单且易于扩展，能为不依赖大型社交平台的人提供一个自由、可控的记录空间。
- [palark/ovpn-admin](https://github.com/palark/ovpn-admin) ★1678 [`linux`] [`openvpn`] [`openvpn-admin`] [`vpn`]  
  为OpenVPN服务器提供基于Web的管理后台，主要帮助运维人员集中管理VPN用户和证书。支持用户账号的创建、禁用与删除，并自动处理证书签发和吊销流程，同时可生成客户端配置文件供下载。通常适合中小型团队或企业内网中需要批量管理VPN接入的场景，能够替代手动执行OpenVPN命令的繁琐操作。该工具一般以轻量级服务方式部署，与现有OpenVPN环境配合使用，降低日常维护成本和误操作风险。
- [eolinker/apinto](https://github.com/eolinker/apinto) ★1676 [`api`] [`api-gateway`] [`apigateway`] [`apinto`] [`dubbo2`] [`gateway`] [`go`] [`goku`] [`golang`] [`grpc`] [`loadbalancer`] [`microservice`] [`middleware`] [`plugin`] [`proxy`] [`router`] [`servicemesh`]  
  apinto 是一款开源的高性能 API 网关，常用于微服务架构中的统一流量接入和治理。它提供灵活的请求路由、负载均衡、限流熔断、身份认证与安全防护等核心能力，可帮助企业快速构建稳定、可观测的 API 服务入口。基于 Go 语言开发，具备出色的并发处理能力，插件化架构也便于功能扩展。典型使用场景包括替代传统 Nginx、容器云环境中的服务暴露、以及各类南北向流量管理，适合对性能、运维效率有较高要求的团队。
- [songloft-org/songloft](https://github.com/songloft-org/songloft) ★1590 [`docker`] [`docker-compose`] [`home-server`] [`miot`] [`music`] [`music-player`] [`music-server`] [`nas`] [`navidrome`] [`songloft`] [`subsonic`] [`webdav`] [`xiaomusic`]  
  songloft 面向音乐爱好者，是一款轻量级的曲目整理与分享应用。它主要帮助用户管理个人或小群体内的歌曲收藏，支持曲目分类、列表浏览和简单的播放操作，通常通过网页界面呈现，适合用来搭建私有音乐库或与朋友共享歌单。由于仓库信息有限，具体功能需以实际代码为准，但整体技术架构可能涉及前端展示与后端存储，定位简单实用。
- [zhanghanyun/backtrace](https://github.com/zhanghanyun/backtrace) ★1552  
  一个用于程序运行时错误诊断的调用堆栈回溯工具，通常在异常或崩溃发生时捕获并输出完整的函数调用链，帮助开发者快速定位代码执行路径中的问题根源。适合在服务端应用、命令行工具或库的调试阶段使用，特别适用于需要分析并发或深层调用场景下的故障现场。该仓库以 Go 语言生态为常见实现背景，通常集成在日志系统或错误处理流程中，能将堆栈信息格式化输出到控制台或日志文件，便于与现有监控体系对接。借助该工具，开发者可以省去手动添加调试输出的步骤，直接通过标准库或轻量接口获取结构化回溯信息，提升排错效率。
- [samwafgo/SamWaf](https://github.com/samwafgo/SamWaf) ★1551  
  SamWaf 是一个基于 Go 语言开发的 Web 应用防火墙，主要用于防护网站免受常见的网络攻击，如 SQL 注入、跨站脚本攻击和恶意爬虫访问。它提供实时流量检测与拦截能力，适合部署在中小型网站或业务系统前端，帮助运维人员快速构建基础的 Web 安全防护层。项目通常支持规则自定义、日志审计和简单的管理界面，适合需要低成本、轻量级安全防护的场景。
- [helloxz/zdir](https://github.com/helloxz/zdir) ★1534 [`alist`] [`file-browser`] [`h5ai`] [`webdav`] [`zdir`]  
  zdir 是一款轻量级的文件目录列表程序，主要用于在服务器上快速搭建文件分享和浏览页面。它支持目录索引、文件在线预览、搜索以及自定义主题，适合个人网盘、团队内网资源分享或临时文件传输场景。部署简单，无需数据库，能够帮助用户免去繁琐配置，直接通过浏览器访问和管理服务器上的文件。
- [msterzhang/onelist](https://github.com/msterzhang/onelist) ★1530  
  用于将多个 Emby 或 Jellyfin 媒体服务器聚合到同一个 Web 界面，集中展示来自不同服务器的影视资源，方便统一浏览和播放。适合家中或朋友间运行多套媒体服务、资源分散的场景，省去来回切换不同页面的麻烦，提高找片效率。通常自部署在 NAS 或 VPS 上，可用于整合影视库，实现一处访问。
- [px-org/PanIndex](https://github.com/px-org/PanIndex) ★1405  
  用于搭建网盘目录索引和文件分享页面的工具，支持接入多种常见云存储服务，将分散在不同网盘中的文件统一展示在Web界面上，并提供直链下载功能。通常适合个人或小团队用来快速构建在线文件列表，替代传统的网盘导航站，或作为临时文件分享入口。用户可以按目录浏览文件，无需登录即可下载公开资源，部署方式相对灵活，常见于服务器或Serverless环境。核心价值在于简化多网盘管理，提升文件检索和分享效率。
- [Simple-Tracker/qBittorrent-ClientBlocker](https://github.com/Simple-Tracker/qBittorrent-ClientBlocker) ★1244 [`bitcomet`] [`qbittorrent`] [`transmission`]  
  用于屏蔽 qBittorrent 下载中不受欢迎的 Peer 客户端，通过识别客户端类型与版本，自动阻止或断开特定客户端的连接。主要解决公共或私有 Tracker 上频繁出现的吸血客户端、恶意节点或不符合规则用户的问题，帮助上传者稳定上传收益、减少不必要的带宽消耗。通常结合 qBittorrent 的日志或接口运行，可配置黑名单规则，适合需要精细控制 Peer 列表的 PT 站玩家或种子维护者。
- [awake1t/PortBrute](https://github.com/awake1t/PortBrute) ★1112  
  PortBrute 是一款用于多协议口令爆破的安全测试工具，支持 SSH、RDP、FTP、MySQL、Redis 等常见服务的密码尝试与批量验证。它适合在授权渗透测试中评估弱口令风险，通过高并发线程提升爆破效率，帮助安全人员快速定位可被暴力破解的系统入口。通常与端口扫描结果配合使用，以发现暴露在互联网或内网中的薄弱服务。
- [maintell/webBenchmark](https://github.com/maintell/webBenchmark) ★1011  
  用于Web服务性能评测的基准测试工具，主要帮助开发者对HTTP接口或网站进行压测与性能验证，量化响应时间、吞吐量、错误率等指标，从而定位瓶颈或比较不同部署方案的差异。通常支持并发请求模拟与结果统计，适合在开发自测、上线前验证和容量规划场景中使用。具体能力以仓库说明为准。
- [scaleway/scaleway-cli](https://github.com/scaleway/scaleway-cli) ★996 [`cli`] [`go`] [`scaleway`] [`scaleway-cli`]  
  Scaleway CLI 是 Scaleway 云平台的官方命令行工具，让用户直接在终端中操作云资源。它覆盖了计算实例、存储、网络、容器等常用服务的管理，适合系统管理员和开发者用来编写自动化脚本、批量操作资源，或在无图形界面环境中快速完成部署与配置。通过这条命令行工具，用户可以将日常云资源管理流程集成到持续集成和持续部署管道中，提升运维效率。通常借助 API 凭据完成认证，支持丰富的子命令和输出格式，便于与现有工具链结合。
- [mat/besticon](https://github.com/mat/besticon) ★993 [`favicon`] [`go`] [`icons`] [`microservice`] [`service`] [`website`]  
  为网页链接生成站点图标的服务工具，核心工作是根据传入的网站地址自动发现并抓取对应的 favicon，支持按指定尺寸返回图标，适合用在链接预览、书签管理、仪表盘等需要展示网站标志的场景。通常基于 Go 实现，具备多站点回退、缓存和快速响应的能力，部署形式简单，可独立运行供内部或外部调用。
- [boypt/simple-torrent](https://github.com/boypt/simple-torrent) ★980  
  简单的BitTorrent下载客户端，以自托管方式运行并提供Web控制界面，便于在服务器或NAS上远程添加和管理种子下载任务。它通常适合需要无人值守下载、通过浏览器操作而非桌面客户端的场景，支持种子文件与磁力链接，并可对接RSS订阅等自动化流程。其设计轻量，易于部署，常用于家庭媒体服务器、离线下载机或资源收集环境。
- [lemoex/oci-help](https://github.com/lemoex/oci-help) ★913  
  围绕 Oracle Cloud Infrastructure（OCI）打造的实用帮助工具，提供常用命令速查、操作指引或配置说明，帮助开发者快速完成云资源管理、环境部署和故障排查等任务。通常适合需要借助命令行或脚本管理 OCI 服务的用户，也适合初学者通过示例和最佳实践降低上手门槛。整体以轻量、聚焦为特点，可作为日常开发中的随身参考。
- [Kenshin/gnvm](https://github.com/Kenshin/gnvm) ★679  
  用于在Windows系统上管理多个Node.js版本，支持通过命令行安装、切换和卸载不同版本的Node.js，并可配置镜像源以加速下载。适合需要同时维护多个Node项目或验证版本兼容性的开发者，避免手动下载安装包和修改环境变量的繁琐过程。通常作为Windows下nvm的替代工具，以独立可执行文件运行，提供全局默认版本设置和常用版本管理操作，帮助提升开发环境配置效率。
- [yqchilde/wxbot](https://github.com/yqchilde/wxbot) ★660 [`chatgpt`] [`go`] [`golang`] [`gpt-35-turbo`] [`openai`] [`wechat`] [`wechat-bot`] [`wxbot`]  
  用于构建微信个人号机器人的开源工具，核心功能涵盖消息监听与自动回复、群聊管理、关键词触发以及定时任务等。通常需要配合微信客户端使用，支持用户通过配置或编写脚本定制回复逻辑，适合处理客服咨询、社群运营和消息转发等场景。项目以Python编写，结构相对轻量，便于开发者在此基础上二次开发，从而将微信中的日常操作自动化，降低人工维护成本。
- [tickstep/cloudpan189-go](https://github.com/tickstep/cloudpan189-go) ★654  
  命令行工具 cloudpan189-go 专为天翼云盘（189 云盘）打造，让用户免登录网页和客户端，直接在终端完成文件上传、下载、批量管理、目录切换、分享链接生成等操作，适合服务器、NAS 或脚本自动化场景，可高效处理海量文件的备份与迁移，同时支持多账号管理和断点续传，显著提升网盘操作效率。
- [ZeroDream-CN/SakuraFrp](https://github.com/ZeroDream-CN/SakuraFrp) ★562  
  SakuraFrp 主要用于内网穿透，解决没有公网 IP 时无法从外部访问本地服务的问题。通过客户端将本地端口映射到公网，即可远程访问 SSH、远程桌面、Web 服务，或搭建 Minecraft 游戏服务器。它提供图形界面和命令行两种使用方式，并配有在线管理面板，方便查看连接状态与流量数据，适合个人开发者、玩家及小团队在临时或长期场景下快速开放本地服务。
- [sagan/ptool](https://github.com/sagan/ptool) ★453  
  提供一组轻量实用的命令行工具，用于简化日常开发与运维中的重复操作，例如数据整理、日志查看和批量任务执行。通常适合需要频繁处理文件或系统信息的工程师，能够将零散命令封装成统一入口，提升自动化效率。项目结构简洁，便于按需修改和扩展，易于嵌入现有脚本流程。若强调跨平台兼容或特定领域支持，需结合实际使用环境进一步调整。
- [crabkun/switcher](https://github.com/crabkun/switcher) ★445  
  用于在不同配置、环境或服务之间快速切换的小工具，适合需要频繁调整开发或测试参数的场景。它通常通过预设的配置集或规则，自动完成对网络代理、环境变量、软件版本等目标的切换，减少手动操作和误操作风险。使用者可直接调用命令行或脚本，也可以自定义切换逻辑。这类工具普遍轻量、易集成，适合个人开发者在本地工作流中使用，也适合需要在多套配置间轮换运维操作的团队。
- [orzogc/fake115uploader](https://github.com/orzogc/fake115uploader) ★378 [`115`]  
  用于模拟115网盘上传操作的命令行工具，适合开发调试、自动化测试或需要批量上传时绕过客户端限制的场景。核心功能是伪造上传请求，无需登录真实账号即可验证上传流程，也可配合脚本实现文件批量提交。通常适合对115网盘协议有一定了解的开发人员，用于排查上传接口问题或构建第三方同步工具。项目基于常见网络请求库实现，支持自定义上传参数，但具体用法需参考仓库说明。
- [ssstk/cngrok](https://github.com/ssstk/cngrok) ★363  
  cngrok 是专为内网穿透场景设计的工具，能够将本地运行的 Web 服务或接口快速映射到公网，生成临时或持久的访问链接。它适合前后端联调、第三方回调调试、以及向客户或团队成员展示本地项目等场景，省去部署公网服务器的成本。与官方 ngrok 相比，cngrok 通常在网络稳定性、访问速度和自定义配置方面进行了改进，常见用法包括定义隧道转发规则、设置访问认证以及绑定自定义域名。其部署方式简单，适合个人开发者和小型团队在不具备公网 IP 的环境下使用，也可以替代传统 VPN 或公网服务器方案，快速验证或共享本地功能。
- [sigcn/pg](https://github.com/sigcn/pg) ★300 [`arq`] [`firewall`] [`go`] [`ipv6`] [`nat`] [`p2p`] [`peerguard`] [`udp`] [`vpn`]  
  该仓库主要围绕 PostgreSQL 数据库提供实用工具或扩展，通常用于简化数据库管理、提升查询性能或辅助日常开发调试。它适合需要处理 PostgreSQL 实例的开发者与运维人员，帮助解决数据迁移、监控优化或连接配置等常见问题。具体功能可能随版本迭代，但整体设计面向实际生产环境中的数据库操作需求，强调易用性和稳定性。
- [WenLiCG/PowerWhois](https://github.com/WenLiCG/PowerWhois) ★220 [`domain`] [`proxy`] [`rdap`] [`whois`]  
  PowerWhois 是一个面向 PowerShell 环境的 Whois 查询工具，主要用于在终端中直接获取域名的注册商、注册与到期时间、名称服务器等公开注册信息。它省去了访问在线 Whois 页面的步骤，便于系统管理员、安全研究人员和域名持有者快速检查域名状态、排查解析异常或进行批量调查。该工具通常适合集成到 PowerShell 脚本中，实现自动化的域名信息收集与审计，整体设计面向需要轻量、快速完成 Whois 查询的 Windows 命令行场景。
- [TimothyYe/glance](https://github.com/TimothyYe/glance) ★220 [`cli-reader`] [`glance`] [`txt-reader`]  
  一款用于快速搭建个人信息聚合页面的自托管工具，通常适合将常用网站、RSS订阅源和自定义链接集中展示在一个可自定义的界面中。它支持多列布局、主题切换和多种小组件，能够帮助用户高效浏览日常关注的动态或快速访问常用资源，适合部署在NAS或小型服务器上用于个人使用。
- [upyun/upx](https://github.com/upyun/upx) ★200 [`cli`] [`upyun`]  
  upyun/upx 是又拍云推出的一款命令行工具，主要用于通过终端管理又拍云存储及相关资源，支持文件上传、下载、目录同步等日常操作，适合需要批量处理云端文件或在脚本中集成存储任务的开发者，能够替代繁琐的网页控制台操作，提升自动化运维效率。
- [cxbdasheng/dnet](https://github.com/cxbdasheng/dnet) ★181 [`aliyun-api`] [`bai-du`] [`baiduyun`] [`cdn`] [`dcdn`] [`ddns`] [`ipv6`] [`tencentcloud-sdk`]  
  dnet用于深度学习模型的构建与验证，主要涉及神经网络在计算机视觉中的应用，例如图像分类或目标检测。项目代码通常包括模型定义、训练过程和使用示例，结构清晰且易于修改，适合算法研究人员、学生或开发者进行实验复现和快速原型开发。
- [moeyy01/gh-proxy-go](https://github.com/moeyy01/gh-proxy-go) ★152  
  主要用于为 GitHub 资源提供反向代理加速，解决网络受限环境下访问 GitHub 缓慢或下载失败的问题。通常部署在服务器上，通过替换 URL 前缀代理 release、archive、raw 等文件下载，适合开发者或 CI 环境使用。基于 Go 编写，部署简单、资源占用低，常以 Docker 方式运行。
- [mudkipme/mortis](https://github.com/mudkipme/mortis) ★144  
  mortis 主要用于代码清理和工程维护场景，帮助开发团队识别项目中不再被引用的死代码、冗余依赖或无用接口，从而降低长期维护成本。它通常以静态分析方式扫描源码结构，并支持与持续集成流程结合，让代码库在迭代过程中保持整洁。适合处理中大型项目中的历史遗留代码问题，辅助开发者安全地移除无效实现，减少误删风险。具体支持的语言和规则细节需参考仓库官方说明，但整体上属于面向开发效率与代码质量的辅助工具。
- [3394772548/yue-spider](https://github.com/3394772548/yue-spider) ★137  
  yue-spider 是一个基于 Python 的通用网络爬虫项目，主要用于从各类网站中自动采集结构化数据。它通常适合需要批量抓取网页内容、监控页面更新或构建数据集的场景，比如商品信息、新闻列表或社交媒体动态。项目封装了常见的请求发送、页面解析和结果存储流程，降低了从零编写爬虫的门槛，同时保留足够的灵活性来应对不同站点的页面结构。命名中的 yue 可能暗示其设计初衷或作者偏好，但核心价值在于提供一套可复用的抓取框架。如果你需要快速实现定向数据采集，并希望代码易于维护和扩展，这个仓库值得参考。
- [jsyzchen/pan](https://github.com/jsyzchen/pan) ★98 [`baidu`] [`go`] [`netdisk`] [`openapi`] [`pan`] [`pan-openapi`] [`pan-sdk-go`] [`pcs`] [`pcsapi`] [`sdk`] [`sdk-go`] [`xpan`]  
  jsyzchen/pan 主要用于搭建轻量级网盘服务，满足个人或小团队对私有文件存储和分享的需求。典型场景包括备份重要资料、管理常用文档、向他人发送下载链接，以及替代公共网盘以保护数据隐私。项目通常提供文件上传、下载、目录浏览、分享链接等核心功能，可能基于常见 Web 技术栈开发，部署便捷，适合学习与二次开发。
- [kaigedong/cnm3u](https://github.com/kaigedong/cnm3u) ★84  
  用于整理和共享中文网络直播源，以 M3U 播放列表格式为主，方便用户通过 VLC、PotPlayer 等常见播放器直接加载观看。通常适合需要集中订阅 IPTV 频道或网络流媒体地址的场景，免去逐个查找和手动维护链接的麻烦。仓库会按一定分类或命名组织源，便于筛选和切换，适合日常观看电视直播、网络频道或测试播放器兼容性时使用。
- [jihuayu/TCP-CDN](https://github.com/jihuayu/TCP-CDN) ★58  
  TCP-CDN 用于构建基于 TCP 协议的内容分发网络，核心是将客户端请求调度到离用户最近的节点，并通过节点间的 TCP 连接回源获取内容。它适合个人或中小企业自建轻量级加速服务，用于网站静态资源分发、文件下载加速等场景。与传统 CDN 类似，它通常需要配置域名和节点列表，利用 TCP 的可靠性简化传输；整体更强调易部署和低成本，而非大规模高并发。因此，适合对现有 CDN 服务不满意或想控制数据流的用户。
- [malaohu/jikeqingpan](https://github.com/malaohu/jikeqingpan) ★39  
  用于快速清理磁盘空间并优化存储，主要面向电脑或手机中积累的临时文件、缓存和重复内容。它通常适合希望以简单操作完成扫描与释放存储的用户，强调即时反馈和轻量体验。仓库名称中的“清盘”暗示其核心功能是整理和释放空间，可能提供文件类型分析或批量删除能力。技术实现可能依托系统基础接口或跨平台框架，但具体支持范围和运行方式需参考仓库内的说明文档。
- [ayoubfaouzi/chrome-extension-downloader](https://github.com/ayoubfaouzi/chrome-extension-downloader) ★31 [`browser-extension`] [`chrome-extension`] [`crx`] [`webstore`]  
  该工具主要面向Chrome扩展程序的下载与备份，用户可输入扩展的ID或链接，直接获取对应的CRX安装包，解决Chrome网上应用店无法直接下载或需在线安装的问题。通常适合需要离线安装扩展、进行本地审计或分发扩展的开发者与高级用户。工具可能通过解析商店页面或接口来提取下载地址，以自动化方式替代手动寻找资源，操作流程简洁，便于批量管理扩展文件。
- [H3CoF6/OpenList-FlashTransfer](https://github.com/H3CoF6/OpenList-FlashTransfer) ★5  
  OpenList-FlashTransfer 是一款专注于高效传输与同步的开源工具，主要解决文件或数据列表在本地设备、网络节点间快速转移的问题。它结合了开放式列表管理与闪速传输机制，适合在需要批量移动文件、同步目录内容或临时共享数据时使用，尤其适用于局域网或高频数据交换场景。该项目通常提供简洁的命令行或轻量级接口，便于集成到自动化脚本或现有工作流中，帮助用户减少重复操作、提升传输效率。
