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
                    <a href="<?php echo home_url('/entry/entry.html'); ?>">ENTRY</a>
                </div>
            </div>
            <div class="content-wrapper footer-content-wrapper">
                <div class="footer-links">
                    <div class="footer-list">
                        <div class="footer-list1">
                            <a href="<?php echo home_url('/'); ?>">ホーム</a>
                            <a href="#about">TETOTEについて</a>
                            <a href="#staff">人を知る</a>
                            <a href="#career">研修制度とキャリアパス</a>
                            <a href="#benefits">福利厚生</a>
                        </div>
                        <div class="footer-list2">
                            <a href="#blog">採用ブログ</a>
                            <a href="<?php echo home_url('/details/details.html'); ?>">募集要項</a>
                            <a href="#">よくある質問</a>
                            <a href="#">会社概要</a>
                        </div>
                    </div>
                    <div class="footer-logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tetote-logo-black.png" alt="会社ロゴ">
                        </a>
                    </div>
                </div>
            </div>

            <ul class="footer-nav">
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook-icon.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-icon.png" alt="Twitter"></a></li>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/movie-icon.png" alt="Movie"></a></li>
            </ul>
            <small class="copyright">&copy;<?php echo date("Y"); ?> TETOTE All Right Reserved.</small>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <?php wp_footer(); ?>
</body>
</html>