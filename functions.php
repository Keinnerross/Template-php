<?php

add_action('wp_enqueue_scripts', 'custom_enqueue_styles');

function custom_enqueue_styles()
{
    wp_enqueue_style(
        'headers-style',
        get_stylesheet_directory_uri() . '/assets/styles/headers.css',
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'footers-style',
        get_stylesheet_directory_uri() . '/assets/styles/footers.css',
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'home-style',
        get_stylesheet_directory_uri() . '/assets/styles/home.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
?>