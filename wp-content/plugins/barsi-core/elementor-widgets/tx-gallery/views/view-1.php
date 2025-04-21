<section class="bs-gallery-2-area pt-100 pb-145 tx-section">
    <div class="container bs-container-1">
        <div class="bs-gallery-2-wrap">
            <div class="left">
                <div class="bs-gallery-2-sec-title wa-fix ">
                    <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                    <h6 class="bs-subtitle-1 tx-subTitle">
                        <?php if( $settings['enable_sub_title_icon'] === 'yes' ) : ?>
                        <span class="icon">
                            <?php if( $settings['type'] === 'icon' ) : ?>
                                <?php \Elementor\Icons_Manager::render_icon( $settings['sub_title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            <?php else : ?>
                                <img class="wa-fadeInUp" src="<?php echo esc_url( $settings['sub_title_image']['url'] ); ?>" alt="<?php if(function_exists('lawfy_img_alt_text')) { echo lawfy_img_alt_text( $settings['sub_title_image']['url'] ); } ?>">
                                <?php endif; ?>
                        </span>
                        <?php endif; ?>
                        <?php if(!empty( $settings['sub_title'] )) : ?>
                        <span class="text wa-split-clr wa-capitalize" >
                            <?php echo elh_element_kses_intermediate($settings['sub_title']); ?>
                        </span>
                        <?php endif; ?>
                    </h6>
                    <?php endif; ?>

                    <?php if($settings['enable_title'] === 'yes') : ?>
                    <h2 class="bs-sec-title-1 wa-split-right wa-capitalize">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php echo elh_element_kses_basic( $settings['title'] ); ?>
                    </h2>
                    <?php endif; ?>

                    <?php if( $settings['enable_description'] === 'yes' ) : ?>
                    <p class="tx-description">
                        <?php echo elh_element_kses_intermediate($settings['description']); ?>
                    </p>
                    <?php endif; ?>
                </div>

                <!-- img -->
                <?php foreach($settings['gallery_images'] as $list) : ?>
                    <a href="<?php echo esc_url($list['image']['url']); ?>" aria-label="name" class="bs-gallery-2-img popup-img wa-img-cover wa-fix">
                    <?php if(!empty( $list['image']['url'] )) : ?>
                        <img src="<?php echo esc_url($list['image']['url']); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image']['url'] ); } ?>">
                    <?php endif; ?>
                </a>
                <?php endforeach; ?>

            </div>

            <!-- left -->
            <div class="meddle">
                <div class="meddle-row">
                    <?php foreach($settings['gallery_images_2'] as $list) : ?>
                        <?php if(!empty( $list['image']['url'] )) : ?>
                        <a href="<?php echo esc_url($list['image']['url']); ?>" aria-label="name" class="bs-gallery-2-img popup-img wa-img-cover wa-fix">
                            <img src="<?php echo esc_url($list['image']['url']); ?>"
                            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image']['url'] ); } ?>">
                        </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="meddle-row-2">
                    <?php foreach($settings['gallery_images_3'] as $list) : ?>
                        <?php if(!empty( $list['image']['url'] )) : ?>
                    <a href="<?php echo esc_url($list['image']['url']); ?>" aria-label="name" class="bs-gallery-2-img sm-size popup-img wa-img-cover wa-fix">
                            <img src="<?php echo esc_url($list['image']['url']); ?>"
                            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image']['url'] ); } ?>">
                        </a>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- left -->
            <div class="right">
                <!-- img -->
                 <?php if(!empty( $settings['image_1']['url'] )) : ?>
                <a href="<?php echo esc_url($settings['image_1']['url']); ?>"
                    aria-label="name" class="bs-gallery-2-img sm-size popup-img wa-img-cover wa-fix">
                    <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
                    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
                </a>
                <?php endif; ?>

                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <div class="link-btn text-center">
                    <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                    target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
                    aria-label="name" class="bs-btn-1 tx-button">
                        <?php if(!empty( $settings['button_text'] )) : ?>
                        <span class="text">
                            <?php echo elh_element_kses_intermediate( $settings['button_text'] ); ?>
                        </span>
                        <?php endif; ?>

                        <?php if( $settings['enable_button_icon'] === 'yes' ) : ?>
                        <span class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] );?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] );?>
                        </span>
                        <?php endif; ?>
                        <span class="shape"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>