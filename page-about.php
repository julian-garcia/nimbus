<?php get_header(); ?>
<div class="hero-page" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/about.jpg); background-position: top;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title white"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
  <?php endwhile; ?>
</div>
<div class="page-content limit-width">
  <h3 class="centered" style="text-align: left">Nimbus Dance bridges world-class performance and community engagement by presenting work that challenges, speaks to, and elevates diverse audiences. Utilizing the distinct and interwoven platforms of professional company, school, Arts Center, and community outreach programming, Nimbus manifests a vision for dance and the arts as a catalyst for equity, community development and transformative cultural exchange.</h3>
  <h3 class="centered regular vertical-margin" style="text-align: left">Founded in 2005 by Samuel Pott and based in Jersey City, Nimbus has been at the forefront of excellence in the arts, civic engagement, and equitable impact, successfully interweaving its mission between Company, School, and Presenting wings.</h3>
  <a href="/about-nimbus" class="button mobile">Read more <i class="fas fa-chevron-right"></i></a>
</div>
<div class="page-content vertical-margin">
  <div class="auto-grid horizontal-cards flat">
    <div class="horizontal-card__image wave-right wave-green" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/company.jpg);"></div>
    <div class="horizontal-card__text text-right">
      <h3>With a repertory of over 30 works, the Company performs on tour nationally and throughout the greater New Jersey/New York region, impacting 16,000 people each year.</h3>
      <a href="/company" class="button mobile vertical-margin">The Company <i class="fas fa-chevron-right"></i></a>
    </div>
  </div>
  <img class="centered vertical-margin phone" src="<?php echo get_bloginfo('template_directory'); ?>/images/separator-green.svg" alt="">
  <div class="auto-grid horizontal-cards flat re-order">
    <div class="horizontal-card__text text-left">
      <h3>Nimbus’ community engagement initiatives serve over 7,000 children annually through in-school, movement-based programs.</h3>
      <a href="/outreach" class="button mobile vertical-margin">Outreach <i class="fas fa-chevron-right"></i></a>
    </div>
    <div class="horizontal-card__image wave-left wave-turquoise" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/outreach.png);"></div>
  </div>
  <img class="centered vertical-margin phone" src="<?php echo get_bloginfo('template_directory'); ?>/images/separator-turquoise.svg" alt="">
  <div class="auto-grid horizontal-cards flat">
    <div class="horizontal-card__image wave-right wave-orange" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/school-nimbus.jpg);"></div>
    <div class="horizontal-card__text text-right">
      <h3>The School of Nimbus holds 45 classes throughout the week and also offers the Junior Youth Ensemble, Nimbus Youth Ensemble, and the Pre-Professional Program.</h3>
      <a href="/school-of-nimbus" class="button mobile vertical-margin">School of Nimbus <i class="fas fa-chevron-right"></i></a>
    </div>
  </div>
  <img class="centered vertical-margin phone" src="<?php echo get_bloginfo('template_directory'); ?>/images/separator-orange.svg" alt="">
</div>
<div class="page-content vertical-margin">
  <h3 class="centered regular limit-width" style="text-align: left">Most recently, Nimbus was a recipient of DanceNYC’s Dance Advancement Fund in recognition of the company’s demonstrated commitment to diversity, justice, equity, and inclusion. In May 2020, Nimbus will relocate to the new state-of-the-art Nimbus Arts Center at the Lively in Jersey City’s Powerhouse Arts District.</h3>
</div>
<div class="page-content limit-width">
  <img class="video-image" src="<?php echo get_bloginfo('template_directory'); ?>/images/video.jpg" alt="">
  <i class="fab fa-youtube video-icon"></i>
  <iframe class="video-iframe" width="100%" height="400px" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="page-content vertical-margin">
  <div class="centered" style="margin:0;">
    <a href="/founder-artistic-director" class="button fixed">Artistic Director <i class="fas fa-chevron-right"></i></a>
    <a href="/company/staff-and-board/" class="button fixed">Staff <i class="fas fa-chevron-right"></i></a>
  </div>
  <div class="centered" style="margin:0;">
    <a href="/nimbus-history" class="button fixed">History of Nimbus <i class="fas fa-chevron-right"></i></a>
    <a href="/company/press-kit" class="button fixed">Press Kit <i class="fas fa-chevron-right"></i></a>
  </div>
</div>
<?php get_footer(); ?>