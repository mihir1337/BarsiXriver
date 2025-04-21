<p class="bs-p-1 bs-blog-1-all-btn text-center wa-fadeInUp">
    <?php echo wp_kses($settings['info_text'], true); ?>

    <?php if( $settings['enable_button'] === 'yes' ) : ?>
    <a href="<?php echo esc_url($settings['link_url']['url']); ?>"
    target="<?php echo esc_attr($settings['link_url']['is_external'] ? '_blank' : '_self'); ?>"
    rel="<?php echo esc_attr($settings['link_url']['nofollow'] ? 'nofollow' : ''); ?>" aria-label="name">
        <?php echo wp_kses($settings['link_text'], true); ?>
    </a>
    <?php endif; ?>
</p>