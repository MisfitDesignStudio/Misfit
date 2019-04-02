<?php
/**
 * Template Name: Portfolio Template
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MisfitDesign
 */

get_header();
?>
<div class="container container--wide v-padding content-sidebar">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="portfolio-page">

				<h1 class="portfolio-page__title"><?php the_title(); ?></h1>

				<div class="card-grid card-grid--portfolio">

					<!-- Custom Query -->
					<?php
        // query arguments 
        $args = array(
          'post_type' => 'project',
          'post_status' => 'publish',
          'posts_per_page' => -1,
          'orderby' => 'rand'
        );

        // the query
        $portfolioPosts = new WP_Query( $args );
        
        // custom loop
        while($portfolioPosts -> have_posts()) : $portfolioPosts -> the_post();
        ?>

					<div class="portfolio-item">
						<img class="portfolio-item__image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						<div class="portfolio-item__overlay">
							<a href="<?php the_permalink(); ?>" class="btn btn--small btn--primary"><?php the_title(); ?></a>
						</div>
					</div>

					<?php 
        //restore original post data
        wp_reset_postdata();

        endwhile;  ?>
				</div>

			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
get_sidebar(); ?>
</div>
<?php get_footer();