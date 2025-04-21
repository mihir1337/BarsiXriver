<section class="bs-about-3-area pt-125 pb-60 tx-section">
    <div class="container bs-container-1">
        <!-- section-title -->
        <div class="bs-about-3-sec-title wa-p-relative">
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
            <?php endif; ?>
            <?php
                if($settings['enable_title'] === 'yes') {
                $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-3  wa-split-right wa-capitalize' );
                $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                    printf('<%1$s %2$s>%3$s</%1$s>',
                        tag_escape($settings['title_tag']),
                        $this->get_render_attribute_string('title'),
                        elh_element_kses_basic( $settings['title'] )
                    );
                }
            ?>
        </div>

        <div class="bs-about-3-wrap">
            <!-- left-content -->
            <div class="bs-about-3-content">
                <?php if( $settings['enable_description'] === 'yes' ) : ?>
                <p class="bs-p-3 disc wa-fadeInUp tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                <?php endif; ?>

                <?php if( $settings['enable_feature_lists'] === 'yes' ) : ?>
                <ul class="bs-about-3-content-list wa-list-style-none">
                <?php foreach( $settings['feature_lists'] as $index => $list ) : ?>
                    <li class="bs-h-2 wa-fadeInUp">
                        <?php if( $list['type'] === 'icon' ) : ?>
                            <?php \Elementor\Icons_Manager::render_icon( $list['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url( $list['list_image']['url'] ); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['list_image']['url'] ); } ?>">
                        <?php endif; ?>
                        <?php echo elh_element_kses_intermediate($list['feature_title']); ?>
                    </li>
                    <?php  endforeach; ?>
                </ul>
                <?php endif; ?>

                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <div class="bs-about-3-content-btn wa-fadeInUp">
                    <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                    target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-btn-1 text-capitalize tx-button">
                        <?php if(!empty( $settings['button_text'] )) : ?>
                        <span class="text">
                            <?php echo esc_html( $settings['button_text'] ); ?>
                        </span>
                        <?php endif; ?>

                        <?php if(!empty( $settings['button_icon'] )) : ?>
                        <span class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
                        </span>
                        <?php endif; ?>
                        <span class="shape"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <!-- right -->
            <div class="bs-about-3-right wa-p-relative">

                <!-- img -->
                 <?php if(!empty( $settings['image_1']['url'] )) : ?>
                <div class="bs-about-3-img-1 wa-fix">
                    <img class="wa-slideInUp" src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
                </div>
                <?php endif; ?>

                <?php if(!empty( $settings['image_2']['url'] )) : ?>
                <div class="bs-about-3-img-2 wa-fix wa-img-cover wa-clip-right-left">
                    <img src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''); ?>">
                </div>
                <?php endif; ?>

                <?php if( $settings['enable_feature_box'] === 'yes' ) : ?>
                <div class="bs-about-3-feature wa-p-relative wa-fix">
                    <?php foreach( $settings['feature_boxs'] as $index => $list ) : ?>
                    <div class="bs-about-3-feature-single">

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
                        <h5 class="bs-h-2 title">
                            <?php echo elh_element_kses_intermediate($list['feature_title']); ?>
                        </h5>
                        <?php endif; ?>

                        <?php if(!empty( $list['feature_text'] )) : ?>
                        <p class="bs-p-3 disc"><?php echo elh_element_kses_intermediate($list['feature_text']); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>