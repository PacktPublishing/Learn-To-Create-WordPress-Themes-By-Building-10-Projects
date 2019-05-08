<?php get_header(); ?>
	
  <section class="bar">
      <div class="wrap wider">
        <div class="grid">
          <h1>Blog</h1>
        </div>
      </div>
    </section>

    <section>
      <div class="wrap wider">
        <div class="grid">
          <div class="post-wrap">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>
                <article class="post">
                  <?php if(has_post_thumbnail()) : ?>
                  <div class="unit one-third post-thumb">
                    <?php the_post_thumbnail(); ?>
                  </div>
                <?php endif; ?>

                <?php if(has_post_thumbnail()) : ?>
                  <div class="unit two-thirds">
                <?php else: ?>
                  <div>
                <?php endif; ?>
                    <h3><?php the_title(); ?></h3>
                    <div class="meta">
                        Posted on
                        <?php the_time('F j, Y g:i a'); ?>
                        by
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                          <?php the_author(); ?>
                      </a>
                      </div>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                  </div>
                </article>
              <?php endwhile; ?>
          <?php endif; ?>
            
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>