<?php
//Dodaje możliwość wstawienia zdjęcia jako "nagłówek" postu
add_theme_support("post-thumbnails"); 

//Dodaje opcje wstawianie nowych przycisków do menu
add_theme_support("menus");

//Tablica odpowiedzialna za wyświetlanie widgetów w side barze
register_sidebar(array(
  'name' => __( 'Lewy sidebar' ),
  'id' => 'left-sidebar',
  'description' => __( 'Widgety wyświtalne w tym panelu będą widoczne po lewej stronie' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>',
  'before_widget' => '<div class="sidebar"><div class="sidebar_item">',
  'after_widget'  => '</div></div><!-- widget end -->'
));

register_sidebar(array(
  'name' => __( 'Tytułowy sidebar' ),
  'id' => 'title-sidebar',
  'description' => __( 'Widgety wyświetlany jako głowny tekst.' ),
  'before_title' => '<h1>',
  'after_title' => '</h1>',
  'before_widget' => '<div class="widget">',
  'after_widget'  => '</div>'
));

?>