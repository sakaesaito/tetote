<?php

    // 管理画面｜アイキャッチ画像の設定領域を表示
    function theme_setup()
    {
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'theme_setup');

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
    wp_enqueue_script('jquery');

    // Swiper JS
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
