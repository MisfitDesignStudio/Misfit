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
<div class="container container--wide v-padding">

	<?php if (is_home() && !is_front_page()) : ?>
		<h1 class="page__title"><?php single_post_title(); ?></h1>
		<header>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		</header>
	<?php endif; ?>

	<div class="content-sidebar">
		<div class="content-area">
			<?php if (have_posts()) : ?>

				<div class="grid-blog">
					<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', 'blog');

					endwhile; ?>
				</div> <!-- end blog grid-->

				<?php the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif; ?>
		</div>
		<div class="sidebar-area">
			<?php get_sidebar(); ?>
		</div>

	</div>

</div>
<?php
get_footer();
