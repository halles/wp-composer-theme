<!DOCTYPE HTML>
<html lang="es">
  <head>
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lte IE 7]>
      <script src="js/IE8.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 7]>
      <link rel="stylesheet" type="text/css" media="all" href="style.ie6.css"/>
    <![endif]-->

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

  <header id="header">
    <hgroup>
      <h1><a href="/"><?php bloginfo('name'); ?></a></h1>
      <h2><?php bloginfo('description'); ?></h2>
    </hgroup>
  </header>

  <nav id="main-nav">
  <?php
    wp_nav_menu(array(
      'theme_location' => 'main',
      'fallback_cb'     => 'bleg_main_nav_fallback',
      'depth'           => 3,
    ));
  ?>
  </nav>

  <div id="wrapper">
