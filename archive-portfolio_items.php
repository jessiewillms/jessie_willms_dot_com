<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_willms_dot_com
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="wrapper_outer" role="main">

		<?php get_template_part('template-parts/loop','portfolio-items'); ?>

		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
