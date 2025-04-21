<?php $rand = rand( 1, 1000 ); ?>
<div class="bs-accordion has-details-page" id="accordionExample_<?php echo esc_attr($rand); ?>">
    <?php
        foreach ( $settings['faq_lists'] as $id => $list ):
        $is_active = $list['is_active'] == 'yes' ? 'active' : '';
        $show = $list['is_active'] == 'yes' ? 'show' : '';
        $aria_expanded = $list['is_active'] == 'yes' ? 'true' : 'false';
        $collapsed = $list['is_active'] == 'yes' ? '' : 'collapsed';
    ?>
    <div class="bs-accordion-item wa-fadeInUp <?php echo esc_attr($is_active) ?>">
        <div class="item-header" id="heading-<?php echo esc_attr($rand . '-' . $id); ?>">
            <button class="item-title bs-h-1 <?php echo esc_attr($collapsed); ?>"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse-<?php echo esc_attr($rand . '-' . $id); ?>"
                aria-expanded="<?php echo esc_attr($aria_expanded); ?>"
                aria-controls="collapse-<?php echo esc_attr($rand . '-' . $id); ?>">
                <span class="dot"></span>
                <?php echo elh_element_kses_intermediate($list['title']); ?>
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