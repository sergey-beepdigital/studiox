<?php
/**
 * StudioX functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage StudioX
 * @since StudioX 1.0
 */

require_once 'includes/customizer.php';


if ( ! function_exists( 'studiox_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function studiox_support() {
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'studiox_support' );

if ( ! function_exists( 'studiox_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since StudioX 1.0
	 *
	 * @return void
	 */
	function studiox_styles() {
		//$theme_version = wp_get_theme()->get( 'Version' );
		$theme_version = rand();

		// Scripts
		wp_enqueue_script('flickity-js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', ['jquery'], $theme_version, false);
		wp_enqueue_script('waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js', ['jquery'], $theme_version, false);

		// Styles
		wp_enqueue_style('typekit', 'https://use.typekit.net/emi7mjy.css');
		wp_enqueue_style( 'be-theme', 'https://extremetechchallenge.org/wp-content/themes/betheme/css/be.css', [], $theme_version );
		wp_enqueue_style( 'be-theme-child', 'https://extremetechchallenge.org/wp-content/themes/betheme-child/style.css', [], $theme_version );
		wp_enqueue_style( 'flickity-css', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css', [], $theme_version );
		wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], $theme_version );
		wp_enqueue_style( 'theme-inline-css', get_template_directory_uri() . '/assets/css/inline.css', [], $theme_version );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'studiox-style', get_template_directory_uri() . '/style.css', [], $theme_version );
	}

endif;

add_action( 'wp_enqueue_scripts', 'studiox_styles' );
