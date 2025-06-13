<?php

defined('ABSPATH') || exit;


$url = $_SERVER['REQUEST_URI'];

/* if (strpos($url, '/shop/lashes/') !== false) {
	$product = wc_get_product(229);
	wp_redirect($product->get_permalink());
	exit();
} else if (strpos($url, '/shop/hair-restoration-for-women-and-men/') !== false) {
	$product = wc_get_product(231);
	wp_redirect($product->get_permalink());
	exit();
} */

get_header('shop');
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
							<li class="breadcrumb-item breadcrumb-current"><?php woocommerce_page_title(); ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row page-content-wrapper shop mt-5">
			<?php if (strpos($url, '/shop/anti-aging-for-women-and-men/') !== false) : ?>
				<?php echo '<h1 class="text-primary entry-title montserrat-font">Receive Your Natural Anti-Aging Skin Care Products Right to Your Front Door!</h1>'; ?>
				<p class="mt-4"><a href="<?php echo GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Home']; ?>" class="text-decoration-none">GPS Pharmacy</a> is the home of high-quality anti-aging skincare products that help prevent and treat wrinkles and sagging skin! Our skincare products include the Youth Effect MD line and Isagenix Collagen Elixir.</p>
				<p class="mb-5">Both of these products are anti-aging skincare treatments and are a 100% natural way to combat skin imperfections due to aging. These systems use DHT blocking, collagen supplementation, and external micro-needling for a completely at-home, anti-aging skincare system that rivals the type of treatment you can receive at a medical professional’s office. Chat about your specific needs with a member of our pharmacy team!</p>
			<?php elseif (strpos($url, '/shop/lashes/') !== false) : ?>
				<?php echo '<h1 class="text-primary entry-title montserrat-font">Professional Eyelash Extension Products to Stand Out!</h1>'; ?>
				<p class="mt-4">Babe Lash is the popular (and award-winning!) lash growth serum that's designed to enhance your natural lashes. It is regarded as one of the best professional eyelash extension products in stores today.</p>
				<p>Ever tried lash extensions? Don’t waste your time! They don’t compare to the beauty of long, beautiful, natural lashes. So, skip buying semi-permanent eyelashes or eyelash extensions; just two months after applying our product, you’ll have your very own thick, long, stunning natural eyelashes. The length of the lashes is totally up to you! Order now below.</p>
				<p class="mb-5">Also, check out our <a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="text-decoration-none">online shop</a> for a look at our complete wellness product offering.</p>
			<?php elseif (strpos($url, '/shop/hair-restoration-for-women-and-men/') !== false) : ?>
				<?php echo '<h1 class="text-primary entry-title montserrat-font">Receive Your Natural Hair Loss Pharmacy Supplies the Same Day!</h1>'; ?>
				<p class="mt-4 mb-5">DHT blocking hair capsules are one of the most successful hair loss pharmacy products that exist on the market today for patients who are seeking hair loss treatment. Our Unique offerings for hair loss prevention targets hormone imbalance, follicle weakness and destruction, hair loss, and thinning hair. Our potent DHT blocking capsules are ideal for promoting hair restoration in both men and women patients. If you have any questions about your specific requirements, <a href="tel:9802452028" class="text-decoration-none">give us a call</a> for personalized insight on the best hair loss medications and hair loss products to meet your unique needs.</p>
			<?php else : ?>
				<h1 class="entry-title montserrat-font text-primary mb-4">
					<?php woocommerce_page_title(); ?>
				</h1>
			<?php endif; ?>

			<?php
			if (woocommerce_product_loop()) :
				if (wc_get_loop_prop('total')) :
					while (have_posts()) :
						the_post();
						global $product;
			?>
						<div class="col-lg-6 col-xl-3 mb-4">
							<a href="<?php the_permalink(); ?>" class="text-decoration-none">
								<div class="product-image-wrapper text-center mb-3 me-auto ms-auto position-relative">
									<a href="<?php echo wc_get_cart_url(); ?>">
										<p class="d-none text-decoration-none bg-white text-warning position-absolute rounded-3 fw-bold m-auto pt-2 pb-2 pe-3 ps-3 product-added-btn" style="right: 0; left: 0; top: 0; bottom: 0;">Product added!</p>
									</a>
									<img class="h-100 object-fit-contain" src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url('shop_catalog') : wc_placeholder_img_src(); ?>" alt="s">
								</div>
							</a>
							<div class="product-title-wrapper <?php if (strlen($product->get_short_description()) < 1) echo 'no-notes'; ?>">
								<h2 class="product-title text-center">
									<a href="<?php the_permalink(); ?>" class="text-decoration-none text-secondary"><?php the_title(); ?></a>
								</h2>
								<p class="text-center ps-4 pe-4 product-note-"><?php echo $product->get_short_description(); ?></p>
							</div>
							<div class="product-atc-wrapper">
								<?php
								if ($product->is_type('external')) :
									$product_external = new WC_Product_External(get_the_ID());
								?>
									<a href="<?php echo $product_external->get_product_url(); ?>?src=gpsps" aria-label="<?php the_title(); ?>" target="_blank" class="fw-bold btn btn-success ms-auto me-auto d-block w-fit-content pb-2 pe-5 pt-2 ps-5 text-decoration-none montserrat-font text-white">Buy Now</a>
								<?php else : ?>
									<a href="?add-to-cart=<?php the_ID(); ?>" data-quantity="1" data-product_id="<?php the_ID(); ?>" aria-label="<?php the_title(); ?>" rel="nofollow" class="fw-bold ms-auto me-auto d-block w-fit-content btn btn-blue pb-2 pe-5 pt-2 ps-5 text-decoration-none montserrat-font add_to_cart_button ajax_add_to_cart">Add To Cart</a>
								<?php endif; ?>
								<h3 class="fs-6">
									<a href="<?php the_permalink(); ?>" class="fw-bold ms-auto me-auto d-block w-fit-content py-2 px-5 text-decoration-none montserrat-font text-warning mt-2">Learn More</a>
								</h3>
							</div>
						</div>
				<?php
					endwhile;
				endif;
			else :
				?>
				<p>No products found!</p>
			<?php endif; ?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer('shop');
