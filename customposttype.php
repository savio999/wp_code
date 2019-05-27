<?php
/*
 * For more info: https://codex.wordpress.org/Function_Reference/register_post_type
 * menu icon: https://developer.wordpress.org/resource/dashicons/#admin-plugins
 */
	register_post_type( 'works',
		array(
			'labels' => array(
				'name' => __( 'Work' ),
				'singular_name' => __( 'Work' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'works'),
			'supports'      => array( 'title', 'editor', 'thumbnail' ),
    		'menu_position' => 20,
			'post_type' => 'attachment',
			'menu_icon'   => 'dashicons-welcome-write-blog',
			'capability_type' => 'post',



		)
	);