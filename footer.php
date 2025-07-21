<footer>
        <div class="footer-view"></div>
        <div class="inner footer-inner">
            <div class="contact-box">
                <p class="content-item footer-contact-item">
                    わたしたちと一緒に働く仲間を募集中です。<br>
                    少数精鋭のチームで、<br>
                    あなたも会社も一緒に成長していきましょう。
                </p>
                <div class="button-viewmore-entry">
                    <a href="<?php echo esc_url(home_url('/entry/')); ?>">ENTRY</a>
                </div>
            </div>
            <div class="content-wrapper footer-content-wrapper"> 
                <div class="footer-links">
                    <div class="footer-list">
                        <div class="footer-list1">
                            <a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                            <a href="<?php echo esc_url(home_url('/about/')); ?>">TETOTEについて</a>
                            <a href="<?php echo esc_url(home_url('/staff/')); ?>">人を知る</a>
                            <a href="<?php echo esc_url(home_url('/career/')); ?>">研修制度とキャリアパス</a>
                            <a href="<?php echo esc_url(home_url('/benefits/')); ?>">福利厚生</a>
                        </div>
                        <div class="footer-list2">
                            <a href="<?php echo esc_url(home_url('/blog-detail/')); ?>">採用ブログ</a>
                            <a href="<?php echo esc_url(home_url('/details/')); ?>">募集要項</a>
                            <a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
                            <a href="<?php echo esc_url(home_url('/about/')); ?>">会社概要</a>
                        </div>
                    </div>
                    <div class="footer-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tetote-logo-black.png" alt="会社ロゴ">
                        </a>
                    </div>
                </div>
            </div>
            
            <ul class="footer-nav">
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-icon.png" alt="フェイスブックアイコン"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" alt="ツイッターアイコン"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/movie-icon.png" alt="ユーチューブアイコン"></a></li>
            </ul>
            <small class="copyright">&copy;2024 TETOTE All Right Reserved.</small>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <?php wp_footer(); ?>
</body>
</html>