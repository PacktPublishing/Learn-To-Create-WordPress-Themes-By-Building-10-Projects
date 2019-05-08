<?php
require_once('wp_bootstrap_navwalker.php');

// Theme Support
function business_theme_setup(){
	// Logo Support
	add_theme_support('custom-logo');

	// Featured Image
	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'primary'	=> __('Primary Menu')
	));
}

add_action('after_setup_theme', 'business_theme_setup');

// Widget Locations
function init_widgets($id){
	register_sidebar(array(
		'name'		=> 'Content Region 1',
		'id'		=> 'content-region-1',
		'before_widget'	=> '<section class="row content-region-1 pt50 pb40"><div class="container"><div class="col-md-12">',
		'after_widget'	=> '</div></div></section>',
		'before_title'	=>	'<h1>',
		'after_title'	=>	'</h1>'
	));

	register_sidebar(array(
		'name'		=> 'Content Region 2',
		'id'		=> 'content-region-2',
		'before_widget'	=> '<section class="row content-region-2 pt40 pb40">
    <div class="container">',
		'after_widget'	=> '</div></section>',
		'before_title'	=>	'<h1>',
		'after_title'	=>	'</h1>'
	));

	register_sidebar(array(
		'name'		=> 'Footer 1',
		'id'		=> 'footer-1',
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=>	'<h4>',
		'after_title'	=>	'</h4>'
	));

	register_sidebar(array(
		'name'		=> 'Footer 2',
		'id'		=> 'footer-2',
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=>	'<h4>',
		'after_title'	=>	'</h4>'
	));

	register_sidebar(array(
		'name'		=> 'Footer 3',
		'id'		=> 'footer-3',
		'before_widget'	=> '',
		'after_widget'	=> '',
		'before_title'	=>	'<h4>',
		'after_title'	=>	'</h4>'
	));

	register_sidebar(array(
		'name'		=> 'Sidebar',
		'id'		=> 'sidebar',
		'before_widget'	=> '<div class="panel panel-default sidebar-widget">',
		'after_widget'	=> '</div></div>
		',
		'before_title'	=> '<div class="panel-heading"><h3 class="panel-title">',
		'after_title'	=> '</h3></div><div class="panel-body">'
	));
}

add_action('widgets_init', 'init_widgets');

// Customizer File
require get_template_directory() . '/inc/customizer.php';