<div class="bs-team-1-slider wa-p-relative">
    <div class="swiper-container wa-fix bs-team1-active">
        <div class="swiper-wrapper">
            <?php foreach($settings['team_members'] as $list) : ?>
            <div class="swiper-slide">
                <div class="bs-team-1-item">
                    <?php if(!empty( $list['team_image']['url'] )) : ?>
                    <div class="item-img wa-fix wa-img-cover">
                        <img src="<?php echo esc_url( $list['team_image']['url'] ); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['team_image']['url'] ); } ?>">
                    </div>
                    <?php endif; ?>

                    <div class="content-wrap">
                        <div class="left">
                            <?php if(!empty( $list['name'] )) : ?>
                            <h5 class="bs-h-1 name">
                                <a
                                href="<?php echo esc_url($list['link']['url']); ?>"
                                target="<?php echo esc_attr($list['link']['is_external'] ? '_blank' : '_self'); ?>"
                                rel="<?php echo esc_attr($list['link']['nofollow'] ? 'nofollow' : ''); ?>">
                                    <?php echo elh_element_kses_intermediate( $list['name'] ); ?>
                                </a>
                            </h5>
                            <?php endif; ?>
                            <?php if(!empty( $list['designation'] )) : ?>
                            <p class="bs-p-1 bio"><?php echo elh_element_kses_intermediate( $list['designation'] ); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php if( $list['enable_social_links'] === 'yes' ) : ?>
                        <div class="social-link">
                            <?php foreach($list['social_links'] as $s_list) : ?>
                            <a class="link" href="<?php echo esc_url($s_list['social_link']['url']); ?>"
                            target="<?php echo esc_attr( $s_list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                            rel="<?php echo esc_attr( $s_list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name">
                                <?php \Elementor\Icons_Manager::render_icon( $s_list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- slider-btn -->
    <?php if( $settings['enable_pagination'] === 'yes' ) : ?>
    <div class="bs-team-1-slider-btn">
        <div class="bs-slider-btn-1 lw-team1-prev wa-magnetic-btn">
            <i class="fa-solid fa-chevron-left"></i>
        </div>
        <div class="bs-slider-btn-1 lw-team1-next wa-magnetic-btn">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </div>
    <?php endif; ?>
</div>