<?php get_header(); ?>
<style>
  .logo {
    background-image: url("<?php echo get_bloginfo('template_directory'); ?>/images/nimbus-green.svg");
  }
</style>
<div class="hero-page half" style="background: black; background-position: top;">
  <h2 class="hero-page__title" style="top:100px">Dancers</h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
</div>
<?php while(have_posts()): the_post(); ?>
<div class="page-content limit-width vertical-margin">
  <div class="thirds-grid one-two">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="dancer-post__image">
    <div class="dancer-post__text">
      <h1 class="dancer-post__title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
