<?php get_header(); ?>

<main>
    <section class="mv">
        <div class="mv-inner">
            <div class="mv-bg">
                <div class="mv-img-slider">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fv01.jpg" alt="" class="mv-slide active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fv02.jpg" alt="" class="mv-slide">
                </div>
                <div class="mv-img">
                    <h2 class="mv-message-main">BECOME A<br> CHALLENGER.</h2>
                    <div class="mv-message-sub">君の挑戦が、意思が、未来を変える</div>
                    <div class="container">
                        <div class="skew-background"></div>
                    </div>
                    <div class="mv-news-box">
                        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                                <div class="mv-news-title"><a href="<?php echo home_url('/blog/'); ?>">NEWS</a></div>
                                <div class="mv-news-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="mv-news-link"><a href="<?php echo home_url('/blog/'); ?>">VIEW MORE</a></div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Infinity Slider セクション -->
    <section class="swiper infinity-slider">
        <div class="slider slider">
            <div class="swiper-wrapper">
                <?php
                $slide_images = ['top-slide01.jpg', 'top-slide02.jpg', 'top-slide03.jpg'];
                for ($i = 0; $i < 9; $i++):
                    $img = $slide_images[$i % 3];
                ?>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() . '/img/' . esc_html($img); ?>" alt="">
                    </div>
                <?php endfor; ?>
            </div>
            <div class="slider-heading">
                <p class="slider-heading-ms">後悔しないキャリアを作る、</p><br>
                <p class="slider-heading-ms">それこそが、我々の使命だ</p>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="inner">
            <div class="about-viw" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/top-map.jpg');">
                <div class="about-lead">
                    <p class="about-lead-ms">
                        「人手不足」<br>
                        今の日本が抱えるこの社会課題に挑み、<br>
                        企業と個人の可能性を最大限に引き出す。<br>
                        それが私達の役目。
                    </p>
                    <p class="about-lead-ms about-lead-ms2">
                        単につなぐだけじゃない。<br>
                        「手と手」を取り合っていけるような、<br>
                        持続可能な社会を、一緒に作りませんか？
                    </p>
                </div>
            </div>
            <div class="viewmore-button">
                <a href="<?php echo esc_url(home_url('/about/')); ?>">VIEW MORE</a>
            </div>
        </div>
    </section>

    <!-- STAFF セクション -->
    <section id="staff" class="staff">
        <div class="staff-inner">
            <div class="content-wrapper">
                <div class="text-wrapper staff-text-wrapper">
                    <div class="staff-section-title">
                        <h2 class="content-title staff-content-title"><span>人</span>を知る</h2>
                    </div>
                    <p class="content-item staff-content-item">
                        TETOTEの社員がどういった信念を持って働いているのか、<br>
                        一日のスケジュールや仕事内容などを紹介します。
                    </p>
                </div>
            </div>
            <div class="staff-sec slider-post slider">
                <div class="staff-sec-inner swiper limited-slider">
                    <div class="staff-box-wrapper swiper-wrapper">
                        <?php
                        $staffs = new WP_Query([
                            'post_type' => 'staff',
                            'posts_per_page' => 4,
                        ]);
                        if ($staffs->have_posts()) :
                            while ($staffs->have_posts()) : $staffs->the_post();
                                $photo = get_field('staff-image');
                                if (!empty($image)) {
                                    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                                }
                                $message1 = get_field('message1');
                                $message2 = get_field('message2');
                                $position = get_field('position');
                                $entry_year = get_field('entry_year');
                        ?>
                                <div class="staff-box swiper-slide">
                                    <article class="post-slide-item">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo esc_url($photo); ?>" alt="<?php the_title_attribute(); ?>">
                                            <div class="staff-box-img">
                                                <p class="staff-box-message"><?php echo esc_html($message1); ?></p>
                                                <p class="staff-box-message"><?php echo esc_html($message2); ?></p>
                                                <div class="staff-box-past">
                                                    <p class="staff-box-position"><?php echo esc_html($position); ?></p>
                                                    <p class="staff-box-year"><?php echo esc_html($entry_year); ?>年入社</p>
                                                </div>
                                                <p class="staff-box-name"><?php the_title(); ?></p>
                                            </div>
                                        </a>
                                    </article>
                                </div>
                        <?php endwhile; wp_reset_postdata();endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="viewmore-button viewmore-button-staff">
            <a href="<?php echo get_post_type_archive_link('staff'); ?>">VIEW MORE</a>
        </div>

        <div class="page-button-box">
            <a href="#" class="page-button-white__left">←</a>
            <a href="#" class="page-button-white__right">→</a>
        </div>
    </section>

    <section id="benefits" class="benefits">
        <div class="inner">
            <div class="content-wrapper">
                <div class="benefits-text-wrapper">
                    <h2 data-title="" class="content-title content-title-benefits"><span>制度・環境</span>を知る</h2>
                    <p class="content-item benefits-content-item">当社では働く従業員とそのご家族が穏やかに過ごせるよう、多様な研修、福利厚生を提供しています。
                    </p>
                </div>
                <div class="benefits-main-box">
                    <div class="benefits-img-wrapper">
                        <div class="benefits-img-box">
                            <img class="benefits-img-box-pic" src="<?php echo get_template_directory_uri(); ?>/img/career1.svg" alt="">
                            <p class="benefits-img-message">Traning And Career</p>
                        </div>
                        <div class="benefits-button-wrapper">
                            <a class="benefits-button" href="<?php echo home_url('/career/'); ?>">→</a>
                            <h3 class="benefits-img-title">研修制度とキャリアパス</h3>
                            <p class="benefits-img-item">個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。</p>
                        </div>
                    </div>
                    <div class="benefits-img-wrapper">
                        <div class="benefits-img-box">
                            <img class="benefits-img-box-pic2" src="<?php echo get_template_directory_uri(); ?>/img/top-welfare.svg" alt="">
                            <p class="benefits-img-message">Employee Benefits</p>
                        </div>
                        <div class="benefits-button-wrapper">
                            <a class="benefits-button" href="<?php echo esc_url(home_url('/benefits/')); ?>">→</a>
                            <h3 class="benefits-img-title benefits-img-title-title2">福利厚生</h3>
                            <p class="benefits-img-item">TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="top-blog" class="top-blog">
        <div class="inner">
            <div class="blog-sec">
                <div class="content-wrapper">
                    <div class="blog-top">
                        <div class="blog-top-title-sec">
                            <h2 class="content-title blog-content-title">採用ブログ</h2>
                            <p class="content-item blog-content-item">採用情報やイベント情報、社員の紹介など、<br> 日々の現場の様子をご紹介します。</p>
                        </div>
                        <div class="blog-top-page">
                            <a href="<?php echo esc_url(home_url('/blog-detalis/')); ?>" class="page-button-white__right">→</a>
                            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="blog-top-link" href="<?php echo esc_url(home_url('/blog/')); ?>">VIEW MORE</a>
                        </div>
                    </div>
                    <div class="blog-wrapper">
                        <ul class="blog-list">
                            <li class="blog-box">
                                <a href="<?php echo esc_url(home_url('/blog-detalis/')); ?>">
                                    <div class="blog-box-main">
                                        <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/blog01.jpg" alt=""></div>
                                        <div class="blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">社内研修</li>
                                            </ul>
                                            <p class="topics">新入社員向けに、入社前研修を行いました。</p>
                                            <time datetime="2055-02-11" class="date">2055.03.25</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-box">
                                <a href="<?php echo esc_url(home_url('/blog-detalis/')); ?>">
                                    <div class="blog-box-main">
                                        <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/blog02.jpg" alt=""></div>
                                        <div class="blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">社内研修</li>
                                            </ul>
                                            <p class="topics">内定者向け研修を行いました。</p>
                                            <time datetime="2024.08.25" class="date">2024.08.25</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-box">
                                <a href="<?php echo esc_url(home_url('/blog-detalis/')); ?>">
                                    <div class="blog-box-main">
                                        <div class="thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/blog03.jpg" alt=""></div>
                                        <div class="blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">社内イベント</li>
                                            </ul>
                                            <p class="topics topics3">【社員旅行2023】沖縄でリフレッシュ！チームワークも深まった！</p>
                                            <time datetime="2024.03.25" class="date">2024.03.25</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="blog-box">
                                <a href="<?php echo esc_url(home_url('/blog-detalis/')); ?>">
                                    <div class="blog-box-main">
                                        <div class="thumbnail">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/blog04.jpg" alt="">
                                        </div>
                                        <div class="blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">お知らせ</li>
                                            </ul>
                                            <p class="topics">【新卒採用2024】エントリー受付中！</p>
                                            <time datetime="2024.03.01" class="date">2024.03.01</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-top-page-2">
                        <div class="page-button-white__right">→</div>
                        <a class="blog-top-link" href="<?php echo esc_url(home_url('/blog/')); ?>">VIEW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="career" class="career">
        <div class="inner career-inner">
            <div class="content-wrapper career-content-wrapper">
                <div class="text-wrapper2">
                    <h2 data-title="" class="content-title career-content-title">採用情報</h2>
                    <p class="content-item career-content-item">
                        募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。
                    </p>
                </div>
                <div class="career-wrapper">
                    <div class="link-box">
                        <div class="link-box-button link-box-button1">
                            <a href="<?php echo esc_url(home_url('/details/')); ?>">募集要項</a>
                        </div>
                        <div class="link-box-button link-box-button1">
                            <a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
                        </div>
                    </div>
                    <div class="link-box-button link-box-button2">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>">会社概要</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (window.innerWidth <= 768) {
            document.getElementById('mvImg').style.backgroundImage = "url('<?php echo get_template_directory_uri(); ?>/img/fv02.jpg')";
        }
    });
</script>



<?php get_footer(); ?>