<div class="pf-client-5-area">
    <div class="pf-client-5-shadow ">
        <div class="pf-client-5-mask">
            <div class="pf-client-5-slider">
                <div class="swiper-container pf-c5-slider wa-fix">
                    <div class="swiper-wrapper">
                        <?php foreach ( $settings['brands_image'] as $key => $brand ) :
                            if (!empty($brand['url'])) {
                                $brand_image = $brand['url'];
                            }

                            // alt
                            if (!empty($brand['alt'])) {
                                $brand_alt = $brand['alt'];
                            } else {
                                $brand_alt = '';
                            }
                        ?>
                        <div class="swiper-slide">
                            <div class="pf-client-5-slider-item">
                                <div class="pf-client-1-logo has-ver-2">
                                    <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
                                    <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pf-client-5-content">
        <div class="pf-client-5-content-wrap">
            <?php if( $settings['enable_slider_pagination'] === 'yes' ) : ?>
            <div class="pf-hero-5-slider-btn pf-c5-prev">
                <i data-feather="chevron-left"></i>
            </div>
            <?php endif; ?>

            <?php if(!empty( $settings['short_info'] )) : ?>
            <h6 class="pf-h-1 title wa-line-limit has-line-2">
                <?php echo esc_html( $settings['short_info'] ); ?>
            </h6>
            <?php endif; ?>

            <?php if( $settings['enable_slider_pagination'] === 'yes' ) : ?>
            <div class="pf-hero-5-slider-btn pf-c5-next">
                <i data-feather="chevron-right"></i>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>