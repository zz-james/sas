<?php /* Template Name: Home Page */ ?>
<!-- The home-page template file -->
<?php get_header(); ?>

<div class="localservices-search--container">
  <input type=search name=s class="localservices-search" id="js_searchbar_home" placeholder="Enter your postcode to find local support">
</div>

<div class="content">

  <div class="content-top">
    <div class="content-inner content-inner-top">

      <?php
      if ( have_posts() ) {
          while ( have_posts() ) {
              the_post();
              the_content();
          }
      }
      ?>
      <p style="margin-top: 350px">This page does not exist, sorry!</p>

      <p>Please use the menu options above to navigate to another page.</p>

    </div><!-- end content inner -->
  </div><!-- end content top -->


<?php get_footer(); ?>