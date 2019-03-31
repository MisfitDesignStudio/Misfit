<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MisfitDesign
 */

get_header();
?>
	<?php 
		if(is_page(37) OR is_page(36)) :
	?>
	<div class="container container--wide v-padding">
	<?php 
		else :
	?>
	<div class="container container--wide v-padding content-sidebar">
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
 if(is_page(37) OR is_page(36)) : ?>
 </div>
 <?php else : ?>
	</div>
	<?php
get_sidebar();
 endif;
?>

<?php get_footer();
