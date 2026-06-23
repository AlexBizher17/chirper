<?php

// === SETUP UNTUK VERCEL SERVERLESS (LARAVEL 12) ===

// 1. Set semua path writable Laravel ke /tmp (satu-satunya folder writable di Vercel)
$tmpPaths = [
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/testing',
    '/tmp/storage/logs',
    '/tmp/views',
    '/tmp/bootstrap',
    '/tmp/bootstrap/cache',
];

foreach ($tmpPaths as $path) {
    if (!is_dir($path)) {
        @mkdir($path, 0755, true);
    }
}

// 2. Tampilkan error secara jelas (debug only)
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// 3. Load Laravel dari public/index.php (cara STANDAR Laravel 12)
try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    echo "<div style='padding:20px;background:#fee;color:#b11;border:1px solid #fcc;font-family:monospace;'>";
    echo "<h2>⚠️ Error Laravel di Vercel</h2>";
    echo "<p><b>Message:</b> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><b>File:</b> " . htmlspecialchars($e->getFile()) . " line " . $e->getLine() . "</p>";
    echo "<pre style='background:#fff;padding:10px;overflow:auto;font-size:11px;'>";
    echo htmlspecialchars($e->getTraceAsString());
    echo "</pre></div>";
}