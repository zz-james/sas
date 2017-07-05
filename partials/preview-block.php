<!-- start preview block partial -->
<?php 
  foreach (get_the_category() as $value) {
    if($value->term_id != 3) /* category number 3 is homepage which we know the post is in to display on homoepage */
      $cat = $value->name;
  }
?>

<div>

  <div class="uk-card uk-card-default uk-card-body">

    <h2><?php echo $cat; ?></h2>
   <?php the_content(); ?>

  </div>

  </div>