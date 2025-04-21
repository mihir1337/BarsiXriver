<div class="bs-blog-page-2-left">

    <div class="bs-blog-page-2-item">
        <!-- single-blog -->
        <?php
            if (!empty($posts)):
            foreach ( $posts as $inx => $post ) :
            $title = $post->post_title;

            if ( 'selected' === $settings['show_post_by'] && array_key_exists( $post->ID, $customize_title ) ) {
                $title = $customize_title[$post->ID];
            }

            $excerpt = $post->post_excerpt;
            if ( 'selected' === $settings['show_post_by'] && array_key_exists( $post->ID, $customize_text ) ) {
                $excerpt = $customize_text[$post->ID];
            }

            $thumb = get_the_post_thumbnail_url( $post->ID, 'large' );
            if ( 'selected' === $settings['show_post_by'] && array_key_exists( $post->ID, $customize_img ) && !empty( $customize_img[$post->ID]['url'] ) ) {
                $thumb = $customize_img[$post->ID]['url'];
            }

            $author_name = get_the_author_meta( 'display_name', $post->post_author );
            // aythor image
            $author_img = get_avatar_url( $post->post_author, array( 'size' => 50 ) );

            // get post categories
            $categories = get_the_category( $post->ID );
            $cat_name = '';

            if ( !empty( $categories ) ) {
                $cat_name = $categories[0]->name;
                $cat_link = get_category_link( $categories[0]->term_id );
            }
            $post_by_label = $settings['post_by_label'];

            $count = $inx + 1;
        ?>
        <div class="bs-blog-4-item wow fadeInRight" >
            <?php if(!empty( $thumb && $settings['feature_image'] === 'yes' )) : ?>
            <div class="item-img wa-fix wa-img-cover">
                <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name" data-cursor-text="View">
                <img src="<?php echo esc_url($thumb); ?>"
                alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text($thumb); } ?>">
                </a>
            </div>
            <?php endif; ?>
            <div class="content">
                <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['author_meta'] ): ?>
                <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name" class="item-btn">
                    <i class="flaticon-top-right flaticon"></i>
                </a>
                <p class="bs-p-4 author"><?php echo esc_html($author_name); ?></p>
                <?php endif; ?>

                <h4 class="title bs-h-1">
                    <a href="<?php echo esc_url(get_the_permalink( $post->ID )); ?>" aria-label="name"><?php echo esc_html($title); ?></a>
                </h4>
                <p class="item-meta bs-p-4">
                    <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['category_meta'] ): ?>
                    <span class="categories">
                        <a href="<?php echo esc_url($cat_link); ?>" aria-label="name" class="cat-link"><?php echo esc_html($cat_name); ?></a>
                    </span>
                    <?php endif; ?>

                    <?php if ( 'yes' === $settings['meta'] && 'yes' === $settings['date_meta'] ): ?>
                    <span class="date"><?php echo esc_html( get_the_date( get_option( 'date_format' ), $post->ID ) ); ?></span>
                    <?php endif; ?>

                    <?php if(function_exists('barsi_post_read_time') && 'yes' === $settings['meta'] && 'yes' === $settings['enable_post_read_time']) : ?>
                    <span class="read">
                        <?php barsi_post_read_time($post->ID) ?>
                    </span>
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <?php endforeach;
            else:
                printf('%1$s %2$s %3$s',
                    __('No ', 'barsi-core'),
                    esc_html($settings['post_type']),
                    __('Found', 'barsi-core')
                );
            endif;
        ?>
    </div>
</div>