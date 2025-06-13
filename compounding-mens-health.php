<?php
/**
 * Template Name: Compounding: Men's Health
 * 
 * @package GPS_Pharmacy_Solutions
 */

$queried_object = get_queried_object();
$products = [
  [
    'image' => get_theme_file_uri() . '/img/compounding/mens-health/4.png',
    'title' => 'Anastrozole Capsules',
    'description' => ''
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/mens-health/5.png',
    'title' => 'HCG Injection',
    'description' => ''
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png',
    'title' => 'Injectable Medications',
    'description' => 'B-Complex, Cyanocobalamin, Hydroxocobalamin, Methylcobalamin'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/sterile-compounding/2.png',
    'title' => 'IV Therapy',
    'description' => ''
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png',
    'title' => 'Men’s Erectile Dysfunction',
    'description' => 'BiMix (Papaverine / Phentolamine), TriMix (Papaverine / Phentolamine / Prostaglandin), QuadMix (Papaverine / Phentolamine / Prostaglandin / Atropine)'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png',
    'title' => 'Men’s Hormone Replacement Therapy',
    'description' => 'Testosterone'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/mens-health/2.png',
    'title' => 'Sexual Dysfunction',
    'description' => 'Sildenafil/Tadalafil Troches'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/mens-health/3.png',
    'title' => 'Testosterone Injection',
    'description' => '200mg/ml'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/mens-health/1.png',
    'title' => 'Testosterone Replacement Cream',
    'description' => ''
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/mens-health/2.png',
    'title' => 'Testosterone Replacement Troche',
    'description' => ''
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/mens-health/4.png',
    'title' => 'Weight Loss',
    'description' => ''
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

  <section class="align-items-center d-flex hero py-5" style="background-color: #99d1ff;">
    <div class="container mt-6 mt-lg-0 w-100">
      <div class="g-0 row">
        <div class="col-lg-6 ms-lg-auto px-4">
          <h1 class="mb-4 montserrat-font text-primary">Find The Best Men's Health Products</h1>
          <p class="fw-bold mb-4 text-white">GPS Pharmacy Solutions is your home for all the medications and best men’s health products you need to ensure proper health for men of all ages.</p>
          <a class="btn btn-blue btn-sm fw-bold montserrat-font px-4 rounded small py-2" href="<?= get_permalink( get_page_by_path('contact-us') ) ?>">Contact Us</a>
        </div>
      </div>
    </div>
    <div class="hero-image" data-hero-image="mens-health"></div>
  </section>

  <section class="bg-light container-fluid py-5">
    <div class="container py-3 py-lg-4">

      <div class="text-center">
        <h2 class="mb-4 montserrat-font text-primary">Review Our Range of Men’s Health Products Online</h2>
        <p class="mb-5">When you contact GPS Pharmacy we’ll take time to better understand your medical history and gain more information from your healthcare provider. This enables us to create the best prescription treatment for your personal needs. Our men’s health product line includes</p>
      </div>

      <div class="mb-5 row">
        <div class="col-lg-8 mx-auto">
          <ul class="list-dash row">
            <li class="col-md-6">Hormone replacement therapy</li>
            <li class="col-md-6">Prostate support</li>
            <li class="col-md-6">Erectile dysfunction (ED treatment)</li>
            <li class="col-md-6">Disease management</li>
            <li class="col-md-6">Stress, depression and other mental health issues</li>
            <li class="col-md-6">Healthy weight management and nutrition</li>
            <li class="col-md-6">Growth hormone therapy</li>
            <li class="col-md-6">Muscle building</li>
            <li class="col-md-6">Hair restoration</li>
            <li class="col-md-6">Gym and training support</li>
            <li class="col-md-6">Skincare wellness</li>
            <li class="col-md-6">Health and vitamin supplements</li>
            <li class="col-md-6">Sexual health supplements for men</li>
            <li class="col-md-6">Men’s health products, and more!</li>
          </ul>
        </div>
      </div>
      <p class="mb-0 text-center">Our sexual health products are compounded to provide faster onset and better results than traditional therapies. Our doses are customized for each male, providing maximum benefits. Call now to discuss your specific needs or review our men’s health products online with fast and free delivery!</p>
    </div>
  </section>

  <section class="bg-blue container-fluid py-5">
    <div class="container px-lg-5 py-3 py-lg-4 text-center text-white">
      <h2 class="mb-5 montserrat-font">Our Range of Men's Health Products</h2>
      <div class="row text-primary">
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

<?php the_content(); ?>

<?php
get_sidebar();
get_footer();
