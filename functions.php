<?php
function theme_enqueue_files()
{
    // テーマCSS
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    // Lightbox
    wp_enqueue_style(
        'lightbox-css',
        'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css',
        [],
        '2.11.4'
    );
    // JS
    wp_enqueue_script(
        'lightbox-js',
        'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js',
        ['jquery'],
        '2.11.4',
        true
    );

    // Swiper
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
        [],
        '8.0.0'
    );
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
        [],
        '8.0.0',
        true
    );

    // ★ WordPress 同梱の jQuery を使う
    wp_enqueue_script('jquery');

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


// アイキャッチ機能を有効化
add_theme_support('post-thumbnails');


//  // ブログカード用の画像サイズ（
add_image_size('staff-box', 300, 379, true);

add_action('init', function () {
    register_post_type('staff', [
        'label'       => 'スタッフ',
        'public'      => true,
        'has_archive' => true,                  
        'rewrite'     => ['slug' => 'staff'],  
        'supports'    => ['title', 'editor', 'thumbnail'],
    ]);
});

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
} 

// スタッフ個別ページ写真
add_image_size('single-thumb', 286, 362, true); 

