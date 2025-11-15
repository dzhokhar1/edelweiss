<?php
/**
 * Router для PHP встроенного сервера
 * Запуск: php -S localhost:8000 router.php
 */

// Если запрос к статическому файлу (CSS, JS, изображения и т.д.), отдаем его как есть
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$request_path = parse_url($request_uri, PHP_URL_PATH);

// Проверяем, является ли запрос к статическому файлу
$static_extensions = ['css', 'js', 'jpg', 'jpeg', 'png', 'gif', 'svg', 'webp', 'ico', 'woff', 'woff2', 'ttf', 'eot'];
$extension = pathinfo($request_path, PATHINFO_EXTENSION);

if (in_array(strtolower($extension), $static_extensions)) {
    // Отдаем статический файл, если он существует
    $file_path = __DIR__ . $request_path;
    if (file_exists($file_path) && is_file($file_path)) {
        // Определяем MIME тип
        $mime_types = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'webp' => 'image/webp',
            'ico' => 'image/x-icon',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/ttf',
            'eot' => 'application/vnd.ms-fontobject',
        ];
        $mime_type = $mime_types[strtolower($extension)] ?? 'application/octet-stream';
        
        header('Content-Type: ' . $mime_type);
        readfile($file_path);
        exit;
    }
    // Если файл не найден, возвращаем 404
    http_response_code(404);
    exit;
}

require_once __DIR__ . '/config.php';

$current_page = get_current_page();
$page_file = get_page_template($current_page);

if (file_exists($page_file)) {
    include $page_file;
} else {
    // 404 - страница не найдена
    http_response_code(404);
    include __DIR__ . '/index.php';
}

