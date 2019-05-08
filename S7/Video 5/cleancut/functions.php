<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// Theme Support
function cleancut_theme_support(){
	// Nav Menus
	register_nav_menus(array(
		'primary'	=> __('Primary Menu'),
		'footer'	=> __('Footer Menu')
	));
}

add_action('after_setup_theme', 'cleancut_theme_support');

// Add Customizer Functionality
require get_template_directory(). '/inc/customizer.php';