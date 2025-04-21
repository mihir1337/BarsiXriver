<div class="bs-choose-4-progress-item">

    <h5 class="bs-p-1 progress-title" style="width: <?php echo esc_attr($settings['skill_percentage']); ?>%;">
        <?php if(!empty( $settings['progress_title'] )) : ?>
        <span>
            <?php echo elh_element_kses_intermediate($settings['progress_title']); ?>
        </span>
        <?php endif; ?>

        <?php if(!empty( $settings['skill_percentage'] )) : ?>
        <span class="counter"><?php echo esc_html($settings['skill_percentage']); ?></span>%
        <?php endif; ?>
    </h5>
    <?php if(!empty( $settings['skill_percentage'] )) : ?>
    <div class="progress-line">
        <div class="progress-line-fill wa-progress"
        style="width: <?php echo esc_attr($settings['skill_percentage']); ?>%;"></div>
    </div>
    <?php endif; ?>
</div>