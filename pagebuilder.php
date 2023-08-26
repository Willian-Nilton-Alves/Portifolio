<?php

if( have_rows('page_builder', get_the_ID()) ){

	while ( have_rows('page_builder', get_the_ID()) ) : the_row();

        switch ( get_row_layout() ) {

            case 'stats_block':{
                include('page_builder/stats_block.php');
            } break;
            
            case 'banner_block':{
                include('page_builder/banner_block.php');
            } break;
            
            case 'media_and_text_block':{
                include('page_builder/media_and_text_block.php');
            } break;
            
            case 'products_block':{
                include('page_builder/products_block.php');
            } break;
            
            case 'accordion_block':{
                include('page_builder/accordion_block.php');
            } break;
            
            case 'contact_us_block':{
                include('page_builder/contact_us_block.php');
            } break;
            
            case 'visit_us_block':{
                include('page_builder/visit_us_block.php');
            } break;
            
            case 'two_columns_block':{
                include('page_builder/two_columns_block.php');
            } break;
            
            case 'title_content_block':{
                include('page_builder/title_content_block.php');
            } break;
            
            case 'content_icons_block':{
                include('page_builder/content_icons_block.php');
            } break;
            
            case 'product_content_block':{
                include('page_builder/product_content_block.php');
            } break;
            
            default:{
                the_content();
            } break;

        }
            
        
    endwhile;
	
}

?>