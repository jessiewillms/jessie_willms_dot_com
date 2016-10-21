<?php
// check if the flexible content field has rows of data
if( have_rows('page_builder_flexible_content') ):
     // loop through the rows of data
    while ( have_rows('page_builder_flexible_content') ) : the_row();

        if( get_sub_field('option_to_add_contact_form') ):

            echo "string";
            echo the_sub_field('option_to_add_contact_form');

        endif;
    endwhile;
else :
    // no layouts found
endif; ?>

<section class="portfolio_items">
        <?php 
        if( have_rows('site_contact_form_link','option') ):
        echo "<section class='background__color-light-grey'>";

            while( have_rows('site_contact_form_link','option') ) : the_row();
                
                if ($get_contact_form_title = get_sub_field('contact_form_title','option')) {
                    echo '<h2 class="para__align-center">' . $get_contact_form_title . '</h2>';
                }

                if ($get_contact_form_subtitle = get_sub_field('contact_form_subtitle','option')) {
                    echo '<p class="para__align-center">' . $get_contact_form_subtitle . '</p>';
                }

                if ($get_contact_form_subtitle = get_sub_field('contact_form_page_link','option')) {
                    echo "<a href='" . $get_contact_form_subtitle . "' class='para__align-center button button__large-blue'>Contact</a>";
                }
                
            endwhile;
        echo "</section>";
        endif;
        ?>
</section>