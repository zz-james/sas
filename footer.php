      
<div class="uk-margin-large-top uk-padding-small bordered uk-width-5-6 uk-container uk-container-center footermenu">
    

        <?php 
        wp_nav_menu( array(
                    'container_class' => 'uk-navbar-container uk-margin-large uk-navbar uk-navbar-transparent',
                    'menu' => 'footer',
                    'menu_class'     => 'footer uk-navbar-nav uk-navbar-center',

      

                
         )); 
         ?>

  
</div>
      
<div class="uk-section footer-supporters">
    <div class="uk-container uk-container-center uk-margin-large uk-width-3-4">

   
        <h4 class="uk-text-center">Supported by</h4>


        <?php if( have_rows('members', 'option') ): ?>

            <ul class="partners uk-child-width-1-2@s uk-child-width-1-3@m uk-text-left" uk-grid>

            <?php while( have_rows('members', 'option') ): the_row(); ?>

                <li><a href="<?php the_sub_field('url'); ?>" target="_blank"> <?php the_sub_field('name'); ?> </a></li>

            <?php endwhile; ?>

            </ul>

        <?php endif; ?>

  </div>
</div>

<div class="uk-section">
<small>
</small>
</div>

  <?php wp_footer(); ?>

  </body>
</html>