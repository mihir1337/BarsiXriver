<div class="pf-contact-3-area pt-145 tx-section">
    <div class="container pf-container-1">
        <div class="pf-contact-3-wrap">
            <div class="pf-contact-3-content">
                <?php
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-3 pf-contact-3-sec-title pf-split-2' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>

                <div class="pf-contact-3-img-wrap wa-p-relative">
                    <?php if(!empty( $settings['image_1']['url'] )) : ?>
                    <img class="bg-shape" src="<?php echo esc_url($settings['image_1']['url']) ?>"
                    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
                    <?php endif; ?>

                    <div class="pf-contact-3-img">
                        <?php if(!empty( $settings['image_2']['url'] )) : ?>
                        <img class="img-1" src="<?php echo esc_url($settings['image_2']['url']) ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
                        <?php endif; ?>

                        <?php if(!empty( $settings['image_3']['url'] )) : ?>
                        <img class="img-2" src="<?php echo esc_url($settings['image_3']['url']) ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_3']['url'] ); } ?>">
                        <?php endif; ?>
                    </div>

                    <div class="pf-contact-3-img-sig">
                        <?php if(!empty( $settings['image_4']['url'] )) : ?>
                        <img class="sig-img" src="<?php echo esc_url($settings['image_4']['url']) ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_4']['url'] ); } ?>">
                        <?php endif; ?>

                        <?php if(!empty( $settings['description'] )) : ?>
                        <p class="pf-p-1 text tx-description">
                            <?php echo elh_element_kses_intermediate($settings['description']); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

            <!-- right-form -->
            <div class="pf-contact-3-form wow fadeInUp">
                <div class="pf-form-1">
                    <?php if(!empty( $settings['contact_title'] )) : ?>
                    <h5 class="pf-form-1-title pf-h-1 tx-subTitle"><?php echo elh_element_kses_intermediate($settings['contact_title']); ?></h5>
                    <?php endif; ?>

                    <?php if( $settings['enable_contact_form'] === 'yes' ) : ?>
                    <div class="tx-contact-form">
                        <?php echo do_shortcode( $settings['contact_form_shortcode'] ); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>