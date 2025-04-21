<?php
    $heading_align = isset( $settings['heading_align'] ) ? $settings['heading_align'] : 'left';
    if( $heading_align === 'center' ) {
        $heading_align = 'text-center';
    } elseif( $heading_align === 'right' ) {
        $heading_align = 'text-right';
    } else {
        $heading_align = 'text-left';
    }
?>
<div class="tx-heading-section bs-team-3-sec-title wa-p-relative <?php echo esc_attr( $heading_align ); ?>">
    <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
    <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize tx-subTitle">
        <?php if( $settings['enable_sub_title_icon'] === 'yes' ) : ?>
        <span class="icon">
            <?php if( $settings['type'] === 'icon' ) : ?>
                <?php \Elementor\Icons_Manager::render_icon( $settings['sub_title_icon'], [ 'aria-hidden' => 'true' ] ); ?>
            <?php else : ?>
                <img src="<?php echo esc_url( $settings['sub_title_image']['url'] ); ?>" alt="<?php if(function_exists('lawfy_img_alt_text')) { echo lawfy_img_alt_text( $settings['sub_title_image']['url'] ); } ?>">
                <?php endif; ?>
        </span>
        <?php endif; ?>
        <?php if(!empty( $settings['sub_title'] )) : ?>
        <span class="text wa-split-clr wa-capitalize" >
            <?php echo elh_element_kses_intermediate($settings['sub_title']); ?>
        </span>
        <?php endif; ?>
    </h6>
    <?php
        endif;
        if($settings['enable_title'] === 'yes') {
        $this->add_render_attribute( 'title', 'class', 'tx-title bs-sec-title-3 wa-split-right wa-capitalize' );
        $this->add_render_attribute( 'title', 'data-cursor', '-opaque' );
            printf('<%1$s %2$s>%3$s</%1$s>',
                tag_escape($settings['title_tag']),
                $this->get_render_attribute_string('title'),
                elh_element_kses_basic( $settings['title'] )
            );
        }
    ?>
    <?php if( $settings['enable_description'] === 'yes' ) : ?>
    <p class="tx-description">
        <?php echo elh_element_kses_intermediate($settings['description']); ?>
    </p>
    <?php endif; ?>
</div>