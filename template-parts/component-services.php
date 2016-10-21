<?php
// check if the flexible content field has rows of data
if( have_rows('services_available_options') ):

	$services_counter = 0;
	$add_these_classes;

	echo "<section class='max-width flexbox__display-flex'>";
    
    // loop through the rows of data
    while ( have_rows('services_available_options') ) : the_row();
        
        $services_counter++;

        if ($services_counter % 2 == 0) {
        	$add_these_classes = 'background__color-orange';
        } else {
        	$add_these_classes = 'background__color-grey';
        }

        echo "<section class=' flexbox__display-flex flexbox__flex-column flexbox__space-between wrapper__services-" . $services_counter . ' ' . $add_these_classes . "'>";

        echo "<header>";

        if( $get_title = get_sub_field('service_title') ):
        	echo '<h3 class="para__align-center">' . $get_title . '</h3>';
        endif;

        if( $get_subtitle = get_sub_field('service_subtitle') ):
        	echo '<h4 class="para__align-center">' . $get_subtitle . '</h4>';
        endif;

        echo "</header>";

        echo "<article>";
        
        if( $get_desc = get_sub_field('service_desc') ):
        	// echo '<div>' . $get_desc . '</div>';
        	echo $get_desc;
        endif;

        if($get_img_url = get_sub_field('service_image') ):
        	// echo <img src="' .$get_img_url . '">'; 
        endif;

    	echo "</article>";

    	echo "<aside class='flexbox__flex-end'>";
    	// TODO: add the button link + text back into variables that echo correctly
        if(get_sub_field('service_button_text') && get_sub_field('service_button_url')):
        	echo '<a href="' . get_sub_field('service_button_url') . '" class="para__align-center button button__large-white">' . get_sub_field('service_button_text') . '</a>';
        endif;
        echo "</aside>";

        echo "</section>"; // END .wrapper__services

    endwhile;
    echo "</section>"; // END This is the parent for the entire section

else :
    // no layouts found
endif;

?>