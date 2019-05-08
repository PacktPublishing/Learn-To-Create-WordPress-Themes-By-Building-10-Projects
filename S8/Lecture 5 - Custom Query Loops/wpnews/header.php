<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!-- Place favicon.ico and apple-touch-icon(s) here  -->

        <link rel="shortcut icon" href="http://cdn.ink.sapo.pt/3.1.10/img/favicon.ico">
        <link rel="apple-touch-icon" href="http://cdn.ink.sapo.pt/3.1.10/img/touch-icon-iphone.png">
        <link rel="apple-touch-icon" sizes="76x76" href="http://cdn.ink.sapo.pt/3.1.10/img/touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="http://cdn.ink.sapo.pt/3.1.10/img/touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="http://cdn.ink.sapo.pt/3.1.10/img/touch-icon-ipad-retina.png">
        <link rel="apple-touch-startup-image" href="http://cdn.ink.sapo.pt/3.1.10/img/splash.320x460.png" media="screen and (min-device-width: 200px) and (max-device-width: 320px) and (orientation:portrait)">
        <link rel="apple-touch-startup-image" href="http://cdn.ink.sapo.pt/3.1.10/img/splash.768x1004.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
        <link rel="apple-touch-startup-image" href="http://cdn.ink.sapo.pt/3.1.10/img/splash.1024x748.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">

        <!-- load Ink's css from the cdn -->
        <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


        <!-- load Ink's javascript files from the cdn -->
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/holder.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/ink-all.min.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/autoload.js"></script>

        <style>

            body {
                background: #ededed;
            }

            .panel {
                border-radius: 2px;
                -webkit-box-shadow: #dddddd 0 1px 1px 0;
                -moz-box-shadow: #dddddd 0 1px 1px 0;
                box-shadow: #dddddd 0 1px 1px 0;
                padding: 1em;
                border: 1px solid #BBB;
                background-color: #FFF;
            }

        </style>

    </head>
<body>

<header class="ink-grid">
    <div class="vertical-space">
        <div class="panel">
            <h1><?php bloginfo('name'); ?> <small><?php bloginfo('description'); ?></small></h1>
            <nav class="ink-navigation">
                <?php wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'menu_class'        => 'menu horizontal black'
                )); ?>
            </nav>
        </div>
    </div>
</header>