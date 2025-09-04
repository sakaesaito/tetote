<?php get_header(); ?>

<main>
    <section id="staff-no01" class="staff-no01">
        <div class="page-staff-mv-sec">
            <div class="sub-inner page-staff-mv-inner">
                <div class="page-staff-box">
                    <article class="page-staff-box-left">

                        <?php if (have_posts()): ?>
                            <?php while (have_posts()): the_post(); ?>

                                <h2 class="page-staff-box-title"><?php the_field('message1'); ?></h2>
                                <h3 class="page-staff-box-item"><?php the_field('message2'); ?></h3>
                                <p class="page-staff-box-position"><?php the_field('position'); ?></p>
                                <div class="page-staff-box-name-sec">
                                    <p class="page-staff-box-name"><?php the_field('staff'); ?></p>
                                    <p class="page-staff-box-year"><?php the_field('year'); ?>年入社</p>
                                </div>
                                <p class="page-staff-box-note"><?php the_field('note'); ?></p>
                    </article>
                    <figure class="page-staff-box-img"><?php the_post_thumbnail('medium'); ?>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <div class="is-small">
        <ol class="breadcrumbs breadcrumbs-staff">
            <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
        </ol>
    </div>
    <section>
        <div class="page-staff-main">
            <article class="page-staff-wrapper">
                <div class="single-inner">
                    <div class="staff-content">
                        <h2 id="title-01" class="page-staff-title"><?php the_field('title01'); ?></h2>
                        <p class="page-staff-note"><?php the_field('title01-note'); ?></p>
                        <p class="page-staff-note"><?php the_field('title01-note2'); ?></p>
                        <h2 id="title-02" class="page-staff-title"><?php the_field('title02'); ?></h2>
                        <p class="page-staff-note"><?php the_field('title02-note'); ?></p>
                        <h2 id="title-03" class="page-staff-title"><?php the_field('title03'); ?></h2>
                        <p class="page-staff-note"><?php the_field('title03-note'); ?></p>
                        <h2 id="title-04" class="page-staff-title"><?php the_field('title04'); ?></h2>
                        <p class="page-staff-note"><?php the_field('title04-note'); ?></p>
                        <h2 id="title-05" class="page-staff-title"><?php the_field('title05'); ?></h2>
                        <p class="page-staff-note"><?php the_field('title05-note'); ?></p>
                        <h2 id="title-06" class="page-staff-title"><?php the_field('title06'); ?></h2>
                        <p class="page-staff-note"><?php the_field('title06-note'); ?></p>
                    </div>
                    <aside>
                        <div class="a-side-inner">
                            <p>目次</p>
                            <ul class="a-side-list">
                                <li data-target="title-01">普段の業務内容について</li>
                                <li data-target="title-02">学生時代に力を入れたことは</li>
                                <li data-target="title-03">TETOTEを志望した理由は？</li>
                                <li data-target="title-04">やりがいを感じる瞬間は？</li>
                                <li data-target="title-05">どんな人と一緒に働きたい？</li>
                                <li data-target="title-06">応募者へのメッセージ</li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </article>
        </div>
    </section>

<?php endwhile; ?>
<?php endif; ?>


<section id="page-staff-member" class="page-staff-member">
    <div class="sub-inner sub-inner-staff-details">
        <h2 class="page-staff-title-member">その他のメンバー</h2>
        <div class="page-staff-sec">

            <?php
            $staff_q = new WP_Query([
                'post_type'      => 'staff',
                'posts_per_page' => 3,
                'orderby'        => 'rand',
                'order'          => 'DESC',
            ]);
            if ($staff_q->have_posts()) :
                while ($staff_q->have_posts()) : $staff_q->the_post();
                    $message01 = get_field('message01') ?: '';
                    $message02 = get_field('message02') ?: '';
                    $position  = get_field('position')  ?: '';
                    $year = get_field('year') ?: '';
                    $name = get_field('staff');
            ?>
                    <div class="sub-staff-box page-staff-box-list">
                        <a href="<?php the_permalink(); ?>">
                            <figure><?php the_post_thumbnail('full'); ?></figure>
                            <div class="sub-staff-box-img page-staff-list">
                                <p class="sub-staff-box-message1"><?php the_field('message01'); ?></p>
                                <p class="sub-staff-box-message2"><?php the_field('message02'); ?></p>
                                <div class="staff-box-post">
                                    <p class="staff-box-position"><?php the_field('position'); ?></p>
                                    <p class="staff-box-year"><?php the_field('year'); ?>年入社</p>
                                </div>
                                <p class="staff-box-name"><?php the_field('staff'); ?></p>
                            </div>
                        </a>
                    </div>
                <?php endwhile;
            else: ?>
                <div class="swiper-slide">スタッフ情報はまだありません。</div>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>

</main>
<?php get_footer(); ?>