<?php

CSF::createSection( $prefix . '_theme_options', [
    'title'    => esc_html__( 'Color Settings', 'barsi-core' ),
    'parent'   => 'theme_settings',
    'priority' => 2,
    'fields'   => [
        [
            'type'    => 'subheading',
            'content' => '<h3>' . esc_html__( 'Color Settings', 'barsi-core' ) . '</h3>',
        ],
        [
            'id'      => 'theme_color_1',
            'type'    => 'color',
            'title'   => 'Theme Color 1',
            'default' => '#f16319',
        ],
        [
            'id'      => 'theme_color_2',
            'type'    => 'color',
            'title'   => 'Theme Color 2',
            'default' => '#C4EF17',
        ],
        [
            'id'      => 'theme_color_3',
            'type'    => 'color',
            'title'   => 'Theme Color 3',
            'default' => '#060606',
        ],
    ],
] );