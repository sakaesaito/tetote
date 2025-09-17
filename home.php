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
    <div class="sub-blog-wrapper">
        <div class="sub-blog-inner">
            <ul class="blog-list">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $blog_q = new WP_Query([
                    'post_type'           => 'post',
                    'posts_per_page'      => 8,
                    'orderby'             => 'date',
                    'order'               => 'DESC',
                    'ignore_sticky_posts' => true,
                    'paged'               => $paged
                ]);
                if ($blog_q->have_posts()) :
                    while ($blog_q->have_posts()) : $blog_q->the_post(); ?>
                        <li class="blog-box">
                            <div class="sub-blog-box-main">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="blog-box-main">
                                        <figure class="thumbnail ">
                                            <?php
                                            $acf_img = get_field('blog-detail-img');
                                            if ($acf_img) {
                                                if (is_array($acf_img)) {
                                                    $src = $acf_img['sizes']['medium'] ?? $acf_img['url'];
                                                    $alt = $acf_img['alt'] ?: get_the_title();
                                                } else {
                                                    // 返り値が「画像URL」の設定の場合
                                                    $src = $acf_img;
                                                    $alt = get_the_title();
                                                }
                                                echo '<img src="' . esc_url($src) . '" alt="' . esc_attr($alt) . '">';
                                            }
                                            // 2) アイキャッチ
                                            elseif (has_post_thumbnail()) {
                                                the_post_thumbnail('medium_large', [
                                                    'alt' => get_the_title(),
                                                    'loading' => 'lazy'
                                                ]);
                                            }
                                            // 3) どちらも無いときのダミー
                                            else {
                                                echo '<img src="' . esc_url(get_stylesheet_directory_uri()) . '/img/noimg-156x190.jpg" alt="">';
                                            }
                                            ?>
                                        </figure>
                                        <div class="blog-box-right">
                                            <ul class="cat-list">
                                                <li class="blog-category">
                                                    <?php
                                                    $cats = get_the_category();
                                                    if (!empty($cats)) {
                                                        echo '<div class="cat-list">' . esc_html($cats[0]->name) . '</div>';
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
                        <?php endwhile;
                else : ?>
                        <li class="blog-box">記事はまだありません。</li>
                    <?php endif;
                wp_reset_postdata(); ?>
            </ul>
            <?php the_posts_pagination(
                array(
                    'prev_next' => false,
                    'prev_text' => '<i class="fas fa-chevron-left"></i>',
                    'next_text' => '<i class="fas fa-chevron-right"></i>',
                    'type'      => 'list',
                )
            ); ?>
        </div>
    </div>
</section>
<?php wp_reset_query(); ?>


<?php get_footer(); ?>