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

    <div class="section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Lorem ipsum dolor sit:</h2>
                    <p class="lead">Aliquam nec odio quis sapien volutpat imperdiet. Sed sed semper enim, eu viverra nibh. Fusce est velit, egestas in velit sit amet</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive img-circle animated fadeInRight" src="img/pic1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 animated fadeInRight">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Sed in justo odio</h2>
                    <p class="lead">Cras gravida sit amet ipsum imperdiet viverra. Maecenas convallis erat volutpat risus posuere, vel dignissim risus bibendum. Suspendisse aliquam!</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive img-circle animated fadeInLeft" src="img/pic2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 animated fadeInLeft">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Mauris sed auctor eros</h2>
                    <p class="lead">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin quis ante facilisis velit faucibus dignissim. Praesent in cursus arcu</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive img-circle animated fadeInRight" src="img/pic3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>