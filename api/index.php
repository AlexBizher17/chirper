<?php

// 1. Tampilkan eror secara gamblang
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Buat folder penyimpanan views sementara di memori Vercel
$cacheDir = '/tmp/storage/framework/views';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
}

try {
    // 3. Muat aplikasi Laravel seperti biasa
    $app = require __DIR__ . '/../bootstrap/app.php';
    
    // 4. PAKSA mendaftarkan View Service Provider agar tidak amnesia lagi
    $app->register(Illuminate\View\ViewServiceProvider::class);
    
    // 5. Setel ulang path storage ke folder tmp memori Vercel
    $app->useStoragePath('/tmp');

    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );
    $response->send();
    $kernel->terminate($request, $response);

} catch (\Throwable $e) {
    echo "<div style='padding:20px; background:#fee; color:#b11; border:1px solid #fcc; font-family:sans-serif;'>";
    echo "<h2>Aha! Terdeteksi Eror Sistem:</h2>";
    echo "<p><b>Pesan:</b> " . $e->getMessage() . "</p>";
    echo "<p><b>File:</b> " . $e->getFile() . " pada baris " . $e->getLine() . "</p>";
    echo "</div>";
    exit;
}