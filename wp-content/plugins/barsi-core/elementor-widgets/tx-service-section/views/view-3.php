<section class="bs-services-5-area wa-fix wa-p-relative pt-140 tx-section">
    <div class="container bs-container-2">
        <div class="bs-services-5-wrap">

            <!-- left -->
            <div class="bs-services-5-left wa-p-relative">

                <div class="bg-color"></div>

                <div class="bs-services-5-left-icon">
                    <i class="flaticon-star flaticon"></i>
                </div>

                <!-- section-title -->
                <div class="bs-services-5-sec-title mb-125">
                    <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                    <h6 class="bs-subtitle-5 wa-capitalize tx-subTitle">
                        <?php if(!empty( $settings['sub_count'] )) : ?>
                        <span>
                            <?php echo esc_html($settings['sub_count']); ?>
                        </span>
                        <?php endif; ?>
                        <?php if(!empty( $settings['sub_title'] )) : ?>
                        <span class="wa-split-right"><?php echo elh_element_kses_intermediate($settings['sub_title']); ?></span>
                        <?php endif; ?>
                    </h6>
                    <?php endif; ?>
                    <?php
                        if($settings['enable_title'] === 'yes') {
                        $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-4 wa-split-right wa-capitalize' );
                        $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                            printf('<%1$s %2$s>%3$s</%1$s>',
                                tag_escape($settings['title_tag']),
                                $this->get_render_attribute_string('title'),
                                elh_element_kses_basic( $settings['title'] )
                            );
                        }
                    ?>
                </div>

                <div class="inner-div">
                    <div class="inner-div-left">
                        <?php if( $settings['enable_description'] === 'yes' ) : ?>
                        <p class="bs-p-4 disc wa-fadeInUp tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                        <?php endif; ?>

                        <?php if( $settings['enable_button'] === 'yes' ) : ?>
                        <div class="btn-wrap wa-fadeInUp">
                            <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                            target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                            rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-pr-btn-3">
                                <span class="text">
                                    <?php echo esc_html( $settings['button_text'] ); ?>
                                    <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?></span>
                                <span class="text">'
                                    <?php echo esc_html( $settings['button_text'] ); ?>
                                    <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?></span>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php if( $settings['enable_video_box'] === 'yes' ) : ?>
                    <div class="bs-services-5-img-1 wa-fix wa-img-cover wa-fadeInUp" >
                        <video autoplay loop muted src="<?php echo esc_url($settings['video_link']['url']) ?>"></video>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="bs-services-5-item">

                    <!-- single-item -->
                    <?php foreach($settings['service_slide_boxs'] as $list ) : ?>
                    <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                        target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-h-4 bs-services-5-item-single wa-fadeInUp" data-cursor-text="<?php echo esc_attr('View', 'barsi-core') ?>">
                        <?php if(!empty( $list['count'] )) : ?>
                        <span class="number">
                            <?php echo esc_html($list['count']); ?>
                        </span>
                        <?php endif; ?>

                        <?php if(!empty( $list['title'] )) : ?>
                        <span class="title">
                            <?php echo elh_element_kses_intermediate( $list['title'] ); ?>
                        </span>
                        <?php endif; ?>

                        <?php if(!empty( $list['icon'] )) : ?>
                        <div class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $list['icon'], ['aria-hidden' => 'true'] ); ?>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty( $list['image_1']['url'] )) : ?>
                        <span class="item-img wa-img-cover">
                            <img src="<?php echo esc_url($list['image_1']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_1']['url']) : ''); ?>">
                        </span>
                        <?php endif; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>


            <!-- right-img -->
            <?php if( $settings['enable_gallery'] === 'yes' ) : ?>
            <div class="bs-services-5-slider wa-p-relative wa-fix" data-cursor="-opaque">
                <div class="swiper-container wa-fix bs-s5-active">
                    <div class="swiper-wrapper">
                        <?php foreach ( $settings['gallery_image'] as $key => $brand ) :
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
                        <div class="swiper-slide">
                            <div class="bs-services-5-slider-single">
                                <?php if(!empty( $brand_image )) : ?>
                                <div class="bs-services-5-img wa-fix wa-img-cover">
                                    <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
                                </div>
                                <?php endif; ?>
                                <div class="bs-services-5-img-border-1"></div>
                                <div class="bs-services-5-img-border-2"></div>
                                <div class="bs-services-5-img-border-3"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>