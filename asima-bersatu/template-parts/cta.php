<?php
/**
 * Ajakan bertindak sebelum footer.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="cta-band">
	<div class="container">
		<span class="eyebrow eyebrow--light" data-reveal><?php esc_html_e( 'Mari Bersama', 'asima-bersatu' ); ?></span>
		<h2 data-reveal><?php esc_html_e( 'Bersatu, Bergerak, Berdampak untuk Simalungun', 'asima-bersatu' ); ?></h2>
		<p data-reveal><?php esc_html_e( 'Jadilah bagian dari ASIMA Bersatu. Daftar sebagai anggota, sampaikan aspirasi, atau ajukan bantuan hukum.', 'asima-bersatu' ); ?></p>
		<div class="cta-band__actions" data-reveal>
			<a class="btn btn--gold" href="<?php echo esc_url( home_url( '/pendaftaran-anggota/' ) ); ?>"><?php esc_html_e( 'Daftar Anggota', 'asima-bersatu' ); ?> →</a>
			<a class="btn btn--outline" href="<?php echo esc_url( asima_wa_link( asima_opt( 'wa_ketum' ) ) ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Hubungi Ketum', 'asima-bersatu' ); ?></a>
		</div>
	</div>
</section>
