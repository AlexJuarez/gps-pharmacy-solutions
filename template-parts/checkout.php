<?php

/**
 * Template Name: Shop: Checkout
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GPS_Pharmacy_Solutions
 */

get_header('shop');
?>

<main id="primary" class="site-main">
    <div class="container-fluid breadcrumbs-container shop d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb montserrat-font m-0">
                            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-decoration-none text-secondary">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="text-decoration-none text-secondary">Shop</a></li>
                            <li class="breadcrumb-item breadcrumb-current"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container page-content-wrapper-half">
        <div class="row mb-4">
            <h1 class="page-title text-primary text-md-start text-center"><?php the_title(); ?></h1>
        </div>
        <div class="row">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer('shop');
