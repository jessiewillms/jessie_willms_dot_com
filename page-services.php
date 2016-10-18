<?php
/**
 * The template for displaying the contact/about page.
 *
 * Template Name: Services
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_willms_dot_com
 */

get_header(); ?>

	<?php get_template_part('template-parts/headline-details') ?>
	<div id="primary" class="content-area">
		<main id="main" class="container--header max-width" role="main">

			<?php
			while ( have_posts() ) : the_post();

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
