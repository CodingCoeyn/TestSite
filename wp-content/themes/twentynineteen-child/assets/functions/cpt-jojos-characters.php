
<?php
/* Twenty Nineteen Child Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 
I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.
*/
// let's create the function for the custom type
function custom_post_jojos_characters() { 
	// creating (registering) the custom type 
	register_post_type( 'jojos_characters', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Jojos Characters', 'twentynineteen-child'), /* This is the Title of the Group */
			'singular_name' => __('Jojos Character', 'twentynineteen-child'), /* This is the individual type */
			'all_items' => __('All Jojos Characters', 'twentynineteen-child'), /* the all items menu item */
			'add_new' => __('Add New', 'twentynineteen-child'), /* The add new menu item */
			'add_new_item' => __('Add New Jojos Character', 'twentynineteen-child'), /* Add New Display Title */
			'edit' => __( 'Edit', 'twentynineteen-child' ), /* Edit Dialog */
			'edit_item' => __('Edit Jojos Character', 'twentynineteen-child'), /* Edit Display Title */
			'new_item' => __('New Jojos Character', 'twentynineteen-child'), /* New Display Title */
			'view_item' => __('View Jojos Character', 'twentynineteen-child'), /* View Display Title */
			'search_items' => __('Search Jojos Characters', 'twentynineteen-child'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'twentynineteen-child'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'twentynineteen-child'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Jojos Character post type', 'twentynineteen-child' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-universal-access-alt', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'jojos_character', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'jojos_character', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky', 'post-formats')
	 	) /* end of options */
    ); /* end of register post type */
    }
    add_action( 'init', 'custom_post_jojos_characters');

    ?>