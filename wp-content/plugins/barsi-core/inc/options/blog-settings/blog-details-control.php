<?php

CSF::createSection( $prefix . '_theme_options', [
    'title'  => esc_html__( 'Blog Details Settings', 'barsi-core' ),
    'parent' => 'blog_settings',
    'fields' => [
        [
            'type'    => 'subheading',
            'content' => '<h3>' . esc_html__( 'Blog Details Settings', 'barsi-core' ) . '</h3>',
        ],
        // enable social share
        [
            'id'      => 'tx_enable_social_share',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Social Share', 'barsi-core' ),
            'default' => false,
        ],

        // social share heading
        [
            'id'      => 'tx_social_share_heading',
            'type'    => 'text',
            'title'   => esc_html__( 'Social Share Heading', 'barsi-core' ),
            'default' => esc_html__( 'Share Article', 'barsi-core' ),
            'dependency' => [ 'tx_enable_social_share', '==', 'true' ],
        ],

        // enable blog navigation
        [
            'id'      => 'tx_enable_blog_navigation',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Blog Navigation', 'barsi-core' ),
            'default' => false,
        ],

    ],
] );
