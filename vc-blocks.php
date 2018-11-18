<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

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




//Promo Box VC Map

vc_map(
    array(
        "name" => esc_html__( "MedPro promo Box", "medpro-toolkit" ),
        "base" => "medpro_promo_box",
        "icon"  => medpro_ACC_URL.'/assets/img/promo-box.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => __( "Promo box style", "medpro-toolkit" ),
                "param_name" => "style",
                "std" => __( "1", "medpro-toolkit" ),
                "value" => array(
                    esc_html__('Style 1', 'medpro-toolkit') => '1',
                    esc_html__('Style 2', 'medpro-toolkit') => '2',
                    esc_html__('Style 3', 'medpro-toolkit') => '3',
                ),
                "description" => esc_html__( "Select promo box style.", "medpro-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title", "medpro-toolkit" ),
                "param_name" => "title",
                "description" => esc_html__( "Type your promo title", "medpro-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => __( "Icon type", "medpro-toolkit" ),
                "param_name" => "icon_type",
                "std" => __( "1", "medpro-toolkit" ),
                "value" => array(
                    esc_html__('Upload icon', 'medpro-toolkit') => '1',
                    esc_html__('Select icon', 'medpro-toolkit') => '2',
                ),
                "description" => esc_html__( "If you want to select page or external any link for cta button. Select your choice", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "style",
                    "value" => array("1", "3"),
                )
            ),
            array(
                "type" => "iconpicker",
                "heading" => esc_html__( "Icon", "medpro-toolkit" ),
                "param_name" => "icon",
                "description" => esc_html__( "Select your promo box icon here", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "icon_type",
                    "value" => array("2"),
                )
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Image", "medpro-toolkit" ),
                "param_name" => "img",
                "description" => esc_html__( "Upload your promo box image here", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "icon_type",
                    "value" => array("1"),
                )
            ),
            array(
                "type" => "textarea",
                "heading" => esc_html__( "Description", "medpro-toolkit" ),
                "param_name" => "desc",
                "description" => esc_html__( "Type your promo description here", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "style",
                    "value" => array("1", "2"),
                )
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Background image", "medpro-toolkit" ),
                "param_name" => "bg_img",
                "description" => esc_html__( "Upload your promo box background image", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "style",
                    "value" => array("3"),
                )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Message text", "medpro-toolkit" ),
                "param_name" => "promo_text",
                "description" => esc_html__( "Type text here..", "medpro-toolkit" ),
                "dependency"  => array(
                    "element"   =>  "style",
                    "value"     =>  array("3"),
                )
            ),
            array(
                "type"      =>  "dropdown",
                "heading"   =>  esc_html__( "Select link or text field", "medpro-toolkit"),
                "param_name"    =>  "button_type",
                "std"           =>  "1",
                "value"         =>  array(
                    esc_html__('Text only', 'medpro-toolkit')     =>  '1',
                    esc_html__('Button', 'medpro-toolkit')        =>  '2',
                ),
                "description"   =>  esc_html__("You can select plain text or button form here. Select your choice.", "medpro-toolkit"),
                "dependency" => array(
                    "element" => "style",
                    "value" => array("1"),
                )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Plain text", "medpro-toolkit" ),
                "param_name" => "textonly",
                "description" => esc_html__( "Type text here..", "medpro-toolkit" ),
                "dependency"  => array(
                    "element"   =>  "button_type",
                    "value"     =>  array("1"),
                )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link text", "medpro-toolkit" ),
                "param_name" => "link_text",
                "std" => esc_html__( "Know More", "medpro-toolkit" ),
                "description" => esc_html__( "Type promo link text here..", "medpro-toolkit" ),
                "dependency"  => array(
                    "element"   =>  "button_type",
                    "value"     =>  array("2"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Link to", "medpro-toolkit" ),
                "param_name" => "link_to",
                "std" => "1",
                "value" => array(
                    esc_html__('Page', 'medpro-toolkit') => '1',
                    esc_html__('External link', 'medpro-toolkit') => '2',
                ),
                "description" => esc_html__( "If you want to select page or external any link for promo box. Select your choice", "medpro-toolkit" ),
                "dependency"  => array(
                    "element"   =>  "button_type",
                    "value"     =>  array("2"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select page", "medpro-toolkit" ),
                "param_name" => "link_to_page",
                "value" => medpro_toolkit_get_page_as_list(),
                "description" => esc_html__( "You are able to select a page for linking into the promo box", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "link_to",
                    "value" => array("1"),
                )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link", "medpro-toolkit" ),
                "param_name" => "link_external",
                "description" => esc_html__( "Enter promo box external link here..", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "link_to",
                    "value" => array("2"),
                )
            ),
        )
    )
);

// Counter Box

vc_map(
    array(
        "name" => esc_html__( "MedPro counter box", "medpro-toolkit" ),
        "base" => "medpro_counter_box",
        "icon"  => medpro_ACC_URL.'/assets/img/counter-Box.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Counter box style", "medpro-toolkit" ),
                "param_name" => "style",
                "std" => "1",
                "value" => array(
                    esc_html__('Style 1', 'medpro-toolkit') => '1',
                    esc_html__('Style 2', 'medpro-toolkit') => '2',
                    esc_html__('Style 3', 'medpro-toolkit') => '3',
                ),
                "description" => esc_html__( "Select counter box style.", "medpro-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Icon type", "medpro-toolkit" ),
                "param_name" => "icon_type",
                "std" => "1",
                "value" => array(
                    esc_html__('Upload icon', 'medpro-toolkit') => '1',
                    esc_html__('Select icon', 'medpro-toolkit') => '2',
                ),
                "description" => esc_html__( "Choose your icon type.", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "style",
                    "value" => array("3"),
                )
            ),
            array(
                "type" => "iconpicker",
                "heading" => esc_html__( "Icon", "medpro-toolkit" ),
                "param_name" => "icon",
                "description" => esc_html__( "Select your icon here", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "icon_type",
                    "value" => array("2"),
                )
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Image", "medpro-toolkit" ),
                "param_name" => "img",
                "description" => esc_html__( "Upload your icon here", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "icon_type",
                    "value" => array("1"),
                )
            ),
            array(
                "type" => "colorpicker",
                "heading" => esc_html__( "Icon color", "medpro-toolkit" ),
                "param_name" => "icon_color",
                "description" => esc_html__( "Choose icon color.", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "icon_type",
                    "value" => array("2"),
                )
            ),
            array(
                "type"          => "textfield",
                "heading"       => esc_html__( "Counter number", "medpro-toolkit" ),
                "param_name"    => "number",
                "description"   => esc_html__( "Type your counter number", "medpro-toolkit" )
            ),
            array(
                "type"          => "textfield",
                "heading"       => esc_html__( "Counter number after text", "medpro-toolkit" ),
                "param_name"    => "after_text",
                "description"   => esc_html__( "Type counter number after text", "medpro-toolkit" )
            ),
            array(
                "type"          => "textfield",
                "heading"       => esc_html__( "Counter box description", "medpro-toolkit" ),
                "param_name"    => "desc",
                "description"   => esc_html__( "Type counter box description", "medpro-toolkit" )
            ),
        )
    )
);


//medpro Section TItle
vc_map( 
    array(
        "name" => esc_html__( "MedPro Section Title", "medpro-toolkit" ),
        "base" => "medpro_section_title",
        "icon"  => medpro_ACC_URL.'/assets/img/section-title.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type"          => "dropdown",
                "heading"       =>  esc_html__("Section Style", "medpro-toolkit"),
                "param_name"    =>  "theme",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Style 1", "medpro-toolkit")   =>  "1",
                    esc_html__("Style 2", "medpro-toolkit")   =>  "2",
                    esc_html__("Style 3", "medpro-toolkit")   =>  "3",
                    esc_html__("Style 4", "medpro-toolkit")   =>  "4"
                ),
                "description"   =>  esc_html__("Select section title style", "medpro-toolkit"),
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Section title", "medpro-toolkit"),
                "param_name"    =>  "title",
                "description"   =>  esc_html__("Write your section title", "medpro-toolkit")
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Description", "medpro-toolkit"),
                "param_name"    =>  "desc_option",
                "std"           =>  esc_html__("2", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Yes", "medpro-toolkit")   =>  "1",
                    esc_html__("No", "medpro-toolkit")    =>  "2"
                ),
                "description"   =>  esc_html__("Enable description with setcion title? Select yes.", "medpro-toolkit")  
            ),
            array(
                "type"          =>  "textarea",
                "heading"       =>  esc_html__("Section description", "medpro-toolkit"),
                "param_name"    =>  "desc",
                "description"   =>  esc_html__("Write your section title", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "desc_option",
                    "value"     =>  "1"
                )
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Text align.", "medpro-toolkit"),
                "param_name"    =>  "text_align",
                "description"   =>  esc_html__("Select text aling for your section title", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Left", "medpro-toolkit")        =>  "left",
                    esc_html__("Center", "medpro-toolkit")      =>  "center",
                    esc_html__("Right", "medpro-toolkit")       =>  "right"
                ),
                "std"           =>  "center",
            )
        )
    ) 
);



// MedPro Doctors
vc_map( 
    array(
        "name" => esc_html__( "MedPro Doctor", "medpro-toolkit" ),
        "base" => "medpro_doctor",
        "icon"  => medpro_ACC_URL.'/assets/img/doctor.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "View Type", "medpro-toolkit" ),
                "param_name" => "view_type",
                "std" => "1",
                "value" => array(
                    esc_html__("List", "medpro-toolkit") => '1',
                    esc_html__("Carousel", "medpro-toolkit") => '2'
                ),
                "description" => esc_html__( "Select list or carousel style.", "medpro-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Style type", "medpro-toolkit" ),
                "param_name" => "style",
                "std" => "1",
                "value" => array(
                    esc_html__("Style 1", "medpro-toolkit") => '1',
                    esc_html__("Style 2", "medpro-toolkit") => '2',
                    esc_html__("Style 3", "medpro-toolkit") => '3',
                    esc_html__("Style 4 (list only)", "medpro-toolkit")  => '4',
                ),
                "description" => esc_html__( "Select your style.", "medpro-toolkit" ),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Count", "medpro-toolkit" ),
                "param_name" => "count",
                "std" => "3",
                "description"   =>  esc_html__("Type doctor count in this box.", "medpro-toolkit")
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Category", "medpro-toolkit" ),
                "param_name" => "category",
                "value" => medpro_toolkit_doctor_cat_list(),
                "description"   =>  esc_html__("Choose doctor category.", "medpro-toolkit")
             ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Column", "medpro-toolkit" ),
                "param_name" => "column",
                "std" => "4",
                "value" => array(
                    esc_html__("1 Columns", "medpro-toolkit")  => '1',
                    esc_html__("2 Columns", "medpro-toolkit")  => '2',
                    esc_html__("3 Columns", "medpro-toolkit")  => '3',
                    esc_html__("4 Columns", "medpro-toolkit")  => '4'
                )
            ),
             array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show arrows?", "medpro-toolkit" ),
                "param_name" => "nav",
                "std" => "true",
                "value" => array(
                    esc_html__("Yes", "medpro-toolkit") => "true",
                    esc_html__("No", "medpro-toolkit") => "false",
                ),
                "description" => esc_html__( "If you want visible slide arrows then select Yes", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "view_type",
                    "value" => array("2"),
                )
            ),
             array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay?", "medpro-toolkit" ),
                "param_name" => "autoplay",
                "std" => esc_html__( "true", "medpro-toolkit" ),
                "value" => array(
                    esc_html__("Yes", "medpro-toolkit") => "true",
                    esc_html__("No", "medpro-toolkit") => "false",
                ),
                "description" => esc_html__( "If you want to autoplay, select Yes", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "view_type",
                    "value" => array("2"),
                )
            ),
             array(
                "type" => "dropdown",
                "heading" => esc_html__( "Enable dots?", "medpro-toolkit" ),
                "param_name" => "dots",
                "std" => "false",
                "value" => array(
                    esc_html__("Yes", "medpro-toolkit") => "true",
                    esc_html__("No", "medpro-toolkit") => "false",
                ),
                "description" => esc_html__( "If you want visible dots then select Yes", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "view_type",
                    "value" => array("2"),
                )
            ),

        )
    ) 
);




//Posts block
vc_map(
    array(
        "name" => esc_html__( "MedPro Blog Post", "medpro-toolkit" ),
        "base" => "medpro_posts",
        "icon"  => medpro_ACC_URL.'/assets/img/posts-blog.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Blog post style", "medpro-toolkit"),
                "param_name"    =>  "blog_style",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__('Style 1', 'medpro-toolkit')   =>  '1',
                    esc_html__('Style 2', 'medpro-toolkit')   =>  '2',
                    esc_html__('Style 3', 'medpro-toolkit')   =>  '3',
                ),
                "description"	=>	esc_html__("Choose your blog style", "medpro-toolkit")
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Columns", "medpro-toolkit" ),
                "param_name" => "columns",
                "std" => esc_html__( "1", "medpro-toolkit" ),
                "value" => array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '6' => '6',
                ),
                "description" => esc_html__( "Select post column", "medpro-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Posts count", "medpro-toolkit" ),
                "param_name" => "count",
                "std" => esc_html__( "2", "medpro-toolkit" ),
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
                    esc_html__('Unlimited', 'medpro-toolkit') => '-1',
                ),
                "description" => esc_html__( "How many posts you want to show?", "medpro-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select category", "medpro-toolkit" ),
                "param_name" => "category_id",
                "value" => medpro_toolkit_get_post_taxonomies_as_list(),
                "description" => esc_html__( "Select post category", "medpro-toolkit" ),
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show post date?", "medpro-toolkit" ),
                "param_name" => "date",
                "std" => esc_html__( "1", "medpro-toolkit" ),
                "value" => array(
                    esc_html__('Yes', 'medpro-toolkit') => '1',
                    esc_html__('No', 'medpro-toolkit') => '2',
                ),
                "description" => esc_html__( "Show or hide post date", "medpro-toolkit" ),
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show author name?", "medpro-toolkit" ),
                "param_name" => "author",
                "std" => esc_html__( "2", "medpro-toolkit" ),
                "value" => array(
                    esc_html__('Yes', 'medpro-toolkit') => '1',
                    esc_html__('No', 'medpro-toolkit') => '2',
                ),
                "description" => esc_html__( "Show or hide author name", "medpro-toolkit" ),
            ),
        )
    )
);




// Testimonial shortcode
vc_map( 
    array(
        "name" => esc_html__( "MedPro Testimonial", "medpro-toolkit" ),
        "base" => "medpro_testimonial",
        "icon"  => medpro_ACC_URL.'/assets/img/Testomonial.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Type", "medpro-toolkit" ),
                "param_name" => "view_type",
                "std" => "1",
                "value" => array(
                    esc_html__('List', 'medpro-toolkit') => '1',
                    esc_html__('Carousel', 'medpro-toolkit') => '2',
                ),
                "description" => esc_html__( "Select how testimonials will appear.", "medpro-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Carousel style type", "medpro-toolkit" ),
                "param_name" => "style",
                "std" => "1",
                "value" => array(
                    esc_html__('Style 1', 'medpro-toolkit') => '1',
                    esc_html__('Style 2', 'medpro-toolkit') => '2',
                    esc_html__('Style 3 (carousel only)', 'medpro-toolkit') => '3',
                    esc_html__('Style 4', 'medpro-toolkit') => '4',
                ),
                "description" => esc_html__( "Select how testimonials will appear.", "medpro-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Count", "medpro-toolkit" ),
                "param_name" => "count",
                "std" => "3",
                "description" => esc_html__( "Type how many testimonial will show", "medpro-toolkit" )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Category", "medpro-toolkit" ),
                "param_name" => "category",
                "value" => medpro_toolkit_testimonial_cat_list(),
                "description" => esc_html__( "Select testimonial Category.", "medpro-toolkit" )
             ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Column", "medpro-toolkit" ),
                "param_name" => "column",
                "std" => "3",
                "value" => array(
                    esc_html__("1 Column", "medpro-toolkit")  => '1',
                    esc_html__("2 Column", "medpro-toolkit")  => '2',
                    esc_html__("3 Column", "medpro-toolkit")  => '3',
                    esc_html__("4 Column", "medpro-toolkit")  => '4'
                ),
                "description" => esc_html__( "Select columns.", "medpro-toolkit" )
            ),
             array(
                "type" => "dropdown",
                "heading" => esc_html__( "Show arrows?", "medpro-toolkit" ),
                "param_name" => "nav",
                "std" => esc_html__( "true", "medpro-toolkit" ),
                "value" => array(
                    esc_html__('Yes', 'medpro-toolkit') => 'true',
                    esc_html__('No', 'medpro-toolkit') => 'false',
                ),
                "description" => esc_html__( "If you want visible slide arrows then select Yes", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "view_type",
                    "value" => array("2"),
                )
            ),
             array(
                "type" => "dropdown",
                "heading" => esc_html__( "Autoplay?", "medpro-toolkit" ),
                "param_name" => "autoplay",
                "std" => "true",
                "value" => array(
                    esc_html__('Yes', 'medpro-toolkit') => 'true',
                    esc_html__('No', 'medpro-toolkit') => 'false',
                ),
                "description" => esc_html__( "If you want autoplay then select Yes", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "view_type",
                    "value" => array("2"),
                )
            ),
            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Enable dots?", "medpro-toolkit" ),
                "param_name" => "dots",
                "std" => "true",
                "value" => array(
                    esc_html__('Yes', 'medpro-toolkit') => 'true',
                    esc_html__('No', 'medpro-toolkit') => 'false',
                ),
                "description" => esc_html__( "If you want show dots select Yes", "medpro-toolkit" ),
                "dependency" => array(
                    "element" => "view_type",
                    "value" => array("2"),
                )
            ),

        )
    ) 
);




// Services VC map
vc_map(
    array(
        "name" => esc_html__( "MedPro Service", "medpro-toolkit" ),
        "base" => "medpro_service",
        "icon"  => medpro_ACC_URL.'/assets/img/Service.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Service box style", "medpro-toolkit"),
                "param_name"    =>  "service_view",
                "std"           =>  "1",
                "value"         =>  array(
                    esc_html__('Style 1', 'medpro-toolkit')   =>  '1',
                    esc_html__('Style 2', 'medpro-toolkit')   =>  '2',
                    esc_html__('Style 3', 'medpro-toolkit')   =>  '3',
                    esc_html__('Style 4', 'medpro-toolkit')   =>  '4'
                ),
                "description"   =>  esc_html__("Choose service box style", "medpro-toolkit")
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select image or icon type.", "medpro-toolkit"),
                "param_name"    =>  "upload_type",
                "std"           =>  "1",
                "value"         =>  array(
                    esc_html__('Upload image', 'medpro-toolkit')      =>  '1',
                    esc_html__('Choose Icon', 'medpro-toolkit')       =>  '2',
                ),
                "description"   =>  esc_html__("Choose your icon type.", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "service_view",
                    "value"     =>  array("1", "4")
                )
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__( "Image", "medpro-toolkit" ),
                "param_name" => "photo",
                "description" => esc_html__( "Upload service image.", "medpro-toolkit" ),
                "dependency"    =>  array(
                    "element"   =>  "upload_type",
                    "value"     =>  array("1"),
                )
            ),
            array(
                "type"          =>  "iconpicker",
                "heading"       =>  esc_html__("Choose icon", "medpro-toolkit"),
                "param_name"    =>  "icon",
                "dependency"    =>  array(
                    "element"   =>  "upload_type",
                    "value"     =>  array("2"),
                ),
                "description"   =>  esc_html__("Choose icon from here.", "medpro-toolkit")
            ),
             array(
                "type" => "attach_image",
                "heading" => esc_html__( "Photo", "medpro-toolkit" ),
                "param_name" => "bg_img",
                "description" => esc_html__( "Upload service image.", "medpro-toolkit" ),
                "dependency"    =>  array(
                    "element"   =>  "service_view",
                    "value"     =>  array("2", "3"),
                )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title", "medpro-toolkit" ),
                "param_name" => "title",
                "description" => esc_html__( "Type srevice name or title", "medpro-toolkit" )
            ),
            array(
                "type" => "textarea",
                "heading" => esc_html__( "Description", "medpro-toolkit" ),
                "param_name" => "desc",
                "description" => esc_html__( "Write srevice description", "medpro-toolkit" )
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link text", "medpro-toolkit" ),
                "param_name" => "link_text",
                "description" => esc_html__( "Type link text", "medpro-toolkit" ),
                "dependency"    =>  array(
                    "element"   =>  "service_view",
                    "value"     =>  array("1", "2", "3")
                )
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Link type", "medpro-toolkit"),
                "param_name"    =>  "link_type",
                "std"           =>  "1",
                "value"         =>  array(
                    esc_html__("Wordpress Page", "medpro-toolkit")    =>  "1",
                    esc_html__("External link", "medpro-toolkit")     =>  "2",
                ),
                "description"   =>  esc_html__("Choose link type for service box.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select page", "medpro-toolkit"),
                "param_name"    =>  "link_1",
                "value"         =>  medpro_toolkit_get_page_as_list(),
                "description"   =>  esc_html__("Select page for using as link", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "link_type",
                    "value"     =>  "1"
                )
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Type url", "medpro-toolkit"),
                "param_name"    =>  "link_2",
                "description"   =>  esc_html__("Type url for using as link", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "link_type",
                    "value"     =>  "2"
                )
            )
        )
    )
);




// Price Table VC map
vc_map(
    array(
        "name" => esc_html__( "MedPro Price Table", "medpro-toolkit" ),
        "base" => "medpro_price_table",
        "icon"  => medpro_ACC_URL.'/assets/img/pricing-table.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Price table theme", "medpro-toolkit"),
                "param_name"    =>  "theme",
                "std"           =>  "1",
                "value"         =>  array(
                    esc_html__('Theme 1', 'medpro-toolkit')   =>  '1',
                    esc_html__('Theme 2', 'medpro-toolkit')    =>  '2',
                ),
                "description"   =>  esc_html__("Choose price table theme", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Price table name", "medpro-toolkit"),
                "param_name"    =>  "price_title",
                "std"           =>  esc_html__("Basic", "medpro-toolkit"),
                "description"   =>  esc_html__("Write your price table heading name", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Price tag", "medpro-toolkit"),
                "param_name"    =>  "price_tag",
                "std"           =>  esc_html__("$25.86", "medpro-toolkit"),
                "description"   =>  esc_html__("Type your price for table", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Duration type", "medpro-toolkit"), 
                "param_name"    =>  "duration_type",
                "std"           =>  esc_html__("Monthly", "medpro-toolkit"),
                "description"   =>  esc_html__("Type your price for table", "medpro-toolkit")
            ),
            array(
                'type' => 'param_group',
                'param_name' => 'feature_items',
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__("Type price table feature name", "medpro-toolkit"),
                        'param_name' => 'sin_item',
                    )
                )
            ),
            array(
                "type"          => "textfield",
                "heading"       => esc_html__( "Link text", "medpro-toolkit" ),
                "param_name"    => "link_text",
                "std"           =>  esc_html__("Book now", "medpro-toolkit"),
                "description"   => esc_html__( "Type link text", "medpro-toolkit" ),
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Booking link type", "medpro-toolkit"),
                "param_name"    =>  "link_type",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Wordpress Page", "medpro-toolkit")    =>  "1",
                    esc_html__("External link", "medpro-toolkit")      =>  "2",
                ),
                "description"   =>  esc_html__("Choose link for booking.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select page", "medpro-toolkit"),
                "param_name"    =>  "link_to_page",
                "value"         =>  medpro_toolkit_get_page_as_list(),
                "description"   =>  esc_html__("Select page for using as link", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "link_type",
                    "value"     =>  "1"
                )
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Type url", "medpro-toolkit"),
                "param_name"    =>  "link_to_external",
                "description"   =>  esc_html__("Type url for booking", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "link_type",
                    "value"     =>  "2"
                )
            )
        )
    )
);




// Iconic Button VC map
vc_map(
    array(
        "name" => esc_html__( "Iconic Button", "medpro-toolkit" ),
        "base" => "medpro_iconic_btn",
        "icon"  => medpro_ACC_URL.'/assets/img/Iconic---button.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type"      =>  "dropdown",
                "heading"       =>  esc_html__("Button style", "medpro-toolkit"),
                "param_name"    =>  "btn_style",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__('Style 1', 'medpro-toolkit')   =>  '1',
                    esc_html__('Style 2', 'medpro-toolkit')   =>  '2',
                    esc_html__('Style 3', 'medpro-toolkit')   =>  '3',
                    esc_html__('Style 4', 'medpro-toolkit')   =>  '4'
                ),
                "description"   =>  esc_html__("Choose button style.", "medpro-toolkit"),
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Button text", "medpro-toolkit"),
                "param_name"    =>  "button_text",
                "std"           =>  esc_html__("Know more", "medpro-toolkit"),
                "description"   =>  esc_html__("Type button text")
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select link type", "medpro-toolkit"),
                "param_name"    =>  "link_type",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Wordpress Page", "medpro-toolkit")    =>  "1",
                    esc_html__("External link", "medpro-toolkit")     =>  "2",
                ),
                "description"   =>  esc_html__("Choose link form pages.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select page", "medpro-toolkit"),
                "param_name"    =>  "link_to_page",
                "value"         =>  medpro_toolkit_get_page_as_list(),
                "description"   =>  esc_html__("Select page for using as link", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "link_type",
                    "value"     =>  "1"
                )
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Type url", "medpro-toolkit"),
                "param_name"    =>  "link_to_external",
                "description"   =>  esc_html__("Type url for booking", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "link_type",
                    "value"     =>  "2"
                )
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Want icon?", "medpro-toolkit"),
                "param_name"    =>  "show_icon",
                "std"           =>  esc_html__("2", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Yes", "medpro-toolkit")   => '1',
                    esc_html__("No", "medpro-toolkit")    =>  '2'
                ),
                "description"   =>  esc_html__("Do you want icon? Select yes.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "iconpicker",
                "heading"       =>  esc_html__("Select icon", "medpro-toolkit"),
                "param_name"    =>  "icon",
                "description"   =>  esc_html__("Choose icon for your link", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "show_icon",
                    "value"     =>  array("1")
                )
            ),
            array(
                "type"          =>  "colorpicker",
                "heading"       =>  esc_html__("Choose color", "medpro-toolkit"),
                "param_name"    =>  "btn_color",
                "std"           =>  "#44a6f0",
                "description"   =>  esc_html__("Choose text color.", "medpro-toolkit")
            )
        )
    )
);


// Pop Up video VC map
vc_map(
    array(
        "name" => esc_html__( "Video PopUp Section", "medpro-toolkit" ),
        "base" => "medpro_video_popup",
        "icon"  => medpro_ACC_URL.'/assets/img/video-popup.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select theme", "medpro-toolkit"),
                "param_name"    =>  "theme",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Theme 1", "medpro-toolkit")   =>  "1",
                    esc_html__("Theme 2", "medpro-toolkit")   =>  "2"
                ),
                "description"   =>  esc_html__("Select video popup theme", "medpro-toolkit")
            ),
            array(
                "type"          =>  "attach_image",
                "heading"       =>  esc_html__("Select bg image", "medpro-toolkit"),
                "param_name"    =>  "bg_img",
                "description"   =>  esc_html__("Choose background image.", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "theme",
                    "value"     =>  array("1")
                )
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Video pop up height", "medpro-toolkit"),
                "param_name"    =>  "height",
                "description"   =>  esc_html__("Type height in px", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "theme",
                    "value"     =>  array("1")
                )
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Video url", "medpro-toolkit"),
                "param_name"    =>  "video_url",
                "description"   =>  esc_html__("Type your video url", "medpro-toolkit"),
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Text box", "medpro-toolkit"),
                "param_name"    =>  "text_link",
                "std"           =>  esc_html__("2", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Yes", "medpro-toolkit")   =>  "1",
                    esc_html__("No", "medpro-toolkit")   =>  "2"
                ),
                "description"   =>  esc_html__("if you want to give text after video url, select yes.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Text after link.", "medpro-toolkit"),
                "param_name"    =>  "link_with_text",
                "description"   =>  esc_html__("Type text after link.", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "text_link",
                    "value"     =>  array("1")
                )
            )
        )
    )
);



// Single service VC map
vc_map(
    array(
        "name" => esc_html__( "Single service", "medpro-toolkit" ),
        "base" => "medpro_single_service",
        "icon"  => medpro_ACC_URL.'/assets/img/Single_service.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select icon type", "medpro-toolkit"),
                "param_name"    =>  "icon_type",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Upload image", "medpro-toolkit")  =>  "1",
                    esc_html__("Choose icon", "medpro-toolkit")   =>  "2"
                ),
                "description"   =>  esc_html__("You can upload or choose icon.", "medpro-toolkit"),
            ),
            array(
                "type"          =>  "attach_image",
                "heading"       =>  esc_html__("Upload icon", "medpro-toolkit"),
                "param_name"    =>  "img_icon",
                "dependency"    =>  array(
                    "element"   =>  "icon_type",
                    "value"     =>  array("1")
                ),
                "description"   =>  esc_html__("Select your icon for uploading.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "iconpicker",
                "heading"       =>  esc_html__("Choose icon", "medpro-toolkit"),
                "param_name"    =>  "fa_icon",
                "dependency"    =>  array(
                    "element"   =>  "icon_type",
                    "value"     =>  array("2")
                ),
                "description"   =>  esc_html__("Choose your service icon", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Service title", "medpro-toolkit"),
                "param_name"    =>  "service_title",
                "description"   =>  esc_html__("Wirte your service title", "medpro-toolkit")
            ),

            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select link type", "medpro-toolkit"),
                "param_name"    =>  "link_type",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Wordpress Page", "medpro-toolkit")    =>  "1",
                    esc_html__("External link", "medpro-toolkit")      =>  "2",
                ),
                "description"   =>  esc_html__("Choose link form pages.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select page", "medpro-toolkit"),
                "param_name"    =>  "link_to_page",
                "value"         =>  medpro_toolkit_get_page_as_list(),
                "description"   =>  esc_html__("Select page for using as link", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "link_type",
                    "value"     =>  "1"
                )
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Type url", "medpro-toolkit"),
                "param_name"    =>  "link_to_external",
                "description"   =>  esc_html__("Type url for booking", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "link_type",
                    "value"     =>  "2"
                )
            ),

        )
    )
);

// Working time VC Map
vc_map(
    array(
        "name" => esc_html__( "Working time", "medpro-toolkit" ),
        "base" => "medpro_working_time",
        "icon"  => medpro_ACC_URL.'/assets/img/Working_time.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select theme", "medpro-toolkit"),
                "param_name"    =>  "theme",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Theme 1", "medpro-toolkit")   =>  "1",
                    esc_html__("Theme 2", "medpro-toolkit")   =>  "2"
                ),
                "description"   =>  esc_html__("Select your working time theme.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Title", "medpro-toolkit"),
                "param_name"    =>  "title",
                "std"           =>  esc_html__("Working time", "medpro-toolkit"),
                "description"   =>  esc_html__("Type your working time title", "medpro-toolkit"),
            ),
            array(
                "type"          =>  "attach_image",
                "heading"       =>  esc_html__("Upload image", "medpro-toolkit"),
                "param_name"    =>  "working_bg",
                "description"   =>  esc_html__("Upload working background image.", "medpro-toolkit")
            ),
            array(
                'type' => 'param_group',
                'param_name' => 'works_time',
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__("Write working time", "medpro-toolkit"),
                        'param_name' => 'wor_time',
                    )
                )
            ),
            array(
                'type' => 'param_group',
                'param_name' => 'contact',
                'params' => array(
                    array(
                        'type'  =>  'iconpicker',
                        'heading'   =>  esc_html__("Icon", "medpro-toolkit"),
                        'param_name'    =>  'con_icon'
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__("Write contact details.", "medpro-toolkit"),
                        'param_name' => 'con_text'
                    )
                ),
                'dependency'    =>  array(
                    'element'   =>  'theme',
                    'value'     =>  array("2")
                )
            ),
            array(
                "type"          =>  "colorpicker",
                "heading"       =>  esc_html__("Text color", "medpro-toolkit"),
                "param_name"    =>  "text_color",
                "std"           =>  "#ffffff",
                "description"   =>  esc_html__("Choose text color", "medpro-toolkit")
            ),
            array(
                "type"          =>  "colorpicker",
                "heading"       =>  esc_html__("Overlay color", "medpro-toolkit"),
                "param_name"    =>  "overlay",
                "std"           =>  "#44a6f0",
                "description"   =>  esc_html__("Choose overlay color", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Opacity", "medpro-toolkit"),
                "param_name"    =>  "opacity",
                "std"           =>  esc_html__(".95", "medpro-toolkit"),
                "description"   =>  esc_html__("Type opacity in floating number", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Height", "medpro-toolkit"),
                "param_name"    =>  "height",
                "std"           =>  esc_html__("400", "medpro-toolkit"),
                "description"   =>  esc_html__("Type working time box height", "medpro-toolkit")
            )
        )
    )
);


// Iconic box
vc_map(
    array(
        "name" => esc_html__( "Iconic Box", "medpro-toolkit" ),
        "base" => "medpro_iconic_box",
        "icon"  => medpro_ACC_URL.'/assets/img/iconic-box.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select icon type", "medpro-toolkit"),
                "param_name"    =>  "icon_type",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Upload icon", "medpro-toolkit")   =>  "1",
                    esc_html__("Choose icon", "medpro-toolkit")   =>  "2"
                ),
                "description"   =>  esc_html__("Select your icon type.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "attach_image",
                "heading"       =>  esc_html__("Upload icon", "medpro-toolkit"),
                "param_name"    =>  "upload_icon",
                "description"   =>  esc_html__("Choose your icon for uploading", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "icon_type",
                    "value"     =>  array("1")
                )
            ),
            array(
                "type"          =>  "iconpicker",
                "heading"       =>  esc_html__("Choose icon", "medpro-toolkit"),
                "param_name"    =>  "fa_icon",
                "dependency"    =>  array(
                    "element"   =>  "icon_type",
                    "value"     =>  array("2")
                ),
                "description"   =>  esc_html__("Choose your icon", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Iconic box title", "medpro-toolkit"),
                "param_name"    =>  "title",
                "description"   =>  esc_html__("Write iconic box title", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textarea",
                "heading"       =>  esc_html__("Description", "medpro-toolkit"),
                "param_name"    =>  "desc",
                "description"   =>  esc_html__("Write iconic box description", "medpro-toolkit")
            )

        )
    )
);  



// Department VC map
vc_map(
    array(
        "name" => esc_html__( "Department", "medpro-toolkit" ),
        "base" => "medpro_department",
        "icon"  => medpro_ACC_URL.'/assets/img/Department.png',
        "category" => esc_html__( "MedPro", "medpro-toolkit"),
        "params" => array(
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select icon type", "medpro-toolkit"),
                "param_name"    =>  "icon_type",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Upload image", "medpro-toolkit")  =>  "1",
                    esc_html__("Choose icon", "medpro-toolkit")   =>  "2"
                ),
                "description"   =>  esc_html__("You can upload or choose icon.", "medpro-toolkit"),
            ),
            array(
                "type"          =>  "attach_image",
                "heading"       =>  esc_html__("Upload icon", "medpro-toolkit"),
                "param_name"    =>  "dep_icon",
                "dependency"    =>  array(
                    "element"   =>  "icon_type",
                    "value"     =>  array("1")
                ),
                "description"   =>  esc_html__("Select your icon for uploading.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "iconpicker",
                "heading"       =>  esc_html__("Choose icon", "medpro-toolkit"),
                "param_name"    =>  "fa_icon",
                "dependency"    =>  array(
                    "element"   =>  "icon_type",
                    "value"     =>  array("2")
                ),
                "description"   =>  esc_html__("Choose your department icon", "medpro-toolkit")
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Service title", "medpro-toolkit"),
                "param_name"    =>  "dep_title",
                "description"   =>  esc_html__("Wirte your department title", "medpro-toolkit")
            ),

            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select link type", "medpro-toolkit"),
                "param_name"    =>  "link_type",
                "std"           =>  esc_html__("1", "medpro-toolkit"),
                "value"         =>  array(
                    esc_html__("Wordpress Page", "medpro-toolkit")    =>  "1",
                    esc_html__("External link", "medpro-toolkit")     =>  "2",
                ),
                "description"   =>  esc_html__("Choose link type from here.", "medpro-toolkit")
            ),
            array(
                "type"          =>  "dropdown",
                "heading"       =>  esc_html__("Select page", "medpro-toolkit"),
                "param_name"    =>  "link_to_page",
                "value"         =>  medpro_toolkit_get_page_as_list(),
                "description"   =>  esc_html__("Select page for using as link", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "link_type",
                    "value"     =>  "1"
                )
            ),
            array(
                "type"          =>  "textfield",
                "heading"       =>  esc_html__("Type url", "medpro-toolkit"),
                "param_name"    =>  "link_to_external",
                "description"   =>  esc_html__("Type url for department", "medpro-toolkit"),
                "dependency"    =>  array(
                    "element"   =>  "link_type",
                    "value"     =>  "2"
                )
            ),

        )
    )
);




//Signle Image carousel
vc_map( array(
    "name" => esc_html__( "MedPro Single carousel", "medpro-toolkit" ),
    "base" => "medpro_single_carousel",
    "icon"  => medpro_ACC_URL.'/assets/img/Single_carousel.png',
    "category" => esc_html__( "MedPro", "medpro-toolkit"),
    "params" => array(
        array(
            "type" => "attach_images",
            "heading" => esc_html__( "Upload images", "medpro-toolkit" ),
            "param_name" => "images",
            "description" => esc_html__( "Upload single carousel images here..", "medpro-toolkit" )
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Enable loop?", "medpro-toolkit" ),
            "param_name" => "loop",
            "std" => "true",
            "value" =>array(
                'Yes' => 'true',
                'No' => 'false',
            ),
            "description" => esc_html__( "If you want to enable loop select yes.", "medpro-toolkit" ),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__( "Desktop count", "medpro-toolkit" ),
            "param_name" => "desktop_count",
            "std" => "1",
            "description" => esc_html__( "Type how many items you want to show on desktop device.", "medpro-toolkit" ),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Enable autoplay?", "medpro-toolkit" ),
            "param_name" => "autoplay",
            "std" => "true",
            "value" => array(
                'Yes' => 'true',
                'No' => 'false',
            ),
            "description" => esc_html__( "If you want to enable autoplay select yes.", "medpro-toolkit" ),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Carousel time", "medpro-toolkit" ),
            "param_name" => "autoplaytimeout",
            "std" => "5000",
            "value" => array(
                '1 seconds' => '1000',
                '2 seconds' => '2000',
                '3 seconds' => '3000',
                '4 seconds' => '4000',
                '5 seconds' => '5000',
                '6 seconds' => '6000',
                '7 seconds' => '7000',
                '8 seconds' => '8000',
                '9 seconds' => '9000',
                '10 seconds' => '10000',
            ),
            "dependency" => array(
                "element" => "autoplay",
                "value" => "true",
            ),
            "description" => esc_html__( "Select autoplay time.", "medpro-toolkit" ),
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Enable navigation icon?", "medpro-toolkit" ),
            "param_name" => "nav",
            "std" => "true",
            "value" =>array(
                esc_html__('Yes', 'medpro-toolkit') => 'true',
                esc_html__('No', 'medpro-toolkit') => 'false',
            ),
            "description" => esc_html__( "If you want to enable navigation icon select yes.", "medpro-toolkit" ),
        ),

        array(
            "type" => "dropdown",
            "heading" => __( "Enable dots?", "medpro-toolkit" ),
            "param_name" => "dots",
            "std" => __( "true", "medpro-toolkit" ),
            "value" =>array(
                esc_html__('Yes', 'medpro-toolkit') => 'true',
                esc_html__('No', 'medpro-toolkit') => 'false'
            ),
            "description" => __( "If you want to enable dots select yes.", "medpro-toolkit" ),
        ),

        array(
            "type" => "textfield",
            "heading" => __( "Height", "medpro-toolkit" ),
            "param_name" => "height",
            "std" => __( "450", "medpro-toolkit" ),
            "description" => __( "Type carousel height.", "medpro-toolkit" ),
        ),
    ) 
));


// Style map shortcode

vc_map( 
    array(
        'name'      => esc_html__('Styled MAP', 'medpro-toolkit'),
        'base'      => 'medpro_styled_map',
        "icon"  	=> medpro_ACC_URL.'/assets/img/styled-map.png',
        "category" 	=> esc_html__( "MedPro", "medpro-toolkit"),
        'params'    => array(
            array(
                'type'          => 'textfield',
                'heading'       => esc_html__('Map Height', 'medpro-toolkit'),
                'param_name'    => 'height' ,
                'std'           => '500',
                'description'   =>  esc_html__('Type map height in this box.', 'medpro-toolkit')
            ),
            array(
                'type'          => 'textfield',
                'heading'       => esc_html__('Map latitude', 'medpro-toolkit'),
                'param_name'    => 'latitude',
                'std'           => '40.9811099',
                'description'   =>  esc_html__('Type map latitude no in this box.', 'medpro-toolkit')
            ),
            array(
                'type'          => 'textfield',
                'heading'       => esc_html__('Map longitude', 'medpro-toolkit'),
                'param_name'    => 'longitude'  ,
                'std'           => '-74.9637603',
                'description'   =>  esc_html__('Type map longitude no in this box.', 'medpro-toolkit')
            )
        )
    ) 
);



// Title Gallery VC Map
vc_map( array(
    "name" => esc_html__( "Tile Gallery", "medpro-toolkit" ),
    "base" => "medpro_tile_gallery",
    "icon"  	=> medpro_ACC_URL.'/assets/img/Title_gallery.png',
    "category" => esc_html__( "MedPro", "medpro-toolkit"),
    "params" => array(
        array(
            "type" => "attach_images",
            "heading" => esc_html__( "Upload images", "medpro-toolkit" ),
            "param_name" => "images",
            "description" => esc_html__( "Upload tile gallery images here..", "medpro-toolkit" )
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Height", "medpro-toolkit" ),
            "param_name" => "height",
            "std" => esc_html__( "180", "medpro-toolkit" ),
            "description" => esc_html__( "Type image height.", "medpro-toolkit" ),
        ),
    ) 
));




// Gallery
vc_map( array(
    "name" => esc_html__( "Gallery", "medpro-toolkit" ),
    "base" => "medpro_project_gallery",
    "icon"  	=> medpro_ACC_URL.'/assets/img/Title_gallery.png',
    "category" => esc_html__( "MedPro", "medpro-toolkit"),
    "params" => array(
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__( "Gallery style", "medpro-toolkit" ),
            "param_name"    => "theme",
            "std"           => esc_html__( "1", "medpro-toolkit" ),
            "value"         =>array(
                esc_html__("Theme 1", "medpro-toolkit")   =>  "1",
                esc_html__("Theme 2", "medpro-toolkit")   =>  "2"
            ),
            "description"   => __( "Select your gallery style.", "medpro-toolkit" ),
        ),
        array(
            "type"          => "textfield",
            "heading"       => esc_html__( "Gallery count", "medpro-toolkit" ),
            "param_name"    => "count",
            "std"           => esc_html__( "9", "medpro-toolkit" ),
            "description"   => esc_html__( "How many projects you want to show?", "medpro-toolkit" )
        ),
        array(
            "type"          => "dropdown",
            "heading"       => esc_html__( "Gallery columns", "medpro-toolkit" ),
            "param_name"    => "columns",
            "std"           => esc_html__( "3", "medpro-toolkit" ),
            "value"         => array(
                '3' => '3',
                '4' => '4',
            ),
            "description" => esc_html__( "How many column do u want to use.", "medpro-toolkit" )
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Enable filter?", "medpro-toolkit" ),
            "param_name" => "filter",
            "std" => __( "1", "medpro-toolkit" ),
            "value" => array(
                esc_html__('No', 'medpro-toolkit') => '1',
                esc_html__('Yes', 'medpro-toolkit') => '2',
            ),
            "description" => esc_html__( "If you want to enable Gallery filter, select yes.", "medpro-toolkit" )
        ),
        array(
            "type" => "dropdown",
            "heading" => esc_html__( "Filter Style", "medpro-toolkit" ),
            "param_name" => "filter_style",
            "std" => __( "center", "medpro-toolkit" ),
            "value" => array(
                esc_html__('Right align', 'medpro-toolkit') => 'right',
                esc_html__('Left align', 'medpro-toolkit') => 'left',
                esc_html__('Center align', 'medpro-toolkit') => 'center',
            ),
            "description" => esc_html__( "Select a style for Gallery.", "medpro-toolkit" ),
            "dependency" => array(
                "element" => "filter",
                "value" => array("2"),
            )
        ),
    ) 
));