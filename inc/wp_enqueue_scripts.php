<?php

add_action( 'wp_enqueue_scripts', function () {
  	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/scripts/libs/swiper.js', array(), null, true );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/dist/js/scripts.js', array(), null, true );

	wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/styles/libs/swiper-bundle.min.css', array(), null );
	wp_enqueue_style( 'app-css', get_template_directory_uri() . '/assets/dist/css/styles.min.css', array(), null );
} );
