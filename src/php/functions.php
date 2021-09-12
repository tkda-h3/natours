<?php
function my_enqueue_scripts() {
  // style.css読み込み
  wp_enqueue_style( 'my-style', get_template_directory_uri(). '/css/main.css', array(), '1.0.0' );
  // script読み込み
  wp_enqueue_script( 'my-script', get_template_directory_uri(). '/js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

add_action('after_setup_theme', function (){
  // メニュー追加
	register_nav_menu('header_menu', 'ヘッダーメニュー');
	register_nav_menu('footer_menu', 'フッターメニュー');

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	// wp-cliで以下のコマンドで再生成可能
	// $ wp media regenerate --only-missing
	add_image_size('tour-card', 450, 300, true);
});


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
		'supports' => array('title', 'editor', 'custom-fields'),
		'menu_icon' => 'dashicons-admin-comments',
		'public'        => true,
		'has_archive'   => true,
		'show_in_rest'  => true,
	)); 
});
