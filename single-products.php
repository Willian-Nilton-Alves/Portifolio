<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package XPro Code Boilerplate
 */

wp_enqueue_script('single-product');

get_header();
?>

	<main id="primary" >

		<?php
		while ( have_posts() ) :
			the_post();

            the_breadcrumb();
                        
            $thumbnail = get_the_post_thumbnail_url(  );
            ?>

            <section class="single-product">
                <section class="content-container d-flex flex-column flex-sm-row justify-content-between flexbox-gap-40">

                    <section class="content">

                        <h1>
                            <?=the_title();?>
                        </h1>
                        
                        <p class="description">
                            <?=get_field('excerpt');?>
                        </p>

                        <a href="<?=get_field('button_url');?>" class="button button-primary button-jumbotron">
                            <?=get_field('cta_button');?>
                        </a>

                        <section class="d-flex flex-column flex-sm-row flexbox-gap-30 features">

                            <?php
			                get_template_part( 'template-parts/content', 'products-categories' );                            
                            ?>

                        </section>
                    </section>

                    <section class="image" >

                        <?
                        $images = get_field('gallery');

                        $arr_images = array();
                        if( $images ) {

                            $first_image = "";

                            foreach($images as $image){
                                array_push($arr_images, $image['id']);

                                if( $first_image == ""){
                                    $first_image = $image['url'];
                                }
                            }

                            $images_string = implode( ',', $arr_images );

                            $shortcode = sprintf( '[' . 'gallery ids="%s" columns="4" size="thumbnail" link="file"]', esc_attr($images_string) );

                            echo '<img src="'.$first_image.'" class="image-container" id="image-container" />';
                            echo do_shortcode( $shortcode );
                        } 

                        ?>

                    </section>

                </section>
            </section>

            <section class="single-product">
                <section class="content-container" >
                    <section class="d-flex justify-content-between flex-column-reverse flex-sm-row flexbox-gap-30 " >
                        
                        <section class="image flex-grow-0">
                            <img src="<?=get_field('image_for_product_details');?>" />
                        </section>
                        
                        <section class="content product-details flex-grow-0 ">

                            <h2>Product Details</h2>
                            <p class="description">
                                
                                <?=get_field('product_details'); ?>
                                
                            </p>

                        </section>

                    </section>
                </section>
            </section>

            <?php

            include_once('pagebuilder.php');

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
