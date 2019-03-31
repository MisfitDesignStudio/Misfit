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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'misfit' ); ?></a>

	<div class="navigation">

	<div class="social-bar">
			<a href="https://www.facebook.com/misfitdsgn" class="social-bar__link"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/misfit.design" class="social-bar__link"><i class="fab fa-instagram"></i></a>
			<a href="https://dribbble.com/misfit_design" class="social-bar__link"><i class="fab fa-dribbble"></i></a>
		</div>

		<div class="navigation-bar">
			<div class="flex">

				<div class="navigation-bar__logo">
					<a href="<?php echo get_home_url(); ?>" class="navigation-bar__logo__link">
						<img src="<?php echo get_template_directory_uri(); ?>/img/misfit-logo.svg" alt="Misfit Logo">
					</a>
				</div>

				<!-- Menu toggle -->
				<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<i class="fas fa-bars"></i>
				</div>

				<!-- Desktop navigation-bar -->
				<div class="navigation-bar__links" aria-expanded="false">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'Main Menu',
						'menu_id'        => 'primary-menu'
					) );
					?>				
				</div>

			</div>
		</div>

	</div>

	<div id="content" class="site-content container container--wide v-padding content-sidebar--woo">
