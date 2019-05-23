<?php
/**
 * Template Name: Portfolio Template
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MisfitDesign
 */

get_header();
?>
<div class="container v-padding">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">



			<h1 class="page__title"><?php the_title(); ?></h1>

			<div class="grid-portfolio">

				<!-- Custom Query -->
				<?php
				// query arguments 
				$args = array(
					'post_type' => 'project',
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'orderby' => 'rand'
				);

				// the query
				$portfolioPosts = new WP_Query($args);

				// custom loop
				while ($portfolioPosts->have_posts()) : $portfolioPosts->the_post();
					?>

					<article class="project-card">

						<a href="<?php the_permalink(); ?>" class="project">

							<div class="project__image">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							</div>

							<h1 class="project__title"><?php the_title(); ?></h1>

							<div class="project__content">
								<p class="project__excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
								<object><a href="<?php the_permalink(); ?>" class="btn btn--small btn--secondary--white">View Project</a></object>
							</div>

						</a>

					</article>

					<?php
					//restore original post data
					wp_reset_postdata();

				endwhile;  ?>
			</div> <!-- end portfolio grid-->



		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer();
