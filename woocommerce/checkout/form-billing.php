<?php

/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined('ABSPATH') || exit;

if (!is_ajax()) {
	do_action('woocommerce_review_order_before_payment');
}
?>

<div class="container p-md-5 p-2">
	<div class="row">
		<div class="col-lg-8">
			<div class="woocommerce-billing-fields shadow py-5 px-4 px-md-5 rounded-3 me-lg-3">
				<?php if (wc_ship_to_billing_address_only() && WC()->cart->needs_shipping()) : ?>

					<h3><?php esc_html_e('Billing &amp; Shipping', 'woocommerce'); ?></h3>

				<?php else : ?>
					<h3 class="text-blue mb-5 montserrat-font"><?php esc_html_e('Billing Details', 'woocommerce'); ?></h3>
				<?php endif; ?>

				<?php do_action('woocommerce_before_checkout_billing_form', $checkout); ?>

				<div class="woocommerce-billing-fields__field-wrapper">
					<?php
					$fields = $checkout->get_checkout_fields('billing');

					foreach ($fields as $key => $field) {
						woocommerce_form_field($key, $field, $checkout->get_value($key));
					}
					?>
				</div>

				<?php do_action('woocommerce_after_checkout_billing_form', $checkout); ?>

				<div class="woocommerce-shipping-fields">
					<?php if (true /* === WC()->cart->needs_shipping_address() */) : ?>

						<h3 id="ship-to-different-address">
							<label class="fs-6 fw-bold mb-2 woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
								<input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" <?php checked(apply_filters('woocommerce_ship_to_different_address_checked', 'shipping' === get_option('woocommerce_ship_to_destination') ? 1 : 0), 1); ?> type="checkbox" name="ship_to_different_address" value="1" /> <span><?php esc_html_e('Ship to a different address?', 'woocommerce'); ?></span>
							</label>
						</h3>

						<div class="shipping_address">

							<?php do_action('woocommerce_before_checkout_shipping_form', $checkout); ?>

							<div class="woocommerce-shipping-fields__field-wrapper">
								<?php
								$fields = $checkout->get_checkout_fields('shipping');

								foreach ($fields as $key => $field) {
									woocommerce_form_field($key, $field, $checkout->get_value($key));
								}
								?>
							</div>

							<?php do_action('woocommerce_after_checkout_shipping_form', $checkout); ?>

						</div>

					<?php endif; ?>
				</div>

				<div class="woocommerce-additional-fields">
					<?php do_action('woocommerce_before_order_notes', $checkout); ?>

					<?php if (apply_filters('woocommerce_enable_order_notes_field', 'yes' === get_option('woocommerce_enable_order_comments', 'yes'))) : ?>

						<div class="woocommerce-additional-fields__field-wrapper">
							<?php foreach ($checkout->get_checkout_fields('order') as $key => $field) : ?>
								<?php woocommerce_form_field($key, $field, $checkout->get_value($key)); ?>
							<?php endforeach; ?>
						</div>

					<?php endif; ?>

					<?php do_action('woocommerce_after_order_notes', $checkout); ?>
				</div>
			</div>
		</div>
		<div class="col-lg-4 shadow p-5 rounded-3 h-fit-content sticky-top mt-lg-0 mt-5">
			<h3 class="text-blue mb-5 montserrat-font"><?php esc_html_e('Order Details', 'gps-pharmacy-solutions'); ?></h3>

			<div id="payment" class="woocommerce-checkout-payment">
				<?php if (WC()->cart->needs_payment()) : ?>
					<ul class="wc_payment_methods payment_methods methods list-group">
						<?php
						if (!empty($available_gateways)) {
							foreach ($available_gateways as $gateway) {
								wc_get_template('checkout/payment-method.php', array('gateway' => $gateway));
							}
						} else {
							echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters('woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__('Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce') : esc_html__('Please fill in your details above to see available payment methods.', 'woocommerce')) . '</li>'; // @codingStandardsIgnoreLine
						}
						?>
					</ul>
				<?php endif; ?>
				<div class="form-row place-order">
					<noscript>
						<?php
						/* translators: $1 and $2 opening and closing emphasis tags respectively */
						printf(esc_html__('Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce'), '<em>', '</em>');
						?>
						<br /><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e('Update totals', 'woocommerce'); ?>"><?php esc_html_e('Update totals', 'woocommerce'); ?></button>
					</noscript>

					<?php wc_get_template('checkout/terms.php'); ?>

					<?php do_action('woocommerce_review_order_before_submit'); ?>

					<?php echo apply_filters('woocommerce_order_button_html', '<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr($order_button_text) . '" data-value="' . esc_attr($order_button_text) . '">' . esc_html($order_button_text) . '</button>'); // @codingStandardsIgnoreLine 
					?>

					<?php do_action('woocommerce_review_order_after_submit'); ?>

					<?php wp_nonce_field('woocommerce-process_checkout', 'woocommerce-process-checkout-nonce'); ?>
				</div>
			</div>
			<button type="submit" class="button alt place-order-over-phone" name="woocommerce_checkout_over_phone" id="place_order_over_phone">Order over the Phone </button>
		</div>
	</div>
	<div id="popup-order-over-phone" class="container-fluid bg-white popup-order-over-phone d-none shadow">
		<div class="container">
			<div class="row pb-3">
				<div class="col-12">
					<div class="close-button">
						<svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M0 .707L.707 0 6.01 5.303 11.314 0l.707.707L6.718 6.01l5.303 5.304-.707.707L6.01 6.718.707 12.02 0 11.314 5.303 6.01 0 .707z" fill="#fff" />
						</svg>
					</div>
				</div>
				<div class="col-12">
					<p class="heading text-center ms-auto me-auto mt-5 mb-5 montserrat-font fw-light fs-4">
						<?php $gps_phone = get_theme_mod('gps_phone'); ?>
						Please call our pharmacy team at <strong><a href="tel:<?php echo empty($gps_phone) ? '980-245-2028' : $gps_phone; ?>" class="text-decoration-none text-warning"><?php echo empty($gps_phone) ? '980-245-2028' : $gps_phone; ?></a></strong> to place your order.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	const stepsContainer = document.querySelector('.wpmc-tabs-list');
	stepsContainer.classList.remove('wpmc-2-tabs');
	stepsContainer.classList.add('wpmc-3-tabs');
	stepsContainer.innerHTML = `<li class="wpmc-tab-item previous wpmc-cart">
			<div class="wpmc-tab-number">
				<img src="<?php echo get_theme_file_uri(); ?>/img/mark.svg" alt="Mark">
			</div>
			<div class="wpmc-tab-text ">Shopping</div>
		</li>` + stepsContainer.innerHTML;

	document.querySelectorAll('.wpmc-tab-number').forEach(mcnumber => {
		mcnumber.innerHTML = `<img src="<?php echo get_theme_file_uri(); ?>/img/mark.svg" alt="Mark">`;
	});
</script>

<?php
if (!is_ajax()) {
	do_action('woocommerce_review_order_after_payment');
}
