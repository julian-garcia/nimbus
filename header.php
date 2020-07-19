<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/images/nimbus.png" alt="">
    <div class="nav-menu">
      <div class="social-icons">
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-instagram-square"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="fas fa-envelope"></i>
        </a>
      </div>
    </div>
    <?php wp_nav_menu(array( 
      'theme_location'  => 'header-menu',
      'container_class' => 'nav-menu',
      'menu_class'      => 'nav-menu__list',
      'container'       => 'nav'
    )); ?>
    <div class="nav-mobile">
      <label for="nav-mobile-toggle">
        <i class="fas fa-bars nav-mobile-toggle"></i>
      </label>
      <input type="checkbox" id="nav-mobile-toggle"/>
      <?php wp_nav_menu(array( 
        'theme_location'  => 'header-menu',
        'container_class' => 'nav-mobile__menu',
        'menu_class'      => 'nav-menu__list',
        'container'       => 'nav'
      )); ?>
    </div>
  </header>
  <main class="content">
