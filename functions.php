<?php

require_once( 'secrets.php' );

/**
 * Theme setup.
 */
function boston_treks_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus( array(
		'player-desktop' => __( 'Desktop Player Menu', 'boston_treks' ),
		'player-mobile'  => __( 'Mobile Player Menu', 'boston-treks' ),
		'profile'        => __( 'Profile Menu', 'boston-treks' ),
		'guest'          => __( 'Guest Menu', 'boston_treks' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );
}

add_action( 'after_setup_theme', 'boston_treks_setup' );

/**
 * Enqueue theme assets.
 */
function boston_treks_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', boston_treks_asset( 'assets/css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', boston_treks_asset( 'assets/js/app.js' ), array(), $theme->get( 'Version' ), true );
}

add_action( 'wp_enqueue_scripts', 'boston_treks_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string $path Path to asset.
 *
 * @return string
 */
function boston_treks_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(), get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item    The curren item.
 * @param WP_Term $args    Holds the nav menu arguments.
 *
 * @return array
 */
function boston_treks_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'boston_treks_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item    The curren item.
 * @param WP_Term $args    Holds the nav menu arguments.
 *
 * @return array
 */
function boston_treks_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'boston_treks_nav_menu_add_submenu_class', 10, 3 );


/* Remove Site Icon Option */
add_action( 'customize_register', function ( $wp_customize ) {
	$wp_customize->remove_control( 'site_icon' );
}, 10, 1 );

/* Disable TML Registration Page & Dashboard Page */
function disable_tml_registration_dashboard( $action ) {
	if ( 'register' == $action || 'dashboard' == $action ) {
		tml_unregister_action( $action );
	}
}

add_action( 'tml_registered_action', 'disable_tml_registration_dashboard' );

/* Register ACF Google Maps API Key */
function google_maps_api() {
	acf_update_setting( 'google_api_key', GOOGLE_MAPS_API_KEY );
}

add_action( 'acf/init', 'google_maps_api' );
