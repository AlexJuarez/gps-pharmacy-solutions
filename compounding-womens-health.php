<?php
/**
 * Template Name: Compounding: Women's Health
 * 
 * @package GPS_Pharmacy_Solutions
 */

$queried_object = get_queried_object();
$products = [
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/11.png',
    'title' => 'HCG Injection',
    'description' => ''
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/8.png',
    'title' => 'Hemorrhoid Creams, Gels, and Suppositories',
    'description' => 'Gel or Suppositories, Hydrocortisone, Lidocaine, Nifedipine'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/5.png',
    'title' => 'Hormone Replacement Capsules',
    'description' => 'DHEA, Estradiol, Estriol, Progesterone'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/1.png',
    'title' => 'Hormone Replacement Cream',
    'description' => 'Biest (Estriol/Estradiol), DHEA, Progesterone, Testosterone'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/11.png',
    'title' => 'Hormone Replacement Injections',
    'description' => 'Estradiol, Testosterone'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/2.png',
    'title' => 'Hormone Replacement Troche',
    'description' => 'Biest (Estriol/Estradiol), Progesterone, Testosterone'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/7.png',
    'title' => 'Infertility',
    'description' => 'Progesterone, Suppositories'
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
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/9.png',
    'title' => 'Libido Creams and Gels',
    'description' => 'Arginine, Papaverine, Sildenafil, Testosterone'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/5.png',
    'title' => 'Naltrexone Capsules',
    'description' => ''
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/10.png',
    'title' => 'Oxytocin Nasal Spray',
    'description' => ''
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/2.png',
    'title' => 'Oxytocin Troche',
    'description' => ''
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/2.png',
    'title' => 'Sexual Dysfunction Troche',
    'description' => 'Sildenafil'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/5.png',
    'title' => 'Thyroid Replacement',
    'description' => 'T3/T4 Capsules'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/9.png',
    'title' => 'Vaginal Atrophy/Dryness Creams and Gels',
    'description' => 'DHEA, Estradiol, Estriol, Testosterone, Vitamin E Vaginal Gel'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/8.png',
    'title' => 'Vaginal Infection Creams, Gels, and Suppositories:',
    'description' => '<strong>Bacterial Vaginosis:</strong> Boric Acid, Clindamycin, Metronidazole, Nystatin <strong>Yeast:</strong> Boric Acid Vaginal, Clotrimazole, Fluconazole'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/4.png',
    'title' => 'Vaginal Hormone Replacement',
    'description' => 'Estrogen Vaginal Creams/Gels'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/8.png',
    'title' => 'Vulvodynia Creams, Gels, and Suppositories',
    'description' => 'Amitriptyline, Baclofen, Diazepam, Gabapentin, Ketamine'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/womens-health/5.png',
    'title' => 'Weight Loss',
    'description' => '7Keto-DHEA, Capsules, Phentermine Capsules'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png',
    'title' => 'Women’s Hormone Replacement Therapy',
    'description' => 'Estradiol, Testosterone'
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

  <section class="align-items-center d-flex hero py-5" style="background-color: #f9a7ad;">
    <div class="container mt-6 mt-lg-0 w-100">
      <div class="g-0 row">
        <div class="col-lg-6 ms-lg-auto px-4">
          <h1 class="mb-4 montserrat-font text-primary">Explore Your Essential Women’s Health Products Online and Receive Them the Same Day!</h1>
          <p class="fw-bold mb-4 text-white">We believe that all women should feel great at any age. That’s why we offer a range of women’s health products online — delivered straight to your door.</p>
          <a class="btn btn-blue btn-sm fw-bold montserrat-font px-4 rounded small py-2" href="<?= get_permalink( get_page_by_path('contact-us') ) ?>">Contact Us</a>
        </div>
      </div>
    </div>
    <div class="hero-image" data-hero-image="womens-health"></div>
  </section>

  <section class="bg-light container-fluid py-5">
    <div class="container py-3 py-lg-4">

      <div class="text-center">
        <h2 class="mb-4 montserrat-font text-primary">Our Women’s Health Products</h2>
        <p class="mb-5">Our women’s health product offering includes hormone replacement, infertility, female sexual health, weight loss, aesthetics, personal care products, wellness health supplements, and much more. We aim to create compounding hormone treatments for hormone-related symptoms in women including: </p>
      </div>

      <div class="mb-5 row">  
        <div class="col-lg-6 mx-auto">
          <div class="row">
            <div class="col-md-6">
              <ul class="mb-0">
                  <li>PMS</li>
                  <li>Urinary tract infections</li>
                  <li>Night sweats</li>
                  <li>Low libido</li>
                  <li>Sleep deprivation</li>
                  <li>Nausea</li>
                  <li>Migraines</li>
                  <li>Vaginal Dryness</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="mb-0">
                <li>Menopause</li>
                <li>Weight gain</li>
                <li>Infertility</li>
                <li>Endometriosis</li>
                <li>Painful menstruation</li>
                <li>Fibrocystic breasts</li>
                <li>Low hormone levels and hormonal imbalances</li>    
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center">
        <p>We work with women’s health clinics and have a pharmacist consultant on site who specialize in feminine healthcare and custom medication for women. We provide compounded solutions and create bio-identical customized hormone therapy in various prescription dosage forms to treat hormone imbalances. These include bioidentical hormones for BHRT (bioidentical hormone replacement therapy), estradiol, estriol, testosterone, pregnenolone and other FDA 503A pharmacy-approved compounded medications.</p>
        <p>We are an FDA approved 503A pharmacy and follow the strict guidelines set forth for compounding pharmacies by both FDA and USP.</p>
        <p>As a PCCA-certified pharmacy, our ingredients are of the highest quality and our products are free of fillers, preservatives, allergens, and dyes. You can rest assured that your custom compounds are made by expert compounding pharmacists with active ingredients sourced from FDA 503A pharmacy-approved manufacturers. </p>
        <p class="mb-0">Explore our women’s health products online from GPS Pharmacy and get same-day delivery!</p>
      </div>
    </div>
  </section>

  <section class="bg-blue container-fluid py-5">
    <div class="container px-lg-5 py-3 py-lg-4 text-center text-white">
      <h2 class="mb-5 montserrat-font">Our Range of Women’s Health Products</h2>
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

<?php
get_sidebar();
get_footer();
