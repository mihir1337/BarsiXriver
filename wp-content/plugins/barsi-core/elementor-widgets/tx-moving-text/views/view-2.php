<section class="bs-expertise-4-area wa-fix">
    <div class="container bs-container-2">
        <div class="bs-expertise-4-wrap">
            <h3 class="bs-h-4 bs-expertise-4-title">
                <?php if(!empty( $settings['sub_title'] )) : ?>
                <span class="wa-split-up wa-capitalize-hidden">
                    <?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?>
                </span>
                <?php endif; ?>

                <?php if(!empty( $settings['title'] )) : ?>
                <span class="wa-split-up wa-capitalize-hidden" data-split-delay="1s">
                    <?php echo elh_element_kses_intermediate( $settings['title'] ); ?>
                </span>
                <?php endif; ?>
            </h3>

            <div class="bs-expertise-4-box" txa-matter-scene="true">
                <?php foreach( $settings['list_items'] as $list ) :
                    if($list['icon_style'] === 'style_1') {
                        $class = '';
                    } elseif($list['icon_style'] === 'style_2') {
                        $class = 'has-clr-2';
                    } elseif($list['icon_style'] === 'style_3') {
                        $class = 'has-clr-3';
                    }
                 ?>
                <div class="single-tag" txa-matter-item>
                    <span class="single-tag-item bs-p-4">
                        <?php if(!empty( $list['info_icon'] )) : ?>
                        <span class="icon <?php echo esc_attr( $class ); ?>">
                            <?php \Elementor\Icons_Manager::render_icon( $list['info_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </span>
                        <?php endif; ?>

                        <?php if(!empty( $list['info_label'] )) : ?>
                        <span class="text"><?php echo esc_html( $list['info_label'] ); ?></span>
                        <?php endif; ?>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>