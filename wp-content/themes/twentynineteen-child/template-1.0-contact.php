<?php
/*Template Name: 1.0 Contact Page

Template Post Type: page

this is the template for the contact page
 */

 get_header();

?>

<body id="hmuPage" <?php body_class(); ?>>


    <div class="row">
        <div class="column">
		
            <?php
            if ( have_posts() ) {

                // Load posts loop.
                while ( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/content/content' );
                }
                

            } else {

                // If no content, include the "No posts found" template.
                get_template_part( 'template-parts/content/content', 'none' );

            }
            ?>

        </div>
    </div>

</body>


<?php  get_footer(); ?>