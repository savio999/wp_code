<?php

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

//for more info refer https://developer.wordpress.org/themes/functionality/navigation-menus/