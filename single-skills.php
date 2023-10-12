<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package XPro Code Boilerplate
 */

get_header();
?>


	<main id="primary" class="content-container pages">

		<?php
		while ( have_posts() ) :
			the_post();

			the_title();
			the_field("skill_description");
			the_field("skill_name");
			echo '<img src="'. get_field("skill_image") .'" alt="">';
			include_once('pagebuilder.php');

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
