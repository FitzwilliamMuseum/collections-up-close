<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Collections_Up_Close
 */

?>
<!-- Categories   -->
  <div class="recent-posts-title">
    <h2>
   	 Categories
  	</h2>
  </div>

<!-- Post Cards  -->
  <div class="row categories">
  	<div class="column">

      <div class="category-card">
        <a href="<?php echo get_home_url(); ?>/category/antiquities">
        <div class="category-card-image">
          <img src="<?php echo get_bloginfo('template_url') ?>/images/category-1.jpg" class="card-image-image">
        </div>
        <div class="category-card-content">
          <h3 class="category-card-title">Antiquities</h3>
        </div>
          </a>
    	</div>

  	</div>

  	<div class="column">
      <div class="category-card">
        <a href="<?php echo get_home_url(); ?>/category/applied-arts">
        <div class="category-card-image">
          <img src="<?php echo get_bloginfo('template_url') ?>/images/category-2.jpg" class="card-image-image">
        </div>
        <div class="category-card-content">
          <h3 class="category-card-title">Applied Arts</h3>
        </div>
    	</a>
    	</div>
  	</div>

    <div class="column">
      <div class="category-card">
        <a href="<?php echo get_home_url(); ?>/category/exhibitions">
        <div class="category-card-image">
          <img src="<?php echo get_bloginfo('template_url') ?>/images/category-3.jpg" class="card-image-image">
        </div>
        <div class="category-card-content">
          <h3 class="category-card-title">Exhibitions</h3>
        </div>
    	</a>
    	</div>
  	</div>


  	<div class="column">
      <div class="category-card">
        <a href="<?php echo get_home_url(); ?>/category/manuscripts-and-printed-books">
        <div class="category-card-image">
          <img src="<?php echo get_bloginfo('template_url') ?>/images/category-4.jpg" class="card-image-image">
        </div>
        <div class="category-card-content">
          <h3 class="category-card-title">Manuscripts & Printed Books</h3>
        </div>
    	</a>
    	</div>
  	</div>

    <div class="column">
      <div class="category-card">
        <a href="<?php echo get_home_url(); ?>/category/museum-stories">
        <div class="category-card-image">
          <img src="<?php echo get_bloginfo('template_url') ?>/images/category-5.jpg" class="card-image-image">
        </div>
        <div class="category-card-content">
          <h3 class="category-card-title">Museum Stories</h3>
        </div>
    	</a>
    	</div>
  	</div>

  	<div class="column">
     <div class="category-card">
        <a href="<?php echo get_home_url(); ?>/category/paintings-drawings-prints">
        <div class="category-card-image">
          <img src="<?php echo get_bloginfo('template_url') ?>/images/category-6.jpg" class="card-image-image">
        </div>
        <div class="category-card-content">
          <h3 class="category-card-title">Paintings, Drawings and Prints</h3>
        </div>
    	</a>
    	</div>
  	</div>

	</div>


<!--  Subscribe Section  -->
	<div class="subscribe-section">
<!--   <div class="subscribe-title"> -->
		<h2>Subscribe</h2>
<!--   </div> -->
<!--     <div class="subscribe-subtitle"> -->
		<h4>Sign up here to receive new posts straight to your email </h4>
<!--   </div> -->
	<form>
					<input type="email" placeholder="Enter your email here...">
					<input type="submit" value="Subscribe">
				</form>
</div>

	<!-- Footer Section -->
<footer>
<div class="footer-logo">
	<img src="<?php echo get_bloginfo('template_url') ?>/images/fitz_cambridge_logo_white_on_grey.jpg">
	</div>
<div class="footer-text">
	<p>The contents of these pages are copyright of The Fitzwilliam 		Museum, Cambridge, UK unless otherwise stated.</p>
	<p>View our <a href="https://www.fitzmuseum.cam.ac.uk/website/tou">Terms of Use</a> and <a href="https://www.fitzmuseum.cam.ac.uk/website/cookiepolicy">Privacy Policy</a></p>
	<p>Collections Up Close / Proudly powered by 				WordPress</p>
	</div>
</footer>

</div>
<script src="<?php echo get_bloginfo('template_url') ?>/js/header.js"></script>

</body>
</html>
