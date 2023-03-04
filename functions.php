<?php

/**
 * Theme setup.
 */
function boston_treks_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus( array(
		'main'       => __( 'Main Menu', 'boston_treks' ),
		'logged-out' => __( 'Logged Out Menu', 'boston_treks' ),
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
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'boston_treks_setup' );

/**
 * Enqueue theme assets.
 */
function boston_treks_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', boston_treks_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', boston_treks_asset( 'js/app.js' ), array(), $theme->get( 'Version' ), true );
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

if ( ! function_exists( 'add_checkpoint' ) ) {

	// Register Custom Post Type
	function add_checkpoint() {

		$labels       = array(
			'name'                  => _x( 'Checkpoints', 'Post Type General Name', 'boston_treks_checkpoint' ),
			'singular_name'         => _x( 'Checkpoint', 'Post Type Singular Name', 'boston_treks_checkpoint' ),
			'menu_name'             => __( 'Checkpoints', 'boston_treks_checkpoint' ),
			'name_admin_bar'        => __( 'Checkpoint', 'boston_treks_checkpoint' ),
			'archives'              => __( 'All Checkpoints', 'boston_treks_checkpoint' ),
			'attributes'            => __( 'Checkpoint Attributes', 'boston_treks_checkpoint' ),
			'parent_item_colon'     => __( 'Parent Checkpoint:', 'boston_treks_checkpoint' ),
			'all_items'             => __( 'All Checkpoints', 'boston_treks_checkpoint' ),
			'add_new_item'          => __( 'Add New Checkpoint', 'boston_treks_checkpoint' ),
			'add_new'               => __( 'Add New', 'boston_treks_checkpoint' ),
			'new_item'              => __( 'New Checkpoint', 'boston_treks_checkpoint' ),
			'edit_item'             => __( 'Edit Checkpoint', 'boston_treks_checkpoint' ),
			'update_item'           => __( 'Update Checkpoint', 'boston_treks_checkpoint' ),
			'view_item'             => __( 'View Checkpoint', 'boston_treks_checkpoint' ),
			'view_items'            => __( 'View Checkpoints', 'boston_treks_checkpoint' ),
			'search_items'          => __( 'Search Checkpoints', 'boston_treks_checkpoint' ),
			'not_found'             => __( 'Not found', 'boston_treks_checkpoint' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'boston_treks_checkpoint' ),
			'featured_image'        => __( 'Featured Image', 'boston_treks_checkpoint' ),
			'set_featured_image'    => __( 'Set featured image', 'boston_treks_checkpoint' ),
			'remove_featured_image' => __( 'Remove featured image', 'boston_treks_checkpoint' ),
			'use_featured_image'    => __( 'Use as featured image', 'boston_treks_checkpoint' ),
			'insert_into_item'      => __( 'Insert into checkpoint', 'boston_treks_checkpoint' ),
			'uploaded_to_this_item' => __( 'Uploaded to this checkpoint', 'boston_treks_checkpoint' ),
			'items_list'            => __( 'Checkpoint list', 'boston_treks_checkpoint' ),
			'items_list_navigation' => __( 'Checkpoints list navigation', 'boston_treks_checkpoint' ),
			'filter_items_list'     => __( 'Filter checkpoint list', 'boston_treks_checkpoint' ),
		);
		$rewrite      = array(
			'slug'       => 'checkpoint',
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);
		$capabilities = array(
			'edit_post'          => 'edit_checkpoint',
			'read_post'          => 'read_checkpoint',
			'delete_post'        => 'delete_checkpoint',
			'edit_posts'         => 'edit_checkpoints',
			'edit_others_posts'  => 'edit_others_checkpoints',
			'publish_posts'      => 'publish_checkpoints',
			'read_private_posts' => 'read_private_checkpoint',
		);
		$args         = array(
			'label'               => __( 'Checkpoint', 'boston_treks_checkpoint' ),
			'description'         => __( 'A checkpoint in a Trek.', 'boston_treks_checkpoint' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-flag',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => false,
			'can_export'          => true,
			'has_archive'         => 'checkpoints',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capabilities'        => $capabilities,
			'show_in_rest'        => false,
		);
		register_post_type( 'checkpoint', $args );

	}

	add_action( 'init', 'add_checkpoint', 0 );

}