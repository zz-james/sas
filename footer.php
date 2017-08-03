      
<div class="uk-margin-large-top uk-padding-small bordered">
    <div class="uk-container">

        <?php 
        wp_nav_menu( array(
                    'container_class' => 'uk-navbar-container uk-margin-large uk-navbar uk-navbar-transparent',
                    'menu' => 'footer',
                    'menu_class'     => 'footer uk-navbar-nav uk-navbar-center',

      

                
         )); 
         ?>

  </div>
</div>
      
<div class="uk-section">
    <div class="uk-container">

    <h4>Supported by</h4>

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
Smal Print. While the syntax is easy to understand, it is hard to visualise the style using just code. The handy box-shadow tool above allows you to quickly tweak your code and see the effect. 
</small>


</div>

  <?php wp_footer(); ?>

  </body>
</html>