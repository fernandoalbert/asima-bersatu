<?php
/**
 * Formulir pencarian tema.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<form role="search" method="get" class="asima-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="asima-search-field"><?php esc_html_e( 'Cari', 'asima-bersatu' ); ?></label>
	<input id="asima-search-field" type="search" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php echo esc_attr_e( 'Cari berita atau layanan…', 'asima-bersatu' ); ?>" required>
	<button type="submit"><?php esc_html_e( 'Cari', 'asima-bersatu' ); ?></button>
</form>
