<section class="bs-video-1-area wa-fix">
    <div class="bs-video-1-content wa-p-relative">
        <div class="bs-video-1-content-img has-video-2 wa-p-relative wa-fix wa-img-cover">
            <a href="<?php echo esc_url($settings['video_link']['url']); ?>" aria-label="name" class="popup-video" data-cursor-text="play">
                <?php if(!empty( $settings['video_link_2']['url'] )) : ?>
                <video class="wa-parallax-img" src="<?php echo esc_url($settings['video_link_2']['url']); ?>" autoplay loop muted></video>
                <?php endif; ?>
            </a>

            <?php if(!empty( $settings['video_link_3']['url'] )) : ?>
            <div class="bs-video-1-play-btn ">
                <a href="<?php echo esc_url($settings['video_link_3']['url']); ?>" aria-label="name" class="bs-play-btn-3 wa-magnetic popup-video">
                    <span class="icon wa-magnetic-btn">
                        <i class="fa-solid fa-play"></i>
                    </span>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>