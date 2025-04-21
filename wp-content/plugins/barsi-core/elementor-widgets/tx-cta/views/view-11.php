<div class="vy-contact-3-area bg-default pt-170 pb-150 m-0" data-background="<?php echo $settings['image_1']['url'] ? esc_url($settings['image_1']['url']) : ''; ?>">
    <div class="container vy-container-1">
        <div class="vy-contact-3-row">

            <!-- left-side -->
            <div class="vy-contact-3-content vy-fix">

                <!-- section-title -->
                <div class="vy-contact-3-scn-title mb-65">
                    <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                    <h6 class="vy-subtitle-1 txaa-split-text-4-ani txaa-split-text-4 tx-subTitle">
                        <?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?>
                    </h6>
                    <?php
                    endif;
                        if($settings['enable_title'] === 'yes') {
                        $this->add_render_attribute( 'title', 'class', 'tx-title vy-scn-title-1 txaa-split-text-3 txaa-split-text-3-ani' );
                            printf('<%1$s %2$s>%3$s</%1$s>',
                                tag_escape($settings['title_tag']),
                                $this->get_render_attribute_string('title'),
                                elh_element_kses_basic( $settings['title'] )
                            );
                        }
                    if( $settings['enable_description'] === 'yes' ) : ?>
                    <p class="tx-description scn-disc vy-para-1 tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                    <?php endif; ?>
                </div>

                <div class="vy-contact-2-patner vy-contact-3">
                    <?php if(!empty( $settings['brand_text'] )) : ?>
                    <p class="vy-contact-2-patner-title vy-contact-3 vy-para-2 has-fs-16 disc">
                    <?php echo elh_element_kses_intermediate($settings['brand_text']); ?>
                    </p>
                    <?php endif; ?>
                    <div class="vy-contact-2-patner-slider">
                        <div class="swiper-container vy-c2-patner-active ">
                            <div class="swiper-wrapper">
                                <?php foreach ( $settings['brands_image'] as $key => $brand ) :
                                    if (!empty($brand['url'])) {
                                        $brand_image = $brand['url'];
                                    }
                                    // alt
                                    if (!empty($brand['alt'])) {
                                        $brand_alt = $brand['alt'];
                                    } else {
                                        $brand_alt = '';
                                    }
                                ?>
                                <div class="swiper-slide">
                                    <div class="vt-contact-logo-img">
                                        <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- left-right -->
            <div class="vt-contact-form vy-contact-3 wow fadeInUp bg-default" data-wow-duration="2s" data-background="<?php echo $settings['image_2']['url'] ? esc_url($settings['image_2']['url']) : ''; ?>">
                <?php if(!empty( $settings['contact_title'] )) : ?>
                <h3 class="vy-contact-1-form-title vy-ff-500">
                    <?php echo elh_element_kses_intermediate($settings['contact_title']); ?>
                </h3>
                <?php endif; ?>
                <div class="vt-contact-form-area vy-contact-3">
                    <?php if( $settings['enable_contact_form'] === 'yes' ) : ?>
                    <div class="vy-contact-1-form">
                        <?php echo do_shortcode( $settings['contact_form_shortcode'] ); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</div>