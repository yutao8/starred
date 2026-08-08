#!/bin/bash
set -euo pipefail

export PATH=/usr/local/bin:/usr/bin:/bin
export HOME=/root  # 或实际用户目录

git pull

# 执行数据抓取
if ! php fetch.php; then
  echo "fetch.php execution failed!"
  exit 1
fi

# 提交数据文件（包含 dist 数据日志目录）
git add README.md starList.json starList.public.json dist repos
if git diff --cached --quiet; then
  echo "No changes to commit."
  exit 0
fi

git commit -m "update"
git push
