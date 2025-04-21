<div class="pf-process-3-area pt-145 pb-150 tx-section">
    <div class="container pf-container-1">

        <!-- section-title -->
        <div class="pf-process-3-sec-title mb-50">
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h6 class="pf-subtitle-3 has-inner tx-subTitle">
                <?php echo elh_element_kses_basic( $settings['sub_title'] ); ?>
                <span class="pf-subtitle-3-line"></span>
            </h6>
            <?php endif; ?>
            <?php
                if($settings['enable_title'] === 'yes') {
                $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-6  pf-split-2' );
                    printf('<%1$s %2$s>%3$s</%1$s>',
                        tag_escape($settings['title_tag']),
                        $this->get_render_attribute_string('title'),
                        elh_element_kses_basic( $settings['title'] )
                    );
                }
            ?>
        </div>

        <div class="pf-process-3-wrap">
            <?php if(!empty( $settings['image_1']['url'] )) : ?>
            <div class="pf-process-3-img wa-fix wa-img-cover">
                <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
                alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
            </div>
            <?php endif; ?>


            <?php if( $settings['enable_feature_lists'] === 'yes' ) : ?>
            <div class="pf-process-3-item">
                <?php foreach($settings['feature_lists'] as $list ) : ?>
                <div class="pf-process-3-item-single wow fadeInUp">
                    <?php if(!empty( $list['feature_count'] )) : ?>
                    <h5 class="item-number pf-h5 text-uppercase">
                        <?php echo elh_element_kses_intermediate( $list['feature_count'] ); ?>
                    </h5>
                    <?php endif; ?>

                    <?php if(!empty( $list['feature_title'] )) : ?>
                    <h6 class="item-title pf-h-4 text-uppercase">
                        <a
                            href="<?php echo esc_url($list['button_link']['url']); ?>"
                            target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                            rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
                            aria-label="name">
                            <?php echo elh_element_kses_intermediate( $list['feature_title'] ); ?>
                        </a>
                    </h6>
                    <?php endif; ?>

                    <?php if(!empty( $list['feature_description'] )) : ?>
                    <p class="item-disc pf-p-6">
                        <?php echo elh_element_kses_intermediate( $list['feature_description'] ); ?>
                    </p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if(!empty( $settings['image_2']['url'] )) : ?>
            <div class="pf-process-3-img-2 wa-fix wa-img-cover">
                <img src="<?php echo esc_url($settings['image_2']['url']); ?>"
            alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''); ?>">
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>