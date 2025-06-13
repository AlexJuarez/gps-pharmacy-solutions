<?php

/**
 * Template Name: Contact Us
 *
 * @package GPS_Pharmacy_Solutions
 */

get_header();
?>

<main id="primary" class="site-main position-relative">
    <a class="text-decoration-none d-md-none" href="tel:9802452028">
        <div class="floating-cta montserrat-font position-absolute bg-white" style="right: 20px; top: 20px; padding: 10px 20px;">
            <svg width="13" height="13" aria-hidden="true" data-prefix="fas" data-icon="phone-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#016fb7" d="M497.39 361.8l-112-48a24 24 0 00-28 6.9l-49.6 60.6A370.66 370.66 0 01130.6 204.11l60.6-49.6a23.94 23.94 0 006.9-28l-48-112A24.16 24.16 0 00122.6.61l-104 24A24 24 0 000 48c0 256.5 207.9 464 464 464a24 24 0 0023.4-18.6l24-104a24.29 24.29 0 00-14.01-27.6z"></path>
            </svg><span class="fw-bold ps-3">Get in Touch!</span>
        </div>
    </a>

    <div class="container-fluid contact-us">
        <div class="row header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
    </div>
    <div class="container">
        <div class="row">
            <h1 class="page-title mt-5 text-primary">Get In Touch!</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-xl-7 pe-xl-5 mb-0 bg-blue p-md-5 p-4">
                <p class="mb-5 text-white fw-bold text-center">If you are interested in receiving more information from GPS Pharmacy Services, please complete this form and one of our team members will reach out to you.</p>
                <?php echo do_shortcode('[contact-form-7 id="92" title="Contact form"]'); ?>
                <style>
                    textarea {
                        height: 100px;
                    }
                </style>
            </div>
            <div class="col-xl-5">
                <div class="row">
                    <div class="col-lg-6 ps-3">
                        <p class="montserrat-font text-orange mt-5">Address</p>
                        <div class="contact-details">

                            <!-- set address -->
                            <?php $gps_address = get_theme_mod('gps_address'); ?>
                            <p><?php echo empty($gps_address) ? '4455 Morris Park Drive, Ste D, Charlotte, NC 28227' : $gps_address; ?></p>
                        </div>

                        <p class="montserrat-font text-orange">Hours</p>

                        <div class="contact-details">

                            <!-- set working hours -->
                            <?php $gps_working_hours = get_theme_mod('gps_working_hours'); ?>
                            <p><?php echo empty($gps_working_hours) ? 'Monday to Friday' : $gps_working_hours; ?></p>
                            <p>8am - 5pm</p>

                            <!-- set working hours note -->
                            <?php $gps_working_hours_note = get_theme_mod('gps_working_hours_note'); ?>
                            <p><?php echo empty($gps_working_hours_note) ? '24 Hours per day / 365 days a year for registered accounts' : $gps_working_hours_note; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-3">
                        <p class="montserrat-font text-orange mt-5">Contact Us</p>
                        <div class="contact-details">
                            <p>

                                <!-- set phone number -->
                                <?php $gps_phone = get_theme_mod('gps_phone'); ?>
                                <strong>P. </strong><a href="tel:<?php echo empty($gps_phone) ? '980-245-2028' : $gps_phone; ?>" class="text-decoration-none"><?php echo empty($gps_phone) ? '980-245-2028' : $gps_phone; ?></a>
                                <br>
                                <!-- set fax number -->
                                <?php $gps_fax = get_theme_mod('gps_fax'); ?>
                                <strong>F. </strong><?php echo empty($gps_fax) ? '980-245-2224' : $gps_fax; ?>
                            </p>

                        </div>
                        <p class="montserrat-font text-orange">Email</p>
                        <div class="contact-details">
                            <!-- set email address -->
                            <?php $gps_email = get_theme_mod('gps_email'); ?>
                            <p><a href="mailto:<?php echo empty($gps_email) ? 'gpspharmacyteam@gpsmymeds.com' : $gps_email; ?>" class="text-decoration-none"><strong><?php echo empty($gps_email) ? 'gpspharmacyteam@gpsmymeds.com' : $gps_email; ?></strong></a></p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <p class="montserrat-font text-orange">Stay in Touch</p>
                        <div class="social-media d-flex justify-content-around flex-md-row flex-column">

                            <!-- set facebook info -->
                            <div>
                                <?php $gps_facebook_username = get_theme_mod('gps_facebook_username'); ?>
                                <?php $gps_facebook_link = get_theme_mod('gps_facebook_link'); ?>
                                <a href="<?php echo empty($gps_facebook_link) ? '#' : $gps_facebook_link; ?>" class="social-link d-flex align-items-center text-decoration-none">
                                    <div class="icon facebook d-flex align-items-center justify-content-center">
                                        <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.97937 3.86292V5.68401H7.56493L7.19556 7.80896H4.97937V14.1838H2.02446V7.80896H0.546997V5.68401L2.03332 5.68967V3.86787C2.03332 1.84421 2.87769 0.730727 5.30515 0.730727L7.93429 0.725769V2.85073H6.03502C5.08501 2.85073 4.97937 3.1546 4.97937 3.86292Z" fill="#fff" />
                                        </svg>
                                    </div>
                                    <div class="url">
                                        <?php echo empty($gps_facebook_username) ? 'GPSmymeds' : $gps_facebook_username; ?>
                                    </div>
                                </a>
                            </div>

                            <!-- set instagram info -->
                            <div>
                                <?php $gps_instagram_username = get_theme_mod('gps_instagram_username'); ?>
                                <?php $gps_instagram_link = get_theme_mod('gps_instagram_link'); ?>
                                <a href="<?php echo empty($gps_instagram_link) ? '#' : $gps_instagram_link; ?>" class="social-link d-flex align-items-center text-decoration-none">
                                    <div class="icon instagram d-flex align-items-center justify-content-center">
                                        <svg aria-hidden="true" width="17.14" height="15" data-prefix="fab" data-icon="instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="#fff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                        </svg>
                                    </div>
                                    <div class="url"><?php echo empty($gps_instagram_username) ? '@GPSmymeds' : $gps_instagram_username; ?></div>
                                </a>
                            </div>

                            <!-- set tel -->
                            <div>
                                <a href="tel:9802452028" class="social-link d-flex align-items-center text-decoration-none mb-0">
                                    <div class="icon d-flex align-items-center justify-content-center bg-success">
                                        <svg width="13" height="13" aria-hidden="true" data-prefix="fas" data-icon="phone-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="#fff" d="M497.39 361.8l-112-48a24 24 0 00-28 6.9l-49.6 60.6A370.66 370.66 0 01130.6 204.11l60.6-49.6a23.94 23.94 0 006.9-28l-48-112A24.16 24.16 0 00122.6.61l-104 24A24 24 0 000 48c0 256.5 207.9 464 464 464a24 24 0 0023.4-18.6l24-104a24.29 24.29 0 00-14.01-27.6z" />
                                        </svg>
                                    </div>
                                    <div class="url">Call Us Now</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gps-map p-0 m-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6524.291712941256!2d-80.68191!3d35.152983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885423a8ba066d6b%3A0xc9660f695bfddac2!2s4455%20Morris%20Park%20Dr%20d%2C%20Mint%20Hill%2C%20NC%2028227%2C%20USA!5e0!3m2!1sen!2sph!4v1683617365671!5m2!1sen!2sph" width="1920" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=44f27551833e3108dfa807e3836af29d6edeea67'></script>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
