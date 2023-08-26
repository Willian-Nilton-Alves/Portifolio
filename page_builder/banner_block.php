<?php

//FIXME: separar os layouts em arquivos e SCSS diferentes

// Exit if accessed directly.
defined('ABSPATH') || exit;

// wp_enqueue_script('banner-block');

?>

<?php
switch( get_sub_field('design_layout') ){

    case 1 :{
        get_template_part( 'page_builder/banner_block', 'layout01' );
    } break;

    case 2 :{
        get_template_part( 'page_builder/banner_block', 'layout02' );
    } break;

}//switch
?>