<?php $rand = rand( 1, 1000 ); ?>
<div class="bs-accordion bs-career-offer-accordion" id="accordionExample_<?php echo esc_attr($rand); ?>">

    <!-- single-team -->
    <?php
        foreach ( $settings['faq_lists'] as $id => $list ):
        $is_active = $list['is_active'] == 'yes' ? 'active' : '';
        $show = $list['is_active'] == 'yes' ? 'show' : '';
        $aria_expanded = $list['is_active'] == 'yes' ? 'true' : 'false';
        $collapsed = $list['is_active'] == 'yes' ? '' : 'collapsed';
    ?>
    <div class="bs-accordion-item wa-fadeInUp <?php echo esc_attr($is_active) ?>">
        <div class="item-header" id="heading-<?php echo esc_attr($rand . '-' . $id); ?>">
            <button class="item-title bs-h-1 <?php echo esc_attr($collapsed); ?>"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapse-<?php echo esc_attr($rand . '-' . $id); ?>"
            aria-expanded="<?php echo esc_attr($aria_expanded); ?>"
            aria-controls="collapse-<?php echo esc_attr($rand . '-' . $id); ?>">
                <?php echo elh_element_kses_intermediate($list['title']); ?>
                <span class="icon">
                    <i class="fa-solid fa-arrow-down"></i>
                </span>
            </button>
        </div>
        <div id="collapse-<?php echo esc_attr($rand . '-' . $id); ?>"
        class="accordion-collapse collapse <?php echo esc_attr($show); ?>"
        aria-labelledby="heading-<?php echo esc_attr($rand . '-' . $id); ?>"
        data-bs-parent="#accordionExample_<?php echo esc_attr($rand); ?>">
            <div class="item-body ">
                <ul class="item-list wa-list-style-none">
                    <?php if(!empty( $list['location_label'] || $list['location_text'] )) : ?>
                    <li class="bs-p-4">
                        <?php if(!empty( $list['location_label'] )) : ?>
                        <span><?php echo esc_html($list['location_label']); ?></span>
                        <?php endif; ?>
                        <?php echo esc_html($list['location_text']); ?>
                    </li>
                    <?php endif; ?>

                    <?php if(!empty( $list['experience_label'] || $list['experience_text'] )) : ?>
                    <li class="bs-p-4">
                        <?php if(!empty( $list['experience_label'] )) : ?>
                        <span><?php echo esc_html($list['experience_label']); ?></span>
                        <?php endif; ?>
                        <?php echo esc_html($list['experience_text']); ?>
                    </li>
                    <?php endif; ?>
                </ul>
                <?php if(!empty( $list['content'] )) : ?>
                <p class="bs-p-1 disc">
                    <?php echo elh_element_kses_intermediate($list['content']); ?>
                </p>
                <?php endif; ?>
                <div class="item-btn">
                    <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                    target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-btn-1">
                        <span class="text">
                            <?php echo esc_html($list['button_text']); ?>
                        </span>
                        <?php if(!empty( $list['button_icon'] )) : ?>
                        <span class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $list['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            <?php \Elementor\Icons_Manager::render_icon( $list['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </span>
                        <?php endif; ?>
                        <span class="shape" ></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>