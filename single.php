<?php get_header(); ?>

    <div class="is-small is-small-blog">
        <ol class="breadcrumbs  breadcrumbs-blog-details">
            <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
            <li><span class="page-title"></li>
        </ol>
    </div>

    <section class="blog-detail">
        <div class="blog-detail-sec">
            <div class="sub-inner blog-detail-inner">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>

                    <div class="blog-detail-date">
                        <p class="blog-detail-tag blog-category"><?php the_field('blog-category'); ?></p>
                        <time class="date" datetime="2023-03-25"><?php the_field('datetime'); ?></time>
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
                    <a href="/blog/prev" class="blog-pagination-button prev" aria-label="前のページ"></a>

                    <div class="blog-detail-news">
                        <a href="/blog/post01">
                            <p class="topic">内定者向け研修を行いました</p>
                            <time datetime="2024-03-25" class="page-blog-date">2024.08.25</time>
                        </a>
                    </div>
                </div>
                <div>  
                    <div class="blog-pagination-wrapper wp-pagenavi" role="navigation">
                        <div class="blog-detail-news">
                            <a href="/blog/post02">
                                <p class="topic">【新卒採用2024】エントリー受付中！</p>
                                <time datetime="2024-08-25 " class="page-blog-date">2024.08.25</time>
                            </a>
                        </div>
                        <a href="/blog/next" class="blog-pagination-button next" aria-label="次のページ"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>