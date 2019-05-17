<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MisfitDesign
 */

if (is_portfolio() or is_page('portfolio')) { ?>
	<aside id="secondary" class="widget-area">
		<?php dynamic_sidebar('sidebar-portfolio'); ?>
	</aside><!-- #secondary -->

<?php } elseif (is_blog()) { ?>
	<aside id="secondary" class="widget-area">
		<?php dynamic_sidebar('sidebar-blog'); ?>
	</aside><!-- #secondary -->
<?php } elseif (is_page('shop')) { ?>
	<aside id="secondary" class="widget-area">
		<?php dynamic_sidebar('sidebar-shop'); ?>
	</aside><!-- #secondary -->
<?php }
?>