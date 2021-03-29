<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Collections_Up_Close
 */

get_header();
?>


	<!-- Hero Section  -->
	<div class="hero">
	  <img src="<?php echo get_bloginfo('template_url') ?>/images/hero_logo.jpg" class="hero-logo">
	  </div>

<!-- Recent Posts  -->
	<div class="recent-posts-title">
		<h2>
		 #<?php echo single_tag_title( '', false ); ?>
		</h2>
	</div>


	<main id="primary" class="site-main">
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


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
