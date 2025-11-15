<?php
/**
 * Edelweiss Garden Theme Functions
 *
 * @package EdelweissGarden
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Setup theme
 */
function edelweiss_garden_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'edelweiss-garden'),
    ));
}
add_action('after_setup_theme', 'edelweiss_garden_setup');

/**
 * Enqueue scripts and styles
 */
function edelweiss_garden_scripts() {
    $theme_version = wp_get_theme()->get('Version');
    
    // Tailwind CSS via CDN (можно заменить на локальную версию)
    wp_enqueue_style(
        'tailwind-css',
        'https://cdn.jsdelivr.net/npm/tailwindcss@3.4.17/dist/tailwind.min.css',
        array(),
        '3.4.17'
    );
    
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap',
        array(),
        null
    );
    
    // Custom CSS
    wp_enqueue_style(
        'edelweiss-garden-style',
        get_template_directory_uri() . '/assets/css/custom.css',
        array('tailwind-css'),
        $theme_version
    );
    
    // Main JavaScript
    wp_enqueue_script(
        'edelweiss-garden-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        $theme_version,
        true
    );
    
    // Mobile menu script
    wp_enqueue_script(
        'edelweiss-garden-mobile-menu',
        get_template_directory_uri() . '/assets/js/mobile-menu.js',
        array(),
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'edelweiss_garden_scripts');

/**
 * Get theme asset URL
 */
function edelweiss_asset_url($path) {
    return get_template_directory_uri() . '/assets/' . ltrim($path, '/');
}

/**
 * Get image URL
 */
function edelweiss_image_url($filename) {
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

/**
 * Add custom body classes
 */
function edelweiss_garden_body_classes($classes) {
    $classes[] = 'min-h-screen bg-background';
    return $classes;
}
add_filter('body_class', 'edelweiss_garden_body_classes');

