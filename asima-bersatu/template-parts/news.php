<?php
/**
 * Bagian berita terbaru.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$items = isset( $args['items'] ) ? $args['items'] : array();
$items = array_slice( $items, 0, 3 );

if ( empty( $items ) ) {
	return;
}
?>
<section class="section" id="berita">
	<div class="container">
		<div class="section-head">
			<div>
				<span class="eyebrow" data-reveal><?php esc_html_e( 'Berita', 'asima-bersatu' ); ?></span>
				<h2 data-reveal><?php esc_html_e( 'Berita ASIMA Bersatu', 'asima-bersatu' ); ?></h2>
			</div>
			<a class="more-link" href="<?php echo esc_url( home_url( '/berita/' ) ); ?>" data-reveal><?php esc_html_e( 'Lihat semua', 'asima-bersatu' ); ?> →</a>
		</div>

		<div class="grid grid--3">
			<?php foreach ( $items as $item ) : ?>
				<?php asima_news_card( $item ); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>
