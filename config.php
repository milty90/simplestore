<?php

const API_BASE = 'https://simplestore-production-a495.up.railway.app/products.php' ?? 'http://localhost/simplestore/products.php';

const BASE_URL = 'https://simplestore-production-a495.up.railway.app';

const CACHE_TTL = 30;

function fetch_json(string $path): array{
    $cacheFile = sys_get_temp_dir() . '/shop_' . md5($path) . '.json';


    if (is_file($cacheFile) && time() - filemtime($cacheFile) < CACHE_TTL) {
        return ['code' => 200, 'data' => json_decode(file_get_contents($cacheFile), true)];
    }

    $ch = curl_init(API_BASE . $path);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT => 2,
        CURLOPT_TIMEOUT        => 4,

       
    ]);
    $body = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $data = $body !== false ? json_decode($body, true) : null;
   
    if ($code === 200 && is_array($data)) {
        file_put_contents($cacheFile, $body, LOCK_EX);
        return ['code' => 200, 'data' => $data];
    }

    if (is_file($cacheFile)) {
        return ['code' => 200, 'data' => json_decode(file_get_contents($cacheFile), true)];
    }
    return ['code' => $code ?: 502, 'data' => null];
}

function h($v): string { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }

function safe_img($url): string {
    return preg_match('#^https://#i', (string)$url) ? $url : '';
}