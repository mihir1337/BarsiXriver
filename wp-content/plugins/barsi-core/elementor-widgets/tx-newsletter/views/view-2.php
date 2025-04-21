<div class="vt-blog-newslatter" data-background="<?php echo $settings['image_1']['url'] ? esc_url($settings['image_1']['url']) : ''; ?>">
    <div class="vt-blog-newslatter-content d-flex align-items-center justify-content-between flex-wrap">
        <div class="newsletter-img-text headline pera-content">
            <?php if(!empty( $settings['image_2']['url'] )) : ?>
            <div class="newsletter-img">
                <img src="<?php echo esc_url($settings['image_2']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
            </div>
            <?php endif; ?>
            <div class="newsletter-text">
                <?php if(!empty( $settings['title'] )) : ?>
                <h3><?php echo elh_element_kses_intermediate($settings['title']); ?></h3>
                <?php endif; ?>

                <?php if(!empty( $settings['description'] )) : ?>
                <p class="tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty( $settings['newsletter_shortcode'] )) : ?>
        <div class="newsletter-form">
            <?php echo do_shortcode($settings['newsletter_shortcode']); ?>
        </div>
        <?php endif; ?>
    </div>
</div>