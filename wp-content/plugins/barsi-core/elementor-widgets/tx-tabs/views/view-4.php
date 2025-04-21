<?php $rand = rand(0, 9999); ?>
<section class="bs-work-1-area wa-p-relative" data-background="<?php echo esc_url($settings['image_1']['url']) ? esc_url($settings['image_1']['url']) : ''; ?>">
    <div class="container bs-container-1">
        <div class="bs-work-1-wrap">
            <!-- left-btn -->
            <ul class="bs-work-1-tabs-btn wa-list-style-none" role="tablist">
                <?php
                    foreach ($settings['txTab_lists'] as $id => $list):
                    $is_active = $list['is_active'] == 'yes' ? 'active' : '';
                    $aria_selected = $list['is_active'] == 'yes' ? 'true' : 'false';
                ?>
                <button class="nav-link bs-h-1 wa-fadeInUp <?php echo esc_attr($is_active); ?>"
                    id="projectTab-<?php echo esc_attr($id. '_' .$rand); ?>"
                    data-bs-toggle="tab"
                    data-bs-target="#tab-<?php echo esc_attr($id. '_' .$rand); ?>"
                    type="button"
                    role="tab"
                    aria-controls="tab-<?php echo esc_attr($id. '_' .$rand); ?>"
                    aria-selected="<?php echo esc_attr($aria_selected); ?>" name="Button" aria-label="Button">
                    <?php if(!empty( $list['count'] )) : ?>
                    <span class="number">
                        <?php echo esc_html($list['count']); ?>
                    </span>
                    <?php endif; ?>

                    <?php echo elh_element_kses_intermediate($list['title']); ?>
                    <span class="line"></span>
                </button>
                <?php endforeach; ?>
            </ul>

            <!-- right-content -->
            <div class="tab-content  bs-work-1-tabs-item">
                <?php
                    foreach ($settings['txTab_lists'] as $id => $list):
                    $is_active = $list['is_active'] == 'yes' ? 'show active' : '';
                ?>
                <div class="tab-pane fade <?php echo esc_attr($is_active); ?>"
                    id="tab-<?php echo esc_attr($id. '_' .$rand); ?>"
                    role="tabpanel"
                    aria-labelledby="projectTab-<?php echo esc_attr($id. '_' .$rand); ?>">
                    <div class="bs-work-1-tabs-item-single">
                        <?php if(!empty( $list['image_1']['url'] )) : ?>
                        <div class="item-img wa-fix wa-img-cover" data-cursor="-opaque">
                            <img src="<?php echo esc_url($list['image_1']['url']) ?>"
                            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
                        </div>
                        <?php endif; ?>

                        <?php if(!empty( $list['content'] )) : ?>
                        <p class="bs-p-1 item-disc">
                            <?php echo elh_element_kses_intermediate($list['content']); ?>
                        </p>
                        <?php endif; ?>

                        <?php if( $list['enable_button'] === 'yes' ) : ?>
                        <div class="item-btn">
                            <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                            target="<?php echo esc_attr( $list['button_link']['is_external'] ? '_blank' : '_self' ); ?>"
                            rel="<?php echo esc_attr( $list['button_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name" class="bs-btn-1">
                                <span class="text">
                                    <?php echo elh_element_kses_intermediate($list['button_text']); ?>
                                </span>
                                <span class="shape" ></span>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php if(!empty( $settings['image_2']['url'] )) : ?>
    <div class="bs-work-1-bg-img wa-fix">
        <img class="wa-slideInUp" src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
    </div>
    <?php endif; ?>
</section>