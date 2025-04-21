<section class="bs-price-5-area wa-fix pt-135 pb-140 wa-bg-default" data-background="<?php echo esc_url($settings['image_1']['url']) ? esc_url($settings['image_1']['url']) : ''; ?>">
    <div class="container bs-container-2">

        <!-- section-title -->
        <div class="bs-price-5-sec-title text-center mb-50">
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h6 class="bs-subtitle-5 wa-capitalize tx-subTitle">
                <?php if(!empty( $settings['sub_count'] )) : ?>
                <span>
                    <?php echo esc_html($settings['sub_count']); ?>
                </span>
                <?php endif; ?>

                <?php if(!empty( $settings['sub_title'] )) : ?>
                <span class="wa-split-right"><?php echo elh_element_kses_intermediate($settings['sub_title']); ?></span>
                <?php endif; ?>
            </h6>
            <?php endif; ?>
            <?php
                if($settings['enable_title'] === 'yes') {
                $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-4 wa-split-right wa-capitalize' );
                $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                    printf('<%1$s %2$s>%3$s</%1$s>',
                        tag_escape($settings['title_tag']),
                        $this->get_render_attribute_string('title'),
                        elh_element_kses_basic( $settings['title'] )
                    );
                }
            ?>
        </div>

        <div class="bs-price-5-wrap">
            <div class="bs-price-5-left">
                <!-- tabs-btn -->
                <ul class="bs-price-5-tabs-btn wa-list-style-none " role="tablist">
                    <!-- single-btn -->
                    <?php
                        foreach ($settings['pricingTab_lists'] as $id => $list):
                        $is_active = $list['is_active'] == 'yes' ? 'active' : '';
                        $aria_selected = $list['is_active'] == 'yes' ? 'true' : 'false';

                        if ($list['currency'] === 'custom') {
                            $currency = $list['currency_custom'];
                        } else {
                            $currency = self::get_currency_symbol($list['currency']);
                        }
                    ?>
                    <li class="nav-item wa-fadeInUp" role="presentation" data-cursor-text="click">
                        <button class="nav-link bs-price-5-tabs-btn-single <?php echo esc_attr($is_active); ?>"
                        id="pricingTab-<?php echo esc_attr($id. '_' .$rand); ?>"
                        data-bs-toggle="tab"
                        data-bs-target="#tab-<?php echo esc_attr($id. '_' .$rand); ?>"
                        type="button"
                        role="tab"
                        aria-controls="tab-<?php echo esc_attr($id. '_' .$rand); ?>"
                        aria-selected="<?php echo esc_attr($aria_selected); ?>">
                            <span class="check-btn"></span>
                            <span class="content">
                                <?php if(!empty( $list['tab_title'] )) : ?>
                                <h6 class="bs-h-4 title"><?php echo elh_element_kses_intermediate($list['tab_title']); ?></h6>
                                <?php endif; ?>

                                <?php if(!empty( $list['tab_description'] )) : ?>
                                <p class="bs-p-4 disc"><?php echo elh_element_kses_intermediate($list['tab_description']); ?></p>
                                <?php endif; ?>
                            </span>
                            <?php if(!empty( $list['tab_image']['url'] )) : ?>
                            <span class="btn-img">
                                <img src="<?php echo esc_url($list['tab_image']['url']); ?>"
                                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['tab_image']['url'] ); } ?>">
                            </span>
                            <?php endif; ?>
                        </button>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <?php if( $settings['enable_description'] === 'yes' ) : ?>
                <p class="bs-p-4 bs-price-5-left-disc wa-fadeInUp tx-description">
                    <?php echo elh_element_kses_intermediate($settings['description']); ?>
                </p>
                <?php endif; ?>
            </div>

            <div class="tab-content bs-price-5-tabs-pane wa-fadeInUp" >
                <!-- single-pane -->
                <?php
                    foreach ($settings['pricingTab_lists'] as $id => $list):
                    $is_active = $list['is_active'] == 'yes' ? 'show active' : '';
                ?>
                <div class="tab-pane fadeInUp animated fade bs-price-5-tabs-pane-single <?php echo esc_attr($is_active); ?>"
                    id="tab-<?php echo esc_attr($id. '_' .$rand); ?>"
                    role="tabpanel"
                    aria-labelledby="pricingTab-<?php echo esc_attr($id. '_' .$rand); ?>">
                    <div class="box-border">

                        <?php if(!empty( $list['tab_title'] )) : ?>
                        <h5 class="bs-h-4 title"><?php echo elh_element_kses_intermediate($list['tab_title']); ?></h5>
                        <?php endif; ?>

                        <h6 class="bs-h-4 item-price ">
                            <span class="dollar"><?php echo esc_html($currency); ?></span>

                            <?php if(!empty( $list['price'] )) : ?>
                            <span class="price"><?php echo esc_html($list['price']); ?></span>
                            <?php endif; ?>

                            <?php if(!empty( $list['period'] )) : ?>
                            <span class="time"><?php echo esc_html($list['period']); ?></span>
                            <?php endif; ?>
                        </h6>

                        <div class="line"></div>

                        <?php if( $list['enable_feature_lists'] === 'yes' ) : ?>
                        <ul class="wa-list-style-none feature-list">
                            <?php
                                $list_item = $list['price_feature_lists'];
                                $list_item = explode("\n", ($list_item));
                                foreach($list_item as $feature_list):
                            ?>
                            <li class="bs-p-4">
                                <?php \Elementor\Icons_Manager::render_icon( $list['price_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                <?php echo wp_kses($feature_list, true)?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>

                        <?php if(!empty( $list['price_content_button_text'] )) : ?>
                        <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                        target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-pr-btn-3 price-btn">
                            <span class="text"><?php echo elh_element_kses_intermediate($list['button_text']); ?></span>
                            <span class="text"><?php echo elh_element_kses_intermediate($list['button_text']); ?></span>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>