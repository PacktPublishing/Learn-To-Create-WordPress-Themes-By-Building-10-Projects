<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hover.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="top-bar">
      <div class="row">
        <div class="large-3 columns social">
          <?php if(get_theme_mod('facebook_url', 'http://www.facebook.com') != '') : ?>
            <a href="<?php echo get_theme_mod('facebook_url', 'http://www.facebook.com'); ?>"><i class="fa fa-facebook"></i></a>
          <?php endif; ?>
          <?php if(get_theme_mod('twitter_url', 'http://www.twitter.com') != '') : ?>
            <a href="<?php echo get_theme_mod('twitter_url', 'http://www.twitter.com'); ?>"><i class="fa fa-twitter"></i></a>
          <?php endif; ?>
          <?php if(get_theme_mod('linkedin_url', 'http://www.linkedin.com') != '') : ?>
            <a href="<?php echo get_theme_mod('linkedin_url', 'http://www.linkedin.com'); ?>"><i class="fa fa-linkedin"></i></a>
          <?php endif; ?>
          <?php if(get_theme_mod('googleplus_url', 'http://www.linkedin.com') != '') : ?>
            <a href="<?php echo get_theme_mod('googleplus_url', 'http://www.googleplus.com'); ?>"><i class="fa fa-google-plus"></i></a>
            <?php endif; ?>
          <?php if(get_theme_mod('youtube_url', 'http://www.youtube.com') != '') : ?>
            <a href="<?php echo get_theme_mod('youtube_url', 'http://www.youtube.com'); ?>"><i class="fa fa-youtube"></i></a>
          <?php endif; ?>
        </div>
        <div class="large-3 columns">
          <span><i class="fa fa-phone"></i> Phone: <?php echo get_theme_mod('phone', '1 800 555-5555'); ?></span>
        </div>
        <div class="large-3 columns">
          <span><i class="fa fa-envelope"></i> Email: <?php echo get_theme_mod('email', 'something@something.com'); ?></span>
        </div>
        <div class="large-3 columns">
        <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="text" name="s" placeholder="Search..."> <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        </div>
      </div>
    </div>

    <header>
      <div class="row">
        <div class="large-4 columns">
          <a href="index.html"><h3><?php bloginfo('name'); ?></h3></a>
        </div>
        <div class="large-8 columns">
          <?php 
          wp_nav_menu(array(
            'theme_location'  => 'primary',
            'menu_class'      => 'menu'
          )); 
          ?>
        </div>
      </div>
    </header>