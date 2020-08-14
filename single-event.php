<?php get_header(); ?>
<style>
  .logo {
    background-image: url("<?php echo get_bloginfo('template_directory'); ?>/images/nimbus-green.svg");
  }
</style>
<div class="hero-page half" style="background: black; background-position: top;">
  <h2 class="hero-page__title" style="top:100px">Events</h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
</div>
<?php while(have_posts()): the_post(); ?>
<div class="page-content condensed vertical-margin">
  <h1 class="event-post__title"><?php the_title(); ?></h1>
  <p>Date: <?php echo date("l, F j, Y", strtotime(str_replace("/","-",get_field('start_date')))); ?></p>
  <p>Time: <?php the_field('start_time'); ?> E.D.T.</p>
  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="event-post__image">
  <?php the_content(); ?>
  <a href="<?php the_field('link_url') ?>" target="_blank" rel="noopener noreferrer" class="button"><?php the_field('link_text') ?>&nbsp;<i class="fas fa-chevron-right"></i></a>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>
