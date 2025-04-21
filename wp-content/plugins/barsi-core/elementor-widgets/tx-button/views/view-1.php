<?php
    $wow_animation = '';
    $wow_duration = '';
    $wow_delay = '';
    if ( $settings['enable_animation'] === 'yes' ) {
        $wow_animation = 'wow ' . $settings['wow_animation'];
        $wow_duration = $settings['wow_duration'] ? $settings['wow_duration'] : '';
        $wow_delay = $settings['wow_delay'] ? $settings['wow_delay'] : '';
    }

    $button_class = '';
    if($settings['button_full_width'] == 'yes') {
        $button_class = 'fullWidth';
    } else {
        $button_class = '';
    }

    $button_alignment = $settings['button_alignment'];

    if($button_alignment == 'left') {
        $button_class .= ' text-left';
    } elseif($button_alignment == 'center') {
        $button_class .= ' text-center';
    } elseif($button_alignment == 'right') {
        $button_class .= ' text-right';
    }
?>
<div class="bs-services-3-all-btn <?php echo esc_attr($button_class); ?> wa-fadeInUp">
    <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
    target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
    rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-btn-1 text-capitalize tx-button">
        <?php if(!empty( $settings['button_text'] )) : ?>
        <span class="text">
            <?php echo esc_html($settings['button_text']); ?>
        </span>
        <?php endif; ?>

        <?php if(!empty( $settings['selected_icon'] )) : ?>
        <span class="icon">
            <?php \Elementor\Icons_Manager::render_icon( $settings['selected_icon'], [ 'aria-hidden' => 'true' ] ); ?>
            <?php \Elementor\Icons_Manager::render_icon( $settings['selected_icon'], [ 'aria-hidden' => 'true' ] ); ?>
        </span>
        <?php endif; ?>
        <span class="shape"></span>
    </a>
</div>