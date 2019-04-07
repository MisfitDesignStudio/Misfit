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
					<h3 class="project-page__meta__client"><?php the_field('client_name'); ?></h3>
					<ul class="project-page__meta__category-list">
						<?php
							foreach (get_categories() as $category) {
								echo "<li>";
								echo $category->name;
								echo "</li>";
							} ?>
					</ul>
				</div>

				<?php the_content(); ?>

				<a href="<?php echo get_home_url(); ?>/portfolio" class="btn btn--medium btn--secondary btn--back">See all
					projects</a>

				<?php endwhile; ?>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer();