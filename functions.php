<?php
/**
 * The functions file
 *
 * @package GAS
 */

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
			'footer'  => __( 'Footer Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_theme_support( 'widgets' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	// Enqueue styles.
	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_style( 'owl-carousel-css', tailpress_asset( 'css/owl.carousel.min.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_style( 'owl-carousel-theme', tailpress_asset( 'css/owl.theme.default.min.css' ), array(), $theme->get( 'Version' ) );
	if ( is_front_page() ) {
		wp_enqueue_style( 'docslider', tailpress_asset( 'css/docSlider.css' ), array( 'tailpress' ), $theme->get( 'Version' ) );
	}

	// Enqueue scripts.
	if ( is_front_page() || is_singular( 'page' ) ) {
		wp_enqueue_script( 'lethargy', tailpress_asset( 'js/lethargy.min.js' ), array(), $theme->get( 'Version' ), true );
		wp_enqueue_script( 'docslider', tailpress_asset( 'js/docSlider.js' ), array( 'lethargy' ), $theme->get( 'Version' ), true );
		wp_enqueue_script( 'owl-carousel', tailpress_asset( 'js/owl.carousel.min.js' ), array( 'jquery' ), $theme->get( 'Version' ), true );
		wp_enqueue_script( 'gas-homepage', tailpress_asset( 'js/homepage.js' ), array( 'jquery', 'lethargy', 'docslider', 'owl-carousel' ), $theme->get( 'Version' ), true );
	}
	wp_enqueue_script( 'gas', tailpress_asset( 'js/app.js' ), array( 'jquery' ), $theme->get( 'Version' ), true );

	if ( is_singular( 'product' ) ) {
		wp_enqueue_script( 'owl-carousel', tailpress_asset( 'js/owl.carousel.min.js' ), array( 'jquery' ), $theme->get( 'Version' ), true );
		wp_enqueue_script( 'gas-product-single', tailpress_asset( 'js/productSingle.js' ), array( 'jquery' ), $theme->get( 'Version' ), true );
	}

	// Load search on all pages.
	wp_enqueue_script( 'gas-search', tailpress_asset( 'js/search.js' ), array( 'jquery' ), $theme->get( 'Version' ), true );

	// Enqueue jQuery from Google CDN.
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Enqueue admin assets.
 */
function tailpress_enqueue_admin_scripts() {
	$theme = wp_get_theme();
	wp_enqueue_media();

	// Enqueue styles.
	wp_enqueue_style( 'tailpress-admin', tailpress_asset( 'css/admin.css' ), array(), $theme->get( 'Version' ) );

	// Enqueue scripts.
	wp_enqueue_script( 'tailpress-admin', tailpress_asset( 'js/admin.js' ), array( 'jquery' ), $theme->get( 'Version' ), true );

	// Enqueue options script if site options page.
	if ( isset( $_GET['page'] ) && 'gas_options' === $_GET['page'] ) {
		wp_enqueue_script( 'tailpress-options', tailpress_asset( 'js/adminSiteOptions.js' ), array( 'jquery' ), $theme->get( 'Version' ), true );
	}
}
add_action( 'admin_enqueue_scripts', 'tailpress_enqueue_admin_scripts' );

/**
 * Get asset path.
 *
 * @param string $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(), get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

// Include custom post types
require_once get_template_directory() . '/inc/product-post-type.php';

// Include custom widget areas
require_once get_template_directory() . '/inc/custom-widget-areas.php';

// Include site options page
require_once get_template_directory() . '/inc/site-options.php';

// Include helper functions
require_once get_template_directory() . '/inc/helpers.php';

// Build breadcrumbs for single product and product category pages showing parent and child categories, iterating over all levels
function build_breadcrumbs() {
	$breadcrumbs = array();

	if ( is_product() ) {
		$categories    = get_the_terms( get_the_ID(), 'product_category' );
		$breadcrumbs[] = array(
			'title' => get_the_title(),
			'link'  => get_the_permalink(),
		);
	} else {
		$categories[0] = get_term( get_queried_object()->term_id, 'product_category' );
	}

	if ( ! empty( $categories ) ) {
		$current_category = $categories[0];

		while ( $current_category ) {
			array_unshift(
				$breadcrumbs,
				array(
					'title' => $current_category->name,
					'link'  => get_term_link( $current_category ),
				)
			);

			if ( $current_category->parent ) {
				$current_category = get_term( $current_category->parent, 'product_category' );
			} else {
				break;
			}
		}
	}

	array_unshift(
		$breadcrumbs,
		array(
			'title' => 'Home',
			'link'  => get_home_url(),
		)
	);

	return $breadcrumbs;
}

// Display breadcrumbs separated by a forward slash
function display_breadcrumbs() {
	$breadcrumbs      = build_breadcrumbs();
	$breadcrumb_count = count( $breadcrumbs );
	$breadcrumb_index = 1;
	foreach ( $breadcrumbs as $breadcrumb ) {
		// If last breadcrumb, don't add a link
		if ( $breadcrumb_index === $breadcrumb_count ) {
			echo '<span class="text-gray-600">' . $breadcrumb['title'] . '</span>';
			break;
		}
		echo '<a href="' . $breadcrumb['link'] . '">' . $breadcrumb['title'] . '</a>';
		if ( $breadcrumb_index < $breadcrumb_count ) {
			echo ' / ';
		}
		++$breadcrumb_index;
	}
}

/**
 * Check if the current page is a product.
 *
 * @return bool
 */
function is_product() {
	return is_singular( 'product' );
}

/**
 * Check if the current page is a product category archive.
 *
 * @return bool
 */
function is_product_category() {
	return is_tax( 'product_category' );
}

// Register images sizes.
add_image_size( 'product', 0, 800, true );
add_image_size( 'product-large', 900, 0, true );
add_image_size( 'product-square', 450, 450, true );

// Disable <p> tags around Contact Form 7 inputs.
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Add custom classes to the logo.
 *
 * @param string $html The logo HTML.
 * @return string
 */
function adjust_logo_classes( $html ) {
	$html = str_replace( 'custom-logo-link', 'block [&>img]:mx-8 [&>img]:md:mx-0 [&>img]:my-7 [&>img]:md:my-0 [&>img]:h-10 [&>img]:md:h-auto [&>img]:w-auto', $html );
	return $html;
}
add_filter( 'get_custom_logo', 'adjust_logo_classes', 10 );
