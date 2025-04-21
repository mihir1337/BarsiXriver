<div class="pf-feature-7-area pt-145 pb-150 wa-p-relative tx-section">
	<?php if(!empty( $settings['image_1']['url'] )) : ?>
	<img class="pf-feature-3-bg-shape" src="<?php echo esc_url($settings['image_1']['url']); ?>"
	alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
	<?php endif; ?>

	<div class="container pf-container-1">
		<div class="pf-feature-7-sec-title text-center mb-75">
			<?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
			<h6 class="pf-subtitle-3 tx-subTitle">
				<?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?>
			</h6>
			<?php endif; ?>
			<?php
				if($settings['enable_title'] === 'yes') {
				$this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-5 pf-split-2 has-fs-45' );
					printf('<%1$s %2$s>%3$s</%1$s>',
						tag_escape($settings['title_tag']),
						$this->get_render_attribute_string('title'),
						elh_element_kses_basic( $settings['title'] )
					);
				}
			?>
			<?php if( $settings['enable_description'] === 'yes' ) : ?>
			<p class="pf-p-5 sec-disc wow fadeInUp tx-description"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
			<?php endif; ?>
		</div>
		<div class="pf-feature-1-item has-feature-7 has-f3 mb-75 wow fadeInUp">
			<?php foreach($settings['service_slide_boxs'] as $list ) : ?>
			<div class="pf-feature-1-item-single has-f3">
				<?php if( $list['enable_icon'] == true ) : ?>
				<div class="icon">
					<?php if ( $list['type'] == 'icon' ): ?>
						<?php \Elementor\Icons_Manager::render_icon( $list['info_icon'], ['aria-hidden' => 'true'] );?>
					<?php else: ?>
						<img src="<?php echo esc_url($list['info_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['info_image']['url']) : ''); ?>">
					<?php endif;?>
				</div>
				<?php endif; ?>
				<div class="content">
					<?php if(!empty( $list['title'] )) : ?>
					<h4 class="pf-h-1 item-title">
						<a href="<?php echo esc_url($list['button_link']['url']); ?>"
						target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
						rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
						aria-label="name">
							<?php echo elh_element_kses_intermediate( $list['title'] ); ?>
						</a>
					</h4>
					<?php endif; ?>
					<?php if(!empty( $list['description'] )) : ?>
					<p class="pf-p-1 item-disc"><?php echo elh_element_kses_intermediate( $list['description'] ); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

		<?php if( $settings['enable_button'] === 'yes' ) : ?>
		<div class="pf-feature-7-btn text-center wow fadeInUp" data-wow-delay=".3s">
			<a href="<?php echo esc_url($settings['button_link']['url']); ?>"
			target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
			rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
			aria-label="name" class="pf-pr-5 tx-button">
				<?php echo elh_element_kses_intermediate( $settings['button_text'] ); ?>
				<?php if(!empty( $settings['button_icon'] )) : ?>
				<span class="icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
				</span>
				<?php endif; ?>
			</a>
		</div>
		<?php endif; ?>
	</div>
</div>