<div class="pf-award-1-area  pt-145 pb-150 wa-p-relative tx-section">
    <div class="container fx-container-1">
        <div class="pf-award-1-wrap">
            <div class="pf-award-1-sec-title mb-50 ">
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

            <?php if( $settings['enable_feature_lists'] === 'yes' ) : ?>
            <div class="pf-award-1-item">
                <?php foreach($settings['feature_lists'] as $list ) : ?>
                <div class="pf-award-1-item-single wow fadeInUp">
                    <div class="content">
                        <?php if(!empty( $list['feature_title'] )) : ?>
                        <h4 class="item-title pf-h-5"><?php echo elh_element_kses_intermediate( $list['feature_title'] ); ?></h4>
                        <?php endif; ?>

                        <?php if(!empty( $list['feature_description'] )) : ?>
                        <p class="item-disc pf-p-6">
                            <?php echo elh_element_kses_intermediate( $list['feature_description'] ); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <?php if(!empty( $list['feature_count'] )) : ?>
                    <h6 class="item-date pf-h-5">
                        <?php echo elh_element_kses_intermediate( $list['feature_count'] ); ?>
                    </h6>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <div class="pf-award-1-bg-img  ">
        <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
        alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
    </div>
    <?php endif; ?>
</div>