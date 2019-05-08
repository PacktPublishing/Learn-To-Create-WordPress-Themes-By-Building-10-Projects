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
