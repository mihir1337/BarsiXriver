<?php
    $title_animation = '';
    if( $settings['enable_title'] === 'yes' ) {
        if($settings['enable_title_anim'] === 'yes') {
            $title_animation = 'vt-title-ani '.$settings['title_animation'];
        } else {
            $title_animation = '';
        }
    } else {
        $title_animation = '';
    }
?>
<div class="pf-blog-5-sce-title tx-heading-section m-0">
    <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
    <div class="pf-subtitle-5 tx-subTitle">
        <?php echo elh_element_kses_intermediate($settings['sub_title']); ?>
    </div>
    <?php endif;
        $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-5 has-fs-45 pf-split-2' );
        if($settings['enable_title'] === 'yes') {
            printf('<%1$s %2$s>%3$s</%1$s>',
                tag_escape($settings['title_tag']),
                $this->get_render_attribute_string('title'),
                elh_element_kses_intermediate( $settings['title'] )
            );
        }
    ?>
    <?php if( $settings['enable_description'] === 'yes' ) : ?>
    <p class="tx-description pf-p-5 sec-disc wow fadeInUp">
        <?php echo elh_element_kses_intermediate($settings['description']); ?>
    </p>
    <?php endif; ?>
</div>