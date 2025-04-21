<div class="pf-career-benefit-1-item-single wow fadeInUp txIcon-box">
    <div class="item-icon">
        <?php if ( $settings['type'] == 'icon' ): ?>
            <?php \Elementor\Icons_Manager::render_icon( $settings['info_icon'], ['aria-hidden' => 'true'] );?>
        <?php else: ?>
            <img src="<?php echo esc_url( $settings['info_image']['url'] ); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['info_image']['url'] ); } ?>" />
        <?php endif;?>
    </div>
    <?php if(!empty( $settings['title'] )) : ?>
    <h4 class=" item-title pf-h-5"><?php echo elh_element_kses_intermediate( $settings['title'] ); ?></h4>
    <?php endif; ?>

    <?php if(!empty( $settings['description'] )) : ?>
    <p class="item-disc pf-p-6 tx-description"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
    <?php endif; ?>
</div>