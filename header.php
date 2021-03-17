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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'collections-up-close' ); ?></a>


	<header>
	 <div class="title">


		 <a href="index.html"><h1 <?php if(is_front_page()) echo 'id="index-header"' ?>>Collections Up Close</h1></a>

		</div>
		<div>
	 <nav>
		<a href="index.html" class="nav-highlighted">BLOG</a>
		<a href="/about.html">ABOUT</a>
		<a href="#">SEARCH</a>
		 <a href="https://beta.fitz.ms"><img src="<?php echo get_bloginfo('template_url') ?>/images/fitz_cambridge_logo_red_small_fill_80x80.jpg"></a>
	 </nav>
			 </div>
	</header>
