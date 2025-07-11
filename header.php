<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>採用特設サイト | 株式会社TETOTE</title>
    <meta name="robots" content="noindex">
    <meta name="description" content="テクノロジーで社会課題を解決する。AIやビッグデータ分析などの技術を活用した社会課題解決サービスを提供するTETOTEの採用サイト。">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Viga&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/tetote-favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<header class="header">
    <div class="header-inner">
        <div class="header-nav">
            <h1 class="header-logo">
                <a class="header-logo__link" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tetote-logo-white 1.png" alt="">
                </a>
            </h1>
            <div class="header-link">
                <a class="header-button header-button-recruit" href="/details/details.html">募集要項</a>
                <a class="header-button header-button-entry" href="/entry/entry.html">ENTRY</a>
                <button class="header-hamburger js-hamburger">
                    <div class="header-hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="header-hamburger-item">menu</div>
                    </div>
                </button>
            </div>
            <div class="header-drawer js-drawer">
                <nav class="header-drawer-nav">
                    <a href="#">top</a>
                    <ul class="header-drawer-list">
                        <li class="header-drawer-item"><a href="#">ABOUT US</a></li>
                        <li><p class="header-drawer-parts">TETOTEについて</p></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>