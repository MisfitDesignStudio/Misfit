<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MisfitDesign
 */

get_header();
?>

<div class="container">
  <h1 class="page__title">Misfit Shop</h1>

  <div class="grid-shop">
    <?php
    if (wc_get_loop_prop('total')) {
      while (have_posts()) {
        the_post();

        wc_get_template_part('content', 'product');
      }
    } ?>
  </div>

  <?php do_action('woocommerce_after_shop_loop'); ?>
</div>
<?php get_footer();
