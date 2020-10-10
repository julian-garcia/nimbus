<?php get_header(); ?>
<div class="hero-page" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/images/school-of-nimbus.jpg); background-position: top;">
  <?php while(have_posts()): the_post(); ?>
  <h2 class="hero-page__title"><?php the_title(); ?></h2>
  <img class="hero-page__bottom" src="<?php echo get_bloginfo('template_directory'); ?>/images/curve.svg" alt="">
</div>
<div class="page-content full-width">
  <h3 class="centered" style="max-width: 700px;"><?php echo the_field('headline'); ?></h3>
  <div class="auto-grid headline">
    <div class="headline__image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)"></div>
    <div class="headline__text secondary-bg">
      <?php echo get_field('first_section')['text']; ?>
      <div class="link-list">
        <p>
          <?php $section = get_field('first_section'); if( $section['link1']['url'] ): ?>
          <a href="<?php echo $section['link1']['url']; ?>" class="link-list__link" target="<?php echo $section['link1']['new_tab'] == TRUE ? '_blank' : '_self'; ?>" rel="noopener noreferrer">
            <?php echo $section['link1']['text']; ?> <i class="fas fa-chevron-right"></i>
          </a>
          <?php endif; ?>
          <?php if( $section['link2']['url'] ): ?>
          <a href="<?php echo $section['link2']['url']; ?>" class="link-list__link" target="<?php echo $section['link2']['new_tab'] == TRUE ? '_blank' : '_self'; ?>" rel="noopener noreferrer">
            <?php echo $section['link2']['text']; ?> <i class="fas fa-chevron-right"></i>
          </a>
          <?php endif; ?>
          <?php if( $section['link3']['url'] ): ?>
          <a href="<?php echo $section['link3']['url']; ?>" class="link-list__link" target="<?php echo $section['link3']['new_tab'] == TRUE ? '_blank' : '_self'; ?>" rel="noopener noreferrer">
            <?php echo $section['link3']['text']; ?> <i class="fas fa-chevron-right"></i>
          </a>
          <?php endif; ?>
          <?php if( $section['link4']['url'] ): ?>
          <a href="<?php echo $section['link4']['url']; ?>" class="link-list__link" target="<?php echo $section['link4']['new_tab'] == TRUE ? '_blank' : '_self'; ?>" rel="noopener noreferrer">
            <?php echo $section['link4']['text']; ?> <i class="fas fa-chevron-right"></i>
          </a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <h3 class="centered" style="max-width: 700px"><?php echo get_field('second_section')['testimonial']; ?></h3>
  <img class="centered vertical-margin" src="<?php echo get_bloginfo('template_directory'); ?>/images/separator.svg" alt="">
  <h3 class="centered regular" style="max-width: 800px"><?php echo get_field('second_section')['text']; ?></h3>
</div>
<div class="shaded page-title">
  <div class="thirds-grid two-one condensed">
    <h2><?php echo get_field('third_section')['title']; ?></h2>
  </div>
</div>
<div class="shaded" style="margin-top: 0">
  <div class="thirds-grid two-one condensed">
    <div>
      <?php echo get_field('third_section')['text']; ?>
    </div>
    <div style="display:grid">
      <div class="link-list">
        <?php $section = get_field('third_section'); if( $section['link1']['url'] ): ?>
          <a href="<?php echo $section['link1']['url']; ?>" class="link-list__link dark" target="<?php echo $section['link1']['new_tab'] == TRUE ? '_blank' : '_self'; ?>" rel="noopener noreferrer">
            <?php echo $section['link1']['text']; ?> <i class="fas fa-chevron-right"></i>
          </a>
        <?php endif; ?>
        <?php if( $section['link2']['url'] ): ?>
          <a href="<?php echo $section['link2']['url']; ?>" class="link-list__link dark" target="<?php echo $section['link2']['new_tab'] == TRUE ? '_blank' : '_self'; ?>" rel="noopener noreferrer">
            <?php echo $section['link2']['text']; ?> <i class="fas fa-chevron-right"></i>
          </a>
        <?php endif; ?>
        <?php if( $section['link3']['url'] ): ?>
          <a href="<?php echo $section['link3']['url']; ?>" class="link-list__link dark" target="<?php echo $section['link3']['new_tab'] == TRUE ? '_blank' : '_self'; ?>" rel="noopener noreferrer">
            <?php echo $section['link3']['text']; ?> <i class="fas fa-chevron-right"></i>
          </a>
        <?php endif; ?>
        <?php if( $section['link4']['url'] ): ?>
          <a href="<?php echo $section['link4']['url']; ?>" class="link-list__link dark" target="<?php echo $section['link4']['new_tab'] == TRUE ? '_blank' : '_self'; ?>" rel="noopener noreferrer">
            <?php echo $section['link4']['text']; ?> <i class="fas fa-chevron-right"></i>
          </a>
        <?php endif; ?>
        <?php if( $section['link5']['url'] ): ?>
          <a href="<?php echo $section['link5']['url']; ?>" class="link-list__link dark" target="<?php echo $section['link5']['new_tab'] == TRUE ? '_blank' : '_self'; ?>" rel="noopener noreferrer">
            <?php echo $section['link5']['text']; ?> <i class="fas fa-chevron-right"></i>
          </a>
        <?php endif; ?>
        <?php if( $section['link6']['url'] ): ?>
          <a href="<?php echo $section['link6']['url']; ?>" class="link-list__link dark" target="<?php echo $section['link6']['new_tab'] == TRUE ? '_blank' : '_self'; ?>" rel="noopener noreferrer">
            <?php echo $section['link6']['text']; ?> <i class="fas fa-chevron-right"></i>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="page-content">
  <h3 class="centered regular" style="max-width: 700px">Nimbus Dance Works is a 501(c)3 non-profit professional dance company and school.</h3>
  <h3 class="centered" style="max-width: 700px">Thank you to our title sponsor</h3>
  <img class="centered vertical-margin" src="<?php the_field('sponsor'); ?>" alt="" style="max-width: 300px">
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
