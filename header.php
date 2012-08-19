<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<!-- Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header>
<div id="header">
	<div id="branding">
		<div id="blog-title"><?php if ( is_singular() ) {echo '<h1>';} else {echo '<h1>';} ?><a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a><?php if ( is_singular() ) {echo '</h1>';} else {echo '</h1>';} ?></div>
	</div>
	<div id="search">
		<?php get_search_form(); ?>
	</div>
</div>
</header>
<nav>
	<div id="navbar">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</div>
</nav>
<div id="container">
