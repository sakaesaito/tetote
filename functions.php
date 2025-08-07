<?php
// 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');


//cssの読み込み
function my_theme_scripts()
{
    $version = filemtime(get_theme_file_path('/css/style.css'));
    wp_enqueue_style('my-theme-style', get_theme_file_uri('/css/style.css'), array(), $version);
}
add_action('wp_enqueue_script', 'my_theme_scripts');


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





// //スタッフ紹介のカスタム
// function create_post_type_staff()
// {
//     register_post_type(
//         'staff',
//         array(
//             'labels' => array(
//                 'name' => 'スタッフ紹介',
//                 'singular_name' => 'スタッフ',
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'menu_position' => 6,
//             'menu_icon' => 'dashicons-businessman',
//             'supports' => array('title', 'editor', 'thumbnail'),
//         )
//     );
// }
// add_action('init', 'create_post_type_staff');
