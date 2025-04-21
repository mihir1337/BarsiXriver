<div class="bs-award-1-item wa-fadeInUp">
    <div class="container bs-container-1">
        <div class="bs-award-1-item-wrap">
            <?php if(!empty( $settings['image_1']['url'] )) : ?>
            <div class="item-logo">
                <img src="<?php echo esc_url( $settings['image_1']['url'] ); ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>" />
            </div>
            <?php endif; ?>
            <div class="content-wrap">
                <div class="first-content">
                    <?php if(!empty( $settings['description'] )) : ?>
                    <p class="bs-p-1 item-disc wa-line-limit has-line-2"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
                    <?php endif; ?>

                    <?php if(!empty( $settings['image_2']['url'] )) : ?>
                    <div class="item-img wa-fix wa-img-cover">
                        <img src="<?php echo esc_url( $settings['image_2']['url'] ); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>" />
                    </div>
                    <?php endif; ?>
                </div>
                <div class="secend-content">
                    <?php if(!empty( $settings['image_3']['url'] )) : ?>
                    <div class="project-img">
                        <img src="<?php echo esc_url( $settings['image_3']['url'] ); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_3']['url'] ); } ?>" />
                    </div>
                    <?php endif; ?>
                    <?php if(!empty( $settings['title'] )) : ?>
                    <h4 class="bs-h-1 item-title bs-h-2">
                        <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                        target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>">
                            <?php echo elh_element_kses_intermediate( $settings['title'] ); ?>
                        </a>
                    </h4>
                    <?php endif; ?>

                    <?php if(!empty( $settings['description'] )) : ?>
                    <p class="bs-p-1 item-disc wa-line-limit has-line-2"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <?php if(!empty( $settings['date'] || $settings['date_icon'] )) : ?>
            <p class="bs-p-1 item-date">
                <?php \Elementor\Icons_Manager::render_icon( $settings['date_icon'], ['aria-hidden' => 'true'] );?>
                <?php echo elh_element_kses_intermediate( $settings['date'] ); ?>
            </p>
            <?php endif; ?>
        </div>
    </div>
</div>