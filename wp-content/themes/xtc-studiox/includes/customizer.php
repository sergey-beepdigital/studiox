<?php

function studiox_customize_register($wp_customize){

	$wp_customize->add_section('studiox_site_settings', array(
		'title'    => __('Site Settings', 'themename')
	));

	//  =============================
	//  = Text Input                =
	//  =============================
	$wp_customize->add_setting('studiox_theme_options[form_shortcode]', array(
		'default'        => '',
		'capability'     => 'edit_theme_options',
		'type'           => 'option',

	));

	$wp_customize->add_control('studiox_form_shortcode', array(
		'label'      => __('Form Shortcode', 'themename'),
		'section'    => 'studiox_site_settings',
		'settings'   => 'studiox_theme_options[form_shortcode]',
	));
}

add_action('customize_register', 'studiox_customize_register');