<?php

/**
 * GPS Pharmacy Solutions Theme Customizer
 *
 * @package GPS_Pharmacy_Solutions
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gps_pharmacy_solutions_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'gps_pharmacy_solutions_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'gps_pharmacy_solutions_customize_partial_blogdescription',
			)
		);
	}

	// remove the unnecessary theme options
	$wp_customize->remove_section('colors');
	$wp_customize->remove_section('header_image');
	$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('static_front_page');
	$wp_customize->remove_section('custom_css');
	$wp_customize->remove_panel('widgets');

	/**
	 * PCCA Logo
	 */

	$wp_customize->add_section(
		'gps_pcca_logo_section',
		array(
			'title' => __('PCCA Logo', 'gps-pharmacy-solutions'),
		)
	);
	$wp_customize->add_setting(
		'gps_pcca_logo'
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'gps_pcca_logo_setter',
			array(
				'label' => __('Select PCCA Logo', 'gps-pharmacy-solutions'),
				'section' => 'gps_pcca_logo_section',
				'settings' => 'gps_pcca_logo',
			)
		)
	);

	/**
	 * Contact Info
	 */

	$wp_customize->add_section(
		'gps_contact_info_section',
		array(
			'title' => __('Contact Info', 'gps-pharmacy-solutions'),
		)
	);

	// email
	$wp_customize->add_setting(
		'gps_email'
	);
	$wp_customize->add_control(
		'gps_email_setter',
		array(
			'type' => 'email',
			'label' => __('Email', 'gps-pharmacy-solutions'),
			'section' => 'gps_contact_info_section',
			'settings' => 'gps_email',
		)
	);

	// phone
	$wp_customize->add_setting(
		'gps_phone'
	);
	$wp_customize->add_control(
		'gps_phone_setter',
		array(
			'type' => 'tel',
			'label' => __('Phone No.', 'gps-pharmacy-solutions'),
			'section' => 'gps_contact_info_section',
			'settings' => 'gps_phone',
		)
	);

	// fax
	$wp_customize->add_setting(
		'gps_fax'
	);
	$wp_customize->add_control(
		'gps_fax_setter',
		array(
			'type' => 'tel',
			'label' => __('Fax No.', 'gps-pharmacy-solutions'),
			'section' => 'gps_contact_info_section',
			'settings' => 'gps_fax',
		)
	);

	// address
	$wp_customize->add_setting(
		'gps_address'
	);
	$wp_customize->add_control(
		'gps_address_setter',
		array(
			'type' => 'text',
			'label' => __('Address', 'gps-pharmacy-solutions'),
			'section' => 'gps_contact_info_section',
			'settings' => 'gps_address',
		)
	);

	// working hours
	$wp_customize->add_setting(
		'gps_working_hours'
	);
	$wp_customize->add_control(
		'gps_working_hours_setter',
		array(
			'type' => 'text',
			'label' => __('Working Hours', 'gps-pharmacy-solutions'),
			'section' => 'gps_contact_info_section',
			'settings' => 'gps_working_hours',
		)
	);

	// working hours note
	$wp_customize->add_setting(
		'gps_working_hours_note'
	);
	$wp_customize->add_control(
		'gps_working_hours_note_setter',
		array(
			'type' => 'text',
			'label' => __('Working Hours Note', 'gps-pharmacy-solutions'),
			'section' => 'gps_contact_info_section',
			'settings' => 'gps_working_hours_note',
		)
	);

	/**
	 * Social Media
	 */

	$wp_customize->add_section(
		'gps_social_media',
		array(
			'title' => __('Social Media', 'gps-pharmacy-solutions'),
		)
	);

	// facebook
	$wp_customize->add_setting(
		'gps_facebook_username'
	);
	$wp_customize->add_control(
		'gps_facebook_username_setter',
		array(
			'type' => 'text',
			'label' => __('Facebook Username', 'gps-pharmacy-solutions'),
			'section' => 'gps_social_media',
			'settings' => 'gps_facebook_username',
		)
	);
	$wp_customize->add_setting(
		'gps_facebook_link'
	);
	$wp_customize->add_control(
		'gps_facebook_link_setter',
		array(
			'type' => 'url',
			'label' => __('Facebook Link', 'gps-pharmacy-solutions'),
			'section' => 'gps_social_media',
			'settings' => 'gps_facebook_link',
		)
	);

	// instagram
	$wp_customize->add_setting(
		'gps_instagram_username'
	);
	$wp_customize->add_control(
		'gps_instagram_username_setter',
		array(
			'type' => 'text',
			'label' => __('Instagram Username', 'gps-pharmacy-solutions'),
			'section' => 'gps_social_media',
			'settings' => 'gps_instagram_username',
		)
	);
	$wp_customize->add_setting(
		'gps_instagram_link'
	);
	$wp_customize->add_control(
		'gps_instagram_link_setter',
		array(
			'type' => 'url',
			'label' => __('Instagram Link', 'gps-pharmacy-solutions'),
			'section' => 'gps_social_media',
			'settings' => 'gps_instagram_link',
		)
	);
}
add_action('customize_register', 'gps_pharmacy_solutions_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function gps_pharmacy_solutions_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function gps_pharmacy_solutions_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gps_pharmacy_solutions_customize_preview_js()
{
	wp_enqueue_script('gps-pharmacy-solutions-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), GPS_PHARMACY_SOLUTIONS_VERSION, true);
}
add_action('customize_preview_init', 'gps_pharmacy_solutions_customize_preview_js');
