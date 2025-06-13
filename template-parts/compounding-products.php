<?php

/**
 * Template Name: Compounding: Products
 *
 * @package GPS_Pharmacy_Solutions
 */

get_header();

$styling_class = '';
$page_title = strtolower(get_the_title());
$index = 0;

if (strpos($page_title, 'women') !== false) {
    $styling_class = 'womens-health';
} elseif (strpos($page_title, 'men') !== false) {
    $index = 1;
    $styling_class = 'mens-health';
} elseif (strpos($page_title, 'sterile') !== false) {
    $index = 2;
    $styling_class = 'sterile-compounding';
} elseif (strpos($page_title, 'veterinary') !== false) {
    $index = 3;
    $styling_class = 'veterinary';
} elseif (strpos($page_title, 'aesthetics') !== false) {
    $index = 4;
    $styling_class = 'aesthetics';
}

?>

<main id="primary" class="site-main">
    <div class="container-fluid breadcrumbs-container d-none d-lg-block <?php echo $styling_class; ?>">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb montserrat-font m-0">
                            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-decoration-none text-secondary">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Compounding']); ?>" class="text-decoration-none text-secondary">Compounding</a></li>
                            <li class="breadcrumb-item breadcrumb-current"><?php echo get_the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- cover -->
    <?php if ($index === 0) : ?>
        <section class="py-6 text-center compounding-cover wh-cover" style="background-image: url(<?php echo get_theme_file_uri() . '/img/homepage/compounding-1.jpg'; ?>);">
            <div class="py-6 py-lg-7">
            </div>
        </section>
    <?php elseif ($index === 1) : ?>
        <section class="py-6 text-center compounding-cover mh-cover" style="background-image: url(<?php echo get_theme_file_uri() . '/img/homepage/compounding-2.jpg'; ?>);">
            <div class="py-6 py-lg-7">
            </div>
        </section>
    <?php elseif ($index === 4) : ?>
        <section class="py-6 text-center compounding-cover as-cover" style="background-image: url(<?php echo get_theme_file_uri() . '/img/homepage/compounding-5.jpg'; ?>);">
            <div class="py-6 py-lg-7">
            </div>
        </section>
    <?php elseif ($index === 3) : ?>
        <section class="py-6 text-center compounding-cover veterinary-cover" style="background-image: url(<?php echo get_theme_file_uri() . '/img/veterinary/hero.jpg'; ?>);">
            <div class="py-6 py-lg-7">
            </div>
        </section>
    <?php endif; ?>

    <div class="container">
        <div class="row compounding-products page-content-wrapper justify-content-center <?php echo $styling_class; ?>" style="margin-top: 50px;">
            <div class="col-12">
                <?php $page_title = get_the_title(); ?>
                <?php if ($index === 0) : ?>
                    <?php echo '<h1 class="entry-title montserrat-font">Purchase Your Essential Women’s Health Products and Receive Them the Same Day!</h1>'; ?>
                    <p class="mt-4">We believe that every woman should feel great at any age. Our women’s health product offering includes hormone replacement, infertility, female sexual health, weight loss, aesthetics, personal care products, wellness health supplements, and much more.</p>
                    <p class="mt-4">We work with women’s health clinics and have a pharmacist consultant on site who specialize in female health. We are here to support you with menopause, your menstrual cycle, aging, infertility, and other personal health-related needs.</p>
                    <p class="mt-4">As a PCCA-certified pharmacy, our ingredients are of the highest quality and our products are free of fillers, preservatives, allergens, and dyes.</p>
                    <p class="mb-5">The following are common formulas for women's health, contact GPS Pharmacy at <a href="tel:9802452028" class="text-decoration-none">980-245-2028</a> for our full list of compounded products.</p>
                <?php elseif ($index === 1) : ?>
                    <?php echo '<h1 class="entry-title montserrat-font">Purchase Your Essential Men’s Health Products and Receive Them the Same Day!</h1>'; ?>
                    <p class="mt-4"><a href="<?php echo GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Home']; ?>" class="text-decoration-none">GPS Pharmacy</a> is your home for all the medications and products you need to ensure proper health for men of all ages. Our men’s health product line includes hormone replacement therapy, erectile dysfunction, growth hormone therapy, hair restoration, sexual health supplements for men, prostate support, disease management, healthy weight management, health supplements, men’s health products, and more.</p>
                    <p class="mt-4">Our sexual health products are <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Compounding']); ?>" class="text-decoration-none">compounded</a> to provide faster onset and better results than traditional therapies. Our doses are customized for each male, providing maximum benefits. Call now to discuss your specific needs.</p>
                    <p class="mb-5">The following are common formulas for men's health, contact GPS Pharmacy at <a href="tel:9802452028" class="text-decoration-none">980-245-2028</a> for our full list of compounded products.</p>
                <?php elseif ($index === 2) : ?>
                    <?php $page_title = str_replace(' ', ' <br class="d-block d-sm-none">', $page_title); ?>
                    <?php echo '<h1 class="entry-title montserrat-font"><span class="labs-cs">GPS <797> labs coming soon.</span><br>The Board-Certified Sterile Compounding Pharmacy That Delivers Straight to You!</h1>'; ?>
                    <p class="mt-4"><a href="<?php echo GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Home']; ?>" class="text-decoration-none">GPS Pharmacy</a> is a sterile compounding pharmacy that provides compounded sterile preparations to meet your needs. GPS sterile compounding labs specialize in ophthalmic, PCA pumps, sexual health, women’s and men’s hormone replacement, vitamin IV therapy, investigational drugs and much more.</p>
                    <p class="mt-4">Our USP <795>, <797>, and <800> labs uphold the highest regulatory standards set by the United States Pharmacopeia and boards of pharmacy. Our certified pharmacists and specialty pharmacy technicians have compounding certification to meet all of your sterile needs.</p>
                    <p class="mt-4">As a PCCA-certified compounded sterile preperations pharmacy, our ingredients are of the highest grade to bring you the highest quality compounded sterile preperations. Review our compounded services below or please call us at <a href="tel:9802452028" class="text-decoration-none">980-245-2028</a> to discuss your specific compounding needs.</p>
                    <p class="mb-5">The following are common sterile formulas, contact GPS Pharmacy at <a href="tel:9802452028" class="text-decoration-none">980-245-2028</a> for our full list of compounded products.</p>
                <?php elseif ($index === 3) : ?>
                    <?php echo '<h1 class="entry-title montserrat-font">Premier Compounding Pharmacy for Pets and Exotic Species</h1>'; ?>
                    <p class="mt-4"><a href="<?php echo GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Home']; ?>" class="text-decoration-none">GPS Pharmacy</a> not only creates compounding drugs for your loved ones, but also for your furry friends! We are the experienced compounding pharmacy for pets and we deliver right to your door!</p>
                    <p class="mt-4">We are a pet health pharmacy that creates custom prescriptions to meet the needs of each species. Pet owners of canine, feline, reptile, avian, and exotic species can rest assured that our pet medications will be compounded in the most flavorful and easy-to-dose way and always with the highest quality ingredients.</p>
                    <p class="mt-4">Veterinary compounded medications can come as tiny chews, flavored liquids, transdermal creams, wound puffers, and much more. As a pet pharmacy we specialize in preparations free of proteins and other allergens for our sensitive patients or those with specific diets.</p>
                    <p class="mb-5">Below is a list of some of our veterinary medications. Please call us at <a href="tel:9802452028" class="text-decoration-none">980-245-2028</a> to order and receive your pet compounding medication with free delivery.</p>
                <?php elseif ($index === 4) : ?>
                    <?php echo '<h1 class="entry-title montserrat-font">Aesthetic Skin Care Products to Bring Out Your Youth!</h1>'; ?>
                    <p class="mt-4"><a href="<?php echo GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Home']; ?>" class="text-decoration-none">GPS</a> provides patients with prescription skin and hair restoration compounds and non-prescription aesthetic skin care products in our <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="text-decoration-none">online store</a>. For medical practices, we offer bases specifically designed for lasers, PRP procedures, vampire facials, hair removal, medical grade professional skincare, aging, and plastic surgery. For customers, we have custom creams that are designed for skin regeneration, turnover and tightening. We work with estriols, retinols, hyaluronic acid, and more. Whether you are looking for aesthetic skin care, professional skin bases, or products for lines and beauty, we are your skin health center for all skin types.</p>
                    <p class="mt-4">Aesthetic skin care products help regenerate your natural beauty. From beauty cosmetics to medical skincare, GPS Pharmacy Solutions delivers all of your favorite aesthetic products right to your home. All you have to do is give us a call or browse our online <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="text-decoration-none">health center shop</a> and you will receive your order with free same-day delivery.</p>
                    <p class="mt-4">Call to discuss your specific needs with our professional skin care team. We provide aesthetic skin care suggestions for all skin types and help you with selecting a product that will reduce and reverse the signs of aging. Start using our medical skincare products today to start seeing results.</p>
                    <p class="mb-5">The following are common aesthetic formulas, contact GPS Pharmacy at <a href="tel:9802452028" class="text-decoration-none">980-245-2028</a> for our full list of compounded products.</p>
                <?php endif; ?>
            </div>
            <?php if ($index === 0) : ?>
                <div class="row d-grid product-list">
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/11.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">HCG Injection</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/8.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Hemorrhoid Creams, Gels, and Suppositories</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Gel or Suppositories<br>Hydrocortisone<br>Lidocaine<br>Nifedipine</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/5.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Hormone Replacement Capsules</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">DHEA<br>Estradiol<br>Estriol<br>Progesterone</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Hormone Replacement Cream</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Biest (Estriol/Estradiol)<br>DHEA<br>Progesterone<br>Testosterone</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/11.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Hormone Replacement Injections</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Estradiol<br>Testosterone</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/2.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Hormone Replacement Troche</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Biest (Estriol/Estradiol)<br>Progesterone<br>Testosterone</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/7.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Infertility</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Progesterone<br>Suppositories</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Injectable Medications</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">B-Complex<br>Cyanocobalamin<br>Hydroxocobalamin<br>Methylcobalamin</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto p-0 align-items-start">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/2.png'; ?>" alt="" class="iv-t">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">IV Therapy</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/9.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Libido Creams and Gels</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Arginine<br>Papaverine<br>Sildenafil<br>Testosterone</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/5.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Naltrexone Capsules</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/10.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Oxytocin Nasal Spray</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/2.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Oxytocin Troche</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/2.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Sexual Dysfunction Troche</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Sildenafil</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/5.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Thyroid Replacement</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">T3/T4 Capsules</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/9.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Vaginal Atrophy/Dryness Creams and Gels</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">DHEA<br>Estradiol<br>Estriol<br>Testosterone<br>Vitamin E Vaginal Gel</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/8.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Vaginal Infection Creams, Gels, and Suppositories:</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">
                                <strong>Bacterial Vaginosis:</strong><br>
                                Boric Acid, Clindamycin, Metronidazole, Nystatin
                                <br><strong>Yeast:</strong><br>
                                Boric Acid Vaginal, Clotrimazole, Fluconazole
                            </p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/4.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Vaginal Hormone Replacement</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Estrogen Vaginal Creams/Gels</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/8.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Vulvodynia Creams, Gels, and Suppositories</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Amitriptyline<br>Baclofen<br>Diazepam<br>Gabapentin<br>Ketamine</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/womens-health/5.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Weight Loss</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">7Keto-DHEA<br>Capsules<br>Phentermine Capsules</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Women’s Hormone Replacement Therapy</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Estradiol<br>Testosterone</p>
                        </div>
                    </div>
                </div>
            <?php elseif ($index === 1) : ?>
                <div class="row d-grid product-list">
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/mens-health/4.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Anastrazole Capsules</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/mens-health/5.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">HCG Injection</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Injectable Medications</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">B-Complex<br>Cyanocobalamin<br>Hydroxocobalamin<br>Methylcobalamin</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto p-0 align-items-start">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/2.png'; ?>" alt="" class="iv-t">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">IV Therapy</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Men’s Erectile Dysfunction</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">
                                BiMix (Papaverine / Phentolamine)<br>
                                TriMix (Papaverine / Phentolamine / Prostaglandin)<br>
                                QuadMix (Papaverine / Phentolamine / Prostaglandin / Atropine)<br>
                            </p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Men’s Hormone Replacement Therapy</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Testosterone</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/mens-health/2.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Sexual Dysfunction</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Sildenafil/Tadalafil Troches</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/mens-health/3.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Testosterone Injection</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">200mg/ml</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/mens-health/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Testosterone Replacement Cream</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/mens-health/2.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Testosterone Replacement Troche</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/mens-health/4.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Weight Loss</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">7Keto-DHEA<br>Phentermine Capsules</p>
                        </div>
                    </div>
                </div>
            <?php elseif ($index === 2) : ?>
                <div class="row d-grid product-list">
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Injectable Medications</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">B-Complex<br>B12 injections<br>Cyanocobalamin<br>Hydroxocobalamin<br>Methylcobalamin<br>Testosterone Injections<br>TRIMIX injections, ED injections</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto p-0 align-items-start">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/2.png'; ?>" alt="" class="iv-t">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">IV Therapy</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description"></p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto p-0 align-items-end justify-content-start">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/3.png'; ?>" alt="" style="height: 100%;object-fit: cover;">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">IV Therapy</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Clinical Trial Compounding<br>FDA Shortage Compounding</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Men’s Erectile Dysfunction</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">BiMix (Papaverine / Phentolamine)<br>TriMix (Papaverine / Phentolamine / Prostaglandin)<br>QuadMix (Papaverine / Phentolamine / Prostaglandin / Atropine)</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Men’s Hormone Replacement Therapy</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Testosterone</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/5.jpg'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Ophthalmic Human Drops and Ointments</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Autologous Serum Tears<br>Cyclosporine<br>Tacrolimus</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/5.jpg'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Ophthalmic Veterinary Drops and Ointments</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Chloramphenicol<br>Cyclosporin<br>Tacrolimus</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/6.jpg'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Veterinary Otic Ear Packs</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Betamethasone dipropionate<br>Chloramphenicol<br>Enrofloxacin<br>Ketoconazole<br>Mupirocin<br>Triamcinolone</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Women’s Hormone Replacement Therapy</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Estradiol<br>Testosterone</p>
                        </div>
                    </div>
                </div>
            <?php elseif ($index === 3) : ?>
                <div class="row d-grid product-list">
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri() . '/img/veterinary/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Buccal or Concentrated Solutions</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p>Available for any species<br>We have custom flavors available</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri() . '/img/veterinary/2.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Capsules are Available</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p>In custom sizes #3 to #00 to meet the needs of your pet.</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/5.jpg'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Ophthalmic Veterinary Drops and Ointments</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Chloramphenicol<br>Cyclosporin<br>Tacrolimus</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri() . '/img/veterinary/feline-canine-chews.jpg'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Our chews are smaller than an eraser tip</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p>Feline and canine chews available in custom flavors</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri() . '/img/veterinary/3.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Transdermal Ear Cream</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p>Our micropen allows for medication to be absorbed through the skin in the ear and is an ideal application for pets who easily stress out over taking medications by mouth.</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/sterile-compounding/6.jpg'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Veterinary Otic Ear Packs</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Betamethasone dipropionate<br>Chloramphenicol<br>Enrofloxacin<br>Ketoconazole<br>Mupirocin<br>Triamcinolone</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img class="img-fluid" src="<?php echo get_theme_file_uri() . '/img/veterinary/latnus-pen.jpg'; ?>" alt="" style="height: initial;">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Lantus Pen</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p>Available as single pens for your pet. <br> Pens are easy to use, 1 press of a button to deliver a wide range of units.</p>
                        </div>
                    </div>
                </div>
            <?php elseif ($index === 4) : ?>
                <div class="row d-grid product-list">
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/aesthetics/2.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Hair Restoration and Hair Growth</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Female pattern baldness<br>Hair thinning<br>Male pattern baldness<br>Alopecia<br>Finasteride<br>Latanoprost<br>Minoxidil</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/aesthetics/1.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Numbing Creams and Gels</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">BLT numbing Creams with custom strengths for Laser, micro needling, Botox, filler, lip injections and more.<br>Benzocaine<br>Lidocaine<br>Tetracaine</p>
                        </div>
                    </div>
                    <div class="col product-cat">
                        <div class="product-image-wrapper text-center mb-3 me-auto ms-auto">
                            <img src="<?php echo get_theme_file_uri() . '/img/compounding/aesthetics/3.png'; ?>" alt="">
                        </div>
                        <div class="product-title-wrapper">
                            <p class="product-title fw-bold mb-2">Skin Tightening</p>
                        </div>
                        <div class="product-description-wrapper">
                            <p class="product-description">Custom Formulations<br>Estriol<br>Hyaluronic Acid<br>Hydroquinone for dark spots<br>Retin-A (tretinoin) custom strengths for fine lines and wrinkles<br>Tretinoin<br>Vitamin E</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($index === 3) : ?>
                <div class="container">
                    <section class="py-5 row">
                        <div class="col-lg-8 mx-auto">
                            <div class="row">
                                <div class="col-lg-6 d-flex flex-column h5">
                                    <h2 class="align-items-center bg-primary d-flex h3 justify-content-center mb-0 px-4 py-3 text-center text-white" style="min-height: 100px;">Oral Chews, Liquid, Caps</h2>
                                    <ul class="list-unstyled mb-0 shadow-sm text-center text-lg-start">
                                        <li class="ps-3 ps-lg-5">
                                            <h3 class="border-bottom border-primary fw-bold h5 py-3 text-primary">Top Drugs</h3>
                                        </li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Amlodipine</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Benazepril</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Budesonide</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Cisapride</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Chloramphenicol</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Enalapril</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Estriol (DES alternative)</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Fluoxetine</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Gabapentin </li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Methimazole</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Pimobendan</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Prednisolone</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Theophylline</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Ursodiol</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 d-flex flex-column h5">
                                    <h2 class="align-items-center bg-primary d-flex h3 justify-content-center mb-0 px-4 py-3 text-center text-white" style="min-height: 100px;">Transdermal Micropen dose in 0.05ml</h2>
                                    <ul class="list-unstyled mb-0 shadow-sm text-center text-lg-start">
                                        <li class="ps-3 ps-lg-5">
                                            <h3 class="border-bottom border-primary fw-bold h5 py-3 text-primary">Top Drugs</h3>
                                        </li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Amitriptyline</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Amlodipine</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Cyclosporin</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Fluoxetine</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Gabapentin</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Methimazole</li>
                                        <li class="border-bottom px-3 px-lg-5 py-3">Prednisolone</li>
                                    </ul>
                                    <div class="bg-blue mt-5 p-5 text-center text-white h-100 d-flex flex-column justify-content-center">
                                        <h3 class="fw-bold h2 mb-3">Contact Us For Our Full Drug List</h3>
                                        <p class="mb-4">Get In Touch! We are here to answer your question.</p>
                                        <a class="btn btn-success fw-bold px-md-5 px-2 py-2 rounded-0 text-white" href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Contact Us']); ?>">Contact Us Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
