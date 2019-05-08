<?php get_header(); ?>

<form class="ink-form">
    <div class="ink-grid">
        <div class="panel">
            <div class="control-group append-button">
                <div class="control all-100">
                    <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="text" name="s" placeholder="Search news...">
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="ink-grid vertical-space">
    <div class="panel">
      <h2>
        Search Results
      </h2>
        <div class="column-group">
            <div class="all-70 post">
              <ul class="unstyled">
                <?php while(have_posts()) : the_post(); ?>
                  <li class="column-group half-gutters">
                            <div class="all-40 small-50 tiny-50">
                                <?php the_post_thumbnail('news-popular'); ?>
                            </div>
                            <div class="all-60 small-50 tiny-50">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php comments_number('No Responses', '1 Response', '% Responses'); ?>
                                </h4>
                                <?php the_excerpt(); ?>
                            </div>
                        </li>
                <?php endwhile; ?>
            </ul>
            </div>
            <div class="all-30">
                <div class="sidebar">
                    <?php if(is_active_sidebar('sidebar')) : ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>