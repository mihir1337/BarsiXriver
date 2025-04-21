<section class="bs-work-5-area wa-bg-default pt-135 pb-170 tx-section" data-background="<?php echo esc_url($settings['image_1']['url']) ? esc_url($settings['image_1']['url']) : ''; ?>">
    <div class="container bs-container-2">

        <!-- section-title -->
        <div class="bs-work-5-sec-title mb-90">
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

        <!-- cards -->
        <div class="bs-work-5-wrap">
            <!-- single-card -->
            <?php foreach($settings['service_slide_boxs'] as $list ) :
                if($list['anim_style'] === 'style_1') {
                    $anim_class = 'has-ani-up';
                } else if($list['anim_style'] === 'style_2') {
                    $anim_class = 'has-ani-down';
                } else {
                    $anim_class = '';
                }
            ?>
            <div class="bs-work-5-card <?php echo esc_attr($anim_class); ?>">
                <?php if(!empty( $list['image_1']['url'] )) : ?>
                <div class="bg-img wa-img-cover wa-fix">
                    <img src="<?php echo esc_url($list['image_1']['url']); ?>" alt="<?php echo esc_attr(function_exists('barsi_img_alt_text') ? barsi_img_alt_text($list['image_1']['url']) : ''); ?>">
                </div>
                <?php endif; ?>

                <?php if(!empty( $list['title'] )) : ?>
                <h4 class="bs-h-1 title"><?php echo elh_element_kses_intermediate( $list['title'] ); ?></h4>
                <?php endif; ?>

                <?php if(!empty( $list['description'] )) : ?>
                <p class="bs-p-4 disc">
                    <?php echo elh_element_kses_intermediate( $list['description'] ); ?>
                </p>
                <?php endif; ?>

                <?php if(!empty( $list['count'] )) : ?>
                <h5 class="bs-h-1 number"><?php echo esc_html($list['count']); ?></h5>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>