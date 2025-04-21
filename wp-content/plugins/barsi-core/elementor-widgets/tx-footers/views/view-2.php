<footer class="bs-footer-4-area wa-p-relative wa-fix pt-130">

    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <div class="bs-footer-4-bg wa-fix">
        <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    </div>
    <?php endif; ?>

    <div class="container bs-container-2">
        <div class="bs-footer-4-wrap mb-125">
            <!-- left-side -->
            <div class="bs-footer-4-left">
                <?php if(!empty( $settings['footer_logo']['url'] )) : ?>
                <a href="<?php echo esc_url(home_url()); ?>" aria-label="name" class="bs-footer-4-logo" data-cursor="-opaque">
                    <img src="<?php echo esc_url($settings['footer_logo']['url']); ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['footer_logo']['url'] ); } ?>">
                </a>
                <?php endif; ?>

                <div class="bs-footer-4-widget">

                    <!-- single-widget -->
                    <?php if( $settings['enable_link_list_1'] === 'yes' ) : ?>
                    <div class="bs-footer-4-widget-single">
                        <ul class="bs-footer-4-menu wa-list-style-none" >
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

                    <!-- single-widget -->
                    <?php if( $settings['enable_link_list_2'] === 'yes' ) : ?>
                    <div class="bs-footer-4-widget-single">
                        <ul class="bs-footer-4-menu wa-list-style-none">
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
                </div>
            </div>

            <!-- right -->
            <?php if( $settings['enable_contact_info'] === 'yes' ) : ?>
            <div class="bs-footer-4-contact">
                <?php if(!empty( $settings['contact_info_text'] )) : ?>
                <h4 class="bs-h-1 title wa-split-up wa-capitalize wa-fix">
                    <?php echo esc_html($settings['contact_info_text']); ?>
                </h4>
                <?php endif; ?>
                <div class="bs-footer-4-contact-link">
                    <?php foreach( $settings['contact_info_list'] as $list ) : ?>
                    <?php if(!empty( $list['label'] )) : ?>
                    <p class="bs-p-4 link-title"><?php echo esc_html($list['label']); ?></p>
                    <?php endif; ?>

                    <?php if(!empty( $list['text'] )) : ?>
                    <a href="<?php echo esc_url( $list['link']['url'] ); ?>"
                    target="<?php echo esc_attr( $list['link']['is_external'] ? '_blank' : '_self' ); ?>"
                    rel="<?php echo esc_attr( $list['link']['nofollow'] ? 'nofollow' : '' ); ?>" class="link-elm bs-p-4 wa-clip-left-right" >
                        <?php echo esc_html($list['text']); ?>
                    </a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>

    <div class="bs-footer-4-copyright">
        <div class="container bs-container-2">
            <div class="bs-footer-4-copyright-flex">
                <?php if( $settings['enable_copyright'] === 'yes' ) : ?>
                <p class="bs-p-4 bs-footer-4-copyright-text">
                    <?php echo wp_kses($settings['copyright_text'] , true); ?>
                </p>
                <?php endif; ?>

                <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
                <div class="bs-footer-4-copyright-social">
                    <?php foreach( $settings['social_links'] as $list ) : ?>
                    <a href="<?php echo esc_url( $list['social_url']['url'] ); ?>"
                        target="<?php echo esc_attr( $list['social_url']['is_external'] ? '_blank' : '_self' ); ?>"
                        rel="<?php echo esc_attr( $list['social_url']['nofollow'] ? 'nofollow' : '' ); ?>"
                        aria-label="name" class="elm-link bs-p-4">
                        <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php echo esc_html($list['social_label']); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>