<?php
/**
 * Template Name: Hospice: Main Page
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
          <li class="breadcrumb-item active" aria-current="page"><?= apply_filters( 'the_title', $queried_object->post_title ) ?></li>
        </ol>
      </nav>
    </div>
  </div>


  <section class="align-items-center d-flex hero py-5" style="background-color: #e9eceb;">
    <div class="container w-100">
      <div class="g-0 row">
        <div class="col-lg-6 ms-lg-auto px-4">
          <h1 class="mb-4 montserrat-font text-primary">Mindful Hospice Pharmacy Services</h1>
          <p class="fw-bold mb-4">GPS Pharmacy is the hospice pharmacy delivery that brings all hospice medications directly to our patients’ doors with same-day delivery. Our mission it to make comfort medications accessible and delivered to you when and where you need them 24 hours per day.</p>
          <a class="btn btn-blue btn-sm fw-bold montserrat-font px-4 rounded small py-2" href="<?= get_permalink( get_page_by_path('contact-us') ) ?>">Contact Us</a>
        </div>
      </div>
    </div>
    <div class="hero-image" data-hero-image="hospice"></div>
  </section>

  <section class="bg-white py-5">
    <div class="container py-3 py-lg-4">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="col-count-2">
            <h2 class="mb-3 montserrat-font text-primary">Our Approach to Medications for Hospice Patients </h2>
            <p>GPS Pharmacy is your local hospice pharmacy organization specializing in providing quality care for hospice patients and those diagnosed with terminal illnesses. We bring your loved one’s medications right to you. As a comfort care pharmacy, we are here to provide the medications needed for each patient’s specific terminal illness and guide patients along symptom management during end-of-life care. Our certified pharmacists  are always just a phone call away to ensure that you or your loved one received the immediate care or assistance they need.</p>
            <p>We also provide hospice medication kits for placement in each home. We make each kit custom to individual patient care whether they are terminally ill patients, in end-of-life care, or in need of professional patient care from their assigned nurses.</p>
            <p>These kits include common drugs related to hospice diagnosis and treatment. The kit as well as all other prescribed medications needed to treat the patient during their time in hospice care is covered by Medicare and Medicaid and is supplied free of charge to the patient.</p>
            <p>Not sure if Medicare offers cost coverage on your medications for hospice patients? Looking for an alternative to brand name drugs to suit your hospice pharmacy benefits (PBM) management? Need a specific prescription quantity that can’t be found on the shelves of big chain pharmacies? Simply call and we will create the custom prescriptions that you require in line with your PBM plan. You can expect them on your front porch the same day.</p>
            <p>We strive to create a meaningful relationship with each of our hospice patients, their families, and their nurses, so do not hesitate to call any day, any time 24/7. We are happy to answer any questions you may have.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-blue py-5 text-white">
    <div class="container py-3 py-lg-4">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
              <h2 class="mb-3 montserrat-font">Powerful Medications for Hospice Patients</h2>
              <p>Thoughtfully chosen hospice pharmacy services guided by professionals help patients manage pain and discomfort during end-of-life care. Wondering what specific medications you or your loved one should be prescribed? Each patient requires prescriptions fit specifically to their needs. </p>
              <p class="mb-0">All hospice patients are different, meaning each patient requires a custom approach to their care and the hospice drugs that they are prescribed. So, get in touch to discuss your specific needs. Our team is standing by to help you place your order, but our care doesn’t stop there. We are available at any point during your treatment to guide you through treatment.</p>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
              <div class="media-4-3">
                <img src="<?= get_theme_file_uri() . '/img/hospice/hospice-7.jpg'; ?>" alt="Powerful Medications for Hospice Patients">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light container-fluid py-5">
    <div class="container py-3 py-lg-4">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="text-center">
            <h2 class="mb-4 montserrat-font text-primary">Provide Quality Care with a Personalized Hospice Medication Kit</h2>
            <p class="mb-0">A hospice comfort kit (also known as a hospice medication kit) is a pack of prescribed medications that are thoughtfully selected to treat the pain, stress, and anxiety of a patient in hospice care. Our hospice pharmacy services create custom kits for each patient’s needs. Simply call and we will discuss your needs and create the perfect kit delivered right to your door with our e-prescribing service.  Our pharmacy is managed using technology to increase efficiency and compliance at no extra cost to you. This gives you the option to order or schedule your home delivery straight from our hospice portal. </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white container-fluid py-5" style="overflow: hidden; width: 100vw;">
    <div class="container py-3 py-lg-4">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="text-center">
            <h2 class="mb-4 montserrat-font text-primary">GPS Pharmacy Solutions’ Unique Approach to Comfort Care for Hospice Patients</h2>
            <p>We designed our unique approach to medication delivery to serve all hospice pharmacy service needs for both individuals and families. The moment you order a kit or medication, our drivers are immediately dispatched from the pharmacy to your home. If you don’t need medications the same day, you can even schedule the drop off periodically to ensure that you or your loved one never runs out of their important medications. </p>
            <p class="mb-5">Want to discuss symptom management or pain conversion with a pharmacist? Our clinical support team is standing by. As a local pharmacy, we have a personal relationship with our hospices, so call us 24 hours a day, 365 days a year. Our hospice pharmacy services are always here for you!</p>
            <div class="container hospice-page-content d-none d-lg-block d-xl-block d-xxl-block mb-5">
                <div class="row c-card">
                    <div class="col-md-6">
                        <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-1.png'; ?>" alt="Pills">
                    </div>
                    <div class="col-md-6 ps-0 d-flex justify-content-start align-items-center">
                        <div class="content">
                            <h2 class="title position-relative montserrat-font">Medication Access</h2>
                            <p class="description mt-3 mb-3">We deliver more than medications and clinical support, we deliver care.</p>
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Medication Access']); ?>" class="url text-decoration-none d-block montserrat-font">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="row c-card">
                    <div class="col-md-6 pe-0 d-flex justify-content-end align-items-center">
                        <div class="content">
                            <h2 class="title position-relative montserrat-font">Clinical Support</h2>
                            <p class="description mt-3 mb-3">From formulary customization, medication consulting, wound management, IDG’s and more, our pharmacists become a part of your team.</p>
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Clinical Support']); ?>" class="url text-decoration-none d-block montserrat-font">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-2.png'; ?>" alt="Elderly holding hands">
                    </div>
                </div>
                <div class="row c-card">
                    <div class="col-md-6">
                        <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-3.png'; ?>" alt="Piggy bank">
                    </div>
                    <div class="col-md-6 ps-0 d-flex justify-content-start align-items-center">
                        <div class="content">
                            <h2 class="title position-relative montserrat-font">Best in Industry Pricing</h2>
                            <p class="description mt-3 mb-3">If you find lower pricing, we will match it. We are here to offer the best pricing nationwide.</p>
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Best in Industry Pricing']); ?>" class="url text-decoration-none d-block montserrat-font">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="row c-card">
                    <div class="col-md-6 pe-0 d-flex justify-content-end align-items-center">
                        <div class="content">
                            <h2 class="title position-relative montserrat-font">Infusion Therapy</h2>
                            <p class="description mt-3 mb-3">We deliver pumps to your patients, we compound the medications needed, we provide 24/7 emergency pump line consultants, and provide pump pick ups.</p>
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Infusion Therapy']); ?>" class="url text-decoration-none d-block montserrat-font">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-4.png'; ?>" alt="Infusion therapy">
                    </div>
                </div>
                <div class="row c-card">
                    <div class="col-md-6">
                        <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-5.png'; ?>" alt="Hospice compounding & wound management">
                    </div>
                    <div class="col-md-6 ps-0 d-flex justify-content-start align-items-center">
                        <div class="content">
                            <h2 class="title position-relative montserrat-font">Hospice Compounding & Wound Management</h2>
                            <p class="description mt-3 mb-3">We own and operate our own compounding labs, making all of your compound needs attainable.</p>
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Hospice Compounding & Wound Management']); ?>" class="url text-decoration-none d-block montserrat-font">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="row c-card">
                    <div class="col-md-6 pe-0 d-flex justify-content-end align-items-center">
                        <div class="content">
                            <h2 class="title position-relative montserrat-font">PBM Solutions</h2>
                            <p class="description mt-3 mb-3">Real time solutions for EMR integration, Reporting & Analytics, Regulatory Compliance, Continuing Education, and E-prescribing.</p>
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['PBM Solutions with PDCRx']); ?>" class="url text-decoration-none d-block montserrat-font">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-6.png'; ?>" alt="PBM solutions">
                    </div>
                </div>
            </div>
            <div class="container hospice-mobile-page-content me-auto ms-auto mt-5 mb-5 d-lg-none d-xl-none d-xxl-none d-md-block d-sm-block">
                <div class="row">
                    <div class="col-sm-6 mb-3 w-50">
                        <div class="content text-center">
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Medication Access']); ?>" class="text-decoration-none">
                                <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-1.png'; ?>" alt="Pills">
                                <h2 class="title pt-2">Medication Access</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 w-50">
                        <div class="content text-center">
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Clinical Support']); ?>" class="text-decoration-none">
                                <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-2.png'; ?>" alt="Elderly holding hands">
                                <h2 class="title pt-2">Clinical Support</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 w-50">
                        <div class="content text-center">
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Best in Industry Pricing']); ?>" class="text-decoration-none">
                                <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-3.png'; ?>" alt="Piggy bank">
                                <h2 class="title pt-2">Best in Industry Pricing</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 w-50">
                        <div class="content text-center">
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Infusion Therapy']); ?>" class="text-decoration-none">
                                <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-4.png'; ?>" alt="Infusion therapy">
                                <h2 class="title pt-2">Infusion Therapy</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 w-50">
                        <div class="content text-center">
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Hospice Compounding & Wound Management']); ?>" class="text-decoration-none">
                                <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-5.png'; ?>" alt="Hospice compounding & wound management">
                                <h2 class="title pt-2">Hospice Compounding & Wound Management</h2>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 w-50">
                        <div class="content text-center">
                            <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['PBM Solutions with PDCRx']); ?>" class="text-decoration-none">
                                <img class="w-100" src="<?php echo get_theme_file_uri() . '/img/hospice/hospice-6.png'; ?>" alt="PBM solutions">
                                <h2 class="title pt-2">PBM Solutions</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5 row">
              <div class="col-lg-6 mx-auto">
                <h3 class="mb-4 montserrat-font text-blue">Would you like to set up your organization for free medication delivery?</h3>
                <a class="btn btn-sm btn-success fw-bold montserrat-font px-5 py-2 text-white" href="<?= get_permalink( get_page_by_path('contact-us') ) ?>">Contact Us</a>
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
