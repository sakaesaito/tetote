<?php get_header(); ?>

    <section class="entry-mv">
        <div class="is-small">
            <ol class="breadcrumbs">
            <?php if (function_exists('bcn_display')) bcn_display_list(); ?>  
            </ol>
        </div>
    </section>
    <section class="entry-main">
        <div class="entry-bg">
            <div class="sub-inner entry-inner">
                <div class="entry-top">
                    <p class=form-entry>ENTRY FORM</p>
                    <h2 class="form-title"><span>新卒・中途採用</span><br>エントリーフォーム</h2>
                    <div class="form-message-box">
                        <p class="form-message">当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。
                        <p class="form-message-02">※は必須項目になります。</P>
                    </div>
                </div>
            <?php echo do_shortcode( '[contact-form-7 id="4f82566" title="ENTRY FORM"]' ); ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>