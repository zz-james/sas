<!doctype html>
<html class="no-js" lang="">


<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
  <head>
    <!-- meta shizzle -->
    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="Supporting those affected by suicide">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="jamessmith@thecalmzone.net">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>


    <?php wp_head(); ?>

 <!--    <script>try{Typekit.load({ async: true });}catch(e){}</script> -->

  </head>


  <body <?php body_class(); ?> >



    <div class="header"  data-uk-sticky>
  <?php 
      // if( is_page(49) || is_page(4) )  // is home page or local services?
        get_template_part('partials/search'); // show searchbar ?>


      <?php get_template_part('partials/menu'); ?>
      <?php // get_template_part('partials/buttons'); ?>

    

    </div>