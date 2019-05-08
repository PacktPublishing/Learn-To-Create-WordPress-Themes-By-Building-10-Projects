<?php
	//Theme Support
	function dynamo_theme_setup(){
		// Fatured Image Support
		add_theme_support('post-thumbnails');

		// Nav Menus
		register_nav_menus(array(
			'primary'	=> __('Primary Menu')
		));
	}

	add_action('after_setup_theme', 'dynamo_theme_setup');