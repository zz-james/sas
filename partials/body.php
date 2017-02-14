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