<?php

/**
 * The template for displaying 404 pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */


get_header();?>

	<article class="content px-3 py-5 p-md-5">

		<h1>Page Not Found</h1>

        <?php get_search_form();?>

		<?php the_posts_pagination();?>

	</article>

<?php get_footer(); ?>