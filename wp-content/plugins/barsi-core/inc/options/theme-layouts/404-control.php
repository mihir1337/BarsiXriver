<?php

CSF::createSection( $prefix . '_theme_options', [
    'title'    => esc_html__( '404 Page Layout', 'barsi-core' ),
    'parent'   => 'theme_layout',
    'priority' => 4,
    'fields'   => [
        [
            'type'    => 'subheading',
            'content' => '<h3>' . esc_html__( '404 Page Layout', 'barsi-core' ) . '</h3>',
        ],
        [
            'id'      => 'tx_error_image',
            'type'    => 'media',
            'title'   => esc_html__( 'Error Code Image', 'barsi-core' ),
            'default' => get_template_directory_uri() . '/assets/img/shape/404.webp',
        ],
        // tx_error_title_1
        [
            'id'      => 'tx_error_title_1',
            'type'    => 'text',
            'title'   => esc_html__( '404 Title 1', 'barsi-core' ),
            'default' => esc_html__( 'Oops!', 'barsi-core' ),
        ],
        // tx_error_title_2
        [
            'id'      => 'tx_error_title_2',
            'type'    => 'text',
            'title'   => esc_html__( '404 Title 2', 'barsi-core' ),
            'default' => esc_html__( '404 Error!', 'barsi-core' ),
        ],
        // tx_error_description
        [
            'id'      => 'tx_error_description',
            'type'    => 'textarea',
            'title'   => esc_html__( '404 Description', 'barsi-core' ),
            'default' => esc_html__( 'We can\'t find the page that you\'re looking for. Can\'t find what you need? Take a moment and search below!', 'barsi-core' ),
        ],
        [
            'id'      => 'tx_error_link_text',
            'type'    => 'text',
            'title'   => esc_html__( '404 Button', 'barsi-core' ),
            'default' => esc_html__( 'Go Back to Home ', 'barsi-core' ),
        ],
    ],
] );