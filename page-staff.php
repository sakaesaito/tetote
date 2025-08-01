<?php get_header(); ?>

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
                    $staff_query = new WP_Query([
                        'post_type' => 'staff',
                        'posts_per_page' => 4
                    ]);
                    if ($staff_query->have_posts()):
                        while ($staff_query->have_posts()): $staff_query->the_post();
                    ?>
                    <div class="staff-box swiper-slide">
                        <article class="post-slide-item">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_field('staff_image'); ?>" alt="<?php the_title(); ?>">
                                <div class="<?php echo get_field('entry_year') < 2010 ? 'staff-box-img-box2' : 'staff-box-img'; ?>">
                                    <p class="staff-box-message"><?php the_field('message_1'); ?></p>
                                    <p class="staff-box-message"><?php the_field('message_2'); ?></p>
                                    <div class="staff-box-past">
                                        <p class="staff-box-position"><?php the_field('position'); ?></p>
                                        <p class="staff-box-year"><?php the_field('entry_year'); ?>年入社</p>
                                    </div>
                                    <p class="staff-box-name"><?php the_title(); ?></p>
                                </div>
                            </a>
                        </article>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="viewmore-button viewmore-button-staff">
        <a href="<?php echo get_post_type_archive_link('staff'); ?>">VIEW MORE</a>
    </div>

    <div class="page-button-box">
        <a href="" class="page-button-white__left">←</a>
        <a href="" class="page-button-white__right">→</a>
    </div>
</section>


<?php get_footer(); ?>
