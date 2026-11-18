<?php
/**
 * Template halaman statis.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

get_template_part( 'template-parts/page-hero', '', array(
	'title' => get_the_title(),
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
					<h1 class="entry-title screen-reader-text"><?php the_title(); ?></h1>
					<div class="entry-content"><?php the_content(); ?></div>
					<?php
					wp_link_pages( array(
						'before' => '<div class="pagination">' . __( 'Halaman:', 'asima-bersatu' ),
						'after'  => '</div>',
					) );
					?>
					<?php edit_post_link( __( 'Edit halaman', 'asima-bersatu' ), '<div class="entry-footer">', '</div>' ); ?>
				</article>
				<?php
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
