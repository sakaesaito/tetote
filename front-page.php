<?php get_header(); ?>

<main>
<section class="mv">
        <div class="mv-inner">
            <div class="mv-bg">
            <div class="mv-img" id="mvImg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/fv01.jpg');">
                    <h2 class="mv-message-main">BECOME A<br> CHALLENGER.</h2>
                    <div class="mv-message-sub">君の挑戦が、意思が、未来を変える</div>
                    <div class="container">
                        <div class="skew-background"></div>
                    </div>
                    <div class="mv-news-box">
                        <div class="mv-news-title"><a href="<?php echo home_url('/blog/'); ?>">NEWS</a></div>
                        <div class="mv-news-item"><a href="<?php echo home_url('/blog/'); ?>">新入社員に向けに、入社名研修を行いました。</a></div>
                        <div class="mv-news-link"><a href="<?php echo home_url('/blog/'); ?>">VIEW MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper Section -->
    <section class="swiper">
        <div class="slider">
            <div class="swiper-wrapper">
                <?php
                $slide_images = ['top-slide01.jpg', 'top-slide02.jpg', 'top-slide03.jpg'];
                foreach ($slide_images as $image) {
                    for ($i = 0; $i < 2; $i++) {
                        echo '<div class="swiper-slide"><img src="' . esc_url(get_template_directory_uri() . '/img/' . $image) . '" alt=""></div>';
                    }
                }
                ?>
            </div>
            <div class="slider-heading">
                <p class="slider-heading-ms">後悔しないキャリアを作る、</p><br>
                <p class="slider-heading-ms">それこそが、我々の使命だ</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="inner">
            <div class="about-viw">
                <div class="about-lead">
                    <p class="about-lead-ms">「人手不足」<br>今の日本が抱えるこの社会課題に挑み、<br>企業と個人の可能性を最大限に引き出す。<br>それが私達の役目。</p>
                    <p class="about-lead-ms about-lead-ms2">単につなぐだけじゃない。<br>「手と手」を取り合っていけるような、<br>持続可能な社会を、一緒に作りませんか？</p>
                </div>
            </div>
            <div class="viewmore-button"><a href="<?php echo home_url('/about/about-us.html'); ?>">VIEW MORE</a></div>
        </div>
    </section>

    <!-- Staff Section -->
    <section id="staff" class="staff">
        <div class="section-title section-title-staff">MEMBER</div>
        <div class="inner staff-inner">
            <div class="content-wrapper">
                <div class="text-wrapper staff-text-wrapper">
                    <div class="staff-section-title">
                        <h2 class="content-title staff-content-title"><span>人</span>を知る</h2>
                    </div>
                    <p class="content-item staff-content-item">TETOTEの社員がどういった信念を持って働いているのか、<br>一日のスケジュールや仕事内容などを紹介します。</p>
                </div>
            </div>
            <div class="staff-sec">
                <div class="staff-sec-inner">
                    <div class="staff-box-wrapper">
                        <?php
                        $staffs = [
                            ['img' => 'syain01.jpg', 'messages' => ['「あなたが担当で良かった」', 'この一言が、最高のやりがい'], 'position' => 'コンサルタント', 'year' => '2011年入社', 'name' => '西村 優'],
                            ['img' => 'syain02.jpg', 'messages' => ['全力で考えぬける環境', '試練の数だけ強くなれました'], 'position' => 'コンサルタント', 'year' => '2015年入社', 'name' => '橋本 拓也'],
                            ['img' => 'syain03.jpg', 'messages' => ['お客様も知らない課題を', '一緒に探し出す醍醐味'], 'position' => 'ソリューション営業', 'year' => '2017年入社', 'name' => '青木 美月'],
                            ['img' => 'syain04.jpg', 'messages' => ['「あなたが担当で良かった」', 'この一言が、最高のやりがい'], 'position' => 'コンサルタント', 'year' => '2004年入社', 'name' => '佐々木 健'],
                        ];

                        foreach ($staffs as $staff): ?>
                            <div class="staff-box">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/' . $staff['img']); ?>" alt="">
                                <div class="staff-box-img">
                                    <?php foreach ($staff['messages'] as $msg): ?>
                                        <h3 class="staff-box-message"><?php echo esc_html($msg); ?></h3>
                                    <?php endforeach; ?>
                                    <div class="staff-box-past">
                                        <p class="staff-box-position"><?php echo esc_html($staff['position']); ?></p>
                                        <p class="staff-box-year"><?php echo esc_html($staff['year']); ?></p>
                                    </div>
                                    <p class="staff-box-name"><?php echo esc_html($staff['name']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="viewmore-button viewmore-button-staff"><a href="#">VIEW MORE</a></div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        if (window.innerWidth <= 768) {
            document.getElementById('mvImg').style.backgroundImage = "url('<?php echo get_template_directory_uri(); ?>/img/fv02.jpg')";
        }
    });
</script>



<?php get_footer(); ?>