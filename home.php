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
                            <p class="blog-detail-tag blog-category">
                            <?php the_category( ', ' ); ?></p>
                            <time class="date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                            <?php echo get_the_date('Y.m.d'); ?></time>
                        </div>
                        <h2 class="sub-title sub-title-blog-detail">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="blog-detail-img"><?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                    <?php endif; ?> 
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="sub-blog-page-box">
                <button class="button-page-before"><?php the_posts_pagination(); ?>1
                </button>
                <button class="button-page-after"><?php the_posts_pagination(); ?>2
                </button>
            </div>
        </div>
    </div>
</section>
<?php else : ?>
<p>記事はまだありません。</p>
<?php endif; ?>

<!-- <?php wp_reset_query(); ?> -->


<?php get_footer(); ?>