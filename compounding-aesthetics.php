<?php
/**
 * Template Name: Compounding: Aesthetics
 * 
 * @package GPS_Pharmacy_Solutions
 */

$queried_object = get_queried_object();
$products = [
  [
    'image' => get_theme_file_uri() . '/img/compounding/aesthetics/2.png',
    'title' => 'Hair Restoration and Hair Growth',
    'description' => 'Female pattern baldness, Hair thinning, Male pattern baldness, Alopecia, Finasteride, Latanoprost, Minoxidil'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/aesthetics/1.png',
    'title' => 'Numbing Creams and Gels',
    'description' => 'BLT numbing Creams with custom strengths for Laser, micro needling, Botox, filler, lip injections and more., Benzocaine, Lidocaine, Tetracaine'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/aesthetics/3.png',
    'title' => 'Skin Tightening',
    'description' => 'Custom Formulations, Estriol, Hyaluronic Acid, Hydroquinone for dark spots, Retin-A (tretinoin) custom strengths for fine lines and wrinkles, Tretinoin, Vitamin E'
  ]
];

get_header();
?>

<main id="primary" class="site-main compounding-page">

  <div class="bg-light py-4">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 montserrat-font">
          <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="<?= site_url() ?>">Home</a></li>
          <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="<?= get_permalink( get_page_by_path('compounding') ) ?>">Compounding Pharmacy</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?= apply_filters( 'the_title', $queried_object->post_title ) ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="align-items-center d-flex hero py-5" style="background-color: #90837d;">
    <div class="container mt-7 mt-lg-0 w-100">
      <div class="g-0 row">
        <div class="col-lg-6 ms-lg-auto px-4">
          <h1 class="mb-4 montserrat-font text-white">Aesthetic Skin Care Products to Bring Out Your Youth!</h1>
          <p class="fw-bold mb-4 text-white">We provide patients with prescription skin and hair restoration compounds and non-prescription aesthetic skin care products in our online store.</p>
          <a class="btn btn-blue btn-sm fw-bold montserrat-font px-4 rounded small py-2" href="<?= get_permalink( get_page_by_path('contact-us') ) ?>">Contact Us</a>
        </div>
      </div>
    </div>
    <div class="hero-image" data-hero-image="aesthetics-2"></div>
  </section>

  <section class="bg-light container-fluid py-5">
    <div class="container py-3 py-lg-4">
      <div class="text-center">
        <p>Medical practices looking for aesthetic medical products, we offer bases specifically designed for lasers, PRP procedures, vampire facials, hair removal, medical grade professional skincare, aging, and plastic surgery.</p>
        <p>Customers looking to buy aesthetic beauty products, we have custom creams that are formulated specifically for moisturizing and skin regeneration, turnover and tightening. We work with estriols, retinols, hyaluronic acid, and more to give you healthy skin.</p>
        <p>Whether you are looking to improve facial aesthetics, repair sun damage, treat acne, increase elastin or collagen production, or simply want to hydrate your skin with products free of parabens, GPS Pharmacy Solutions offers it all!</p>
      </div>
    </div>
  </section>

  <section class="bg-blue container-fluid py-5 text-center">
    <div class="container py-3 py-lg-4">
      <div class="text-white">
        <h2 class="mb-4 montserrat-font">Our Aesthetic Beauty Products</h2>
        <p>Aesthetic skin care products help regenerate your natural beauty. GPS specializes in aesthetic medical products, GPS Pharmacy Solutions delivers all of your favorite aesthetic products right to your home. All you have to do is give us a call or browse our online health center shop and you will receive your order with free same-day delivery.</p>
        <p class="mb-5">Call to discuss your specific needs with our professional skin care team. We provide aesthetic skin care product suggestions for all skin types without the harsh chemicals often found in over-the-counter solutions.</p>
      </div>

      <div class="justify-content-center row text-primary">
        <?php foreach( $products as $product ): ?>
          <div class="col-sm-6 col-lg-4 col-xl-3 d-flex mb-4">
            <div class="bg-white p-4 rounded shadow-sm w-100">
              <div class="mb-3 media-4-3">
                <img src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>">
              </div>
              <div class="px-4">
                <h3 class="fw-bold h5"><?= $product['title'] ?></h3>
                <p class="mb-0 small"><?= $product['description'] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>  
      </div>
    </div>
  </section>
  
</main>

<?php
get_sidebar();
get_footer();
