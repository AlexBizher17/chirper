<?php

// Jalankan autoloader bawaan Laravel
require __DIR__ . '/../vendor/autoload.php';

// Jalankan aplikasi Laravel bootstrap
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Proses request yang masuk
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);