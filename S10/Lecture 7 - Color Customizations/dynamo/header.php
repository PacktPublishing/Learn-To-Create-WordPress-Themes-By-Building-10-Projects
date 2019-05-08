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
	<?php if(get_theme_mod('preset', 'dark') == 'dark') : ?>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/ui-darkness/jquery-ui.min.css">
	<?php else : ?>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<?php endif; ?>
  <?php wp_head(); ?>
  <style>
  	<?php if(get_theme_mod('preset', 'dark') == 'dark') : ?>
  		body{background:#232323; color: #fff;}
  		.main-nav{background:#333;color:#fff;}
  		.main-nav a{color:#fff;}
  		.caption{background:#333;color:#fff;}
  		.post-wrap{border:#666 1px solid;}
  		.button{background:#333;color:#fff;}
  		.post{border-bottom:1px #333 solid;}
  		footer{background:#333;color:#fff;}
  	<?php else : ?>
  		body{background:#fff; color: #333;}
  		.main-nav{background:#f4f4f4;color:#333;}
  		.main-nav a{color:#333;}
  		.caption{background:#f4f4f4;color:#333;}
  		.post-wrap{border:#ccc 1px solid;}
  		.button{background:#f4f4f4;color:#333;}
  		.post{border-bottom:1px #ccc solid;}
  		footer{background:#f4f4f4;color:#333;}
  	<?php endif; ?>

  	a{color:<?php echo get_theme_mod('color', '#f9992b'); ?>}
  	.main-nav a:hover{background:<?php echo get_theme_mod('color', '#f9992b'); ?>;}
  	.button:hover{background:<?php echo get_theme_mod('color', '#f9992b'); ?>;}
  	.bar{background:<?php echo get_theme_mod('color', '#f9992b'); ?>;}
  	.meta{border-bottom: <?php echo get_theme_mod('color', '#f9992b'); ?> 4px double;}

  	.current_page_item a{background:<?php echo get_theme_mod('color', '#f9992b'); ?>;}

  	.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active{
        border-color:<?php echo get_theme_mod('color','#f9992b'); ?>;
        background:<?php echo get_theme_mod('color','#f9992b'); ?>;
      }

  </style>
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
