<?php get_header(); ?>
<div class="hero-page half" style="background: black; background-position: top;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title" style="top:100px"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
<?php endwhile; ?>
</div>
<div class="page-content limit-width">
  <?php while(have_posts()): the_post(); ?>
    <div class="post">
      <img class="post-feature-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
      <div class="post-text">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
