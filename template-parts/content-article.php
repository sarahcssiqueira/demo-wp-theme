<?php
/**
 * Template for Single post
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

?>


<div class="container">
	<header class="content-header">
		<div class="post">
            <span class="date">
                <?php the_date(); ?>
            </span>
            
            <?php the_tags( '<span class="tag"><i class="fa fa-tag"></i>' ,
                            '</span><span class="tag"><i class="fa fa-tag"></i>' ,
                            '</span>');?>

            <span class="comment">
                <a href="#comments"><i class='fa fa-comment'></i>
                    <?php comments_number(); ?>
                </a>
            </span>
        </div>
	</header>


<?php the_content();?>