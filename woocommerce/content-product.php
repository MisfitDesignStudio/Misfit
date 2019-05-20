<?php
/**
 * The template for displaying product content within loops
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>

<article class="misfit-product">

	<a href="<?php the_permalink(); ?>" class="misfit-product__image">
		<!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""> -->
		<?php do_action('woocommerce_before_shop_loop_item_title'); ?>
	</a>

	<div class="misfit-product__details">
		<a href="<?php the_permalink(); ?>" class="misfit-product__details__title"><?php echo the_title(); ?></a>
		<p class="misfit-product__details__price"><?php do_action('woocommerce_after_shop_loop_item_title'); ?></p>
	</div>

</article>