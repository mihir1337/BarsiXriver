<?php

namespace ElementHelper\Widget;
use \ElementHelper\Element_El_Select2;
use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Hero_Slider extends Element_El_Widget {

    /**
     * Get widget name.
     *
     * Retrieve Element Helper widget name.
     *
     * @return string Widget name.
     * @since 1.0.0
     * @access public
     *
     */
    public function get_name() {
        return 'tx_hero_slider';
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
        return __( 'TX Hero Slide', 'barsi-core' );
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
        return ['barsi', 'slide'];
    }

    protected function register_content_controls() {

        //Settings
        $this->start_controls_section(
            '_section_design_settings',
            [
                'label' => __( 'Choos Design', 'barsi-core' ),
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
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        // section headings
        $this->start_controls_section(
            '_section_headings',
            [
                'label' => __( 'Headings', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // heading title
        $this->add_control(
            'heading_title',
            [
                'label'       => __( 'Heading Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your heading title', 'barsi-core' ),
                'default'     => __( 'We are the best', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // enable moving text
        $this->add_control(
            'enable_moving_text',
            [
                'label'        => __( 'Enable Moving Text', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // repeater
        $repeater = new Repeater();

        // is_active
        $repeater->add_control(
            'is_active',
            [
                'label'        => __( 'Is Active', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // text
        $repeater->add_control(
            'text',
            [
                'label'       => __( 'Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your text', 'barsi-core' ),
                'default'     => __( 'We are the best', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // moving texts
        $this->add_control(
            'moving_texts',
            [
                'label'  => __( 'Moving Texts', 'barsi-core' ),
                'type'   => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'condition' => [
                    'enable_moving_text' => 'yes',
                ],
            ]
        );

        // heading button link
        $this->add_control(
            'heading_button_link',
            [
                'label'       => __( 'Heading Button Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'Enter your heading button link', 'barsi-core' ),
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // heading description
        $this->add_control(
            'heading_description',
            [
                'label'       => __( 'Heading Description', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your heading description', 'barsi-core' ),
                'default'     => __( 'We are the best', 'barsi-core' ),
            ]
        );

        // bottom heading
        $this->add_control(
            'bottom_heading',
            [
                'label'       => __( 'Bottom Heading', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your bottom heading', 'barsi-core' ),
                'default'     => __( 'We are the best', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // end
        $this->end_controls_section();

        // IMAGE SECTION
        $this->start_controls_section(
            '_section_image',
            [
                'label' => __( 'Images', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // IMAGE_1
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

        // IMAGE_2
        $this->add_control(
            'image_2',
            [
                'label'   => __( 'Image 2', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // END
        $this->end_controls_section();

        // SLIDE ITEMS
        $this->start_controls_section(
            '_section_slide_items',
            [
                'label' => __( 'Slide Items', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        // design style
        $repeater->add_control(
            'design_style',
            [
                'label'              => __( 'Design Style', 'barsi-core' ),
                'type'               => Controls_Manager::SELECT,
                'options'            => [
                    'style_1' => __( 'Style 1', 'barsi-core' ),
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
                'description'        => __( 'Please ensure the style matches the one you selected above.', 'barsi-core' ),
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
            ]
        );

        // image_1
        $repeater->add_control(
            'image_2',
            [
                'label'   => __( 'Image 2', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // sub title
        $repeater->add_control(
            'sub_title',
            [
                'label'       => __( 'Sub Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your sub title', 'barsi-core' ),
                'default'     => __( 'We are the best', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // title
        $repeater->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your title', 'barsi-core' ),
                'default'     => __( 'We are the best', 'barsi-core' ),
                'label_block' => true,
                'condition' => [
                    'design_style' => ['style_10'],
                ],
            ]
        );

        // tag
        $repeater->add_control(
            'title_tag',
            [
                'label'   => __( 'Title HTML Tag', 'barsi-core' ),
                'type'    => Controls_Manager::CHOOSE,
                'options' => [
                    'h1' => [
                        'title' => __( 'H1', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h1',
                    ],
                    'h2' => [
                        'title' => __( 'H2', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h2',
                    ],
                    'h3' => [
                        'title' => __( 'H3', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h3',
                    ],
                    'h4' => [
                        'title' => __( 'H4', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h4',
                    ],
                    'h5' => [
                        'title' => __( 'H5', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h5',
                    ],
                    'h6' => [
                        'title' => __( 'H6', 'barsi-core' ),
                        'icon'  => 'eicon-editor-h6',
                    ],
                ],
                'default' => 'h2',
                'toggle'  => false,
                'condition' => [
                    'design_style' => ['style_10'],
                ],
            ]
        );

        // description
        $repeater->add_control(
            'description',
            [
                'label'       => __( 'Description', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'placeholder' => __( 'Enter your description', 'barsi-core' ),
                'default'     => __( 'We are the best', 'barsi-core' ),
            ]
        );

        // button text
        $repeater->add_control(
            'button_text',
            [
                'label'       => __( 'Button Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your button text', 'barsi-core' ),
                'default'     => __( 'Get Started', 'barsi-core' ),
                'condition' => [
                    'design_style' => ['style_10'],
                ],
            ]
        );

        // button link
        $repeater->add_control(
            'button_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'Enter your button link', 'barsi-core' ),
                'default'     => [
                    'url' => '#',
                ],
                'condition' => [
                    'design_style' => ['style_10'],
                ],
            ]
        );

         // rating point
         $repeater->add_control(
            'rating_point',
            [
                'label'       => __( 'Rating Point', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your point', 'barsi-core' ),
                'default'     => __( '5', 'barsi-core' ),
                'condition' => [
                    'design_style' => ['style_1'],
                ],
            ]
        );


         // enable_rating
         $repeater->add_control(
            'enable_rating',
            [
                'label'        => __( 'Enable Rating', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition' => [
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // rating star
        $repeater->add_control(
            'rating_star',
            [
                'label'     => __( 'Rating Star', 'barsi-core' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    '1' => __( '1 Star', 'barsi-core' ),
                    '2' => __( '2 Star', 'barsi-core' ),
                    '3' => __( '3 Star', 'barsi-core' ),
                    '4' => __( '4 Star', 'barsi-core' ),
                    '5' => __( '5 Star', 'barsi-core' ),
                ],
                'default'   => '5',
                'condition' => [
                    'enable_rating' => 'yes',
                    'design_style' => ['style_1'],
                ],
            ]
        );

        // add repeater
        $this->add_control(
            'slides',
            [
                'label'  => __( 'Slides', 'barsi-core' ),
                'type'   => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );

        $this->end_controls_section();

        // SETTINGS
        $this->start_controls_section(
            '_section_settings',
            [
                'label' => __( 'Settings', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable_slider_pagination
        $this->add_control(
            'enable_slider_pagination',
            [
                'label'        => __( 'Enable Slider Pagination', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // anim speed
        $this->add_control(
            'anim_speed',
            [
                'label'   => __( 'Animation Speed', 'choicy-core' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '500',
            ]
        );

        // anim delay
        $this->add_control(
            'anim_delay',
            [
                'label'   => __( 'Animation Delay', 'choicy-core' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '5000',
            ]
        );

        // END
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
