<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Collections_Up_Close
 */

get_header();
?>

	<main id="primary" class="site-main">


	<!-- Hero Section  -->
	<div class="hero">
	  <img src="<?php echo get_bloginfo('template_url') ?>/images/resized-hero-image.jpg" class="hero-logo">
	  </div>


	<!-- Recent Posts  -->
	  <div class="recent-posts-title">
	    <h2>
	   	 Recent Posts
	  	</h2>
	  </div>

		<div class="row recent-posts">
			<?php
			while(have_posts()) :  the_post();
			?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<div class="column">
	      <a href="<?php the_permalink(); ?>">
		      <div class="card">
		        <div class="card-image">
		          <?php the_post_thumbnail( 'medium_large' ); ?>
		        </div>
		        <div class="card-content">
		          <h5 class="card-title"><?php the_title(); ?></h5>
		          <h6 class="card-subtitle"><?php the_author(); ?></h6>
		          <h6 class="card-subtitle"><?php the_date(); ?></h6>
		          <?php the_excerpt(); ?>
		          <a href="<?php the_permalink(); ?>" class="card-link">Continue reading...</a>
		        </div>
		    	</div>
	      </a>
	  	</div>

			<?php
			endwhile;
			?>
			</div>

						<div class="view-more-posts">
							<h3><?php next_posts_link('View More','') ?></h3>
						</div>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
