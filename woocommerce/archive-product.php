<?php
defined('ABSPATH') || exit;

get_header('shop');
?>

<main id="primary" class="site-main">
	<div class="container-fluid wc homepage d-flex"
		style="background-image: url('<?php echo get_theme_file_uri() . '/img/shop/homepage-cover.jpg'; ?>'); background-position: top center; background-repeat: no-repeat; background-size: cover;">
		<div class="row align-items-end mx-auto w-100">
			<div class="col">
				<div class="container gps-info-boxes-container">
					<div class="row">
						<div class="mx-auto mt-4 mb-2 g-0 col-12 col-lg-4">
							<div class="gps-info-box gps-ag">
								<div
									class="gps-info-box-front gps-info-box-fbc d-flex flex-column align-items-center justify-content-center">
									<div class="icon mb-md-3 mb-0">
										<img src="<?php echo get_theme_file_uri() . '/img/shop/ag.svg'; ?>"
											alt="Anti-aging">
									</div>
									<div class="title montserrat-font text-center mb-5">
										<p class="fs-xl-4 fs-5">Anti-aging for Women and Men</p>
									</div>
									<div class="button montserrat-font">
										<a class="bg-warning"
											href="<?php echo get_category_link(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Anti-aging for Women and Men']); ?>">Explore
											Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="mx-auto mt-2 mb-2 g-0 col-12 col-lg-4">
							<div class="gps-info-box gps-lashes">
								<div
									class="gps-info-box-front gps-info-box-fbc d-flex flex-column align-items-center justify-content-center">
									<div class="icon mb-md-3 mb-0">
										<img src="<?php echo get_theme_file_uri() . '/img/shop/lashes.svg'; ?>"
											alt="Lashes">
									</div>
									<div class="title montserrat-font text-center mb-5">
										<p class="fs-xl-4 fs-5" style="margin-top: 20px !important;">Lashes</p>
									</div>
									<div class="button montserrat-font">
										<a class="bg-info"
											href="<?php echo get_category_link(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Lashes']); ?>">Explore
											Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="mx-auto mt-2 mb-4 g-0 col-12 col-lg-4">
							<div class="gps-info-box gps-hr">
								<div
									class="gps-info-box-front gps-info-box-fbc d-flex flex-column align-items-center justify-content-center">
									<div class="icon mb-md-3 mb-0">
										<img src="<?php echo get_theme_file_uri() . '/img/shop/hr.svg'; ?>"
											alt="Hair Restoration">
									</div>
									<div class="title montserrat-font text-center mb-5">
										<p class="fs-xl-4 fs-5">Hair Restoration for Women and Men</p>
									</div>
									<div class="button montserrat-font">
										<a class="bg-success"
											href="<?php echo get_category_link(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Hair Restoration for Women and Men']); ?>">Explore
											Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container hp-copy">
		<div class="row my-5">
			<div class="col">
				<div style="width: 200px; height: 1px; background: var(--bs-warning); margin: auto;"></div>
				<h1 class="montserrat-font fs-3 text-center text-primary mx-auto my-4">Your Favorite Cosmetics and
					Beauty Products Right to Your Door!</h1>
				<p class="text-center">GPS Pharmacy specializes in medical grade cosmetics and beauty products with free
					delivery to your door. Just use our beauty care products online shopping portal and our drivers will
					be dispatched directly to you!</p>
				<div class="row mx-auto ul">
					<div class="col">
						<ul>
							<li>Our medical grade <a
									href="<?php echo get_category_link(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Anti-aging for Women and Men']); ?>"
									class="text-decoration-none">skincare products</a> include the at home micro
								needling skin tightening kit, and DHT blocking capsules for <a
									href="<?php echo get_category_link(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Hair Restoration for Women and Men']); ?>"
									class="text-decoration-none">scalp hair regrowth</a> and prevention of collagen
								collapse.</li>
							<li>Our <a
									href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Aesthetics']); ?>"
									class="text-decoration-none">cosmetics</a> include the award-winning <a
									href="<?php echo get_category_link(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Lashes']); ?>"
									class="text-decoration-none">lash growth serum</a>.</li>
						</ul>
					</div>
				</div>
				<p class="text-center">Visit the wellness shop and medical grade product shop today to buy online and
					receive free delivery with your order. Or, you can call us to place your order over the phone at <a
						href="tel:9802452028" class="text-decoration-none">980-245-2028</a>. Looking forward to
					assisting you soon!</p>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer('shop');
