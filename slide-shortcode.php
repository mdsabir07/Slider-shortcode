<?php
// SLide shortcode
function medpro_slides_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'style' => '1',
        'count' => '3',
        'category' => '',
        'arrows' => 'true',
        'dots' => 'false',
        'autoplay' => 'true',
        'height' => '680',
        'autoplay_time' => '5000',
        'slide_id' => '',
    ), $atts) );

    if($count == 1) {
        $q = new WP_Query( array('posts_per_page' => 1, 'post_type' => 'slide', 'p' => $slide_id) );
    } else {
        if(!empty($category)) {
            $q = new WP_Query(array(
                'posts_per_page' => $count, 
                'post_type' => 'slide', 
                'tax_query' => array(
                    array(
                        'taxonomy' => 'slide_cat',
                        'field'    => 'term_id',
                        'terms'    => $category,
                    ),
                ),
            ));
        } else {
            $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'slide') );
        }
        
    }

    $list = '
        <script>
    ';

    if($count != 1) {
    $list .= '
    
        jQuery(window).load(function(){
            jQuery("#medpro-slides-'.esc_attr($slide_id).'").owlCarousel({
                items: 1,
                loop: true,
                autoplay: '.esc_attr($autoplay).',
                dots: '.esc_attr($dots).',
                nav: '.esc_attr($arrows).',
                autoplayTimeout: '.esc_attr($autoplay_time).',
                navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                autoplayHoverPause: false,
                touchDrag: false,
                mouseDrag: false,
                smartSpeed: 300,
            });
            
            jQuery("#medpro-slides-'.esc_attr($slide_id).'").on("translate.owl.carousel", function () {
                jQuery(this).find(".owl-item .medpro-slide-text > *").removeClass("fadeInUp animated").css("opacity","0");
                jQuery(this).find(".owl-item .medpro-slide-text > .medpro-slide-buttons").removeClass("fadeInRight animated").css("opacity","0");
                jQuery(this).find(".owl-item .medpro-slide-img").removeClass("fadeInRight animated").css("opacity","0");
            });          
            jQuery("#medpro-slides-'.esc_attr($slide_id).'").on("translated.owl.carousel", function () {
                jQuery(this).find(".owl-item.active .medpro-slide-text > *").addClass("fadeInUp animated").css("opacity","1");
                jQuery(this).find(".owl-item.active .medpro-slide-text > .medpro-slide-buttons").addClass("fadeInRight animated").css("opacity","1");
                jQuery(this).find(".owl-item.active .medpro-slide-img").addClass("fadeInRight animated").css("opacity","1");
            });';

            if ($style == '5') {
                $list .='jQuery(".menuarea").addClass("absolute-header");';
            }

            
$list .='          
        });
    ';

    $carousel_class = 'owl-carousel';
    } else {
        $carousel_class = '';
    }
    
    $list .='
    </script>
    ';
    
    $list .='
    <div class="slider-preloader-wrap medpro-slider-style-'.esc_attr($style).'" style="height:'.esc_attr($height).'px">
        <div class="slider-preloader"><div class="spinner"></div></div>
        <div class="'.esc_attr($carousel_class).' medpro-slides" id="medpro-slides-'.esc_attr($slide_id).'">';

        while($q->have_posts()) : $q->the_post();
            $idd = get_the_ID();
            if(get_post_meta($idd, 'medpro_slide_meta', true)) {
                $slide_meta = get_post_meta($idd, 'medpro_slide_meta', true);
            } else {
                $slide_meta = array();
            }
            if(array_key_exists('box_align', $slide_meta)){
                $box_align = $slide_meta['box_align'];
            }else{
                $box_align = 'start';
            }
            if(array_key_exists('text_align', $slide_meta)){
                $text_align = $slide_meta['text_align'];
            }else{
                $text_align = 'left';
            }
            if(array_key_exists('box_width', $slide_meta)){
                $box_width = $slide_meta['box_width'];
            }else{
                $box_width = 'col-lg-6';
            }
            if(array_key_exists('enable_overlay', $slide_meta)){
                $enable_overlay = $slide_meta['enable_overlay'];
            }else{
                $enable_overlay = '2';
            }
            if(array_key_exists('overlay_color', $slide_meta)){
                $overlay_color = $slide_meta['overlay_color'];
            }else{
                $overlay_color = '#000';
            }
            if(array_key_exists('overlay_percentage', $slide_meta)){
                $overlay_percentage = $slide_meta['overlay_percentage'];
            }else{
                $overlay_percentage = '60';
            }

            $medpro_allowed_html_in_slide = array(
                'a' => array(
                    'href' => array(),
                    'class' => array(),
                    'target' => array(),
                ),
                'img' => array(
                    'href' => array(),
                    'class' => array(),
                    'alt' => array(),
                ),
                'p' => array(),
                'h1' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h2' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h3' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h4' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h5' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'h6' => array(
                    'class' => array(),
                    'strong' => array(),
                    'b' => array(),
                ),
                'br' => array(),
                'strong' => array(),
                'i' => array(),
            );
            $post_content = get_the_content();

            if($style == '5' && has_post_thumbnail() OR $style == '4' && has_post_thumbnail()){
                $style5_bg = 'background-image: url('.get_the_post_thumbnail_url($idd, 'large').')';
            } else {
                $style5_bg = '';
            }
            
            $list .= '
                <div style="height: '.esc_attr($height).'px; '.$style5_bg.'" class="single-medpro-slide-item" id="single-medpro-slide-item-'.esc_attr($idd).'">';

                if($enable_overlay == 1){
                    $list .= '<div class="slide-overlay" style="background-color: '.esc_attr($overlay_color).'; opacity:0.'.esc_attr($overlay_percentage).'"></div>';
                }

            $list .= '<div class="medpro-slide-tablecell">
            <div class="container">
                <div class="row text-'.esc_attr($text_align).' justify-content-'.esc_attr($box_align).'">
                    <div class="'.esc_attr($box_width).'">
                        <div class="medpro-slide-text">';
                        $list .= '
                            <h2>'.esc_html(get_the_title($idd)).'</h2>
                            '.wp_kses(wpautop($post_content), $medpro_allowed_html_in_slide).'';

                            if(array_key_exists('buttons', $slide_meta) && !empty($slide_meta['buttons'])) {
                            $list .= '<div class="medpro-slide-buttons">';
                                foreach($slide_meta['buttons'] as $button) {
                                    if($button['linkto'] == 1) {
                                        $btn_link_markup = get_page_link($button['to_page']);
                                    } else {
                                        $btn_link_markup = $button['to_external'];
                                    }
                                    $list .='<a target="'.$button['tab'].'" href="'.esc_url($btn_link_markup).'" class="medpro-btn btn_effect '.esc_attr($button['type']).'-btn">'.esc_html($button['btn_text']).'';
                                    if(!empty($button['slide_btn_icon']) ){
                                        $list .= '<i class="'.$button['slide_btn_icon'].'"></i>';
                                    }
                                    $list .='</a>';
                                    }
                            $list .='
                            </div>';
                            }
            
                            $list .='
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            if(has_post_thumbnail() && $style == '1' OR has_post_thumbnail() && $style == '3') {
                $list .='<img class="medpro-slide-img" src="'.get_the_post_thumbnail_url($idd, 'large').'" alt="'.esc_html(get_the_title($idd)).'"/>';
            } 

            $list .='
                </div>
                ';
        endwhile;
    $list.= '</div>';


    $list .='</div>';
    wp_reset_query();
        
    return $list;
}
add_shortcode('medpro_slides', 'medpro_slides_shortcode');

//Slider VC Map
vc_map(
    array(
        "name" => esc_html__( "MedPro Slides", "medpro-toolkit" ),
        "base" => "medpro_slides",
        "icon"  => medpro_ACC_URL.'/assets/img/slides.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Slides count", "medpro-toolkit" ),
                "param_name" => "count",
                "std" => esc_html__( "3", "medpro-toolkit" ),
                "value" => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    'Unlimited' => '-1',
                ),
                "description" => esc_html__( "How many slide you want to show?", "medpro-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Height", "medpro-toolkit" ),
                "param_name" => "height",
                "std" => "680",
                "description" => esc_html__( "Type slider height in number.", "medpro-toolkit" ),
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select slide", "medpro-toolkit" ),
                "param_name" => "slide_id",
                "value" => medpro_toolkit_get_slides_as_list(),
                "description" => esc_html__( "Click here if you dont know slide ID.", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select category", "medpro-toolkit" ),
                "param_name" => "category",
                "value" => medpro_toolkit_slide_cat_list(),
                "description" => esc_html__( "Select category.", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show arrows?", "medpro-toolkit" ),
                "param_name" => "arrows",
                "std" => esc_html__( "true", "medpro-toolkit" ),
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "description" => esc_html__( "If you want visible slide arrows then select Yes", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show dots?", "medpro-toolkit" ),
                "param_name" => "dots",
                "std" => esc_html__( "false", "medpro-toolkit" ),
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "description" => esc_html__( "Appear slides dot", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay?", "medpro-toolkit" ),
                "param_name" => "autoplay",
                "std" => esc_html__( "true", "medpro-toolkit" ),
                "value" => array(
                    'Yes' => 'true',
                    'No' => 'false',
                ),
                "description" => esc_html__( "If you want enable slides autoplay, select yes", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay time", "medpro-toolkit" ),
                "param_name" => "autoplay_time",
                "std" => esc_html__( "5000", "medpro-toolkit" ),
                "value" => array(
                    '1 Seconds' => '1000',
                    '2 Seconds' => '2000',
                    '3 Seconds' => '3000',
                    '4 Seconds' => '4000',
                    '5 Seconds' => '5000',
                    '6 Seconds' => '6000',
                    '7 Seconds' => '7000',
                    '8 Seconds' => '8000',
                    '9 Seconds' => '9000',
                    '10 Seconds' => '10000',
                ),
                "description" => esc_html__( "Select autoplay time..", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "count",
                    "value" => array("2", "3", "4", "5", "6", "7", "8", "9", "-1"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Slider style", "medpro-toolkit" ),
                "param_name" => "style",
                "std" => "1",
                "value" => array(
                    esc_html__('Home page 1 style') => '1',
                    esc_html__('Home page 3 style') => '3',
                    esc_html__('Home page 4 style') => '4',
                    esc_html__('Home page 5 style') => '5',
                ),
                "description" => esc_html__( "Select slider style.", "medpro-toolkit" ),
            ),
        )
    )
);