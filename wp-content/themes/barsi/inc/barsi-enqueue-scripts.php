<?php

/**
 * barsi_scripts description
 * @return [type] [description]
 */
function barsi_scripts() {

    wp_enqueue_style( 'barsi-fonts', barsi_fonts_url(), [], null );
    wp_enqueue_style( 'animate-min', BARSI_THEME_CSS_DIR . 'animate-min.css', [], VERSION );
    wp_enqueue_style( 'bootstrap-min', BARSI_THEME_CSS_DIR . 'bootstrap.min.css', [] );
    wp_enqueue_style( 'swiper-min', BARSI_THEME_CSS_DIR . 'swiper.min.css', [], VERSION );
    wp_enqueue_style( 'fontawesome-min', BARSI_THEME_CSS_DIR . 'fontawesome-min.css', [] );
    wp_enqueue_style( 'nice-select', BARSI_THEME_CSS_DIR . 'nice-select.css', [], VERSION );
    wp_enqueue_style( 'magnific-popup', BARSI_THEME_CSS_DIR . 'magnific-popup.css', [], VERSION );
    // THEME REQUIRED CSS
    wp_enqueue_style( 'barsi-core', BARSI_THEME_CSS_DIR . 'barsi-core.css', [], VERSION );
    wp_enqueue_style( 'barsi-companion', BARSI_THEME_CSS_DIR . 'barsi-companion.css', [] );
    wp_enqueue_style( 'barsi-extra', BARSI_THEME_CSS_DIR . 'barsi-extra.css', [] );
    wp_enqueue_style( 'barsi-custom', BARSI_THEME_CSS_DIR . 'barsi-custom.css', [] );
    wp_enqueue_style( 'barsi-woocommerce', BARSI_THEME_CSS_DIR . 'barsi-woocommerce.css', [] );
    wp_enqueue_style( 'barsi-style', get_stylesheet_uri() );

    if ( class_exists('WooCommerce') ) {
		wp_enqueue_style( 'woocommerce-style', get_template_directory_uri() . '/woocommerce/woocommerce.css' );
	}

    $my_current_lang = apply_filters( 'wpml_current_language', NULL );

    $enable_rtl = cs_get_option( 'enable_rtl', false );
    if ( $my_current_lang != 'en' && $enable_rtl || is_rtl() ) {
        wp_enqueue_style( 'barsi-rtl', BARSI_THEME_CSS_DIR . 'barsi-rtl.css', [] );
    }

    // all js files
    wp_enqueue_script( 'bootstrap-min', BARSI_THEME_JS_DIR . 'bootstrap-min.js', ['jquery'], false, true );
    wp_enqueue_script( 'swiper-min', BARSI_THEME_JS_DIR . 'swiper.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'wow-min', BARSI_THEME_JS_DIR . 'wow-min.js', ['jquery'], false, true );
    wp_enqueue_script( 'nice-select', BARSI_THEME_JS_DIR . 'nice-select.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'jquery-marquee-min', BARSI_THEME_JS_DIR . 'jquery.marquee.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'magnific-popup-min', BARSI_THEME_JS_DIR . 'magnific-popup.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'SplitText-min', BARSI_THEME_JS_DIR . 'SplitText.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'gsap-min', BARSI_THEME_JS_DIR . 'gsap.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'customEase-min', BARSI_THEME_JS_DIR . 'customEase.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'counterup-min', BARSI_THEME_JS_DIR . 'counterup.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'waypoints-min', BARSI_THEME_JS_DIR . 'waypoints.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'lenis-min', BARSI_THEME_JS_DIR . 'lenis.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'scrollTrigger-min', BARSI_THEME_JS_DIR . 'scrollTrigger.min.js', ['jquery'], false, true );
    wp_enqueue_script( 'text-type', BARSI_THEME_JS_DIR . 'text-type.js', ['jquery'], false, true );
    wp_enqueue_script( 'matter', BARSI_THEME_JS_DIR . 'matter.js', ['jquery'], false, true );
    wp_enqueue_script( 'throwable', BARSI_THEME_JS_DIR . 'throwable.js', ['jquery'], false, true );
    wp_enqueue_script( 'tilt', BARSI_THEME_JS_DIR . 'tilt.js', ['jquery'], false, true );
    wp_enqueue_script( 'touchspin', BARSI_THEME_JS_DIR . 'touchspin.js', ['jquery'], false, true );
    wp_enqueue_script( 'barsi-custom', BARSI_THEME_JS_DIR . 'barsi-custom.js', ['jquery'], false, true );

    if ( $my_current_lang != 'en' && $enable_rtl || is_rtl() ) {
        wp_enqueue_script( 'barsi-core-rtl', BARSI_THEME_JS_DIR . 'barsi-core-rtl.js', ['jquery'], VERSION, true );
    } else {
        wp_enqueue_script( 'barsi-core', BARSI_THEME_JS_DIR . 'barsi-core.js', ['jquery'], VERSION, true );
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'barsi_scripts' );
