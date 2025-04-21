<div class="pf-career-gallery-1-area wa-fix tx-section">
    <div class="container pf-container-1">
        <div class="pf-career-gallery-1-wrap">

            <div class="left">
                <!-- section-title -->
                <div class="pf-career-gallery-1-sec-title mb-50">
                    <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                    <h6 class="pf-subtitle-3 has-inner tx-subTitle">
                        <?php echo elh_element_kses_basic( $settings['sub_title'] ); ?>
                        <span class="pf-subtitle-3-line"></span>
                    </h6>
                    <?php endif; ?>
                    <h2 class="pf-sec-title-6  pf-split-2"></h2>
                    <?php
                        if($settings['enable_title'] === 'yes') {
                        $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-6 pf-split-2' );
                            printf('<%1$s %2$s>%3$s</%1$s>',
                                tag_escape($settings['title_tag']),
                                $this->get_render_attribute_string('title'),
                                elh_element_kses_basic( $settings['title'] )
                            );
                        }
                    ?>
                </div>

                <?php if(!empty( $settings['image_1']['url'] )) : ?>
                <div class="pf-career-gallery-1-img-1 wa-img-cover wa-fix">
                    <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
                    alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
                </div>
                <?php endif; ?>
            </div>

            <div class="meddle">
                <?php if(!empty( $settings['image_2']['url'] )) : ?>
                <div class="pf-career-gallery-1-img-2 wa-img-cover wa-fix">
                    <img src="<?php echo esc_url($settings['image_2']['url']); ?>"
                alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''); ?>">
                </div>
                <?php endif; ?>
                <?php if(!empty( $settings['description'] )) : ?>
                <p class="pf-career-gallery-1-disc pf-p-6"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
                <?php endif; ?>
            </div>

            <?php if(!empty( $settings['image_3']['url'] )) : ?>
            <div class="pf-career-gallery-1-big-img wa-fix wa-img-cover">
                <img src="<?php echo esc_url($settings['image_3']['url']); ?>"
            alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_3']['url']) : ''); ?>">
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>