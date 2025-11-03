<section class="bs-award-5-area pt-135 wa-fix tx-section">
	<div class="container bs-container-2">
		<div class="bs-award-5-wrap">

			<!-- left-content -->
			<div class="bs-award-5-content">

				<!-- section-title -->
				<div class="bs-award-5-sec-title mb-50">
					<?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
					<h6 class="bs-subtitle-5 wa-capitalize">
						<?php if(!empty( $settings['sub_count'] )) : ?>
						<span>
							<?php echo esc_html($settings['sub_count']); ?>
						</span>
						<?php endif; ?>

						<?php if(!empty( $settings['sub_title'] )) : ?>
						<span class="wa-split-right"><?php echo elh_element_kses_intermediate($settings['sub_title']); ?></span>
						<?php endif; ?>
					</h6>
					<?php endif; ?>
					<?php
						if($settings['enable_title'] === 'yes') {
						$this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-4 wa-split-right wa-capitalize' );
						$this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
							printf('<%1$s %2$s>%3$s</%1$s>',
								tag_escape($settings['title_tag']),
								$this->get_render_attribute_string('title'),
								elh_element_kses_basic( $settings['title'] )
							);
						}
					?>
					<?php if( $settings['enable_description'] === 'yes' ) : ?>
					<p class="bs-p-4 disc wa-fadeInUp tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
					<?php endif; ?>
				</div>

				<!-- img -->
				<?php if(!empty( $settings['image_1']['url'] )) : ?>
				<div class="bs-award-5-img wa-fix wa-img-cover wa-clip-top-bottom" data-cursor="-opaque" data-split-duration="1.5s">
					<img src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''); ?>">
				</div>
				<?php endif; ?>

			</div>

			<!-- right-list -->
			<div class="bs-award-5-item">
				<!-- single-item -->
				<?php foreach($settings['service_slide_boxs'] as $list ) : ?>
				<a href="<?php echo esc_url($list['button_link']['url']); ?>"
				target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
				rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>" class="bs-award-5-item-single wa-fadeInUp">
					<?php if(!empty( $list['count'] )) : ?>
					<h3 class="bs-h-4 year">
						<span><?php echo esc_html($list['count']); ?></span>
					</h3>
					<?php endif; ?>

					<?php if(!empty( $list['title'] )) : ?>
					<h4 class="bs-h-4 title"><?php echo elh_element_kses_intermediate( $list['title'] ); ?></h4>
					<?php endif; ?>

					<?php if(!empty( $list['icon'] )) : ?>
					<div class="icon">
						<?php \Elementor\Icons_Manager::render_icon( $list['icon'], ['aria-hidden' => 'true'] ); ?>
					</div>
					<?php endif; ?>

					<?php if(!empty( $list['image_1']['url'] )) : ?>
					<span class="item-img cursor-follow">
						<img src="<?php echo esc_url($list['image_1']['url']); ?>"
						alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_1']['url']) : ''); ?>">
					</span>
					<?php endif; ?>
				</a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>