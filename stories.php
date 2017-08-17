<?php /* Template Name: Stories */ ?>
<!-- The stories template file -->
<?php get_header(); ?>

<div class="topbar">  
<?php get_template_part('partials/buttons'); ?>
</div>

<div id="main" class="content">

    <div class="content-header uk-container uk-container-center uk-padding">

         <div class="uk-card uk-card-default slider-container">

      

            <?php



            $yourstories = get_posts( array(
                'post_type' => "story",
                'numberposts' => -1
            ) );
              

            if ( $yourstories ) { 

             echo '<ul class="uk-hidden"   uk-switcher="connect: #slider; animation: uk-animation-fade">';
                 for ($k = 0 ; $k < count($yourstories); $k++){ 
                     echo '<li>Dot</li>';
                 }
             echo '</ul>';




           echo '<ul id="slider" class="uk-switcher uk-switcher uk-margin">';

                foreach ( $yourstories as $post ) :

                    setup_postdata( $post ); 
                ?>

                    <li class="uk-margin-remove uk-padding-large">
                    <div class="uk-margin-collapse uk-padding-large">
                    <h3><span class="uk-margin-small-right startquote" uk-icon="icon: quote-right"></span><?php the_title(); ?><span class="uk-margin-small-left endquote" uk-icon="icon: quote-right"></h3>
                    <div><?php the_content(); ?></div>
                    </div>
                    </li>

                <?php
                endforeach; 
                wp_reset_postdata();
                ?>

                <li>
          
                    <a href="javascript:;" class="uk-hidden" uk-switcher-item="previous"></a>
                    <a href="javascript:;" class="uk-hidden" uk-switcher-item="next"></a>
                </li>

                </ul>

                <!-- real slidenav buttons, only one for all slides -->
                <a href="javascript:;" class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large" uk-slidenav-previous></a>
                <a href="javascript:;" class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large" uk-slidenav-next></a>
            <?php  } ?>

        
            </div><!-- end uk-card -->

        </div><!-- end content-header -->
  </div><!-- end main -->

<?php get_footer(); ?>