      
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
    <div class="uk-container uk-container-center">

        <h4 class="uk-align-center">Supported by</h4>

                     <?php 
            wp_nav_menu( array(
                        'menu' => 'Partners',
                         'container_class' => 'uk-margin-large uk-width-3-4 uk-align-center',
                        'menu_class'     => 'partners  uk-grid uk-child-width-1-2@s uk-child-width-1-3@m',


                    
             )); 
             ?> 

  </div>
</div>

<div class="uk-section">
<small>
</small>
</div>

  <?php wp_footer(); ?>

  </body>
</html>