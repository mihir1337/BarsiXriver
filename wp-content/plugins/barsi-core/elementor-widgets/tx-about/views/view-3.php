<section class="bs-choose-4-area wa-bg-default wa-fix pb-120 tx-section" data-background="<?php echo esc_url($settings['image_1']['url']) ? esc_url($settings['image_1']['url']) : ''; ?>">
    <div class="container bs-container-2">
        <div class="bs-choose-4-wrap">
            <div class="bs-choose-4-content-height">
                <!-- left-content -->
                <div class="bs-choose-4-content-pin">
                    <div class="bs-choose-4-content">
                        <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                        <h5 class="bs-subtitle-4 bs-choose-4-subtitle">
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
                        <?php if( $settings['enable_description'] === 'yes' ) : ?>
                        <p class="bs-p-4 disc wa-fadeInUp tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                        <?php endif; ?>

                        <?php if( $settings['enable_skill_box'] === 'yes' ) : ?>
                        <div class="bs-choose-4-progress">
                            <!-- single-item -->
                            <?php foreach($settings['skill_lists'] as $list) : ?>
                            <div class="bs-choose-4-progress-item">
                                <h5 class="bs-p-1 progress-title" style="width: <?php echo esc_attr($list['skill_percentage']); ?>%;">
                                    <?php if(!empty( $list['skill_title'] )) : ?>
                                    <span>
                                        <?php echo elh_element_kses_intermediate($list['skill_title']); ?>
                                    </span>
                                    <?php endif; ?>

                                    <?php if(!empty( $list['skill_percentage'] )) : ?>
                                    <span class="counter"><?php echo esc_html($list['skill_percentage']); ?></span>%
                                    <?php endif; ?>
                                </h5>
                                <?php if(!empty( $list['skill_percentage'] )) : ?>
                                <div class="progress-line">
                                    <div class="progress-line-fill wa-progress"
                                    style="width: <?php echo esc_attr($list['skill_percentage']); ?>%;"></div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- right-play-btn -->
            <?php if( $settings['enable_video_link'] === 'yes' ) : ?>
            <div class="bs-choose-4-right d-flex justify-content-center align-items-center">
                <a href="<?php echo esc_url($settings['video_link']['url']); ?>" aria-label="name" class="bs-play-btn-4 wa-magnetic popup-video">
                    <span class="icon wa-magnetic-btn">
                        <i class="flaticon-play flaticon"></i>
                    </span>
                </a>
            </div>
            <?php endif; ?>
        </div>

        <?php if( $settings['enable_feature_box'] === 'yes' ) : ?>
        <div class="bs-choose-4-feature">
            <?php foreach( $settings['feature_boxs'] as $index => $list ) : ?>
            <div class="item-margin">
                <div class="bs-choose-4-feature-single">
                    <?php if( $list['enable_icon'] === 'yes' ) : ?>
                    <div class="icon">
                        <?php if( $list['type'] === 'icon' ) : ?>
                            <?php \Elementor\Icons_Manager::render_icon( $list['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url( $list['list_image']['url'] ); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['list_image']['url'] ); } ?>">
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty( $list['feature_title'] )) : ?>
                    <h4 class="bs-h-4 title">
                        <a href="<?php echo esc_url($list['feature_link']['url']); ?>"
                        target="<?php echo esc_attr($list['feature_link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel="<?php echo esc_attr($list['feature_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                            <?php echo elh_element_kses_intermediate($list['feature_title']); ?>
                        </a>
                    </h4>
                    <?php endif; ?>

                    <?php if(!empty( $list['feature_text'] )) : ?>
                    <p class="bs-p-4 disc"><?php echo elh_element_kses_intermediate($list['feature_text']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>