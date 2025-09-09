<?php get_header(); ?>

<section id="sub-blog" class="sub-blog">
    <div class="sub-mv sub-mv-blog">
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

                    <?php
                    query_posts( array(
                    'post_type'      => 'post',
                    'posts_per_page' => 8,
                    'paged'          => get_query_var('paged') ?: 1
                    ) );
                    ?>

                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>

                    <div class="blog-detail-date">
                        <p class="blog-detail-tag blog-category"><?php the_field('blog-category'); ?></p>
                        <time class="date" datetime="2023-03-25"><?php the_field('datetime'); ?></time>
                    </div>
                    <h2 class="sub-title sub-title-blog-detail"><?php the_field('blog-title'); ?></h2>
                    <div class="blog-detail-img"><?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
                        
                <?php endif; ?> 

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