<?php /* The home-page template file */
  get_header(); ?>

  
<?php get_template_part('partials/buttons'); ?>

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
    </div><!-- end content inner -->
    <div class="spacer"></div>
  </div><!-- end content top -->

<?php get_footer(); ?>