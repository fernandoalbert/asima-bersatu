<?php
/**
 * Template daftar berita utama.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/page-hero', '', array(
	'title'    => __( 'Berita', 'asima-bersatu' ),
	'subtitle' => __( 'Informasi dan publikasi resmi ASIMA Bersatu.', 'asima-bersatu' ),
) );
?>

<div class="content-area">
	<div class="container">
		<div class="archive-list">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content-list' );
				endwhile;
				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => '‹ ' . __( 'Sebelumnya', 'asima-bersatu' ),
					'next_text' => __( 'Berikutnya', 'asima-bersatu' ) . ' ›',
				) );
			else :
				?>
				<div class="not-found"><p><?php esc_html_e( 'Belum ada berita yang diterbitkan.', 'asima-bersatu' ); ?></p></div>
				<?php
			endif;
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
