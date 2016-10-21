<?php 
	$portfolio_client_name = get_field('portfolio_client_name');
	$portfolio_client_name_other = get_field('portfolio_client_name_other');
	$portfolio_client_url = get_field('portfolio_client_url');
	$portfolio_url = get_field('portfolio_url');
	$portfolio_short_desc = get_field('portfolio_short_desc');

	$portfolio_short_desc_long = get_field('portfolio_short_desc_long');

	// Gallery
	$portfolio_gallery = get_field('portfolio_gallery');

	// Links
	$portfolio_project_type = get_field('portfolio_project_type');
	$portfolio_project_type_other = get_field('portfolio_project_type_other');

	// Awards & nominations
	$project_award_name = get_field('project_award_name');
	$project_awards = get_field('project_awards');
	$project_awards_desc = get_field('project_awards_desc');
	$project_awards_url = get_field('project_awards_url');

	// Featured images
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];

?>

<!--
=================================================
Start Header Section
=================================================
-->
<?php if (is_single() ) : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php endif ?>

	<header class="portfolio-header">
		
		<div class="portfolio-image">
			<img src="<?php echo $thumb_url; ?>" alt="">
		</div>

		<div class="portfolio-title-wrap flexbox__flex-center flexbox__display-flex">
			<h1 class="portfolio-title"><?php the_title(); ?></h1>
		</div>

		
	</header>
	
<!--
=================================================
Start Section Details
=================================================
-->
<?php if ( !empty($portfolio_client_name) ): ?>
	<!--
	=================================================
	Start Parent wrapper
	=================================================
	-->
	<section class="wrapper_portfolio-gallery flexbox__display-flex">
		
		<aside class="wrapper_portfolio wrapper_portfolio-8">
		<?php 
			$portfolio_short_desc ? false : true;
			echo $portfolio_short_desc; // NOTE: this is a text area, no p tags needed
		?>
		</aside><!-- // End description (text area) -->

		<!--
		=================================================
		Start Wrapper for the inside content
		=================================================
		-->
		<article class="wrapper_portfolio-7 wrapper_portfolio__details-inner flexbox__display-flex flexbox__flex-column flexbox__space-between background__color-light-grey">
		<div class="wrapper_portfolio__details-inner-top">
		<?php 
			$portfolio_client_name_other ? false : true;
			echo '<p>Other: ' . esc_html__($portfolio_client_name_other) . '</p>';
		?>

		<!--
		=================================================
		Start Portfolio project type details
		=================================================
		-->
		<?php 
			$portfolio_project_type ? false : true;
			echo '<p>Project type: ' . esc_html__($portfolio_project_type) . '</p>';
		?> 

		<?php 
			$portfolio_project_type_other ? false : true;
			// echo '<p>' . esc_html__($portfolio_project_type_other) . '</p>';
		?>
		</div>
	
		<?php 
			$portfolio_client_url ? false : true;
			echo '<div class="wrapper_portfolio__details-inner-bottom flexbox__flex-end"><a href="' . esc_html__($portfolio_client_url) . '" class="para__align-center button button__large-white">View project</a></div>';
		?>
		</article><!-- // End Parent wrapper -->
	</section><!-- // End parent wrapper -->
<?php endif ?>

<!--
=================================================
Start Portfolio Gallery
=================================================
-->
<?php 
if( $portfolio_gallery ): ?>
    <section class="wrapper_portfolio-gallery">
    <ul class="wrapper_portfolio-content">
    	<?php $counter = 6; ?>
        <?php foreach( $portfolio_gallery as $image ): ?>
        	<?php if ($counter >= 6 && $counter < 9) {
        		$counter++;
        	} else {
        		$counter = 7;
        	} ?>
            <li class="wrapper_portfolio wrapper_portfolio-<?php echo $counter; ?>" style="background:url('<?php echo $image['sizes']['large']; ?>')"">
               <!-- <p>make big</p> -->
            </li>
        <?php endforeach; ?>
    </ul>
    </section>
<?php endif; ?>
<!-- project_award_name -->


<!--
=================================================
Start Long description
=================================================
-->
<?php if ($portfolio_short_desc_long): ?>
	<div class="wrapper_portfolio-long-description para__large">
		<?php echo $portfolio_short_desc_long ?>
	</div>	
<?php endif ?>

<!--
=================================================
Start Project Awards and Nominations
=================================================
-->
	<?php
		if ($project_award_name !== '') {
			echo '<section class="portfolio-details portfolio-details-awards-nomination">';
		}
	?>

	<!-- Awards & nominations -->
	<?php 
		if ($project_award_name) {
			echo '<section>' . esc_html__($project_award_name) . '</section>';
		}
	?>

	<?php 
		if ($project_awards) {
			echo '<section>' . esc_html__($project_awards) . '</section>';
		}
	?>

	<?php 
		if ($project_awards_desc) {
		 	echo '<section>' . $project_awards_desc . '</section>';
		}
	?>

	<?php 
		if ($project_awards_url) {
			echo '<section>' . esc_url($project_awards_url) . '</section>';
		}
	?>
	<?php
	if ($project_award_name !== '') {
		echo '</section>';
	}
?>

<!--
=================================================
Start Related Testimonial
=================================================
-->
<?php 
$posts = get_field('related_testimonial');
if( $posts ): ?>
    <section class="wrapper_portfolio__details-inner ">
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        	<h3 class="para__align-center"><?php the_title(); ?> — <?php the_field('testimonials_name'); ?></h3>
        	<p class="para__align-center"><a href="<?php the_permalink(); ?>">View testimonal for this project</a></p>
        	<?php the_content(); ?>
    <?php endforeach; ?>
    </section>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

<?php if (is_single() ) : ?>
	</article><!-- #post-## -->
<?php endif ?>
