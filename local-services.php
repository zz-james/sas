<?php /* Template Name: Local Services */ ?>
<!-- The local services template file -->
<?php get_header(); ?>

<div class="topbar">  
<?php get_template_part('partials/buttons'); ?>
</div>

  <div id="left_col" class="map_leftCol">

    <div class="spacer"></div>

    <div class="map map_instructions">
      <?php
      if ( have_posts() ) {
          while ( have_posts() ) {
              the_post();
              the_content();
          }
      }
      ?>
    </div>

    <input type=search name=s class="localservices-search" placeholder="Enter your postcode to find local support" id="js_searchbar">
    <div class="spacer"></div>
    <div style="text-align: center;margin: 5px 9%">
    <p>Or <a target="pop" href="http://supportaftersuicide.org.uk/wp-content/uploads/2016/10/regional-list-of-services1.pdf">click here to view a list of local services by region (pdf)</a></p>
    </div>



    <!-- card for search result -->
    <div class="search_results" id="js_search_results"></div>
    <!-- end card for search result -->

    <!-- card for service detail -->
    <div class="service_details" id="js_services" style="opacity: 0;">
      <a href='#' id="js_service_back_link" onclick="hideDetails();showSearchResults();"><< Back to search results..</a>
      <h3 class="service_details__name" id="js_service_name"><h3>
      <div>
        <span id="js_service_address"   class="service_details__address"></span><br/>
        <span id="js_service_website"   class="service_details__website"></span><br />
        <span id="js_service_telephone" class="service_details__telephone"></span><br />
       <!--  <span id="js_service_email"     class="service_details__email">E-Mail: hq@petesdragons.org.uk</span> -->
      </div>
      
      <h3 class="service_details__header">Overview.<h3>
      <span id="js_service_overview"     class="service_details__overview"></span> <br />
      <h3 id="js_service_details__header" class="service_details__header">Services available.<h3>
      <div id="js_service_services" class="service_details__overview"></div>

    </div>
    <!-- end card for service detail  -->

  </div><div id="map"><span class="loading">loading tiles...</span></div>

<?php get_footer(); ?>