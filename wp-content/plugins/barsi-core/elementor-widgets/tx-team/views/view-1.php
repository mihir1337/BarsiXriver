<?php
    if($settings['anim_style'] === 'style_1') {
        $class = 'style_1';
    } else if($settings['anim_style'] === 'style_2') {
        $class = 'style_2';
    } else if($settings['anim_style'] === 'style_3') {
        $class = 'style_3';
    } else {
        $class = '';
    }
?>
<div class="bs-team-3-item <?php echo esc_attr($class); ?>">
    <?php if(!empty( $settings['team_image']['url'] )) : ?>
    <div class="item-img wa-fix wa-img-cover">
        <img src="<?php echo esc_url( $settings['team_image']['url'] ); ?>"
        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['team_image']['url'] ); } ?>">
    </div>
    <?php endif; ?>
    <div class="content-wrap">
        <div class="content">
            <?php if(!empty( $settings['name'] )) : ?>
            <h4 class="bs-h-1 name">
                <a class="wa-line-limit has-line-1" href="<?php echo esc_url($s_list['social_link']['url']); ?>"
                    target="<?php echo esc_attr( $s_list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                    rel="<?php echo esc_attr( $s_list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name">
                    <?php echo elh_element_kses_intermediate( $settings['name'] ); ?>
                </a>
            </h4>
            <?php endif; ?>

            <?php if(!empty( $settings['designation'] )) : ?>
            <p class="bs-p-1 bio wa-line-limit has-line-1"><?php echo elh_element_kses_intermediate( $settings['designation'] ); ?></p>
            <?php endif; ?>
        </div>

        <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
        <div class="social-link">
            <?php foreach($settings['social_links'] as $s_list) : ?>
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