<?php $rand = rand( 1, 1000 ); ?>
<section class="bs-testimonial-3-area pt-120 pb-130 tx-section">
    <div class="container bs-container-1">
        <!-- section-title -->
        <div class="bs-team-3-sec-title wa-p-relative text-center mb-35">
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h6 class="bs-subtitle-1 wa-capitalize tx-subTitle">
                <span class="icon">
                    <?php if( $settings['type'] === 'icon' ) : ?>
                        <?php \Elementor\Icons_Manager::render_icon( $settings['sub_title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    <?php else : ?>
                        <img class="wa-fadeInUp" src="<?php echo esc_url( $settings['sub_title_image']['url'] ); ?>" alt="<?php if(function_exists('lawfy_img_alt_text')) { echo lawfy_img_alt_text( $settings['sub_title_image']['url'] ); } ?>">
                        <?php endif; ?>
                </span>
                <?php if(!empty( $settings['sub_title'] )) : ?>
                <span class="text wa-split-clr">
                    <?php echo elh_element_kses_intermediate($settings['sub_title']); ?>
                </span>
                <?php endif; ?>
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
            <?php if( $settings['enable_description'] === 'yes' ) : ?>
            <p class="tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
            <?php endif; ?>
        </div>

        <!-- bs-wrap -->
        <div class="bs-testimonial-3-wrap">
            <!-- left-slider -->
            <div class="bs-testimonial-3-slider wa-fix">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- single-slider -->
                        <div class="swiper-slide">
                            <div class="bs-testimonial-3-item">
                            <?php if(!empty( $settings['left_icon'] )) : ?>
                            <div class="icon">
                                <?php \Elementor\Icons_Manager::render_icon( $settings['left_icon'], ['aria-hidden' => 'true'] ); ?>
                            </div>
                            <?php endif; ?>

                                <p class="bs-p-3 comment">
                                    <span class="wa-fadeInUp">
                                        <?php echo elh_element_kses_intermediate($settings['comment']); ?>
                                    </span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="60px" height="55px">
                                        <path fill-rule="evenodd"  fill="rgb(0, 0, 0)"
                                        d="M15.305,0.5 L53.16,0.5 C56.754,0.5 59.429,2.891 59.237,6.446 L57.915,30.899 C57.733,34.273 54.794,38.70 51.119,39.490 L14.582,53.591 C7.187,56.446 0.587,54.741 0.587,49.447 L0.587,10.464 C0.587,4.706 7.547,0.5 15.305,0.5 Z"/>
                                    </svg>
                                </p>

                                <div class="item-author wa-fadeInUp">
                                    <?php if(!empty( $settings['author_image']['url'] )) : ?>
                                    <div class="item-author-img wa-img-cover wa-fix">
                                        <img src="<?php echo esc_url($settings['author_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['author_image']['url']) : ''); ?>">
                                    </div>
                                    <?php endif; ?>

                                    <div class="content">
                                        <?php if(!empty( $settings['name'] )) : ?>
                                        <h5 class="bs-h-2 name">
                                            <?php echo elh_element_kses_intermediate($settings['name']); ?>
                                        </h5>
                                        <?php endif; ?>

                                        <?php if(!empty( $settings['designation'] )) : ?>
                                        <p class="bs-p-1 bio">
                                            <?php echo elh_element_kses_intermediate($settings['designation']); ?>
                                        </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="bs-accordion bs-testimonial-3-accordion" id="accordionExample_<?php echo esc_attr($rand); ?>">
                <!-- single-team -->
                <?php
                    foreach ( $settings['faq_lists'] as $id => $list ):
                    $is_active = $list['is_active'] == 'yes' ? 'active' : '';
                    $show = $list['is_active'] == 'yes' ? 'show' : '';
                    $aria_expanded = $list['is_active'] == 'yes' ? 'true' : 'false';
                    $collapsed = $list['is_active'] == 'yes' ? '' : 'collapsed';
                ?>
                <div class="bs-accordion-item wa-fadeInUp <?php echo esc_attr($is_active); ?>"  >
                    <div class="item-header" id="heading<?php echo esc_attr($rand . '-' . $id); ?>">
                        <button class="item-title bs-h-2 <?php echo esc_attr($collapsed); ?>"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapse-<?php echo esc_attr($rand . '-' . $id); ?>"
                            aria-expanded="<?php echo esc_attr($aria_expanded); ?>"
                            aria-controls="collapse-<?php echo esc_attr($rand . '-' . $id); ?>">
                            <?php echo elh_element_kses_intermediate($list['title']); ?>
                            <span class="icon">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                        </button>
                    </div>
                    <div id="collapse-<?php echo esc_attr($rand . '-' . $id); ?>"
                    class="accordion-collapse collapse <?php echo esc_attr($show); ?>"
                    aria-labelledby="heading-<?php echo esc_attr($rand . '-' . $id); ?>"
                    data-bs-parent="#accordionExample_<?php echo esc_attr($rand); ?>">
                        <div class="item-body ">
                            <p class="bs-p-1">
                                <?php echo elh_element_kses_intermediate($list['content']); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>