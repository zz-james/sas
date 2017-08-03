<?php /* Template Name: Old Local Services */ ?>
<!-- The local services template file -->
<?php get_header(); ?>



<div class="uk-grid-collapse uk-grid uk-height-1-1" uk-grid>



  <div id="map" class="content-inner-top uk-width-2-3@m uk-flex-last@m"><span class="loading">loading tiles...</span></div>
    

  <div id="left_col" class="map_leftCol content-inner-top uk-width-1-3@m uk-overflow-auto" >

  
      <?php
      if ( have_posts() ) {
          while ( have_posts() ) {
              the_post();
              ?>
              <div class="uk-visible@m uk-flex uk-flex-center results-hide" >
              <div class="uk-width-1-3"> <div class="uk-text-right page-icon uk-padding-small">
              <?php
              the_post_thumbnail();
              ?>
              </div></div>

              <div class="uk-width-1-4"><h2 class="page-title text-white uk-padding-small">
                    <?php
              the_title();
              ?>
              </h2></div>
              </div>

              <div class="map map_instructions uk-card uk-card-default uk-visible@m">


                  <div class="uk-card-body">
                  <div class="uk-visible@m results-hide">
                  <?php
                          the_content();
                      } // end while
                  } // end if
                  ?>
                  </div>

                      <input type=search name=s class="localservices-search" placeholder="Enter your postcode to find local support" id="js_searchbar">
                      <div class="uk-visible@m results-hide">If you can't find what you need, a <a href="http://dev.supportaftersuicide.org.uk/support-guides/">support guide</a> may help or you could contact your GP or Samaritans (free telephone: 116 123)</div>

                  </div> <!-- end uk-card-body -->
                </div><!--  end uk-card -->

  
                  
            


                  <!-- card for search result -->
                  <div class="uk-card uk-card-default"><div class="search_results uk-card-body" id="js_search_results"></div></div>
                  <!-- end card for search result -->

                  <!-- card for service detail -->
                  <div class="service_details uk-card uk-card-default" id="js_services" style="opacity: 0;"><div class="uk-card-body">
                    <a href='#' id="js_service_back_link" onclick="hideDetails();showSearchResults();"><< Back to search results..</a>
                    <h4 class="service_details__name" id="js_service_name"></h4>
                    <div>
                      <div id="js_service_address"   class="service_details__address"></div>
                      <div id="js_service_website"   class="service_details__website"></div>
                      <div id="js_service_telephone" class="service_details__telephone"></div>
                     <!--  <span id="js_service_email"     class="service_details__email">E-Mail: hq@petesdragons.org.uk</span> -->
                    </div>
                    
                    
                    <div id="js_service_overview"     class="service_details__overview"></div> 
                    <h4 id="js_service_details__header" class="service_details__header">Services available.</h4>
                    <div id="js_service_services" class="service_details__overview"></div>

                  </div></div>
                  <!-- end card for service detail  -->

<br class="clear" />
  </div> <!-- End left_col -->



</div> <!-- End of uk-grid -->

<?php get_footer(); ?>