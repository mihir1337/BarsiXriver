<div class="pf-projects-details-gallery-img wa-fix wa-img-cover">
    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <img
    src="<?php echo esc_url($settings['image_1']['url']); ?>"
    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    <?php endif; ?>
</div>