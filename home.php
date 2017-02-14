<?php /* Template Name: Home Page */ ?>
<!-- The home-page template file -->
<?php get_header(); ?>

<!-- <div class="topbar">  
<?php //get_template_part('partials/buttons'); ?>
</div> -->


<div class="hero">
<?php 
    echo do_shortcode("[metaslider id=581]"); 
?>
</div>

<div class="content">

  <div class="content-top">
    <div class="content-inner content-inner-top">

  <div class="preview-block-container">
  <?php query_posts('cat=3'); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('partials/preview-block'); ?>
  <?php endwhile; endif; ?>
  </div>


    </div><!-- end content inner -->
  </div><!-- end content top -->




  <div style="padding: 100px 0;background: #98D2D7;">
    <div style="width:75%;margin-left: auto;margin-right: auto">
      <div class="footer">&nbsp;</div>
    </div>
  </div>

<?php get_footer(); ?>

