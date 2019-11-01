<?php

/*Template Name: 1.1 Jojos Characters 

Template Post Type: page

this is the template for the page that hosts all the Jojos
 * Character Posts
 */

get_header();

?>

<body>

<?php
$args = array(
    'post_type' => 'jojos_characters'
);

$the_query = new WP_Query($args);

?>

    <div class="row">
        <div class="columns large-6">
            <?php if($the_query->have_posts() ):
                while ( $the_query->have_posts() ):
                    $the_query->the_post();
                
            ?>
            <div class="column">
                <h3><?php

                the_title();

                ?></h3>

                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink();?>">Read more..</a>
            </div>

            <?php add_theme_support( 'post-thumbnails' ); ?>
            <div class="column">
                    <img src="<?php echo get_the_post_thumbnail_url();?>"/>
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
    </div>

</body>

<?php
get_footer(); 
?>