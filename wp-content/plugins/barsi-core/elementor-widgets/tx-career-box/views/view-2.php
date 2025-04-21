<div class="pf-career-single-sidebar">
    <?php if( $settings['enable_job_info'] === 'yes' ) : ?>
    <ul class="pf-career-single-sidebar-list list-unstyled">
        <?php foreach($settings['job_infos'] as $list) : ?>
        <li>
            <?php \Elementor\Icons_Manager::render_icon( $list['info_icon'], [ 'aria-hidden' => 'true' ] ); ?>
            <?php echo esc_html($list['info_label']); ?>
            <?php if(!empty( $list['job_info'] )) : ?>
            <span><?php echo esc_html($list['job_info']); ?></span>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <?php if(!empty( $settings['button_text'] )) : ?>
    <a href="<?php echo esc_url( $settings['button_link']['url'] ); ?>"
        target="<?php echo esc_attr( $settings['button_link']['is_external'] ? '_blank' : '_self' ); ?>"
        rel="<?php echo esc_attr( $settings['button_link']['nofollow'] ? 'nofollow' : '' ); ?>"
        aria-label="name" class="pf-pr-6 pf-career-single-sidebar-btn">
        <?php if(!empty( $settings['button_text'] )) : ?>
        <span class="text"
            data-back="<?php echo esc_attr($settings['button_text']); ?>"
            data-front="<?php echo esc_attr($settings['button_text']); ?>">
        </span>
        <?php endif; ?>

        <?php if(!empty( $settings['button_icon'] )) : ?>
        <span class="icon">
            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
        </span>
        <?php endif; ?>
    </a>
    <?php endif; ?>
</div>