<section class="bs-testimonial-1-area pt-115 pb-190 tx-section">
    <div class="container bs-container-1">
        <div class="bs-testimonial-1-wrap">
            <!-- left-slider -->
            <div class="bs-testimonial-1-slider wa-fix">
                <div class="swiper-container bs-t1-active">
                    <div class="swiper-wrapper">
                        <!-- single-item -->
                        <?php foreach($settings['testimonial_lists'] as $list) : ?>
                        <div class="swiper-slide">
                            <div class="bs-testimonial-1-item">
                                <div class="bs-testimonial-1-item-author">
                                    <?php if(!empty( $list['author_image']['url'] )) : ?>
                                    <div class="main-img wa-fix wa-img-cover">
                                        <img src="<?php echo esc_url($list['author_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['author_image']['url']) : ''); ?>">
                                    </div>
                                    <?php endif; ?>

                                    <?php if(!empty( $list['name'] )) : ?>
                                    <h5 class="name bs-h-1"><?php echo elh_element_kses_intermediate($list['name']); ?></h5>
                                    <?php endif; ?>

                                    <?php if(!empty( $list['designation'] )) : ?>
                                    <p class="bio bs-p-1">
                                        <?php if(!empty( $list['image_2']['url'] )) : ?>
                                        <img src="<?php echo esc_url($list['image_2']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_2']['url']) : ''); ?>">
                                        <?php endif; ?>
                                        <?php echo elh_element_kses_intermediate($list['designation']); ?>
                                    </p>
                                    <?php endif; ?>
                                </div>

                                <?php if(!empty( $list['image_3']['url'] )) : ?>
                                <div class="item-img wa-fix wa-img-cover" data-cursor="-opaque">
                                <img src="<?php echo esc_url($list['image_3']['url']); ?>"
                                    alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_3']['url']) : ''); ?>">
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- right-content -->
            <div class="bs-testimonial-1-content wa-fix">
                <div class="bs-testimonial-1-rating wa-fix mb-60">
                    <div class="left">
                        <?php if(!empty( $settings['rating_point'] )) : ?>
                        <h5 class="bs-h-1 rating-number" data-cursor="-opaque">
                            <?php echo elh_element_kses_intermediate($settings['rating_point']); ?>
                        </h5>
                        <?php endif; ?>

                        <?php if( $settings['enable_rating'] === 'yes' ) : ?>
                        <div class="bs-star-1">
                            <?php
                                $rating = $settings['rating_star'];
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $rating) {
                                        echo '<i class="fa-solid fa-star"></i>';
                                    } else {
                                        echo '<i class="fa-regular fa-star-half-stroke"></i>';
                                    }
                                }
                            ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <p class="disc bs-p-1">
                        <?php if(!empty( $settings['author_image']['url'] )) : ?>
                        <img src="<?php echo esc_url($settings['author_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['author_image']['url']) : ''); ?>">
                        <?php endif; ?>
                        <?php echo elh_element_kses_intermediate($settings['comment']); ?>
                    </p>
                </div>

                <div class="bs-testimonial-1-slider-2 mb-70">
                    <div class="swiper-container bs-t1-comment-active">
                        <div class="swiper-wrapper">

                            <!-- single-slider -->
                            <?php foreach($settings['testimonial_lists'] as $list) : ?>
                            <div class="swiper-slide">
                                <?php if(!empty( $list['comment'] )) : ?>
                                <p class="bs-p-1 bs-testimonial-1-item-comment" data-cursor="-opaque">
                                    <?php echo elh_element_kses_intermediate($list['comment']); ?>
                                </p>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <?php if( $settings['enable_slide_pagination'] === 'yes' ) : ?>
                <div class="bs-t1-pagi bs-pagination-1"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>