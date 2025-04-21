<div class="pf-touch-4-area pb-150 tx-section">
    <div class="container pf-container-1">
        <div class="pf-touch-4-wrap wa-p-relative">
            <div class="pf-touch-4-content">

                <!-- section-title -->
                <div class="pf-touch-4-sec-title">
                    <?php if( $settings['enable_sub_title'] === 'yes' ) : ?>
                    <h5 class="pf-subtitle-3 tx-subTitle">
                        <?php echo elh_element_kses_intermediate( $settings['sub_title'] ); ?>
                        <span class="pf-subtitle-3-line"></span>
                    </h5>
                    <?php
                    endif;
                        if($settings['enable_title'] === 'yes') {
                        $this->add_render_attribute( 'title', 'class', 'tx-title pf-sec-title-4 has-fs-45 pf-split-2' );
                            printf('<%1$s %2$s>%3$s</%1$s>',
                                tag_escape($settings['title_tag']),
                                $this->get_render_attribute_string('title'),
                                elh_element_kses_basic( $settings['title'] )
                            );
                        }
                    if( $settings['enable_description'] === 'yes' ) : ?>
                    <p class="pf-p-3 sec-disc wow fadeInUp tx-description"><?php echo elh_element_kses_intermediate($settings['description']); ?></p>
                    <?php endif; ?>
                </div>

                <?php if( $settings['enable_contact_info_box'] === 'yes' ) : ?>
                <div href="#" aria-label="name" class="pf-free-phone-2 wow fadeInUp">
                    <?php if(!empty( $settings['contact_info_icon'] )) : ?>
                    <span class="icon">
                       <?php \Elementor\Icons_Manager::render_icon( $settings['contact_info_icon'], ['aria-hidden' => 'true'] ); ?>
                    </span>
                    <?php endif; ?>
                    <span class="content">
                        <?php echo elh_element_kses_intermediate( $settings['contact_info_label'] ); ?>
                        <?php echo wp_kses($settings['contact_info_text'], true); ?>
                    </span>
                </div>
                <?php endif; ?>
            </div>

            <div class="pf-touch-4-shape not-svg">
                <?php if( $settings['enable_shape'] === 'yes' ) : ?>
                <svg class="" width="848" height="679" viewBox="0 0 848 679" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_159_524)">
                    <path class="path-1" d="M444.571 708.645C534.976 617.672 546.347 538.645 555.142 495.587C571.214 379.436 529.378 271.101 529.378 271.101L431.204 299.016C449.773 372.75 444.107 426.962 440.573 460.125C425.056 573.59 356.718 617.864 339.931 629.919C261.919 680.297 196.004 675.187 196.004 675.187L268.918 801.459C359.265 780.759 419.52 731.171 444.571 708.645Z" fill="url(#paint0_linear_159_524)"/>
                    <path class="path-2" d="M687.317 550.519C712.013 465.976 707.318 415.12 707.318 415.12C706.769 394.057 703.23 360.484 695.679 314.965C686.122 263.227 666.245 210.043 639.068 146.552C610.937 82.3109 557.867 13.7122 557.867 13.7122C557.867 13.7122 517.683 48.7812 445.404 112.405C500.409 182.512 529.377 271.101 529.377 271.101C529.377 271.101 571.214 379.436 555.142 495.587C546.357 538.663 534.976 617.672 444.571 708.645C419.502 731.181 359.265 780.759 268.918 801.459L348.397 939.1C364.256 931.009 379.875 922.749 395.166 914.207C536.195 835.492 642.045 705.52 687.307 550.501L687.317 550.519Z" fill="url(#paint1_linear_159_524)"/>
                    <path class="path-3" d="M382.35 997.899C664.356 925.377 746.924 701.548 766.847 657.197C819.447 530.247 822.537 417.216 822.537 417.216C822.537 417.216 724.86 415.801 707.3 415.13L667.525 415.269C667.525 415.269 664.577 534.936 600.139 648.924C573.852 694.582 520.327 811.779 305.718 865.189L382.35 997.899Z" fill="url(#paint2_linear_159_524)"/>
                    </g>
                    <defs>
                    <linearGradient id="paint0_linear_159_524" x1="471.396" y1="287.668" x2="471.361" y2="673" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#112C9C"/>
                    <stop offset="1" stop-color="#112C9C" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_159_524" x1="503.411" y1="62.5342" x2="523.79" y2="896.3" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#8B5BFA"/>
                    <stop offset="1" stop-color="#8B5BFA" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_159_524" x1="745.673" y1="408.658" x2="531.461" y2="925.235" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#EC3D8C"/>
                    <stop offset="1" stop-color="#EC3D8C" stop-opacity="0"/>
                    </linearGradient>
                    <clipPath id="clip0_159_524">
                    <rect width="848" height="679" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                <?php else : ?>
                    <?php if(!empty( $settings['image_1']['url'] )) : ?>
                    <img src="<?php echo esc_url( $settings['image_1']['url'] ); ?>" alt="<?php if(function_exists('barsi_img_alt_text')) { echo barsi_img_alt_text( $settings['image_1']['url'] ); } ?>" class="pf-touch-4-shape-img">
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>