<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MisfitDesign
 */

if ( ! is_active_sidebar( 'sidebar-portfolio' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-portfolio' ); ?>
</aside><!-- #secondary -->
