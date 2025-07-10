<?php

/**
 * Template Name: Company Pages
 *
 * @package GPS_Pharmacy_Solutions
 */

get_header();

$is_faq_page = (bool) empty(get_the_post_thumbnail_url());
$current_page_url = $_SERVER['REQUEST_URI'];
$is_about_page = strpos($current_page_url, '/company/about/') !== false;
?>

<main id="primary" class="site-main">
    <div class="container-fluid breadcrumbs-container d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb montserrat-font m-0">
                            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-decoration-none text-secondary">Home</a></li>
                            <li class="breadcrumb-item breadcrumb-current"><?php echo get_the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php if ($is_faq_page) : ?>
        <div class="container">
            <div class="row page-content-wrapper page-faq">
                <div class="col">
                    <?php the_title('<h1 class="entry-title montserrat-font page-title">', '</h1>'); ?>
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header montserrat-font" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    I am an organization or provider, how do I set up an account with you?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4">
                                                <p class="faq-body-heading">You can contact us at:</p>
                                                <p>

                                                    <!-- set phone number -->
                                                    <?php $gps_phone = get_theme_mod('gps_phone'); ?>
                                                    P. <a href="tel:<?php echo empty($gps_phone) ? '980-245-2028' : $gps_phone; ?>" class="text-decoration-none"><?php echo empty($gps_phone) ? '980-245-2028' : $gps_phone; ?></a>
                                                    <br>
                                                    <!-- set fax number -->
                                                    <?php $gps_fax = get_theme_mod('gps_fax'); ?>
                                                    F. <?php echo empty($gps_fax) ? '980-245-2224' : $gps_fax; ?>
                                                </p>

                                                <p class="faq-body-heading">Write to GPS Pharmacy:</p>

                                                <!-- set address -->
                                                <?php $gps_address = get_theme_mod('gps_address'); ?>
                                                <p><?php echo empty($gps_address) ? '4455 Morris Park Drive, Ste D, Charlotte NC, 28227' : $gps_address; ?></p>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="d-flex flex-column align-items-center">
                                                    <p class="faq-body-heading text-center fs-5">Sign up below and a member of our team will be in touch.</p>
                                                    <div class="organization-form">
                                                        <?php echo do_shortcode('[contact-form-7 id="114" title="FAQs provider form"]'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header montserrat-font" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    I am a patient looking to use your pharmacy, how do I transfer my prescription?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <p class="fs-5 pe-5">We will gladly call your current physician or pharmacy and transfer your prescription to GPS Pharmacy. Please contact us at

                                                    <!-- set phone number -->
                                                    <?php $gps_phone = get_theme_mod('gps_phone'); ?>
                                                    <a href="tel:<?php echo empty($gps_phone) ? '980-245-2028' : $gps_phone; ?>" class="text-decoration-none"><?php echo empty($gps_phone) ? '980-245-2028' : $gps_phone; ?></a>.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex flex-column align-items-center">
                                                    <p class="faq-body-heading text-center fs-5">Or fill in the Patient Transfer Request:</p>
                                                    <div class="organization-form">
                                                        <?php echo do_shortcode('[contact-form-7 id="163" title="FAQs Patient Transfer Request form"]'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header montserrat-font" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Where are your ingredients sourced?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="fs-5">We source all of our pharmaceutical ingredients from FDA registered facilities in the US. We are a PCCA registered pharmacy and source our bioidentical hormones and bases from PCCA, the leading manufacturer in bioidentical hormone therapy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header montserrat-font" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Is your shipping always free?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="fs-5">Absolutely! Our shipping is always complimentary. We offer free same day delivery in the Carolinas and free ground shipping to all other states.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header montserrat-font" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How long will it take to compound my prescription?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="fs-5">Orders received by 3pm EST may be compounded and dispatched the same day for delivery.</p>
                                    <p class="fs-5">Orders received after 3pm may be compounded the next business day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header montserrat-font" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What payments do you accept?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="fs-5">We accept all major credit cards, including Visa, MasterCard, Discover and American Express.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="container-fluid company page-cover">
            <div class="row header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-position: top"></div>
            <?php
                    	if ($is_about_page) {
                    		echo '<p class="text-center mt-3" style="font-size:10px">GPS Pharmacy\'s Team members: Julya /Pharm.D. & Ashley /CPhT /QCS</p>';
                    	}
                    ?>
        </div>
        <div class="container">
            <div class="row page-content-wrapper">
                <div class="col-lg-6">
                    <?php the_title('<h1 class="entry-title montserrat-font page-title">', '</h1>'); ?>
                    <div class="entry-content text-center text-lg-start">
                        <?php
                        the_content(
                            sprintf(
                                wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'gps-pharmacy-solutions'),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                wp_kses_post(get_the_title())
                            )
                        );

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__('Pages:', 'gps-pharmacy-solutions'),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div><!-- .entry-content -->
                </div>
                <div class="col-lg-6 d-flex justify-content-end thumbnail <?php if ($is_about_page) echo 'flex-column text-center' ?>">
                    <?php gps_pharmacy_solutions_post_thumbnail(); ?>
                    <?php
                    	if ($is_about_page) {
                    		echo '<p class="mt-3">GPS Pharmacy\'s Team members: Julya /Pharm.D. & Ashley /CPhT /QCS</p>';
                    	}
                    ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
