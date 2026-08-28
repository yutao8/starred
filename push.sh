#!/bin/bash
set -euo pipefail

export PATH=/usr/local/bin:/usr/bin:/bin
export HOME=/root  # 或实际用户目录

git pull

# 执行数据抓取与 AI 摘要生成
if ! php fetch.php; then
  echo "fetch.php execution failed!"
  exit 1
fi

# 同步历史履历快照 (repos/)
if ! php history.php --sync; then
  echo "history.php sync failed!"
  exit 1
fi

# 执行多维趋势分析并归档 (trend.json, trend.md, trend_history/)
if ! php trend.php --force; then
  echo "trend.php execution failed!"
  exit 1
fi

# 提交数据文件与生成的趋势报告（包含 dist、repos、trend_history 等）
git add README.md starList.json starList.public.json dist repos trend.json trend.md trend_history
if git diff --cached --quiet; then
  echo "No changes to commit."
  exit 0
fi

git commit -m "update starred data & trend analysis"
git push
