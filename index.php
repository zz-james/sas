<?php /* The default template file */ ?>

<?php    get_header(); ?>



<div class="content">

  <div class="content-top">
    <div class="content-inner content-inner-top">

      <?php
      if ( have_posts() ) {
          while ( have_posts() ) {
              the_title( '<h3>', '</h3>');
              the_post();
              the_content();
          }
      }
      ?>
    </div><!-- end content inner -->
    <div class="spacer" style="height:50px"></div>
     <div class="footer">&nbsp;</div>
  </div><!-- end content top -->

<?php get_footer(); ?>