<?php

get_header();
?>

	<main id="primary" class="site-main">




<!-- Body Section -->
<!-- About the Blog -->
<div class="about">
  <div class="about-text">

  <h2>
    About the Blog
  </h2>
  <br>
  <?php the_content(); ?>

</div>
  <div class="about-image">
  </div>
</div>
<!-- Contact Us -->
<div class="contact-us">
  <h3>
    Contact Us
  </h3>
  <p>
    <a href="mailto:fr306@cam.ac.uk">Flavia Ravaioli</a> and <a href="mailto:hjr41@cam.ac.uk">Helena Rodwell</a>
  </p>
</div>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
