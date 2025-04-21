<div class="pf-touch-1-area wa-p-relative">
    <div class="container pf-container-1">
        <div class="pf-touch-1-content">
            <div class="pf-touch-1-sec-title mb-70">
                <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                <h5 class="pf-subtitle-1 tx-subTitle"><?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?></h5>
                <?php
                endif;
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-1 has-opa-80 pf-split-2' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                if( $settings['enable_description'] === 'yes' ) : ?>
                <p class="pf-p-1 sec-disc tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                <?php endif; ?>
            </div>

            <?php if( $settings['enable_contact_info'] === 'yes' ) : ?>
            <div class="pf-touch-1-address mb-45">
                <?php foreach($settings['list_items'] as $list) : ?>
                <div class="pf-touch-1-address-box">
                    <?php if(!empty( $list['info_heading'] )) : ?>
                    <h6 class="pf-h-1 box-title"><?php echo elh_element_kses_intermediate( $list['info_heading'] ); ?></h6>
                    <?php endif;
                    if(!empty( $list['info_label'] )) : ?>
                    <div class="pf-p-1 box-disc">
                        <?php echo wp_kses( $list['info_label'], true ); ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if( $settings['enable_button'] === 'yes' ) : ?>
            <div class="pf-touch-1-btn">
                <a class="tx-button pf-pr-1" href="<?php echo esc_url($settings['button_link']['url']); ?>"
                target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>">
                    <?php
                        echo elh_element_kses_intermediate( $settings['button_text'] );
                        if($settings['enable_button_icon'] === 'yes') {
                            \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] );
                        }
                    ?>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <div class="pf-touch-1-shape">
        <img src="<?php echo esc_url($settings['image_1']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    </div>
    <?php endif; ?>

    <?php if(!empty( $settings['image_2']['url'] )) : ?>
    <div class="pf-touch-1-glow">
        <img class="wa-scale-0" src="<?php echo esc_url($settings['image_2']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
    </div>
    <?php endif; ?>

    <?php if(!empty( $settings['image_3']['url'] )) : ?>
    <div class="pf-touch-1-glow-2">
        <img class="wa-scale-0" src="<?php echo esc_url($settings['image_3']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_3']['url'] ); } ?>">
    </div>
    <?php endif; ?>
</div>