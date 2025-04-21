<?php

CSF::createSection( $prefix . '_theme_options', [
    'title'  => esc_html__( 'Header Layout', 'barsi-core' ),
    'parent' => 'theme_layout',
    'priority' => 1,
    'fields' => [
        [
            'type'    => 'subheading',
            'content' => '<h3>' . esc_html__( 'Header Layout', 'barsi-core' ) . '</h3>',
        ],
        [
            'id'      => 'header_style',
            'type'    => 'select',
            'title'   => __( 'Select Header Style', 'barsi-core' ),
            'options' => Barsi_Core_Helper::get_header_types(),
        ],

        // add edit link for header
        [
            'type'    => 'subheading',
            'content' => '<p>' . esc_html__( 'Please click the button to change header content', 'barsi-core' ) . ' <a href="' . esc_url( admin_url( 'edit.php?post_type=tf-header' ) ) . '">' . esc_html__( 'Edit Header', 'barsi-core' ) . '</a></p> ',
        ],
    ],
] );