<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
		<section class="row title-bar">
	      <div class="container">
	        <div class="col-md-6">
	            <h1><?php the_title(); ?></h1>
	        </div>
	        <div class="col-md-6">
	        	<div class="sub-nav">
		            <ul>
		              <?php
		              	$args = array(
		              		'child_of'	=> get_top_parent(),
		              		'title_li'	=> ''
		              	);
		              ?>

		              <?php wp_list_pages($args); ?>
		            </ul>
		          </div>
	        </div>
	      </div>
	    </section>

	    <section class="row page">
	      <div class="container">
	        <div class="col-md-8">
	          <div class="post-thumbnail">
	            <?php the_post_thumbnail(); ?>
	          </div>
	          <?php the_content(); ?>
	        </div>
	        <div class="col-md-4">
	          	<?php if(is_active_sidebar('sidebar')) : ?>
              		<?php dynamic_sidebar('sidebar'); ?>
            	<?php endif; ?>
	        </div>
	      </div>
	    </section>
	<?php endwhile; ?>
<?php get_footer(); ?>