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
		<main id="main" class="_wrapper_outer" role="main">

		<?php
		while ( have_posts() ) : the_post();

			// get_template_part( 'template-parts/content', get_post_format() );

			get_template_part( 'template-parts/content', 'portfolio-info' );

			echo '<div id="nav-below" class="wrapper_inner post-navigation">';
	        echo previous_post_link('%link', '&larr; %title');
	        echo next_post_link('%link', '%title &rarr;');
	        echo '</div>';

		endwhile; // End of the loop.
		?>

		<?php 
			get_template_part('template-parts/page-template-link-to-contact');
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
