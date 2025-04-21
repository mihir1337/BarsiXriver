<section class="bs-hero-2-area pt-200 pb-30 wa-fix wa-p-relative tx-section">
    <div class="container bs-container-1">
        <div class="bs-hero-2-wrap mb-155">
            <!-- title-1 -->
            <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
            <h1 class="bs-hero-2-title-1 bs-h-2 wa-split-up wa-fix tilt_scale" data-tilt-max="3" data-split-delay=".8s">
                <?php echo elh_element_kses_basic($settings['sub_title']); ?>
            </h1>
            <?php endif; ?>

            <!-- row -->
            <div class="item-row">
                <?php if(!empty( $settings['image_1']['url'] )) : ?>
                <div class="bs-hero-2-img-1 wa-img-cover wa-fix tilt_scale" data-tilt-max="3">
                    <img src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_1']['url']) : ''; ?>">
                </div>
                <?php endif; ?>

                <?php
                    if($settings['enable_title'] === 'yes') {
                        $this->add_render_attribute( 'title', 'class', 'tx-title bs-hero-2-title-2 bs-h-2 wa-split-up wa-fix tilt_scale' );
                        $this->add_render_attribute( 'title', 'data-split-delay', '1.5s' );
                        $this->add_render_attribute( 'title', 'data-tilt-max', '3' );
                        printf('<%1$s %2$s>%3$s</%1$s>',
                            tag_escape($settings['title_tag']),
                            $this->get_render_attribute_string('title'),
                            elh_element_kses_basic( $settings['title'] )
                        );
                    }
                ?>

                <?php if(!empty( $settings['image_2']['url'] )) : ?>
                <div class="bs-hero-2-img-2 wa-img-cover wa-fix tilt_scale" data-tilt-max="3">
                    <img src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_2']['url']) : ''; ?>">
                </div>
                <?php endif; ?>
            </div>

            <!-- title-2 -->
            <div class="item-row-2">
                <?php if(!empty( $settings['title_2'] )) : ?>
                <h2 class="bs-hero-2-title-3 bs-h-2 wa-split-up wa-fix tilt_scale" data-tilt-max="3" data-split-delay="2.2s">
                    <?php echo elh_element_kses_basic( $settings['title_2'] ); ?>
                </h2>
                <?php endif; ?>

                <?php if(!empty( $settings['title_3'] )) : ?>
                <h3 class="bs-hero-2-title-4 bs-h-2 wa-split-right tilt_scale" data-tilt-max="3" data-split-delay="3s">
                    <?php echo elh_element_kses_basic( $settings['title_3'] ); ?>
                </h3>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- marquee-text -->
    <?php if(!empty( $settings['description'] )) : ?>
    <div class="bs-hero-2-marquee">
        <div class="bs-hero-2-marquee-active">
            <h4 class="bs-h-1 bs-hero-2-marquee-text" data-cursor="-opaque">
                <?php echo elh_element_kses_basic($settings['description']); ?>
            </h4>
        </div>
    </div>
    <?php endif; ?>

    <?php if(!empty( $settings['image_3']['url'] )) : ?>
    <div class="bs-hero-2-bg-shape">
        <img src="<?php echo esc_url($settings['image_3']['url']); ?>" alt="<?php echo function_exists('barsi_img_alt_text') ? barsi_img_alt_text($settings['image_3']['url']) : ''; ?>">
    </div>
    <?php endif; ?>
</section>