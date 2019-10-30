<?php
/* Template Name: 1.0 Home 
*   Template Post Type: page*/

get_header();
?>

<body>

<?php  

   

    /*$thepost = get_post(); // Retrieved the post
    $post_id = $thepost->ID;

    // echo '<pre>';
    // print_r($thepost);
    // echo '</pre>';

    $title = $thepost->post_title; // Saved the title of the post, from the WP_POST OBJECT
    $content = $thepost->post_content; // Saved the content of the post, from the WP_POST OBJECT
      <h1 class="h1" style="text-align:left
    <!-- Printing the title -->
    <p class="para" style="float:left;"><?php echo apply_filters( 'the_content', $content) ?></p> <!-- Printing the content -->
    <!--The above line trims all the unnecessary object attributes from $content-->
    */

    
?>

<?php 

  $args = array(
    'post_title' => 'AllJojos'
  );

  $the_query = new WP_Query($args);

  if($the_query -> have_posts() ):
    {
      echo '<h1>Found the Image</h1>';
    }
  endif;

  apply_filters('wp_get_attachment_image_src',$args,$the_query ->get_)

  $jojoIMG

?>
  
  <div class="row">
    <div class="column large-6 align-center">
     <!-- <img  src="<?php $jojoIMG ?>" alt="All of the Jojos">-->
    </div>
  </div>
    


</body>


<?php get_footer(); ?>
