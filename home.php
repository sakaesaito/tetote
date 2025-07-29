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
    <section id="about" class="about">
        <div class="inner">
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
                <a href="<?php echo esc_url(home_url('/about/')); ?>">VIEW MORE</a>
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

    <!-- STAFF セクション -->
    <section id="staff" class="staff">
        <div class="staff-inner">
            <div class="content-wrapper">
                <div class="text-wrapper staff-text-wrapper">
                    <h2 class="content-title staff-content-title"><span>人</span>を知る</h2>
                    <p class="content-item staff-content-item">社員がどういった信念を持って働いているのかを紹介します。</p>
                </div>
            </div>
            <div class="staff-sec slider-post slider">
                <div class="staff-sec-inner swiper limited-slider">
                    <div class="staff-box-wrapper swiper-wrapper">
                        <?php
                        $staff_posts = get_posts(['post_type' => 'staff', 'posts_per_page' => 4]);
                        foreach ($staff_posts as $idx => $staff):
                            $thumb = get_the_post_thumbnail_url($staff->ID, 'medium');
                        ?>
                            <div class="staff-box swiper-slide">
                                <article class="post-slide-item">
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr(get_the_title($staff)); ?>">
                                    <div class="staff-box-img<?php if ($idx % 2 === 1) echo '-box2'; ?>">
                                        <p class="staff-box-message"><?php echo esc_html(get_field('message_line1', $staff)); ?></p>
                                        <p class="staff-box-message"><?php echo esc_html(get_field('message_line2', $staff)); ?></p>
                                        <div class="staff-box-past">
                                            <p class="staff-box-position"><?php echo esc_html(get_field('position', $staff)); ?></p>
                                            <p class="staff-box-year"><?php echo esc_html(get_field('year', $staff)); ?></p>
                                        </div>
                                        <p class="staff-box-name"><?php echo esc_html(get_the_title($staff)); ?></p>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="viewmore-button viewmore-button-staff"><a href="<?php echo home_url('/staff/'); ?>">VIEW MORE</a></div>
            <div class="page-button-box">
                <a href="#" class="page-button-white__left">←</a>
                <a href="#" class="page-button-white__right">→</a>
            </div>
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
                            <img class="benefits-img-box-pic" src="img/career1.svg" alt="">
                            <p class="benefits-img-message">Traning And Career</p>
                        </div>
                        <div class="benefits-button-wrapper">
                            <a class="benefits-button" href="/career/">→</a>
                            <h3 class="benefits-img-title">研修制度とキャリアパス</h3>
                            <p class="benefits-img-item">個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。</p>
                        </div>
                    </div>
                    <div class="benefits-img-wrapper">
                        <div class="benefits-img-box">
                            <img class="benefits-img-box-pic2" src="img/top-welfare.svg" alt="">
                            <p class="benefits-img-message">Employee Benefits</p>
                        </div>
                        <div class="benefits-button-wrapper">
                            <a class="benefits-button" href="/benefits/">→</a>
                            <h3 class="benefits-img-title benefits-img-title-title2">福利厚生</h3>
                            <p class="benefits-img-item">TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>