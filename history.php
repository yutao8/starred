<?php
declare(strict_types=1);

/**
 * GitHub Starred Repositories - Historical Data & Trend API / CLI
 * 
 * - API Endpoint: http://127.0.0.1:8099/history.php (返回 JSON)
 * - CLI 模式: php history.php [--export-json] [--force]
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
                'status' => 'error',
                'message' => '未在 dist 目录找到任何快照数据。',
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
     * 解析单个快照目录中的 starList.json / starList.public.json
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
        $topLangs = array_slice(array_keys($lastSnapshot['languages']), 0, 12);

        $totalSnapshots = count($snapshots);
        $step = max(1, (int)ceil($totalSnapshots / 150));
        $counter = 0;

        foreach ($snapshots as $folder => $snap) {
            $counter++;
            if ($counter % $step !== 0 && $folder !== $firstFolder && $folder !== $lastFolder) {
                continue;
            }

            $langDistribution = [];
            foreach ($topLangs as $l) {
                $langDistribution[$l] = $snap['languages'][$l] ?? 0;
            }

            $timeline[] = [
                'folder' => (string)$folder,
                'date' => $snap['date'],
                'day' => $snap['day'],
                'repo_count' => $snap['repo_count'],
                'total_stars' => $snap['total_stars'],
                'total_forks' => $snap['total_forks'],
                'top_languages' => $langDistribution,
            ];
        }

        $firstRepoMap = $firstSnapshot['repo_map'] ?? [];
        $lastRepoMap = $lastSnapshot['repo_map'] ?? [];

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
        $fastestGrowing = $repoGrowth;
        usort($fastestGrowing, fn($a, $b) => $b['star_diff'] <=> $a['star_diff']);
        $fastestGrowing = array_slice($fastestGrowing, 0, 50);

        // 按当前总星标数降序
        $topStarred = $repoGrowth;
        usort($topStarred, fn($a, $b) => $b['current_stars'] <=> $a['current_stars']);
        $topStarred = array_slice($topStarred, 0, 50);

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
            'status' => 'success',
            'updated_at' => date('Y-m-d H:i:s'),
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
                'top_languages' => array_slice($lastSnapshot['languages'], 0, 20, true),
            ],
            'timeline' => $timeline,
            'fastest_growing' => $fastestGrowing,
            'top_starred' => $topStarred,
            'all_repos_summary' => array_values($repoGrowth),
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
}

// 主逻辑入口
$analyzer = new HistoryAnalyzer();
$isCli = (PHP_SAPI === 'cli');

$force = isset($_GET['force']) || (isset($argv) && in_array('--force', $argv, true));
$analyticsData = $analyzer->getAnalyticsData($force);

// 如果 CLI 下带有 --export-json 参数
if ($isCli && in_array('--export-json', $argv, true)) {
    $exportFile = __DIR__ . '/dist/history_analytics.json';
    file_put_contents($exportFile, json_encode($analyticsData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    echo "已成功导出历史趋势 API 数据至 {$exportFile}\n";
    exit;
}

if ($isCli && !in_array('--json', $argv, true)) {
    $analyzer->renderCliReport($analyticsData);
} else {
    // Web HTTP 请求：默认输出 JSON 格式接口响应
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($analyticsData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
}
