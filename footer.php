    </main>
    <footer class="footer">
      <div class="site-map">
        <div class="footer__mobile-links">
          <?php wp_nav_menu(array( 
            'theme_location'  => 'footer-menu',
            'container_class' => 'footer-mobile__menu',
            'menu_class'      => 'footer-menu__list',
            'container'       => 'div'
          )); ?>
          <hr>
        </div>
        <div class="footer__links">
          <div class="footer__col">
            <h3>NIMBUS DANCE</h3>
            <?php 
              wp_nav_menu(array( 
              'theme_location'  => 'footer-menu-desktop1',
              'container_class' => 'footer-desktop__menu',
              'menu_class'      => 'footer-desktop-menu__list',
              'container'       => 'div'
            )); ?>
          </div>
          <div class="footer__col">
            <h3>NIMBUS ARTS CENTER</h3>
            <?php 
              wp_nav_menu(array( 
              'theme_location'  => 'footer-menu-desktop2',
              'container_class' => 'footer-desktop__menu',
              'menu_class'      => 'footer-desktop-menu__list',
              'container'       => 'div'
            )); ?>
          </div>
          <div class="footer__col">
            <h3>EVENTS</h3>
            <?php 
              wp_nav_menu(array( 
              'theme_location'  => 'footer-menu-desktop3',
              'container_class' => 'footer-desktop__menu',
              'menu_class'      => 'footer-desktop-menu__list',
              'container'       => 'div'
            )); ?>
          </div>
          <div class="footer__col">
            <h3>SCHOOL OF NIMBUS</h3>
            <?php 
              wp_nav_menu(array( 
              'theme_location'  => 'footer-menu-desktop4',
              'container_class' => 'footer-desktop__menu',
              'menu_class'      => 'footer-desktop-menu__list',
              'container'       => 'div'
            )); ?>
          </div>
          <div class="footer__col">
            <h3>OUTREACH</h3>
            <?php 
              wp_nav_menu(array( 
              'theme_location'  => 'footer-menu-desktop5',
              'container_class' => 'footer-desktop__menu',
              'menu_class'      => 'footer-desktop-menu__list',
              'container'       => 'div'
            )); ?>
          </div>
          <div class="footer__col">
            <h3>SUPPORT</h3>
            <?php 
              wp_nav_menu(array( 
              'theme_location'  => 'footer-menu-desktop6',
              'container_class' => 'footer-desktop__menu',
              'menu_class'      => 'footer-desktop-menu__list',
              'container'       => 'div'
            )); ?>
            <div class="social-icons">
              <a href="https://www.facebook.com/NimbusDance" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://www.instagram.com/nimbusdance" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram-square"></i>
              </a>
              <a href="https://twitter.com/nimbusdance" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="/contact">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="website-credits">
        <div class="authors">
          <p>Julian Garcia, Frontend&nbsp;Web&nbsp;Developer
            <a href="https://julian-garcia.uk" target="_blank" rel="noopener noreferrer">
              <i class="fas fa-link"></i>
            </a>
            <a href="https://www.linkedin.com/in/juliangarcialeoni/" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-linkedin"></i>
            </a>
          </p>
          <p>Christine Lhowe, Art director, designer,&nbsp;and&nbsp;educator
            <a href="https://christinelhowe.com" target="_blank" rel="noopener noreferrer">
              <i class="fas fa-link"></i>
            </a>
          </p>
        </div>
      </div>
      <div class="footer-company">
        <div class="footer-company__columns">
          <img class="footer-company__logo" src="<?php echo get_bloginfo('template_directory'); ?>/images/nimbus-white.png" alt="">
          <span class="footer-company__address">329 Warren Street | Jersey City, NJ 07302 | (201) 377-0718</span>
          <span class="footer-company__copywrite">© 2020 Nimbus Dance Works. All rights reserved.</span>
          <div class="footer-company__addr">
            <p>329 Warren Street | Jersey City, NJ 07302 | (201) 377-0718</p>
            <p>© 2020 Nimbus Dance Works. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>