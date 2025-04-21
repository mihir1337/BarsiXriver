<div class="pf-hero-7-area wa-p-relative wa-fix">
    <div class="container pf-container-1">
        <div class="pf-hero-7-wrap">

            <!-- left-slider -->
            <div class="pf-hero-6-title has-home-7 wa-fix">
                <div class="swiper-container pf-h6-title-active wa-fix">
                    <div class="swiper-wrapper">
                        <?php foreach ( $settings['slides'] as $slide ) : ?>
                        <div class="swiper-slide">
                            <?php
                                $this->add_render_attribute( 'title', 'class', 'tx-title pf-h-1 pf-hero-6-title-single wa-split-1' );
                                printf('<%1$s %2$s>%3$s</%1$s>',
                                    tag_escape($slide['title_tag']),
                                    $this->get_render_attribute_string('title'),
                                    elh_element_kses_basic( $slide['title'] )
                                );
                            ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- right-content -->
            <div class="pf-hero-6-right">
                <?php if( $settings['enable_slider_pagination'] === 'yes' ) : ?>
                <div class="pf-hero-6-slider-btn pf-h6-btn-next">
                    <i data-feather="chevron-left"></i>
                </div>
                <?php endif; ?>

                <!-- slider -->
                <div class="pf-hero-6-subtitle has-hero-7">
                    <div class="swiper-container wa-fix pf-h6-subtitle-active">
                        <div class="swiper-wrapper">
                            <?php foreach ( $settings['slides'] as $slide ) : ?>
                            <div class="swiper-slide">
                                <div class="pf-hero-6-subtitle-single">
                                    <?php \Elementor\Icons_Manager::render_icon( $slide['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                    <?php if(!empty( $slide['sub_title'] )) : ?>
                                    <h5 class="subtitle pf-h-1 wa-line-limit has-line-1 tx-subTitle">
                                        <?php echo elh_element_kses_intermediate( $slide['sub_title'] ); ?>
                                    </h5>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <?php if( $settings['enable_slider_pagination'] === 'yes' ) : ?>
                <div class="pf-hero-6-slider-btn pf-h6-btn-next">
                    <i data-feather="chevron-right"></i>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <div class="pf-hero-6-bottom has-hero-7">
        <div class="container pf-container-1">
            <div class="pf-hero-7-bottom-flex">
                <?php if(!empty( $settings['info_text'] )) : ?>
                <a href="<?php echo esc_url($settings['info_link']['url']); ?>" aria-label="name" class="pf-p-5 client-btn">
                    <?php echo wp_kses($settings['info_text'], true); ?>
                    <?php \Elementor\Icons_Manager::render_icon( $settings['info_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                </a>
                <?php endif; ?>

                <?php if( $settings['enable_scroll_down'] === 'yes' ) : ?>
                <a href="<?php echo esc_url($settings['scroll_link']['url']); ?>" aria-label="name" class="pf-hero-6-scroll-down pf-p-5">
                    <?php if(!empty( $settings['scroll_text'] )) : ?>
                    <span class="text"
                        data-back="<?php echo esc_attr($settings['scroll_text']) ?>"
                        data-front="<?php echo esc_attr($settings['scroll_text']) ?>">
                    </span>
                    <?php endif; ?>
                    <?php \Elementor\Icons_Manager::render_icon( $settings['scroll_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>