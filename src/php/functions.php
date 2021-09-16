<?php
// カスタム投稿タイプ
require get_theme_file_path('/libs/custom-post.php');
// クエリのカスタマイズ
require get_theme_file_path('/libs/custom-query.php');
// テーマの設定ページ
require get_theme_file_path('/libs/custom-option.php');
// Contact Form 7 のカスタマイズ
require get_theme_file_path('/libs/wpcf7.php');


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
	add_image_size('about-gallery', 640, 360, true);
});
