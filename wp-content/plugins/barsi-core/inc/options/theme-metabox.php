<?php
/*
 * Theme Metabox
 * @package barsitools
 * @since 1.0.0
 * */

if ( !defined( 'ABSPATH' ) ) {
    exit(); // exit if access directly
}

if ( class_exists( 'CSF' ) ) {

    $prefix = 'barsi';

    /*-------------------------------------
    Page Options
    -------------------------------------*/
    $page_metabox = 'tx_page_meta';

    CSF::createMetabox( $page_metabox, [
        'title'     => 'Page Options',
        'post_type' => ['page', 'projects', 'services', 'teams'],
    ] );

    // Header Section
    CSF::createSection( $page_metabox, [
        'title'  => 'Header',
        'fields' => [
            [
                'type'    => 'subheading',
                'content' => esc_html__( 'HEADER OPTIONS', 'barsi-core' ),
            ],

            [
                'id'       => 'meta_header_type',
                'type'     => 'switcher',
                'title'    => __( 'Enable Header From Page?', 'barsiplugin' ),
                'text_on'  => __( 'Yes', 'barsiplugin' ),
                'text_off' => __( 'No', 'barsiplugin' ),
                'default'  => false,
            ],
            [
                'id'         => 'meta_header_style',
                'type'       => 'select',
                'title'      => __( 'Select Header Style', 'barsiplugin' ),
                'options'    => Barsi_Core_Helper::get_header_types(),
                'dependency' => ['meta_header_type', '==', 'true'],
            ],
            [
                'id'       => 'page_header_disable',
                'type'     => 'switcher',
                'title'    => __( 'DIsable This page Header?', 'barsiplugin' ),
                'text_on'  => __( 'Yes', 'barsiplugin' ),
                'text_off' => __( 'No', 'barsiplugin' ),
                'default'  => false,
            ],
        ],
    ] );

    // Breadcrumb Section
    CSF::createSection( $page_metabox, [
        'title'  => 'Page Breadcrumb',
        'fields' => [
            [
                'type'    => 'subheading',
                'content' => esc_html__( 'BREADCRUMB OPTIONS', 'barsi-core' ),
            ],
            [
                'id'       => 'enable_page_preadcrumb',
                'type'     => 'switcher',
                'title'    => __( 'Enable Breadcrumb?', 'barsiplugin' ),
                'text_on'  => __( 'Yes', 'barsiplugin' ),
                'text_off' => __( 'No', 'barsiplugin' ),
                'default'  => true,
            ],
            [
                'id'         => 'hide_bg_img',
                'type'       => 'switcher',
                'title'      => __( 'Enable image from page?', 'barsiplugin' ),
                'text_on'    => __( 'Yes', 'barsiplugin' ),
                'text_off'   => __( 'No', 'barsiplugin' ),
                'default'    => false,
                'dependency' => ['enable_page_preadcrumb', '==', 'true'],
            ],
            [
                'id'         => 'bg_img_from_page',
                'type'       => 'media',
                'title'      => esc_html__( 'Page Breadcrumb Background Image', 'barsi-core' ),
                'dependency' => ['enable_page_preadcrumb', '==', 'true'],
                'dependency' => [
                    ['enable_page_preadcrumb', '==', 'true'],
                    ['hide_bg_img', '==', 'true'],
                ],

            ],
            // enable_custom_title
            [
                'id'         => 'enable_custom_title',
                'type'       => 'switcher',
                'title'      => esc_html__( 'Enable Custom Title', 'barsi-core' ),
                'default'    => false,
                'text_on'    => __( 'Yes', 'barsiplugin' ),
                'text_off'   => __( 'No', 'barsiplugin' ),
                'dependency' => ['enable_page_preadcrumb', '==', 'true'],

            ],

            [
                'id'         => 'page_custom_title',
                'type'       => 'text',
                'title'      => esc_html__( 'Page Custom Title', 'barsi-core' ),
                'dependency' => ['enable_custom_title', '==', 'true'],
            ],
        ],
    ] );

    // Footer Section
    CSF::createSection( $page_metabox, [
        'title'  => 'Footer',
        'fields' => [
            [
                'type'    => 'subheading',
                'content' => esc_html__( 'FOOTER OPTIONS', 'barsi-core' ),
            ],
            [
                'id'       => 'meta_footer_type',
                'type'     => 'switcher',
                'title'    => __( 'Enable Footer From Page?', 'barsiplugin' ),
                'text_on'  => __( 'Yes', 'barsiplugin' ),
                'text_off' => __( 'No', 'barsiplugin' ),
                'default'  => false,
            ],
            [
                'id'         => 'meta_footer_style',
                'type'       => 'select',
                'title'      => __( 'Select Footer Style', 'barsiplugin' ),
                'options'    => Barsi_Core_Helper::get_footer_types(),
                'dependency' => ['meta_footer_type', '==', 'true'],
            ],
            [
                'id'       => 'page_footer_disable',
                'type'     => 'switcher',
                'title'    => __( 'DIsable This page Footer?', 'barsiplugin' ),
                'text_on'  => __( 'Yes', 'barsiplugin' ),
                'text_off' => __( 'No', 'barsiplugin' ),
                'default'  => false,
            ],

        ],
    ] );

    // project info meta

    // post audio meta options
    $post_audio_metabox = 'tx_post_audio_meta';

    CSF::createMetabox( $post_audio_metabox, [
        'title'        => 'Post Options',
        'post_type'    => ['post'],
        'post_formats' => ['audio'],
    ] );

    CSF::createSection( $post_audio_metabox, [
        'fields' => [
            [
                'id'      => 'post_audio_link',
                'type'    => 'text',
                'title'   => __( 'Audio Link', 'barsiplugin' ),
                'default' => '',
            ],
        ],
    ] );

    // post video meta options
    $post_video_metabox = 'tx_post_video_meta';

    CSF::createMetabox( $post_video_metabox, [
        'title'        => 'Post Options',
        'post_type'    => ['post'],
        'post_formats' => ['video'],
    ] );

    CSF::createSection( $post_video_metabox, [
        'fields' => [
            [
                'id'      => 'post_video_link',
                'type'    => 'text',
                'title'   => __( 'Video Link', 'barsiplugin' ),
                'default' => '',
            ],
        ],
    ] );

    // post gallery meta options
    $post_gallery_metabox = 'tx_post_gallery_meta';

    CSF::createMetabox( $post_gallery_metabox, [
        'title'        => 'Post Options',
        'post_type'    => ['post'],
        'post_formats' => ['gallery'],
    ] );

    CSF::createSection( $post_gallery_metabox, [
        'fields' => [
            [
                'id'    => 'post_gallery_images',
                'type'  => 'gallery',
                'title' => __( 'Gallery Images', 'barsiplugin' ),
            ],
        ],
    ] );

} //endif
