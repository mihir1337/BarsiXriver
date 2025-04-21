<div class="pf-counter-4-area wa-bg-default wa-p-relative wa-fix tx-section" data-background="<?php echo esc_url($settings['image_1']['url']) ? esc_url($settings['image_1']['url']) : ''; ?>">
    <!-- section-title -->
    <div class="container pf-container-1">
        <div class="pf-counter-4-sec-title">
            <?php if(!empty( $settings['sub_title'] )) : ?>
            <h5 class="pf-subtitle-3 tx-subTitle">
                <?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?>
                <span class="pf-subtitle-3-line"></span>
            </h5>
            <?php endif; ?>
            <?php
                if($settings['enable_title'] === 'yes') {
                $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-4 pf-split-2' );
                    printf('<%1$s %2$s>%3$s</%1$s>',
                        tag_escape($settings['title_tag']),
                        $this->get_render_attribute_string('title'),
                        elh_element_kses_basic( $settings['title'] )
                    );
                }
            ?>
        </div>
    </div>

    <div class="pf-counter-4-video wa-p-relative mb-70 wa-fix">

        <?php if( $settings['enable_video_box'] === 'yes' ) : ?>
        <div class="container pf-container-1">
            <?php if(!empty( $settings['video_link']['url'] )) : ?>
            <div class="pf-counter-4-video-item wa-fix wa-img-cover">
                <video class="plyvideo" autoplay="" loop="" muted="" src="<?php echo esc_url($settings['video_link']['url']); ?>"></video>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if( $settings['enable_feature_lists'] === 'yes' ) : ?>
        <div class="pf-counter-4-slide-posi pf-a2-slide">
            <div class="pf-about-2-slide-text">
            <?php foreach($settings['feature_lists'] as $list ) : ?>
                <?php if(!empty( $list['feature_title'] )) : ?>
                <h5 class="pf-h-1 item-title"><?php echo elh_element_kses_intermediate( $list['feature_title'] ); ?></h5>
                <?php endif; ?>
                <?php if( $list['enable_icon'] == true ) : ?>
                    <?php if ( $list['type'] == 'icon' ): ?>
                        <?php \Elementor\Icons_Manager::render_icon( $list['list_icon'], ['aria-hidden' => 'true'] );?>
                    <?php else: ?>
                        <img src="<?php echo esc_url($list['list_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['list_image']['url']) : ''); ?>">
                    <?php endif;?>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="container pf-container-1">
        <?php if( $settings['enable_count_box'] === 'yes' ) : ?>
        <div class="pf-counter-1 pf-counter-4-item mb-75">
            <?php foreach($settings['count_boxs'] as $id => $list ) :
                $id = $id + 1;
            ?>
            <div class="pf-counter-1-item ani-item-<?php echo esc_attr($id); ?>">
                <h5 class="pf-counter-1-item-number pf-h-1">
                    <span class="counter"><?php echo esc_html($list['count_number']); ?></span><span class="text"><?php echo esc_html($list['count_prefix']); ?></span>
                </h5>
                <?php if(!empty( $list['count_title'] )) : ?>
                <p class="pf-counter-1-item-disc pf-p-1 tx-count-title"><?php echo elh_element_kses_basic( $list['count_title'] ); ?></p>
                <?php endif; ?>
            </div>
            <?php $id++; endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="pf-counter-4-content wow fadeInUp">
            <?php if(!empty( $settings['description'] )) : ?>
            <p class="pf-p-3 disc tx-description"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
            <?php endif; ?>

            <?php if( $settings['enable_button'] === 'yes' ) : ?>
            <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
            target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
            rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="pf-pr-4 tx-button">
                <?php echo elh_element_kses_intermediate( $settings['button_text'] ); ?>
                <?php if(!empty( $settings['button_icon'] )) : ?>
                <span class="icon">
                    <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
                </span>
                <?php endif; ?>
            </a>
            <?php endif; ?>
        </div>
    </div>

    <?php if( $settings['enable_shape_1'] === 'yes' ) : ?>
    <svg class="pf-counter-4-shape" width="1920" height="1631" viewBox="0 0 1920 1631" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_157_480)">
        <path class="path-1" d="M974.31 1714.19C1196.23 1490.84 1224.15 1296.82 1245.73 1191.11C1285.19 905.945 1182.49 639.97 1182.49 639.97L941.497 708.503C987.078 889.528 973.17 1022.63 964.495 1104.04C926.405 1382.61 758.652 1491.31 717.445 1520.91C525.946 1644.59 364.14 1632.05 364.14 1632.05L543.125 1942.06C764.905 1891.24 912.816 1769.49 974.31 1714.19Z" fill="url(#paint0_linear_157_480)"/>
        <path class="path-2" d="M1570.19 1325.97C1630.81 1118.41 1619.29 993.553 1619.29 993.553C1617.94 941.842 1609.25 859.415 1590.72 747.662C1567.26 620.637 1518.46 490.065 1451.75 334.187C1382.7 176.468 1252.42 8.05033 1252.42 8.05033C1252.42 8.05033 1153.78 94.1485 976.355 250.352C1111.38 422.472 1182.49 639.97 1182.49 639.97C1182.49 639.97 1285.19 905.945 1245.74 1191.11C1224.17 1296.86 1196.23 1490.84 974.31 1714.19C912.773 1769.52 764.905 1891.24 543.126 1942.06L738.227 2279.98C777.157 2260.12 815.499 2239.84 853.033 2218.87C1199.22 2025.61 1459.06 1706.52 1570.17 1325.93L1570.19 1325.97Z" fill="url(#paint1_linear_157_480)"/>
        </g>
        <defs>
        <linearGradient id="paint0_linear_157_480" x1="1040.16" y1="680.642" x2="1304.48" y2="1444.25" gradientUnits="userSpaceOnUse">
        <stop stop-color="#8B5BFA" stop-opacity="0.56"/>
        <stop offset="1" stop-color="#8B5BFA" stop-opacity="0"/>
        </linearGradient>
        <linearGradient id="paint1_linear_157_480" x1="1254" y1="20.0001" x2="1118.75" y2="1646" gradientUnits="userSpaceOnUse">
        <stop stop-color="#8B5BFA"/>
        <stop offset="1" stop-color="#8B5BFA" stop-opacity="0"/>
        </linearGradient>
        <clipPath id="clip0_157_480">
        <rect width="1920" height="1631" fill="white"/>
        </clipPath>
        </defs>
    </svg>
    <?php endif; ?>
</div>