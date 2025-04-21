<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $pagenow;

/**
 * Load the welcome page content.
 */
function ta_welcome_page() {
    require_once 'tf-welcome.php';
}

/**
 * Load the documentations page content.
 */
function ta_documentations_page() {
    require_once 'tf-documentations.php';
}

/**
 * Redirect to the demo importer page.
 */
function ta_demo_importer_function() {
    return admin_url( 'admin.php?page=tf-demo-importer' );
}

/**
 * Redirect to the theme options page.
 */
function tx_theme_options() {
    return admin_url( 'admin.php?page=barsi-theme-option' );
}

/**
 * Redirect to the plugin installation page.
 */
function tx_install_plugins() {
    return admin_url( 'admin.php?page=tgmpa-install-plugins&plugin_status=install' );
}

/**
 * Check if all required plugins are installed and activated.
 */
if(! class_exists( 'TGM_Plugin_Activation' )) {
    function tx_all_plugins_installed_and_activated() {
        if (class_exists('TGM_Plugin_Activation')) {
            $tgmpa = TGM_Plugin_Activation::get_instance();
        } else {
            return false;
        }
        $plugins = $tgmpa->plugins;

        foreach ( $plugins as $plugin ) {
            if ( ! $tgmpa->is_plugin_installed( $plugin['slug'] ) || ! $tgmpa->is_plugin_active( $plugin['slug'] ) ) {
                return false;
            }
        }
        return true;
    }
}

/**
 * Add theme admin menu and submenus.
 */
function ta_admin_menu() {
    if ( current_user_can( 'edit_theme_options' ) ) {
        add_menu_page(
            tf_theme_name(),
            tf_theme_name(),
            'administrator',
            'tf-admin-menu',
            'ta_welcome_page',
            'dashicons-smiley',
            4
        );

        add_submenu_page(
            'tf-admin-menu',
            'barsi-core',
            esc_html__( 'Welcome', 'barsi-core' ),
            'administrator',
            'tf-admin-menu',
            'ta_welcome_page'
        );

        if(function_exists('tx_all_plugins_installed_and_activated')) {
            if ( ! tx_all_plugins_installed_and_activated() ) {
                add_submenu_page(
                    'tf-admin-menu',
                    esc_html__( 'Install Plugins', 'barsi-core' ),
                    esc_html__( 'Install Plugins', 'barsi-core' ),
                    'administrator',
                    'tgmpa-install-plugins&plugin_status=install',
                    'tx_install_plugins'
                );
            }
        }

        add_submenu_page(
            'tf-admin-menu',
            esc_html__( 'Theme Options', 'barsi-core' ),
            esc_html__( 'Theme Options', 'barsi-core' ),
            'administrator',
            'barsi-theme-option',
            'tx_theme_options'
        );

        add_submenu_page(
            'tf-admin-menu',
            esc_html__( 'Demo Import', 'barsi-core' ),
            esc_html__( 'Demo Import', 'barsi-core' ),
            'administrator',
            'tf-demo-importer',
            'ta_demo_importer_function'
        );

        add_submenu_page(
            'tf-admin-menu',
            'barsi-core',
            esc_html__( 'Documentations', 'barsi-core' ),
            'administrator',
            'tf-documentations',
            'ta_documentations_page'
        );
    }
}
add_action( 'admin_menu', 'ta_admin_menu' );

/**
 * Display a message if all plugins are installed and activated.
 */
if(! class_exists( 'TGM_Plugin_Activation' )) {
    function tx_check_plugins_status() {
        if ( tx_all_plugins_installed_and_activated() ) {
            echo '';
        } else {
            echo '<div class="notice notice-warning is-dismissible"><p>' . esc_html__( 'Some plugins are missing or inactive. Please install and activate all required plugins.', 'barsi-core' ) . '</p></div>';
        }
    }
    add_action( 'admin_notices', 'tx_check_plugins_status' );
}