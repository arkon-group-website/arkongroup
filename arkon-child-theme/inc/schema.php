<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_head', function () {
    if (!is_front_page()) {
        return;
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'ARKON Group',
        'url' => home_url('/'),
        'description' => 'ARKON Group is a Saudi multidisciplinary group providing engineering consultancy, security consultancy, construction support, quality inspection and digital marketing solutions.',
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'Saudi Arabia'
        ],
        'department' => [
            ['@type' => 'Organization', 'name' => 'ARKON Engineering Consultancy Co.'],
            ['@type' => 'Organization', 'name' => 'ELITE Security Consultancy Co.'],
            ['@type' => 'Organization', 'name' => 'Integrated Building Systems'],
            ['@type' => 'Organization', 'name' => 'Quality Inspection Company'],
            ['@type' => 'Organization', 'name' => 'Turning Point Digital Marketing Co.']
        ],
    ];

    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . PHP_EOL;
});
