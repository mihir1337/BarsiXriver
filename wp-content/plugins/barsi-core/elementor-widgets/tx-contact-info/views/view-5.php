<section class="bs-core-feature-6-area pt-125 tx-section">
    <div class="container bs-container-1">
        <?php if( $settings['enable_top_border'] === 'yes' ) : ?>
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        <?php endif; ?>
        <div class="bs-core-feature-6-wrap">

            <!-- single-item -->
            <?php foreach( $settings['list_items'] as $list ) : ?>
            <div class="bs-core-feature-4-item wow fadeInRight" >
                <?php if(!empty( $list['info_label'] )) : ?>
                <h4 class="bs-h-4 item-title">
                    <?php echo esc_html( $list['info_label'] ); ?>
                </h4>
                <?php endif; ?>

                <?php if( $list['enable_icon'] === 'yes' ) : ?>
                <div class="item-icon">
                    <?php if( $list['type'] === 'icon' ) : ?>
                        <?php \Elementor\Icons_Manager::render_icon( $list['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    <?php else : ?>
                        <img data-cursor="-opaque" src="<?php echo esc_url( $list['list_image']['url'] ); ?>" alt="<?php echo esc_attr( $list['list_image']['alt'] ); ?>">
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <?php if(!empty( $list['info_text'] )) : ?>
                <p class="bs-p-4 item-disc"><?php echo wp_kses($list['info_text'], true) ?></p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>

        </div>

        <?php if( $settings['enable_bottom_border'] === 'yes' ) : ?>
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        <?php endif; ?>
    </div>
</section>