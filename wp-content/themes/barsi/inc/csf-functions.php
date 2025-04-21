<?php

// get theme options
if ( ! function_exists( 'cs_get_option' ) ) {
    function cs_get_option( $option = '', $default = null ) {
        $options = get_option( 'barsi_theme_options' );
        return ( isset( $options[$option] ) ) ? $options[$option] : $default;
    }
}

if ( ! function_exists( 'cs_get_switcher_option' )) {

    function cs_get_switcher_option( $option = '', $default = null ) {
        $options = get_option( 'barsi_theme_options' );
        $return_val =  ( isset( $options[$option] ) ) ? $options[$option] : $default;
        $return_val =  (is_null($return_val) || '1' == $return_val ) ? true : false;;
        return $return_val;
    }
}

if ( ! function_exists( 'cs_switcher_option' )) {

    function cs_switcher_option( $option = '', $default = null ) {
        $options = get_option( 'barsi_theme_options' );
        $return_val =  ( isset( $options[$option] ) ) ? $options[$option] : $default;
        $return_val =  ( '1' == $return_val ) ? true : false;;
        return $return_val;
    }
}

if ( ! function_exists( 'cs_get_radio_option' )) {

    function cs_get_radio_option( $option = '', $default = null ) {
        $options = get_option( 'barsi_theme_options' );
        $return_val =  ( isset( $options[$option] ) ) ? $options[$option] : $default;
        return $return_val;
    }
}

if ( ! function_exists( 'cs_get_select_option' )) {

    function cs_get_select_option( $option = '', $default = null ) {
        $options = get_option( 'barsi_theme_options' );
        $return_val =  ( isset( $options[$option] ) ) ? $options[$option] : $default;
        return $return_val;
    }
}