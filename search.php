<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */
?>


<?php get_header(); ?>

		<article class="content px-3 py-5 p-md-5">

			<?php if ( have_posts () ) {

					while( have_posts () ) {

						the_post();
					
						get_template_part( 'template-parts/content' , 'archive' );
					
				}
			};

            /*if no posts founded show string: nothing found*/
			?>

	    </article>

<?php get_footer(); ?>