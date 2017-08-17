<?php /* Template Name: Home Page */ ?>

<!-- The home-page template file -->

<?php get_header(); ?>



<!-- <div class="topbar">  

<?php //get_template_part('partials/buttons'); ?>

</div> -->



<div class="content uk-container uk-container-center">



<div class="hero">

<?php 
// Dev = 581, staging = 553, live = 715

    echo do_shortcode("[metaslider id=581]"); 

?>

</div>







  <div class="content-top">

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





      <div id="homecards" class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-match uk-grid-stack" uk-grid data-uk-grid-margin><!-- start grid -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 



              <?php get_template_part('partials/preview-block'); ?>







    <?php endwhile; endif; ?>



        </div><!-- end grid -->



    </div><!-- end content inner -->

  </div><!-- end content top -->













<?php get_footer(); ?>



