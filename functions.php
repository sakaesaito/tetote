<?php



// 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');




//css.jQueryの読み込み

wp_enqueue_style(
    'theme-style',
    get_template_directory_uri() . '/style.css',
    [],
    null
);

function tetote_enqueue_scripts()
{
    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        null
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script('jquery');


    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        ['jquery', 'swiper-js'],
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'tetote_enqueue_scripts');

