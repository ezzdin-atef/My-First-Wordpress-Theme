<?php

  require_once ('class-wp-bootstrap-navwalker.php'); // import navbar walker to use bootstrap menu

  // add thumbnails support to our theme
  add_theme_support( 'post-thumbnails' );

  /*
   * Function to add CSS files
   * Added by @ezzdin 
   * 
  */
  function add_styles() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/css/all.min.css' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css' );
  }


  /*
   * Function to add JavaScript files
   * Added by @ezzdin 
   * 
  */
  function add_scripts() {
    wp_deregister_script( 'jquery' ); // Remove jQuery
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), array(), false, true ); // Add jQuery in footer
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), false, true );
    /*
     * If you want to add constarains on some files to work in some condition
     * Like less then IE9 or enything else as Htmlshiv.js file
     * Then you can use wp_script_add_data() function
     * Visit: https://developer.wordpress.org/reference/functions/wp_script_add_data
    */
  }

  /*
   * Add custom menu
   * Added by @ezzdin
   * 
  */

  function register_custom_menu() {
    register_nav_menu( 'bootstrap-menu', __('Navigation Bar') );
  }

  /* 
   * Add Function for the navbar
   * Added by @ezzdin
   * 
  */

  function navigation_bar() {
    wp_nav_menu( array(
      'theme_location'    => 'bootstrap-menu',
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => 'collapse navbar-collapse',
      'container_id'      => 'bs-example-navbar-collapse-1',
      'menu_class'        => 'nav navbar-nav',
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new WP_Bootstrap_Navwalker(),
      'menu_class'        => 'navbar-nav ml-auto'
    ) );
  }


  /*
   * Add actions
   * Added by @ezzdin 
   * 
  */

  add_action( 'wp_enqueue_scripts', 'add_styles' );
  add_action( 'wp_enqueue_scripts', 'add_scripts' );

  add_action( 'init', 'register_custom_menu' );






?>