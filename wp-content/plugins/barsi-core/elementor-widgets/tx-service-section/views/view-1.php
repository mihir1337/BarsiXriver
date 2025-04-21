<section class="bs-services-4-area pt-100 wa-fix tx-section" data-background="<?php echo esc_url($settings['image_1']['url']) ? esc_url($settings['image_1']['url']) : ''; ?>">

    <?php if(!empty( $settings['image_2']['url'] )) : ?>
    <div class="bs-services-4-img wa-fix wa-img-cover wa-slideInLeft">
        <img src="<?php echo esc_url($settings['image_2']['url']); ?>"
        alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''); ?>">
    </div>
    <?php endif; ?>

    <div class="container bs-container-2">
        <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
        <h5 class="bs-subtitle-4 bs-services-4-subtitle tx-subTitle">
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

        <div class="bs-services-4-wrap">
            <!-- left-content -->
            <div class="bs-services-4-content">
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

            <!-- right-item -->
            <div class="bs-services-4-item">
                <!-- single-item -->
                <?php foreach($settings['service_slide_boxs'] as $list ) :
                    $is_active = $list['is_active'] ? 'active' : '';
                ?>
                <div class="bs-services-4-item-single wa-bg-default <?php echo esc_attr($is_active); ?>"
                data-background="<?php echo esc_url($list['image_1']['url']) ? esc_url($list['image_1']['url']) : ''; ?>">
                    <div class="active-content">
                        <?php if(!empty( $list['title'] )) : ?>
                        <h4 class="bs-h-1 title">
                            <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                            target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                            rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="wa-line-limit has-line-2">
                                <?php echo elh_element_kses_intermediate( $list['title'] ); ?>
                            </a>
                        </h4>
                        <?php endif; ?>

                        <?php if(!empty( $list['image_2']['url'] )) : ?>
                        <div class="main-img wa-fix wa-img-cover">
                            <img src="<?php echo esc_url($list['image_2']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_2']['url']) : ''); ?>">
                        </div>
                        <?php endif; ?>

                        <?php if(!empty( $list['description'] )) : ?>
                        <p class="bs-p-4 disc wa-line-limit has-line-3"><?php echo elh_element_kses_intermediate( $list['description'] ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="default-content">
                        <?php if(!empty( $list['image_2']['url'] )) : ?>
                        <div class="img-2 wa-fix wa-img-cover">
                            <img src="<?php echo esc_url($list['image_2']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_2']['url']) : ''); ?>">
                        </div>
                        <?php endif; ?>

                        <?php if(!empty( $list['title'] )) : ?>
                        <h4 class="bs-h-1 title-2 wa-line-limit has-line-1">
                            <?php echo elh_element_kses_intermediate( $list['title'] ); ?>
                        </h4>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
