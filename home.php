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
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>