<?php

/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined('ABSPATH') || exit;
?>

<style>
	.page-title {
		display: none;
	}

	.page-content-wrapper-half {
		margin-top: 0 !important;
	}
</style>

<div class="woocommerce-order">
	<div class="container thank-you-wrapper">
		<div class="row">
			<div class="col shadow p-lg-5 m-lg-5 rounded-3">
				<div class="mt-5 bg-success rounded-circle d-flex align-items-center justify-content-center ms-auto me-auto" style="width: 200px; height: 200px;">
					<img src="<?php echo get_theme_file_uri(); ?>/img/thankyou.svg" alt="Thank you for your order!">
				</div>
				<div>
					<h4 class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received text-success text-center fw-bold mt-5 mb-5"><?php echo apply_filters('woocommerce_thankyou_order_received_text', esc_html__('Thank you. Your order has been received.', 'woocommerce'), $order); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																																								?></h4>

					<div class="text-center">
						<p class="mb-1">Your order has been processed correctly</p>
						<p class="mt-1">Order Number: <strong>#<?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																?></strong></p>
					</div>
					<div class="product-atc-wrapper row align-items-center m-sm-5 m-3">
						<div class="col-12 col-lg-6">
							<a href="<?php echo wc_get_account_endpoint_url('view-order') . $order->get_order_number(); ?>" class="fw-bold btn btn-primary py-3 px-sm-5 px-3 text-decoration-none montserrat-font w-100 mb-lg-0 mb-3">Go to purchase history</a>
						</div>
						<div class="col-12 col-lg-6">
							<a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="fw-bold btn btn-success text-white px-sm-5 px-3 py-3 text-decoration-none montserrat-font w-100">Continue buying</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	document.querySelector('.breadcrumb-current').textContent = 'Order Confirmation';
</script>