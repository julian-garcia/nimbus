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
            <a class="footer__link" href="#">About</a>
            <a class="footer__link" href="#">Mission Statement</a>
            <a class="footer__link" href="#">History of Nimbus</a>
            <a class="footer__link" href="#">Artistic Director</a>
            <a class="footer__link" href="#">Staff / Board</a>
            <a class="footer__link" href="#">Press Kit</a>
            <a class="footer__link" href="#">Auditions</a>
            <a class="footer__link" href="#">Reviews / Quotes</a>
          </div>
          <div class="footer__col">
            <h3>NIMBUS ARTS CENTER</h3>
            <a class="footer__link" href="#">Become a member</a>
            <a class="footer__link" href="#">Upcoming Events</a>
            <a class="footer__link" href="#">Singing with Molly</a>
            <a class="footer__link" href="#">OICMT</a>
            <a class="footer__link" href="#">Segunda Quimbamba</a>
            <a class="footer__link" href="#">Visual Arts Gallery</a>
            <a class="footer__link" href="#">Theatre</a>
          </div>
          <div class="footer__col">
            <h3>EVENTS</h3>
            <a class="footer__link" href="#">Ticketing Policies</a>
            <a class="footer__link" href="#">Virtual Grand Opening</a>
            <a class="footer__link" href="#">Musica y Ritmos</a>
            <a class="footer__link" href="#">South Asian Series</a>
          </div>
          <div class="footer__col">
            <h3>SCHOOL OF NIMBUS</h3>
            <a class="footer__link" href="#">About</a>
            <a class="footer__link" href="#">Curriculum</a>
            <a class="footer__link" href="#">Upcoming Events</a>
            <a class="footer__link" href="#">Calendar</a>
            <a class="footer__link" href="#">Scholarships</a>
            <a class="footer__link" href="#">Tuition & Scholarship</a>
            <a class="footer__link" href="#">Faculty</a>
            <a class="footer__link" href="#">Dresscode</a>
            <a class="footer__link" href="#">Auditions</a>
            <a class="footer__link" href="#">Class Information</a>
          </div>
          <div class="footer__col">
            <h3>OUTREACH</h3>
            <a class="footer__link" href="#">Memo</a>
            <a class="footer__link" href="#">Lynchtown/Thistown</a>
            <a class="footer__link" href="#">Scholarship Pledge</a>
            <a class="footer__link" href="#">Dance Beyond Horizons</a>
            <a class="footer__link" href="#">After School Programs</a>
            <a class="footer__link" href="#">Dance to Learn</a>
            <a class="footer__link" href="#">JC Grooves</a>
          </div>
          <div class="footer__col">
            <h3>ACADIA</h3>
            <a class="footer__link" href="#">About</a>
            <a class="footer__link" href="#">Submissions</a>
            <a class="footer__link" href="#">Acadia Dance Festival</a>
            <a class="footer__link" href="#">Dance Intensive</a>
            <a class="footer__link" href="#">Partners</a>
            <a class="footer__link" href="#">Committee</a>
            <h3>SUPPORT</h3>
            <a class="footer__link" href="#">Donate</a>
            <a class="footer__link" href="#">COVID-19 Fund</a>
            <a class="footer__link" href="#">Scholarship Fund</a>
            <a class="footer__link" href="#">Capitol Campaign</a>
            <a class="footer__link" href="#">Donor Benefits</a>
            <a class="footer__link" href="#">Volunteer</a>
            <a class="footer__link" href="#">In-Kind Donations</a>
            <a class="footer__link" href="#">Donors</a>
            <div class="social-icons">
              <a href="https://www.facebook.com/NimbusDanceWorks" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook"></i>
              </a>
              <a href="https://www.instagram.com/nimbusdanceworks/" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-instagram-square"></i>
              </a>
              <a href="https://twitter.com/nimbusdance" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" target="_blank" rel="noopener noreferrer">
                <i class="fas fa-envelope"></i>
              </a>
            </div>
          </div>
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