<?php
/**
 * Fungsi pembantu templat.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Nilai bawaan pengaturan tema.
 *
 * @return array
 */
function asima_defaults() {
	return apply_filters( 'asima_defaults', array(
		'tagline'      => 'Bersatu, Bergerak, Berdampak untuk Simalungun',
		'hero_title'   => 'Bersatu untuk Simalungun yang Lebih Kuat',
		'hero_text'    => 'ASIMA Bersatu adalah aliansi warga Simalungun yang menggerakkan informasi, layanan keanggotaan, pengaduan masyarakat, dan bantuan hukum untuk kemajuan daerah.',
		'email'        => 'admin@asimabersatu.or.id',
		'phone'        => '+62 821-1712-295',
		'wa_ketum'     => '6282117122953',
		'wa_sekjen'    => '6281360137757',
		'address'      => 'Jl. Pahlawan Nasional Tuan Rondahaim Saragih No. 216, Kelurahan Raya, Kecamatan Raya, Kab. Simalungun, Sumatera Utara 21162',
		'logo_url'     => 'https://asima.kabsml.my.id/wp-content/uploads/2026/11/asima-logo-300x300.jpeg',
		'feed_url'     => 'https://nusantaranews-today.com/feed/',
		'feed_label'   => 'Nusantara News Today',
		'tv_url'       => 'https://tv.nusantaranews-today.com/',
		'primary_color' => '#8b1a1a',
		'show_ticker'   => true,
		'show_hero'     => true,
		'show_news'     => true,
		'show_tv'       => true,
	) );
}

/**
 * Ambil pengaturan tema.
 *
 * @param string $key Kunci pengaturan.
 * @return string
 */
function asima_opt( $key ) {
	$defaults = asima_defaults();
	$value    = get_theme_mod( 'asima_' . $key, isset( $defaults[ $key ] ) ? $defaults[ $key ] : '' );
	return $value;
}

/**
 * Cetak logo: custom logo WordPress, atau logo bawaan ASIMA.
 */
function asima_logo( $class = '' ) {
	$logo = '';
	$id   = get_theme_mod( 'custom_logo' );

	if ( $id ) {
		$src = wp_get_attachment_image_src( $id, 'full' );
		if ( $src ) {
			$logo = $src[0];
		}
	}

	if ( ! $logo ) {
		$logo = asima_opt( 'logo_url' );
	}

	if ( ! $logo ) {
		return;
	}

	printf(
		'<img src="%s" alt="%s" class="%s">',
		esc_url( $logo ),
		esc_attr( get_bloginfo( 'name' ) . ' — logo' ),
		esc_attr( trim( 'asima-logo ' . $class ) )
	);
}

/**
 * Menu utama cadangan bila belum ada menu yang dibuat di Appearance → Menus.
 */
function asima_default_menu() {
	$items = array(
		__( 'Beranda', 'asima-bersatu' )      => home_url( '/' ),
		__( 'Berita', 'asima-bersatu' )       => home_url( '/berita/' ),
		__( 'Pendaftaran', 'asima-bersatu' )  => home_url( '/pendaftaran-anggota/' ),
		__( 'Pengaduan', 'asima-bersatu' )    => home_url( '/pengaduan/' ),
		__( 'LBH', 'asima-bersatu' )          => home_url( '/lbh/' ),
		__( 'Lacak', 'asima-bersatu' )        => home_url( '/lacak-pengaduan/' ),
		__( 'Login', 'asima-bersatu' )        => home_url( '/login-anggota/' ),
	);

	$current = home_url( $_SERVER['REQUEST_URI'] ?? '/' );

	echo '<ul class="asima-nav-list">';
	foreach ( $items as $label => $url ) {
		$active = trailingslashit( $url ) === trailingslashit( $current ) ? ' aria-current="page"' : '';
		printf( '<li><a href="%s"%s>%s</a></li>', esc_url( $url ), $active, esc_html( $label ) );
	}
	echo '</ul>';
}

/**
 * Panel akses cepat di hero.
 */
function asima_hero_quick() {
	$links = array(
		array( '🪪', __( 'Pendaftaran Anggota', 'asima-bersatu' ), home_url( '/pendaftaran-anggota/' ) ),
		array( '📣', __( 'Pengaduan Masyarakat', 'asima-bersatu' ), home_url( '/pengaduan/' ) ),
		array( '⚖️', __( 'Bantuan Hukum / LBH', 'asima-bersatu' ), home_url( '/lbh/' ) ),
		array( '🔍', __( 'Lacak Pengaduan', 'asima-bersatu' ), home_url( '/lacak-pengaduan/' ) ),
	);
	?>
	<aside class="hero__quick" aria-label="<?php esc_attr_e( 'Akses cepat', 'asima-bersatu' ); ?>">
		<div class="hero__quick-title"><?php esc_html_e( 'Akses Cepat', 'asima-bersatu' ); ?></div>
		<div class="hero__quick-sub"><?php esc_html_e( 'Layanan ASIMA Bersatu', 'asima-bersatu' ); ?></div>
		<div class="hero__quick-list">
			<?php foreach ( $links as $link ) : ?>
				<a href="<?php echo esc_url( $link[2] ); ?>">
					<span class="q-icon" aria-hidden="true"><?php echo esc_html( $link[0] ); ?></span>
					<span><?php echo esc_html( $link[1] ); ?></span>
					<span class="q-arrow" aria-hidden="true">→</span>
				</a>
			<?php endforeach; ?>
		</div>
	</aside>
	<?php
}

/**
 * Tautan WhatsApp berdasarkan nomor pengurus.
 *
 * @param string $number Nomor dalam format internasional tanpa tanda plus.
 * @return string
 */
function asima_wa_link( $number ) {
	$number = preg_replace( '/[^0-9]/', '', (string) $number );
	return $number ? 'https://wa.me/' . $number : '#';
}

/**
 * Tampilkan ticker berita.
 */
function asima_render_ticker() {
	$items = asima_news_items( 10 );
	if ( empty( $items ) ) {
		return;
	}

	$group = function ( $duplicate = false ) use ( $items ) {
		printf( '<div class="ticker__group"%s>', $duplicate ? ' aria-hidden="true"' : '' );
		foreach ( $items as $item ) {
			printf(
				'<a href="%s"%s target="_blank" rel="noopener noreferrer">%s</a><span class="ticker__sep" aria-hidden="true">◆</span>',
				esc_url( $item['url'] ),
				$duplicate ? ' tabindex="-1"' : '',
				esc_html( $item['title'] )
			);
		}
		echo '</div>';
	};
	?>
	<div class="ticker" aria-label="<?php esc_attr_e( 'Berita terbaru', 'asima-bersatu' ); ?>">
		<div class="ticker__label"><span class="ticker__icon" aria-hidden="true">📰</span> <?php esc_html_e( 'Berita', 'asima-bersatu' ); ?></div>
		<div class="ticker__wrap">
			<div class="ticker__track">
				<?php $group( false ); ?>
				<?php $group( true ); ?>
			</div>
		</div>
	</div>
	<?php
}

/**
 * Kartu berita.
 *
 * @param array $item Data berita dari asima_news_items().
 */
function asima_news_card( $item ) {
	$source_class = ! empty( $item['local'] ) ? 'post-card__source--local' : 'post-card__source--feed';
	?>
	<article class="post-card" data-reveal>
		<?php if ( ! empty( $item['image'] ) ) : ?>
			<a class="post-card__media" href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener noreferrer" tabindex="-1" aria-hidden="true">
				<img src="<?php echo esc_url( $item['image'] ); ?>" alt="" loading="lazy">
			</a>
		<?php else : ?>
			<div class="post-card__media post-card__media--empty" aria-hidden="true">A</div>
		<?php endif; ?>
		<div class="post-card__body">
			<div class="post-card__meta">
				<span class="post-card__source <?php echo esc_attr( $source_class ); ?>"><?php echo esc_html( $item['source'] ); ?></span>
				<span><?php echo esc_html( $item['date'] ); ?></span>
			</div>
			<h3 class="post-card__title"><a href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $item['title'] ); ?></a></h3>
			<p class="post-card__excerpt"><?php echo esc_html( $item['excerpt'] ); ?></p>
			<a class="post-card__link" href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Baca selengkapnya', 'asima-bersatu' ); ?> <span aria-hidden="true">→</span></a>
		</div>
	</article>
	<?php
}
