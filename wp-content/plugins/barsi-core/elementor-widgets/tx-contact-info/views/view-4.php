<section class="bs-contact-4-area wa-fix wa-p-relative">
    <div class="bs-contact-4-bg wa-fix wa-img-cover wa-p-relative">
        <?php if(!empty( $settings['image_1']['url'] )) : ?>
        <img class="wa-parallax-img" src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
        <?php endif; ?>

        <?php if(!empty( $settings['image_2']['url'] )) : ?>
        <img src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>" class="glow-1">
        <?php endif; ?>
    </div>
    <div class="container bs-container-2">
        <div class="bs-contact-4-wrap">

            <!-- left-form -->
            <div class="bs-contact-4-form">
                <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                <h5 class="bs-h-1 title"><?php echo elh_element_kses_intermediate($settings['sub_title']); ?></h5>
                <?php endif; ?>

                <?php if( $settings['enable_contact_form'] === 'yes' ) : ?>
                <div class="tx-form-wrapper">
                    <?php echo do_shortcode( $settings['form_shortcode'] ); ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- section-title -->
            <?php
                if($settings['enable_title'] === 'yes') {
                $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-4 bs-contact-4-title wa-split-right wa-capitalize' );
                $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                    printf('<%1$s %2$s>%3$s</%1$s>',
                        tag_escape($settings['title_tag']),
                        $this->get_render_attribute_string('title'),
                        elh_element_kses_basic( $settings['title'] )
                    );
                }
            ?>

            <?php if(!empty( $settings['image_3']['url'] )) : ?>
            <div class="bs-contact-4-img wa-fix wa-img-cover wa-clip-top-bottom">
                <img src="<?php echo esc_url($settings['image_3']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_3']['url'] ); } ?>" class="wa-parallax-img">
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>