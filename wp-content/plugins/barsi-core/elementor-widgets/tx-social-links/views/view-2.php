<div class="bs-team-details-person-social">
    <?php foreach( $settings['social_links'] as $list ) : ?>
    <a href="<?php echo esc_url($list['social_link']['url']); ?>"
        target="<?php echo esc_attr( $list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
        rel="<?php echo esc_attr( $list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>"
        aria-label="<?php echo esc_attr($list['social_name']); ?>">
        <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
    </a>
    <?php endforeach; ?>
</div>