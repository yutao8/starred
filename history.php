<?php
declare(strict_types=1);

/**
 * GitHub Starred Repositories - Historical Data & Trend Analyzer
 * 
 * 可以在命令行 (CLI) 或浏览器 (Web) 中直接运行：
 * - CLI 模式: php history.php [--export-json] [--force] [--json]
 * - Web 模式: php -S 127.0.0.1:8099 并在浏览器访问 http://127.0.0.1:8099/history.php
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('memory_limit', '1024M');
set_time_limit(300);
date_default_timezone_set('Asia/Shanghai');

class HistoryAnalyzer
{
    private string $rootPath;
    private string $distPath;
    private string $cachePath;
    private string $cacheFile;

    public function __construct(?string $rootPath = null)
    {
        $this->rootPath = $rootPath ?? __DIR__;
        $this->distPath = rtrim($this->rootPath, '/\\') . '/dist';
        $this->cachePath = rtrim($this->rootPath, '/\\') . '/.cache';
        $this->cacheFile = $this->cachePath . '/history_analytics_cache.json';

        if (!is_dir($this->cachePath)) {
            @mkdir($this->cachePath, 0777, true);
        }
    }

    /**
     * 获取历史分析数据（优先读增量缓存）
     */
    public function getAnalyticsData(bool $forceRebuild = false): array
    {
        $cacheData = $forceRebuild ? null : $this->loadCache();
        $snapshots = $this->scanDistSnapshots();

        if (empty($snapshots)) {
            return [
                'error' => '未在 dist 目录找到任何快照数据。',
                'timeline' => [],
                'summary' => [],
            ];
        }

        $cachedSnapshots = $cacheData['snapshot_data'] ?? [];
        $hasNewData = false;
        $snapshotData = [];
        $folderKeys = array_keys($snapshots);
        $firstKey = reset($folderKeys);
        $lastKey = end($folderKeys);

        foreach ($snapshots as $folder => $info) {
            $folderStr = (string)$folder;
            $keepMap = ($folderStr === (string)$firstKey || $folderStr === (string)$lastKey);
            if (isset($cachedSnapshots[$folderStr]) && (!$keepMap || !empty($cachedSnapshots[$folderStr]['repo_map']))) {
                $snapshotData[$folderStr] = $cachedSnapshots[$folderStr];
            } else {
                $parsed = $this->parseSnapshotFolder($info['path'], $info['timestamp'], $folderStr, $keepMap);
                if ($parsed !== null) {
                    $snapshotData[$folderStr] = $parsed;
                    $hasNewData = true;
                }
            }
        }

        // 按时间升序排列快照
        ksort($snapshotData);

        // 如果数据有更新或无缓存，重新计算汇总和趋势
        if ($hasNewData || empty($cacheData['analytics'])) {
            $analytics = $this->computeAnalytics($snapshotData);
            $cacheData = [
                'updated_at' => date('Y-m-d H:i:s'),
                'snapshot_count' => count($snapshotData),
                'snapshot_data' => $snapshotData,
                'analytics' => $analytics,
            ];
            $this->saveCache($cacheData);
        }

        return $cacheData['analytics'];
    }

    /**
     * 扫描 dist 目录下所有的 YYYYMMDDHH 快照目录
     */
    private function scanDistSnapshots(): array
    {
        if (!is_dir($this->distPath)) {
            return [];
        }

        $items = scandir($this->distPath);
        if ($items === false) {
            return [];
        }

        $snapshots = [];
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $fullPath = $this->distPath . '/' . $item;
            if (!is_dir($fullPath)) {
                continue;
            }

            // 匹配文件夹格式：YYYYMMDDHH (10位数字)
            if (preg_match('/^(\d{4})(\d{2})(\d{2})(\d{2})$/', $item, $matches)) {
                $year = (int)$matches[1];
                $month = (int)$matches[2];
                $day = (int)$matches[3];
                $hour = (int)$matches[4];
                $ts = mktime($hour, 0, 0, $month, $day, $year);

                if ($ts !== false) {
                    $snapshots[$item] = [
                        'folder' => $item,
                        'path' => $fullPath,
                        'timestamp' => $ts,
                        'formatted' => sprintf('%04d-%02d-%02d %02d:00', $year, $month, $day, $hour),
                    ];
                }
            }
        }

        ksort($snapshots);
        return $snapshots;
    }

    /**
     * 解析单个快照目录中的 starList.json
     */
    private function parseSnapshotFolder(string $folderPath, int $timestamp, string|int $folderKey, bool $keepRepoMap = false): ?array
    {
        $jsonFile = $folderPath . '/starList.json';
        if (!is_file($jsonFile)) {
            $jsonFile = $folderPath . '/starList.public.json';
            if (!is_file($jsonFile)) {
                return null;
            }
        }

        $content = file_get_contents($jsonFile);
        if ($content === false) {
            return null;
        }

        $repos = json_decode($content, true);
        unset($content);

        if (!is_array($repos)) {
            return null;
        }

        $totalStars = 0;
        $totalForks = 0;
        $repoCount = 0;
        $languages = [];
        $repoMap = [];

        foreach ($repos as $repo) {
            $fullName = $repo['full_name'] ?? ($repo['name'] ?? '');
            if ($fullName === '') {
                continue;
            }

            $stars = (int)($repo['stargazers_count'] ?? 0);
            $forks = (int)($repo['forks_count'] ?? 0);
            $lang = trim((string)($repo['language'] ?? 'Other'));
            if ($lang === '' || strtolower($lang) === 'null' || strtolower($lang) === 'nan') {
                $lang = 'Other';
            }

            $totalStars += $stars;
            $totalForks += $forks;
            $repoCount++;

            if (!isset($languages[$lang])) {
                $languages[$lang] = 0;
            }
            $languages[$lang]++;

            if ($keepRepoMap) {
                $repoMap[$fullName] = [
                    'stars' => $stars,
                    'forks' => $forks,
                    'lang' => $lang,
                ];
            }
        }

        unset($repos);
        arsort($languages);

        return [
            'folder' => (string)$folderKey,
            'timestamp' => $timestamp,
            'date' => date('Y-m-d H:i', $timestamp),
            'day' => date('Y-m-d', $timestamp),
            'repo_count' => $repoCount,
            'total_stars' => $totalStars,
            'total_forks' => $totalForks,
            'languages' => $languages,
            'repo_map' => $repoMap,
        ];
    }

    /**
     * 计算整体趋势、增长率、语言变化、星标排行榜等
     */
    private function computeAnalytics(array $snapshots): array
    {
        if (empty($snapshots)) {
            return [];
        }

        $folders = array_keys($snapshots);
        $firstFolder = $folders[0];
        $lastFolder = end($folders);

        $firstSnapshot = $snapshots[$firstFolder];
        $lastSnapshot = $snapshots[$lastFolder];

        $timeline = [];
        $languageTimeline = [];
        $allLanguages = [];

        // 提取主要语言列表（在最新快照中出现的前12种）
        $topLangs = array_slice(array_keys($lastSnapshot['languages']), 0, 12);

        // 为了避免图表节点过多导致加载慢，进行智能采样（如果快照超过 150 个，抽样显示）
        $totalSnapshots = count($snapshots);
        $step = max(1, (int)ceil($totalSnapshots / 150));
        $counter = 0;

        foreach ($snapshots as $folder => $snap) {
            $counter++;
            // 始终保留首尾及步长节点
            if ($counter % $step !== 0 && $folder !== $firstFolder && $folder !== $lastFolder) {
                continue;
            }

            $langDistribution = [];
            foreach ($topLangs as $l) {
                $langDistribution[$l] = $snap['languages'][$l] ?? 0;
            }

            $timeline[] = [
                'folder' => $folder,
                'date' => $snap['date'],
                'day' => $snap['day'],
                'repo_count' => $snap['repo_count'],
                'total_stars' => $snap['total_stars'],
                'total_forks' => $snap['total_forks'],
                'top_languages' => $langDistribution,
            ];
        }

        // 计算所有仓库的星标增长 (基于最早记录与最新记录对比)
        $firstRepoMap = $firstSnapshot['repo_map'];
        $lastRepoMap = $lastSnapshot['repo_map'];

        $repoGrowth = [];
        foreach ($lastRepoMap as $fullName => $info) {
            $currentStars = $info['stars'];
            $initialStars = $firstRepoMap[$fullName]['stars'] ?? null;

            if ($initialStars !== null) {
                $starDiff = $currentStars - $initialStars;
                $growthRate = $initialStars > 0 ? round(($starDiff / $initialStars) * 100, 2) : 0;
                $isNew = false;
            } else {
                $starDiff = 0;
                $growthRate = 0;
                $isNew = true;
            }

            $repoGrowth[] = [
                'name' => $fullName,
                'current_stars' => $currentStars,
                'initial_stars' => $initialStars ?? $currentStars,
                'star_diff' => $starDiff,
                'growth_rate' => $growthRate,
                'lang' => $info['lang'],
                'is_new' => $isNew,
            ];
        }

        // 按星标增长量降序
        usort($repoGrowth, fn($a, $b) => $b['star_diff'] <=> $a['star_diff']);
        $fastestGrowing = array_slice($repoGrowth, 0, 20);

        // 按当前总星标数降序
        usort($repoGrowth, fn($a, $b) => $b['current_stars'] <=> $a['current_stars']);
        $topStarred = array_slice($repoGrowth, 0, 20);

        // 计算新收藏的仓库与移出的仓库（对比最早与最新快照）
        $newStarredCount = 0;
        foreach ($lastRepoMap as $name => $info) {
            if (!isset($firstRepoMap[$name])) {
                $newStarredCount++;
            }
        }

        $removedStarredCount = 0;
        foreach ($firstRepoMap as $name => $info) {
            if (!isset($lastRepoMap[$name])) {
                $removedStarredCount++;
            }
        }

        return [
            'summary' => [
                'first_snapshot_date' => $firstSnapshot['date'],
                'last_snapshot_date' => $lastSnapshot['date'],
                'snapshot_count' => $totalSnapshots,
                'current_repo_count' => $lastSnapshot['repo_count'],
                'initial_repo_count' => $firstSnapshot['repo_count'],
                'repo_count_diff' => $lastSnapshot['repo_count'] - $firstSnapshot['repo_count'],
                'current_total_stars' => $lastSnapshot['total_stars'],
                'initial_total_stars' => $firstSnapshot['total_stars'],
                'total_stars_diff' => $lastSnapshot['total_stars'] - $firstSnapshot['total_stars'],
                'current_total_forks' => $lastSnapshot['total_forks'],
                'new_starred_since_start' => $newStarredCount,
                'removed_starred_since_start' => $removedStarredCount,
                'top_languages' => array_slice($lastSnapshot['languages'], 0, 15, true),
            ],
            'timeline' => $timeline,
            'fastest_growing' => $fastestGrowing,
            'top_starred' => $topStarred,
        ];
    }

    private function loadCache(): ?array
    {
        if (!is_file($this->cacheFile)) {
            return null;
        }

        $content = file_get_contents($this->cacheFile);
        if ($content === false) {
            return null;
        }

        $data = json_decode($content, true);
        return is_array($data) ? $data : null;
    }

    private function saveCache(array $data): void
    {
        file_put_contents(
            $this->cacheFile,
            json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
        );
    }

    /**
     * CLI 纯文本输出模式
     */
    public function renderCliReport(array $analytics): void
    {
        $summary = $analytics['summary'] ?? [];
        if (empty($summary)) {
            echo "没有可用的历史统计数据。\n";
            return;
        }

        echo "=========================================================\n";
        echo "           GitHub Starred 历史数据与趋势分析             \n";
        echo "=========================================================\n";
        echo sprintf("快照时间范围: %s 至 %s (共 %d 个快照)\n",
            $summary['first_snapshot_date'] ?? '-',
            $summary['last_snapshot_date'] ?? '-',
            $summary['snapshot_count'] ?? 0
        );
        echo "---------------------------------------------------------\n";
        echo sprintf("当前项目总数: %s (较首次变化: %+d)\n",
            number_format($summary['current_repo_count'] ?? 0),
            $summary['repo_count_diff'] ?? 0
        );
        echo sprintf("星标总累积数: %s (较首次增长: %+s)\n",
            number_format($summary['current_total_stars'] ?? 0),
            number_format($summary['total_stars_diff'] ?? 0)
        );
        echo sprintf("Fork 总累积数: %s\n",
            number_format($summary['current_total_forks'] ?? 0)
        );
        echo sprintf("期间新增收藏: %d 个 / 移出收藏: %d 个\n",
            $summary['new_starred_since_start'] ?? 0,
            $summary['removed_starred_since_start'] ?? 0
        );
        echo "---------------------------------------------------------\n";
        echo "【当前主要语言分布】\n";
        foreach ($summary['top_languages'] as $lang => $count) {
            echo sprintf(" - %-16s: %d 个\n", $lang, $count);
        }
        echo "---------------------------------------------------------\n";
        echo "【星标数增长最快的 10 个项目】\n";
        foreach (array_slice($analytics['fastest_growing'] ?? [], 0, 10) as $idx => $repo) {
            echo sprintf(" %2d. %-35s +%-6d (现 %s, 增 %s%%) [%s]\n",
                $idx + 1,
                $repo['name'],
                $repo['star_diff'],
                number_format($repo['current_stars']),
                $repo['growth_rate'],
                $repo['lang']
            );
        }
        echo "=========================================================\n";
    }

    /**
     * 渲染现代化的 HTML 交互式看板 (支持 ECharts 图表)
     */
    public function renderHtmlDashboard(array $analytics): void
    {
        $jsonPayload = json_encode($analytics, JSON_UNESCAPED_UNICODE);
        ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Starred 历史数据趋势仪表盘</title>
    <!-- ECharts CDN -->
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <style>
        :root {
            --bg-color: #0d1117;
            --card-bg: #161b22;
            --card-border: #30363d;
            --text-main: #c9d1d9;
            --text-muted: #8b949e;
            --accent-blue: #58a6ff;
            --accent-green: #3fb950;
            --accent-purple: #bc8cff;
            --accent-orange: #d29922;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            padding: 24px;
            line-height: 1.5;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--card-border);
        }

        .header h1 {
            font-size: 24px;
            font-weight: 600;
            color: #f0f6fc;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header .subtitle {
            font-size: 13px;
            color: var(--text-muted);
            margin-top: 4px;
        }

        .btn {
            background-color: #21262d;
            color: var(--accent-blue);
            border: 1px solid var(--card-border);
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.2s, border-color 0.2s;
        }

        .btn:hover {
            background-color: #30363d;
            border-color: #8b949e;
        }

        /* 统计指标卡片容器 */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }

        .stat-card {
            background-color: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 8px;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        .stat-card .label {
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 8px;
        }

        .stat-card .value {
            font-size: 28px;
            font-weight: 700;
            color: #f0f6fc;
        }

        .stat-card .trend {
            font-size: 12px;
            margin-top: 6px;
        }

        .trend.up { color: var(--accent-green); }
        .trend.neutral { color: var(--accent-blue); }

        /* 图表卡片容器 */
        .charts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 20px;
            margin-bottom: 24px;
        }

        @media (max-width: 768px) {
            .charts-grid {
                grid-template-columns: 1fr;
            }
        }

        .chart-card {
            background-color: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 8px;
            padding: 20px;
        }

        .chart-title {
            font-size: 16px;
            font-weight: 600;
            color: #f0f6fc;
            margin-bottom: 16px;
        }

        .chart-container {
            width: 100%;
            height: 380px;
        }

        /* 排行榜表格 */
        .table-card {
            background-color: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            margin-top: 12px;
        }

        th, td {
            text-align: left;
            padding: 10px 12px;
            border-bottom: 1px solid var(--card-border);
        }

        th {
            color: var(--text-muted);
            font-weight: 500;
            background-color: #0d1117;
        }

        tr:hover td {
            background-color: #1c2128;
        }

        .tag {
            display: inline-block;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
            background-color: #21262d;
            color: var(--accent-blue);
        }
    </style>
</head>
<body>

    <div class="header">
        <div>
            <h1>📈 GitHub Starred 历史数据与趋势分析</h1>
            <div class="subtitle">基于 dist/ 目录下各时间节点快照自动生成趋势看板</div>
        </div>
        <div>
            <a href="?force=1" class="btn">🔄 刷新分析数据</a>
            <a href="?format=json" target="_blank" class="btn">📄 导出 JSON 数据</a>
        </div>
    </div>

    <!-- 顶部核心指标 -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="label">当前收藏仓库总数</div>
            <div class="value" id="val-repo-count">-</div>
            <div class="trend up" id="trend-repo-count">-</div>
        </div>
        <div class="stat-card">
            <div class="label">项目星标总累积数 (Stars)</div>
            <div class="value" id="val-total-stars">-</div>
            <div class="trend up" id="trend-total-stars">-</div>
        </div>
        <div class="stat-card">
            <div class="label">追踪快照版本数</div>
            <div class="value" id="val-snapshots">-</div>
            <div class="trend neutral" id="trend-date-range">-</div>
        </div>
        <div class="stat-card">
            <div class="label">期间新增 / 移除项目</div>
            <div class="value" id="val-changes">-</div>
            <div class="trend neutral">自首次快照对比</div>
        </div>
    </div>

    <!-- 图表展示区 -->
    <div class="charts-grid">
        <div class="chart-card">
            <div class="chart-title">仓库总数 & 星标总数增长趋势</div>
            <div id="chart-overall-trend" class="chart-container"></div>
        </div>
        <div class="chart-card">
            <div class="chart-title">主要编程语言分布演变</div>
            <div id="chart-lang-trend" class="chart-container"></div>
        </div>
    </div>

    <!-- 排行榜与明细 -->
    <div class="charts-grid">
        <div class="table-card">
            <div class="chart-title">🚀 历史星标数增长最快的项目 Top 15</div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>项目名称</th>
                        <th>语言</th>
                        <th>当前 Stars</th>
                        <th>期间增长数</th>
                        <th>增长率</th>
                    </tr>
                </thead>
                <tbody id="tbody-fastest">
                </tbody>
            </table>
        </div>
        <div class="table-card">
            <div class="chart-title">⭐ 绝对星标数最高的项目 Top 15</div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>项目名称</th>
                        <th>语言</th>
                        <th>当前 Stars</th>
                        <th>初始 Stars</th>
                    </tr>
                </thead>
                <tbody id="tbody-top">
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const analyticsData = <?php echo $jsonPayload; ?>;

        document.addEventListener('DOMContentLoaded', () => {
            if (!analyticsData || !analyticsData.summary) {
                alert('暂无有效的分析数据');
                return;
            }

            renderMetrics(analyticsData.summary);
            renderOverallTrendChart(analyticsData.timeline || []);
            renderLangTrendChart(analyticsData.timeline || []);
            renderTables(analyticsData);
        });

        function renderMetrics(summary) {
            document.getElementById('val-repo-count').innerText = (summary.current_repo_count || 0).toLocaleString();
            document.getElementById('trend-repo-count').innerText = `较首次变化: ${summary.repo_count_diff >= 0 ? '+' : ''}${summary.repo_count_diff}`;

            document.getElementById('val-total-stars').innerText = (summary.current_total_stars || 0).toLocaleString();
            document.getElementById('trend-total-stars').innerText = `较首次增长: +${(summary.total_stars_diff || 0).toLocaleString()}`;

            document.getElementById('val-snapshots').innerText = summary.snapshot_count || 0;
            document.getElementById('trend-date-range').innerText = `${summary.first_snapshot_date || ''} ~ ${summary.last_snapshot_date || ''}`;

            document.getElementById('val-changes').innerText = `+${summary.new_starred_since_start} / -${summary.removed_starred_since_start}`;
        }

        function renderOverallTrendChart(timeline) {
            const chartDom = document.getElementById('chart-overall-trend');
            const myChart = echarts.init(chartDom, 'dark');

            const dates = timeline.map(item => item.date);
            const repoCounts = timeline.map(item => item.repo_count);
            const totalStars = timeline.map(item => item.total_stars);

            const option = {
                backgroundColor: 'transparent',
                tooltip: { trigger: 'axis' },
                legend: { data: ['仓库总数', '总星标数'], top: 0 },
                grid: { left: '3%', right: '4%', bottom: '3%', containLabel: true },
                xAxis: { type: 'category', boundaryGap: false, data: dates },
                yAxis: [
                    { type: 'value', name: '仓库总数', position: 'left' },
                    { type: 'value', name: '总星标数', position: 'right' }
                ],
                series: [
                    {
                        name: '仓库总数',
                        type: 'line',
                        smooth: true,
                        data: repoCounts,
                        lineStyle: { color: '#58a6ff', width: 3 },
                        itemStyle: { color: '#58a6ff' },
                    },
                    {
                        name: '总星标数',
                        type: 'line',
                        yAxisIndex: 1,
                        smooth: true,
                        data: totalStars,
                        lineStyle: { color: '#3fb950', width: 3 },
                        itemStyle: { color: '#3fb950' },
                        areaStyle: {
                            color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                                { offset: 0, color: 'rgba(63, 185, 80, 0.3)' },
                                { offset: 1, color: 'rgba(63, 185, 80, 0.0)' }
                            ])
                        }
                    }
                ]
            };

            myChart.setOption(option);
            window.addEventListener('resize', () => myChart.resize());
        }

        function renderLangTrendChart(timeline) {
            const chartDom = document.getElementById('chart-lang-trend');
            const myChart = echarts.init(chartDom, 'dark');

            if (timeline.length === 0) return;

            const dates = timeline.map(item => item.date);
            const languages = Object.keys(timeline[0].top_languages || {});

            const series = languages.map(lang => {
                return {
                    name: lang,
                    type: 'line',
                    stack: 'Total',
                    smooth: true,
                    areaStyle: {},
                    emphasis: { focus: 'series' },
                    data: timeline.map(item => (item.top_languages && item.top_languages[lang]) || 0)
                };
            });

            const option = {
                backgroundColor: 'transparent',
                tooltip: { trigger: 'axis' },
                legend: { data: languages, top: 0, type: 'scroll' },
                grid: { left: '3%', right: '4%', bottom: '3%', containLabel: true },
                xAxis: { type: 'category', boundaryGap: false, data: dates },
                yAxis: { type: 'value', name: '项目数量' },
                series: series
            };

            myChart.setOption(option);
            window.addEventListener('resize', () => myChart.resize());
        }

        function renderTables(data) {
            const fastestTbody = document.getElementById('tbody-fastest');
            const topTbody = document.getElementById('tbody-top');

            (data.fastest_growing || []).slice(0, 15).forEach((item, index) => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${index + 1}</td>
                    <td><strong>${escapeHtml(item.name)}</strong></td>
                    <td><span class="tag">${escapeHtml(item.lang)}</span></td>
                    <td>${item.current_stars.toLocaleString()}</td>
                    <td style="color: #3fb950;">+${item.star_diff.toLocaleString()}</td>
                    <td>${item.growth_rate}%</td>
                `;
                fastestTbody.appendChild(tr);
            });

            (data.top_starred || []).slice(0, 15).forEach((item, index) => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${index + 1}</td>
                    <td><strong>${escapeHtml(item.name)}</strong></td>
                    <td><span class="tag">${escapeHtml(item.lang)}</span></td>
                    <td style="color: #58a6ff; font-weight: bold;">${item.current_stars.toLocaleString()}</td>
                    <td>${item.initial_stars.toLocaleString()}</td>
                `;
                topTbody.appendChild(tr);
            });
        }

        function escapeHtml(str) {
            return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
        }
    </script>
</body>
</html>
        <?php
    }
}

// 主逻辑入口
$analyzer = new HistoryAnalyzer();

// 命令行参数处理
$isCli = (PHP_SAPI === 'cli');
$options = [
    'force' => isset($_GET['force']) || (isset($argv) && in_array('--force', $argv, true)),
    'format' => $_GET['format'] ?? ($isCli ? 'cli' : 'html'),
];

if ($isCli) {
    if (in_array('--json', $argv, true)) {
        $options['format'] = 'json';
    }
}

$analyticsData = $analyzer->getAnalyticsData($options['force']);

// 如果命令行指定了 --export-json，保存一份 JSON 数据文件到 dist 目录
if ($isCli && in_array('--export-json', $argv, true)) {
    $exportFile = __DIR__ . '/dist/history_analytics.json';
    file_put_contents($exportFile, json_encode($analyticsData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    echo "已成功导出历史趋势数据到 {$exportFile}\n";
}

if ($options['format'] === 'json' || (isset($_SERVER['HTTP_ACCEPT']) && str_contains($_SERVER['HTTP_ACCEPT'], 'application/json'))) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($analyticsData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}

if ($isCli) {
    $analyzer->renderCliReport($analyticsData);
} else {
    $analyzer->renderHtmlDashboard($analyticsData);
}
