<?php

/**
 * Template Name: Research
 * 
 * @package GPS_Pharmacy_Solutions
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container-fluid contact-us d-md-block d-lg-none d-xl-none d-xxl-none">
        <div class="row header" style="background-image: url('<?php echo get_theme_file_uri() . '/img/research/cover.jpg'; ?>'); background-position: right;"></div>
    </div>
    <div class="container-fluid breadcrumbs-container d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb montserrat-font m-0">
                            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-decoration-none text-secondary">Home</a></li>
                            <li class="breadcrumb-item breadcrumb-current">Research</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container page-content-wrapper-half">
        <div class="row">
            <h1 class="page-title"><?php echo get_the_title(); ?></h1>
            <p class="fw-bold mt-4">Contact GPS Pharmacy</p>
        </div>
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="d-flex flex-column align-items-center">
                    <div class="research organization-form">
                        <?php echo do_shortcode('[contact-form-7 id="147" title="Research form"]'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex d-xl-flex d-xxl-flex justify-content-end thumbnail d-none">
                <img src="<?php echo get_theme_file_uri() . '/img/research/cover.jpg'; ?>" alt="Thumbnail image" style="object-fit: cover; object-position: right;">
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
