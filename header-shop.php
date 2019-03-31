<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Misfit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'misfit' ); ?></a>

	<div class="social-bar">
		<a href="https://www.facebook.com/misfitdsgn" class="social-bar__link"><i class="fab fa-facebook"></i></a>
		<a href="https://www.instagram.com/misfit.design" class="social-bar__link"><i class="fab fa-instagram"></i></a>
		<a href="https://dribbble.com/misfit_design" class="social-bar__link"><i class="fab fa-dribbble"></i></a>
	</div>


	<nav class="nav">
		<a href="<?php echo get_home_url(); ?>" class="nav-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/nav-logo-white.svg" alt="">
		</a>

		<?php
			$navMenuArgs = array(
				'theme_location'  => 'Primary Menu',
				'menu'            => 'Main Menu',
				'menu_class'      => 'nav-links',
				'container'       => ''
			);
			wp_nav_menu($navMenuArgs);
		?>

		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</nav>

	<div id="content" class="site-content container container--wide v-padding content-sidebar--woo">
