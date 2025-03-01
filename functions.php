<?php

function ms_theme_enqueue_assets() {
    wp_enqueue_style(
        'ms-theme-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        filemtime(get_template_directory() . '/assets/css/style.css')
    );
}

add_action('wp_enqueue_scripts', 'ms_theme_enqueue_assets');