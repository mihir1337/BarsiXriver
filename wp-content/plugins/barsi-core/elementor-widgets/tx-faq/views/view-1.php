<?php $rand = rand( 1, 1000 ); ?>
<div class="bs-accordion" id="accordionExample_<?php echo esc_attr($rand); ?>">
    <?php
        foreach ( $settings['faq_lists'] as $id => $list ):
        $is_active = $list['is_active'] == 'yes' ? 'faq_active' : '';
        $show = $list['is_active'] == 'yes' ? 'show' : '';
        $aria_expanded = $list['is_active'] == 'yes' ? 'true' : 'false';
        $collapsed = $list['is_active'] == 'yes' ? '' : 'collapsed';
    ?>
    <div class="bs-accordion-item wa-fadeInUp">
        <div class="item-header" id="heading-<?php echo esc_attr($rand . '-' . $id); ?>">
            <button class="item-title bs-h-1 <?php echo esc_attr($collapsed); ?>"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse-<?php echo esc_attr($rand . '-' . $id); ?>"
                aria-expanded="<?php echo esc_attr($aria_expanded); ?>"
                aria-controls="collapse-<?php echo esc_attr($rand . '-' . $id); ?>">
                <?php if(!empty( $list['image_1']['url'] )) : ?>
                <span class="shape">
                    <img src="<?php echo esc_url($list['image_1']['url']); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['image_1']['url'] ); } ?>">
                </span>
                <?php endif; ?>
                <?php echo elh_element_kses_intermediate($list['title']); ?>

                <?php if(!empty( $list['right_icon'] )) : ?>
                <span class="icon">
                    <?php \Elementor\Icons_Manager::render_icon( $list['right_icon'], ['aria-hidden' => 'true'] ); ?>
                </span>
                <?php endif; ?>
            </button>
        </div>
        <div id="collapse-<?php echo esc_attr($rand . '-' . $id); ?>"
            class="accordion-collapse collapse <?php echo esc_attr($show); ?>"
            aria-labelledby="heading-<?php echo esc_attr($rand . '-' . $id); ?>"
            data-bs-parent="#accordionExample_<?php echo esc_attr($rand); ?>">
            <div class="item-body ">
                <p class="bs-p-1">
                    <?php echo elh_element_kses_intermediate($list['content']); ?>
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>