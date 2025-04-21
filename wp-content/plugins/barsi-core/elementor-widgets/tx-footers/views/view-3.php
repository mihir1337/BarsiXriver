<footer class="bs-footer-5-area wa-p-relative pt-140 wa-fix">
    <!-- footer-top -->
    <div class="bs-footer-5-top mb-100">
        <div class="container bs-container-2">
            <div class="bs-footer-5-top-flex">
                <?php if(!empty( $settings['footer_logo']['url'] )) : ?>
                <a href="<?php echo esc_url(home_url()); ?>" aria-label="name" class="bs-footer-5-top-logo" data-cursor="-opaque">
                    <img src="<?php echo esc_url($settings['footer_logo']['url']); ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['footer_logo']['url'] ); } ?>">
                </a>
                <?php endif; ?>

                <div class="bs-footer-5-top-live-chat">
                    <?php if( $settings['enable_gallery'] === 'yes' ) : ?>
                    <div class="person-img">
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
                        <div class="person-img-single wa-fix wa-img-cover wa-fadeInRight">
                            <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty( $settings['gallery_heading'] )) : ?>
                    <h5 class="bs-h-4 title wa-split-right wa-capitalize">
                        <?php echo wp_kses($settings['gallery_heading'] , true); ?>
                    </h5>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- footer-bottom -->
    <div class="container bs-container-2">
        <div class="bs-footer-5-wrap mb-140">
            <div class="bs-footer-5-wrap-left">

                <!-- widget -->
                <div class="bs-footer-5-widget-wrap">
                    <div class="bs-footer-5-widget">
                        <?php if(!empty( $settings['link_list_1_heading'] )) : ?>
                        <h5 class="bs-p-4 title"><?php echo wp_kses($settings['link_list_1_heading'] , true); ?></h5>
                        <?php endif; ?>

                        <div class="inner-div">
                            <?php if( $settings['enable_link_list_1'] === 'yes' ) : ?>
                            <ul class="bs-footer-5-menu wa-list-style-none">
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
                            <?php endif; ?>

                            <?php if( $settings['enable_link_list_2'] === 'yes' ) : ?>
                            <ul class="bs-footer-5-menu wa-list-style-none">
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
                            <?php endif; ?>
                        </div>

                    </div>

                    <div class="hr-line"></div>

                    <?php if( $settings['enable_link_list_3'] === 'yes' ) : ?>
                    <div class="bs-footer-5-widget">
                        <?php if(!empty( $settings['link_list_3_heading'] )) : ?>
                        <h5 class="bs-p-4 title"><?php echo wp_kses($settings['link_list_3_heading'] , true); ?></h5>
                        <?php endif; ?>

                        <ul class="bs-footer-5-menu wa-list-style-none">
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
                </div>

                <!-- contact -->
                <?php if( $settings['enable_contact_info'] === 'yes' ) : ?>
                <div class="bs-footer-5-contact">
                    <?php foreach( $settings['contact_info_list'] as $list ) : ?>
                    <div class="bs-footer-5-contact-item">
                        <?php if(!empty( $list['icon'] )) : ?>
                        <div class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $list['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty( $list['text'] )) : ?>
                        <div class="elm-links">
                            <?php echo wp_kses($list['text'], true); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            </div>

            <!-- newsletter -->
            <div class="bs-footer-5-newsletter">
                <?php if(!empty( $settings['footer_info_heading'] )) : ?>
                <h4 class="bs-h-4 title wa-split-right wa-capitalize"><?php echo esc_html($settings['footer_info_heading']); ?></h4>
                <?php endif; ?>

                <?php if(!empty( $settings['footer_info_text'] )) : ?>
                <p class="bs-p-4 disc wa-fadeInUp"><?php echo esc_html($settings['footer_info_text']); ?></p>
                <?php endif; ?>

                <?php if( $settings['enable_contact_form'] === 'yes' ) : ?>
                <div class="tx-formWrapper">
                    <?php echo do_shortcode( $settings['contact_form_shortcode'] ); ?>
                </div>
                <?php endif; ?>

                <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
                <div class="bs-footer-5-newsletter-social wa-fadeInUp">
                    <?php foreach( $settings['social_links'] as $list ) : ?>
                    <a href="<?php echo esc_url( $list['social_url']['url'] ); ?>"
                        target="<?php echo esc_attr( $list['social_url']['is_external'] ? '_blank' : '_self' ); ?>"
                        rel="<?php echo esc_attr( $list['social_url']['nofollow'] ? 'nofollow' : '' ); ?>"
                        aria-label="name" class="social-elm">
                        <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- copyright -->
    <div class="bs-footer-5-copyright">
        <div class="container bs-container-2">
            <div class="bs-footer-5-copyright-flex">
                <?php if( $settings['enable_copyright'] === 'yes' ) : ?>
                <p class="bs-p-4 copyright-text">
                    <?php echo wp_kses($settings['copyright_text'] , true); ?>
                </p>
                <?php endif; ?>

                <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
                <div class="bs-footer-5-copyright-social">
                    <?php foreach( $settings['social_links'] as $list ) : ?>
                    <a href="<?php echo esc_url( $list['social_url']['url'] ); ?>"
                        target="<?php echo esc_attr( $list['social_url']['is_external'] ? '_blank' : '_self' ); ?>"
                        rel="<?php echo esc_attr( $list['social_url']['nofollow'] ? 'nofollow' : '' ); ?>"
                        aria-label="name" class="social-elm">
                        <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php echo esc_html($list['social_label']); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <div class="bs-footer-5-bg-img wa-fix wa-img-cover">
        <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    </div>
    <?php endif; ?>
</footer>