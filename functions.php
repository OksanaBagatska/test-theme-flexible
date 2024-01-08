<?php

// Theme requires ACF to work
if ( ! class_exists( 'ACF' ) ) {
	echo 'ACF not found';

	return;
}

// Require menu
require_once 'inc/menu.php';

// Require wp enqueue scripts
require_once 'inc/wp_enqueue_scripts.php';

// Require acf
require_once 'inc/acf.php';
