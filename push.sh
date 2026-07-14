#!/bin/bash
set -euo pipefail

export PATH=/usr/local/bin:/usr/bin:/bin
export HOME=/root  # 或实际用户目录

git pull
php index.php

git add README.md starList.json starList.public.json dist
if git diff --cached --quiet; then
  echo "No changes to commit."
  exit 0
fi

git commit -m "update"
git push
