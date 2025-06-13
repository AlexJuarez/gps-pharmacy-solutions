<?php

/**
 * Wishlist pages template; load template parts basing on the url
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Wishlist
 * @version 3.0.0
 */

/**
 * Template Variables:
 *
 * @var $template_part string Sub-template to load
 * @var $var array Array of attributes that needs to be sent to sub-template
 */

if (!defined('YITH_WCWL')) {
	exit;
} // Exit if accessed directly

get_header();
?>

<main id="primary" class="site-main">
	<div class="container-fluid breadcrumbs-container shop d-none d-lg-block hospice-cwm">
		<div class="container">
			<div class="row">
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb montserrat-font m-0">
							<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-decoration-none text-secondary">Home</a></li>
							<li class="breadcrumb-item"><a href="<?php echo get_permalink(GPS_PHARMACY_SOLUTIONS_PAGE_IDS['Shop']); ?>" class="text-decoration-none text-secondary">Shop</a></li>
							<li class="breadcrumb-item breadcrumb-current"><?php echo get_the_title(); ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row page-content-wrapper mt-5 mb-5 ms-auto me-auto">
			<div class="col">
				<?php do_action('yith_wcwl_wishlist_before_wishlist_content', $var); ?>
				<div class="shadow p-sm-5 p-4 mb-5 rounded-3">
					<?php do_action('yith_wcwl_wishlist_main_wishlist_content', $var); ?>
				</div>
				<?php do_action('yith_wcwl_wishlist_after_wishlist_content', $var); ?>
			</div>
		</div>
	</div>
</main>

<?php

get_sidebar();
get_footer();
