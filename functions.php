<?php
function theme_enqueue_files()
{
    // テーマCSS
    wp_enqueue_style('theme-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));

    // Lightbox
    wp_enqueue_style('lightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css', [], '2.11.4');

    // Swiper
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], '11.0.0');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], '11.0.0', true);

    // // ★ WordPress 同梱の jQuery を使う
    // wp_enqueue_script('jquery');

    // ★ main.js を“最後に”読み込む（Swiper/jQueryに依存）
    wp_enqueue_script(
        'theme-main',
        get_template_directory_uri() . '/js/main.js',
        ['jquery', 'swiper-js'],
        filemtime(get_template_directory() . '/js/main.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'theme_enqueue_files');
