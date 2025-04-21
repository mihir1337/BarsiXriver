<div class="bs-about-1-content">
    <?php if(!empty( $settings['info_text'] )) : ?>
    <p class="bs-p-1 disc wa-split-y wa-capitalize">
        <?php echo wp_kses($settings['info_text'], true); ?>
    </p>
    <?php endif; ?>

    <?php if( $settings['enable_button'] === 'yes' ) : ?>
    <div class="btn-wrap wa-fadeInRight">
        <a href="<?php echo esc_url($settings['link_url']['url']); ?>"
        target="<?php echo esc_attr($settings['link_url']['is_external'] ? '_blank' : '_self'); ?>"
        rel="<?php echo esc_attr($settings['link_url']['nofollow'] ? 'nofollow' : ''); ?>"
        aria-label="name" class="bs-btn-1 tx-button">
            <?php if(!empty( $settings['link_text'] )) : ?>
            <span class="text">
                <?php echo wp_kses($settings['link_text'], true); ?>
            </span>
            <?php endif; ?>

            <?php if(!empty( $settings['info_icon'] )) : ?>
            <span class="icon">
                <?php \Elementor\Icons_Manager::render_icon( $settings['info_icon'], ['aria-hidden' => 'true'] ); ?>
                <?php \Elementor\Icons_Manager::render_icon( $settings['info_icon'], ['aria-hidden' => 'true'] ); ?>
            </span>
            <?php endif; ?>
            <span class="shape"></span>
        </a>
    </div>
    <?php endif; ?>

</div>