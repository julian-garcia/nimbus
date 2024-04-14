<?php get_header(); ?>
<div class="hero-page half" style="background: black; background-position: top;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title" style="top:100px"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
<?php endwhile; ?>
</div>
<div class="page-content">
  <h2 class="centered">Company Dancers</h2>
  <div class="auto-grid dancers">
  <?php
    $args = array('post_type' => 'dancer', 
                  'meta_key' => 'surname',
                  'orderby' => 'meta_value',
                  'order' => 'ASC',
                  'tax_query' => array(array('taxonomy' => 'category', 
                                             'field' => 'slug',             
                                             'terms' => 'nimbus2',  
                                             'operator' => 'NOT IN')));
    $dancers = new WP_Query($args);
    while($dancers->have_posts()) {
      $dancers->the_post(); ?>
      <div class="dancer">
        <div class="dancer__image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)">
          <a class="dancer__link" href="<?php the_permalink(); ?>">
        </div>
        <a class="dancer__title" href="<?php the_permalink(); ?>">
          <?php the_title(); ?>&nbsp;<i class="fas fa-chevron-right"></i>
        </a>
      </div>
      <?php
    } 
  ?>
  </div>
</div>
<img class="centered vertical-margin" src="<?php echo get_bloginfo('template_directory'); ?>/images/separator.svg" alt="">
<div class="page-content">
  <h2 class="centered">Nimbus2 Dancers</h2>
  <p class="centered regular vertical-margin" style="max-width: 750px"> Nimbus2 expands the reach of dance, focusing primarily on under-served student populations to cultivate new and future audiences. Developing young dance professionals with Nimbus Dance Works’ aesthetic, repertory, and approach, Nimbus2 provides a rigorous and inspiring environment for dancers to grow. Through performance of their own repertory, community engagement, and in conjunction with Nimbus Dance Works, Nimbus2 brings joy and verve to the populations they reach. </p>
  <div class="auto-grid dancers">
  <?php
    $args = array('post_type' => 'dancer', 
                  'meta_key' => 'surname',
                  'orderby' => 'meta_value',
                  'order' => 'ASC',
                  'category_name' => 'nimbus2');
    $dancers = new WP_Query($args);
    while($dancers->have_posts()) {
      $dancers->the_post(); ?>
      <div class="dancer">
        <div class="dancer__image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); ?>)">
          <a class="dancer__link" href="<?php the_permalink(); ?>">
        </div>
        <a class="dancer__title" href="<?php the_permalink(); ?>">
          <?php the_title(); ?>&nbsp;<i class="fas fa-chevron-right"></i>
        </a>
      </div>
      <?php
    } 
  ?>
  </div>
</div>
<?php get_footer(); ?>