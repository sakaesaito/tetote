<?php
// 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');



// /*  パンくずリスト生成関数（ステップ1：基本形） */
// function c_breadcrumbs() {
//     // トップページの場合は、何も表示しない
//     if ( is_front_page() ) { return; }
    
//     echo '<nav class="my-breadcrumb">';
//     echo '<a href="' . esc_url( home_url('/') ) . '">TOP</a>';
//     echo ' <span class="separator">&gt;</span> ';
//     echo '<span class="current-page">' . get_the_title() . '</span>';
//     echo '</nav>';
// }



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
        ['jquery'],
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'tetote_enqueue_scripts');


//cssの読み込み
function my_theme_scripts() {
    $version = filemtime(get_theme_file_path('/css/style.css'));
    wp_enqueue_style('my-theme-style', get_theme_file_uri('/css/style.css'), array(), $version);
}
add_action('wp_enqueue_script','my_theme_scripts');