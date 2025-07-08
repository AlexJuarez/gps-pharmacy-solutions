<?php

/**
 * Template Name: Hospice: Solutions
 *
 * @package GPS_Pharmacy_Solutions
 */

get_header();

?>

<main id="primary" class="site-main">
    <div class="container-fluid hospice">
        <div class="row header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
    </div>
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
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 py-5 px-sm-5 px-4 d-flex justify-content-end">
                <div class="hospice-content-wrapper">
                    <?php the_title('<h1 class="entry-title montserrat-font page-title"', '</h1>'); ?>
                    <div class="entry-content">
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
            </div>
            <div class="col-lg-6 d-flex justify-content-end hospice-thumbnail p-0" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
