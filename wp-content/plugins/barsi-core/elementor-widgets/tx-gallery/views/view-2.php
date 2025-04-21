<section class="bs-work-3-area wa-fix">
    <div class="bs-work-3-marquee-active">
        <div class="bs-work-3-wrap">
            <!-- single-item -->
            <?php foreach($settings['gallery_images'] as $list) : ?>
            <div class="bs-work-3-item">
                <?php if(!empty( $list['image']['url'] )) : ?>
                <div class="item-img wa-img-cover wa-fix">
                    <img src="<?php echo esc_url($list['image']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image']['url'] ); } ?>">
                </div>
                <div class="content">
                    <a href="<?php echo esc_url($list['image']['url']); ?>" aria-label="name" class="circle">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>