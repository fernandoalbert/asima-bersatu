<?php
/**
 * Template beranda.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$asima_items = array();
if ( asima_opt( 'show_hero' ) || asima_opt( 'show_news' ) ) {
	$asima_items = asima_news_items( 6 );
}

if ( asima_opt( 'show_hero' ) ) {
	get_template_part( 'template-parts/hero', '', array( 'items' => $asima_items ) );
}

get_template_part( 'template-parts/about' );
get_template_part( 'template-parts/services' );

if ( asima_opt( 'show_news' ) ) {
	get_template_part( 'template-parts/news', '', array( 'items' => $asima_items ) );
}

get_template_part( 'template-parts/structure' );
get_template_part( 'template-parts/people' );

if ( asima_opt( 'show_tv' ) ) {
	get_template_part( 'template-parts/tv' );
}

get_template_part( 'template-parts/cta' );

get_footer();
