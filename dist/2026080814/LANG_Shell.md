# Shell 仓库

- [mattpocock/skills](https://github.com/mattpocock/skills) ★209104  
  该项目主要用于展示和分享 TypeScript 相关技能与实战经验，通过代码示例帮助开发者提升类型体操、泛型编程及类型推导等高级 TypeScript 技术的应用能力。
- [ohmyzsh/ohmyzsh](https://github.com/ohmyzsh/ohmyzsh) ★189084 [`cli`] [`cli-app`] [`oh-my-zsh`] [`oh-my-zsh-plugin`] [`oh-my-zsh-theme`] [`ohmyzsh`] [`plugin-framework`] [`plugins`] [`productivity`] [`shell`] [`terminal`] [`theme`] [`themes`] [`zsh`] [`zsh-configuration`]  
  一个社区驱动的 Zsh 配置管理框架，用于简化终端环境搭建和日常使用。它内置数百个插件和主题，涵盖 Git 别名、语法高亮、自动跳转等常见功能，可显著减少手动修改配置文件的工作量。用户通过简单的配置文件即可启用或组合扩展，适合频繁使用命令行的开发者、运维人员或任何想要提升终端操作效率的人。它解决了从零配置 Shell 的繁琐问题，让个性化终端体验变得快速且标准化，通常用于 macOS 和 Linux 系统的默认 Shell 增强。
- [sickcodes/Docker-OSX](https://github.com/sickcodes/Docker-OSX) ★52837 [`container`] [`docker`] [`docker-osx`] [`kvm`] [`macos`] [`os`] [`osx`] [`osx-kvm`] [`x`] [`x11`]  
  通过 Docker 部署可远程访问的 macOS 操作系统环境，主要用于在 Linux 上运行 macOS 实例进行开发测试、安全研究或应用调试，支持 Apple Silicon 和 x86_64 架构的虚拟化，适合需要 macOS 云服务或自动化测试的场景。
- [dockur/windows](https://github.com/dockur/windows) ★52788 [`docker`] [`docker-container`] [`virtualization`] [`windows`] [`windows-virtual-desktop`] [`windows-virtual-machine`] [`windows-virtual-machines`] [`windows-vm`]  
  该项目主要用于在Windows系统上运行Docker容器，提供对Docker工具链的集成支持，使开发者能够通过容器化方式部署和管理应用，适用于本地开发、测试及CI/CD流程中的容器化需求。
- [acmesh-official/acme.sh](https://github.com/acmesh-official/acme.sh) ★47428 [`acme`] [`acme-challenge`] [`acme-protocol`] [`acme-v2`] [`ash`] [`bash`] [`buypass`] [`certbot`] [`lets-encrypt`] [`posix`] [`posix-sh`] [`shell`] [`ssl`] [`ssl-certificate`] [`ssl-certificates`] [`tls`] [`tls-certificate`] [`zerossl`]  
  acme.sh 是一个用 Shell 编写的 ACME 协议客户端，用于自动申请、续期和管理 SSL/TLS 证书。它支持通过多种验证方式（如 HTTP、DNS）与 Let's Encrypt 等证书颁发机构交互，适用于 Nginx、Apache 等服务器，可部署在各类 Unix 系统上，轻量高效，无需额外依赖。
- [pyenv/pyenv](https://github.com/pyenv/pyenv) ★45002 [`python`] [`shell`]  
  用于管理和安装多个 Python 版本的命令行工具，允许用户在不同项目中切换 Python 版本，支持全局和局部版本设置，适用于开发和测试需要多版本 Python 共存的场景。
- [zsh-users/zsh-autosuggestions](https://github.com/zsh-users/zsh-autosuggestions) ★35955 [`autocomplete`] [`autosuggest`] [`fish`] [`shell`] [`zsh`] [`zsh-autosuggestions`]  
  为Zsh命令行环境实现自动建议功能，当用户输入命令时，插件会从历史记录中推测当前输入对应的最可能完整命令，并以灰色字体在光标后显示建议。用户无需记忆复杂命令，只需按既定快捷键即可采纳补全内容。适合频繁使用终端的开发者，尤其对长命令、常用参数或重复操作能显著提升效率，减少手动输入和拼写错误。该插件可独立加载，也能与主流Zsh配置框架配合使用，并兼容Vi编辑模式，是Zsh社区广泛采用的效率工具。
- [233boy/v2ray](https://github.com/233boy/v2ray) ★29461 [`shell-script`] [`v2ray`] [`vmess`]  
  233boy 的 v2ray 项目是一个面向 Linux 服务器的 V2Ray 一键部署与管理脚本，主要用于快速搭建和配置 V2Ray 代理服务。它通过交互式菜单简化了安装流程，支持常见的传输协议和伪装配置，方便用户根据需求选择合适的节点类型。该脚本还提供查看配置、修改端口、管理用户等常用功能，适合需要快速部署科学上网工具或自建代理服务的个人用户。由于项目会随 V2Ray 生态更新，使用前建议先查看仓库说明以确认脚本与当前 V2Ray 版本的兼容性。
- [hwdsl2/setup-ipsec-vpn](https://github.com/hwdsl2/setup-ipsec-vpn) ★28310 [`alpine-linux`] [`bash`] [`cisco-ipsec`] [`debian`] [`encryption`] [`ikev2`] [`installer`] [`ipsec`] [`l2tp`] [`libreswan`] [`linux`] [`network`] [`privacy`] [`raspberry-pi`] [`security`] [`self-hosted`] [`ubuntu`] [`vpn`] [`vpn-client`] [`vpn-server`]  
  用于在 Linux 服务器上一键部署 IPsec/L2TP 和 Cisco IPsec VPN，提供自动化安装脚本和配置工具，适合个人或小型团队快速搭建安全的远程访问通道。它支持常见的 Linux 发行版，安装后自动生成连接凭据，并可通过附带脚本管理用户、证书和重启服务。典型场景包括访问受限网络、加密通信或远程办公。该工具专注于简化配置流程，对已有防火墙和 NAT 环境做了兼容处理，通常部署在具有公网 IP 的 VPS 上即可使用。内置的 VPN 模式兼顾了不同客户端的兼容性，适合需要稳定、轻量级自建 VPN 的用户。
- [yuaotian/go-cursor-help](https://github.com/yuaotian/go-cursor-help) ★26260 [`cursor`] [`error`]  
  一个基于 Go 语言开发的光标辅助工具，主要用于在终端或文本编辑场景中实现高效的光标定位、移动和内容选取功能，适合需要操作文本流或构建命令行交互应用的开发者使用。
- [lxgw/LxgwWenKai](https://github.com/lxgw/LxgwWenKai) ★25412 [`cjk`] [`font`] [`typeface`]  
  LxgwWenKai 是一款开源的中文字体，基于思源黑体和霞鹜文楷优化而成，主要用于改善中文排版的可读性和美观度，适合在屏幕显示、电子书、网页设计等场景中使用，支持多种字重和字符集，兼顾现代感与传统书法韵味。
- [StreisandEffect/streisand](https://github.com/StreisandEffect/streisand) ★23479 [`ansible`] [`anyconnect`] [`censorship`] [`openconnect`] [`openvpn`] [`shadowsocks`] [`ssh`] [`streisand`] [`stunnel`] [`tor`] [`vpn`] [`wireguard`]  
  Streisand 是一款用于快速部署个人翻墙服务器的开源工具，主要面向需要绕过网络限制的用户。它通过自动化脚本在一台全新 VPS 上配置多种常用 VPN 协议，例如 WireGuard、OpenConnect、Shadowsocks 等，并提供统一的管理入口和客户端连接信息。使用场景包括自建安全代理、保护隐私、访问受限内容。由于项目已停止活跃维护，建议仅用于了解原理或结合其他工具使用。它适合有服务器基础、希望独立掌控网络出口的用户。
- [mack-a/v2ray-agent](https://github.com/mack-a/v2ray-agent) ★21630 [`cloudflare`] [`grpc-cloudflare`] [`httpupgrade`] [`hysteria2`] [`nginx`] [`reality`] [`reality-grpc`] [`shell`] [`sing-box`] [`trojan`] [`trojan-grpc`] [`tuic-v5`] [`v2ray`] [`vless`] [`vmess`] [`websockettlscdn-cloudflare-ip`] [`xray`] [`xray-core`] [`xray-install`] [`xtls-rprx-vision`]  
  V2Ray代理工具，用于简化V2Ray的配置和管理，支持多种传输协议和伪装方式，便于科学上网与网络流量优化，适用于需要网络代理服务的用户。
- [Nyr/openvpn-install](https://github.com/Nyr/openvpn-install) ★20611 [`almalinux`] [`bash`] [`centos`] [`debian`] [`fedora`] [`openvpn`] [`rockylinux`] [`shell`] [`ubuntu`] [`vpn`]  
  在Linux服务器上一键部署OpenVPN的自动化脚本，通过交互式问答完成服务端安装、证书与客户端配置，免去手动编辑复杂参数和调试防火墙的麻烦。适合个人或小型团队在VPS上搭建远程安全访问通道，支持常见发行版，重复运行可添加或撤销客户端，也可彻底卸载。
- [spaceship-prompt/spaceship-prompt](https://github.com/spaceship-prompt/spaceship-prompt) ★20553 [`oh-my-zsh`] [`prompt`] [`shell`] [`shell-prompt`] [`shell-theme`] [`spaceship`] [`terminal`] [`zsh`] [`zsh-theme`] [`zsh-users`]  
  一款专为 Zsh 设计的现代化命令行提示主题，旨在提供清晰、美观且信息丰富的提示符界面。它能够自动显示当前目录、Git 分支与状态、编程语言版本（如 Node.js、Python 等）、命令执行时间等常用信息，适合开发者日常使用。同时支持高度自定义，可自由开关或排列各个功能模块，并兼容 Oh My Zsh、Antigen 等常见插件管理框架。其渲染速度快，能让终端操作更高效，尤其适合需要频繁使用 Git 或切换项目的开发场景。
- [unixorn/awesome-zsh-plugins](https://github.com/unixorn/awesome-zsh-plugins) ★17905 [`awesome`] [`awesome-list`] [`collection`] [`hacktoberfest`] [`list`] [`oh-my-zsh`] [`zgenom`] [`zsh-completions`] [`zsh-configuration`] [`zsh-framework`] [`zsh-plugin`] [`zsh-prompt`] [`zsh-theme`]  
  面向Zsh用户的插件和配置资源索引，系统整理了社区中大量实用的插件、主题、框架、命令行提示符及补全工具，并附有分类说明和链接。常用于快速查找适合自身工作流的Zsh增强方案，或了解该生态的流行趋势与最佳实践，适合希望定制终端环境、提升命令行操作效率的开发者参考。
- [angristan/openvpn-install](https://github.com/angristan/openvpn-install) ★16083 [`arch-linux`] [`bash`] [`censorship`] [`centos`] [`debian`] [`encryption`] [`fedora`] [`linux`] [`openvpn`] [`openvpn-server`] [`privacy`] [`ubuntu`] [`vpn`] [`vpn-manager`] [`vpn-server`]  
  用于在 Linux 服务器上快速部署 OpenVPN 的脚本工具，支持一键安装、用户管理与配置文件生成，简化了搭建安全虚拟专用网络的过程，适合需要远程安全访问私有网络的场景。
- [DaoCloud/public-image-mirror](https://github.com/DaoCloud/public-image-mirror) ★14794 [`mirror`] [`speedup`]  
  用于镜像同步和加速公开 Docker 镜像的公共服务，帮助用户解决海外镜像拉取慢的问题，支持常见官方镜像的快速下载，提升容器镜像分发效率，适用于国内开发者和企业构建云原生应用。
- [hq450/fancyss](https://github.com/hq450/fancyss) ★13694 [`arm`] [`koolgame`] [`merlin`] [`naiveproxy`] [`shadowsocks`] [`shadowsocks-rust`] [`ss`] [`ssr`] [`trojan`] [`v2ray`] [`x64`] [`xray`]  
  基于 hq450 的 fancyss 项目主要为路由器提供科学上网插件支持，集成多种 SSR、V2Ray 等协议，便于用户在 OpenWrt 等系统上快速部署和管理网络代理服务，提升网络访问自由度与隐私保护能力。
- [myspaghetti/macos-virtualbox](https://github.com/myspaghetti/macos-virtualbox) ★13525 [`bash-script`] [`macos`] [`macos-installer`] [`macos-virtual-machine`] [`virtualbox`] [`virtualbox-efi`]  
  用于在VirtualBox中自动创建和配置macOS虚拟机的脚本和配置集合，省去手动获取系统镜像、调整引导参数、修改分辨率等繁琐步骤。主要面向需要在非Mac硬件上体验或测试macOS的开发者与普通用户，常见于软件兼容性测试、自学macOS环境或临时构建开发环境等场景。仓库提供较明确的安装说明和可调选项，支持在Windows、Linux等宿主机上运行，帮助解决macOS无法直接安装于普通PC的兼容性问题。不过实际成功率取决于硬件、VirtualBox版本和系统镜像来源，属于需要一定动手能力的自助型开源方案。
- [bin456789/reinstall](https://github.com/bin456789/reinstall) ★12700 [`alpine`] [`alpine-linux`] [`boot`] [`distro`] [`linux`] [`linux-distribution`] [`liveos`] [`netboot`] [`netinst`] [`netinstall`] [`operating-systems`] [`os`] [`reinstall`] [`shell-script`] [`vps`] [`windows`]  
  一个自动化系统重装工具，主要用于快速重新安装操作系统或恢复系统环境，支持自定义镜像和预配置设置，通常适合运维人员或开发者用于批量部署或系统维护。
- [oh-my-fish/oh-my-fish](https://github.com/oh-my-fish/oh-my-fish) ★11371 [`fish`] [`fishshell`] [`fishshell-framework`] [`hacktoberfest`] [`oh-my-fish`] [`oh-my-zsh`] [`omf`] [`prompt`] [`shell`] [`terminal`]  
  oh-my-fish 是一个面向 Fish shell 的开源框架，用于简化命令行配置和主题管理，提供丰富的插件库、主题支持和便捷的自定义功能，适合追求高效与美观终端体验的用户。
- [YanG-1989/m3u](https://github.com/YanG-1989/m3u) ★11351  
  一个用于生成和管理m3u格式播放列表的工具，支持自定义过滤规则和分类，适用于影音媒体库的自动化整理，可配合Plex、Jellyfin等媒体服务器使用，方便用户按条件生成直播源或视频点播列表。
- [angristan/wireguard-install](https://github.com/angristan/wireguard-install) ★11226 [`linux`] [`nat`] [`privacy`] [`vpn`] [`wireguard`]  
  用于自动化安装和配置 WireGuard VPN 的脚本工具，支持 Linux 系统快速部署，简化网络隧道和安全通信的搭建过程，适合服务器与客户端间的加密连接需求。
- [Gogh-Co/Gogh](https://github.com/Gogh-Co/Gogh) ★10279 [`bash`] [`color-scheme`] [`gnome-terminal`] [`iterm2`] [`linux`] [`mint`] [`pantheon-terminal`] [`shell`] [`terminal`]  
  一个开源的网页应用，主要用于创建、分享和探索配色方案。用户可以通过直观的界面实时生成调色板，支持多种色彩模式与导出格式，方便设计师和开发者在项目中使用。
- [EtherDream/jsproxy](https://github.com/EtherDream/jsproxy) ★9334  
  一种基于浏览器的在线代理工具，利用 Service Worker 和边缘计算能力在客户端完成请求转发，无需安装插件或客户端软件。用户打开部署后的代理页面即可访问目标网站，通常用于绕过网络封锁或访问地理位置受限的资源。该方案把转发逻辑放在 JavaScript 中，便于部署到静态托管和 CDN 上，适合个人搭建轻量级代理入口，也适合作为学习浏览器代理实现原理的参考。项目本身主要解决静态环境下动态代理的可行性问题，强调低成本与易用性。
- [babun/babun](https://github.com/babun/babun) ★8541  
  为 Windows 用户提供开箱即用的类 Unix 命令行环境，基于 Cygwin 预配置了大量常用工具和 Zsh 终端，免去手动安装配置的繁琐。适合需要在 Windows 上使用 grep、vim、curl、git 等命令，或希望获得接近 Linux/macOS 的 shell 体验的开发者。安装简单，还内置包管理器用于扩展组件，常用于搭建跨平台开发环境或日常自动化脚本操作。
- [zsh-users/antigen](https://github.com/zsh-users/antigen) ★8346 [`package-manager`] [`plugin-manager`] [`shell`] [`zsh`]  
  Antigen 是一款面向 Zsh 的插件管理器，主要用于简化 shell 配置文件的维护，集中管理插件和主题。它能从 oh-my-zsh、GitHub 等来源加载所需功能，并自动处理依赖与更新，省去手动克隆和配置的麻烦。典型场景是开发者想按需启用 Zsh 扩展、优化启动速度，同时保持配置清晰可复现。通常适合希望快速搭建或迁移命令行环境、避免配置混乱的 Zsh 用户。
- [teddysun/shadowsocks_install](https://github.com/teddysun/shadowsocks_install) ★8248 [`shadowsocks`] [`shadowsocks-libev`] [`shadowsocks-server`] [`shadowsocksr`] [`ssr`]  
  用于在 Linux 服务器上一键安装和配置 Shadowsocks 代理服务，提供多种后端实现（如 Python、libev、Go、Rust）的安装脚本，覆盖安装、卸载、查看配置等操作。通常适合需要在 VPS 上快速部署科学上网工具的用户，或者用于替代商业 VPN、自建加密代理通道的场景。脚本自动完成依赖下载、编译安装和系统服务配置，避免手动操作带来的繁琐和出错，同时支持 TCP 等性能优化参数，是个人搭建代理服务器时常用的自动化工具。
- [fbelavenuto/arpl](https://github.com/fbelavenuto/arpl) ★7289  
  arpl 是一个用于生成和优化无线网络中路径损耗预测的工具，主要用于 LoRa 等低功耗广域网场景，支持基于地理信息和天线参数的链路预算分析，帮助用户评估信号覆盖与通信可靠性，适用于物联网部署规划。
- [spiritLHLS/ecs](https://github.com/spiritLHLS/ecs) ★7101 [`almalinux`] [`arch`] [`astralinux`] [`bench-script`] [`benchmark`] [`cdn`] [`centos`] [`checker`] [`debian`] [`fedora`] [`goecs`] [`ipv6`] [`lemonbench`] [`openai`] [`oracle-linux`] [`rockylinux`] [`speedtest`] [`sysbench`] [`ubuntu`] [`vps`]  
  一个基于阿里云ECS的自动化部署与管理工具，主要用于批量创建、配置和监控云服务器实例，支持自定义镜像、安全组规则和定时任务，适用于需要高效运维云资源的开发者和企业。
- [xykt/NetQuality](https://github.com/xykt/NetQuality) ★5436  
  用于监控和分析网络质量的工具，主要收集延迟、丢包、带宽等指标，支持多节点测试和可视化展示，通常适合企业网络运维、云服务连通性评估及分布式系统网络性能优化等场景。
- [teddysun/across](https://github.com/teddysun/across) ★5369 [`auto-transfer-backup`] [`backup`] [`bbr`] [`benchmark`] [`kms`] [`l2tp`] [`shell`] [`unixbench`]  
  这是一个集成多种代理工具的一键安装脚本库，主要用于在 Linux 服务器上快速部署 Shadowsocks、V2Ray、Xray 等常见科学上网服务，并附带配置管理、流量统计和系统优化功能。通常适合需要快速搭建翻墙服务或自建代理节点的用户，通过简单命令即可完成安装和后续配置，免去手动编译和复杂设置的麻烦，同时支持 TCP 与 UDP 转发，满足日常加速和访问需求。
- [lmc999/RegionRestrictionCheck](https://github.com/lmc999/RegionRestrictionCheck) ★5108  
  用于检测和绕过 YouTube 等平台的区域限制，通过自动化脚本检查视频可播放区域，并提供解除地理封锁的解决方案，帮助用户访问受地域限制的内容。
- [eooce/Sing-box](https://github.com/eooce/Sing-box) ★4969 [`argo`] [`hysteria2`] [`oneclick`] [`reality`] [`serv00`] [`sing-box`] [`tuic`] [`tunnel`] [`vmess-ws-tls`]  
  Sing-box 是一个功能强大的多协议代理工具，主要用于网络流量转发和隐私保护，支持 VMess、VLESS、Trojan 等多种协议，适用于科学上网、网络加密传输等场景，具备高性能、易配置的特点，适合开发者和高级用户构建安全的通信环境。
- [Nyr/wireguard-install](https://github.com/Nyr/wireguard-install) ★4917 [`almalinux`] [`bash`] [`centos`] [`debian`] [`fedora`] [`rockylinux`] [`shell`] [`ubuntu`] [`vpn`] [`wireguard`]  
  用于自动安装和配置 WireGuard VPN 的脚本工具，支持快速部署服务器端和生成客户端配置，简化了在 Linux 系统上搭建安全私有网络的过程，适用于需要安全远程访问或网络加密的场景。
- [mitchellkrogza/nginx-ultimate-bad-bot-blocker](https://github.com/mitchellkrogza/nginx-ultimate-bad-bot-blocker) ★4767 [`adware`] [`bot-blocker`] [`bots`] [`gambling-filter`] [`malware`] [`nginx`] [`nginx-server`] [`porn-filter`] [`referer-blocker`] [`referrer-spam`] [`scanners`] [`spam-blocker`] [`spam-filtering`] [`spam-prevention`] [`spam-protection`] [`spam-referers`] [`spam-referrer-blocker`] [`spambot-security`] [`spyware`] [`vulnerability-scanners`]  
  用于阻止恶意爬虫和机器人访问的 Nginx 安全防护工具，通过维护黑名单自动拦截已知有害的用户代理和 IP 地址，常用于增强网站安全性和防御自动化攻击，适用于各类需要防护非授权抓取和恶意访问的 Web 环境。
- [ToyoDAdoubi/doubi](https://github.com/ToyoDAdoubi/doubi) ★4691  
  Linux VPS 一键脚本合集，用于简化服务器基础环境和网络工具的部署。涵盖常见代理服务（如 Shadowsocks、V2Ray）的一键安装、TCP 加速模块（如 BBR、锐速）的启用，以及系统参数优化等操作。用户只需复制执行命令，即可自动完成下载、配置和启动流程，特别适合购买海外服务器后快速搭建网络通道或改善连接质量。脚本以 Shell 编写，主要面向对命令行不陌生但希望提升效率的运维或普通用户，使用前建议根据服务器系统版本挑选对应脚本。
- [jpetazzo/pipework](https://github.com/jpetazzo/pipework) ★4253  
  用简洁的 shell 脚本为 Linux 容器（如 Docker）实现自定义网络配置。它能够将物理网卡、VLAN 或网桥直接接入容器，并支持设置固定 IP 和子网，满足多容器互联、跨主机组网或连接外部网络等需求。该工具无需常驻服务，依赖少，适合在运维或开发环境中快速调整容器网络，弥补默认网络配置的灵活度不足。
- [xubiaolin/docker-zerotier-planet](https://github.com/xubiaolin/docker-zerotier-planet) ★4068 [`dockerfile`] [`planet`] [`self-host-zerotier`] [`self-hosted`] [`zerotier`] [`zerotier-network`]  
  用于搭建 ZeroTier 自建 Planet 服务器的 Docker 镜像，支持自定义配置以实现内网穿透和虚拟局域网通信，适合需要自主控制网络拓扑的场景。
- [vdsm/virtual-dsm](https://github.com/vdsm/virtual-dsm) ★3942 [`docker`] [`docker-image`] [`dsm`] [`kvm`] [`qemu`] [`synology`] [`synology-docker`] [`synology-dsm`] [`synology-nas`]  
  VDSM（Virtual Desktop Service Manager）是一个用于管理和监控虚拟桌面基础设施的工具，主要用于部署、配置和维护虚拟机实例，支持与云计算平台集成，提供资源调度、网络管理和存储配置等功能，通常作为后端服务用于虚拟化环境的自动化运维。
- [BrowserBox/BrowserBox](https://github.com/BrowserBox/BrowserBox) ★3892 [`browser`] [`cdr`] [`chrome`] [`cobrowsing`] [`cybersecurity`] [`embeddable`] [`hidden-services`] [`multiplayer`] [`onion-service`] [`proxy-server`] [`rbi`] [`remote-browser-isolation`] [`remote-browsers`] [`reverse-proxy`] [`sanitization`] [`tor`] [`web-browser`] [`web-isolation`] [`webrtc`] [`zero-trust`]  
  BrowserBox 是一个基于浏览器的虚拟沙盒环境，允许用户在隔离的浏览器中运行和测试网页应用，主要用于安全浏览、恶意软件分析和跨版本浏览器兼容性测试，支持自定义网络配置和快照保存，适合开发、测试及网络安全研究场景。
- [firehol/blocklist-ipsets](https://github.com/firehol/blocklist-ipsets) ★3889 [`abuses`] [`attacks`] [`blocklists`] [`command-and-control`] [`ipset`] [`ipset-lists`] [`malware`]  
  提供一系列用于防火墙规则的IP集合黑名单，主要用于阻止恶意流量，如垃圾邮件、暴力破解和网络攻击，支持多种格式，便于集成到iptables等防火墙工具中，提升网络安全性。
- [leitbogioro/Tools](https://github.com/leitbogioro/Tools) ★3888  
  一个包含多种实用脚本和工具的开源项目，主要用于自动化任务、系统管理及开发效率提升，适用于开发者和系统管理员进行日常操作简化与批量处理。
- [mvscode/frps-onekey](https://github.com/mvscode/frps-onekey) ★3502 [`debian`] [`frp`] [`frps`] [`linux`] [`nat`] [`remote-control`] [`shell`] [`ubuntu`]  
  用于快速部署 FRPS（Fast Reverse Proxy Server）的一键安装脚本，支持 Linux 系统，简化配置流程，方便用户快速搭建内网穿透服务，适用于需要远程访问内网应用的场景。
- [AuxXxilium/arc](https://github.com/AuxXxilium/arc) ★3430 [`arc`] [`arc-loader`] [`diskstation`] [`dsm`] [`nas`] [`network`] [`redpill`] [`redpill-load`] [`storage`] [`synology`] [`xpenology`]  
  一个基于区块链的去中心化应用平台，主要用于构建和部署智能合约与数字资产，支持高效共识机制和跨链交互，适合开发者进行Web3应用开发与实验性项目部署。
- [tom-snow/wechat-windows-versions](https://github.com/tom-snow/wechat-windows-versions) ★3231  
  提供微信 Windows 版本的安装包与更新历史，方便用户下载旧版微信客户端，适用于需要特定版本的场景，如兼容性需求或偏好经典界面。
- [transcode-open/apt-cyg](https://github.com/transcode-open/apt-cyg) ★3015  
  这是用于在 Cygwin 环境下管理软件包的命令行工具，相当于把 Debian 的 apt 体验带到了 Windows。它可以直接从命令行搜索、安装、升级和卸载 Cygwin 软件包，并自动解析依赖关系，省去手动运行 setup.exe 的繁琐流程。对于习惯 Linux 包管理操作、希望在 Windows 上获得类似 apt 使用体验的开发者或运维人员，apt-cyg 是一个轻量实用的选择。它通常适合编写脚本批量安装工具链或自动配置开发环境，但需要注意原版项目已停止维护，使用时可能需要调整软件源。
- [webinstall/webi-installers](https://github.com/webinstall/webi-installers) ★2953 [`brew`] [`hacktoberfest`] [`linux`] [`macos`] [`windows-10`] [`wsl`] [`wsl-ubuntu`] [`wsl2`]  
  webi-installers 是一个用于简化 Web 工具和编程语言安装的脚本集合，通过统一的命令行接口快速安装如 Node.js、Python、Rust 等开发工具，支持跨平台自动配置环境，提升开发者环境搭建效率。
- [teddysun/lamp](https://github.com/teddysun/lamp) ★2918 [`almalinux`] [`amazonlinux2`] [`apache`] [`centos`] [`debian`] [`lamp`] [`mariadb`] [`php`] [`rhel`] [`rockylinux`] [`shell`] [`ubuntu`]  
  LAMP 是 Teddysun 开发的一键安装脚本，用于在 Linux 系统上快速部署 Apache、MySQL、PHP 环境，支持 CentOS、Debian、Ubuntu 等主流发行版，简化 Web 服务器搭建流程，适合运行动态网站或博客系统。
- [91yun/serverspeeder](https://github.com/91yun/serverspeeder) ★2870  
  serverspeeder 主要用于 Linux 服务器上的网络加速，通过优化 TCP 拥塞控制算法来提升数据传输速度和降低连接延迟。它通常部署在 VPS 或独立服务器上，适合需要改善跨境或高延迟链路质量的场景，能够有效缓解丢包和带宽利用率不足的问题。该工具以第三方补丁或内核模块的形式运行，适合有一定服务器管理经验的用户进行安装与配置，并常用于游戏加速、远程办公或科学上网等需要稳定高速连接的用途。
- [oneinstack/oneinstack](https://github.com/oneinstack/oneinstack) ★2453 [`jdk`] [`lamp`] [`lemp`] [`lnmh`] [`lnmp`] [`lnmpa`] [`lnmt`] [`mariadb`] [`memcached`] [`mysql`] [`nginx`] [`oneinstack`] [`openresty`] [`percona`] [`php`] [`phpmyadmin`] [`pureftpd`] [`redis`] [`tengine`] [`tomcat`]  
  用于快速部署LAMP/LNMP环境的一体化脚本，支持多种Web服务组件组合安装与管理，适用于CentOS/Ubuntu/Debian系统，主要用于搭建高性能网站服务器环境。
- [ylx2016/Linux-NetSpeed](https://github.com/ylx2016/Linux-NetSpeed) ★2410  
  Linux网络加速工具，通过BBR、锐速等优化技术提升服务器网络性能，适用于VPS、云主机等场景，支持多种Linux发行版，主要用于改善带宽利用率、降低延迟，适合需要网络提速的用户部署。
- [huan/docker-wechat](https://github.com/huan/docker-wechat) ★2330 [`docker`] [`wechat`]  
  基于 Docker 的微信客户端解决方案，主要用于在 Linux 系统中以容器化方式运行微信应用，解决原生 Linux 客户端缺失的问题，便于快速部署和环境隔离。
- [flucont/btcloud](https://github.com/flucont/btcloud) ★2081  
  一个基于 Web 的 BitTorrent 客户端，支持远程管理与云存储集成，便于在服务器上部署并通过浏览器操作下载任务，适合需要轻量级、跨平台 BT 管理工具的用户使用。
- [Aurora-Admin-Panel/deploy](https://github.com/Aurora-Admin-Panel/deploy) ★1990 [`admin-panel`] [`gost`] [`iptables`] [`port-forwarding`]  
  Aurora Admin Panel 的部署配置用于快速搭建现代化管理后台，支持 Docker 容器化部署与 Nginx 反向代理，结合 CI/CD 实现自动化发布，确保高可用性与安全性，适合前后端分离架构的项目上线运行。
- [neoFelhz/neohosts](https://github.com/neoFelhz/neohosts) ★1765 [`ad`] [`adblock`] [`banad`] [`host`] [`hosts`] [`neohosts`]  
  为客户提供一套整合的hosts文件订阅服务，旨在屏蔽广告、恶意软件、钓鱼网站等常见不良域名，帮助提升浏览器与日常网络访问的速度和安全系数。用户可直接获取更新后的hosts规则，适用于个人电脑、路由器或服务器等需要实现全局域名过滤的场景。项目通常适合作为轻量级的网络净化方案，尤其适合希望避免安装复杂扩展、追求低资源占用的人群。维护者会定期同步上游规则，确保拦截覆盖面与时效性，同时保留一定的自定义空间。由于hosts机制本身天然具备零额外进程、无需后台服务的特性，该方案对旧设备或嵌入式环境也较为友好。
- [hwdsl2/openvpn-install](https://github.com/hwdsl2/openvpn-install) ★1721 [`bash`] [`centos`] [`debian`] [`easyrsa`] [`encryption`] [`installer`] [`ipv6`] [`linux`] [`network`] [`openvpn`] [`openvpn-server`] [`pki`] [`privacy`] [`raspberry-pi`] [`security`] [`self-hosted`] [`ubuntu`] [`vpn`] [`vpn-client`] [`vpn-server`]  
  用于在 Linux 服务器上快速部署 OpenVPN 和 L2TP/IPsec VPN 服务的自动化安装脚本，支持多种发行版，简化配置过程，适合需要安全远程访问的场景。
- [userdocs/qbittorrent-nox-static](https://github.com/userdocs/qbittorrent-nox-static) ★1667 [`bash`] [`bash-script`] [`libtorrent`] [`qbittorrent-nox`] [`static`]  
  用于部署和管理 qBittorrent 无头静态版本的文档集合，主要面向服务器或 NAS 等无图形界面环境，指导用户通过 qbittorrent-nox 组件实现远程控制与种子任务管理，适用于需要低资源占用、高效种存的场景。
- [ellermister/mtproxy](https://github.com/ellermister/mtproxy) ★1653 [`mtp`] [`mtproto`] [`mtproto-proxy`] [`mtproxy`] [`telegram`] [`tls`]  
  一个基于 Python 的 MTProxy 代理服务器部署与管理工具，主要用于快速搭建 Telegram 专用代理，支持多端口配置、流量统计和用户管理，简化了 MTProto 协议代理的部署流程，适合个人或组织用于提升 Telegram 访问稳定性。
- [lmc999/auto-add-routes](https://github.com/lmc999/auto-add-routes) ★1576  
  该项目用于自动添加路由规则，主要解决网络环境中静态路由配置繁琐的问题。通过脚本自动识别接口和子网信息，批量生成并加载路由规则，适用于多网卡、复杂网络拓扑场景，提升运维效率并降低配置出错风险。支持自定义路由策略，可集成到系统启动或网络变更触发流程中。
- [oooldking/script](https://github.com/oooldking/script) ★1509  
  一个专注于实用Shell脚本开发的GitHub项目，主要用于自动化系统管理任务、批量处理文件和简化常见运维操作，适合Linux环境下的高效工作流构建。
- [myxuchangbin/dnsmasq_sniproxy_install](https://github.com/myxuchangbin/dnsmasq_sniproxy_install) ★1442 [`dns-server`] [`dnsmasq`] [`netflix`] [`shell`] [`sniproxy`]  
  提供一键部署 dnsmasq 和 sniproxy 的安装脚本，用于搭建基于域名的 DNS 解析与 TLS 代理转发环境。dnsmasq 负责将目标域名解析到本机或指定 IP，sniproxy 依据客户端 TLS SNI 信息将请求转发到实际目标服务器，能够有效缓解域名被 DNS 污染或访问受限的问题。适合需要透明分流特定域名或自建代理网关的用户，常见于网络优化、跨境访问等场景，脚本通常覆盖依赖检测、配置生成与服务启动流程，便于快速部署。
- [wjz304/arpl-zh_CN](https://github.com/wjz304/arpl-zh_CN) ★1324  
  arpl-zh_CN 是一个为 ARPL（Asustor Router PLatform）系统提供中文界面支持的本地化项目，主要用于将 Asustor 路由器固件中的英文界面翻译为简体中文，提升中文用户的使用体验。该项目通常包含语言包文件和相关补丁，便于在兼容设备上安装与切换。
- [OussamaMater/Laravel-Tips](https://github.com/OussamaMater/Laravel-Tips) ★1317 [`laravel`] [`pestphp`] [`php`] [`tips`]  
  提供一系列实用的 Laravel 开发技巧和最佳实践，涵盖路由、中间件、Eloquent 模型、数据库操作、性能优化等内容，帮助开发者提升 Laravel 应用的可维护性和执行效率，适合中高级 PHP 开发者参考和学习。
- [jerry048/Dedicated-Seedbox](https://github.com/jerry048/Dedicated-Seedbox) ★1224  
  一个专为搭建专用种子服务器（Seedbox）而设计的配置脚本集合，主要用于自动化部署高性能的 BT 种子环境，支持 Transmission、rTorrent 等常用客户端，集成防火墙、反向代理和用户管理功能，适合需要远程做种和高带宽分享的用户，基于 Linux 系统（如 Debian/Ubuntu）快速构建安全稳定的 Seedbox 服务。
- [todo-for-ai/todo-for-ai](https://github.com/todo-for-ai/todo-for-ai) ★1173 [`ai-coding-tools`] [`cursor`] [`kiro`] [`todo4ai`] [`trae`] [`windsurf`]  
  用于管理和跟踪AI项目中的待办事项，支持任务分类、优先级设置和进度追踪，帮助团队高效协作并推进AI开发流程。
- [MeowLove/Network-Reinstall-System-Modify](https://github.com/MeowLove/Network-Reinstall-System-Modify) ★1103  
  一个用于网络重装操作系统的开源工具，支持自动化修改和部署系统环境，适用于快速批量部署Linux系统，提供多种安装模式和自定义配置选项，简化服务器系统重装流程。
- [atrandys/trojan](https://github.com/atrandys/trojan) ★1056  
  trojan是一个用于安全通信的网络代理工具，主要用于绕过网络审查，提供加密的流量传输。它通过模拟正常HTTPS流量来避免检测，支持多种平台和配置方式，适合需要稳定和隐秘网络连接的用户。项目包含服务端和客户端部署文档，便于快速搭建。
- [philcook/brew-php-switcher](https://github.com/philcook/brew-php-switcher) ★1007 [`homebrew`] [`php`] [`shell`]  
  在 macOS 上管理多个 PHP 版本并快速切换的命令行工具，面向使用 Homebrew 安装 PHP 的开发者。它解决不同项目需要不同 PHP 版本时反复修改环境配置的问题，通常适合本地开发场景。核心功能包括列出已安装的 PHP 版本、一键切换当前终端或系统默认的 php 命令指向，并自动更新相关符号链接。操作简单，无需手动编辑路径或重新编译，提高多项目并行开发时的切换效率。
- [mayankk2308/purge-wrangler](https://github.com/mayankk2308/purge-wrangler) ★1007 [`amd`] [`apple`] [`catalina`] [`egpu`] [`graphics`] [`high-sierra`] [`macos`] [`mojave`] [`nvidia`] [`nvidia-egpus`] [`patch`] [`purge`] [`thunderbolt`] [`unblocker`] [`wrangler`]  
  Purge-wrangler 是面向 macOS 用户的开源实用工具，核心用途是管理外接图形卡的驱动加载，尤其针对使用 AMD 独立显卡的 Mac 机型。它通过清除或屏蔽系统自带的 AMD 显卡驱动，解决系统升级后外接 GPU 无法正常输出、黑屏或内核崩溃等问题。典型使用场景是运行 macOS Mojave 及以上版本、通过雷电接口连接 eGPU 的用户，在驱动冲突导致显示异常时执行修复。工具提供命令行交互，操作简单，适合有一定命令行经验的技术用户。需要留意版本兼容性，使用时需关闭系统安全设置。
- [stilleshan/frps](https://github.com/stilleshan/frps) ★874 [`frp`] [`frps`] [`frps-docker`]  
  用于内网穿透的 frps（frp 服务端）镜像，简化部署配置，支持多端口映射和流量加密，适用于远程访问家庭设备、调试微信应用等场景，配合 frpc 客户端实现 P2P 穿透。
- [venshine/decompile-apk](https://github.com/venshine/decompile-apk) ★820 [`android-decompile`] [`apk`] [`apk-decompiler`] [`apk-parser`] [`apktool`] [`bytecode-viewer`] [`classyshark`] [`decompile`] [`dex2jar`] [`jadx`] [`jd-gui`]  
  用于反编译APK文件的工具，主要功能包括解析APK的资源文件、AndroidManifest.xml、classes.dex等组件，支持将.dex文件转换为可读的Java代码，适用于Android应用逆向分析和源码恢复场景，通常配合反编译框架如Apktool、Jadx使用。
- [8838/btpanel-v7.7.0](https://github.com/8838/btpanel-v7.7.0) ★749  
  主要用于快速部署和管理Linux服务器环境，集成LNMP、LAMP等应用栈，支持网站、数据库、文件及安全功能的一体化管理，适合运维人员和开发者通过可视化界面简化服务器配置与监控操作。
- [cxf-boluo/magisk_All](https://github.com/cxf-boluo/magisk_All) ★587  
  用于管理和修改 Magisk 的工具集合，主要支持模块化系统定制、Root 权限管理及系统镜像修补，适合 Android 设备的深度定制与调试，兼容多种设备型号，便于开发者和高级用户进行高效系统优化和功能扩展。
- [FunctionClub/MTProxy-Bash](https://github.com/FunctionClub/MTProxy-Bash) ★437  
  MTProxy-Bash 提供一套 Bash 脚本，用于在 Linux 服务器上快速部署和管理 Telegram 官方 MTProxy 代理服务。它主要解决用户无法直接连接 Telegram 的问题，通过自动化配置流程，省去手动编译、生成密钥和设置防火墙的繁琐步骤。通常适合需要自行搭建代理的个人或小型团队，只需执行命令即可完成安装、启动和简单维护，并支持查看运行状态。该脚本面向有 VPS 操作经验但希望简化部署过程的用户。
- [cutelua/mtg-dist](https://github.com/cutelua/mtg-dist) ★436 [`mtg`] [`mtproto`] [`mtproxy`] [`telegram`]  
  一个基于 Lua 的轻量级网络通信工具，主要用于简化 TCP/UDP 传输层的连接管理与消息分发，适合嵌入式或高并发场景下的协议处理与网关开发，具有低内存占用和高可移植性特点。
- [haiwen/seafile-server-installer-cn](https://github.com/haiwen/seafile-server-installer-cn) ★368  
  用于在 Linux 服务器上快速部署 Seafile 私有云存储，面向中文用户提供一键式安装和配置服务。脚本自动处理环境依赖、数据库初始化、服务启动等繁琐步骤，降低了自建网盘的技术门槛。通常适合需要搭建企业内部文件同步与共享平台、个人私有云存储，或希望快速体验 Seafile 完整功能的场景。该安装器支持主流发行版，并针对中文环境进行了优化，可减少手动配置错误，帮助用户更高效地完成部署。
- [gyli/Blocklist](https://github.com/gyli/Blocklist) ★308 [`chrome-extension`]  
  用于维护和分发广告、追踪器及恶意域名或IP的黑名单集合，供内容拦截工具（如Pi-hole、AdGuard等）订阅使用。通过定期更新规则列表，帮助用户屏蔽在线广告、防止隐私追踪并降低恶意软件感染风险。适合家庭网络管理、企业内网过滤和安全防护场景。规则通常按类别组织，支持自动更新，可与主流DNS过滤服务无缝集成。用户可自行选择启用特定类别，灵活平衡拦截强度与正常浏览体验。
- [uxh/superspeed](https://github.com/uxh/superspeed) ★280  
  一个基于Go语言开发的高速文件传输工具，主要用于在不同设备间快速传输大文件，支持多线程加速和断点续传，适用于内网或跨网络环境下的高效数据同步与分发。
- [wukongdaily/OneKVM](https://github.com/wukongdaily/OneKVM) ★214 [`arm64`] [`debian`] [`fnos`] [`kvm`] [`virt-manager`] [`x86-64`]  
  OneKVM 是一个基于 KVM 虚拟化技术的轻量级虚拟机管理工具，主要用于快速部署和管理虚拟机实例，支持自动化配置、资源监控和远程访问，适合开发测试、CI/CD 环境及边缘计算场景。
- [Masterchiefm/Aria2Dash](https://github.com/Masterchiefm/Aria2Dash) ★212  
  Aria2Dash 是一个基于 Web 的图形化前端，用于管理和监控 Aria2 下载工具。它提供直观的界面，方便用户查看下载进度、管理任务、配置 Aria2 参数，支持多设备访问，提升使用 Aria2 的便捷性和操作效率，适合需要可视化控制命令行下载工具的用户。
- [yiGmMk/wxocr](https://github.com/yiGmMk/wxocr) ★199  
  这是一个基于微信OCR技术的开源工具，主要用于从图片中高效提取文字内容，支持多种格式的文本识别与结构化输出，适合应用于文档扫描、信息录入、自动化办公等场景。
- [zhucaidan/btpanel-v7.7.0](https://github.com/zhucaidan/btpanel-v7.7.0) ★143  
  主要用于Linux服务器管理，提供可视化界面以简化建站、环境配置、文件管理、数据库操作等任务，通常适合个人开发者或运维人员高效维护服务器环境。
- [brighill/registry-mirror](https://github.com/brighill/registry-mirror) ★143 [`docker-compose`] [`docker-mirror`] [`docker-registry`] [`registry-server`]  
  用于加速 Docker 镜像拉取的 Registry 镜像服务，支持镜像缓存与代理，优化容器镜像分发，通常用于私有化部署或网络受限环境下提升镜像下载效率。
- [qd201211/Linux-SpeedTest](https://github.com/qd201211/Linux-SpeedTest) ★66  
  Linux-SpeedTest 是一个基于命令行的网络速度测试工具，主要用于测量服务器的上传和下载带宽，支持通过多个节点进行测速，帮助用户快速评估 Linux 系统的网络性能，适用于 VPS 和独立服务器的网络质量检测。
- [chaofan2685/unlimited_trial_navicat_premium](https://github.com/chaofan2685/unlimited_trial_navicat_premium) ★62  
  通过修改系统时间与主机文件，绕过 Navicat Premium 试用限制，实现无限试用。主要用于本地测试环境下的数据库管理，需手动重置时间并清理应用痕迹，适用于熟悉系统操作的用户。
- [wangyaominde/WeDual](https://github.com/wangyaominde/WeDual) ★22  
  WeDual是一个基于深度学习的图像到图像翻译框架，主要用于解决跨域图像生成任务，支持一对多或多对一的图像风格迁移，适用于图像增强、艺术化处理和数据扩增等场景。
- [0769559/v2ray](https://github.com/0769559/v2ray) ★21  
  该仓库提供V2Ray的部署与配置方案，主要用于搭建网络代理服务，通过流量转发机制突破网络访问限制，并加密通信以保护隐私。通常适用于个人或小型团队自建代理节点，典型场景包括访问被屏蔽网站、隐藏真实IP、保障公共网络下的数据传输安全。仓库内容可能涵盖服务端配置、客户端连接参数及日常维护技巧，具体操作需参考仓库内文档。
