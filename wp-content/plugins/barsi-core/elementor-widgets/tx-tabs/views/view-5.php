<?php $rand = rand(0, 9999); ?>
<section class="bs-projects-3-area wa-fix">
    <div class="container bs-container-1">
        <div class="bs-projects-3-content mb-75">

            <!-- section-title -->
            <div class="bs-projects-3-sec-title">
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
                <?php endif; ?>
                <?php
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-3  wa-split-right wa-capitalize' );
                    $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>
            </div>

            <ul class="bs-projects-3-tabs-btn wa-list-style-none wa-fadeInRight" role="tablist">
                <?php
                    foreach ($settings['txTab_lists'] as $id => $list):
                    $is_active = $list['is_active'] == 'yes' ? 'active' : '';
                    $aria_selected = $list['is_active'] == 'yes' ? 'true' : 'false';
                ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bas-h-2 <?php echo esc_attr($is_active); ?>"
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

            <?php if( $settings['enable_description'] === 'yes' ) : ?>
            <p class="bs-p-3 disc wa-fadeInRight">
                <?php echo elh_element_kses_intermediate($settings['description']); ?>
            </p>
            <?php endif; ?>
        </div>

        <div class="tab-content bs-projects-3-tabs-pane mb-65 wa-fadeInUp" >
            <?php
                foreach ($settings['txTab_lists'] as $id => $list):
                $is_active = $list['is_active'] == 'yes' ? 'show active' : '';
            ?>
            <div class="tab-pane fade animated fadeInUp <?php echo esc_attr($is_active); ?>"
            id="tab-<?php echo esc_attr($id. '_' .$rand); ?>"
            role="tabpanel"
            aria-labelledby="projectTab-<?php echo esc_attr($id. '_' .$rand); ?>">
                <?php echo \ElementHelper::$elementor_instance->frontend->get_builder_content($list['template'], true); ?>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if( $settings['enable_pagination'] === 'yes' ) : ?>
        <div class="bs-projects-3-slider-pagi bs-pagination-1 bs-p3-pagi wa-fadeInUp"></div>
        <?php endif; ?>
    </div>
</section>