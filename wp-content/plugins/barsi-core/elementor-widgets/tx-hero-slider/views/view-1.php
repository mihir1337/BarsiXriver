<section class="bs-hero-4-area wa-p-relative pt-90 wa-fix tx-section">
    <div class="container bs-container-2">
        <div class="bs-hero-4-content">
            <?php if(!empty( $settings['heading_title'] )) : ?>
            <h1 class="bs-hero-4-title bs-h-4 wa-split-y cd-headline clip" data-split-delay="1s">
                <?php echo elh_element_kses_intermediate( $settings['heading_title'] ); ?>
                <?php if( $settings['enable_moving_text'] === 'yes' ) : ?>
                <span class="cd-words-wrapper single-headline">
                <?php foreach ( $settings['moving_texts'] as $list ) :
                    $is_active = $list['is_active'] ? 'is-visible' : '';
                ?>
                    <b <?php echo $is_active ? ' class="' . $is_active . '"' : ''; ?>>
                        <?php echo elh_element_kses_intermediate( $list['text'] ); ?>
                    </b>
                <?php endforeach; ?>

                </span>
                <?php endif; ?>
            </h1>
            <?php endif; ?>

            <div class="inner-div">
                <?php if(!empty( $settings['heading_button_link']['url'] )) : ?>
                <a href="<?php echo esc_url($settings['heading_button_link']['url']); ?>"
                target="<?php echo esc_attr($settings['heading_button_link']['is_external'] ? '_blank' : '_self'); ?>"
                rel="<?php echo esc_attr($settings['heading_button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-hero-4-circle-btn wa-magnetic-btn">
                    <span class="btn-icon ">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.00001 7C8.00001 6.73478 8.10537 6.48043 8.2929 6.29289C8.48044 6.10536 8.73479 6 9.00001 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8947 6.48043 18 6.73478 18 7V15C18 15.2652 17.8947 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16C16.7348 16 16.4804 15.8946 16.2929 15.7071C16.1054 15.5196 16 15.2652 16 15V9.414L7.70701 17.707C7.51841 17.8892 7.26581 17.99 7.00361 17.9877C6.74141 17.9854 6.4906 17.8802 6.30519 17.6948C6.11978 17.5094 6.01461 17.2586 6.01234 16.9964C6.01006 16.7342 6.11085 16.4816 6.29301 16.293L14.586 8H9.00001C8.73479 8 8.48044 7.89464 8.2929 7.70711C8.10537 7.51957 8.00001 7.26522 8.00001 7Z" fill="#F16319"/>
                        </svg>
                    </span>
                    <?php if(!empty( $settings['image_1']['url'] )) : ?>
                    <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
                    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
                    <?php endif; ?>
                </a>
                <?php endif; ?>

                <?php if(!empty( $settings['heading_description'] )) : ?>
                <p class="bs-p-4 bs-hero-4-disc wa-split-y" data-split-delay="1.6s">
                    <?php echo elh_element_kses_intermediate( $settings['heading_description'] ); ?>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- slider -->
    <div class="bs-hero-4-slider">

        <div class="bs-hero-4-slider-img">
            <div class="swiper-container bs-h4-img-active wa-fix">
                <div class="swiper-wrapper">
                    <?php foreach ( $settings['slides'] as $slide ) : ?>
                    <div class="swiper-slide">
                        <div class="bs-hero-4-slider-img-item">
                            <?php if(!empty( $slide['image_1']['url'] )) : ?>
                            <div class="main-img wa-img-cover">
                                <img
                                src="<?php echo esc_url($slide['image_1']['url']); ?>"
                                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $slide['image_1']['url'] ); } ?>">
                            </div>
                            <?php endif; ?>

                            <!-- trusted -->
                            <div class="bs-hero-4-slider-img-item-trusted">
                                <?php if(!empty( $slide['sub_title'] )) : ?>
                                <h5 class="bs-h-4 title">
                                    <?php echo elh_element_kses_intermediate( $slide['sub_title'] ); ?>
                                </h5>
                                <?php endif; ?>

                                <?php if( $slide['enable_rating'] === 'yes' ) : ?>
                                <p class="bs-p-4 ratting" >
                                    <?php
                                        $rating = $slide['rating_star'];
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $rating) {
                                                echo '<i class="fa-solid fa-star"></i>';
                                            } else {
                                                echo '<i class="fa-regular fa-star-half-stroke"></i>';
                                            }
                                        }
                                    ?>
                                    <?php echo elh_element_kses_intermediate($slide['rating_point']); ?>
                                </p>
                                <?php endif; ?>

                                <?php if(!empty( $slide['description'] )) : ?>
                                <p class="bs-p-4 disc">
                                    <?php echo elh_element_kses_intermediate( $slide['description'] ); ?>
                                </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="bs-hero-4-slider-thum">
            <div class="swiper-container bs-h4-thum-active wa-fix">
                <div class="swiper-wrapper">
                    <?php foreach ( $settings['slides'] as $slide ) : ?>
                    <div class="swiper-slide">
                        <?php if(!empty( $slide['image_2']['url'] )) : ?>
                        <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                            <img
                            src="<?php echo esc_url($slide['image_2']['url']); ?>"
                            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $slide['image_2']['url'] ); } ?>">
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php if(!empty( $settings['bottom_heading'] )) : ?>
        <h2 class="bs-hero-4-big-title bs-h-4 wa-split-up" data-split-delay="1.5s">
            <?php echo elh_element_kses_intermediate( $settings['bottom_heading'] ); ?>
        </h2>
        <?php endif; ?>
    </div>

    <?php if(!empty( $settings['image_2']['url'] )) : ?>
    <div class="bs-hero-4-bg" data-background="<?php echo esc_url($settings['image_2']['url']); ?>"></div>
    <?php endif; ?>
</section>