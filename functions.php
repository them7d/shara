<?php
if(!function_exists("shara_theme_setup")){
    function shara_theme_setup(){
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }
    
    // get hooks
    require "inc/hooks-shara.php";
    // get funcions
    require "inc/class-shara.php";
}
add_action("after_setup_theme",'shara_theme_setup');
add_action( "after_theme_setup", "" );

function custom_header(){
    $defaults = array(
		'height'               => 50,
		'width'                => 50,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true,
        'flex-height'          => false,
        'flex-width'           => false
	);
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', "custom_header");

function register_menus(){
    $args = array(

    );
    register_nav_menu( "nav-menu","header menu" );
}
add_action("init", "register_menus");


function shara_script(){
	wp_register_script( "shara-script", get_template_directory_uri() . "/assets/js/script.js" );
    wp_enqueue_script("shara-script");
}
add_action("wp_enqueue_scripts","shara_script");


?>