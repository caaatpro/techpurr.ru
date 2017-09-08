<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon-114x114.png">

	<?php wp_head(); // Very important WordPress core hook. If you delete this bad things WILL happen. ?>
</head>

<body <?php body_class(); ?>>

	<header id="header">
		<div id="top-bar-wrap">
			<div id="top-bar-inner" class="container clr">
				<div id="logo">
					<a href="<?php echo home_url(); ?>/" title="<?php echo get_bloginfo( 'name' ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php echo get_bloginfo( 'name' ) ?>"></a>
					<div id="logo_name">
						<h2><?php echo get_bloginfo( 'name' ); ?></h2>
						<p><?php echo get_bloginfo( 'description' ) ?></p>
					</div>
				</div><!-- /logo -->
				<div id="top-bar-right" class="clr">
					<ul id="header-social">
						<?php /* wpex_display_social();*/ // see functions/social-output.php ?>
					</ul><!-- /header-social -->
				</div><!-- #top-bar-right -->
			</div><!-- #top-bar-inner -->
		</div><!-- #top-bar-wrap -->

		<div id="navigation-wrap" class="clr fixed-scroll">
			<div id="navigation-inner" class="container">
				<nav id="navigation" class="site-navigation clr">
					<div id="responsive-toggles" class="clr">
						<span id="navigation-responsive-toggle"><i class="icon-reorder"></i><?php _e( 'Browse', 'wpex' ); ?></span>
						<span id="search-responsive-toggle"><i class="icon-search"></i><?php _e( 'Search', 'wpex' ); ?></span>
					</div><!-- #responsive-toggles -->
					<?php wp_nav_menu( array(
						'theme_location'	=> 'main',
						'menu_class'		=> 'nav-main dropdown-nav',
						'fallback_cb'		=> false
					) ); ?> 
				</nav><!-- /main-navigation -->
				<div id="header-search">
					<?php get_search_form(); ?>
				</div><!-- #header-search -->
				<div id="mobile-search">
					<?php get_search_form(); ?>
				</div><!-- #mobile-search -->
			</div><!-- /container --> 
			<div id="nav-extend-bg"></div>
		</div><!-- /navigation-wrap -->

	</header><!-- /header -->

	<div id="wrap" class="container clr">

		<?php
		// Homepage Slider & Carousel
		if ( is_front_page () && !is_paged() ) { ?>
		   <?php get_template_part( 'content', 'homepage-slider' ); ?>
			<?php if ( !wp_is_mobile() ) { ?>
				<?php get_template_part( 'content', 'homepage-carousel' ); ?>
			<?php } ?>
		<?php } ?>

		<div id="main-content" class="clr fitvids">