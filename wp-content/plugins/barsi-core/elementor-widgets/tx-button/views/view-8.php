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
<div class="btn-wrapper <?php echo esc_attr($button_class); ?>">
    <div class="btn-innerWrapper <?php echo esc_attr($wow_animation) ?>"
        data-wow-delay="<?php echo esc_attr($wow_delay); ?>"
        data-wow-duration="<?php echo esc_attr($wow_duration); ?>">
        <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
        target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
        rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
        aria-label="<?php echo esc_attr($settings['button_text']); ?>" class="pf-pr-6 has-bg-white tx-button">
            <span class="text"
            data-back="<?php echo esc_attr($settings['button_text']);?>"
            data-front="<?php echo esc_attr($settings['button_text']);?>"></span>
            <?php if(!empty( $settings['selected_icon'] )) : ?>
            <span class="icon">
                <?php \Elementor\Icons_Manager::render_icon( $settings['selected_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <?php \Elementor\Icons_Manager::render_icon( $settings['selected_icon'], [ 'aria-hidden' => 'true' ] ); ?>
            </span>
            <?php endif; ?>
        </a>
    </div>
</div>