<?php
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

if ( !class_exists( 'Barsi_Core_Helper' ) ) {
    class Barsi_Core_Helper {

        /**
         * Get Header Template Type
         *
         * @return  [type]  [return description]
         */
        public static function get_header_types() {
            $header = ['' => esc_html__( 'Default', 'barsiaddon' )];
            $headers = get_posts(
                [
                    'posts_per_page' => -1,
                    'post_type'      => 'tf-header',
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                ]
            );
            foreach ( $headers as $value ) {
                $header[$value->ID] = $value->post_title;
            }
            return $header;
        }

        /**
         * Get Footer Template Type
         *
         * @return  [type]  [return description]
         */
        public static function get_footer_types() {
            $footer = ['' => esc_html__( 'Default', 'barsiaddon' )];
            $footers = get_posts(
                [
                    'posts_per_page' => -1,
                    'post_type'      => 'tf-footer',
                    'orderby'        => 'name',
                    'order'          => 'ASC',
                ]
            );
            foreach ( $footers as $value ) {
                $footer[$value->ID] = $value->post_title;
            }
            return $footer;
        }

        // render header
        public static function barsi_render_header( $header_style ) {
            $elementor_instance = Elementor\Plugin::instance();
            return $elementor_instance->frontend->get_builder_content_for_display( $header_style );
        }

        // render footer
        public static function barsi_render_footer( $footer_style ) {
            $elementor_instance = Elementor\Plugin::instance();
            return $elementor_instance->frontend->get_builder_content_for_display( $footer_style );
        }

    }
    // Instantiate theme
    new Barsi_Core_Helper();
}