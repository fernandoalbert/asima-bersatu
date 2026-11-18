<?php
/**
 * Template hasil pencarian.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/page-hero', '', array(
	'title'    => sprintf( __( 'Hasil pencarian: %s', 'asima-bersatu' ), get_search_query() ),
	'subtitle' => __( 'Cari informasi, berita, dan layanan di ASIMA Bersatu.', 'asima-bersatu' ),
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
				the_posts_pagination();
			else :
				?>
				<div class="not-found">
					<p><?php esc_html_e( 'Tidak ditemukan hasil untuk kata kunci tersebut.', 'asima-bersatu' ); ?></p>
					<?php get_search_form(); ?>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
