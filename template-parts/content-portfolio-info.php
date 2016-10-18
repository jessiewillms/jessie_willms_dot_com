<?php 
	$portfolio_client_name = get_field('portfolio_client_name');
	$portfolio_client_name_other = get_field('portfolio_client_name_other');
	$portfolio_client_url = get_field('portfolio_client_url');
	$portfolio_url = get_field('portfolio_url');
	$portfolio_short_desc = get_field('portfolio_short_desc');

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

<?php if (is_single() ) : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php endif ?>

	<header class="portfolio-header">
		
		<div class="portfolio-image">
			<img src="<?php echo $thumb_url; ?>" alt="">
		</div>

		<h1 class="portfolio-title"><?php the_title(); ?></h1>
		
	</header>
	
<?php if ( !empty($portfolio_client_name) ): ?>
	<!-- section details -->
	<section class="portfolio-details">
		<?php 
			$portfolio_client_name ? false : true;
			echo '<h3>' . esc_html__($portfolio_client_name) . '</h3>';
		?>

		<?php 
			$portfolio_client_name_other ? false : true;
			echo '<p>' . esc_html__($portfolio_client_name_other) . '</p>';
		?>

		<?php 
			$portfolio_client_url ? false : true;
			echo '<p>' . esc_html__($portfolio_client_url) . '</p>';
		?>

		<!-- Short description (text area) -->
		<?php 
			$portfolio_short_desc ? false : true;
			echo $portfolio_short_desc;
		?>

	</section>
<?php endif ?>

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


<section class="portfolio-details">
	<!-- Portfolio project type -->
	<?php 
		$portfolio_project_type ? false : true;
		echo '<section>' . esc_html__($portfolio_project_type) . '</section>';
	?> 

	<?php 
		$portfolio_project_type_other ? false : true;
		echo '<section class="abc">' . esc_html__($portfolio_project_type_other) . '</section>';
	?>

	<!-- Awards & nominations -->
	<?php 
		$project_award_name ? false : true;
		echo '<section>' . esc_html__($project_award_name) . '</section>';
	?>

	<?php 
		$project_awards ? false : true;
		echo '<section>' . esc_html__($project_awards) . '</section>';
	?>

	<?php 
		$project_awards_desc ? false : true;
		echo '<section>' . $project_awards_desc . '</section>';
	?>

	<?php 
		$project_awards_url ? false : true;
		echo '<section>' . esc_url($project_awards_url) . '</section>';
	?>
</section>


<?php if (is_single() ) : ?>
	</article><!-- #post-## -->
<?php endif ?>
