<?php

CSF::createSection( $prefix . '_theme_options', [
    'title'  => 'Preloader ON/OFF',
    'parent' => 'theme_settings',
    'priority' => 1,
    'fields' => [
        [
            'id'      => 'preloader_enable',
            'title'   => esc_html__( 'Enable Preloader', 'barsi-core' ),
            'type'    => 'switcher',
            'desc'    => esc_html__( 'Enable or Disable Preloader', 'barsi-core' ),
            'default' => true,
        ],

        // preloader image
        [
            'id'       => 'preloader_image',
            'type'     => 'media',
            'title'    => esc_html__( 'Preloader Image', 'barsi-core' ),
            'desc'     => esc_html__( 'Upload Preloader Image', 'barsi-core' ),
            'default'  => [
                'url' => get_template_directory_uri() . '/assets/img/logo/logo-2.svg',
            ],
            'dependency' => ['preloader_enable', '==', 'true'],
        ],

        // preloader canvas background color
        [
            'id'      => 'preloader_canvas_bg_color',
            'type'    => 'color',
            'title'   => esc_html__( 'Canvas Background Color', 'barsi-core' ),
            'default' => '#000',
            'output'  => '#tx_preloader',
            'dependency' => ['preloader_enable', '==', 'true'],
            'output_mode' => 'background-color',
        ],

        // size
        [
            'id'          => 'preloader_image_width',
            'type'        => 'slider',
            'title'       => 'Width',
            'min'         => 50,
            'max'         => 300,
            'step'        => 1,
            'unit'        => 'px',
            'output'      => '#tx_preloader img',
            'output_mode' => 'width',
        ],
    ],
] );