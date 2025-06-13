<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GPS_Pharmacy_Solutions
 */
if (!defined('ABSPATH')) exit;
//add_action('wp_head', 'preload_images');
function preload_images() {
  $images = [
    get_bloginfo('template_url') . '/img/hero/home-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/home-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/home-md.jpg',
    get_bloginfo('template_url') . '/img/hero/home-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/womens-health-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/womens-health-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/womens-health-md.jpg',
    get_bloginfo('template_url') . '/img/hero/womens-health-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/mens-health-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/mens-health-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/mens-health-md.jpg',
    get_bloginfo('template_url') . '/img/hero/mens-health-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/sterile-compounding-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/sterile-compounding-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/sterile-compounding-md.jpg',
    get_bloginfo('template_url') . '/img/hero/sterile-compounding-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/veterinary-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/veterinary-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/veterinary-md.jpg',
    get_bloginfo('template_url') . '/img/hero/veterinary-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/aesthetics-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/aesthetics-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/aesthetics-md.jpg',
    get_bloginfo('template_url') . '/img/hero/aesthetics-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/medication-access-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/medication-access-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/medication-access-md.jpg',
    get_bloginfo('template_url') . '/img/hero/medication-access-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/clinical-support-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/clinical-support-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/clinical-support-md.jpg',
    get_bloginfo('template_url') . '/img/hero/clinical-support-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/best-pricing-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/best-pricing-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/best-pricing-md.jpg',
    get_bloginfo('template_url') . '/img/hero/best-pricing-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/infusion-therapy-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/infusion-therapy-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/infusion-therapy-md.jpg',
    get_bloginfo('template_url') . '/img/hero/infusion-therapy-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/compounding-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/compounding-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/compounding-md.jpg',
    get_bloginfo('template_url') . '/img/hero/compounding-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/pbm-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/pbm-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/pbm-md.jpg',
    get_bloginfo('template_url') . '/img/hero/pbm-xs.jpg',
    get_bloginfo('template_url') . '/img/hero/shop-xl.jpg',
    get_bloginfo('template_url') . '/img/hero/shop-lg.jpg',
    get_bloginfo('template_url') . '/img/hero/shop-md.jpg',
    get_bloginfo('template_url') . '/img/hero/shop-xs.jpg'
  ];

  foreach( $images as $image ) {
    echo '<link rel="preload" as="image" href="' . $image . '">';
  }
}

get_header();
?>

<main id="primary" class="site-main">
  <section class="align-items-center bg-white d-flex hero py-5">
    <div class="container mb-7 mt-6 mt-lg-0 w-100">
      <div class="g-0 row">
        <div class="col-lg-6 ms-lg-auto px-4">
          <div class="h5 text-darkblue">Welcome to</div>
          <h1 class="mb-4 montserrat-font text-darkblue">GPS Pharmacy in Charlotte NC - The Premiere Concierge Pharmacy of the Carolinas.</h1>
          <a class="btn btn-blue btn-sm fw-bold montserrat-font px-4 rounded small py-2" href="<?= get_permalink( wc_get_page_id( 'shop' ) ) ?>">Explore Now</a>
        </div>
      </div>
    </div>
    <div class="hero-image" data-hero-image="home"></div>
  </section>

  <div class="hero-navigation">
    <div class="container">
      <div class="gps-info-boxes-container">
        <div class="g-0 mx-n1 row">
          <div class="col-6 col-lg-3 mb-3 mb-lg-0 px-1">
            <div class="gps-info-box gps-compounding">
              <div class="gps-info-box-back gps-info-box-fbc d-flex flex-column justify-content-center gps-bg-blue">
                <a class="mt-auto" data-hero-trigger="womens-health" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Women\'s Health']); ?>">Women's Health</a>
                <a data-hero-trigger="mens-health" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Men\'s Health']); ?>">Men's Health</a>
                <a data-hero-trigger="sterile-compounding" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Sterile Compounding']); ?>">Sterile Compounding (coming soon)</a>
                <a data-hero-trigger="veterinary-2" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Veterinary']); ?>">Veterinary</a>
                <a class="mb-auto" data-hero-trigger="aesthetics" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Aesthetics']); ?>">Aesthetics</a>
                <div class="button montserrat-font">
                  <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Compounding']); ?>" class="bg-white text-primary w-fit-content ms-auto me-auto">Explore Now</a>
                </div>
              </div>
              <div class="gps-info-box-front gps-info-box-fbc d-flex flex-column align-items-center justify-content-center">
                <div class="align-items-center d-flex flex-column justify-content-center my-auto">
                  <div class="icon">
                    <img src="<?php echo get_theme_file_uri() . '/img/homepage/compounding.svg'; ?>" alt="Compounding">
                  </div>
                  <div class="title montserrat-font">
                    <p class="fs-4">Compounding</p>
                  </div>
                </div>
                <div class="button montserrat-font">
                  <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Compounding']); ?>">Explore Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mb-3 mb-lg-0 px-1">
            <div class="gps-info-box gps-hospice">
              <div class="gps-info-box-back gps-info-box-fbc d-flex flex-column justify-content-center bg-warning">
                <a class="mt-auto" data-hero-trigger="medication-access" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Medication Access']); ?>">Medication Access</a>
                <a data-hero-trigger="clinical-support" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Clinical Support']); ?>">Clinical Support</a>
                <a data-hero-trigger="best-pricing" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Best in Industry Pricing']); ?>">Best in Industry Pricing</a>
                <a data-hero-trigger="infusion-therapy" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Infusion Therapy']); ?>">Infusion Therapy</a>
                <a data-hero-trigger="compounding" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Hospice Compounding & Wound Management']); ?>">Hospice Compounding & Wound Management</a>
                <a class="mb-auto" data-hero-trigger="pbm" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['PBM Solutions with PDCRx']); ?>">PBM Solutions</a>
                <div class="button montserrat-font">
                  <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Hospice']); ?>" class="bg-white text-warning w-fit-content ms-auto me-auto">Explore Now</a>
                </div>
              </div>
              <div class="gps-info-box-front gps-info-box-fbc d-flex flex-column align-items-center justify-content-center">
                <div class="align-items-center d-flex flex-column justify-content-center my-auto">
                  <div class="icon">
                    <img src="<?php echo get_theme_file_uri() . '/img/homepage/hospice.svg'; ?>" alt="Hospice">
                  </div>
                  <div class="title montserrat-font">
                    <p class="fs-4">Hospice</p>
                  </div>
                </div>
                <div class="button montserrat-font">
                  <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Hospice']); ?>">Explore Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mb-3 mb-lg-0 px-1">
            <div class="gps-info-box gps-research">
              <div class="gps-info-box-back gps-info-box-fbc d-flex flex-column justify-content-center bg-info">
                <a class="my-auto" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Clinical Trials and Research']); ?>">Clinical Trials and Research</a>
                <div class="button montserrat-font">
                  <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Clinical Trials and Research']); ?>" class="bg-white text-info w-fit-content ms-auto me-auto">Explore Now</a>
                </div>
              </div>
              <div class="gps-info-box-front gps-info-box-fbc d-flex flex-column align-items-center justify-content-center">
                <div class="align-items-center d-flex flex-column justify-content-center my-auto">
                  <div class="icon">
                    <img src="<?php echo get_theme_file_uri() . '/img/homepage/research.svg'; ?>" alt="Research">
                  </div>
                  <div class="title montserrat-font">
                    <p class="fs-4">Research</p>
                  </div>
                </div>
                <div class="button montserrat-font">
                  <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Clinical Trials and Research']); ?>">Explore Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 mb-3 mb-lg-0 px-1">
            <div class="gps-info-box gps-shop">
              <div class="gps-info-box-back gps-info-box-fbc d-flex flex-column justify-content-center bg-success">
                <a data-hero-trigger="shop" href="<?php echo get_category_link(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Anti-aging for Women and Men']); ?>">Anti-aging for Women and Men</a>
                <a data-hero-trigger="shop" href="<?php echo get_category_link(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Lashes']); ?>">Lashes</a>
                <a class="mb-auto" data-hero-trigger="shop" href="<?php echo get_category_link(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Hair Restoration for Women and Men']); ?>">Hair Restoration for Women and Men</a>
                <div class="button montserrat-font">
                  <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="bg-white text-success w-fit-content ms-auto me-auto">Explore Now</a>
                </div>
              </div>
              <div class="gps-info-box-front gps-info-box-fbc d-flex flex-column align-items-center justify-content-center">
                <div class="align-items-center d-flex flex-column justify-content-center my-auto">
                  <div class="icon">
                    <img src="<?php echo get_theme_file_uri() . '/img/homepage/shop.svg'; ?>" alt="Shop">
                  </div>
                  <div class="title montserrat-font">
                    <p class="fs-4">Shop</p>
                  </div>
                </div>
                <div class="button montserrat-font">
                  <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>">Explore Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <section class="bg-light py-5">
    <div class="container py-3 py-lg-4">
      <div class="row">
        <div class="align-items-center col-lg-6 d-flex justify-content-center mb-5 mb-lg-0">
          <div class="row">
            <div class="col-8 col-lg-12 mx-auto">
              <a class="d-block" href="<?= get_permalink( get_page_by_path('about') ) ?>">
                <svg class="w-100" width="392" height="128" viewBox="0 0 392 128" xmlns="http://www.w3.org/2000/svg">
                  <path d="M151 92h240v33H151V92Zm11 11.195v11.453h3.555v-4.25h1.937c1.427 0 2.488-.325 3.184-.976.695-.651 1.043-1.555 1.043-2.711 0-1.125-.32-1.992-.957-2.602-.638-.609-1.598-.914-2.88-.914H162Zm3.555 4.883v-2.555h1.007c.662 0 1.112.125 1.352.375s.36.555.36.915c0 .37-.139.673-.415.91-.276.237-.755.355-1.437.355h-.867Zm14.812 6.57h3.555V110h.312c.323 0 .612.089.868.266.187.135.4.43.64.882l1.89 3.5h4l-1.71-3.32c-.083-.167-.249-.404-.496-.71-.248-.308-.436-.509-.567-.602-.192-.141-.5-.282-.922-.422.527-.12.94-.271 1.243-.453.474-.287.846-.66 1.117-1.121.27-.461.406-1.01.406-1.645 0-.73-.177-1.348-.531-1.855a2.67 2.67 0 0 0-1.399-1.043c-.578-.188-1.414-.282-2.507-.282h-5.899v11.453Zm3.555-6.812v-2.328h1.555c.645 0 1.085.099 1.32.297.234.198.351.481.351.851 0 .25-.074.472-.222.664a.936.936 0 0 1-.574.36c-.464.104-.776.156-.938.156h-1.492Zm14.875 1.094c0 1.338.263 2.453.789 3.343.526.891 1.212 1.542 2.059 1.954.846.411 1.915.617 3.207.617 1.27 0 2.332-.239 3.183-.715a4.818 4.818 0 0 0 1.953-2c.45-.857.676-1.955.676-3.293 0-1.844-.516-3.277-1.547-4.3-1.031-1.024-2.5-1.536-4.406-1.536-1.86 0-3.31.52-4.352 1.563-1.041 1.041-1.562 2.497-1.562 4.367Zm3.539.015c0-1.166.216-2.002.648-2.507.433-.506 1.006-.758 1.72-.758.744 0 1.334.248 1.769.746.435.497.652 1.285.652 2.363 0 1.281-.208 2.17-.625 2.664-.417.495-1.005.742-1.766.742-.74 0-1.324-.252-1.754-.757-.43-.506-.644-1.336-.644-2.493Zm24.437-5.75v6.993c0 .635-.173 1.126-.52 1.472-.345.347-.823.52-1.433.52-.614 0-1.095-.176-1.441-.528-.346-.351-.52-.84-.52-1.465v-6.992h-3.53v6.828c0 .563.108 1.209.327 1.938.136.453.387.893.754 1.32.367.427.772.757 1.215.989.443.231.993.386 1.652.464.66.079 1.267.118 1.825.118.963 0 1.789-.128 2.476-.383.495-.183.968-.499 1.418-.95.45-.45.781-.976.992-1.578.211-.601.317-1.24.317-1.918v-6.828h-3.532Zm12.672 0v11.453h5.258c.63 0 1.333-.104 2.11-.312.567-.151 1.098-.454 1.593-.91a4.714 4.714 0 0 0 1.16-1.696c.28-.674.418-1.623.418-2.847 0-.781-.093-1.521-.28-2.219a5.014 5.014 0 0 0-.907-1.836 4.084 4.084 0 0 0-1.582-1.21c-.638-.282-1.475-.423-2.512-.423h-5.258Zm3.54 2.594h.882c.917 0 1.573.224 1.969.672.396.448.594 1.279.594 2.492 0 .917-.089 1.58-.266 1.988-.177.41-.422.696-.734.86-.313.164-.839.246-1.578.246h-.868v-6.258Zm27.656-2.594v11.453h2.898v-8.734l2.234 8.734h2.618l2.242-8.734v8.734h2.89v-11.453h-4.64l-1.79 6.97-1.796-6.97h-4.656Zm21.882 0v11.453h9.657v-2.593h-6.11v-2.258h5.508v-2.336h-5.508v-1.82h5.938v-2.446h-9.485Zm18.274 0v11.453h2.898v-8.734l2.235 8.734h2.617l2.242-8.734v8.734h2.89v-11.453h-4.64l-1.789 6.97-1.797-6.97h-4.656Zm21.898 0v11.453h6.11c.26 0 .789-.052 1.586-.156.599-.078 1.046-.203 1.343-.375a3.05 3.05 0 0 0 1.133-1.125 3.123 3.123 0 0 0 .414-1.601c0-.73-.194-1.335-.582-1.817-.388-.482-.993-.821-1.816-1.02.541-.187.953-.442 1.234-.765.422-.484.633-1.065.633-1.742 0-.807-.296-1.484-.887-2.031-.59-.547-1.439-.82-2.543-.82h-6.625Zm3.57 4.493v-2.172h1.563c.537 0 .913.093 1.129.28.216.188.324.449.324.782 0 .36-.108.634-.324.824-.216.19-.6.285-1.152.285h-1.54Zm0 4.5v-2.32h1.798c.62 0 1.053.102 1.3.308.248.206.371.478.371.816 0 .365-.125.655-.375.871-.25.216-.68.325-1.289.325h-1.804Zm15.61-8.993v11.453h9.656v-2.593h-6.11v-2.258h5.509v-2.336h-5.508v-1.82h5.937v-2.446h-9.484Zm18.36 11.453h3.554V110h.313c.322 0 .612.089.867.266.187.135.4.43.64.882l1.891 3.5h4l-1.71-3.32c-.084-.167-.25-.404-.497-.71-.247-.308-.436-.509-.566-.602-.193-.141-.5-.282-.922-.422.526-.12.94-.271 1.242-.453.474-.287.846-.66 1.117-1.121.27-.461.406-1.01.406-1.645 0-.73-.177-1.348-.53-1.855a2.67 2.67 0 0 0-1.4-1.043c-.578-.188-1.413-.282-2.507-.282h-5.899v11.453Zm3.554-6.812v-2.328h1.555c.646 0 1.086.099 1.32.297.234.198.352.481.352.851 0 .25-.075.472-.223.664a.936.936 0 0 1-.574.36c-.464.104-.776.156-.938.156h-1.492ZM84.745 46.056c2.474 1.774 2.97 5.25 1.202 7.732l-6.505 8.938H66.008L77.18 47.262a5.353 5.353 0 0 1 7.565-1.205ZM32.07 66.983h52.038c.07.496.07.993.07 1.56C84.18 83.154 72.513 95 58.09 95 43.667 95 32 83.154 32 68.542c0-.496.07-1.064.07-1.56Zm66.496-24.2C83.09 17.06 50.163 8.626 25.117 24.017 10.2 33.154 1.407 48.757 0 65.272 0 43.485 11.186 22.05 31.308 9.68 61.7-9.015 100.959.192 119.04 30.202c18.011 30.01 8.02 69.508-22.372 88.132-20.122 12.37-44.113 12.51-63.32 2.46 15.127 6.396 32.856 5.693 47.842-3.514 25.116-15.391 32.855-48.775 17.377-74.498Zm-70.113 42.47c10.782 17.928 33.608 23.74 51.112 13.095C89.928 91.974 96.02 81.12 97 69.634c0 15.127-7.772 30.044-21.775 38.658-21.145 12.957-48.452 6.583-60.985-14.287-12.533-20.87-5.601-48.323 15.544-61.28 13.933-8.613 30.667-8.683 43.97-1.75-10.572-4.412-22.895-3.922-33.258 2.451-17.434 10.715-22.825 33.896-12.042 51.825ZM159.918 80H152V14h27.216C192.577 14 200 22.305 200 33.981c0 11.614-7.485 19.981-20.784 19.981h-19.298V80Zm0-58.32v24.54h19.298c7.547 0 12.99-3.622 12.99-12.301 0-8.68-5.381-12.301-12.99-12.301h-19.298v.062ZM236.763 82C218.708 82 204 66.534 204 47.437 204 28.466 218.645 13 236.763 13c15.024 0 26.07 8.954 30.237 22.04h-8.459c-3.598-8.328-11.047-14.339-21.778-14.339-13.636 0-24.746 12.147-24.746 26.736 0 14.59 11.11 26.736 24.746 26.736 9.721 0 17.801-5.51 21.778-14.338H267C262.518 73.359 250.903 82 236.763 82Zm67 0C285.708 82 271 66.534 271 47.437 271 28.466 285.645 13 303.763 13c15.024 0 26.07 8.954 30.237 22.04h-8.459c-3.598-8.328-11.047-14.339-21.778-14.339-13.636 0-24.746 12.147-24.746 26.736 0 14.59 11.11 26.736 24.746 26.736 9.721 0 17.801-5.51 21.778-14.338H334C329.518 73.359 317.903 82 303.763 82Zm46.67-21.232L343.548 80H335l24.288-66h8.916L392 80h-8.793l-6.764-19.232h-26.01Zm13.16-36.902-10.454 29.41h20.783l-10.33-29.41Zm26.791-.473C389.328 24.506 388.023 25 386.47 25c-1.492 0-2.797-.556-3.853-1.607A5.402 5.402 0 0 1 381 19.5c0-1.545.56-2.843 1.616-3.893 1.056-1.05 2.361-1.607 3.853-1.607 1.491 0 2.797.556 3.915 1.607 1.057 1.05 1.616 2.348 1.616 3.893 0 1.483-.56 2.78-1.616 3.893Zm-7.209-7.292c-.932.927-1.367 2.04-1.367 3.337 0 1.298.435 2.472 1.367 3.4.932.926 2.051 1.42 3.356 1.42 1.305 0 2.424-.494 3.356-1.42.932-.928 1.367-2.04 1.367-3.4 0-1.298-.435-2.41-1.367-3.337-.932-.927-2.05-1.421-3.356-1.421-1.367.062-2.424.494-3.356 1.421Zm3.232.31c.746 0 1.305.06 1.616.246.621.247.932.804.932 1.545 0 .556-.187.927-.56 1.174-.186.124-.497.248-.87.31.498.061.808.247 1.057.617.249.31.31.618.31.927v.866c0 .185 0 .247.063.308l.062.062h-.994V21.663c0-.68-.187-1.174-.56-1.36-.248-.123-.621-.185-1.18-.185h-.808v2.41h-1.057v-6.056h1.989v-.062Zm1.118.988c-.248-.124-.683-.247-1.305-.247h-.932v2.224h.932c.435 0 .808-.061.995-.123.435-.186.621-.495.621-.927.124-.495-.062-.804-.31-.927Z" fill="#2263A8" fill-rule="evenodd"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 text-center text-lg-start">
          <p>As a proud member of PCCA, GPS Pharmacy Solutions offers the highest quality ingredients and medications for the health of yourself, your family, and your pets! All of our compounding drugs are custom-made, precisely to your specific prescription. This means if you need a medication that isn't readily available on generic pharmacy shelves, we can create it for you!</p>
          <p>Isn't it time you simplified the healthy lives of your pets, family members, and yourself? Our popular same-day medication delivery brings all of your prescription compounded drugs to your door, whether you live in Charlotte NC, Mint Hill, or another community in the surrounding areas.</p>
          <p>Gone are the days of making appointments or searching for reliable or local pharmacy locations near you. Once you place your order online or over the phone, our staff will immediately begin to refill or prepare your medications. Expect to receive them at your door within the same day!</p>
          <p class="mb-5">Wondering if we deliver to your current location? Reach out and we will be in touch shortly.</p>
          <a class="btn btn-blue btn-sm fw-bold montserrat-font px-4 rounded small py-2" href="<?= get_permalink( get_page_by_path('compounding') ) ?>">Explore Now</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white py-5">
    <div class="container py-3 py-lg-4">
      <div class="row">
        <div class="align-items-center col-lg-6 d-flex justify-content-center mb-5 mb-lg-0 pe-lg-5">
          <h2 class="montserrat-font mb-0 text-primary">GPS Pharmacy in Charlotte NC Delivers Your Specialty Compounded Prescriptions Right to Your Door</h2>
        </div>
        <div class="col-lg-6 text-center text-lg-start">
          <p>Are you in need of custom compounding or palliative prescriptions? Need them quickly? GPS Pharmacy Solutions is the 24-hour pharmacy that specializes in same-day delivery of medications and prescriptions for the health of your loved ones and pets. We're currently serving Charlotte, Mint Hill, the surrounding North Carolina areas, and South Carolina, Illinois, Ohio, and Georgia.</p>
          <p>Wondering if we deliver to your address? Before placing your order, call us at <a class="text-decoration-none text-warning" href="tel:980-245-2028">980-245-2028</a> or contact us via email at <a class="text-decoration-none text-warning" href="mailto:gpspharmacyteam@gpsmymeds.com">gpspharmacyteam@gpsmymeds.com</a>. Our team of pharmacists is standing by to assist you as a new customer and answer any questions you may have about our pharmacy solutions. </p>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-blue container-fluid py-5 text-white">
    <div class="row">
      <div class="col-lg-6 mx-auto py-3 py-lg-4 text-center">
        <h2 class="mb-3 montserrat-font">Our Professional Services</h2>
        <p class="mb-5">Whichever compounding needs you, your family, or pets may have, our pharmacy system has a concierge solution custom fit to you. We specialize in:</p>
        <div class="mb-5 row">
          <div class="col-xl-10 mx-auto">
            <ul class="bullet-warning g-0 mx-n4 row text-start">
              <li class="col-md-6 px-4">
                <div class="border-bottom border-darkblue py-2 text-truncate">BHRT <small class="fw-normal">(Bio-identical Hormone Replacement Therapy)</small></div>
              </li>
              <li class="col-md-6 px-4">
                <div class="border-bottom border-darkblue py-2 text-truncate">Dermatologic Compounding</div>
              </li>
              <li class="col-md-6 px-4">
                <div class="border-bottom border-darkblue py-2 text-truncate">Veterinary Compounding</div>
              </li>
              <li class="col-md-6 px-4">
                <div class="border-bottom border-darkblue py-2 text-truncate">Pediatric Compounding</div>
              </li>
              <li class="col-md-6 px-4">
                <div class="border-bottom border-darkblue py-2 text-truncate">Ophthalmic Compounding</div>
              </li>
              <li class="col-md-6 px-4">
                <div class="border-bottom border-darkblue py-2 text-truncate">Hospice Compounding</div>
              </li>
              <li class="col-md-6 px-4">
                <div class="border-bottom border-darkblue py-2 text-truncate">Sterile Compounding (coming soon)</div>
              </li>
              <li class="col-md-6 px-4">
                <div class="border-bottom border-darkblue py-2 text-truncate">Wound Care</div>
              </li>
              <li class="col-md-6 px-4">
                <div class="border-bottom border-darkblue py-2 text-truncate">Sexual Health Compounding</div>
              </li>
              <li class="col-md-6 px-4">
                <div class="border-bottom border-darkblue py-2 text-truncate">Medication refills and much more!</div>
              </li>
            </ul>
          </div>
        </div>
        <p>To learn more about GPS Pharmacy Solutions, please <a class="text-decoration-none text-warning" href="tel:980-245-2028">call</a> or contact us via <a class="text-decoration-none text-warning" href="mailto:gpspharmacyteam@gpsmymeds.com">email</a>. Our experienced team is here to serve your health needs!</p>
      </div>
    </div>
  </section>

  <section class="bg-light py-5">
    <div class="container py-3 py-lg-4">

      <!--div class="row">
        <div class="col-lg-4 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm">
            <div class="align-items-center d-flex mb-4">
              <div class="bg-secondary me-2 media-1-1 rounded-circle" style="height: 64px; width: 64px">
                <img src="<?= get_bloginfo('template_url') ?>/img/review-leah.png" alt="Leah Long GPS Review">
              </div>
              <div>
                <strong class="text-dark">Leah Long</strong>
              </div>
            </div>
            <p>I have a special needs dog requiring three specially compounded medications. I was utilizing the vet recommended pharmacy and the prices skyrocketed for no apparent reason. I contacted GPS Pharmacy to see if they could help, and not only were they able to fill the prescriptions, but they were able to flavor them to my dog's liking as well. What's even better is they were half the costs of what I was paying...</p>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm">
            <div class="align-items-center d-flex mb-4">
              <div class="bg-secondary me-2 media-1-1 rounded-circle" style="height: 64px; width: 64px">
                <img src="<?= get_bloginfo('template_url') ?>/img/review-lynne.png" alt="Lynne Stevens GPS Review">
              </div>
              <div>
                <strong class="text-dark">Lynne Stevens</strong>
              </div>
            </div>
            <p>Top Notch compounding pharmacy! I got familiar with them after a friend recommended them... my regular vet's online pharmacy was failing to ship things quickly and then had a supply issue, so I switched to GPS and have never looked back...  They also provided meds when my other little dog was needing special things.  They are super kind, and even deliver in my area...</p>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm">
            <div class="align-items-center d-flex mb-4">
              <div class="bg-secondary me-2 media-1-1 rounded-circle" style="height: 64px; width: 64px">
                <img src="<?= get_bloginfo('template_url') ?>/img/review-leslie.png" alt="Leslie Sabillon GPS Review">
              </div>
              <div>
                <strong class="text-dark">Leslie Sabillon</strong>
              </div>
            </div>
            <p>Excellent customer service every time I pick up my medicine I leave satisfied there’s one specific young lady who always helps me with my medicine her name is Erika she is very sweet and welcoming all of the workers are but Erika goes above and beyond to help me thank you for having great people working at this pharmacy keep up the good work</p>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm">
            <div class="align-items-center d-flex mb-4">
              <div class="bg-secondary me-2 media-1-1 rounded-circle" style="height: 64px; width: 64px">
                <img src="<?= get_bloginfo('template_url') ?>/img/review-mark.png" alt="Mark Johnson GPS Review">
              </div>
              <div>
                <strong class="text-dark">Mark Johnson</strong>
              </div>
            </div>
            <p>These great people compounded a medication for my cat in an incredibly short amount of time and delivered it to my home.  The applicator-pen technology they use makes it very easy to administer the medication to my cat.  They are friendly and very responsive.  Great folks.</p>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm">
            <div class="align-items-center d-flex mb-4">
              <div class="bg-secondary me-2 media-1-1 rounded-circle" style="height: 64px; width: 64px">
                <img src="<?= get_bloginfo('template_url') ?>/img/review-crystal.png" alt="Crystal Yu GPS Review">
              </div>
              <div>
                <strong class="text-dark">Crystal Yu</strong>
              </div>
            </div>
            <p>So grateful to have this pharmacy in my community. All of the staff and especially Julya have always been so kind and considerate.. we have always had a very positive experience when getting something filled from here. The delivery service is also a huge plus. They always go above and beyond!</p>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm">
            <div class="align-items-center d-flex mb-4">
              <div class="bg-secondary me-2 media-1-1 rounded-circle" style="height: 64px; width: 64px">
                <img src="<?= get_bloginfo('template_url') ?>/img/review-goldie.png" alt="Goldie Lamont GPS Review">
              </div>
              <div>
                <strong class="text-dark">Goldie Lamont</strong>
              </div>
            </div>
            <p>STELLAR service, CARING employees, very attentive and grounded.  I love that they work with their customers to be sure the scripts are never not on time and the patient is covered.  Prices are more than fair, and competitive, with volume discounts.  I have used a lot of compounding pharms, and these guys have been the Best.  They know your name and your conditions.  The Pharmacist will make personal calls for any questions.  Just great.</p>
          </div>
        </div>
      </div-->
      <h2 class="montserrat-font mb-5 text-center text-primary">What Our Customers Have To Say</h2>
      <?= do_shortcode('[testimonial_view id="1"]') ?>
    </div>
  </section>

  <section class="bg-white py-5 text-center">
    <div class="container py-3 py-lg-4">
      <p class="mb-0"><strong>GPS Pharmacy Charlotte NC</strong>, is a concierge compounding pharmacy with same-day medication delivery to patients located in North Carolina and South Carolina. We also offer free ground shipping to other states. GPS Pharmacy specializes in BHRT compounding, veterinary compounding, pediatric compounding, hospice compounding, wound care, and much more. Our state-of the-art USP <795>, USP <797>, and USP <800> compounding facilities are located in Charlotte, NC. GPS Pharmacy services hospital systems with 24-hour medication delivery.</p>
    </div>
  </section>

	<script>
		const themeFileUri = '<?php echo get_theme_file_uri(); ?>';
	</script>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
