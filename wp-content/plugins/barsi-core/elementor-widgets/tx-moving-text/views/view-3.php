<div class="pf-text-slide-5 pf-a2-slide wa-fix">
    <div class="pf-about-2-slide-text">
        <?php foreach( $settings['list_items'] as $list ) : ?>
            <?php if(!empty( $list['info_label'] )) : ?>
            <h5 class="pf-h-1 item-title"><?php echo esc_html( $list['info_label'] ); ?></h5>
            <?php endif; ?>
            <?php if( $list['enable_icon'] === 'yes' ) : ?>
                <?php if( $list['type'] === 'icon' ) : ?>
                    <?php \Elementor\Icons_Manager::render_icon( $list['list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url( $list['list_image']['url'] ); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $list['list_image']['url'] ); } ?>">
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>