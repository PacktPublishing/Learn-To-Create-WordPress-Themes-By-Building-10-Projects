<?php

// Theme Support
function theme_setup(){
	// Featured Image Support
	add_theme_support('post-thumbnails');

	set_post_thumbnail_size(900, 600);

	// Post Format Support
	add_theme_support('post-formats', array('gallery'));
}

add_action('after_setup_theme', 'theme_setup');