<?php 


// custom post type
add_action('init', function(){
  // tour post type
	register_post_type('tour', array(
		'labels' => array(
			'name'          => 'ツアー',
			'add_new_item' => 'Add New Tour',
			'edit_item' => 'Edit Tour',
			'all_items' => 'All Tours',
			'singular_name' => 'Tour',
		),
		'rewrite' => array('slug' => 'tours'),
		'supports' => array('title', 'custom-fields'),
		'menu_icon' => 'dashicons-palmtree',
		'public'        => true,
		'has_archive'   => true,
		'show_in_rest'  => true,
	)); 

  // story post type
	register_post_type('story', array(
		'labels' => array(
			'name'          => 'ストーリー',
			'add_new_item' => 'Add New Story',
			'edit_item' => 'Edit Story',
			'all_items' => 'All Stories',
			'singular_name' => 'Story',
		),
		'rewrite' => array('slug' => 'stories'),
		'supports' => array('title', 'custom-fields'),
		'menu_icon' => 'dashicons-admin-comments',
		'public'        => true,
		'has_archive'   => true,
		'show_in_rest'  => true,
	)); 
});


// disallow story to have single page
// redirect single story post to the archive page
add_action( 'template_redirect', function() {
	if ( is_singular('story') ) {
			// global $post;
			$redirect_link = get_post_type_archive_link( 'story' );
			wp_safe_redirect( $redirect_link, 302 );
			exit;
	}
});
