<?php
/**
 * ARKON Group child theme functions.
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', function () {
    $base = get_stylesheet_directory();
    $uri = get_stylesheet_directory_uri();

    wp_enqueue_style(
        'arkon-global',
        $uri . '/assets/css/arkon-global.css',
        [],
        file_exists($base . '/assets/css/arkon-global.css') ? filemtime($base . '/assets/css/arkon-global.css') : '1.0.0'
    );

    wp_enqueue_script(
        'arkon-animations',
        $uri . '/assets/js/arkon-animations.js',
        [],
        file_exists($base . '/assets/js/arkon-animations.js') ? filemtime($base . '/assets/js/arkon-animations.js') : '1.0.0',
        true
    );

    wp_enqueue_script(
        'arkon-3d-loader',
        $uri . '/assets/js/arkon-3d-loader.js',
        [],
        file_exists($base . '/assets/js/arkon-3d-loader.js') ? filemtime($base . '/assets/js/arkon-3d-loader.js') : '1.0.0',
        true
    );
});

require_once get_stylesheet_directory() . '/inc/schema.php';
require_once get_stylesheet_directory() . '/inc/shortcodes.php';
