<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Collections_Up_Close
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'collections-up-close' ); ?></a>


	<header>
	 <div class="title">


		 <a href="<?php echo get_home_url(); ?>"><h1 <?php if(is_front_page()) echo 'id="index-header"' ?>>Collections Up Close</h1></a>

		</div>
		<div>
	 <nav>
		<a href="<?php echo get_home_url(); ?>" class="nav-highlighted">BLOG</a>
		<a href="<?php echo get_home_url(); ?>/about">ABOUT</a>
		<a href="<?php echo get_home_url(); ?>/search">SEARCH</a>
		<?php if(! is_front_page()) {
			?> <a href="https://beta.fitz.ms"><img src="<?php echo get_bloginfo('template_url') ?>/images/headerfitzlogo.png"></a>
		<?php } ?>
	 </nav>
			 </div>
	</header>
