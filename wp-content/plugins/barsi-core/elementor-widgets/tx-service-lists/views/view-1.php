<div class="bs-about-1-slider wa-p-relative">
    <div class="swiper-container wa-fix bs-a1-active">
        <div class="swiper-wrapper">
            <!--single-slide -->
            <?php foreach($settings['service_lists'] as $list ) : ?>
            <div class="swiper-slide">
                <div class="bs-about-1-item wa-fix">
                    <?php if(!empty( $list['image_1']['url'] )) : ?>
                    <a href="<?php echo esc_url($list['image_1']['url']); ?>" class="popup-img wa-img-cover">
                        <img src="<?php echo esc_url($list['image_1']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php if( $settings['enable_drag_text'] === 'yes' ) : ?>
    <div class="bs-about-1-slider-drag bs-p-1">
        <?php echo esc_html__('drag', 'barsi-core'); ?>
    </div>
    <?php endif; ?>
</div>