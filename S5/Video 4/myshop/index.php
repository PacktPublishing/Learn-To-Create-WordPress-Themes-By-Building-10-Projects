<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/foundation.css">
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="row">
      <div class="large-6 columns">
        <?php
          if(function_exists('the_custom_logo')){
            the_custom_logo();
          }
        ?>
      </div>
      <div class="large-6 columns">
        <?php wp_nav_menu(array(
          'theme_location' => 'primary',
          'container_class' => 'menu simple main-nav'
          )); 
        ?>
      </div>
    </header>

    <?php if(is_active_sidebar('showcase')) : ?>
    <div class="row showcase">
      <div class="large-12 columns">
        <div class="callout secondary">
         <?php dynamic_sidebar('showcase'); ?>
        </div>
      </div>
    </div>
    <?php endif; ?>

    <div class="row">
      <div class="large-8 medium-8 columns">
        <div class="products">
          <div class="large-4 medium-4 small-12 columns product end">
            <h3>Blue Shirt</h3>
            <h4>$9.99</h4>
            <img src="./img/shirt_blue_white.jpg">
            <button class="button">Details</button>
          </div>
          <div class="large-4 medium-4 small-12 columns product end">
            <h3>Red Shirt</h3>
            <h4>$19.99</h4>
            <img src="./img/shirt_red.jpg">
            <button class="button">Details</button>
          </div>
          <div class="large-4 medium-4 small-12 columns product end">
            <h3>Grey Shirt</h3>
            <h4>$11.99</h4>
            <img src="./img/shirt_grey.jpg">
            <button class="button">Details</button>
          </div>
          <div class="large-4 medium-4 small-12 columns product end">
            <h3>Orange Shirt</h3>
            <h4>$9.99</h4>
            <img src="./img/shirt_orange.jpg">
            <button class="button">Details</button>
          </div>
          <div class="large-4 medium-4 small-12 columns product end">
            <h3>Black Shirt</h3>
            <h4>$9.99</h4>
            <img src="./img/shirt_black.jpg">
            <button class="button">Details</button>
          </div>
        </div>
      </div>

      <div class="large-4 medium-4 columns">
       <div class="callout">
          <h3>Categories</h3>
          <ul class="menu vertical">
            <li><a href="#">Shirts</a></li>
            <li><a href="#">Pants</a></li>
            <li><a href="#">Hats</a></li>
            <li><a href="#">Shoes</a></li>
          </ul>
        </div>
        <br>
        <div class="callout">
          <h5>Sidebar heading</h5>
          <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
          <a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>
        </div>
      </div>
    </div>

    <footer>
    <p>&copy; 2016, MyShop</p>
    </footer>

    <?php wp_footer(); ?>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
