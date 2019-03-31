<?php
/**
 * Template Name: Contact Page
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MisfitDesign
 */

get_header();
?>
	<div class="container container--wide v-padding">


	<div id="primary" class="content-area">
		<main id="main" class="site-main contact-wrapper">

		<div class="contact-info">
			<h2 class="contact-info__title">Interested in working together?</h2>
			<p class="contact-info__phone">+34 684 188 301</p>
			<a class="contact-info__email" href="mailto:mario@misfitdesign.hr">mario@misfitdesign.hr</a>
			<p class="contact-info__address">07800, Ibiza</p>
			<h2 class="contact-info__subtitle">Let's connect!</h2>
			<ul class="contact-info__social-links">
				<li><a href="https://www.facebook.com/misfitdsgn"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/misfit.design"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://dribbble.com/misfit_design"><i class="fab fa-dribbble"></i></a></li>
			</ul>
		</div>

		<div class="contact-form">
		<h2 class="contact-info__title">Let's talk!</h2>
			<?php
				while ( have_posts() ) :
					the_post();

					the_content();

				endwhile; // End of the loop.
			?>		
		</div>		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
