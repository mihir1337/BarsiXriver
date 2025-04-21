<section class="breadcrumb-area has-career-page wa-p-relative">
    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <div class="breadcrumb-bg-img wa-fix wa-img-cover">
        <img class="wa-parallax-img" src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    </div>
    <?php endif; ?>

    <div class="container bs-container-1">
        <div class="breadcrumb-wrap">
            <div class="left">
                <?php
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title breadcrumb-title wa-split-right wa-capitalize' );
                    $this->add_render_attribute( 'title', 'data-split-delay', '1.1s' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>
                <?php if( $settings['enable_description'] === 'yes' ) : ?>
                <p class="bs-p-4 disc"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                <?php endif; ?>

                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-btn-1 tx-button">
                    <span class="text">
                        <?php echo elh_element_kses_intermediate( $settings['button_text'] ); ?>
                    </span>
                    <?php if(!empty( $settings['enable_button_icon'] === 'yes' )) : ?>
                    <span class="icon">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] );?>
                    </span>
                    <?php endif; ?>
                    <span class="shape"></span>
                </a>
                <?php endif; ?>

                <?php if(!empty( $settings['image_2']['url'] )) : ?>
                <div class="sm-img wa-img-cover wa-fix">
                    <img src="<?php echo esc_url($settings['image_2']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
                </div>
                <?php endif; ?>
            </div>

            <?php if(!empty( $settings['image_3']['url'] )) : ?>
            <div class="big-img wa-img-cover wa-fix">
                <img src="<?php echo esc_url($settings['image_3']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_3']['url'] ); } ?>">
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>