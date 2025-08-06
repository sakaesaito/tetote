<?php get_header(); ?>

<section id="sub-staff" class="sub-staff">
    <div class="sub-mv" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/staff-fv.jpg');background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="sub-inner sub-inner-mv">
            <div class="sub-mv-box">
                <h2 class="sub-mv-title">STAFF</h2>
                <h3 class="sub-mv-item staff-mv-item">社員について</h3>
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
<section>
    <div class="sub-inner sub-inner-staff">
        <div class="sub-staff-sec">
            <div class="sub-staff-box-wrapper">
                <div class="sub-staff-box">
                    <a href="<?php echo esc_url(home_url('/staff-single/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/staff-single-syain01.jpg" alt="社員写真ー西村優">
                        <div class="sub-staff-box-img">
                            <p class="sub-staff-box-message">「あなたが担当で良かった」</p>
                            <p class="sub-staff-box-message">この一言が、最高のやりがい</p>
                            <div class="staff-box-past">
                                <p class="staff-box-position">コンサルタント</p>
                                <p class="staff-box-year">2011年入社</p>
                            </div>
                            <p class="staff-box-name">西村 優</p>
                        </div>
                    </a>
                </div>
                <div class="sub-staff-box">
                    <a href="<?php echo home_url('/staff-single/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/syain02.jpg" alt="社員写真ー橋本拓也">
                        <div class="sub-staff-box-img">
                            <p class="sub-staff-box-message">全力で考えぬける環境</p>
                            <p class="sub-staff-box-message">試練の数だけ強くなれました</p>
                            <div class="staff-box-past">
                                <p class="staff-box-position">コンサルタント</p>
                                <p class="staff-box-year">2015年入社</p>
                            </div>
                            <p class="staff-box-name">橋本 拓也</p>
                        </div>
                    </a>
                </div>
                <div class="sub-staff-box">
                    <a href="<?php echo home_url('/staff-single/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/syain03.jpg" alt="社員青木美月">
                        <div class="sub-staff-box-img">
                            <p class="sub-staff-box-message">お客様も知らない課題を</p>
                            <p class="sub-staff-box-message">一緒に探し出す醍醐味</p>
                            <div class="staff-box-past">
                                <p class="staff-box-position">ソリューション営業</p>
                                <p class="staff-box-year">2017年入社</p>
                            </div>
                            <p class="staff-box-name">青木 美月</p>
                        </div>
                    </a>
                </div>
                <div class="sub-staff-box">
                    <a href="<?php echo home_url('/staff-single/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/syain04.jpg" alt="社員写真ー高橋智">
                        <div class="sub-staff-box-img">
                            <p class="sub-staff-box-message">ビジネスの課題を</p>
                            <p class="sub-staff-box-message">データで解決する醍醐味を</p>
                            <div class="staff-box-past">
                                <p class="staff-box-position">データサイエンティスト</p>
                                <p class="staff-box-year">2002年入社</p>
                            </div>
                            <p class="staff-box-name">高橋 智</p>
                        </div>
                    </a>
                </div>
                <div class="sub-staff-box">
                    <a href="<?php echo home_url('/staff-single/'); ?>/staff-single/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/syain05.jpg" alt="社員写真ー高田凛">
                        <div class="sub-staff-box-img">
                            <p class="sub-staff-box-message">どんな難解な案件も</p>
                            <p class="sub-staff-box-message">チームで突破できる強い連携</p>
                            <div class="staff-box-past">
                                <p class="staff-box-position">コンサルタント</p>
                                <p class="staff-box-year">2006年入社</p>
                            </div>
                            <p class="staff-box-name">高田 凛</p>
                        </div>
                    </a>
                </div>
                <div class="sub-staff-box">
                    <a href="<?php echo home_url('/staff-single/'); ?>/staff-single/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/syain06.jpg" alt="橘光">
                        <div class="sub-staff-box-img">
                            <p class="sub-staff-box-message">お客様と一緒に開発</p>
                            <p class="sub-staff-box-message">豊富なプライム案件が魅力です</p>
                            <div class="staff-box-past">
                                <p class="staff-box-position">システム事業部部長</p>
                                <p class="staff-box-year">2007年入社</p>
                            </div>
                            <p class="staff-box-name">橘 光</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>