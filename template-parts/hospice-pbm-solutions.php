<?php

/**
 * Template Name: Hospice: PBM Solutions
 * 
 * @package GPS_Pharmacy_Solutions
 */

get_header();

?>

<main id="primary" class="site-main">
    <div class="container-fluid breadcrumbs-container d-none d-lg-block">
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
        <div class="row page-content-wrapper hospice-pbm mt-5">
            <div class="col-12">
                <?php the_title('<h1 class="entry-title montserrat-font mb-5 text-blue">', '</h1>'); ?>
            </div>
            <div class="col-lg-12">
                <div class="card-container ps-5 pe-5 pt-4 pb-4 position-relative mb-5">
                    <div class="number bg-blue">
                        <span>1</span>
                    </div>
                    <div class="content">
                        <div class="title montserrat-font fs-3 mb-3 text-primary">E-Prescribing</div>
                        <div class="description">
                            <p class="m-0">We make it easy and free for each hospice to send prescriptions electronically to their preferred pharmacies. Each provider is given access via mobile phone and computer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card-container ps-5 pe-5 pt-4 pb-4 position-relative mb-5">
                    <div class="number bg-success">
                        <span>2</span>
                    </div>
                    <div class="content">
                        <div class="title montserrat-font fs-3 mb-3 text-primary">Reporting & Analytics</div>
                        <div class="description">
                            <p class="m-0">Real-time reports are available to be generated through our interactive dashboard providing all necessary reviews and documentation required for compliance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card-container ps-5 pe-5 pt-4 pb-4 position-relative mb-5">
                    <div class="number bg-warning">
                        <span>3</span>
                    </div>
                    <div class="content">
                        <div class="title montserrat-font fs-3 mb-3 text-primary">Regulatory Compliance</div>
                        <div class="description">
                            <p class="m-0">We help you stay ahead of CMS changes and compliance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card-container ps-5 pe-5 pt-4 pb-4 position-relative mb-5">
                    <div class="number bg-success">
                        <span>4</span>
                    </div>
                    <div class="content">
                        <div class="title montserrat-font fs-3 mb-3 text-primary">Continuing Education</div>
                        <div class="description">
                            <p class="m-0">PDC Rx library features more than 175 courses for online staff education and compliance. Including the End of Life Nursing Education Consortium (ELNEC) training.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card-container ps-5 pe-5 pt-4 pb-4 position-relative mb-5" style="margin-bottom: 0 !important;">
                    <div class="number bg-blue">
                        <span>5</span>
                    </div>
                    <div class="content">
                        <div class="title montserrat-font fs-3 mb-3 text-primary">EMR Integration</div>
                        <div class="description">
                            <p class="m-0">We integrate with top EMR companies to allow nurses and providers to spend more time with their patients and less time charting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
