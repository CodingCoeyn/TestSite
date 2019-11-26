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

	<nav  id="navLinks">
		<ul class="row align-center ph6"> <!--putting the row here makes the menu horizontal -->
			<li class="columns large-3"><a  href="http://localhost/testsite">Home</a></li>
			<li class="columns large-4"><a  href="http://localhost/testsite/jojo-characters/">Jojos Characters</a></li>
			<li class="columns large-3"><a  href="http://localhost/testsite/contact">HMU</a></li>
		</ul>
			
	</nav>
	

	<div id="content" class="site-content pv4">
		
