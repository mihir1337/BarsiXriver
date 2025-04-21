<section class="bs-video-5-area wa-fix wa-p-relative wa-img-cover">
    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <img class="wa-parallax-img" src="<?php echo esc_url($settings['image_1']['url']); ?>"
        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    <?php endif; ?>

    <?php if(!empty( $settings['video_link']['url'] )) : ?>
    <div class="bs-video-5-btn">
        <a href="<?php echo esc_url($settings['video_link']['url']); ?>" aria-label="name" class="bs-play-btn-5 video-popup wa-magnetic-btn">
            <i class="fa-solid fa-play"></i>
        </a>
    </div>
    <?php endif; ?>
</section>