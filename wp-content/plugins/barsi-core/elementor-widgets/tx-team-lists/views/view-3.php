<section class="bs-team-5-area wa-fix wa-p-relative pt-100 tx-section">
    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <div class="bs-team-5-bg-shape" data-background="<?php echo esc_url($settings['image_1']['url']); ?>"></div>
    <?php endif; ?>
    <div class="container bs-container-2">

        <!-- section-title -->
        <div class="bs-team-5-sec-title text-center mb-70">
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h6 class="bs-subtitle-5  wa-capitalize tx-subTitle">
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
        </div>

        <!-- slider -->
        <div class="bs-team-5-slider wa-p-relative">
            <div class="swiper-container wa-fix bs-team-5-active">
                <div class="swiper-wrapper">
                    <?php foreach($settings['team_members'] as $list) : ?>
                    <div class="swiper-slide">
                        <div class="bs-team-5-member">
                            <?php if(!empty( $list['team_image']['url'] )) : ?>
                            <div class="main-img wa-fix wa-img-cover">
                                <a href="<?php echo esc_url($list['link']['url']); ?>"
                                target="<?php echo esc_attr($list['link']['is_external'] ? '_blank' : '_self'); ?>"
                                rel="<?php echo esc_attr($list['link']['nofollow'] ? 'nofollow' : ''); ?>" data-cursor-text="Details">
                                    <img src="<?php echo esc_url( $list['team_image']['url'] ); ?>"
                                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['team_image']['url'] ); } ?>">
                                </a>
                            </div>
                            <?php endif; ?>
                            <div class="content">
                                <?php if(!empty( $list['name'] )) : ?>
                                <h4 class="bs-h-1 name">
                                    <a
                                    href="<?php echo esc_url($list['link']['url']); ?>"
                                    target="<?php echo esc_attr($list['link']['is_external'] ? '_blank' : '_self'); ?>"
                                    rel="<?php echo esc_attr($list['link']['nofollow'] ? 'nofollow' : ''); ?>">
                                        <?php echo elh_element_kses_intermediate( $list['name'] ); ?>
                                    </a>
                                </h4>
                                <?php endif; ?>
                                <?php if(!empty( $list['designation'] )) : ?>
                                <p class="bs-p-4 bio"><?php echo elh_element_kses_intermediate( $list['designation'] ); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php if( $settings['enable_navigation'] === 'yes' ) : ?>
            <div class="bs-slider-btn-1 slider-btn-left wa-magnetic">
                <i class="fa-solid fa-angle-left"></i>
            </div>
            <div class="bs-slider-btn-1 slider-btn-right wa-magnetic">
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>