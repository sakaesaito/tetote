<?php get_header(); ?>


<main class="main">
    <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

    <div class="is-small is-small-blog">
        <ol class="breadcrumbs  breadcrumbs__blog">
            <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
            <li><span class="breadcrumbs__blog"><?php the_title(); ?></span></li>
        </ol>
    </div>
    <h1><?php the_title(); ?></h1>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>