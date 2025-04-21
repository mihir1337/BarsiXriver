<div class="pf-cta-3-col d-flex align-items-center justify-content-center wascale0 tx-section">
    <div class="pf-cta-2-content has-cta-3">
        <div class="content">
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h5 class="pf-subtitle-2 subtitle tx-subTitle"><?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?></h5>
            <?php
			endif;
				if($settings['enable_title'] === 'yes') {
				$this->add_render_attribute( 'title', 'class', 'tx-title title' );
					printf('<%1$s %2$s>%3$s</%1$s>',
						tag_escape($settings['title_tag']),
						$this->get_render_attribute_string('title'),
						elh_element_kses_basic( $settings['title'] )
					);
				}
			if( $settings['enable_description'] === 'yes' ) : ?>
			<p class="pf-p-1 sec-disc tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
			<?php endif; ?>
        </div>

        <?php if( $settings['enable_button'] === 'yes' ) :
            if($settings['has_bg_fill'] === 'yes') {
                $class = 'has-bg-fill';
            } else {
                $class = 'has-cta-3';
            }
        ?>
		<div class="btn-wrap">
			<a href="<?php echo esc_url($settings['button_link']['url']); ?>"
                target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="pf-pr-3 tx-button <?php echo esc_attr($class); ?>">
				<?php if(!empty( $settings['button_text'] )) : ?>
                    <?php echo elh_element_kses_intermediate( $settings['button_text'] ); ?>
				<?php endif; ?>
				<?php if(!empty( $settings['button_icon'] )) : ?>
				<span class="icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
				</span>
				<?php endif; ?>
			</a>
		</div>
		<?php endif; ?>
    </div>
</div>