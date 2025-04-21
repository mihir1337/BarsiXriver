<?php

CSF::createSection( $prefix . '_theme_options', [
    'title'  => esc_html__( 'Breadcrumb Layout', 'barsi-core' ),
    'parent' => 'theme_layout',
    'priority' => 3,
    'fields' => [
        [
            'type'    => 'subheading',
            'content' => '<h3>' . esc_html__( 'Breadcrumb Layout', 'barsi-core' ) . '</h3>',
        ],
        // enable breadcrumb
        [
            'id'      => 'enable_breadcrumb',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Breadcrumb', 'barsi-core' ),
            'default' => true,
        ],
        // breadcrumb_bg_img
        [
            'id'      => 'breadcrumb_bg_img',
            'title'   => esc_html__( 'Breadcrumb Image', 'barsi-core' ),
            'type'    => 'media',
            'desc'    => esc_html__( 'Upload breadcrumb Image', 'barsi-core' ),
            'preview_width' => '500',
            'preview_height' => '300',
        ],
        // enable breadcrumb list
        [
            'id'      => 'enable_breadcrumb_list',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Breadcrumb List', 'barsi-core' ),
            'default' => true,
        ],

        // enable_breadcrumb_line
        [
            'id'      => 'enable_breadcrumb_line',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Breadcrumb Line', 'barsi-core' ),
            'default' => true,
        ],

        // enable shape 1
        [
            'id'      => 'enable_shape_1',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Shape 1', 'barsi-core' ),
            'default' => false,
        ],
        // breadcrub padding
        [
            'id'          => 'breadcrumb_padding',
            'type'        => 'spacing',
            'title'       => esc_html__( 'Breadcrumb Padding', 'barsi-core' ),
            'output'      => '.tx-breadcrumb',
            'output_mode' => 'padding',
            'units'       => [ 'px', 'em' ],
            'default'     => [
                'top'    => '100px',
                'right'  => '0px',
                'bottom' => '100px',
                'left'   => '0px',
            ],
        ],
    ],
] );