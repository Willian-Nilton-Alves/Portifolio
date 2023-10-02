<?php
/**
 *
 * @package XPro Code Boilerplate
 */

get_header();
?>

    <main id="primary" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();

//            if( !is_home() && !is_front_page() ){
            // if( get_field('display_native_title_and_content') ){
            // }

            include_once('pagebuilder.php');
            
        endwhile; // End of the loop.
        ?>
	</main><!-- #main -->
    
<?php
get_footer();
