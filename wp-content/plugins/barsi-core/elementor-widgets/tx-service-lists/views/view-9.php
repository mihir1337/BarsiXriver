<section class="bs-core-feature-4-area pt-80 pb-80 tx-section">
    <?php if( $settings['enable_top_border'] === 'yes' ) : ?>
    <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
    <?php endif; ?>
    <div class="bs-core-feature-4-wrap">
        <!-- single-item -->
        <?php foreach($settings['service_lists'] as $list ) : ?>
        <div class="bs-core-feature-4-item wow fadeInRight" >
            <?php if(!empty( $list['title'] )) : ?>
            <h4 class="bs-h-4 item-title">
                <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                    <?php echo elh_element_kses_intermediate($list['title']); ?>
                </a>
            </h4>
            <?php endif; ?>

            <?php if(!empty( $list['image_1']['url'] )) : ?>
            <div class="item-icon">
                <img data-cursor="-opaque" src="<?php echo esc_url($list['image_1']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
            </div>
            <?php endif; ?>

            <?php if(!empty( $list['description'] )) : ?>
            <p class="bs-p-4 item-disc"><?php echo elh_element_kses_intermediate($list['description']); ?></p>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php if( $settings['enable_bottom_border'] === 'yes' ) : ?>
    <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
    <?php endif; ?>
</section>