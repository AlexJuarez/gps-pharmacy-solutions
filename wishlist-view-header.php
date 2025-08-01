<?php

/**
 * Wishlist header
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Wishlist
 * @version 3.0.0
 */

/**
 * Template variables:
 *
 * @var $wishlist \YITH_WCWL_Wishlist Current wishlist
 * @var $is_custom_list bool Whether current wishlist is custom
 * @var $can_user_edit_title bool Whether current user can edit title
 * @var $form_action string Action for the wishlist form
 * @var $page_title string Page title
 * @var $fragment_options array Array of items to use for fragment generation
 */

if (!defined('YITH_WCWL')) {
	exit;
} // Exit if accessed directly
?>

<?php do_action('yith_wcwl_before_wishlist_form', $wishlist); ?>

<form id="yith-wcwl-form" action="<?php echo esc_attr($form_action); ?>" method="post" class="woocommerce yith-wcwl-form wishlist-fragment" data-fragment-options="<?php echo esc_attr(json_encode($fragment_options)); ?>">

	<!-- TITLE -->
	<?php
	do_action('yith_wcwl_before_wishlist_title', $wishlist);

	if (!empty($page_title)) :
	?>
		<div class="wishlist-title-container">
			<div class="wishlist-title <?php echo ($can_user_edit_title) ? 'wishlist-title-with-form' : ''; ?>">
				<?php echo apply_filters('yith_wcwl_wishlist_title', '<h1 class="text-primary text-capitalize">' . esc_html($page_title) . '</h1>'); ?>
			</div>
			<?php if ($can_user_edit_title) : ?>
				<div class="hidden-title-form">
					<input type="text" value="<?php echo esc_attr($page_title); ?>" name="wishlist_name" />
					<div class="edit-title-buttons">
						<a role="button" href="#" class="hide-title-form">
							<?php echo apply_filters('yith_wcwl_cancel_wishlist_title_icon', '<i class="fa fa-remove"></i>'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
							?>
						</a>
						<a role="button" href="#" class="save-title-form">
							<?php echo apply_filters('yith_wcwl_save_wishlist_title_icon', '<i class="fa fa-check"></i>'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
							?>
						</a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	<?php
	endif;

	do_action('yith_wcwl_before_wishlist', $wishlist);
	?>