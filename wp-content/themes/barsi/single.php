<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package barsi
 */

get_header();

if(!empty( BARSI_CORE )) {
	$blog_details_wrapper = 'tx-detailsWrapper__prev';
}else {
	$blog_details_wrapper = 'tx-detailsWrapper__unit';
}
?>

<div class="tx-blog-area bs-blog-details-area wa-p-relative pt-80 pb-80 <?php echo esc_attr($blog_details_wrapper); ?>">
	<div class="container bs-container-1">
		<div class="row">
			<div class="col-lg-12">
				<div class="tx-detailsWrapper blog-details-content bs-blog-details-content <?php echo esc_attr($blog_details_wrapper); ?>">
					<?php
						while ( have_posts() ):
						the_post();
						get_template_part( 'post-formats/content', get_post_format() );

						if(BARSI_CORE) {
							if(!empty(get_previous_post() || get_next_post()) ) {
								get_template_part( 'post-formats/content', 'related-post' );
							}
						} else if(comments_open() || get_comments_number()) {
							echo '<div class="mt-50"></div>';
						} else {
							echo '<div class="d-none"></div>';
						}

						get_template_part( 'post-formats/content', 'author' );

					?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ): ?>
						<div class="tx-commentsWrapper mt-40">
							<?php comments_template(); ?>
						</div>
						<?php
							endif;
							endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
