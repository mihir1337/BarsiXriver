<?php
    $enable_custom_link = $settings['enable_custom_link'];
    if($enable_custom_link == 'yes') {
        $custom_link = $settings['custom_link']['url'];
    } else {
        $custom_link = home_url( '/' );
    }
?>
<header class="bs-header-3-area">

    <!-- top-header -->
    <?php if( $settings['enable_header_top'] === 'yes' ) : ?>
    <div class="bs-header-3-top">
        <div class="container bs-container-1">
            <div class="bs-header-3-top-wrap">

                <!-- lang-btn -->
                <?php if( $settings['enable_lang_switcher'] === 'yes' ) : ?>
                <div class="nice-select kd-lang-1-btn">
                    <span class="current">
                        <?php if(!empty( $settings['current_lang_image']['url'] )) : ?>
                        <span class="flag wa-fix">
                            <img src="<?php echo esc_url($settings['current_lang_image']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['current_lang_image']['url'] ); } ?>">
                        </span>
                        <?php endif; ?>
                        <?php echo esc_html($settings['current_lang_text']); ?>
                    </span>

                    <ul class="list">
                        <?php foreach ( $settings['lang_lists'] as $key => $list ) : ?>
                        <li data-value="english" class="option selected">
                            <?php if(!empty( $list['lang_image']['url'] )) : ?>
                            <span class="flag wa-fix">
                                <img src="<?php echo esc_url($list['lang_image']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['lang_image']['url'] ); } ?>">
                            </span>
                            <?php endif; ?>
                            <?php echo esc_html($list['lang_text']); ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <!-- call-elm -->
                <?php if( $settings['enable_contact_info'] === 'yes' ) : ?>
                <div class="bs-header-3-top-call-elm">
                    <?php foreach($settings['contact_info_lists'] as $key => $list ) : ?>
                    <a class="elm-item bs-p-3" href="<?php echo esc_url($list['contact_info_link']['url']); ?>"
                    target="<?php echo esc_attr( $list['contact_info_link']['is_external'] ? '_blank' : '_self' ); ?>"
                    rel="<?php echo esc_attr( $list['contact_info_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name">
                        <?php echo wp_kses($list['contact_info_label'], true ); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <div class="bs-header-3-top-btn">
                    <a href="<?php echo esc_url($settings['button_link']['url']) ?>"
                    target="<?php echo esc_attr( $settings['button_link']['is_external'] ? '_blank' : '_self' ); ?>"
                    rel="<?php echo esc_attr( $settings['button_link']['nofollow'] ? 'nofollow' : '' ); ?>"
                    aria-label="name" class="bs-btn-1 tx-button">
                        <span class="text">
                            <?php echo esc_html($settings['button_text']); ?>
                        </span>
                        <span class="shape"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <?php endif; ?>

    <!-- main-header -->
    <div class="bs-header-3-main d-flex align-items-center ">
        <div class="container bs-container-1">
            <div class="bs-header-3-main-left">
                <!-- logo -->
                <?php if(!empty( $settings['logo']['url'] )) : ?>
                <a href="<?php echo esc_url($custom_link); ?>"
                aria-label="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>"
                aria-label="name" class="bs-header-logo-3 tx-logo">
                    <img src="<?php echo esc_url($settings['logo']['url']); ?>"
                    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>">
                </a>
                <?php endif; ?>


                <!-- menu -->
                <?php if ( !empty( $settings['select_menu'] ) ) : ?>
                <nav class="bs-main-navigation d-none d-lg-block">
                    <?php include $dir . '/parts/main-menu.php'; ?>
                </nav>
                <?php endif; ?>

                <!-- search-btn -->
                <button class="bs-search-btn-1 search_btn_toggle">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>

        <!-- offcanvas-btn -->
        <button class="bs-offcanvas-btn-2 offcanvas_toggle">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </button>
    </div>
</header>

<?php include $dir . '/parts/side-info.php'; ?>
<?php include $dir . '/parts/search-box.php'; ?>