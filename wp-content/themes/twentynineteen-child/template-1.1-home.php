<?php

/* Template Name: 1.1 Home 
*   Template Post Type: page*/

get_header();
?>

<style>
	.entry-title{
		display: none;
	}
	</style>
<body>

  <div class="row align-center">

    <div class="column large-12 align-center b">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

			endwhile; // End of the loop.
			?>

    </div>

  </div>



</body>


<?php get_footer(); ?>
