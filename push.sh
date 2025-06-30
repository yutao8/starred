#!/bin/bash
export PATH=/usr/local/bin:/usr/bin:/bin
export HOME=/root  # 或实际用户目录
git pull
php index.php
git add .
git commit -m "update"
git push