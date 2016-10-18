<?php
/**
 *
 * Template Name: Homepage
 * 
 * The template for the front page.
 *
 * This is the template that displays the homepage.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_willms_dot_com
 */

get_header(); ?>

	<div id="primary" class="content-area wrapper_outer">
		<main id="main" class="wrapper_inner" role="main">
			
			<!-- Get loop for portfolio items -->
			<?php get_template_part('template-parts/loop','portfolio-items'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();