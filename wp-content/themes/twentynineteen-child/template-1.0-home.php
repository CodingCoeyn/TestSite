<?php
/* Template Name: 1.0 Home */

get_header();
?>

<body>

<?php  

   

    $thepost = get_post(); // Retrieved the post
    $post_id = $thepost->ID;

    $user = get_field("stand_user_name"); // gets the name
    $img = get_field("stand_user_image"); // gets image
    $stand = get_field("stand_info"); //gets stand info

    // echo '<pre>';
    // print_r($thepost);
    // echo '</pre>';

    $title = $thepost->post_title; // Saved the title of the post, from the WP_POST OBJECT
    $content = $thepost->post_content; // Saved the content of the post, from the WP_POST OBJECT
?>


    <h1 class="h1" style="text-align:left
    <!-- Printing the title -->
    <p class="para" style="float:left;"><?php echo apply_filters( 'the_content', $content) ?></p> <!-- Printing the content -->
    <!--The above line trims all the unnecessary object attributes from $content-->
    
    <div style='align-content'>
        <p><?php echo $user; ?></p>
    </div>
    <img src="<?php echo $img; ?>"/> <!--use image url-->
    <div>
        <p><?php echo $stand; ?></p>
    </div>


</body>


<?php get_footer(); ?>
