<?php /* Template Name: Home Page */ ?>
<!-- The home-page template file -->
<?php get_header(); ?>



<div class="content">

  <div class="content-top">
    <div class="content-inner content-inner-top">

      <?php
      if ( have_posts() ) {
          while ( have_posts() ) {
              the_post();
              //the_content();
          }
      }
      ?>


    </div><!-- end content inner -->
  </div><!-- end content top -->

<!--   <div class="content-bottom" id="start">
    <div class="content-inner content-inner-bottom">
      <span class="content-buttons-header">
        Choose from the topics below
      </span>

      <?php //get_template_part('partials/buttons'); ?>

    </div>
  </div> -->


<!--   <div style="padding: 100px 0;background: #98D2D7;">
    <div style="width:75%;margin-left: auto;margin-right: auto">
      <div class="footer">&nbsp;</div>
    </div>
  </div> -->

<?php get_footer(); ?>