<?php $rand = rand(0, 9999); ?>
<section class="bs-faq-1-area pt-100 pb-80 wa-p-relative tx-section">
    <?php if( !empty( $settings['image_1']['url'] ) ) : ?>
    <div class="bs-faq-1-bg-img wa-img-cover wa-fix">
        <img src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    </div>
    <?php endif; ?>

    <div class="container bs-container-1">
        <!-- section-title -->
        <div class="bs-faq-1-sec-title text-center mb-35">
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
                $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-1 wa-split-right wa-capitalize' );
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

        <!-- tabs-btn -->
        <ul class="bs-faq-1-tabs-btn wa-list-style-none mb-75" role="tablist">
            <?php
                foreach ($settings['txTab_lists'] as $id => $list):
                $is_active = $list['is_active'] == 'yes' ? 'active' : '';
                $aria_selected = $list['is_active'] == 'yes' ? 'true' : 'false';
            ?>
            <li class="nav-item" role="presentation">
                <button class="nav-link <?php echo esc_attr($is_active); ?>"
                    id="projectTab-<?php echo esc_attr($id. '_' .$rand); ?>"
                    data-bs-toggle="tab"
                    data-bs-target="#tab-<?php echo esc_attr($id. '_' .$rand); ?>"
                    type="button"
                    role="tab"
                    aria-controls="tab-<?php echo esc_attr($id. '_' .$rand); ?>"
                    aria-selected="<?php echo esc_attr($aria_selected); ?>" name="Button" aria-label="Button">
                    <?php echo elh_element_kses_intermediate($list['title']); ?>
                </button>
            </li>
            <?php endforeach; ?>
        </ul>
        <!-- tabs-content -->
        <div class="tab-content bs-faq-1-tabs-content">
            <?php
                foreach ($settings['txTab_lists'] as $id => $list):
                $is_active = $list['is_active'] == 'yes' ? 'show active' : '';
            ?>
            <div class="tab-pane fade <?php echo esc_attr($is_active); ?>"
                id="tab-<?php echo esc_attr($id. '_' .$rand); ?>"
                role="tabpanel"
                aria-labelledby="projectTab-<?php echo esc_attr($id. '_' .$rand); ?>">
                <?php echo \ElementHelper::$elementor_instance->frontend->get_builder_content($list['template'], true); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>