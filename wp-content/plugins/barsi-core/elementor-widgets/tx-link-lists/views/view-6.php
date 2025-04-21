<div class="vt-current-opening-wrap d-flex justify-content-end">
    <div class="vt-current-opening-content">
        <?php foreach( $settings['list_items'] as $list ) :
            if($list['link_type'] === 'email') {
                $link_url = 'mailto:' . $list['list_link']['url'];
            } elseif( $list['link_type'] === 'phone' ) {
                $link_url = 'tel:' . $list['list_link']['url'];
            } else {
                $link_url = $list['list_link']['url'];
            }
        ?>
        <div class="vt-current-opening-item position-relative headline pera-content">
            <?php if(!empty( $list['info_label'] )) : ?>
            <h3><a href="<?php echo esc_url( $link_url ); ?>"><?php echo elh_element_kses_intermediate( $list['info_label'] ); ?></a></h3>
            <?php endif; ?>

            <?php if(!empty( $list['info_text'] )) : ?>
            <span><?php echo elh_element_kses_intermediate( $list['info_text'] ); ?></span>
            <?php endif; ?>

            <?php if( $list['enable_icon'] === 'yes' ) : ?>
            <div class="item-arrow">
                <a href="<?php echo esc_url( $link_url ); ?>">
                <?php if( $list['type'] === 'icon' ) : ?>
                    <?php \Elementor\Icons_Manager::render_icon( $list['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url( $list['list_image']['url'] ); ?>" alt="<?php echo esc_attr( $list['list_image']['alt'] ); ?>">
                <?php endif; ?>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>