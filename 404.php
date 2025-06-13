<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package GPS_Pharmacy_Solutions
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
		    <div class="container thank-you-wrapper">
			<dic class="row">
				<div class="col shadow p-md-5 m-md-5 p-2 mx-3 my-5 rounded-3">
					<div class="mt-5 bg-warning rounded-circle d-flex align-items-center justify-content-center ms-auto me-auto" style="width: 100px; height: 100px;">
						<h1 class="text-white fw-900 m-0">!</h1>
					</div>
					<div>
						<h4 class="text-warning text-center fw-bold mt-5 mb-5">
							<div class="woocommerce-notices-wrapper"></div><p class="cart-empty woocommerce-info"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gps-pharmacy-solutions' ); ?></p>						</h4>

						<div class="product-atc-wrapper d-flex align-items-center m-5">
							<a href="https://gpsmymeds.com/" class="fw-bold btn btn-success text-white w-fit-content py-md-3 px-md-5 py-2 px-3 ms-auto me-auto text-decoration-none montserrat-font">
								Return to homepage							</a>
						</div>
					</div>
				</div>
			</dic>
		</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
