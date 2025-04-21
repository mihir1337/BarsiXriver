<div class="bs-career-item-single">
    <?php if( $settings['enable_icon'] == true ) : ?>
    <div class="item-icon">
        <?php if ( $settings['type'] == 'icon' ): ?>
            <?php \Elementor\Icons_Manager::render_icon( $settings['info_icon'], ['aria-hidden' => 'true'] );?>
        <?php else: ?>
            <img src="<?php echo esc_url( $settings['info_image']['url'] ); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['info_image']['url'] ); } ?>" />
        <?php endif;?>
    </div>
    <?php endif; ?>
    <?php if(!empty( $settings['title'] )) : ?>
    <h4 class="bs-h-4 item-title">
        <a
            href="<?php echo esc_url($settings['button_link']['url']); ?>"
            target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
            rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
            aria-label="<?php echo esc_attr( $settings['title'] ); ?>">
            <?php echo elh_element_kses_intermediate( $settings['title'] ); ?>
        </a>
    </h4>
    <?php endif; ?>

    <?php if(!empty( $settings['description'] )) : ?>
    <p class="item-disc bs-p-4"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
    <?php endif; ?>
</div>