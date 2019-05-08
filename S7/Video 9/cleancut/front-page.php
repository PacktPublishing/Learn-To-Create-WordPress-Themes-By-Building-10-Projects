<?php get_header(); ?>
    <section class="row showcase animated fadeIn">
        <div class="container">
            <div class="col-md-12">
                <div class="showcase-content">
                    <h1><?php echo get_theme_mod('showcase_heading', 'CleanCut Theme'); ?></h1>
                    <p class="lead"><?php echo get_theme_mod('showcase_text', 'A Wordpress Theme By you'); ?></p>

                    <?php if(get_theme_mod('facebook_url', 'http://facebook.com') != '') : ?>
                    <a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('facebook_url','http://facebook.com'); ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
                    <?php endif; ?>
                    
                    <?php if(get_theme_mod('twitter_url', 'http://twitter.com') != '') : ?>
                    <a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('twitter_url','http://twitter.com'); ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
                    <?php endif; ?>

                    <?php if(get_theme_mod('linkedin_url', 'http://linkedin.com') != '') : ?>
                    <a class="btn btn-default btn-lg" href="<?php echo get_theme_mod('facebook_url','http://linkedin.com'); ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i> Linkedin</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php 
        $latest_blog_posts = new WP_Query(array(
            'posts_per_page'    => 3,
            'tax_query' => array(
                array(
                    'taxonomy'  => 'post_format',
                    'field'     => 'slug',
                    'terms'     => array(
                        'post-format-aside',
                        'post-format-gallery'
                    ),
                    'operator'  => 'NOT IN'
                )
            )
        ));
    ?>

    <?php
        $i = 0; // Counter
        $section = 'section-a'; // Section Class
    ?>

    <?php if($latest_blog_posts->have_posts()) : while($latest_blog_posts->have_posts()) : $latest_blog_posts->the_post(); ?>

        <?php
            $i++;
            if($i % 2 != 0){
                // Odd Post
                $section_class = 'section-a';
                $left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
                $right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
                $img_class = 'img-circle img-responsive animated fadeInRight';
            } else {
                // Even Post
                $section_class = 'section-b';
                  $left_class = 'col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 animated fadeInRight';
                  $right_class = 'col-lg-5 col-sm-pull-6  col-sm-6';
                  $img_class='img-responsive img-circle animated fadeInLeft';
                    }
        ?>
        <div class="<?php echo $section_class; ?>">
            <div class="container">
                <div class="row">
                    <div class="<?php echo $left_class; ?>">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading"><?php the_title(); ?>:</h2>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                    </div>
                    <div class="<?php echo $right_class; ?>">
                        <?php the_post_thumbnail('full', array(
                            'class' => $img_class
                        )); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>


<?php get_footer(); ?>