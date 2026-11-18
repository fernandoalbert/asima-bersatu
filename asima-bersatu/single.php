<?php
/**
 * Template artikel tunggal.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/page-hero', '', array(
	'title'    => get_the_title(),
	'subtitle' => get_bloginfo( 'description' ),
) );
?>

<div class="content-area">
	<div class="container">
		<div class="content-card">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-meta">
						<span>📅 <?php echo esc_html( get_the_date( 'j M Y' ) ); ?></span>
						<span>✍️ <?php the_author(); ?></span>
						<?php if ( has_category() ) : ?>
							<span>📁 <?php the_category( ', ' ); ?></span>
						<?php endif; ?>
					</div>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large', array( 'class' => 'entry-thumb' ) ); ?>
					<?php endif; ?>
					<div class="entry-content"><?php the_content(); ?></div>
					<?php
					wp_link_pages( array(
						'before' => '<div class="pagination">' . __( 'Halaman:', 'asima-bersatu' ),
						'after'  => '</div>',
					) );
					?>
					<?php if ( has_tag() ) : ?>
						<div class="entry-footer"><?php the_tags( __( 'Tag: ', 'asima-bersatu' ), ', ' ); ?></div>
					<?php endif; ?>
				</article>
				<?php
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
			?>
			<div class="entry-footer"><a href="<?php echo esc_url( home_url( '/berita/' ) ); ?>">← <?php esc_html_e( 'Kembali ke berita', 'asima-bersatu' ); ?></a></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
