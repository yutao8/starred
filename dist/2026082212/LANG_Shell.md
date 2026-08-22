# Shell 仓库

- [mattpocock/skills](https://github.com/mattpocock/skills) ★229810  
  面向 TypeScript 类型系统的技能练习项目，通常以一系列循序渐进的挑战题或实战题形式组织，内容涵盖泛型、条件类型、类型推断等进阶主题。适合希望系统掌握复杂类型设计的开发者，用于解决实际工程中抽象类型逻辑、提升类型可维护性等问题。可以作为自学或课程配套资源，通过边做边学检验对类型机制的理解，是巩固 TypeScript 高级技能的实用工具。
- [ohmyzsh/ohmyzsh](https://github.com/ohmyzsh/ohmyzsh) ★189304 [`cli`] [`cli-app`] [`oh-my-zsh`] [`oh-my-zsh-plugin`] [`oh-my-zsh-theme`] [`ohmyzsh`] [`plugin-framework`] [`plugins`] [`productivity`] [`shell`] [`terminal`] [`theme`] [`themes`] [`zsh`] [`zsh-configuration`]  
  一个社区驱动的 Zsh 配置管理框架，用于简化终端环境搭建和日常使用。它内置数百个插件和主题，涵盖 Git 别名、语法高亮、自动跳转等常见功能，可显著减少手动修改配置文件的工作量。用户通过简单的配置文件即可启用或组合扩展，适合频繁使用命令行的开发者、运维人员或任何想要提升终端操作效率的人。它解决了从零配置 Shell 的繁琐问题，让个性化终端体验变得快速且标准化，通常用于 macOS 和 Linux 系统的默认 Shell 增强。
- [dockur/windows](https://github.com/dockur/windows) ★52949 [`docker`] [`docker-container`] [`virtualization`] [`windows`] [`windows-virtual-desktop`] [`windows-virtual-machine`] [`windows-virtual-machines`] [`windows-vm`]  
  在 Docker 容器中运行完整 Windows 操作系统，提供基于网页的远程桌面访问，适合需要临时或隔离的 Windows 环境用于测试软件、运行旧应用或进行自动化任务，支持自定义镜像版本和资源分配，方便通过容器化方式快速部署和管理 Windows 实例。
- [sickcodes/Docker-OSX](https://github.com/sickcodes/Docker-OSX) ★52871 [`container`] [`docker`] [`docker-osx`] [`kvm`] [`macos`] [`os`] [`osx`] [`osx-kvm`] [`x`] [`x11`]  
  用于在 Linux 环境下通过 Docker 容器运行完整 macOS 系统，利用 KVM 硬件虚拟化实现接近原生的性能。它支持多种 macOS 版本，可自动下载恢复镜像并完成安装，适合需要在非苹果硬件上进行 macOS 应用测试、CI/CD 流水线构建、安全研究与逆向分析等场景。通常还能配合 VNC 或 SSH 远程访问图形界面，方便开发者在无 Mac 设备时验证软件兼容性或执行自动化任务。该项目面向开发者和测试人员，提供命令行参数定制磁盘大小、内存和 CPU 核心，以适配不同资源需求。
- [acmesh-official/acme.sh](https://github.com/acmesh-official/acme.sh) ★47507 [`acme`] [`acme-challenge`] [`acme-protocol`] [`acme-v2`] [`ash`] [`bash`] [`buypass`] [`certbot`] [`lets-encrypt`] [`posix`] [`posix-sh`] [`shell`] [`ssl`] [`ssl-certificate`] [`ssl-certificates`] [`tls`] [`tls-certificate`] [`zerossl`]  
  用于自动获取和续期SSL/TLS证书的ACME协议客户端，以纯Shell脚本实现，无需额外依赖。它主要帮助服务器管理员和个人开发者从Let's Encrypt等免费证书颁发机构自动申请、安装和续期证书，支持HTTP和DNS两种验证方式，并能与常用Web服务器集成。通过定时任务，可确保证书在过期前自动更新，解决手动管理证书繁琐且易忘记续期的痛点。通常适用于部署HTTPS服务的Linux服务器或嵌入式环境。
- [pyenv/pyenv](https://github.com/pyenv/pyenv) ★45042 [`python`] [`shell`]  
  pyenv 用于在单台机器上安装、切换和管理多个 Python 版本，支持按项目目录配置局部版本或全局切换，方便开发者维护依赖不同 Python 版本的项目，避免环境冲突。它在 PATH 中插入代理层来拦截 python 命令，无需改动系统自带 Python，即可切换版本。适合本地开发、版本兼容性测试及部署前验证，常搭配 pyenv-virtualenv 插件管理虚拟环境。
- [zsh-users/zsh-autosuggestions](https://github.com/zsh-users/zsh-autosuggestions) ★36000 [`autocomplete`] [`autosuggest`] [`fish`] [`shell`] [`zsh`] [`zsh-autosuggestions`]  
  为Zsh命令行环境实现自动建议功能，当用户输入命令时，插件会从历史记录中推测当前输入对应的最可能完整命令，并以灰色字体在光标后显示建议。用户无需记忆复杂命令，只需按既定快捷键即可采纳补全内容。适合频繁使用终端的开发者，尤其对长命令、常用参数或重复操作能显著提升效率，减少手动输入和拼写错误。该插件可独立加载，也能与主流Zsh配置框架配合使用，并兼容Vi编辑模式，是Zsh社区广泛采用的效率工具。
- [233boy/v2ray](https://github.com/233boy/v2ray) ★29513 [`shell-script`] [`v2ray`] [`vmess`]  
  233boy 的 v2ray 项目是一个面向 Linux 服务器的 V2Ray 一键部署与管理脚本，主要用于快速搭建和配置 V2Ray 代理服务。它通过交互式菜单简化了安装流程，支持常见的传输协议和伪装配置，方便用户根据需求选择合适的节点类型。该脚本还提供查看配置、修改端口、管理用户等常用功能，适合需要快速部署科学上网工具或自建代理服务的个人用户。由于项目会随 V2Ray 生态更新，使用前建议先查看仓库说明以确认脚本与当前 V2Ray 版本的兼容性。
- [hwdsl2/setup-ipsec-vpn](https://github.com/hwdsl2/setup-ipsec-vpn) ★28376 [`alpine-linux`] [`bash`] [`cisco-ipsec`] [`debian`] [`encryption`] [`ikev2`] [`installer`] [`ipsec`] [`l2tp`] [`libreswan`] [`linux`] [`network`] [`privacy`] [`raspberry-pi`] [`security`] [`self-hosted`] [`ubuntu`] [`vpn`] [`vpn-client`] [`vpn-server`]  
  用于在 Linux 服务器上一键部署 IPsec/L2TP 和 Cisco IPsec VPN，提供自动化安装脚本和配置工具，适合个人或小型团队快速搭建安全的远程访问通道。它支持常见的 Linux 发行版，安装后自动生成连接凭据，并可通过附带脚本管理用户、证书和重启服务。典型场景包括访问受限网络、加密通信或远程办公。该工具专注于简化配置流程，对已有防火墙和 NAT 环境做了兼容处理，通常部署在具有公网 IP 的 VPS 上即可使用。内置的 VPN 模式兼顾了不同客户端的兼容性，适合需要稳定、轻量级自建 VPN 的用户。
- [yuaotian/go-cursor-help](https://github.com/yuaotian/go-cursor-help) ★26223 [`cursor`] [`error`]  
  用于解决 Cursor 编辑器试用期限制问题的命令行工具，通常以 Go 语言编写并跨平台运行。其核心功能是重置或更换 Cursor 的本地设备标识，从而绕过基于硬件的试用期检测机制，适合频繁重装系统或需要在多台设备上使用 Cursor 的开发者。操作上多依赖命令行自动完成配置修改，无需手动编辑文件。需要注意的是，此类行为可能违反 Cursor 服务条款，建议仅用于个人学习与合法场景。
- [lxgw/LxgwWenKai](https://github.com/lxgw/LxgwWenKai) ★25624 [`cjk`] [`font`] [`typeface`]  
  霞鹜文楷是一款开源免费的中文字体，主要用于屏幕阅读和文档排版。其字形融合楷体笔意与现代清朗风格，既保留手写韵味又保证小字号下的可读性，常被用于电子书、网页、演示文稿及日常书写场景。该字体同时覆盖简体与繁体常用汉字，方便跨地区使用，且开源授权允许个人和商业项目自由嵌入与再分发。
- [StreisandEffect/streisand](https://github.com/StreisandEffect/streisand) ★23461 [`ansible`] [`anyconnect`] [`censorship`] [`openconnect`] [`openvpn`] [`shadowsocks`] [`ssh`] [`streisand`] [`stunnel`] [`tor`] [`vpn`] [`wireguard`]  
  Streisand 是一款用于快速部署个人翻墙服务器的开源工具，主要面向需要绕过网络限制的用户。它通过自动化脚本在一台全新 VPS 上配置多种常用 VPN 协议，例如 WireGuard、OpenConnect、Shadowsocks 等，并提供统一的管理入口和客户端连接信息。使用场景包括自建安全代理、保护隐私、访问受限内容。由于项目已停止活跃维护，建议仅用于了解原理或结合其他工具使用。它适合有服务器基础、希望独立掌控网络出口的用户。
- [mack-a/v2ray-agent](https://github.com/mack-a/v2ray-agent) ★21721 [`cloudflare`] [`grpc-cloudflare`] [`httpupgrade`] [`hysteria2`] [`nginx`] [`reality`] [`reality-grpc`] [`shell`] [`sing-box`] [`trojan`] [`trojan-grpc`] [`tuic-v5`] [`v2ray`] [`vless`] [`vmess`] [`websockettlscdn-cloudflare-ip`] [`xray`] [`xray-core`] [`xray-install`] [`xtls-rprx-vision`]  
  快速部署和管理代理服务，主要面向V2Ray、Xray等工具。它通过一键脚本自动完成安装、配置和更新，支持VMess、VLESS、Trojan等多种协议，并集成WebSocket、TLS等传输方案，还能自动申请证书和设置网站伪装。典型使用场景包括搭建个人翻墙服务器、自建代理节点，适合需要规避网络封锁或安全访问外部资源的用户。项目提供交互式菜单，操作简单，运维便利，适合有基本Linux使用经验的人群。
- [Nyr/openvpn-install](https://github.com/Nyr/openvpn-install) ★20617 [`almalinux`] [`bash`] [`centos`] [`debian`] [`fedora`] [`openvpn`] [`rockylinux`] [`shell`] [`ubuntu`] [`vpn`]  
  在Linux服务器上一键部署OpenVPN的自动化脚本，通过交互式问答完成服务端安装、证书与客户端配置，免去手动编辑复杂参数和调试防火墙的麻烦。适合个人或小型团队在VPS上搭建远程安全访问通道，支持常见发行版，重复运行可添加或撤销客户端，也可彻底卸载。
- [spaceship-prompt/spaceship-prompt](https://github.com/spaceship-prompt/spaceship-prompt) ★20558 [`oh-my-zsh`] [`prompt`] [`shell`] [`shell-prompt`] [`shell-theme`] [`spaceship`] [`terminal`] [`zsh`] [`zsh-theme`] [`zsh-users`]  
  一款专为 Zsh 设计的现代化命令行提示主题，旨在提供清晰、美观且信息丰富的提示符界面。它能够自动显示当前目录、Git 分支与状态、编程语言版本（如 Node.js、Python 等）、命令执行时间等常用信息，适合开发者日常使用。同时支持高度自定义，可自由开关或排列各个功能模块，并兼容 Oh My Zsh、Antigen 等常见插件管理框架。其渲染速度快，能让终端操作更高效，尤其适合需要频繁使用 Git 或切换项目的开发场景。
- [unixorn/awesome-zsh-plugins](https://github.com/unixorn/awesome-zsh-plugins) ★17955 [`awesome`] [`awesome-list`] [`collection`] [`hacktoberfest`] [`list`] [`oh-my-zsh`] [`zgenom`] [`zsh-completions`] [`zsh-configuration`] [`zsh-framework`] [`zsh-plugin`] [`zsh-prompt`] [`zsh-theme`]  
  面向Zsh用户的插件和配置资源索引，系统整理了社区中大量实用的插件、主题、框架、命令行提示符及补全工具，并附有分类说明和链接。常用于快速查找适合自身工作流的Zsh增强方案，或了解该生态的流行趋势与最佳实践，适合希望定制终端环境、提升命令行操作效率的开发者参考。
- [angristan/openvpn-install](https://github.com/angristan/openvpn-install) ★16107 [`arch-linux`] [`bash`] [`censorship`] [`centos`] [`debian`] [`encryption`] [`fedora`] [`linux`] [`openvpn`] [`openvpn-server`] [`privacy`] [`ubuntu`] [`vpn`] [`vpn-manager`] [`vpn-server`]  
  用于快速部署和管理OpenVPN服务器的自动化脚本，支持主流Linux发行版。通过交互式向导完成配置，无需手动编辑复杂的配置文件，适合个人或企业快速搭建安全的远程访问通道。脚本涵盖安装、客户端证书生成、用户增删及卸载等常见操作，典型使用场景包括保护公共Wi-Fi连接、远程访问内网资源，或为团队提供轻量级VPN服务。
- [DaoCloud/public-image-mirror](https://github.com/DaoCloud/public-image-mirror) ★14912 [`mirror`] [`speedup`]  
  为容器工具提供公共镜像加速下载的镜像仓库，由DaoCloud维护。它通过代理或缓存常见公共镜像源，解决部分地区无法直接访问Docker Hub等镜像仓库的问题，降低拉取超时和网络阻塞。典型用法是在Docker守护进程的镜像源配置中填入该服务地址，即可自动转向加速通道。主要适合开发者、CI/CD流水线和自建Kubernetes集群，当官方镜像来源不稳定时，能显著提升镜像拉取效率。无需注册，开放使用，覆盖面以主流开源项目镜像为主。
- [hq450/fancyss](https://github.com/hq450/fancyss) ★13709 [`arm`] [`koolgame`] [`merlin`] [`naiveproxy`] [`shadowsocks`] [`shadowsocks-rust`] [`ss`] [`ssr`] [`trojan`] [`v2ray`] [`x64`] [`xray`]  
  用于在基于华硕梅林固件的路由器上搭建科学上网环境，通过安装插件实现全局透明代理，让连接路由器的所有设备无需单独配置即可访问境外网络资源。它通常支持 V2Ray、ShadowSocks、Trojan 等主流代理协议，并提供节点管理、流量统计、规则分流等常见功能。适合希望从网络层统一解决访问受限问题的用户，特别适合家庭或小型办公网络中使用华硕路由器的场景。插件需要路由器具备相应固件支持，并依赖外部提供的节点信息才能正常工作。
- [myspaghetti/macos-virtualbox](https://github.com/myspaghetti/macos-virtualbox) ★13522 [`bash-script`] [`macos`] [`macos-installer`] [`macos-virtual-machine`] [`virtualbox`] [`virtualbox-efi`]  
  用于在VirtualBox中自动创建和配置macOS虚拟机的脚本和配置集合，省去手动获取系统镜像、调整引导参数、修改分辨率等繁琐步骤。主要面向需要在非Mac硬件上体验或测试macOS的开发者与普通用户，常见于软件兼容性测试、自学macOS环境或临时构建开发环境等场景。仓库提供较明确的安装说明和可调选项，支持在Windows、Linux等宿主机上运行，帮助解决macOS无法直接安装于普通PC的兼容性问题。不过实际成功率取决于硬件、VirtualBox版本和系统镜像来源，属于需要一定动手能力的自助型开源方案。
- [bin456789/reinstall](https://github.com/bin456789/reinstall) ★12808 [`alpine`] [`alpine-linux`] [`boot`] [`distro`] [`linux`] [`linux-distribution`] [`liveos`] [`netboot`] [`netinst`] [`netinstall`] [`operating-systems`] [`os`] [`reinstall`] [`shell-script`] [`vps`] [`windows`]  
  用于在 VPS 或云服务器上一键重装系统，支持常见 Linux 发行版和 Windows，适合需要更换系统、纯净安装或修复引导的场景。通过预置脚本和镜像源自动完成网络安装，通常由 SSH 远程执行，无需进入救援模式，操作简洁且对新手友好。
- [oh-my-fish/oh-my-fish](https://github.com/oh-my-fish/oh-my-fish) ★11375 [`fish`] [`fishshell`] [`fishshell-framework`] [`hacktoberfest`] [`oh-my-fish`] [`oh-my-zsh`] [`omf`] [`prompt`] [`shell`] [`terminal`]  
  用于增强 Fish shell 的插件管理框架，通过统一的命令简化主题、插件和函数的安装与更新，适合希望高效管理 Fish 配置的开发者。它提供了一套预设的目录结构和加载机制，让用户快速启用社区贡献的插件和主题，同时保持配置整洁。通常适合经常使用命令行、想扩展 Fish 功能或定制提示符外观的场景，也能帮助新用户避免手动配置的繁琐过程。
- [YanG-1989/m3u](https://github.com/YanG-1989/m3u) ★11370  
  维护并分享可订阅的 m3u 格式直播源列表，主要面向 IPTV 播放器、网络电视盒及支持流媒体协议的手机应用。内容涵盖国内外电视频道、地方台及网络频道，用户通过复制链接或下载文件即可导入播放，解决传统有线电视覆盖面窄、费用高的问题。适合希望自主选择直播源、追求免费或低成本观看体验的技术用户，也常被开发者用于测试播放器兼容性或搭建个人影视服务。
- [angristan/wireguard-install](https://github.com/angristan/wireguard-install) ★11242 [`linux`] [`nat`] [`privacy`] [`vpn`] [`wireguard`]  
  angristan/wireguard-install 是一个用于在 Linux 服务器上一键部署 WireGuard VPN 的交互式安装脚本，旨在免去手动编写配置文件和生成密钥的繁琐流程。运行脚本后，它会自动检测系统环境、配置服务端网络参数，并生成可导入客户端的二维码或配置文件，同时提供添加、撤销客户端等管理功能。通常适合需要快速搭建个人私有 VPN 或远程访问内网的场景，兼容主流 Debian、Ubuntu 等发行版，也支持无 systemd 的旧系统。对于不熟悉 WireGuard 原始配置的用户，这款脚本能显著降低部署门槛，只需几步即可获得可用的加密加密通道。
- [Gogh-Co/Gogh](https://github.com/Gogh-Co/Gogh) ★10294 [`bash`] [`color-scheme`] [`gnome-terminal`] [`iterm2`] [`linux`] [`mint`] [`pantheon-terminal`] [`shell`] [`terminal`]  
  Gogh 是一款适用于 Linux 终端的配色主题管理工具，提供大量预设色彩方案供用户一键切换。它通过简单的命令行交互即可将主题应用到 GNOME Terminal、Tilix 等常见终端模拟器，也支持自定义颜色组合并导出。适合经常使用终端、希望统一或美化工作环境、减少视觉疲劳的开发者，尤其方便快速试验不同配色而无需手动逐项修改终端配置。
- [EtherDream/jsproxy](https://github.com/EtherDream/jsproxy) ★9328  
  一种基于浏览器的在线代理工具，利用 Service Worker 和边缘计算能力在客户端完成请求转发，无需安装插件或客户端软件。用户打开部署后的代理页面即可访问目标网站，通常用于绕过网络封锁或访问地理位置受限的资源。该方案把转发逻辑放在 JavaScript 中，便于部署到静态托管和 CDN 上，适合个人搭建轻量级代理入口，也适合作为学习浏览器代理实现原理的参考。项目本身主要解决静态环境下动态代理的可行性问题，强调低成本与易用性。
- [babun/babun](https://github.com/babun/babun) ★8536  
  为 Windows 用户提供开箱即用的类 Unix 命令行环境，基于 Cygwin 预配置了大量常用工具和 Zsh 终端，免去手动安装配置的繁琐。适合需要在 Windows 上使用 grep、vim、curl、git 等命令，或希望获得接近 Linux/macOS 的 shell 体验的开发者。安装简单，还内置包管理器用于扩展组件，常用于搭建跨平台开发环境或日常自动化脚本操作。
- [zsh-users/antigen](https://github.com/zsh-users/antigen) ★8352 [`package-manager`] [`plugin-manager`] [`shell`] [`zsh`]  
  Antigen 是一款面向 Zsh 的插件管理器，主要用于简化 shell 配置文件的维护，集中管理插件和主题。它能从 oh-my-zsh、GitHub 等来源加载所需功能，并自动处理依赖与更新，省去手动克隆和配置的麻烦。典型场景是开发者想按需启用 Zsh 扩展、优化启动速度，同时保持配置清晰可复现。通常适合希望快速搭建或迁移命令行环境、避免配置混乱的 Zsh 用户。
- [teddysun/shadowsocks_install](https://github.com/teddysun/shadowsocks_install) ★8248 [`shadowsocks`] [`shadowsocks-libev`] [`shadowsocks-server`] [`shadowsocksr`] [`ssr`]  
  用于在 Linux 服务器上一键安装和配置 Shadowsocks 代理服务，提供多种后端实现（如 Python、libev、Go、Rust）的安装脚本，覆盖安装、卸载、查看配置等操作。通常适合需要在 VPS 上快速部署科学上网工具的用户，或者用于替代商业 VPN、自建加密代理通道的场景。脚本自动完成依赖下载、编译安装和系统服务配置，避免手动操作带来的繁琐和出错，同时支持 TCP 等性能优化参数，是个人搭建代理服务器时常用的自动化工具。
- [fbelavenuto/arpl](https://github.com/fbelavenuto/arpl) ★7282  
  用于在非群晖官方硬件（如DIY NAS、普通PC）上安装和引导群晖DSM系统的加载工具，通常被称为黑群晖引导。它通过自动识别硬件环境并生成对应的引导配置，替代繁琐的手动修改流程，并提供交互式菜单或网页界面来选择引导参数、调整系统版本等。主要服务于希望利用现有机箱和主板自行组建NAS的用户，能明显降低自组群晖平台时的起步门槛和配置难度。
- [spiritLHLS/ecs](https://github.com/spiritLHLS/ecs) ★7139 [`almalinux`] [`arch`] [`astralinux`] [`bench-script`] [`benchmark`] [`cdn`] [`centos`] [`checker`] [`debian`] [`fedora`] [`goecs`] [`ipv6`] [`lemonbench`] [`openai`] [`oracle-linux`] [`rockylinux`] [`speedtest`] [`sysbench`] [`ubuntu`] [`vps`]  
  通常用于一键评测服务器的脚本工具，集中提供硬件配置、CPU 与内存性能、磁盘读写、国内外网络速度及路由回程等多项测试。用户购买或租赁 VPS 后可快速获得综合性能数据，便于对比机房线路质量和判断是否满足需求。整个过程通过命令行自动完成，适合需要评估云服务器或独立主机性能的开发者和运维人员。
- [xykt/NetQuality](https://github.com/xykt/NetQuality) ★5526  
  用于快速评估和诊断网络连接质量，通过执行测试获取延迟、丢包率、下载速度等关键指标。通常适合服务器管理员、网络运维人员以及需要对比不同网络环境的用户，能够帮助定位网络瓶颈、比较运营商线路或验证 VPS 服务质量。命令设计简洁，可在终端中直接运行，适用于 Linux 等常见服务器系统，输出结果清晰易读。该工具无需复杂配置，即可生成直观的网络质量报告，便于日常网络健康检查。
- [teddysun/across](https://github.com/teddysun/across) ★5368 [`auto-transfer-backup`] [`backup`] [`bbr`] [`benchmark`] [`kms`] [`l2tp`] [`shell`] [`unixbench`]  
  这是一个集成多种代理工具的一键安装脚本库，主要用于在 Linux 服务器上快速部署 Shadowsocks、V2Ray、Xray 等常见科学上网服务，并附带配置管理、流量统计和系统优化功能。通常适合需要快速搭建翻墙服务或自建代理节点的用户，通过简单命令即可完成安装和后续配置，免去手动编译和复杂设置的麻烦，同时支持 TCP 与 UDP 转发，满足日常加速和访问需求。
- [lmc999/RegionRestrictionCheck](https://github.com/lmc999/RegionRestrictionCheck) ★5120  
  用于检测服务器 IP 对主流流媒体服务解锁情况的脚本，覆盖 Netflix、Disney+、HBO Max 等众多平台，可检查是否有版权限制或地区锁定。适合 VPS 用户、代理服务提供者快速评估节点能否观看特定区域内容，辅助选择服务器或排查解锁失效问题。脚本基于 bash，简单易用，通过远程执行即可获得清晰的区域检测结果。
- [eooce/Sing-box](https://github.com/eooce/Sing-box) ★5013 [`argo`] [`hysteria2`] [`oneclick`] [`reality`] [`serv00`] [`sing-box`] [`tuic`] [`tunnel`] [`vmess-ws-tls`]  
  Sing-box 是一款通用代理工具，主要用于网络流量转发与访问受限资源的突破。它同时提供客户端和服务端能力，支持多种常见代理协议与灵活的路由规则配置，适合搭建个人翻墙服务、远程局域网接入或作为服务器端流量中转工具。用户可通过配置文件精细控制代理策略，以满足不同网络环境下的安全通信需求。该仓库通常面向需要自建代理服务的用户，帮助解决网络审查、地理位置限制及私密连接等问题。
- [Nyr/wireguard-install](https://github.com/Nyr/wireguard-install) ★4924 [`almalinux`] [`bash`] [`centos`] [`debian`] [`fedora`] [`rockylinux`] [`shell`] [`ubuntu`] [`vpn`] [`wireguard`]  
  一个开箱即用的 WireGuard VPN 部署脚本，用于在各种 Linux 发行版上快速搭建 WireGuard 服务端与客户端配置。通过交互式向导自动生成密钥对、设置内网 IP、配置防火墙和 NAT 转发，无需手动编辑复杂配置文件。适合个人或小型团队快速构建加密远程访问通道，常用于安全连接云服务器、异地组网或规避地理限制。脚本简洁透明，支持重复运行添加多个客户端，并内置卸载与查看配置功能，是 WireGuard 社区中广泛使用的轻量级部署方案。
- [mitchellkrogza/nginx-ultimate-bad-bot-blocker](https://github.com/mitchellkrogza/nginx-ultimate-bad-bot-blocker) ★4776 [`adware`] [`bot-blocker`] [`bots`] [`gambling-filter`] [`malware`] [`nginx`] [`nginx-server`] [`porn-filter`] [`referer-blocker`] [`referrer-spam`] [`scanners`] [`spam-blocker`] [`spam-filtering`] [`spam-prevention`] [`spam-protection`] [`spam-referers`] [`spam-referrer-blocker`] [`spambot-security`] [`spyware`] [`vulnerability-scanners`]  
  为 Nginx 服务器提供一套强效的恶意机器人拦截方案，通过定期更新的黑名单和规则配置，阻止恶意爬虫、垃圾邮件发送者、漏洞扫描器及不良 IP 段访问站点。典型使用场景是部署于高流量网站或暴露在公网的应用前，能明显减少恶意请求、保护后端资源并降低日志噪音。适合需要快速集成并持续防御恶意流量的 Nginx 管理员。
- [ToyoDAdoubi/doubi](https://github.com/ToyoDAdoubi/doubi) ★4690  
  Linux VPS 一键脚本合集，用于简化服务器基础环境和网络工具的部署。涵盖常见代理服务（如 Shadowsocks、V2Ray）的一键安装、TCP 加速模块（如 BBR、锐速）的启用，以及系统参数优化等操作。用户只需复制执行命令，即可自动完成下载、配置和启动流程，特别适合购买海外服务器后快速搭建网络通道或改善连接质量。脚本以 Shell 编写，主要面向对命令行不陌生但希望提升效率的运维或普通用户，使用前建议根据服务器系统版本挑选对应脚本。
- [jpetazzo/pipework](https://github.com/jpetazzo/pipework) ★4254  
  用简洁的 shell 脚本为 Linux 容器（如 Docker）实现自定义网络配置。它能够将物理网卡、VLAN 或网桥直接接入容器，并支持设置固定 IP 和子网，满足多容器互联、跨主机组网或连接外部网络等需求。该工具无需常驻服务，依赖少，适合在运维或开发环境中快速调整容器网络，弥补默认网络配置的灵活度不足。
- [xubiaolin/docker-zerotier-planet](https://github.com/xubiaolin/docker-zerotier-planet) ★4072 [`dockerfile`] [`planet`] [`self-host-zerotier`] [`self-hosted`] [`zerotier`] [`zerotier-network`]  
  用于构建自有的 ZeroTier 网络 Planet 服务器，借助 Docker 容器简化部署和运维。它允许用户创建独立的 ZeroTier 根服务器，替代官方公共 Planet，从而降低延迟、增强隐私并自主控制网络。典型场景包括跨地域设备组网、异地办公互联、远程访问内部服务等。通常适合对网络自主权有较高要求的开发者或企业，通过自建 Planet 实现更稳定、安全的虚拟局域网。项目面向有一定 ZeroTier 使用经验的用户，提供更灵活的网络配置能力。
- [vdsm/virtual-dsm](https://github.com/vdsm/virtual-dsm) ★3973 [`docker`] [`docker-image`] [`dsm`] [`kvm`] [`qemu`] [`synology`] [`synology-docker`] [`synology-dsm`] [`synology-nas`]  
  用于在虚拟化环境中运行群晖 DSM 系统的工具，通常借助 QEMU 模拟硬件，并以容器方式封装，便于用户在没有物理群晖设备时体验或测试 DSM 功能。典型场景包括开发调试、应用兼容性验证，以及快速搭建虚拟 NAS 环境。主要用于解决实体设备成本高、不易获取的问题，适合个人用户或小团队在本地服务器上模拟运行群晖系统。该工具一般需要配合 Docker 使用，并依赖宿主机 KVM 等虚拟化能力来获得较好性能。
- [BrowserBox/BrowserBox](https://github.com/BrowserBox/BrowserBox) ★3898 [`browser`] [`cdr`] [`chrome`] [`cobrowsing`] [`cybersecurity`] [`embeddable`] [`hidden-services`] [`multiplayer`] [`onion-service`] [`proxy-server`] [`rbi`] [`remote-browser-isolation`] [`remote-browsers`] [`reverse-proxy`] [`sanitization`] [`tor`] [`web-browser`] [`web-isolation`] [`webrtc`] [`zero-trust`]  
  用于在网页中嵌入一个完整可交互的浏览器，通过流式传输将远程浏览器界面实时回传，让用户无需离开当前页面即可操作独立的浏览器实例。核心价值在于提供安全隔离的浏览环境，适合用于处理不受信任的链接、多账号并行操作、远程协同浏览，以及为 Web 应用集成浏览器能力。通常结合容器和 WebRTC 技术实现，支持高并发和多会话管理，能够帮助开发者在自己的基础设施上构建类似云浏览器的服务。
- [firehol/blocklist-ipsets](https://github.com/firehol/blocklist-ipsets) ★3897 [`abuses`] [`attacks`] [`blocklists`] [`command-and-control`] [`ipset`] [`ipset-lists`] [`malware`]  
  用于生成和维护面向网络防火墙的恶意 IP 地址集合，汇总多个公开威胁情报源的扫描器、僵尸网络、垃圾邮件来源等恶意 IP，输出为 ipset 规则格式。通过配合 iptables 或 nftables 等防火墙工具，可实现对恶意流量的自动封禁和过滤。仓库定期更新数据，并提供分类清晰的子列表，适合需要针对已知威胁源做快速安全防护的网络管理员，也可用于安全研究、入侵检测以及流量审计等场景。
- [leitbogioro/Tools](https://github.com/leitbogioro/Tools) ★3888  
  个人维护的通用工具集，收录了作者在开发和系统管理中积累的脚本、配置及小型实用程序，主要用于解决重复性操作和日常自动化需求。适合开发者或运维人员直接克隆仓库，按需查看和调用其中的脚本，也适合作为个人工具库的参考。典型方向可能包括环境部署、批量处理、日志分析和网络调试等，但具体功能与用法应以仓库内实际文件为准。
- [mvscode/frps-onekey](https://github.com/mvscode/frps-onekey) ★3500 [`debian`] [`frp`] [`frps`] [`linux`] [`nat`] [`remote-control`] [`shell`] [`ubuntu`]  
  用于快速部署 frp 服务端（frps）的一键脚本，主要面向需要自建内网穿透服务的用户。通过简单命令即可完成 frps 的下载、配置、启动及开机自启设置，省去手动编译或配置的繁琐过程。通常适合在云服务器或拥有公网 IP 的主机上使用，搭配 frpc 客户端即可实现从外部访问内网设备，例如远程桌面、SSH 或访问内部 Web 服务。脚本一般支持修改端口、认证密钥等基本参数，并能自动识别主流 Linux 发行版，降低入门门槛。适合个人开发者或小型团队快速搭建稳定可控的内网穿透节点，避免依赖第三方公共服务器。
- [AuxXxilium/arc](https://github.com/AuxXxilium/arc) ★3444 [`arc`] [`arc-loader`] [`diskstation`] [`dsm`] [`nas`] [`network`] [`redpill`] [`redpill-load`] [`storage`] [`synology`] [`xpenology`]  
  该项目主要围绕 Arc 浏览器的扩展与定制需求，提供辅助脚本或配置方案，帮助用户实现更灵活的操作和界面调整，适合希望深度优化浏览体验的开发者或高频用户，具体功能依赖于仓库内维护的工具集。
- [tom-snow/wechat-windows-versions](https://github.com/tom-snow/wechat-windows-versions) ★3249  
  收集并分享微信 Windows 客户端的历代版本安装文件，主要方便用户下载旧版微信。常用于需要降级或锁定特定版本，以解决新版本带来的兼容性问题、功能改变或使用习惯差异，也适合测试人员或安全研究人员对比各版本行为。仓库按版本号归类并提供下载链接，无需额外配置，适合个人或企业快速回滚，也可作为可靠的历史版本来源。
- [transcode-open/apt-cyg](https://github.com/transcode-open/apt-cyg) ★3015  
  这是用于在 Cygwin 环境下管理软件包的命令行工具，相当于把 Debian 的 apt 体验带到了 Windows。它可以直接从命令行搜索、安装、升级和卸载 Cygwin 软件包，并自动解析依赖关系，省去手动运行 setup.exe 的繁琐流程。对于习惯 Linux 包管理操作、希望在 Windows 上获得类似 apt 使用体验的开发者或运维人员，apt-cyg 是一个轻量实用的选择。它通常适合编写脚本批量安装工具链或自动配置开发环境，但需要注意原版项目已停止维护，使用时可能需要调整软件源。
- [webinstall/webi-installers](https://github.com/webinstall/webi-installers) ★2965 [`brew`] [`hacktoberfest`] [`linux`] [`macos`] [`windows-10`] [`wsl`] [`wsl-ubuntu`] [`wsl2`]  
  提供常用开发工具的一键安装脚本，用户通过简单的 curl 命令或 webi 指令即可快速安装 Node.js、Go、Rust 等工具。它支持 Linux、macOS 和 Windows 常见 shell，特别适合在新环境中快速搭建开发环境，或在没有 root 权限的服务器、容器内安装软件。所有软件默认安装到用户目录，不污染系统级路径，便于统一不同平台上的工具版本，也简化了升级和卸载操作。
- [teddysun/lamp](https://github.com/teddysun/lamp) ★2919 [`almalinux`] [`amazonlinux2`] [`apache`] [`centos`] [`debian`] [`lamp`] [`mariadb`] [`php`] [`rhel`] [`rockylinux`] [`shell`] [`ubuntu`]  
  用于在 Linux 服务器上快速部署 LAMP 环境（Apache、MySQL/MariaDB、PHP）的一键安装脚本，支持多种主流发行版和版本自定义，提供组件卸载与升级管理功能，适合需要自动化搭建 Web 服务、节省手动配置时间的运维人员和开发者使用。
- [91yun/serverspeeder](https://github.com/91yun/serverspeeder) ★2869  
  serverspeeder 主要用于 Linux 服务器上的网络加速，通过优化 TCP 拥塞控制算法来提升数据传输速度和降低连接延迟。它通常部署在 VPS 或独立服务器上，适合需要改善跨境或高延迟链路质量的场景，能够有效缓解丢包和带宽利用率不足的问题。该工具以第三方补丁或内核模块的形式运行，适合有一定服务器管理经验的用户进行安装与配置，并常用于游戏加速、远程办公或科学上网等需要稳定高速连接的用途。
- [oneinstack/oneinstack](https://github.com/oneinstack/oneinstack) ★2454 [`jdk`] [`lamp`] [`lemp`] [`lnmh`] [`lnmp`] [`lnmpa`] [`lnmt`] [`mariadb`] [`memcached`] [`mysql`] [`nginx`] [`oneinstack`] [`openresty`] [`percona`] [`php`] [`phpmyadmin`] [`pureftpd`] [`redis`] [`tengine`] [`tomcat`]  
  OneinStack 是一款面向 Linux 服务器的一键 Web 环境部署工具，主要用于快速搭建 LNMP、LAMP 等组合架构。它通过自动化编译安装和配置 Nginx、Apache、Tomcat、MySQL、MariaDB 以及 PHP 等核心组件，并支持不同版本的灵活选择。典型的应用场景是服务器初始化后的环境搭建，适合需要快速上线网站的运维人员或开发者。此外，它还提供虚拟主机管理、SSL 证书申请、安全防护等常见辅助功能，帮助简化日常维护工作。
- [ylx2016/Linux-NetSpeed](https://github.com/ylx2016/Linux-NetSpeed) ★2414  
  Linux-NetSpeed 是一套用于优化 Linux 服务器网络传输性能的脚本合集，主要用于一键部署 BBR、锐速等 TCP 拥塞控制算法，提升跨国或高延迟线路下的下载速度与连接稳定性，适合站长、游戏运维和出海业务在 VPS 上快速启用网络加速功能。
- [huan/docker-wechat](https://github.com/huan/docker-wechat) ★2330 [`docker`] [`wechat`]  
  通过 Docker 容器运行微信桌面版，解决 Linux 系统下无法直接安装官方客户端的问题。提供隔离的微信运行环境，支持通过浏览器或 VNC 远程访问，适合在服务器或云主机上常驻微信，便于自动化管理和多账号隔离。通常使用 Wine 技术模拟 Windows 环境，并内置中文输入支持，适合个人或团队在无桌面环境时保持微信在线。
- [flucont/btcloud](https://github.com/flucont/btcloud) ★2080  
  面向宝塔面板的云端管理工具，主要用于集中管理和控制多台服务器上的宝塔环境。通常适合需要批量部署网站、统一配置、远程维护多个节点的用户或团队，能够减少重复操作并提升运维效率。该项目可能围绕宝塔面板接口进行二次封装或代理，提供更便捷的云端访问方式，具体功能以仓库内说明或文档为准。
- [Aurora-Admin-Panel/deploy](https://github.com/Aurora-Admin-Panel/deploy) ★1990 [`admin-panel`] [`gost`] [`iptables`] [`port-forwarding`]  
  提供 Aurora 管理后台的自动化部署方案与运维配置，主要面向需要快速搭建或更新该后台的环境。通过预置的部署脚本与容器化支持，简化从仓库代码到运行服务的完整流程，覆盖开发、测试和生成环境的常见需求。适合团队内部统一部署标准、减少手工操作失误，也适合与持续集成流程结合，实现提交后自动发布。通常涉及服务器配置、依赖安装和进程管理，帮助运维或开发人员更稳定地维护 Aurora 管理面板。
- [neoFelhz/neohosts](https://github.com/neoFelhz/neohosts) ★1763 [`ad`] [`adblock`] [`banad`] [`host`] [`hosts`] [`neohosts`]  
  为客户提供一套整合的hosts文件订阅服务，旨在屏蔽广告、恶意软件、钓鱼网站等常见不良域名，帮助提升浏览器与日常网络访问的速度和安全系数。用户可直接获取更新后的hosts规则，适用于个人电脑、路由器或服务器等需要实现全局域名过滤的场景。项目通常适合作为轻量级的网络净化方案，尤其适合希望避免安装复杂扩展、追求低资源占用的人群。维护者会定期同步上游规则，确保拦截覆盖面与时效性，同时保留一定的自定义空间。由于hosts机制本身天然具备零额外进程、无需后台服务的特性，该方案对旧设备或嵌入式环境也较为友好。
- [hwdsl2/openvpn-install](https://github.com/hwdsl2/openvpn-install) ★1726 [`bash`] [`centos`] [`debian`] [`easyrsa`] [`encryption`] [`installer`] [`ipv6`] [`linux`] [`network`] [`openvpn`] [`openvpn-server`] [`pki`] [`privacy`] [`raspberry-pi`] [`security`] [`self-hosted`] [`ubuntu`] [`vpn`] [`vpn-client`] [`vpn-server`]  
  用于在 Linux 服务器上快速部署 OpenVPN 的自动化脚本，支持主流发行版如 Ubuntu、Debian、CentOS 等。它自动完成安装、配置防火墙、生成服务端证书和管理客户端配置，只需通过菜单式交互选择端口与协议即可完成部署。通常适合个人搭建远程访问 VPN 或小型团队安全接入，无需深入掌握 OpenVPN 细节，即可生成便于分发的客户端配置文件。脚本注重安全默认项并提供卸载与日志查看功能。
- [userdocs/qbittorrent-nox-static](https://github.com/userdocs/qbittorrent-nox-static) ★1672 [`bash`] [`bash-script`] [`libtorrent`] [`qbittorrent-nox`] [`static`]  
  提供 qBittorrent-nox 的静态编译版本，将无头模式的 qBittorrent 及其依赖打包成单一可执行文件，用户下载后即可在任何主流 Linux 发行版上直接运行，无需配置运行时库。适用于服务器、NAS 或 VPS 等没有图形界面的环境，通过浏览器访问 Web UI 管理种子任务，实现远程下载和做种。该仓库通常提供构建脚本和自动构建产物，方便用户自行编译或获取最新版本，解决了手动安装依赖和跨发行版兼容性问题。
- [ellermister/mtproxy](https://github.com/ellermister/mtproxy) ★1656 [`mtp`] [`mtproto`] [`mtproto-proxy`] [`mtproxy`] [`telegram`] [`tls`]  
  MTProxy 是一款基于 Telegram 官方 MTProto 协议的代理服务端程序，这个仓库提供了简化部署和管理的脚本，主要用于在 Linux 服务器上快速搭建代理服务，帮助用户安全访问 Telegram。它通常支持伪装 TLS 流量，使代理流量更难以被识别和干扰，适合个人或小型团队自建代理节点使用。通过该脚本，用户无需手动配置复杂的依赖和参数，即可完成安装、启动、配置端口和获取连接参数等操作，降低使用门槛。
- [lmc999/auto-add-routes](https://github.com/lmc999/auto-add-routes) ★1577  
  自动添加路由规则，主要用于解决多代理或多网卡环境下流量分流失效的问题。项目在路由器如OpenWrt上运行，根据预设策略自动写入或更新路由表，让国内IP段直连、境外流量走代理，或让特定设备绕过默认网关。适合旁路由、透明网关和科学上网用户，可省去手动维护大量静态路由的麻烦，并支持开机自动生效与定时同步规则。整体上是面向网络路由优化场景的实用工具，通常基于Linux路由机制实现。
- [oooldking/script](https://github.com/oooldking/script) ★1506  
  用于服务器性能测试与网络评估，提供一键执行的基础检测脚本，通常适合站长、运维或VPS用户快速了解机器配置、磁盘读写、带宽速度及延迟等关键指标。脚本以轻量、易用为特点，可直接在终端运行并输出汇总结果，帮助用户判断服务器性能是否满足预期。此外还可能包含一些系统环境信息收集与便捷工具，整体偏向实用型运维辅助。由于仓库内容可能随版本更新，具体功能以实际代码为准。
- [myxuchangbin/dnsmasq_sniproxy_install](https://github.com/myxuchangbin/dnsmasq_sniproxy_install) ★1443 [`dns-server`] [`dnsmasq`] [`netflix`] [`shell`] [`sniproxy`]  
  提供一键部署 dnsmasq 和 sniproxy 的安装脚本，用于搭建基于域名的 DNS 解析与 TLS 代理转发环境。dnsmasq 负责将目标域名解析到本机或指定 IP，sniproxy 依据客户端 TLS SNI 信息将请求转发到实际目标服务器，能够有效缓解域名被 DNS 污染或访问受限的问题。适合需要透明分流特定域名或自建代理网关的用户，常见于网络优化、跨境访问等场景，脚本通常覆盖依赖检测、配置生成与服务启动流程，便于快速部署。
- [wjz304/arpl-zh_CN](https://github.com/wjz304/arpl-zh_CN) ★1322  
  用于在普通个人电脑上引导安装和运行群晖 DSM 系统的加载工具，针对中文用户进行了全面汉化。它简化了黑群晖引导镜像的配置与生成流程，通常适合希望利用现有硬件搭建 NAS 存储服务、但又不想购买官方设备的用户。该工具通过菜单式交互，帮助用户选择机型、内核版本和驱动选项，从而降低新手构建黑群晖的技术门槛。如需维护和升级引导配置，也能通过此汉化版本更直观地完成操作。
- [OussamaMater/Laravel-Tips](https://github.com/OussamaMater/Laravel-Tips) ★1316 [`laravel`] [`pestphp`] [`php`] [`tips`]  
  这份资源汇总了 Laravel 框架开发中的实用技巧与最佳实践，覆盖模型、查询构造器、路由、控制器、中间件、验证、Blade 模板、安全及性能优化等常用环节。通过代码示例与对比，帮助开发者避免常见陷阱，写出更简洁、可维护的代码。主要面向 Laravel 初学者和有经验的开发者，适合在日常项目开发中作为速查手册，提升编码效率与代码质量。
- [jerry048/Dedicated-Seedbox](https://github.com/jerry048/Dedicated-Seedbox) ★1225  
  用于自动部署和配置专用种子盒（Seedbox）的脚本或工具集，帮助用户在一台独立服务器上快速搭建完整的种子下载与保种环境。其核心功能涵盖下载客户端的安装配置、Web 管理界面的启用，以及针对高速上传下载的初步系统调优，省去手工逐项设置的繁琐过程。典型场景是个人租用独立服务器后，借此快速获得一个可远程访问、全天候在线的种子下载服务，用于 PT 站保种或获取大体积资源，并能方便地将下载文件传输回本地或其他存储设备。适合不熟悉服务器运维但又需要高性能种子盒的用户。
- [todo-for-ai/todo-for-ai](https://github.com/todo-for-ai/todo-for-ai) ★1176 [`ai-coding-tools`] [`cursor`] [`kiro`] [`todo4ai`] [`trae`] [`windsurf`]  
  todo-for-ai 为 AI 代理或智能体提供待办事项管理能力，主要用于解决 AI 在执行多步任务时缺乏结构化任务追踪的问题。它通常支持任务的创建、更新、完成和查询等基本操作，并可能通过接口或自然语言交互与各类 AI 应用集成，使智能助手能够持续维护和推进任务清单。典型使用场景包括个人助理、自动化工作流以及需要跟踪长周期目标的人机协作系统，适合希望在自有 AI 项目中快速引入任务管理能力的开发者。
- [MeowLove/Network-Reinstall-System-Modify](https://github.com/MeowLove/Network-Reinstall-System-Modify) ★1103  
  用于通过网络一键重装或更换服务器的 Linux 系统，尤其适合无面板或仅有原版系统的 VPS、独立服务器场景。它能在不进入救援模式的前提下自动下载、写入指定系统镜像，并修复网络配置，确保新系统可正常连接。支持众多常见发行版及自定义镜像地址，操作简单，可解决机房环境下手动 dd 或安装系统难的问题。通常适合需要批量重装、迁移系统或从预设模板切换到纯净系统的运维人员使用。
- [atrandys/trojan](https://github.com/atrandys/trojan) ★1056  
  atrandys/trojan 是一套用于快速部署 Trojan 代理服务的一键脚本集合，主要面向需要科学上网或自建安全代理隧道的用户和站长。它简化了在 Linux 服务器上安装、配置和守护 Trojan 服务的流程，常配合域名、TLS 证书实现流量伪装，帮助用户绕过网络封锁并保护传输内容。典型场景包括个人翻墙、规避深度包检测以及搭建多用户代理网关。该仓库通常适合具备基础服务器操作经验、希望低成本自建高可用代理节点的使用者，其脚本兼顾了易用性与安全性。
- [mayankk2308/purge-wrangler](https://github.com/mayankk2308/purge-wrangler) ★1008 [`amd`] [`apple`] [`catalina`] [`egpu`] [`graphics`] [`high-sierra`] [`macos`] [`mojave`] [`nvidia`] [`nvidia-egpus`] [`patch`] [`purge`] [`thunderbolt`] [`unblocker`] [`wrangler`]  
  Purge-wrangler 是面向 macOS 用户的开源实用工具，核心用途是管理外接图形卡的驱动加载，尤其针对使用 AMD 独立显卡的 Mac 机型。它通过清除或屏蔽系统自带的 AMD 显卡驱动，解决系统升级后外接 GPU 无法正常输出、黑屏或内核崩溃等问题。典型使用场景是运行 macOS Mojave 及以上版本、通过雷电接口连接 eGPU 的用户，在驱动冲突导致显示异常时执行修复。工具提供命令行交互，操作简单，适合有一定命令行经验的技术用户。需要留意版本兼容性，使用时需关闭系统安全设置。
- [philcook/brew-php-switcher](https://github.com/philcook/brew-php-switcher) ★1007 [`homebrew`] [`php`] [`shell`]  
  在 macOS 上管理多个 PHP 版本并快速切换的命令行工具，面向使用 Homebrew 安装 PHP 的开发者。它解决不同项目需要不同 PHP 版本时反复修改环境配置的问题，通常适合本地开发场景。核心功能包括列出已安装的 PHP 版本、一键切换当前终端或系统默认的 php 命令指向，并自动更新相关符号链接。操作简单，无需手动编辑路径或重新编译，提高多项目并行开发时的切换效率。
- [stilleshan/frps](https://github.com/stilleshan/frps) ★878 [`frp`] [`frps`] [`frps-docker`]  
  用于搭建 frp 内网穿透服务端（frps），提供快速部署和配置方案，帮助用户将内网服务安全暴露到公网。支持 TCP、UDP、HTTP/HTTPS 等常见协议，适合远程访问家庭或公司内网设备、开发调试、临时演示等场景。项目通常包含配置文件与启动脚本，配合 frp 客户端即可建立穿透隧道，聚焦于服务端，便于自建穿透服务，减少对第三方中继的依赖，提升数据可控性。
- [venshine/decompile-apk](https://github.com/venshine/decompile-apk) ★820 [`android-decompile`] [`apk`] [`apk-decompiler`] [`apk-parser`] [`apktool`] [`bytecode-viewer`] [`classyshark`] [`decompile`] [`dex2jar`] [`jadx`] [`jd-gui`]  
  用于反编译Android APK安装包，将应用中的代码、资源及配置文件还原为可阅读形式，便于理解应用实现逻辑。典型场景包括安全分析、漏洞排查、功能复现和逆向学习。解析结果通常包含Java/Kotlin源码、XML资源及manifest信息，适合在没有原始代码的情况下研究第三方应用结构。该工具面向移动安全研究人员和Android开发者，能够辅助分析权限使用、接口调用及数据存储方式，但需在授权范围内使用。
- [8838/btpanel-v7.7.0](https://github.com/8838/btpanel-v7.7.0) ★749  
  该仓库存放的是宝塔面板7.7.0版本的代码，宝塔面板是一款面向Linux服务器的Web端管理工具，通过浏览器即可完成网站创建、数据库管理、文件操作、计划任务设置等日常运维工作，并支持一键部署Nginx、MySQL、PHP等常见运行环境。它主要服务于独立站长和运维人员，帮助不熟悉命令行操作的用户通过可视化界面管理服务器，提升部署和维护效率。该版本通常被用于搭建自用的服务器管理平台，或作为基础进行二次开发与功能定制。
- [cxf-boluo/magisk_All](https://github.com/cxf-boluo/magisk_All) ★587  
  集中整合 Magisk 相关的模块、脚本和资源，为已 root 的安卓设备提供一站式下载与安装体验。涵盖系统美化、性能调优、广告拦截、隐私增强等常见用途，并可能包含自动更新或批量部署功能。适合需要高效管理多个 Magisk 模块的用户，解决模块分散、来源不一、难以统一配置的问题。使用前需确保设备已正确安装 Magisk 框架，且模块版本与系统兼容。
- [FunctionClub/MTProxy-Bash](https://github.com/FunctionClub/MTProxy-Bash) ★437  
  MTProxy-Bash 提供一套 Bash 脚本，用于在 Linux 服务器上快速部署和管理 Telegram 官方 MTProxy 代理服务。它主要解决用户无法直接连接 Telegram 的问题，通过自动化配置流程，省去手动编译、生成密钥和设置防火墙的繁琐步骤。通常适合需要自行搭建代理的个人或小型团队，只需执行命令即可完成安装、启动和简单维护，并支持查看运行状态。该脚本面向有 VPS 操作经验但希望简化部署过程的用户。
- [cutelua/mtg-dist](https://github.com/cutelua/mtg-dist) ★436 [`mtg`] [`mtproto`] [`mtproxy`] [`telegram`]  
  该仓库用Lua编写，以mtg为切入点提供一套发行分发方案，通常用于游戏资源或扩展包的打包与部署。它解决了手动组织多个文件、依赖配置繁琐的问题，适合开发者或玩家快速集成和更新内容，尤其在需要跨环境复用的场景下能显著简化流程。通过脚本自动化处理，使目标用户无需深入细节即可完成安装。
- [haiwen/seafile-server-installer-cn](https://github.com/haiwen/seafile-server-installer-cn) ★368  
  用于在 Linux 服务器上快速部署 Seafile 私有云存储，面向中文用户提供一键式安装和配置服务。脚本自动处理环境依赖、数据库初始化、服务启动等繁琐步骤，降低了自建网盘的技术门槛。通常适合需要搭建企业内部文件同步与共享平台、个人私有云存储，或希望快速体验 Seafile 完整功能的场景。该安装器支持主流发行版，并针对中文环境进行了优化，可减少手动配置错误，帮助用户更高效地完成部署。
- [gyli/Blocklist](https://github.com/gyli/Blocklist) ★308 [`chrome-extension`]  
  用于维护和分发广告、追踪器及恶意域名或IP的黑名单集合，供内容拦截工具（如Pi-hole、AdGuard等）订阅使用。通过定期更新规则列表，帮助用户屏蔽在线广告、防止隐私追踪并降低恶意软件感染风险。适合家庭网络管理、企业内网过滤和安全防护场景。规则通常按类别组织，支持自动更新，可与主流DNS过滤服务无缝集成。用户可自行选择启用特定类别，灵活平衡拦截强度与正常浏览体验。
- [uxh/superspeed](https://github.com/uxh/superspeed) ★280  
  用于快速测试 Linux 服务器到国内外多个节点的网络下载速度，常被称为 SuperSpeed 测速脚本。只需一行命令即可自动完成测试，并汇总显示每个节点的延迟和下载速率，适合购买 VPS、选择机房或评估线路质量时使用。脚本无需安装额外依赖，兼容多数主流 Linux 发行版，输出结果简洁直观，便于对比不同服务商的网络性能，也常被站长或开发者用来排查服务器带宽瓶颈。
- [wukongdaily/OneKVM](https://github.com/wukongdaily/OneKVM) ★214 [`arm64`] [`debian`] [`fnos`] [`kvm`] [`virt-manager`] [`x86-64`]  
  OneKVM 是一款开源的网络 KVM（键盘、视频、鼠标）远程管理工具，主要帮助用户在操作系统崩溃或没有远程桌面时，通过浏览器直接查看和控制目标主机的屏幕、键鼠操作，实现类似带外管理的效果。它通常依托树莓派等低功耗 ARM 开发板运行，信号接入被控主机后即可独立于系统进行远程维护，适合部署在家庭服务器、NAS 或小型机房里。该项目面向需要低成本、易上手的 IP-KVM 替代方案的用户，尤其适合软路由玩家和 DIY 爱好者远程管理多台设备，解决因系统故障而无法远程运维的问题。
- [Masterchiefm/Aria2Dash](https://github.com/Masterchiefm/Aria2Dash) ★212  
  Aria2Dash 是一个为 Aria2 下载工具设计的 Web 管理面板，主要用于通过浏览器远程控制和管理下载任务。它适合自托管用户或需要集中管理多台机器下载场景的人群，能够简化添加下载链接、查看任务状态和调整并发参数等日常操作，通常与 Aria2 的服务端配合部署，旨在替代命令行操作，提供更直观的图形化体验。
- [zhucaidan/btpanel-v7.7.0](https://github.com/zhucaidan/btpanel-v7.7.0) ★143  
  本仓库提供宝塔面板7.7.0版本的安装包或源代码，用于在Linux服务器上部署图形化的网站管理环境。宝塔面板支持建站、数据库管理、FTP、定时任务等常见运维操作，该版本常被用作固定版本以避免官方强制升级，也适合二次开发或个性化定制。个人站长和运维人员可借其快速搭建可控的服务器管理后台，但由于版本较旧，可能存在未修复的安全漏洞，部署前应做好评估。
- [brighill/registry-mirror](https://github.com/brighill/registry-mirror) ★143 [`docker-compose`] [`docker-mirror`] [`docker-registry`] [`registry-server`]  
  用于搭建镜像加速服务的工具，通过代理和缓存将外部镜像仓库同步到本地或内网，解决容器镜像、软件包等拉取缓慢或无法访问的问题。通常适合开发测试环境或生产内网部署，用于提升依赖获取效率，减少对外部网络的依赖。具体支持的镜像源和配置方式需参考仓库文档。
- [qd201211/Linux-SpeedTest](https://github.com/qd201211/Linux-SpeedTest) ★66  
  Linux-SpeedTest 是一款面向 Linux 系统的网络测速工具，主要用来评估机器的互联网连接质量，包括下载速度、上传速度和延迟表现。它适合运维人员在部署服务器后验证带宽是否达标，也可用于日常排查网络慢或连接不稳定的问题。该工具通常以命令行方式运行，轻量且易于集成到脚本中，方便多次测试或定时记录网络状态。
- [chaofan2685/unlimited_trial_navicat_premium](https://github.com/chaofan2685/unlimited_trial_navicat_premium) ★62  
  这是一个重置 Navicat Premium 试用期的工具，解决软件试用到期后无法继续使用全功能的问题。它通常通过清理或恢复系统中与试用计时相关的记录，使应用程序重新进入试用状态，从而无需付费即可反复使用。主要面向需要长期评估或临时使用该数据库管理工具的开发者，多见于 Windows 环境，能够替代手动修改注册表的繁琐操作。不过这类行为违反软件许可协议，存在授权风险，建议仅在个人学习或合规场景下谨慎使用。
- [wangyaominde/WeDual](https://github.com/wangyaominde/WeDual) ★22  
  该仓库主要解决微信账号多开的问题，通过应用分身或进程隔离方式让同一设备同时运行两个独立微信实例，并保持聊天记录与缓存数据相互隔离。这类方案通常适合在个人账号与工作账号间切换的普通用户，也适用于社群运营或多账号管理场景，核心价值在于提供轻量、便捷的双开体验，而不改变微信原有功能。
- [0769559/v2ray](https://github.com/0769559/v2ray) ★21  
  该仓库提供V2Ray的部署与配置方案，主要用于搭建网络代理服务，通过流量转发机制突破网络访问限制，并加密通信以保护隐私。通常适用于个人或小型团队自建代理节点，典型场景包括访问被屏蔽网站、隐藏真实IP、保障公共网络下的数据传输安全。仓库内容可能涵盖服务端配置、客户端连接参数及日常维护技巧，具体操作需参考仓库内文档。
