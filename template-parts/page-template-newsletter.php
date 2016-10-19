<?php
// check if the flexible content field has rows of data
if( have_rows('page_builder_flexible_content') ):

     // loop through the rows of data
    while ( have_rows('page_builder_flexible_content') ) : the_row();

        if( get_sub_field('newsletter_show_newsletter') ):

        	echo the_sub_field('newsletter_show_newsletter');

        endif


    endwhile;

else :
    // no layouts found
endif;

?>