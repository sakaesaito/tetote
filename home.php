<?php get_header(); ?>

<div class="is-small is-small-blog">
    <ol class="c-breadcrumbs c-breadcrumbs-blog">
        <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
        <li><span class="c-breadcrumbs-blog"><?php the_title(); ?></span></li>
    </ol>
</div>

<section class="blog-detail">
    <div class="blog-detail-sec">
        <div class="sub-inner blog-detail-inner">
            <div class="blog-detail-date">
                <?php
                $category = get_the_category();
                if ($category) {
                    echo '<p class="blog-detail-tag">' . esc_html($category[0]->name) . '</p>';
                }
                ?>
                <time class="date" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
            </div>

            <h2 class="sub-title sub-title-blog-detail"><?php the_title(); ?></h2>

            <?php if (has_post_thumbnail()): ?>
                <div class="blog-detail-img"><?php the_post_thumbnail('full'); ?></div>
            <?php endif; ?>

            <div class="blog-detail-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<section class="page">
    <div class="blog-detail-page-inner">
        <div class="blog-pagination-sec">

            <div class="blog-pagination-wrapper before">
                <?php previous_post_link('<a href="%link" class="blog-pagination-button prev" aria-label="前のページ"><</a>'); ?>
                <?php
                $prev_post = get_previous_post();
                if (!empty($prev_post)):
                ?>
                    <div class="blog-detail-news">
                        <a href="<?php echo get_permalink($prev_post->ID); ?>">
                            <p class="topic"><?php echo get_the_title($prev_post->ID); ?></p>
                            <time datetime="<?php echo get_the_date('Y-m-d', $prev_post->ID); ?>" class="page-blog-date">
                                <?php echo get_the_date('Y.m.d', $prev_post->ID); ?>
                            </time>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="blog-pagination-wrapper">
                <?php
                $next_post = get_next_post();
                if (!empty($next_post)):
                ?>
                    <div class="blog-detail-news">
                        <a href="<?php echo get_permalink($next_post->ID); ?>">
                            <p class="topic"><?php echo get_the_title($next_post->ID); ?></p>
                            <time datetime="<?php echo get_the_date('Y-m-d', $next_post->ID); ?>" class="page-blog-date">
                                <?php echo get_the_date('Y.m.d', $next_post->ID); ?>
                            </time>
                        </a>
                    </div>
                    <?php next_post_link('<a href="%link" class="blog-pagination-button next" aria-label="次のページ">></a>'); ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>