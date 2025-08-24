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
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'paged' => $paged,
                        'post_type' => 'staff', 
                        'posts_per_page' => 6,
                    ); ?>
                    <?php $my_query = new WP_Query($args); ?>
                    <?php if ($my_query->have_posts()) : ?>
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <li class="cp_item">
                                <a href="<?php the_permalink(); ?>" class="cp_link">
                                    <p class="cp_ttl">
                                        <?php the_title(); ?>
                                    </p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>