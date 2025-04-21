<?php
    $enable_custom_link = $settings['enable_custom_link'];
    if($enable_custom_link == 'yes') {
        $custom_link = $settings['custom_link']['url'];
    } else {
        $custom_link = home_url( '/' );
    }
?>
<header class="bs-header-4-area tx-header">
    <div class="bs-header-4-row d-flex justify-content-between">
        <!-- logo -->
        <?php if(!empty( $settings['logo']['url'] )) : ?>
        <a href="<?php echo esc_url($custom_link); ?>"
        aria-label="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>"
        aria-label="name" class="bs-header-4-logo tx-logo">
            <img src="<?php echo esc_url($settings['logo']['url']); ?>"
            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>">
        </a>
        <?php endif; ?>

        <div class="bs-header-4-right">
            <!-- top-header -->
            <div class="bs-header-4-top">
                <!-- left-contact -->
                <?php if( $settings['enable_contact_info'] === 'yes' ) : ?>
                <ul class="bs-header-4-top-contact wa-list-style-none">
                    <?php foreach($settings['contact_info_lists'] as $key => $list ) : ?>
                    <li class="bs-p-4">
                        <a href="<?php echo esc_url($list['contact_info_link']['url']); ?>"
                        target="<?php echo esc_attr( $list['contact_info_link']['is_external'] ? '_blank' : '_self' ); ?>"
                        rel="<?php echo esc_attr( $list['contact_info_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name">
                            <?php \Elementor\Icons_Manager::render_icon( $list['contact_info_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            <?php echo wp_kses($list['contact_info_label'], true ); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>

                <!-- right-social -->
                <?php if( $settings['header_top_enable_social_links'] === 'yes' ) : ?>
                <div class="bs-header-4-top-social">
                    <?php foreach($settings['header_top_social_links'] as $list ) : ?>
                    <a href="<?php echo esc_url($list['social_link']['url']) ?>"
                    target="<?php echo esc_attr( $list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                    rel="<?php echo esc_attr( $list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name" class="elm-link">
                        <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- main-header -->
            <div class="bs-header-4-main">

                <!-- menu -->
                <?php if ( !empty( $settings['select_menu'] ) ) : ?>
                <nav class="bs-main-navigation  d-none d-lg-block">
                    <?php include $dir . '/parts/main-menu.php'; ?>
                </nav>
                <?php endif; ?>

                <!-- action-link -->
                <div class="bs-header-4-action-link d-flex align-items-center ">
                    <!-- pr-btn -->
                    <?php if( $settings['enable_button'] === 'yes' ) : ?>
                    <a href="<?php echo esc_url($settings['button_link']['url']) ?>"
                    target="<?php echo esc_attr( $settings['button_link']['is_external'] ? '_blank' : '_self' ); ?>"
                    rel="<?php echo esc_attr( $settings['button_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name" class="bs-pr-btn-2 tx-button">
                        <?php if(!empty( $settings['button_text'] )) : ?>
                        <span class="text"
                            data-back="<?php echo esc_attr($settings['button_text']); ?>"
                            data-front="<?php echo esc_attr($settings['button_text']); ?>">
                        </span>
                        <?php endif; ?>
                        <span class="box box-1" ></span>
                        <span class="box box-2" ></span>
                        <span class="box box-3" ></span>
                        <span class="box box-4" ></span>
                    </a>
                    <?php endif; ?>

                    <?php if( $settings['enable_search'] === 'yes' ) : ?>
                    <button class="bs-search-btn-2 search_btn_toggle" >
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <?php echo elh_element_kses_intermediate($settings['search_button_text']); ?>
                    </button>
                    <?php endif; ?>

                    <!-- offcanvas-btn -->
                    <button type="button" aria-label="name" class="bs-offcanvas-btn-3 offcanvas_toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>

                </div>
            </div>
        </div>
    </div>
</header>

<?php include $dir . '/parts/side-info.php'; ?>
<?php include $dir . '/parts/search-box.php'; ?>