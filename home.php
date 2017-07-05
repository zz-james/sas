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

  <div class="content-top uk-container uk-container-center">
    <div class="content-inner content-inner-top">


<!-- <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>

    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>

    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>

    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
</div> -->


      <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-match uk-grid-stack" uk-grid data-uk-grid-margin><!-- start grid -->
    <?php query_posts('cat=3'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 

              <?php get_template_part('partials/preview-block'); ?>



    <?php endwhile; endif; ?>

        </div><!-- end grid -->

    </div><!-- end content inner -->
  </div><!-- end content top -->




  <div style="padding: 100px 0;background: #98D2D7;">
    <div style="width:75%;margin-left: auto;margin-right: auto">
      <div class="footer">&nbsp;</div>
    </div>
  </div>

<?php get_footer(); ?>

