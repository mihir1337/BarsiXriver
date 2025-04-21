<section class="bs-hero-5-area wa-bg-default wa-p-relative wa-fix wa-bg-parallax" data-background="<?php echo esc_url($settings['image_1']['url']) ? esc_url($settings['image_1']['url']) : ''; ?>">
    <div class="container bs-container-2">
        <div class="bs-hero-5-wrap">
            <!-- left-img -->
            <?php if(!empty( $settings['image_2']['url'] )) : ?>
            <div class="bs-hero-5-img wa-img-cover wa-fix">
                <img src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''; ?>">
            </div>
            <?php endif; ?>

            <div class="bs-hero-5-right">
                <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                <h1 class="bs-hero-5-title-1 bs-h-4 wa-split-right tx-subTitle" data-split-delay="1.5s">
                    <?php echo elh_element_kses_basic($settings['sub_title']); ?>
                </h1>
                <?php endif; ?>

                <div class="inner-div-1">
                    <?php if( $settings['enable_description'] === 'yes' ) : ?>
                    <p class="bs-p-4 bs-hero-5-disc tx-description"><?php echo elh_element_kses_basic($settings['description']); ?></p>
                    <?php endif; ?>
                    <?php if( $settings['enable_moving_text'] === 'yes' ) : ?>
                    <h2 class="bs-hero-5-title-2 bs-h-4 wa-split-right cd-headline clip" data-split-delay="2s">
                        <span class="cd-words-wrapper single-headline">
                        <?php foreach ( $settings['moving_texts'] as $list ) :
                            $is_active = $list['is_active'] ? 'is-visible' : '';
                        ?>
                            <b<?php echo $is_active ? ' class="' . $is_active . '"' : ''; ?>>
                                <?php echo elh_element_kses_intermediate( $list['text'] ); ?>
                            </b>
                        <?php endforeach; ?>

                        </span>
                    </h2>
                    <?php endif; ?>
                </div>

                <div class="inner-div-2">
                    <?php if(!empty( $settings['heading_button_link']['url'] )) : ?>
                    <a class="bs-hero-5-btn wa-magnetic" href="<?php echo esc_url($settings['heading_button_link']['url']); ?>"
                    target="<?php echo esc_attr($settings['heading_button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($settings['heading_button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" >
                        <span class="icon wa-bg-default" data-background="<?php echo esc_url($settings['image_3']['url']) ? esc_url($settings['image_3']['url']) : ''; ?>">
                            <?php \Elementor\Icons_Manager::render_icon( $settings['heading_button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </span>
                        <span class="btn-border has-border-1"></span>
                        <span class="btn-border has-border-2"></span>
                        <span class="btn-border has-border-3"></span>
                    </a>
                    <?php endif; ?>

                    <?php if(!empty( $settings['bottom_heading'] )) : ?>
                    <h3 class="bs-hero-5-title-3 bs-h-4 wa-split-right " data-split-delay="2.5s">
                        <?php echo elh_element_kses_intermediate( $settings['bottom_heading'] ); ?>
                    </h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php if(!empty( $settings['image_4']['url'] )) : ?>
    <div class="bs-hero-5-bg-img">
        <img src="<?php echo esc_url($settings['image_4']['url']); ?>"
        alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_4']['url']) : ''; ?>">
    </div>
    <?php endif; ?>

    <div class="bs-hero-5-bg-circle"></div>
</section>