<div class="pf-counter-3-area wa-p-relative pt-110 pb-110 tx-section">
    <div class="container pf-container-1">
        <!-- section-title -->
        <div class="pf-sec-shape pf-counter-3-sec-shape">
            <?php if(!empty( $settings['image_1']['url'] )) : ?>
            <div class="pf-sec-shape-1" >
                <img src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
            </div>
            <?php endif; ?>

            <?php if(!empty( $settings['image_2']['url'] )) : ?>
            <div class="pf-sec-shape-2" >
                <img src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''); ?>">
            </div>
            <?php endif; ?>
        </div>

        <?php
            if($settings['enable_title'] === 'yes') {
            $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-3 pf-counter-3-sec-title pf-split-2' );
                printf('<%1$s %2$s>%3$s</%1$s>',
                    tag_escape($settings['title_tag']),
                    $this->get_render_attribute_string('title'),
                    elh_element_kses_basic( $settings['title'] )
                );
            }
        ?>
    </div>

    <div class="pf-counter-3-wrap pf-br-32  pf-mlr-20 wa-fix mb-50">

        <!-- left-content -->
        <div class="left wa-p-relative wa-fix">

            <!-- video -->
            <?php if( $settings['enable_video_box'] === 'yes' ) : ?>
            <div class="pf-video-2">
                <?php if(!empty( $settings['video_image']['url'] )) : ?>
                <div class="pf-video-2-img wa-fix wa-img-cover">
                    <img src="<?php echo esc_url($settings['video_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['video_image']['url']) : ''); ?>">
                </div>
                <?php endif; ?>
                <?php if(!empty( $settings['video_link']['url'] )) : ?>
                <div class="pf-video-2-btn">
                    <a href="<?php echo esc_url($settings['video_link']['url']); ?>" aria-label="name" class="pf-video-btn-1 popup-video">
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if( $settings['enable_count_box'] === 'yes' ) : ?>
            <div class="pf-counter-3-item wow slideInRight">
                <svg class="card-shape" width="192" height="192" viewBox="0 0 192 192" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="card-shape-1" opacity="0.04" d="M0 0C0 106.057 85.9714 192 192 192V0H0Z" fill="#2A2A2A"></path>
                    <path class="card-shape-2" opacity="0.04" d="M64 0C64 70.7044 121.314 128 192 128V0H64Z" fill="#2A2A2A"></path>
                    <path class="card-shape-3" opacity="0.04" d="M128 0C128 35.3522 156.657 64 192 64V0H128Z" fill="#2A2A2A"></path>
                </svg>
                <div class="pf-counter-1">
                    <?php foreach($settings['count_boxs'] as $list ) : ?>
                    <div class="pf-counter-1-item ">
                        <h5 class="pf-counter-1-item-number pf-h-1">
                            <span class="counter"><?php echo esc_html($list['count_number']); ?></span><span class="text"><?php echo esc_html($list['count_prefix']); ?></span>
                        </h5>
                        <?php if(!empty( $list['count_title'] )) : ?>
                        <p class="pf-counter-1-item-disc pf-p-1 tx-count-title"><?php echo elh_element_kses_basic( $list['count_title'] ); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <?php if( $settings['enable_button_image'] === 'yes' ) : ?>
            <div class="pf-counter-3-rotated-btn">
                <a href="<?php echo esc_url($settings['button_image_link']['url']); ?>" aria-label="name" class="pf-rotated-btn-2">
                    <?php if(!empty( $settings['button_image']['url'] )) : ?>
                    <img src="<?php echo esc_url($settings['button_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['button_image']['url']) : ''); ?>">
                    <?php endif; ?>

                    <?php if(!empty( $settings['button_image_icon'] )) : ?>
                    <span class="icon">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['button_image_icon'], ['aria-hidden' => 'true'] ); ?>
                    </span>
                    <?php endif; ?>
                </a>
            </div>
            <?php endif; ?>

            <?php if( $settings['enable_description'] === 'yes' ) : ?>
            <p class="pf-p-2 pf-counter-3-disc wow slideInLeft tx-description"><?php echo elh_element_kses_basic( $settings['description'] ); ?></p>
            <?php endif; ?>
        </div>

        <!-- right-content -->
        <div class="right">
            <?php if(!empty( $settings['image_3']['url'] )) : ?>
            <div class="pf-counter-3-img wa-fix wa-img-cover  wa-img-parallax">
                <img src="<?php echo esc_url($settings['image_3']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_3']['url']) : ''); ?>">
            </div>
            <?php endif; ?>

            <?php if( $settings['enable_contact_info'] === 'yes' ) : ?>
            <div class="pf-counter-3-contact-box">
                <?php if(!empty( $settings['image_4']['url'] )) : ?>
                <img class="bg-shape" src="<?php echo esc_url($settings['image_4']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_4']['url']) : ''); ?>">
                <?php endif; ?>

                <div class="pf-free-phone-2">
                    <?php if(!empty( $settings['contact_info_icon'] )) : ?>
                    <span class="icon">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['contact_info_icon'], ['aria-hidden' => 'true'] ); ?>
                    </span>
                    <?php endif; ?>
                    <span class="content">
                        <?php echo elh_element_kses_intermediate( $settings['contact_info_label'] ); ?>
                        <?php echo wp_kses($settings['contact_info_text'], true); ?>
                    </span>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>