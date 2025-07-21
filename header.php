<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="robots" content="noindex">
    <meta name="description" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/tetote-favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Poppins&family=Viga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header-inner">
            <div class="header-nav">
                <h1 class="header-logo">
                    <a class="header-logo__link" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tetote-logo-white 1.png" alt="会社ロゴ">
                    </a>
                </h1>
                <div class="header-link">
                    <a class="header-button header-button-recruit" href="<?php echo esc_url(home_url('/details/')); ?>">募集要項</a>
                    <a class="header-button header-button-entry" href="<?php echo esc_url(home_url('/entry/')); ?>">ENTRY</a>
                    <button class="header-hamburger js-hamburger">
                        <div class="header-hamburger-icon">
                            <span></span><span></span><span></span>
                            <div class="header-hamburger-item">menu</div>
                        </div>
                    </button>
                </div>
                <nav class="drawer-nav js-drawer">
                    <div class="drawer-inner">
                        <div class="drawer-left">
                            <a class="drawer-logo-link" href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/tetote-logo-black.png" alt="会社ロゴ">
                            </a>
                        </div>
                        <div class="drawer-right">
                            <div class="drawer-list">
                                <div class="drawer-line">
                                    <div class="drawer-item"><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT US<br><span>TETOTEについて</span></a></div>
                                    <div class="drawer-item"><a href="<?php echo esc_url(home_url('/staff/')); ?>">STAFF<br><span>社員について</span></a></div>
                                    <div class="drawer-item"><a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG<br><span>採用ブログ</span></a></div>
                                    <div><p class="drawer-parts"></p></div>
                                </div>
                                <div>
                                    <div class="drawer-item"><a href="<?php echo esc_url(home_url('/benefits/')); ?>">BENEFITS<br><span>福利厚生について</span></a></div>
                                    <div class="drawer-item"><a href="<?php echo esc_url(home_url('/career/')); ?>">CARRER<br><span>研修制度とキャリアパス</span></a></div> 
                                    <div class="drawer-item"><a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQ<br><span>よくある質問</span></a></div>
                                </div>
                            </div>                 
                            <div class="drawer-button">
                                <a class="drawer-button-recruit" href="<?php echo esc_url(home_url('/details/')); ?>">募集要項</a>
                                <a class="drawer-button-entry" href="<?php echo esc_url(home_url('/entry/')); ?>">ENTRY</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>