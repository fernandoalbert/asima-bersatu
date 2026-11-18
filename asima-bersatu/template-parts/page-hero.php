<?php
/**
 * Header halaman dalam.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$title     = isset( $args['title'] ) ? $args['title'] : get_the_title();
$subtitle  = isset( $args['subtitle'] ) ? $args['subtitle'] : asima_opt( 'tagline' );
$crumb     = isset( $args['crumb'] ) ? $args['crumb'] : __( 'Beranda', 'asima-bersatu' );
?>
<section class="page-hero">
	<div class="container">
		<div class="crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $crumb ); ?></a><span aria-hidden="true">/</span><span><?php echo esc_html( $title ); ?></span></div>
		<h1><?php echo esc_html( $title ); ?></h1>
		<?php if ( $subtitle ) : ?>
			<p><?php echo esc_html( $subtitle ); ?></p>
		<?php endif; ?>
	</div>
</section>
