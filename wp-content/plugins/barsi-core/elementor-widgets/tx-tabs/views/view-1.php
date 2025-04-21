<?php $rand = rand(0, 9999); ?>
<div class="container bs-container-1">
<div class="bs-projects-1-wrap">
    <div class="bs-projects-1-tabs-btn" role="tablist">
        <?php
            foreach ($settings['txTab_lists'] as $id => $list):
            $is_active = $list['is_active'] == 'yes' ? 'active' : '';
            $aria_selected = $list['is_active'] == 'yes' ? 'true' : 'false';
        ?>
        <button class="nav-link wa-fadeInUp <?php echo esc_attr($is_active); ?>"
        id="projectTab-<?php echo esc_attr($id. '_' .$rand); ?>"
        data-bs-toggle="tab"
        data-bs-target="#tab-<?php echo esc_attr($id. '_' .$rand); ?>"
        type="button"
        role="tab"
        aria-controls="tab-<?php echo esc_attr($id. '_' .$rand); ?>"
        aria-selected="<?php echo esc_attr($aria_selected); ?>" name="Button" aria-label="Button">
            <?php echo elh_element_kses_intermediate($list['title']); ?>

            <?php if(!empty( $list['year'] )) : ?>
            <span class="year"><?php echo elh_element_kses_intermediate($list['year']); ?></span>
            <?php endif; ?>

            <?php if(!empty( $list['image_1']['url'] )) : ?>
            <span class="img">
                <img src="<?php echo esc_url($list['image_1']['url']) ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
            </span>
            <?php endif; ?>

            <?php if(!empty( $list['image_2']['url'] )) : ?>
            <span class="right-arrow">
                <img src="<?php echo esc_url($list['image_2']['url']) ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_2']['url'] ); } ?>">
            </span>
            <?php endif; ?>
        </button>
        <?php endforeach; ?>
    </div>

    <div class="bs-projects-1-tabs-pane tab-content" >
        <?php
            foreach ($settings['txTab_lists'] as $id => $list):
            $is_active = $list['is_active'] == 'yes' ? 'show active' : '';
        ?>
        <div class="tab-pane fade <?php echo esc_attr($is_active); ?>"
            id="tab-<?php echo esc_attr($id. '_' .$rand); ?>"
            role="tabpanel"
            aria-labelledby="projectTab-<?php echo esc_attr($id. '_' .$rand); ?>">
            <div class="bs-projects-1-tabs-item">
                <?php if(!empty( $list['image_3']['url'] )) : ?>
                <div class="main-img wa-img-cover wa-fix">
                    <img data-cursor="-opaque" src="<?php echo esc_url($list['image_3']['url']) ?>"
                    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_3']['url'] ); } ?>">
                </div>
                <?php endif; ?>

                <div class="bs-projects-1-tabs-item-table">
                    <div class="start">
                        <?php if(!empty( $list['info_label_1'] )) : ?>
                        <h6 class="bs-h-1 title">
                            <?php echo elh_element_kses_intermediate($list['info_label_1']); ?>
                        </h6>
                        <?php endif; ?>
                        <div class="wrap">
                            <?php if(!empty( $list['start_date'] )) : ?>
                            <p class="bs-p-1 disc">
                                <?php echo elh_element_kses_intermediate($list['start_date']); ?>
                            </p>
                            <?php endif; ?>

                            <?php if(!empty( $list['end_date'] )) : ?>
                            <p class="bs-p-1 disc">
                                <?php echo elh_element_kses_intermediate($list['end_date']); ?>
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="location">
                        <?php if(!empty( $list['info_label_2'] )) : ?>
                        <h6 class="bs-h-1 title">
                            <?php echo elh_element_kses_intermediate($list['info_label_2']); ?>
                        </h6>
                        <?php endif; ?>

                        <?php if(!empty( $list['location'] )) : ?>
                        <p class="bs-p-1 disc">
                            <?php echo elh_element_kses_intermediate($list['location']); ?>
                        </p>
                        <?php endif; ?>
                    </div>

                    <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
                    <div class="share">
                        <?php if(!empty( $list['social_heading'] )) : ?>
                        <h6 class="bs-h-1 title-2">
                            <?php echo elh_element_kses_intermediate($list['social_heading']); ?>
                        </h6>
                        <?php endif; ?>

                        <div class="bs-social-link-1">
                            <?php foreach( $settings['social_links'] as $list ) : ?>
                            <a aria-label="Social Link" class="item-link" href="<?php echo esc_url($list['social_link']['url']); ?>"
                            target="<?php echo esc_attr( $list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                            rel="<?php echo esc_attr( $list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>">
                                <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div>