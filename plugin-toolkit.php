<?php
/*
Plugin Name: medpro Toolkit
Plugin URI: http://www.crazycafe.net/wp/medpro
Author: CrazyCafe
Author URI:http://www.crazycafe.net/
Version: 1.0
Description: This plugin required for medpro WP theme
textdomain: medpro-toolkit
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Translate direction
load_plugin_textdomain( 'medpro-toolkit', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

// Defines
define( 'medpro_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__ ) ) . '/' );
define( 'medpro_ACC_PATH', plugin_dir_path( __FILE__ ) );

// Light toolkit files
function medpro_toolkit_files(){
    
    wp_enqueue_style('magnific-popup', plugin_dir_url( __FILE__ ) .'assets/css/magnific-popup.css');
    wp_enqueue_style('medpro-toolkit-main', plugin_dir_url( __FILE__ ) .'assets/css/plugin-toolkit.css');
    
    wp_enqueue_script( 'magnific-popup', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.magnific-popup.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'isotope', plugin_dir_url( __FILE__ ) . 'assets/js/isotope.pkgd.min.js', array('jquery'), '3.0.2', true );
    wp_enqueue_script( 'waypoint', plugin_dir_url( __FILE__ ) . 'assets/js/waypoint.js', array('jquery'), '3.0.2', true );
    wp_enqueue_script( 'counterup', plugin_dir_url( __FILE__ ) . 'assets/js/counterup.js', array('jquery'), '3.0.2', true );
    wp_enqueue_script( 'gmap3', plugin_dir_url( __FILE__ ) . 'assets/js/gmap3.min.js', array('jquery'), '3.0.2', true );
    wp_enqueue_script( 'medpro-toolkit-main', plugin_dir_url( __FILE__ ) . 'assets/js/plugin-toolkit.js', array('jquery'), '20120206', true );
    
}
add_action('wp_enqueue_scripts', 'medpro_toolkit_files'); 


// Dynamic service category list on VC addons
function medpro_toolkit_testimonial_cat_list( ) {


    $testimonial_categories = get_terms( 'testimonial_cat' );

    $testimonial_category_options = array(esc_html__('All category', 'medpro-toolkit')=>'');
    if ( $testimonial_categories ) {
        foreach ( $testimonial_categories as $testimonial_category ) {
            $testimonial_category_options[ $testimonial_category->name ] = $testimonial_category->term_id;
        }
    }

    return $testimonial_category_options;
}

function medpro_toolkit_slide_cat_list( ) {


    $slide_categories = get_terms( 'slide_cat' );

    $slide_category_options = array(esc_html__('All category', 'medpro-toolkit')=>'');
    if ( $slide_categories ) {
        foreach ( $slide_categories as $slide_category ) {
            $slide_category_options[ $slide_category->name ] = $slide_category->term_id;
        }
    }

    return $slide_category_options;
}

function medpro_toolkit_project_cat_list( ) {


    $project_categories = get_terms( 'project_cat' );

    $project_category_options = array(esc_html__('All category', 'medpro-toolkit')=>'');
    if ( $project_categories ) {
        foreach ( $project_categories as $project_category ) {
            $project_category_options[ $project_category->name ] = $project_category->term_id;
        }
    }

    return $project_category_options;
}

function medpro_toolkit_doctor_cat_list( ) {


    $doctor_categories = get_terms( 'doctor_cat' );

    $doctor_category_options = array(esc_html__('All category', 'medpro-toolkit')=>'');
    if ( $doctor_categories ) {
        foreach ( $doctor_categories as $doctor_category ) {
            $doctor_category_options[ $doctor_category->name ] = $doctor_category->term_id;
        }
    }

    return $doctor_category_options;
}

// Dynamic post category list on VC addons


function medpro_toolkit_get_post_taxonomies_as_list( ) {


    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
    ) );

    $category_options = array(esc_html__('All Categories', 'pro-toolkit')=>'');
    if ( $categories ) {
        foreach ( $categories as $category ) {
            $category_options[ $category->name ] = $category->ID;
        }
    }

    return $category_options;
}

function medpro_toolkit_get_slides_as_list( ) {

    $args = wp_parse_args( array(
        'post_type'   => 'slide',
        'numberposts' => -1,
    ) );

    $posts = get_posts( $args );

    $post_options = array(esc_html__('-- Select slide --', 'medpro-toolkit')=>'');
    if ( $posts ) {
        foreach ( $posts as $post ) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }

    return $post_options;
}

function medpro_toolkit_get_post_as_list( ) {

    $args = wp_parse_args( array(
        'post_type'   => 'post',
        'numberposts' => -1,
    ) );

    $posts = get_posts( $args );

    $post_options = array(esc_html__('-- Select post --', 'medpro-toolkit')=>'');
    if ( $posts ) {
        foreach ( $posts as $post ) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }

    return $post_options;
}


function medpro_toolkit_get_page_as_list( ) {

    $args = wp_parse_args( array(
        'post_type'   => 'page',
        'numberposts' => -1,
    ) );

    $posts = get_posts( $args );

    $post_options = array(esc_html__('-- Select page --', 'medpro-toolkit')=>'');
    if ( $posts ) {
        foreach ( $posts as $post ) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }

    return $post_options;
}

// Register medpro Theme All Custom posts
add_action( 'init', 'medpro_toolkit_custom_post' );
function medpro_toolkit_custom_post() {
	register_post_type( 'slide',
		array(
			'labels' => array(
				'name' => __( 'Slides' ),
				'singular_name' => __( 'Slide' ),
				'add_new_item' => __( 'Add New Slide' )
			),
			'public' => false,
			'show_ui' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		)
	);
    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' ),
                'add_new_item' => __( 'Add New Project' )
            ),
            'public' => false,
            'show_ui' => true,
            'supports' => array('title', 'thumbnail', 'page-attributes'),
        )
    );
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' ),
                'add_new_item' => __( 'Add New Testimonial' )
            ),
            'public' => false,
            'show_ui' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        )
    );
	register_post_type( 'doctor',
		array(
			'labels' => array(
				'name' => __( 'Doctor' ),
				'singular_name' => __( 'doctor' ),
				'add_new_item' => __( 'Add New doctor Member' )
			),
			'public' => true,
			'show_ui' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		)
	);
    
    register_taxonomy(
        'doctor_cat',  
        'doctor', 
        array(
            'hierarchical'          => true,
            'label'                 => 'doctor Category', 
            'query_var'             => true,
            'show_admin_column'     => true,
            'rewrite'               => array(
                'slug'              => 'doctor-category', 
                'with_front'        => true 
            )
        )
    ); 
    register_taxonomy(
        'testimonial_cat',  
        'testimonial', 
        array(
            'hierarchical'          => true,
            'label'                 => 'Testimonial Category', 
            'query_var'             => true,
            'show_admin_column'     => true,
            'rewrite'               => array(
                'slug'              => 'testimonial-category', 
                'with_front'        => true 
            )
        )
    ); 

    register_taxonomy(
        'project_cat',  
        'project', 
        array(
            'hierarchical'          => true,
            'label'                 => 'Project Category', 
            'query_var'             => true,
            'show_admin_column'     => true,
            'has_archive'     => true,
            'rewrite'               => array(
                'slug'              => 'project-category', 
                'with_front'        => true 
            )
        )
    ); 

	register_taxonomy(
		'slide_cat',  
		'slide', 
		array(
			'hierarchical'          => true,
			'label'                 => 'Slide Category', 
			'query_var'             => true,
            'show_admin_column'     => true,
			'has_archive'     => true,
			'rewrite'               => array(
				'slug'              => 'slide-category', 
				'with_front'        => true 
			)
		)
	);    
}


// Shortcode on widgets
add_filter('widget_text', 'do_shortcode');

// Loading Visual Composer blocks
require_once( medpro_ACC_PATH . 'vc-blocks-load.php' );

// Theme shortcodes

require_once( medpro_ACC_PATH . 'theme-shortcode.php' );