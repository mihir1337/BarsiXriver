<?php
    $enable_custom_link = $settings['enable_custom_link'];
    if($enable_custom_link == 'yes') {
        $custom_link = $settings['custom_link']['url'];
    } else {
        $custom_link = home_url( '/' );
    }

    // enable position
    $enable_position_absolute = $settings['enable_position_absolute'];
    if($enable_position_absolute == 'yes') {
        $position_absolute = ' position-absolute';
    } else {
        $position_absolute = '';
    }

    // enable sticky header
    $enable_sticky_header = $settings['enable_sticky_header'];
    if($enable_sticky_header === 'yes') {
        $sticky_header = 'wa_sticky_header';
    } else {
        $sticky_header = '';
    }
?>
<header class="bs-header-2-area tx-header <?php echo esc_attr($sticky_header . $position_absolute); ?>">
    <div class="bs-header-2-row d-flex align-items-center justify-content-between">

        <!-- logo -->
        <?php if(!empty( $settings['logo']['url'] )) : ?>
        <a href="<?php echo esc_url($custom_link); ?>"
        aria-label="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>"
        aria-label="name" class="bs-header-logo-1 tx-logo">
            <img src="<?php echo esc_url($settings['logo']['url']); ?>"
            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>">
        </a>
        <?php endif; ?>

        <?php if ( !empty( $settings['select_menu'] ) ) : ?>
        <nav class="bs-main-navigation  d-none d-lg-block">
            <?php include $dir . '/parts/main-menu.php'; ?>
        </nav>
        <?php endif; ?>

        <!-- action-link -->
        <div class="bs-header-2-action-link d-flex align-items-center ">
            <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
            <div class="bs-social-1">
                <?php foreach($settings['social_links'] as $list ) : ?>
                <a href="<?php echo esc_url($list['social_link']['url']) ?>"
                target="<?php echo esc_attr( $list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                rel="<?php echo esc_attr( $list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>"
                class="link wa-magnetic-btn" aria-label="name">
                    <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- offcanvas-btn -->
            <button type="button" aria-label="name" class="bs-offcanvas-btn-1  offcanvas_toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
        </div>
    </div>
</header>

<?php include $dir . '/parts/side-info.php'; ?>