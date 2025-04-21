<div class="pf-solution-5-area wa-p-relative tx-section">
	<?php if(!empty( $settings['image_1']['url'] )) : ?>
	<img class="pf-solution-5-bg-shape" src="<?php echo esc_url($settings['image_1']['url']); ?>"
	alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
	<?php endif; ?>

	<div class="container pf-container-1">
		<div class="pf-solution-5-sce-title text-center">
			<?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
			<h6 class="pf-subtitle-5 tx-subTitle"><?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?></h6>
			<?php endif; ?>
			<?php
				if($settings['enable_title'] === 'yes') {
				$this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-5 has-fs-45 pf-split-2' );
					printf('<%1$s %2$s>%3$s</%1$s>',
						tag_escape($settings['title_tag']),
						$this->get_render_attribute_string('title'),
						elh_element_kses_basic( $settings['title'] )
					);
				}
			?>
			<?php if( $settings['enable_description'] === 'yes' ) : ?>
            <p class="tx-description pf-p-5 sec-disc"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
            <?php endif; ?>
		</div>

		<div class="pf-services-4-wrap pf-solution-5-card mb-50">
			<?php foreach($settings['service_slide_boxs'] as $list ) : ?>
			<div class="pf-services-4-card wow fadeInUp">
				<?php if( $list['enable_icon'] == true ) : ?>
				<div class="card-img wa-img-cover wa-fix">
					<?php if ( $list['type'] == 'icon' ): ?>
						<?php \Elementor\Icons_Manager::render_icon( $list['info_icon'], ['aria-hidden' => 'true'] );?>
					<?php else: ?>
						<img src="<?php echo esc_url($list['info_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['info_image']['url']) : ''); ?>">
					<?php endif;?>
				</div>
				<?php endif; ?>
				<div class="card-content">
					<div class="left">
						<?php if(!empty( $list['title'] )) : ?>
						<h4 class="pf-h-1 card-title">
							<a href="<?php echo esc_url($list['button_link']['url']); ?>"
							target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
							rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
							aria-label="name">
								<?php echo elh_element_kses_intermediate( $list['title'] ); ?>
							</a>
						</h4>
						<?php endif; ?>

						<?php if(!empty( $list['description'] )) : ?>
						<p class="pf-p-2 card-disc">
							<?php echo elh_element_kses_intermediate( $list['description'] ); ?>
						</p>
						<?php endif; ?>
					</div>

					<?php if(!empty( $list['button_icon'] )) : ?>
					<a href="<?php echo esc_url($list['button_link']['url']); ?>"
						target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
						rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
						class="pf-arrow-btn">
						<span class="icon">
							<?php \Elementor\Icons_Manager::render_icon( $list['button_icon'], ['aria-hidden' => 'true'] ); ?>
							<?php \Elementor\Icons_Manager::render_icon( $list['button_icon'], ['aria-hidden' => 'true'] ); ?>
						</span>
					</a>
					<?php endif; ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

		<?php if( $settings['enable_button'] === 'yes' ) : ?>
		<div class="pf-solution-5-all-btn text-center wow fadeInUp">
			<a href="<?php echo esc_url($settings['button_link']['url']); ?>"
			target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
			rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
			aria-label="name" class="pf-pr-5 tx-button">
				<?php echo elh_element_kses_intermediate( $settings['button_text'] ); ?>
				<span class="icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
				</span>
			</a>
		</div>
		<?php endif; ?>
	</div>

	<?php if(!empty( $settings['image_2']['url'] )) : ?>
	<div class="pf-solution-5-bg-shape2 pf-radius-shape-slide-up" >
		<img src="<?php echo esc_url($settings['image_2']['url']); ?>"
		alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
	</div>
	<?php endif; ?>
</div>