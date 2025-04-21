<section class="bs-testimonial-4-area wa-fix wa-p-relative pt-125 pb-50 tx-section">
    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <div class="bs-testimonial-4-bg" data-background="<?php echo esc_url($settings['image_1']['url']); ?>"></div>
    <?php endif; ?>

    <div class="container bs-container-2">
        <div class="bs-testimonial-4-content">
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h5 class="bs-subtitle-4 tx-subTitle">
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

            <div class="inner-div">
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

                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <div class="btn-wrap">
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
        </div>
    </div>

    <div class="bs-testimonial-4-slider wa-fadeInUp">
        <div class="swiper-container wa-fix bs-t4-active">
            <div class="swiper-wrapper">
                <?php foreach($settings['testimonial_lists'] as $list) : ?>
                <div class="swiper-slide">
                    <div class="bs-testimonial-4-slider-item">
                        <?php if(!empty( $list['author_image']['url'] )) : ?>
                        <div class="item-img wa-fix wa-img-cover">
                            <img src="<?php echo esc_url($list['author_image']['url']); ?>"
                            alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['author_image']['url']) : ''); ?>">
                        </div>
                        <?php endif; ?>
                        <div class="content">
                            <?php if( $list['enable_rating'] === 'yes' ) : ?>
                            <div class="bs-star-1">
                                <?php
                                    $rating = $list['rating_star'];
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= $rating) {
                                            echo '<i class="fa-solid fa-star"></i>';
                                        } else {
                                            echo '<i class="fa-regular fa-star-half-stroke"></i>';
                                        }
                                    }
                                ?>
                            </div>
                            <?php endif; ?>
                            <?php if(!empty( $list['comment'] )) : ?>
                            <p class="bs-p-4 comment"><?php echo elh_element_kses_intermediate($list['comment']); ?></p>
                            <?php endif; ?>

                            <?php if(!empty( $list['name'] )) : ?>
                            <h4 class="bs-p-4 name"><?php echo elh_element_kses_intermediate($list['name']); ?></h4>
                            <?php endif; ?>
                            <?php if(!empty( $list['designation'] )) : ?>
                            <h4 class="bs-p-4 bio">
                                <?php echo elh_element_kses_intermediate($list['designation']); ?>
                            </h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php if( $settings['enable_slide_pagination'] === 'yes' ) : ?>
    <div class="container">
        <div class="bs-testimonial-4-slider-btn wa-fadeInUp">
            <div class="btn-elm bs-t4-prev">
                <i class="fa-solid fa-angle-left"></i>
                <?php echo esc_html__('prev', 'barsi-core'); ?>
            </div>
            <div class="pagination  wa-p-relative">
                <div class="bs-t4-pagination"></div>
            </div>
            <div class="btn-elm bs-t4-next">
                <?php echo esc_html__('next', 'barsi-core'); ?>
                <i class="fa-solid fa-angle-right"></i>
            </div>
        </div>
    </div>
    <?php endif; ?>

</section>