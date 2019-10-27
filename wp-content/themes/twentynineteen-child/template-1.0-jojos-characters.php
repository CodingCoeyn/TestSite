<?php
/* Template Name: 1.0 Jojos Characters */

get_header();
?>

<body>

<?php 

$args = array(
    'orderby' => 'title',
    'post_type' => 'cpt-jojos-characters'
);

$the_query = new WP_Query($args);

echo '<pre>';
print_r($the_query);
echo '</pre>';

exit;
?>


</body>

<?php

get_footer();
?>