<?php
    $page_class = '';
    if(is_page()) {
        $page_class = 'page-links-page';
    }
    ?>
    <div class="fix">
        <?php the_content(); ?>
    </div>
    <?php

    wp_link_pages( [
        'before'      => '<div class="page-links mt-40 mb-55 '.esc_attr($page_class).'">' . esc_html__( 'Pages:', 'barsi' ) . '',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'barsi' ) . ' </span>%',
        'separator'   => '<span class="screen-reader-text"> </span>',
    ] );

    if ( comments_open() || get_comments_number() ): ?>
        <?php comments_template(); ?>
        <?php
    endif;
?>
