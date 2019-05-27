<?php

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Widget1',
		'id'            => 'footer_widget1',
		'before_widget' => '<div class="custom-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget2',
		'id'            => 'footer_widget2',
		'before_widget' => '<div class="custom-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget3',
		'id'            => 'footer_widget3',
		'before_widget' => '<div class="custom-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => 'Join Text',
		'id'            => 'footer_widget4',
		'before_widget' => '<div class="custom-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
		'name'          => 'Signup button',
		'id'            => 'footer_widget5',
		'before_widget' => '<div class="custom-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

//for more info :https://devotepress.com/tutorials-hacks/wordpress-coding/how-to-register-sidebars-in-wordpress/