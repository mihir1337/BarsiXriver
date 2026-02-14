<section class="bs-core-feature-5-area">
    <div class="container bs-container-2">
        <?php if( $settings['enable_top_border'] === 'yes' ) : ?>
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        <?php endif; ?>

        <div class="bs-core-feature-4-wrap has-5">
            <!-- single-item -->
            <?php foreach($settings['count_boxs'] as $list) : ?>
            <div class="bs-core-feature-4-item wow fadeInRight tx-count">
                <?php if(!empty( $list['count_title'] )) : ?>
                <h4 class="bs-h-4 item-title tx-title">
                    <?php echo esc_html($list['count_title']); ?>
                </h4>
                <?php endif; ?>

                <?php if(!empty( $list['count_number'] || $list['count_prefix'] )) : ?>
                <h5 class="bs-h-4 item-counter tx-counter" data-cursor="-opaque">
                    <span class="counter wa-counter"><?php echo esc_html($list['count_number']); ?></span>
                    <?php echo esc_html($list['count_prefix']); ?>
                </h5>
                <?php endif; ?>

                <?php if(!empty( $list['count_description'] )) : ?>
                <p class="bs-p-4 item-disc">
                    <?php echo esc_html($list['count_description']); ?>
                </p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if( $settings['enable_bottom_border'] === 'yes' ) : ?>
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        <?php endif; ?>
    </div>
</section>