<?php get_header(); ?>
<div class="hero-home">
  <div class="hero-home__slider">
    <?php
      $args = array('post_type' => 'post', 'category_name' => 'headline');
      $posts = new WP_Query($args);
      $index = 0;
      while($posts->have_posts() ) {
        $index += 1;
        $posts->the_post(); ?>
        <div class="hero-home__slide" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)" data-slide="<?php echo $index; ?>">
          <a href="<?php the_field('link')?>" class="hero-home__link"></a>
          <div>
            <h2 class="hero-home__slide-title"><?php the_title(); ?></h2>
            <button class="button">Read More <i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
        <?php
      }
    ?>
    <div class="hero-home__bullets"></div>
  </div>
  <div class="hero-home__page-links">
    <div class="hero-home__page-link" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/company.png); background-color: black; color: white;">
      <a href="/company" class="hero-home__link"></a>
      <h2 class="hero-home__page-link-title">Nimbus<br>Company <i class="fas fa-chevron-right"></i></h2>
    </div>
    <div class="hero-home__page-link light" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/school.png);">
      <a href="/school-of-nimbus" class="hero-home__link"></a>
      <h2 class="hero-home__page-link-title">School of<br>Nimbus <i class="fas fa-chevron-right"></i></h2>
    </div>
    <div class="hero-home__page-link dark" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/center.png); color: white;">
      <a href="/nimbus-arts-center" class="hero-home__link"></a>
      <h2 class="hero-home__page-link-title">Nimbus Arts Center<br>At the Lively <i class="fas fa-chevron-right"></i></h2>
    </div>
    <div class="hero-home__page-link dark" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/outreach.png); background-position:top right; color: white;">
      <a href="/outreach" class="hero-home__link"></a>
      <h2 class="hero-home__page-link-title">Outreach <i class="fas fa-chevron-right"></i></h2>
    </div>
  </div>
</div>
<div class="page-content move-down">
  <h2>Upcoming Events</h2>
  <div class="auto-grid upcoming-events">
    <?php
      $args = array(
        'post_type'     => 'event',
        'posts_per_page'=> -1,
        'meta_key'      => 'start_date',
        'orderby'       => 'meta_value',
        'order'         => 'DESC'
      );

      $posts = new WP_Query($args);
      $i = 1;
      while($posts->have_posts() ) {
        $posts->the_post(); 
        if (get_field('feature_home_page', get_the_ID()) && $i <= 3) { $i++; ?>
        <div class="card">
          <div class="card__image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>);"></div>
          <h3 class="card__title"><?php the_title(); ?></h3>
          <h4 class="card__date"></h4>
          <p class="card__text"><?php the_excerpt(); ?></p>
          <a class="card__link" href="<?php the_permalink()?>">Read More <i class="fas fa-chevron-right"></i></a>
        </div>
        <?php
        }
      }
    ?>
  </div>
  <a class="button centered block" href="/events" style="max-width: 200px; padding: 10px;">
    View All Events <i class="fas fa-chevron-right"></i>
  </a>
  <div class="auto-grid image-boxes">
    <div class="image-box dark" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/bulletin.png);">
      <a href="/events" class="image-box__link"></a>
      <h2 class="image-box__title">Community Bulletin <i class="fas fa-chevron-right"></i></h2>
    </div>
    <div class="image-box" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/support.png);">
      <a href="/support" class="image-box__link"></a>
      <h2 class="image-box__title">Support <i class="fas fa-chevron-right"></i></h2>
    </div>
  </div>
</div>
<?php get_footer(); ?>
