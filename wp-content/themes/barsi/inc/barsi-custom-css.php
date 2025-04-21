<?php

// File Security Check
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

function barsi_primary_color() {

    wp_enqueue_style( 'barsi-primary-color', BARSI_THEME_CSS_DIR . 'barsi-custom.css', [] );

    $theme_color_1 = cs_get_option( 'theme_color_1', '#f16319' );
    $theme_color_2 = cs_get_option( 'theme_color_2', '#C4EF17' );
    $theme_color_3 = cs_get_option( 'theme_color_3', '#060606' );

    if (
        $theme_color_1 ||
        $theme_color_2 ||
        $theme_color_3
    ) {
        $custom_css = '';
        $custom_css .= '
            :root {
                --bs-clr-pr-1: ' . esc_attr( $theme_color_1 ) . ';
                --lw-clr-sd-1: ' . esc_attr( $theme_color_2 ) . ';
                --bs-clr-h-4: ' . esc_attr( $theme_color_3 ) . ';
            }
        ';

        wp_add_inline_style( 'barsi-primary-color', $custom_css );
    }

}
add_action( 'wp_enqueue_scripts', 'barsi_primary_color' );