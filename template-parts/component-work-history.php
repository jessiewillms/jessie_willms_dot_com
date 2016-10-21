<?php
// check if the flexible content field has rows of data
if( have_rows('services_available_options') ):

     // loop through the rows of data
    while ( have_rows('services_available_options') ) : the_row();
		echo "<section class='wrapper_inner wrapper_portfolio wrapper_portfolio-5'>";
        
        if( get_sub_field('service_title') ):
        	echo the_sub_field('service_title');
        endif;

        if( get_sub_field('service_subtitle') ):
        	echo the_sub_field('service_subtitle');
        endif;

        if( get_sub_field('service_desc') ):
        	echo the_sub_field('service_desc');
        endif;

        if( get_sub_field('service_image') ):
        	echo the_sub_field('service_image');
        endif;

        if( get_sub_field('service_button_text') ):
        	echo the_sub_field('service_button_text');
        endif;

        if( get_sub_field('service_button_url') ):
        	echo the_sub_field('service_button_url');
        endif;

        echo "</section>";

    endwhile;

else :
    // no layouts found
endif;

?>