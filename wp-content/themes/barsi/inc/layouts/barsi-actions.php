<?php

/**
 *
 * barsi header
 */
function barsi_check_header() {
    $id = get_the_ID();

    if ( get_option( 'page_for_posts' ) ) {
        $id = get_the_ID();
    }
    if ( BARSI_WOOCOMMERCE_ACTIVED && is_shop() ) {
        $id = get_option( 'woocommerce_shop_page_id' );
    }
    $header_meta = get_post_meta( $id, 'tx_page_meta', true ) ? get_post_meta( $id, 'tx_page_meta', true ) : [];
    $page_header_disable = array_key_exists( 'page_header_disable', $header_meta ) ? $header_meta['page_header_disable'] : false;

    if ( $page_header_disable != true ) {
        Barsi_Helper::barsi_header_template();
    }

}
add_action( 'barsi_header_style', 'barsi_check_header', 10 );

/**
 *
 * barsi footer
 */
function barsi_check_footer() {
    $id = get_the_ID();

    if ( get_option( 'page_for_posts' ) ) {
        $id = get_the_ID();
    }
    if ( BARSI_WOOCOMMERCE_ACTIVED && is_shop() ) {
        $id = get_option( 'woocommerce_shop_page_id' );
    }

    $footer_meta = get_post_meta( $id, 'tx_page_meta', true ) ? get_post_meta( $id, 'tx_page_meta', true ) : [];
    $page_footer_disable = array_key_exists( 'page_footer_disable', $footer_meta ) ? $footer_meta['page_footer_disable'] : false;

    if ( $page_footer_disable != true ) {
        Barsi_Helper::barsi_footer_template();
    }
}
add_action( 'barsi_footer_style', 'barsi_check_footer', 10 );