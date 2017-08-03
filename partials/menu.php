
<div id="mobile-menu" uk-sticky class="uk-navbar-container uk-sticky uk-sticky-fixed uk-hidden@m" >
  <div class="uk-container uk-container-expand">
    <nav class="uk-navbar">

      <div class="uk-navbar-left">
                  <a href="/" class="menubar--logo"></a>
      </div>


      <div class="uk-navbar-right"  uk-icon="ratio:2">

          <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #dropmenu" ></a>

      </div>

    </nav>
  </div>
</div>








<!-- -->
<div id="menu" class="menubar uk-visible@m"> 
  <div class="menubar--inner  uk-container uk-container-center"> 


      <nav role='navigation' id="mainnav" class="menubar--nav uk-child-width-auto@s uk-text-center uk-flex-nowrap uk-flex-around" uk-grid>
          

          <div class="uk-width-auto@s logo--container">
              <a href="/" class="menubar--logo"></a>
          </div>

          <ul uk-grid id="main-nav" class="uk-width-expand@m uk-child-width-expand@s uk-text-center uk-flex-around uk-grid-collapse">
        <?php 
        wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'menubar--mainnav uk-hidden@s',
                    'container' => false,
                    'items_wrap' => '%3$s', 
                    // 'link_before' => '<img src="/wp-content/themes/sasv2/img/button_bereaved.png" />',

                
         )); 
         ?>
         </ul>

       <!--   <div class="menubar--social no-mobile">
        

          <a href="https://www.facebook.com/supportaftersuicideuk/" target="_new" class="facebook"></a>
          <a href="https://twitter.com/aftersuicideuk" target="_new" class="twitter"></a>

        </div>
 -->
      </nav>


  </div>
</div> 

<!-- offcanvas menu  -->
<div id="dropmenu" class="dropdownmenu uk-hidden@m"  hidden>

   <div id="offcanvas-nav-primary"  class="">
      <div class="uk-container uk-container-center">
        <?php 
        wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'uk-nav uk-text-right',
                    'container' => 'div',
                    'container_class' => 'uk-panel'
       )); 
       ?>
       </div>
  </div> 

</div>
<!-- offcanvas menu END  -->