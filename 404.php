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

      <?php get_template_part('partials/scroll-down'); ?>
    </div><!-- end content inner -->
  </div><!-- end content top -->



  <div class="content-bottom" id="start">
    <div class="content-inner content-inner-bottom">
      <span class="content-buttons-header">
        Choose from the topics below
      </span>

      <?php get_template_part('partials/buttons'); ?>

    </div>
  </div>

<?php get_footer(); ?>