<?php /* Template Name: Witnesses */ 
 /* The witness template file */
  get_header(); ?>

<div class="topbar">  
<?php get_template_part('partials/buttons'); ?>
</div>

<div class="i-didnt-even-know-the-person witnesses page-template-default">

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
    <div class="spacer"></div>
  </div><!-- end content top -->

</div>

<?php get_footer(); ?>