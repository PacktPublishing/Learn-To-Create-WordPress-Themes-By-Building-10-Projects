
<?php get_header(); ?>
	<div class="container index">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Blog Posts</h3>
					</div>
					<div class="panel-body">
						<?php if(have_posts()): ?>
							<?php while(have_posts()) : the_post(); ?>
								<div class="row">
								<div class="col-md-3">
								IMAGE HERE
								</div>
								<div class="col-md-9">
									<h2><?php echo the_title(); ?></h2>
								</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<?php if(is_active_sidebar('sidebar')) : ?>
					<?php dynamic_sidebar('sidebar'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
	