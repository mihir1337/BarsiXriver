<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Service_Lists extends Element_El_Widget {

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
        return 'tx_service_lists';
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
        return __( 'TX Service Lists', 'barsi-core' );
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
        return ['slide', 'service'];
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
                    'style_3' => __( 'Style 3', 'barsi-core' ),
                    'style_4' => __( 'Style 4', 'barsi-core' ),
                    'style_5' => __( 'Style 5', 'barsi-core' ),
                    'style_6' => __( 'Style 6', 'barsi-core' ),
                    'style_7' => __( 'Style 7', 'barsi-core' ),
                    'style_8' => __( 'Style 8', 'barsi-core' ),
                    'style_9' => __( 'Style 9', 'barsi-core' ),
                    'style_10' => __( 'Style 10', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        // image section
        $this->start_controls_section(
            '_section_image',
            [
                'label' => __( 'Image', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'design_style' => ['style_6', 'style_10'],
                ],
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
                'selectors'   => [
                    '{{WRAPPER}} .bs-work-process-item-single .item-img' => 'mask-image: url({{URL}});-webkit-mask-image: url({{URL}});',
                ],
            ]
        );

        // end
        $this->end_controls_section();

        $this->start_controls_section(
            '_section_list_items',
            [
                'label' => __( 'Slide Items', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // repeater
        $repeater = new Repeater();

        // design style
        $repeater->add_control(
            'design_style',
            [
                'label'              => __( 'Design Style', 'barsi-core' ),
                'type'               => Controls_Manager::SELECT,
                'options'            => [
                    'style_1' => __( 'Style 1', 'barsi-core' ),
                    'style_2' => __( 'Style 2', 'barsi-core' ),
                    'style_3' => __( 'Style 3', 'barsi-core' ),
                    'style_4' => __( 'Style 4', 'barsi-core' ),
                    'style_5' => __( 'Style 5', 'barsi-core' ),
                    'style_6' => __( 'Style 6', 'barsi-core' ),
                    'style_7' => __( 'Style 7', 'barsi-core' ),
                    'style_8' => __( 'Style 8', 'barsi-core' ),
                    'style_9' => __( 'Style 9', 'barsi-core' ),
                    'style_10' => __( 'Style 10', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        // image_1
        $repeater->add_control(
            'image_1',
            [
                'label'   => __( 'Image 1', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => [
                    'style_1',
                    'style_2',
                    'style_3',
                    'style_4',
                    'style_5',
                    'style_6',
                    'style_8',
                    'style_9',
                    'style_10',
                ],
                ],
            ]
        );

        // image_2
        $repeater->add_control(
            'image_2',
            [
                'label'   => __( 'Image 2', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => ['style_2', 'style_3', 'style_5'],
                ],
            ]
        );

        // sub title
        $repeater->add_control(
            'sub_title',
            [
                'label'       => __( 'Sub Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'condition' => [
                    'design_style' => ['style_2', 'style_3', 'style_4', 'style_5'],
                ],
            ]
        );

        // title
        $repeater->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'condition' => [
                    'design_style' => ['style_2', 'style_3', 'style_4', 'style_5', 'style_6', 'style_7', 'style_8', 'style_9', 'style_10'],
                ],
            ]
        );

        // count
        $repeater->add_control(
            'count',
            [
                'label'       => __( 'Count', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'condition' => [
                    'design_style' => ['style_6', 'style_7', 'style_10'],
                ],
            ]
        );

        // description
        $repeater->add_control(
            'description',
            [
                'label'       => __( 'Description', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'condition' => [
                    'design_style' => ['style_6', 'style_7', 'style_9', 'style_10'],
                ],
            ]
        );

        // button text
        $repeater->add_control(
            'button_text',
            [
                'label'       => __( 'Button Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'label_block' => true,
                'condition' => [
                    'design_style' => ['style_4', 'style_5', 'style_6'],
                ],
            ]
        );

        // button icon
        $repeater->add_control(
            'button_icon',
            [
                'label'   => __( 'Button Icon', 'barsi-core' ),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fas fa-link',
                    'library' => 'solid',
                ],
                'condition' => [
                    'design_style' => ['style_2', 'style_4', 'style_7'],
                ],
            ]
        );

        // button link
        $repeater->add_control(
            'button_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'label_block' => true,
                'condition' => [
                    'design_style' => ['style_2', 'style_3', 'style_4', 'style_5', 'style_6', 'style_7', 'style_9'],
                ],
            ]
        );

        // info date
        $repeater->add_control(
            'info_date',
            [
                'label'       => __( 'Info Date', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'condition' => [
                    'design_style' => ['style_5'],
                ],
            ]
        );

        // info texyt
        $repeater->add_control(
            'info_text',
            [
                'label'       => __( 'Info Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'condition' => [
                    'design_style' => ['style_5'],
                ],
            ]
        );

        $repeater->add_control(
            'select_style',
            [
                'label'   => __( 'Image Style', 'barsi-core' ),
                'type'    => Controls_Manager::SELECT,
                'options' => [
                    'style_1' => __( 'Style 1', 'barsi-core' ),
                    'style_2' => __( 'Style 2', 'barsi-core' ),
                    'style_3' => __( 'Style 3', 'barsi-core' ),
                    'style_4' => __( 'Style 4', 'barsi-core' ),
                ],
                'default' => 'style_1',
                'condition' => [
                    'design_style' => ['style_8'],
                ],
            ]
        );

        // lists items
        $this->add_control(
            'service_lists',
            [
                'label'  => __( 'Slide Lists', 'barsi-core' ),
                'type'   => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );

        // END CONTACT NUMBER
        $this->end_controls_section();

        // settings
        $this->start_controls_section(
            '_section_settings',
            [
                'label' => __( 'Settings', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable drag text
        $this->add_control(
            'enable_drag_text',
            [
                'label'        => __( 'Enable Drag Text', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // enable slider nav
        $this->add_control(
            'enable_slider_nav',
            [
                'label'        => __( 'Enable Slider Navigation', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'design_style' => ['style_4'],
                ],
            ]
        );

        // enbale top border
        $this->add_control(
            'enable_top_border',
            [
                'label'        => __( 'Enable Top Border', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'design_style' => ['style_9'],
                ],
            ]
        );

        // enable bottom border
        $this->add_control(
            'enable_bottom_border',
            [
                'label'        => __( 'Enable Bottom Border', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'design_style' => ['style_9'],
                ],
            ]
        );

        // end
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
        case 'style_10':
            include $dir . '/views/view-10.php';
            break;
        case 'style_9':
            include $dir . '/views/view-9.php';
            break;
        case 'style_8':
            include $dir . '/views/view-8.php';
            break;
        case 'style_7':
            include $dir . '/views/view-7.php';
            break;
        case 'style_6':
            include $dir . '/views/view-6.php';
            break;
        case 'style_5':
            include $dir . '/views/view-5.php';
            break;
        case 'style_4':
            include $dir . '/views/view-4.php';
            break;
        case 'style_3':
            include $dir . '/views/view-3.php';
            break;
        case 'style_2':
            include $dir . '/views/view-2.php';
            break;
        default:
            include $dir . '/views/view-1.php';
        }
    }
}
