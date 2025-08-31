<?php

function theme_enqueue_files()
{
        // CSSファイルの読み込み（style.cssはテーマフォルダ内にある前提）
        wp_enqueue_style('theme-style', get_stylesheet_directory_uri().'/style.css');
    
        // Lightbox2のCSS
        wp_enqueue_style('lightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css');
    
        // SwiperのCSSとJS
        wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',[],'11');
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    
        // jQuery（CDNから）
        wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, true);
    }


        // =====  キャッシュ対策 =====
        // テーマのメインCSS（キャッシュ対策にfilemtime）
            $theme_css_path = get_stylesheet_directory() . '/style.css';
            wp_enqueue_style('theme-style', get_stylesheet_uri(), [],
                file_exists($theme_css_path) ? filemtime($theme_css_path) : null
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

add_action('wp_enqueue_scripts', 'theme_enqueue_files');

