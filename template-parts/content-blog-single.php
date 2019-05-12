<?php
/**
 * @package MisfitDesign
 */

?>

<article class="single-blog-post">

	<h1 class="single-blog-post__title"><?php the_title(); ?></h1>

	<small class="single-blog-post__meta">Posted by <?php the_author(); ?> on <?php the_date(); ?> in: <span><?php the_category(', '); ?></span></small>


	<div class="single-blog-post__hero">
		<?php if (has_post_thumbnail()) : ?>
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=" ">
		<?php else : ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/blog-post.jpg" alt="">
		<?php endif; ?>
	</div>

	<div class="single-blog-post__content">
		<?php the_content(); ?>
	</div>

</article>