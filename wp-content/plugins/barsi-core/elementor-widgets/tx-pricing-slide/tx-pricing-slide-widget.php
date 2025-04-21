<?php

namespace ElementHelper\Widget;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;
use \Elementor\Utils;

defined( 'ABSPATH' ) || die();

class Tx_Pricing_Slide extends Element_El_Widget {

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
        return 'tx_pricing_slide';
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
        return __( 'Tx Pricing Slide', 'barsi-core' );
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
        return ['count', 'barsi', 'barsi testimonial', 'testimonial', 'barsi testimonial widget'];
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

    protected function register_content_controls() {

        //Settings
        $this->start_controls_section(
            '_section_choose_style',
            [
                'label' => __( 'CHOOSE DESIGN STYLE', 'barsi-core' ),
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

        $this->start_controls_section(
            '_section_pricing_slide',
            [
                'label' => __( 'Pricing Slide', 'barsi-core' ),
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
                ],
                'default'            => 'style_1',
                'frontend_available' => true,
                'style_transfer'     => true,
            ]
        );

        // image 1
        $repeater->add_control(
            'image_1',
            [
                'label'   => __( 'Image 1', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => 'style_2',
                ],
            ]
        );

        // image 2
        $repeater->add_control(
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

        // image 3
        $repeater->add_control(
            'image_3',
            [
                'label'   => __( 'Image 3', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => 'style_2',
                ],
            ]
        );

        // image 4
        $repeater->add_control(
            'image_4',
            [
                'label'   => __( 'Image 4', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => 'style_2',
                ],
            ]
        );

        // image 5
        $repeater->add_control(
            'image_5',
            [
                'label'   => __( 'Image 5', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => 'style_2',
                ],
            ]
        );

        // image
        $repeater->add_control(
            'author_image',
            [
                'label'   => __( 'Author Image', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => 'style_1',
                ],
            ]
        );

        // title
        $repeater->add_control(
            'title',
            [
                'label'       => __( 'Title', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your title', 'barsi-core' ),
                'default'     => __( 'John Doe', 'barsi-core' ),
            ]
        );

        // feature icon
        $repeater->add_control(
            'feature_icon',
            [
                'label'   => __( 'Feature Icon', 'barsi-core' ),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fas fa-check',
                    'library' => 'solid',
                ],
                'condition' => [
                    'design_style' => 'style_2',
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
                'default'     => __( 'CEO, Company Name', 'barsi-core' ),
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

        // PRICE
        $repeater->add_control(
            'price',
            [
                'label'   => __( 'Price', 'barsi-core' ),
                'type'    => Controls_Manager::TEXT,
                'default' => '9.99',
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );

        // PERIOD
        $repeater->add_control(
            'period',
            [
                'label'   => __( 'Period', 'barsi-core' ),
                'type'    => Controls_Manager::TEXT,
                'default' => __( 'month', 'barsi-core' ),
                'dynamic' => [
                    'active' => true,
                ],
                'condition' => [
                    'design_style' => 'style_1',
                ],
            ]
        );

        // notice text
        $repeater->add_control(
            'notice_text',
            [
                'label'       => __( 'Notice Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your notice text', 'barsi-core' ),
                'default'     => __( 'Plan billed annually, US$199/year', 'barsi-core' ),
                'condition'   => [
                    'design_style' => 'style_2',
                ],
            ]
        );

        // button text
        $repeater->add_control(
            'button_text',
            [
                'label'       => __( 'Button Text', 'barsi-core' ),
                'type'        => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your button text', 'barsi-core' ),
                'default'     => __( 'Read More', 'barsi-core' ),
            ]
        );

        // button_icon
        $repeater->add_control(
            'button_icon',
            [
                'label'   => __( 'Button Icon', 'barsi-core' ),
                'type'    => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fas fa-arrow-right',
                    'library' => 'solid',
                ],
            ]
        );

        // link
        $repeater->add_control(
            'button_link',
            [
                'label'       => __( 'Link', 'barsi-core' ),
                'type'        => Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'barsi-core' ),
                'default'     => [
                    'url' => '#',
                ],
            ]
        );

        // small image
        $repeater->add_control(
            'small_image',
            [
                'label'   => __( 'Small Image', 'barsi-core' ),
                'type'    => Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'design_style' => 'style_1',
                ],
            ]
        );

        $this->add_control(
            'pricing_slides',
            [
                'label'       => __( 'Slide Items', 'barsi-core' ),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'title_field' => '{{{ name }}}',
            ]
        );

        $this->end_controls_section();

        // SETTINGS
        $this->start_controls_section(
            '_section_settings',
            [
                'label' => __( 'SETTINGS', 'barsi-core' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        // ENABLE PAGINATION
        $this->add_control(
            'enable_pagination',
            [
                'label'        => __( 'Enable Pagination', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // ENABLE FEATURE LIST
        $this->add_control(
            'enable_feature_list',
            [
                'label'        => __( 'Enable Feature List', 'barsi-core' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __( 'Yes', 'barsi-core' ),
                'label_off'    => __( 'No', 'barsi-core' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        // END
        $this->end_controls_section();

    }

    protected function register_style_controls() {

    }

    protected function render() {

        $settings = $this->get_settings_for_display();
        $dir = dirname( __FILE__ );

        $style = !empty( $settings['design_style'] ) ? $settings['design_style'] : 'style_1';

        switch ( $style ) {
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
