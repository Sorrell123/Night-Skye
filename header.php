<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title><?php bloginfo("title"); ?></title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>" />
  <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
  </script> 
  <?php wp_head(); ?> 
</head>

<body>
  <div id="main">

  <div id="menubar">
    <div id="welcome">
      <h1><a href="<?php echo get_option("home"); ?>"><?php bloginfo("name"); ?></a></h1>
    </div><!--close welcome-->
    <div id="menu_items">
      <!-- tablica która pozwala dobrać odpowiedni klucz z biblioteki do odpowiedniego elementu w menu -->
      <?php
        wp_nav_menu(array(
          'menu_id' => "menu",
        ));
      ?>
    </div><!--close menu-->
  </div><!--close menubar--> 

  <div id="site_content">   

    <div id="banner_image">
      <div id="slider-wrapper">        
        <div id="slider" class="nivoSlider">
          <!--
            Tu petla po wszystkich obrazkach w katalogu home-images w wp_uploads_dir.
          -->
          <img src="<?php bloginfo("template_url"); ?>/images/home_1.jpg" alt="" />
          <img src="<?php bloginfo("template_url"); ?>/images/home_2.jpg" alt="" />
          <?php

          $args = array(
              'post_type' => 'attachment',
              'numberposts' => -1,
              'post_status' => null,
              'post_parent' => null, // any parent
              'post_mime_type' => 'image'
              ); 
          $attachments = get_posts($args);
          if ($attachments) {
              foreach ($attachments as $post) {
                  setup_postdata($post); // pewnie ustawia że funkcje poniżej działają działa
                  if(get_the_title() == "home-image"){
                    the_attachment_link($post->ID, false);
                  }
              }
          }

          ?>
        </div><!--close slider-->
      </div><!--close slider_wrapper-->
    </div><!--close banner_image--> 