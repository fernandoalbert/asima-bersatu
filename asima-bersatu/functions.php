<?php
/**
 * Fungsi utama tema ASIMA Bersatu.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ASIMA_THEME_VERSION', '1.0.0' );

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/feed.php';
require get_template_directory() . '/inc/customizer.php';

/**
 * Setup tema.
 */
function asima_setup() {
	load_theme_textdomain( 'asima-bersatu', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'asima-card', 800, 500, true );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 64,
		'width'       => 220,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Menu Utama', 'asima-bersatu' ),
	) );
}
add_action( 'after_setup_theme', 'asima_setup' );

/**
 * Enqueue aset.
 */
function asima_assets() {
	$version = defined( 'WP_DEBUG' ) && WP_DEBUG ? time() : ASIMA_THEME_VERSION;

	wp_enqueue_style( 'asima-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap', array(), null );
	wp_enqueue_style( 'asima-style', get_stylesheet_uri(), array(), $version );

	$primary = asima_opt( 'primary_color' );
	if ( $primary ) {
		wp_add_inline_style( 'asima-style', ':root{--asima-red:' . sanitize_hex_color( $primary ) . ';}' );
	}

	wp_enqueue_script( 'asima-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true );
	wp_localize_script( 'asima-main', 'ASIMA_DATA', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'asima-nonce' ),
	) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'asima_assets' );

/**
 * Menyesuaikan excerpt.
 */
function asima_excerpt_length( $length ) {
	return 22;
}
add_filter( 'excerpt_length', 'asima_excerpt_length' );

function asima_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'asima_excerpt_more' );
