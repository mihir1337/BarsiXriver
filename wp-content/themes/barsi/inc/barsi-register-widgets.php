<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 */

function barsi_widgets_init() {

    /**
     * blog sidebar
     */
    register_sidebar( [
        'name'          => esc_html__( 'Blog Sidebar', 'barsi' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="tx-blog-widget widget bs-blog-page-sidebar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title widget-title bs-h-4 pf-h-5">',
        'after_title'   => '</h4>',
    ] );

    if ( BARSI_WOOCOMMERCE_ACTIVED ) {
        // shop sidebar
        register_sidebar( [
            'name'          => esc_html__( 'Product Sidebar', 'barsi' ),
            'id'            => 'product-sidebar',
            'before_widget' => '<div id="%1$s" class="tx-blog-widget widget bs-blog-page-sidebar-widget mt-30 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title bs-h-4 pf-h-5">',
            'after_title'   => '</h4>',
        ] );
    }

    $footer_widgets = cs_get_option( 'footer_widget_number' );

}
add_action( 'widgets_init', 'barsi_widgets_init' );