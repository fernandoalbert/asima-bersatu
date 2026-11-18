<?php
/**
 * Bagian tentang organisasi dan pilar gerakan.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="section section--tight" id="tentang">
	<div class="container">
		<div class="section-head">
			<div>
				<span class="eyebrow" data-reveal><?php esc_html_e( 'Tentang Kami', 'asima-bersatu' ); ?></span>
				<h2 data-reveal><?php esc_html_e( 'ASIMA Bersatu', 'asima-bersatu' ); ?></h2>
			</div>
			<p data-reveal><?php echo esc_html( asima_opt( 'hero_text' ) ); ?></p>
		</div>

		<div class="pillars">
			<div class="pillar" data-reveal>
				<div class="pillar__num">01</div>
				<h3><?php esc_html_e( 'Bersatu', 'asima-bersatu' ); ?></h3>
				<p><?php esc_html_e( 'Mengikat sinergi warga Simalungun di DPD, DPC, dan PAC dalam satu wadah organisasi.', 'asima-bersatu' ); ?></p>
			</div>
			<div class="pillar" data-reveal>
				<div class="pillar__num">02</div>
				<h3><?php esc_html_e( 'Bergerak', 'asima-bersatu' ); ?></h3>
				<p><?php esc_html_e( 'Menghadirkan layanan nyata: pendaftaran anggota, pengaduan masyarakat, dan bantuan hukum.', 'asima-bersatu' ); ?></p>
			</div>
			<div class="pillar" data-reveal>
				<div class="pillar__num">03</div>
				<h3><?php esc_html_e( 'Berdampak', 'asima-bersatu' ); ?></h3>
				<p><?php esc_html_e( 'Mendorong perubahan yang terukur bagi kemajuan Simalungun dan kesejahteraan warganya.', 'asima-bersatu' ); ?></p>
			</div>
		</div>
	</div>
</section>
