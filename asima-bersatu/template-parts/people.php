<?php
/**
 * Dewan pakar, pengurus DPP, dan sekretariat.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="section" id="pengurus">
	<div class="container">
		<div class="section-head">
			<div>
				<span class="eyebrow" data-reveal><?php esc_html_e( 'Dewan Pakar & Pengurus', 'asima-bersatu' ); ?></span>
				<h2 data-reveal><?php esc_html_e( 'Dewan Pakar ASIMA Bersatu', 'asima-bersatu' ); ?></h2>
			 </div>
		</div>

		<div class="grid grid--4">
			<div class="person-card" data-reveal>
				<div class="person-card__avatar" aria-hidden="true">👨‍🎓</div>
				<h3>Prof. Dr. Hoga Saragih</h3>
				<div class="person-card__degrees">S.T., M.T., S.Th., M.Th., D.Th., CIRR, MIEEE, IPU</div>
				<div class="person-card__role"><?php esc_html_e( 'Dewan Pakar', 'asima-bersatu' ); ?></div>
				<div class="person-card__text"><?php esc_html_e( 'Guru Besar Fakultas Teknik dan Ilmu Komputer, Ketua Program Studi Sistem Informasi — Universitas Bakrie.', 'asima-bersatu' ); ?></div>
				<ul class="person-card__list">
					<li><span aria-hidden="true">✉</span><a href="mailto:hoga.saragih@bakrie.ac.id">hoga.saragih@bakrie.ac.id</a></li>
					<li><span aria-hidden="true">📞</span><a href="tel:+628128594780">+62 812 8594 780</a></li>
					<li><span aria-hidden="true">🌐</span><a href="https://www.bakrie.ac.id" target="_blank" rel="noopener noreferrer">www.bakrie.ac.id</a></li>
				</ul>
			</div>

			<div class="person-card" data-reveal>
				<div class="person-card__avatar" aria-hidden="true">👤</div>
				<h3>Pardi Purba</h3>
				<div class="person-card__role"><?php esc_html_e( 'Ketua Umum DPP ASIMA Bersatu', 'asima-bersatu' ); ?></div>
				<ul class="person-card__list">
					<li><span aria-hidden="true">💬</span><a href="<?php echo esc_url( asima_wa_link( asima_opt( 'wa_ketum' ) ) ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'WhatsApp Ketum', 'asima-bersatu' ); ?></a></li>
					<li><span aria-hidden="true">✉</span><a href="mailto:<?php echo esc_attr( asima_opt( 'email' ) ); ?>"><?php echo esc_html( asima_opt( 'email' ) ); ?></a></li>
				</ul>
			</div>

			<div class="person-card" data-reveal>
				<div class="person-card__avatar" aria-hidden="true">👤</div>
				<h3>Fernando Albert Damanik</h3>
				<div class="person-card__role"><?php esc_html_e( 'Sekretaris Jenderal DPP ASIMA Bersatu', 'asima-bersatu' ); ?></div>
				<ul class="person-card__list">
					<li><span aria-hidden="true">💬</span><a href="<?php echo esc_url( asima_wa_link( asima_opt( 'wa_sekjen' ) ) ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'WhatsApp Sekjen', 'asima-bersatu' ); ?></a></li>
					<li><span aria-hidden="true">✉</span><a href="mailto:<?php echo esc_attr( asima_opt( 'email' ) ); ?>"><?php echo esc_html( asima_opt( 'email' ) ); ?></a></li>
				</ul>
			</div>

			<div class="person-card" data-reveal>
				<div class="person-card__avatar" aria-hidden="true">🏢</div>
				<h3><?php esc_html_e( 'Sekretariat DPP', 'asima-bersatu' ); ?></h3>
				<div class="person-card__role"><?php esc_html_e( 'Dewan Pimpinan Pusat', 'asima-bersatu' ); ?></div>
				<div class="person-card__text"><?php echo esc_html( asima_opt( 'address' ) ); ?></div>
				<ul class="person-card__list">
					<li><span aria-hidden="true">✉</span><a href="mailto:<?php echo esc_attr( asima_opt( 'email' ) ); ?>"><?php echo esc_html( asima_opt( 'email' ) ); ?></a></li>
					<li><span aria-hidden="true">🌐</span><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( wp_parse_url( home_url( '/' ), PHP_URL_HOST ) ); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
