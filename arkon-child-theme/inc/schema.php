<?php
if (!defined('ABSPATH')) {
    exit;
}

function arkon_schema_url($path = '/')
{
    return esc_url(home_url($path));
}

function arkon_schema_country()
{
    return [
        '@type' => 'Country',
        'name' => 'Saudi Arabia',
    ];
}

function arkon_schema_service_offers($services)
{
    return array_map(function ($service) {
        return [
            '@type' => 'Offer',
            'itemOffered' => [
                '@type' => 'Service',
                'name' => $service,
            ],
        ];
    }, $services);
}

function arkon_schema_department($path, $name, $alternate_name, $description, $services)
{
    return [
        '@type' => 'Organization',
        '@id' => arkon_schema_url($path . '#organization'),
        'name' => $name,
        'alternateName' => $alternate_name,
        'url' => arkon_schema_url($path),
        'description' => $description,
        'parentOrganization' => [
            '@id' => arkon_schema_url('/#organization'),
        ],
        'areaServed' => arkon_schema_country(),
        'makesOffer' => arkon_schema_service_offers($services),
    ];
}

function arkon_schema_departments()
{
    return [
        arkon_schema_department(
            '/companies/arkon-engineering-consultancy/',
            'ARKON Engineering Consultancy Co.',
            'AEC',
            'Engineering consultancy, fire and life safety, infrastructure, traffic, hydrology, supervision, and design review.',
            [
                'Engineering consultancy',
                'Fire and life safety',
                'Traffic impact studies',
                'Hydrology and drainage studies',
                'Infrastructure engineering',
                'Construction supervision',
                'Design review',
            ]
        ),
        arkon_schema_department(
            '/companies/elite-security-consultancy/',
            'ELITE Security Consultancy Co.',
            'ELITE',
            'SAIS/HCIS security consultancy, security risk assessment, authority readiness, and operational readiness.',
            [
                'SAIS/HCIS consultancy',
                'Security risk assessment',
                'Concept of security design',
                'Operational readiness',
                'Data center security advisory',
                'SEC-21 passive defence advisory',
            ]
        ),
        arkon_schema_department(
            '/companies/integrated-building-systems/',
            'Integrated Building Systems',
            'IBS',
            'Construction and technical works including civil works, MEP, finishing, steel structures, maintenance, and prefabricated units.',
            [
                'Civil works',
                'MEP works',
                'Finishing works',
                'Steel structures',
                'Building maintenance',
                'Fire alarm and fire protection works',
                'Porta cabins and prefabricated units',
            ]
        ),
        arkon_schema_department(
            '/companies/quality-inspection-company/',
            'Quality Inspection Company',
            'QIC',
            'Soil, concrete, asphalt, foundation, material, water, and air quality testing.',
            [
                'Soil testing',
                'Concrete testing',
                'Asphalt testing',
                'Foundation testing',
                'Construction material testing',
                'Geotechnical studies',
                'Water and air quality testing',
            ]
        ),
        arkon_schema_department(
            '/companies/turning-point-digital-marketing/',
            'Turning Point Digital Marketing Co.',
            'TP Digital',
            'Digital marketing, campaigns, social media, content creation, podcast studio services, and digital management software.',
            [
                'Digital marketing strategy',
                'Social media management',
                'Paid campaigns',
                'Content creation',
                'Podcast studio services',
                'Digital management software',
                'Performance reporting',
            ]
        ),
    ];
}

add_action('wp_head', function () {
    if (!function_exists('is_front_page') || !is_front_page()) {
        return;
    }

    $organization = [
        '@type' => 'Organization',
        '@id' => arkon_schema_url('/#organization'),
        'name' => 'ARKON Group',
        'url' => arkon_schema_url('/'),
        'description' => 'ARKON Group is a Saudi multidisciplinary group providing engineering consultancy, security consultancy, construction support, quality inspection, and digital marketing solutions.',
        'email' => 'info@arkongroup.com.sa',
        'areaServed' => arkon_schema_country(),
        'knowsAbout' => [
            'Engineering consultancy',
            'Fire and life safety',
            'Security consultancy',
            'Construction support',
            'Quality inspection',
            'Soil testing',
            'Digital marketing',
        ],
        'department' => arkon_schema_departments(),
    ];

    $website = [
        '@type' => 'WebSite',
        '@id' => arkon_schema_url('/#website'),
        'name' => 'ARKON Group',
        'url' => arkon_schema_url('/'),
        'publisher' => [
            '@id' => arkon_schema_url('/#organization'),
        ],
        'about' => [
            '@id' => arkon_schema_url('/#organization'),
        ],
        'inLanguage' => [
            'en',
            'ar',
        ],
    ];

    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            $organization,
            $website,
        ],
    ];

    echo '<script type="application/ld+json" id="arkon-schema">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . PHP_EOL;
});
