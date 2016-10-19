<?php
/**
 * The template for displaying the contact/about page.
 *
 * Template Name: About
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

			the_content();
			// Get flexible content sections
			get_template_part('template-parts/page-template-quote');
			get_template_part('template-parts/page-template-paragraph');
			get_template_part('template-parts/page-template-work-history');

			// Get Instagram
			// 
			// 17132104.d90570a.fd44edb49b7f4029be199f4429f27144


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();