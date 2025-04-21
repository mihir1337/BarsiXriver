<ul class="bs-footer-1-copyright-menu wa-list-style-none justify-content-end">
<?php foreach( $settings['list_items'] as $list ) : ?>
    <li>
        <a href="<?php echo esc_url( $list['list_link']['url'] ); ?>"
        target="<?php echo esc_attr( $list['list_link']['is_external'] ? '_blank' : '_self' ); ?>"
        rel="<?php echo esc_attr( $list['list_link']['nofollow'] ? 'nofollow' : '' ); ?>">
             <?php if( $list['enable_icon'] === 'yes' ) : ?>
                <?php if( $list['type'] === 'icon' ) : ?>
                    <?php \Elementor\Icons_Manager::render_icon( $list['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url( $list['list_image']['url'] ); ?>" alt="<?php echo esc_attr( $list['list_image']['alt'] ); ?>">
                    <?php endif; ?>
            <?php endif; ?>
            <?php echo elh_element_kses_intermediate( $list['info_text'] ); ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>