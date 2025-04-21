<div class="pf-feature-5-area wa-p-relative pb-145 wa-fix">
	<?php if(!empty( $settings['image_1']['url'] )) : ?>
	<img class="pf-feature-5-line" src="<?php echo esc_url($settings['image_1']['url']); ?>"
	alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
	<?php endif; ?>

	<?php if(!empty( $settings['image_2']['url'] )) : ?>
	<img class="pf-feature-5-bg-shape" src="<?php echo esc_url($settings['image_2']['url']); ?>"
	alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
	<?php endif; ?>

	<div class="container pf-container-1">
		<div class="pf-feature-5-sce-title text-center mb-60">
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
			<p class="pf-p-5 sec-disc wow fadeInUp tx-description"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
			<?php endif; ?>
		</div>

		<div class="pf-feature-5-row mb-110">
			<?php foreach($settings['service_slide_boxs'] as $id => $list ) :

			$id++;
			$anim_classes = [
				1 => 'pf-f5-card-down',
				2 => 'pf-f5-card-up',
				3 => 'pf-f5-card-down',
				4 => 'pf-f5-card-up',
			];

			$anim_class = $anim_classes[$id] ?? '';


				// var_dump($id);
			?>
			<div class="pf-feature-5-card <?php echo esc_attr($anim_class); ?>">
				<?php if( $list['enable_icon'] == true ) : ?>
				<div class="icon">
					<?php if ( $list['type'] == 'icon' ): ?>
						<?php \Elementor\Icons_Manager::render_icon( $list['info_icon'], ['aria-hidden' => 'true'] );?>
					<?php else: ?>
						<img src="<?php echo esc_url($list['info_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['info_image']['url']) : ''); ?>">
					<?php endif;?>
				</div>
				<?php endif; ?>
				<?php if(!empty( $list['title'] )) : ?>
				<h4 class="pf-h-4 card-title">
					<a href="<?php echo esc_url($list['button_link']['url']); ?>"
					target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
					rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
					aria-label="name">
						<?php echo elh_element_kses_intermediate( $list['title'] ); ?>
					</a>
				</h4>
				<?php endif; ?>
				<?php if(!empty( $list['description'] )) : ?>
				<p class="card-disc pf-p-5"><?php echo elh_element_kses_intermediate( $list['description'] ); ?></p>
				<?php endif; ?>
			</div>
			<?php $id++; endforeach; ?>
		</div>

		<div class="pf-feature-5-content text-center">
			<?php if(!empty( $settings['short_desc'] )) : ?>
			<p class="pf-p-5 disc wow fadeInUp">
				<?php echo elh_element_kses_intermediate( $settings['short_desc'] ); ?>
			</p>
			<?php endif; ?>

			<?php if( $settings['enable_button'] === 'yes' ) : ?>
			<a href="<?php echo esc_url($settings['button_link']['url']); ?>"
			target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
			rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
			aria-label="name" class="pf-pr-5 wow fadeInUp">
				<?php echo elh_element_kses_intermediate( $settings['button_text'] ); ?>
				<?php if(!empty( $settings['button_icon'] )) : ?>
				<span class="icon">
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
					<?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], ['aria-hidden' => 'true'] ); ?>
				</span>
				<?php endif; ?>
			</a>
			<?php endif; ?>
		</div>
	</div>

	<?php if(!empty( $settings['image_3']['url'] )) : ?>
	<div class="pf-feature-5-bg-shape2 pf-radius-shape-slide-up" >
		<img src="<?php echo esc_url($settings['image_3']['url']); ?>"
		alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_3']['url'] ); } ?>">
	</div>
	<?php endif; ?>
</div>