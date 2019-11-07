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
</head>

<body>
<div id="page" class="site">

	<div id="navLinks" class="row align-center">
		<a class="columns" href="http://localhost/testsite">Home</a>
		<a class="columns" href="http://localhost/testsite/jojo-characters/">Jojos Characters</a>
		<a class="columns" href="http://localhost/testsite/contact">HMU</a>
	</div>


	<div id="content" class="site-content">
