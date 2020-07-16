<?php get_header(); ?>
<h2>events.php</h2>

<?php
    $args = array('post_type' => 'event');
    $event_posts = new WP_Query($args);

    while($event_posts->have_posts() ) {
      $event_posts->the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <a href="<?php the_permalink()?>">test</a>
      <?php
    }
?>

<?php get_footer(); ?>
