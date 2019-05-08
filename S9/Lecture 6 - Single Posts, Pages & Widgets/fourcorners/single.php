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
      <article class="single-blog-post">
      	<?php if(has_post_thumbnail()) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
      <?php endif; ?>
          <div class="meta">
          <ul>
            <li><i class="fa fa-user"></i>
              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                      <?php the_author(); ?>
                  </a>
            </li>
            <li><i class="fa fa-calendar"></i> 
              <?php the_time('F j, Y g:i a'); ?>
            </li>
            <li><i class="fa fa-folder"></i> 
              <?php
                    $categories = get_the_category();
                    $separator = ", ";
                    $output = '';

                    if($categories){
                      foreach($categories as $category){
                        $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name .'</a>'. $separator;
                        //$output .= $category->cat_name . $separator;

                      }
                    }
                    echo trim($output, $separator);
                  ?>
            </li>
          </ul>
        </div>
            
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>

            <br>

            <?php comments_template(); ?>
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