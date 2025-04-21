<?php

CSF::createSection( $prefix . '_theme_options', [
    'title'    => esc_html__( 'Shop Settings ON/OFF', 'barsi-core' ),
    'parent'   => 'shop_settings',
    'priority' => 4,
    'fields'   => [
        [
            'id'      => 'enable_custom_add_to_cart_text',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable custom add to cart text', 'barsi-core' ),
            'default' => false,
            'desc'    => esc_html__( 'Enable/Disable custom add to cart text', 'barsi-core' ),
        ],
        [
            'id'      => 'custom_add_to_cart_text',
            'type'    => 'text',
            'title'   => esc_html__( 'Custom add to cart text', 'barsi-core' ),
            'default' => esc_html__( 'Purchase Now', 'barsi-core' ),
            'desc'    => esc_html__( 'Custom add to cart text', 'barsi-core' ),
            'dependency' => [
                'enable_custom_add_to_cart_text',
                '==',
                'true'
            ]
        ],
    ],
] );