<div class="pf-services-details-feature-single wow fadeInUp pf-services-details-content">
    <?php if( $settings['enable_icon'] === 'yes' ) : ?>
    <div class="icon">
        <?php if ( $settings['type'] == 'icon' ): ?>
            <?php \Elementor\Icons_Manager::render_icon( $settings['info_icon'], ['aria-hidden' => 'true'] );?>
        <?php else: ?>
            <img src="<?php echo esc_url( $settings['info_image']['url'] ); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['info_image']['url'] ); } ?>" />
        <?php endif;?>
    </div>
    <?php endif; ?>
    <div class="content">
        <?php if(!empty( $settings['title'] )) : ?>
        <h5 class="feature-title pf-h-5"><?php echo elh_element_kses_intermediate( $settings['title'] ); ?></h5>
        <?php endif; ?>

        <?php if(!empty( $settings['description'] )) : ?>
        <p class="feature-disc pr-p-6 tx-description"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
        <?php endif; ?>
    </div>
</div>