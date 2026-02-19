<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header-container">
        <h1><?php bloginfo('name'); ?></h1>
        <nav class="navbar navbar-light bg-light"> 
        <section class="container">             
            <?php 
                wp_nav_menu(array( 
                'theme_location' => 'header-menu', 
                'menu_class' => 'nav', // Clase base para nav 
                'container' => false, 
                'add_li_class' => 'nav-item', // Agregar esta clase a los <li> 
                'link_class' => 'nav-link text-decoration-none' // Agregar estas clases a los <a> 
                )); 
            ?> 
        </section> 
    </nav>
    </header>