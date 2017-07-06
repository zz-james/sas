<!-- offcanvas menu  -->
<div id="offcanvas-nav-primary" uk-offcanvas="overlay: true; flip: true" class="uk-offcanvas uk-open">
  <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
    <?php 
    wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'uk-nav uk-nav-primary',
                'container' => div,
                'container_class' => 'uk-panel'
   )); 
   ?>
   </div>
</div>
<!-- offcanvas menu END  -->



<div id="mobile-menu" uk-sticky class="uk-navbar-container uk-sticky uk-sticky-fixed uk-hidden@m" >
  <div class="uk-container uk-container-expand">
    <nav class="uk-navbar">

      <div class="uk-navbar-left">
                  <a href="/" class="menubar--logo"></a>
      </div>


      <div class="uk-navbar-right"  uk-icon="ratio:2">
          <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary" href=""></a>

      </div>

    </nav>
  </div>
</div>

<!--     <div id="offcanvas-slide" uk-offcanvas="" class="uk-offcanvas uk-open" >
        <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">

            <ul class="uk-nav uk-nav-default">
                <li class="uk-active"><a href="#">Active</a></li>
                <li><a href="#">Item</a></li>
                <li class="uk-nav-header">Header</li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#">Item</a></li>
            </ul>

        </div>
    </div> -->









<!-- -->
<div id="menu" class="menubar uk-visible@m"> 
  <div class="menubar--inner"> 

      <nav role='navigation' id="nav" class="menubar--nav uk-child-width-auto@s uk-text-center uk-grid-small uk-flex-nowrap" uk-grid>
          

          <div class="">
              <a href="/" class="menubar--logo"></a>
          </div>


        <?php 
        wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'menubar--mainnav uk-hidden@s',
                    'container' => false,
                    'items_wrap' => '%3$s', 
                    'link_before' => '<img src="/wp-content/themes/sasv2/img/button_bereaved.png" />',
                
         )); 
         ?>

         <div class="menubar--social no-mobile">
        

          <a href="https://www.facebook.com/supportaftersuicideuk/" target="_new" class="facebook"></a>
          <a href="https://twitter.com/aftersuicideuk" target="_new" class="twitter"></a>

        </div>

      </nav>


  </div>
</div> 