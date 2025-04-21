<section class="bs-project-4-area pt-125 wa-fix tx-section">
    <div class="container bs-container-2">
        <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
        <h5 class="bs-subtitle-4 bs-project-4-subtitle tx-subTitle">
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

        <div class="bs-project-4-height">

            <div class="bs-project-4-content wa-fix">
                <?php if(!empty( $settings['title'] )) : ?>
                <h3 class="bs-h-4 big-title title"><?php echo elh_element_kses_intermediate($settings['title']); ?></h3>
                <?php endif; ?>

                <h3 class="bs-h-4 title title-2">
                    <?php if(!empty( $settings['title_2'] )) : ?>
                    <span class="left-text"><?php echo elh_element_kses_intermediate($settings['title_2']); ?></span>
                    <?php endif; ?>

                    <?php if(!empty( $settings['title_3'] )) : ?>
                    <span class="right-text"><?php echo elh_element_kses_intermediate($settings['title_3']); ?></span>
                    <?php endif; ?>
                </h3>
            </div>

            <div class="bs-project-4-card-pin">
                <div class="bs-project-4-card ">
                    <!-- single-card -->
                    <?php
                        $id = 1;
                        foreach($settings['service_slide_boxs'] as $list ) :
                    ?>
                    <div class="bs-project-4-card-single has-card-<?php echo esc_attr($id); ?>">
                        <?php if(!empty( $list['image_1']['url'] )) : ?>
                        <div class="card-img wa-fix wa-img-cover">
                            <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                            target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                            rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" data-cursor-text="<?php echo esc_attr('View', 'barsi-core'); ?>">
                                <img src="<?php echo esc_url($list['image_1']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_1']['url']) : ''); ?>">
                            </a>
                        </div>
                        <?php endif; ?>
                        <div class="content">
                            <?php if(!empty( $list['title'] )) : ?>
                            <h5 class="bs-h-4 title">
                                <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                                target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                                rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="wa-line-limit has-line-2">
                                    <?php echo elh_element_kses_intermediate( $list['title'] ); ?>
                                </a>
                            </h5>
                            <?php endif; ?>

                            <ul class="card-details wa-list-style-none">
                                <?php if(!empty( $list['info_label_1'] || $list['info_text_1'] )) : ?>
                                <li class="bs-p-4">
                                    <?php if(!empty( $list['info_label_1'] )) : ?>
                                    <span>
                                        <?php echo esc_html($list['info_label_1']); ?>
                                    </span>
                                    <?php endif; ?>
                                    <?php echo esc_html($list['info_text_1']); ?>
                                </li>
                                <?php endif; ?>

                                <?php if(!empty( $list['info_label_2'] || $list['info_text_2'] )) : ?>
                                <li class="bs-p-4">
                                    <?php if(!empty( $list['info_label_2'] )) : ?>
                                    <span>
                                        <?php echo esc_html($list['info_label_2']); ?>
                                    </span>
                                    <?php endif; ?>
                                    <?php echo esc_html($list['info_text_2']); ?>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <?php $id++; endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>