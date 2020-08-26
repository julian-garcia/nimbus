<?php get_header(); ?>
<style>
  .logo {
    background-image: url("<?php echo get_bloginfo('template_directory'); ?>/images/nimbus-green.svg");
  }
</style>
<?php if (get_the_post_thumbnail_url(get_the_ID())): ?>
<div class="hero-page" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>); background-position: top;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
  <?php endwhile; ?>
</div>
<?php else: ?>
<div class="hero-page half" style="background: black; background-position: top;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title" style="top:100px"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
  <?php endwhile; ?>
</div>
<?php endif ?>
<div class="page-content limit-width vertical-margin page">
  <?php while(have_posts()): the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
