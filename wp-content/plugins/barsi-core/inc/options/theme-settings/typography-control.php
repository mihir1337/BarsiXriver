<?php

CSF::createSection( $prefix . '_theme_options', [
    'title'  => esc_html__( 'Typography Settings', 'barsi-core' ),
    'parent' => 'theme_settings',
    'priority' => 3,
    'fields' => [
        [
            'type'    => 'subheading',
            'content' => '<h3>' . esc_html__( 'Typography Settings', 'barsi-core' ) . '</h3>',
        ],
        [
            'id'     => 'body-typography',
            'type'   => 'typography',
            'output' => 'body',
            'title'  => esc_html__( 'Body Typography', 'barsi-core' ),
        ],
        [
            'id'     => 'heading-gl-typo',
            'type'   => 'typography',
            'output' => 'h1, h2, h3, h4, h5, h6',
            'title'  => esc_html__( 'Heading Typography', 'barsi-core' ),
        ],
    ],
] );