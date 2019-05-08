<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
	  <section class="title-section">
	      <p class="welcome-text">Welcome To</p>
	      <h1><?php the_title(); ?></h1>
	      <p class="sub-text"><?php the_excerpt(); ?></p>
	    </section>

	    <div class="row">
	 <?php if(is_active_sidebar('sidebar')) : ?>
      <div class="large-8 columns">
     <?php else : ?>
     	<div class="large-12 columns">
     <?php endif; ?>
      <article class="single-page">
          
            <?php the_content(); ?>

        </article>
      </div>

      <?php if(is_active_sidebar('sidebar')) : ?>
	      <div class="large-4 columns">
	        <div class="well">
	      		<?php dynamic_sidebar('sidebar'); ?>
	        </div>
	      </div>
  	<?php endif; ?>
    </div>

	<?php endwhile; ?>
 <?php get_footer(); ?>