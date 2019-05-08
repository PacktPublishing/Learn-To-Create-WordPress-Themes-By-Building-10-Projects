<?php
	// Theme Support
	function adv_theme_support(){
		// Featured Image Support
		add_theme_support('post-thumbnails');

		// Nav Menus
		register_nav_menus(array(
			'primary' 	=> __('Primary Menu'),
			'footer'	=> __('Footer Menu')
		));

		// Post Format Support
		add_theme_support('post-formats', array('aside', 'gallery', 'link'));
	}

	add_action('after_setup_theme', 'adv_theme_support');

	// Excerpt Length
	function adv_set_excerpt_length(){
		return 25;
	}

	add_filter('excerpt_length','adv_set_excerpt_length');

	function get_top_parent(){
		global $post;
		if($post->post_parent){
			$ancestors = get_post_ancestors($post->ID);
			return $ancestors[0];
		}

		return $post->ID;
	}

	function page_is_parent(){
		global $post;

		$pages = get_pages('child_of='.$post->ID);
		return count($pages);
	}