<section class="bs-hero-3-area wa-fix wa-p-relative">
    <!-- main-content -->
    <div class="container bs-container-1">
        <div class="bs-hero-3-wrap">
            <!-- left-content -->
            <div class="bs-hero-3-content">
                <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                <h6 class="bs-subtitle-1 bs-hero-3-subtitle wa-split-clr wa-capitalize" data-split-delay="1s">
                    <?php if(!empty( $settings['image_1']['url'] )) : ?>
                    <span class="icon">
                        <img src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''; ?>">
                    </span>
                    <?php endif; ?>
                    <?php echo elh_element_kses_basic($settings['sub_title']); ?>
                </h6>
                <?php endif; ?>
                <?php
                    if($settings['enable_title'] === 'yes') {
                        $this->add_render_attribute( 'title', 'class', 'tx-title bs-h-2 bs-hero-3-title wa-split-clr wa-capitalize' );
                        $this->add_render_attribute( 'title', 'data-split-delay', '1s' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>

                <?php if( $settings['enable_description'] === 'yes' ) : ?>
                <p class="bs-p-3 bs-hero-3-disc wow fadeInUp"><?php echo elh_element_kses_basic($settings['description']); ?></p>
                <?php endif; ?>

                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <div class="bs-hero-3-btn wow fadeInUp">
                    <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                    target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
                    aria-label="name" class="bs-btn-1 text-capitalize tx-button">
                        <span class="text">
                            <?php echo esc_attr($settings['button_text']); ?>
                        </span>

                        <?php if( $settings['enable_button_icon'] === 'yes' ) : ?>
                        <span class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </span>
                        <?php endif; ?>
                        <span class="shape"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <!-- right -->
            <?php if(!empty( $settings['image_2']['url'] )) : ?>
            <div class="bs-hero-3-img wa-img-cover wa-fix">
                <img src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''; ?>">
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- contact-info -->
    <div class="bs-hero-3-contact">
        <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
        <div class="bs-hero-3-contact-box">
            <div class="bs-hero-3-contact-social">
                <?php foreach( $settings['social_links'] as $list ) : ?>
                <a aria-label="Social Link" class="elm-link wa-magnetic-btn" href="<?php echo esc_url($list['social_link']['url']); ?>"
                target="<?php echo esc_attr( $list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                rel="<?php echo esc_attr( $list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>">
                    <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if(!empty( $settings['contact_info_text'] )) : ?>
        <div class="bs-hero-3-contact-box">
            <a href="<?php echo esc_url($settings['contact_info_link']['url']); ?>"
            target="<?php echo esc_attr( $settings['contact_info_link']['is_external'] ? '_blank' : '_self' ); ?>"
            rel="<?php echo esc_attr( $settings['contact_info_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name" class="bs-hero-3-contact-mail wa-magnetic-btn">
                <?php \Elementor\Icons_Manager::render_icon( $settings['contact_info_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <?php echo esc_html($settings['contact_info_text']); ?>
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>