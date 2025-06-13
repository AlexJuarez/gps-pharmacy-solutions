<?php

/**
 * Template Name: Hospice: Products
 * 
 * @package GPS_Pharmacy_Solutions
 */

get_header();

?>

<main id="primary" class="site-main">
    <div class="container-fluid breadcrumbs-container d-none d-lg-block hospice-cwm">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb montserrat-font m-0">
                            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-decoration-none text-secondary">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Hospice']); ?>" class="text-decoration-none text-secondary">Hospice</a></li>
                            <li class="breadcrumb-item breadcrumb-current"><?php echo get_the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row page-content-wrapper hospice-cwm mt-5">
            <div class="col-12">
                <?php the_title('<h1 class="entry-title montserrat-font mb-5">', '</h1>'); ?>
                <p class="mt-4 mb-5 notice text-white text-center fs-5 fw-bold">
                    We house a full service compounding lab onsite, available to deliver and ship compounded hospice preparations to your patient. We make suppositories, SL drops, multi drug capsules, and more.
                    <br><br>
                    Learn about our most popular preparations (Atropine, ABH, ABHR, BARPH etc.).
                </p>
            </div>
            <div class="col-lg col-6 product-cat">
                <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                    <img src="<?php echo get_theme_file_uri() . '/img/hospice/compounding/1.jpg'; ?>" alt="">
                </div>
                <div class="product-title-wrapper">
                    <p class="product-title fw-bold mb-2">Topical Creams</p>
                </div>
                <div class="product-description-wrapper">
                    <p class="product-description">Ativan<br>Benadryl<br>Haloperidol<br>Reglan<br>Phenergan<br>Phenobarbital</p>
                </div>
            </div>
            <div class="col-lg col-6 product-cat">
                <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                    <img src="<?php echo get_theme_file_uri() . '/img/hospice/compounding/2.png'; ?>" alt="">
                </div>
                <div class="product-title-wrapper">
                    <p class="product-title fw-bold mb-2">Suppositories</p>
                </div>
                <div class="product-description-wrapper">
                    <p class="product-description">Diazepam<br>Ativan<br>Benadryl<br>Haloperidol<br>Reglan<br>Phenergan<br>Phenobarbital</p>
                </div>
            </div>
            <div class="col-lg col-6 product-cat">
                <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                    <img src="<?php echo get_theme_file_uri() . '/img/hospice/compounding/3.png'; ?>" alt="">
                </div>
                <div class="product-title-wrapper">
                    <p class="product-title fw-bold mb-2">Sublingual Drops</p>
                </div>
                <div class="product-description-wrapper">
                    <p class="product-description">Many drugs can be turned into sublingual drops for ease of use</p>
                </div>
            </div>
            <div class="col-lg col-6 product-cat">
                <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                    <img src="<?php echo get_theme_file_uri() . '/img/hospice/compounding/4.png'; ?>" alt="">
                </div>
                <div class="product-title-wrapper">
                    <p class="product-title fw-bold mb-2">Atropine Oral Drops</p>
                </div>
                <div class="product-description-wrapper">
                    <p class="product-description"></p>
                </div>
            </div>
            <div class="col-lg col-6 product-cat">
                <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                    <img src="<?php echo get_theme_file_uri() . '/img/hospice/compounding/5.png'; ?>" alt="">
                </div>
                <div class="product-title-wrapper">
                    <p class="product-title fw-bold mb-2">Hemorrhoids</p>
                </div>
                <div class="product-description-wrapper">
                    <p class="product-description">Lidocaine<br>Hydrocortisone Gel or Suppositories</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid hospice-cwm-section-bg-cover" style="background-image: url(<?php echo get_theme_file_uri() . '/img/hospice/compounding/bg.jpg'; ?>);">
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mx-auto notice text-white text-center fs-5 p-5 gps-bg-blue hospice-cwm-over-cover" style="margin-top: -200px; max-width: 850px">
                    <p class="fs-2 fw-bold montserrat-font">Wound Management is our Specialty</p>
                    <p class="mt-5 mb-5 text-baby-blue px-5">We have medicated powders, ointments, and sprays to alleviate pain, infection, bleeding, and odor. We have 24/7 consultant pharmacist available to create a custom order for your patient for their specific wound.</p>
                    <p class="fs-4 fw-bold montserrat-font">View below our compounded hospice preparations:</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row page-content-wrapper hospice-cwm hospice-cwm-after-cover">
            <div class="offset-lg-4 offset-lg-4 col-lg-4 col-xl-4 col-xxl-4 col-md-12 col-sm-12">
                <div class="product-title-wrapper">
                    <p class="product-title fw-bold mb-2">Wound preparations can come in:</p>
                </div>
                <div class="product-description-wrapper">
                    <p class="product-description">Powder<br>Jelly Powder (jellies on contact with drainage)<br>Gels<br>Sprays</p>
                </div>
                <div class="product-title-wrapper">
                    <p class="product-title fw-bold mb-2">Non-Healing, Infected Wounds, and Painful Wounds:</p>
                </div>
                <div class="product-description-wrapper">
                    <p class="product-description">Gentamicin<br>Flagyl<br>Lidocaine<br>Custom Strengths</p>
                </div>
                <div class="product-title-wrapper">
                    <p class="product-title fw-bold mb-2">Bleeding Wounds/Cancers:</p>
                </div>
                <div class="product-description-wrapper">
                    <p class="product-description">Epinephrine<br>Lidocaine</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block dark-blue-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="ms-auto me-auto text-white text-center fs-5 p-5">
                        <p class="fs-1 fw-light montserrat-font">Contact Us for Our Full Drug List</p>
                        <p class="mb-5 montserrat-font">Get In Touch! We are here to answer your question.</p>
                        <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Contact Us']); ?>" class="d-block m-auto montserrat-font bg-success w-fit-content text-white text-decoration-none gps-url-button">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
