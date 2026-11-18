<?php
/**
 * Slider hero beranda.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$items = isset( $args['items'] ) ? $args['items'] : array();
$items = array_slice( $items, 0, 5 );
?>
<section class="hero" aria-label="<?php esc_attr_e( 'Berita utama', 'asima-bersatu' ); ?>">
	<div class="hero__slides" id="asimaHeroSlides">
		<?php if ( empty( $items ) ) : ?>
			<article class="hero__slide is-active">
				<div class="container hero__layout">
					<div class="hero__content">
						<span class="hero__cat">Aliansi Simalungun Bersatu</span>
						<h1 class="hero__title"><?php echo esc_html( asima_opt( 'hero_title' ) ); ?></h1>
						<p class="hero__desc"><?php echo esc_html( asima_opt( 'hero_text' ) ); ?></p>
						<div class="hero__actions">
							<a class="btn btn--gold" href="<?php echo esc_url( home_url( '/pendaftaran-anggota/' ) ); ?>"><?php esc_html_e( 'Daftar Anggota', 'asima-bersatu' ); ?> →</a>
							<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/lbh/' ) ); ?>"><?php esc_html_e( 'Bantuan Hukum', 'asima-bersatu' ); ?></a>
						</div>
					</div>
					<?php asima_hero_quick(); ?>
				</div>
			</article>
		<?php else : ?>
			<?php foreach ( $items as $index => $item ) : ?>
				<article class="hero__slide<?php echo 0 === $index ? ' is-active' : ''; ?>" <?php echo $item['image'] ? 'style="--slide-image:url(\'' . esc_url( $item['image'] ) . '\')"' : ''; ?>>
					<div class="container hero__layout">
						<div class="hero__content">
							<span class="hero__cat"><?php echo esc_html( $item['source'] ); ?></span>
							<h2 class="hero__title"><a href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $item['title'] ); ?></a></h2>
							<p class="hero__desc"><?php echo esc_html( $item['excerpt'] ); ?></p>
							<div class="hero__meta">
								<span>📰 <?php echo esc_html( $item['source'] ); ?></span>
								<span><?php echo esc_html( $item['date'] ); ?></span>
							</div>
							<div class="hero__actions">
								<a class="btn btn--gold" href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Baca Selengkapnya', 'asima-bersatu' ); ?> →</a>
								<a class="btn btn--outline" href="<?php echo esc_url( asima_opt( 'tv_url' ) ); ?>" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Tonton TV', 'asima-bersatu' ); ?></a>
							</div>
						</div>
						<?php asima_hero_quick(); ?>
					</div>
				</article>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>

	<?php if ( count( $items ) > 1 ) : ?>
		<div class="container hero__controls">
			<button class="hero__arrow" type="button" id="heroPrev" aria-label="<?php esc_attr_e( 'Berita sebelumnya', 'asima-bersatu' ); ?>">‹</button>
			<div class="hero__dots" id="heroDots" role="tablist" aria-label="<?php esc_attr_e( 'Pilih berita', 'asima-bersatu' ); ?>">
				<?php for ( $i = 0; $i < count( $items ); $i++ ) : ?>
					<button class="hero__dot<?php echo 0 === $i ? ' is-active' : ''; ?>" type="button" data-index="<?php echo (int) $i; ?>" role="tab" aria-selected="<?php echo 0 === $i ? 'true' : 'false'; ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Berita %d', 'asima-bersatu' ), $i + 1 ) ); ?>"></button>
				<?php endfor; ?>
			</div>
			<button class="hero__arrow" type="button" id="heroNext" aria-label="<?php esc_attr_e( 'Berita berikutnya', 'asima-bersatu' ); ?>">›</button>
		</div>
		<div class="hero__progress"><span id="heroProgress"></span></div>
	<?php endif; ?>
</section>
