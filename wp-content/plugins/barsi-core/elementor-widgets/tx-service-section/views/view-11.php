<div class="pf-services-7-area wa-p-relative pt-145 pb-150 tx-section">
	<?php if(!empty( $settings['image_1']['url'] )) : ?>
	<div class="pf-services-7-bg-img wa-img-cover wa-fix">
		<img src="<?php echo esc_url($settings['image_1']['url']); ?>"
		alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
	</div>
	<?php endif; ?>
	<div class="container pf-container-1">

		<!-- section-title -->
		<div class="pf-services-7-sec-title text-center mb-65">
			<?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
			<h6 class="pf-subtitle-3 tx-subTitle">
				<?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?>
			</h6>
			<?php endif; ?>
			<?php
				if($settings['enable_title'] === 'yes') {
				$this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-5 pf-split-2' );
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

		<div class="pf-services-7-wrap">
			<?php foreach($settings['service_slide_boxs'] as $id => $list ) :
				$id = $id + 0;
				$class = 'item-' . $id;
			?>
			<div class="pf-services-7-card <?php echo esc_attr($class); ?>">
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
				<h5 class="pf-h-4 card-title">
					<a href="<?php echo esc_url($list['button_link']['url']); ?>"
					target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
					rel= "<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
					aria-label="name">
						<?php echo elh_element_kses_intermediate( $list['title'] ); ?>
					</a>
				</h5>
				<?php endif; ?>

				<?php if(!empty( $list['description'] )) : ?>
				<p class="card-disc pf-p-5"><?php echo elh_element_kses_intermediate( $list['description'] ); ?></p>
				<?php endif; ?>
			</div>
			<?php $id++; endforeach; ?>
		</div>
	</div>
</div>