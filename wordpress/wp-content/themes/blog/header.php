<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta chartset="<?php bloginfo('charset'); ?>" />
    <title>
      <?php wp_title( '|', 'true', 'right' ); ?>
      <?php bloginfo('name'); ?>
    </title>
    <meta rel="pingback" href="<?php bloginfo('pingback'); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>"><?php bloginfo( 'name' ) ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php 
            navigation_bar(); // navigation_bar() is a function from functions.php file
          ?>
        </div>
      </div>
    </nav>
    