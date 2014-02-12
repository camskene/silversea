<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home - Silversea Cruises</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
    <!--[if IE 8]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/pollyfills/modernizr.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/pollyfills/nwmatcher-1.2.5-min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/pollyfills/selectivizr-min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page">
        <div id="skyline">
            <div class="content">
                <p>Luxury Cruises. Lowest Fares.</p>
                <?php wp_nav_menu( array( 'theme_location' => 'skyline', 'container' => '', 'menu_class' => '', 'menu_id' => 'skyline-nav', 'items_wrap' => '<ul id="%1$s">%3$s</ul>'  ) ); ?>
            </div>
        </div>

        <header id="site-header">
            <div id="nameplate">
                <h1><a href="/">Cruise Norway &amp; Silversea Cruises</a></h1>
            </div>
            <nav id="primary-nav" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'items_wrap' => '<ul>%3$s</ul>'  ) ); ?>
            </nav>
        </header>
        <main>
            <div class="content">