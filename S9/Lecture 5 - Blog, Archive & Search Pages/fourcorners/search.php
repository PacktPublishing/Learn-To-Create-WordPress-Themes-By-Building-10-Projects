<?php get_header(); ?>
  <section class="title-section">
      <p class="welcome-text">Welcome To</p>
      <h1>Blog</h1>
      <p class="sub-text">
       Search Results
      </p>
    </section>

    
    <?php while(have_posts()) : the_post(); ?>
      <article class="blog-post">
      <div class="row">
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

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
      </div>
    </article>
    <?php endwhile; ?>
  <?php get_footer(); ?>