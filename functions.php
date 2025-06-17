<?php

/**
 * GPS Pharmacy Solutions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GPS_Pharmacy_Solutions
 */

if (!defined('GPS_PHARMACY_SOLUTIONS_VERSION')) {

	// Replace the version number of the theme on each release.
	define('GPS_PHARMACY_SOLUTIONS_VERSION', '1.0.0');
}

if (!function_exists('gps_pharmacy_solutions_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gps_pharmacy_solutions_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on GPS Pharmacy Solutions, use a find and replace
		 * to change 'gps-pharmacy-solutions' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('gps-pharmacy-solutions', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'gps-pharmacy-solutions'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'gps_pharmacy_solutions_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'gps_pharmacy_solutions_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gps_pharmacy_solutions_content_width()
{
	$GLOBALS['content_width'] = apply_filters('gps_pharmacy_solutions_content_width', 640);
}
add_action('after_setup_theme', 'gps_pharmacy_solutions_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gps_pharmacy_solutions_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'gps-pharmacy-solutions'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'gps-pharmacy-solutions'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'gps_pharmacy_solutions_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function gps_pharmacy_solutions_scripts()
{
	wp_enqueue_style('style', get_stylesheet_uri(), array(), GPS_PHARMACY_SOLUTIONS_VERSION);
	wp_style_add_data('style', 'rtl', 'replace');

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), GPS_PHARMACY_SOLUTIONS_VERSION);
	wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css', array(), GPS_PHARMACY_SOLUTIONS_VERSION);
	wp_enqueue_style('splide', get_template_directory_uri() . '/css/splide.min.css', array(), GPS_PHARMACY_SOLUTIONS_VERSION);

	wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.js', array(), GPS_PHARMACY_SOLUTIONS_VERSION, true);

	wp_enqueue_script('req', get_template_directory_uri() . '/js/require.js', array(), GPS_PHARMACY_SOLUTIONS_VERSION, true);

	wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js', array('req'), GPS_PHARMACY_SOLUTIONS_VERSION, true);
	wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', array(), GPS_PHARMACY_SOLUTIONS_VERSION, true);
	wp_enqueue_script('splide', get_template_directory_uri() . '/js/splide.min.js', array(), GPS_PHARMACY_SOLUTIONS_VERSION, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('req', 'aos', 'splide'), GPS_PHARMACY_SOLUTIONS_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'gps_pharmacy_solutions_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Register Custom Navigation Walker to add Bootstrap classes
 */
function register_navwalker()
{
	require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

/**
 * Add Bootstrap classes to li in
 */
/* function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 3); *

/**
 * Add Bootstrap classes to WP Navigation menu a tags
 */
/* function add_nav_link_class($ul_class)
{
	return preg_replace('/<a /', '<a class="nav-link"', $ul_class);
}
add_filter('wp_nav_menu', 'add_nav_link_class'); *

/**
 * Add Bootstrap classes to sub-menus
 */
/* class Scopic_Walker_Nav_Menu extends Walker_Nav_Menu
{
	public function start_lvl(&$output, $depth = 0, $args = array())
	{
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"dropdown-menu\">\n";
	}
} */

function footer_menus()
{
	register_nav_menu('primary-profile-menu', __('Primary: Profile'));
	register_nav_menu('footer-products-menu', __('Footer Products Menu'));
	register_nav_menu('footer-company-menu', __('Footer Company Menu'));
	register_nav_menu('footer-solutions-menu', __('Footer Solutions Menu'));
	register_nav_menu('footer-shop-menu', __('Footer Shop Menu'));
	register_nav_menu('footer-research-menu', __('Footer Research Menu'));
}
add_action('init', 'footer_menus');

// define page ids
define('GPS_PHARMACY_SOLUTIONS_PAGE_IDS', array(
	'Home' => get_home_url(),
	'Company' => 22,
	'About' => 14,
	'Careers' => 18,
	'FAQs' => 20,
	'Quality' => 105,
	'Compounding' => 115,
	'Products' => 33,
	'Aesthetics' => 43,
	'Men\'s Health' => 37,
	'Sterile Compounding' => 39,
	'Veterinary' => 41,
	'Women\'s Health' => 35,
	'Contact Us' => 7,
	'Hospice' => 126,
	'Best in Industry Pricing' => 132,
	'Clinical Support' => 130,
	'Hospice Compounding & Wound Management' => 156,
	'Infusion Therapy' => 134,
	'Medication Access' => 128,
	'PBM Solutions with PDCRx' => 158,
	'Research' => 160,
	'Clinical Trials and Research' => 148,
	'Shop' => 171,
	'Anti-aging for Women and Men' => 26,
	'Hair Restoration for Women and Men' => 27,
	'Lashes' => 28,
));

/**
 * Add basic woocommerce support.
 */
function add_woocommerce_support()
{
	add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'add_woocommerce_support');

/**
 * Disable the default woocommerce styles.
 */
add_filter('woocommerce_enqueue_styles', '__return_false');

/**
 * Changing default text.
 */
function change_text($text)
{
	if ('Lost your password?' === $text) {
		$text = 'Forgot password?';
	}
	return $text;
}
add_action('gettext', 'change_text');


/**
 * Remove the logout confirmation message
 */
function logout_confirmation()
{
	global $wp;

	if (isset($wp->query_vars['customer-logout'])) {

		wp_redirect(str_replace('&amp;', '&', wp_logout_url(wc_get_page_permalink('myaccount'))));

		exit;
	}
}
add_action('template_redirect', 'logout_confirmation');

/**
 * Update mini cart count
 */
function wc_refresh_mini_cart_count($fragments)
{
	ob_start();
	$items_count = WC()->cart->get_cart_contents_count();
?>
	<span id="mini-cart-count-1" class="items-count position-absolute rounded-circle bg-danger text-white text-center d-flex align-items-center justify-content-center montserrat-font"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
<?php
	$fragments['#mini-cart-count-1'] = ob_get_clean();
	return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');

function wc_refresh_mini_cart_count_2($fragments)
{
	ob_start();
	$items_count = WC()->cart->get_cart_contents_count();
?>
	<span id="mini-cart-count-2" class="items-count position-absolute rounded-circle bg-danger text-white text-center d-flex align-items-center justify-content-center montserrat-font"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
<?php
	$fragments['#mini-cart-count-2'] = ob_get_clean();
	return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count_2');


/**
 * Remove product from the cart if it's added to the Wishlist.
 */
function remove_product_from_cart_when_added_to_wishlist($product_id, $wishlist_id, $user_id)
{
	foreach (WC()->cart->get_cart() as $key => $item) {
		if ($item['product_id'] == $product_id) {
			WC()->cart->remove_cart_item($key);
		}
	}
}
add_action('yith_wcwl_added_to_wishlist', 'remove_product_from_cart_when_added_to_wishlist', 10, 3);

add_filter('woocommerce_registration_error_email_exists', function ($html) {
	$url =  wc_get_page_permalink('myaccount');
	$url = add_query_arg('redirect_checkout', 1, $url);
	$html = 'An account is already registered with your email address. <a href="' . $url . '">Please log in.</a>';
	return $html;
});

add_filter('wc_add_to_cart_message_html', '__return_false');

/**
 * Remove state validations
 */
function custom_default_address_fields($fields)
{
	if (!is_account_page()) return $fields;
	unset($fields['state']['validate']);
	unset($fields['address_1']['validate']);
	unset($fields['address_2']['validate']);
	unset($fields['postcode']['validate']);
	return $fields;
}
add_action('woocommerce_default_address_fields', 'custom_default_address_fields', 10, 1);


function custom_address_formats( $formats ) {
    $formats[ 'default' ]  = "{name}\n{company}\n{address_1} {address_2}\n{postcode} {city}";
    return $formats;
}
add_filter('woocommerce_localisation_address_formats', 'custom_address_formats');
