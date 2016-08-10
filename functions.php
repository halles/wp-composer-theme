<?php
  if ( function_exists('register_sidebar') ){

    register_sidebar(array(
      'name' => 'Sidebar',
      'before_widget' => '<div class="widget-container %1$s %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ));

    register_sidebar(array(
      'name' => 'Footer - First Section',
      'id' => 'footer-first-section',
      'before_widget' => '<div class="widget-container %1$s %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ));

    register_sidebar(array(
      'name' => 'Footer - Second Section',
      'id' => 'footer-second-section',
      'before_widget' => '<div class="widget-container %1$s %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ));

    register_sidebar(array(
      'name' => 'Footer - Third Section',
      'id' => 'footer-third-section',
      'before_widget' => '<div class="widget-container %1$s %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ));

  }


  if ( function_exists( 'register_nav_menu' )){
    register_nav_menu( 'main', 'Menú Principal' );
  }

  if( !function_exists( 'bleg_main_nav_fallback' )){

    function bleg_main_nav_fallback(){
      $args = array(
        'sort_column' => 'menu_order, post_title',
        'menu_class'  => 'menu',
        'show_home'   => true,
      );
      wp_page_menu($args);
    }

  }
