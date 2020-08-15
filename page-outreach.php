<?php get_header(); ?>
<div class="hero-page" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/outreach.jpg); background-position: center;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
  <?php endwhile; ?>
</div>
<div class="page-content condensed">
  <h3 style="padding: 0">Nimbus offers several licensing options for companies, colleges, high schools, and conservatories.</h3>
  <p class="regular vertical-margin">Master classes and repertory workshops are partnered with the selected licensed work to develop a deeper understanding of the piece itself, technique involved, and movement aesthetic. Nimbus’ Artistic Director, company members, or rehearsal director will be sent for every licensing to offer a personal and in-depth experience for all participating members.</p>
</div>
<div class="page-content">
  <h3 class="centered">Community Projects</h3>
  <div class="auto-grid vertical-cards vertical-margin">
    <?php
        $args = array('post_type' => 'post', 'category_name' => 'community-projects');
        $posts = new WP_Query($args);
        while($posts->have_posts() ) {
          $posts->the_post(); ?>
          <div class="vertical-card" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
            <a href="<?php the_permalink(); ?>" class="button vertical-card__button"><?php the_title(); ?><i class="fas fa-chevron-right"></i></a>
          </div>
          <?php
        }
    ?>
  </div>
  <h3 class="centered">Nimbus Announces New Scholarship Fund</h3>
  <div class="auto-grid vertical-cards vertical-margin">
    <?php
        $args = array('post_type' => 'post', 'category_name' => 'scholarship');
        $posts = new WP_Query($args);
        while($posts->have_posts() ) {
          $posts->the_post(); ?>
          <div class="vertical-card" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
            <a href="<?php the_permalink(); ?>" class="button vertical-card__button"><?php the_title(); ?><i class="fas fa-chevron-right"></i></a>
          </div>
          <?php
        }
    ?>
  </div>
</div>
<?php get_footer(); ?>