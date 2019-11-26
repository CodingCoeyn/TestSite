<?php
/**
 * Template Name: Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="row align-center">
				<?php if ( have_posts() ) : ?>

					<?php

					$args = array('post_type' => 'jojos_characters');

					$the_query = new WP_Query($args);
					// Start the Loop.
					while ( $the_query->have_posts() ):
						$the_query->the_post();

						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						?>
						<div class="column large-9 small-12">
							<h2><a href="<?php the_permalink();?>">
								<?php the_title();?> </a>
							</h2>
						</div>
						<?php
						// End the loop.
					endwhile;

					// Previous/next page navigation.
					twentynineteen_the_posts_navigation();

					// If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content/content', 'none' );

				endif;
				?>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
