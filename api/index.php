<?php

/*
|--------------------------------------------------------------------------
| Pintu masuk aplikasi di Vercel (serverless)
|--------------------------------------------------------------------------
| Di Vercel, sistem berkas aplikasi bersifat read-only; hanya /tmp yang
| boleh ditulis. Karena itu lokasi penyimpanan, cache, dan view terkompilasi
| dialihkan ke /tmp sebelum Laravel dijalankan.
*/

$tmp = '/tmp';
$storage = $tmp . '/storage';

foreach (
    [
        $storage . '/app',
        $storage . '/framework/cache/data',
        $storage . '/framework/sessions',
        $storage . '/framework/views',
        $storage . '/logs',
    ] as $dir
) {
    if (! is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

$pengaturan = [
    'LARAVEL_STORAGE_PATH' => $storage,
    'VIEW_COMPILED_PATH' => $storage . '/framework/views',
    'APP_CONFIG_CACHE' => $tmp . '/config.php',
    'APP_EVENTS_CACHE' => $tmp . '/events.php',
    'APP_PACKAGES_CACHE' => $tmp . '/packages.php',
    'APP_ROUTES_CACHE' => $tmp . '/routes.php',
    'APP_SERVICES_CACHE' => $tmp . '/services.php',
];

foreach ($pengaturan as $kunci => $nilai) {
    putenv("$kunci=$nilai");
    $_ENV[$kunci] = $nilai;
    $_SERVER[$kunci] = $nilai;
}

/*
| Skrip ini berada di folder /api, sehingga Laravel mengira "/api" adalah
| bagian dari alamat dasar dan membuang kata "api" dari URL seperti
| /api/buku (hasilnya 404). Dengan menyamakan lokasi skrip dengan
| public/index.php, URL dibaca utuh seperti di lokal.
*/
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['PHP_SELF'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

// Teruskan permintaan ke index.php bawaan Laravel
require __DIR__ . '/../public/index.php';
