<section class="bs-core-features-1-area pt-120 tx-section">
    <div class="container bs-container-1">
        <div class="bs-core-features-1-wrap">
            <?php foreach($settings['service_lists'] as $list ) : ?>
            <div class="bs-core-features-1-item">
                <?php if(!empty( $list['image_1']['url'] )) : ?>
                <div class="icon">
                    <img src="<?php echo esc_url($list['image_1']['url']); ?>"
                    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
                </div>
                <?php endif; ?>
                <div class="content">
                    <?php if(!empty( $list['title'] )) : ?>
                    <h5 class="bs-h-1 item-title">
                        <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                            target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                            rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
                            <?php echo elh_element_kses_intermediate($list['title']); ?>
                        </a>
                    </h5>
                    <?php endif; ?>

                    <?php if(!empty( $list['sub_title'] )) : ?>
                    <p class="bs-p-1 item-disc"><?php echo elh_element_kses_intermediate($list['sub_title']); ?></p>
                    <?php endif; ?>
                </div>

            </div>
            <?php if(!empty( $list['image_2']['url'] )) : ?>
            <div class="shape">
                <img src="<?php echo esc_url($list['image_2']['url']); ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_2']['url'] ); } ?>">
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>