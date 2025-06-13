<?php
/**
 * Template Name: Shop: Anti Aging
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
          <li class="breadcrumb-item active" aria-current="page"><?= apply_filters( 'the_title', $queried_object->name ) ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="align-items-center d-flex hero py-5" style="background-color: #c3c5d0;">
    <div class="container mt-7 mt-lg-0 w-100">
      <div class="g-0 mt-6 mt-lg-0 row">
        <div class="col-lg-6 ms-lg-auto px-4">
          <h1 class="mb-4 montserrat-font text-primary">Order Affordable Anti-Aging Skincare Products Directly to Your Door</h1>
          <p class="fw-bold mb-4">GPS Pharmacy specializes in the best anti-aging skin care products for prevention and treatment of wrinkles and sagging skin. Our anti-wrinkle skin care products include the Youth Effect MD to give you healthy skin.</p>
          <a class="btn btn-blue btn-sm fw-bold montserrat-font px-4 rounded small py-2" href="<?= get_permalink( get_page_by_path('contact-us') ) ?>">Contact Us</a>
        </div>
      </div>
    </div>
    <div class="hero-image" data-hero-image="anti-aging"></div>
  </section>

  <section class="bg-light container-fluid py-5">
    <div class="container py-3 py-lg-4">

      <div class="text-center">
        <h2 class="mb-4 montserrat-font text-primary">Trust GPS Pharmacy For The Best Anti-Aging Skin Care Products</h2>
        <p>Youth Effect MD is an all-natural and affordable anti-aging skin care product designed to combat aging skin with DHT blocking, collagen supplementation, and external micro-needling. The result is a repair treatment for an at-home medical-grade anti-aging skincare system. </p>
        <p>If you’re looking to hydrate and increase elastin and collagen production, use a treatment serum without parabens, find a moisturizing product for sun damage or simply want to treat acne — we’ve got you covered. Our expert pharmacists can create affordable anti-aging skincare products formulated to improve facial aesthetics.</p>
        <p class="mb-5">Call now to discuss your needs with a pharmacist and shop online for free and fast delivery.</p>
      </div>

      <?php if ( woocommerce_product_loop() && wc_get_loop_prop('total') ): ?>
        <div class="justify-content-center row">

          <?php while( have_posts() ): the_post(); global $product; ?>
            <div class="col-sm-6 col-lg-4 col-xl-3 d-flex mb-4">
              <div class="bg-white d-flex flex-column p-4 rounded shadow-sm">
                <div class="position-relative">
                  <p class="d-none text-decoration-none bg-white text-warning position-absolute rounded-3 fw-bold m-auto pt-2 pb-2 pe-3 ps-3 product-added-btn" style="right: 0; left: 0; top: 0; bottom: 0; z-index: 1080;">Product added!</p>
                  <a class="mb-3 media-1-1" href="<?php the_permalink(); ?>">
                    <?= get_the_post_thumbnail( get_the_ID() ) ?>
                  </a>
                </div>
                <h2 class="fw-bold h5 text-center">
                  <a href="<?php the_permalink(); ?>" class="text-decoration-none text-primary"><?php the_title(); ?></a>
                </h2>
                <?php if( $product->get_short_description() != '' && $product->get_short_description() != '&nbsp;' ): ?>
                  <p class="text-center ps-4 pe-4 product-note-"><?= $product->get_short_description() ?></p>
                <?php endif; ?>
                <div class="mt-auto product-atc-wrapper text-center">
                  <?php if ($product->is_type('external')): $product_external = new WC_Product_External( get_the_ID() ); ?>
                    <a class="btn btn-success btn-sm fw-bold montserrat-font px-4 rounded small py-2" href="<?php echo $product_external->get_product_url(); ?>?src=gpsps" rel="nofollow">Buy Now</a>
                  <?php else : ?>
                    <a class="add_to_cart_button ajax_add_to_cart btn btn-blue btn-sm fw-bold montserrat-font px-4 rounded small py-2" data-quantity="1" data-product_id="<?php the_ID(); ?>" href="?add-to-cart=<?php the_ID(); ?>" rel="nofollow">Add To Cart</a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php else: ?>
        <p>No products found!</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php
get_sidebar();
get_footer();
