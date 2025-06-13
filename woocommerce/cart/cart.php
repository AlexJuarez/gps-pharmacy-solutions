<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined('ABSPATH') || exit;

get_header('shop');

?>

<div class="container-fluid breadcrumbs-container shop d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb montserrat-font m-0">
                        <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-decoration-none text-secondary">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="text-decoration-none text-secondary">Shop</a></li>
                        <li class="breadcrumb-item breadcrumb-current"><?php the_title(); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container page-content-wrapper-half">
    <div class="row mb-4">
        <h1 class="page-title text-primary text-center text-md-start"><?php echo get_the_title(); ?></h1>
    </div>

    <div class="wpmc-tabs-wrapper">
        <ul class="wpmc-tabs-list wpmc-3-tabs">
            <li class="wpmc-tab-item current wpmc-cart">
                <div class="wpmc-tab-number">
                    <img src="<?php echo get_theme_file_uri(); ?>/img/mark.svg" alt="Mark">
                </div>
                <div class="wpmc-tab-text ">Shopping</div>
            </li>
            <li class="wpmc-tab-item wpmc-billing">
                <div class="wpmc-tab-number">
                </div>
                <div class="wpmc-tab-text">Billing Info</div>
            </li>
            <li class="wpmc-tab-item wpmc-review">
                <div class="wpmc-tab-number">
                </div>
                <div class="wpmc-tab-text">Your Order</div>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-8 mb-5">
            <form class="woocommerce-cart-form shadow p-md-5 p-3 rounded-3 me-md-3" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
                <div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                    <?php
                    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                        $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                        $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                        if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                            $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                    ?>
                            <div class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                                <div class="row align-items-md-center align-items-end bt">
                                    <div class="col-5 col-md-3">
                                        <div class="product-thumbnail">
                                            <?php
                                            $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                                            if (!$product_permalink) {
                                                echo $thumbnail; // PHPCS: XSS ok.
                                            } else {
                                                printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-7">
                                        <div class="product-name" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
                                            <?php
                                            if (!$product_permalink) {
                                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                                            } else {
                                                echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s" class="text-decoration-none text-secondary fw-900 fs-6">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                                            }

                                            do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                                            // Meta data.
                                            echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                                            // Backorder notification.
                                            if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                                echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                                            }
                                            ?>
                                        </div>
                                        <div class="product-description mb-3 mb-md-0">
                                            <span class="d-block mt-1"><?php echo $_product->get_short_description(); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 offset-md-0 col-7 offset-5">
                                        <div class="product-price fw-900 text-success fs-5 text-md-end text-start" data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
                                            <?php
                                            echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row table-border-bottom align-items-center my-3 my-md-5">
                                    <div class="col-12 col-lg-3">
                                        <div class="product-quantity border" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
                                            <?php
                                            if ($_product->is_sold_individually()) {
                                                $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                            } else {
                                                $product_quantity = woocommerce_quantity_input(
                                                    array(
                                                        'input_name'   => "cart[{$cart_item_key}][qty]",
                                                        'input_value'  => $cart_item['quantity'],
                                                        'max_value'    => $_product->get_max_purchase_quantity(),
                                                        'min_value'    => '0',
                                                        'product_name' => $_product->get_name(),
                                                    ),
                                                    $_product,
                                                    false
                                                );
                                            }

                                            echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-9 text-end">
                                        <div class="cart-item-actions d-flex justify-content-end align-items-center flex-column flex-lg-row">
                                            <div class="product-remove me-lg-2 my-3 my-lg-0">
                                                <?php
                                                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                                    'woocommerce_cart_item_remove_link',
                                                    sprintf(
                                                        '<a href="%s" class="remove btn btn-danger text-white fw-bold py-2 px-4 montserrat-font" aria-label="%s" data-product_id="%s" data-product_sku="%s">' . __('Delete', 'gps-pharmacy-solutions') . '</a>',
                                                        esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                        esc_html__('Remove this item', 'woocommerce'),
                                                        esc_attr($product_id),
                                                        esc_attr($_product->get_sku())
                                                    ),
                                                    $cart_item_key
                                                );
                                                ?>
                                            </div>
                                            <div class="add-to-wishlist">
                                                <a href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>?add_to_wishlist=<?php echo $product_id; ?>" class="btn btn-secondary text-white fw-bold py-2 px-4 montserrat-font w-fit-content">
                                                    <?php _e('Save to Wishlist', 'gps-pharmacy-solutions'); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>
                <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
            </form>
        </div>
        <div class="col-md-4 shadow p-5 rounded-3 mb-5 ">

            <div class="cart-collaterals h-100">
                <?php
                /**
                 * Cart collaterals hook.
                 *
                 * @hooked woocommerce_cross_sell_display
                 * @hooked woocommerce_cart_totals - 10
                 */
                do_action('woocommerce_cart_collaterals');
                ?>
            </div>
        </div>
    </div>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>