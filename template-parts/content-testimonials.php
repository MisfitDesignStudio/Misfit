<?php
// query arguments depending on screen size
if (wp_is_mobile()) :
$args = array(
  'post_type' => 'testimonial',
  'post_status' => 'publish',
  'posts_per_page' => 1,
  'orderby' => 'rand'
);

else :
	$args = array(
		'post_type' => 'testimonial',
		'post_status' => 'publish',
		'posts_per_page' => 2,
		'orderby' => 'rand'
	);
endif;

// the query
$testimonials = new WP_Query($args);

// check if there are posts

if ($testimonials->have_posts()) :

  ?>
  <!-- Testimonials section -->
  <section class="section-home--testimonials">
    <div class="container v-padding">

      <div class="grid-testimonials">
        <?php
        // custom loop
        while ($testimonials->have_posts()) : $testimonials->the_post();
          ?>

          <article class="testimonial-card">
						<i class="fas fa-quote-right testimonial-quote-sign"></i>
						<p class="testimonial-text"><?php the_field('testimonial'); ?></p>
						<h2 class="testimonial-client"><?php the_field('testimonial_client'); ?></h2>

          </article>

          <?php
          //restore original post data
          wp_reset_postdata();

        endwhile;  ?>
			</div> <!-- end grid -->
			
    </div>  <!-- end container -->
  </section>
<?php endif; ?>