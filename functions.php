<?php
if(! function_exists("shara_theme_setup")){
    function shara_theme_setup(){
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }

    // 
    // get hooks
    require "inc/hooks-shara.php";
    require "inc/class-shara.php";
}
add_action("after_theme_setup",'shara_thene_setup');

function custom_header(){
    add_theme_support(
        'custom-header',
        array(
            'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
            'default-text-color' => '000',
            'width'              => 1000,
            'height'             => 250,
        )
    );
    $defaults = array(
		'height'               => 100,
		'width'                => 100,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
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
?>