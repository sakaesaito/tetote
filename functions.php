<?php
// 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');



/*  パンくずリスト生成関数（ステップ1：基本形） */
function create_breadcrumb_step1() {
    // トップページの場合は、何も表示しない
    if ( is_front_page() ) { return; }
    
    echo '<nav class="my-breadcrumb">';
    echo '<a href="' . esc_url( home_url('/') ) . '">ホーム</a>';
    echo ' <span class="separator">&gt;</span> ';
    echo '<span class="current-page">' . get_the_title() . '</span>';
    echo '</nav>';
}


// 管理画面｜投稿の名前変更
function change_menu_label()
{
    global $menu;
    global $submenu;
    $name = 'お知らせ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name . '一覧';
    $submenu['edit.php'][10][0] = '新しい' . $name;
}
function change_object_label()
{
    global $wp_post_types;
    $name = 'お知らせ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name . 'の新規追加';
    $labels->edit_item = $name . 'の編集';
    $labels->new_item = '新規' . $name;
    $labels->view_item = $name . 'を表示';
    $labels->search_items = $name . 'を検索';
    $labels->not_found = $name . 'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'change_object_label');
add_action('admin_menu', 'change_menu_label');


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
