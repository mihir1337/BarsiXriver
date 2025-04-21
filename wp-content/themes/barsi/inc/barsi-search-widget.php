<?php
// barsi_search_filter_form
if ( !function_exists( 'barsi_search_filter_form' ) ) {
    function barsi_search_filter_form( $form ) {

        $form = sprintf(
            '<div class="search-widget"><form class="tx-search-widget tx-input-field bs-sidebar-search" action="%s" method="get">
                <input type="search" value="%s" required name="s" placeholder="%s" class="bs-sidebar-search-input">
                <button type="submit" aria-label="search" class="bs-sidebar-search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
		    </form></div>',
            esc_url( home_url( '/' ) ),
            esc_attr( get_search_query() ),
            esc_html__( 'Search...', 'barsi' )
        );

        return $form;
    }
    add_filter( 'get_search_form', 'barsi_search_filter_form' );
    add_filter('render_block_core/search', 'barsi_search_filter_form');
}


// woocommerce search widget form
if ( BARSI_WOOCOMMERCE_ACTIVED && !function_exists( 'barsi_woocommerce_product_search' ) ) {
    function barsi_woocommerce_product_search( $form ) {

        $form = sprintf(
            '<div class="search-widget"><form class="tx-search-widget tx-input-field bs-sidebar-search" action="%s" method="get">
                <input type="search" value="%s" required name="s" placeholder="%s" class="bs-sidebar-search-input">
                <button type="submit" aria-label="search" class="bs-sidebar-search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form></div>',
            esc_url( home_url( '/' ) ),
            esc_attr( get_search_query() ),
            esc_html__( 'Search...', 'barsi' )
        );

        return $form;
    }
    add_filter( 'get_product_search_form', 'barsi_woocommerce_product_search' );
    add_filter('render_block_core/search', 'barsi_woocommerce_product_search');
}