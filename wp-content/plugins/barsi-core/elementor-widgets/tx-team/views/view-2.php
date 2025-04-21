<div class="bs-team-5-member">
    <?php if(!empty( $settings['team_image']['url'] )) : ?>
    <div class="main-img wa-fix wa-img-cover">
        <a href="<?php echo esc_url($s_list['social_link']['url']); ?>"
        target="<?php echo esc_attr( $s_list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
        rel="<?php echo esc_attr( $s_list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>" data-cursor-text="Details">
            <img src="<?php echo esc_url( $settings['team_image']['url'] ); ?>"
            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['team_image']['url'] ); } ?>">
        </a>
    </div>
    <?php endif; ?>
    <div class="content">
        <?php if(!empty( $settings['name'] )) : ?>
        <h4 class="bs-h-1 name">
            <a href="<?php echo esc_url($s_list['social_link']['url']); ?>"
                target="<?php echo esc_attr( $s_list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                rel="<?php echo esc_attr( $s_list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>" aria-label="name">
                <?php echo elh_element_kses_intermediate( $settings['name'] ); ?>
            </a>
        </h4>
        <?php endif; ?>

        <?php if(!empty( $settings['designation'] )) : ?>
        <p class="bs-p-4 bio">
            <?php echo elh_element_kses_intermediate( $settings['designation'] ); ?>
        </p>
        <?php endif; ?>
    </div>
</div>