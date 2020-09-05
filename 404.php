<?php get_header(); ?>
<style>
  .logo {
    background-image: url("<?php echo get_bloginfo('template_directory'); ?>/images/nimbus-green.svg");
  }
</style>
<div class="hero-page half" style="background: black; background-position: top;">
  <h2 class="hero-page__title" style="top:100px">Page not found</h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
</div>
<div class="page-content limit-width vertical-margin page">
</div>
<?php get_footer(); ?>
