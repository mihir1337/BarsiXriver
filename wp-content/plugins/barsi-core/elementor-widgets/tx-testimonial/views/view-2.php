<section class="bs-showcase-3-area wa-fix wa-bg-default wa-p-relative wa-bg-parallax tx-section">
    <div class="container bs-container-1">
        <div class="bs-showcase-3-wrap">
            <!-- left-content -->
            <div class="bs-showcase-3-content">
                <!-- trust -->
                <div class="bs-showcase-3-content-trust wa-fadeInRight">
                    <?php if(!empty( $settings['left_icon'] )) : ?>
                    <div class="icon">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['left_icon'], ['aria-hidden' => 'true'] ); ?>
                    </div>
                    <?php endif; ?>
                    <div class="content">
                        <?php if( $settings['enable_rating'] === 'yes' ) : ?>
                        <div class="bs-star-1">
                            <?php
                                $rating = $settings['rating_star'];
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $rating) {
                                        echo '<i class="fa-solid fa-star"></i>';
                                    } else {
                                        echo '<i class="fa-regular fa-star-half-stroke"></i>';
                                    }
                                }
                            ?>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty( $settings['rating_point'] )) : ?>
                        <p class="bs-p-1 disc tx-description"><?php echo elh_element_kses_intermediate($settings['rating_point']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if(!empty( $settings['comment'] )) : ?>
                <h3 class="bs-showcase-3-content-title bs-h-2 wa-split-right wa-capitalize">
                    <?php echo elh_element_kses_intermediate($settings['comment']); ?>
                </h3>
                <?php endif; ?>

                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <div class="bs-showcase-3-content-btn wa-fadeInUp">
                    <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                    target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-btn-1 text-capitalize">
                        <?php if(!empty( $settings['button_text'] )) : ?>
                        <span class="text">
                            <?php echo esc_html( $settings['button_text'] ); ?>
                        </span>
                        <?php endif; ?>

                        <?php if(!empty( $settings['button_icon'] )) : ?>
                        <span class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
                        </span>
                        <?php endif; ?>
                        <span class="shape"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <!-- right-slide -->
            <div class="bs-showcase-3-slider wa-p-relative wa-fix wa-slideInUp">
                <div class="swiper-container wa-fix bs-showc3-active">
                    <div class="swiper-wrapper">
                        <?php foreach($settings['testimonial_lists'] as $list) : ?>
                        <div class="swiper-slide">
                            <div class="bs-showcase-3-slider-item">
                                <div class="item-img wa-fix wa-img-cover ">
                                    <a href="<?php echo esc_url($list['testimonial_link']['url']); ?>"
                                    target="<?php echo esc_attr($list['testimonial_link']['is_external'] ? '_blank' : '_self'); ?>"
                                    rel= "<?php echo esc_attr($list['testimonial_link']['nofollow'] ? 'nofollow' : ''); ?>"
                                    aria-label="name"
                                    data-cursor-text="<?php echo esc_attr__('View', 'barsi-core'); ?>">
                                        <img src="<?php echo esc_url($list['author_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['author_image']['url']) : ''); ?>">
                                    </a>
                                </div>
                                <?php if(!empty( $list['designation'] )) : ?>
                                <h5 class="bs-h-1 item-title">
                                    <a href="<?php echo esc_url($list['testimonial_link']['url']); ?>"
                                    target="<?php echo esc_attr($list['testimonial_link']['is_external'] ? '_blank' : '_self'); ?>"
                                    rel= "<?php echo esc_attr($list['testimonial_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                                        <?php echo esc_html($list['designation']); ?>
                                    </a>
                                </h5>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php if( $settings['enable_slide_pagination'] === 'yes' ) : ?>
                <div class="bs-showcase-3-slider-pagi bs-showc3-pagi"></div>

                <div class="bs-showcase-3-slider-btn">
                    <div class="btn-elm bs-showc-3-prev">
                        <i class="fa-solid fa-left-long"></i>
                    </div>
                    <div class="btn-elm bs-showc-3-next">
                        <i class="fa-solid fa-right-long"></i>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>