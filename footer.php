<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jessie_willms_dot_com
 */

?>

	</div><!-- #content -->

	<footer id="colophon" role="contentinfo">
		<div class="flexbox__display-flex flexbox__flex-end">
			
			<ul class="flexbox__display-flex">
				<li><a href="/site-credits">Site credits.</a></li>
					<?php 
					    
					if( have_rows('site_social_media','option') ):

					    while( have_rows('site_social_media','option') ) : the_row();
					        
					        $social_media_platform = get_sub_field('social_media_platform','option');
					        $social_media_platform_url = get_sub_field('social_media_url','option');

					        if ($social_media_platform == 'Twitter') {
					        	echo '<i class="fa fa-twitter" aria-hidden="true"></i>';
					        } elseif ($social_media_platform == 'LinkedIn') {
					        	echo '<i class="fa fa-linkedin" aria-hidden="true"></i>';
					        } elseif ($social_media_platform == 'Facebook') {
					        	echo '<i class="fa fa-facebook" aria-hidden="true"></i>';
					        } elseif ($social_media_platform == 'Spotify') {
					        	echo '<i class="fa fa-spotify" aria-hidden="true"></i>';
					        } elseif ($social_media_platform == 'Instagram') {
					        	echo '<i class="fa fa-instagram" aria-hidden="true"></i>';
					        }

					        echo '<li><a href="' . $social_media_platform_url . '">' . $social_media_platform . '</a></li>';

					    endwhile;

					endif;

					?>
				</ul>
		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
