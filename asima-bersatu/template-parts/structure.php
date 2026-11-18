<?php
/**
 * Struktur organisasi dan dokumen keanggotaan.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$units = array(
	array( __( 'Struktur', 'asima-bersatu' ), 'DPD', __( 'Dewan Pimpinan Daerah — koordinasi tingkat daerah.', 'asima-bersatu' ) ),
	array( __( 'Struktur', 'asima-bersatu' ), 'DPC', __( 'Dewan Pimpinan Cabang — koordinasi tingkat cabang.', 'asima-bersatu' ) ),
	array( __( 'Struktur', 'asima-bersatu' ), 'PAC', __( 'Pimpinan Anak Cabang — koordinasi tingkat kecamatan/unit.', 'asima-bersatu' ) ),
	array( __( 'Keanggotaan', 'asima-bersatu' ), 'KTA & Surat Tugas', __( 'Dokumen anggota dapat dicetak setelah keanggotaan disetujui.', 'asima-bersatu' ) ),
);
?>
<section class="section section--sand" id="struktur">
	<div class="container">
		<div class="section-head">
			<div>
				<span class="eyebrow" data-reveal><?php esc_html_e( 'Struktur', 'asima-bersatu' ); ?></span>
				<h2 data-reveal><?php esc_html_e( 'Struktur Organisasi', 'asima-bersatu' ); ?></h2>
			</div>
			<p data-reveal><?php esc_html_e( 'Jaringan kepemimpinan dari pusat hingga ke unit kerja di kecamatan.', 'asima-bersatu' ); ?></p>
		</div>

		<div class="grid grid--4">
			<?php foreach ( $units as $unit ) : ?>
				<div class="struct-card" data-reveal>
					<div class="struct-card__label"><?php echo esc_html( $unit[0] ); ?></div>
					<h3><?php echo esc_html( $unit[1] ); ?></h3>
					<p><?php echo esc_html( $unit[2] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
