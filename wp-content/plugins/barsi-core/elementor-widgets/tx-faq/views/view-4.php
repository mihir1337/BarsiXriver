<?php $rand = rand( 1, 1000 ); ?>
<div class="pf-accordion has-v8" id="accordionExample_<?php echo esc_attr($rand); ?>">
    <?php
        foreach ( $settings['faq_lists'] as $id => $list ):
        $is_active = $list['is_active'] == 'yes' ? 'faq_active' : '';
        $show = $list['is_active'] == 'yes' ? 'show' : '';
        $aria_expanded = $list['is_active'] == 'yes' ? 'true' : 'false';
        $collapsed = $list['is_active'] == 'yes' ? '' : 'collapsed';
    ?>
    <div class="pf-accordion-item wow fadeInUp"  >
        <div class="item-header" id="heading1">
            <button class="item-title pf-h-1 <?php echo esc_attr($collapsed); ?>"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse-<?php echo esc_attr($rand . '-' . $id); ?>"
                aria-expanded="<?php echo esc_attr($aria_expanded); ?>"
                aria-controls="collapse-<?php echo esc_attr($rand . '-' . $id); ?>">
                <?php if( $settings['enable_left_shape'] === 'yes' ) : ?>
                <span class="shape">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0387 9.18532C9.62415 4.0435 5.32 0 0.071429 0C0.071429 5.22424 4.07753 9.51281 9.18532 9.96128C4.0435 10.3758 2.29422e-07 14.68 0 19.9286C5.22424 19.9286 9.51281 15.9225 9.96128 10.8147C10.3758 15.9565 14.68 20 19.9286 20C19.9286 14.7758 15.9225 10.4872 10.8147 10.0387C15.9565 9.62416 20 5.32 20 0.0714286C14.7758 0.0714283 10.4872 4.07753 10.0387 9.18532ZM9.99975 10.0002L10.0002 10.0003L10.0003 9.99975C10.0001 9.99975 9.99975 9.99975 9.99975 9.99975V10.0002Z" fill="#2AC8D3"/>
                    </svg>
                </span>
                <?php endif; ?>

                <?php echo elh_element_kses_intermediate($list['title']); ?>
                <span class="icon">
                    <i class="fa-solid fa-plus"></i>
                </span>
            </button>
        </div>
        <div id="collapse-<?php echo esc_attr($rand . '-' . $id); ?>"
            class="accordion-collapse collapse <?php echo esc_attr($show); ?>"
            aria-labelledby="heading-<?php echo esc_attr($rand . '-' . $id); ?>"
            data-bs-parent="#accordionExample_<?php echo esc_attr($rand); ?>">
            <div class="item-body ">
                <p class="pf-p-1">
                    <?php echo elh_element_kses_intermediate($list['content']); ?>
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>