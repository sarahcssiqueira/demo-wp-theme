<?php
/**
 * The template for displaying static pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<?php get_header();?>

	<article class="content px-3 py-5 p-md-5">

		<?php if ( have_posts () ) {

				while ( have_posts ()) {

					the_post();
					
					get_template_part( 'template-parts/content' , 'page' );
					
				}
			};?>

	</article>

<?php get_footer();?>