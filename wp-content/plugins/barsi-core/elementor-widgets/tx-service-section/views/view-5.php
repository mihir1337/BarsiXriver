<section class="bs-project-5-area pt-135 pb-140 wa-fix tx-section">
	<div class="container bs-container-2">
		<?php
			if($settings['enable_title'] === 'yes') {
			$this->add_render_attribute( 'title', 'class', 'tx-title bs-project-5-sec-title wa-split-right wa-capitalize' );
			$this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
				printf('<%1$s %2$s>%3$s</%1$s>',
					tag_escape($settings['title_tag']),
					$this->get_render_attribute_string('title'),
					elh_element_kses_basic( $settings['title'] )
				);
			}
		?>
		<div class="bs-project-5-wrap wa-p-relative">
			<!-- single-project -->
			<?php foreach($settings['service_slide_boxs'] as $list ) :
				if($list['height_style'] === 'style_1') {
                    $height_style = '';
                } else if($list['height_style'] === 'style_2') {
                    $height_style = 'height-2';
                }else if($list['height_style'] === 'style_3') {
                    $height_style = 'height-3';
                }else if($list['height_style'] === 'style_4') {
                    $height_style = 'height-4';
                }else if($list['height_style'] === 'style_5') {
                    $height_style = 'height-5';
                } else {
                    $height_style = '';
                }
			?>
			<div class="bs-project-5-item <?php echo esc_attr($height_style); ?>">
				<?php if(!empty( $list['image_1']['url'] )) : ?>
				<div class="main-img wa-fix wa-img-cover">
					<a href="<?php echo esc_url($list['button_link']['url']); ?>"
						target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
						rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" data-cursor-text="<?php echo esc_html__('View', 'barsi-core'); ?>">
						<img src="<?php echo esc_url($list['image_1']['url']); ?>"
						alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_1']['url']) : ''); ?>">
					</a>
				</div>
				<?php endif; ?>

				<?php if(!empty( $list['title'] )) : ?>
				<h5 class="bs-h-4 title">
					<a href="<?php echo esc_url($list['button_link']['url']); ?>"
					target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
					rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
						<?php echo elh_element_kses_intermediate( $list['title'] ); ?>
					</a>
				</h5>
				<?php endif; ?>

				<?php if(!empty( $list['description'] )) : ?>
				<ul class="item-list wa-list-style-none">
					<?php
						$list_item = $list['description'];
						$list_item = explode("\n", ($list_item));
						foreach($list_item as $feature_list):
					?>
					<li class="bs-p-4">
						<?php echo wp_kses($feature_list, true)?>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>

		</div>

		<div class="bs-project-5-wrap-2  wa-p-relative">

			<!-- single-project -->
			<?php foreach($settings['service_slide_boxs_2'] as $list ) :
				if($list['height_style'] === 'style_1') {
                    $height_style = '';
                } else if($list['height_style'] === 'style_2') {
                    $height_style = 'height-2';
                }else if($list['height_style'] === 'style_3') {
                    $height_style = 'height-3';
                }else if($list['height_style'] === 'style_4') {
                    $height_style = 'height-4';
                }else if($list['height_style'] === 'style_5') {
                    $height_style = 'height-5';
                } else {
                    $height_style = '';
                }
			?>
			<div class="bs-project-5-item <?php echo esc_attr($height_style); ?>">
				<?php if(!empty( $list['image_1']['url'] )) : ?>
				<div class="main-img wa-fix wa-img-cover">
					<a href="<?php echo esc_url($list['button_link']['url']); ?>"
						target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
						rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" data-cursor-text="<?php echo esc_html__('View', 'barsi-core'); ?>">
						<img src="<?php echo esc_url($list['image_1']['url']); ?>"
						alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_1']['url']) : ''); ?>">
					</a>
				</div>
				<?php endif; ?>
				<?php if(!empty( $list['title'] )) : ?>
				<h5 class="bs-h-4 title">
					<a href="<?php echo esc_url($list['button_link']['url']); ?>"
					target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
					rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
						<?php echo elh_element_kses_intermediate( $list['title'] ); ?>
					</a>
				</h5>
				<?php endif; ?>

				<?php if(!empty( $list['description'] )) : ?>
				<ul class="item-list wa-list-style-none">
					<?php
						$list_item = $list['description'];
						$list_item = explode("\n", ($list_item));
						foreach($list_item as $feature_list):
					?>
					<li class="bs-p-4">
						<?php echo wp_kses($feature_list, true)?>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>

		<div class="bs-project-5-wrap-3 mb-60 wa-p-relative">
			<!-- single-project -->
			<?php foreach($settings['service_slide_boxs_3'] as $list ) :
				if($list['height_style'] === 'style_1') {
                    $height_style = '';
                } else if($list['height_style'] === 'style_2') {
                    $height_style = 'height-2';
                }else if($list['height_style'] === 'style_3') {
                    $height_style = 'height-3';
                }else if($list['height_style'] === 'style_4') {
                    $height_style = 'height-4';
                }else if($list['height_style'] === 'style_5') {
                    $height_style = 'height-5';
                } else {
                    $height_style = '';
                }
			?>
			<div class="bs-project-5-item <?php echo esc_attr($height_style); ?>">
				<?php if(!empty( $list['image_1']['url'] )) : ?>
				<div class="main-img wa-fix wa-img-cover">
					<a href="<?php echo esc_url($list['button_link']['url']); ?>"
						target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
						rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" data-cursor-text="<?php echo esc_html__('View', 'barsi-core'); ?>">
						<img src="<?php echo esc_url($list['image_1']['url']); ?>"
						alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_1']['url']) : ''); ?>">
					</a>
				</div>
				<?php endif; ?>
				<?php if(!empty( $list['title'] )) : ?>
				<h5 class="bs-h-4 title">
					<a href="<?php echo esc_url($list['button_link']['url']); ?>"
					target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
					rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
						<?php echo elh_element_kses_intermediate( $list['title'] ); ?>
					</a>
				</h5>
				<?php endif; ?>

				<?php if(!empty( $list['description'] )) : ?>
				<ul class="item-list wa-list-style-none">
					<?php
						$list_item = $list['description'];
						$list_item = explode("\n", ($list_item));
						foreach($list_item as $feature_list):
					?>
					<li class="bs-p-4">
						<?php echo wp_kses($feature_list, true)?>
					</li>
					<?php endforeach; ?>
				</ul>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>

	<?php if( $settings['enable_button'] === 'yes' ) : ?>
	<div class="bs-project-5-all-btn wa-fadeInUp" data-background="<?php echo esc_url($settings['image_1']['url']) ? esc_url($settings['image_1']['url']) : ''; ?>">
		<a href="<?php echo esc_url($settings['button_link']['url']); ?>"
		target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
		rel="<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" class="bs-pr-btn-3">
			<span class="text"><?php echo esc_html( $settings['button_text'] ); ?> <i class="fa-solid fa-angle-right"></i></span>
			<span class="text"><?php echo esc_html( $settings['button_text'] ); ?> <i class="fa-solid fa-angle-right"></i></span>
		</a>
	</div>
	<?php endif; ?>
</section>