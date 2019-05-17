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

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', get_post_type());

		the_post_navigation(
			array(
				'prev_text' => __('<i class="fas fa-caret-left"></i> Previous project', 'misfitdesign'),
				'next_text' => __('Next project <i class="fas fa-caret-right"></i>', 'misfitdesign'),
				'screen_reader_text' => __('Posts navigation', 'misfitdesign')
			)
		);

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	wp_reset_postdata();
	?>
</div>
<?php get_footer();
