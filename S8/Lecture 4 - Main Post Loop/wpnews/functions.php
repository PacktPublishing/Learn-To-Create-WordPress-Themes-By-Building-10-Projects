<?php
// Theme Support
function wpnews_theme_support(){
	// Post Thumbnails
	add_theme_support('post-thumbnails');
	add_image_size('news-thumb', 400, 200);

	// Nav Menus
	register_nav_menus(array(
		'primary'	=> __('Primary menu')
	));
}

add_action('after_setup_theme', 'wpnews_theme_support');