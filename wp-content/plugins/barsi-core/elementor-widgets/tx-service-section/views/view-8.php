<div class="pf-services-6-area">
	<div class="pf-services-6-shadow wa-p-relative">
		<div class="pf-services-6-mask wa-p-relative">
			<?php if(!empty( $settings['image_1']['url'] )) : ?>
			<img class="bg-shape" src="<?php echo esc_url($settings['image_1']['url']); ?>"
			alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>">
			<?php endif; ?>

			<div class="container pf-container-1">
				<div class="pf-services-6-row">
					<div class="pf-services-6-left">
						<div class="pf-services-6-sec-title mb-85">
							<?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
							<h6 class="pf-subtitle-5 tx-subTitle"><?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?></h6>
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
							<p class="pf-p-5 sec-disc tx-description"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
							<?php endif; ?>
						</div>

						<!-- services-title -->
						<div class="pf-services-6-title mb-45 wow fadeInUp">
							<div class="swiper-container pf-ser-6-slider">
								<div class="swiper-wrapper">
									<?php foreach($settings['service_slide_boxs'] as $list ) : ?>
									<div class="swiper-slide">
										<div class="pf-services-6-title-single">
											<div class="item-dot"></div>
											<?php if(!empty( $list['title'] )) : ?>
											<h5 class="pf-h-1 title"><?php echo elh_element_kses_intermediate( $list['title'] ); ?></h5>
											<?php endif; ?>
										</div>
									</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>

						<!-- services-content -->
						<div class="pf-services-6-content mb-40 wow fadeInUp">
							<div class="swiper-container wa-fix pf-ser-6-disc">
								<div class="swiper-wrapper">
									<?php foreach($settings['service_slide_boxs'] as $list ) : ?>
									<div class="swiper-slide">
										<?php if(!empty( $list['description'] )) : ?>
										<p class="pf-services-6-content-single pf-p-5">
											<?php echo elh_element_kses_intermediate( $list['description'] ); ?>
										</p>
										<?php endif; ?>
									</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>

						<!-- all-btn -->
						<?php if( $settings['enable_button'] === 'yes' ) : ?>
						<div class="pf-services-6-all-btn wow fadeInUp">
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

					<!-- right-img -->
					<div class="pf-services-6-right wa-p-relative wow fadeInRight">
						<?php if(!empty( $settings['image_2']['url'] )) : ?>
						<img class="pf-services-6-img-border" src="<?php echo esc_url($settings['image_2']['url']); ?>"
						alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_2']['url'] ); } ?>">
						<?php endif; ?>
						<div class="pf-services-6-img ">
							<div class="swiper-container wa-fix pf-ser-6-img-slider">
								<div class="swiper-wrapper">
									<?php foreach($settings['service_slide_boxs'] as $list ) : ?>
									<div class="swiper-slide">
										<?php if( $list['enable_icon'] == true ) : ?>
										<div class="pf-services-6-img-single wa-fix wa-img-cover">
											<?php if ( $list['type'] == 'icon' ): ?>
												<?php \Elementor\Icons_Manager::render_icon( $list['info_icon'], ['aria-hidden' => 'true'] );?>
											<?php else: ?>
												<img src="<?php echo esc_url($list['info_image']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['info_image']['url']) : ''); ?>">
											<?php endif;?>
										</div>
										<?php endif; ?>
									</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php if(!empty( $settings['image_3']['url'] )) : ?>
		<img class="pf-services-6-border" src="<?php echo esc_url($settings['image_3']['url']); ?>"
		alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_3']['url'] ); } ?>">
		<?php endif; ?>
	</div>
</div>