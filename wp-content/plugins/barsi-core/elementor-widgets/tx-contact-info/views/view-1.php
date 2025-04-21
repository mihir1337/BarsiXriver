<section class="bs-contact-1-area pt-140 pb-100 wa-p-relative tx-section">
        <div class="bs-contact-1-bg-color tx-section"></div>
        <div class="container bs-container-1">
            <!-- section-title -->
            <div class="bs-contact-1-sec-title text-center mb-45">
                <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize tx-subTitle">
                    <?php if( $settings['enable_sub_title_icon'] === 'yes' ) : ?>
                    <span class="icon">
                        <?php if( $settings['type'] === 'icon' ) : ?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['sub_title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php else : ?>
                            <img class="wa-fadeInUp" src="<?php echo esc_url( $settings['sub_title_image']['url'] ); ?>" alt="<?php if(function_exists('lawfy_img_alt_text')) { echo lawfy_img_alt_text( $settings['sub_title_image']['url'] ); } ?>">
                            <?php endif; ?>
                    </span>
                    <?php endif; ?>
                    <?php echo elh_element_kses_intermediate($settings['sub_title']); ?>
                </h6>
                <?php
                    endif;
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-1 wa-split-right wa-capitalize' );
                    $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>
                <?php if( $settings['enable_description'] === 'yes' ) : ?>
                <p class="tx-description">
                    <?php echo elh_element_kses_intermediate($settings['description']); ?>
                </p>
                <?php endif; ?>
            </div>

            <div class="bs-contact-1-wrap">
                <!-- left-content -->
                <div class="bs-contact-1-left">
                    <!-- img -->
                    <?php if(!empty( $settings['image_1']['url'] )) : ?>
                    <div class="bs-contact-1-img wa-fix wa-img-cover" data-cursor="-opaque">
                        <img class="wa-parallax-img" src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
                    </div>
                    <?php endif; ?>

                    <div class="bs-contact-1-video wa-clip-top-bottom">
                        <?php if(!empty( $settings['image_2']['url'] )) : ?>
                        <div class="bg-img wa-fix wa-img-cover">
                            <img src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
                        </div>
                        <?php endif; ?>

                        <?php if(!empty( $settings['exprience_info'] || $settings['video_link']['url'] )) : ?>
                        <a href="<?php echo esc_url($settings['video_link']['url']); ?>" aria-label="name" class="bs-play-btn-2 wa-magnetic-btn bs-p-1 popup-video">
                            <span class="icon">
                                <i class="fa-solid fa-play"></i>
                            </span>
                            <?php if(!empty( $settings['exprience_info'] )) : ?>
                            <span class="text">
                                <?php echo elh_element_kses_intermediate( $settings['exprience_info'] ); ?>
                            </span>
                            <?php endif; ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- right-content -->
                <div class="bs-contact-1-right">
                    <!-- form -->
                    <?php if( $settings['enable_contact_form'] === 'yes' ) : ?>
                    <div class="tx-form-wrapper mb-100">
                        <?php echo do_shortcode( $settings['form_shortcode'] ); ?>
                    </div>
                    <?php endif; ?>

                    <!-- counter -->
                    <?php if( $settings['enable_count_box'] === 'yes' ) : ?>
                    <div class="bs-contact-1-counter">
                        <?php foreach($settings['count_boxs'] as $list) : ?>
                        <div class="bs-contact-1-counter-item">
                            <?php if(!empty( $list['count_number'] )) : ?>
                            <h4 class="bs-h-1 number counter wa-counter" data-cursor="-opaque">
                                <?php echo esc_html($list['count_number']); ?>
                            </h4>
                            <?php endif; ?>
                            <?php if(!empty( $list['count_title'] )) : ?>
                            <p class="bs-p-1 disc"><?php echo elh_element_kses_intermediate($list['count_title']); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php if(!empty( $list['image_1']['url'] )) : ?>
                        <div class="bs-contact-1-counter-item">
                            <div class="shape">
                                <img src="<?php echo esc_url($list['image_1']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>