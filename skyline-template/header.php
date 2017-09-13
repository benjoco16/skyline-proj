<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skyline-template
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="teCrTNj5u1OvzYOQMxcAi7MF_McQT0Mf9gRyaisgArY" />
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div id="mySidenav"  class="mobile-menu">
	<a href="javascript:void(0)" class="closebtn">&times;</a>
	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>
</div>	

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'skyline-template' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!-- Navigation -->
	    <nav id="mainNav" class="navbar navbar-default navbar-custom">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_url')?>/images/page_template/logo.png" alt="" ></a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 topmenu">
	            	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>

	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container-fluid -->
	    </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
