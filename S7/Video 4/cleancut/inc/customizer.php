<?php
	function cleancut_customize_register($wp_customize){
		// Showcase Section
  		$wp_customize->add_section('showcase', array(
			'title'          => __('Showcase', 'cleancut'),
			'description'    => sprintf( __('Options for showcase area', 'cleancut')
			),
			'priority'       => 130,
		));

		// Image Setting
		  $wp_customize->add_setting('showcase_image', array(
		    'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',
		    'type'    => 'theme_mod'

		 ));

		 // Image Control
		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
		     'label'    => __('Background Image', 'cleancut'),
		     'section'  => 'showcase',
		     'settings' => 'showcase_image',
		     'priority' => 1,
		 )));

		 // Height Setting
		$wp_customize->add_setting( 'showcase_height', array(
			'default'              => _x(700, 'cleancut'),
			'type'                 => 'theme_mod'
		));

		// Height Control
		$wp_customize->add_control( 'showcase_height', array(
			'label'    => __('Showcase Height', 'cleancut'),
			'section'  => 'showcase',
			'priority' => 2,
		));

		// Heading Setting
		$wp_customize->add_setting( 'showcase_heading', array(
			'default'              => _x('CleanCut Theme', 'cleancut'),
			'type'                 => 'theme_mod'
		));

		// Heading Control
		$wp_customize->add_control( 'showcase_heading', array(
			'label'    => __('Heading', 'cleancut'),
			'section'  => 'showcase',
			'priority' => 3,
		));

		// Text Setting
		$wp_customize->add_setting( 'showcase_text', array(
			'default'              => _x('Custom Wordpress Theme By You', 'cleancut'),
			'type'                 => 'theme_mod'
		));

		// Text Control
		$wp_customize->add_control( 'showcase_text', array(
			'label'    => __('Text', 'cleancut'),
			'section'  => 'showcase',
			'priority' => 4,
		));


		// Social Section
		 $wp_customize->add_section('social', array(
		     'title'          => __('Social', 'cleancut'),
		     'description'    => sprintf( __('Social media urls', 'cleancut')
		     ),
		     'priority'       =>140,
		 ));

		 // Facebook URL Setting
		 $wp_customize->add_setting('facebook_url', array(
		   'default'              => _x('http://www.facebook.com', 'cleancut'),
		   'type'                 => 'theme_mod'
		 ));

		 // Facebook URL Control
		 $wp_customize->add_control( 'facebook_url', array(
		   'label'    => __('Facebook URL', 'cleancut'),
		   'section'  => 'social',
		   'priority' => 1,
		 ));

		 // Twitter URL Setting
		$wp_customize->add_setting('twitter_url', array(
		'default'              => _x('http://www.twitter.com', 'cleancut'),
		'type'                 => 'theme_mod'
		));

		// Twitter URL Control
		$wp_customize->add_control( 'twitter_url', array(
		'label'    => __('Twitter URL', 'cleancut'),
		'section'  => 'social',
		'priority' =>2,
		));

		// Linkedin URL Setting
		 $wp_customize->add_setting('linkedin_url', array(
		   'default'              => _x('http://www.linkedin.com', 'cleancut'),
		   'type'                 => 'theme_mod'
		 ));

		 // Linkedin URL Control
		 $wp_customize->add_control( 'linkedin_url', array(
		   'label'    => __('LinkedIn URL', 'cleancut'),
		   'section'  => 'social',
		   'priority' =>2,
		 ));

	}

	add_action('customize_register','cleancut_customize_register');