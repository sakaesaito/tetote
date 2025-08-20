<?php



// 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');




//css.jQueryの読み込み

add_action('wp_enqueue_scripts', function () {
    // ===== CSS =====
    // テーマのメインCSS（キャッシュ対策にfilemtime）
    $theme_css_path = get_stylesheet_directory() . '/style.css';
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        [],
        file_exists($theme_css_path) ? filemtime($theme_css_path) : null
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        '11'
    );

    // ===== JS =====
    // WP 同梱の jQuery（依存解決のためハンドルのみ）
    wp_enqueue_script('jquery');

    // Swiper JS（jQuery非依存）
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        '11',
        true
    );

    // テーマの main.js（キャッシュ対策にfilemtime）
    $main_js_uri  = get_template_directory_uri() . '/js/main.js';
    $main_js_path = get_template_directory() . '/js/main.js';
    wp_enqueue_script(
        'theme-main',
        $main_js_uri,
        ['jquery', 'swiper-js'],
        file_exists($main_js_path) ? filemtime($main_js_path) : null,
        true
    );
});


// functions.php に追記
function my_enqueue_swiper_assets() {
    wp_enqueue_style(
      'swiper',
      'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
      [],
      '11.0.0'
    );
    wp_enqueue_script(
      'swiper',
      'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
      [],
      '11.0.0',
      true
    );
  
    // あなたの初期化JS（ファイル名は合わせてね）
    wp_enqueue_script(
      'front-infinity-slider',
      get_stylesheet_directory_uri() . '/js/front-infinity-slider.js',
      ['swiper'],
      filemtime(get_stylesheet_directory() . '/js/front-infinity-slider.js'),
      true
    );
  }
  add_action('wp_enqueue_scripts', 'my_enqueue_swiper_assets');
