<?php get_header(); ?>
<style>
  .logo {
    background-image: url("<?php echo get_bloginfo('template_directory'); ?>/images/nimbus-green.svg");
  }
</style>
<div class="hero-page" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/support.jpg); background-position: center;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title white"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
  <?php endwhile; ?>
</div>
<div class="page-content full-width">
  <h3 class="centered limit-width">Nimbus Dance gratefully acknowledges the generosity of contributors to our organization.</h3>
  <h3 class="centered regular vertical-margin limit-width">The support of individuals, corporations, foundations, and government agencies makes possible the artistic and community vision of Nimbus Dance.</h3>
  <h3 class="centered regular vertical-margin limit-width">Become a part of the Nimbus family and join our CLOUD of supporters.</h3>
  <a href="#" class="button centered vertical-margin accent block">Donate Now <i class="fas fa-chevron-right"></i></a>
</div>
<div class="page-content vertical-margin">
  <h3 class="centered">Specify your donation</h3>
  <div class="centered">
    <a href="#" class="button">COVID-19 Fund <i class="fas fa-chevron-right"></i></a>
    <a href="#" class="button">Scholarship Fund <i class="fas fa-chevron-right"></i></a>
    <a href="#" class="button">Capital Campaign <i class="fas fa-chevron-right"></i></a>
    <a href="#" class="button">Donor Benefits <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
<div class="page-content vertical-margin">
  <h3 class="centered">Other ways to get involved</h3>
  <div class="centered">
    <a href="#" class="button">Volunteer <i class="fas fa-chevron-right"></i></a>
    <a href="#" class="button">In-Kind Donations <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
<div class="page-content vertical-margin">
  <a href="" class="centered">Tax ID/ 990 IRS Forms (PDF)/ 501(c)(3) Organization <i class="fas fa-chevron-right"></i></a>
  <p class="centered vertical-margin limit-width">To speak with Nimbus staff about making a gift of appreciated securities or to include Nimbus in planned giving, contact: <br>Derick McKoy Jr. at development@nimbusdanceworks.org</p>
</div>
<img class="centered vertical-margin" src="<?php echo get_bloginfo('template_directory'); ?>/images/separator.svg" alt="">
<div class="page-content vertical-margin">
  <h3 class="centered">Thank you to our corporate sponsors</h3>
  <p class="centered limit-width">LMC, A Lennar Company, Mack-Cali Realty Corporation, Base Fitness, Hopkins Group LLC, The Geraldine R. Dodge Foundation, Dance/NYC Dance Advancement Fund, Dvora, New Music USA, Goldman Sachs, US Trust/Bank of America, CoolVines, SILVERMAN, Dance New Jersey, Hudson County Office of Cultural Affairs, the City of Jersey City,  NJ Department of State, Division of Travel and Tourism and by funds from the New Jersey State Council on the Arts, a partner agency of the National Endowment for the Arts, and by generous donors and sponsors. Thank you!</p>
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
<a href="#" class="button centered vertical-margin block">View Donors <i class="fas fa-chevron-right"></i></a>
<?php get_footer(); ?>