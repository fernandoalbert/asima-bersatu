<?php
/**
 * Template komentar.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="asima-comments">
	<?php if ( have_comments() ) : ?>
		<h2 class="asima-comments__title">
			<?php
			printf(
				esc_html( _n( '%d Komentar', '%d Komentar', get_comments_number(), 'asima-bersatu' ) ),
				number_format_i18n( get_comments_number() )
			);
			?>
		</h2>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 44,
			) );
			?>
		</ol>

		<?php
		the_comments_pagination( array(
			'prev_text' => '‹ ' . __( 'Sebelumnya', 'asima-bersatu' ),
			'next_text' => __( 'Berikutnya', 'asima-bersatu' ) . ' ›',
		) );
		?>

		<?php if ( ! comments_open() ) : ?>
			<p class="muted"><?php esc_html_e( 'Kolom komentar sudah ditutup.', 'asima-bersatu' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	comment_form( array(
		'title_reply'         => __( 'Tinggalkan Komentar', 'asima-bersatu' ),
		'title_reply_before'  => '<h3 id="reply-title" class="asima-comments__title">',
		'title_reply_after'   => '</h3>',
		'comment_field'       => '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Komentar', 'asima-bersatu' ) . '</label><textarea id="comment" name="comment" cols="45" rows="5" required></textarea></p>',
		'class_submit'        => 'btn btn--primary',
	) );
	?>
</div>
