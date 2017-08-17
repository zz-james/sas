<!-- start preview block partial -->
<?php 
  // foreach (get_the_category() as $value) {
  //   if($value->term_id != 3)  category number 3 is homepage which we know the post is in to display on homoepage 
  //     $cat = $value->name;
  // }




  $boxes = get_post_meta( get_the_ID(), 'hpwidget', true );

if( $boxes ) {
  for( $i = 0; $i < $boxes; $i++ ) {
    $title = esc_html( get_post_meta( get_the_ID(), 'hpwidget_' . $i . '_title', true ) );
    $desc = esc_html( get_post_meta( get_the_ID(), 'hpwidget_' . $i . '_description', true ) );
    $url = (get_post_meta( get_the_ID(), 'hpwidget_' . $i . '_readmore', true ));
    $icon = (int) get_post_meta( get_the_ID(), 'hpwidget_' . $i . '_w-icon', true );
    
    // Thumbnail field returns image ID, so grab image. If none provided, use default image
     $icon =  wp_get_attachment_image( $icon,  "", "", ["class" => "uk-align-right"] ) ;
    ?>

  <div>

  <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-large">

    <div class="uk-grid-small" uk-grid>
      <div class="uk-width-1-2"> <?php echo $icon; ?></div>
        <h3  class="uk-width-1-2 uk-card-title uk-text-left"><?php echo $title; ?></h3>
    </div>

    <div class="uk-card-body uk-position-small uk-position-bottom-center uk-overlay uk-overlay-default uk-width-4-5">
       <?php echo $desc; ?>
       <p>
       <a href="<?php echo get_permalink( $url) ; ?>" >Read More ></a>
                
       </p>
    </div>
    <div class=""></div>

  </div>

</div>
    
<?php
    
  }
}
?>

