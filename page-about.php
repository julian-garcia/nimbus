<?php get_header(); ?>
<style>
  .logo {
    content:url("<?php echo get_bloginfo('template_directory'); ?>/images/nimbus-green.svg");
  }
</style>
<div class="hero-page" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/about.jpg); background-position: center -50px;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title white"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
  <?php endwhile; ?>
</div>
<div class="page-content">
  <h2 class="centered limit-width" style="text-align: left">Nimbus Dance bridges the gap between world-class performances and community engagement by presenting work that challenges, speaks to, and elevates the core beliefs of its diverse audience.</h2>
  <h3 class="centered regular vertical-margin limit-width" style="text-align: left">Founded in 2005 by Samuel Pott and based in Jersey City, Nimbus has been at the forefront of excellence in the arts, civic engagement, and equitable impact, successfully interweaving its mission between Company, School, and Presenting wings.</h3>
</div>
<div class="page-content vertical-margin">
  <div class="auto-grid horizontal-cards flat">
    <div class="horizontal-card__image wave-right wave-green" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/company.jpg);"></div>
    <div class="horizontal-card__text text-right">
      <p>With a repertory of over 30 works, the Company performs on tour nationally and throughout the greater New Jersey/New York region, impacting 16,000 people each year.</p>
      <a href="/company" class="button vertical-margin">The Company <i class="fas fa-chevron-right"></i></a>
    </div>
  </div>
  <div class="auto-grid horizontal-cards flat">
    <div class="horizontal-card__text text-left">
      <p>Nimbus’ community engagement initiatives serve over 7,000 children annually through in-school, movement-based programs.</p>
      <a href="/outreach" class="button vertical-margin">Community <i class="fas fa-chevron-right"></i></a>
    </div>
    <div class="horizontal-card__image wave-left wave-turquoise" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/outreach.png);"></div>
  </div>
  <div class="auto-grid horizontal-cards flat">
    <div class="horizontal-card__image wave-right wave-orange" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/school-nimbus.jpg);"></div>
    <div class="horizontal-card__text text-right">
      <p>The School of Nimbus holds 45 classes throughout the week and also offers the Junior Youth Ensemble, Nimbus Youth Ensemble, and the Pre-Professional Program.</p>
      <a href="/school-of-nimbus" class="button vertical-margin">School of Nimbus <i class="fas fa-chevron-right"></i></a>
    </div>
  </div>
</div>
<div class="page-content vertical-margin">
  <h3 class="centered regular limit-width" style="text-align: left">Most recently, Nimbus was a recipient of DanceNYC’s Dance Advancement Fund in recognition of the company’s demonstrated commitment to diversity, justice, equity, and inclusion. In May 2020, Nimbus will relocate to the new state-of-the-art Nimbus Arts Center at the Lively in Jersey City’s Powerhouse Arts District.</h3>
</div>
<div class="page-content condensed">
  <img class="video-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/video.jpg" alt="">
  <i class="fab fa-youtube video-icon"></i>
  <iframe class="video-iframe" width="100%" height="400px" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="page-content vertical-margin">
  <div class="centered" style="margin:0;">
    <a href="#" class="button fixed">Artistic Director <i class="fas fa-chevron-right"></i></a>
    <a href="#" class="button fixed">Staff <i class="fas fa-chevron-right"></i></a>
  </div>
  <div class="centered" style="margin:0;">
    <a href="#" class="button fixed">History of Nimbus <i class="fas fa-chevron-right"></i></a>
    <a href="#" class="button fixed">Press Kit <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
<?php get_footer(); ?>