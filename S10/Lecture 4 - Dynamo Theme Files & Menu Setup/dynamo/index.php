<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/unslider.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/unslider-dots.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/gridism.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery-ui.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/ui-darkness/jquery-ui.min.css">
  <?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="wrap wider">
			<div class="grid">
				<div class="unit half">
					<h1 class="logo"><?php bloginfo('name'); ?></h1>
					<p class="tagline"><?php bloginfo('description'); ?></p>
				</div>
				<div class="unit half">
					<div class="header_r">
						<form class="search">
							<input type="text" name="s" placeholder="Search...">
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>

	<nav class="main-nav">
		<div class="wrap wider">
			<div class="grid">
				<?php wp_nav_menu(array(
        'them_location' => 'primary'
        )); ?>
			</div>
		</div>
	</nav>

	<section class="showcase">
		<div class="my-slider">
			<ul>
			<li>
				<img src="img/showcase1.jpg">
				<div class="caption">
					<h2>Slide One</h2>
					<p>consectetur adipiscing elit. Lorem ipsum dolor sit amet. Suspendisse id elit aliquet, porttitor metus bibendum, finibus ligula. Nullam consequat velit lectus, nec cursus dui vestibulum sed. Vestibulum</p>
				</div>
			</li>
			<li>
				<img src="img/showcase2.jpg">
				<div class="caption">
					<h2>Slide Two</h2>
					<p>consectetur adipiscing elit. Lorem ipsum dolor sit amet. Suspendisse id elit aliquet, porttitor metus bibendum, finibus ligula. Nullam consequat velit lectus, nec cursus dui vestibulum sed. Vestibulum</p>
				</div>
			</li>
			<li>
				<img src="img/showcase3.jpg">
				<div class="caption">
					<h2>Slide Three</h2>
					<p>consectetur adipiscing elit. Lorem ipsum dolor sit amet. Suspendisse id elit aliquet, porttitor metus bibendum, finibus ligula. Nullam consequat velit lectus, nec cursus dui vestibulum sed. Vestibulum</p>
				</div>
			</li>
			</ul>
		</div>
	</section>

	<section>
      <div class="wrap wider">
        <div class="grid">
          <div id="tabs">
            <ul>
              <li><a href="#tabs-1">Nunc tincidunt</a></li>
              <li><a href="#tabs-2">Proin dolor</a></li>
              <li><a href="#tabs-3">Aenean lacinia</a></li>
            </ul>
            <div id="tabs-1">
              <h3>Heading One</h3>
              <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
            </div>
            <div id="tabs-2">
              <h3>Heading Two</h3>
              <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
            </div>
            <div id="tabs-3">
              <h3>Heading Three</h3>
              <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="wrap wider">
        <div class="grid">
          <div class="post-wrap">
            <article class="post">
              <div class="unit one-third">
                <img src="img/post1.jpg">
              </div>
              <div class="unit two-thirds">
                <h3>Post One Heading</h3>
                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales</p>
                <a href="single.html" class="button">Read More</a>
              </div>
            </article>

            <article class="post">
              <div class="unit one-third">
                <img src="img/post2.jpg">
              </div>
              <div class="unit two-thirds">
                <h3>Post Two Heading</h3>
                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales</p>
                <a href="single.html" class="button">Read More</a>
              </div>
            </article>

            <article class="post">
              <div class="unit one-third">
                <img src="img/post3.jpg">
              </div>
              <div class="unit two-thirds">
                <h3>Post Three Heading</h3>
                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales</p>
                <a href="single.html" class="button">Read More</a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <p>Copyright &copy; 2016 - Dynamo Theme</p>
    </footer>

	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/unslider-min.js"></script>

  <script>
  jQuery(document).ready(function($){
    $('.my-slider').unslider({
      arrows: {
        prev: '<a class="unslider-arrow prev"><i class="fa fa-3 fa-arrow-circle-left"></i></a>',
        next: '<a class="unslider-arrow next"><i class="fa fa-3 fa-arrow-circle-right"></i></a>'
      }
    });
  });
  </script>
  <script>
  $(function(){
    $('#tabs').tabs();
  });
  </script>
</body>
</html>