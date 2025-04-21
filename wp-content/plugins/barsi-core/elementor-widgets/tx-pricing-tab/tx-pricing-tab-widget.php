<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Pricing_Tab extends Element_El_Widget {

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
        return 'tx_pricing_tab';
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
        return __( 'TX Pricing Tab', 'barsi-core' );
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
        return ['price', 'tab'];
    }

    public function elh_custom_animations() {
        return [
            'none'             => __( 'None', 'telnet-core' ),
            'appear_left'   => __( 'Appear Left', 'telnet-core' ),
            'appear_right'  => __( 'Appear Right', 'telnet-core' ),
            'appear_top'   => __( 'Appear Top', 'telnet-core' ),
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

        //image section
        $this->start_controls_section(
            '_section_image',
            [
                'label' => __( 'Image', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        //image_1
        $this->add_control(
            'image_1',
            [
                'label' => __( 'Image 1', 'barsi-core' ),
                'type'  => Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true
                ]
            ]
        );

        //end
        $this->end_controls_section();

        $this->start_controls_section(
            '_section_title',
            [
                'label' => __( 'Title & Description', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        //sub_count
        $this->add_control(
            'sub_count',
            [
                'label'       => __( 'Sub Count', 'barsi-core' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
                'default'     => '01',
                'placeholder' => __( 'Sub Count Text', 'barsi-core' ),
                'dynamic'     => [
                    'active' => true,
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


        $this->start_controls_section(
            '_section_pricing_tab',
            [
                'label' => __( 'Pricing Tab', 'barsi-core' ),
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
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        // is_active
        $repeater->add_control(
            'is_active',
            [
                'label'        => __( 'Active', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Show', 'barsi-core' ),
                'label_off'    => __( 'Hide', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // tab_title
        $repeater->add_control(
            'tab_title',
            [
                'label'       => __( 'Tab Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'default'     => __( 'Tab Title', 'barsi-core' ),
                'placeholder' => __( 'Type your title here', 'barsi-core' ),
                'label_block' => true,
            ]
        );

        // tab_description
        $repeater->add_control(
            'tab_description',
            [
                'label'       => __( 'Tab Description', 'barsi-core' ),
                'type'        => Controls_Manager::TEXTAREA,
                'default'     => __( 'Tab Description', 'barsi-core' ),
                'placeholder' => __( 'Type your description here', 'barsi-core' ),
                'label_block' => true,
            ]
        );

           // tab image
           $repeater->add_control(
            'tab_image',
            [
                'label' => __('Tab Image', 'barsi-core'),
                'type' => Controls_Manager::MEDIA,
                'dynamic' => [
                    'active' => true
                ]
            ]
        );

        // tab_price
        $repeater->add_control(
            'currency',
            [
                'label' => __('Currency', 'barsi-core'),
                'type' => Controls_Manager::SELECT,
                'label_block' => false,
                'options' => [
                    '' => __('None', 'barsi-core'),
                    'baht' => '&#3647; ' . _x('Baht', 'Currency Symbol', 'barsi-core'),
                    'bdt' => '&#2547; ' . _x('BD Taka', 'Currency Symbol', 'barsi-core'),
                    'dollar' => '&#36; ' . _x('Dollar', 'Currency Symbol', 'barsi-core'),
                    'euro' => '&#128; ' . _x('Euro', 'Currency Symbol', 'barsi-core'),
                    'franc' => '&#8355; ' . _x('Franc', 'Currency Symbol', 'barsi-core'),
                    'guilder' => '&fnof; ' . _x('Guilder', 'Currency Symbol', 'barsi-core'),
                    'krona' => 'kr ' . _x('Krona', 'Currency Symbol', 'barsi-core'),
                    'lira' => '&#8356; ' . _x('Lira', 'Currency Symbol', 'barsi-core'),
                    'peseta' => '&#8359 ' . _x('Peseta', 'Currency Symbol', 'barsi-core'),
                    'peso' => '&#8369; ' . _x('Peso', 'Currency Symbol', 'barsi-core'),
                    'pound' => '&#163; ' . _x('Pound Sterling', 'Currency Symbol', 'barsi-core'),
                    'real' => 'R$ ' . _x('Real', 'Currency Symbol', 'barsi-core'),
                    'ruble' => '&#8381; ' . _x('Ruble', 'Currency Symbol', 'barsi-core'),
                    'rupee' => '&#8360; ' . _x('Rupee', 'Currency Symbol', 'barsi-core'),
                    'indian_rupee' => '&#8377; ' . _x('Rupee (Indian)', 'Currency Symbol', 'barsi-core'),
                    'shekel' => '&#8362; ' . _x('Shekel', 'Currency Symbol', 'barsi-core'),
                    'won' => '&#8361; ' . _x('Won', 'Currency Symbol', 'barsi-core'),
                    'yen' => '&#165; ' . _x('Yen/Yuan', 'Currency Symbol', 'barsi-core'),
                    'custom' => __('Custom', 'barsi-core'),
                ],
                'default' => 'dollar',
            ]
        );

        $repeater->add_control(
            'currency_custom',
            [
                'label' => __('Custom Symbol', 'barsi-core'),
                'type' => Controls_Manager::TEXT,
                'condition' => [
                    'currency' => 'custom',
                ],
                'dynamic' => [
                    'active' => true,
                ]
            ]
        );

        // PRICE
        $repeater->add_control(
            'price',
            [
                'label' => __('Price', 'barsi-core'),
                'type' => Controls_Manager::TEXT,
                'default' => '9.99',
                'dynamic' => [
                    'active' => true
                ]
            ]
        );

        // period
        $repeater->add_control(
            'period',
            [
                'label' => __('Period', 'barsi-core'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Per Month', 'barsi-core'),
                'dynamic' => [
                    'active' => true
                ]
            ]
        );

        // enable feature lists
        $repeater->add_control(
            'enable_feature_lists',
            [
                'label' => __('Enable Feature Lists', 'barsi-core'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'barsi-core'),
                'label_off' => __('Hide', 'barsi-core'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        // price feature icon
        $repeater->add_control(
            'price_feature_icon',
            [
                'label' => __('Price Feature Icon', 'barsi-core'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-check',
                    'library' => 'fa-solid',
                ],
                'condition' => [
                    'enable_feature_lists' => 'yes',
                ]
            ]
        );

        // price content description
        $repeater->add_control(
            'price_feature_lists',
            [
                'label' => __('Price Features', 'barsi-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Price Feature', 'barsi-core'),
                'dynamic' => [
                    'active' => true
                ],
                'condition' => [
                    'enable_feature_lists' => 'yes',
                ]
            ]
        );

        // price content button text
        $repeater->add_control(
            'button_text',
            [
                'label' => __('Button Text', 'barsi-core'),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'dynamic' => [
                    'active' => true
                ]
            ]
        );

        // price content button link
        $repeater->add_control(
            'button_link',
            [
                'label' => __('Button Link', 'barsi-core'),
                'type' => Controls_Manager::URL,
                'dynamic' => [
                    'active' => true
                ]
            ]
        );

        // lists items
        $this->add_control(
            'pricingTab_lists',
            [
                'label'   => __( 'Pricing Tabs', 'barsi-core' ),
                'type'    => Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
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
