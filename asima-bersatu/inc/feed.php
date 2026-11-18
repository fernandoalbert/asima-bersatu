<?php
/**
 * Pengambilan berita dari RSS eksternal dengan fallback ke post lokal.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'fetch_feed' ) ) {
	require_once ABSPATH . WPINC . '/feed.php';
}

/**
 * Ambil daftar berita.
 *
 * @param int $limit Jumlah item.
 * @return array
 */
function asima_news_items( $limit = 6 ) {
	$limit  = max( 1, absint( $limit ) );
	$cached = get_transient( 'asima_news_items' );

	if ( false === $cached ) {
		$items = array();
		$url   = asima_opt( 'feed_url' );

		if ( $url ) {
			$feed = fetch_feed( $url );

			if ( ! is_wp_error( $feed ) ) {
				$feed_items = $feed->get_items( 0, $limit );
				$source     = $feed->get_title() ? $feed->get_title() : asima_opt( 'feed_label' );

				foreach ( $feed_items as $entry ) {
					$description = $entry->get_description();
					$image       = asima_first_image( $description );

					if ( ! $image ) {
						foreach ( (array) $entry->get_enclosures() as $enclosure ) {
							if ( strpos( (string) $enclosure->get_type(), 'image' ) === 0 ) {
								$image = $enclosure->get_link();
								break;
							}
						}
					}

					if ( ! $image ) {
						$thumbnails = (array) $entry->get_item_tags( 'http://search.yahoo.com/mrss/', 'thumbnail' );
						if ( isset( $thumbnails[0]['attribs']['']['url'] ) ) {
							$image = $thumbnails[0]['attribs']['']['url'];
						}
					}

					$title   = wp_strip_all_tags( $entry->get_title() );
					$excerpt = wp_strip_all_tags( $description );
					$excerpt = $excerpt ? wp_trim_words( $excerpt, 20, '…' ) : $title;

					$items[] = array(
						'title'   => $title,
						'url'     => $entry->get_link(),
						'excerpt' => $excerpt,
						'image'   => $image ? set_url_scheme( $image ) : '',
						'date'    => $entry->get_date( 'j M Y' ),
						'source'  => $source,
						'local'   => false,
					);
				}
			}
		}

		if ( empty( $items ) ) {
			$posts = get_posts( array(
				'numberposts' => $limit,
				'post_status' => 'publish',
			) );

			foreach ( $posts as $post ) {
				$items[] = array(
					'title'   => get_the_title( $post ),
					'url'     => get_permalink( $post ),
					'excerpt' => wp_trim_words( get_the_excerpt( $post ), 20, '…' ),
					'image'   => get_the_post_thumbnail_url( $post, 'asima-card' ),
					'date'    => get_the_date( 'j M Y', $post ),
					'source'  => get_bloginfo( 'name' ),
					'local'   => true,
				);
			}
		}

		$cached = $items;
		set_transient( 'asima_news_items', $cached, 15 * MINUTE_IN_SECONDS );
	}

	return array_slice( $cached, 0, $limit );
}

/**
 * Ambil URL gambar pertama dari konten HTML.
 *
 * @param string $html Konten.
 * @return string
 */
function asima_first_image( $html ) {
	if ( ! $html ) {
		return '';
	}

	if ( preg_match( '/<img[^>]+src=["\']([^"\']+)["\']/i', $html, $match ) ) {
		return html_entity_decode( $match[1], ENT_QUOTES, 'UTF-8' );
	}

	return '';
}

/**
 * Hapus cache berita saat pengaturan feed diubah.
 */
function asima_flush_news_cache() {
	delete_transient( 'asima_news_items' );
}
add_action( 'customize_save_after', 'asima_flush_news_cache' );
