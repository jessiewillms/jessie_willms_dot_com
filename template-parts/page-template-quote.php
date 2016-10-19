<?php
// check if the flexible content field has rows of data
if( have_rows('page_builder_flexible_content') ):

     // loop through the rows of data
    while ( have_rows('page_builder_flexible_content') ) : the_row();

        if( get_sub_field('quote_quotation') ):

        	echo the_sub_field('quote_quotation');

        endif;

        if( get_sub_field('quote_attribution') ): 

        	echo the_sub_field('quote_attribution');

        endif;


    endwhile;

else :
    // no layouts found
endif;

?>