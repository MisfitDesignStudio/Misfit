<?php
/**
 * Template part for displaying blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MisfitDesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-blog-post'); ?>>

  <div class="single-blog-post__image">
		<?php if(has_post_thumbnail()) : ?>
		 <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" ">
		<?php else : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/blog-post.jpg" alt="">
		<?php endif; ?>
    
  </div>

	<header class="single-blog-post__header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="single-blog-post__title">', '</h1>' );
		else :
			the_title( '<h2 class="single-blog-post__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="single-blog-post__meta">
				<?php
				misfitdesign_posted_on();
				misfitdesign_posted_by();
				?>
			</div><!-- .single-blog-post__meta -->
		<?php endif; ?>
	</header><!-- .single-blog-post__header -->

	

	<div class="single-blog-post__content">
		<?php
    the_content();

		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'misfitdesign' ),
		// 	'after'  => '</div>',
		// ) );
		?>
	</div><!-- .single-blog-post__content -->

	<footer class="single-blog-post__footer">
		<?php misfitdesign_entry_footer(); ?>
	</footer><!-- .single-blog-post__footer -->
</article><!-- #post-<?php the_ID(); ?> -->
