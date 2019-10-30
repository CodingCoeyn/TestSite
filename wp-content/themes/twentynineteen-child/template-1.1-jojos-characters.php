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
        <div class="columns medium-6">
            <?php if($the_query->have_posts() ):
                while ( $the_query->have_posts() ):
                    $the_query->the_post();
                
            ?>

            <h3><?php

            the_title();

            ?></h3>

            <a href="<?php the_permalink();?>">Read more..</a>

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