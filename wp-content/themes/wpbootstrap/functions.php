<?php
 // Register Custom Navigation Walker
 require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

  // Theme Support
  function wpb_theme_setup(){
   add_theme_support('post-thumbnails');

   // Nav Menus
   register_nav_menus( array(
  	'primary' => __( 'Primary Menu'),
    ));

    // Post Formats
    //add_theme_support('post-formats', array('aside', 'gallery'));
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
  }

 add_action('after_setup_theme', 'wpb_theme_setup');

 // Excerpt Length Control
 function set_excerpt_length(){
   return 45;
 }

 add_filter('excerpt_length', 'set_excerpt_length');

 // Widgets Locations
 function wpb_init_widgets($id){
   register_sidebar(array(
     'name' => 'Sidebar',
     'id'   => 'sidebar',
     'before_widget'  => '<div class="sidebar-modue">',
     'after_widget'   => '</div>',
     'before_title'   => '<h4>',
     'after_title'    => '</h4>'
   ));
 }

 add_action('widgets_init', 'wpb_init_widgets');
