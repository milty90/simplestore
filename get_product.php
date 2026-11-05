<?php

require __DIR__ . '/config.php';
header('Content-Type: application/json; charset=utf-8');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id || $id < 1) {
    http_response_code(400);
    exit(json_encode(['error' => 'Érvénytelen ID']));
}

$r = fetch_json('?id=' . $id);
if ($r['data'] === null) {
    http_response_code($r['code'] === 404 ? 404 : 502);
    exit(json_encode(['error' => 'Termék nem érhető el']));
}

$p = $r['data'];
$p['img'] = safe_img($p['img'] ?? '');
header('Cache-Control: public, max-age=60');
echo json_encode($p, JSON_UNESCAPED_UNICODE);