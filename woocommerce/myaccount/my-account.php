<?php

/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
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

?>

<style>
	.entry-header {
		display: none;
	}

	.entry-content {
		margin: 0;
	}

	.entry-content form input:not([type="submit"]),
	.entry-content form select {
		box-shadow: none;
	}

	button[type="submit"] {
		background-color: var(--bs-success);
		color: #fff;
		text-transform: capitalize;
		font-family: 'Montserrat', sans-serif;
	}
</style>

<div class="container-fluid breadcrumbs-container shop d-none d-lg-block mb-5">
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
		<h1 class="page-title text-primary text-md-start text-center"><?php echo 'My Account'; ?></h1>
	</div>
	<div class="row">
		<div class="col-md-3 shadow p-5 rounded-3 h-fit-content sticky-top woocommerce_account_navigation">
			<?php do_action('woocommerce_account_navigation'); ?>
		</div>
		<div class="col-md-9">
			<div class="woocommerce-MyAccount-content shadow p-md-5 p-4 rounded-3 ms-0 ms-md-3">
				<?php do_action('woocommerce_account_content'); ?>
			</div>
		</div>
	</div>
</div>