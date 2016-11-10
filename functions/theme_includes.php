<?php
if(!is_admin()){
	/* CSS */
	wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/main.min.css', array(),'1.0.0', 'screen' );

	/* JS */
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery.js', array(), '1.12.1', false );
	wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.3.5', true );
	//wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), '1.5.9', true );
	wp_enqueue_script( 'Funções', get_template_directory_uri() . '/js/funcoes.js', array(), '1.0.0', true );
}
