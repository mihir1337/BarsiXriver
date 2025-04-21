<?php

// DEFINE CONSTANTS
define( 'BARSI_THEME_DIR', get_template_directory() );
define( 'BARSI_THEME_URI', get_template_directory_uri() );
define( 'BARSI_THEME_CSS_DIR', BARSI_THEME_URI . '/assets/css/' );
define( 'BARSI_THEME_JS_DIR', BARSI_THEME_URI . '/assets/js/' );
define( 'BARSI_THEME_INC', BARSI_THEME_DIR . '/inc/' );
define( 'BARSI_CORE_PLUG_DIR', plugins_url( 'barsi-core/assets/' ) );
define( 'BARSI_CORE', in_array( 'barsi-core/barsi-core.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) );

// INCLUDE CS FRAMEWORK FILE
require BARSI_THEME_INC . 'csf-functions.php';

if ( !defined( 'BARSI_WOOCOMMERCE_ACTIVED' ) ) {
    define( 'BARSI_WOOCOMMERCE_ACTIVED', in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) );
}

if ( home_url() == "https://themexriver.com/wp/barsi" OR home_url() == 'http://localhost:10010' ) {
    define( 'VERSION', time() );
} else {
    define( 'VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( BARSI_WOOCOMMERCE_ACTIVED ) {
    /**
     * Remove Action Hook
     */
    function barsi_woo_theme_init(){
        $barsi_exlude_hooks = require BARSI_THEME_INC . 'woocommerce/woo-actions.php';
        foreach( $barsi_exlude_hooks as $k => $v )
        {
            foreach( $v as $value )
            remove_action( $k, $value[0], $value[1] );
        }

    }
    add_action( 'init', 'barsi_woo_theme_init');
}

// INCLUDE BARSI AFTER SETUP
require BARSI_THEME_INC . 'barsi-after-setup.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function barsi_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'barsi_content_width', 640 );
}
add_action( 'after_setup_theme', 'barsi_content_width', 0 );

// INCLUDE BARSI REGISTER WIDGETS
require BARSI_THEME_INC . 'barsi-register-widgets.php';

// INCLUDE BARSI ENQUEUE SCRIPTS
require BARSI_THEME_INC . 'barsi-enqueue-scripts.php';

// INCLUDE CUSTOM HEADER
require BARSI_THEME_INC . 'custom-header.php';

// INCLUDE CUSTOM FUNCTIONS FILE
require BARSI_THEME_INC . 'barsi-functions.php';

// INCLUDE CUSTOM CSS
require BARSI_THEME_INC . 'barsi-custom-css.php';

// INCLUDE DEFAULT COMMENT
require BARSI_THEME_INC . 'barsi-comment.php';

// INCLUDE LOGO FILE
require BARSI_THEME_INC . 'layouts/barsi-logos.php';

// INCLUDE MENU FILE
require BARSI_THEME_INC . 'layouts/barsi-menus.php';

// INCLUDE DEFAULT BREADCRUMB
require BARSI_THEME_INC . 'layouts/barsi-breadcrumb.php';

// INCLUDE ALL ACTION FILE
require BARSI_THEME_INC . 'layouts/barsi-actions.php';

// INCLUDE DEFAULT HEADER
require BARSI_THEME_INC . 'layouts/barsi-default-header.php';

// INCLUDE FOOTER FILE
require BARSI_THEME_INC . 'layouts/barsi-default-footer.php';

// INCLUDE SEARCH WIDGET FILE
require BARSI_THEME_INC . 'barsi-search-widget.php';

// LOAD JETPACK COMPATIBILITY FILE
if ( defined( 'JETPACK__VERSION' ) ) {
    require BARSI_THEME_INC . 'jetpack.php';
}

// ALL CLASS FILE
include_once BARSI_THEME_INC . 'classes/class-barsi-helper.php';
require_once BARSI_THEME_INC . 'classes/class-breadcrumb.php';
require_once BARSI_THEME_INC . 'classes/class-navwalker.php';
require_once BARSI_THEME_INC . 'classes/class-tgm-plugin-activation.php';
require_once BARSI_THEME_INC . 'required-plugin.php';