<?php
	// Theme Support
	function fc_theme_support(){
		// Add Featured Image Support
		add_theme_support('post-thumbnails');
		add_image_size('home-thumb', 715, 449);

		// Nav Menus
		register_nav_menus(array(
			'primary'	=> __('Primary Menu')
		));
	}

	add_action('after_setup_theme', 'fc_theme_support');

	// Widget Locations
function fc_init_widgets($id){
	register_sidebar(array(
		'name' 	=> 'Sidebar',
		'id' 	=> 'sidebar',
		'before_widget'	=> '<div class="sidebar-widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 1',
		'id' 	=> 'footer1',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 2',
		'id' 	=> 'footer2',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 3',
		'id' 	=> 'footer3',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 4',
		'id' 	=> 'footer4',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

}

add_action('widgets_init', 'fc_init_widgets');

	// Add Customizer functionality.
	require get_template_directory() . '/inc/customizer.php';