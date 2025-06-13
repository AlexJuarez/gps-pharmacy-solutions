<?php

/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
// 

if (wc_get_page_id('shop') > 0) : ?>
	<div class="woocommerce-order">
		<div class="container thank-you-wrapper">
			<dic class="row">
				<div class="col shadow p-md-5 m-md-5 p-2 mx-3 my-5 rounded-3">
					<div class="mt-5 bg-warning rounded-circle d-flex align-items-center justify-content-center ms-auto me-auto" style="width: 100px; height: 100px;">
						<h1 class="text-white fw-900 m-0">!</h1>
					</div>
					<div>
						<h4 class="text-warning text-center fw-bold mt-5 mb-5">
							<?php do_action('woocommerce_cart_is_empty'); ?>
						</h4>

						<div class="product-atc-wrapper d-flex align-items-center m-5">
							<a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="fw-bold btn btn-success text-white w-fit-content py-md-3 px-md-5 py-2 px-3 ms-auto me-auto text-decoration-none montserrat-font">
								<?php echo esc_html(apply_filters('woocommerce_return_to_shop_text', __('Return to shop', 'woocommerce'))); ?>
							</a>
						</div>
					</div>
				</div>
			</dic>
		</div>
	</div>
<?php endif; ?>