<section class="bs-testimonial-6-area pt-130 tx-section">
    <div class="container bs-container-1">
        <div class="bs-testimonial-6-wrap">
            <?php foreach($settings['testimonial_lists'] as $list) : ?>
            <div class="bs-testimonial-4-slider-item">
                <?php if(!empty( $list['author_image']['url'] )) : ?>
                <div class="item-img wa-fix wa-img-cover">
                    <img src="<?php echo esc_url($list['author_image']['url']); ?>"
                    alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['author_image']['url']) : ''); ?>">
                </div>
                <?php endif; ?>
                <div class="content">
                    <?php if( $list['enable_rating'] === 'yes' ) : ?>
                    <div class="bs-star-1"> 
                        <?php
                            $rating = $list['rating_star'];
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

                    <?php if(!empty( $list['comment'] )) : ?>
                    <p class="bs-p-4 comment"><?php echo elh_element_kses_intermediate($list['comment']); ?></p>
                    <?php endif; ?>

                    <?php if(!empty( $list['name'] )) : ?>
                    <h4 class="bs-p-4 name"><?php echo elh_element_kses_intermediate($list['name']); ?></h4>
                    <?php endif; ?>

                    <?php if(!empty( $list['designation'] )) : ?>
                    <h4 class="bs-p-4 bio"><?php echo elh_element_kses_intermediate($list['designation']); ?></h4>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>