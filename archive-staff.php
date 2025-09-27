<?php get_header(); ?>


<section id="sub-staff" class="sub-staff">
    <div class="sub-mv sub-mv-staff">
        <div class="sub-inner sub-inner-mv">
            <div class="sub-mv-box">
                <h2 class="sub-mv-title">STAFF</h2>
                <h3 class="sub-mv-item sub-mv-item-staff">社員について</h3>
                <p class="sub-mv-part">弊社社員のリアルな声を紹介しています。</p>
            </div>
        </div>
    </div>
</section>
<div class="is-small">
    <ol class="breadcrumbs">
        <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
    </ol>
</div>

<main id="content_wrap">
    <section>
        <div class="sub-inner sub-inner-staff">
            <div class="sub-staff-sec">
                <div class="sub-staff-box-wrapper">
                    <?php
                    // 取得する投稿の条件を設定する
                    $args = array(
                        'paged' => $paged,
                        'post_type' => 'staff',
                        'posts_per_page' => 6,
                    );

                    // 上記の条件に基づいて投稿情報を取得
                    $query = new WP_Query($args);

                    //ループ処理を行う（カスタム投稿：staff)
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                            <div class="sub-staff-box">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full', array('class' => 'custom-thumbnail')); ?>
                                    <div class="sub-staff-box-img">
                                        <p class="sub-staff-box-message1"><?php the_field('message1'); ?></p>
                                        <p class="sub-staff-box-message2"><?php the_field('message2'); ?></p>
                                        <div class="staff-box-post">
                                            <p class="staff-box-position"><?php the_field('position'); ?></p>
                                            <p class="staff-box-year"><?php the_field('year'); ?>年入社</p>
                                        </div>
                                        <p class="staff-box-name"><?php the_field('staff'); ?></p>
                                    </div>
                                </a>
                            </div>
                    <?php endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>