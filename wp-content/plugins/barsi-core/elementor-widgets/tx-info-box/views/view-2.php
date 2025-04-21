<?php
if($settings['select_style'] === 'style_1') {
    $class = '';
} else if($settings['select_style'] === 'style_2') {
    $class = 'has-style-2';
} else if($settings['select_style'] === 'style_3') {
    $class = 'has-style-3';
} else if($settings['select_style'] === 'style_4') {
    $class = 'has-style-4';
} else {
    $class = '';
}

?>
<div class="bs-projects-2-item wa-skew-1 <?php echo esc_attr($class); ?>">
    <div class="item-img wa-p-relative wa-fix wa-img-cover">
        <?php if(!empty( $settings['sub_title'] )) : ?>
        <p class="bs-p-1 item-disc">
            <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
            target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
            rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>">
                <?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?>
            </a>
        </p>
        <?php endif; ?>

        <?php if(!empty( $settings['image_1']['url'] )) : ?>
        <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
        target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
        rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name" data-cursor-text="View">
            <img src="<?php echo esc_url( $settings['image_1']['url'] ); ?>"
            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>" />
        </a>
        <?php endif; ?>
    </div>

    <?php if(!empty( $settings['title'] )) : ?>
    <h4 class="bs-h-1 item-title">
        <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
        target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
        rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
        <?php echo elh_element_kses_intermediate( $settings['title'] ); ?>
        </a>
    </h4>
    <?php endif; ?>
</div>