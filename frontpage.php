<?php
/**
 * Template Name: Home Page
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Misfit
 */

get_header();
?>

<div id="primary">
	
<section class="hero hero--home drop-shadow">
	<div class="hero__container container">
		<h1 class="hero__title">Hello.</h1>
		<h2 class="hero__tagline">My name is Mario,<br>I'm a designer you've been looking for.</h2>
		<div class="hero__cta">
			<a href="<?php echo get_home_url(); ?>/contact" class="btn btn--primary btn--medium">Let's work together</a>
			<a href="<?php echo get_home_url(); ?>/portfolio" class="btn btn--secondary btn--medium">See my work</a>
		</div>

	</div>
</section>

<!-- ===================================== -->

<?php
// query arguments 
$args = array(
	'post_type' => 'project',
	'post_status' => 'publish',
	'posts_per_page' => 6,
	'orderby' => 'rand'
);

// the query
$portfolioPosts = new WP_Query( $args );

// check if there are posts

if($portfolioPosts->have_posts()) :

?> 
<!-- Home Portfolio section -->
<section class="section-home--portfolio drop-shadow">
	<div class="container v-padding">
		
		<h1 class="portfolio-page__title"><?php echo get_the_title(10); ?></h1>

		<div class="grid-portfolio">
		<?php
		// custom loop
		while($portfolioPosts -> have_posts()) : $portfolioPosts -> the_post();
		?>

			<article class="project-card">

			<a href="<?php the_permalink(); ?>" class="project">

				<div class="project__image">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				</div>

				<h1 class="project__title"><?php the_title(); ?></h1>

				<div class="project__content">
					<p class="project__excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
					<object><a href="<?php the_permalink(); ?>" class="btn btn--small btn--secondary--white">View Project</a></object>
				</div>

			</a>

			</article>

		<?php 
		//restore original post data
		wp_reset_postdata();

		endwhile;  ?>
		</div>
		<a href="<?php echo get_permalink(10); ?>" class="btn btn--medium btn--primary">View entire portfolio</a>
	</div>
</section>
<?php endif; ?>

<!-- =============================== -->
<?php
	$args = array(
		'post_type' => 'product'
		);
	$wooLoopHome = new WP_Query( $args );

	if ( $wooLoopHome->have_posts() ) : ?>

	<section class="section-home--shop drop-shadow">
		<div class="container v-padding">		
			<h1 class="shop-page__title">Latest in the shop!</h1>
			<?php 

			while( have_posts() ) : the_post();
			the_content();
			wp_reset_postdata();
			endwhile;

			?>
			<a href="<?php echo get_permalink(35); ?>" class="btn btn--medium btn--primary">Visit the shop</a>
		</div>
	</section>
<?php endif; ?>

<!-- =============================== -->
<?php get_template_part('template-parts/content', 'newsletter'); ?>

<?php
get_footer();
