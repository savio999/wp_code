<?php
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
function wcc_change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Apartment'
	$defaults['home'] = 'Apartment';
	return $defaults;
}

//https://docs.woocommerce.com/document/customise-the-woocommerce-breadcrumb/