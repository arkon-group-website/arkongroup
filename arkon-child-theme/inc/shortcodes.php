<?php
if (!defined('ABSPATH')) {
    exit;
}

add_shortcode('arkon_year', function () {
    return esc_html(wp_date('Y'));
});
