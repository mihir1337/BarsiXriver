<div class="pf-feature-1-item-single has-feature-8 txIcon-box">
    <?php if( $settings['enable_icon'] == true ) : ?>
    <i class="icon">
        <?php if ( $settings['type'] == 'icon' ): ?>
            <?php \Elementor\Icons_Manager::render_icon( $settings['info_icon'], ['aria-hidden' => 'true'] );?>
        <?php else: ?>
            <img src="<?php echo esc_url( $settings['info_image']['url'] ); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['info_image']['url'] ); } ?>" />
        <?php endif;?>
    </i>
    <?php endif; ?>
    <div class="content">
        <?php if(!empty( $settings['title'] )) : ?>
        <h3 class="pf-h-1 item-title">
            <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
            target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
            rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>">
                <?php echo elh_element_kses_intermediate( $settings['title'] ); ?>
            </a>
        </h3>
        <?php endif; ?>
        <?php if(!empty( $settings['description'] )) : ?>
        <p class="pf-p-1 item-disc tx-description"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
        <?php endif; ?>
    </div>
</div>