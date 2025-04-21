<?php

/**
 * Default Header Style
 */
function barsi_default_header() {
    if ( has_nav_menu( 'main-menu' ) ) {
        $no_menu_class = '';
    } else {
        $no_menu_class = 'no-menu ';
    }

    ?>
	<header class="bs-header-1-area tx-header tx-DefaultHeader <?php echo esc_attr($no_menu_class); ?>">
		<div class="bs-header-1-row d-flex align-items-center justify-content-between">

			<!-- logo -->
			<?php function_exists( 'barsi_header_logo' ) ? barsi_header_logo() : '';?>

			<!-- action-link -->
			<?php if ( has_nav_menu( 'main-menu' ) ) : ?>
			<div class="bs-header-1-action-link d-flex align-items-center ">

				<!-- offcanvas-btn -->
				<button type="button" aria-label="name" class="bs-offcanvas-btn-1 btn-span offcanvas_toggle">
					<span class="line"></span>
					<span class="line"></span>
					<span class="shape"></span>
				</button>

			</div>
			<?php endif;?>
		</div>
	</header>

	<div class="wa-offcanvas-area  offcanvas_box_active lenis lenis-smooth">
		<div class="wa-offcanvas-wrap ">

			<!-- top -->
			<div class="wa-offcanvas-top">

				<!-- logo -->
				<?php function_exists( 'barsi_side_info_logo' ) ? barsi_side_info_logo() : '';?>

				<!-- close-btn -->
				<button class="wa-offcanvas-close offcanvas_box_close" aria-label="name" >
					<span></span>
					<span></span>
				</button>

			</div>

			<!-- mobile-menu-list -->
			<nav class="mobile-main-navigation mb-50">
				<?php function_exists( 'barsi_header_menu' ) ? barsi_header_menu( 'main-menu' ) : null;?>
			</nav>
		</div>
	</div>
	<div class="wa-overly"></div>

	<?php
}
