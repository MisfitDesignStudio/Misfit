<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MisfitDesign
 */

get_header();
?>
<div class="container v-padding">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'blog-single');

		the_post_navigation(
			array(
				'prev_text' => __('<i class="fas fa-caret-left"></i> Older post', 'misfitdesign'),
				'next_text' => __('Newer post <i class="fas fa-caret-right"></i>', 'misfitdesign'),
				'screen_reader_text' => __('Posts navigation', 'misfitdesign')
			)
		);

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</div>
<?php get_footer();
