<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="width">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>
<div class="app">
	<header class="header">
		<div class="container">
			<div class="header__container">
				<div class="header__logo-container">
				</div>
				<nav class="header__nav">
					<?php
					wp_nav_menu( [
						'theme_location' => 'primary-menu',
						'menu_class'     => 'header__menu-list',
					] );
					?>
				</nav>
			</div>
		</div>
	</header>
