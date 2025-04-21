<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package barsi
 */

get_header();

$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 'col-xxl-8 col-xl-8 col-lg-8' : 'col-lg-12';
?>

<div class="tx-blog-area bs-blog-page-2-area pt-140 pb-120 fix">
	<div class="container bs-container-1">
        <div class="row">
			<div class="<?php print esc_attr( $blog_column );?>">
				<div class="blog__wrapper blog-list-content bs-blog-page-3-item mt-none-30">
					<?php
						if ( have_posts() ):
    					if ( is_home() && !is_front_page() ):
    				?>
					<?php
						endif;
							/* Start the Loop */
							while ( have_posts() ): the_post();
								get_template_part( 'post-formats/content', get_post_format() );
							endwhile;
						?>
						<div class="tx-pagination mt-30">
							<?php
								barsi_pagination( '
									<i class="fa-solid fa-angles-left"></i>',
									'<i class="fa-solid fa-angles-right"></i>  ',
									'',
									['class' => '']
								);
							?>
						</div>
						<?php
						else:
							get_template_part( 'post-formats/content', 'none' );
						endif;
					?>
				</div>
			</div>

			<?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
			<div class="col-xxl-4 col-xl-4 col-lg-4 mt-30 mt-lg-0">
				<div class="tx-sidebarWrapper bs-blog-page-sidebar">
					<?php get_sidebar();?>
				</div>
			</div>
			<?php endif;?>
        </div>
    </div>
</div>

<?php
get_footer();
