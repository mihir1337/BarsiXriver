<footer class="bs-footer-2-area wa-p-relative wa-fix">
    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <div class="bs-footer-2-bg-img wa-fix wa-img-cover">
        <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    </div>
    <?php endif; ?>

    <!-- footer-line -->
    <?php if( $settings['enable_top_shape'] === 'yes' ) : ?>
    <div class="bs-footer-2-marquee wa-fix">
        <div class="bs-footer-2-line">
            <span></span>
            <span></span>
        </div>
    </div>
    <?php endif; ?>

    <div class="container bs-container-1">
        <div class="bs-footer-2-wrap pt-130">

            <!-- logo -->
            <?php if(!empty( $settings['footer_logo']['url'] )) : ?>
            <a href="<?php echo esc_url(home_url()); ?>" aria-label="name" class="bs-footer-2-logo" data-cursor="-opaque">
                <img src="<?php echo esc_url($settings['footer_logo']['url']); ?>"
             alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['footer_logo']['url'] ); } ?>">
            </a>
            <?php endif; ?>

            <!-- footer-top -->
            <div class="bs-footer-2-top mb-90">

                <!-- left-content -->
                <div class="bs-footer-2-top-content">
                    <?php if(!empty( $settings['footer_info_heading'] )) : ?>
                    <h5 class="bs-h-2 title" data-cursor="-opaque">
                        <?php echo esc_html($settings['footer_info_heading']); ?>
                    </h5>
                    <?php endif; ?>

                    <?php if(!empty( $settings['footer_info_text'] )) : ?>
                    <p class="bs-p-1 disc">
                        <?php echo esc_html($settings['footer_info_text']); ?>
                    </p>
                    <?php endif; ?>

                    <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
                    <div class="bs-footer-2-top-content-social">
                        <?php foreach( $settings['social_links'] as $list ) : ?>
                        <a href="<?php echo esc_url( $list['social_url']['url'] ); ?>"
                            target="<?php echo esc_attr( $list['social_url']['is_external'] ? '_blank' : '_self' ); ?>"
                            rel="<?php echo esc_attr( $list['social_url']['nofollow'] ? 'nofollow' : '' ); ?>"
                            aria-label="name" class="link bs-h-2">
                            <?php echo esc_html($list['social_label']); ?>
                            <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <?php if( $settings['enable_footer_menu'] === 'yes' ) : ?>
                    <ul class="bs-footer-2-top-content-link wa-list-style-none">
                        <span class="bg-color wa-clip-left-right"></span>
                        <?php foreach( $settings['footer_menu_list'] as $list ) : ?>
                        <li>
                            <a href="<?php echo esc_url( $list['menu_url']['url'] ); ?>"
                            target="<?php echo esc_attr( $list['menu_url']['is_external'] ? '_blank' : '_self' ); ?>"
                            rel="<?php echo esc_attr( $list['menu_url']['nofollow'] ? 'nofollow' : '' ); ?>">
                                <?php echo elh_element_kses_intermediate( $list['menu_text'] ); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>

                <?php if( $settings['enable_contact_form'] === 'yes' ) : ?>
                <div class="tx-formWrapper">
                    <?php echo do_shortcode( $settings['contact_form_shortcode'] ); ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- footer-widgets -->
            <div class="bs-footer-2-widgets mb-50 ">

                <!-- single-widget -->
                <?php if( $settings['enable_link_list_1'] === 'yes' ) : ?>
                <div class="bs-footer-1-widget">
                    <?php if(!empty( $settings['link_list_1_heading'] )) : ?>
                    <h5 class="bs-footer-1-widget-title">
                        <?php echo wp_kses($settings['link_list_1_heading'] , true); ?>
                    </h5>
                    <?php endif; ?>
                    <ul class="bs-footer-1-menu has-footer-2 wa-list-style-none">
                    <?php foreach( $settings['link_list_1'] as $list ) : ?>
                        <li>
                            <a href="<?php echo esc_url( $list['link_url']['url'] ); ?>"
                            target="<?php echo esc_attr( $list['link_url']['is_external'] ? '_blank' : '_self' ); ?>"
                            rel="<?php echo esc_attr( $list['link_url']['nofollow'] ? 'nofollow' : '' ); ?>">
                                <?php \Elementor\Icons_Manager::render_icon( $list['link_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                <?php echo elh_element_kses_intermediate( $list['link_text'] ); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php if( $settings['enable_link_list_2'] === 'yes' ) : ?>
                <div class="bs-footer-1-widget">
                    <?php if(!empty( $settings['link_list_2_heading'] )) : ?>
                    <h5 class="bs-footer-1-widget-title">
                        <?php echo wp_kses($settings['link_list_2_heading'] , true); ?>
                    </h5>
                    <?php endif; ?>
                    <ul class="bs-footer-1-menu has-footer-2 wa-list-style-none">
                    <?php foreach( $settings['link_list_2'] as $list ) : ?>
                        <li>
                            <a href="<?php echo esc_url( $list['link_url']['url'] ); ?>"
                            target="<?php echo esc_attr( $list['link_url']['is_external'] ? '_blank' : '_self' ); ?>"
                            rel="<?php echo esc_attr( $list['link_url']['nofollow'] ? 'nofollow' : '' ); ?>">
                                <?php \Elementor\Icons_Manager::render_icon( $list['link_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                <?php echo elh_element_kses_intermediate( $list['link_text'] ); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php if( $settings['enable_link_list_3'] === 'yes' ) : ?>
                <div class="bs-footer-1-widget">
                    <?php if(!empty( $settings['link_list_3_heading'] )) : ?>
                    <h5 class="bs-footer-1-widget-title">
                        <?php echo wp_kses($settings['link_list_3_heading'] , true); ?>
                    </h5>
                    <?php endif; ?>
                    <ul class="bs-footer-1-menu has-footer-2 wa-list-style-none">
                    <?php foreach( $settings['link_list_3'] as $list ) : ?>
                        <li>
                            <a href="<?php echo esc_url( $list['link_url']['url'] ); ?>"
                            target="<?php echo esc_attr( $list['link_url']['is_external'] ? '_blank' : '_self' ); ?>"
                            rel="<?php echo esc_attr( $list['link_url']['nofollow'] ? 'nofollow' : '' ); ?>">
                                <?php \Elementor\Icons_Manager::render_icon( $list['link_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                <?php echo elh_element_kses_intermediate( $list['link_text'] ); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>

                <?php if( $settings['enable_link_list_4'] === 'yes' ) : ?>
                <div class="bs-footer-1-widget">
                    <?php if(!empty( $settings['link_list_4_heading'] )) : ?>
                    <h5 class="bs-footer-1-widget-title">
                        <?php echo wp_kses($settings['link_list_4_heading'] , true); ?>
                    </h5>
                    <?php endif; ?>
                    <ul class="bs-footer-1-menu has-footer-2 wa-list-style-none">
                    <?php foreach( $settings['link_list_4'] as $list ) : ?>
                        <li>
                            <a href="<?php echo esc_url( $list['link_url']['url'] ); ?>"
                            target="<?php echo esc_attr( $list['link_url']['is_external'] ? '_blank' : '_self' ); ?>"
                            rel="<?php echo esc_attr( $list['link_url']['nofollow'] ? 'nofollow' : '' ); ?>">
                                <?php \Elementor\Icons_Manager::render_icon( $list['link_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                <?php echo elh_element_kses_intermediate( $list['link_text'] ); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>


                <!-- single-widget -->
                <?php if( $settings['enable_gallery'] === 'yes' ) : ?>
                <div class="bs-footer-1-widget">
                    <div class="bs-footer-2-gallery">
                        <?php foreach ( $settings['gallery_images'] as $key => $brand ) :
                            if (!empty($brand['url'])) {
                                $brand_image = $brand['url'];
                            }

                            // alt
                            if (!empty($brand['alt'])) {
                                $brand_alt = $brand['alt'];
                            } else {
                                $brand_alt = '';
                            }
                        ?>
                        <a href="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" class="popup-img img-item" data-cursor-text="View">
                            <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

            </div>

            <div class="bs-footer-2-copyright mb-40">
                <?php if( $settings['enable_contact_info'] === 'yes' ) : ?>
                <a href="<?php echo esc_url($settings['contact_info_link']['url']); ?>"
                target="<?php echo esc_attr($settings['contact_info_link']['is_external'] ? '_blank' : '_self'); ?>"
                rel="<?php echo esc_attr($settings['contact_info_link']['nofollow'] ? 'nofollow' : ''); ?>"
                aria-label="name" class="bs-footer-2-copyright-mail bs-h-1">
                    <?php echo wp_kses($settings['contact_info_text'] , true); ?>
                </a>
                <?php endif; ?>

                <?php if( $settings['enable_copyright'] === 'yes' ) : ?>
                <p class="bs-footer-2-copyright-text bs-p-1">
                    <?php echo wp_kses($settings['copyright_text'] , true); ?>
                    <span class="bg-color wa-clip-right-left"></span>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- footer-line -->
    <?php if( $settings['enable_bottom_shape'] === 'yes' ) : ?>
    <div class="bs-footer-2-marquee-2 wa-fix">
        <div class="bs-footer-2-line">
            <span></span>
            <span></span>
        </div>
    </div>
    <?php endif; ?>
</footer>