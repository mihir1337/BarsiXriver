<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Pricing_Section extends Element_El_Widget {

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
        return 'tx_pricing_section';
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
        return __( 'TX Pricing Section', 'barsi-core' );
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
        return ['pricing'];
    }

    public function elh_element_animations() {
        return [
            'none'              => __( 'None', 'telnet-core' ),
            'fadeIn'            => __( 'Fade In', 'telnet-core' ),
            'fadeInUp'          => __( 'Fade In Up', 'telnet-core' ),
            'fadeInDown'        => __( 'Fade In Down', 'telnet-core' ),
            'fadeInLeft'        => __( 'Fade In Left', 'telnet-core' ),
            'fadeInRight'       => __( 'Fade In Right', 'telnet-core' ),
            'fadeInUpBig'       => __( 'Fade In Up Big', 'telnet-core' ),
            'fadeInDownBig'     => __( 'Fade In Down Big', 'telnet-core' ),
            'fadeInLeftBig'     => __( 'Fade In Left Big', 'telnet-core' ),
            'fadeInRightBig'    => __( 'Fade In Right Big', 'telnet-core' ),
            'bounceIn'          => __( 'Bounce In', 'telnet-core' ),
            'bounceInUp'        => __( 'Bounce In Up', 'telnet-core' ),
            'bounceInDown'      => __( 'Bounce In Down', 'telnet-core' ),
            'bounceInLeft'      => __( 'Bounce In Left', 'telnet-core' ),
            'bounceInRight'     => __( 'Bounce In Right', 'telnet-core' ),
            'rotateIn'          => __( 'Rotate In', 'telnet-core' ),
            'rotateInUpLeft'    => __( 'Rotate In Up Left', 'telnet-core' ),
            'rotateInDownLeft'  => __( 'Rotate In Down Left', 'telnet-core' ),
            'rotateInUpRight'   => __( 'Rotate In Up Right', 'telnet-core' ),
            'rotateInDownRight' => __( 'Rotate In Down Right', 'telnet-core' ),
            'lightSpeedIn'      => __( 'Light Speed In', 'telnet-core' ),
            'rollIn'            => __( 'Roll In', 'telnet-core' ),
            'zoomIn'            => __( 'Zoom In', 'telnet-core' ),
            'zoomInUp'          => __( 'Zoom In Up', 'telnet-core' ),
            'zoomInDown'        => __( 'Zoom In Down', 'telnet-core' ),
            'zoomInLeft'        => __( 'Zoom In Left', 'telnet-core' ),
            'zoomInRight'       => __( 'Zoom In Right', 'telnet-core' ),
            'slideInUp'         => __( 'Slide In Up', 'telnet-core' ),
            'slideInDown'       => __( 'Slide In Down', 'telnet-core' ),
            'slideInLeft'       => __( 'Slide In Left', 'telnet-core' ),
            'slideInRight'      => __( 'Slide In Right', 'telnet-core' ),
        ];
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
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            '_section_title',
            [
                'label' => __( 'Title & Description', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        // enable sub title icon
        $this->add_control(
            'enable_sub_title_icon',
            [
                'label'        => __( 'Enable Sub Title Icon', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

// sub title icon type
        $this->add_control(
            'sub_title_icon_type',
            [
                'label'     => __( 'Icon Type', 'barsi-core' ),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'icon'  => __( 'Icon', 'barsi-core' ),
                    'image' => __( 'Image', 'barsi-core' ),
                ],
                'default'   => 'icon',
                'condition' => [
                    'enable_sub_title_icon' => 'yes',
                ],
            ]
        );

        // sub title icon
        $this->add_control(
            'sub_title_icon',
            [
                'label'       => __( 'Sub Title Icon', 'barsi-core' ),
                'type'        => Controls_Manager::ICONS,
                'placeholder' => __( 'Enter your sub title icon', 'barsi-core' ),
                'default'     => [
                    'value'   => 'fas fa-house-user',
                    'library' => 'fa-solid',
                ],
                'condition'   => [
                    'enable_sub_title_icon' => 'yes',
                    'sub_title_icon_type'   => 'icon',
                ],
            ]
        );

        // sub title image
        $this->add_control(
            'sub_title_image',
            [
                'label'       => __( 'Sub Title Image', 'barsi-core' ),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition'   => [
                    'enable_sub_title_icon' => 'yes',
                    'sub_title_icon_type'   => 'image',
                ],
            ]
        );

        // sub title
        $this->add_control(
            'sub_title',
            [
                'label'       => __( 'Sub Title', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 4,
                'default'     => 'Sub Title',
                'placeholder' => __( 'Sub Title Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'enable_sub_title' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 4,
                'default'     => 'Heading Title',
                'placeholder' => __( 'Heading Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'enable_title' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'title_tag',
            [
                'label'     => __( 'Title HTML Tag', 'barsi-core' ),
                'type'      => Controls_Manager::CHOOSE,
                'options'   => [
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
                'default'   => 'h2',
                'toggle'    => false,
                'condition' => [
                    'enable_title' => 'yes',
                ],
            ]
        );

        // description
        $this->add_control(
            'description',
            [
                'label'       => __( 'Description', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 4,
                'default'     => 'The opportunity to work abroad is a popular prospect, one',
                'placeholder' => __( 'Description Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'enable_description' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        // image box
        $this->start_controls_section(
            '_section_image_box',
            [
                'label' => __( 'Image Box', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // image 1
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

        // END
        $this->end_controls_section();

        // FEATURE BOX
        $this->start_controls_section(
            '_section_feature_box',
            [
                'label' => __( 'Pricing Box', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // enable_pricing_boxs
        $this->add_control(
            'enable_pricing_boxs',
            [
                'label'        => __( 'Enable Pricing Boxs', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // REPEATER
        $repeater = new Repeater();

        // design_style
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
            ]
        );

        // price image
        $repeater->add_control(
            'price_image',
            [
                'label'   => __( 'Price Image', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // shape image
        $repeater->add_control(
            'shape_image',
            [
                'label'   => __( 'Shape Image', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // pricing_title
        $repeater->add_control(
            'pricing_title',
            [
                'label'       => __( 'Pricing Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => 'Pricing Title',
                'placeholder' => __( 'Pricing Title', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        $repeater->add_control(
            'currency',
            [
                'label'       => __( 'Currency', 'barsi-core' ),
                'type'        => Controls_Manager::SELECT,
                'label_block' => false,
                'options'     => [
                    ''             => __( 'None', 'barsi-core' ),
                    'baht'         => '&#3647; ' . _x( 'Baht', 'Currency Symbol', 'barsi-core' ),
                    'bdt'          => '&#2547; ' . _x( 'BD Taka', 'Currency Symbol', 'barsi-core' ),
                    'dollar'       => '&#36; ' . _x( 'Dollar', 'Currency Symbol', 'barsi-core' ),
                    'euro'         => '&#128; ' . _x( 'Euro', 'Currency Symbol', 'barsi-core' ),
                    'franc'        => '&#8355; ' . _x( 'Franc', 'Currency Symbol', 'barsi-core' ),
                    'guilder'      => '&fnof; ' . _x( 'Guilder', 'Currency Symbol', 'barsi-core' ),
                    'krona'        => 'kr ' . _x( 'Krona', 'Currency Symbol', 'barsi-core' ),
                    'lira'         => '&#8356; ' . _x( 'Lira', 'Currency Symbol', 'barsi-core' ),
                    'peseta'       => '&#8359 ' . _x( 'Peseta', 'Currency Symbol', 'barsi-core' ),
                    'peso'         => '&#8369; ' . _x( 'Peso', 'Currency Symbol', 'barsi-core' ),
                    'pound'        => '&#163; ' . _x( 'Pound Sterling', 'Currency Symbol', 'barsi-core' ),
                    'real'         => 'R$ ' . _x( 'Real', 'Currency Symbol', 'barsi-core' ),
                    'ruble'        => '&#8381; ' . _x( 'Ruble', 'Currency Symbol', 'barsi-core' ),
                    'rupee'        => '&#8360; ' . _x( 'Rupee', 'Currency Symbol', 'barsi-core' ),
                    'indian_rupee' => '&#8377; ' . _x( 'Rupee (Indian)', 'Currency Symbol', 'barsi-core' ),
                    'shekel'       => '&#8362; ' . _x( 'Shekel', 'Currency Symbol', 'barsi-core' ),
                    'won'          => '&#8361; ' . _x( 'Won', 'Currency Symbol', 'barsi-core' ),
                    'yen'          => '&#165; ' . _x( 'Yen/Yuan', 'Currency Symbol', 'barsi-core' ),
                    'custom'       => __( 'Custom', 'barsi-core' ),
                ],
                'default'     => 'dollar',
            ]
        );

        $repeater->add_control(
            'currency_custom',
            [
                'label'     => __( 'Custom Symbol', 'barsi-core' ),
                'type'      => Controls_Manager::TEXT,
                'condition' => [
                    'currency' => 'custom',
                ],
                'dynamic'   => [
                    'active' => true,
                ],
            ]
        );

        // price
        $repeater->add_control(
            'price',
            [
                'label'       => __( 'Price', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => '100',
                'placeholder' => __( 'Price', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // period
        $repeater->add_control(
            'price_period',
            [
                'label'       => __( 'Period', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => 'Per Month',
                'placeholder' => __( 'Per Month', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'label_block' => true,
            ]
        );

        // enable feature lists
        $repeater->add_control(
            'enable_feature_lists',
            [
                'label'        => __( 'Enable Feature Lists', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // feature icon
        $repeater->add_control(
            'feature_icon',
            [
                'label'       => __( 'Feature Icon', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fas fa-check',
                    'library' => 'fa-solid',
                ],
                'condition'   => [
                    'enable_feature_lists' => 'yes',
                ],
            ]
        );

        // pricing_description
        $repeater->add_control(
            'pricing_description',
            [
                'label'       => __( 'Pricing Description', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXTAREA,
                'rows'        => 4,
                'default'     => 'Pricing Description',
                'placeholder' => __( 'Pricing Description', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // enable_button
        $repeater->add_control(
            'enable_button',
            [
                'label'        => __( 'Enable Button', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // button_text
        $repeater->add_control(
            'button_text',
            [
                'label'       => __( 'Button Text', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => 'Button Text',
                'placeholder' => __( 'Button Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'enable_button' => 'yes',
                ],
            ]
        );

        // button_icon
        $repeater->add_control(
            'button_icon',
            [
                'label'       => __( 'Button Icon', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fas fa-angle-right',
                    'library' => 'fa-solid',
                ],
                'condition'   => [
                    'enable_button' => 'yes',
                ],
            ]
        );

        // button_link
        $repeater->add_control(
            'button_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
                'condition'   => [
                    'enable_button' => 'yes',
                ],
            ]
        );

        // FEATURE LISTS
        $this->add_control(
            'pricing_boxs',
            [
                'label'  => __( 'Feature Lists', 'barsi-core' ),
                'type'   => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );

        // END
        $this->end_controls_section();

        // BUTTON
        $this->start_controls_section(
            '_section_button',
            [
                'label'     => __( 'Button', 'barsi-core' ),
                'tab'       => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'enable_button' => 'yes',
                ],
            ]
        );

        // BUTTON TEXT
        $this->add_control(
            'button_text',
            [
                'label'       => __( 'Button Text', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Button Text', 'barsi-core' ),
                'placeholder' => __( 'Button Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // BUTTON LINK
        $this->add_control(
            'button_link',
            [
                'label'       => __( 'Button Link', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        // ENABLE BUTTON ICON
        $this->add_control(
            'enable_button_icon',
            [
                'label'        => __( 'Enable Button Icon', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );

        // BUTTON ICON
        $this->add_control(
            'button_icon',
            [
                'label'       => __( 'Button Icon', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::ICONS,
                'default'     => [
                    'value'   => 'fas fa-angle-right',
                    'library' => 'fa-solid',
                ],
                'condition'   => [
                    'enable_button_icon' => 'yes',
                ],
            ]
        );

        // END
        $this->end_controls_section();

        // SETTINGS
        $this->start_controls_section(
            '_section_settings',
            [
                'label' => __( 'Settings', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // ENABLE SUB TITLE
        $this->add_control(
            'enable_sub_title',
            [
                'label'        => __( 'Enable Sub Title', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // ENABLE TITLE
        $this->add_control(
            'enable_title',
            [
                'label'        => __( 'Enable Title', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // ENABLE DESCRIPTION
        $this->add_control(
            'enable_description',
            [
                'label'        => __( 'Enable Description', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // enable pricing box
        $this->add_control(
            'enable_pricing_box',
            [
                'label'        => __( 'Enable Pricing Box', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->end_controls_section();

    }

    private static function get_currency_symbol( $symbol_name ) {
        $symbols = [
            'baht'         => '&#3647;',
            'bdt'          => '&#2547;',
            'dollar'       => '&#36;',
            'euro'         => '&#128;',
            'franc'        => '&#8355;',
            'guilder'      => '&fnof;',
            'indian_rupee' => '&#8377;',
            'pound'        => '&#163;',
            'peso'         => '&#8369;',
            'peseta'       => '&#8359',
            'lira'         => '&#8356;',
            'ruble'        => '&#8381;',
            'shekel'       => '&#8362;',
            'rupee'        => '&#8360;',
            'real'         => 'R$',
            'krona'        => 'kr',
            'won'          => '&#8361;',
            'yen'          => '&#165;',
        ];

        return isset( $symbols[$symbol_name] ) ? $symbols[$symbol_name] : '';
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
