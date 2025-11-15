<?php
/**
 * Local Development Config
 * Заменяет WordPress функции для локальной разработки
 */

// Базовый путь к теме
define('THEME_DIR', __DIR__);

// Определяем базовый URI динамически
// Вычисляем правильный базовый путь в зависимости от текущего запроса
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$script_name = $_SERVER['SCRIPT_NAME'] ?? '/router.php';

// Если запрос идет через router.php, базовый путь - корень
if (strpos($script_name, 'router.php') !== false) {
    define('THEME_URI', '/');
} else {
    // Иначе вычисляем относительно текущего скрипта
    $script_dir = dirname($script_name);
    if ($script_dir === '/' || $script_dir === '\\' || $script_dir === '.') {
        define('THEME_URI', '/');
    } else {
        define('THEME_URI', rtrim($script_dir, '/') . '/');
    }
}

/**
 * Замена get_template_directory_uri()
 */
function get_template_directory_uri() {
    return THEME_URI;
}

/**
 * Замена edelweiss_image_url()
 */
function edelweiss_image_url($filename) {
    return THEME_URI . 'assets/images/' . $filename;
}

/**
 * Замена edelweiss_asset_url()
 */
function edelweiss_asset_url($path) {
    return THEME_URI . 'assets/' . ltrim($path, '/');
}

/**
 * Замена bloginfo()
 */
function bloginfo($show = '') {
    switch ($show) {
        case 'charset':
            echo 'UTF-8';
            break;
        case 'name':
            echo 'Edelweiss Garden';
            break;
        default:
            echo '';
    }
}

/**
 * Замена language_attributes()
 */
function language_attributes() {
    echo 'lang="ru"';
}

/**
 * Замена body_class()
 */
function body_class($classes = '') {
    $classes = is_array($classes) ? $classes : explode(' ', $classes);
    $classes[] = 'min-h-screen';
    $classes[] = 'bg-background';
    echo 'class="' . implode(' ', array_filter($classes)) . '"';
}

/**
 * Замена wp_head() - подключаем стили и скрипты
 */
function wp_head() {
    ?>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo THEME_URI; ?>assets/css/custom.css?v=<?php echo time(); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo edelweiss_image_url('favicon.png'); ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo edelweiss_image_url('favicon.png'); ?>">
    
    <title>Edelweiss Garden - Детский сад</title>
    <?php
}

/**
 * Замена wp_body_open()
 */
function wp_body_open() {
    // Пустая функция для совместимости
}

/**
 * Замена wp_footer() - подключаем скрипты
 */
function wp_footer() {
    ?>
    <!-- Main JavaScript -->
    <script src="<?php echo THEME_URI; ?>assets/js/main.js?v=<?php echo time(); ?>"></script>
    
    <!-- Mobile Menu JavaScript -->
    <script src="<?php echo THEME_URI; ?>assets/js/mobile-menu.js?v=<?php echo time(); ?>"></script>
    <?php
}

/**
 * Замена get_header()
 */
function get_header() {
    include THEME_DIR . '/header.php';
}

/**
 * Замена get_footer()
 */
function get_footer() {
    include THEME_DIR . '/footer.php';
}

/**
 * Замена get_template_part()
 */
function get_template_part($slug, $name = null) {
    $templates = array();
    $name = (string) $name;
    if ('' !== $name) {
        $templates[] = "{$slug}-{$name}.php";
    }
    $templates[] = "{$slug}.php";
    
    $template_file = THEME_DIR . '/template-parts/' . $templates[0];
    
    if (file_exists($template_file)) {
        include $template_file;
    }
}

/**
 * Замена esc_html() - экранирование HTML
 */
function esc_html($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * Замена esc_attr() - экранирование атрибутов
 */
function esc_attr($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * Роутинг для многостраничного сайта
 */
function get_current_page() {
    $request_uri = $_SERVER['REQUEST_URI'] ?? '/';
    $request_uri = parse_url($request_uri, PHP_URL_PATH);
    $request_uri = rtrim($request_uri, '/');
    
    // Убираем начальный слеш
    if ($request_uri === '' || $request_uri === '/') {
        return 'index';
    }
    
    // Убираем первый слеш
    $request_uri = ltrim($request_uri, '/');
    
    // Разрешенные страницы
    $allowed_pages = [
        'index' => 'index.php',
        'about' => 'about.php',
        'groups' => 'groups.php',
        'programs' => 'programs.php',
        'pricing' => 'pricing.php',
        'adaptation' => 'adaptation.php',
        'enrollment' => 'enrollment.php',
        'contacts' => 'contacts.php',
    ];
    
    // Проверяем, существует ли страница
    if (isset($allowed_pages[$request_uri])) {
        return $request_uri;
    }
    
    // По умолчанию возвращаем главную
    return 'index';
}

/**
 * Получить путь к файлу страницы
 */
function get_page_template($page) {
    $page_file = THEME_DIR . '/' . $page . '.php';
    if (file_exists($page_file)) {
        return $page_file;
    }
    return THEME_DIR . '/index.php';
}
