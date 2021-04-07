<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Collections_Up_Close
 */

get_header();
?>

	<main id="primary" class="site-main">

		<!-- Hero Section  -->
		<div class="hero">
		  <img src="<?php echo get_bloginfo('template_url') ?>/images/hero_logo.jpg" class="hero-logo">
		  </div>



		<?php if ( have_posts() ) : ?>
			<div class="recent-posts-title">
		 	 <h2>
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Results for: %s', 'collections-up-close' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h2>
			</div>
			<div class="row recent-posts">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
			?> </div>

			<div class="view-more-posts">
				<h3><?php next_posts_link('View More','') ?></h3>
			</div> <?php


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
