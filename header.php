<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GPS_Pharmacy_Solutions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<?php wp_head(); ?>

	<!-- TODO: split fav icon into plugin -->

	<link rel="icon" type="image/png" href="/icons/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="/icons/favicon.svg" />
	<link rel="shortcut icon" href="/icons/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png" />
	<meta name="apple-mobile-web-app-title" content="GPSMeds" />
	<link rel="manifest" href="/icons/site.webmanifest" />


	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;600;700;900&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'gps-pharmacy-solutions'); ?></a>

		<header id="masthead" class="site-header">
			<!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation navbar navbar-expand-xl navbar-light bg-white">
				<div class="container">
					<div>
						<?php the_custom_logo(); ?>
						<p class="scopic-title m-0 text-primary ms-auto mt-2 d-xl-none d-block"><?php echo get_bloginfo('description'); ?></p>
					</div>
					<div class="d-flex">
						<a href="<?php echo wc_get_cart_url(); ?>" class="d-xl-none d-block me-3">
							<div class="cart position-relative w-fit-content mt-xxl-0 mt-xl-0">
								<span id="mini-cart-count-2" class="items-count position-absolute rounded-circle bg-danger text-white text-center d-flex align-items-center justify-content-center montserrat-font"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
								<img src="<?php echo get_theme_file_uri() . '/img/cart.svg'; ?>" alt="Cart icon" style="width: 24px;">
							</div>
						</a>
						<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					</div>
					<div class="navbar-toggled-overly"></div>
					<div class="collapse navbar-collapse" id="navbar-nav">
						<p class="scopic-title m-0 text-primary ms-auto d-none d-xl-block"><?php echo get_bloginfo('description'); ?></p>
						<div class="pcca-logo ms-3 ps-3">

							<!-- set PCCA Logo -->
							<?php $gps_pcca_logo = get_theme_mod('gps_pcca_logo'); ?>
							<img src="<?php echo empty($gps_pcca_logo) ? get_theme_file_uri() . '/img/PCCA-logo.png' : $gps_pcca_logo; ?>" alt="PCCA logo">

							<button class="navbar-toggler" type="button" id="custom-close-button">
								<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M7.77817 6.63604C7.38765 6.24551 6.75449 6.24551 6.36396 6.63604C5.97344 7.02656 5.97344 7.65973 6.36396 8.05025L11.3137 13L6.36396 17.9497C5.97344 18.3403 5.97344 18.9734 6.36396 19.364C6.75449 19.7545 7.38765 19.7545 7.77817 19.364L12.7279 14.4142L17.6777 19.364C18.0682 19.7545 18.7014 19.7545 19.0919 19.364C19.4824 18.9734 19.4824 18.3403 19.0919 17.9497L14.1421 13L19.0919 8.05025C19.4824 7.65973 19.4824 7.02656 19.0919 6.63604C18.7014 6.24551 18.0682 6.24552 17.6777 6.63604L12.7279 11.5858L7.77817 6.63604Z" fill="#014E6C" />
								</svg>
							</button>
						</div>
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
							'menu_class' => 'navbar-nav',
							'container_class' => 'ms-auto',
							'depth' => 2,
							'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
							'walker' => new WP_Bootstrap_Navwalker(),
						));
						?>

						<?php
						if (is_user_logged_in()):
							wp_nav_menu(array(
								'theme_location' => 'primary-profile-menu',
								'menu_id' => 'primary-profile-menu',
								'menu_class' => 'navbar-nav',
								'container_class' => 'ms-auto',
								'depth' => 2,
								'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
								'walker' => new WP_Bootstrap_Navwalker(),
							));
						?>
							<script>
								const accountMenuContainer = document.querySelector('#navbar-dropdown-menu-link-273');
								if (accountMenuContainer) {
									accountMenuContainer.innerHTML = `
									<img src="<?php echo get_theme_file_uri() . '/img/profile.svg'; ?>" alt="Profile icon" style="width: 24px;">
								`;
								}
							</script>
						<?php else: ?>
							<a href="<?php echo wp_login_url(); ?>" class="d-block ms-auto p-3">
								<div class="profile-login position-relative">
									<img src="<?php echo get_theme_file_uri() . '/img/profile.svg'; ?>" alt="Profile icon"
										style="width: 24px;">
								</div>
							</a>
						<?php endif; ?>
						<a href="<?php echo wc_get_cart_url(); ?>" class="d-xl-block d-none ms-3">
							<div class="cart position-relative w-fit-content mt-xxl-0 mt-lg-0">
								<span id="mini-cart-count-1"
									class="items-count position-absolute rounded-circle bg-danger text-white text-center d-flex align-items-center justify-content-center montserrat-font"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
								<img src="<?php echo get_theme_file_uri() . '/img/cart.svg'; ?>" alt="Cart icon"
									style="width: 24px;">
							</div>
						</a>
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
