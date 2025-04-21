<div class="bs-services-1-slider">
    <div class="swiper-container wa-fix bs-s1-active">
        <div class="swiper-wrapper">
            <?php foreach($settings['service_lists'] as $list ) : ?>
            <div class="swiper-slide">
                <div class="bs-services-1-item">
                    <?php if(!empty( $list['image_1']['url'] )) : ?>
                    <div class="main-img  wa-fix wa-img-cover" data-cursor-text="View">
                        <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                        target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                            <img src="<?php echo esc_url($list['image_1']['url']); ?>"
                            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="content-wrap">
                        <?php if(!empty( $list['image_2']['url'] )) : ?>
                        <div class="shape">
                            <img src="<?php echo esc_url($list['image_2']['url']); ?>"
                            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_2']['url'] ); } ?>">
                        </div>
                        <?php endif; ?>
                        <div class="content">
                            <?php if(!empty( $list['sub_title'] )) : ?>
                            <h5 class="bs-h-1 subtitle">
                                <?php echo elh_element_kses_intermediate($list['sub_title']); ?>
                            </h5>
                            <?php endif; ?>

                            <?php if(!empty( $list['title'] )) : ?>
                            <h3 class="bs-h-1 title">
                                <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                                    target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                                    rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                                    <?php echo elh_element_kses_intermediate($list['title']); ?>
                                </a>
                            </h3>
                            <?php endif; ?>

                            <?php if(!empty( $list['button_icon'] )) : ?>
                            <a class="item-btn wa-magnetic-btn" href="<?php echo esc_url($list['button_link']['url']); ?>"
                            target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                            rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
                            aria-label="name">
                                <?php \Elementor\Icons_Manager::render_icon( $list['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>