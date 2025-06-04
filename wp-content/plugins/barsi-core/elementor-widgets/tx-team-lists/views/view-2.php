<section class="bs-team-4-area pt-130 pb-100 wa-fix tx-section">
    <div class="container bs-container-2">
        <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
        <h5 class="bs-subtitle-4 bs-team-4-subtitle">
            <?php if(!empty( $settings['sub_title'] )) : ?>
            <span class="text"><?php echo elh_element_kses_intermediate($settings['sub_title']); ?></span>
            <?php endif; ?>

            <?php if( $settings['enable_sub_title_icon'] === 'yes' ) : ?>
            <span class="icon">
                <?php if( $settings['type'] === 'icon' ) : ?>
                    <?php \Elementor\Icons_Manager::render_icon( $settings['sub_title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <?php else : ?>
                    <img class="wa-fadeInUp" src="<?php echo esc_url( $settings['sub_title_image']['url'] ); ?>" alt="<?php if(function_exists('lawfy_img_alt_text')) { echo lawfy_img_alt_text( $settings['sub_title_image']['url'] ); } ?>">
                    <?php endif; ?>
            </span>
            <?php endif; ?>
        </h5>
        <?php endif; ?>

        <div class="bs-team-4-wrap">

            <!-- left-content -->
            <div class="bs-team-4-content">
                <?php
                    if($settings['enable_title'] === 'yes') {
                    $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-4 title wa-split-right wa-capitalize' );
                    $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>

                <?php if( $settings['enable_description'] === 'yes' ) : ?>
                <p class="bs-p-4 disc wa-fadeInUp"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                <?php endif; ?>

                <?php if( $settings['enable_button'] === 'yes' ) : ?>
                <div class="btn-wrap wa-fadeInUp">
                    <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                    target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-pr-btn-2 tx-button">
                        <?php if(!empty( $settings['button_text'] )) : ?>
                        <span class="text"
                            data-back="<?php echo esc_attr( $settings['button_text'] ); ?>"
                            data-front="<?php echo esc_attr( $settings['button_text'] ); ?>">
                        </span>
                        <?php endif; ?>
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="box box-1"></span>
                        <span class="box box-2"></span>
                        <span class="box box-3"></span>
                        <span class="box box-4"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>

            <!-- right-img -->
            <?php if(!empty( $settings['image_1']['url'] )) : ?>
            <div class="bs-team-4-img wa-fix wa-img-cover wa-clip-left-right">
                <img src="<?php echo esc_url($settings['image_1']['url']); ?>"
                alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
            </div>
            <?php endif; ?>
        </div>

        <!-- member -->
        <?php if( $settings['enable_team_box'] === 'yes' ) : ?>
        <div class="bs-team-4-member">
            <!-- single-member -->
            <?php foreach($settings['team_members'] as $list) : ?>
            <div class="bs-team-4-member-single">
                <?php if(!empty( $list['team_image']['url'] )) : ?>
                <div class="member-img wa-fix wa-img-cover">
                    <a href="<?php echo esc_url($list['link']['url']); ?>"
                    target="<?php echo esc_attr($list['link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($list['link']['nofollow'] ? 'nofollow' : ''); ?>" data-cursor-text="<?php echo esc_attr__('Details', 'barsi-core'); ?>">
                        <img src="<?php echo esc_url( $list['team_image']['url'] ); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['team_image']['url'] ); } ?>">
                    </a>
                </div>
                <?php endif; ?>

                <div class="content">
                    <?php if(!empty( $list['name'] )) : ?>
                    <h4 class="bs-h-4 name">
                        <a
                        href="<?php echo esc_url($list['link']['url']); ?>"
                        target="<?php echo esc_attr($list['link']['is_external'] ? '_blank' : '_self'); ?>"
                        rel="<?php echo esc_attr($list['link']['nofollow'] ? 'nofollow' : ''); ?>">
                            <?php echo elh_element_kses_intermediate( $list['name'] ); ?>
                        </a>
                    </h4>
                    <?php endif; ?>
                    <?php if(!empty( $list['designation'] )) : ?>
                    <p class="bs-p-4 bio"><?php echo elh_element_kses_intermediate( $list['designation'] ); ?></p>
                    <?php endif; ?>
                    <span class="line-1"></span>
                    <span class="line-2"></span>
                    <span class="line-3"></span>
                    <span class="line-4"></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>