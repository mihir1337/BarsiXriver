<div class="pf-cta-4-area wa-fix wa-p-relative tx-section">
    <?php if(!empty( $settings['image_1']['url'] )) : ?>
    <img class="pf-cta-4-bg-shape" src="<?php echo esc_url($settings['image_1']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
    <?php endif; ?>

    <?php if( $settings['enable_shape'] === 'yes' ) : ?>
    <div class="pf-cta-4-shape-posi">
        <svg class="pf-cta-4-shape" width="659" height="479" viewBox="0 0 659 479" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_160_727)">
            <path d="M812.022 376.941C695.587 291.615 605.72 292.234 556.32 289.679C424.345 291.302 310.795 356.055 310.795 356.055L358.35 460.617C437.297 427.569 498.587 424.769 536.09 423.132C664.983 421.342 725.735 489.955 741.972 506.61C811.143 584.963 816.525 659.174 816.525 659.174L944.821 556.825C906.609 459.76 841.299 401.035 812.022 376.941Z" fill="url(#paint0_linear_160_727)"/>
            <path d="M595.239 133.335C496.996 120.052 441.182 133.819 441.182 133.819C417.831 137.967 381.058 147.544 331.664 163.592C275.684 182.918 219.829 213.971 153.728 254.878C86.9514 296.972 19.5135 367.552 19.5135 367.552C19.5135 367.552 65.2932 406.38 148.244 476.128C217.036 403.142 310.771 356.025 310.771 356.025C310.771 356.025 424.322 291.273 556.296 289.65C605.715 292.19 695.563 291.586 811.998 376.912C841.29 401.024 906.586 459.731 944.797 556.796L1084.64 445.231C1072.98 428.941 1061.16 412.947 1049.08 397.366C937.791 253.645 775.358 157.682 595.221 133.349L595.239 133.335Z" fill="url(#paint1_linear_160_727)"/>
            <path d="M1144.31 397.474C1016.23 95.8282 753.245 41.5388 700.538 26.8168C550.409 -10.3967 424.087 5.14997 424.087 5.14997C424.087 5.14997 438.916 114.085 441.117 133.739L447.952 177.979C447.952 177.979 581.635 161.161 719.324 213.724C774.557 235.308 913.985 275.189 1009.47 505.042L1144.31 397.474Z" fill="url(#paint2_linear_160_727)"/>
            </g>
            <defs>
            <linearGradient id="paint0_linear_160_727" x1="338.97" y1="417.796" x2="667.06" y2="245.731" gradientUnits="userSpaceOnUse">
            <stop stop-color="#8B5BFA"/>
            <stop offset="1" stop-color="white"/>
            </linearGradient>
            <linearGradient id="paint1_linear_160_727" x1="82.9971" y1="419.952" x2="1007.55" y2="257.23" gradientUnits="userSpaceOnUse">
            <stop stop-color="#8B5BFA"/>
            <stop offset="1" stop-color="white"/>
            </linearGradient>
            <linearGradient id="paint2_linear_160_727" x1="427.47" y1="92.124" x2="1038.38" y2="243.807" gradientUnits="userSpaceOnUse">
            <stop stop-color="#EC3D8C"/>
            <stop offset="1" stop-color="#EC3D8C" stop-opacity="0"/>
            </linearGradient>
            <clipPath id="clip0_160_727">
            <rect width="659" height="479" fill="white"/>
            </clipPath>
            </defs>
        </svg>
    </div>
    <?php endif; ?>

    <div class="container pf-container-1">
        <!-- section-title -->
        <div class="pf-cta-4-sec-title">
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
            aria-label="name" class="pf-pr-4 wow fadeInUp">
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

    <?php if(!empty( $settings['image_2']['url'] )) : ?>
    <div class="pf-cta-4-img">
        <img src="<?php echo esc_url($settings['image_2']['url']) ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
    </div>
    <?php endif; ?>
</div>