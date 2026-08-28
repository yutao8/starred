<?php
declare(strict_types=1);

/**
 * GitHub Starred Repositories - 趋势分析（增强版）
 *
 * 功能：
 *   - --min-stars    最低 star 门槛过滤（默认 500）
 *   - 表格含仓库描述
 *   - 语言趋势榜
 *   - 综合热度评分榜
 *   - 结果缓存（基于 index.json mtime + 参数哈希）
 *   - 历史存档：每次生成的 JSON + Markdown 按时间戳保存到 trend_history/
 *
 * 用法：
 *   php trend.php [--days=7] [--top=20] [--min-stars=500] [--lang=Python]
 *                 [--out-dir=./] [--sync] [--force]
 *   http://host/starred/trend.php?days=7&top=20&min_stars=500
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('memory_limit', '512M');
set_time_limit(600);
date_default_timezone_set('Asia/Shanghai');

// ═══════════════════════════════════════════════
// CLI 参数解析
// ═══════════════════════════════════════════════
function getCliOption(string $key, mixed $default): mixed
{
    global $argv;
    $cliKey = str_replace('_', '-', $key);
    foreach ($argv ?? [] as $arg) {
        foreach ([$key, $cliKey] as $k) {
            if (str_starts_with($arg, "--{$k}=")) {
                return substr($arg, strlen("--{$k}="));
            }
        }
    }
    return $default;
}

function hasCliFlag(string $key): bool
{
    global $argv;
    return in_array("--{$key}", $argv ?? [], true);
}

$dataPath   = __DIR__ . '/data';
if (!is_dir($dataPath)) {
    @mkdir($dataPath, 0777, true);
}

$days       = max(1,  (int)getCliOption('days',      7));
$top        = max(1,  (int)getCliOption('top',       20));
$minStars   = max(0,  (int)getCliOption('min_stars', 500));
$langFilter = trim((string)getCliOption('lang', ''));
$outDir     = rtrim((string)getCliOption('out_dir', $dataPath), '/\\');
$doSync     = hasCliFlag('sync');
$force      = hasCliFlag('force');

$reposDir   = is_dir($dataPath . '/repos') ? ($dataPath . '/repos') : (is_dir(__DIR__ . '/repos') ? (__DIR__ . '/repos') : ($dataPath . '/repos'));
$indexFile  = $reposDir . '/index.json';
$cacheFile  = $outDir . '/trend.cache.json';

// ═══════════════════════════════════════════════
// 可选：先同步 dist/ -> repos/
// ═══════════════════════════════════════════════
if ($doSync) {
    echo "⏳ 正在同步 dist/ 快照到 repos/ ...\n";
    require_once __DIR__ . '/history.php';
    if (class_exists('FastRepoHistoryAnalyzer')) {
        $syncAnalyzer = new FastRepoHistoryAnalyzer(__DIR__);
        $syncResult   = $syncAnalyzer->syncDistToReposDir(false);
        echo "✅ 同步完成，快照数：" . ($syncResult['snapshot_count'] ?? '?') . "\n\n";
    }
}

// ═══════════════════════════════════════════════
// 加载主索引
// ═══════════════════════════════════════════════
if (!is_file($indexFile)) {
    fwrite(STDERR, "错误：未找到 {$indexFile}，请先运行 php history.php --sync 或在命令中添加 --sync 参数。\n");
    exit(1);
}

$indexMtime = filemtime($indexFile);

// ═══════════════════════════════════════════════
// 缓存命中检测（优先级 5）
// ═══════════════════════════════════════════════
$cacheKey = md5("{$days}:{$top}:{$minStars}:{$langFilter}:{$indexMtime}");
if (!$force && is_file($cacheFile)) {
    $cached = json_decode(file_get_contents($cacheFile), true);
    if (is_array($cached) && ($cached['cache_key'] ?? '') === $cacheKey) {
        echo "✅ 命中缓存（{$cached['generated_at']}），直接输出报告。\n";
        echo "   使用 --force 强制重新计算。\n";
        exit(0);
    }
}

$indexContent = file_get_contents($indexFile);
$index        = json_decode($indexContent ?: '', true);
unset($indexContent);

if (!is_array($index) || empty($index['repos_meta'])) {
    fwrite(STDERR, "错误：index.json 格式不正确或 repos_meta 为空，正在尝试自动同步...\n");
    require_once __DIR__ . '/history.php';
    $syncAnalyzer = new FastRepoHistoryAnalyzer(__DIR__);
    $syncResult   = $syncAnalyzer->syncDistToReposDir(true);
    $index        = $syncResult;
    if (empty($index['repos_meta'])) {
        fwrite(STDERR, "错误：未能成功构建 repos_meta 索引。\n");
        exit(1);
    }
}

$reposMeta = $index['repos_meta'];
$total     = count($reposMeta);

// ═══════════════════════════════════════════════
// 第一轮扫描：找全局最新时间戳
// ═══════════════════════════════════════════════
echo "📊 扫描数据中（共 {$total} 个仓库）...\n";

$globalLatestTs = 0;
$allHistories   = []; // 缓存到内存，避免第二次 IO

foreach ($reposMeta as $repoId => $meta) {
    $repoFile = $reposDir . '/' . $repoId . '.json';
    if (!is_file($repoFile)) continue;
    $content = file_get_contents($repoFile);
    if ($content === false) continue;
    $data = json_decode($content, true);
    unset($content);
    if (!is_array($data) || empty($data['history'])) continue;

    $allHistories[$repoId] = $data;

    $last = end($data['history']);
    if (is_array($last) && isset($last['timestamp'])) {
        $ts = (int)$last['timestamp'];
        if ($ts > $globalLatestTs) $globalLatestTs = $ts;
    }
}

if ($globalLatestTs === 0) $globalLatestTs = time();

$cutoffTs   = $globalLatestTs - $days * 86400;
$latestDate = date('Y-m-d H:i:s', $globalLatestTs);
$cutoffDate = date('Y-m-d H:i:s', $cutoffTs);

echo "   数据最新时间：{$latestDate}\n";
echo "   分析窗口：{$cutoffDate} ～ {$latestDate}\n";
if ($minStars > 0) echo "   最低 star 门槛：{$minStars}\n";
if ($langFilter !== '') echo "   语言过滤：{$langFilter}\n";
echo "\n";

// ═══════════════════════════════════════════════
// 第二轮：分析每个仓库
// ═══════════════════════════════════════════════
$results       = [];
$processed     = 0;
$langStats     = []; // 语言趋势汇总（优先级 3）

foreach ($allHistories as $repoId => $data) {
    $history = $data['history'];
    $repo    = $data['repo'] ?? [];

    $latestPoint = end($history);
    if (!is_array($latestPoint)) continue;

    $latestTs    = (int)$latestPoint['timestamp'];
    $latestStars = (int)$latestPoint['stars'];
    $latestForks = (int)$latestPoint['forks'];

    // 必须有最近有效数据
    if ($latestTs < $globalLatestTs - 86400) continue;

    $language    = $repo['language']     ?? 'Other';
    $fullName    = $repo['full_name']    ?? (string)($data['repo']['full_name'] ?? '');
    $htmlUrl     = $repo['html_url']     ?? ('https://github.com/' . $fullName);
    $description = $repo['description'] ?? '';

    // 语言过滤（优先级 1 的附属）
    if ($langFilter !== '' && strcasecmp($language, $langFilter) !== 0) continue;

    // ── 找基准点 ──
    $basePoint = null;
    foreach ($history as $point) {
        $ts = (int)($point['timestamp'] ?? 0);
        if ($ts <= $cutoffTs) {
            $basePoint = $point;
        } else {
            break;
        }
    }
    if ($basePoint === null) $basePoint = $history[0];

    $baseStars = (int)$basePoint['stars'];
    $baseForks = (int)$basePoint['forks'];
    $baseTs2   = (int)$basePoint['timestamp'];

    // ── 增量计算 ──
    $starDiff = $latestStars - $baseStars;
    $forkDiff = $latestForks - $baseForks;

    $starGrowthRate = $baseStars > 0
        ? round($starDiff / $baseStars * 100, 4)
        : ($starDiff > 0 ? 100.0 : 0.0);

    $forkGrowthRate = $baseForks > 0
        ? round($forkDiff / $baseForks * 100, 4)
        : ($forkDiff > 0 ? 100.0 : 0.0);

    $daySpan      = max(1, ($latestTs - $baseTs2) / 86400);
    $starDailyAvg = round($starDiff / $daySpan, 2);
    $forkDailyAvg = round($forkDiff / $daySpan, 2);

    // ── 语言趋势累加（优先级 3）── 全量统计，不受 minStars 影响
    $lang = ($language === '' || strtolower($language) === 'nan') ? 'Other' : $language;
    if (!isset($langStats[$lang])) {
        $langStats[$lang] = [
            'language'     => $lang,
            'repo_count'   => 0,
            'total_stars'  => 0,
            'star_diff'    => 0,
            'fork_diff'    => 0,
            'daily_avg_sum'=> 0.0,
        ];
    }
    $langStats[$lang]['repo_count']++;
    $langStats[$lang]['total_stars']  += $latestStars;
    $langStats[$lang]['star_diff']    += $starDiff;
    $langStats[$lang]['fork_diff']    += $forkDiff;
    $langStats[$lang]['daily_avg_sum'] += $starDailyAvg;

    // ── 最低 star 门槛（优先级 1）──
    if ($latestStars < $minStars) continue;

    $isNew = ((int)($history[0]['timestamp'] ?? 0) >= $cutoffTs);

    $results[] = [
        'id'               => (int)$repoId,
        'full_name'        => $fullName,
        'html_url'         => $htmlUrl,
        'language'         => $lang,
        'description'      => $description,
        'current_stars'    => $latestStars,
        'current_forks'    => $latestForks,
        'base_stars'       => $baseStars,
        'base_forks'       => $baseForks,
        'base_date'        => $basePoint['date'],
        'latest_date'      => $latestPoint['date'],
        'first_seen'       => $history[0]['date'] ?? '',
        'is_new'           => $isNew,
        'star_diff'        => $starDiff,
        'fork_diff'        => $forkDiff,
        'star_growth_rate' => $starGrowthRate,
        'fork_growth_rate' => $forkGrowthRate,
        'star_daily_avg'   => $starDailyAvg,
        'fork_daily_avg'   => $forkDailyAvg,
        'day_span'         => round($daySpan, 1),
        'heat_score'       => 0.0, // 占位，后面填
    ];

    $processed++;
}

// ═══════════════════════════════════════════════
// 综合热度评分（优先级 4）
// ═══════════════════════════════════════════════
// 归一化指标后加权：star_diff(35%) + star_growth_rate(25%) + fork_diff(20%) + star_daily_avg(20%)
// 对增量类指标按 log 压缩，避免极大值一家独大
function logScore(float $v): float
{
    return $v > 0 ? log($v + 1) : 0.0;
}

if (!empty($results)) {
    $maxStarDiff  = max(array_column($results, 'star_diff'));
    $maxGrowth    = max(array_column($results, 'star_growth_rate'));
    $maxForkDiff  = max(array_column($results, 'fork_diff'));
    $maxDailyAvg  = max(array_column($results, 'star_daily_avg'));

    $logMaxStarDiff = logScore((float)max(1, $maxStarDiff));
    $logMaxForkDiff = logScore((float)max(1, $maxForkDiff));
    $logMaxDailyAvg = logScore((float)max(1, $maxDailyAvg));

    foreach ($results as &$r) {
        $normStarDiff  = $logMaxStarDiff  > 0 ? logScore((float)$r['star_diff'])        / $logMaxStarDiff  : 0;
        $normGrowth    = $maxGrowth        > 0 ? max(0, $r['star_growth_rate'])           / $maxGrowth        : 0;
        $normForkDiff  = $logMaxForkDiff  > 0 ? logScore((float)max(0, $r['fork_diff'])) / $logMaxForkDiff  : 0;
        $normDailyAvg  = $logMaxDailyAvg  > 0 ? logScore((float)max(0, $r['star_daily_avg'])) / $logMaxDailyAvg : 0;

        $r['heat_score'] = round(
            $normStarDiff * 35 + $normGrowth * 25 + $normForkDiff * 20 + $normDailyAvg * 20,
            2
        );
    }
    unset($r);
}

// ═══════════════════════════════════════════════
// 语言趋势后处理（优先级 3）
// ═══════════════════════════════════════════════
foreach ($langStats as &$ls) {
    $ls['avg_daily_star'] = $ls['repo_count'] > 0
        ? round($ls['daily_avg_sum'] / $ls['repo_count'], 2)
        : 0.0;
}
unset($ls);

// 按 star_diff 降序
usort($langStats, fn($a, $b) => $b['star_diff'] <=> $a['star_diff']);
$topLangs = array_slice(array_values($langStats), 0, $top);

// ═══════════════════════════════════════════════
// 排序 & 筛选各维度 Top N
// ═══════════════════════════════════════════════
function topN(array &$data, string $field, int $n, bool $desc = true): array
{
    $sorted = $data;
    usort($sorted, static fn($a, $b) =>
        $desc ? (($b[$field] ?? 0) <=> ($a[$field] ?? 0))
              : (($a[$field] ?? 0) <=> ($b[$field] ?? 0))
    );
    return array_slice($sorted, 0, $n);
}

$topStarGrowthRate  = topN($results, 'star_growth_rate', $top);
$topStarDeclineRate = topN($results, 'star_growth_rate', $top, false);
$topStarDiff        = topN($results, 'star_diff',        $top);
$topForkDiff        = topN($results, 'fork_diff',        $top);
$topStarTotal       = topN($results, 'current_stars',    $top);
$topStarDailyAvg    = topN($results, 'star_daily_avg',   $top);
$topHeat            = topN($results, 'heat_score',       $top);

$newRepos           = array_values(array_filter($results, fn($r) => !empty($r['is_new'])));
usort($newRepos, fn($a, $b) => ($b['current_stars'] ?? 0) <=> ($a['current_stars'] ?? 0));
$topNewRepos        = array_slice($newRepos, 0, $top);

$generatedAt = date('Y-m-d H:i:s');

// ═══════════════════════════════════════════════
// JSON 数据
// ═══════════════════════════════════════════════
$jsonData = [
    'status'           => 'success',
    'generated_at'     => $generatedAt,
    'analysis_days'    => $days,
    'top_n'            => $top,
    'min_stars'        => $minStars,
    'lang_filter'      => $langFilter,
    'total_repos_raw'  => $total,
    'total_repos'      => $processed,
    'data_latest_date' => $latestDate,
    'cutoff_date'      => $cutoffDate,
    'cache_key'        => $cacheKey,
    'rankings'         => [
        'heat_score_top'          => $topHeat,
        'new_repos_top'           => $topNewRepos,
        'star_growth_rate_top'    => $topStarGrowthRate,
        'star_growth_rate_bottom' => $topStarDeclineRate,
        'star_diff_top'           => $topStarDiff,
        'fork_diff_top'           => $topForkDiff,
        'star_total_top'          => $topStarTotal,
        'star_daily_avg_top'      => $topStarDailyAvg,
    ],
    'language_trends'  => $topLangs,
];

// ── 写最新 JSON ──
$jsonFile = $outDir . '/trend.json';
file_put_contents($jsonFile, json_encode($jsonData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

// ── 写缓存 ──
file_put_contents($cacheFile, json_encode($jsonData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

// ── 历史存档：准备目录和时间戳文件名 ──
$historyDir   = $outDir . '/trend_history';
$historySlot  = date('Ymd_Hi'); // e.g. 20260828_1913
$historyEntry = $historyDir . '/' . $historySlot;
if (!is_dir($historyEntry)) {
    @mkdir($historyEntry, 0777, true);
}
$histJsonFile = $historyEntry . '/trend.json';
file_put_contents($histJsonFile, json_encode($jsonData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

// ═══════════════════════════════════════════════
// Markdown 辅助函数
// ═══════════════════════════════════════════════
$langEmoji = [
    'Python'     => '🐍',
    'JavaScript' => '🟨',
    'TypeScript' => '🔷',
    'Go'         => '🐹',
    'Rust'       => '🦀',
    'PHP'        => '🐘',
    'Java'       => '☕',
    'C'          => '⚙️',
    'C++'        => '⚙️',
    'C#'         => '💜',
    'Kotlin'     => '🎯',
    'Swift'      => '🍎',
    'Ruby'       => '💎',
    'Shell'      => '🐚',
    'Dart'       => '🎯',
    'Lua'        => '🌙',
    'HTML'       => '🌐',
    'CSS'        => '🎨',
    'Markdown'   => '📝',
    'Vue'        => '💚',
    'Other'      => '📦',
];

function getLangBadge(string $lang, array $emojiMap): string
{
    $emoji = $emojiMap[$lang] ?? '📦';
    return "{$emoji} {$lang}";
}

function truncateDesc(string $desc, int $len = 60): string
{
    if ($desc === '') return '-';
    $desc = preg_replace('/\s+/', ' ', trim($desc));
    return mb_strlen($desc) > $len ? mb_substr($desc, 0, $len) . '…' : $desc;
}

// ── 带描述的 Star 表格（优先级 2）──
function renderStarTable(array $rows, string $diffLabel, string $diffField, string $rateField, array $emojiMap): string
{
    $lines   = [];
    $lines[] = '| # | 仓库 | 语言 | 描述 | 当前 ★ | ' . $diffLabel . ' | 增长率 | 日均 |';
    $lines[] = '|:-:|:-----|:----:|:-----|-------:|-------:|-------:|-----:|';
    foreach ($rows as $i => $r) {
        $name  = '[' . $r['full_name'] . '](' . $r['html_url'] . ')';
        $lang  = getLangBadge($r['language'], $emojiMap);
        $desc  = truncateDesc($r['description']);
        $stars = number_format((int)$r['current_stars']);
        $diff  = ($r[$diffField] >= 0 ? '+' : '') . number_format((int)$r[$diffField]);
        $rate  = ($r[$rateField] >= 0 ? '+' : '') . $r[$rateField] . '%';
        $daily = ($r['star_daily_avg'] >= 0 ? '+' : '') . $r['star_daily_avg'];
        $lines[] = '| ' . ($i+1) . " | {$name} | {$lang} | {$desc} | {$stars} | {$diff} | {$rate} | {$daily} |";
    }
    return implode("\n", $lines);
}

// ── 热度榜表格（优先级 4）──
function renderHeatTable(array $rows, array $emojiMap): string
{
    $lines   = [];
    $lines[] = '| # | 仓库 | 语言 | 描述 | 热度 🔥 | ★ 增量 | 增长率 | Fork 增 |';
    $lines[] = '|:-:|:-----|:----:|:-----|-------:|------:|-------:|--------:|';
    foreach ($rows as $i => $r) {
        $name  = '[' . $r['full_name'] . '](' . $r['html_url'] . ')';
        $lang  = getLangBadge($r['language'], $emojiMap);
        $desc  = truncateDesc($r['description']);
        $heat  = number_format((float)$r['heat_score'], 1);
        $sdiff = ($r['star_diff'] >= 0 ? '+' : '') . number_format((int)$r['star_diff']);
        $rate  = ($r['star_growth_rate'] >= 0 ? '+' : '') . $r['star_growth_rate'] . '%';
        $fdiff = ($r['fork_diff'] >= 0 ? '+' : '') . number_format((int)$r['fork_diff']);
        $lines[] = '| ' . ($i+1) . " | {$name} | {$lang} | {$desc} | **{$heat}** | {$sdiff} | {$rate} | {$fdiff} |";
    }
    return implode("\n", $lines);
}

// ── Fork 表格 ──
function renderForkTable(array $rows, array $emojiMap): string
{
    $lines   = [];
    $lines[] = '| # | 仓库 | 语言 | 描述 | 当前 🍴 | Fork 增量 | Fork 增长率 |';
    $lines[] = '|:-:|:-----|:----:|:-----|-------:|----------:|------------:|';
    foreach ($rows as $i => $r) {
        $name  = '[' . $r['full_name'] . '](' . $r['html_url'] . ')';
        $lang  = getLangBadge($r['language'], $emojiMap);
        $desc  = truncateDesc($r['description']);
        $forks = number_format((int)$r['current_forks']);
        $diff  = ($r['fork_diff'] >= 0 ? '+' : '') . number_format((int)$r['fork_diff']);
        $rate  = ($r['fork_growth_rate'] >= 0 ? '+' : '') . $r['fork_growth_rate'] . '%';
        $lines[] = '| ' . ($i+1) . " | {$name} | {$lang} | {$desc} | {$forks} | {$diff} | {$rate} |";
    }
    return implode("\n", $lines);
}

// ── Star 总量表格 ──
function renderTotalTable(array $rows, array $emojiMap): string
{
    $lines   = [];
    $lines[] = '| # | 仓库 | 语言 | 描述 | 当前 ★ | 近期增量 | 近期增长率 |';
    $lines[] = '|:-:|:-----|:----:|:-----|-------:|--------:|----------:|';
    foreach ($rows as $i => $r) {
        $name  = '[' . $r['full_name'] . '](' . $r['html_url'] . ')';
        $lang  = getLangBadge($r['language'], $emojiMap);
        $desc  = truncateDesc($r['description']);
        $stars = number_format((int)$r['current_stars']);
        $diff  = ($r['star_diff'] >= 0 ? '+' : '') . number_format((int)$r['star_diff']);
        $rate  = ($r['star_growth_rate'] >= 0 ? '+' : '') . $r['star_growth_rate'] . '%';
        $lines[] = '| ' . ($i+1) . " | {$name} | {$lang} | {$desc} | {$stars} | {$diff} | {$rate} |";
    }
    return implode("\n", $lines);
}

// ── 语言趋势表格（优先级 3）──
function renderLangTable(array $rows, array $emojiMap): string
{
    $lines   = [];
    $lines[] = '| # | 语言 | 仓库数 | Star 总量 | Star 增量 | Fork 增量 | 日均增/库 |';
    $lines[] = '|:-:|:-----|------:|---------:|----------:|----------:|----------:|';
    foreach ($rows as $i => $r) {
        $emoji = $emojiMap[$r['language']] ?? '📦';
        $lang  = "{$emoji} {$r['language']}";
        $cnt   = $r['repo_count'];
        $total = number_format((int)$r['total_stars']);
        $sdiff = ($r['star_diff'] >= 0 ? '+' : '') . number_format((int)$r['star_diff']);
        $fdiff = ($r['fork_diff'] >= 0 ? '+' : '') . number_format((int)$r['fork_diff']);
        $daily = ($r['avg_daily_star'] >= 0 ? '+' : '') . $r['avg_daily_star'];
        $lines[] = '| ' . ($i+1) . " | {$lang} | {$cnt} | {$total} | {$sdiff} | {$fdiff} | {$daily} |";
    }
    return implode("\n", $lines);
}

// ═══════════════════════════════════════════════
// 生成 Markdown（优先级 2 描述列 已整合到上方函数）
// ═══════════════════════════════════════════════
$growthF   = array_values(array_filter($topStarGrowthRate,  fn($r) => $r['star_diff'] > 0));
$declineF  = array_values(array_filter($topStarDeclineRate, fn($r) => $r['star_diff'] < 0));
$starDiffF = array_values(array_filter($topStarDiff,        fn($r) => $r['star_diff'] > 0));
$forkDiffF = array_values(array_filter($topForkDiff,        fn($r) => $r['fork_diff'] > 0));
$dailyF    = array_values(array_filter($topStarDailyAvg,   fn($r) => $r['star_daily_avg'] > 0));
$heatF     = array_values(array_filter($topHeat,           fn($r) => $r['heat_score'] > 0));

// ── 摘要卡片 ──
$hotRepo      = !empty($heatF)     ? $heatF[0]['full_name']         : '-';
$hotStarGain  = !empty($starDiffF) ? $starDiffF[0]['full_name']     : '-';
$hotGrowth    = !empty($growthF)   ? $growthF[0]['full_name']       : '-';
$hotLang      = !empty($topLangs)  ? $topLangs[0]['language']       : '-';
$hotLangDiff  = !empty($topLangs)  ? number_format((int)$topLangs[0]['star_diff']) : '0';
$minStarsNote = $minStars > 0 ? "（≥ {$minStars} ★ 仓库）" : '';

$md  = "# 🔥 GitHub Star 趋势分析报告\n\n";
$md .= "> 生成时间：**{$generatedAt}** · 分析窗口：**{$days} 天**（{$cutoffDate} ～ {$latestDate}）  \n";
$md .= "> 统计仓库：**{$processed}** 个{$minStarsNote} · 总索引：**{$total}** 个\n\n";

// 摘要卡片
$md .= "## 📋 本期摘要\n\n";
$md .= "| 指标 | 榜首 |\n";
$md .= "|:-----|:-----|\n";
$md .= "| 🔥 综合热度最高 | [{$hotRepo}](https://github.com/{$hotRepo}) |\n";
$md .= "| ⭐ Star 增量最多 | [{$hotStarGain}](https://github.com/{$hotStarGain}) |\n";
$md .= "| 🚀 增长率最快 | [{$hotGrowth}](https://github.com/{$hotGrowth}) |\n";
$md .= "| 🌐 最热语言 | {$hotLang}（+{$hotLangDiff} ★） |\n\n";
$md .= "---\n\n";

// 1. 综合热度（优先级 4）
$md .= "## 🔥 综合热度 Top {$top}{$minStarsNote}\n\n";
$md .= "> 综合 **Star 增量（35%）+ 增长率（25%）+ Fork 增量（20%）+ 日均增长（20%）** 加权评分，满分 100。\n\n";
$md .= !empty($heatF)
    ? renderHeatTable($heatF, $langEmoji) . "\n\n"
    : "_暂无数据_\n\n";

// 2. Star 增长率（优先级 1 + 2）
$md .= "## 🚀 Star 增长率 Top {$top}（最近 {$days} 天）{$minStarsNote}\n\n";
$md .= "> 以 **增长率（%）** 排行——增速最快的仓库。\n\n";
$md .= !empty($growthF)
    ? renderStarTable($growthF, 'Star 增量', 'star_diff', 'star_growth_rate', $langEmoji) . "\n\n"
    : "_暂无数据_\n\n";

// 3. Star 绝对增量
$md .= "## ⭐ Star 绝对增量 Top {$top}（最近 {$days} 天）\n\n";
$md .= "> 以 **star 绝对增加数** 排行——影响力最广的仓库。\n\n";
$md .= !empty($starDiffF)
    ? renderStarTable($starDiffF, 'Star 增量', 'star_diff', 'star_growth_rate', $langEmoji) . "\n\n"
    : "_暂无数据_\n\n";

// 4. Fork 增量
$md .= "## 🍴 Fork 增量 Top {$top}（最近 {$days} 天）\n\n";
$md .= "> 以 **fork 绝对增加数** 排行——被动手实践最多的仓库。\n\n";
$md .= !empty($forkDiffF)
    ? renderForkTable($forkDiffF, $langEmoji) . "\n\n"
    : "_暂无数据_\n\n";

// 5. 日均 Star 增长
$md .= "## 📈 日均 Star 增长 Top {$top}（最近 {$days} 天）\n\n";
$md .= "> 每天平均新增 star 数量——持续热度最高的仓库。\n\n";
$md .= !empty($dailyF)
    ? renderStarTable($dailyF, 'Star 增量', 'star_diff', 'star_growth_rate', $langEmoji) . "\n\n"
    : "_暂无数据_\n\n";

// 6. 新收录项目（如有）
if (!empty($topNewRepos)) {
    $md .= "## 🆕 新收录项目 Top {$top}（最近 {$days} 天）\n\n";
    $md .= "> 在最近 {$days} 天内首次被收录到知识库的优质项目。\n\n";
    $md .= renderStarTable($topNewRepos, 'Star 增量', 'star_diff', 'star_growth_rate', $langEmoji) . "\n\n";
}

// 7. 语言趋势（优先级 3）
$md .= "## 🌐 语言趋势 Top {$top}（最近 {$days} 天）\n\n";
$md .= "> 按编程语言汇总所有仓库的 star 增量，看哪门语言整体最热。\n\n";
$md .= !empty($topLangs)
    ? renderLangTable($topLangs, $langEmoji) . "\n\n"
    : "_暂无数据_\n\n";

// 7. Star 总量
$md .= "## 🏆 Star 总量 Top {$top}\n\n";
$md .= "> 当前 star 数最多的仓库——长期积累的影响力排行。\n\n";
$md .= !empty($topStarTotal)
    ? renderTotalTable($topStarTotal, $langEmoji) . "\n\n"
    : "_暂无数据_\n\n";

// 8. 负增长（如有）
if (!empty($declineF)) {
    $md .= "## 📉 Star 负增长 Top {$top}（最近 {$days} 天）\n\n";
    $md .= "> star **跌幅最大**的仓库。\n\n";
    $md .= renderStarTable($declineF, 'Star 变化', 'star_diff', 'star_growth_rate', $langEmoji) . "\n\n";
}

$md .= "---\n\n";
$md .= "_由 [trend.php](trend.php) 自动生成 · ";
$md .= "参数：days={$days}, top={$top}, min_stars={$minStars}_\n";

// ── 写最新 Markdown ──
$mdFile = $outDir . '/trend.md';
file_put_contents($mdFile, $md);

// ── 历史存档：写 Markdown ──
$histMdFile = $historyEntry . '/trend.md';
file_put_contents($histMdFile, $md);

// ── 更新 trend_history/index.json ──
$histIndexFile = $historyDir . '/index.json';
$histIndex     = [];
if (is_file($histIndexFile)) {
    $hi = json_decode(file_get_contents($histIndexFile), true);
    if (is_array($hi)) $histIndex = $hi;
}
// 插入或更新当前条目（同一分钟内重跑覆盖）
$histIndex[$historySlot] = [
    'slot'             => $historySlot,
    'generated_at'     => $generatedAt,
    'analysis_days'    => $days,
    'top_n'            => $top,
    'min_stars'        => $minStars,
    'lang_filter'      => $langFilter,
    'data_latest_date' => $latestDate,
    'cutoff_date'      => $cutoffDate,
    'total_repos'      => $processed,
    'json'             => 'data/trend_history/' . $historySlot . '/trend.json',
    'markdown'         => 'data/trend_history/' . $historySlot . '/trend.md',
];
// 按时间槽倒序保留（最新在前）
krsort($histIndex);
file_put_contents($histIndexFile, json_encode(array_values($histIndex), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

// ═══════════════════════════════════════════════
// 输出
// ═══════════════════════════════════════════════
echo "✅ 分析完成！\n";
echo "   处理仓库数：{$processed} / {$total}\n";
echo "   数据最新：{$latestDate}\n";
echo "   分析窗口：{$cutoffDate} ～ {$latestDate}\n";
echo "   JSON 报告：{$jsonFile}\n";
echo "   Markdown 报告：{$mdFile}\n";
echo "   缓存文件：{$cacheFile}\n";
echo "   历史存档：{$histJsonFile}\n";
echo "             {$histMdFile}\n";
$histCount = count($histIndex);
echo "   历史索引：{$histIndexFile}（共 {$histCount} 条记录）\n";
if (!empty($topLangs)) {
    echo "\n   最热语言 Top 5：\n";
    foreach (array_slice($topLangs, 0, 5) as $i => $ls) {
        $diff = $ls['star_diff'] >= 0 ? '+' . number_format($ls['star_diff']) : number_format($ls['star_diff']);
        echo "   " . ($i+1) . ". {$ls['language']} ({$ls['repo_count']} 库, {$diff} ★)\n";
    }
}