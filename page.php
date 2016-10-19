<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_willms_dot_com
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="wrapper_outer" role="main">

			<?php get_template_part( 'template-parts/headline-details' ); ?>

			<!-- Get the content for the header -->
			<?php 
				$get_sub_header = get_field('page_subhead');
				$page_content = get_field('page_content');
			?>

			<!-- Print the content -->
			<?php if ( !empty($page_content)) : ?>
				<article class="max-width wrapper__inner">
					<?php echo $page_content; ?>
				</article>
			<?php endif; ?>


			

			


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();