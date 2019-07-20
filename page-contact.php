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

<div class="page-split">

	<div class="page-split__image">
		<img src="<?php echo get_template_directory_uri(); ?>/img/contact-bg.svg" alt="">
	</div>

	<div class="page-split__form">
		<h1 class="page-title">Let's talk!</h1>
		<p class="page-subtitle">Get in touch for a quote, help or just to say hi!</p>
		<i class="page-icon fa fa-envelope"></i><a href="mailto:mario@misfitdesign.hr" class="page-link">mario@misfitdesign.hr</a>
		<div class="contact-page__social-buttons">
			<a href="https://www.facebook.com/misfitdsgn" class="contact__social__link"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/misfit.design" class="contact__social__link"><i class="fab fa-instagram"></i></a>
			<a href="https://dribbble.com/misfit_design" class="contact__social__link"><i class="fab fa-dribbble"></i></a>
		</div>
		<div class="contact-page__form">
			<?php echo do_shortcode('[contact-form-7 id="124" title="Main Contact Form"]'); ?>
		</div>
	</div>

</div>

<?php

get_footer();
