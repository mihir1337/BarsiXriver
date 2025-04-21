<?php
    $enable_custom_link = $settings['enable_custom_link'];
    if($enable_custom_link == 'yes') {
        $custom_link = $settings['custom_link']['url'];
    } else {
        $custom_link = home_url( '/' );
    }
?>
<header class="bs-header-5-area tx-header">
    <div class="container bs-container-2">
        <div class="bs-header-5-row d-flex align-items-center justify-content-between">

            <!-- logo -->
            <?php if(!empty( $settings['logo']['url'] )) : ?>
            <a href="<?php echo esc_url($custom_link); ?>"
            aria-label="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>"
            aria-label="name" class="bs-header-5-logo tx-logo">
                <img src="<?php echo esc_url($settings['logo']['url']); ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>">
            </a>
            <?php endif; ?>

            <?php if ( !empty( $settings['select_menu'] ) ) : ?>
            <nav class="bs-main-navigation d-none d-lg-block">
                <?php include $dir . '/parts/main-menu.php'; ?>
            </nav>
            <?php endif; ?>

            <!-- action-link -->
            <div class="bs-header-5-action-link d-flex align-items-center ">

                <!-- pr-btn -->
                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <a href="<?php echo esc_url($settings['button_link']['url']) ?>"
                target="<?php echo esc_attr( $settings['button_link']['is_external'] ? '_blank' : '_self' ); ?>"
                rel="<?php echo esc_attr( $settings['button_link']['nofollow'] ? 'nofollow' : '' ); ?>"  aria-label="name" class="bs-pr-btn-3">
                    <span class="text"><?php echo esc_html($settings['button_text']); ?></span>
                    <span class="text"><?php echo esc_html($settings['button_text']); ?></span>
                </a>
                <?php endif; ?>

                <!-- offcanvas-btn -->
                <button type="button" aria-label="name" class="bs-offcanvas-btn-1  offcanvas_toggle">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>

            </div>
        </div>
    </div>
</header>

<?php include $dir . '/parts/search-box.php'; ?>
<?php include $dir . '/parts/side-info.php'; ?>