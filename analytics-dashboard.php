<?php
/**
 * Quiz Analytics Dashboard
 * Shows funnel data, visitor journeys, and drop-off rates.
 */

$data_file = __DIR__ . '/analytics_data.json';
$events = [];
if (file_exists($data_file)) {
    $events = json_decode(file_get_contents($data_file), true) ?: [];
}

// Group events by visitor
$visitors = [];
foreach ($events as $ev) {
    $vid = $ev['visitor_id'];
    if (!isset($visitors[$vid])) {
        $visitors[$vid] = [
            'events' => [],
            'first_seen' => $ev['timestamp'],
            'ip' => $ev['ip'],
            'device' => strpos(strtolower($ev['user_agent']), 'mobile') !== false ? 'Mobile' : 'Desktop',
            'referrer' => $ev['referrer'] ?? '',
        ];
    }
    $visitors[$vid]['events'][] = $ev;
}

// Funnel steps
$funnel_steps = [
    'page_view' => 'Visited Quiz Page',
    'quiz_start' => 'Started Quiz',
    'q1' => 'Question 1',
    'q2' => 'Question 2',
    'q3' => 'Question 3',
    'q4' => 'Question 4',
    'q5' => 'Question 5',
    'q6' => 'Question 6',
    'q7' => 'Question 7',
    'analyzing' => 'Analyzing Screen',
    'results' => 'Saw Results',
    'cta_click' => 'Clicked Buy CTA',
];

// Count how many visitors reached each step
$funnel_counts = [];
foreach ($funnel_steps as $key => $label) {
    $funnel_counts[$key] = 0;
}

foreach ($visitors as $vid => $vdata) {
    $reached = [];
    foreach ($vdata['events'] as $ev) {
        $reached[$ev['event']] = true;
    }
    foreach ($funnel_steps as $key => $label) {
        if (isset($reached[$key])) {
            $funnel_counts[$key]++;
        }
    }
}

$total_visitors = count($visitors);
$total_events = count($events);

// Get last furthest step for each visitor
function getFurthestStep($visitor_events, $funnel_steps)
{
    $step_keys = array_keys($funnel_steps);
    $furthest = 'page_view';
    $furthest_index = 0;
    foreach ($visitor_events as $ev) {
        $idx = array_search($ev['event'], $step_keys);
        if ($idx !== false && $idx > $furthest_index) {
            $furthest = $ev['event'];
            $furthest_index = $idx;
        }
    }
    return $furthest;
}

// Today stats
$today = date('Y-m-d');
$today_visitors = [];
foreach ($visitors as $vid => $vdata) {
    if (strpos($vdata['first_seen'], $today) === 0) {
        $today_visitors[$vid] = $vdata;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Analytics Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap');

        :root {
            --bg: #0f1117;
            --bg-card: #1a1d27;
            --bg-card-hover: #22263a;
            --border: #2a2e3e;
            --text: #e4e6ef;
            --text-soft: #8b8fa3;
            --accent: #6366f1;
            --accent-light: rgba(99, 102, 241, .15);
            --green: #22c55e;
            --green-light: rgba(34, 197, 94, .15);
            --red: #ef4444;
            --red-light: rgba(239, 68, 68, .15);
            --orange: #f59e0b;
            --orange-light: rgba(245, 158, 11, .15);
            --radius: 14px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
        }

        /* Header */
        .dash-header {
            padding: 32px 40px;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }

        .dash-header h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .dash-header h1 span {
            background: var(--accent-light);
            color: var(--accent);
            padding: 4px 12px;
            border-radius: 8px;
            font-size: .7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .dash-header-meta {
            font-size: .82rem;
            color: var(--text-soft);
            font-family: 'Outfit', sans-serif;
        }

        .dash-content {
            padding: 32px 40px;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Stats Row */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
            margin-bottom: 36px;
        }

        .stat-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 24px;
            transition: all .2s;
        }

        .stat-card:hover {
            border-color: var(--accent);
            background: var(--bg-card-hover);
        }

        .stat-label {
            font-family: 'Outfit', sans-serif;
            font-size: .75rem;
            font-weight: 600;
            color: var(--text-soft);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .stat-value {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--text);
        }

        .stat-value.green {
            color: var(--green);
        }

        .stat-value.accent {
            color: var(--accent);
        }

        .stat-value.orange {
            color: var(--orange);
        }

        /* Section Title */
        .section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title span {
            font-size: 1.1rem;
        }

        /* Funnel */
        .funnel-section {
            margin-bottom: 40px;
        }

        .funnel-bar-row {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 10px;
        }

        .funnel-label {
            width: 160px;
            font-family: 'Outfit', sans-serif;
            font-size: .82rem;
            font-weight: 500;
            color: var(--text-soft);
            text-align: right;
            flex-shrink: 0;
        }

        .funnel-bar-wrap {
            flex: 1;
            height: 32px;
            background: var(--bg-card);
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            border: 1px solid var(--border);
        }

        .funnel-bar-fill {
            height: 100%;
            border-radius: 8px;
            transition: width 1s cubic-bezier(.4, 0, .2, 1);
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 12px;
            min-width: 40px;
        }

        .funnel-bar-fill.green {
            background: linear-gradient(90deg, rgba(34, 197, 94, .3), rgba(34, 197, 94, .15));
        }

        .funnel-bar-fill.accent {
            background: linear-gradient(90deg, rgba(99, 102, 241, .3), rgba(99, 102, 241, .15));
        }

        .funnel-bar-fill.orange {
            background: linear-gradient(90deg, rgba(245, 158, 11, .3), rgba(245, 158, 11, .15));
        }

        .funnel-bar-fill.red {
            background: linear-gradient(90deg, rgba(239, 68, 68, .3), rgba(239, 68, 68, .15));
        }

        .funnel-count {
            font-family: 'Outfit', sans-serif;
            font-size: .78rem;
            font-weight: 700;
            color: var(--text);
            white-space: nowrap;
        }

        .funnel-pct {
            width: 60px;
            text-align: right;
            font-family: 'Outfit', sans-serif;
            font-size: .82rem;
            font-weight: 600;
            color: var(--text-soft);
            flex-shrink: 0;
        }

        .funnel-drop {
            width: 80px;
            text-align: right;
            font-family: 'Outfit', sans-serif;
            font-size: .72rem;
            font-weight: 600;
            flex-shrink: 0;
        }

        .funnel-drop.loss {
            color: var(--red);
        }

        .funnel-drop.none {
            color: var(--text-soft);
        }

        /* Visitors Table */
        .visitors-section {
            margin-bottom: 40px;
        }

        .visitors-table-wrap {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            overflow: hidden;
        }

        .visitors-table {
            width: 100%;
            border-collapse: collapse;
        }

        .visitors-table th {
            font-family: 'Outfit', sans-serif;
            font-size: .72rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-soft);
            padding: 16px 18px;
            text-align: left;
            border-bottom: 1px solid var(--border);
            background: rgba(255, 255, 255, .02);
        }

        .visitors-table td {
            padding: 14px 18px;
            font-size: .85rem;
            color: var(--text);
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }

        .visitors-table tr:last-child td {
            border-bottom: none;
        }

        .visitors-table tr:hover td {
            background: var(--bg-card-hover);
        }

        .step-badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 6px;
            font-family: 'Outfit', sans-serif;
            font-size: .72rem;
            font-weight: 600;
        }

        .step-badge.early {
            background: var(--red-light);
            color: var(--red);
        }

        .step-badge.mid {
            background: var(--orange-light);
            color: var(--orange);
        }

        .step-badge.late {
            background: var(--accent-light);
            color: var(--accent);
        }

        .step-badge.complete {
            background: var(--green-light);
            color: var(--green);
        }

        .device-badge {
            font-size: .72rem;
            padding: 2px 8px;
            border-radius: 4px;
            background: rgba(255, 255, 255, .06);
            color: var(--text-soft);
            font-family: 'Outfit', sans-serif;
            font-weight: 500;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 80px 20px;
            color: var(--text-soft);
        }

        .empty-state .icon {
            font-size: 3rem;
            margin-bottom: 16px;
            display: block;
        }

        .empty-state h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            margin-bottom: 8px;
            color: var(--text);
        }

        .refresh-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--accent);
            color: #fff;
            padding: 10px 24px;
            border-radius: 10px;
            font-family: 'Outfit', sans-serif;
            font-size: .85rem;
            font-weight: 600;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all .2s;
        }

        .refresh-btn:hover {
            background: #4f46e5;
            transform: translateY(-1px);
        }

        .reset-btn {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: transparent;
            color: var(--red);
            padding: 6px 16px;
            border-radius: 8px;
            font-family: 'Outfit', sans-serif;
            font-size: .78rem;
            font-weight: 600;
            text-decoration: none;
            border: 1px solid rgba(239, 68, 68, .3);
            cursor: pointer;
            transition: all .2s;
            margin-left: 10px;
        }

        .reset-btn:hover {
            background: var(--red-light);
            border-color: var(--red);
        }

        /* Confirmation Modal */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .6);
            backdrop-filter: blur(4px);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.visible {
            display: flex;
        }

        .modal-box {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 36px;
            max-width: 420px;
            width: 90%;
            text-align: center;
            animation: fadeSlideIn .25s ease;
        }

        @keyframes fadeSlideIn {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-icon {
            font-size: 2.5rem;
            margin-bottom: 16px;
            display: block;
        }

        .modal-title {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 10px;
        }

        .modal-desc {
            font-size: .88rem;
            color: var(--text-soft);
            margin-bottom: 28px;
            line-height: 1.6;
        }

        .modal-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
        }

        .modal-cancel {
            padding: 10px 28px;
            border-radius: 10px;
            font-family: 'Outfit', sans-serif;
            font-size: .85rem;
            font-weight: 600;
            border: 1px solid var(--border);
            background: transparent;
            color: var(--text-soft);
            cursor: pointer;
            transition: all .2s;
        }

        .modal-cancel:hover {
            background: rgba(255, 255, 255, .05);
            color: var(--text);
        }

        .modal-confirm-delete {
            padding: 10px 28px;
            border-radius: 10px;
            font-family: 'Outfit', sans-serif;
            font-size: .85rem;
            font-weight: 600;
            border: none;
            background: var(--red);
            color: #fff;
            cursor: pointer;
            transition: all .2s;
        }

        .modal-confirm-delete:hover {
            background: #dc2626;
            transform: translateY(-1px);
        }

        /* Responsive */
        @media (max-width: 768px) {

            .dash-header,
            .dash-content {
                padding: 20px 16px;
            }

            .funnel-label {
                width: 100px;
                font-size: .72rem;
            }

            .funnel-drop {
                display: none;
            }

            .visitors-table-wrap {
                overflow-x: auto;
            }

            .visitors-table {
                min-width: 600px;
            }
        }
    </style>
</head>

<body>

    <div class="dash-header">
        <h1>📊 Quiz Analytics <span>Live</span></h1>
        <div class="dash-header-meta">
            Last updated:
            <?php echo date('M j, Y — H:i'); ?> &nbsp;|&nbsp;
            <a href="analytics-dashboard.php" class="refresh-btn"
                style="display:inline;padding:4px 12px;font-size:.75rem;">↻ Refresh</a>
            <button class="reset-btn" onclick="showResetModal()">🗑 Reset Data</button>
        </div>
    </div>

    <div class="dash-content">

        <?php if ($total_visitors === 0): ?>
            <div class="empty-state">
                <span class="icon">📭</span>
                <h3>No visitors yet</h3>
                <p>Once people start taking the quiz, their journey will appear here.</p>
            </div>
        <?php else: ?>

            <!-- Stats Row -->
            <div class="stats-row">
                <div class="stat-card">
                    <div class="stat-label">Total Visitors</div>
                    <div class="stat-value accent">
                        <?php echo $total_visitors; ?>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Today's Visitors</div>
                    <div class="stat-value">
                        <?php echo count($today_visitors); ?>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Quiz Completions</div>
                    <div class="stat-value green">
                        <?php echo $funnel_counts['results'] ?? 0; ?>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">CTA Clicks</div>
                    <div class="stat-value orange">
                        <?php echo $funnel_counts['cta_click'] ?? 0; ?>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Completion Rate</div>
                    <div class="stat-value green">
                        <?php
                        $starts = max($funnel_counts['quiz_start'], 1);
                        echo round(($funnel_counts['results'] / $starts) * 100) . '%';
                        ?>
                    </div>
                </div>
            </div>

            <!-- Funnel -->
            <div class="funnel-section">
                <div class="section-title"><span>🔻</span> Quiz Funnel</div>
                <?php
                $max = max(1, max($funnel_counts));
                $prev_count = null;
                $step_colors = [
                    'page_view' => 'green',
                    'quiz_start' => 'green',
                    'q1' => 'accent',
                    'q2' => 'accent',
                    'q3' => 'accent',
                    'q4' => 'accent',
                    'q5' => 'accent',
                    'q6' => 'accent',
                    'q7' => 'accent',
                    'analyzing' => 'orange',
                    'results' => 'orange',
                    'cta_click' => 'green',
                ];
                foreach ($funnel_steps as $key => $label):
                    $count = $funnel_counts[$key];
                    $pct_of_total = $total_visitors > 0 ? round(($count / $total_visitors) * 100) : 0;
                    $bar_w = $max > 0 ? max(3, round(($count / $max) * 100)) : 0;
                    $drop = '';
                    $drop_class = 'none';
                    if ($prev_count !== null && $prev_count > 0) {
                        $lost = $prev_count - $count;
                        if ($lost > 0) {
                            $drop = '-' . $lost . ' (' . round(($lost / $prev_count) * 100) . '%)';
                            $drop_class = 'loss';
                        }
                    }
                    $color = $step_colors[$key] ?? 'accent';
                    $prev_count = $count;
                    ?>
                    <div class="funnel-bar-row">
                        <div class="funnel-label">
                            <?php echo $label; ?>
                        </div>
                        <div class="funnel-bar-wrap">
                            <div class="funnel-bar-fill <?php echo $color; ?>" style="width: <?php echo $bar_w; ?>%;">
                                <span class="funnel-count">
                                    <?php echo $count; ?>
                                </span>
                            </div>
                        </div>
                        <div class="funnel-pct">
                            <?php echo $pct_of_total; ?>%
                        </div>
                        <div class="funnel-drop <?php echo $drop_class; ?>">
                            <?php echo $drop ?: '—'; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Recent Visitors -->
            <div class="visitors-section">
                <div class="section-title"><span>👥</span> Recent Visitors (Last 50)</div>
                <div class="visitors-table-wrap">
                    <table class="visitors-table">
                        <thead>
                            <tr>
                                <th>Visitor</th>
                                <th>First Seen</th>
                                <th>Device</th>
                                <th>Furthest Step</th>
                                <th>Steps Taken</th>
                                <th>Source</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sorted_visitors = $visitors;
                            uasort($sorted_visitors, function ($a, $b) {
                                return strcmp($b['first_seen'], $a['first_seen']);
                            });
                            $shown = 0;
                            foreach ($sorted_visitors as $vid => $vdata):
                                if ($shown >= 50)
                                    break;
                                $shown++;
                                $furthest = getFurthestStep($vdata['events'], $funnel_steps);
                                $furthest_label = $funnel_steps[$furthest] ?? $furthest;
                                $step_count = count($vdata['events']);

                                // Badge class
                                $step_keys = array_keys($funnel_steps);
                                $furthest_idx = array_search($furthest, $step_keys);
                                if ($furthest_idx >= 10)
                                    $badge_class = 'complete';
                                elseif ($furthest_idx >= 8)
                                    $badge_class = 'late';
                                elseif ($furthest_idx >= 3)
                                    $badge_class = 'mid';
                                else
                                    $badge_class = 'early';

                                $short_id = substr($vid, 0, 8);
                                $referrer = $vdata['referrer'] ?: '(Direct)';
                                if (strlen($referrer) > 30)
                                    $referrer = substr($referrer, 0, 30) . '…';
                                ?>
                                <tr>
                                    <td><code
                                            style="font-size:.78rem;color:var(--accent);">#<?php echo htmlspecialchars($short_id); ?></code>
                                    </td>
                                    <td>
                                        <?php echo htmlspecialchars($vdata['first_seen']); ?>
                                    </td>
                                    <td><span class="device-badge">
                                            <?php echo $vdata['device']; ?>
                                        </span></td>
                                    <td><span class="step-badge <?php echo $badge_class; ?>">
                                            <?php echo htmlspecialchars($furthest_label); ?>
                                        </span></td>
                                    <td>
                                        <?php echo $step_count; ?> events
                                    </td>
                                    <td style="font-size:.78rem;color:var(--text-soft);">
                                        <?php echo htmlspecialchars($referrer); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <?php endif; ?>

    </div>

    <!-- Reset Confirmation Modal -->
    <div class="modal-overlay" id="resetModal">
        <div class="modal-box">
            <span class="modal-icon">⚠️</span>
            <div class="modal-title">Reset All Analytics Data?</div>
            <p class="modal-desc">This will <strong>permanently delete</strong> all visitor data, funnel stats, and
                event history. This action cannot be undone.</p>
            <div class="modal-actions">
                <button class="modal-cancel" onclick="hideResetModal()">Cancel</button>
                <button class="modal-confirm-delete" onclick="confirmReset()">Yes, Delete Everything</button>
            </div>
        </div>
    </div>

    <script>
        function showResetModal() {
            document.getElementById('resetModal').classList.add('visible');
        }

        function hideResetModal() {
            document.getElementById('resetModal').classList.remove('visible');
        }

        // Close modal if clicking outside the box
        document.getElementById('resetModal').addEventListener('click', function (e) {
            if (e.target === this) hideResetModal();
        });

        function confirmReset() {
            const btn = document.querySelector('.modal-confirm-delete');
            btn.textContent = 'Deleting...';
            btn.disabled = true;

            fetch('analytics.php', { method: 'DELETE' })
                .then(res => res.json())
                .then(() => {
                    window.location.reload();
                })
                .catch(() => {
                    btn.textContent = 'Error — Try Again';
                    btn.disabled = false;
                });
        }
    </script>

</body>

</html>