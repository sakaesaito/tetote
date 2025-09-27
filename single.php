<?php get_header(); ?>

<div class="is-small is-small-blog">
    <ol class="breadcrumbs  breadcrumbs-blog-details">
        <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
    </ol>
</div>

<section class="blog-detail">
    <div class="blog-detail-sec">
        <div class="sub-inner blog-detail-inner">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="blog-detail-date">
                        <p class="blog-detail-tag blog-category"><?php the_field('blog-category'); ?></p>
                        <time class="date" datetime=""><?php the_field('datetime'); ?></time>
                    </div>
                    <h2 class="sub-title sub-title-blog-detail"><?php the_field('blog-title'); ?></h2>
                    <div class="blog-detail-img"><?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full'); ?>
                        <?php endif; ?></div>
                    <p class="blog-detail-note1"><?php the_content(); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="blog-page">
    <div class="blog-detail-page-inner">
        <div class="blog-pagination-sec">
            <div class="blog-pagination-wrapper before">
                <?php $prev_post = get_previous_post(); ?>
                <?php if ($prev_post) : ?>
                    <div class="blog-detail-news">
                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"
                            class="blog-pagination-button prev"
                            aria-label="前の記事へ">
                        </a>
                        <div class="blog-detail-news">
                            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                                <p class="topic"><?php echo esc_html(get_the_title($prev_post->ID)); ?></p>
                                <time datetime="<?php echo esc_attr(get_the_date('c', $prev_post->ID)); ?>"
                                    class="page-blog-date">
                                    <?php echo esc_html(get_the_date('Y.m.d', $prev_post->ID)); ?>
                                </time>
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <p>前の記事はありません</p>
                <?php endif; ?>
            </div>
            <div class="blog-pagination-wrapper after">
                <?php $next_post = get_next_post(); ?>
                <?php if ($next_post) : ?>
                    <div class="blog-detail-news">
                        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                            <p class="topic"><?php echo esc_html(get_the_title($next_post->ID)); ?></p>
                            <time datetime="<?php echo esc_attr(get_the_date('c', $next_post->ID)); ?>"
                                class="page-blog-date">
                                <?php echo esc_html(get_the_date('Y.m.d', $next_post->ID)); ?>
                            </time>
                        </a>
                    </div>
                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"
                        class="blog-pagination-button next"
                        aria-label="次の記事へ"></a>
                <?php else: ?>
                    <p>前の記事はありません</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>