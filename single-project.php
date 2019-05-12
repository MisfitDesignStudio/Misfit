<?php
/**
 * Template Name: Single Project Template
 * Template Post Type: project
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Misfit
 */

get_header();
?>

<div class="container v-padding">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="project-page">

				<?php while (have_posts()) : the_post(); ?>

					<h1 class="project-page__title"><?php the_title(); ?></h1>

					<div class="project-page__meta">
						<h3 class="project-page__meta__client"><span>Client</span><br><?php the_field('client_name'); ?></h3>
						<h3 class="project-page__meta__assignment"><span>Assignment</span><br><?php the_field('project_assignment'); ?></h3>
					</div>

					<div class="project-page__featured-image">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</div>

					<div class="content-wrapper">
						<?php the_content(); ?>
					</div>


					<?php if (have_rows('project_photos')) : ?>

						<div class="project-page__gallery">

							<?php while (have_rows('project_photos')) : the_row();

								// vars
								$projectImage = get_sub_field('project_image');
								$projectImageCaption = get_sub_field('project_image_caption');

								?>

								<div class="project-image-wrapper">

									<div class="project-image">
										<img src="<?php echo $projectImage['url']; ?>" alt="<?php echo $projectImage['alt']; ?>">
									</div>

									<p class="project-image-caption"><?php echo $projectImageCaption; ?></p>

								</div>
								<!--End single image wrapper-->

							<?php endwhile; ?>

						</div>
						<!--End gallery-->

					<?php endif; ?>


					<a href="<?php echo get_home_url(); ?>/portfolio" class="btn btn--medium btn--secondary btn--back">See all projects</a>

				<?php endwhile; ?>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer();
