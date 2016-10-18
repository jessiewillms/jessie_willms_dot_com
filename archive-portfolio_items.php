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

		<?php
		if ( have_posts() ) : ?>

			<!-- Get the featured image -->
			<?php 
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0];
			?>

			<?php if ( !empty($thumb_url) ): ?>
				<header class="container--header-main flexbox__flex-center flexbox__display-flex flexbox__flex-column" style="background:url('<?php echo $thumb_url; ?>');"">
				<?php
					the_archive_title( '<h2 class="para__align-center">', '</h2>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
				</header><!-- .page-header -->
			<?php endif ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			get_template_part( 'template-parts/content-portfolio-info' ); ?>

			<?php the_field('portfolio_client_name'); ?>

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
