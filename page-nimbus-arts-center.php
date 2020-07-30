<?php get_header(); ?>
<div class="hero-page" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/lively.png);">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
</div>
<div class="page-content full-width">
  <h3 class="centered">Nimbus Dance announces a permanent new home located at<br>329 Warren Street in Jersey City’s Powerhouse Arts District. </h3>
    <div class="auto-grid headline">
      <div class="headline__image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)"></div>
      <div class="headline__text">
        <?php the_content(); ?>
        <p>
          <a href="#" class="button">Become A Member <i class="fas fa-chevron-right"></i></a>
          <a href="#" class="button">Upcoming Events <i class="fas fa-chevron-right"></i></a>
        </p>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<div class="page-content">
  <h3 class="centered" style="max-width: 700px">Nimbus is proud to partner with the following organizations who present regular and ongoing programs at the Nimbus Arts Center.</h3>
  <div class="auto-grid partners">
    <a href="https://www.singingwithmolly.com/" class="auto-grid__link" target="_blank" rel="noopener noreferrer">
      <img class="auto-grid__image" src="<?php echo get_bloginfo('template_directory'); ?>/images/molly.png" alt="">
    </a>
    <a href="https://www.theicmt.com/" class="auto-grid__link" target="_blank" rel="noopener noreferrer">
      <img class="auto-grid__image" src="<?php echo get_bloginfo('template_directory'); ?>/images/icmt.png" alt="">
    </a>
    <a href="http://segundaquimbamba.org/" class="auto-grid__link" target="_blank" rel="noopener noreferrer">
      <img class="auto-grid__image" src="<?php echo get_bloginfo('template_directory'); ?>/images/sqfc.png" alt="">
    </a>
  </div>
</div>
<div class="shaded">
  <div class="auto-grid">
    <div class="image-slider" style="min-height: 500px;">
      <?php
        $args = array('post_type' => 'post', 'category_name' => 'gallery');
        $posts = new WP_Query($args);
        $index = 0;
        while($posts->have_posts() ) {
          $index += 1;
          $posts->the_post(); ?>
          <div class="image-slide" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)" data-slide="<?php echo $index; ?>"></div>
          <?php
        }
      ?>
      <div class="image-slider__bullets"></div>
    </div>
    <div class="shaded__text">
      <p>The Nimbus Arts Center houses lobby gallery spaces bathed in natural light through 30’ floor to ceiling windows and featuring spacious contemporary industrial exhibition spaces.  Please stay tuned for information on exhibitions and visual arts programming.</p>
      <a href="#" class="button">Visit the Visual Arts Gallery <i class="fas fa-chevron-right"></i></a>
      <p class="artist">Artist: Meredith Lippman</p>
    </div>
  </div>
</div>
<div class="page-content">
  <h3 class="centered" style="max-width: 700px">Nimbus has launched a Capital Campaign to raise funds for theater outfitting costs and interior construction of the 2nd floor. Michael DeMarco, CEO of Mack-Cali Realty Corporation, is co-chair of the Capital Campaign committee.</h3>
  <div class="auto-grid horizontal-cards">
    <div class="horizontal-card__image"></div>
    <div class="horizontal-card__text dark">
      <h3>The theatre and studios are available for rental.</h3>
      <p>For more information, contact Haejin at:<br>production@nimbusdanceworks.org</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>
