<?php get_header(); ?>
<div class="hero-page" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/support.jpg); background-position: center;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title white"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
  <?php endwhile; ?>
</div>
<div class="page-content vertical-margin centered limit-width">
  <?php echo the_field('acknowledgement'); ?>
  <a href="https://crm.bloomerang.co/HostedDonation?ApiKey=pub_760d4844-4da9-11ea-8134-0ab2f2f28c00&WidgetId=867329" class="button centered vertical-margin accent block" target="_blank" rel="noopener noreferrer">Donate Now <i class="fas fa-chevron-right"></i></a>
</div>
<div class="page-content vertical-margin">
  <h3 class="centered">Specify your donation</h3>
  <div class="centered">
    <?php
      $links = get_field('donation_links');
      if( $links ): ?>
      <a href="<?php echo $links['link_1']['link']; ?>" class="button"><?php echo $links['link_1']['text']; ?> <i class="fas fa-chevron-right"></i></a>
      <a href="<?php echo $links['link_2']['link']; ?>" class="button"><?php echo $links['link_2']['text']; ?> <i class="fas fa-chevron-right"></i></a>
      <a href="<?php echo $links['link_3']['link']; ?>" class="button"><?php echo $links['link_3']['text']; ?> <i class="fas fa-chevron-right"></i></a>
      <a href="<?php echo $links['link_4']['link']; ?>" class="button"><?php echo $links['link_4']['text']; ?> <i class="fas fa-chevron-right"></i></a>
    <?php endif; ?>
  </div>
</div>
<div class="page-content vertical-margin">
  <h3 class="centered">Other ways to get involved</h3>
  <div class="centered">
    <?php
      $links = get_field('get_involved_links');
      if( $links ): ?>
      <a href="<?php echo $links['link_1']['link']; ?>" class="button"><?php echo $links['link_1']['text']; ?> <i class="fas fa-chevron-right"></i></a>
      <?php if( $links['link_2']['link'] ): ?>
      <a href="<?php echo $links['link_2']['link']; ?>" class="button"><?php echo $links['link_2']['text']; ?> <i class="fas fa-chevron-right"></i></a>
      <?php endif; ?>
      <?php if( $links['link_3']['link'] ): ?>
      <a href="<?php echo $links['link_3']['link']; ?>" class="button"><?php echo $links['link_3']['text']; ?> <i class="fas fa-chevron-right"></i></a>
      <?php endif; ?>
      <?php if( $links['link_4']['link'] ): ?>
      <a href="<?php echo $links['link_4']['link']; ?>" class="button"><?php echo $links['link_4']['text']; ?> <i class="fas fa-chevron-right"></i></a>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</div>
<div class="page-content vertical-margin">
  <p class="centered">Tax ID/ 990 IRS Forms (PDF)/ 501(c)(3) Organization</p>
  <p class="centered vertical-margin" style="max-width:500px">To speak with Nimbus staff about making a gift of appreciated securities or to include Nimbus in planned giving, contact: <br>Derick McKoy Jr. at <a class="link" href="mailto:development@nimbusdanceworks.org">development@nimbusdanceworks.org</a></p>
</div>
<img class="centered vertical-margin" src="<?php echo get_bloginfo('template_directory'); ?>/images/separator.svg" alt="">
<div class="page-content vertical-margin centered limit-width">
  <?php echo the_field('sponsor_thanks'); ?>
</div>
<div class="page-content  vertical-margin">
  <div class="auto-grid logos" style="padding: 0 1rem">
    <?php
      $args = array('post_type' => 'post', 
                    'category_name' => 'sponsor', 
                    'posts_per_page' => -1,
                    'orderby' => 'title', 
                    'order' => 'ASC');
      $posts = new WP_Query($args);
      while($posts->have_posts() ) {
        $posts->the_post(); ?>
        <img class="auto-grid__fixed" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
        <?php
      }
    ?>
  </div>
</div>
<?php get_footer(); ?>