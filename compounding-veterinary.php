<?php
/**
 * Template Name: Compounding: Veterinary
 * 
 * @package GPS_Pharmacy_Solutions
 */

$queried_object = get_queried_object();
$products = [
  [
    'image' => get_theme_file_uri() . '/img/veterinary/1.png',
    'title' => 'Buccal or Concentrated Solutions',
    'description' => 'Available for any species. We have custom flavors available'
  ],
  [
    'image' => get_theme_file_uri() . '/img/veterinary/2.png',
    'title' => 'Capsules are Available',
    'description' => 'In custom sizes #3 to #00 to meet the needs of your pet.'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/sterile-compounding/5.jpg',
    'title' => 'Ophthalmic Veterinary Drops and Ointments',
    'description' => 'Chloramphenicol, Cyclosporin, Tacrolimus'
  ],
  [
    'image' => get_theme_file_uri() . '/img/veterinary/feline-canine-chews.jpg',
    'title' => 'Our chews are smaller than an eraser tip',
    'description' => 'Feline and canine chews available in custom flavors'
  ],
  [
    'image' => get_theme_file_uri() . '/img/veterinary/3.png',
    'title' => 'Transdermal Ear Cream',
    'description' => 'Our micropen allows for medication to be absorbed through the skin in the ear and is an ideal application for pets who easily stress out over taking medications by mouth.'
  ],
  [
    'image' => get_theme_file_uri() . '/img/compounding/sterile-compounding/6.jpg',
    'title' => 'Veterinary Otic Ear Packs',
    'description' => 'Betamethasone dipropionate, Chloramphenicol, Enrofloxacin, Ketoconazole, Mupirocin, Triamcinolone'
  ],
  [
    'image' => get_theme_file_uri() . '/img/veterinary/latnus-pen.jpg',
    'full-width' => true,
    'title' => 'Lantus Pen',
    'description' => 'Available as single pens for your pet. Pens are easy to use, 1 press of a button to deliver a wide range of units.',
    'class' => 'col-sm-6 col-lg-12 col-xl-6 d-flex mb-4'
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

  <section class="align-items-center bg-white d-flex hero py-5" style="background-color: #fff;">
    <div class="container w-100">
      <div class="g-0 row">
        <div class="col-lg-6 ms-lg-auto px-4">
          <h1 class="mb-4 montserrat-font text-primary">The Trusted Online Veterinary Compounding Pharmacy for Pets and Exotic Species</h1>
          <p class="fw-bold mb-4">GPS Pharmacy Solutions not only creates compounding drugs for your loved ones, but also for your furry friends! We are the experienced compounding pharmacy for pets and we deliver right to your door!</p>
          <a class="btn btn-blue btn-sm fw-bold montserrat-font px-4 rounded small py-2" href="<?= get_permalink( get_page_by_path('contact-us') ) ?>">Contact Us</a>
        </div>
      </div>
    </div>
    <div class="hero-image" data-hero-image="veterinary-2"></div>
  </section>

  <section class="bg-light container-fluid py-5">
    <div class="container py-3 py-lg-4">

      <div class="text-center">
        <h2 class="mb-4 montserrat-font text-primary">Our Pet Compounding Pharmacy Services</h2>
        <p class="mb-5">GPS Pharmacy Solutions is a specialized pet compounding pharmacy that creates customized medications to meet the needs of each species. Pet owners of canine, feline, reptile, avian, and exotic animals can rest assured that our pet medications will be compounded in the most flavorful and easy-to-dose way and always with the highest quality ingredients. Animals that may benefit from compounded pet prescription medication include:</p>
      </div>

      <div class="mb-0 row">
        <div class="col-lg-6  d-flex justify-content-center mx-auto">
          <div class="row">
            <div class="col-md-6">
              <ul class="mb-0">
                <li>Cats</li>
                <li>Dogs</li>
                <li>Horses</li>
                <li>Rabbits</li>
                <li>Birds</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="mb-0">
                <li>Ferrets</li>
                <li>Snakes</li>
                <li>Reptiles</li>
                <li>Even animals in zoos and aquariums!</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white container-fluid py-5">
    <div class="container py-3 py-lg-4">

      <div class="text-center">
        <h2 class="mb-5 montserrat-font text-primary">Compounding Pharmacists You Can Trust!</h2>
        <p class="mb-5">Veterinary compounded medications can come in flavored dosage forms like tiny chews, flavored liquid medication, transdermal creams, capsules, transdermal gels, wound puffers, and much more. Pet owner, you can rest assure that GPS pharmacy specializes in preparations free of proteins and other allergens for our sensitive patients or those with specific diets. Our veterinary compounding pharmacy gives pet owners and veterinary practices a choice of the below pet medication flavors for your pet prescritptions: </p>
      </div>

      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="row">
            <div class="col-lg-4 mx-auto">
              <ul class="mb-0">
                <li>Grilled Chicken</li>
                <li>Peanut Butter</li>
                <li>Seafood</li>
                <li>Sweet Vanilla</li>
                <li>Custom flavors for exotic species</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-blue border-bottom border-lightblue container-fluid py-5">
    <div class="container py-3 py-lg-4 text-center text-white">
      <h2 class="mb-5">Our Range Of Pet Meds Created By Expert Pharmacists</h2>
      <p>Whichever dosage form your small, large and exotic pets prefer, we have a compounding pharmacist ready to create your compounds. </p>
      <p>Call us at 980-245-2028 to order and receive your FDA 503A pharmacy-approved pet compounding medication created by our pharmacists. To make things easier for you, we offer free delivery straight to your door!</p>
      <p class="mb-5">Below is a list of some of our veterinary medications in different dosages for your pet prescriptions.</p>

      <div class="row">
        <div class="col-lg-11 mx-auto">
          <div class="row text-primary">
            <?php foreach( $products as $product ): ?>
              <div class="<?= isset( $product['class'] ) ? $product['class'] : 'col-sm-6 col-lg-4 col-xl-3 d-flex mb-4' ?>">
                <div class="bg-white p-4 rounded shadow-sm w-100">
                  <?php if( isset( $product['full-width'] ) && $product['full-width'] ): ?>
                    <div class="mb-3">
                      <img class="h-auto w-100" src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>">
                    </div>
                  <?php else: ?>
                    <div class="mb-3 media-4-3">
                      <img src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>">
                    </div>
                  <?php endif; ?>
                  <div class="px-4">
                    <h3 class="fw-bold h5"><?= $product['title'] ?></h3>
                    <p class="mb-0 small"><?= $product['description'] ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>  
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white container-fluid py-5">
    <div class="container py-3 py-lg-4">
      <div class="row">
        <div class="col-lg-7 mx-auto">
          <div class="row">
            <div class="col-lg-6 mb-3">
              <h5 class="bg-blue d-flex align-items-center justify-content-center mb-0 p-3 text-center text-white" style="min-height: 80px;">Oral Chews, Liquid, Caps</h5>
              <div class="rounded shadow-sm">
                <h5 class="border-bottom border-blue fw-bold h6 mb-0 montserrat-font text-primary px-3 py-3">Top Drugs</h5>
                <ul class="list-unstyled mb-0">
                  <li class="border-bottom px-3 py-2">Amlodipine</li>
                  <li class="border-bottom px-3 py-2">Benazepril</li>
                  <li class="border-bottom px-3 py-2">Budesonide</li>
                  <li class="border-bottom px-3 py-2">Cisapride</li>
                  <li class="border-bottom px-3 py-2">Chloramphenicol</li>
                  <li class="border-bottom px-3 py-2">Enalapril</li>
                  <li class="border-bottom px-3 py-2">Estriol (DES alternative)</li>
                  <li class="border-bottom px-3 py-2">Fluoxetine</li>
                  <li class="border-bottom px-3 py-2">Gabapentin</li>
                  <li class="border-bottom px-3 py-2">Methimazole</li>
                  <li class="border-bottom px-3 py-2">Pimobendan</li>
                  <li class="border-bottom px-3 py-2">Prednisolone</li>
                  <li class="border-bottom px-3 py-2">Theophylline</li>
                  <li class="border-bottom px-3 py-2">Ursodiol</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 mb-3 d-flex flex-column">
              <h5 class="bg-blue d-flex align-items-center justify-content-center mb-0 p-3 text-center text-white" style="min-height: 80px;">Transdermal Micropen dose in 0.05ml</h5>

              <div class="mb-3 mb-lg-0 rounded shadow-sm">
                <h5 class="border-bottom border-blue fw-bold h6 mb-0 montserrat-font text-primary px-3 py-3">Top Drugs</h5>
                <ul class="list-unstyled mb-0">
                  <li class="border-bottom px-3 py-2">Amitriptyline</li>
                  <li class="border-bottom px-3 py-2">Amlodipine</li>
                  <li class="border-bottom px-3 py-2">Cyclosporin</li>
                  <li class="border-bottom px-3 py-2">Fluoxetine</li>
                  <li class="border-bottom px-3 py-2">Gabapentin</li>
                  <li class="border-bottom px-3 py-2">Methimazole</li>
                  <li class="border-bottom px-3 py-2">Prednisolone</li>
                </ul>
              </div>

              <div class="bg-blue montserrat-font mt-auto p-5 text-center text-white">
                <h4 class="fw-bold">Contact Us For Our Full Drug List</h4>
                <p>Get In Touch! We are here to answer your questions.</p>
                <a class="btn btn-sm btn-success fw-bold montserrat-font text-white w-100" href="<?= get_permalink( get_page_by_path('contact-us') ) ?>">Contact Us Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_sidebar();
get_footer();
