<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<h1>
				<a href="index.html">
					<?php bloginfo('name'); ?>
				</a>
				<small><?php bloginfo('description'); ?></small>
			</h1>
			<div class="h_right">
				<form method="get" action="<?php esc_url(home_url('/')); ?>">
					<input type="text" name="s" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<nav class="nav main-nav">
		<div class="container">
			<?php
				$args = array(
					'theme_location' => 'primary'
				);
			?>

			<?php wp_nav_menu($args); ?>
		</div>
	</nav>

	<div class="container content">
		<div class="main block">
			<article class="post">
				<h2>Blog Post 1</h2>
				<p class="meta">Posted at 11:00 on May 9 by admin</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum, ante sit amet ullamcorper pretium, nisi nisi luctus libero, vitae sagittis neque urna a nisi. Pellentesque sit amet scelerisque magna. Nunc sodales rutrum lorem et imperdiet. Nunc tincidunt arcu ut velit varius egestas. Praesent vestibulum sagittis mauris, eget condimentum risus ultrices non. Etiam porttitor odio in purus posuere, a venenatis purus pretium. Integer quis urna scelerisque, vehicula purus eu, auctor metus. Suspendisse auctor purus ac ligula volutpat posuere. Proin suscipit mauris nec mollis bibendum. Curabitur leo est, viverra et pulvinar nec, tincidunt eu justo. Donec sodales, tellus vel vulputate varius, dolor ligula commodo risus, sit amet consequat sem nulla quis quam. Nam commodo, ante sit amet dictum faucibus, nisl tortor vestibulum tellus, ut placerat justo leo et lorem. Sed arcu tellus, sollicitudin in erat vestibulum, mattis ornare ipsum. Aliquam nec urna imperdiet, consequat mauris eu, tempus enim. Fusce porta, urna eget tempus malesuada, tortor ligula fermentum turpis, ut fringilla lacus nunc sed velit. Pellentesque finibus congue felis, in congue lacus malesuada eget.
</p>
<p>
Duis tellus risus, convallis ac mi in, varius pharetra lacus. Nunc bibendum vel urna at fringilla. Morbi varius, urna vel varius posuere, libero velit ultricies dui, nec convallis urna turpis et metus. Pellentesque viverra rhoncus odio, quis dignissim nisl bibendum ac. Etiam ipsum magna, viverra auctor metus vestibulum, viverra accumsan odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ornare auctor mattis. Donec vitae posuere ipsum, vel bibendum ex. Pellentesque gravida sodales nisl, sit amet sodales lorem efficitur quis. Donec non turpis in leo feugiat elementum eget eget ligul</p>

				<a class="button" href="#">Read More</a>
			</article> 

			<article class="post">
				<h2>Blog Post 1</h2>
				<p class="meta">Posted at 11:00 on May 9 by admin</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum, ante sit amet ullamcorper pretium, nisi nisi luctus libero, vitae sagittis neque urna a nisi. Pellentesque sit amet scelerisque magna. Nunc sodales rutrum lorem et imperdiet. Nunc tincidunt arcu ut velit varius egestas. Praesent vestibulum sagittis mauris, eget condimentum risus ultrices non. Etiam porttitor odio in purus posuere, a venenatis purus pretium. Integer quis urna scelerisque, vehicula purus eu, auctor metus. Suspendisse auctor purus ac ligula volutpat posuere. Proin suscipit mauris nec mollis bibendum. Curabitur leo est, viverra et pulvinar nec, tincidunt eu justo. Donec sodales, tellus vel vulputate varius, dolor ligula commodo risus, sit amet consequat sem nulla quis quam. Nam commodo, ante sit amet dictum faucibus, nisl tortor vestibulum tellus, ut placerat justo leo et lorem. Sed arcu tellus, sollicitudin in erat vestibulum, mattis ornare ipsum. Aliquam nec urna imperdiet, consequat mauris eu, tempus enim. Fusce porta, urna eget tempus malesuada, tortor ligula fermentum turpis, ut fringilla lacus nunc sed velit. Pellentesque finibus congue felis, in congue lacus malesuada eget.
</p>
<p>
Duis tellus risus, convallis ac mi in, varius pharetra lacus. Nunc bibendum vel urna at fringilla. Morbi varius, urna vel varius posuere, libero velit ultricies dui, nec convallis urna turpis et metus. Pellentesque viverra rhoncus odio, quis dignissim nisl bibendum ac. Etiam ipsum magna, viverra auctor metus vestibulum, viverra accumsan odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ornare auctor mattis. Donec vitae posuere ipsum, vel bibendum ex. Pellentesque gravida sodales nisl, sit amet sodales lorem efficitur quis. Donec non turpis in leo feugiat elementum eget eget ligul</p>

				<a class="button" href="#">Read More</a>
			</article> 

			<article class="post">
				<h2>Blog Post 1</h2>
				<p class="meta">Posted at 11:00 on May 9 by admin</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum, ante sit amet ullamcorper pretium, nisi nisi luctus libero, vitae sagittis neque urna a nisi. Pellentesque sit amet scelerisque magna. Nunc sodales rutrum lorem et imperdiet. Nunc tincidunt arcu ut velit varius egestas. Praesent vestibulum sagittis mauris, eget condimentum risus ultrices non. Etiam porttitor odio in purus posuere, a venenatis purus pretium. Integer quis urna scelerisque, vehicula purus eu, auctor metus. Suspendisse auctor purus ac ligula volutpat posuere. Proin suscipit mauris nec mollis bibendum. Curabitur leo est, viverra et pulvinar nec, tincidunt eu justo. Donec sodales, tellus vel vulputate varius, dolor ligula commodo risus, sit amet consequat sem nulla quis quam. Nam commodo, ante sit amet dictum faucibus, nisl tortor vestibulum tellus, ut placerat justo leo et lorem. Sed arcu tellus, sollicitudin in erat vestibulum, mattis ornare ipsum. Aliquam nec urna imperdiet, consequat mauris eu, tempus enim. Fusce porta, urna eget tempus malesuada, tortor ligula fermentum turpis, ut fringilla lacus nunc sed velit. Pellentesque finibus congue felis, in congue lacus malesuada eget.
</p>
<p>
Duis tellus risus, convallis ac mi in, varius pharetra lacus. Nunc bibendum vel urna at fringilla. Morbi varius, urna vel varius posuere, libero velit ultricies dui, nec convallis urna turpis et metus. Pellentesque viverra rhoncus odio, quis dignissim nisl bibendum ac. Etiam ipsum magna, viverra auctor metus vestibulum, viverra accumsan odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ornare auctor mattis. Donec vitae posuere ipsum, vel bibendum ex. Pellentesque gravida sodales nisl, sit amet sodales lorem efficitur quis. Donec non turpis in leo feugiat elementum eget eget ligul</p>

				<a class="button" href="#">Read More</a>
			</article> 
		</div>

		<div class="side">
			<div class="block">
			<h3>Sidebar Head</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus lacus sit amet orci eleifend suscipit. Quisque sit amet congue elit, sit amet dictum nisl</p>
			<a class="button">More</a>
			</div>
		</div>
	</div>

	<footer class="main-footer">
		<div class="container">
			<div class="f_left">
				<p>&copy; 2016 - Advanced WP Theme</p>
			</div>
			<div class="f_right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="#">Services</a></li>
				</ul>
			</div>

		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>