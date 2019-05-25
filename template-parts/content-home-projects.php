<?php
// query arguments 
$args = array(
  'post_type' => 'project',
  'post_status' => 'publish',
  'posts_per_page' => 3,
  // 'orderby' => 'rand'
);

// the query
$portfolioPosts = new WP_Query($args);

// check if there are posts

if ($portfolioPosts->have_posts()) :

  ?>
  <!-- Home Portfolio section -->
  <section class="section-home--portfolio drop-shadow">
    <div class="container v-padding">

      <h1 class="portfolio-page__title">Latest projects</h1>

      <div class="grid-portfolio">
        <?php
        // custom loop
        while ($portfolioPosts->have_posts()) : $portfolioPosts->the_post();
          ?>

          <article class="project-card">

            <a href="<?php the_permalink(); ?>" class="project">

              <div class="project__image">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </div>

              <h1 class="project__title"><?php the_field('client_name'); ?></h1>

              <div class="project__content">
                <p class="project__excerpt"></p>
                <object><a href="<?php the_permalink(); ?>" class="btn btn--small btn--secondary--white">View Project</a></object>
              </div>

            </a>

          </article>

          <?php
          //restore original post data
          wp_reset_postdata();

        endwhile;  ?>
      </div>
      <br>
      <a href="<?php echo get_permalink(10); ?>" class="btn btn--medium btn--primary">View entire portfolio</a>

    </div>
  </section>
<?php endif; ?>