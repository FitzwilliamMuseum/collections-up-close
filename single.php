<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Collections_Up_Close
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="post-bg">

	<div class="post-card">
		<div class="post-header-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="post-text">
		<div class="post-info">
			<h5 class="post-title"><?php echo the_title() ?></h5>
			<h6 class="post-subtitle"><?php $post_author_id = get_post_field( 'post_author', $post_id ); the_author_meta('display_name', $post_author_id); ?></h6>
			<h6 class="post-subtitle"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></h6>
			<h6 class="post-subtitle"><?php the_category( ', ' ); ?></h6>
			<h6 class="post-tags"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?></h6>
		</div>
		<div class="post-body">
			<?php the_content(); ?>
			<div class="post-end-info"><br />
				<h6 class="post-subtitle"><?php echo the_author_link(); ?></h6>
				<h6 class="post-subtitle"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></h6>
				<h6 class="post-subtitle"><?php the_category( ', ' ); ?></h6>
			</div>
		</div>
	</div>
 </div>

</div>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
