<?php get_header(); ?>

<section id="sub-benefits" class="sub-benefits">
        <div class="sub-mv" style="background-image: url('/img/benefits-fv.jpg')" style="max-width:1440px; width:100%; height:338px; object-fit:contain; object-position: center;">
            <div class="sub-inner sub-inner-mv">
                <div class="sub-mv-box">
                    <h2 class="sub-mv-title">BENEFITS</h2>
                    <h3 class="sub-mv-item">福利厚生について</h3>
                    <p class="sub-mv-part">充実した福利厚生制度を設けています。</p>
                </div>
            </div>
        </div>
    </section>
    <div class="is-small">
        <ol class="c-breadcrumbs">
            <li><a href="<?php if ( function_exists('my_breadcrumb_step1') ) {
    create_breadcrumb_step1();
}  ?>">TOP</a></li>
            <li><span>BENEFITS</span></li>
        </ol>
    </div>
    <section class="benefuts-system">
        <div class="sub-inner sub-inner-benefits">
            <h2 class="sub-title sub-title-benefits">各種制度</h2>
            <div class="sub-benefits-list-sec ">
                <dl class="benefits-list">
                    <dt class="benefits-list-title">手当</dt>
                    <div class="sub-about-list-item-box">
                        <dd class="benefits-list-item">・通勤手当（上限月5万円）</dd>
                        <dd class="benefits-list-item">・時間外割増手当</dd>
                        <dd class="benefits-list-item">・役職手当</dd>
                        <dd class="benefits-list-item">・退職金</dd> 
                    </div>
                </dl>
                <dl class="benefits-list">
                    <dt class="benefits-list-title">制度</dt>
                    <dd class="benefits-list-item">財形貯蓄</dd>
                </dl>
                <dl class="benefits-list">
                    <dt class="benefits-list-title">保証</dt>
                    <dd class="benefits-list-item">社会保険完備</dd>
                </dl>
                <dl class="benefits-list">
                    <dt class="benefits-list-title">施設</dt>
                    <div class="sub-about-list-item-box">
                        <dd class="benefits-list-item">・社員向けジム</dd>
                        <dd class="benefits-list-item">・社内託児所</dd>
                    </div>
                </dl>
                <dl class="benefits-list">
                    <dt class="benefits-list-title">休暇・休日</dt>
                    <div class="sub-about-list-item-box">
                        <dd class="benefits-list-item">・完全週休2日制</dd>
                        <dd class="benefits-list-item">・年次有給休暇（初年度10日／年度途中入社は比例付与）</dd>
                        <dd class="benefits-list-item">・年末年始休暇（12月29日～1月3日：6日間）</dd>
                        <dd class="benefits-list-item">・夏季休暇（6月～9月中：5日間）</dd> 
                        <dd class="benefits-list-item">・慶弔休暇</dd>
                        <dd class="benefits-list-item">・産前産後休暇</dd>
                        <dd class="benefits-list-item">・リフレッシュ休暇（3年勤続で5日／以降5年勤続ごとに5日支給）</dd> 
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <section class="benefits-user">
        <div class="sub-inner sub-inner-benefits">
            <h2 class="sub-title sub-title-benefits2">制度利用者の声</h2>
            <div class="benefits-user-box">
                <div class="benefits-user-wrap">
                    <div class="benefits-date">2013年入社</div>
                    <h3 class="benefits-name">堀内 優</h3>
                    <p class="benefits-note">資格取得のための費用を会社が負担してくれる制度を利用して、念願の応用技術者資格を取得できました。<br>
                        この制度は、自己啓発を支援してくれるので、とても助かります。今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。<br>
                        会社が成長を支援してくれるので、安心して仕事に取り組むことができます。</p>
                </div>
                <div class="benefits-user-wrap">
                    <div class="benefits-date">2015年入社</div>
                    <h3 class="benefits-name">神凪 理沙</h3>
                    <p class="benefits-note">出産後、育休を取得して、現在は短時間勤務で働いています。会社が育児に理解があるので、安心して仕事に集中できます。<br>
                        特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。<br>
                        今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。</p>
                </div>
            </div>
            <div class="benefits-staff-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/benefits-user.jpg" alt=""></div>
        </div>
    </section>
    <section>
        
    </section>

    <?php get_footer(); ?>