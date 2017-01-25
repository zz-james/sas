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
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-- temporary please remove -->
    <link rel="stylesheet" id="screen-style-css" href="wp-content/themes/sas/style.css" type="text/css" media="all">
  </head>

  <?php global $post; ?>
  <body <?php body_class($post->post_name); ?> >
    <div class="fixed fullwidth">

      <div id="menu" class="menubar">
        <div class="menubar--inner">

          

          <nav role='navigation' class="menubar--nav">
            <a href="/" class="menubar--logo"></a>
            <ul class="menubar--mainnav">
              <li class="no-mobile"><a href="/#start">Home</a></li>
              <li><a href="/local-services/">Local Support</a></li>
              <li><a href="/support-guides/">Support Guides</a></li>
              <li><a href="/who-we-are/">Who We Are</a></li>
              <li><a href="/press-and-media/ ">Press & Media</a></li>
              <li><a href="/contact/">Contact</a></li>
            </ul>
          </nav>

        </div>
      </div>

      <div class="topbar">  
        <?php get_template_part('partials/buttons'); ?>
      </div>

    </div>