<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo "<div style='padding:20px; background:#fee; color:#b11; border:1px solid #fcc; font-family:sans-serif;'>";
    echo "<h2>Aha! Terdeteksi Eror Sistem:</h2>";
    echo "<p><b>Pesan:</b> " . $e->getMessage() . "</p>";
    echo "<p><b>File:</b> " . $e->getFile() . " pada baris " . $e->getLine() . "</p>";
    echo "</div>";
    exit;
}