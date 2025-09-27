<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php if (is_page('privacy')): ?>
                <h1 data-title="PrivacyPolicy" class="page-title"><?php the_title(); ?></h1>
            <?php else: ?>
                <h1 data-title="<?php echo ucwords($post->post_name); ?>" class="page-title"><?php the_title(); ?></h1>
            <?php endif; ?>


            <h1 data-title="Not Found" class="page-title">ページが見つかりません</h1>
            <div class="inner is-small">
                <ol class="breadcrumbs">
                    <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
                </ol>
            </div>
            <?php if (is_page('privacy')): ?>
                <div class="privacy-wrapper">
                    <?php the_content(); ?>
                </div>
            <?php else: ?>
                <?php the_content(); ?>
            <?php endif; ?>


            <div class="box-white is-page404">
                <div class="page404-text-box">
                    <p>お探しのページは、削除されたか、名前が変更された可能性があります。<br>
                        直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認下さい。</p>
                    <p>ブラウザの再読込みを行ってもこのページが表示される場合は、<a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a>から目的のページをお探しください。</p>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (window.innerWidth <= 768) {
            document.getElementById('mvImg').style.backgroundImage = "url('<?php echo get_template_directory_uri(); ?>/img/fv02.jpg')";
        }
    });
</script>


<?php get_footer(); ?>