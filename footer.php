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
