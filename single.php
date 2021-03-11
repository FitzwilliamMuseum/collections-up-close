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

		<!-- <?php
		// while ( have_posts() ) :
		// 	the_post();
		//
		// 	get_template_part( 'template-parts/content', get_post_type() );
		//
		// 	the_post_navigation(
		// 		array(
		// 			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'collections-up-close' ) . '</span> <span class="nav-title">%title</span>',
		// 			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'collections-up-close' ) . '</span> <span class="nav-title">%title</span>',
		// 		)
		//	);

			// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;
		//
		// endwhile; // End of the loop.
		?> -->

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
			<h6 class="post-subtitle"><?php the_category( ' ' ); ?></h6>
			<h6 class="post-tags"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?></h6>
		</div>
		<div class="post-body">
			<?php the_content(); ?>
			<div class="post-end-info"><br />
				<h6 class="post-subtitle"><?php $post_author_id = get_post_field( 'post_author', $post_id ); the_author_meta('display_name', $post_author_id); ?></h6>
				<h6 class="post-subtitle"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></h6>
				<h6 class="post-subtitle"><?php the_category( ' ' ); ?></h6>
			</div>
		</div>
	</div>
 </div>

</div>
<div class="recent-posts-title">
	<h2>
	 Related Posts
	</h2>
</div>

<!-- Post Cards  -->
<div class="row recent-posts">
	<div class="column">
		<a href="post.html">
		<div class="card">
			<div class="card-image">
				<img src="blog-1.png" class="card-image-image">
			</div>
			<div class="card-content">
				<h5 class="card-title">Being a Museum Courier, COVID Style</h5>
				<h6 class="card-subtitle">Sophie Rowe</h6>
				<h6 class="card-subtitle">September 24th 2020</h6>
				<p class="card-text">International courier trips are often seen as one of the benefits of a museum career. It’s a chance to go behind the scenes at some fantastic museums in lovely locations, and you might just squeeze in a few hours’ sightseeing somewhere exotic...</p>
				<a href="post.html" class="card-link">Continue reading...</a>
			</div>
		</div>
			</a>
	</div>

<div class="column">
		<div class="card">
			<div class="card-image">
				<img src="blog-2.jpg" class="card-image-image">
			</div>
			<div class="card-content">
				<h5 class="card-title">The Shrine Project</h5>
				<h6 class="card-subtitle">Louise Jenkins</h6>
				<h6 class="card-subtitle">June 15th 2020</h6>
				<p class="card-text">Discussion about replacing the old, worn plinth beneath the Egyptian Shrine in the Gayer Anderson Gallery began in 2017. We wanted to bring it into line with the other two plinths supporting the largest pieces of sculpture in this gallery...</p>
				<a href="#" class="card-link">Continue reading...</a>
			</div>
		</div>
	</div>

<div class="column">
		<div class="card">
			<div class="card-image">
				<img src="blog-3.jpg" class="card-image-image">
			</div>
			<div class="card-content">
				<h5 class="card-title">Regarding Dürer, Again: Creases, Tears and Repairs</h5>
				<h6 class="card-subtitle">Harry Metcalf</h6>
				<h6 class="card-subtitle">April 29th 2020</h6>
				<p class="card-text">There are many benefits of being able to compare a number of impressions of the same print. The latest batch I have been working on contains two impressions of the print St Jerome in Penitence in the Wilderness, which demonstrate this point...</p>
				<a href="#" class="card-link">Continue reading...</a>
			</div>
		</div>
	</div>

<div class="column">
		<div class="card">
			<div class="card-image">
				<img src="blog-4.jpg" class="card-image-image">
			</div>
			<div class="card-content">
				<h5 class="card-title">Emergency Planning</h5>
				<h6 class="card-subtitle">Ian Channell</h6>
				<h6 class="card-subtitle">March 5th 2020</h6>
				<p class="card-text">On 6th January, I started in an exciting new role as an Institute of Conservation (ICON) Preventive Conservation Intern at the Fitzwilliam Museum. I quickly became involved with the regular environmental monitoring in the Museum...</p>
				<a href="#" class="card-link">Continue reading...</a>
			</div>
		</div>
	</div>

<div class="column">
		<div class="card">
			<div class="card-image">
				<img src="blog-5.jpg" class="card-image-image">
			</div>
			<div class="card-content">
				<h5 class="card-title">Cataloguing and Digitising the Jim Murrell Archive</h5>
				<h6 class="card-subtitle">Lindsey Cox</h6>
				<h6 class="card-subtitle">January 21st 2020</h6>
				<p class="card-text">For anyone working on the topic of early modern portrait miniatures, 2019 was an exciting year. In Cambridge, one particularly thrilling project was the digitisation of the hitherto largely unexplored archive of Jim Murrell...</p>
				<a href="#" class="card-link">Continue reading...</a>
			</div>
		</div>
	</div>

<div class="column">
		<div class="card">
			<div class="card-image">
				<img src="blog-6.jpg" class="card-image-image">
			</div>
			<div class="card-content">
				<h5 class="card-title">A Close Look at a Small English Manuscript</h5>
				<h6 class="card-subtitle">Mila Crippa</h6>
				<h6 class="card-subtitle">December 5th 2019</h6>
				<p class="card-text">The Fitzwilliam Museum holds an exceptional collection of manuscripts, representing all major schools of European illumination from the ninth to the sixteenth century. In the last decade, hundreds of volumes have benefited from interdisciplinary study...</p>
				<a href="#" class="card-link">Continue reading...</a>
			</div>
		</div>
	</div>
</div>

	<div class="view-more-posts">
	<h3>
	 View More
	</h3>
</div>

<!-- Tag Cloud  -->
<div class="tag-cloud-section">
<div class="tag-cloud-title">
	<h2>Explore the Blog</h2>
</div>
<div class="tag-cloud">
	<p><i>
	 Tag cloud will go here
	</i></p>
</div>
</div>


<!-- Categories   -->
<div class="recent-posts-title">
	<h2>
	 Categories
	</h2>
</div>

<!-- Post Cards  -->
<div class="row categories">
	<div class="column">

		<div class="card">
			<a>
			<div class="card-image">
				<img src="category-1.jpg" class="card-image-image">
			</div>
			<div class="category-card-content">
				<h3 class="category-title">Antiquities</h3>
			</div>
				</a>
		</div>

	</div>

	<div class="column">
		<div class="card">
			<a>
			<div class="card-image">
				<img src="category-2.jpg" class="card-image-image">
			</div>
			<div class="category-card-content">
				<h3 class="category-title">Applied Arts</h3>
			</div>
		</a>
		</div>
	</div>

	<div class="column">
		<div class="card">
			<a>
			<div class="card-image">
				<img src="category-3.jpg" class="card-image-image">
			</div>
			<div class="category-card-content">
				<h3 class="category-title">Art on Paper</h3>
			</div>
		</a>
		</div>
	</div>

	<div class="column">
		<div class="card">
			<a>
			<div class="card-image">
				<img src="category-4.jpg" class="card-image-image">
			</div>
			<div class="category-card-content">
				<h3 class="category-title">Collections Care</h3>
			</div>
		</a>
		</div>
	</div>

	<div class="column">
		<div class="card">
			<a>
			<div class="card-image">
				<img src="category-5.jpg" class="card-image-image">
			</div>
			<div class="category-card-content">
				<h3 class="category-title">Equipment</h3>
			</div>
		</a>
		</div>
	</div>

	<div class="column">
		<div class="card">
			<a>
			<div class="card-image">
				<img src="category-6.jpg" class="card-image-image">
			</div>
			<div class="category-card-content">
				<h3 class="category-title">Manuscripts & Printed Books</h3>
			</div>
		</a>
		</div>
	</div>

	<div class="column">
		<div class="card">
			<a>
			<div class="card-image">
				<img src="category-7.jpg" class="card-image-image">
			</div>
			<div class="category-card-content">
				<h3 class="category-title">Museum Stories</h3>
			</div>
		</a>
		</div>
	</div>

	<div class="column">
	 <div class="card">
			<a>
			<div class="card-image">
				<img src="category-8.jpg" class="card-image-image">
			</div>
			<div class="category-card-content">
				<h3 class="category-title">Paintings</h3>
			</div>
		</a>
		</div>
	</div>

		<div class="column">
		<div class="card">
			<a>
			<div class="card-image">
				<img src="category-9.jpg" class="card-image-image">
			</div>
			<div class="category-card-content">
				<h3 class="category-title">Scientific Research</h3>
			</div>
		</a>
		</div>
	</div>

</div>

	</main><!-- #main -->

<?php
get_footer();
