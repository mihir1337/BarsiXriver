<div class="container bs-container-1">
    <div class="bs-team-3-wrap">
        <!-- single-member -->
        <?php foreach($settings['team_members'] as $list) : ?>
        <div class="bs-team-3-item">
            <?php if(!empty( $list['team_image']['url'] )) : ?>
            <div class="item-img wa-fix wa-img-cover ">
                <img src="<?php echo esc_url( $list['team_image']['url'] ); ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['team_image']['url'] ); } ?>">
            </div>
            <?php endif; ?>
            <div class="content-wrap">
                <div class="content">
                    <?php if(!empty( $list['name'] )) : ?>
                    <h4 class="bs-h-1 name">
                        <a class="wa-line-limit has-line-1"
                        href="<?php echo esc_url($list['link']['url']); ?>"
                        target="<?php echo esc_attr($list['link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel="<?php echo esc_attr($list['link']['nofollow'] ? 'nofollow' : ''); ?>">
                            <?php echo elh_element_kses_intermediate( $list['name'] ); ?>
                        </a>
                    </h4>
                    <?php endif; ?>

                    <?php if(!empty( $list['designation'] )) : ?>
                    <p class="bs-p-1 bio wa-line-limit has-line-1"><?php echo elh_element_kses_intermediate( $list['designation'] ); ?></p>
                    <?php endif; ?>
                </div>

                <?php if( $list['enable_social_links'] === 'yes' ) : ?>
                <div class="social-link">
                    <?php foreach($list['social_links'] as $s_list) : ?>
                    <a class="social-elm" href="<?php echo esc_url($s_list['social_link']['url']); ?>"
                    target="<?php echo esc_attr( $s_list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                    rel="<?php echo esc_attr( $s_list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name">
                        <?php \Elementor\Icons_Manager::render_icon( $s_list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>