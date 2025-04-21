<section class="bs-award-6-area m-0">
    <div class="container bs-container-1">
        <div class="bs-award-6-wrap">
            <?php
                $this->add_render_attribute( 'title', 'class', 'tx-title bs-h-4 title' );
                if($settings['enable_title'] === 'yes') {
                    printf('<%1$s %2$s>%3$s</%1$s>',
                        tag_escape($settings['title_tag']),
                        $this->get_render_attribute_string('title'),
                        elh_element_kses_basic( $settings['title'] )
                    );
                }
            ?>
            <?php if( $settings['enable_description'] === 'yes' ) : ?>
            <p class="bs-p-4 disc"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
            <?php endif; ?>

            <?php if( $settings['enable_award_lists'] === 'yes' ) : ?>
            <div class="bs-award-6-item">

                <!-- single-item -->
                <?php foreach($settings['award_lists'] as $list ) : ?>
                <div class="bs-award-6-item-single">
                    <div class="top">
                        <?php if(!empty( $list['icon'] )) : ?>
                        <div class="icon">
                            <i>
                                <?php \Elementor\Icons_Manager::render_icon( $list['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                            </i>
                        </div>
                        <?php endif; ?>

                        <?php if(!empty( $list['award_date'] )) : ?>
                        <h4 class="bs-h-4 year"><?php echo elh_element_kses_intermediate($list['award_date']); ?></h4>
                        <?php endif; ?>
                    </div>

                    <?php if(!empty( $list['title'] )) : ?>
                    <p class="item-disc bs-p-4"><?php echo elh_element_kses_intermediate($list['title']); ?></p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>

            </div>
            <?php endif; ?>
        </div>
    </div>
</section>