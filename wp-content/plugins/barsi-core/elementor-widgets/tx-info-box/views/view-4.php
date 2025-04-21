<?php if( $settings['column_reverse_order'] === 'yes' ) {
    $class = 'flex-column-reverse';
} else {
    $class = '';
}

?>
<div class="pf-story-1-card-single <?php echo esc_attr($class); ?> wow fadeInUp">
    <div class="content">
        <?php if(!empty( $settings['title'] )) : ?>
        <h4 class="card-titile pf-h-5">
            <a href="<?php echo esc_url($settings['button_link']['url']); ?>"
            target="<?php echo esc_attr($settings['button_link']['is_external'] ? '_blank' : '_self'); ?>"
            rel= "<?php echo esc_attr($settings['button_link']['nofollow'] ? 'nofollow' : ''); ?>">
                <?php echo elh_element_kses_intermediate( $settings['title'] ); ?>
            </a>
        </h4>
        <?php endif; ?>

        <?php if(!empty( $settings['description'] )) : ?>
        <p class="card-disc pf-p-6 tx-description"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
        <?php endif; ?>
    </div>

    <?php if(!empty( $settings['info_image']['url'] )) : ?>
    <div class="card-img fix wa-img-cover">
        <img src="<?php echo esc_url( $settings['info_image']['url'] ); ?>"
    alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['info_image']['url'] ); } ?>" />
    </div>
    <?php endif; ?>
</div>