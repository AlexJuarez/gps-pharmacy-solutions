<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

get_header('shop');

$product_id = get_the_ID();
$product = wc_get_product($product_id);

$is_external = $product->is_type('external');
$product_external = $product;
if ($is_external) {
	$product_external = new WC_Product_External($product_id);
}

$product_category = wc_get_product_category_list($product_id);
?>


<main id="primary" class="site-main">
	<div class="container-fluid breadcrumbs-container shop d-none d-lg-block">
		<div class="container">
			<div class="row">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb montserrat-font m-0">
							<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-decoration-none text-secondary">Home</a></li>
							<li class="breadcrumb-item"><a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="text-decoration-none text-secondary">Shop</a></li>
							<li class="breadcrumb-item breadcrumb-url"><?php echo $product_category; ?></li>
							<li class="breadcrumb-item breadcrumb-current"><?php the_title(); ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="container product">
		<div class="row page-content-wrapper">
			<div class="col-lg-4 h-fit-content sticky-top position-md-static">
				<div class="product-image-container text-center position-relative">
					<a href="<?php echo wc_get_cart_url(); ?>" class="text-decoration-none">
						<p class="d-none position-absolute product-added-btn" style="right: 0; left: 0; top: 0; bottom: 0; display: flex; align-items: center; justify-content: center">
							<span class="text-warning bg-white rounded-3 fw-bold m-auto py-2 px-3 product-added-btn">Product added!</span>
						</p>
					</a>
					<?php the_post_thumbnail(); ?>
				</div>
				<?php
				$columns           = apply_filters('woocommerce_product_thumbnails_columns', 4);
				$post_thumbnail_id = $product->get_image_id();
				$wrapper_classes   = apply_filters(
					'woocommerce_single_product_image_gallery_classes',
					array(
						'woocommerce-product-gallery',
						'woocommerce-product-gallery--' . ($post_thumbnail_id ? 'with-images' : 'without-images'),
						'woocommerce-product-gallery--columns-' . absint($columns),
						'images',
					)
				);
				?>
				<div class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>" data-columns="<?php echo esc_attr($columns); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
					<figure class="woocommerce-product-gallery__wrapper">
						<?php
						if ($post_thumbnail_id) {
							$html = wc_get_gallery_image_html($post_thumbnail_id, false);
						} else {
							$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
							$html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
							$html .= '</div>';
						}

						echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

						do_action('woocommerce_product_thumbnails');
						?>
					</figure>
				</div>
			</div>
			<div class="col-lg-8">
				<h1 class="fs-2 fw-900 text-primary"><?php the_title(); ?></h1>
				<?php if ($product_id === 224) : ?>
					<div class="row mt-5">
						<div class="col-lg-2 col-md-3 col-sm-6 text-center product-cat">
							<img src="<?php echo get_theme_file_uri(); ?>/img/shop/image_Gluten-Free.png" alt="Gluten Free">
							<p class="text-primary mt-2">Gluten-Free</p>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6 text-center product-cat">
							<img src="<?php echo get_theme_file_uri(); ?>/img/shop/image_Soy-Free.png" alt="Soy Free">
							<p class="text-primary mt-2">Soy-Free</p>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6 text-center product-cat">
							<img src="<?php echo get_theme_file_uri(); ?>/img/shop/image_Non-GMO.png" alt="Non-GMO">
							<p class="text-primary mt-2">Non-GMO</p>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6 text-center product-cat">
							<img src="<?php echo get_theme_file_uri(); ?>/img/shop/image_Dairy-Free.png" alt="Dairy Free">
							<p class="text-primary mt-2">Dairy-Free</p>
						</div>
					</div>
				<?php endif; ?>
				<p class="mt-4 mb-4 fs-4 fw-900 text-success"><?php echo $product->get_price_html(); ?></p>
				<div class="text-start product-description"><?php the_content(); ?></div>
				<div class="product-atc-wrapper d-flex align-items-center flex-md-row flex-column">
					<?php if ($is_external) : ?>
						<a href="<?php echo $product_external->get_product_url(); ?>?src=gpsps" aria-label="<?php the_title(); ?>" target="_blank" class="fw-bold btn btn-success w-50 w-md-100 py-3 px-5 text-decoration-none montserrat-font text-white">Buy Now</a>
					<?php else : ?>
						<div class="w-100 shop-sp me-md-1 me-0 mb-md-0 mb-1">
							<a href="?add-to-cart=<?php echo $product_id; ?>" data-quantity="1" data-product_id="<?php echo $product_id; ?>" aria-label="<?php the_title(); ?>" rel="nofollow" class="fw-bold btn btn-blue w-100 py-3 px-5 text-decoration-none montserrat-font add_to_cart_button ajax_add_to_cart">Add To Cart</a>
						</div>
						<div class="w-100 ms-md-1 ms-0 mt-md-0 mt-1">
							<a href="<?php echo wc_get_checkout_url(); ?>?add-to-cart=<?php echo $product_id; ?>" data-quantity="1" data-product_id="<?php echo $product_id; ?>" aria-label="<?php the_title(); ?>" rel="nofollow" class="fw-bold btn btn-success w-100 py-3 px-5 text-decoration-none montserrat-font text-white">Buy Now</a>
						</div>
					<?php endif; ?>
				</div>
				<?php if (!$is_external) : ?>
					<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
				<?php endif; ?>
			</div>
		</div>
		<?php
		if ($product_id === 224 || $product_id === 229) :
			$product_image_dir_name = $product_id === 224 ? 'isagenix' : 'lashes';
		?>
			<hr>
			<h5 class="my-5 text-center fw-bolder text-primary">BEFORE AND AFTER</h5>
			<div id="splide" class="splide mx-auto mb-5">
				<div class="splide__track">
					<ul class="splide__list text-center">
						<li class="splide__slide">
							<img src="<?php echo get_theme_file_uri(); ?>/img/shop/<?php echo $product_image_dir_name; ?>/1.png" alt="Before and After 1">
						</li>
						<li class="splide__slide">
							<img src="<?php echo get_theme_file_uri(); ?>/img/shop/<?php echo $product_image_dir_name; ?>/2.png" alt="Before and After 2">
						</li>
						<li class="splide__slide">
							<img src="<?php echo get_theme_file_uri(); ?>/img/shop/<?php echo $product_image_dir_name; ?>/3.png" alt="Before and After 3">
						</li>
						<?php if ($product_id === 224) : ?>
							<li class="splide__slide">
								<img src="<?php echo get_theme_file_uri(); ?>/img/shop/<?php echo $product_image_dir_name; ?>/4.png" alt="Before and After 4">
							</li>
							<li class="splide__slide">
								<img src="<?php echo get_theme_file_uri(); ?>/img/shop/<?php echo $product_image_dir_name; ?>/5.png" alt="Before and After 5">
							</li>
							<li class="splide__slide">
								<img src="<?php echo get_theme_file_uri(); ?>/img/shop/<?php echo $product_image_dir_name; ?>/6.png" alt="Before and After 6">
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		<?php endif; ?>
	</div>
</main><!-- #main -->

<?php
get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
