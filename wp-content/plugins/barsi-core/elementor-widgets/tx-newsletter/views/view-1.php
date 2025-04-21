<div class="vy-newsletter-1-area vy-p-relative vy-fix tx-section">
    <div class="vy-container-2">
        <div class="vy-newsletter-1-row vy-redius-16 vy-p-relative vy-fix d-flex align-items-center justify-content-center wascale0">
            <div class="vy-newsletter-1-content">
                <?php if(!empty( $settings['title'] )) : ?>
                <h3 class="vy-newsletter-1-content-title vy-ff-500 has-black-2">
                    <?php echo elh_element_kses_intermediate($settings['title']); ?>
                </h3>
                <?php endif; ?>

                <?php if(!empty( $settings['newsletter_shortcode'] )) : ?>
                <div class="vy-newsletter-1-form">
                    <?php echo do_shortcode($settings['newsletter_shortcode']); ?>
                </div>
                <?php endif; ?>
            </div>

            <?php if(!empty( $settings['image_1']['url'] )) : ?>
            <div class="vy-newsletter-1-bg-shape">
                <img src="<?php echo esc_url($settings['image_1']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>