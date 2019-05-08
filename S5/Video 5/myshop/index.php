<?php get_header(); ?>
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
        <?php if(is_active_sidebar('sidebar')) : ?>
          <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>
      </div>
    </div>

    <?php get_footer(); ?>
