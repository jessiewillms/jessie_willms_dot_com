<!-- Get the featured image -->
<?php 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
?>

<?php if ( !empty($thumb_url) ): ?>
	
	<section class="container--header-main flexbox__flex-center flexbox__display-flex flexbox__flex-column" style="background:url('<?php echo $thumb_url; ?>');"">

		<div class="wrapper_inner">
			
		
		<h2 class="para__align-center"><?php the_title(); ?></h2>
					
		<?php $get_header_text = get_field('page_subhead'); ?>
		<?php if ($get_header_text): ?>
			<h3 class="para__align-center"><?php echo $get_header_text; ?></h3>
		<?php endif; ?>

		<div class="para__align-center">
			<?php $get_page_text = get_field('page_content'); ?>
			<?php if ($get_page_text): ?>
				<?php echo $get_page_text; ?>
			<?php endif; ?>
		</div>

		</div>
	</section>

<?php endif ?>