<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<title><?php the_title_attribute(); ?></title>
</head>

<body>
<div id="page" class="site">
	<nav id="navLinks" class="row align-center">
			<a class="column large-4" href="http://localhost/testsite">Home</a>
			<a class="column large-4" href="http://localhost/testsite/jojo-characters/">Jojos Characters</a>
			<a class="column large-4" href="http://localhost/testsite/contact">HMU</a>
	</nav>
	

	<div id="content" class="site-content pv4">
		
