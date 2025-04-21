<div class="bs-projects-3-slider">
    <div class="swiper-container bs-p3-active wa-fix">
        <div class="swiper-wrapper">
            <?php foreach($settings['service_lists'] as $list ) :
                if($list['select_style'] === 'style_1') {
                    $class = '';
                } else if($list['select_style'] === 'style_2') {
                    $class = 'has-lg-size';
                } else if($list['select_style'] === 'style_3') {
                    $class = 'has-md-size';
                } else if($list['select_style'] === 'style_4') {
                    $class = 'has-sm-size';
                } else {
                    $class = '';
                }

            ?>
            <div class="swiper-slide">
                <div class="bs-projects-3-item <?php echo esc_attr($class); ?>">
                    <div class="item-img wa-fix wa-img-cover" >
                        <img src="<?php echo esc_url($list['image_1']['url']); ?>"
                        alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
                    </div>
                    <?php if(!empty( $list['title'] )) : ?>
                    <a href="<?php echo esc_url($list['button_link']['url']); ?>"
                    target="<?php echo esc_attr($list['button_link']['is_external'] ? '_blank' : '_self'); ?>"
                    rel="<?php echo esc_attr($list['button_link']['nofollow'] ? 'nofollow' : ''); ?>"
                    class="bs-h-2 title" data-cursor-text="<?php echo esc_attr__('View', 'barsi-core'); ?>">
                        <?php echo elh_element_kses_intermediate($list['title']); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>