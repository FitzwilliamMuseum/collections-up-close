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
          <img src="<?php echo get_bloginfo('template_url') ?>/images/large_M_359_1985_2_201408_jas244_mas.jpg" class="card-image-image">
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
		<h2>Subscribe</h2>
		<h4>Sign up here to receive new posts straight to your email </h4>

    <!-- Mailchimp for WordPress v4.8.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-604" method="post" data-id="604" data-name="Subscribe" >
      <div class="mc4wp-form-fields">
          <input type="email" name="EMAIL" placeholder="Your email address" required />

          <input type="submit" value="Sign up" />
      </div>
      <label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1617789358" /><input type="hidden" name="_mc4wp_form_id" value="604" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div>
    </form>
    <!-- / Mailchimp for WordPress Plugin -->
  </div>

	<!-- Footer Section -->
<footer>
<div class="footer-logo">
	<a href="https://beta.fitz.ms"><img src="<?php echo get_bloginfo('template_url') ?>/images/footerfitzlogo.png"></a>
	</div>
<div class="footer-text">
	<p>The contents of these pages are copyright of The Fitzwilliam Museum, Cambridge, UK unless otherwise stated.</p>
	<p>View our <a href="https://www.fitzmuseum.cam.ac.uk/website/tou">Terms of Use</a> and <a href="https://www.fitzmuseum.cam.ac.uk/website/cookiepolicy">Privacy Policy</a></p>
	<p>Collections Up Close / Proudly powered by WordPress</p>
	</div>
  <div class="footer-socials">
    <h1><a href="https://www.instagram.com/fitzmuseum_uk/?hl=en"><i class="fab fa-instagram-square"></i></a> <a href="https://www.facebook.com/fitzwilliammuseum/"><i class="fab fa-facebook-square"></i></a> <a href="https://twitter.com/FitzMuseum_UK"><i class="fab fa-twitter-square"></i></a></h1>
  </div>
</footer>

</div>
<script src="<?php echo get_bloginfo('template_url') ?>/js/header.js"></script>

</body>
</html>
