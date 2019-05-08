<?php get_header(); ?>
  <section class="title-section">
      <p class="welcome-text">Welcome To</p>
      <h1>Gallery</h1>
      <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium efficitur justo ut malesuada. Donec efficitur commodo est, sed maximus nisi pulvinar Etiam sem tortor</p>
    </section>

    <section class="gallery">
    <?php $gallery_query = new WP_Query(array('category_name' => 'gallery')); ?>
    <?php while($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
      
      <div class="large-4 small-12 columns">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('full', array('class' => 'hvr-grow')); ?>
            </a>
          </div>

    <?php endwhile; ?>
    </section>
  <?php get_footer(); ?>