<div class="bs-services-details-testimonial ">
    <!-- single-item -->
    <?php foreach($settings['testimonial_lists'] as $list) : ?>
    <div class="bs-testimonial-2-slider-item ">
        <div class="img-flex">
            <?php if(!empty( $list['author_image']['url'] )) : ?>
            <div class="item-img">
                <img src="<?php echo esc_url($list['author_image']['url']); ?>"
                alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['author_image']['url']) : ''); ?>">
            </div>
            <?php endif; ?>
            <div class="content">
                <?php if(!empty( $list['name'] )) : ?>
                <h5 class="item-name"><?php echo elh_element_kses_intermediate($list['name']); ?></h5>
                <?php endif; ?>

                <?php if(!empty( $list['designation'] )) : ?>
                <p class="item-disc"><?php echo elh_element_kses_intermediate($list['designation']); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <?php if( $list['enable_rating'] === 'yes' ) : ?>
        <div class="item-rating">
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
        </div>
        <?php endif; ?>

        <?php if(!empty( $list['comment'] )) : ?>
        <p class="item-comment"><?php echo elh_element_kses_intermediate($list['comment']); ?></p>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>

</div>