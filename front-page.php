<?php get_header(); ?>
<div class="hero-home">
  <div class="hero-home__slider">
    <?php
      $args = array('post_type' => 'post', 'category_name' => 'headline');
      $posts = new WP_Query($args);

      while($posts->have_posts() ) {
        $posts->the_post(); ?>
        <div class="hero-home__slide show" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
          <a href="<?php the_permalink()?>" class="hero-home__link"></a>
          <div>
            <h2 class="hero-home__slide-title"><?php the_title(); ?></h2>
            <button class="button">Read More <i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
        <?php
      }
    ?>
  </div>
  <div class="hero-home__page-links">
    <div class="hero-home__page-link" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/company.png); background-color: black; color: white;">
      <a href="/company" class="hero-home__link"></a>
      <h2 class="hero-home__page-link-title">Nimbus<br>Company</h2>
    </div>
    <div class="hero-home__page-link light" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/school.png);">
      <a href="/school-of-nimbus" class="hero-home__link"></a>
      <h2 class="hero-home__page-link-title">School of<br>Nimbus</h2>
    </div>
    <div class="hero-home__page-link dark" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/center.png); background-position: center; color: white;">
      <a href="/nimbus-arts-center" class="hero-home__link"></a>
      <h2 class="hero-home__page-link-title">Nimbus Arts Center<br>At the Lively</h2>
    </div>
    <div class="hero-home__page-link dark" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/outreach.png); background-position: center; color: white;">
      <a href="/outreach" class="hero-home__link"></a>
      <h2 class="hero-home__page-link-title">Outreach</h2>
    </div>
  </div>
</div>
<div class="page-content">
  <h2>Upcoming Events</h2>
  <div class="auto-grid upcoming-events">
    <?php
      $args = array('post_type' => 'event');
      $posts = new WP_Query($args);
      while($posts->have_posts() ) {
        $posts->the_post(); ?>
        <div class="card">
          <div class="card__image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>);"></div>
          <h3 class="card__title"><?php the_title(); ?></h3>
          <h4 class="card__date"></h4>
          <p class="card__text"><?php the_content(); ?></p>
          <a class="card__link" href="<?php the_permalink()?>">Read More <i class="fas fa-chevron-right"></i></a>
        </div>
        <?php
      }
    ?>
  </div>
  <button class="button">View All Events <i class="fas fa-chevron-right"></i></button>
</div>
<?php get_footer(); ?>
