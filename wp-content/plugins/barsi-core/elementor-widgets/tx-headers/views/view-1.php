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

    // if 404 page
    if( is_404() ) {
        $class = ' has-breadcrumb-2';
    } else {
        $class = '';
    }
?>
<header class="bs-header-1-area tx-header <?php echo esc_attr($enable_position_absolute . $class); ?>">
    <div class="bs-header-1-row d-flex align-items-center justify-content-between">

        <!-- logo -->
        <?php if(!empty( $settings['logo']['url'] )) : ?>
        <a href="<?php echo esc_url($custom_link); ?>"
        aria-label="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>"
        aria-label="name" class="bs-header-logo-1 tx-logo">
            <img src="<?php echo esc_url($settings['logo']['url']); ?>"
            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>">
        </a>
        <?php endif; ?>

        <!-- action-link -->
        <div class="bs-header-1-action-link d-flex align-items-center ">

            <!-- phone-btn -->
            <?php if( $settings['enable_phone_info'] === 'yes' ) : ?>
            <a href="<?php echo esc_url($settings['contact_info_link']['url']); ?>"
            target="<?php echo esc_attr( $settings['contact_info_link']['is_external'] ? '_blank' : '_self' ); ?>"
            rel="<?php echo esc_attr( $settings['contact_info_link']['nofollow'] ? 'nofollow' : '' ); ?>"
            aria-label="name" class="bs-h-1 bs-elm-phone">
                <?php \Elementor\Icons_Manager::render_icon( $settings['contact_info_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <?php echo esc_html($settings['contact_info_label'] ); ?>
            </a>
            <?php endif; ?>

            <!-- pr-btn -->
            <?php if( $settings['enable_button'] === 'yes' ) : ?>
            <a class="bs-btn-1 header-btn tx-button"
            href="<?php echo esc_url($settings['button_link']['url']) ?>"
            target="<?php echo esc_attr( $settings['button_link']['is_external'] ? '_blank' : '_self' ); ?>"
            rel="<?php echo esc_attr( $settings['button_link']['nofollow'] ? 'nofollow' : '' ); ?>"
            aria-label="<?php echo esc_attr($settings['button_text']); ?>">
                <span class="text">
                    <?php echo esc_html($settings['button_text']); ?>
                </span>
                <span class="shape"></span>
            </a>
            <?php endif; ?>

            <!-- offcanvas-btn -->
            <button type="button" aria-label="name" class="bs-offcanvas-btn-1 btn-span offcanvas_toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="shape"></span>
            </button>

        </div>
    </div>
</header>

<?php include $dir . '/parts/side-info.php'; ?>