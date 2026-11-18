<?php
/**
 * Footer tema.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
</main>

<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<div class="footer-brand">
				<?php asima_logo( 'footer-brand__logo' ); ?>
				<div class="footer-brand__name"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
				<div class="footer-brand__tag">Aliansi Simalungun Bersatu — <em><?php echo esc_html( asima_opt( 'tagline' ) ); ?></em></div>
				<p class="footer-brand__address"><?php echo esc_html( asima_opt( 'address' ) ); ?></p>
			</div>

			<div>
				<div class="footer-title"><?php esc_html_e( 'Layanan', 'asima-bersatu' ); ?></div>
				<ul class="footer-links">
					<li><a href="<?php echo esc_url( home_url( '/pendaftaran-anggota/' ) ); ?>">📋 <?php esc_html_e( 'Pendaftaran Anggota', 'asima-bersatu' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/pengaduan/' ) ); ?>">📣 <?php esc_html_e( 'Pengaduan Masyarakat', 'asima-bersatu' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/lacak-pengaduan/' ) ); ?>">🔍 <?php esc_html_e( 'Lacak Pengaduan', 'asima-bersatu' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/lbh/' ) ); ?>">⚖️ <?php esc_html_e( 'Bantuan Hukum / LBH', 'asima-bersatu' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/lacak-lbh/' ) ); ?>">🔍 <?php esc_html_e( 'Lacak Permohonan LBH', 'asima-bersatu' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/berita/' ) ); ?>">📰 <?php esc_html_e( 'Berita', 'asima-bersatu' ); ?></a></li>
				</ul>
			</div>

			<div>
				<div class="footer-title"><?php esc_html_e( 'Keanggotaan', 'asima-bersatu' ); ?></div>
				<ul class="footer-links">
					<li><a href="<?php echo esc_url( home_url( '/login-anggota/' ) ); ?>">🔐 <?php esc_html_e( 'Login Anggota', 'asima-bersatu' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/dashboard-anggota/' ) ); ?>">🪪 <?php esc_html_e( 'Dashboard Anggota', 'asima-bersatu' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/verifikasi-kta/' ) ); ?>">✅ <?php esc_html_e( 'Verifikasi KTA', 'asima-bersatu' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/kta/' ) ); ?>">🪪 <?php esc_html_e( 'Kartu Tanda Anggota', 'asima-bersatu' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/surat-tugas/' ) ); ?>">📄 <?php esc_html_e( 'Surat Tugas', 'asima-bersatu' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/sk-anggota/' ) ); ?>">📜 <?php esc_html_e( 'SK Keanggotaan', 'asima-bersatu' ); ?></a></li>
				</ul>
			</div>

			<div>
				<div class="footer-title"><?php esc_html_e( 'Kontak', 'asima-bersatu' ); ?></div>
				<ul class="footer-links">
					<li>✉️ <a href="mailto:<?php echo esc_attr( asima_opt( 'email' ) ); ?>"><?php echo esc_html( asima_opt( 'email' ) ); ?></a></li>
					<li>💬 <a href="<?php echo esc_url( asima_wa_link( asima_opt( 'wa_ketum' ) ) ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'WA Ketum: Pardi Purba', 'asima-bersatu' ); ?></a></li>
					<li>💬 <a href="<?php echo esc_url( asima_wa_link( asima_opt( 'wa_sekjen' ) ) ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'WA Sekjen: Fernando A. Damanik', 'asima-bersatu' ); ?></a></li>
				</ul>
				<div class="footer-title" style="margin-top:20px"><?php esc_html_e( 'Pengurus DPP', 'asima-bersatu' ); ?></div>
				<ul class="footer-links">
					<li><?php esc_html_e( 'Ketua Umum: Pardi Purba', 'asima-bersatu' ); ?></li>
					<li><?php esc_html_e( 'Sekjen: Fernando Albert Damanik', 'asima-bersatu' ); ?></li>
				</ul>
			</div>
		</div>

		<div class="footer-struktur" aria-label="<?php esc_attr_e( 'Struktur organisasi', 'asima-bersatu' ); ?>">
			<span>DPD</span><span>DPC</span><span>PAC</span><span>ANGGOTA</span><span>LBH</span>
		</div>

		<div class="footer-bottom">
			<span>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?> — <?php esc_html_e( 'Aliansi Simalungun Bersatu. Hak cipta dilindungi.', 'asima-bersatu' ); ?></span>
			<span><?php esc_html_e( 'Bersatu • Bergerak • Berdampak', 'asima-bersatu' ); ?></span>
		</div>
	</div>
</footer>

<nav class="appbar" aria-label="<?php esc_attr_e( 'Navigasi cepat mobile', 'asima-bersatu' ); ?>">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="appbar__item<?php echo is_front_page() ? ' is-active' : ''; ?>"><span aria-hidden="true">⌂</span><?php esc_html_e( 'Beranda', 'asima-bersatu' ); ?></a>
	<a href="<?php echo esc_url( home_url( '/berita/' ) ); ?>" class="appbar__item"><span aria-hidden="true">▤</span><?php esc_html_e( 'Berita', 'asima-bersatu' ); ?></a>
	<a href="<?php echo esc_url( home_url( '/pendaftaran-anggota/' ) ); ?>" class="appbar__item"><span aria-hidden="true">＋</span><?php esc_html_e( 'Daftar', 'asima-bersatu' ); ?></a>
	<a href="<?php echo esc_url( asima_opt( 'tv_url' ) ); ?>" class="appbar__item" target="_blank" rel="noopener noreferrer"><span aria-hidden="true">▶</span><?php esc_html_e( 'TV', 'asima-bersatu' ); ?></a>
</nav>

<?php wp_footer(); ?>
</body>
</html>
