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
                <h2 class="sub-title-entry">送信ありがとうございました。</h2>
                <p class="entry-message">３営業日以内に人事担当者より<br>連絡させていただきます。</p>
            </div>
        </div>
    </section>


<?php get_footer(); ?>