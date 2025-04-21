<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Newsletter extends Element_El_Widget {

    /**
     * Get widget name.
     *
     * Retrieve Barsi Core widget name.
     *
     * @return string Widget name.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_name() {
        return 'tx_newsletter';
    }

    /**
     * Get widget title.
     *
     * @return string Widget title.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_title() {
        return __( 'TX Newsletter', 'barsi-core' );
    }

    public function get_custom_help_url() {
        return 'http://elementor.themexriver.com/widgets/gradient-heading/';
    }

    /**
     * Get widget icon.
     *
     * @return string Widget icon.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_icon() {
        return 'elh-widget-icon eicon-t-letter';
    }

    public function get_keywords() {
        return ['btn', 'contact info', 'info', 'info lists'];
    }

    protected function register_content_controls() {

        //Settings
        $this->start_controls_section(
            '_section_design_settings',
            [
                'label' => __( 'DESIGN STYLE', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'design_style',
            [
                'label'              => __( 'Design Style', 'barsi-core' ),
                'type'               => Controls_Manager::SELECT,
                'options'            => [
                    'style_1' => __( 'Style 1', 'barsi-core' ),
                    'style_2' => __( 'Style 2', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        // CONTACT NUMBER
        $this->start_controls_section(
            '_section_contact_info',
            [
                'label' => __( 'Contact Infos', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // image_1
        $this->add_control(
            'image_1',
            [
                'label'   => __( 'Image 1', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // image_2
        $this->add_control(
            'image_2',
            [
                'label'   => __( 'Image 2', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => 'style_2',
                ],
            ]
        );

        // title
        $this->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'default'     => __( 'Contact Info', 'barsi-core' ),
            ]
        );

        // description
        $this->add_control(
            'description',
            [
                'label'       => __( 'Description', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'     => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'barsi-core' ),
                'condition'   => [
                    'design_style' => 'style_2',
                ],
            ]
        );

        $this->add_control(
            'newsletter_shortcode',
            [
                'label'     => __( 'Newsletter Shortcode', 'barsi-core' ),
                'type'      => Controls_Manager::TEXTAREA,
                'default'   => '[newsletter]',
            ]
        );

        $this->end_controls_section();

    }

    protected function register_style_controls() {

        $dir = dirname( __FILE__ );

        $style_files = glob( $dir . '/styles/*.php' );

        if ( $style_files ) {
            foreach ( $style_files as $style_file ) {
                include $style_file;
            }
        }
    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $dir = dirname( __FILE__ );

        $style = !empty( $settings['design_style'] ) ? $settings['design_style'] : 'style_1';

        switch ( $style ) {

        case 'style_2':
            include $dir . '/views/view-2.php';
            break;
        default:
            include $dir . '/views/view-1.php';
        }
    }
}
