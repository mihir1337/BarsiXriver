<div class="bs-services-3-wrap">
    <?php foreach($settings['service_lists'] as $list ) : ?>
    <div class="bs-services-3-card">
        <?php if(!empty( $list['button_icon'] )) : ?>
        <div class="card-icon">
            <?php \Elementor\Icons_Manager::render_icon( $list['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
        </div>
        <?php endif; ?>
        <h5 class="bs-h-2 card-title">
            <a href="<?php echo esc_url($list['button_link']['url']); ?>"
            target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
            rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                <?php echo elh_element_kses_intermediate($list['title']); ?>
            </a>
        </h5>
        <?php if(!empty( $list['description'] )) : ?>
        <p class="bs-p-1 card-disc"><?php echo elh_element_kses_intermediate($list['description']); ?></p>
        <?php endif; ?>

        <?php if(!empty( $list['button_link']['url'] )) : ?>
        <a href="<?php echo esc_url($list['button_link']['url']); ?>"
        target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
        rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="card-btn wa-magnetic-btn">
            <i class="fa-solid fa-right-long"></i>
        </a>
        <?php endif; ?>

        <?php if(!empty( $list['count'] )) : ?>
        <h5 class="bs-h-2 card-number">
            <?php echo esc_html($list['count']); ?>
        </h5>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>
</div>