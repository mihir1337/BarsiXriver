<div class="pf-cta-5-area wa-p-relative tx-section">
    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <img class="pf-cta-5-bg-shape" src="<?php echo esc_url($settings['image_1']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    <?php endif; ?>
    <div class="container pf-container-1">
        <div class="pf-cta-5-sec-title">
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h5 class="pf-subtitle-3 tx-subTitle">
                <?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?>
                <span class="pf-subtitle-3-line"></span>
            </h5>
            <?php
			endif;
				if($settings['enable_title'] === 'yes') {
				$this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-4 pf-split-2' );
					printf('<%1$s %2$s>%3$s</%1$s>',
						tag_escape($settings['title_tag']),
						$this->get_render_attribute_string('title'),
						elh_element_kses_basic( $settings['title'] )
					);
				}
			if( $settings['enable_description'] === 'yes' ) : ?>
			<p class="pf-p-1 sec-disc tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
			<?php endif; ?>

            <?php if( $settings['enable_button'] === 'yes' ) : ?>
            <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
            target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
            rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
            aria-label="name" class="pf-pr-4 tx-button">
                <?php if(!empty( $settings['button_text'] )) : ?>
                    <?php echo elh_element_kses_intermediate( $settings['button_text'] ); ?>
				<?php endif; ?>
				<?php if(!empty( $settings['button_icon'] )) : ?>
				<span class="icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
				</span>
				<?php endif; ?>
            </a>
            <?php endif; ?>
        </div>
    </div>

    <?php if( $settings['enable_shape'] === 'yes' ) : ?>
    <div class="pf-cta-5-shape-posi wa-fix">
        <svg class="pf-cta-5-shape" width="909" height="677" viewBox="0 0 909 677" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_170_665)">
            <path d="M996.205 474.549C850.225 367.572 737.555 368.348 675.619 365.144C510.157 367.179 367.792 448.363 367.792 448.363L427.414 579.457C526.395 538.024 603.236 534.513 650.257 532.46C811.855 530.216 888.024 616.239 908.38 637.122C995.104 735.356 1001.85 828.398 1001.85 828.398L1162.7 700.078C1114.79 578.384 1032.91 504.757 996.205 474.549Z" fill="url(#paint0_linear_170_665)"/>
            <path d="M724.413 169.127C601.241 152.473 531.264 169.734 531.264 169.734C501.988 174.935 455.884 186.942 393.957 207.062C323.772 231.292 253.743 270.224 170.869 321.511C87.1483 374.287 2.59809 462.776 2.59809 462.776C2.59809 462.776 59.9944 511.456 163.994 598.903C250.241 507.397 367.762 448.325 367.762 448.325C367.762 448.325 510.126 367.142 675.589 365.106C737.548 368.292 850.195 367.534 996.175 474.511C1032.9 504.742 1114.76 578.346 1162.67 700.04L1338 560.166C1323.38 539.743 1308.56 519.69 1293.42 500.155C1153.89 319.966 950.237 199.652 724.391 169.145L724.413 169.127Z" fill="url(#paint1_linear_170_665)"/>
            <path d="M1412.81 500.292C1252.23 122.104 922.513 54.0384 856.432 35.5807C668.209 -11.0756 509.832 8.41594 509.832 8.41594C509.832 8.41594 528.423 144.993 531.184 169.635L539.752 225.1C539.752 225.1 707.358 204.014 879.986 269.915C949.234 296.976 1124.04 346.977 1243.76 635.155L1412.81 500.292Z" fill="url(#paint2_linear_170_665)"/>
            </g>
            <defs>
            <linearGradient id="paint0_linear_170_665" x1="403.117" y1="525.77" x2="814.46" y2="310.044" gradientUnits="userSpaceOnUse">
            <stop stop-color="#8B5BFA"/>
            <stop offset="1" stop-color="white"/>
            </linearGradient>
            <linearGradient id="paint1_linear_170_665" x1="82.1906" y1="528.473" x2="1241.35" y2="324.46" gradientUnits="userSpaceOnUse">
            <stop stop-color="#8B5BFA"/>
            <stop offset="1" stop-color="white"/>
            </linearGradient>
            <linearGradient id="paint2_linear_170_665" x1="514.074" y1="117.46" x2="1280" y2="307.632" gradientUnits="userSpaceOnUse">
            <stop stop-color="#EC3D8C"/>
            <stop offset="1" stop-color="#EC3D8C" stop-opacity="0"/>
            </linearGradient>
            <clipPath id="clip0_170_665">
            <rect width="909" height="677" fill="white"/>
            </clipPath>
            </defs>
        </svg>
    </div>
    <?php endif; ?>
</div>