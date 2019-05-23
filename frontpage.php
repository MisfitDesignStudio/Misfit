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

	<!-- ===================================== -->
	<?php get_template_part('template-parts/content', 'home-hero'); ?>

	<!-- ===================================== -->
	<?php get_template_part('template-parts/content', 'home-projects'); ?>

	<!-- =============================== -->
	<?php get_template_part('template-parts/content', 'home-blogposts'); ?>

	<!-- =============================== -->
	<?php get_template_part('template-parts/content', 'home-woo'); ?>

	<!-- =============================== -->
	<?php get_template_part('template-parts/content', 'newsletter'); ?>

	<?php
	get_footer();
