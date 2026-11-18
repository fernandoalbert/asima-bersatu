<?php
/**
 * Bagian layanan utama.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$services = array(
	array( '📰', __( 'Berita', 'asima-bersatu' ), __( 'Informasi dan publikasi resmi ASIMA Bersatu.', 'asima-bersatu' ), home_url( '/berita/' ) ),
	array( '🪪', __( 'Pendaftaran Anggota', 'asima-bersatu' ), __( 'Daftar sebagai DPD, DPC, PAC, atau anggota.', 'asima-bersatu' ), home_url( '/pendaftaran-anggota/' ) ),
	array( '📣', __( 'Pengaduan Masyarakat', 'asima-bersatu' ), __( 'Sampaikan aspirasi dan pengaduan Anda.', 'asima-bersatu' ), home_url( '/pengaduan/' ) ),
	array( '⚖️', __( 'LBH', 'asima-bersatu' ), __( 'Permohonan bantuan hukum awal dan pendampingan.', 'asima-bersatu' ), home_url( '/lbh/' ) ),
);
?>
<section class="section section--cream" id="layanan">
	<div class="container">
		<div class="section-head">
			<div>
				<span class="eyebrow" data-reveal><?php esc_html_e( 'Layanan', 'asima-bersatu' ); ?></span>
				<h2 data-reveal><?php esc_html_e( 'Layanan ASIMA Bersatu', 'asima-bersatu' ); ?></h2>
			</div>
			<p data-reveal><?php esc_html_e( 'Satu pintu akses untuk informasi, keanggotaan, aspirasi, dan bantuan hukum warga Simalungun.', 'asima-bersatu' ); ?></p>
		</div>

		<div class="grid grid--4">
			<?php foreach ( $services as $service ) : ?>
				<a class="service-card" href="<?php echo esc_url( $service[3] ); ?>" data-reveal>
					<div class="service-card__icon" aria-hidden="true"><?php echo esc_html( $service[0] ); ?></div>
					<h3><?php echo esc_html( $service[1] ); ?></h3>
					<p><?php echo esc_html( $service[2] ); ?></p>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
