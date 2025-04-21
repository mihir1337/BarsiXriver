<div class="bs-work-process-item">
    <?php foreach($settings['service_lists'] as $list ) : ?>
    <div class="bs-work-process-item-single">
        <?php if(!empty( $list['image_1']['url'] )) : ?>
        <div class="item-img wa-fix wa-img-cover">
            <img src="<?php echo esc_url($list['image_1']['url']); ?>"
            alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
        </div>
        <?php endif; ?>
        <div class="item-line"></div>
        <div class="content">
            <?php if(!empty( $list['count'] )) : ?>
            <h4 class="bs-h-4 number">
                <?php echo esc_html($list['count']); ?>
            </h4>
            <?php endif; ?>
            <h5 class="bs-h-4 title"><?php echo elh_element_kses_intermediate($list['title']); ?></h5>
            <?php if(!empty( $list['description'] )) : ?>
            <p class="bs-p-4 disc"><?php echo elh_element_kses_intermediate($list['description']); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>