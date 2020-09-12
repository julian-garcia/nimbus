<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Nimbus Dance bridges world-class performance and community engagement by presenting work that challenges, speaks to, and elevates diverse audiences.">
  <!-- Open Graph -->
  <meta property="og:url" content="<?php global $wp; echo home_url( $wp->request ); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Nimbus">
  <meta property="og:description" content="Nimbus Dance bridges world-class performance and community engagement by presenting work that challenges, speaks to, and elevates diverse audiences.">
  <meta property="og:image" content="<?php echo get_bloginfo('template_directory'); ?>/images/nimbus.png">
  <!-- Twitter -->
  <meta name="twitter:site" content="@NimbusDance">
  <meta name="twitter:creator" content="@NimbusDance">
  <meta name="twitter:title" content="Nimbus">
  <meta name="twitter:description" content="Nimbus Dance bridges world-class performance and community engagement by presenting work that challenges, speaks to, and elevates diverse audiences.">
  <meta name="twitter:image" content="<?php echo get_bloginfo('template_directory'); ?>/images/nimbus.png">
  <link rel="icon" type="image/x-icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.png" />
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="logo"></div>
    <div class="nav-menu">
      <div class="social-icons">
        <a href="https://www.facebook.com/NimbusDanceWorks" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/nimbusdanceworks/" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-instagram-square"></i>
        </a>
        <a href="https://twitter.com/nimbusdance" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="/contact">
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
      <?php wp_nav_menu(array( 
        'theme_location'  => 'header-menu',
        'container_class' => 'nav-mobile__menu',
        'menu_class'      => 'nav-menu__list',
        'container'       => 'nav'
      )); ?>
      <h2 class="nav-menu__close">CLOSE</h2>
    </div>
    <?php global $wp; if (strpos(home_url( $wp->request ), '/support') !== false) { ?>
    <script src="https://api.bloomerang.co/v1/WebsiteVisit?ApiKey=pub_760d4844-4da9-11ea-8134-0ab2f2f28c00" async type="text/javascript"></script>
    <?php } ?>
  </header>
  <main class="content">