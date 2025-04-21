<?php
/**
* xriver-companion
* @since 1.0.0
*/

Class Latest_posts_sidebar_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct( 'tc-latest-posts', ''.tf_theme_name().' Recent Posts ('.tf_theme_name().')', [
            'description' => 'Recent Post Widget by '.tf_theme_name().'',
        ] );
    }

    public function widget( $args, $instance ) {
        extract( $args );
        extract( $instance );

        echo $before_widget;
		?>
		<?php
			if ( $instance['title'] ):
				echo $before_title;?>
						<?php echo apply_filters( 'widget_title', $instance['title'] ); ?>
					<?php echo $after_title; ?>
				<?php endif; ?>
			<div class="recent-blog-widget">
				<div class="tx-recent-posts bs-sidebar-blog">
					<?php
						$q = new WP_Query( [
						'post_type'      => 'post',
						'posts_per_page' => ( $instance['count'] ) ? $instance['count'] : '5',
						'order'          => ( $instance['posts_order'] ) ? $instance['posts_order'] : 'DESC',
						'orderby'        => 'date',
						'ignore_sticky_posts' => 1,
					] );

					if ( $q->have_posts() ):
						while ( $q->have_posts() ): $q->the_post();
						$id = get_the_ID();

						$title_length = ( $instance['title_length'] ) ? $instance['title_length'] : '10';

						if ( has_post_thumbnail() ) {
							$class = 'has-thumbnail';
						} else {
							$class = 'no-thumbnail';
						}

						// get post categories
                        $categories = get_the_category( $id );
                        $cat_name = '';

                        if ( !empty( $categories ) ) {
                            $cat_name = $categories[0]->name;
                            $cat_link = get_category_link( $categories[0]->term_id );
                        }
					?>
					<div class="latest-post-item bs-sidebar-blog-single <?php echo esc_attr($class); ?>" id="<?php echo esc_attr('post-'.$id); ?>">
						<?php if ( has_post_thumbnail() ): ?>
						<div class="item-img wa-img-cover wa-fix">
							<a aria-label="<?php print get_the_title(); ?>" class="d-inline-block img-cover" href="<?php the_permalink();?>">
								<?php the_post_thumbnail( 'full', ['class' => 'sidebar-post-img'] ); ?>
							</a>
						</div>
						<?php endif; ?>

						<div class="content">
							<h6 class="bs-p-4 item-meta">
								<span class="categories">
									<a href="<?php echo esc_html($cat_link); ?>"
									aria-label="<?php echo esc_html($cat_name); ?>">
										<?php echo esc_html($cat_name); ?>
									</a>
								</span>
								<span class="date">
									<?php echo esc_html( get_the_date( get_option( 'date_format' ), $id ) ); ?>
								</span>
							</h6>
							<h4 class="bs-h-4 title">
								<a aria-label="<?php print get_the_title(); ?>" href="<?php the_permalink();?>">
									<?php print wp_trim_words( get_the_title(), $title_length, '' );?>
								</a>
							</h4>
						</div>
					</div>
					<?php endwhile;
					endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>

		<?php echo $after_widget; ?>

		<?php
}

    public function form( $instance ) {
        $title = !empty( $instance['title'] ) ? $instance['title'] : '';
        $count = !empty( $instance['count'] ) ? $instance['count'] : esc_html__( '3', 'barsi-core' );
		$title_length = !empty( $instance['title_length'] ) ? $instance['title_length'] : esc_html__( '10', 'barsi-core' );
        $posts_order = !empty( $instance['posts_order'] ) ? $instance['posts_order'] : esc_html__( 'DESC', 'barsi-core' );
        ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo esc_html__('Title', 'barsi-core'); ?></label>
			<input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>" id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php echo esc_html__('How many posts you want to show ?', 'barsi-core'); ?></label>
			<input type="number" name="<?php echo $this->get_field_name( 'count' ); ?>" id="<?php echo $this->get_field_id( 'count' ); ?>" value="<?php echo esc_attr( $count ); ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'title_length' ); ?>"><?php echo esc_html__('Title Length', 'barsi-core'); ?></label>
			<input type="number" name="<?php echo $this->get_field_name( 'title_length' ); ?>" id="<?php echo $this->get_field_id( 'title_length' ); ?>" value="<?php echo esc_attr( $title_length ); ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'posts_order' ); ?>"><?php echo esc_html__('Posts Order', 'barsi-core'); ?></label>
			<select name="<?php echo $this->get_field_name( 'posts_order' ); ?>" id="<?php echo $this->get_field_id( 'posts_order' ); ?>" class="widefat">
				<option value="" disabled="disabled"><?php echo esc_html__('Select Post Order', 'barsi-core'); ?></option>
				<option value="ASC" <?php if ( $posts_order === 'ASC' ) {echo 'selected="selected"';}?>><?php echo esc_html__('ASC', 'barsi-core'); ?></option>
				<option value="DESC" <?php if ( $posts_order === 'DESC' ) {echo 'selected="selected"';}?>><?php echo esc_html__('DESC', 'barsi-core'); ?></option>
			</select>
		</p>

	<?php }

}

add_action( 'widgets_init', function () {
    register_widget( 'Latest_posts_sidebar_Widget' );
} );