<section class="bs-about-5-area pt-135 pb-100 wa-fix wa-p-relative tx-section">
    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <div class="bs-about-5-bg-shape">
        <img src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
    </div>
    <?php endif; ?>

    <?php if(!empty( $settings['image_2']['url'] )) : ?>
    <div class="bs-about-5-bg-shape-2">
        <img src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''); ?>">
    </div>
    <?php endif; ?>

    <div class="container bs-container-2">

        <!-- section-title -->
        <div class="bs-about-5-sec-title mb-55">
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h6 class="bs-subtitle-5 wa-capitalize tx-subTitle">
                <?php if(!empty( $settings['sub_count'] )) : ?>
                <span>
                    <?php echo esc_html($settings['sub_count']); ?>
                </span>
                <?php endif; ?>

                <?php if(!empty( $settings['sub_title'] )) : ?>
                <span class="wa-split-right"><?php echo elh_element_kses_intermediate($settings['sub_title']); ?></span>
                <?php endif; ?>
            </h6>
            <?php endif; ?>

            <?php
                if($settings['enable_title'] === 'yes') {
                $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-4 wa-split-right wa-capitalize' );
                $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                    printf('<%1$s %2$s>%3$s</%1$s>',
                        tag_escape($settings['title_tag']),
                        $this->get_render_attribute_string('title'),
                        elh_element_kses_basic( $settings['title'] )
                    );
                }
            ?>
        </div>

        <div class="bs-about-5-wrap">

            <!-- left-side -->
            <div class="bs-about-5-left">
                <?php if( $settings['enable_description'] === 'yes' ) : ?>
                <p class="bs-p-4 disc wa-fadeInUp"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                <?php endif; ?>

                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <div class="btn-wrap wa-fadeInUp">
                    <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                    target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-pr-btn-3 tx-button">
                        <span class="text">
                            <?php echo esc_html( $settings['button_text'] ); ?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
                        </span>
                        <span class="text">
                            <?php echo esc_html( $settings['button_text'] ); ?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
                        </span>
                    </a>
                </div>
                <?php endif; ?>

                <?php if(!empty( $settings['image_3']['url'] )) : ?>
                <div class="bs-about-5-img-1 wa-fix wa-img-cover wa-fadeInUp" data-cursor="-opaque">
                    <img class="wa-parallax-img" src="<?php echo esc_url($settings['image_3']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_3']['url']) : ''); ?>">
                </div>
                <?php endif; ?>
            </div>

            <!-- right-side -->
            <div class="bs-about-5-right">
                <?php if(!empty( $settings['image_4']['url'] )) : ?>
                <div class="bs-about-5-img-2 wa-fix wa-img-cover wa-fadeInUp" data-cursor="-opaque">
                    <img class="wa-parallax-img" src="<?php echo esc_url($settings['image_4']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_4']['url']) : ''); ?>">
                </div>
                <?php endif; ?>

                <?php if( $settings['enable_feature_lists'] === 'yes' ) : ?>
                <ul class="bs-about-5-feature wa-list-style-none">
                <?php foreach( $settings['feature_lists'] as $index => $list ) : ?>
                    <li class="bs-p-4 wa-fadeInUp">
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
            </div>
        </div>
    </div>
</section>