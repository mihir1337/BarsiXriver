<div class="pf-career-opening-1-item wow fadeInUp">
    <?php if(!empty( $settings['title'] )) : ?>
    <h4 class="item-title pf-h-5">
    <a href="<?php echo esc_url( $settings['button_link']['url'] ); ?>"
        target="<?php echo esc_attr( $settings['button_link']['is_external'] ? '_blank' : '_self' ); ?>"
        rel="<?php echo esc_attr( $settings['button_link']['nofollow'] ? 'nofollow' : '' ); ?>"
        aria-label="name"><?php echo elh_element_kses_intermediate( $settings['title'] ); ?></a>
    </h4>
    <?php endif; ?>
    <?php if(!empty( $settings['description'] )) : ?>
    <p class="item-disc pf-p-6 tx-description"><?php echo elh_element_kses_intermediate( $settings['description'] ); ?></p>
    <?php endif; ?>

    <?php if( $settings['enable_job_info'] === 'yes' ) : ?>
    <ul class="item-tag pf-h-5 list-unstyled">
        <?php foreach($settings['job_infos'] as $list) : ?>
        <li><?php echo esc_html($list['job_info']); ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</div>