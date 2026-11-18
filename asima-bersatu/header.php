<?php
/**
 * Header tema.
 *
 * @package ASIMA_Bersatu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main"><?php esc_html_e( 'Lewati ke konten', 'asima-bersatu' ); ?></a>

<div class="topbar">
	<div class="container">
		<span><strong>ASIMA Bersatu</strong> — <?php echo esc_html( asima_opt( 'tagline' ) ); ?></span>
		<div class="topbar__contact">
			<a href="mailto:<?php echo esc_attr( asima_opt( 'email' ) ); ?>"><?php echo esc_html( asima_opt( 'email' ) ); ?></a>
			<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', asima_opt( 'phone' ) ) ); ?>"><?php echo esc_html( asima_opt( 'phone' ) ); ?></a>
		</div>
	</div>
</div>

<header class="site-header" id="siteHeader">
	<div class="container header-inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php asima_logo(); ?>
			<span class="brand__text">
				<span class="brand__title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
				<span class="brand__sub">Aliansi Simalungun Bersatu</span>
			</span>
		</a>

		<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="asima-primary-nav" aria-label="<?php esc_attr_e( 'Buka menu', 'asima-bersatu' ); ?>">
			<span></span><span></span><span></span>
		</button>

		<nav id="asima-primary-nav" class="main-nav" aria-label="<?php esc_attr_e( 'Menu utama', 'asima-bersatu' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'asima-nav-list',
				'fallback_cb'    => 'asima_default_menu',
				'depth'          => 2,
			) );
			?>
		</nav>

		<a class="btn btn--primary header-cta" href="<?php echo esc_url( home_url( '/pendaftaran-anggota/' ) ); ?>">
			<?php esc_html_e( 'Daftar Anggota', 'asima-bersatu' ); ?> <span aria-hidden="true">→</span>
		</a>
	</div>
</header>

<?php if ( asima_opt( 'show_ticker' ) ) : ?>
	<?php asima_render_ticker(); ?>
<?php endif; ?>

<main id="main">
