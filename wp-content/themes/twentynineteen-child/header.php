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
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
	<link rel="stylesheet" href="style.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div id="navLinks" class="row">
		<a class="columns" href="http://localhost/testsite">Home</a>
		<a class="columns" href="http://localhost/testsite/about">About</a>
		<a class="columns" href="http://localhost/testsite/jojo-characters/">Jojos Characters</a>		
	</div>


	<div id="content" class="site-content">
