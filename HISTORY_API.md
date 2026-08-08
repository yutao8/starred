# History API 文档

## 概述

本项目提供了 GitHub 仓库 Star 历史数据的查询功能，支持通过 Web 界面和直接访问 JSON 文件两种方式获取数据。

## 在线查看

### Web 界面

访问 [history.html](./history.html) 可以通过图形化界面查看仓库的 Star 增长趋势。

**URL 参数：**

- `repo`: 仓库全名（格式：`owner/repo`）

**示例：**

```
history.html?repo=Genymobile/scrcpy
```

## 数据访问

### 目录结构

```
repos/
├── {repo_id}.json     # 各仓库的历史数据文件
└── index.json         # 仓库索引（暂未实现）
```

### 数据文件命名规则

每个仓库的历史数据文件以其 GitHub ID 命名，例如：

- `repos/111583593.json` - Genymobile/scrcpy 的历史数据

### JSON 数据结构

#### 仓库历史数据文件（`repos/{id}.json`）

```json
{
    "status": "success",
    "repo": {
        "id": 111583593,
        "full_name": "Genymobile/scrcpy",
        "name": "scrcpy",
        "html_url": "https://github.com/Genymobile/scrcpy",
        "language": "C",
        "description": "仓库描述"
    },
    "summary": {
        "initial_stars": 124264,
        "current_stars": 147075,
        "star_diff": 22811,
        "growth_rate": 18.36,
        "first_seen": "2025-06-27 06:00",
        "last_seen": "2026-08-07 00:00",
        "data_points_count": 192
    },
    "history": [
        {
            "date": "2025-06-27 06:00",
            "timestamp": 1750975200,
            "stars": 124264,
            "forks": 11630,
            "file": "dist/2025062706/starList.json"
        }
    ]
}
```

**字段说明：**

##### `status` (string)
请求状态，值为 `"success"` 或 `"error"`

##### `repo` (object)
仓库基本信息
- `id` (number): GitHub 仓库 ID
- `full_name` (string): 仓库全名（owner/repo）
- `name` (string): 仓库名称
- `html_url` (string): GitHub 仓库地址
- `language` (string): 主要编程语言
- `description` (string): 仓库描述

##### `summary` (object)
统计摘要信息
- `initial_stars` (number): 初始 Star 数
- `current_stars` (number): 当前 Star 数
- `star_diff` (number): Star 增长数量
- `growth_rate` (number): 增长率（百分比）
- `first_seen` (string): 首次记录时间
- `last_seen` (string): 最后记录时间
- `data_points_count` (number): 数据点总数

##### `history` (array)
历史数据点列表，按时间升序排列
- `date` (string): 记录时间（格式：YYYY-MM-DD HH:mm）
- `timestamp` (number): Unix 时间戳（秒）
- `stars` (number): Star 数量
- `forks` (number): Fork 数量
- `file` (string): 数据来源文件路径

## 使用示例

### JavaScript 获取数据

```javascript
// 通过仓库 ID 获取历史数据
async function getRepoHistory(repoId) {
    const response = await fetch(`repos/${repoId}.json`);
    const data = await response.json();
    return data;
}

// 使用示例
getRepoHistory(111583593).then(data => {
    console.log('仓库名称:', data.repo.full_name);
    console.log('当前 Stars:', data.summary.current_stars);
    console.log('历史数据点:', data.history.length);
});
```

### Python 获取数据

```python
import requests
import json

def get_repo_history(repo_id):
    """获取仓库历史数据"""
    url = f'https://your-domain.github.io/repos/{repo_id}.json'
    response = requests.get(url)
    return response.json()

# 使用示例
data = get_repo_history(111583593)
print(f"仓库名称: {data['repo']['full_name']}")
print(f"当前 Stars: {data['summary']['current_stars']}")
print(f"增长率: {data['summary']['growth_rate']}%")

# 绘制增长曲线
dates = [point['date'] for point in data['history']]
stars = [point['stars'] for point in data['history']]
```

### cURL 获取数据

```bash
# 获取 Genymobile/scrcpy 的历史数据
curl https://your-domain.github.io/repos/111583593.json

# 格式化输出
curl https://your-domain.github.io/repos/111583593.json | jq .
```

## 数据特点

1. **数据采集频率**：通常每 2 天采集一次
2. **数据覆盖范围**：当前包含 1995 个仓库的历史数据
3. **数据存储格式**：JSON 格式，方便程序化访问
4. **数据大小**：单个仓库历史文件约 20-50KB

## 数据更新

历史数据通过定时任务自动更新，每天执行 2 次（具体时间由服务器 cron 任务决定）。

## 注意事项

1. 历史数据文件为静态 JSON 文件，可以直接通过 HTTP(S) 访问
2. 文件名使用仓库 ID 而非仓库名，确保唯一性
3. 如需查找特定仓库的 ID，可以：
   - 在 `starList.public.json` 中查找
   - 通过 GitHub API 查询
   - 在 history.html 页面搜索后查看 URL

## 许可

本数据基于 GitHub 公开 API 采集，仅供学习和研究使用。
