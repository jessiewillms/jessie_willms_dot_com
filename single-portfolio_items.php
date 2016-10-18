<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package jessie_willms_dot_com
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="wrapper_outer" role="main">

		<?php
		while ( have_posts() ) : the_post();

			// get_template_part( 'template-parts/content', get_post_format() );

			get_template_part( 'template-parts/content', 'portfolio-info' );

			the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();