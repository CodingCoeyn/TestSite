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

    <div class="row align-left pl6">

            <?php if($the_query->have_posts() ):
                while ( $the_query->have_posts() ):
                    $the_query->the_post();
                
            ?>
        <div class="column large-5 small-12 align-left ">
            <h2 class="ph3">
                <?php

                the_title();

                ?>
            </h2>

            <?php add_theme_support( 'post-thumbnails' ); 
                $postID = get_post_thumbnail_id(get_the_ID());
                $alt= get_post_meta( $postID, '_wp_attachment_image_alt', true); ?>
                
            <img class="ph3" src="<?php echo get_the_post_thumbnail_url();?>"  alt="<?php echo $alt;?>" />

            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>">[Read more about <?php the_title(); ?>]</a>

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