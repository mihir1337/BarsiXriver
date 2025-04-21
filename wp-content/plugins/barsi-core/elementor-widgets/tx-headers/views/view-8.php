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
<div class="pf-header-1-area has-inner-page tx-header <?php echo esc_attr($sticky_header . $position_absolute); ?>">
    <div class="container pf-container-1">
        <div class="pf-header-1-row d-flex align-items-center justify-content-between">

            <!-- logo -->
            <?php if(!empty( $settings['logo']['url'] )) : ?>
            <a href="<?php echo esc_url($custom_link); ?>"
            aria-label="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>"
            aria-label="name" class="pf-header-1-logo tx-logo">
                <img src="<?php echo esc_url($settings['logo']['url']); ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['logo']['url'] ); } ?>">
            </a>
            <?php endif; ?>

            <!-- action-link -->
            <div class="pf-header-1-action-link d-flex align-items-center wa-p-relative">

                <!-- search-btn -->
                <?php if( $settings['enable_search'] === 'yes' ) : ?>
                <div class="pf-header-1-search">
                    <?php if(!empty( $settings['search_button_icon'] )) : ?>
                    <button class="pf-search-btn-1 search_btn_toggle" name="Search Button" aria-label="Search Button">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['search_button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    </button>
                    <?php endif; ?>

                    <div class="txa-search-box search_box_active">
                        <div class="txa-search-container">
                            <div class="txa-search-wrap text-center mb-55">
                                <?php if(!empty( $settings['search_button_text'] )) : ?>
                                <h5 class="txa-search-title fx-heading-1 fx-font-500">
                                    <?php echo elh_element_kses_intermediate($settings['search_button_text']); ?>
                                </h5>
                                <?php endif; ?>
                                <form method="get" class="txa-search-form" action="<?php print esc_url(home_url('/')); ?>">
                                    <input class="txa-search-form-input" type="search"
                                    name="s"
                                    aria-label="search"
                                    placeholder="<?php print esc_attr($settings['search_placeholder']); ?>"
                                    value="<?php print esc_attr( get_search_query() )?>">
                                </form>
                            </div>
                            <?php if( $settings['enable_populer_tags'] === 'yes' ) : ?>
                            <div class="txa-search-tag-wrap text-center">
                                <h6 class="txa-search-tag-title fx-font-400 fx-heading-1">
                                    <?php echo elh_element_kses_intermediate($settings['populer_tag_heading']); ?>
                                </h6>
                                <div class="txa-search-tag d-inline-flex flex-wrap">
                                    <?php foreach($settings['populer_tags'] as $list) : ?>
                                    <a href="<?php echo esc_url($list['populer_tag_link']['url']); ?>"
                                    aria-label="name" class="txa-search-tag-item fx-heading-1 fx-font-500">
                                        <?php echo elh_element_kses_intermediate($list['populer_tag_text']); ?>
                                    </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                        <button aria-label="search-close" type="button" class="txa-search-box-close search_box_close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>
                <?php endif; ?>

                <span class="pf-header-1-action-link-line"></span>

                <!-- menu -->
                <div class="pf-offcanvas-1">
                    <div class="pf-menu-btn-1 offcanvas_toggle">
                        <i data-feather="menu"></i>
                    </div>

                    <div class="txa-offcanvas-box  offcanvas_box_active">
                        <button class="txa-offcanvas-box-close offcanvas_box_close" aria-label="name" >
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                        <div class="txa-offcanvas-box-container lenis lenis-smooth">

                            <!-- mobile-menu-list -->
                            <?php if ( !empty( $settings['select_mobile_menu'] ) ) : ?>
                            <div class="mobile-menu-navigation ">
                                <nav class="mobile-main-navigation  clearfix ul-li">
                                    <?php include $dir . '/parts/main-menu.php'; ?>
                                </nav>
                            </div>
                            <?php endif; ?>

                            <div class="txa-offcanvas-content">
                                <!-- contact -->
                                <?php if( $settings['enable_quick_contact'] === 'yes' ) : ?>
                                <div class="txa-offcanvas-content-box">
                                    <?php if(!empty( $settings['quick_contact_heading'] )) : ?>
                                    <h6 class="txa-offcanvas-content-box-title pf-h-1">
                                        <?php echo elh_element_kses_intermediate($settings['quick_contact_heading']); ?>
                                    </h6>
                                    <?php endif; ?>
                                    <ul class="txa-offcanvas-contact list-unstyled">
                                        <?php foreach($settings['quick_contact_lists'] as $list) : ?>
                                        <li class="pf-h-1 fix" >
                                            <span class="offcanvas-slideup">
                                                <?php
                                                    if(!empty( $list['quick_contact_icon'] )) {
                                                        \Elementor\Icons_Manager::render_icon( $list['quick_contact_icon'], [ 'aria-hidden' => 'true' ] );
                                                    }
                                                ?>
                                                <?php echo elh_element_kses_intermediate($list['quick_contact_label']); ?>
                                            </span>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>