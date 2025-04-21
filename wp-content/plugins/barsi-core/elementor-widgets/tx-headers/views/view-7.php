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
        $sticky_header = 'txa_sticky_header';
    } else {
        $sticky_header = '';
    }
?>
<div class="pf-header-6-area tx-header <?php echo esc_attr($sticky_header . $position_absolute); ?>">
    <div class="container pf-container-1">

        <!-- top-header -->
        <?php if( $settings['enable_header_top'] === 'yes' ) : ?>
        <div class="pf-header-2-top">
            <?php include $dir . '/parts/header-top.php'; ?>
        </div>
        <?php endif; ?>

        <!-- main-header -->
        <div class="pf-header-2-main">

            <!-- logo -->
            <?php if(!empty( $settings['logo']['url'] )) : ?>
            <a href="<?php echo esc_url($custom_link); ?>"
                class="pf-header-6-logo tx-logo"
                aria-label="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>">
                <img src="<?php echo esc_url($settings['logo']['url']); ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>">
            </a>
            <?php endif; ?>

            <!-- menu -->
            <?php if ( !empty( $settings['select_menu'] ) ) : ?>
            <nav class="vy-main-navigation has-header-2  d-none d-lg-block">
                <?php include $dir . '/parts/main-menu.php'; ?>
            </nav>
            <?php endif; ?>

            <!-- action-link -->
            <div class="pf-header-2-main-action-link">

                <!-- pr-btn -->
                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <a class="pf-pr-2 tx-button"
                href="<?php echo esc_url($settings['button_link']['url']) ?>"
                target="<?php echo esc_attr( $settings['button_link']['is_external'] ? '_blank' : '_self' ); ?>"
                rel="<?php echo esc_attr( $settings['button_link']['nofollow'] ? 'nofollow' : '' ); ?>"
                aria-label="<?php echo esc_attr($settings['button_text']); ?>">
                    <span class="text"
                    data-back="<?php echo esc_attr($settings['button_text']); ?>"
                    data-front="<?php echo esc_attr($settings['button_text']); ?>"></span>
                </a>
                <?php endif; ?>

                <button type="button" aria-label="name" class="pf-menu-btn-2 offcanvas_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include $dir . '/parts/side-info.php'; ?>