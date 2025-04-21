<div class="bs-career-single-sidebar">
    <ul class="bs-career-single-sidebar-list wa-list-style-none">
        <?php foreach( $settings['list_items'] as $list ) : ?>
        <li>
            <?php if( $list['enable_icon'] === 'yes' ) : ?>
                <?php if( $list['type'] === 'icon' ) : ?>
                    <?php \Elementor\Icons_Manager::render_icon( $list['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url( $list['list_image']['url'] ); ?>" alt="<?php echo esc_attr( $list['list_image']['alt'] ); ?>">
                    <?php endif; ?>
            <?php endif; ?>
            <?php echo elh_element_kses_intermediate( $list['info_label'] ); ?>
            <span>
                <?php echo elh_element_kses_intermediate( $list['info_text'] ); ?>
            </span>
        </li>
        <?php endforeach; ?>
    </ul>
</div>