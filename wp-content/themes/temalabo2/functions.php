<?php 
  function bootstrap_css() { 
    wp_enqueue_style( 'bootstrap_css',  
    get_stylesheet_directory_uri() . '/bootstrap-5.3.3-dist/css/bootstrap.min.css',  
    array(),  
    '5.3.3' 
    );  
  } 
  add_action( 'wp_enqueue_scripts', 'bootstrap_css');
  function bootstrap_js() { 
    wp_enqueue_script( 'bootstrap_js',  
    get_stylesheet_directory_uri() . '/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js',  
    array('jquery'),  
    '5.3.3',  
    true 
    );  
  } 
  add_action( 'wp_enqueue_scripts', 'bootstrap_js');
  
  function my_custom_theme_enqueue_styles() { 
  $theme_version = wp_get_theme()->get('Version'); 
  wp_enqueue_style( 
  'my-custom-theme-style', 
  get_stylesheet_uri(), 
  array(), 
  $theme_version // Agrega versión del tema 
  ); 
  } 
  add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles'); 
    function my_custom_theme_setup() { // Registrar menús  
      register_nav_menus(array(  
              'header-menu' => __('Header Menu', 'temalabo2'),  
              'footer-menu' => __('Footer Menu', 'temalabo2'),  
              'mobile-menu' => __('Mobile Menu', 'temalabo2'),  
      ));  
  }  
  
  add_action('after_setup_theme', 'my_custom_theme_setup'); 

  // Agregar clases a los items del menú 
  function add_additional_class_on_li($classes, $item, $args) { 
  if(isset($args->add_li_class)) { 
  $classes[] = $args->add_li_class; 
  } 
  return $classes; 
  } 
  add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 
  3); 

  // Agregar clases a los enlaces del menú 
function add_menu_link_class($atts, $item, $args) { 
if(isset($args->link_class)) { 
$atts['class'] = isset($atts['class']) ? $atts['class'] . ' 
' . $args->link_class : $args->link_class; 
} 
return $atts; 
} 
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 
3);
?> 