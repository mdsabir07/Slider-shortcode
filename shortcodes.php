<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }



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



// Promo Box shortcode
function medpro_promo_box_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'title' => '',
        'desc' => '',
        'icon_type' => '1',
        'icon' => '',
        'img' => '1',
        'link_text' => esc_html__('Know more', 'medpro-toolkit'),
        'link_to' => '1',
        'link_to_page' => '',
        'link_external' => '',
        'button_type' => '1',
        'textonly' => '',
        'style' => '1',
        'promo_text' => '',
        'bg_img' => '',
    ), $atts ) );
    
    $medpro_allowed_html_in_st = array(
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
        'br' => array(),
        'strong' => array(),
        'i' => array(),
    );

    if($link_to == 1) {
        $link_markup = get_page_link($link_to_page);
    } else {
        $link_markup = $link_external;
    }


    $promo_box_img_r = wp_get_attachment_image_src($img, 'medium');
    $promo_box_img_bg = wp_get_attachment_image_src($bg_img, 'medium');

    if($style == '3' && !empty($bg_img)){
    	$promo_box_bg = 'style="background-image:url('.esc_url($promo_box_img_bg[0]).')"';
    } else {
    	$promo_box_bg = '';
    }

    $promo_box_markup = '<div class="medpro-promo-box style-'.esc_attr($style).'" '.$promo_box_bg.'>'; 
        
        $promo_box_markup .='
        <div class="promo-box-inner">
            <div class="promo-box-bg">';

            if($style == '3'){
                $promo_box_markup .='<div class="image-box">';
            }

            if($style == '1' OR $style == '3'){
	            if($icon_type == '1' && !empty($img)) {
                    $promo_box_markup .='<img src="'.esc_attr($promo_box_img_r[0]).'" alt="'.esc_html($title).'"/>';
                } else {
                    $promo_box_markup .='<i class="'.esc_attr($icon).'"></i>';
                }
	        }
            if($style == '3'){
                $promo_box_markup .='</div>';
            }

        $promo_box_markup .='
        		<h3>'.esc_html($title).'</h3>
            </div>
            <div class="promo-box-content">
                '.wp_kses(wpautop($desc), $medpro_allowed_html_in_st).'
            ';
    
	        if(!empty($link_markup) && !empty($link_text) && $button_type== '2') {
	            $promo_box_markup .='
	                <a href="'.esc_url($link_markup).'" class="promo-btn">'.esc_html($link_text).' <i class="fa fa-plus"></i></a>
	            ';
	        }
	    	
	    	if($button_type== '1' && !empty($textonly)){
	    		$promo_box_markup .='
	    			<h5>'.esc_html($textonly).'</h5>
	    		';
	    	}

	    	if($style == '3' && !empty($promo_text)){
	    		$promo_box_markup .='
	    			<h6>'.esc_html($promo_text).'</h6>
	    		';
	    	}

    $promo_box_markup .= '</div></div></div>';

    return $promo_box_markup;
}
add_shortcode('medpro_promo_box', 'medpro_promo_box_shortcode');



// Counter Box
function medpro_counter_box_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'number'        =>  '',
        'after_text'    =>  '',
        'desc'          =>  '',
        'style'          =>  '1',
        'img'          =>  '',
        'icon_type'      =>  '1',
        'icon'      =>  '',
        'icon_color'      =>  '',
    ), $atts ) );

    $counter_img = wp_get_attachment_image_src($img, 'medium');

    $counter_box_markup = '
        <div class="medpro-counter-box style-'.esc_attr($style).'">';
        if($style == '2'){
            $counter_box_markup .= '<h5>'.esc_html($desc).'</h5>';
        }
        
        if($style == '3'){
            if($icon_type == '1' && !empty($img)) {
                $counter_box_markup .='<img src="'.esc_url($counter_img[0]).'"/>';
            } else {
                $counter_box_markup .='<i class="'.esc_attr($icon).'" style="color:'.esc_attr($icon_color).'"></i>';
            }
        }

        $counter_box_markup .= '
            <h2><span class="counter">'.esc_attr($number).'</span> '.esc_attr($after_text).'</h2>
        ';
        if($style == '1' OR $style == '3'){
            $counter_box_markup .= '<h5>'.esc_html($desc).'</h5>';
        }
            
    $counter_box_markup .= '</div>';

    return $counter_box_markup;
}
add_shortcode('medpro_counter_box', 'medpro_counter_box_shortcode');






// medpro section title shortcode
function medpro_section_title_shortcode($atts, $content = null) {
    
    extract( shortcode_atts( array(
        'theme'         =>  '1',
        'title'         =>  '',
        'desc_option'   =>  '2',
        'desc'          =>  '',
        'text_align'    =>  'center',
    ), $atts) );  


    
    $secton_title_markup = '
        <div class="medpro-section-title theme-'.esc_attr($theme).'" style="text-align:'.esc_attr($text_align).'">
            <h2>'.$title.'</h2>';

        if( $desc_option == '1' && !empty($desc) ) {
            $secton_title_markup .= ''.wpautop($desc).'';
        }

    $secton_title_markup .= '
        </div>
    ';


    return $secton_title_markup;
    
}
add_shortcode('medpro_section_title', 'medpro_section_title_shortcode');




// Doctors shortcode
function medpro_doctor_shortcode($atts){
    extract( shortcode_atts( array(
        'view_type'  => '1',
        'count' => '3',
        'column' => '4',
        'category' => '',
        'autoplay' => 'true',
        'autoplay_time' => '5000',
        'nav' => 'true',
        'dots' => 'false',
        'style' => '1',
    ), $atts) );


if($category) {
        $q = new WP_Query(array(
            'posts_per_page' => $count, 
            'post_type' => 'doctor', 
            'tax_query' => array(
                array(
                    'taxonomy' => 'doctor_cat',
                    'field'    => 'term_id',
                    'terms'    => $category,
                ),
            ),
        ));
    } else {
        $q = new WP_Query(array('posts_per_page' => $count, 'post_type' => 'doctor'));
    }

    if($view_type == 1){
	    if($column == 1) {
	        $doctor_column_width = 'col-lg-12 col-sm-12';
	    } elseif ($column == 2) {
	        $doctor_column_width = 'col-lg-6 col-sm-6';
	    } elseif ($column == 3) {
            $doctor_column_width = 'col-lg-4 col-sm-6';
        } else {
            $doctor_column_width = 'col-lg-3 col-sm-6';
        }
	}

	if($style == '2'){
		$carousel_center = 'true';
	} else {
		$carousel_center = 'false';
	}

    if($view_type == '2') {
    $doctor_random_id = rand(32987, 54972);
        $doctor_markup = '
            <script>
                jQuery(window).load(function($) {
                    jQuery(".medpro-doctor-list-'.esc_attr($doctor_random_id).'").owlCarousel({
                        margin: 30,
                        dots: '.$dots.',
                        nav: '.esc_attr($nav).',
                        loop: true,
                        center: '.esc_attr($carousel_center).',
                        navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                        autoplay: '.esc_attr($autoplay).',
                        responsive:{
                            0:{
                                items:1
                            },
                            600:{
                                items:2
                            },
                            1000:{
                                items:'.esc_attr($column).'
                            }
                        }
                    });
                });
            </script>
        ';
        $doctor_markup .= '<div class="medpro-doctor-list style-'.esc_attr($style).' owl-carousel medpro-doctor-list-'.esc_attr($doctor_random_id).'">';
    } else {
        $doctor_markup = '<div class="row medpro-doctor-list">';
    }


    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();

        if(get_post_meta( $idd ,'medpro_doctor_meta', true )){
            $doctor_meta = get_post_meta( $idd, 'medpro_doctor_meta', true );
        }else{
            $doctor_meta = array();
        }
        if(array_key_exists('doctor_desc', $doctor_meta)){
            $doctor_desc = $doctor_meta['doctor_desc'];
        }else{
            $doctor_desc = '';
        }
        if(array_key_exists('social_icons', $doctor_meta)){
            $doctor_social = $doctor_meta['social_icons'];
        }else{
            $doctor_social = '';
        }

        $post_content = get_the_excerpt();

        $doc_img = 'style="background-image: url('.get_the_post_thumbnail_url().')"';

        if($style == '3') {
            $doc_img_array = $doc_img ;
        } else {
            $doc_img_array = '';
        }

        if($view_type == 1) {
        	$doctor_markup .= '<div class="'.esc_attr($doctor_column_width).'">';
        }
        $doctor_markup .= '
            <div class="doctor-item style-'.esc_attr($style).'">';

                if($style != '3') {
                    $doctor_markup .= '<div class="doctor-img" '.$doc_img_array.'>';
                } else {
                    $doctor_markup .= '<a href="'.get_the_permalink().'" class="doctor-img" '.$doc_img_array.'>';
                }

                if($style != '3') {
                    $doctor_markup .= '<a href="'.get_the_permalink().'"><img src="'.get_the_post_thumbnail_url().'"></a>';
                }

                if($style != '3') {
                    $doctor_markup .= '</div>';
                } else {
                    $doctor_markup .= '</a>';
                }


        $doctor_markup .= ' 
                <div class="doctor-details">
                    <h5><a href="'.get_the_permalink().'">'.get_the_title().'</a></h5>';
                if($style !='4') {
                   $doctor_markup .= '<span>'.esc_html($doctor_desc).'</span>';
                }
                if($style == '2' OR $style == '4') {
                	$doctor_markup .= '<div class="content">'.wpautop($post_content).'</div>';
                }

                if($style == '1' OR $style == '2' OR $style == '4') {
                	$doctor_markup .= '
	                    <div class="doc-social-links">';

	                        foreach ($doctor_social as $social_desc) {
	                           $doctor_markup .= '<a href="'.esc_attr($social_desc['url']).'">
	                                <i class="'.esc_attr($social_desc['icon']).'"></i>
	                            </a>';
	                    }

            		$doctor_markup .= '</div>';
                }

            $doctor_markup .= '
                </div>

            </div>';
        if($view_type == 1) {
        	$doctor_markup .= '</div>';
    	}
    endwhile;
    $doctor_markup .= '</div>';



    wp_reset_query();
        
    return $doctor_markup;



}
add_shortcode('medpro_doctor', 'medpro_doctor_shortcode');



// posts shortcode
function medpro_posts_shortcode($atts){
    extract( shortcode_atts( array(
        'columns'       => '1',
        'count'         => '2',
        'category_id'   => '',
        'date'          => '1',
        'blog_style'    => '1',
        'author'    	=> '2',
    ), $atts) );

    if($category_id) {
        $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'post', 'cat' => $category_id) );
    } else {
        $q = new WP_Query( array('posts_per_page' => $count, 'post_type' => 'post') );
    }
    
    if($columns == 1) {
        $column_markup = 'col-lg-12';
    } elseif($columns == 2) {
        $column_markup = 'col-lg-6 col-sm-6';
    } elseif($columns == 3) {
        $column_markup = 'col-lg-4 col-sm-6';
    } elseif($columns == 4) {
        $column_markup = 'col-lg-3 col-sm-6';
    } elseif($columns == 6) {
        $column_markup = 'col-lg-2 col-sm-6';
    } 

    $list = '';


    
    $list .='
    <div class="row">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        if(has_post_thumbnail()){
            $posts_img_markup = 'style="background-image:url('.esc_url(get_the_post_thumbnail_url($idd, 'medium')).')"';
        } else {
            $posts_img_markup = '';
        }

        $post_excerpt = get_the_excerpt();

        $list .= '
            <div class="'.esc_attr($column_markup).'">
                <div class="medpro-single-post-block style-'.esc_attr($blog_style).'">';

                if($blog_style == '1') {
                    $list .= '<a class="sin-post-link" href="'.esc_url(get_permalink($idd)).'">'.get_the_post_thumbnail($idd, 'medium', array('class' => 'single-bl-post')).'</a>';
                } elseif($blog_style == '2') {
                    $list .= '<a href="'.esc_url(get_permalink($idd)).'" class="sin-post-link" '.$posts_img_markup.'></a>';
                }

                $list .= '
                    <div class="post-block-content">
                    <h3><a href="'.esc_url(get_permalink($idd)).'">'.esc_html(get_the_title($idd)).'</a></h3>';

                    if($author == '1'){
                    	$list .='<span class="post-block-author"><span class=block-title>By:</span> '.esc_html(get_the_author()).'</span>';
                    }
                    
                    if($date == 1 && $blog_style == 2 OR $date == 1 && $blog_style == 3) {
                        $list .='<span class="post-block-date"><span class=block-title>Date:</span> '.esc_html(get_the_date('d F Y', $idd)).'</span>';
                    } else {
                        $list .='<span class="post-block-date">'.esc_html(get_the_date('d F Y', $idd)).'</span>';
                    }


                if($blog_style == 1){
                    $list .= '<div class="post-block-excerpt">'.esc_html($post_excerpt).'</div>';
                }
                if($blog_style == 3){
                    $list .= '<div class="post-block-excerpt">'.esc_html($post_excerpt).'</div>
                    <a href="'.esc_url(get_permalink($idd)).'" class="medpro-post-btn">Read more <i class="fa fa-long-arrow-right"></i></a>';
                }
                    $list .= '
                    </div>    
                </div>    
            </div>    
        ';
    endwhile;

    
    $list.= '</div>';
    wp_reset_query();
        
    return $list;
}
add_shortcode('medpro_posts', 'medpro_posts_shortcode');







// Testimonial shortcode
function medpro_testimonial_shortcode($atts){
    extract( shortcode_atts( array(
        'view_type'  => '1',
        'count' => '3',
        'column' => '3',
        'category' => '',
        'autoplay' => 'true',
        'autoplay_time' => '5000',
        'nav' => 'true',
        'dots' => 'true',
        'style' => '1',
        'list_style'    =>  '1',
    ), $atts) );


    if($category) {
        $q = new WP_Query(array(
            'posts_per_page' => $count, 
            'post_type' => 'testimonial', 
            'tax_query' => array(
                array(
                    'taxonomy' => 'testimonial_cat',
                    'field'    => 'term_id',
                    'terms'    => $category,
                ),
            ),
        ));
    } else {
        $q = new WP_Query(array('posts_per_page' => $count, 'post_type' => 'testimonial'));
    }

    if($view_type == 1){
	    if($column == 1) {
            $testimonial_column_width = 'col-lg-12';
        } elseif($column == 2) {
	        $testimonial_column_width = 'col-lg-6 col-sm-6';
	    } elseif($column == 3) {
	        $testimonial_column_width = 'col-lg-4 col-sm-6';
	    } else {
            $testimonial_column_width = 'col-lg-3 col-sm-6';
        }
	}


    if($style == '2'){
        $carousel_center = 'true';
    } else {
        $carousel_center = 'false';
    }

	if($style == '3'){
		$carousel_data_dots = 'true';
	} else {
        $carousel_data_dots = 'false';
    }

    if($view_type == '2') {
    $testimonial_random_id = rand(32987, 54972);
        $testimonial_markup = '
            <script>
                jQuery(window).load(function($) {
                    jQuery(".medpro-testimonial-list-'.esc_attr($testimonial_random_id).'").owlCarousel({
                        dots: '.esc_attr($dots).',
                        margin: 30,
                        nav: '.esc_attr($nav).',
                        loop: true,
                        smartSpeed: 450,
                        center: '.esc_attr($carousel_center).',
                        dotsData: '.esc_attr($carousel_data_dots).',
                        navText: ["<i class=\'fa fa-arrow-left\'></i>", "<i class=\'fa fa-arrow-right\'></i>"],
                        autoplay: '.esc_attr($autoplay).',
                        responsive:{
                            0:{
                                items:1
                            },
                            600:{
                                items:1
                            },
                            1000:{
                                items:'.esc_attr($column).'
                            }
                        }
                    });
                });
            </script>
        ';
        $testimonial_markup .= '<div class="medpro-testimonial-list style-'.esc_attr($style).' owl-carousel medpro-testimonial-list-'.esc_attr($testimonial_random_id).'">';
    } else {
        $testimonial_markup = '<div class="row medpro-testimonial-list">';
    }


    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();

        if(get_post_meta( $idd ,'medpro_testimonial_meta', true )){
            $testimonial_meta = get_post_meta( $idd, 'medpro_testimonial_meta', true );
        }else{
            $testimonial_meta = array();
        }
        if(array_key_exists('member_desc', $testimonial_meta)){
            $member_desc = $testimonial_meta['member_desc'];
        }else{
            $member_desc = '';
        }


        $post_content = get_the_content();

        if($view_type == '1') {
        	$testimonial_markup .= '<div class="'.esc_attr($testimonial_column_width).'">';
        }

        $testimonial_markup .= '
        	<div class= "single-testimonial-item style-'.esc_attr($style).'" ';

            if($style == '3'){
                $testimonial_markup .= 'data-dot="<img src='.esc_url(get_the_post_thumbnail_url()).'>"';
            }


         $testimonial_markup .= '   >';

                if($style == '2') {
                    $testimonial_markup .= '
                        <div class="testimonial-content">'.wpautop($post_content).'
                        <i class="fa fa-quote-right"></i></div>
                        ';
                } elseif ($style == '1') {
                    $testimonial_markup .= '
                        <i class="fa fa-quote-right"></i>
                        <div class="testimonial-content">'.wpautop($post_content).'</div>';
                } elseif ($style == '3') {
                     $testimonial_markup .= '
                        <div class="testimonial-content">'.wpautop($post_content).'</div>';
                }
	        	
            $testimonial_markup .= '
	        	<div class="testimonial-details">';
                if($style == '2' OR $style == '4') {
                    $testimonial_markup .= '<img src="'.esc_url(get_the_post_thumbnail_url()).'">';
                }
                 $testimonial_markup .= '<h5>'.get_the_title().'</h5>';
                if($style == '2'OR $style == '4') {
                    $testimonial_markup .= '<span>'.esc_html($member_desc).'</span>';
                }

            $testimonial_markup .= '</div>';

            if($style == '4'){
            	$testimonial_markup .= '<div class="testimonial-content">'.wpautop($post_content).'</div>';
            }

	    $testimonial_markup .= '</div>';


        if($view_type == 1) {
            $testimonial_markup .= '</div>';
        }


    endwhile;
    $testimonial_markup .= '</div>';



    wp_reset_query();
        
    return $testimonial_markup;




}
add_shortcode('medpro_testimonial', 'medpro_testimonial_shortcode');




//Services Shortcode
function medpro_service_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
    	'service_view'		=>	'1',
    	'upload_type'		=>	'1',
    	'photo'				=>	'',
    	'icon'				=>	'',
    	'title'				=>	'',
    	'desc'				=>	'',
    	'link_type'			=>	'1',
    	'link_1'			=>	'',
    	'link_2'			=>	'',
    	'link_text'			=>	'',
    	'bg_img'			=>	'',
        
    ), $atts) );


	if($link_type == 1 && !empty($link_1)) {
        $link_markup = get_page_link($link_1);
    } elseif($link_type == 2) {
        $link_markup = $link_2;
    } else {
        $link_markup = '';
    }


    $photo_image_array = wp_get_attachment_image_src($photo, 'large');
    $bg_image_array = wp_get_attachment_image_src($bg_img, 'large');


    if($service_view == 4) {
        $medpro_service_markup = '<a href="'.esc_url($link_markup).'" class="single-service-box style-'.esc_attr($service_view).'">';
    } else {
         $medpro_service_markup = '<div class="single-service-box style-'.esc_attr($service_view).'">';
    }

   

    	if (!empty($bg_img)) {
    		$medpro_service_markup .= '<a href="'.esc_url($link_markup).'" class="service-img-box" style="background-image:url('.esc_url($bg_image_array[0]).')"></a>';
    	}

    	if($upload_type == 1 && !empty($photo)){
    		$medpro_service_markup .= '<span class="service-img"><img src="'.esc_url($photo_image_array[0]).'" alt="'.esc_html($title).'"></span>';
    	} elseif ($upload_type == 2 && !empty($icon)){
    		$medpro_service_markup .= '<span class="service-img"><i class="'.$icon.'"></i></span>';
    	}



    	$medpro_service_markup .= '
    		<div class="service-box-content">
    			<h3>'.esc_html($title).'</h3>
    			<p>'.$desc.'</p>';

        if($service_view != 4){
    		$medpro_service_markup .= '<a class="service-btn" href="'.$link_markup.'">'.$link_text.'</a>';
        }


    if($service_view == 4) {
        $medpro_service_markup .= '</div>
            </a>';
    } else {
        $medpro_service_markup .= '</div>
            </div>';
    }
    

    return $medpro_service_markup;

}
add_shortcode('medpro_service', 'medpro_service_shortcode');




// Price Table Shortcode
function medpro_price_table_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'theme'         =>  '1',
        'price_title'   =>  'Basic',
        'price_tag'     =>  '$25.86',
        'duration_type' =>  'Monthly',
        'link_text'     =>  'Book now',
        'link_type'     =>  '1',
        'link_to_page'  =>  '',
        'link_to_external'  => '',
        'feature_items'  => '',
        
    ), $atts) );

    if($link_type == 1 && !empty($link_to_page)) {
        $link_markup = get_page_link($link_to_page);
    } elseif($link_type == 2) {
        $link_markup = $link_to_external;
    } else {
        $link_markup = '';
    }

    $medpro_price_markup = '
        <div class="single-pricetable-wrap theme-'.esc_attr($theme).'">
            <h2>'.esc_html($price_title).'</h2>
            <div class="price-tag">
                <h4>'.esc_html($price_tag).'</h4>
                <span>'.esc_html($duration_type).'</span>
            </div>
            <ul class="feature-list">';

            $values = vc_param_group_parse_atts($feature_items);
            foreach( $values as $value ):   
            $medpro_price_markup .= '<li>'.esc_attr($value['sin_item']).'</li>';
            endforeach;

    $medpro_price_markup .= '
            </ul>';
            if($theme == 1) {
                $medpro_price_markup .= '<a class="medpro-price-btn" href="'.esc_url($link_markup).'">'.esc_html($link_text).'</a>';
            } else {
                $medpro_price_markup .= '<a class="medpro-price-btn" href="'.esc_url($link_markup).'">'.esc_html($link_text).' <i class="fa fa-plus"></i></a>';
            }

        $medpro_price_markup .= '    
        </div>
    ';
    

    return $medpro_price_markup;

}
add_shortcode('medpro_price_table', 'medpro_price_table_shortcode');




// Iconic Button Shortcode
function medpro_iconic_btn_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'btn_style'     =>  '1',
        'button_text'   =>  'Know more',
        'link_type'     =>  '1',
        'link_to_page'  =>  '',
        'link_to_external'  =>  '',
        'icon'          =>  '',
        'btn_color'         =>  '#44a6f0',
        'show_icon'         =>  '2',
    ), $atts) );

    if($link_type == 1 && !empty($link_to_page)) {
        $link_markup = get_page_link($link_to_page);
    } elseif($link_type == 2) {
        $link_markup = $link_to_external;
    } else {
        $link_markup = '';
    }

    if(!empty($icon) && $show_icon == 1){
        $buton_icon = '<i class="'.esc_attr($icon).'"></i>';
    } else {
        $buton_icon = '';
    }

    $medpro_iconic_btn_markup = '
       <a style="color:'.esc_attr($btn_color).'" class="medpro-iconic-btn style-'.esc_attr($btn_style).'" href="'.$link_markup.'">'.esc_html($button_text).' '.$buton_icon.'</a>
    ';
    

    return $medpro_iconic_btn_markup;

}
add_shortcode('medpro_iconic_btn', 'medpro_iconic_btn_shortcode');



// Video PopUp shortcode
function medpro_video_popup_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'theme'     =>  '1',
        'bg_img'    =>  '',
        'video_url' =>  '',
        'height'    =>  '',
        'text_link' =>  '2',
        'link_with_text' =>  '',
    ), $atts) );

    $video_img_bg = wp_get_attachment_image_src($bg_img, 'large');



    $medpro_video_popup_markup ='
        <div class="medpro-video-area theme-'.esc_attr($theme).'">';
        if($theme == 1){
            $medpro_video_popup_markup .='<div class="vidoe-bg" style="height:'.esc_attr($height).'px; background-image:url('.esc_url($video_img_bg[0]).')"></div>';
        }
        if($theme != 2) {
        	$medpro_video_popup_markup .='
            <a class="mfp-iframe video-play-btn" href="'.esc_url($video_url).'"><i class="fa fa-play-circle-o "></i> '.esc_html($link_with_text).'</a>
        </div>';
        } else {
        	$medpro_video_popup_markup .='
            <a class="mfp-iframe video-play-btn" href="'.esc_url($video_url).'">'.esc_html($link_with_text).' <i class="fa fa-play-circle-o "></i></a>
        </div>';
        }
    
    

    return $medpro_video_popup_markup;

}
add_shortcode('medpro_video_popup', 'medpro_video_popup_shortcode');




// Single service shortcode
function medpro_single_service_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'icon_type'			=>  '1',
        'img_icon'			=>  '',
        'fa_icon'			=>  '',
        'service_title'     =>  '',
        'link_type'     	=>  '1',
        'link_to_page'     	=>  '',
        'link_to_external'  =>  '',
    ), $atts) );


    if($link_type == 1 && !empty($link_to_page)) {
        $link_markup = get_page_link($link_to_page);
    } elseif($link_type == 2) {
        $link_markup = $link_to_external;
    } else {
        $link_markup = '';
    }

    $uploaded_img = wp_get_attachment_image_src($img_icon, 'large');

    if($icon_type == 1 && !empty($img_icon)){
    	$icon_array = '<img src="'.esc_url($uploaded_img[0]).'">';
    } elseif ($icon_type == 2 && !empty($fa_icon)){
    	$icon_array = '<i class="'.esc_attr($fa_icon).'"></i>';
    } else {
    	$icon_array = '';
    }

    $medpro_single_service_markup = '
    	<a class="medpro-single-service" href="'.$link_markup.'">
    		'.$icon_array.'
    		<h5>'.esc_attr($service_title).'</h5>
    	</a>
    ';



    return $medpro_single_service_markup;

}
add_shortcode('medpro_single_service', 'medpro_single_service_shortcode');



// Working time shortcode
function medpro_working_time_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'theme'			=>  '1',
        'title'			=>  'Working time',
        'working_bg'	=>  '',
        'text_color'	=>  '#ffffff',
        'works_time'	=>  '',
        'opacity'		=>	'.95',
        'overlay'		=>	'#44a6f0',
        'height'		=>	'400',
        'contact'		=>	'',
    ), $atts) );

    $works_bg = wp_get_attachment_image_src($working_bg, 'large');

    $medpro_works_markup = '
    	<div class="medpro-working-warp theme-'.esc_attr($theme).'" style="background-image: url('.esc_url($works_bg[0]).'); color:'.esc_attr($text_color).'; height:'.esc_attr($height).'px">';

    	if(!empty($overlay) && !empty($opacity)){
    		$medpro_works_markup .= '<div class="working-overlay" style="background-color:'.esc_attr($overlay).'; opacity:'.esc_attr($opacity).'"></div>';
    	}

    $medpro_works_markup .= '
    		<h5 style="color:'.esc_attr($text_color).'">'.esc_html($title).'</h5>
    		<ul class="working-list">';

    			$values = vc_param_group_parse_atts($works_time);

    			if(!empty($values)) {
    				foreach( $values as $value ):   
		            $medpro_works_markup .= '<li>'.esc_attr($value['wor_time']).'</li>';
		            endforeach;
    			}

    $medpro_works_markup .= '
    		</ul>';

    	if($theme == 2 && !empty($contact)) {
    		$details = vc_param_group_parse_atts($contact);
            foreach( $details as $detail ):
            $medpro_works_markup .= '<span><i class="'.esc_attr($detail['con_icon']).'"></i>'.esc_attr($detail['con_text']).'</span>';
            endforeach;
        }

    $medpro_works_markup .= '</div>
    ';



    return $medpro_works_markup;

}
add_shortcode('medpro_working_time', 'medpro_working_time_shortcode');


// Working time shortcode
function medpro_iconic_box_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'icon_type'     =>  '1',
        'upload_icon'   =>  '',
        'fa_icon'       =>  '',
        'title'         =>  '',
        'desc'          =>  '',
    ), $atts) );

    $iconic_box_img = wp_get_attachment_image_src($upload_icon, 'large');

    $medpro_iconic_box = '
        <div class="medpro-iconic-box">';

        if($icon_type == '1') {
            $medpro_iconic_box .= '<img src="'.esc_url($iconic_box_img[0]).'">';
        } else {
            $medpro_iconic_box .= '<i class="'.esc_attr($fa_icon).'"></i>';
        }
        

    $medpro_iconic_box .= '
            <div class="medpro-box-content">
                <h5>'.esc_html($title).'</h5>
                '.wpautop($desc).'
            </div>
        </div>
    ';



    return $medpro_iconic_box;

}
add_shortcode('medpro_iconic_box', 'medpro_iconic_box_shortcode');





// Department shortcode
function medpro_department_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'icon_type'         =>  '1',
        'dep_icon'          =>  '',
        'fa_icon'           =>  '',
        'dep_title'     =>  '',
        'link_type'         =>  '1',
        'link_to_page'      =>  '',
        'link_to_external'  =>  '',
    ), $atts) );


    if($link_type == 1 && !empty($link_to_page)) {
        $link_markup = get_page_link($link_to_page);
    } elseif($link_type == 2) {
        $link_markup = $link_to_external;
    } else {
        $link_markup = '';
    }

    $uploaded_img = wp_get_attachment_image_src($dep_icon, 'large');

    if($icon_type == 1 && !empty($dep_icon)){
        $icon_array = '<img src="'.esc_url($uploaded_img[0]).'">';
    } elseif ($icon_type == 2 && !empty($fa_icon)){
        $icon_array = '<i class="'.esc_attr($fa_icon).'"></i>';
    } else {
        $icon_array = '';
    }

    $medpro_department_markup = '
        <a class="medpro-department" href="'.$link_markup.'">
            <h5>'.esc_html($dep_title).'</h5>
            '.$icon_array.'
        </a>
    ';



    return $medpro_department_markup;

}
add_shortcode('medpro_department', 'medpro_department_shortcode');







//Single carousel shortcode
function medpro_single_carousel_shortcode($atts, $content = null){

    extract( shortcode_atts(array(
        'images' => '',
        'desktop_count' => '1',
        'loop' => 'true',
        'autoplay' => 'true',
        'autoplaytimeout' => '5000',
        'nav' => 'true',
        'dots' => 'true',
        'height' => '450',
    ), $atts));


    $images_ids = explode(',', $images);

    $medifiar_single_carousel_markup = '
        <script>
            jQuery(window).load(function($){
                jQuery(".medpro_sinlge-carousel").owlCarousel({
                    loop: '.esc_attr($loop).',
                    autoplay: '.esc_attr($autoplay).',
                    autoplayTimeout: '.esc_attr($autoplaytimeout).',
                    nav:'.esc_attr($nav).',
                    margin: 30,
                    dots: '.esc_attr($dots).',
                    navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                    responsive: {
                        0 : {
                            items: 1
                        },
                        480: {
                            items: 1
                        },
                        992: {
                            items: 1
                        }
                    }
                });
            });
        </script>';

    $medifiar_single_carousel_markup .= '
        <div class="owl-carousel medpro_sinlge-carousel" style="height:'.esc_attr($height).'px">';
            foreach($images_ids as $image){
                $img_array = wp_get_attachment_image_src($image, 'large');
                $medifiar_single_carousel_markup .= '
                    <div class="medpro-single-bg" style="background-image: url('.esc_url($img_array[0]).'); height:'.esc_attr($height).'px"></div>

                ';
        }




    $medifiar_single_carousel_markup .= '</div>';


    return $medifiar_single_carousel_markup;


}
add_shortcode('medpro_single_carousel', 'medpro_single_carousel_shortcode');










function medpro_styled_map_shortcode( $atts , $content = null  ){
    extract( shortcode_atts( array(
        'latitude'      => '40.9811099',
        'longitude'     => '-74.9637603',
        'height'        => '500'
    ) , $atts ) );

    $dynamic_map_id = rand(11123,25478);


    $medpro_theme_color = '#c5d9d3';
    

    $medpro_styled_map_markup = '<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZUNlkwwsiJhdMideQmWYLy5381fR_I7g&region=US"></script>';
    $medpro_styled_map_markup .='<div style="height:'.esc_attr($height).'px;" class="medpro-map-'.esc_attr($dynamic_map_id).'"></div>';
    $medpro_styled_map_markup .= 
    '<script>
        jQuery(document).ready(function($){
            $(".medpro-map-'.esc_attr($dynamic_map_id).'")
                  .gmap3({
                    center:['.esc_attr($latitude).', '.esc_attr($longitude).'],
                    zoom:11,
                    mapTypeId: "shadeOfGrey", // to select it directly
                    mapTypeControlOptions: {
                      mapTypeIds: [google.maps.MapTypeId.ROADMAP, "shadeOfGrey"]
                    },
                    disableDefaultUI: true,
                    scrollwheel:false
                  })
                  .marker({
                    position: ['.esc_attr($latitude).', '.esc_attr($longitude).'],
                    icon: "'.plugin_dir_url( __FILE__ ).'./assets/img/map_marker.png"
                  })    
                  .styledmaptype(
                    "shadeOfGrey",
                    [
                      {"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},
               
                      {"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                      {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#222222"},{"lightness":20}]},
                      {"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#222222"},{"lightness":17},{"weight":1.2}]},
                      {"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":20}]},
                      {"featureType":"poi","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":21}]},
                      {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ebebeb"},{"lightness":17}]},
                      {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ebebeb"},{"lightness":29},{"weight":0.2}]},
                      {"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ececec"},{"lightness":18}]},
                      {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ececec"},{"lightness":16}]},
                      {"featureType":"transit","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":19}]},
                      {"featureType":"water","elementType":"geometry","stylers":[{"color":"'.esc_attr($medpro_theme_color).'"},{"lightness":17}]}
                    ],
                    {name: "Shades of Grey"}
                  );
        });
    </script>';
    return $medpro_styled_map_markup;
}
add_shortcode('medpro_styled_map','medpro_styled_map_shortcode');



//Single carousel shortcode
function medpro_tile_gallery_shortcode($atts, $content = null){

    extract( shortcode_atts(array(
        'images' => '',
        'height' => '180',
    ), $atts));


    $images_ids = explode(',', $images);

    $total_img = count(explode(',', $images));

    $photo = 0;

    $medpro_tile_gallery_markup = '
        <div class="medpro-tile-gallery medpro-title-image-'.$total_img.'">';
            foreach($images_ids as $image){
                $img_array = wp_get_attachment_image_src($image, 'large');
                
                $photo++;
        $medpro_tile_gallery_markup .= '
            <div class="medpro-tile-image title-image-'.esc_attr($photo).'" style="background-image: url('.esc_url($img_array[0]).'); height:'.esc_attr($height).'px"></div>';
        }

    $medpro_tile_gallery_markup .= '</div>';


    return $medpro_tile_gallery_markup;


}
add_shortcode('medpro_tile_gallery', 'medpro_tile_gallery_shortcode');









// Project Gallery

function medpro_project_gallery_shortcode($atts, $content = null){

    extract( shortcode_atts(array(
        'theme'         => '1',
        'count'         => '9',
        'columns'       => '3',
        'filter'        => '1',
        'filter_style'  => 'center',
    ), $atts));

    $project_categories = get_terms('project_cat');

    $dynamic_num = rand(3262656, 1232651254);


    $medpro_project_gallery_markup= '
        
        <script>
            jQuery(document).ready(function($){
                $(".medpro-active-project li").click(function(){
                    
                    $(".medpro-active-project li").removeClass("active");
                    $(this).addClass("active");

                    var selector = $(this).attr("data-filter");
                    $(".project-lists-'.esc_attr($dynamic_num).'").isotope({
                        filter: selector,
                    });
                });
            });

            jQuery(window).load(function(){
                jQuery(".project-lists-'.esc_attr($dynamic_num).'").isotope();
            });

        </script>';


        if($filter == '2') {
            $medpro_project_gallery_markup.= '<div class= "row"> <div class="col">';


            $medpro_project_gallery_markup.= '
                <ul class="medpro-active-project theme-'.esc_attr($theme).'" style="text-align:'.esc_attr($filter_style).'">
                    <li class="active" data-filter="*">All</li>';

            if(!empty($project_categories) && ! is_wp_error($project_categories)) {
                    foreach($project_categories as $category) {
                        $medpro_project_gallery_markup.= '<li data-filter=".'.$category->slug.'">'.$category->name.'</li>';
                    }
            }

            $medpro_project_gallery_markup.= '</ul></div></div>';
        }




    

        $medpro_project_gallery_markup.= '<div class="row project-lists-'.esc_attr($dynamic_num).' project-gallery theme-'.esc_attr($theme).'">';




    $projects_array = new WP_Query(array('posts_per_page' => -1, 'post_type' => 'project'));
        while($projects_array->have_posts()) : $projects_array->the_post();
            $project_categorys = get_the_terms(get_the_ID(), 'project_cat');

            if($project_categorys && !is_wp_error($project_categorys)){
                $project_cat_list = array();

                foreach($project_categorys as $categorye) {
                    $project_cat_list[] = $categorye->slug;
                }

                $project_assigned_cat = join(" ", $project_cat_list);
            } else {
                $project_assigned_cat = '';
            }

            if($project_categorys && !is_wp_error($project_categorys)){
                $project_cat_list = array();

                foreach($project_categorys as $categorye) {
                    $project_cat_list[] = $categorye->name;
                }

                $project_assigned_cat_name = join(", ", $project_cat_list);
            } else {
                $project_assigned_cat_name = '';
            }

    $medpro_project_gallery_markup.= '

            <div class="col-lg-4 col-sm-6 gallery-box '.$project_assigned_cat.'">
                <div class="project-list" style="background-image:url('.esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')).')">
                    <a class="single-project-item" href="'.esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')).'">
                        <i class="fa fa-plus"></i>
                    </a>';

                if($theme == '1'){
                    $medpro_project_gallery_markup.= '
                    <div class="p-g-hover">
                        <h5>'.get_the_title().'</h5>
                        <p>'.$project_assigned_cat_name.'</p>
                    </div>';
                }



    $medpro_project_gallery_markup.= '
                </div>';
                if($theme == '2'){
                    $medpro_project_gallery_markup.= '
                        <div class="p-g-hover">
                            <h5>'.get_the_title().'</h5>
                            <p>'.$project_assigned_cat_name.'</p>
                        </div>
                    ';
                }

    $medpro_project_gallery_markup.= '
            </div>';
        endwhile;
        wp_reset_query();

        if($theme == '1'){
            $medpro_project_gallery_markup.= '<div>';
        } else {
            $medpro_project_gallery_markup.= '</div><div></div>';
        }

    return $medpro_project_gallery_markup;


}
add_shortcode('medpro_project_gallery', 'medpro_project_gallery_shortcode');



function medpro_toolkit_footer_socials($atts, $content = null){
    
    $medpro_social_markup = '';
    
    $social_array = cs_get_option('footer_social');
    
    
    $medpro_social_markup .= '<div class="footer-social">';
    
        if(!empty($social_array)){
            foreach($social_array as $social){
                $icon = $social['footer_icon'];
                $title = $social['footer_social_title'];
                $url = $social['footer_url'];
                $medpro_social_markup .= '<a href="'.esc_url($url).'" class="'.esc_attr($icon).'">'.esc_html($title).'</a>';
            }
        }
    
    $medpro_social_markup .= '</div>';
    
    return $medpro_social_markup;
}
add_shortcode('socials', 'medpro_toolkit_footer_socials');