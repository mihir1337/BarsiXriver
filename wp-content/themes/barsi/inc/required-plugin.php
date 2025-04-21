<?php

add_action( 'tgmpa_register', 'barsi_register_required_plugins' );

function barsi_register_required_plugins() {

    $plugins = [
        [
            'name'               => esc_html__( 'Barsi Core', 'barsi' ),
            'slug'               => 'barsi-core',
            'source'             => esc_url( 'https://themexriver.com/wp/barsi/barsi-plug/barsi-core.zip' ),
            'external_url'       => esc_url( 'https://themexriver.com/wp/barsi/barsi-plug/barsi-core.zip' ),
            'required'           => true,
            'force_activation'   => false,
            'force_deactivation' => false,
        ],
        [
            'name'     => esc_html__( 'Elementor Page Builder', 'barsi' ),
            'slug'     => 'elementor',
            'required' => true,
        ],
        [
            'name'     => esc_html__( 'Contact Form 7', 'barsi' ),
            'slug'     => 'contact-form-7',
            'required' => true,
        ],
        [
            'name'     => esc_html__( 'WooCommerce', 'barsi' ),
            'slug'     => 'woocommerce',
            'required' => true,
        ],
        [
            'name'     => esc_html__( 'One Click Demo Import', 'barsi' ),
            'slug'     => 'one-click-demo-import',
            'required' => false,
        ],
        [
            'name'     => esc_html__( 'SVG Support', 'barsi' ),
            'slug'     => 'svg-support',
            'required' => false,
        ],

    ];

    $config = [
        'id'           => 'barsi',
        'parent_slug'  => 'barsi',
        'menu'         => 'tgmpa-install-plugins',
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => false,
        'message'      => '',
        'default_path' => '',
    ];

    tgmpa( $plugins, $config );
}
