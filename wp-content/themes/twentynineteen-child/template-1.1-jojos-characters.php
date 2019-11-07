<?php

/*Template Name: 1.1 Jojos Characters 

Template Post Type: page

this is the template for the page that hosts all the Jojos
 * Character Posts
 */

get_header();

?>

<body class="site-content" <?php body_class(); ?>>

<?php
$args = array(
    'post_type' => 'jojos_characters'
);

$the_query = new WP_Query($args);

?>

    <div class="row align-center">

            <?php if($the_query->have_posts() ):
                while ( $the_query->have_posts() ):
                    $the_query->the_post();
                
            ?>
        <div class="column large-5 small-12 align-left ">
            <h3 class="ph3">
                <?php

                the_title();

                ?>
            </h3>

            <?php add_theme_support( 'post-thumbnails' ); ?>
            <img class="ph3" src="<?php echo get_the_post_thumbnail_url();?>"/>

            <p><?php the_excerpt();?></p>
            <a href="<?php the_permalink();?>">Read more..</a>

        </div>
            <?php
            endwhile;
            else:
                {
                    echo '<p>nothing here</p>';
                }
            endif;
            ?>
    </div>

</body>

<?php
get_footer(); 
?>