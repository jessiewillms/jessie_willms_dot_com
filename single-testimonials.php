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

			get_template_part( 'template-parts/content', get_post_format() );

			$testimonial_name 				= get_field('testimonials_name');
			
			$testimonial_position_current 	= get_field('testimonials_position_current');
			$testimonial_company_current 	= get_field('testimonials_company_current');

			$testimonials_company_previous 	= get_field('testimonials_company_previous');
			$testimonials_position_previous	= get_field('testimonials_position_previous');

			$testimonial_linkedin = get_field('testimonials_linkedin');


			// name + linkedin url
			if ($testimonial_linkedin != "" && $testimonial_name != "") {
				echo '<a href="' . esc_url($testimonial_linkedin)  . '">' . $testimonial_name . '</a>';
			} elseif ($testimonial_linkedin == "" && $testimonial_name != "") {
				echo $testimonial_name;
			}

			// if current, position and title
			if ($testimonial_position_current != "" && $testimonial_company_current != "") {
				echo $testimonial_position_current . ', ' . $testimonial_company_current;
			} elseif ($testimonial_position_current == "" && $testimonial_company_current != "") {
				echo $testimonial_company_current;
			} elseif ($testimonial_position_current != "" && $testimonial_company_current == "") {
				echo $testimonial_position_current;
			}

			// if previous, position and title
			if ($testimonials_position_previous != "" && $testimonials_company_previous != "") {
				echo $testimonials_position_previous . ', ' . $testimonials_company_previous;
			} elseif ($testimonials_position_previous == "" && $testimonials_company_previous != "") {
				echo $testimonials_company_previous;
			} elseif ($testimonials_position_previous != "" && $testimonials_company_previous == "") {
				echo $testimonials_position_previous;
			}



		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
