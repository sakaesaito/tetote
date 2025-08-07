<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Viga&display=swap"
        rel="stylesheet">
    <?php if (is_single()): ?>
        <link rel="stylesheet" href="http://cdnjs.cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    <?php endif; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php if(is_single()): ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        .hero {
            background-image: url('<?php echo get_theme_file_uri(); ?>/img/');
            background-size: cover;
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header" class="header <?php if (!is_front_page()) echo 'is-subpage'; ?>">
        <div class="header-inner">
            <div class="header-nav">
                <h1 class="header-logo">
                    <a class="header-logo-link" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tetote-logo-white.png" alt="白ロゴ" class="logo logo-white">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tetote-logo-black.png" alt="黒ロゴ" class="logo logo-black hidden" >
                    </a>
                </h1>
                <div class="header-link">
                    <a class="header-button header-button-recruit" href="<?php echo home_url('/details/'); ?>">募集要項</a>
                    <a class="header-button header-button-entry" href="<?php echo home_url('/entry/'); ?>">ENTRY</a>
                    <button class="header-hamburger js-hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="header-hamburger-item">MENU</div>
                    </button>
                </div>
            </div>
            <nav class="drawer-nav js-drawer">
                <div class="drawer-inner">
                    <div class="drawer-left">
                        <a class="drawer-logo-link" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/tetote-logo-black.png" alt="会社ロゴ"></a>
                    </div>
                    <div class="drawer-right">
                        <div class="drawer-list">
                            <ul class="drawer-line">
                                <li class="drawer-item"><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT US<br><span>TETOTEについて</span></a></li>
                                <li class="drawer-item"><a href="<?php echo esc_url(home_url('/staff/')); ?>">STAFF<br><span>社員について</span></a></li>
                                <li class="drawer-item"><a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG<br><span>採用ブログ</span></a></li>
                                <li>
                                    <p class="drawer-parts"></p>
                                </li>
                            </ul>
                            <ul>
                                <li class="drawer-item"><a href="<?php echo esc_url(home_url('/benefits/')); ?>">BENEFITS<br><span>福利厚生について</span></a></li>
                                <li class="drawer-item"><a href="<?php echo esc_url(home_url('/career/')); ?>">CARRER<br><span>研修制度とキャリアパス</span></a></li>
                                <li class="drawer-item"><a href="<?php echo esc_url(home_url('/faq/')); ?>">FAQ<br><span>よくある質問</span></a></li>
                            </ul>
                        </div>
                        <div class="drawer-button">
                            <a class="drawer-button-recruit" href="<?php echo esc_url(home_url('/details/')); ?>">募集要項</a>
                            <a class="drawer-button-entry" href="<?php echo esc_url(home_url('/entry/')); ?>">ENTRY</a>
                        </div>
                    </div>
                </div>
            </nav>
            <?php get_template_part('template-parts/drawer'); ?>
        </div>
    </header>