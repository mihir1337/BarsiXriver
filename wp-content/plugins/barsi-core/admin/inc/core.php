<?php
class Barsi_Active {

    private $days_remaining;
    private $seven_days_from_activation;

    public function __construct() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_action( 'admin_footer', array( $this, 'display_notice' ) );
        add_action( 'admin_notices', array( $this, 'display_new_notice' ) );
    }

    public function enqueue_scripts( $hook ) {
        if ( 'appearance_page_tf-demo-importer' !== $hook ) {
            return;
        }

        // Enqueue scripts
        wp_enqueue_script( 'barsi-pakps', plugin_dir_url( __FILE__ ) . 'assets/js/active.js', array( 'jquery' ), '1.0.0', true );

        // Enqueue styles
        wp_enqueue_style( 'barsi-pakps', plugin_dir_url( __FILE__ ) . 'assets/css/active.css', array(), '1.0.0', 'all' );

    }

    public function display_notice() {
        $hook = get_current_screen();

        if ( 'appearance_page_tf-demo-importer' !== $hook->base ) {
            return;
        }

        echo '
            <div class="tx-notice">
                <span class="tx-close">x</span>
                <div class="tx-wrapper">
                    <h3>Please Activate Your License</h3>
                    <p>To import the demo, please activate your license <a class="button-primary" href="' . admin_url( 'admin.php?page=barsi-license', '' ) . '">Click Here</a></p>
                    <p>Days remaining until website is disabled: ' . $this->days_remaining . '</p>
                </div>
            </div>
        ';
    }

    public function display_new_notice() {

        if ( ! get_option( "Barsi_lic_Key" ) ) {
            echo '
                <div class="notice notice-error">
                    <h3>Kindly activate your license to ensure uninterrupted website functionality. Failure to do so may result in temporary website suspension and data removal. Thank you for your cooperation <a href="' . admin_url( 'admin.php?page=barsi-license' ) . '">Activate Now</a></h3>
                </div>
            ';
        }
    }
}

if ( ! get_option( "Barsi_lic_Key" ) ) {
    new Barsi_Active();
}
