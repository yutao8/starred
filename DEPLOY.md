# 部署文档

本文档说明本项目在本地和 GitHub Actions 中的部署方式。私密配置只放在 `.env` 或 GitHub Secrets 中，不要提交真实密钥。

## 环境要求

- PHP 8.2 或以上
- PHP 扩展：`curl`、`json`、`mbstring`
- 可访问 GitHub API 和 OpenAI 兼容模型 API
- 本地可选：Clash、V2Ray 等 HTTP/SOCKS 代理

## 本地部署

1. 复制环境变量模板：

```bash
cp .env.example .env
```

Windows PowerShell 可执行：

```powershell
Copy-Item .env.example .env
```

2. 编辑 `.env`，至少填写：

```ini
GITHUB_ACTOR=yutao8
GH_TOKEN=你的 GitHub Token
DEEPSEEK_KEY=你的 DeepSeek Key
OPENROUTER_KEY=你的 OpenRouter Key
```

可选渠道（不配置则自动跳过）：

```ini
OPENAI_KEY=你的 OpenAI Key
CUSTOM_URL=https://your-api.example.com/v1/chat/completions
CUSTOM_KEY=你的自定义渠道 Key
CUSTOM_MODELS=model-name-1,model-name-2
```

每个渠道的 URL 和 Key 都为空时会自动跳过，不影响其他渠道。多个渠道互为备用，请求失败时自动切换。

3. 如果本地 PHP 访问 GitHub 或模型接口需要代理，配置：

```ini
CURL_PROXY=127.0.0.1:7890
CURL_PROXY_TYPE=http
CURL_IPRESOLVE_V4=true
```

`CURL_PROXY_TYPE` 支持 `http`、`socks5`、`socks5h`。如果浏览器能访问但 PHP cURL 报 `errno 35`，优先确认代理客户端是否允许 `php.exe` 走代理，以及端口是否和 `.env` 一致。

4. 执行生成：

```bash
php index.php
```

执行完成后会更新：

- `README.md`
- `starList.json`
- `starList.public.json`
- `dist/YYYYMMDDHH/`

5. 查看前端页面：

```bash
php -S 127.0.0.1:8099
```

然后访问主页：

```text
http://127.0.0.1:8099/index.html
```

访问独立的历史趋势 HTML 展示页面：

```text
http://127.0.0.1:8099/history.html
```

访问历史趋势 JSON 数据 API 接口：

```text
http://127.0.0.1:8099/history.php
```

6. 命令行查看历史分析与导出 API 数据：

```bash
# 终端直接打印文本报告
php history.php

# 导出 API 数据到 dist/history_analytics.json
php history.php --export-json
```

## GitHub Actions 部署

1. 在仓库 Settings 中配置 Secrets：

- `GH_TOKEN`
- `DEEPSEEK_KEY`
- `OPENROUTER_KEY`
- `OPENAI_KEY`（可选）
- `CUSTOM_KEY`（可选）

如果使用 GitHub CLI，可在仓库目录执行：

```bash
gh secret set GH_TOKEN
gh secret set DEEPSEEK_KEY
gh secret set OPENROUTER_KEY
```

2. 配置 Variables：

- `STARRED_GITHUB_ACTOR`：要抓取收藏列表的 GitHub 用户名，例如 `yutao8`
- `OPENROUTER_URL`：可选，默认 `https://openrouter.ai/api/v1/chat/completions`
- `DEEPSEEK_URL`：可选，默认 `https://api.deepseek.com/chat/completions`
- `OPENAI_URL`：可选，默认 `https://api.openai.com/v1/chat/completions`
- `CUSTOM_URL`：可选，自定义 OpenAI 兼容接口地址

GitHub CLI 示例：

```bash
gh variable set STARRED_GITHUB_ACTOR --body yutao8
```

3. 确认 Actions 权限：

仓库 Settings -> Actions -> General -> Workflow permissions，选择 `Read and write permissions`。

4. 手动运行工作流：

仓库 Actions -> PHP Workflow -> Run workflow。

工作流会执行 `php index.php`，并自动提交生成文件：

- `README.md`
- `starList.json`
- `starList.public.json`
- `dist`

## 配置说明

`config.php` 可以提交到 Git，用于定义默认配置和模型列表；`.env` 只保存私密配置和本地差异配置。

当前模型配置使用 OpenAI-compatible Chat Completions 格式，支持以下渠道（按优先级排列）：

| 渠道 | 环境变量前缀 | 默认模型 | 说明 |
|------|-------------|---------|------|
| DeepSeek | `DEEPSEEK_` | `deepseek-v4-flash` | DeepSeek 开放平台 |
| OpenRouter | `OPENROUTER_` | 多模型轮询 | 聚合多家模型 |
| OpenAI | `OPENAI_` | `gpt-5.6-luna` | OpenAI 官方 API |
| Custom | `CUSTOM_` | 无默认，需手动配置 | 自定义 OpenAI 兼容接口 |

每个渠道的模型列表可通过 `.env` 覆盖，用逗号分隔：

```ini
DEEPSEEK_MODELS=deepseek-v4-flash
OPENROUTER_MODELS=openai/gpt-4o-mini,qwen/qwen-plus-2025-07-28
OPENAI_MODELS=gpt-5.6-luna
CUSTOM_MODELS=your-model-name
```

也可通过 `.env` 为每个渠道配置单独的并发数限制（不配置则使用全局 `REQUEST_CONCURRENCY`）：

```ini
DEEPSEEK_CONCURRENCY=5
OPENROUTER_CONCURRENCY=10
OPENAI_CONCURRENCY=3
CUSTOM_CONCURRENCY=1
```

未配置 Key 或 URL 的渠道会自动跳过。多渠道互为备用，某个渠道请求失败时自动切换到下一个。

`REQUEST_CONCURRENCY` 控制脚本对外请求的全局默认并发数，如果渠道没有单独配置并发，模型接口会按该全局值分块请求；`PAGE_CHUNK` 如未单独设置，也会使用该默认值作为 GitHub 分页并发。

不再兼容旧版 `GPT_KEY`、`GPT_URL`、`GPT_MODELS` 配置方式。

## 常见问题

### GitHub API 返回 401

检查 `GH_TOKEN` 是否填写、是否过期、是否被 GitHub Actions 正确读取。

### PHP cURL 报 errno 35

通常是本地代理、TLS 握手或 IPv6/IPv4 路由问题。建议：

- 设置 `CURL_PROXY=127.0.0.1:7890`
- 设置 `CURL_PROXY_TYPE=http`
- 保持 `CURL_IPRESOLVE_V4=true`
- 确认代理客户端中 `php.exe` 的连接没有被拦截

### 模型接口无返回或很慢

优先检查 `OPENROUTER_KEY`、`DEEPSEEK_KEY` 是否有效；其次降低 `PAGE_END` 做小范围测试，确认链路正常后再恢复完整页数。

### 不要提交哪些文件

- `.env`
- `.cache/`
- IDE 本地配置

`dist` 是历史记录和缓存，按当前项目约定保留。
