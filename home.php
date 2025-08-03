<?php get_header(); ?>

<section id="sub-blog" class="sub-blog">
        <div class="sub-mv" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/sub-blog-fv.jpg'); background-size: cover;background-position: center;background-repeat: no-repeat;">
            <div class="sub-inner sub-inner-blog">
                <div class="sub-mv-box">
                    <h2 class="sub-mv-title">BLOG</h2>
                    <h3 class="sub-mv-item">採用ブログ</h3>
                    <p class="sub-mv-part">採用情報やイベント情報などをご紹介します。</p>
                </div>
            </div>
        </div>
    </section>
    <div class="is-small">
        <ol class="breadcrumbs">
        <?php if (function_exists('bcn_display')) bcn_display_list(); ?> 
        </ol>
    </div>
    <section>
        <div class="sub-inner sub-blog-inner">
            <div class="sub-blog-sec">
                    <div class="blog-wrapper">
                        <ul class="blog-list sub-blog-list">
                            <li class="blog-box">
                                <a href="<?php echo esc_url(home_url('/blog-details/')); ?>/blog-detail/">
                                    <div class="blog-box-main sub-blog-box-main">
                                        <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/blog01.jpg" alt=""></div>
                                        <div class="blog-box-right sub-blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">社内研修</li>
                                            </ul>
                                            <p class="topics">新入社員向けに、入社前研修を行いました。</p>
                                            <time datetime="2025-03-25" class="date">2025.03.25</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-box">
                                <a href="/blog-detail/">
                                    <div class="blog-box-main sub-blog-box-main">
                                        <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/blog02.jpg" alt=""></div>
                                        <div class="blog-box-right sub-blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">社内研修</li>
                                            </ul>
                                            <p class="topics">内定者向け研修を行いました。</p>
                                            <time datetime="2024-08-25" class="date">2024.08.25</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-box">
                                <a href="/blog-detail/">
                                    <div class="blog-box-main sub-blog-box-main">
                                        <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/blog03.jpg" alt=""></div>
                                        <div class="blog-box-right sub-blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">社内イベント</li>
                                            </ul>
                                            <p class="topics">【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！</p>
                                            <time datetime="2024-03-25" class="date">2024.03.25</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-box">
                                <a href="/blog-detail/">
                                    <div class="blog-box-main sub-blog-box-main">
                                        <div class="thumbnail">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/blog04.jpg" alt="">
                                        </div>
                                        <div class="blog-box-right sub-blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">お知らせ</li>
                                            </ul>
                                            <p class="topics">【新卒採用2024】エントリー受付中！</p>
                                            <time datetime="2024-03-01" class="date">2024.03.01</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-box">
                                <a href="/blog-detail/">
                                    <div class="blog-box-main sub-blog-box-main">
                                        <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/blog01.jpg" alt=""></div>
                                        <div class="blog-box-right sub-blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">社内研修</li>
                                            </ul>
                                            <p class="topics">新入社員向けに、入社前研修を行いました。</p>
                                            <time datetime="2055-02-11" class="date">2055.02.11</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-box">
                                <a href="/blog-detail/">
                                    <div class="blog-box-main sub-blog-box-main">
                                        <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/blog02.jpg" alt=""></div>
                                        <div class="blog-box-right sub-blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">社内研修</li>
                                            </ul>
                                            <p class="topics">内定者向け研修を行いました。</p>
                                            <time datetime="2024-08-25" class="date">2024.08.25</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-box">
                                <a href="/blog-detail/">
                                    <div class="blog-box-main sub-blog-box-main">
                                        <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/blog03.jpg" alt=""></div>
                                        <div class="blog-box-right sub-blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">社内イベント</li>
                                            </ul>
                                            <p class="topics">【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！</p>
                                            <time datetime="2024-03-25" class="date">2024.03.25</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-box">
                                <a href="/blog-detail/">
                                    <div class="blog-box-main sub-blog-box-main">
                                        <div class="thumbnail">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/blog04.jpg" alt="">
                                        </div>
                                        <div class="blog-box-right sub-blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">お知らせ</li>
                                            </ul>
                                            <p class="topics">【新卒採用2024】エントリー受付中！</p>
                                            <time datetime="2024-03-01" class="date">2024.03.01</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="sub-blog-page-box">
                        <button class="button-page-before">1
                        </button>
                        <button class="button-page-after">2
                        </button>
                    </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>