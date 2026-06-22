<?php

// 1. Paksa PHP untuk menampilkan eror apa pun ke layar secara radikal
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Buat folder penyimpanan darurat di memori Vercel agar Laravel tidak mogok
$cacheDir = '/tmp/storage/framework/views';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
}

// 3. Jalankan aplikasi Laravel seperti biasa
try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    // Jika Laravel mogok di tengah jalan, tangkap erornya dan cetak di layar browser!
    echo "<div style='padding:20px; background:#fee; color:#b11; border:1px solid #fcc; font-family:sans-serif;'>";
    echo "<h2>Aha! Terdeteksi Eror Sistem:</h2>";
    echo "<p><b>Pesan:</b> " . $e->getMessage() . "</p>";
    echo "<p><b>File:</b> " . $e->getFile() . " pada baris " . $e->getLine() . "</p>";
    echo "</div>";
    exit;
}