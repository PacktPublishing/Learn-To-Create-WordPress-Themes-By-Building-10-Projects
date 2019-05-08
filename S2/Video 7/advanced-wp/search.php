<?php get_header(); ?>

<div class="container content">
		<div class="main block">
			<h1 class="page-header">
		      Search Results
		    </h1>
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<?php get_template_part('content', get_post_format()); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo apautop('Sorry, no posts were found'); ?>
			<?php endif; ?>
		</div>

		<div class="side">
			<div class="block">
			<h3>Sidebar Head</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus lacus sit amet orci eleifend suscipit. Quisque sit amet congue elit, sit amet dictum nisl</p>
			<a class="button">More</a>
			</div>
		</div>
	</div>

<?php get_footer(); ?>