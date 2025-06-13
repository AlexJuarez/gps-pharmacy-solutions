<?php
/**
 * Template Name: Compounding: Sterile Compounding
 *
 * @package GPS_Pharmacy_Solutions
 */

$queried_object = get_queried_object();

get_header();
?>

<main id="primary" class="site-main compounding-page">

  <div class="bg-light py-4">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 montserrat-font">
          <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="<?= site_url() ?>">Home</a></li>
          <li class="breadcrumb-item"><a class="text-decoration-none text-secondary" href="<?= get_permalink( get_page_by_path('compounding') ) ?>">Compounding Pharmacy</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?= apply_filters( 'the_title', $queried_object->post_title ) ?> ></li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="align-items-center bg-white d-flex hero py-5">
    <div class="container mt-6 mt-lg-0 w-100">
      <div class="g-0 row">
        <div class="col-lg-6 ms-lg-auto px-4">
          <h1 class="mb-4 montserrat-font text-primary">The Board-Certified Sterile Compounding Pharmacy That Delivers Straight to You!</h1>
          <p class="fw-bold mb-4">GPS Pharmacy is compounding pharmacy, with sterile compounding (coming soon) located in Charlotte, North Carolina. Our pharmacy will soon offer compounded sterile pharmaceutical preparations to meet your individual needs. GPS sterile compounding labs specialize in ophthalmic, PCA pumps, sexual health, women’s and men’s hormone replacement, vitamin IV therapy, investigational drugs, and much more!</p>
          <a class="btn btn-blue btn-sm fw-bold montserrat-font px-4 rounded small py-2" href="<?= get_permalink( get_page_by_path('contact-us') ) ?>">Contact Us</a>
        </div>
      </div>
    </div>
    <div class="hero-image" data-hero-image="sterile-compounding"></div>
  </section>

  <section class="bg-light container-fluid py-5">
    <div class="container py-3 py-lg-4 text-center">
      <h2 class="mb-4 montserrat-font text-primary">What Is Sterile Compounding?</h2>
      <p>Sterile compounding is the process where highly trained pharmacists use sterile products, in a sterile (clean) room to create sterile medications. These types of customized sterile medications cannot be bought at regular pharmacies or over-the-counter stores. The state of the environment in which sterile compounded medications are manufactured comply with the FDA’s Compliance Policy Guides. The compounding procedures guarantee that the environment is free from infectious microorganisms, bacteria, and viruses. </p>
      <p>The sterile compounding process is used to create compounded medications administered through either IVs, injections, or directly into a patient’s eyes. Non-sterile compounding, on the other hand, does not require the same level of regulations and compliance and does not have to be created in a sterile clean room. </p>
      <p class="mb-5">Creating these sterile medications by sterile compounding pharmacies requires that experienced compounding pharmacists follow strict regulations and procedures set out in the United States Pharmacopeia Convention chapter 797: </p>
      <div class="row">
        <div class="col-md-6 col-lg-4 d-flex mb-4">
          <div class="bg-white rounded shadow-sm p-5 text-primary w-100">
            <p class="mb-0">Proper cleaning of all personnel and all clothing components by wearing personal protective equipment to cover eyes, hands, head, nose, and mouth.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex mb-4">
          <div class="bg-white rounded shadow-sm p-5 text-primary w-100">
            <p class="mb-0">To ensure sterility of the environment, a sterile compounding pharmacy needs to use a compound hood that prevents any bacteria and microorganisms from entering the workspace. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex mb-4">
          <div class="bg-white rounded shadow-sm p-5 text-primary w-100">
            <p class="mb-0">The licensed pharmacist is responsible for sterilizing all equipment used to create customized sterile prescriptions. These may include beakers, trays, flasks, syringes, scales, etc.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-blue container-fluid py-5">
    <div class="container px-lg-5 py-3 py-lg-4 text-center text-white">
      <h2 class="mb-4 montserrat-font">Our Sterile Compounding Services <em>(coming soon)</em></h2>
      <p>Our USP <795>, <797>, and <800> certified labs uphold the highest regulatory standards set by the United States Pharmacopeia, boards of pharmacy, and the pharmacy compounding accreditation board. Our certified pharmacy staff and specialty pharmacy technicians have compounding certificates to meet all of your, your patients’ and pets’ sterile compounded medication needs. Our employees follow a safety-first approach outlined by the Professional Compounding Centers of America guidelines.</p>
      <p class="mb-5">As a PCCA-certified sterile compounding pharmacy in Charlotte, our ingredients are of the highest grade to bring you the highest quality compounded sterile preparations. Review our sterile compounding services below or call us at 980-245-2028 to discuss your customized sterile prescription needs</p>
      <div class="row text-primary">
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm w-100">
            <div class="mb-3 media-4-3">
              <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
            </div>
            <div class="px-4">
              <h3 class="fw-bold h5">Injectable Medications</h3>
              <p class="mb-0 small">B-Complex, B12 injections, Cyanocobalamin, Hydroxocobalamin, Methylcobalamin, Testosterone Injections, TRIMIX injections, ED injections</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm w-100">
            <div class="mb-3 media-4-3">
              <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/2.png'; ?>" alt="" class="iv-t">
            </div>
            <div class="px-4">
              <h3 class="fw-bold h5">IV Therapy</h3>
              <p class="mb-0 small">Clinical Trial Compounding, FDA Shortage Compounding</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm w-100">
            <div class="mb-3 media-4-3">
              <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
            </div>
            <div class="px-4">
              <h3 class="fw-bold h5">Men’s Erectile Dysfunction</h3>
              <p class="mb-0 small">BiMix (Papaverine / Phentolamine), TriMix (Papaverine / Phentolamine / Prostaglandin), QuadMix (Papaverine / Phentolamine / Prostaglandin / Atropine)</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm w-100">
            <div class="mb-3 media-4-3">
              <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
            </div>
            <div class="px-4">
              <h3 class="fw-bold h5">Men’s Hormone Replacement Therapy</h3>
              <p class="mb-0 small">Testosterone</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm w-100">
            <div class="mb-3 media-4-3">
              <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/5.jpg'; ?>" alt="">
            </div>
            <div class="px-4">
              <h3 class="fw-bold h5">Ophthalmic Human Drops and Ointments</h3>
              <p class="mb-0 small">Autologous Serum Eye Drops, Cyclosporine, Tacrolimus</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm w-100">
            <div class="mb-3 media-4-3">
              <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/5.jpg'; ?>" alt="">
            </div>
            <div class="px-4">
              <h3 class="fw-bold h5">Ophthalmic Veterinary Drops and Ointments</h3>
              <p class="mb-0 small">Chloramphenicol, Cyclosporin, Tacrolimus</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm w-100">
            <div class="mb-3 media-4-3">
              <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/6.jpg'; ?>" alt="">
            </div>
            <div class="px-4">
              <h3 class="fw-bold h5">Veterinary Otic Ear Packs</h3>
              <p class="mb-0 small">Betamethasone dipropionate, Chloramphenicol, Enrofloxacin, Ketoconazole, Mupirocin Triamcinolone</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex mb-4">
          <div class="bg-white p-4 rounded shadow-sm w-100">
            <div class="mb-3 media-4-3">
              <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
            </div>
            <div class="px-4">
              <h3 class="fw-bold h5">Women’s Hormone Replacement Therapy</h3>
              <p class="mb-0 small">Estradiol, Testosterone</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

	  <?php the_content(); ?>


<?php
get_sidebar();
get_footer();
