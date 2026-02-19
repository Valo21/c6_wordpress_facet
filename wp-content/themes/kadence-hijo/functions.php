<?php 
  function my_child_theme_enqueue_styles() { 
  $parent_style = 'kadence';    
  wp_enqueue_style( $parent_style, get_template_directory_uri() . 
  '/style.css' ); 
  wp_enqueue_style( 'child-style', 
  get_stylesheet_directory_uri() . '/style.css', array( $parent_style   
  ), 
  wp_get_theme()->get('Version') 
  ); 
  } 
  add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_styles' ); 
  
  add_action("wp_enqueue_scripts", "insertar_google_fonts");  
    function insertar_google_fonts(){ 
    $url = "https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap"; 
    wp_enqueue_style('google_fonts', $url); 
  } 


?> 