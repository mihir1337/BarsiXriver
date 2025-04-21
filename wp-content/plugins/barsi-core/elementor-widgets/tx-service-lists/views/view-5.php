<div class="container bs-container-1">
<div class="bs-property-1-wrap">
    <?php foreach($settings['service_lists'] as $list ) : ?>
    <div class="bs-property-1-item wa-3dUp">
        <div class="item-content">
            <?php if(!empty( $list['sub_title'] )) : ?>
            <p class="bs-p-1 item-date"><?php echo elh_element_kses_intermediate($list['sub_title']); ?></p>
            <?php endif; ?>

            <?php if(!empty( $list['title'] )) : ?>
            <h4 class="bs-h-2 item-title">
                <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                        target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                    <?php echo elh_element_kses_intermediate($list['title']); ?>
                </a>
            </h4>
            <?php endif; ?>

            <?php if(!empty( $list['button_text'] )) : ?>
            <a href="<?php echo esc_url($list['button_link']['url']); ?>"
            target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
            rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-btn-1">
                <span class="text">
                    <?php echo elh_element_kses_intermediate($list['button_text']); ?>
                </span>
                <span class="shape"></span>
            </a>
            <?php endif; ?>
        </div>
        <div class="img-wrap wa-p-relative">
            <h5 class="bs-h-2 item-meta">
                <?php if(!empty( $list['info_text'] )) : ?>
                <span>
                    <?php echo esc_html($list['info_text']); ?>
                </span>
                <?php endif; ?>

                <?php if(!empty( $list['info_date'] )) : ?>
                <span>
                    <?php echo esc_html($list['info_date']); ?>
                </span>
                <?php endif; ?>
            </h5>

            <?php if(!empty( $list['image_1']['url'] )) : ?>
            <div class="item-img wa-fix wa-img-cover">
                <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                    target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name"
                    data-cursor-text="<?php echo esc_attr__('View', 'barsi-core'); ?>">
                    <img src="<?php echo esc_url($list['image_1']['url']); ?>"
                    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
                </a>
            </div>
            <?php endif; ?>

            <?php if(!empty( $list['image_2']['url'] )) : ?>
            <div class="item-img wa-fix wa-img-cover">
                <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name"
                data-cursor-text="<?php echo esc_attr__('View', 'barsi-core'); ?>">
                    <img src="<?php echo esc_url($list['image_2']['url']); ?>"
                    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_2']['url'] ); } ?>">
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>