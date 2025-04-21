<div class="pf-hero-5-area ">
    <div class="pf-hero-5-slider-shadow">
        <div class="pf-hero-5-slider wa-p-relative">
            <div class="swiper-container wa-fix pf-h5-slider">
                <div class="swiper-wrapper">
                    <?php foreach ( $settings['slides'] as $slide ) : ?>
                    <div class="swiper-slide">
                        <div class="pf-hero-5-slider-item wa-p-relative">
                            <?php if(!empty( $slide['image_1']['url'] )) : ?>
                            <div class="pf-hero-5-slider-item-img wa-fix wa-img-cover">
                                <img
                                src="<?php echo esc_url($slide['image_1']['url']); ?>"
                                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $slide['image_1']['url'] ); } ?>">
                            </div>
                            <?php endif; ?>
                            <div class="container pf-container-1">
                                <div class="pf-hero-5-slider-item-content">
                                    <?php if(!empty( $slide['sub_title'] )) : ?>
                                    <h6 class="pf-subtitle-5 hero-5-subtitle tx-subTitle">
                                        <?php echo elh_element_kses_intermediate( $slide['sub_title'] ); ?>
                                    </h6>
                                    <?php endif; ?>
                                    <?php
                                        $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-5 hero-5-title wa-split-1' );
                                        printf('<%1$s %2$s>%3$s</%1$s>',
                                            tag_escape($slide['title_tag']),
                                            $this->get_render_attribute_string('title'),
                                            elh_element_kses_basic( $slide['title'] )
                                        );
                                    ?>
                                    <?php if(!empty( $slide['description'] )) : ?>
                                    <p class="pf-p-5 hero-5-disc tx-description"><?php echo elh_element_kses_intermediate( $slide['description'] ); ?></p>
                                    <?php endif; ?>

                                    <?php if(!empty( $slide['button_text'] )) : ?>
                                    <div class="hero-5-btn">
                                        <a href="<?php echo esc_url($slide['button_link']['url']); ?>"
                                        target="<?php echo esc_attr($slide['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                                        rel="<?php echo esc_attr($slide['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
                                        aria-label="name" class="pf-pr-5 tx-button">
                                            <?php echo elh_element_kses_intermediate( $slide['button_text'] ); ?>
                                            <?php if(!empty( $slide['button_icon'] )) : ?>
                                            <span class="icon">
                                                <?php \Elementor\Icons_Manager::render_icon( $slide['button_icon'], ['aria-hidden' => 'true'] ); ?>
                                                <?php \Elementor\Icons_Manager::render_icon( $slide['button_icon'], ['aria-hidden' => 'true'] ); ?>
                                            </span>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- hero-social -->
            <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
            <div class="pf-hero-1-social-posi ">
                <div class="pf-hero-1-social">
                    <?php foreach( $settings['social_links'] as $list ) : ?>
                    <a href="<?php echo esc_url($list['social_link']['url']); ?>"
                    target="<?php echo esc_attr( $list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                    rel="<?php echo esc_attr( $list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>"
                    aria-label="<?php echo esc_attr($list['social_text']); ?>" class="pf-hero-1-social-single">
                        <?php if(!empty( $list['social_text'] )) : ?>
                        <span class="text pf-p-1">
                            <?php echo esc_html($list['social_text']); ?>
                        </span>
                        <?php endif; ?>

                        <?php if(!empty( $list['social_icon'] )) : ?>
                        <span class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </span>
                        <?php endif; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <?php if(!empty( $settings['image_1']['url'] )) : ?>
        <img class="pf-hero-5-slider-border"
        src="<?php echo esc_url($settings['image_1']['url']); ?>"
        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
        <?php endif; ?>

    </div>


    <div class="pf-hero-5-bottom">
        <div class="container pf-container-1">
            <div class="pf-hero-5-bottom-wrap">

                <!-- left-slide -->
                <div class="pf-hero-5-bottom-left">
                    <?php if( $settings['enable_slider_pagination'] === 'yes' ) : ?>
                    <div class="pf-hero-5-slider-btn pf-h5-btn-prev">
                        <i data-feather="chevron-left"></i>
                    </div>
                    <?php endif; ?>

                    <!-- slider -->
                    <div class="pf-hero-5-title-slider wa-fix">
                        <div class="swiper-container wa-fix pf-h5-title-slider">
                            <div class="swiper-wrapper">
                                <?php foreach ( $settings['slides'] as $slide ) : ?>
                                <div class="swiper-slide">
                                    <div class="pf-hero-5-title-slider-item">
                                        <svg class="item-progress" width="24" height="24" viewBox="-3 -3 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" >
                                        <circle r="14" cx="12" cy="12" fill="transparent" stroke="#ffe6e3" stroke-width="2.5" stroke-dasharray="12.56px" stroke-dashoffset="0"></circle>
                                        <circle r="14" cx="12" cy="12" stroke="#ff2727" stroke-width="2.5" stroke-linecap="round" stroke-dashoffset="12px" fill="transparent" stroke-dasharray="12.56px"></circle>
                                        </svg>
                                        <?php if(!empty( $slide['cat_name'] )) : ?>
                                        <h5 class="pf-h-1 title wa-line-limit has-line-1"><?php echo esc_html($slide['cat_name']); ?></h5>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <?php if( $settings['enable_slider_pagination'] === 'yes' ) : ?>
                    <div class="pf-hero-5-slider-btn pf-h5-btn-next">
                        <i data-feather="chevron-right"></i>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if(!empty( $settings['info_text'] )) : ?>
                <p class="pf-hero-5-bottom-text-box pf-p-5">
                    <?php echo esc_html($settings['info_text']); ?>
                    <span class="box-line"></span>
                </p>
                <?php endif; ?>

                <div class="pf-hero-5-preview wa-p-relative">
                    <div class="swiper-container pf-h5-preview-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ( $settings['slides'] as $slide ) : ?>
                            <div class="swiper-slide">
                                <div class="pf-hero-5-preview-img wa-fix wa-img-cover">
                                    <img
                                    src="<?php echo esc_url($slide['image_1']['url']); ?>"
                                    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $slide['image_1']['url'] ); } ?>">
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>