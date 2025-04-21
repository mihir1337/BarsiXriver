<section class="bs-hero-1-area pt-135 pb-35 wa-p-relative wa-fix tx-setion" data-background="<?php echo esc_url($settings['image_1']['url']) ? esc_url($settings['image_1']['url']) : ''; ?>">
    <div class="bs-hero-1-bg-shape"></div>
    <div class="container bs-container-1">
        <div class="bs-hero-1-wrap mb-75">

            <!-- left -->
            <div class="bs-hero-1-left">

                <!-- success -->
                <div class="bs-hero-1-success mb-40">
                    <?php if(!empty( $settings['image_2']['url'] )) : ?>
                    <div class="success-img">
                        <img data-cursor="-opaque" src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''; ?>">
                    </div>
                    <?php endif; ?>
                    <div class="content">
                        <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                        <h6 class="bs-h-1 title" data-cursor="-opaque">
                            <?php echo elh_element_kses_basic($settings['sub_title']); ?>
                        </h6>
                        <?php endif; ?>

                        <!-- counter -->
                        <?php if( $settings['enable_count_box'] === 'yes' ) : ?>
                        <div class="bs-hero-1-success-counter">
                            <?php foreach($settings['count_boxs'] as $list) : ?>
                            <div class="bs-hero-1-success-counter-item">
                                <?php if(!empty( $list['count_number'] )) : ?>
                                <h4 class="bs-h-1 number counter">
                                    <?php echo esc_html($list['count_number']); ?>
                                </h4>
                                <?php endif; ?>
                                <?php if(!empty( $list['count_title'] )) : ?>
                                <p class="bs-p-1 disc">
                                    <?php echo esc_html($list['count_title']); ?>
                                </p>
                                <?php endif; ?>
                            </div>
                            <?php if(!empty( $settings['image_3']['url'] )) : ?>
                            <div class="bs-hero-1-success-counter-item">
                                <div class="shape">
                                    <img src="<?php echo esc_url($settings['image_3']['url']); ?>" alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_3']['url']) : ''; ?>">
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- title -->
                <?php
                    if($settings['enable_title'] === 'yes') {
                        $this->add_render_attribute( 'title', 'class', 'tx-title bs-h-1 bs-hero-1-title wa-split-right wa-capitalize' );
                        $this->add_render_attribute( 'title', 'data-split-delay', '1.5s' );
                        $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>

                <!-- btn -->
                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <div class="btn-wrap">
                    <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                    target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
                    aria-label="name" class="bs-btn-1 tx-button">
                        <?php if(!empty( $settings['button_text'] )) : ?>
                        <span class="text">
                            <?php echo esc_attr($settings['button_text']); ?>
                        </span>
                        <?php endif; ?>
                        <?php if( $settings['enable_button_icon'] === 'yes' ) : ?>
                        <span class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </span>
                        <?php endif; ?>
                        <span class="shape"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <!-- right -->
            <div class="bs-hero-1-right">
                <?php if( $settings['enable_description'] === 'yes' ) : ?>
                <h2 class="bs-h-1 bs-hero-1-title-2 wa-split-right wa-capitalize" data-split-delay="1.8s" data-cursor="-opaque">
                    <?php echo elh_element_kses_basic($settings['description']); ?>
                </h2>
                <?php endif; ?>

                <!-- img -->
                 <?php if(!empty( $settings['image_4']['url'] )) : ?>
                <div class="bs-hero-1-img wa-img-cover wa-fix "  >
                    <img data-cursor="-opaque"  src="<?php echo esc_url($settings['image_4']['url']); ?>" alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_4']['url']) : ''; ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if( $settings['enable_video_box'] === 'yes' ) : ?>
        <div class="bs-hero-1-play-btn">
            <a href="<?php echo esc_url($settings['video_link']['url']); ?>" aria-label="name" class="bs-play-btn bs-h-1 popup-video" >
                <i class="fa-solid fa-circle-play"></i>
                <?php echo esc_html($settings['video_text']); ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>