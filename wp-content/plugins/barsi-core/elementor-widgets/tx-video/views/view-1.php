<section class="bs-video-1-area wa-fix">
    <div class="bs-video-1-content wa-p-relative">
        <div class="bs-video-1-content-img wa-p-relative wa-fix wa-img-cover">
            <?php if(!empty( $settings['image_1']['url'] )) : ?>
            <img class="wa-parallax-img" src="<?php echo esc_url($settings['image_1']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
            <?php endif; ?>

            <?php if(!empty( $settings['video_link']['url'] )) : ?>
            <div class="bs-video-1-play-btn">
                <a href="<?php echo esc_url($settings['video_link']['url']); ?>" aria-label="name" class="bs-play-btn-3 wa-magnetic popup-video">
                    <span class="icon wa-magnetic-btn">
                        <i class="fa-solid fa-play"></i>
                    </span>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <h3 class="bs-h-1 title wa-split-down" data-cursor="-opaque">
            <?php echo elh_element_kses_intermediate($settings['top_text']); ?>
            <div class="bs-video-1-content-list">
                <?php if(!empty( $settings['image_2']['url'] )) : ?>
                <div class="main-img wa-fix wa-img-cover">
                    <img src="<?php echo esc_url($settings['image_2']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
                </div>
                <?php endif; ?>

                <?php if( $settings['enable_feature_lists'] === 'yes' ) : ?>
                <ul class="list">
                    <?php foreach($settings['feature_lists'] as $list) : ?>
                    <li>
                        <?php echo elh_element_kses_intermediate($list['feature_text']); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
            <?php echo elh_element_kses_intermediate($settings['bottom_text']); ?>
        </h3>
    </div>
</section>