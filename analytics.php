<?php
/**
 * Analytics API Endpoint
 * Receives tracking events from the quiz and stores them.
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data_file = __DIR__ . '/analytics_data.json';

// Handle POST (receive event)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);

    if (!$input || !isset($input['visitor_id']) || !isset($input['event'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing required fields']);
        exit;
    }

    $event = [
        'visitor_id' => $input['visitor_id'],
        'event' => $input['event'],       // e.g. "quiz_start", "q1", "q2", ..., "results", "cta_click"
        'answer' => $input['answer'] ?? null,
        'timestamp' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
        'referrer' => $input['referrer'] ?? '',
    ];

    // Load existing data
    $data = [];
    if (file_exists($data_file)) {
        $data = json_decode(file_get_contents($data_file), true) ?: [];
    }

    $data[] = $event;

    // Save
    file_put_contents($data_file, json_encode($data, JSON_PRETTY_PRINT));

    echo json_encode(['status' => 'ok']);
    exit;
}

// Handle GET (return data for dashboard)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!file_exists($data_file)) {
        echo json_encode([]);
        exit;
    }
    echo file_get_contents($data_file);
    exit;
}
