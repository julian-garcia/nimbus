<?php get_header(); ?>
<div class="hero-page" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/school-of-nimbus.jpg); background-position: top;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
</div>
<div class="page-content full-width">
  <h3 class="centered" style="max-width: 700px;">The School of Nimbus offers professional dance instruction in ballet, modern, hip hop, tap, and other dance forms for children, teens, and adults.</h3>
  <div class="auto-grid headline">
    <div class="headline__image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)"></div>
    <div class="headline__text secondary-bg">
      <?php the_content(); ?>
      <div class="link-list">
        <p>
          <a href="https://schoolofnimbus.org/openhouse" class="link-list__link" target="_blank" rel="noopener noreferrer">Upcoming Events <i class="fas fa-chevron-right"></i></a>
          <a href="/events" class="link-list__link">Calendar <i class="fas fa-chevron-right"></i></a>
          <a href="https://schoolofnimbus.org/pricing" class="link-list__link" target="_blank" rel="noopener noreferrer">Tuition & Scholarships <i class="fas fa-chevron-right"></i></a>
        </p>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <h3 class="centered" style="max-width: 700px">“After my son took his first class, I knew the School of Nimbus was for us!”<br>- Parent</h3>
  <img class="centered vertical-margin" src="<?php echo get_bloginfo('template_directory'); ?>/images/separator.svg" alt="">
  <h3 class="centered regular" style="max-width: 800px">The School of Nimbus gives students the opportunity to explore creativity and movement while advancing their technique, so that those who are interested in pursuing dance as a career receive the preparation they need. But, our classes are also fun! For students who simply want to explore creative expression through dance, our classes provide a challenging yet supportive environment!</h3>
</div>
<div class="shaded page-title">
  <div class="thirds-grid two-one condensed">
    <h2>Professional Dance Instruction Emphasizing Technique, Musicality, Creativity, Fitness, and Fun!</h2>
  </div>
</div>
<div class="shaded" style="margin-top: 0">
  <div class="thirds-grid two-one condensed">
    <div>
      <ul class="list">
        <li> Small class sizes: Youth ages 2-18 + adults. </li>
        <li> Performance opportunities: Jersey City Nutcracker, Nimbus Youth Ensemble (13-18 yrs), Junior Youth Ensemble (9-13 yrs), Spring Showcase. </li>
        <li> Nimbus’ Pre-Professional Program prepares students for matriculation into high school and college dance programs through multiple classes per week, work-study, rehearsals, and performances. </li>
        <li> Need- and merit-based financial aid and scholarships are available. </li>
      </ul>
    </div>
    <div style="display:grid">
      <div class="link-list">
        <a href="https://schoolofnimbus.org/teacher-bio" class="link-list__link dark" target="_blank" rel="noopener noreferrer">Faculty & Staff <i class="fas fa-chevron-right"></i></a>
        <a href="https://schoolofnimbus.org/uniform-dresscode" class="link-list__link dark" target="_blank" rel="noopener noreferrer">Uniform & Dresscode <i class="fas fa-chevron-right"></i></a>
        <a href="https://schoolofnimbus.org/class-schedule" class="link-list__link dark" target="_blank" rel="noopener noreferrer">Class Schedule <i class="fas fa-chevron-right"></i></a>
        <a href="https://schoolofnimbus.org/preprofessional" class="link-list__link dark" target="_blank" rel="noopener noreferrer">Nimbus Youth Ensemble <i class="fas fa-chevron-right"></i></a>
        <a href="https://schoolofnimbus.org/junior-youth-ensemble" class="link-list__link dark" target="_blank" rel="noopener noreferrer">Junior Youth Ensemble <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</div>
<div class="page-content">
  <h3 class="centered regular" style="max-width: 700px">Nimbus Dance Works is a 501(c)3 non-profit professional dance company and school.</h3>
  <h3 class="centered" style="max-width: 700px">Thank you to our title sponsor</h3>
  <img class="centered vertical-margin" src="<?php echo get_bloginfo('template_directory'); ?>/images/mack-cali.jpg" alt="" style="max-width: 300px">
  <img class="centered vertical-margin" src="<?php echo get_bloginfo('template_directory'); ?>/images/separator.svg" alt="">
  <h3 class="centered">Connect with School of Nimbus: </h3>
  <div class="social-icons centered">
    <a href="https://www.facebook.com/NimbusDanceWorks" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-facebook secondary-color"></i>
    </a>
    <a href="https://www.instagram.com/nimbusdanceworks/" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-instagram-square secondary-color"></i>
    </a>
    <a href="https://twitter.com/nimbusdance" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-twitter secondary-color"></i>
    </a>
    <a href="/contact">
      <i class="fas fa-envelope secondary-color"></i>
    </a>
  </div>
</div>
<?php get_footer(); ?>
