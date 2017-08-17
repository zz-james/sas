<div id="main" class="content">



<div class="content-header uk-container uk-container-center uk-padding">
      <?php
      if ( have_posts() ) {
          while ( have_posts() ) {



            echo ('<div class="uk-flex-center uk-child-width-1-2 uk-child-width-1-4@m uk-child-width-1-6@l " uk-grid>');
            
if ( has_post_thumbnail() ) {

            echo ('<div class="">');

            the_post_thumbnail( 'post-thumbnail', ['class' => 'uk-align-right'] );

            echo ('</div>');

            
            }
                echo ('<div class="">');

                the_title( '<h3 class="text-white">', '</h3>');


                echo ('</div>');

          echo ('</div>');

              ?>
</div>


  <div class="content-top uk-container uk-container-center">

    <div class="content-inner content-inner-top uk-card uk-card-default">
      <div class="uk-card-body">

<?php
              the_post();
              the_content();
          }
      }
      ?>
      </div>
    </div><!-- end content inner -->
    <div class="spacer"></div>
  </div><!-- end content top -->

</div>