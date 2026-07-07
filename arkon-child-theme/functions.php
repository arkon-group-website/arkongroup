<?php
/**
 * ARKON Group child theme functions.
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('ARKON_CHILD_THEME_VERSION')) {
    define('ARKON_CHILD_THEME_VERSION', '1.0.0');
}

function arkon_child_asset_version($relative_path)
{
    $path = trailingslashit(get_stylesheet_directory()) . ltrim($relative_path, '/');

    if (file_exists($path)) {
        return (string) filemtime($path);
    }

    return ARKON_CHILD_THEME_VERSION;
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

add_action('wp_enqueue_scripts', function () {
    $uri = get_stylesheet_directory_uri();

    wp_enqueue_style(
        'arkon-child-style',
        get_stylesheet_uri(),
        [],
        arkon_child_asset_version('style.css')
    );

    wp_enqueue_style(
        'arkon-global',
        $uri . '/assets/css/arkon-global.css',
        ['arkon-child-style'],
        arkon_child_asset_version('assets/css/arkon-global.css')
    );

    $scripts = [
        'arkon-animations' => 'assets/js/arkon-animations.js',
        'arkon-3d-loader' => 'assets/js/arkon-3d-loader.js',
    ];

    foreach ($scripts as $handle => $relative_path) {
        wp_enqueue_script(
            $handle,
            $uri . '/' . $relative_path,
            [],
            arkon_child_asset_version($relative_path),
            true
        );

        wp_script_add_data($handle, 'strategy', 'defer');
    }
});

require_once trailingslashit(get_stylesheet_directory()) . 'inc/schema.php';
require_once trailingslashit(get_stylesheet_directory()) . 'inc/shortcodes.php';
