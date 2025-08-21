<?php get_header(); ?>

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

<div class="is-small is-small-blog">
    <ol class="breadcrumbs  breadcrumbs-blog-details">
        <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
        <li><span class="page-title"><?php the_title(); ?></li>
    </ol>
</div>

<section class="blog-detail">
    <div class="blog-detail-sec">
        <div class="sub-inner blog-detail-inner">
        <?php the_content(); ?>

            <!-- <div class="blog-detail-date">
                <p class="blog-detail-tag blog-category">社内研修</p>
                <time class="date" datetime="2023-03-25">2023.03.25</time>
            </div>
            <h2 class="sub-title sub-title-blog-detail">新入社員向けに、<br>入社前研修を行いました。</h2>
            <div class="blog-detail-img"><img src="<?php echo get_template_directory_uri(); ?>/img/blogdetail-top.jpg" alt=""></div>
            <p class="blog-detail-note1">2023年3月25日、新入社員を対象とした入社前研修を実施しました。<br>今回の研修では、社会人としての基礎知識やビジネスマナー、当社の事業内容や社風について学びました。</p>
            <h3 class="blog-detail-menu">研修内容</h3>
            <ul class="blog-detail-list">
                <li class="blog-detail-item">挨拶、自己紹介</li>
                <li class="blog-detail-item">社会人としての心構え</li>
                <li class="blog-detail-item">ビジネスマナー</li>
                <li class="blog-detail-item">当社の事業内容</li>
                <li class="blog-detail-item">社員</li>
                <li class="blog-detail-item">グループワーク</li>
                <li class="blog-detail-item">懇親会</li>
            </ul>
            <h3 class="blog-detail-menu">研修の様子</h3>
            <p class="blog-detail-note">研修は、座学とグループワーク、懇親会を通して行いました。<br>
                座学では、社会人としての心構えやビジネスマナーについて学びました。<br>
                グループワークでは、チームで課題に取り組むことで、コミュニケーション能力や問題解決能力を向上させました。<br>
                懇親会では、社員同士が交流を深め、親睦を図りました。<br>
                社員との交流を通して、当社の雰囲気にも馴染むことができたようです。</p>
            <h3 class="blog-detail-menu">今後の期待</h3>
            <p class="blog-detail-note">今回の研修で学んだことを活かして、新入社員の皆さんが、一人前の社会人として成長していくことを期待しています。<br>
                当社は、新入社員の皆さんが、自分の能力を最大限に発揮できる環境を提供します。<br>
                ぜひ、積極的にチャレンジし、自分自身を成長させてください！</p> -->
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

<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>