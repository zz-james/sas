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

  wp_register_script('utilities', THEME_DIR.'/javascript/utils.js', array( 'jquery' ), '1', true );
  wp_enqueue_script('utilities');

  if( is_page(4)  ) {  // this is the map page
    wp_register_script('map-data', THEME_DIR.'/javascript/local_services.json', [], null, true );
    wp_register_script('map-stuff',THEME_DIR.'/javascript/local_services.js', array( 'map-data' ), null, true );
    wp_register_script('google-maps', 'http://maps.googleapis.com/maps/api/js?key=AIzaSyAuQNImG39ziZAsfGRa8CBalU2ZbK5KN4A&callback=initMap', array( 'map-stuff' ), null, true );
    wp_enqueue_script('google-maps');   
  }

  if( is_page(22)  ) {  // this is the stories page

  }

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
