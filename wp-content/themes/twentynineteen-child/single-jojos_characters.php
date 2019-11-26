<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
	<div class="row">
		<div class ="column"></div>
		<div id="singleJo" class ="column large-10 align-center">

			<?php

			/* Start the Loop */

			while ( have_posts() ) :

				?>
					<h2><?php the_title(); ?></h2>
					<img src="<?php the_field('character_image');?>" alt="<?php the_title(); ?>"/>


				<?php if( get_field('is_stand_user') ): ?>

					<h2><?php the_field('stand_name');?></h2>
					<img src="<?php the_field('stand_image');?>" alt="<?php the_field('stand_name');?>"

				
				<?php endif; ?>

				<?php
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );
				
				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: parent post link */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
						)
					);
				}			
				
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>
			

			<!-- this is visible underneath the comment box-->
		</div><!-- .columns -->
		<div class ="column"></div>
	</div><!-- .row -->

<?php
get_footer();
