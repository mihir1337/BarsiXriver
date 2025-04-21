<div class="bs-team-1-item">
    <?php if(!empty( $settings['team_image']['url'] )) : ?>
    <div class="item-img wa-fix wa-img-cover">
        <img src="<?php echo esc_url( $settings['team_image']['url'] ); ?>"
        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['team_image']['url'] ); } ?>">
    </div>
    <?php endif; ?>
    <div class="content-wrap">
        <div class="left">
            <?php if(!empty( $settings['name'] )) : ?>
            <h5 class="bs-h-1 name">
                <a class="wa-line-limit has-line-1" href="<?php echo esc_url($s_list['social_link']['url']); ?>"
                    target="<?php echo esc_attr( $s_list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                    rel="<?php echo esc_attr( $s_list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name">
                    <?php echo elh_element_kses_intermediate( $settings['name'] ); ?>
                </a>
            </h5>
            <?php endif; ?>

            <?php if(!empty( $settings['designation'] )) : ?>
            <p class="bs-p-1 bio"><?php echo elh_element_kses_intermediate( $settings['designation'] ); ?></p>
            <?php endif; ?>
        </div>

        <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
        <div class="social-link">
            <?php foreach($settings['social_links'] as $s_list) : ?>
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