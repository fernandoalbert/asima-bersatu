<?php
/**
 * Pengaturan Customizer.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Daftarkan panel, section, setting, dan control.
 *
 * @param WP_Customize_Manager $wp_customize Manager Customizer.
 */
function asima_customize_register( $wp_customize ) {

	/* ---------- Identitas ---------- */
	$wp_customize->add_section( 'asima_identity', array(
		'title'    => __( 'Identitas ASIMA', 'asima-bersatu' ),
		'priority' => 30,
	) );

	asima_add_text( $wp_customize, 'tagline', __( 'Tagline Organisasi', 'asima-bersatu' ), 'asima_identity' );

	if ( class_exists( 'WP_Customize_Image_Control' ) ) {
		$wp_customize->add_setting( 'asima_logo_url', array(
			'default'           => asima_defaults()['logo_url'],
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'asima_logo_url', array(
			'label'    => __( 'Logo (cadangan bila Custom Logo kosong)', 'asima-bersatu' ),
			'section'  => 'asima_identity',
		) ) );
	}

	/* ---------- Kontak ---------- */
	$wp_customize->add_section( 'asima_contact', array(
		'title'    => __( 'Kontak & Pengurus', 'asima-bersatu' ),
		'priority' => 31,
	) );

	asima_add_text( $wp_customize, 'email', __( 'Email', 'asima-bersatu' ), 'asima_contact' );
	asima_add_text( $wp_customize, 'phone', __( 'Telepon', 'asima-bersatu' ), 'asima_contact' );
	asima_add_text( $wp_customize, 'wa_ketum', __( 'WhatsApp Ketua Umum (angka saja)', 'asima-bersatu' ), 'asima_contact' );
	asima_add_text( $wp_customize, 'wa_sekjen', __( 'WhatsApp Sekjen (angka saja)', 'asima-bersatu' ), 'asima_contact' );

	$wp_customize->add_setting( 'asima_address', array(
		'default'           => asima_defaults()['address'],
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'asima_address', array(
		'label'   => __( 'Alamat Sekretariat', 'asima-bersatu' ),
		'section' => 'asima_contact',
		'type'    => 'textarea',
	) );

	/* ---------- Beranda ---------- */
	$wp_customize->add_section( 'asima_home', array(
		'title'    => __( 'Beranda ASIMA', 'asima-bersatu' ),
		'priority' => 32,
	) );

	asima_add_text( $wp_customize, 'hero_title', __( 'Judul Hero Utama', 'asima-bersatu' ), 'asima_home' );

	$wp_customize->add_setting( 'asima_hero_text', array(
		'default'           => asima_defaults()['hero_text'],
		'sanitize_callback' => 'wp_kses_post',
	) );
	$wp_customize->add_control( 'asima_hero_text', array(
		'label'   => __( 'Deskripsi Hero', 'asima-bersatu' ),
		'section' => 'asima_home',
		'type'    => 'textarea',
	) );

	asima_add_text( $wp_customize, 'feed_url', __( 'URL RSS Berita', 'asima-bersatu' ), 'asima_home', 'url' );
	asima_add_text( $wp_customize, 'feed_label', __( 'Label Sumber Berita', 'asima-bersatu' ), 'asima_home' );
	asima_add_text( $wp_customize, 'tv_url', __( 'URL Kanal Video', 'asima-bersatu' ), 'asima_home', 'url' );

	$toggles = array(
		'show_ticker' => __( 'Tampilkan ticker berita', 'asima-bersatu' ),
		'show_hero'   => __( 'Tampilkan slider hero', 'asima-bersatu' ),
		'show_news'   => __( 'Tampilkan bagian berita', 'asima-bersatu' ),
		'show_tv'     => __( 'Tampilkan bagian TV', 'asima-bersatu' ),
	);
	foreach ( $toggles as $key => $label ) {
		$wp_customize->add_setting( 'asima_' . $key, array(
			'default'           => true,
			'sanitize_callback' => 'wp_validate_boolean',
		) );
		$wp_customize->add_control( 'asima_' . $key, array(
			'label'   => $label,
			'section' => 'asima_home',
			'type'    => 'checkbox',
		) );
	}

	/* ---------- Warna ---------- */
	$wp_customize->add_section( 'asima_colors', array(
		'title'    => __( 'Warna Tema', 'asima-bersatu' ),
		'priority' => 33,
	) );
	$wp_customize->add_setting( 'asima_primary_color', array(
		'default'           => asima_defaults()['primary_color'],
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'asima_primary_color', array(
		'label'   => __( 'Warna Utama', 'asima-bersatu' ),
		'section' => 'asima_colors',
	) ) );
}
add_action( 'customize_register', 'asima_customize_register' );

/**
 * Pembantu menambah setting teks/url.
 *
 * @param WP_Customize_Manager $wp_customize Manager.
 * @param string               $key          Kunci tanpa prefiks.
 * @param string               $label        Label.
 * @param string               $section      Section.
 * @param string               $type         Tipe kontrol.
 */
function asima_add_text( $wp_customize, $key, $label, $section, $type = 'text' ) {
	$defaults = asima_defaults();
	$wp_customize->add_setting( 'asima_' . $key, array(
		'default'           => isset( $defaults[ $key ] ) ? $defaults[ $key ] : '',
		'sanitize_callback' => 'url' === $type ? 'esc_url_raw' : 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'asima_' . $key, array(
		'label'   => $label,
		'section' => $section,
		'type'    => $type,
	) );
}
