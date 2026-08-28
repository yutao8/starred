<?php
declare(strict_types=1);

/**
 * GitHub Starred Repositories - 单项目历史趋势与履历 API
 * 
 * 独立项目履历目录架构 (repos/ 目录)：
 * - 未指定项目：读取根目录 startList.json / starList.json 展现项目列表 (< 20ms)
 * - 指定了项目：读取 repos/{id}.json 独立项目履历文件 (< 1ms)
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('memory_limit', '512M');
set_time_limit(300);
date_default_timezone_set('Asia/Shanghai');

class FastRepoHistoryAnalyzer
{
    private string $rootPath;
    private string $distPath;
    private string $reposDir;
    private string $indexFile;

    public function __construct(?string $rootPath = null)
    {
        $this->rootPath = $rootPath ?? __DIR__;
        $this->distPath = rtrim($this->rootPath, '/\\') . '/dist';
        $this->reposDir = rtrim($this->rootPath, '/\\') . '/repos';
        $this->indexFile = $this->reposDir . '/index.json';

        if (!is_dir($this->reposDir)) {
            @mkdir($this->reposDir, 0777, true);
        }
    }

    /**
     * 从根目录获取可用项目清单 (不扫描 dist 目录，毫秒级响应)
     * 支持 startList.json, starList.json, starList.public.json
     */
    public function getRepoListFromRoot(): array
    {
        $candidates = [
            $this->rootPath . '/startList.json',
            $this->rootPath . '/starList.json',
            $this->rootPath . '/starList.public.json',
        ];

        $targetFile = null;
        foreach ($candidates as $file) {
            if (is_file($file)) {
                $targetFile = $file;
                break;
            }
        }

        if ($targetFile === null) {
            return [
                'status' => 'error',
                'message' => '未找到根目录的项目数据文件 (startList.json / starList.json / starList.public.json)',
            ];
        }

        $content = file_get_contents($targetFile);
        if ($content === false) {
            return [
                'status' => 'error',
                'message' => '无法读取项目数据文件: ' . basename($targetFile),
            ];
        }

        $repos = json_decode($content, true);
        unset($content);

        if (!is_array($repos)) {
            return [
                'status' => 'error',
                'message' => '解析项目数据文件 JSON 失败: ' . basename($targetFile),
            ];
        }

        $list = [];
        foreach ($repos as $r) {
            $fullName = $r['full_name'] ?? ($r['name'] ?? '');
            if ($fullName === '') {
                continue;
            }

            $lang = trim((string)($r['language'] ?? 'Other'));
            if ($lang === '' || strtolower($lang) === 'null' || strtolower($lang) === 'nan') {
                $lang = 'Other';
            }

            $list[] = [
                'id' => (int)($r['id'] ?? 0),
                'full_name' => $fullName,
                'name' => $r['name'] ?? $fullName,
                'language' => $lang,
                'stars' => (int)($r['stargazers_count'] ?? 0),
                'forks' => (int)($r['forks_count'] ?? 0),
                'description' => $r['desc'] ?? ($r['description'] ?? ''),
                'html_url' => $r['html_url'] ?? ('https://github.com/' . $fullName),
            ];
        }

        return [
            'status' => 'success',
            'source' => basename($targetFile),
            'updated_at' => date('Y-m-d H:i:s', filemtime($targetFile)),
            'total' => count($list),
            'repos' => $list,
        ];
    }

    public function getRepoList(bool $force = false): array
    {
        return $this->getRepoListFromRoot();
    }

    /**
     * 查询指定项目的历史履历
     * 读取 repos/{id}.json 独立项目履历文件，毫秒级响应
     */
    public function getRepoHistory(string $query, bool $force = false): array
    {
        $queryLower = strtolower(trim($query));
        $index = $this->loadMasterIndex();

        $repoId = $this->resolveRepoId($queryLower, $index);

        // 如果履历文件存在且非强制刷新，直接读取独立的履历 JSON 文件
        if (!$force && $repoId !== null) {
            $repoFile = $this->reposDir . '/' . $repoId . '.json';
            if (is_file($repoFile)) {
                $content = file_get_contents($repoFile);
                if ($content !== false) {
                    $data = json_decode($content, true);
                    if (is_array($data) && ($data['status'] ?? '') === 'success') {
                        return $data;
                    }
                }
            }
        }

        // 增量同步 dist/ 快照到 repos/ 独立履历文件
        $index = $this->syncDistToReposDir($force);
        $repoId = $this->resolveRepoId($queryLower, $index);

        if ($repoId === null) {
            return [
                'status' => 'error',
                'message' => "未找到匹配的项目履历: '{$query}'",
            ];
        }

        $repoFile = $this->reposDir . '/' . $repoId . '.json';
        if (is_file($repoFile)) {
            $content = file_get_contents($repoFile);
            if ($content !== false) {
                $data = json_decode($content, true);
                if (is_array($data)) {
                    return $data;
                }
            }
        }

        return [
            'status' => 'error',
            'message' => "读取项目 '{$query}' 的履历文件失败",
        ];
    }

    /**
     * 加载 repos/index.json 主索引
     */
    private function loadMasterIndex(): array
    {
        if (is_file($this->indexFile)) {
            $content = file_get_contents($this->indexFile);
            if ($content !== false) {
                $data = json_decode($content, true);
                if (is_array($data)) {
                    return $data;
                }
            }
        }

        return [
            'status' => 'success',
            'updated_at' => date('Y-m-d H:i:s'),
            'processed_snapshots' => [],
            'map' => [],
            'repos_meta' => [],
        ];
    }

    /**
     * 根据项目名/ID 解析出 repoId
     */
    private function resolveRepoId(string $queryLower, array $index): ?int
    {
        $map = $index['map'] ?? [];
        if (isset($map[$queryLower])) {
            return (int)$map[$queryLower];
        }

        // 模糊搜索全名
        foreach ($map as $nameKey => $id) {
            if (str_contains((string)$nameKey, $queryLower)) {
                return (int)$id;
            }
        }

        // 尝试从根目录 project 列表中查找
        $rootData = $this->getRepoListFromRoot();
        if (($rootData['status'] ?? '') === 'success' && !empty($rootData['repos'])) {
            foreach ($rootData['repos'] as $r) {
                $fn = strtolower((string)$r['full_name']);
                $name = strtolower((string)$r['name']);
                $idStr = (string)$r['id'];

                if ($queryLower === $fn || $queryLower === $name || $queryLower === $idStr || str_contains($fn, $queryLower)) {
                    return (int)$r['id'];
                }
            }
        }

        return null;
    }

    /**
     * 增量解析 dist/ 快照，为每个项目生成/更新独立的履历 JSON 文件
     */
    public function syncDistToReposDir(bool $force = false): array
    {
        $masterIndex = $force ? [
            'status' => 'success',
            'updated_at' => date('Y-m-d H:i:s'),
            'processed_snapshots' => [],
            'map' => [],
            'repos_meta' => [],
        ] : $this->loadMasterIndex();

        $allSnapshots = $this->scanDistSnapshots();
        $processed = $masterIndex['processed_snapshots'] ?? [];
        $unprocessed = array_diff_key($allSnapshots, $processed);

        if (empty($unprocessed) && !empty($masterIndex['map']) && !$force) {
            return $masterIndex;
        }

        $snapList = array_values($unprocessed);
        $totalSnapCount = count($snapList);
        $step = ($totalSnapCount > 200) ? (int)ceil($totalSnapCount / 200) : 1;

        for ($i = 0; $i < $totalSnapCount; $i++) {
            $folder = $snapList[$i]['folder'];
            $processed[$folder] = true;

            // 智能采样：首次生成时保证处理首节点、末节点与采样步长节点
            if ($i !== 0 && $i !== ($totalSnapCount - 1) && ($i % $step !== 0)) {
                continue;
            }

            $snap = $snapList[$i];
            $jsonFile = null;
            foreach (['/starList.public.json', '/starList.json', '/startList.json'] as $fname) {
                if (is_file($snap['path'] . $fname)) {
                    $jsonFile = $snap['path'] . $fname;
                    break;
                }
            }

            if ($jsonFile === null) {
                continue;
            }

            $content = file_get_contents($jsonFile);
            if ($content === false) {
                continue;
            }

            $repos = json_decode($content, true);
            unset($content);

            if (!is_array($repos)) {
                $processed[$folder] = true;
                continue;
            }

            $ts = $snap['timestamp'];
            $date = $snap['formatted'];
            $relFile = 'dist/' . $folder . '/' . basename($jsonFile);

            foreach ($repos as $r) {
                $fullName = $r['full_name'] ?? ($r['name'] ?? '');
                if ($fullName === '') {
                    continue;
                }

                $id = (int)($r['id'] ?? 0);
                if ($id <= 0) {
                    $id = abs((int)crc32($fullName));
                }

                $stars = (int)($r['stargazers_count'] ?? 0);
                $forks = (int)($r['forks_count'] ?? 0);
                $lang = trim((string)($r['language'] ?? 'Other'));
                if ($lang === '' || strtolower($lang) === 'null' || strtolower($lang) === 'nan') {
                    $lang = 'Other';
                }

                // 维护主映射表
                $fnLower = strtolower($fullName);
                $nameLower = strtolower((string)($r['name'] ?? $fullName));
                $map[$fnLower] = $id;
                $map[$nameLower] = $id;
                $map[(string)$id] = $id;

                // 如果尚未在内存中加载该 repo 履历，尝试读取已有文件或新建
                if (!isset($repoStores[$id])) {
                    $repoFile = $this->reposDir . '/' . $id . '.json';
                    $existingData = null;
                    if (is_file($repoFile)) {
                        $c = file_get_contents($repoFile);
                        if ($c !== false) {
                            $existingData = json_decode($c, true);
                        }
                    }

                    if (is_array($existingData) && isset($existingData['history'])) {
                        $repoStores[$id] = $existingData;
                    } else {
                        $repoStores[$id] = [
                            'status' => 'success',
                            'repo' => [
                                'id' => $id,
                                'full_name' => $fullName,
                                'name' => $r['name'] ?? $fullName,
                                'html_url' => $r['html_url'] ?? ('https://github.com/' . $fullName),
                                'language' => $lang,
                                'description' => $r['desc'] ?? ($r['description'] ?? ''),
                            ],
                            'summary' => [],
                            'history' => [],
                        ];
                    }
                }

                // 更新 repo 基本信息
                $repoStores[$id]['repo']['full_name'] = $fullName;
                $repoStores[$id]['repo']['name'] = $r['name'] ?? $fullName;
                if (!empty($r['desc'])) {
                    $repoStores[$id]['repo']['description'] = $r['desc'];
                }

                // 追加履历节点（稀疏记录：仅在 Stars/Forks 改变或首节点插入）
                $history = &$repoStores[$id]['history'];
                $lastPoint = !empty($history) ? end($history) : null;

                if ($lastPoint === null || $lastPoint['stars'] !== $stars || $lastPoint['forks'] !== $forks) {
                    $history[] = [
                        'date' => $date,
                        'timestamp' => $ts,
                        'stars' => $stars,
                        'forks' => $forks,
                        'file' => $relFile,
                    ];
                }

                $reposMeta[$id] = [
                    'id' => $id,
                    'full_name' => $fullName,
                    'file' => 'repos/' . $id . '.json',
                ];
            }

            unset($repos);
            $processed[$folder] = true;
        }

        // 保存更新后的每个项目的独立 JSON 履历文件
        foreach ($repoStores as $id => $repoData) {
            $history = $repoData['history'] ?? [];
            if (!empty($history)) {
                $firstPoint = $history[0];
                $lastPoint = end($history);

                $initialStars = $firstPoint['stars'];
                $currentStars = $lastPoint['stars'];
                $starDiff = $currentStars - $initialStars;
                $growthRate = $initialStars > 0 ? round(($starDiff / $initialStars) * 100, 2) : 0;

                $repoData['summary'] = [
                    'initial_stars' => $initialStars,
                    'current_stars' => $currentStars,
                    'star_diff' => $starDiff,
                    'growth_rate' => $growthRate,
                    'first_seen' => $firstPoint['date'],
                    'last_seen' => $lastPoint['date'],
                    'data_points_count' => count($history),
                ];
            }

            $repoFile = $this->reposDir . '/' . $id . '.json';
            file_put_contents($repoFile, json_encode($repoData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        }

        $masterIndex['status'] = 'success';
        $masterIndex['updated_at'] = date('Y-m-d H:i:s');
        $masterIndex['snapshot_count'] = count($processed);
        $masterIndex['processed_snapshots'] = $processed;
        $masterIndex['map'] = $map;
        $masterIndex['repos_meta'] = $reposMeta;

        file_put_contents($this->indexFile, json_encode($masterIndex, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

        return $masterIndex;
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
}

// 仅在直接通过命令行运行 history.php 时执行（避免被 fetch.php require 引入时重复执行）
if (PHP_SAPI === 'cli' && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === realpath(__FILE__)) {
    $analyzer = new FastRepoHistoryAnalyzer();
    $force = in_array('--force', $argv ?? [], true);
    $isSync = in_array('--sync', $argv ?? [], true) || in_array('-s', $argv ?? [], true);
    $outputJson = in_array('--json', $argv ?? [], true);

    $query = '';
    foreach ($argv ?? [] as $arg) {
        if (str_starts_with($arg, '--repo=')) {
            $query = trim(substr($arg, 7));
        } elseif (str_starts_with($arg, '--id=')) {
            $query = trim(substr($arg, 5));
        } elseif (str_starts_with($arg, '--name=')) {
            $query = trim(substr($arg, 7));
        }
    }

    // 1. 同步快照
    if ($isSync) {
        echo "📊 开始同步 dist/ 快照到 repos/ 独立履历库...\n";
        $analyzer->syncDistToReposDir();
        echo "✅ 同步完成！\n";
        exit(0);
    }

    // 2. 查询指定项目履历
    if ($query !== '') {
        $result = $analyzer->getRepoHistory($query, $force);
        if ($outputJson) {
            echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . PHP_EOL;
            exit(0);
        }
        if (($result['status'] ?? '') !== 'success') {
            echo "❌ 未找到项目: {$query} (" . ($result['message'] ?? '无记录') . ")\n";
            exit(1);
        }
        $r = $result['repo'] ?? [];
        $kpi = $result['kpi'] ?? [];
        echo "========================================\n";
        echo "📦 项目: " . ($r['full_name'] ?? $query) . " (" . ($r['language'] ?? 'Other') . ")\n";
        echo "🔗 链接: " . ($r['html_url'] ?? '') . "\n";
        echo "📝 描述: " . ($r['description'] ?? '') . "\n";
        echo "----------------------------------------\n";
        echo "⭐ 当前 Stars: " . number_format((int)($kpi['current_stars'] ?? 0));
        echo " (总增量: +" . number_format((int)($kpi['star_diff'] ?? 0)) . " ★, 增长率: " . ($kpi['growth_rate'] ?? '0') . "%)\n";
        echo "🍴 当前 Forks: " . number_format((int)($kpi['current_forks'] ?? 0)) . "\n";
        echo "📅 首次记录: " . ($kpi['first_seen'] ?? '-') . " (初始 " . ($kpi['initial_stars'] ?? 0) . " ★)\n";
        echo "🕒 最近记录: " . ($kpi['latest_seen'] ?? '-') . "\n";
        echo "📊 历史快照: 共 " . count($result['history'] ?? []) . " 个点\n";
        echo "========================================\n";
        exit(0);
    }

    // 3. 默认输出状态与帮助
    $index = $analyzer->loadMasterIndex();
    $repoCount = count($index['repos_meta'] ?? []);
    $snapshotCount = count($index['processed_snapshots'] ?? []);
    echo "====================================================\n";
    echo "📜 GitHub Starred 项目历史履历管理工具 (history.php)\n";
    echo "====================================================\n";
    echo "  📦 履历库仓库总数: " . number_format($repoCount) . " 个\n";
    echo "  📸 已同步快照批次: " . number_format($snapshotCount) . " 个\n";
    echo "  🕒 索引更新时间:   " . ($index['updated_at'] ?? '未知') . "\n";
    echo "----------------------------------------------------\n";
    echo "💡 常用命令用法：\n";
    echo "  1. 查询单项目履历:  php history.php --repo=仓库名或ID\n";
    echo "  2. 同步 dist/ 快照: php history.php --sync\n";
    echo "====================================================\n";
    exit(0);
}
