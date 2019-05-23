<?php
$args = array(
  'post_type' => 'product',
  'posts_per_page' => 3
);
$wooLoopHome = new WP_Query($args);

if ($wooLoopHome->have_posts()) : ?>

  <section class="home-shop-section drop-shadow">
    <div class="container v-padding">
      <h1 class="shop-page__title">Latest in the shop!</h1>
      <div class="home-shop-grid">
        <?php
        while ($wooLoopHome->have_posts()) : $wooLoopHome->the_post(); ?>

          <article <?php wc_product_class('shop-grid-item'); ?>>
            <?php
            /**
             * Hook: woocommerce_before_shop_loop_item.
             *
             * @hooked woocommerce_template_loop_product_link_open - 10
             */
            do_action('woocommerce_before_shop_loop_item');

            /**
             * Hook: woocommerce_before_shop_loop_item_title.
             *
             * @hooked woocommerce_show_product_loop_sale_flash - 10
             * @hooked woocommerce_template_loop_product_thumbnail - 10
             */
            do_action('woocommerce_before_shop_loop_item_title');

            /**
             * Hook: woocommerce_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_product_title - 10
             */
            // do_action( 'woocommerce_shop_loop_item_title' );

            /**
             * Hook: woocommerce_after_shop_loop_item_title.
             *
             * @hooked woocommerce_template_loop_rating - 5
             * @hooked woocommerce_template_loop_price - 10
             */
            do_action('woocommerce_after_shop_loop_item_title');

            /**
             * Hook: woocommerce_after_shop_loop_item.
             *
             * @hooked woocommerce_template_loop_product_link_close - 5
             * @hooked woocommerce_template_loop_add_to_cart - 10
             */
            do_action('woocommerce_after_shop_loop_item');
            ?>
          </article>

          <?php wp_reset_postdata();
        endwhile;
        ?>
      </div>
      <br>
      <a href="<?php echo get_permalink(35); ?>" class="btn btn--medium btn--primary">Visit the shop</a>
    </div>
  </section>

<?php endif; ?>