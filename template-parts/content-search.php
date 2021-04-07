<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Collections_Up_Close
 */

?>

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
