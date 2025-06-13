<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GPS_Pharmacy_Solutions
 */

?>

<footer id="colophon" class="site-footer position-relative">
	<div class="container-fluid gps-bg-blue footer-section-container">
		<div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="row">
            <div class="col-lg-4 mb-3 mb-lg-0">
              <div class="footer-col-border-right">
                <section class="mb-3">
                  <a class="d-block mb-2 montserrat-font text-decoration-none title-link" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Compounding']); ?>" class="text-decoration-none">
                    Compounded
                  </a>
                  <?php
                    wp_nav_menu(array(
                      'theme_location'  => 'footer-products-menu',
                      'menu_id'         => 'footer-products-menu',
                      'menu_class'      => 'footer-menu',
                      'container_class' => 'ms-auto',
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                  ?>
                </section>
                <section>
                  <a class="d-block mb-2 montserrat-font text-decoration-none title-link" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Hospice']); ?>" class="text-decoration-none">
                    Hospice Solutions
                  </a>
                  <?php
                    wp_nav_menu(array(
                      'theme_location'  => 'footer-solutions-menu',
                      'menu_id'         => 'footer-solutions-menu',
                      'menu_class'      => 'footer-menu',
                      'container_class' => 'ms-auto',
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                  ?>
                </section>
              </div>
            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
              <div class="footer-col-border-right">
                <section class="mb-3">
                  <a class="d-block mb-2 montserrat-font text-decoration-none title-link" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="text-decoration-none">
                    Shop
                  </a>
                  <?php
                    wp_nav_menu(array(
                      'theme_location'  => 'footer-shop-menu',
                      'menu_id'         => 'footer-shop-menu',
                      'menu_class'      => 'footer-menu',
                      'container_class' => 'ms-auto',
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                  ?>
                </section>
                <section class="mb-3">
                  <span class="d-block mb-2 montserrat-font title-link">Research</span>
                  <?php
                    wp_nav_menu(array(
                      'theme_location'  => 'footer-research-menu',
                      'menu_id'         => 'footer-research-menu',
                      'menu_class'      => 'footer-menu',
                      'container_class' => 'ms-auto',
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                  ?>
                </section>
                <section>
                  <span class="d-block mb-2 montserrat-font title-link">Company</span>
                  <?php
                    wp_nav_menu(array(
                      'theme_location'  => 'footer-company-menu',
                      'menu_id'         => 'footer-company-menu',
                      'menu_class'      => 'footer-menu',
                      'container_class' => 'ms-auto',
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                  ?>
                </section>
              </div>
            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
              <section class="mb-3">
                <a class="d-block mb-2 montserrat-font text-decoration-none title-link" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Contact Us']); ?>" class="text-decoration-none">
                  Contact Us
                </a>
                <div class="contact-details">

                  <!-- set address -->
                  <?php $gps_address = get_theme_mod('gps_address'); ?>
                  <p><?php echo empty($gps_address) ? '4455 Morris Park Drive, Ste D, Charlotte, NC 28227' : $gps_address; ?></p>

                  <p class="mb-2 montserrat-font title-link">Hours</p>

                  <!-- set working hours -->
                  <?php $gps_working_hours = get_theme_mod('gps_working_hours'); ?>
                  <p><?php echo empty($gps_working_hours) ? 'Monday to Friday' : $gps_working_hours; ?> 8am - 5pm</p>

                  <!-- set working hours note -->
                  <?php $gps_working_hours_note = get_theme_mod('gps_working_hours_note'); ?>
                  <p><?php echo empty($gps_working_hours_note) ? '24 Hours per day / 365 days a year for registered accounts' : $gps_working_hours_note; ?></p>
                </div>
              </section>
              <section>
                <p class="montserrat-font title-link">Stay in Touch</p>
                <div class="d-md-flex align-items-start ps-4">
                  <div class="social-media d-flex flex-column justify-content-around">

                    <!-- set facebook info -->
                    <div>
                      <?php $gps_facebook_username = get_theme_mod('gps_facebook_username'); ?>
                      <?php $gps_facebook_link = get_theme_mod('gps_facebook_link'); ?>
                      <a href="<?php echo empty($gps_facebook_link) ? '#' : $gps_facebook_link; ?>" class="social-link d-flex align-items-center text-decoration-none">
                        <div class="icon d-flex align-items-center justify-content-center">
                          <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.97937 3.86292V5.68401H7.56493L7.19556 7.80896H4.97937V14.1838H2.02446V7.80896H0.546997V5.68401L2.03332 5.68967V3.86787C2.03332 1.84421 2.87769 0.730727 5.30515 0.730727L7.93429 0.725769V2.85073H6.03502C5.08501 2.85073 4.97937 3.1546 4.97937 3.86292Z" fill="#0851DE" />
                          </svg>
                        </div>
                        <div class="url"><?php echo empty($gps_facebook_username) ? 'GPSmymeds' : $gps_facebook_username; ?></div>
                      </a>
                    </div>

                    <!-- set instagram info -->
                    <div>
                      <?php $gps_instagram_username = get_theme_mod('gps_instagram_username'); ?>
                      <?php $gps_instagram_link = get_theme_mod('gps_instagram_link'); ?>
                      <a href="<?php echo empty($gps_instagram_link) ? '#' : $gps_instagram_link; ?>" class="social-link d-flex align-items-center text-decoration-none">
                        <div class="icon d-flex align-items-center justify-content-center">
                          <svg aria-hidden="true" width="17.14" height="15" data-prefix="fab" data-icon="instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#8a3ab9" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                          </svg>
                        </div>
                        <div class="url"><?php echo empty($gps_instagram_username) ? '@GPSmymeds' : $gps_instagram_username; ?></div>
                      </a>
                    </div>

                    <!-- set tel -->
                    <div>
                      <a href="tel:9802452028" class="social-link d-flex align-items-center text-decoration-none mb-0">
                        <div class="icon d-flex align-items-center justify-content-center">
                          <svg width="13" height="13" aria-hidden="true" data-prefix="fas" data-icon="phone-alt" class="svg-inline--fa fa-phone-alt fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 00-28 6.9l-49.6 60.6A370.66 370.66 0 01130.6 204.11l60.6-49.6a23.94 23.94 0 006.9-28l-48-112A24.16 24.16 0 00122.6.61l-104 24A24 24 0 000 48c0 256.5 207.9 464 464 464a24 24 0 0023.4-18.6l24-104a24.29 24.29 0 00-14.01-27.6z" />
                          </svg>
                        </div>
                        <div class="url">Call Us Now</div>
                      </a>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="media-4-3 media-lg-1-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.1456696829628!2d-80.68448492359957!3d35.15298765881006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885423a8ba066d6b%3A0xc9660f695bfddac2!2s4455%20Morris%20Park%20Dr%20d%2C%20Mint%20Hill%2C%20NC%2028227%2C%20USA!5e0!3m2!1sen!2sph!4v1683616673541!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
		</div>
	</div>
	<div class="site-info">
		<p class="text-center copyright">Copyright © <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?>. All Rights Reserved.</p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
