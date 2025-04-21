<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package barsi
 */

get_header();

$barsi_error_image = cs_get_option( 'tx_error_image', get_template_directory_uri() . '/assets/img/shape/404.webp' );
$tx_error_title_1 = cs_get_option( 'tx_error_title_1', esc_html__( 'Oops!', 'barsi' ) );
$tx_error_title_2 = cs_get_option( 'tx_error_title_2', esc_html__( '404 Error!', 'barsi' ) );
$tx_error_description = cs_get_option( 'tx_error_description', esc_html__( 'We can\'t find the page that you\'re looking for. Can\'t find what you need? Take a moment and search below!', 'barsi' ) );
if(isset($barsi_site_logo['url'])) {
	$image_url = $barsi_error_image['url'];
} else {
	$image_url = get_template_directory_uri() . '/assets/img/shape/404.webp';
}
$barsi_error_link_text = cs_get_option('tx_error_link_text', __('Back To Home Page', 'barsi'));

?>
<section class="bs-error-page-area pt-160 pb-160">
	<div class="container bs-container-1">
		<div class="bs-error-page-wrap" data-background="<?php echo esc_url($image_url) ? esc_url($image_url) : ''; ?>">
			<div class="bs-error-page-content">
				<?php if(!empty( $tx_error_title_1 )) : ?>
				<h4 class="bs-h-4 title-1 ">
					<?php print esc_html($tx_error_title_1); ?>
				</h4>
				<?php endif; ?>

				<?php if(!empty( $tx_error_title_2 )) : ?>
				<h4 class="bs-h-4 title-2 ">
					<?php print esc_html($tx_error_title_2); ?>
				</h4>
				<?php endif; ?>

				<?php if(!empty( $tx_error_description )) : ?>
				<p class="bs-p-4 disc">
					<?php print esc_html($tx_error_description); ?>
				</p>
				<?php endif; ?>

				<?php if(!empty( $barsi_error_link_text )) : ?>
				<a href="<?php echo esc_url(home_url()); ?>" aria-label="name" class="bs-btn-1">
					<span class="text">
						<?php print esc_html($barsi_error_link_text);?>
					</span>
					<span class="icon">
						<i class="fa-solid fa-right-long"></i>
						<i class="fa-solid fa-right-long"></i>
					</span>
					<span class="shape"></span>
				</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
