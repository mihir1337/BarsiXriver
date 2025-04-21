<div class="bs-services-details-slider">
    <!-- left-slider -->
    <div class="bs-services-details-slider-1 wa-fix">
        <div class="swiper-container wa-fix bs-sd-slider-1-active">
            <div class="swiper-wrapper">
                <?php foreach($settings['gallery_images'] as $list) : ?>
                <div class="swiper-slide">
                    <div class="bs-services-details-slider-1-img wa-fix wa-img-cover">
                        <img src="<?php echo esc_url($list['image']['url']); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image']['url'] ); } ?>">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- right-slider -->
    <div class="bs-services-details-slider-2 wa-fix">
        <div class="swiper-container wa-fix bs-sd-slider-1-active">
            <div class="swiper-wrapper">
                <?php foreach($settings['gallery_images_2'] as $list) : ?>
                <div class="swiper-slide">
                    <div class="bs-services-details-slider-1-img wa-fix wa-img-cover">
                        <img src="<?php echo esc_url($list['image']['url']); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image']['url'] ); } ?>">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="bs-services-details-slider-btn-posi">
        <div class="container bs-container-1">
            <div class="bs-services-details-slider-btn-flex">
                <div class="bs-slider-btn-1 sd-slider-left wa-magnetic">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
                <div class="bs-slider-btn-1 sd-slider-right wa-magnetic">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>

</div>