<?php
function get_header_img(){
      if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
function shara_nav_menu(){
	wp_nav_menu(
		array(
			"menu"=>"nav-menu"
		)
	);
}
function shara_get_search_form(){
	if(){
		the_widget( 'WC_Widget_Product_Search' );
	}
	else{
		get_search_form();
	}
}
function shara_is_woocommerce_active(){
	if(class_exists("woocommerce")){
		the_widget( "wc" );
	}
	else{

	}
}
?>
