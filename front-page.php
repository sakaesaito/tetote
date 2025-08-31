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
                        <div class="mv-news-title"><a href="<?php echo home_url('/blog/'); ?>">NEWS</a></div>
                        <div class="mv-news-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="mv-news-link"><a href="<?php echo home_url('/blog/'); ?>">VIEW MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Infinity Slider セクション -->
    <?php
    $slides = [
        get_stylesheet_directory_uri() . '/img/top-slide01.jpg',
        get_stylesheet_directory_uri() . '/img/top-slide02.jpg',
        get_stylesheet_directory_uri() . '/img/top-slide03.jpg',
    ];
    $repeat = 10;
    ?>
    <section class="infinity-slider">
        <div class="slider-inner">
            <div class="swiper slider">
                <div class="swiper-wrapper">
                    <?php for ($r = 0; $r < $repeat; $r++): ?>
                        <?php foreach ($slides as $src): ?>
                            <div class="swiper-slide">
                                <div class="slide-inner">
                                    <img src="<?php echo esc_url($src); ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="slider-heading">
            <p class="slider-heading-ms">後悔しないキャリアを作る、</p>
            <br>
            <p class="slider-heading-ms slider-heading-ms2">それこそが、我々の使命だ</p>
        </div>
    </section>
    <section id="about" class="about">
        <div class="inner about-inner">
            <div class="about-viw">
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
                <a href="<?php echo get_permalink(get_page_by_path('about')); ?>">VIEW MORE</a>
            </div>
        </div>
    </section>
    <section id="staff" class="staff">
        <div class="staff-inner">
            <div class="content-wrapper">
                <div class="text-wrapper staff-text-wrapper">
                    <h2 class="content-title staff-content-title underline"><span>人</span>を知る</h2>
                    <p class="content-item staff-content-item">TETOTEの社員がどういった信念を持って働いているのか、<br>
                        一日のスケジュールや仕事内容などを紹介します。</p>
                </div>
            </div>
            <div class="staff-sec slider-post slider">
                <div class="staff-sec-inner swiper02 limited-slider">
                    <div class="staff-box-wrapper swiper-wrapper">
                        <?php
                        $staff_q = new WP_Query([
                            'post_type'      => 'staff',
                            'posts_per_page' => 6,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ]);
                        if ($staff_q->have_posts()) :
                            while ($staff_q->have_posts()) : $staff_q->the_post();
                                $message01 = get_field('message01') ?: '';
                                $message02 = get_field('message02') ?: '';
                                $position  = get_field('position')  ?: '';
                                $date_text = get_field('year') ?: '';
                                $name = get_title('name');
                        ?>
                                <div class="swiper-slide">
                                    <article class="staff-card">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium');
                                            } else { ?>
                                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/noimg-600x400.jpg" alt="">
                                            <?php } ?>
                                            <div class="post-slide-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>" alt="社員写真">
                                                <div class="staff-box-img">

                                                    <?php if ($message01 !== '') : ?>
                                                        <p class="staff-box-message01"><?php echo esc_html($message01); ?></p>
                                                    <?php endif; ?>
                                                    <?php if ($message02 !== '') : ?>
                                                        <p class="staff-box-message02"><?php echo esc_html($message02); ?></p>
                                                    <?php endif; ?>
                                                    <?php if ($position !== '') : ?>
                                                        <p class="staff-box-position"><?php echo esc_html($position); ?></p>
                                                    <?php endif; ?>
                                                    <?php if ($year !== '') : ?>
                                                        <p class="staff-box-year">年入社<?php echo esc_html($year); ?></p>
                                                    <?php endif; ?>
                                                    <?php if ($name !== '') : ?>
                                                        <p class="staff-box-name"><?php echo esc_html($name); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </a>
                                    </article>
                                </div>
                        <?php endwhile;
                        else : echo '<div class="swiper-slide">スタッフ情報はまだありません。</div>';
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <div class="viewmore-button viewmore-button-staff">
                <a href="<?php echo get_permalink(get_page_by_path('staff')); ?>">VIEW MORE</a>
            </div>
            <div class="page-button-box">
                <a href="" class="button-white-left .swiper-button-next"></a>
                <a href="" class="button-white-right .swiper-button-prev"></a>
            </div>
        </div>
    </section>
    <section id="benefits" class="benefits">
        <div class="inner benefits-inner">
            <div class="content-wrapper">
                <a class="benefits-text-wrapper">
                    <h2 data-title="" class="content-title content-title-benefits underline"><span>制度・環境</span>を知る</h2>
                    <p class="content-item benefits-content-item">当社では働く従業員とそのご家族が穏やかに過ごせるよう、多様な研修、福利厚生を提供しています。
                    </p>
                </a>
                <div class="benefits-main-box">
                    <div class="benefits-img-wrapper">
                        <a href="<?php echo home_url('/career/'); ?>">
                            <div class="benefits-img-box">
                                <img class="benefits-img-box-pic" src="<?php echo get_template_directory_uri(); ?>/img/career1.svg" alt="">
                                <p class="benefits-img-message">Traning And Career</p>
                            </div>
                            <div class="benefits-button-wrapper">
                                <a class="benefits-button" href="<?php echo home_url('/career/'); ?>"></a>
                                <h3 class="benefits-img-title">研修制度とキャリアパス</h3>
                                <p class="benefits-img-item">個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。</p>
                            </div>
                        </a>
                    </div>
                    <div class="benefits-img-wrapper">
                        <a href="<?php echo home_url('/benefits/'); ?>">
                            <div class="benefits-img-box">
                                <img class="benefits-img-box-pic2" src="<?php echo get_template_directory_uri(); ?>/img/top-welfare.svg" alt="">
                                <p class="benefits-img-message">Employee Benefits</p>
                            </div>
                            <div class="benefits-button-wrapper">
                                <a class="benefits-button" href="<?php echo home_url('/benefits/'); ?>"></a>
                                <h3 class="benefits-img-title benefits-img-title-title2">福利厚生</h3>
                                <p class="benefits-img-item">TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="top-blog" class="top-blog">
        <div class="inner blog-inner">
            <div class="blog-sec">
                <div class="content-wrapper">
                    <div class="blog-top">
                        <div class="blog-top-title-sec">
                            <h2 class="content-title blog-content-title">採用ブログ</h2>
                            <p class="content-item blog-content-item">採用情報やイベント情報、社員の紹介など、<br> 日々の現場の様子をご紹介します。</p>
                        </div>
                        <a class="blog-top-page" href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>">
                            <div class="button-white-right button-white-right-blog"></div>
                            <div class="blog-top-link">VIEW MORE</div>
                        </a>
                    </div>
                    <div class="blog-wrapper">
                        <ul class="blog-list">

                            <?php
                            $blog_q = new WP_Query([
                                'post_type'           => 'post',
                                'posts_per_page'      => 4,
                                'orderby'             => 'date',
                                'order'               => 'DESC',
                                'ignore_sticky_posts' => true,
                            ]);
                            if ($blog_q->have_posts()) :
                                while ($blog_q->have_posts()) : $blog_q->the_post(); ?>

                                    <div class="blog-box">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="blog-box-main">
                                                <div class="thumbnail">
                                                    <?php if (has_post_thumbnail()) {
                                                        the_post_thumbnail('medium_large', ['loading' => 'lazy']);
                                                    } else { ?>
                                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/noimg-600x400.jpg" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="blog-box-right">
                                                    <ul class="cat-list">
                                                        <li class="blog-category">
                                                            <?php
                                                            $cats = get_the_category();
                                                            if (!empty($cats)) {
                                                                echo '<div class="cat-list"><span class="blog-category">' . esc_html($cats[0]->name) . '</span></div>';
                                                            }
                                                            ?>
                                                        </li>
                                                    </ul>
                                                    <p class="topics"><?php the_title(); ?></p>
                                                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="date"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- <li class="blog-box">
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
                                <a href="<?php echo esc_url(home_url('/blog-details/')); ?>">
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
                            </li>-->
                                <?php endwhile;
                            else : ?>
                                <li class="blog-box">記事はまだありません。</li>
                            <?php endif;
                            wp_reset_postdata(); ?>
                        </ul>
                    </div>
                    <div class="blog-top-page-2">
                        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>">
                            <div class="button-white-right button-white-right-blog"></div>
                            <div class="blog-top-link">VIEW MORE</div>
                        </a>
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
            const target = document.querySelector('.mv-img'); 
            if (target) {
                target.style.backgroundImage = "url('<?php echo esc_js(get_template_directory_uri()); ?>/img/fv02.jpg')";
            }
        }
    });
</script>
<?php get_footer(); ?>