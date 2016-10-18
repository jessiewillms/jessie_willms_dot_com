<?php 
// WP_Query arguments
$args = array (
	'post_type'              => array( 'portfolio_items' ),
	'posts_per_page'         => '9',
	'order'                  => 'ASC',
	'orderby'                => 'title',
);

// The Query
$get_portfolio_items = new WP_Query( $args );

echo '<section class="wrapper_portfolio-content">';

// The Loop
if ( $get_portfolio_items->have_posts() ) {

	$counter = 0;

	while ( $get_portfolio_items->have_posts() ) {
		
		if ($counter < 6) {
			$counter++;
		} else {
			$counter = 1;
		}

		$get_portfolio_items->the_post();
		
		$thumb_id = get_post_thumbnail_id();
		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
		$thumb_url = $thumb_url_array[0];

		$portfolio_title = '<h2 class="para__align-center"><a href=" ' . get_permalink() . ' ">' . get_the_title() . '</a></h2>';

		$portfolio_hp_inner = '<div class="wrapper_portfolio-inner">' . $portfolio_title . '</div>';

		$portfolio_wrap = '<div class="wrapper_portfolio wrapper_portfolio-' . $counter . '" style="background:url(' . $thumb_url . ');">' . $portfolio_hp_inner . '</div>';

		echo $portfolio_wrap;
	}


}

echo '</section>';

// Restore original Post Data
wp_reset_postdata();
?>

