<?php
function theme_register_menus() {
	register_nav_menus(
		array(
			'primary-menu' => esc_html__('Primary Menu', 'theme'),
 		)
	);
}
add_action('after_setup_theme', 'theme_register_menus');
