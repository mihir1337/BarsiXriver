<div class="pf-about-inner-left p-0">
    <div class="pf-about-inner-card item-parallax">
        <?php if(!empty( $settings['info_image']['url'] )) : ?>
        <div class="card-img wa-img-cover wa-fix mb-20">
            <img src="<?php echo esc_url( $settings['info_image']['url'] ); ?>"
            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['info_image']['url'] ); } ?>" />
        </div>
        <?php endif; ?>

        <?php if(!empty( $settings['title'] )) : ?>
        <h5 class="pf-h-5 card-title">
            <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
            target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
            rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>">
                <?php echo elh_element_kses_intermediate( $settings['title'] ); ?>
            </a>
        </h5>
        <?php endif; ?>

        <?php if(!empty( $settings['description'] )) : ?>
        <p class="pf-p-6 card-disc tx-description"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
        <?php endif; ?>
    </div>
</div>