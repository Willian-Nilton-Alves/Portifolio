<?php

if( have_rows('page_builder', get_the_ID()) ){

	while ( have_rows('page_builder', get_the_ID()) ) : the_row();

        switch ( get_row_layout() ) {
            
            case 'banner_block':{
                include('page_builder/banner_block.php');
            } break;

            default:{
                the_content();
            } break;

        }            
        
    endwhile;
	
}

?>