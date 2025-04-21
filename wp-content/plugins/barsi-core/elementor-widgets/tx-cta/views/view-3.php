<div class="pf-contact-2-area pb-150 tx-section m-0">
    <div class="container pf-container-1">
        <div class="pf-contact-2-wrap">
            <?php if(!empty( $settings['image_1']['url'] )) : ?>
            <div class="pf-contact-2-img wa-fix wa-img-cover wa-img-parallax">
                <img src="<?php echo esc_url($settings['image_1']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
            </div>
            <?php endif; ?>

            <!-- right-form -->
            <div class="pf-contact-2-content">
                <?php
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-2 sec-title pf-split-2' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>

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