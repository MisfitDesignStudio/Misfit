<?php
if (have_posts()) : ?>
  <section class="home-blogs drop-shadow v-padding">
    <div class="container">
      <h1 class="page_title">Latest blog posts</h1>
      <div class="grid-blog">
        <?php
        $homeBlogLoop = new WP_Query(array(
          'posts_per_page' => 3
        ));
        while ($homeBlogLoop->have_posts()) : $homeBlogLoop->the_post();

          get_template_part('template-parts/content', 'blog');

        endwhile;
        wp_reset_postdata();
        ?>
      </div>
      <br>
      <a href="<?php echo get_home_url(); ?>/blog" class="btn btn--medium btn--primary">Read more</a>
    </div>
  </section>
<?php
endif;
?>