<div class="pf-pricing-1-card p-relative">
    <?php if(!empty( $settings['pricing_title'] )) : ?>
    <h3 class="card-title pf-h-5"><?php echo elh_element_kses_intermediate( $settings['pricing_title']); ?></h3>
    <?php endif; ?>

    <?php if(!empty( $settings['pricing_description'] )) : ?>
    <p class="card-disc pf-p-6"><?php echo elh_element_kses_intermediate( $settings['pricing_description']); ?></p>
    <?php endif; ?>

    <h2 class="pf-h-5 card-price">
        <span><?php echo esc_html($currency . $settings['price']); ?></span><span><?php echo elh_element_kses_intermediate( $settings['period']); ?></span>
    </h2>

    <div class="hr-line"></div>

    <ul class="price-feature list-unstyled">
        <?php foreach($settings['package_feature_lists'] as $list ) :
            if($list['is_active'] === 'yes') {
                $class = '';
            } else {
                $class = 'not-active';
            }
        ?>
        <li class="<?php echo esc_attr($class); ?>">
            <?php if(!empty(  $list['package_feature_icon'] )) : ?>
            <span class="icon">
                <?php \Elementor\Icons_Manager::render_icon( $list['package_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?>
            </span>
            <?php endif; ?>
            <?php echo elh_element_kses_intermediate( $list['package_feature_title']); ?>
        </li>
        <?php endforeach; ?>
    </ul>

    <?php if(!empty( $settings['button_text'] )) : ?>
    <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
        target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
        rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="pf-pr-6 card-btn tx-button">
        <?php if(!empty( $settings['button_text'] )) : ?>
        <span class="text"
            data-back="<?php echo esc_attr( $settings['button_text'] ); ?>"
            data-front="<?php echo esc_attr( $settings['button_text'] ); ?>">
        </span>
        <?php endif; ?>

        <?php if(!empty( $settings['button_icon'] )) : ?>
        <span class="icon">
            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
            <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
        </span>
        <?php endif; ?>
    </a>
    <?php endif; ?>
</div>