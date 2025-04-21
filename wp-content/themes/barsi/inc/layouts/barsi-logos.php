<?php
// header logos
function barsi_header_logo() {
    ?>
    <?php
        $barsi_site_logo = cs_get_option( 'barsi_logo', get_template_directory_uri() . '/assets/img/logo/logo-1.svg');
        if(isset($barsi_site_logo['url'])) {
            $logo_url = $barsi_site_logo['url'];
        } else {
            $logo_url = get_template_directory_uri() . '/assets/img/logo/logo-1.svg';
        }
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                ?>
                <a class="tx-logo bs-header-logo-1" href="<?php print esc_url( home_url( '/' ) );?>">
                    <img src="<?php echo esc_url($logo_url); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text($logo_url); } ?>" />
                </a>
                <?php
            }
        ?>
    <?php
}


// side info logo
function barsi_side_info_logo() {
    $tx_sideInfo_logo = cs_get_option( 'tx_sideInfo_logo', get_template_directory_uri() . '/assets/img/logo/logo-2.svg');
    if(isset($tx_sideInfo_logo['url'])) {
        $logo_url = $tx_sideInfo_logo['url'];
    } else {
        $logo_url = get_template_directory_uri() . '/assets/img/logo/logo-2.svg';
    }

    ?>
    <a class="wa-offcanvas-top-logo tx-logo" aria-label="logo" href="<?php print esc_url( home_url( '/' ) );?>">
        <img src="<?php print esc_url( $logo_url );?>" alt="<?php if(function_exists('logo_url')) { echo barsi_img_alt_text($logo_url); } ?>" />
    </a>


<?php }