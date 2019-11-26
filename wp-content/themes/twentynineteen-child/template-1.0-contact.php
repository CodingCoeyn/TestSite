<?php
/*Template Name: 1.0 Contact Page

Template Post Type: page

this is the template for the contact page
 */

 get_header();

?>
<style>
    .gform_title{
        font-size: 1.5em !important;
    }
</style>

<body id="hmuPage" <?php body_class(); ?>>

    <div class="row align-center">
        <div class="column large-8 small-12">
		
            <?php echo do_shortcode("[gravityform id=1 title=true description=true]"); ?>

        </div>
    </div>

</body>


<?php  get_footer(); ?>