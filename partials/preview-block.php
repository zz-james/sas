<!-- start preview block partial -->
<?php 
  foreach (get_the_category() as $value) {
    if($value->term_id != 3) /* category number 3 is homepage which we know the post is in to display on homoepage */
      $cat = $value->name;
  }
?>

<div>

  <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-box-shadow-large">

    <div class="uk-card-header">
        <h3  class="uk-card-title"><?php echo $cat; ?></h3>
    </div>

    <div class="uk-card-body uk-position-small uk-position-bottom-center uk-overlay uk-overlay-default uk-width-4-5">
       <?php the_content(); ?>
    </div>
    <div class=""></div>

  </div>

</div>