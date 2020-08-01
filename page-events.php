<?php get_header(); ?>
<style>
  .logo {
    content:url("<?php echo get_bloginfo('template_directory'); ?>/images/nimbus-green.svg");
  }
</style>
<div class="hero-page half" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/events.jpg); background-position: bottom;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title" style="top:100px"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
  <?php endwhile; ?>
</div>
<div class="page-content full-width">
  <div class="auto-grid calendar-nav">
    <h2 id="previousMonth"></h2>
    <h2 id="currentMonth"></h2>
    <h2 id="nextMonth"></h2>
  </div>
  <div class="calendar-view">
    <i class="fas fa-bars calendar-view__list"></i>
    <i class="fas fa-th calendar-view__calendar active"></i>
  </div>
  <div class="calendar show">
    <div class="calendar__weekday"><h3>Sunday</h3></div>
    <div class="calendar__weekday"><h3>Monday</h3></div>
    <div class="calendar__weekday"><h3>Tuesday</h3></div>
    <div class="calendar__weekday"><h3>Wednesday</h3></div>
    <div class="calendar__weekday"><h3>Thursday</h3></div>
    <div class="calendar__weekday"><h3>Friday</h3></div>
    <div class="calendar__weekday"><h3>Saturday</h3></div>
  </div>
</div>
<div class="page-content">
  <div class="event-list auto-grid">
    <div class="event">
      <div class="event__image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)"></div>
      <div class="event__text">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
<?php
    $args = array('post_type' => 'event');
    $event_posts = new WP_Query($args);
    echo '<script>let events = [];';
    while($event_posts->have_posts() ) {
      $event_posts->the_post(); 
      echo 'events.push({title:"', the_title(), '", 
                         link:"', the_permalink(),'", 
                         image:"', get_the_post_thumbnail_url(get_the_ID(), 'full'),'",
                         time:"', the_field('start_time'),'", 
                         date:"', the_field('start_date'),'"});';
    }
    echo '</script>';
?>
<?php get_footer(); ?>
