<section class="bs-testimonial-5-area wa-fix">
    <div class="container bs-container-2">
        <div class="bs-testimonial-5-wrap">

            <!-- left-content -->
            <div class="bs-testimonial-5-content pt-135">

                <!-- section-title -->
                <div class="bs-testimonial-5-sec-title mb-130">
                    <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                    <h6 class="bs-subtitle-5 wa-capitalize">
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
                    <?php if( $settings['enable_description'] === 'yes' ) : ?>
                    <p class="bs-p-4 disc wa-fadeInUp tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                    <?php endif; ?>
                </div>

                <div class="bs-testimonial-5-rating-box wa-p-relative" >
                    <p class="bs-p-4 title">
                        <?php echo esc_html($settings['name']); ?>
                        <?php \Elementor\Icons_Manager::render_icon( $settings['left_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php echo elh_element_kses_intermediate($settings['rating_point']); ?>
                    </p>

                    <?php if( $settings['enable_gallary'] === 'yes' ) : ?>
                    <div class="bs-testimonial-5-rating-box-author" data-cursor="-opaque">
                        <?php foreach ( $settings['gallary_image'] as $key => $brand ) :
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
                        <div class="author-img wa-fix wa-img-cover">
                            <?php if(!empty( $brand_image )) : ?>
                            <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty( $settings['designation'] )) : ?>
                    <p class="bs-p-4 disc">
                        <?php echo elh_element_kses_intermediate($settings['designation']); ?>
                    </p>
                    <?php endif; ?>

                    <span class="line-1 wa-clip-right-left" data-split-duration="3s"></span>
                    <span class="line-2 wa-clip-top-bottom " data-split-duration="3s"></span>
                    <span class="line-3 wa-clip-left-right" data-split-duration="3s"></span>
                </div>
            </div>

            <?php if(!empty( $settings['image_1']['url'] )) : ?>
            <div class="bs-testimonial-5-img wa-fix wa-img-cover" data-cursor="-opaque">
                <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
                alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
            </div>
            <?php endif; ?>
        </div>

        <div class="bs-testimonial-5-wrap-2 wa-p-relative">

            <!-- left-img -->
            <div class="bs-testimonial-5-img-slider wa-p-relative ">
                <div class="swiper-container wa-fix bs-t5-img-active">
                    <div class="swiper-wrapper">
                        <!-- single-slide -->
                        <?php foreach($settings['testimonial_lists'] as $list) : ?>
                        <div class="swiper-slide">
                            <?php if(!empty( $list['author_image']['url'] )) : ?>
                            <div class="bs-testimonial-5-img-slider-single wa-img-cover">
                                <img src="<?php echo esc_url($list['author_image']['url']); ?>"
                                alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['author_image']['url']) : ''); ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <?php if( $settings['enable_slide_pagination'] === 'yes' ) : ?>
                <div class="bs-testimonial-5-img-slider-pagi bs-t1-pagi"></div>
                <?php endif; ?>
            </div>

            <!-- right-content -->
            <div class="bs-testimonial-5-content-slider wa-fix wa-p-relative ">
                <!-- slider -->
                <div class="swiper-container wa-fix bs-t5-content-active">
                    <div class="swiper-wrapper">
                        <?php foreach($settings['testimonial_lists'] as $list) : ?>
                        <div class="swiper-slide">
                            <div class="bs-testimonial-5-content-slider-single">
                                <?php if( $list['enable_rating'] === 'yes' ) : ?>
                                <div class="bs-star-1">
                                    <?php
                                        $rating = $list['rating_star'];
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

                                <?php if(!empty( $list['comment'] )) : ?>
                                <p class="bs-p-4 comment"><?php echo elh_element_kses_intermediate($list['comment']); ?></p>
                                <?php endif; ?>

                                <?php if(!empty( $list['name'] )) : ?>
                                <h4 class="bs-h-4 name"><?php echo elh_element_kses_intermediate($list['name']); ?></h4>
                                <?php endif; ?>

                                <?php if(!empty( $list['designation'] )) : ?>
                                <h4 class="bs-p-4 disc">
                                    <?php echo elh_element_kses_intermediate($list['designation']); ?>
                                </h4>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="bottom-line wa-clip-left-right" data-split-duration="3s"></div>
        </div>
    </div>
</section>