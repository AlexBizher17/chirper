<?php

// 1. Daftarkan autoloader Composer agar pihak ketiga terbaca
require __DIR__ . '/../vendor/autoload.php';

// 2. Setel folder penyimpanan log/cache sementara di folder /tmp bawaan Vercel
// Ini krusial karena Vercel bersifat "read-only" (tidak bisa menulis file baru di folder biasa)
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath('/tmp');

// 3. Jalankan kernel aplikasi Laravel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);