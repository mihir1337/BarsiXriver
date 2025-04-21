<div class="bs-follow-3-link">
    <?php foreach( $settings['social_links'] as $list ) : ?>
    <a href="<?php echo esc_url($list['social_link']['url']); ?>"
        target="<?php echo esc_attr( $list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
        rel="<?php echo esc_attr( $list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name" class="link-elm wa-fadeInUp">
        <?php if(!empty( $list['social_icon'] )) : ?>
        <span class="icon wa-magnetic-btn">
            <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
        </span>
        <?php endif; ?>
        <?php if(!empty( $list['social_name'] )) : ?>
        <span class="text wa-magnetic-btn"><?php echo esc_html($list['social_name']); ?></span>
        <?php endif; ?>
        <span class="arrow wa-magnetic-btn">
            <i class="fa-solid fa-arrow-right"></i>
        </span>
    </a>
    <?php endforeach; ?>
</div>