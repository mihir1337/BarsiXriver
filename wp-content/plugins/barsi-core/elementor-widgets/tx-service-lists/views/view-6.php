<section class="bs-core-services-2-area wa-bg-default wa-fix" data-background="<?php echo esc_url($settings['image_1']['url']) ? esc_url($settings['image_1']['url']) : ''; ?>">
    <div class="bs-core-services-2-wrap">

        <!-- single-item -->
        <?php foreach($settings['service_lists'] as $list ) : ?>
        <div class="bs-core-services-2-item ">
            <h5 class="bs-h-2 item-title ">
                <span class="wa-split-up wa-capitalize wa-fix">
                    <?php echo elh_element_kses_intermediate($list['title']); ?>
                </span>

                <?php if(!empty( $list['count'] )) : ?>
                <span class="small-text">
                    <?php echo esc_html($list['count']); ?>
                </span>
                <?php endif; ?>
            </h5>
            <div class="content-wrap">
                <h5 class="bs-h-2 item-title">
                    <?php echo elh_element_kses_intermediate($list['title']); ?>

                    <?php if(!empty( $list['count'] )) : ?>
                    <span class="small-text">
                        <?php echo esc_html($list['count']); ?>
                    </span>
                    <?php endif; ?>
                </h5>

                <?php if(!empty( $list['description'] )) : ?>
                <p class="bs-p-1 item-disc">
                    <?php echo elh_element_kses_intermediate($list['description']); ?>
                </p>
                <?php endif; ?>

                <?php if(!empty( $list['button_text'] )) : ?>
                <div class="item-btn">
                    <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                    target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-btn-1">
                        <span class="text">
                            <?php echo elh_element_kses_intermediate($list['button_text']); ?>
                        </span>
                        <span class="shape"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <?php if(!empty( $list['image_1']['url'] )) : ?>
            <div class="item-img wa-fix wa-img-cover">
                <img src="<?php echo esc_url($list['image_1']['url']); ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>