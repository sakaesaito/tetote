<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Viga&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<?php wp_head(); ?>    
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header-inner">
            <div class="header-nav">
                <h1 class="header-logo">
                    <a class="header-logo__link" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/tetote-logo-white 1.png" alt=""></a>
                </h1>
                <div class="header-link">
                    <a class="header-button header-button-recruit" href="<?php echo home_url('/details/details.html'); ?>">募集要項</a>
                    <a class="header-button header-button-entry" href="<?php echo home_url('/entry/entry.html'); ?>">ENTRY</a>
                    <button class="header-hamburger js-hamburger">
                        <div class="header-hamburger-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="header-hamburger-item">menu</div>
                        </div>
                    </button>
                </div>
                <nav class="drawer-nav js-drawer">
                    <div class="drawer-inner">
                        <div class="drawer-left">
                            <a class="drawer-logo-link" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/tetote-logo-black.png"></a>
                        </div>
                        <div class="drawer-right">
                            <div class="drawer-list">
                                <div class="drawer-line">
                                    <div class="drawer-item"><a href="#">ABOUT US<br><span>TETOTEについて</span></a></div>
                                    <div class="drawer-item"><a href="#">STAFF<br><span>写真について</span></a></div>
                                    <div class="drawer-item"><a href="#">BLOG<br><span>採用ブログ</span></a></div>
                                    <div><p class="drawer-parts"></p></div>
                                </div>
                                <div>
                                    <div class="drawer-item"><a href="#">BENEFITS<br><span>福利厚生について</span></a></div>
                                    <div class="drawer-item"><a href="#">CARRER<br><span>研修制度とキャリアパス</span></a></div>
                                    <div class="drawer-item"><a href="#">FAQ<br><span>よくある質問</span></a></div>
                                </div>
                            </div>                 
                            <div class="drawer-button">
                                <a class="drawer-button-recruit" href="<?php echo home_url('/details/details.html'); ?>">募集要項</a>
                                <a class="drawer-button-entry" href="<?php echo home_url('/entry/entry.html'); ?>">ENTRY</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>