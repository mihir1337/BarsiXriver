<section class="bs-counter-2-area pt-150 pb-50 tx-section">
    <div class="container bs-container-1">
        <div class="bs-counter-2-wrap">
            <?php foreach($settings['count_boxs'] as $list) : ?>
            <div class="bs-counter-2-item">
                <?php if(!empty( $list['count_number'] )) : ?>
                <h4 class="bs-h-2 item-number counter wa-counter" data-cursor="-opaque">
                    <?php echo esc_html($list['count_number']); ?>
                </h4>
                <?php endif; ?>

                <?php if(!empty( $list['count_title'] )) : ?>
                <p class="item-disc bs-p-1">
                    <?php echo esc_html($list['count_title']); ?>
                </p>
                <?php endif; ?>
            </div>

            <?php if(!empty( $list['count_prefix'] )) : ?>
            <h6 class="bs-h-2 shape">
                <?php echo esc_html($list['count_prefix']); ?>
            </h6>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>