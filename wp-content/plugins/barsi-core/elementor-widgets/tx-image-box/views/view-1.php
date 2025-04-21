<section class="bs-video-4-area">
    <div class="bs-video-4-content wa-p-relative wa-fix wa-img-cover">
        <?php if(!empty( $settings['image_1']['url'] )) : ?>
        <img class="wa-parallax-img" src="<?php echo esc_url($settings['image_1']['url']); ?>"
        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
        <?php endif; ?>

        <?php if(!empty( $settings['info_heading'] )) : ?>
        <div class="bs-video-4-text">
            <div class="bs-video-4-marquee-active">
                <h4 class="bs-h-1 bs-video-4-text-item wa-split-text">
                    <?php echo esc_html($settings['info_heading']); ?>
                </h4>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>