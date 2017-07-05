<?php
define( "THEME_DIR", get_template_directory_uri() );

/* --- REMOVE GENERATOR META TAG FROM HEADER--- */
remove_action('wp_head','wp_generator');

/**
 * handler for wp_enque_scripts hook
 * @return void
 */
function enqueue_styles() {
    /** REGISTER css/screen.css **/
    wp_register_style( 'screen-style', THEME_DIR . '/style.css', array(), '1', 'all' );
    wp_enqueue_style( 'screen-style' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

/**
 * handler for wp_
 * @return [type] [description]
 */
function enqueue_scripts() {

  wp_register_script('fonts', 'https://use.typekit.net/vgu8hwv.js');
  wp_enqueue_script('fonts');

   wp_enqueue_script("jquery"); 


  wp_register_script('utilities', THEME_DIR.'/javascript/utils.js', array( 'jquery' ), '1', true );
  wp_enqueue_script('utilities');
    wp_enqueue_script('uikitjs',THEME_DIR.'/javascript/uikit.js', array( 'jquery' ), null, false );  

  if( is_page(4)  ) {  // this is the map page
    wp_register_script('map-data', THEME_DIR.'/javascript/local_services.json', [], null, true );
    wp_register_script('map-stuff',THEME_DIR.'/javascript/local_services.js', array( 'map-data' ), null, true );
    wp_register_script('google-maps', 'http://maps.googleapis.com/maps/api/js?key=AIzaSyAuQNImG39ziZAsfGRa8CBalU2ZbK5KN4A&callback=initMap', array( 'map-stuff' ), null, true );
    wp_enqueue_script('google-maps');   

  }

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


/**
 * register WP menuss
 */

register_nav_menus( array(
  'primary' => 'Primary Navigation Menu',
    'secondary_menu' => 'Secondary Navigation Menu',
  'social_menu' => 'Social Menu',

) );


/**
 * add Options page via acf. can add multiple named
 * 
 */
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'SASP members',
    'menu_title'  => 'Members',
    'menu_slug' => 'members',
  ));
  
}


/**
 * add class to Menu items
 * 
 */
// function atg_menu_classes($classes, $item, $args) {
//   if($args->theme_location == 'primary') {
//     // $classes[] = 'uk-width-expand@m';
//        $items[1]->classes[] = 'uk-width-expand@m';
//   }
//   return $classes;
// }
// add_filter('nav_menu_css_class','atg_menu_classes',1,3);
