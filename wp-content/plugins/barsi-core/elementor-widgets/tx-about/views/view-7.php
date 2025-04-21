<div class="pf-counter-5-area pb-180 tx-section">
    <div class="pf-counter-5-container wa-p-relative">
        <?php if(!empty( $settings['image_1']['url'] )) : ?>
        <div class="illus-1 item-parallax">
            <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
            alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
        </div>
        <?php endif; ?>

        <?php if(!empty( $settings['image_2']['url'] )) : ?>
        <div class="illus-2 item-parallax">
            <img src="<?php echo esc_url($settings['image_2']['url']); ?>"
            alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''); ?>">
        </div>
        <?php endif; ?>

        <!-- section-title -->
        <div class="pf-counter-5-sce-title text-center">
            <?php if(!empty( $settings['sub_title'] )) : ?>
            <h6 class="pf-subtitle-5 tx-subTitle"><?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?></h6>
            <?php endif; ?>
            <?php
                if($settings['enable_title'] === 'yes') {
                $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-5 has-fs-45 pf-split-2' );
                    printf('<%1$s %2$s>%3$s</%1$s>',
                        tag_escape($settings['title_tag']),
                        $this->get_render_attribute_string('title'),
                        elh_element_kses_basic( $settings['title'] )
                    );
                }
            ?>
            <?php if( $settings['enable_description'] === 'yes' ) : ?>
            <p class="tx-description pf-p-5 sec-disc"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
            <?php endif; ?>
        </div>

        <?php if( $settings['enable_count_box'] === 'yes' ) : ?>
        <div class="pf-counter-1 pf-counter-5-counter mb-75 wow fadeInUp" >
            <?php foreach($settings['count_boxs'] as $id => $list ) : ?>
            <div class="pf-counter-1-item ">
                <h5 class="pf-counter-1-item-number pf-h-1">
                 <span class="counter">
                    <?php echo esc_html($list['count_number']); ?></span><span class="text"><?php echo esc_html($list['count_prefix']); ?></span>
                </h5>
                <?php if(!empty( $list['count_title'] )) : ?>
                <p class="pf-counter-1-item-disc pf-p-1 tx-count-title"><?php echo elh_element_kses_basic( $list['count_title'] ); ?></p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>

    <div class="pf-counter-5-bottom wa-p-relative">
        <?php if( $settings['enable_button'] === 'yes' ) : ?>
        <div class="pf-counter-5-roted-btn">
            <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
            target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
            rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
            aria-label="name" class="pf-rotated-btn-2">
                <?php if(!empty( $settings['button_image_2']['url'] )) : ?>
                <img src="<?php echo esc_url($settings['button_image_2']['url']); ?>"
                alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['button_image_2']['url']) : ''); ?>">
                <?php endif; ?>

                <?php if(!empty( $settings['button_icon'] )) : ?>
                <span class="icon">
                    <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
                </span>
                <?php endif; ?>
            </a>
        </div>
        <?php endif; ?>

        <?php if(!empty( $settings['image_3']['url'] )) : ?>
        <div class="pf-counter-5-line">
            <img src="<?php echo esc_url($settings['image_3']['url']); ?>"
            alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_3']['url']) : ''); ?>">
        </div>
        <?php endif; ?>

        <?php if(!empty( $settings['image_4']['url'] )) : ?>
        <div class="illus-1">
            <img src="<?php echo esc_url($settings['image_4']['url']); ?>"
            alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_4']['url']) : ''); ?>">
        </div>
        <?php endif; ?>

        <?php if(!empty( $settings['image_5']['url'] )) : ?>
        <div class="illus-2">
            <img src="<?php echo esc_url($settings['image_5']['url']); ?>"
            alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_5']['url']) : ''); ?>">
        </div>
        <?php endif; ?>

        <?php if(!empty( $settings['image_6']['url'] )) : ?>
        <div class="illus-3">
            <img src="<?php echo esc_url($settings['image_6']['url']); ?>"
            alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_6']['url']) : ''); ?>">
        </div>
        <?php endif; ?>
    </div>
</div>