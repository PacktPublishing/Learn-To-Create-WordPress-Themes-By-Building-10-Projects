<?php
	// Theme Support
	function ms_theme_setup(){
		add_theme_support('custom-logo');

		// Nav Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu')
		));
	}

	add_action('after_setup_theme', 'ms_theme_setup');