<?php
/**
 * Template Name: Search Page
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- Body Section -->
		<!-- About the Blog -->
		<div class="search-box">

		  <h2>
		    Search the Blog
		  </h2>
		  <br>
					 <?php get_search_form(); ?>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
