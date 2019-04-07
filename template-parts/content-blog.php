<?php
/**
 * Template part for displaying blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MisfitDesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
	<a href="<?php the_permalink(); ?>" class="blog-post-card">

		<div class="blog-post-card__image">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
		</div>

		<h1 class="blog-post-card__title"><?php the_title(); ?><span>Posted on <?php echo get_the_date(); ?></span></h1>

		<div class="blog-post-card__content">
			<p class="blog-post-card__excerpt"><?php echo wp_trim_words(get_the_content(), 10) ?></p>
			<object><a href="<?php the_permalink(); ?>" class="btn btn--xs btn--secondary--white">Continue reading</a></object>
		</div>
	</a>
</article><!-- #post-<?php the_ID(); ?> -->