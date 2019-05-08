<!doctype html>
<html <?php language_attributes(); ?>">
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
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-google-plus"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
        <div class="large-3 columns">
          <span><i class="fa fa-phone"></i> Phone: 1 800 555-5555</span>
        </div>
        <div class="large-3 columns">
          <span><i class="fa fa-envelope"></i> Email: something@something.com</span>
        </div>
        <div class="large-3 columns">
        <form>
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