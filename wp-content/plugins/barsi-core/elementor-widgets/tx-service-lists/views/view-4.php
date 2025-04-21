<section class="bs-showcase-1-area pb-80 wa-fix tx-section">
    <div class="bs-showcase-1-slider wa-fix wa-p-relative">
        <div class="swiper-container bs-sh1-active">
            <div class="swiper-wrapper">
                <!-- single-slider -->
                <?php foreach($settings['service_lists'] as $list ) : ?>
                <div class="swiper-slide">
                    <div class="bs-showcase-1-item">
                        <?php if(!empty( $list['image_1']['url'] )) : ?>
                        <div class="item-img wa-fix wa-img-cover">
                            <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                                target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                                rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
                                aria-label="name" data-cursor-text="<?php echo esc_attr__('View', 'barsi-core'); ?>">
                                <img src="<?php echo esc_url($list['image_1']['url']); ?>"
                                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
                            </a>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty( $list['sub_title'] )) : ?>
                        <h5 class="subtitle" data-cursor="-opaque">
                            <?php echo elh_element_kses_intermediate($list['sub_title']); ?>
                        </h5>
                        <?php endif; ?>

                        <?php if(!empty( $list['title'] )) : ?>
                        <h4 class="bs-h-2 title">
                            <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                            target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                            rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                                <?php echo elh_element_kses_intermediate($list['title']); ?>
                            </a>
                        </h4>
                        <?php endif; ?>

                        <?php if(!empty( $list['button_text'] )) : ?>
                        <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                        target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="item-btn bs-h-2">
                            <?php echo elh_element_kses_intermediate($list['button_text']); ?>
                            <?php \Elementor\Icons_Manager::render_icon( $list['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php if( $settings['enable_slider_nav'] === 'yes' ) : ?>
        <div class="bs-showcase-1-slider-btn">
            <div class="single-btn lw-sh1-prev wa-magnetic-btn">
                <img src="<?php echo get_template_directory_uri(  ); ?>/assets/img/icons/left-arrow.webp" alt="arrow left">
            </div>
            <div class="single-btn lw-sh1-next wa-magnetic-btn">
                <img src="<?php echo get_template_directory_uri(  ); ?>/assets/img/icons/right-arrow.webp" alt="arrow left">
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>