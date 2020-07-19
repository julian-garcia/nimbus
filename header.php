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
        <i class="fab fa-instagram-square"></i>
        <i class="fab fa-twitter"></i>
        <i class="fas fa-envelope"></i>
      </div>
    </div>
    <?php wp_nav_menu(array( 
      'theme_location'  => 'header-menu',
      'container_class' => 'nav-menu',
      'menu_class'      => 'nav-menu__list',
      'container'       => 'nav'
    )); ?>
  </header>
  <main class="content">
