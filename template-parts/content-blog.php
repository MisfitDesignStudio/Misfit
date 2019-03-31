<?php
/**
 * Template part for displaying blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MisfitDesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card card--blog-post'); ?>>
	
	<div class="card--blog-post__image">
		<?php if(has_post_thumbnail()) :
		 misfitdesign_post_thumbnail();
		 else : ?>
		 <a href="<?php the_permalink(); ?>" class="post-thumbnail">
			<img src="<?php echo get_template_directory_uri(); ?>/img/blog-post.jpg" alt="">
		 </a>
		<?php endif; ?>
	</div>

	<header class="card--blog-post__header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="card--blog-post__title">', '</h1>' );
		else :
			the_title( '<h2 class="card--blog-post__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="card--blog-post__meta">
				<?php
				misfitdesign_posted_on();
				misfitdesign_posted_by();
				?>
			</div><!-- .card--blog-post__meta -->
		<?php endif; ?>
	</header><!-- .card--blog-post__header -->	

	<div class="card--blog-post__content">
		<?php
		echo wp_trim_words(get_the_content(), 30); ?>
		<br>
		<br>
		<a href="<?php the_permalink(); ?>" class="btn btn--small btn--secondary">Continue reading</a>
		
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'misfitdesign' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .card--blog-post__content -->

	<footer class="card--blog-post__footer">
		<?php misfitdesign_entry_footer(); ?>
	</footer><!-- .card--blog-post__footer -->
</article><!-- #post-<?php the_ID(); ?> -->
