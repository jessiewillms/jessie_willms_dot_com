<?php
/**
 * The template for displaying the contact/about page.
 *
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_willms_dot_com
 */

get_header(); ?>

	<?php get_template_part('template-parts/headline-details') ?>
	<div id="primary" class="_content-area">
		<main id="main" class="_max-width" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article class="flexbox__aligner _max-width">
				<div class="flexbox__aligner-item">
					<?php the_content(); ?>
				</div>
			</article>

			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();