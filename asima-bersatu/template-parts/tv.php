<?php
/**
 * Kanal video Nusantara News Today.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$tv_url = asima_opt( 'tv_url' );
if ( ! $tv_url ) {
	return;
}
?>
<section class="section section--cream" id="tv">
	<div class="container">
		<div class="section-head">
			<div>
				<span class="eyebrow" data-reveal><?php esc_html_e( 'Kanal Video', 'asima-bersatu' ); ?></span>
				<h2 data-reveal><?php esc_html_e( 'TV Nusantara News Today', 'asima-bersatu' ); ?></h2>
				<p data-reveal><?php esc_html_e( 'Tonton siaran dan video dari Nusantara News Today.', 'asima-bersatu' ); ?></p>
			</div>
			<a class="btn btn--primary" href="<?php echo esc_url( $tv_url ); ?>" target="_blank" rel="noopener noreferrer" data-reveal><?php esc_html_e( 'Buka TV', 'asima-bersatu' ); ?> ↗</a>
		</div>

		<div class="tv-card" data-reveal>
			<h3><?php esc_html_e( 'TV Nusantara News Today', 'asima-bersatu' ); ?></h3>
			<div class="tv-frame">
				<iframe src="<?php echo esc_url( $tv_url ); ?>" title="<?php echo esc_attr_e( 'TV Nusantara News Today', 'asima-bersatu' ); ?>" loading="lazy" allow="autoplay; fullscreen; picture-in-picture; encrypted-media" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
			</div>
			<p class="tv-card__note muted"><?php esc_html_e( 'Jika pemutar tidak tampil di dalam halaman, buka kanal TV melalui tombol di atas.', 'asima-bersatu' ); ?></p>
			<a class="btn btn--outline btn--outline-primary" href="<?php echo esc_url( $tv_url ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Buka TV Nusantara News Today', 'asima-bersatu' ); ?> ↗</a>
		</div>
	</div>
</section>
