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
	if(class_exists("woocommerce")){
		the_widget( 'WC_Widget_Product_Search' );
	}
	else{
		get_search_form();
	}
}
function shara_get_cart(){

	if(class_exists("woocommerce")){
	?>
		<ul class="mini-cart">
			<li class="icon-cart">
				<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'shara' ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
						<path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
					</svg>
				</a>
				<span class="badge">
					<?php echo WC ()->cart->get_cart_contents_count (); ?>
				</span>
			</li>
			<li class="cart-item-container">
				<?php
					the_widget( "WC_Widget_Cart","title=" );
				?>
			</li>
		</ul>
	<?php
	}
}


function shara_enqueue_styles(){
	wp_enqueue_style("shara-style", get_template_directory_uri()."/assets/css/index.css");
}	

?>