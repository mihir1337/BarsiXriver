<section class="bs-office-3-area pt-135 wa-p-relative tx-section">
    <div class="container bs-container-1">
        <div class="bs-office-1-left">
            <!-- section-title -->
            <div class="bs-faq-1-sec-title mb-35">
                <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize tx-subTitle">
                    <?php if( $settings['enable_sub_title_icon'] === 'yes' ) : ?>
                    <span class="icon">
                        <?php if( $settings['type'] === 'icon' ) : ?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['sub_title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php else : ?>
                            <img class="wa-fadeInUp" src="<?php echo esc_url( $settings['sub_title_image']['url'] ); ?>" alt="<?php if(function_exists('lawfy_img_alt_text')) { echo lawfy_img_alt_text( $settings['sub_title_image']['url'] ); } ?>">
                            <?php endif; ?>
                    </span>
                    <?php endif; ?>
                    <?php echo elh_element_kses_intermediate($settings['sub_title']); ?>
                </h6>
                <?php
                    endif;
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-3 wa-split-right wa-capitalize' );
                    $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>
                <?php if( $settings['enable_description'] === 'yes' ) : ?>
                <p class="tx-description">
                    <?php echo elh_element_kses_intermediate($settings['description']); ?>
                </p>
                <?php endif; ?>
            </div>

            <!-- card -->

            <?php if( $settings['enable_contact_info'] === 'yes' ) : ?>
            <div class="bs-office-1-item">
                <?php foreach( $settings['list_items'] as $list ) : ?>
                <div class="bs-office-1-card wa-clip-left-right">
                    <?php if( $list['enable_icon'] === 'yes' ) : ?>
                    <div class="card-img wa-fix wa-img-cover">
                        <?php if( $list['type'] === 'icon' ) : ?>
                            <?php \Elementor\Icons_Manager::render_icon( $list['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url( $list['list_image']['url'] ); ?>" alt="<?php echo esc_attr( $list['list_image']['alt'] ); ?>">
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <?php if(!empty( $list['info_heading'] )) : ?>
                    <h5 class="bs-h-1 title">
                        <?php echo esc_html( $list['info_heading'] ); ?>
                    </h5>
                    <?php endif; ?>

                    <?php if(!empty( $list['info_label'] )) : ?>
                    <p class="bs-p-1 disc">
                        <?php echo esc_html( $list['info_label'] ); ?>
                    </p>
                    <?php endif; ?>
                    <div class="bottom-text">
                        <?php echo wp_kses($list['info_text'], true) ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="bs-office-3-line"></div>
    </div>

    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <div class="bs-office-3-bg-img wa-fix">
        <img class="wa-slideInUp" src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    </div>
    <?php endif; ?>
</section>