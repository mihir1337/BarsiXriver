<section class="bs-about-4-area pt-45 pb-125 wa-fix tx-section">
    <div class="container bs-container-2">
        <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
        <h5 class="bs-subtitle-4">
            <?php if(!empty( $settings['sub_title'] )) : ?>
            <span class="text"><?php echo elh_element_kses_intermediate($settings['sub_title']); ?></span>
            <?php endif; ?>

            <?php if( $settings['enable_sub_title_icon'] === 'yes' ) : ?>
            <span class="icon">
                <?php if( $settings['type'] === 'icon' ) : ?>
                    <?php \Elementor\Icons_Manager::render_icon( $settings['sub_title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <?php else : ?>
                    <img class="wa-fadeInUp" src="<?php echo esc_url( $settings['sub_title_image']['url'] ); ?>" alt="<?php if(function_exists('lawfy_img_alt_text')) { echo lawfy_img_alt_text( $settings['sub_title_image']['url'] ); } ?>">
                    <?php endif; ?>
            </span>
            <?php endif; ?>
        </h5>
        <?php endif; ?>

        <div class="bs-about-4-wrap">

            <!-- left-content -->
            <div class="bs-about-4-content">
                <?php
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-4 title wa-split-right wa-capitalize' );
                    $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>

                <div class="inner-div">
                    <?php if( $settings['enable_description'] === 'yes' ) : ?>
                    <p class="bs-p-4 disc wa-fadeInUp tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                    <?php endif; ?>

                    <?php if( $settings['enable_button'] === 'yes' ) : ?>
                    <div class="btn-wrap wa-fadeInUp">
                        <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                        target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-pr-btn-2 tx-button">
                            <?php if(!empty( $settings['button_text'] )) : ?>
                            <span class="text"
                                data-back="<?php echo esc_attr( $settings['button_text'] ); ?>"
                                data-front="<?php echo esc_attr( $settings['button_text'] ); ?>">
                            </span>
                            <?php endif; ?>
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="box box-1"></span>
                            <span class="box box-2"></span>
                            <span class="box box-3"></span>
                            <span class="box box-4"></span>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if(!empty( $settings['image_1']['url'] )) : ?>
                <div class="illus wa-clip-left-right">
                    <img src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
                </div>
                <?php endif; ?>

                <!-- feature -->
                <?php if( $settings['enable_feature_box'] === 'yes' ) : ?>
                <div class="bs-about-4-feature">
                    <?php foreach( $settings['feature_boxs'] as $index => $list ) : ?>
                    <div class="bs-about-4-feature-single wow fadeInRight">
                        <?php if( $list['enable_icon'] === 'yes' ) : ?>
                        <div class="item-icon">
                            <?php if( $list['type'] === 'icon' ) : ?>
                                <?php \Elementor\Icons_Manager::render_icon( $list['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url( $list['list_image']['url'] ); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['list_image']['url'] ); } ?>">
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty( $list['feature_title'] )) : ?>
                        <h4 class="bs-h-4 item-title">
                            <a href="<?php echo esc_url($list['feature_link']['url']); ?>"
                            target="<?php echo esc_attr($list['feature_link']['is_external'] ? '_blank' : '_self'); ?>"
                            rel="<?php echo esc_attr($list['feature_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                                <?php echo elh_element_kses_intermediate($list['feature_title']); ?>
                            </a>
                        </h4>
                        <?php endif; ?>

                        <?php if(!empty( $list['feature_text'] )) : ?>
                        <p class="bs-p-4 item-disc"><?php echo elh_element_kses_intermediate($list['feature_text']); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="bs-about-4-right">
                <?php if( $settings['enable_info_box'] === 'yes' ) : ?>
                <div class="bs-about-4-project wa-bg-default wa-parallax-item-right-left" data-background="<?php echo esc_url($settings['info_image']['url']) ? esc_url($settings['info_image']['url']) : ''; ?>">
                    <?php if(!empty( $settings['info_icon'] )) : ?>
                    <div class="icon">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['info_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty( $settings['info_title'] )) : ?>
                    <h4 class="bs-h-4 title">
                        <a href="<?php echo esc_url($settings['info_link']['url']); ?>"
                        target="<?php echo esc_attr($settings['info_link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel="<?php echo esc_attr($settings['info_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                            <?php echo elh_element_kses_intermediate($settings['info_title']); ?>
                        </a>
                    </h4>
                    <?php endif; ?>

                    <?php if(!empty( $settings['info_description'] )) : ?>
                    <p class="bs-p-4 disc">
                        <?php echo elh_element_kses_intermediate($settings['info_description']); ?>
                    </p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <?php if(!empty( $settings['image_2']['url'] )) : ?>
                <div class="bs-about-4-img wa-fix wa-img-cover">
                    <img class="wa-parallax-img" src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''); ?>">
                </div>
                <?php endif; ?>

                <?php if(!empty( $settings['image_3']['url'] )) : ?>
                <div class="illus-2">
                    <img src="<?php echo esc_url($settings['image_3']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_3']['url']) : ''); ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>