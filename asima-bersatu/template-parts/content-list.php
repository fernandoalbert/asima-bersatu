<?php
/**
 * Item berita untuk halaman arsip.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<article class="archive-item">
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" class="archive-item__thumb" tabindex="-1" aria-hidden="true">
			<?php the_post_thumbnail( 'asima-card', array( 'class' => 'archive-item__thumb' ) ); ?>
		</a>
	<?php else : ?>
		<div class="archive-item__thumb post-card__media--empty" aria-hidden="true">A</div>
	<?php endif; ?>
	<div class="archive-item__body">
		<div class="post-card__meta">
			<span class="post-card__source post-card__source--local"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
			<span><?php echo esc_html( get_the_date( 'j M Y' ) ); ?></span>
		</div>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24, '…' ) ); ?></p>
	</div>
</article>
