<?php

// Customize default fields: Full name, Email, and Phone
add_filter( 'comment_form_default_fields', 'barsi_comment_form_default_fields_func' );
function barsi_comment_form_default_fields_func( $fields ) {

    $fields['author'] = '
        <div class="bs-form-1-item">
            <label class="bs-form-1-item-label" for="author">' . esc_attr__( 'Full name', 'barsi' ) . '</label>
            <input class="bs-form-1-item-input " type="text" name="author" id="author" placeholder="' . esc_attr__( 'Full Name', 'barsi' ) . '">
        </div>';

    $fields['email'] = '
        <div class="bs-form-1-item">
            <label class="bs-form-1-item-label" for="email">' . esc_attr__( 'Email', 'barsi' ) . '</label>
            <input class="bs-form-1-item-input " type="email" name="email" id="email" placeholder="' . esc_attr__( 'info@example.com', 'barsi' ) . '">
        </div>';

    $fields['phone'] = '
        <div class="bs-form-1-item">
            <label class="bs-form-1-item-label" for="phone">' . esc_attr__( 'Phone Number', 'barsi' ) . '</label>
            <input class="bs-form-1-item-input " type="tel" name="phone" id="phone" placeholder="' . esc_attr__( '+1 234 567 890', 'barsi' ) . '">
        </div>';

    // Remove the website field
    unset( $fields['url'] );

    return $fields;
}

// Move the textarea to the bottom
add_filter( 'comment_form_defaults', 'barsi_comment_form_defaults_func' );
function barsi_comment_form_defaults_func( $defaults ) {

    $defaults['comment_field'] = '
        <div class="contact-form">
            <div class="row">
                <div class="col-xl-12 form-group">
                    <div class="tx-input-field bs-form-1-item">
                        <label class="bs-form-1-item-label" for="comment">' . esc_attr__( 'Message', 'barsi' ) . '</label>
                        <textarea id="comment" name="comment" class="bs-form-1-item-input" placeholder="' . esc_attr__( 'Write your message here...', 'barsi' ) . '" required></textarea>
                    </div>
                </div>
            </div>
        </div>';

    $defaults['submit_button'] = '
        <div class="col-xl-12 submit-button mt-20">
            <div class="bs-form-1-item tx-button-wrapper m-0 pt-20">
                <button type="submit" class="bs-btn-1">
                    <span class="text">' . esc_html__( 'Send Message', 'barsi' ) . '</span>
                    <span class="icon">
                        <i class="fa-solid fa-right-long"></i>
                        <i class="fa-solid fa-right-long"></i>
                    </span>
                    <span class="shape"></span>
                </button>
            </div>
        </div>';

    $defaults['title_reply_before'] = '<h3 class="fti-heading-3 blog-details-form-title mt-0">';
    $defaults['title_reply_after'] = '</h3>';
    $defaults['comment_notes_before'] = '';
    $defaults['comment_notes_after']  = '';

    return $defaults;
}

// Custom comment output
if ( !function_exists( 'barsi_comment' ) ) {
    function barsi_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        $args['reply_text'] = '<i class="fas fa-comment"></i>' . esc_html__( ' Reply', 'barsi' );
        ?>
        <li id="comment-<?php comment_ID(); ?>">
            <div class="log-comment-item d-flex flex-wrap position-relative pera-content tx-comment-box">
                <?php if ( get_avatar( $comment, 78 ) ) : ?>
                    <div class="log-comment-img">
                        <?php echo get_avatar( $comment, 78, null, null, ['class' => ['blog-details-comment-card-img']] ); ?>
                    </div>
                <?php endif; ?>

                <div class="log-comment-text">
                    <div class="author-name-date">
                        <span class="cm-name"><?php echo get_comment_author_link(); ?></span>
                        <span class="cm-date"><?php echo get_comment_date(); ?></span>
                    </div>
                    <?php comment_text(); ?>
                </div>

                <div class="log-like-reply position-absolute text-capitalize">
                    <?php comment_reply_link( array_merge( $args, ['depth' => $depth, 'max_depth' => $args['max_depth']] ) ); ?>
                </div>
            </div>
        </li>
        <?php
    }
}
?>
