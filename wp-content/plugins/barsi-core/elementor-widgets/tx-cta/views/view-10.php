<div class="pf-team-details-contact">
    <div class="container pf-container-1">
        <div class="pf-team-details-contact-row">
            <div class="pf-team-details-contact-form">
                <div class="pf-form-1 has-v2">
                    <?php if(!empty( $settings['contact_title'] )) : ?>
                    <h5 class="pf-form-1-title pf-h-1"><?php echo elh_element_kses_intermediate($settings['contact_title']); ?></h5>
                    <?php endif; ?>

                    <?php if( $settings['enable_contact_form'] === 'yes' ) : ?>
                    <div class="tx-contact-form">
                        <?php echo do_shortcode( $settings['contact_form_shortcode'] ); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if(!empty( $settings['image_1']['url'] )) : ?>
            <div class="pf-team-details-contact-img wa-fix wa-img-cover">
                <img src="<?php echo esc_url($settings['image_1']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>