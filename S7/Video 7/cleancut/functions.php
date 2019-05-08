<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Theme Support
function cleancut_theme_support(){
	// Post Thumbs
	add_theme_support('post-thumbnails');

	// Nav Menus
	register_nav_menus(array(
		'primary'	=> __('Primary Menu'),
		'footer'	=> __('Footer Menu')
	));
}

add_action('after_setup_theme', 'cleancut_theme_support');

// Widget Locations
function init_widgets($id){
	register_sidebar(array(
		'name'	=> 'Sidebar',
		'id'	=> 'sidebar',
		'before_widget'	=> '<div class="well animated fadeInRight sidebar-widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));
}

add_action('widgets_init', 'init_widgets');

// Add Customizer Functionality
require get_template_directory(). '/inc/customizer.php';