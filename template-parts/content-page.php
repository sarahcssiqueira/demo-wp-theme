<?php
/**
 * Template part for displaying the content on static pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

?>

<div class="container">

<div class="post mb-5">
		<div class="media-body">
			 
			<div class="meta mb-1">
                <span class="date">
					<?php the_date();?>
				</span>
                                
			<div class="intro">
				<?php the_content(); ?>
            </div>
		</div>
</div>