<?php

function bigbooty_styles() 
{

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/lib/css/bootstrap.min.css' );
	wp_enqueue_style( 'bigbooty_css', get_template_directory_uri() . '/lib/css/bigbooty.css' );	
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	// Add more styles here!
}
add_action( 'wp_enqueue_scripts', 'bigbooty_styles' );


function bigbooty_js() 
{

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/lib/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/lib/js/theme.js', array('jquery', 'bootstrap_js'), '', true );
	// Add more scripts here!

}
add_action( 'wp_enqueue_scripts', 'bigbooty_js' );

?>