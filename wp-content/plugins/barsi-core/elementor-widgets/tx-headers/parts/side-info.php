<?php
$design_style = $settings['design_style'];

$class = 'has-home-2';
$mobile_menu_class = 'd-block d-lg-none';

if ( in_array( $design_style, [ 'style_1', 'style_6' ], true ) ) {
    $class = '';
    $mobile_menu_class = '';
}
?>

<div class="wa-offcanvas-area offcanvas_box_active lenis lenis-smooth <?php echo esc_attr($class); ?>">
    <div class="wa-offcanvas-wrap ">
        <!-- top -->
        <div class="wa-offcanvas-top">
            <!-- logo -->
            <?php if( $settings['enable_mobile_logo'] === 'yes' ) : ?>
            <a href="<?php echo esc_url($custom_link); ?>" class="wa-offcanvas-top-logo" aria-label="Site Logo"  >
                <img src="<?php echo esc_url($settings['mobile_logo']['url']); ?>" alt="<?php if(function_exists('builta_img_alt_text')) { echo builta_img_alt_text( $settings['mobile_logo']['url'] ); } ?>">
            </a>
            <?php endif; ?>

            <!-- close-btn -->
            <button class="wa-offcanvas-close offcanvas_box_close" aria-label="name" >
                <span></span>
                <span></span>
            </button>
        </div>

        <!-- mobile-menu-list -->
        <?php if ( !empty( $settings['select_mobile_menu'] ) ) : ?>
        <nav class="mobile-main-navigation mb-50 <?php echo esc_attr($mobile_menu_class); ?>">
            <?php
                $menu_args = [
                    'menu'        => '' . $settings['select_mobile_menu'] . '',
                    'menu_class'     => 'nav navbar-nav clearfix list-unstyled',
                    'menu_id'        => 'main-nav',
                    'walker'         => class_exists('Tx_Mega_Menu_Walker') ? new Tx_Mega_Menu_Walker : '',
                    'fallback_cb'    => ['Navwalker_Class', 'fallback'],
                    'echo'           => false,
                ];

                $menu = wp_nav_menu($menu_args);
                $menu = str_replace('menu-item-has-children', 'dropdown', $menu);
                $menu = str_replace('sub-menu', 'dropdown-menu', $menu);

                echo wp_kses_post($menu);
            ?>
        </nav>
        <?php endif; ?>

        <?php if( $settings['enable_gallery'] === 'yes' ) : ?>
        <div class="wa-offcanvas-gallery">
            <?php if(!empty( $settings['gallery_heading'] )) : ?>
            <h6 class="wa-offcanvas-gallery-title bs-h-1 ">
                <?php echo elh_element_kses_intermediate($settings['gallery_heading']); ?>
            </h6>
            <?php endif; ?>

            <div class="wa-offcanvas-gallery-grid">
                <?php foreach ( $settings['gallerys'] as $key => $brand ) :
                    if (!empty($brand['url'])) {
                        $brand_image = $brand['url'];
                    }

                    // alt
                    if (!empty($brand['alt'])) {
                        $brand_alt = $brand['alt'];
                    } else {
                        $brand_alt = '';
                    }
                ?>
                <a href="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" aria-label="name" class="popup-img wa-offcanvas-gallery-item wa-img-cover wa-fix">
                    <img src="<?php echo $brand_image ? esc_url($brand_image) : ''; ?>" alt="<?php echo esc_attr($brand_alt); ?>">
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>


        <!-- social -->
        <?php if( $settings['enable_social_links'] === 'yes' ) : ?>
        <div class="wa-offcanvas-social">
            <?php if(!empty( $settings['social_heading'] )) : ?>
            <h6 class="wa-offcanvas-social-title bs-h-1"><?php echo elh_element_kses_intermediate($settings['social_heading']); ?></h6>
            <?php endif; ?>

            <div class="wa-offcanvas-social-flex d-flex flex-wrap">
                <?php foreach($settings['social_links'] as $list ) : ?>
                <a href="<?php echo esc_url($list['social_link']['url']) ?>"
                    target="<?php echo esc_attr( $list['social_link']['is_external'] ? '_blank' : '_self' ); ?>"
                    rel="<?php echo esc_attr( $list['social_link']['nofollow'] ? 'nofollow' : '' ); ?>"
                    class="wa-offcanvas-social-link" aria-label="name">
                    <?php \Elementor\Icons_Manager::render_icon( $list['social_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>