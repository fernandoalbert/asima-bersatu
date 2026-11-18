<?php
/**
 * Template halaman 404.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/page-hero', '', array(
	'title'    => __( 'Halaman Tidak Ditemukan', 'asima-bersatu' ),
	'subtitle' => __( 'Halaman yang Anda cari tidak tersedia.', 'asima-bersatu' ),
) );
?>

<div class="content-area">
	<div class="container">
		<div class="not-found">
			<div class="not-found__code">404</div>
			<h2><?php esc_html_e( 'Sepertinya halaman ini tidak ada', 'asima-bersatu' ); ?></h2>
			<p class="muted"><?php esc_html_e( 'Coba kata kunci lain atau kembali ke beranda ASIMA Bersatu.', 'asima-bersatu' ); ?></p>
			<?php get_search_form(); ?>
			<p style="margin-top:20px"><a class="btn btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Kembali ke Beranda', 'asima-bersatu' ); ?></a></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
