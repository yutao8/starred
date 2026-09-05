# Ruby 仓库

- **仓库数量：** 8
- **生成时间：** 2026-09-06 00:00:15

- [discourse/discourse](https://github.com/discourse/discourse) ★47792 [`discourse`] [`ember`] [`forum`] [`javascript`] [`postgresql`] [`rails`] [`ruby`]  
  Discourse 是一款开源的现代论坛与在线社区讨论平台，主要用于搭建高互动性的交流社区、技术支持论坛或产品反馈站。它提供分类、标签、私信、通知、实时刷新、细粒度权限等完整讨论功能，并通过提升新话题可见度、抑制水贴和引导理性回应等机制改善讨论质量。其界面响应迅速，支持移动端友好浏览，适合需要长期沉淀内容和维护用户关系的团队部署自托管服务。技术栈基于 Ruby on Rails 与 Ember.js，通常搭配 PostgreSQL 和 Redis 使用，可通过插件和主题深度定制。
- [greatghoul/remote-working](https://github.com/greatghoul/remote-working) ★11748 [`china`] [`freelancer`] [`remote-work`] [`remote-workers`] [`soho`] [`telecommunications`] [`work-from-home`]  
  该仓库主要整理远程工作领域的精选资源，包括招聘平台、远程团队、工具和社区等，方便一站式查阅。它适合正在寻找远程职位、组建分布式团队或研究远程办公模式的用户，能帮助节省筛查信息的时间，快速接触业内优质渠道。内容持续更新，常见于开发者分享与收藏，可作为了解远程工作生态的入门参考。
- [Mark24Code/rime-auto-deploy](https://github.com/Mark24Code/rime-auto-deploy) ★1880 [`cli`] [`cli-app`] [`comand-line`] [`command-line-tool`] [`repl`] [`rime`] [`rime-config`] [`ruby`] [`terminal`] [`toolkit`]  
  该项目主要用于自动化部署和管理 Rime 输入法引擎的配置，通过脚本或工具帮助用户安装、更新和维护输入方案，省去手动拷贝配置文件、处理不同系统路径的麻烦。通常适合深度定制 Rime 输入习惯、需要跨平台同步配置的用户，也适合对配置文件操作不熟悉的新手快速上手。它把繁琐的部署流程封装为简单命令，降低使用门槛，同时便于在多台设备间保持输入环境一致，也能简化配置的备份和迁移过程，解决 Rime 配置分发与版本管理的问题。
- [TideSec/Mars](https://github.com/TideSec/Mars) ★1377  
  TideSec/Mars 是一款面向攻防对抗的网络安全工具，主要用于内网环境的资产探测与漏洞风险排查。它能够自动识别网络中的主机存活情况、开放端口和常见服务类型，并结合规则库对已知漏洞进行初步检测，帮助渗透测试人员和蓝队运维者快速掌握目标网络的暴露面。工具通常适用于授权范围内的渗透评估、基线检查和加固验收等场景。其设计强调模块化执行，方便在大型内网中批量运行并汇总结果，适合集成进现有安全检测流程，整体上是一款偏实战的内网资产风险发现辅助工具。
- [elcuervo/airplay](https://github.com/elcuervo/airplay) ★1063  
  一个用于在 Ruby 环境中控制 Apple AirPlay 设备的开源库，允许开发者向支持 AirPlay 的电视、音箱或接收器推送视频、音频和图片内容。它封装了 AirPlay 协议，适合构建媒体投屏工具、自动化播放脚本或智能家居集成，让 Ruby 应用能够发现并远程操作局域网内的 AirPlay 设备。通常用于需要快速实现投屏功能的场景，例如自动化演示、家庭媒体中心或测试工具，无需依赖苹果官方 SDK。
- [Parallels/vagrant-parallels](https://github.com/Parallels/vagrant-parallels) ★1012 [`parallels`] [`parallels-desktop`] [`plugin`] [`vagrant`]  
  让 Vagrant 原生支持 Parallels Desktop 的插件，在 macOS 上通过命令行统一管理虚拟机生命周期，包括创建、启动、暂停、销毁等。适合已使用 Parallels 的开发者，可直接复用 Vagrant 的配置语法和 box 机制，将开发环境定义成代码，方便团队协作重建环境，并可与自动配置工具如 Chef、Puppet 或 Shell 脚本集成。
- [TideSec/FuzzScanner](https://github.com/TideSec/FuzzScanner) ★1008  
  主要用于Web应用安全测试，通过模糊测试向目标发送大量构造的请求参数，并根据响应特征判断可能存在的漏洞，如SQL注入、跨站脚本等。它综合了多种扫描思路，适合渗透测试人员在授权环境中对目标系统进行自动化安全检测，也适合开发者在上线前排查常见安全隐患，能有效节省手动测试的时间。
- [L-codes/pwcrack-framework](https://github.com/L-codes/pwcrack-framework) ★512 [`cisco`] [`dedecms`] [`filezilla`] [`foxmail`] [`gpp`] [`hashcrack`] [`juniper`] [`lm`] [`md5`] [`mdc2`] [`mysql`] [`ntlm`] [`online`] [`password`] [`pwcrack`] [`ripemd`] [`servu`] [`sha1`] [`whirlpool`] [`zfsoft`]  
  用于自动化密码口令安全检测的框架，主要针对网络服务、应用系统及常见哈希类型进行弱口令扫描和密码爆破。支持包括 FTP、SSH、MySQL、Redis、HTTP 等在内的常用协议，并可通过插件机制扩展新服务。内置字典生成与规则调整能力，能够模拟暴力破解、字典攻击等场景，适合在授权渗透测试、安全审计或日常账号密码防护评估中使用。它采用 Ruby 编写，命令行操作简单，可灵活配置并发和重试参数，帮助安全人员快速发现弱口令风险。
