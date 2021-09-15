<?php 

// メインクエリの書き換え
add_action('pre_get_posts', function ($query){
	if (is_admin()) {
		return;
	}

	if (!$query->is_main_query()) {
		return;
	}

	if ( is_post_type_archive('story')) {
		$posts_per_page = get_option('natours_story_posts_per_page', 10);
		$query->set('posts_per_page', $posts_per_page);
		return;
	}

	if ( is_post_type_archive('tour')) {
		$posts_per_page = get_option('natours_tour_posts_per_page', 10);
		$query->set('posts_per_page', $posts_per_page);
		return;
	}

	return;
	
});



?>